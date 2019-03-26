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
			$return['myaccountname']=zipperagent_user_name();
			$return['myaccounturl']=$myaccounturl;
			$return['favorites_url']=add_query_arg( array('menu'=>'my-favorite'), $myaccounturl );
			$return['saved_search_url']=add_query_arg( array('menu'=>'my-search'), $myaccounturl );
			$return['result']=implode(',',$contactIds);
			
			flush_rewrite_rules(); //fix page not found
			
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

add_action( 'wp_ajax_schedule_show', 'schedule_show' );
add_action( 'wp_ajax_nopriv_schedule_show', 'schedule_show' );

function schedule_show(){
	
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

add_action( 'wp_ajax_request_info', 'request_info' );
add_action( 'wp_ajax_nopriv_request_info', 'request_info' );

function request_info(){
	
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
			   $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $daysfromnow, $openHomesMode, $openHomesOnlyYn, $maxDaysListed, $featuredOnlyYn, $hasVirtualTour, $withImage, $dateRange, $year, $alagt, $aloff, $showPagination, $showResults, $crit;
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
		$propertyType 		= ( isset($requests['propertytype'])?urldecode($requests['propertytype']):'' );
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

		//default status
		$status = empty($status)?zipperagent_active_status():$status;

		/**
		 * PREPARATION
		 * @ prepare the arguments before API process
		 */

		if( $is_ajax )
			$actual_link = $requests['actual_link'];
		else
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		

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
			preg_match( '/POLYGON \(\((.*?)\)\)/', $boundaryWKT, $match );
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
		
		//remove space from alstid (listing id search)
		if( isset($requests['alstid']) )
			$requests['alstid']=str_replace(' ','', $requests['alstid']);
		
		foreach( $requests as $key=>$val ){
			if( ! in_array( strtolower($key), $excludes ) ){
				$advSearch[$key]=($val);
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

		if( $openHomesMode ){ // open homes mode
			
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
			
			$vars=array(
				'startDate'=>$startDate,
				'endDate'=>$endDate,
				'sidx'=>$index,
				'ps'=>$num,
				'o'=>$o,
			);
			
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
				'apt'=>$propertyType,
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
			
			// if( $crit )
				// $vars['crit'] = $crit;
			
			$result = zipperagent_run_curl( "/api/mls/within", $vars );
			$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
		}else{ //if( $featuredOnlyYn=="true" || $status=='SLD' ){ //featured mode
			
			$search=array(
				'asrc'=>$rb['web']['asrc'],
				// 'aloff'=>$rb['web']['aloff'],
				'abeds'=>$bedrooms,
				'abths'=>$bathCount,
				'apt'=>$propertyType,
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
			
			$result = zipperagent_run_curl( "/api/mls/advSearch", $vars );
			$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
			$list=isset($result['filteredList'])?$result['filteredList']:$result;
			
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
	$filename=ABSPATH . "/za-plugin-version.txt";
	
	//create version txt file
	
    $file = fopen( $filename, "wb" );
	$txt = "version: " . ZIPPERAGENT_VERSION;
	fwrite($file, $txt);
	fclose($file);
}

add_action( 'init', 'zipperagent_global_popup_variable', 1);

function zipperagent_global_popup_variable(){
	global $zpa_show_login_popup;
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

add_action( 'wp_footer', 'zipperagent_detail_page_popup', 11);

function zipperagent_detail_page_popup(){
	global $is_detail_page, $single_property;
	
	if(!$is_detail_page) //show on detailpage only ?
		return;
	?>
	<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-schedule-show.php'; ?>
	<?php include ZIPPERAGENTPATH . '/custom/templates/template-requestInfo.php'; ?>
	</div>
	<?php
}

add_action( 'wp_footer', 'zipperagent_adword_scripts', 11);

function zipperagent_adword_scripts(){
	$rb = zipperagent_rb();
	$adwords_code = $rb['google']['adwords']['code'];
	
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