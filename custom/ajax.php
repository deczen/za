<?php
if ( ! defined( 'DOING_AJAX' ) || defined( 'DOING_AJAX' ) && ! DOING_AJAX ) //make sure running only on ajax call for faster performance
	return;

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
			$myaccounturl=ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber');
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
		
		if(ZipperagentGlobalFunction()->getCurrentUserContactLogin()){ //is user logged in
			$return['myaccount_name']=zipperagent_user_name();
			$return['saved_search_count']=ZipperagentGlobalFunction()->zipperagent_get_saved_search_count();
			$return['favorites_count']=ZipperagentGlobalFunction()->zipperagent_get_favorites_count();
			$return['is_login']=1;
		}else{ // if no login
			$return['is_login']=0;
			$return['saved_search_count']=ZipperagentGlobalFunction()->zipperagent_get_saved_search_count();
			$return['favorites_count']=ZipperagentGlobalFunction()->zipperagent_get_favorites_count();
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
		
		$return['result']=$popup_is_closed;
		
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
		$city = isset($_REQUEST['city'])?$_REQUEST['city']:'';
		$state = isset($_REQUEST['state'])?$_REQUEST['state']:'';
		$zipCode = isset($_REQUEST['zipCode'])?$_REQUEST['zipCode']:'';
		$lookfor = isset($_REQUEST['lookfor'])?$_REQUEST['lookfor']:'';
		$buyer = isset($_REQUEST['buyer'])?$_REQUEST['buyer']:(strpos(strtolower($lookfor), 'buy') !== false?1:0);
		$seller = isset($_REQUEST['seller'])?$_REQUEST['seller']:(strpos(strtolower($lookfor), 'sell') !== false?1:0);
		$leadSource = isset($_REQUEST['leadSource'])?$_REQUEST['leadSource']:'';
		$assignedTo = isset($_REQUEST['assignedTo'])?$_REQUEST['assignedTo']:'';
		$propertyAlerts = isset($_REQUEST['propertyAlerts'])?"true":"false";;
		$note = $_REQUEST['note'];
		$url = urlencode($_REQUEST['actual_link']);
		$ref_page_url = $_REQUEST['ref_page_url'];
		$alertType = $_REQUEST['alertType'] ? $_REQUEST['alertType'] : 'NONE';
		
		if($ref_page_url == 1 ){
			$note .= "</ br></ br>" . " Property URL: " . urldecode($url);
		}
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
		
		
		// print_r($vars);
		
		/* chaptcha check */
		$response = null;
		
		if($chaptcha_enabled = is_register_form_chaptcha_enabled()){
			include ZIPPERAGENTPATH . '/custom/lib/recaptchalib.php';
			
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			$secret_key = isset($rb['google']['secret_key'])?$rb['google']['secret_key']:'';
			 
			 
			// check secret key
			$reCaptcha = new ReCaptcha($secret_key);
			
			$response = $reCaptcha->verifyResponse(
				$_SERVER["REMOTE_ADDR"],
				$_REQUEST["g-recaptcha-response"]
			);
			
			
			$chaptcha_check = $response != null && $response->success;
			$chaptcha_enabled = 1;
		}else{			
			$chaptcha_check = 1;
			$chaptcha_enabled = 0;
		}
		
		if($chaptcha_enabled && ! $chaptcha_check){
			
			switch($response->errorCodes){
				case 'missing-input':
						$msg = 'Please check chaptcha';
					break;
				default:
						$msg = 'Chaptcha Failed, please reload the page if error still happening';
					break;
			}
			
			$return['result']=0;
			$return['message']=$msg;
		}else{		
			
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
				'url'=>$url,
			);
			
			if($agent && is_show_agent_list()){
				$vars['assignedTo']=($agent);
			}
			
			if($assignedTo){
				$vars['assignedTo']=$assignedTo;
			}
			
			if($leadSource){
				$vars['leadSource']=$leadSource;
				$vars['websiteLeadFrom']="Website";
			}
			
			if(isset($_REQUEST['city'])){
				$vars['city']=$city;
			}
			
			if(isset($_REQUEST['state'])){
				$vars['state']=$state;
			}
			
			if(isset($_REQUEST['zipCode'])){
				$vars['zipCode']=$zipCode;
			}
			
			if(isset($_REQUEST['buyer'])){
				$vars['buyer']=$buyer;
			}
			
			if(isset($_REQUEST['seller'])){
				$vars['seller']=$seller;
			}
			
			if(isset($_REQUEST['lookfor'])){
				$vars['buyer']=$buyer;
				$vars['seller']=$seller;
			}
			
			$result = zipperagent_register_user( $vars );
			
			// echo "<pre>"; print_r( $_REQUEST); echo "</pre>";
			// echo "<pre>"; print_r( $vars); echo "</pre>";
			// echo "<pre>"; print_r( $result); echo "</pre>";
			//fix array
			// if(is_array($result)){
				// $result=isset($result[0])?$result[0]:'';
			// }
			
			$status=isset($result->status) && $result->status=='SUCCESS'?$result->result:0;
			
			// if there is no id, keep no error appear!
			/*if(!$id){
				$status='SUCCESS';
			}*/
			
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
			
			// echo "<pre>"; print_r($status); echo "</pre>";
			
			
			
			if($status){
				
				$myaccounturl=ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber');
			
				$return['email']=$email;
				$return['myaccountname']=zipperagent_user_name();
				$return['myaccounturl']=$myaccounturl;
				// $return['thankyouurl']=add_query_arg( array('action'=>'verify', 'code' => $result->id), site_url('/thankyou/') );
				$return['thankyouurl']=add_query_arg( array('email'=>$email), site_url('/thankyou/') );			
				$return['favorites_url']=add_query_arg( array('menu'=>'my-favorite'), $myaccounturl );
				$return['saved_search_url']=add_query_arg( array('menu'=>'my-search'), $myaccounturl );
			}else{				
				$return['message']=isset($result->errors[0]->errorMessage)?$result->errors[0]->errorMessage:'Submit failed!';
			}
			
			$return['result_params']=$result;
			// $return['vars']=$vars;
			$return['result']=$status;
			
			flush_rewrite_rules(); //fix page not found
			
			if(!zipperagent_signup_optional())
				$_SESSION['popup_is_triggered'] = 0; //reset popup state
			
			//add saved cookies to account
			// add_saved_cookies_to_account();
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
		$url = urlencode($_REQUEST['actual_link']);
		$ref_page_url = $_REQUEST['ref_page_url'];
		
		if($ref_page_url == 1 ){
			$note .= "</ br></ br>" . " Property URL: " . urldecode($url);
		}
		
		$vars=array(		
			'notes'=>$note,			
		);
		
		$note=urlencode($note);
		/* make sure contactId is single value */
		$contactIds = (strpos($contactId, ',')!==false) ? explode(',',$contactId) : $contactId;
		$contactId  = is_array($contactIds) ? $contactIds[0] : $contactId;
		
		if($chaptcha_enabled = is_register_form_chaptcha_enabled()){
			include ZIPPERAGENTPATH . '/custom/lib/recaptchalib.php';
			
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			$secret_key = isset($rb['google']['secret_key'])?$rb['google']['secret_key']:'';
			 
			 
			// check secret key
			$reCaptcha = new ReCaptcha($secret_key);
			
			$response = $reCaptcha->verifyResponse(
				$_SERVER["REMOTE_ADDR"],
				$_REQUEST["g-recaptcha-response"]
			);
			
			
			$chaptcha_check = $response != null && $response->success;
			$chaptcha_enabled = 1;
		}else{			
			$chaptcha_check = 1;
			$chaptcha_enabled = 0;
		}
		
		if($chaptcha_enabled && ! $chaptcha_check){
			
			switch($response->errorCodes){
				case 'missing-input':
						$msg = 'Please check chaptcha';
					break;
				default:
						$msg = 'Chaptcha Failed, please reload the page if error still happening';
					break;
			}
			
			$return['result']=0;
			$return['message']=$msg;
		}else{
		
			$result = zipperagent_run_curl( "/api/note/add2related/contact/{$contactId}?notes={$note}", array(), 1);
			// $result = zipperagent_run_curl( "/api/note/related/add/contact/{$contactId}/", array(), 1, $vars);
			// print_r( $vars);
			// print_r( $result);
			if(!empty($result)){			
				$return['result']=$result;
			}else{
				$return['result']=0;
				$return['message']='Submit failed!';
			}
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
		
		// default is map view 
		// if( ! isset( $_REQUEST['view'] ) ) {
			// $_REQUEST['view'] = 'map';
		// }
		
		$requests = $_REQUEST;
		$is_ajax = 1;
		$is_view_save_search = 0;
		
		if(isset($_REQUEST['is_view_save_search']) && !empty($_REQUEST['is_view_save_search'])){
			$is_enable_update = isset($rb['web']['enable_update_search'])?$rb['web']['enable_update_search']:0;
			if($is_enable_update){
				$is_view_save_search=1;
			}
		}
		
		ob_start();
		
		if(isset($requests['direct']) && $requests['direct']==1 && isset($requests['view']) && !in_array($requests['view'],array('map','photo')))		
			include ZIPPERAGENTPATH . "/custom/templates/template-search-results_crm.php";
		else
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
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$requests = $_REQUEST;
		$is_ajax = 1;
		$is_view_save_search = 0;
		
		if(isset($_REQUEST['is_view_save_search']) && !empty($_REQUEST['is_view_save_search'])){
			$is_enable_update = isset($rb['web']['enable_update_search'])?$rb['web']['enable_update_search']:0;
			if($is_enable_update){
				$is_view_save_search=1;
			}
		}
		
		$vars = $_REQUEST['vars'];
		$page = $_REQUEST['pagenum'];
		$num = $_REQUEST['num'];
		$maxtotal = $_REQUEST['maxlist'];
		$actual_link = $_REQUEST['actual_link'];
		$type = isset($_REQUEST['type'])?$_REQUEST['type']:'';
		
		if(isset($vars['coords']) || $type=='withinbox'){
			
			// if($type=='withinbox')
				// $resultCount = zipperagent_run_curl( "/api/mls/withinBoxOnlyCnt", $vars, 0, '', true );
			// else
				$resultCount = zipperagent_run_curl( "/api/mls/withinOnlyCnt", $vars, 0, '', true );
			
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
		}else if(isset($vars['distance'])){
			$resultCount = zipperagent_run_curl( "/api/mls/distanceOnlyCnt", $vars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
		}else{
			$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );			
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
		}

		if( $maxtotal > 0 && $count > $maxtotal ){ //limit total pages by max total
			$count = $maxtotal;
		}
		
		$tmp = explode(';',$vars['crit']);
		foreach($tmp as $val){
			if($val!=''){
				$var=explode(':',$val);
				$requests[$var[0]]=$var[1];
			}
		}
		
		$proptypes = explode(',', isset($requests['apt'])?$requests['apt']:'');
		
		$result['result']=1;
		$result['html_count']=zipperagent_list_total($count, (sizeof($proptypes)==1 ? $proptypes[0] : '') );
		
		$result['html_pagination']=zipperagent_pagination($page, $num, $count, $actual_link);
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_mortgage_calculator_count', 'mortgage_calculator_count' );
add_action( 'wp_ajax_nopriv_mortgage_calculator_count', 'mortgage_calculator_count' );

/*
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
*/
function mortgage_calculator_count(){
	
	if ( isset($_REQUEST) ) {
		
		extract($_REQUEST);
				
		$numbercount=0;
		$interest_enabled=0; $tax_enabled=0; $hoadues_enabled=0; $homeowners_enabled=0; $mortgage_enabled=0;
		$total_price=0;
			
		$price_downpayment = $homeprice * $downpaymentpercent / 100;
		$price_downpayment_montly = ( $homeprice * $downpaymentpercent / 100 ) / 12;
		
		switch($loantype){
			case "30yrs":
					$loan_year=30;
				break;
			case "15yrs":
					$loan_year=15;
				break;
			case "5-1arm":
					$loan_year=5;
				break;
		}
		
		$P = $homeprice - $price_downpayment;
		$R = $interestrate / 1200;
		$N = $loan_year * 12;
		// $EMI = ( $P * $R *  pow( 1 + $R, $N ) ) / ( pow( 1 + $R, $N ) - 1 );
		
		// echo "$homeprice - $price_downpayment;";
		// echo "( $P * $R *  pow( 1 + $R, $N ) ) / ( pow( 1 + $R, $N ) - 1 );";
		
		if($interestrate){
			
			$price_interest = ( $P * $R *  pow( 1 + $R, $N ) ) / ( pow( 1 + $R, $N ) - 1 );
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
		if($insurancepercent && $downpaymentpercent < 20){
			
			// $price_mortgage = ($homeprice / 12 * $insurancepercent / 100) - ($price_downpayment_montly * $insurancepercent / 100);
			$price_mortgage = ($homeprice - $price_downpayment) / 12 * $insurancepercent / 100;
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

add_action( 'wp_ajax_generate_map_markers', 'get_map_markers' );
add_action( 'wp_ajax_nopriv_generate_map_markers', 'get_map_markers' );

function get_map_markers(){
	
	if ( isset($_REQUEST) ) {
		
		global $requests, $is_ajax, $type;
		global $markers, $infoWindows, $NextMapIndex;
		
		$requests = $_REQUEST;
		$is_ajax = 1;
		$type='marker';
		
		include ZIPPERAGENTPATH . "/custom/templates/template-generateView.php";
		$result['markers']=$markers;
		$result['infoWindowContent']=$infoWindows;
		$result['next_index']=$NextMapIndex;
		$result['vars']=$mapvars;
		$result['pagenum']=$page;
		$result['num']=$num;
		$result['maxtotal']=$maxtotal;
		$result['actual_link']=$actual_link;
		
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_generate_map_markers_loop', 'get_map_markers_loop' );
add_action( 'wp_ajax_nopriv_generate_map_markers_loop', 'get_map_markers_loop' );

function get_map_markers_loop(){
	
	if ( isset($_REQUEST) ) {
		
		global $markers, $infoWindows, $NextMapIndex;
		
		// $maplimit=$_REQUEST['micro'] ? 1000 : 100;
		$maplimit=$_REQUEST['ps'];
		
		$mapindex=$_REQUEST['sidx'];
		
		// $mapvars['coords']=$_REQUEST['coords'];
		$mapvars['crit']=$_REQUEST['crit'];
		$mapvars['o']=$_REQUEST['o'];
		$mapvars['ps']=$_REQUEST['ps'];
		$mapvars['sidx']=$_REQUEST['sidx'];
		$mapvars['micro']=$_REQUEST['micro'];
		
		
		// $mapresult = zipperagent_run_curl( "/api/mls/withinBoxWoCnt", $mapvars );
		$mapresult = zipperagent_run_curl( "/api/mls/withinWoCnt", $mapvars );
		$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
		
		$mapindex+=($maplimit-1);
		$NextMapIndex = $mapindex+1;
		$args = zipperagent_generate_result_markers($maplist);
		extract($args);
		
		$result['markers']=$markers;
		$result['infoWindowContent']=$infoWindows;
		$result['next_index']=$NextMapIndex;
		$result['vars']=$mapvars;
		$result['pagenum']='';
		$result['num']='';
		$result['maxtotal']='';
		$result['actual_link']='';
		
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
		$single_property=ZipperagentGlobalFunction()->get_single_property( $listingId, implode(',',$contactIds), $searchId );
		
		/*custom field */
		if($single_property)
			$single_property->customtype = isset($single_property->propsubtype)?$single_property->propsubtype : $single_property->proptype;
		
		//get source details
		// $source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'', 'property'=>$single_property ), 'detail') : false;
		$source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'', 'property'=>$single_property ), 'detail_source') : false;
		$source_disclaimer = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'', 'updatedate'=>isset($single_property->updatedate)?$single_property->updatedate:'', 'property'=>$single_property ), 'detail_disclaimer') : false;

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
		if(ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='mlspin' || ZipperagentGlobalFunction()->is_zipperagent_new_detail_page())			
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

add_action( 'wp_ajax_related_properties', 'display_related_properties' );
add_action( 'wp_ajax_nopriv_related_properties', 'display_related_properties' );

function display_related_properties(){
	
	if ( isset($_REQUEST) ) {
		
		$vars = isset($_REQUEST['vars'])?$_REQUEST['vars']:'';
		
		$params=array();
		foreach($vars as  $k=>$v){
			$params[]="$k=\"$v\"";
		}
		
		ob_start();
		$html='';
		if(shortcode_exists('listing_slider')){
			$is_direct = ZipperagentGlobalFunction()->zipperagent_is_direct_detailpage() ? 1 : 0;
			$html='<h3>Related Properties</h3>'."\r\n";
			$html=$html.do_shortcode('[listing_slider direct="'. $is_direct .'" mobile_item="1" tablet_item="3" desktop_item="4" listinapage="10" '. implode( ' ', $params ) .']');;
		}
		$result['html']=$html;
		
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
			$array['saved_search_count']=(integer) ZipperagentGlobalFunction()->zipperagent_get_saved_search_count();
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
		$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:'';
		// $prefDate = "12/12/2017";
		$slot = isset($_REQUEST['slot'])?$_REQUEST['slot']:'';
		$message = isset($_REQUEST['message'])?$_REQUEST['message']:'';
		
		// if($actual_link){
			// $message .= "</ br></ br>".' Source URL: ' . $actual_link;
		// }
		
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
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
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
		$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:'';
		
		if($actual_link){
			$question .= "</ br></ br>".' Source URL: ' . $actual_link;
		}
		
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

			$response = ZipperagentGlobalFunction()->zipperagent_get_favorites_count(true);

			extract($response);
			
			$array['favorites_count']=(integer) $favorites_count;
			$array['saved_favorites'] = $saved_favorites;
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
		$single_property = ZipperagentGlobalFunction()->get_single_property($listingId, $contactIds);
		$divId = '#carousel-'.$listingId;
		
		ob_start();
		?>
		<div id="zpa-main-container" class="zpa-container " style="display: inline;" > 
			<div class="row">
				<div class="col-xs-12 zpa-property-photo">
					<div id="carousel-<?php echo $listingId ?>" class="zpa-main-image zpa-image-carousel carousel slide zpa-center" data-interval="false" aria-label="carousel">
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

		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			   
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
		$anycrit	 		= ( isset($requests['anycrit'])?$requests['anycrit']:'' );
		$searchId			= ( isset($requests['searchid'])?$requests['searchid']:'' );
		$alstid 			= ( isset($requests['alstid'])?$requests['alstid']:'' );
		$column 			= ( isset($requests['column'])?$requests['column']:'' );
		$school 			= ( isset($requests['school'])?$requests['school']:'' );
		$alkchnnm 			= ( isset($requests['alkchnnm'])?$requests['alkchnnm']:'' );

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
		
		/* generate mls_state_map */
		$arr=array();
		$mls_state_map=isset($rb['web']['mls_state_map']) ? $rb['web']['mls_state_map'] : array();
		foreach( $mls_state_map as $source => $param ){

			$arr=array(
				'ascr'=>$source,
				'astt'=>$param,
			);
			$anycrit.='('. proces_crit($arr) .')';
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
			$loc_address=array();
			$loc_hs=array();
			$loc_ms=array();
			$loc_gs=array();
			$loc_sd=array();
			
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
				}else if( substr($temp, 0, 9) == 'aflladdr_' ){
					$loc_address[]=substr($temp, 9);
				}else if( substr($temp, 0, 6) == 'hschl_' ){
					$loc_hs[]=substr($temp, 6);
				}else if( substr($temp, 0, 6) == 'mschl_' ){
					$loc_ms[]=substr($temp, 6);
				}else if( substr($temp, 0, 6) == 'gschl_' ){
					$loc_gs[]=substr($temp, 6);
				}else if( substr($temp, 0, 7) == 'aschdt_' ){
					$loc_sd[]=substr($temp, 7);
				}else{
					$loc_zipcode[]=$temp;
				}
			}
			
			/* convert array to string */
			if(sizeof($loc_country)) $locqry['acnty']=implode(',',$loc_country);
			if(sizeof($loc_town)) $locqry['atwns']=implode(',',$loc_town);
			if(sizeof($loc_area)) $locqry['aars']=implode(',',$loc_area);
			if(sizeof($loc_zipcode)) $locqry['azip']=implode(',',$loc_zipcode);
			if(sizeof($loc_address)) $locqry['aflladdr']=implode(',',$loc_address);
			if(sizeof($loc_hs)) $locqry['hschl']=implode(',',$loc_hs);
			if(sizeof($loc_ms)) $locqry['mschl']=implode(',',$loc_ms);
			if(sizeof($loc_gs)) $locqry['gschl']=implode(',',$loc_gs);
			if(sizeof($loc_sd)) $locqry['aschdt']=implode(',',$loc_sd);
			
			// die( $locqry );
		}
		if( $advStNo || $advStName || $advStZip || $advStates || $advTownNm || $advCounties ){
			
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
			
		}
		if($boundaryWKT){
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
		
		if( $alkchnnm )
			$advSearch['alkChnNm']=is_array($alkchnnm)?implode(',',$alkchnnm):$alkchnnm;
		
		//generate extra proptype variables
		if($extra_proptypes = zipperagent_extra_proptype()){
			foreach($extra_proptypes as $key=>$extra_proptype){
				
				if(isset($requests[strtolower($extra_proptype['abbrev'])])){
					$tempval=$requests[strtolower($extra_proptype['abbrev'])];
					unset($requests[strtolower($extra_proptype['abbrev'])]);
					$requests[$extra_proptype['abbrev']]=$tempval;
				}
			}
		}
		
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
		
		//generate rest of variables
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
		$page = isset($requests['pagenum']) ? $requests['pagenum'] : 1;

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
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			if($states){
				$search['astt']=str_replace(' ','',$states);
			}
			
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
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
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
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			if($states){
				$search['astt']=str_replace(' ','',$states);
			}
			
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
			
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
			$result = zipperagent_run_curl( "/api/mls/withinWoCnt", $vars );
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
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			if($states){
				$search['astt']=str_replace(' ','',$states);
			}
			
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
			
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
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
				// unset($search['asts']);
				$stattmp[]=zipperagent_active_status();
				$stattmp[]=zipperagent_sold_status();				
				$search['asts']=implode(',',$stattmp);
			}
			
			//set states
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			if($states){
				$search['astt']=str_replace(' ','',$states);
			}
			
			$search= array_merge($search, $locqry, $advSearch);
			
			$vars=array(
				'crit'=>proces_crit($search),
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			// echo "<pre>"; print_r( $vars ); echo "</pre>";
			if( $crit ){
				$vars['crit'] = $crit;
			}
			if( $anycrit ){
				$vars['anycrit'] = $anycrit;
			}
			
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
		$data['pagenum']=$page; //return next page
		
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
			$property=ZipperagentGlobalFunction()->get_single_property($listid);
		}
		
		foreach($property as $key=>$value){
			if(array_key_exists ($key, $default_fields)){
				$fields[$default_fields[$key]]=zipperagent_field_value($key, $value, $property->proptype, (isset($property->sourceid)?$property->sourceid:''));
			}
		}
		
		$fields['_lp_Address'] = zipperagent_get_address($property); 
		
		$result['fields']=$fields;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_cf7_autopopulate_rental_search_form', 'cf7_autopopulate_rental_search_form' );
add_action( 'wp_ajax_nopriv_cf7_autopopulate_rental_search_form', 'cf7_autopopulate_rental_search_form' );

function cf7_autopopulate_rental_search_form(){
	
	if ( isset($_REQUEST) ) {
				
		$userdata = ZipperagentGlobalFunction()->getCurrentUserContactLogin();
		// echo "<pre>"; print_r( $userdata); echo "</pre>";
		
		echo json_encode(array(
			'userdata' => isset($userdata[0]) ? $userdata[0] : array()
		));
         
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

add_action( 'wp_ajax_school3_options', 'get_school3_options' );
add_action( 'wp_ajax_nopriv_school3_options', 'get_school3_options' );

function get_school3_options(){
	
	if ( isset($_REQUEST) ) {
				
		$key = isset($_REQUEST['key'])?wp_strip_all_tags($_REQUEST['key']):'';
		$requests = isset($_REQUEST['requests'])?$_REQUEST['requests']:'';
		
		$schools = populate_schools3($key, $requests);
		
		$result['schools']=$schools;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_address_options', 'get_address_options' );
add_action( 'wp_ajax_nopriv_address_options', 'get_address_options' );

function get_address_options(){
	
	if ( isset($_REQUEST) ) {
				
		$key = isset($_REQUEST['key'])?wp_strip_all_tags($_REQUEST['key']):'';
		$requests = isset($_REQUEST['requests'])?$_REQUEST['requests']:'';
		
		$addresses = populate_addresses($key, $requests);
		
		$result['addresses']=$addresses;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_address_and_school_options', 'get_address_and_school_options' );
add_action( 'wp_ajax_nopriv_address_and_school_options', 'get_address_and_school_options' );

function get_address_and_school_options(){
	
	if ( isset($_REQUEST) ) {
				
		$key = isset($_REQUEST['key'])?wp_strip_all_tags($_REQUEST['key']):'';
		$requests = isset($_REQUEST['requests'])?$_REQUEST['requests']:'';
		
		$addresses = populate_addresses_and_schools($key, $requests);
		
		$result['addresses']=$addresses;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_listid_options', 'get_listid_options' );
add_action( 'wp_ajax_nopriv_listid_options', 'get_listid_options' );

function get_listid_options(){
	
	if ( isset($_REQUEST) ) {
				
		$key = isset($_REQUEST['key'])?wp_strip_all_tags($_REQUEST['key']):'';
		$requests = isset($_REQUEST['requests'])?$_REQUEST['requests']:'';
		
		$listids = populate_listids($key, $requests);
		
		$result['listids']=$listids;
		echo json_encode($result);
         
        die();
    }
}

add_action( 'wp_ajax_save_result_session', 'save_result_session' );
add_action( 'wp_ajax_nopriv_save_result_session', 'save_result_session' );

function save_result_session(){
	global $requests;
	
	if ( isset($_REQUEST) ) {
		
		$requests = $_REQUEST;
			
		$index = isset($_REQUEST['index'])?$_REQUEST['index']:'';
		$result = isset($_REQUEST['result'])?$_REQUEST['result']:array();
		$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:'';
		
		if(isset($result['filteredList'])){ //convert array to object
			foreach($result['filteredList'] as $k=>&$v){
				
				if(!isset($v->id) && isset($v['id'])){
					$v = json_decode(json_encode($v));
				}
			}
		}
		// print_r($result);
		
		if($index)
			zipperagent_save_session_result($index, $result);
		$return['result']=1;
		echo json_encode($return);
         
        die();
    }
}