<?php

add_action( 'wp_enqueue_scripts', 'za_enqueue_script', 11 );
 
function za_enqueue_script(){
	
	$rb = zipperagent_rb();
	
    $localize = array('ajaxurl'=> admin_url().'admin-ajax.php');
    wp_localize_script('jquery','zipperagent',$localize);
	
	if( function_exists( 'conall_edge_options' ) ){
		$conall_google_api_key = conall_edge_options()->getOptionValue('google_maps_api_key');
	}else{
		$conall_google_api_key="";
	}
		
	$apikey = isset($rb['google']['apikey'])?$rb['google']['apikey']:'';
	$apikey = !empty($conall_google_api_key)?$conall_google_api_key:$apikey;
	
	wp_deregister_script('google_map_api');
	wp_dequeue_script('google_map_api');
	wp_enqueue_script('google_map_api', '//maps.googleapis.com/maps/api/js?sensor=false&libraries=places,drawing&key=' . $apikey, array(), false, true);
}

add_action( 'init', 'cookie_generator' );

function cookie_generator(){
	// session_start();
	
	/* contactId session */
	if( (isset($_SESSION['contactId']) && !empty($_SESSION['contactId'])) || (isset($_COOKIE['contactId']) && !empty($_COOKIE['contactId'])) ){
		$result=isset($_SESSION['contactId'])?$_SESSION['contactId']:zipperagent_get_cookie('contactId');
		$contactIds = $result;
		
		// if( is_array($contactIds) && isset($contactIds[0]) ){
			// $contactIds = $contactIds[0];
		// }
		// print_r( $result );
		// print_r( $_SESSION );
		// print_r( $_COOKIE );
		// print_r( $contactIds );
		
		zipperagent_set_cookie('contactId', $contactIds);
	}
	
	/* userContact session */
	if( (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) || (isset($_COOKIE['userMail']) && !empty($_COOKIE['userMail'])) ){
		$userMail=isset($_SESSION['userMail'])?$_SESSION['userMail']:zipperagent_get_cookie('userMail');
		$contactIds=isset($_SESSION['contactId'])?$_SESSION['contactId']:zipperagent_get_cookie('contactId');
		// $contactIds=is_array($contactIds)?$contactIds[0]:$contactIds;
		$userRemember=isset($_SESSION['userRemember'])?$_SESSION['userRemember']:zipperagent_get_cookie('userRemember');
		
		if( $userRemember ){
			zipperagent_set_cookie('contactId', $contactIds);
			zipperagent_set_cookie('userMail', $userMail);
			zipperagent_set_cookie('userRemember', $userRemember);
		}
		
		$_SESSION['contactId']=$contactIds;
		$_SESSION['userMail']=$userMail;
		$_SESSION['userRemember']=$userRemember;
	}
}

add_action( 'init', 'za_start_session' );
function za_start_session(){
	if(session_id() === "" || (function_exists("session_status") && session_status() === PHP_SESSION_NONE)) {
		session_start();
	}
}

add_action( 'wp_ajax_login_user', 'login_user' );
add_action( 'wp_ajax_nopriv_login_user', 'login_user' );

function login_user(){
    if ( isset($_REQUEST) ) {
        $email = $_REQUEST['username'];
		// $rememberMe = isset($_REQUEST['rememberMe'])?$_REQUEST['rememberMe']:0;
		$rememberMe = 1;
		$check=userContactLogin($email, $rememberMe);
		
		if( $check ){
		
			// $return['result']=$userdata->id;
			$myaccounturl=zipperagent_page_url('property-organizer-edit-subscriber');
			$contactIds = get_contact_id();
			$return['myaccountname']=zipperagent_user_name();
			$return['myaccounturl']=$myaccounturl;
			$return['favorites_url']=add_query_arg( array('menu'=>'my-favorite'), $myaccounturl );
			$return['saved_search_url']=add_query_arg( array('menu'=>'my-search'), $myaccounturl );
			$return['result']=implode(',',$contactIds);
			
			flush_rewrite_rules(); //fix page not found
			
			if(!zipperagent_signup_optional())
				$_SESSION['popup_is_triggered'] = 0; //reset popup state
			
			//add saved cookies to account
			// add_saved_cookies_to_account();
		}else{
			$return['result']=0;
		}
		
		echo json_encode($return);
         
        die();
    }
}

add_action( 'wp_ajax_check_user_logged_in', 'check_user_logged_in' );
add_action( 'wp_ajax_nopriv_check_user_logged_in', 'check_user_logged_in' );

function check_user_logged_in(){
	if ( isset($_REQUEST) ) {
		
		if(getCurrentUserContactLogin()){ //is user logged in
			$return['myaccount_name']=zipperagent_user_name();
			$return['saved_search_count']=zipperagent_get_saved_search_count();
			$return['favorites_count']=zipperagent_get_favorites_count();
			$return['is_login']=1;
		}else{ // if no login
			$return['is_login']=0;
			$return['saved_search_count']=zipperagent_get_saved_search_count();
			$return['favorites_count']=zipperagent_get_favorites_count();
		}
		
		echo json_encode($return);
         
        die();
	}
}

add_action( 'wp_ajax_image_click_count', 'check_image_click_count' );
add_action( 'wp_ajax_nopriv_image_click_count', 'check_image_click_count' );

function check_image_click_count(){
	if ( isset($_REQUEST) ) {
		
		$limit = zipperagent_slider_limit_popup();
		// $count = (int) $_SESSION['za_image_clicked'] += 1;
		$count = (int) $_SESSION['za_image_clicked'] = (int) $_REQUEST['count'];
		
		$return['result']=1;
		$return['count']=$count;
		
		// if($count >= $limit){ //is user logged in
			// $return['result']=$count;
			// $_SESSION['za_image_clicked']=0;
		// }
		
		echo json_encode($return);
         
        die();
	}
}

add_action( 'wp_ajax_trigger_popup', 'set_popup_triggered' );
add_action( 'wp_ajax_nopriv_trigger_popup', 'set_popup_triggered' );

function set_popup_triggered(){
	if ( isset($_REQUEST) ) {
		
		$_SESSION['popup_is_triggered']=1; //popup is already triggered
		
		$return['result']=1;
		
		echo json_encode($return);
         
        die();
	}
}

add_action( 'wp_ajax_close_popup', 'set_popup_closed' );
add_action( 'wp_ajax_nopriv_close_popup', 'set_popup_closed' );

function set_popup_closed(){
	if ( isset($_REQUEST) ) {
		
		$popup_is_closed = (int) isset($_SESSION['popup_is_closed'])?$_SESSION['popup_is_closed']:0;
		$popup_is_closed++;
		$_SESSION['popup_is_closed']=$popup_is_closed; //popup is already triggered
		
		$return['result']=1;
		
		echo json_encode($return);
         
        die();
	}
}

add_action( 'wp_ajax_regist_user', 'regist_user' );
add_action( 'wp_ajax_nopriv_regist_user', 'regist_user' );

function regist_user(){
    if ( isset($_REQUEST) ) {
        $id = $_REQUEST['contactId'];
        $email = $_REQUEST['email'];
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $phone = $_REQUEST['phone'];
		$agent = $_REQUEST['agent'];
		$propertyAlerts = isset($_REQUEST['propertyAlerts'])?"true":"false";;
		$note = $_REQUEST['note'];
		$alertType = $_REQUEST['alertType'] ? $_REQUEST['alertType'] : 'NONE';
		
		//force ID cannot be empty
		/*
		if(!$id){
			 // $contactIds = get_contact_id();
			 
			 // if(!$contactIds){
			$result=zipperagent_run_curl('/api/contact/tempId', array(), 1);
			$contactIds=!is_array($result)?array($result):$result;
			 // }
			 
			$id = implode(',',$contactIds);
		}*/
		
		$vars=array(
			// 'id'=>$id, //disabled
			'email'=>($email),
			// 'emailWork1'=>$email,
			'firstName'=>($firstName),
			'lastName'=>($lastName),
			'phone'=>($phone),			
			// 'phoneOffice'=>$phone,					
			'propertyAlerts'=>($propertyAlerts),			
			'notes'=>($note),
			'alertType'=>$alertType,
		);
		
		if($agent && is_show_agent_list()){
			$vars['assignedTo']=($agent);
		}
		// print_r($vars);
        $result = zipperagent_register_user( $vars );
		// echo "<pre>"; print_r( $result); echo "</pre>";
		//fix array
		// if(is_array($result)){
			// $result=isset($result[0])?$result[0]:'';
		// }
		
		$result=isset($result->status) && $result->status=='SUCCESS'?$result->result:0;
		
		// if there is no id, keep no error appear!
		/*if(!$id){
			$result='SUCCESS';
		}*/
		
		if($result){			
			/* auto login user */		
				// userContactLogin($email);
			
			/* send email (disabled) */
				/*
				$url = add_query_arg( array('action'=>'verify', 'code' => $id), site_url('/thankyou/') );
				$parse = parse_url($url);			
				$headers = 'From: '. get_bloginfo('name') .' <no-reply@'. $parse['host'] .'>';
				$subject="[".get_bloginfo('name')."] Please confirm your email";
				$message="Confirmation url: " . $url;
				// wp_mail($email, $subject, $message, $headers);
				// echo $url;
				// $return['contactId']=$id; */
				
				// echo "<pre>"; print_r($result); echo "</pre>";
			
			
			$myaccounturl=zipperagent_page_url('property-organizer-edit-subscriber');
			
			$return['email']=$email;
			$return['myaccountname']=zipperagent_user_name();
			$return['myaccounturl']=$myaccounturl;
			// $return['thankyouurl']=add_query_arg( array('action'=>'verify', 'code' => $result->id), site_url('/thankyou/') );
			$return['thankyouurl']=add_query_arg( array('email'=>$email), site_url('/thankyou/') );			
			$return['favorites_url']=add_query_arg( array('menu'=>'my-favorite'), $myaccounturl );
			$return['saved_search_url']=add_query_arg( array('menu'=>'my-search'), $myaccounturl );
			$return['result']=$result;
			
			flush_rewrite_rules(); //fix page not found
			
			if(!zipperagent_signup_optional())
				$_SESSION['popup_is_triggered'] = 0; //reset popup state
			
			//add saved cookies to account
			// add_saved_cookies_to_account();
		}else{
			$return['result']=0;
		}
		
		echo json_encode($return);
         
        die();
    }
}

add_action( 'wp_ajax_contact_agent', 'contact_agent' );
add_action( 'wp_ajax_nopriv_contact_agent', 'contact_agent' );

function contact_agent(){
    if ( isset($_REQUEST) ) {
        $contactId = $_REQUEST['contactId'];     
		$note = $_REQUEST['note'];
		$vars=array(		
			'notes'=>$note,			
		);
		
		$note=urlencode($note);
		/* make sure contactId is single value */
		$contactIds = (strpos($contactId, ',')!==false) ? explode(',',$contactId) : $contactId;
		$contactId  = is_array($contactIds) ? $contactIds[0] : $contactId;
		
        $result = zipperagent_run_curl( "/api/note/add2related/contact/{$contactId}?notes={$note}", array(), 1);
		// $result = zipperagent_run_curl( "/api/note/related/add/contact/{$contactId}/", array(), 1, $vars);
		// print_r( $vars);
		// print_r( $result);
		if(!empty($result)){			
			$return['result']=$result;
		}else{
			$return['result']=0;
		}
		
		echo json_encode($return);
         
        die();
    }
}

add_action( 'wp_ajax_search_results_view', 'search_results_view' );
add_action( 'wp_ajax_nopriv_search_results_view', 'search_results_view' );

function search_results_view(){
	
	if ( isset($_REQUEST) ) {
		
		global $requests, $is_ajax, $is_view_save_search;
		
		$requests = $_REQUEST;
		$is_ajax = 1;
		$is_view_save_search = 0;
		
		if(isset($_REQUEST['is_view_save_search']) && !empty($_REQUEST['is_view_save_search'])){
			$is_view_save_search=1;
		}
		
		ob_start();
		
		include ZIPPERAGENTPATH . "/custom/templates/template-search-results.php";
		
		$html=ob_get_clean();
		$result['html']=$html;
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_prop_result_and_pagination', 'prop_result_and_pagination' );
add_action( 'wp_ajax_nopriv_prop_result_and_pagination', 'prop_result_and_pagination' );

function prop_result_and_pagination(){
	
	if ( isset($_REQUEST) ) {
		
		global $requests, $is_ajax, $is_view_save_search;
		
		$requests = $_REQUEST;
		$is_ajax = 1;
		$is_view_save_search = 0;
		
		if(isset($_REQUEST['is_view_save_search']) && !empty($_REQUEST['is_view_save_search'])){
			$is_view_save_search=1;
		}
		
		$vars = $_REQUEST['vars'];
		$page = $_REQUEST['page'];
		$num = $_REQUEST['num'];
		$maxtotal = $_REQUEST['maxlist'];
		$actual_link = $_REQUEST['actual_link'];
		
		$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
		$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;

		if( $maxtotal > 0 && $count > $maxtotal ){ //limit total pages by max total
			$count = $maxtotal;
		}
		
		$result['result']=1;
		$result['html_count']=zipperagent_list_total($count);
		
		$result['html_pagination']=zipperagent_pagination($page, $num, $count, $actual_link);
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_mortgage_calculator_count', 'mortgage_calculator_count' );
add_action( 'wp_ajax_nopriv_mortgage_calculator_count', 'mortgage_calculator_count' );

function mortgage_calculator_count(){
	
	if ( isset($_REQUEST) ) {
		
		extract($_REQUEST);
				
		$numbercount=0;
		$interest_enabled=0; $tax_enabled=0; $hoadues_enabled=0; $homeowners_enabled=0; $mortgage_enabled=0;
		$total_price=0;
		
					
		$price_downpayment = ( $homeprice * $downpaymentpercent / 100 ) / 12;
		// $total_price+=$price_downpayment;
			
		if($interestrate){
			
			$price_interest = ( $homeprice / 12 * $interestrate / 100 ) - $price_downpayment;
			$price_interest = $price_interest < 0 ? 0 : $price_interest;
			$total_price+=$price_interest;
			
			$interest_enabled=1;
			$numbercount++;
		}
		if($taxespercent){
			
			$price_taxes = $homeprice / 12 * $taxespercent / 100;
			$price_taxes = $price_taxes < 0 ? 0 : $price_taxes;
			$total_price+=$price_taxes;
			
			$tax_enabled=1;
			$numbercount++;
		}
		if($hoadues){
			$hoadues = str_replace( "$", "", $hoadues);
			$price_hoa_dues = (int) $hoadues;
			$price_hoa_dues = $price_hoa_dues < 0 ? 0 : $price_hoa_dues;
			$total_price+=$price_hoa_dues;
			
			$hoadues_enabled=1;
			$numbercount++;
		}
		if($homeownerspercent){
			
			$price_homeowners = $homeprice / 12 * $homeownerspercent / 100;
			$price_homeowners = $price_homeowners < 0 ? 0 : $price_homeowners;
			$total_price+=$price_homeowners;
			
			$homeowners_enabled=1;
			$numbercount++;
		}
		if($insurancepercent){
			
			$price_mortgage = ($homeprice / 12 * $insurancepercent / 100) - ($price_downpayment * $insurancepercent / 100);
			$price_mortgage = $price_mortgage < 0 ? 0 : $price_mortgage;
			$total_price+=$price_mortgage;
			
			$mortgage_enabled=1;
			$numbercount++;
		}
		
		$total_price = $total_price < 0 ? 0 : $total_price; //cannot less than zero
		
		switch($loantype){
			case "30yrs":
					$loan_text='30 Year Fixed';
				break;
			case "15yrs":
					$loan_text='15 Year Fixed';
				break;
			case "5-1arm":
					$loan_text='5/1 ARM';
				break;
		}
		
		$interest_text=number_format_i18n( $interestrate, 3 );
		
		$result['mortgage_total']= zipperagent_currency() . number_format_i18n( $total_price, 0 ). ' per month';
		$result['mortgage_interest']="{$loan_text}, {$interest_text}% Interest";
		
		$total_bar = $price_interest + $price_taxes + $price_hoa_dues + $price_homeowners + $price_mortgage;
		$bar_interest = $price_interest / $total_bar * 100;
		$bar_tax = $price_taxes / $total_bar * 100;
		$bar_hoadues = $price_hoa_dues / $total_bar * 100;
		$bar_homeowners = $price_homeowners / $total_bar * 100;
		$bar_mortgage = $price_mortgage / $total_bar * 100;
		
		ob_start();
		?>	
		<?php if((float)$price_interest): ?>
		<div class="mortgage-color" id="principal-color" style="width: <?php echo $bar_interest; ?>%;"></div>
		<?php endif; ?>
		<?php if((float)$price_taxes): ?>
		<div class="mortgage-color" id="property-color" style="width: <?php echo $bar_tax; ?>%;"></div>
		<?php endif; ?>
		<?php if((float)$price_hoa_dues): ?>
		<div class="mortgage-color" id="hoadues-color" style="width: <?php echo $bar_hoadues; ?>%;"></div>
		<?php endif; ?>
		<?php if((float)$price_homeowners): ?>
		<div class="mortgage-color" id="insurance-color" style="width: <?php echo $bar_homeowners; ?>%;"></div>
		<?php endif; ?>
		<?php if((float)$price_mortgage): ?>
		<div class="mortgage-color" id="mortgage-color" style="width: <?php echo $bar_mortgage; ?>%;"></div>
		<?php endif; ?>
		<?php
		$result['mortgage_bar']=ob_get_clean();	
		
		ob_start();
		?>		
		<div class="row">
			<?php if((float)$price_interest): ?>
			<div class="col-xs-12 col-sm-6  mb-6">
				<div class="mg-principal">Principal and Interest<span class="mg-price"><?php echo zipperagent_currency() . number_format_i18n( $price_interest, 0 ) ?></span></div>
			</div>
			<?php endif; ?>
			<?php if((float)$price_taxes): ?>
			<div class="col-xs-12 col-sm-6  mb-6">
				<div class="mg-property">Property Taxes<span class="mg-price"><?php echo zipperagent_currency() . number_format_i18n( $price_taxes, 0 ) ?></span></div>
			</div>
			<?php endif; ?>
			<?php if((float)$price_hoa_dues): ?>
			<div class="col-xs-12 col-sm-6  mb-6">
				<div class="mg-hoadues">HOA Dues<span class="mg-price"><?php echo zipperagent_currency() . number_format_i18n( $price_hoa_dues, 0 ) ?></span></div>
			</div>
			<?php endif; ?>
			<?php if((float)$price_homeowners): ?>
			<div class="col-xs-12 col-sm-6  mb-6">
				<div class="mg-insurance">Homeowners' Insurance<span class="mg-price"><?php echo zipperagent_currency() . number_format_i18n( $price_homeowners, 0 ) ?></span></div>
			</div>
			<?php endif; ?>
			<?php if((float)$price_mortgage): ?>
			<div class="col-xs-12 col-sm-6  mb-6">
				<div class="mg-mortgage">Mortgage Insurance<span class="mg-price"><?php echo zipperagent_currency() . number_format_i18n( $price_mortgage, 0 ) ?></span></div>
			</div>
			<?php endif; ?>
		</div>
		<?php
		$result['mortgage_detail']=ob_get_clean();
		
		$result['result']=1;
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_properties_view', 'display_properties_view' );
add_action( 'wp_ajax_nopriv_properties_view', 'display_properties_view' );

function display_properties_view(){
	
	if ( isset($_REQUEST) ) {
		
		global $requests, $is_ajax, $type;
		global $html, $sidebar;
		
		$requests = $_REQUEST;
		$type = $_REQUEST['view_type'];
		$is_ajax = 1;
		
		include ZIPPERAGENTPATH . "/custom/templates/template-generateView.php";
		$result['html']=$html;
		$result['sidebar']=$sidebar;
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_property_detail', 'display_property_detail' );
add_action( 'wp_ajax_nopriv_property_detail', 'display_property_detail' );

function display_property_detail(){
	
	if ( isset($_REQUEST) ) {
		
		global $single_property, $property_cache;
		
		$property_cache=false;
		$contactIds=get_contact_id();			
		$listingId = isset($_REQUEST['listingId'])?$_REQUEST['listingId']:'';
		$searchId = isset($_REQUEST['searchId'])?$_REQUEST['searchId']:'';
		$single_property=get_single_property( $listingId, implode(',',$contactIds), $searchId );
		
		//get source details
		$source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'' ), 'detail') : false;
		
		//get agent
		$agent=array();
		if( isset( $single_property->listagent ) || isset( $single_property->saleagent ) ){
			$mlsid = isset($single_property->saleagent) ? $single_property->saleagent : '';
			if($mlsid)
				$agent = zipperagent_get_agent($mlsid);
			
			if(!$agent){
				$mlsid = isset($single_property->listagent) ? $single_property->listagent : '';
				if($mlsid)
					$agent = zipperagent_get_agent($mlsid);
			}// $agent = zipperagent_get_agent("G0003031");
			// $agent = zipperagent_get_agent("BB981188");
		}
		
		$is_doing_ajax=1;
		
		ob_start();
		if(zipperagent_detailpage_group()=='mlspin' || is_zipperagent_new_detail_page())			
			include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-defaultDetail.php';
		else
			include ZIPPERAGENTPATH . '/custom/templates/detail/template-defaultDetail.php';
		ob_clean(); //clear buffer
		
		$htmls['header_section']=$header_section;
		$htmls['description_section']=$description_section;
		$htmls['sidebar_section']=$sidebar_section;
		$htmls['bottom_section']=$bottom_section;
		$htmls['print_section']=$print_section;
		
		$htmls = zipperagent_property_fields($single_property, $htmls);	
		
		$result['header_section']=$htmls['header_section'];
		$result['description_section']=$htmls['description_section'];	
		$result['sidebar_section']=$htmls['sidebar_section'];
		$result['bottom_section']=$htmls['bottom_section'];
		$result['print_section']=$htmls['print_section'];
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_save_search_result', 'save_search_result' );
add_action( 'wp_ajax_nopriv_save_search_result', 'save_search_result' );

function save_search_result(){
	
	if ( isset($_REQUEST) ) {
		
		$vars = $_REQUEST['vars'];
		$isLogin = $_REQUEST['isLogin'];
		
		if($isLogin){
			
			$result = zipperagent_save_search($vars);
			$searchId=isset($result['id'])?$result['id']:( isset($result[0]->id)?$result[0]->id:'' );
			
			//reset saved search count
			if($searchId){				
				$contactIds = $vars['contactId'];
				$contactIds_key = str_replace(',','_',$contactIds);
				$option_key = $contactIds_key . '_saved_search_count';
				update_option( $option_key, '' );
			}
			
			$array['result']=$searchId;			
			$array['saved_search_count']=(integer) zipperagent_get_saved_search_count();
		}else{
						
			$count=zipperagent_save_search_cookie($vars);
			
			$array['result']=$count;
			$array['saved_search_count']=$count;
		}		
		
		echo json_encode($array);
		// echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_update_search_result', 'update_search_result' );
add_action( 'wp_ajax_nopriv_update_search_result', 'update_search_result' );

function update_search_result(){
	
	if ( isset($_REQUEST) ) {
		
		$criteria = isset($_REQUEST['criteria'])?proces_crit($_REQUEST['criteria']):array();
		$searchId = $_REQUEST['id'];
		
		$vars = zipperagent_run_curl( "/api/mls/search/{$searchId}" );
		
		if($vars){
			$vars['criteria']=$criteria;
		}
		$result = (object) zipperagent_run_curl( "/api/mls/updateSearch/", array(), 1, $vars, 1 );
		// echo "<pre>"; print_r($vars); echo "</pre>";
		// echo "<pre>"; print_r($result); echo "</pre>";
		$array['result']=$array['result']=isset($result->status) && $result->status=='SUCCESS'?$searchId:0;
		// $array['result']=1;
		
		echo json_encode($array);
		// echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_schedule_show', 'schedule_show_func' );
add_action( 'wp_ajax_nopriv_schedule_show', 'schedule_show_func' );

function schedule_show_func(){
	
	if ( isset($_REQUEST) ) {
		
		$listingId = isset($_REQUEST['listingId'])?$_REQUEST['listingId']:'';
		$contactIds = isset($_REQUEST['contactId'])?$_REQUEST['contactId']:'';
		// $contactIds = is_array($contactIds)?$contactId[0]:$contactIds;
		$assignedTo = isset($_REQUEST['agent'])?$_REQUEST['agent']:'';
		$prefTime = isset($_REQUEST['prefTime'])?$_REQUEST['prefTime']:'';
		$prefDate = isset($_REQUEST['prefDate'])?$_REQUEST['prefDate']:'';
		// $prefDate = "12/12/2017";
		$slot = isset($_REQUEST['slot'])?$_REQUEST['slot']:'';
		$message = isset($_REQUEST['message'])?$_REQUEST['message']:'';
		
		$date = date('Y-m-d', strtotime("$prefDate"));
		$time = date('H:i:s', strtotime("$prefTime"));
		// $when = strtotime( date('Y-m-d H:i:s', strtotime("$date $time")) );
		// $format = 'Y-m-d H:i:s';
		$format = 'Y-m-d';
		$tz = zipperagent_timezone();
		// $datetime = DateTime::createFromFormat($format, "$date $time", new DateTimeZone($tz));
		$datetime = DateTime::createFromFormat($format, "$date", new DateTimeZone($tz));
		// echo "Format: $format; " . $datetime->format('Y-m-d H:i:s') . "\n";
		$when = $datetime->getTimestamp();
		$when = $when * 1000; // convert to long Java
		// echo "when: ". $when. "<br />";
		$crit = isset( $_REQUEST['crit'] ) ? $_REQUEST['crit']:array();
		$searchId = isset($_REQUEST['searchId'])?$_REQUEST['searchId']:'';
		
		if(!sizeof($crit)){
			$rb = zipperagent_rb();
			$asrc = $rb['web']['asrc'];
			$crit=array(
				'asts'=>zipperagent_active_status(),
				'asrc'=>$asrc,
			);
		}
		$result = zipperagent_schedule_show($listingId, $contactIds, $assignedTo, $when, $slot, $message, $crit, $searchId);
		// echo "<pre>"; print_r( $_REQUEST ); echo "</pre>";
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		// $array['result']=isset($result->criteria)?$result->criteria:0;
		$array['result']=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		// $array['result']=1;
		
		echo json_encode($array);
         
        die();
    }
}

add_action( 'wp_ajax_request_info', 'request_info_func' );
add_action( 'wp_ajax_nopriv_request_info', 'request_info_func' );

function request_info_func(){
	
	if ( isset($_REQUEST) ) {
		
		$listingId = isset($_REQUEST['listno'])?$_REQUEST['listno']:'';
		$contactIds = isset($_REQUEST['contactId'])?$_REQUEST['contactId']:'';
		// $contactIds = is_array($contactIds)?$contactIds[0]:$contactIds;
		$login = isset($_REQUEST['login'])?$_REQUEST['login']:'';
		$question = isset($_REQUEST['question'])?$_REQUEST['question']:'';
		$crit = isset( $_REQUEST['crit'] ) ? $_REQUEST['crit']:array();
		$searchId = isset($_REQUEST['searchId'])?$_REQUEST['searchId']:'';
		$result = zipperagent_request_info($listingId, $contactIds, $login, $question, $crit, $searchId);
		// echo "<pre>"; print_r( $_REQUEST ); echo "</pre>";
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		// $array['result']=isset($result->criteria)?$result->criteria:0;
		$array['result']=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		// $array['result']=$result?1:0;
		// $array['result']=1;
		
		echo json_encode($array);
         
        die();
    }
}

add_action( 'wp_ajax_share_email', 'share_email_func' );
add_action( 'wp_ajax_nopriv_share_email', 'share_email_func' );

function share_email_func(){
	
	if ( isset($_REQUEST) ) {
		
		$listingId = isset($_REQUEST['listingId'])?$_REQUEST['listingId']:'';
		$contactIds = isset($_REQUEST['contactId'])?$_REQUEST['contactId']:'';
		$recepient_name = isset($_REQUEST['recepient_name'])?$_REQUEST['recepient_name']:'';
		$recepient_emails = isset($_REQUEST['recepient_emails'])?$_REQUEST['recepient_emails']:'';
		$email_subject = isset($_REQUEST['email_subject'])?$_REQUEST['email_subject']:'';
		$default_body = isset($_REQUEST['default_body'])?$_REQUEST['default_body']:'';
		$email_body = isset($_REQUEST['email_body'])?$_REQUEST['email_body']:'';
		$send_copy = isset($_REQUEST['send_copy'])?$_REQUEST['send_copy']:0;
		
		
		// $recepient_emails=array_map('trim',$recepient_emails);
		
		//convert to array
		$recepient_emails = explode(',',$recepient_emails);
		
		$body = $default_body. "<br /><br />" . $email_body;
		$result = zipperagent_share_email($listingId, $contactIds, $recepient_name, $recepient_emails, $email_subject, $body, $send_copy);
		// echo "<pre>"; print_r( $_REQUEST ); echo "</pre>";
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		$array['result']=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		
		echo json_encode($array);
         
        die();
    }
}

add_action( 'wp_ajax_save_as_favorite', 'do_save_as_favorite' );
add_action( 'wp_ajax_nopriv_save_as_favorite', 'do_save_as_favorite' );

function do_save_as_favorite(){
	
	if ( isset($_REQUEST) ) {
		
		$listingId = isset($_REQUEST['listingId'])?$_REQUEST['listingId']:'';
		$contactIds = isset($_REQUEST['contactId'])?$_REQUEST['contactId']:'';
		$isLogin = isset($_REQUEST['isLogin'])?$_REQUEST['isLogin']:'';
		// $contactIds = is_array($contactIds)?$contactIds[0]:$contactIds;
		$crit      = isset( $_REQUEST['crit'] ) ? $_REQUEST['crit']:array();
		$searchId  = isset($_REQUEST['searchId'])?$_REQUEST['searchId']:'';
		
		if($isLogin){
			$result = zipperagent_save_property($listingId, $contactIds, true, $crit, $searchId);
			
			//reset favorites count
			if(isset($result->status) && $result->status=='SUCCESS'){
				if($isLogin){
					$contactIds_key = str_replace(',','_',$contactIds);
					$option_key = $contactIds_key . '_favorites_count';
					update_option( $option_key, '' );
				}
			}
			
			$array['favorites_count']=(integer) zipperagent_get_favorites_count();
		}else{
			$count = zipperagent_save_property_cookie($listingId, $contactIds, true, $crit, $searchId);			
			$array['favorites_count']=$count;
			$result =  $count ? (object) array('status'=>'SUCCESS') : false;
		}
		
		$array['result']=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		
		echo json_encode($array);
         
        die();
    }
}

add_action( 'wp_ajax_save_property', 'do_save_property' );
add_action( 'wp_ajax_nopriv_save_property', 'do_save_property' );

function do_save_property(){
	
	if ( isset($_REQUEST) ) {
		
		$listingId = isset($_REQUEST['listingId'])?$_REQUEST['listingId']:'';
		$contactIds = isset($_REQUEST['contactId'])?$_REQUEST['contactId']:'';
		// $contactIds = is_array($contactIds)?$contactIds[0]:$contactIds;
		$crit      = isset( $_REQUEST['crit'] ) ? $_REQUEST['crit']:array();
		$searchId  = isset($_REQUEST['searchId'])?$_REQUEST['searchId']:'';
		$result    = zipperagent_save_property($listingId, $contactIds, false, $crit, $searchId);
		// echo "<pre>"; print_r( $result ); echo "</pre>";
		$array['result']=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		// $array['result']=1;
		
		echo json_encode($array);
         
        die();
    }
}

add_action( 'wp_ajax_get_property_slides', 'get_property_slides' );
add_action( 'wp_ajax_nopriv_get_property_slides', 'get_property_slides' );

function get_property_slides(){
	
	if ( isset($_REQUEST) ) {
		
		$listingId = $_REQUEST['listingId'];
		$contactIds = $_REQUEST['contactId'];
		$single_property = get_single_property($listingId, $contactIds);
		$divId = '#carousel-'.$listingId;
		
		ob_start();
		?>
		<div id="zpa-main-container" class="zpa-container " style="display: inline;" > 
			<div class="row">
				<div class="col-xs-12 zpa-property-photo">
					<div id="carousel-<?php echo $listingId ?>" class="zpa-main-image zpa-image-carousel carousel slide zpa-center" data-interval="false" >
						<div style="display:block" class="owl-carousel carousel-inner">
							<?php
							if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
								$i=0;
								foreach ($single_property->photoList as $pic ){ ?>
									<div class="item <?php if($i==0) echo "active"; ?>"> <span class="zpa-center"> <img class="media-object zpa-center" alt="" src="<?php echo $pic->imgurl ?>"> </span> </div>
								<?php 
								$i++;
								}
							}
							?>
					   </div> <span href="<?php echo $divId ?>" data-slide="prev" class="carousel-control left" style="cursor: pointer;"> <span class="glyphicon glyphicon-chevron-left"></span> </span> <span href="<?php echo $divId ?>" data-slide="next" class="carousel-control right" style="cursor: pointer;"> <span class="glyphicon glyphicon-chevron-right"></span> </span>
						<div class="carousel-caption"> <span class="badge">1 of <?php echo isset( $single_property->photoList ) && sizeof( $single_property->photoList )? sizeof($single_property->photoList) : 0 ?></span> </div>
						<script>						
							jQuery(function(){
								var totalItems = jQuery('<?php echo $divId ?> .item').length;
								var currentIndex = jQuery('<?php echo $divId ?> div.active').index() + 1;
								
								jQuery('<?php echo $divId ?>').on('slid.bs.carousel', function() {
									currentIndex = jQuery('<?php echo $divId ?> div.active').index() + 1;
									jQuery('<?php echo $divId ?> .badge').html(''+currentIndex+' of '+totalItems+'');
								});
							});							
						</script>
					</div>
				</div>
			</div>
		</div>
		<?php
		$html=ob_get_clean();
		$result['html']=$html;
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_load_more_properties', 'load_more_properties' );
add_action( 'wp_ajax_nopriv_load_more_properties', 'load_more_properties' );

function load_more_properties(){
	
	if ( isset($_REQUEST) ) {
		
		global $requests, $is_ajax, $is_view_save_search, $actual_link;
		global $contactId;
		global $o, $location, $address, $advStNo, $advStName, $advTownNm, $advStates, $advCounties, $advStZip, $boundaryWKT, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet,
			   $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $startTime, $endTime, $daysfromnow, $openHomesMode, $openHomesOnlyYn, $maxDaysListed, $featuredOnlyYn, $hasVirtualTour, $withImage, $dateRange, $year, $alagt, $aloff, $showPagination, $showResults, $crit;
		global $infiniteajax;
		
		$query_args=array();
		$excludes = get_long_excludes();
		$requests=key_to_lowercase($_REQUEST); //convert all key to lowercase

		$rb = zipperagent_rb();
			   
		/**
		 * VARIABLES
		 * @ set values for each variables
		 */	 

		$is_shortcode 		= (isset($requests['is_shortcode'])?$requests['is_shortcode']:'');
		 
		$o 					= ( isset($requests['o'])?$requests['o']:'' );
		$location 			= ( isset($requests['location'])?$requests['location']:'' );
		$address 			= ( isset($requests['address'])?$requests['address']:'' );
		$advStNo 			= ( isset($requests['advstno'])?$requests['advstno']:'' );
		$advStName 			= ( isset($requests['advstname'])?$requests['advstname']:'' );
		$advTownNm 			= ( isset($requests['advtownnm'])?$requests['advtownnm']:'' );
		$advStates 			= ( isset($requests['advstates'])?$requests['advstates']:'' );
		$advCounties 		= ( isset($requests['advcounties'])?$requests['advcounties']:'' );
		$advStZip 			= str_replace( ' ', '', ( isset($requests['advstzip'])?$requests['advstzip']:'' ) );
		$boundaryWKT 		= ( isset($requests['boundarywkt'])?$requests['boundarywkt']:'' );
		$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
		$propSubType 		= ( isset($requests['propsubtype'])?(!is_array($requests['propsubtype'])?array($requests['propsubtype']):$requests['propsubtype']):array() );
		$status 			= ( isset($requests['status'])?$requests['status']:'' );
		$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:'' );
		$maxListPrice		= ( isset($requests['maxlistprice'])?$requests['maxlistprice']:'' );
		$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
		$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
		$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
		$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
		$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
		$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
		$startTime 			= ( isset($requests['starttime'])?$requests['starttime']:'' );
		$endTime 			= ( isset($requests['endtime'])?$requests['endtime']:'' );
		$openHomesMode 		= ( isset($requests['openhomesmode'])?$requests['openhomesmode']:'' );
		$openHomesOnlyYn 	= ( isset($requests['openhomesonlyyn'])?$requests['openhomesonlyyn']:'' );
		$maxDaysListed 		= ( isset($requests['maxdayslisted'])?$requests['maxdayslisted']:'' );
		$featuredOnlyYn 	= ( isset($requests['featuredonlyyn'])?$requests['featuredonlyyn']:'' );
		$hasVirtualTour 	= ( isset($requests['hasvirtualtour'])?$requests['hasvirtualtour']:'' );
		$withImage 			= ( isset($requests['withimage'])?$requests['withimage']:'' );
		$dateRange 			= ( isset($requests['daterange'])?$requests['daterange']:'' );
		$year 				= ( isset($requests['yearbuilt'])?$requests['yearbuilt']:'' );
		$alagt 				= ( isset($requests['alagt'])?$requests['alagt']:'' );
		$aloff 				= ( isset($requests['aloff'])?$requests['aloff']:'' );
		$showPagination 	= ( isset($requests['pagination'])?$requests['pagination']:1 );
		$showResults	 	= ( isset($requests['result'])?$requests['result']:1 );
		$crit	 			= ( isset($requests['crit'])?$requests['crit']:'' );
		$searchId			= ( isset($requests['searchid'])?$requests['searchid']:'' );
		$alstid 			= ( isset($requests['alstid'])?$requests['alstid']:'' );
		$column 			= ( isset($requests['column'])?$requests['column']:'' );
		$school 			= ( isset($requests['school'])?$requests['school']:'' );

		//distance search variables
		$searchDistance 	= ( isset($requests['searchdistance'])?$requests['searchdistance']:'' );
		$distance 			= ( isset($requests['distance'])?$requests['distance']:zipperagent_distance() );
		$lat 				= ( isset($requests['lat'])?$requests['lat']:'' );
		$lng 				= ( isset($requests['lng'])?$requests['lng']:'' );


		/**
		 * PREPARATION
		 * @ prepare the arguments before API process
		 */

		if( $is_ajax )
			$actual_link = $requests['actual_link'];
		else
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		/* set count variable */
		$is_ajax_count=0;

		/* default status */
		$status = empty($status)?zipperagent_active_status():$status;

		/* set column number */
		$default_column=3;
		$column = empty($column)?$default_column:$column;
		$column = $column > 4 || $column < 1 ? $default_column : $column;
		switch( $column ){
			case 4:
					$columns_code = 'col-lg-3 col-sm-6 col-md-6 col-xs-12';
				break;
			case 1:
					$columns_code = 'col-lg-12 col-sm-12 col-md-12 col-xs-12';
				break;
			case 2:
					$columns_code = 'col-lg-6 col-sm-6 col-md-6 col-xs-12';
				break;
			case 3:
			default:
					$columns_code = 'col-lg-4 col-sm-6 col-md-6 col-xs-12';			
				break;
		}

		/* get town list */
		$locqry=array();
		$coords=null;
		if( $location ){
			
			$location=!is_array($location)?array($location):$location;
			$loc_country=array();
			$loc_town=array();
			$loc_area=array();
			$loc_zipcode=array();
			
			// $towns = get_town_list();
			foreach( $location as $var ){
				$temp = urldecode($var);
				
				if( substr($temp, 0, 6) == 'acnty_' ){
					$loc_country[]=substr($temp, 6);
				}else if( substr($temp, 0, 6) == 'atwns_' ){
					$loc_town[]=substr($temp, 6);
				}else if( substr($temp, 0, 5) == 'aars_' ){
					$loc_area[]=substr($temp, 5);
				}else if( substr($temp, 0, 5) == 'azip_' ){
					$loc_zipcode[]=substr($temp, 5);
				}else{
					$loc_zipcode[]=$temp;
				}
			}
			
			/* convert array to string */
			if(sizeof($loc_country)) $locqry['acnty']=implode(',',$loc_country);
			if(sizeof($loc_town)) $locqry['atwns']=implode(',',$loc_town);
			if(sizeof($loc_area)) $locqry['aars']=implode(',',$loc_area);
			if(sizeof($loc_zipcode)) $locqry['azip']=implode(',',$loc_zipcode);
			
			// die( $locqry );
		}else if( $advStNo || $advStName || $advStZip || $advStates || $advTownNm || $advCounties ){
			
			$loc_advStNo=array();
			$loc_advStName=array();
			$loc_advStZip=array();
			$loc_advStates=array();
			$loc_advTownNm=array();
			$loc_advAreas=array();
				
			if(sizeof($advStNo)) $locqry['astno']=($advStNo);
			if(sizeof($advStName)) $locqry['astnmf']=($advStName);
			if(sizeof($advStZip)) $locqry['azip']=($advStZip);
			if(sizeof($advStates)) $locqry['astt']=($advStates);
			if(sizeof($advTownNm)) $locqry['atwnnm']=($advTownNm);
			// if(sizeof($advCounties)) $locqry['acnty']=($advCounties);
			
		}else if($boundaryWKT){
			// preg_match( '/POLYGON \(\((.*?)\)\)/', $boundaryWKT, $match );
			preg_match( '/POLYGON \(\((.*?)\)\)/', urldecode($boundaryWKT), $match );
			$coor_string = isset($match[1])?'('.$match[1].')':'';
			preg_match_all( "/\(([^)]+)\)/", $coor_string, $match );
			// $polygons = array_map('trim', explode( ',', $match[1] ));
			$polygons = $match[1];
			$added_polygons=array();
			foreach( $polygons as $index=>&$polygon ){
				$polygon= str_replace(' ','',$polygon);
				$temp = explode(',',$polygon);
				
				// $polygon= str_replace(', ',':',$polygon); 
				$polygon = $temp[1].':'.$temp[0];
				$added_polygons[]=$polygon;
			}
			$added_polygons[]=$added_polygons[0];
			$coords=implode(',',$added_polygons );
			// $coords="-71.057083:42.361145,-71.057083:41,-70:41,-70:42,-71.057083:42.361145";
		}

		/* get advanced search */
		$advSearch=array();	
		if( $openHomesOnlyYn || $maxDaysListed ){
			$days = 14;
			$advSearch['hasoh']=!empty($maxDaysListed)?$maxDaysListed:$days;
		}
		if( $withImage )
			$advSearch['hasp']="true";

		if( $hasVirtualTour )
			$advSearch['hasvt']="true";

		if( $year )
			$advSearch['ayblt']=$year;

		if( $squareFeet )
			$advSearch['acarea']=$squareFeet;

		if( $alagt )
			$advSearch['alagt']=$alagt;

		if( $aloff )
			$advSearch['aloff']=$aloff;
		
		//generate school variables
		if( $school  ){
			foreach($school as $scl){
				$school_tmp = explode('_', $scl);
				$school_code=isset($school_tmp[0])?$school_tmp[0]:$scl;
				$school_name=isset($school_tmp[1])?$school_tmp[1]:'';
				
				if($school_code && $school_name)
					$requests['aschlnm'][]=$school_code.'$'.$school_name;
				else
					$requests['aschlnm'][]=$school_code;
			}
		}
		
		//remove space from alstid (listing id search)
		if( isset($requests['alstid']) )
			$requests['alstid']=str_replace(' ','', $requests['alstid']);
		
		foreach( $requests as $key=>$val ){
			if( ! in_array( strtolower($key), $excludes ) ){
				if(is_array($val)){
					$advSearch[$key]=implode(',',$val);
				}else{			
					$advSearch[$key]=($val);
				}
			}
		}

		/* get page number */
		$page = isset($requests['page']) ? $requests['page'] : 1;

		$num=isset($requests['listinapage']) ? $requests['listinapage'] : 24;
		$maxtotal=isset($requests['maxlist']) ? $requests['maxlist'] : 0;

		/* page correction */
		if( $maxtotal > 0 ){
			$maxpage=ceil($maxtotal/$num);
			if( $page > $maxpage )
				$page = $maxpage;
		}

		$index=$page*$num-$num;

		$open=0;

		/**
		 * API CALL
		 * @ call method and get properties
		 */

		if( $openHomesMode ){ // open houses mode
			
			$current_date = current_time( 'Y-m-d' );
			$daytoadd = isset($daysfromnow)?$daysfromnow:"14";
			// echo $current_date;
			if( $minDate )
			$startDate = date( 'm/d/Y', strtotime ( $minDate ) ); 
			else
			$startDate = date( 'm/d/Y', strtotime( $current_date ) ); 	
			
			if( $maxDate )
			$endDate = date( 'm/d/Y', strtotime ( $maxDate ) );
			else
			$endDate = date( 'm/d/Y', strtotime ( $current_date . ' + '. $daytoadd .' days' ) );
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			$search= array_merge($search, $locqry, $advSearch);
			
			$vars=array(
				'crit'=>proces_crit($search),
				'startDate'=>$startDate,
				'endDate'=>$endDate,
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			
			if($startTime){
				$vars['startTime']=$startTime;
			}
			if($endTime){
				$vars['endTime']=$endTime;
			}	
			if( $crit )
				$vars['crit'] = $crit;
			
			$result = zipperagent_run_curl( "/api/mls/getopenhouses", $vars);
			
			$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
			$open=1;
		}else if( isset($coords) ){ // map mode
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			$search= array_merge($search, $locqry, $advSearch);
			
			// $search=array(
				// 'asrc'=>$rb['web']['asrc'],
				// 'asts'=>$status,
			// );
			
			$vars=array(
				'coords'=>$coords,
				'crit'=>proces_crit($search),
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			
			if( $crit )
				$vars['crit'] = $crit;
			
			$result = zipperagent_run_curl( "/api/mls/within", $vars );
			$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
		}else if( $searchDistance=="true" || $searchDistance=="1" || ($lat && $lng) ){ // map mode
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			$search= array_merge($search, $locqry, $advSearch);
			
			// $search=array(
				// 'asrc'=>$rb['web']['asrc'],
				// 'asts'=>$status,
			// );
			
			$vars=array(
				'crit'=>proces_crit($search),
				'distance'=>$distance,
				'lat'=>$lat,
				'lng'=>$lng,
				'sidx'=>$index,
				'ps'=>$num,
			);
			
			if( $crit )
				$vars['crit'] = $crit;
			
			// $crit="crit=acnty:LINC,CATA,GASTON;asts:ACT,UCS,CS;apt:SFR,CND;alotd:WTRVIEW,WTRFRNT;awbn:Lake Norman";
			// $xxx="?o=alstp:ASC&distance=402.336&lat=0.00000&lng=0.00000&sidx=0&ps=20";
			
			$result = zipperagent_run_curl( "/api/mls/distance", $vars );
			$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
		}else{ //if( $featuredOnlyYn=="true" || $status=='SLD' ){ //featured mode
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>implode( ',', array_map("trim",$propertyType) ),
				'apts'=>implode( ',', array_map("trim",$propSubType) ),
				'asts'=>$status,
				'apmin'=>za_correct_money_format($minListPrice),
				'apmax'=>za_correct_money_format($maxListPrice),
				'aacr'=>$lotAcres,
			);
			
			if($alstid){
				unset($search['asts']);
			}
			
			$search= array_merge($search, $locqry, $advSearch);
			
			$vars=array(
				'crit'=>proces_crit($search),
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			// echo "<pre>"; print_r( $vars ); echo "</pre>";
			if( $crit )
				$vars['crit'] = $crit;
			
			$contactIds=get_contact_id();
			if( $contactIds )
				$vars['contactId'] = implode(',',$contactIds);
			
			$result = zipperagent_run_curl( "/api/mls/advSearchWoCnt", $vars );
			if(!$is_ajax){
				$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
				$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
			}else{		
				$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
			}
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
			$is_ajax_count=1;
		}

		$enable_filter= $coords || $openHomesMode == "true" ? false : true;
		$top_search_enabled = ! $boundaryWKT && ! $openHomesMode;
		
		ob_start();
		
		$infiniteajax = 1;
		include ZIPPERAGENTPATH . '/custom/templates/listing/template-infiniteLoop.php';
		
		$html=ob_get_clean();
		$data['html']=$html;
		$data['page']=$page; //return next page
		
		echo json_encode($data);
         
        die();
    }
}

add_action( 'wp_ajax_get_user_fields', 'get_zipperagent_user_fields' );
add_action( 'wp_ajax_nopriv_get_user_fields', 'get_zipperagent_user_fields' );

function get_zipperagent_user_fields(){
	
	if ( isset($_REQUEST) ) {
		
		$email = isset($_REQUEST['email'])?$_REQUEST['email']:'';
		$assign = isset($_REQUEST['assign'])?$_REQUEST['assign']:'';
		
		$firstUserData=array();
		
		if($email){
			$userdata=getUserContact($email, $assign);
			$firstUserData=$userdata[0];
		}
		
		$result['userdata']=$firstUserData;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_get_property_fields', 'get_zipperagent_property_fields' );
add_action( 'wp_ajax_nopriv_get_property_fields', 'get_zipperagent_property_fields' );

function get_zipperagent_property_fields(){
	
	if ( isset($_REQUEST) ) {
				
		$listid = isset($_REQUEST['listid'])?$_REQUEST['listid']:'';
		$type = isset($_REQUEST['type'])?$_REQUEST['type']:'';
		$default_fields = admin_fields_mapping($type);
		
		$fields=array();
		
		if($listid){
			$property=get_single_property($listid);
		}
		
		foreach($property as $key=>$value){
			if(array_key_exists ($key, $default_fields)){
				$fields[$default_fields[$key]]=zipperagent_field_value($key, $value, $property->proptype);
			}
		}
		
		$fields['_lp_Address'] = zipperagent_get_address($property); 
		
		$result['fields']=$fields;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_school_options', 'get_school_options' );
add_action( 'wp_ajax_nopriv_school_options', 'get_school_options' );

function get_school_options(){
	
	if ( isset($_REQUEST) ) {
				
		$key = isset($_REQUEST['key'])?$_REQUEST['key']:'';
		
		$schools = populate_schools($key);
		
		$result['schools']=$schools;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'zipperagent_single_content', 'zipperagent_single_content' );

function zipperagent_single_content($content){
	remove_action('zipperagent_single_content', 'zipperagent_single_content'); //DISABLE THE CUSTOM ACTION
    // echo $content;
	echo apply_filters('the_content', $content);
    add_action('zipperagent_single_content', 'zipperagent_single_content'); //REENABLE FROM WITHIN
}

function fix_header_already_sent(){
	ob_start();
}

add_action( 'init', 'fix_header_already_sent' );

function zipperagent_template( $content ){
	global $post, $requests, $type;
	
	if( ! interface_exists( 'zipperAgentConstants' ) )
		return $content;
	
	if ( ! in_the_loop() ) {
        return $content;
    }

    if ( ! is_singular() ) {
        return $content;
    }

    if ( ! is_main_query() ) {
        return $content;
    }
	
	$requests = $_REQUEST;
	
	//map
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_MAP_SEARCH, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
		include ZIPPERAGENTPATH . "/custom/templates/template-mapSearch.php";
		$content.=ob_get_clean();
	}
	//search result
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_SEARCH_RESULTS, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();				
		include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";			
		if(!isset($requests['boundaryWKT']) && !isset($requests['boundarywkt'])){ //default
			if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1 || zipperagent_detailpage_group()=='mlspin' || is_zipperagent_new_detail_page())
				include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage_new.php";
			else
				include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage.php";
		}else{ //map search		
			$type='map';
			include ZIPPERAGENTPATH . "/custom/templates/template-searchWithFilter2.php";
		}	
		$content.=ob_get_clean();			
	}
	
	//Login Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-organizerLoginForm.php";
		$content.=ob_get_clean();			
	}
	
	//Logout Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGOUT, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-organizerLogout.php";
		$content.=ob_get_clean();			
	}
	
	//Edit Subscriber Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_EDIT_SUBSCRIBER, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-organizerEditSubscriber.php";
		$content.=ob_get_clean();			
	}
	
	//View Saved Search List Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH_LIST, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedSearchList.php";
		$content.=ob_get_clean();			
	}
	
	//View Saved Search Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_VIEW_SAVED_SEARCH, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedSearch.php";
		$content.=ob_get_clean();			
	}
	
	//View Saved Listings Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_SAVED_LISTINGS, null);
	if( !empty($post->ID) && $page_id == $post->ID ){
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedListingList.php";
		$content.=ob_get_clean();			
	}
	
	
    remove_filter( 'the_content', 'zipperagent_template' );
	
	return $content;
}

// add_action( 'wp_footer', 'zipperagent_owl_carousel' );

function zipperagent_owl_carousel(){

if( ! class_exists('zipperAgentUtility' ) )
	return;	

$listingNumber = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");	

if( ! $listingNumber )
	return;
?>

<script>
	jQuery(document).ready(function ($) {
		// reference for main items
		var mainSlider=new Array();
		// reference for thumbnail items
		var thumbnailSlider=new Array();
		//transition time in ms
		var duration = 500;
		var index=0;
		
		index=0;
		$('.main-slider').each(function(){
			var slider = $(this);
			mainSlider.push(slider);
		});
		index=0;
		$('.thumbnail-slider').each( function(){
			var slider = $(this);
			thumbnailSlider.push(slider);
		});
		
		// carousel function for main slider
		index=0;
		$('.main-slider').each(function(){
			
			var tempMainSlider = mainSlider[index];
			var tempThumbSlider = thumbnailSlider[index];
			
			// console.log('current index: '+index);
			tempMainSlider.owlCarousel({
				loop:false,
				nav:false,
				dots: false,
				lazyLoad:true,
				// animateOut: 'fadeOut',
				items:1
			}).on('changed.owl.carousel', function (e) {
				//On change of main item to trigger thumbnail item
				tempThumbSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
				
			//These two are navigation for main items
			})
			
			index++;
		});
		
		// carousel function for thumbnail slider
		index=0;
		$('.thumbnail-slider').each( function(){
			
			var tempMainSlider = mainSlider[index];
			var tempThumbSlider = thumbnailSlider[index];
		
			tempThumbSlider.owlCarousel({
				loop:false,
				center:true, //to display the thumbnail item in center
				nav:false,
				lazyLoad:true,
				dots: false,
				margin:5,
				responsive:{
					0:{
						items:5
					},
					600:{
						items:8
					},
					1000:{
						items:12
					}
				}
			}).on('click', '.owl-item', function () {
				// On click of thumbnail items to trigger same main item
				tempMainSlider.trigger('to.owl.carousel', [$(this).index(), duration, true]);

			}).on('changed.owl.carousel', function (e) {
				// On change of thumbnail item to trigger main item
				tempMainSlider.trigger('to.owl.carousel', [e.item.index, duration, true]);
				
			});
			
			index++;
		});
		
		$(document).on('click', '.slider-right', function(e) {
			var slider = $(this).parent().parent().find('.main-slider');
			slider.trigger('next.owl.carousel');
		});
		
		$(document).on('click', '.slider-left', function(e) {
			var slider = $(this).parent().parent().find('.main-slider');
			slider.trigger('prev.owl.carousel');
		});
		// console.log(mainSlider);
		// console.log(thumbnailSlider);
	});
</script>
<?php
}

add_action( 'admin_notices', 'zipperagent_root_file_error_notice' );

function zipperagent_root_file_error_notice() {
	
	$HOME = dirname(dirname( $_SERVER['DOCUMENT_ROOT']));
	$defaultPath = $HOME . '/zipperagent/$websitedomain/root.txt';
	$domainName = str_replace( 'https://', '', get_site_url() );
	$domainName = str_replace( 'http://', '', $domainName );
		
	$config = zipperagent_config();
	$configurationPath = $config['configurationPath'];	
	$configurationPath = str_replace( 'ZIPPER_AGENT_HOME', $defaultPath, $configurationPath );
	$configurationPath = str_replace( '$HOME', $HOME, $configurationPath );
	$configurationPath = str_replace( '$websitedomain', $domainName, $configurationPath );
	$configurationPath = str_replace( '//', '/', $configurationPath );
	
	if( file_exists( $configurationPath ) )
		return;
	
	$class = 'notice notice-error';
	$message = __( '<strong>Zipperagent Error:</strong> root file is not found in <em>"'. $configurationPath .'"</em>. Please check your config.txt and make sure root file is placed in right path. Your listing may not working properly until this message disappear.', 'zipperagent' );

	printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message ); 
}

// add_filter( 'the_content', 'zipperagent_thankyou_page' );

function zipperagent_thankyou_page($content){
	if( is_page('thankyou') ){
		ob_start();
		include_once ZIPPERAGENTPATH . '/custom/templates/template-thankyou.php';
		$content .= ob_get_clean();
	}
	
	return $content;
}

add_action( 'admin_init', 'automate_create_thankyou_page' );

function automate_create_thankyou_page(){
	$post_object = get_page_by_path( 'thankyou', OBJECT, 'page' );
	
    if ( !$post_object ){
		$post = array(			 
			  // 'post_author' => 1, //The user ID number of the author.			  ,
			  'post_status' => 'publish', //Set the status of the new post.
			  'post_title' => 'Thank You', //The title of your post.
			  'post_content' => '[za_thankyou]', //The content of post
			  'post_name' => 'thankyou', //post slug
			  'post_type' => 'page', //Sometimes you want to post a page.
			);  

		// Insert the post into the database
		wp_insert_post( $post );
	}else if($post_object && strpos($post_object->post_content, '[za_thankyou]') === false){
		 $post = array(
			  'ID'           => $post_object->ID,
			  'post_content' => $post_object->post_content . "\r\n" .'[za_thankyou]',
		  );

		// Update the post into the database
		  wp_update_post( $post );
	}
}

register_activation_hook( ZIPPERAGENTPATH . '/zipperagent.php', 'zipperagent_plugin_active' );

function zipperagent_plugin_active() {	

	create_zipperagent_plugin_version_file();
}

add_action( 'init', 'zipperagent_global_popup_variable', 1);

function zipperagent_global_popup_variable(){
	global $zpa_show_login_popup;
}

add_action( 'wp_footer', 'zipperagent_detail_page_popup', 11);

function zipperagent_detail_page_popup(){
	global $is_detail_page, $single_property;
	
	if(!$is_detail_page) //show on detailpage only ?
		return;
	?>
	<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-schedule-show.php'; ?>
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-requestInfo.php'; ?>
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-share-email.php'; ?>
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-virtual-tour.php'; ?>
	</div>
	<?php
}

add_action( 'wp_footer', 'zipperagent_detail_page_navigation', 11);

function zipperagent_detail_page_navigation(){
	global $is_detail_page, $single_property;
	
	if(!$is_detail_page) //show on detailpage only ?
		return;
	?>
	<div id="za_prop-navigation" class="hideonprint">
	<?php
	$saved_results = zipperagent_get_session('/api/mls/advSearchWoCnt');
	$saved_props = isset($saved_results['filteredList'])?$saved_results['filteredList']:false;
	if($saved_props): 
		
		$prop_exists=0;
		foreach($saved_props as $prop_index=>$prop){
			if($prop->id == $single_property->id){
				$prop_exists=1;
				$prev_prop = isset($saved_props[$prop_index - 1]->id)?$saved_props[$prop_index - 1]:false;
				$next_prop = isset($saved_props[$prop_index + 1]->id)?$saved_props[$prop_index + 1]:false;
				break;
			}
		}
		
		if($prop_exists): ?>
			
			<?php if($prev_prop): ?>
			<div class="zy_prop-nav-box zy_prop-nav-previous">
				<?php
				
				$query_args=array();
				$fulladdress = zipperagent_get_address($prev_prop);
				$price=(in_array($prev_prop->status, explode(',',zipperagent_sold_status()))?(isset($prev_prop->saleprice)?$prev_prop->saleprice:$prev_prop->listprice):$prev_prop->listprice);					
				$formatted_price = zipperagent_currency() . number_format_i18n( $price, 0 );
				$prop_img = isset($prev_prop->photoList[0])? str_replace('http://','//',$prev_prop->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg";
				
				if(!empty($searchId)){
					$query_args['searchId']= $searchId;
				}
				if(zp_using_criteria() && isset($requests['criteria'])){
					$query_args['criteria']= $requests['criteria'];
				}
				if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
					$query_args['newsearchbar']= 1;
				}
				$single_url = add_query_arg( $query_args, zipperagent_property_url( $prev_prop->id, $fulladdress ) );
				?>
				
				<div class="zy_nav-left_wrap">
					<a href="<?php echo $single_url; ?>">
						<div class="zy_nav_thumb" style="background-image: url('<?php echo $prop_img; ?>');">
						</div>
					</a>
					<div class="zy_nav_detail">
						<span class="zy_nav_address"><?php echo $fulladdress; ?></span>
						<span class="zy_nav_price"><?php echo $formatted_price; ?></span>
						<a class="zy_nav_link" href="<?php echo $single_url; ?>"></a>
					</div>
				</div>
				<div class="zy_nav-right-wrap">
					<i class="fa fa-angle-left" aria-hidden="true"></i>						
					<a class="zy_nav_link" href="<?php echo $single_url; ?>"></a>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if($next_prop): ?>
			<div class="zy_prop-nav-box zy_prop-nav-next">
				<?php
				
				$query_args=array();
				$fulladdress = zipperagent_get_address($next_prop);
				$price=(in_array($next_prop->status, explode(',',zipperagent_sold_status()))?(isset($next_prop->saleprice)?$next_prop->saleprice:$next_prop->listprice):$next_prop->listprice);					
				$formatted_price = zipperagent_currency() . number_format_i18n( $price, 0 );
				$prop_img = isset($next_prop->photoList[0])? str_replace('http://','//',$next_prop->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg";
				
				if(!empty($searchId)){
					$query_args['searchId']= $searchId;
				}
				if(zp_using_criteria() && isset($requests['criteria'])){
					$query_args['criteria']= $requests['criteria'];
				}
				if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
					$query_args['newsearchbar']= 1;
				}
				$single_url = add_query_arg( $query_args, zipperagent_property_url( $next_prop->id, $fulladdress ) );
				?>
				
				<div class="zy_nav-left_wrap">
					<a href="<?php echo $single_url; ?>">
						<div class="zy_nav_thumb" style="background-image: url('<?php echo $prop_img; ?>');">
						</div>
					</a>
					<div class="zy_nav_detail">
						<span class="zy_nav_address"><?php echo $fulladdress; ?></span>
						<span class="zy_nav_price"><?php echo $formatted_price; ?></span>
						<a class="zy_nav_link" href="<?php echo $single_url; ?>"></a>
					</div>
				</div>
				<div class="zy_nav-right-wrap">
					<i class="fa fa-angle-right" aria-hidden="true"></i>						
					<a class="zy_nav_link" href="<?php echo $single_url; ?>"></a>
				</div>
			</div>
			<?php endif; ?>
		
		<?php endif; ?>
	<?php endif; ?>
	</div>
	<?php
}

add_action( 'wp_footer', 'zipperagent_detail_page_lightbox_gallery', 11);

function zipperagent_detail_page_lightbox_gallery(){
	global $is_detail_page, $single_property;
	
	if(!$is_detail_page) //show on detailpage only ?
		return;
	?>
	<?php if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ): ?>
	<div id="zpa-main-container" class="zpa-container " style="display: inline;">
		<div id="gallery-column" style="display: block !important;">
			<div id="zy-gallery-slide-proptype"  class="col-xs-12 modal in hideonprint" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"> &#215; </button>
						</div>
						<div class="modal-body">
							<div class="owl-carousel-container">
								
								<div class="top-head-carousel-wrapper">
									<div class="owl-carousel top-head-carousel <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>">
										<?php
										if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
											$i=0;
											foreach ($single_property->photoList as $pic ){ ?>
												<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
													<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1600&h=1024&n={$i}" ?>')" class="owl-slide"><img class="" src="<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1600&h=1024&n={$i}" ?>" /></div>
												<?php else: ?>
													<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="owl-slide"><img class="" src="<?php echo $pic->imgurl; ?>" /></div>
												<?php endif; ?>
											<?php 
											$i++;
											}
										} ?>
									</div>
									<div class="left-nav"><i class="icon-left-arrow"></i>
									</div>
									<div class="right-nav"><i class="icon-right-arrow"></i>
									</div>
								</div>
								<div class="carousel-controller-wrapper">
									<div class="owl-carousel carousel-controller">
										<?php
										if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
											$i=0;
											foreach ($single_property->photoList as $pic ){ ?>
												<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
													<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=150&h=150&n={$i}" ?>')" class="item"></div>
												<?php else: ?>
													<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="item"></div>
												<?php endif; ?>
												<?php 
											$i++;
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="<?php echo zipperagent_url(false) . 'js/rs-slider/plugins.js'; ?>"></script>
		<script>
			(function($){
				function setThumbnailAsASelected(number) {
					$carouselController.find(".owl-item.selected").removeClass("selected"), $carouselController.find(".owl-item:nth-of-type(" + (number + 1) + ")").addClass("selected")
				}

				function changeSlide(isLeftDirection) {
					var pickedItemNumber = void 0,
						oldItemIndex = $topHeadCarousel.find(".owl-item.active").index(),
						itemCount = $topHeadCarousel.find(".owl-stage .owl-item").length;
					oldItemIndex >= itemCount - 1 && !isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", 0) : 0 == oldItemIndex && isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", itemCount - 1) : $topHeadCarousel.trigger(isLeftDirection ? "prev.owl.carousel" : "next.owl.carousel"), pickedItemNumber = $topHeadCarousel.find(".owl-item.active").index(), setThumbnailAsASelected(pickedItemNumber), center(pickedItemNumber, visibleItemCount)
				}

				function center(number, itemInPage) {
					$carouselController.trigger("to.owl.carousel", number - parseInt(itemInPage / 2))
				}
				var $topHeadCarousel = $(".top-head-carousel"),
					$carouselController = $(".carousel-controller"),
					visibleItemCount = 0,
					itemTotalCount = 0;
				$topHeadCarousel.owlCarousel({
					singleItem: !0,
					slideSpeed: 1e3,
					pagination: !1,
					responsiveRefreshRate: 200,
					smartSpeed: 800,
					paginationSpeed: 400,
					rewindSpeed: 500,
					items: 1,
					dots: !1,
					autoplay: $topHeadCarousel.hasClass("carousel-autoplay"),
					autoplayTimeout: 3500,
					// animateOut: "fadeOut",
					// animateIn: "fadeIn",
					onDragged: function(el) {
						console.log(el), $carouselController.find(".owl-item.selected").removeClass("selected"), center(el.item.index, visibleItemCount), $carouselController.find(".owl-item:nth-child(" + (el.item.index + 1) + ")").addClass("selected")
					}
				}), $(".left-nav").click(function() {
					return changeSlide(!0)
				}), $(".right-nav").click(function() {
					return changeSlide(!1)
				}), $carouselController.owlCarousel({
					items: 11,
					responsiveClass: !0,
					responsive: {
						0: {
							items: 5
						},
						600: {
							items: 7
						},
						1e3: {
							items: 11
						}
					},
					pagination: !1,
					dots: !1,
					nav: true,
					merge:true,
					slideBy: 5,
					smartSpeed: 200,
					navText:['<i class="icon-left-arrow"></i>', '<i class="icon-right-arrow"></i>'],
					autoplay: $carouselController.hasClass("carousel-autoplay"),
					autoplayTimeout: 3500,
					responsiveRefreshRate: 100,
					onInitialized: function(el) {
						visibleItemCount = el.page.size, itemTotalCount = el.item.count, $(el.target).find(".owl-item").eq(0).addClass("selected")
					},
					onResize: function(el) {
						visibleItemCount = el.page.size
					}
				}), $carouselController.on("click", ".owl-item", function(e) {
					var clickedItemNumber = $(this).index();
					setThumbnailAsASelected(clickedItemNumber), $topHeadCarousel.trigger("to.owl.carousel", clickedItemNumber), center(clickedItemNumber, visibleItemCount)
				})
				
				<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
				var count=<?php echo isset($_SESSION['za_image_clicked']) ? (int) $_SESSION['za_image_clicked'] : 0; ?>;
				var limit='<?php echo zipperagent_slider_limit_popup(); ?>';
				$topHeadCarousel.on('changed.owl.carousel', function(event) {
					
					count++;								
					ajax_image_count(count);		
					if(count>=limit && limit != 0 && $topHeadCarousel.hasClass('needLogin')){
						jQuery('#needLoginModal').modal('show');
						<?php if(!zipperagent_signup_optional()): ?>
						set_popup_is_triggered();
						<?php endif; ?>
						count=0;
					}
					
					function ajax_image_count(count){
						var data = {
							action: 'image_click_count',			
							count: count,			
						};
						
						jQuery.ajax({
							type: 'POST',
							dataType : 'json',
							url: zipperagent.ajaxurl,
							data: data,
							success: function( response ) {    
								if( response['result'] ){
								}
							}
						});
					}
				});
				<?php endif; ?>
				
			})(jQuery);
			/*
			jQuery(document).ready(function() {
				jQuery('.zy-full-lightbox .btn-zy-lightbox').magnificPopup({
					type: 'inline',
					preloader: false,
					// modal: true,
					closeOnBgClick: true,
					enableEscapeKey: true,
					callbacks: {
						open: function(e) {
							var $topHeadCarousel = jQuery('.owl-carousel.top-head-carousel').data('owl.carousel');
							var $carouselController = jQuery('.owl-carousel.carousel-controller').data('owl.carousel');
							$topHeadCarousel.onResize();
							$carouselController.onResize();
							// var $topHeadCarousel = jQuery(".top-head-carousel"),
								// $carouselController = jQuery(".carousel-controller");
							// var owlCar = jQuery('.mfp-content .owl-carousel.top-head-carousel');
							// $topHeadCarousel.trigger('refresh.owl.carousel');
							// $carouselController.trigger('refresh.owl.carousel');
							// console.log('text to show in console if popup is open');
						},
						close: function(){
							var $topHeadCarousel = jQuery('.owl-carousel.top-head-carousel').data('owl.carousel');
							var $carouselController = jQuery('.owl-carousel.carousel-controller').data('owl.carousel');
							$topHeadCarousel.onResize();
							$carouselController.onResize();
						}
					}
				});
			});	
			*/
			
			jQuery('body').on('click', '.zy-full-lightbox .btn-zy-lightbox', function(e){
				jQuery('#zy-gallery-slide-proptype').modal('show');
				// jQuery('#gallery-column .zpa-property-photo').hide();
			});
			
			jQuery('#zy-gallery-slide-proptype .modal-header .close').click(function(){
				
				// jQuery('#gallery-column .zpa-property-photo').show();
			});
			/*
			(function($){
				function setThumbnailAsASelected(number) {
					$carouselController.find(".owl-item.selected").removeClass("selected"), $carouselController.find(".owl-item:nth-of-type(" + (number + 1) + ")").addClass("selected")
				}

				function changeSlide(isLeftDirection) {
					var pickedItemNumber = void 0,
						oldItemIndex = $topHeadCarousel.find(".owl-item.active").index(),
						itemCount = $topHeadCarousel.find(".owl-stage .owl-item").length;
					oldItemIndex >= itemCount - 1 && !isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", 0) : 0 == oldItemIndex && isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", itemCount - 1) : $topHeadCarousel.trigger(isLeftDirection ? "prev.owl.carousel" : "next.owl.carousel"), pickedItemNumber = $topHeadCarousel.find(".owl-item.active").index(), setThumbnailAsASelected(pickedItemNumber), center(pickedItemNumber, visibleItemCount)
				}

				function center(number, itemInPage) {
					$carouselController.trigger("to.owl.carousel", number - parseInt(itemInPage / 2))
				}
				var $topHeadCarousel = $(".top-head-carousel-2"),
					$carouselController = $(".carousel-controller-2"),
					visibleItemCount = 0,
					itemTotalCount = 0;
				$topHeadCarousel.owlCarousel({
					singleItem: !0,
					slideSpeed: 1e3,
					pagination: !1,
					responsiveRefreshRate: 200,
					smartSpeed: 800,
					paginationSpeed: 400,
					rewindSpeed: 500,
					items: 1,
					dots: !1,
					autoplay: $topHeadCarousel.hasClass("carousel-autoplay"),
					autoplayTimeout: 3500,
					// animateOut: "fadeOut",
					// animateIn: "fadeIn",
					onDragged: function(el) {
						console.log(el), $carouselController.find(".owl-item.selected").removeClass("selected"), center(el.item.index, visibleItemCount), $carouselController.find(".owl-item:nth-child(" + (el.item.index + 1) + ")").addClass("selected")
					}
				}), $(".left-nav").click(function() {
					return changeSlide(!0)
				}), $(".right-nav").click(function() {
					return changeSlide(!1)
				}), $carouselController.owlCarousel({
					items: 11,
					responsiveClass: !0,
					responsive: {
						0: {
							items: 5
						},
						600: {
							items: 7
						},
						1e3: {
							items: 11
						}
					},
					pagination: !1,
					dots: !1,
					nav: true,
					merge:true,
					slideBy: 5,
					smartSpeed: 200,
					navText:['<i class="icon-left-arrow"></i>', '<i class="icon-right-arrow"></i>'],
					autoplay: $carouselController.hasClass("carousel-autoplay"),
					autoplayTimeout: 3500,
					responsiveRefreshRate: 100,
					onInitialized: function(el) {
						visibleItemCount = el.page.size, itemTotalCount = el.item.count, $(el.target).find(".owl-item").eq(0).addClass("selected")
					},
					onResize: function(el) {
						visibleItemCount = el.page.size
					}
				}), $carouselController.on("click", ".owl-item", function(e) {
					var clickedItemNumber = $(this).index();
					setThumbnailAsASelected(clickedItemNumber), $topHeadCarousel.trigger("to.owl.carousel", clickedItemNumber), center(clickedItemNumber, visibleItemCount)
				});
				
				
			})(jQuery);
			*/
		</script>
	</div>
	<?php
	endif;
}

add_action( 'wp_footer', 'zipperagent_login_popup', 11);

function zipperagent_login_popup(){
	global $zpa_show_login_popup, $is_detail_page, $single_property;
	
	if( ! is_home() && ! is_front_page() && !$zpa_show_login_popup) // show only on homepage and zipperagent page
		return;
	
	if(!$is_detail_page && is_popup_detail_page_only()) //show on detailpage only ?
		return;
	
	?>
	<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-needLogin.php'; ?>
	</div>
	<?php
}

add_action( 'wp_footer', 'zipperagent_adword_scripts', 11);

function zipperagent_adword_scripts(){
	$rb = zipperagent_rb();
	$adwords_code = isset($rb['google']['adwords']['code'])?$rb['google']['adwords']['code']:'';
	
	if(!$adwords_code)
		return;
	
	?>
	<!-- Event snippet for New User conversion page -->
	<script>
		if (typeof gtag !== 'undefined' && $.isFunction(gtag)) {
			gtag('event', 'conversion', {'send_to': '<?php echo $adwords_code ?>'});
		}
	</script>
	<!-- Event snippet for New User conversion page
	In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
	<script>
		function gtag_report_conversion(url) {
		  var callback = function () {
			if (typeof(url) != 'undefined') {
			  window.location = url;
			}
		  };
			
		  if (typeof gtag !== 'undefined' && $.isFunction(gtag)) {
			  gtag('event', 'conversion', {
				  'send_to': '<?php echo $adwords_code ?>',
				  'event_callback': callback
			  });
		  }
		  return false;
		}
	</script>
	<?php
}

add_action('init','zp_auto_login');

function zp_auto_login(){
	if( isset($_GET['wp_auto_login']) && $_GET['wp_auto_login']=='true' && isset($_GET['key']) && $_GET['key']!='' ){
		global $wpdb;
		
		$credentials=zp_get_credentials();
		$username=$credentials['username'];
		$key=$credentials['key'];
		
		if($key===$_GET['key']){
			$user_id = $wpdb->get_var("SELECT ID from $wpdb->users WHERE user_login='$username' AND user_login != ''");
			if($user_id){
				wp_set_auth_cookie( $user_id );
				wp_safe_redirect(admin_url());
				die();
			}
		}
	}
}

//fix divi detail property br on the top
add_action( 'wp_head', 'fix_divi_br' );

function fix_divi_br(){
?>
<style>#post-0 .entry-content > br{display:none;}</style>
<?php
}