<?php

add_action( 'wp_head', 'generate_zipperagent_variables' );

function generate_zipperagent_variables(){
	$rb = ZipperagentGlobalFunction()->zipperagent_rb();
	$args['ajaxurl']=admin_url().'admin-ajax.php';
    $args['ZIPPERAGENTPATH']=ZIPPERAGENTPATH;
    $args['ZIPPERAGENTURL']=ZIPPERAGENTURL;
    $args['currency']=zipperagent_currency();
	
	$listing_url = '';
	if( interface_exists( 'zipperAgentConstants' ) ){
		$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL, null);
		$endpoint = !empty($endpoint)?$endpoint:'listing';
		$listing_url = site_url("/{$endpoint}/");	
	}
	$args['listingurl']=$listing_url;
	$args['active_status']=explode(',',zipperagent_active_status());
	$args['sold_status']=explode(',',zipperagent_sold_status());
	$args['pending_status']=explode(',',zipperagent_pending_status());
    $args['long_excludes']=get_long_excludes();
	$args['distance']=zipperagent_distance();
    $args['pagenum']=get_query_var('pagenum');
    $args['root']=base64_encode(json_encode($rb));
	$args['contactIds']=get_contact_id();
	$args['is_login']=ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0;
	$args['listing_disclaimer']=zipperagent_get_listing_disclaimer();
	$fields = get_field_list();
	$args['status_list']=isset($fields->STATUS)?$fields->STATUS:array();
	$args['source_cached']=zipperagent_get_source_details_cached();
	$args['is_show_agent_name']=is_show_agent_name();
	$args['property_types_refenrence']=get_field_reference_property_type();
	$args['property_types']=get_property_type();
	$proptypes = zipperagent_get_proptype_codes();
	$args['rental_code']=isset($proptypes['rental'])?explode(',',$proptypes['rental']):array('RNT');
	$args['detailpage_group']=ZipperagentGlobalFunction()->zipperagent_detailpage_group();
	$args['states']=isset($rb['web']['states'])?$rb['web']['states']:'';
	$args['browser_timezone']=date_default_timezone_get() ? date_default_timezone_get() : zipperagent_timezone();
	$args['extra_proptype']=zipperagent_extra_proptype();	
	$args['synctime']=zipperagent_get_synctime();
	$args['map_default_status']=zipperagent_get_map_default_status();
	$args['display_buyerrebate_amount']=isset($rb['web']['display.buyerrebate.amount'])?$rb['web']['display.buyerrebate.amount']:0;
	$args['buyerrebate_amount_prefix']=isset($rb['web']['buyerrebate.amount.prefix'])?$rb['web']['buyerrebate.amount.prefix']:'';
	$args['emptybuyerrebate_amount_text']=isset($rb['web']['emptybuyerrebate.amount.text'])?$rb['web']['emptybuyerrebate.amount.text']:'';
	
	$markers = zipperagent_get_map_markers();
	//echo '<pre>'; print_r($markers); echo '</pre>';
	
	if($markers){
	foreach($markers as $key => &$value){
		
		$proptype = zipperagent_property_type( $key );
		$value=array(
			'name' => $proptype,
			'url' => $value,
		);
	}}
	$args['map_markers']=$markers;
	
	$args['company_name']=zipperagent_company_name();	
	$args['agent_list']=zipperagent_get_agent_list();	
	$args['searchId']=isset($_GET['searchid'])?$_GET['searchid']:'';
	$args['field_list']=get_field_list();
	$asrc=$rb['web']['asrc'];
	$sources=explode(',', $asrc);
	if($asrc!=''){
		foreach($sources as $sourceid){
			$args['field_list_'.$sourceid]=get_field_list('detail', $sourceid);
		}
	}
	
	$args['za_image_clicked']=isset($_SESSION['za_image_clicked']) ? (int) $_SESSION['za_image_clicked'] : 0;
	$args['za_slider_limit_popup']=zipperagent_slider_limit_popup();
	$args['za_signup_optional']=zipperagent_signup_optional();
	$args['is_great_school_enabled']=is_great_school_enabled();
	$args['is_walkscore_enabled']=is_walkscore_enabled();
	$args['is_register_form_chaptcha_enabled']=is_register_form_chaptcha_enabled();
	$args['is_enable_save']=zipperagent_is_enable_save();
    $args['is_your_agent']=is_show_contact_agent();
	$args['saved_favorites']=zipperagent_get_favorites();
    $localize = $args;
	
	?>
	
	<script>
		var zipperagent = <?php echo json_encode($localize); ?>
	</script>
	
	<?php
}

add_action( 'wp_enqueue_scripts', 'za_enqueue_script', 11 );
 
function za_enqueue_script(){
	
	$rb = ZipperagentGlobalFunction()->zipperagent_rb();
	
	/*
	$args['ajaxurl']=admin_url().'admin-ajax.php';
    $args['ZIPPERAGENTPATH']=ZIPPERAGENTPATH;
    $args['ZIPPERAGENTURL']=ZIPPERAGENTURL;
    $args['currency']=zipperagent_currency();
	
	$listing_url = '';
	if( interface_exists( 'zipperAgentConstants' ) ){
		$endpoint = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL, null);
		$endpoint = !empty($endpoint)?$endpoint:'listing';
		$listing_url = site_url("/{$endpoint}/");	
	}
	$args['listingurl']=$listing_url;
	$args['sold_status']=explode(',',zipperagent_sold_status());
	$args['active_status']=explode(',',zipperagent_active_status());
    $args['long_excludes']=get_long_excludes();
	$args['distance']=zipperagent_distance();
    $args['pagenum']=get_query_var('pagenum');
    $args['root']=base64_encode(json_encode($rb));
	$args['contactIds']=get_contact_id();
	$args['is_login']=ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0;
	$args['listing_disclaimer']=zipperagent_get_listing_disclaimer();
	$fields = get_field_list();
	$args['status_list']=isset($fields->STATUS)?$fields->STATUS:array();
	$args['source_cached']=zipperagent_get_source_details_cached();
	$args['is_show_agent_name']=is_show_agent_name();
	$args['property_types_refenrence']=get_field_reference_property_type();
	$args['property_types']=get_property_type();
	$proptypes = zipperagent_get_proptype_codes();
	$args['rental_code']=isset($proptypes['rental'])?explode(',',$proptypes['rental']):array('RNT');
	$args['detailpage_group']=ZipperagentGlobalFunction()->zipperagent_detailpage_group();
	$args['states']=isset($rb['web']['states'])?$rb['web']['states']:'';
	$args['browser_timezone']=date_default_timezone_get() ? date_default_timezone_get() : zipperagent_timezone();
	
	$args['company_name']=zipperagent_company_name();	
	$args['agent_list']=zipperagent_get_agent_list();	
	$args['searchId']=isset($_GET['searchid'])?$_GET['searchid']:'';
	$args['field_list']=get_field_list();
	$asrc=$rb['web']['asrc'];
	$sources=explode(',', $asrc);
	if($asrc!=''){
		foreach($sources as $sourceid){
			$args['field_list_'.$sourceid]=get_field_list('detail', $sourceid);
		}
	}
	
	$args['za_image_clicked']=isset($_SESSION['za_image_clicked']) ? (int) $_SESSION['za_image_clicked'] : 0;
	$args['za_slider_limit_popup']=zipperagent_slider_limit_popup();
	$args['za_signup_optional']=zipperagent_signup_optional();
	$args['is_great_school_enabled']=is_great_school_enabled();
	$args['is_walkscore_enabled']=is_walkscore_enabled();
	$args['is_register_form_chaptcha_enabled']=is_register_form_chaptcha_enabled();
	$args['is_enable_save']=zipperagent_is_enable_save();
    $localize = $args;
    wp_localize_script('jquery','zipperagent',$localize); */
	
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
	if(session_id() === "" || (function_exists("session_status") && session_status() === PHP_SESSION_NONE)) {
		session_start();
	}
	// echo "<pre>"; print_r( $_SESSION ); echo "</pre>"; die();
	/* contactId session */
	if( (isset($_SESSION['contactId']) && !empty($_SESSION['contactId'])) || (isset($_COOKIE['contactId']) && !empty($_COOKIE['contactId'])) ){
		$result=isset($_SESSION['contactId'])?$_SESSION['contactId']:ZipperagentGlobalFunction()->zipperagent_get_cookie('contactId');
		$contactIds = $result;
		
		// if( is_array($contactIds) && isset($contactIds[0]) ){
			// $contactIds = $contactIds[0];
		// }
		// print_r( $result );
		// print_r( $_SESSION );
		// print_r( $_COOKIE );
		// print_r( $contactIds );
		
		ZipperagentGlobalFunction()->zipperagent_set_cookie('contactId', $contactIds);
	}
	
	/* userContact session */
	if( (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) || (isset($_COOKIE['userMail']) && !empty($_COOKIE['userMail'])) ){
		$userMail=isset($_SESSION['userMail'])?$_SESSION['userMail']:ZipperagentGlobalFunction()->zipperagent_get_cookie('userMail');
		$contactIds=isset($_SESSION['contactId'])?$_SESSION['contactId']:ZipperagentGlobalFunction()->zipperagent_get_cookie('contactId');
		// $contactIds=is_array($contactIds)?$contactIds[0]:$contactIds;
		$userRemember=isset($_SESSION['userRemember'])?$_SESSION['userRemember']:ZipperagentGlobalFunction()->zipperagent_get_cookie('userRemember');
		
		if( $userRemember ){
			ZipperagentGlobalFunction()->zipperagent_set_cookie('contactId', $contactIds);
			ZipperagentGlobalFunction()->zipperagent_set_cookie('userMail', $userMail);
			ZipperagentGlobalFunction()->zipperagent_set_cookie('userRemember', $userRemember);
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

add_action( 'zipperagent_single_content', 'zipperagent_single_content' );

function zipperagent_single_content($content){
	remove_action('zipperagent_single_content', 'zipperagent_single_content'); //DISABLE THE CUSTOM ACTION
    // echo $content;
	echo apply_filters('the_content', $content);
    add_action('zipperagent_single_content', 'zipperagent_single_content'); //REENABLE FROM WITHIN
}

add_action( 'init', 'fix_header_already_sent' );

function fix_header_already_sent(){
	ob_start();
}

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
	
	// default is map view 
	$rb = ZipperagentGlobalFunction()->zipperagent_rb();
	$new_layout = isset($rb['layout']['new_template'])?$rb['layout']['new_template']:0;
	
	if( $new_layout) {
		if( ! isset( $_REQUEST['view'] ) || $_REQUEST['view'] == '' ) {
			$_REQUEST['view'] = 'map';
		}
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
		// if(!isset($requests['boundaryWKT']) && !isset($requests['boundarywkt'])){ //default
			if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1 || ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='mlspin' || ZipperagentGlobalFunction()->is_zipperagent_new_detail_page()){
				if(isset($requests['direct']) && $requests['direct']==1)	
					include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage_crm.php";
				else
					include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage_new.php";
			}else
				include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage.php";
		// }else{ //map search		
			// $type='map';
			// include ZIPPERAGENTPATH . "/custom/templates/template-searchWithFilter2.php";
		// }	
		$content.=ob_get_clean();			
	}
	
	//Login Page
	$page_id = get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_ORGANIZER_LOGIN, null);
	
	if( !empty($post->ID) && $page_id == $post->ID && strpos($content, 'zpa-login-form') === false ){
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

// add_filter( 'the_content', 'zipperagent_thankyou_page' );

function zipperagent_thankyou_page($content){
	if( is_page('thankyou') ){
		ob_start();
		include_once ZIPPERAGENTPATH . '/custom/templates/template-thankyou.php';
		$content .= ob_get_clean();
	}
	
	return $content;
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
		
		$listingId = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
		$prop_exists=0;
		foreach($saved_props as $prop_index=>$prop){
			// if($prop->id == $single_property->id){
			if($prop->id == $listingId){
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
				$single_url = zipperagent_add_query_args( $query_args, zipperagent_property_url( $prev_prop->id, $fulladdress ) );
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
					<i class="fa fa-angle-left" aria-hidden="true" role="none"></i>						
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
				$single_url = zipperagent_add_query_args( $query_args, zipperagent_property_url( $next_prop->id, $fulladdress ) );
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
					<i class="fa fa-angle-right" aria-hidden="true" role="none"></i>						
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
									<div class="owl-carousel top-head-carousel <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?>" aria-label="carousel">
									<?php /* <div class="owl-carousel top-head-carousel"> */ ?>
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
									<div class="left-nav"><i class="icon-left-arrow" role="none"></i>
									</div>
									<div class="right-nav"><i class="icon-right-arrow" role="none"></i>
									</div>
								</div>
								<div class="carousel-controller-wrapper">
									<div class="owl-carousel carousel-controller" aria-label="carousel">
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
		<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/rs-slider/plugins.js'; ?>"></script>
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
					navText:['<i class="icon-left-arrow" role="none"></i>', '<i class="icon-right-arrow" role="none"></i>'],
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
				
				<?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ): //only for non logged in user ?>
				var count=<?php echo isset($_SESSION['za_image_clicked']) ? (int) $_SESSION['za_image_clicked'] : 0; ?>;
				var limit='<?php echo zipperagent_slider_limit_popup(); ?>';
				var preventDouble=0;
				$topHeadCarousel.on('changed.owl.carousel', function(event) {
					
					if(preventDouble){
						preventDouble=0;
						return;
					}
					
					count++;			
					ajax_image_count(count);		
					// if(count>=limit && limit != 0 && $topHeadCarousel.hasClass('needLogin')){
					if(count>=limit && limit != 0){
						jQuery('#needLoginModal:not(.loggedIn)').modal('show');
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
					
					preventDouble=1;
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
					navText:['<i class="icon-left-arrow" role="none"></i>', '<i class="icon-right-arrow" role="none"></i>'],
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
	else: ?>
		<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/rs-slider/plugins.js'; ?>"></script>
		<div id="zy_gallery-popup"></div>
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
	$rb = ZipperagentGlobalFunction()->zipperagent_rb();
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

add_action( 'wp_footer', 'zipperagent_print_popup', 11);

function zipperagent_print_popup(){
	global $zpa_show_login_popup, $is_detail_page, $single_property;
	
	if(!$is_detail_page)
		return;
	
	?>
	<div id="zpa-main-container" class="zpa-container " style="display: inline;">
		<?php include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-printPopup.php'; ?>
	</div>
	<?php
}

add_action( 'wp_footer', 'zipperagent_set_browser_timezone_cookie', 11);

function zipperagent_set_browser_timezone_cookie(){
	?>
	<script>
		var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

		za_set_cookie('browser_timezone', timezone, 100);

		function za_set_cookie(cname, cvalue, exdays){
		  var d = new Date();
		  d.setTime(d.getTime() + (exdays*24*60*60*1000));
		  var expires = "expires="+ d.toUTCString();
		  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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

add_filter( 'script_loader_tag', 'regal_tag', 10, 3 );
function regal_tag( $tag, $handle, $src ) {
	
	switch($handle){
		case "za-bundle-js":
				return "<script src='$src' async></script>";
			break;
		case "magicsuggest-js":
		case "owl-carousel-js":
				return "<script src='$src' defer></script>";
			break;
	}
	
	return $tag;
}

add_action( 'init', 'zipperagent_cid_login' );

function zipperagent_cid_login(){
	
	if( isset( $_GET['cid'] ) ){
		$cid = $_GET['cid'];
		$rememberMe = 0;
		$result = userContactLogin( $cid, $rememberMe, 'cid' );
		
		// echo "<pre>"; print_r( $result ); echo "</pre>"; die();
		
		if( $result ){
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			wp_safe_redirect( strip_param_from_url( $actual_link, 'cid' ) );
			die();
		}
	}	
}

function strip_param_from_url( $url, $param ) {
    $base_url = strtok($url, '?');              // Get the base url
    $parsed_url = parse_url($url);              // Parse it 
    $query = $parsed_url['query'];              // Get the query string
    parse_str( $query, $parameters );           // Convert Parameters into array
    unset( $parameters[$param] );               // Delete the one you want
    $new_query = http_build_query($parameters); // Rebuilt query string
	
	if( $new_query ){
		return $base_url.'?'.$new_query;            // Finally url is ready		
	}else{
		return $base_url;
	}	
}


//custom blog posts endpoint added by ravinder
// Add custom rewrite rule
function custom_rewrite_rules() {
    // Rewrite rule for POST requests
    add_rewrite_rule('^blog/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})/?$', 'index.php?postblog=1&uuid=$matches[1]', 'top');

    // Rewrite rule for DELETE requests
    add_rewrite_rule('^blog/([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})/blogid/?$', 'index.php?deleteblog=1&uuid=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rules');


// Add query var
function postblog_query_vars($query_vars) {
    $query_vars[] = 'blog';
    return $query_vars;
}
add_filter('query_vars', 'postblog_query_vars');

// Template redirect hook
function postblog_endpoint_template_redirect() {
    global $wp;

    if(isset($wp->request) && strpos($wp->request, 'blog') !== false && strpos($_SERVER['REQUEST_URI'], '018e2e22-aa27-7338-b9dc-ca66663935f8') !== false){
		$zakey_header = isset($_SERVER['HTTP_ZAKEY']) ? $_SERVER['HTTP_ZAKEY'] : null;
		if ($zakey_header !== null) {
			$decoded_zakey = base64_decode($zakey_header);
			
			
            if ($decoded_zakey !== false) {
			
				list($subdomain, $consumerkey) = explode(':', $decoded_zakey);
			
				$rb = ZipperagentGlobalFunction()->zipperagent_rb();
				$root_subdomain = $rb['web']['subdomain'];
				$root_consumerkey = $rb['web']['authorization']['consumer_key'];
				
				if ($subdomain === $root_subdomain && $consumerkey === $root_consumerkey) {
					
					if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  strpos($_SERVER['REQUEST_URI'], 'get-users') !== false) {
						handle_get_users_request();
					}
					else if ($_SERVER['REQUEST_METHOD'] === 'POST' && stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {
						
						handle_json_create_blog_request();
					}
					else if ($_SERVER['REQUEST_METHOD'] === 'DELETE' ) {
						handle_blog_delete_request();
					}else{
						status_header(404);
						exit;
					}

				}else{
					
					status_header(404);
					exit;
				}
			}else{
				status_header(404);
				exit;
			}

		}else{
			status_header(404);
			exit;
		}
	}
}
function handle_get_users_request() {
	$all_users = get_users();
    $emails = array();
    foreach ($all_users as $user) {
		if ($user->user_email !== 'sanjay.singh@zyprr.com') {
        	$emails[] = $user->user_email;
		}
    }
	status_header(200);
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($emails);
	exit;
}
function handle_json_create_blog_request() {
	// Get JSON data from the request body
	$json_data = json_decode(file_get_contents("php://input"), true);

	// Check if required fields are present in JSON data
	if (isset($json_data['title']) && isset($json_data['status']) && isset($json_data['content']) && isset($json_data['category'])) {
	
		$category_name = sanitize_text_field($json_data['category']);
		$category_id = get_cat_ID($category_name);
		$user_email = sanitize_email($json_data['email']);
		$user = get_user_by('email', $user_email);
		
		 // If the category doesn't exist, create it
		 if ($category_id == 0) {
			$category = wp_insert_term($category_name, 'category');
			if (!is_wp_error($category)) {
				$category_id = $category['term_id'];
			} else {
				// Handle error creating category
				status_header(500);
				header('Content-Type: application/json; charset=utf-8');
				echo json_encode(array('status' => 'error', 'message' => 'Error creating category', 'details' => $category->get_error_message()));
				exit;
			}
		}
		// Create a new post
		if ($user) {
			$user_id = $user->ID;
			$post_data = array(
				'post_title' => sanitize_text_field($json_data['title']),
				'post_status' => sanitize_text_field($json_data['status']),
				'post_content' => wp_kses_post($json_data['content']),
				'post_category' => array($category_id),
				'post_author' => $user_id,
			);
		}else{
			$post_data = array(
				'post_title' => sanitize_text_field($json_data['title']),
				'post_status' => sanitize_text_field($json_data['status']),
				'post_content' => wp_kses_post($json_data['content']),
				'post_category' => array($category_id),
			);
		}
		
	

		$post_id = wp_insert_post($post_data);

		if (!is_wp_error($post_id)) {
			if (isset($json_data['featureimageurl'])) {
				$feature_image_url = esc_url_raw($json_data['featureimageurl']);
				$filename = basename($feature_image_url);
		
				// Default extension if missing
				$extension = '.jpg'; // Default extension if needed
				if (strpos($filename, '.') === false) {
					$filename .= $extension;
				}
		
				// Download the image data
				$image_data = file_get_contents($feature_image_url);
		
				if (!$image_data) {
					// Handle error if image data cannot be retrieved
					status_header(400);
					echo json_encode(array('status' => 'error', 'message' => 'Failed to retrieve image data'));
					exit;
				}
		
				// Upload the file using wp_upload_bits
				$upload_file = wp_upload_bits($filename, null, $image_data);
				if ($upload_file['error']) {
					// Handle error if file upload fails
					status_header(500);
					echo json_encode(array('status' => 'error', 'message' => 'Failed to upload image'));
					exit;
				}
		
				// Use getimagesize() to determine the correct MIME type
				$image_info = getimagesize($upload_file['file']);
				$mime_type = $image_info ? $image_info['mime'] : 'image/jpeg'; // Default to 'image/jpeg' if detection fails
		
				// Prepare attachment data
				$attachment = array(
					'guid' => $upload_file['url'],
					'post_mime_type' => $mime_type,
					'post_title' => sanitize_file_name($filename),
					'post_content' => '',
					'post_status' => 'inherit'
				);
		
				// Insert attachment into WordPress media library
				$attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
		
				if (!is_wp_error($attachment_id)) {
					// Generate and update attachment metadata
					require_once(ABSPATH . 'wp-admin/includes/image.php');
					$attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
					wp_update_attachment_metadata($attachment_id, $attachment_data);
		
					// Set the featured image of the post
					set_post_thumbnail($post_id, $attachment_id);
				} else {
					// Handle error if attachment insertion fails
					status_header(500);
					echo json_encode(array('status' => 'error', 'message' => 'Failed to insert attachment'));
					exit;
				}
			}
		
			// Post created successfully
			$post_title = get_the_title($post_id);
			$post_url = get_permalink($post_id);
		
			status_header(200);
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array('status' => 'success', 'message' => 'Blog created successfully', 'post_id' => $post_id, 'title' => $post_title, 'url' => $post_url));
			exit;
		}
		
		 else {
			// Error creating post
			status_header(500);
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array('status' => 'error', 'message' => 'Error creating blog post', 'details' => $post_id->get_error_message()));
			exit;
		}
	} else {
		// Missing required fields in JSON data
		status_header(400);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode(array('status' => 'error', 'message' => 'Missing required fields', 'details' => 'Title, status, content, and category are required fields.'));
		exit;
	}

}
function handle_blog_delete_request() {
    $url_parts = explode('/', $_SERVER['REQUEST_URI']);
    $post_id = end($url_parts);
	if (get_post_status($post_id)) {
		// Delete the post
		$result = wp_delete_post($post_id, true); 
		if ($result !== false) {
			status_header(200);
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array('status' => 'success', 'message' => 'Blog deleted successfully', 'blog_id' => $post_id));
			exit;
		} else {
			status_header(200);
			header('Content-Type: application/json; charset=utf-8');
			echo json_encode(array('status' => 'error', 'message' => 'something want worng', 'blog_id' => $post_id));
			exit;
		}
	} else {
		status_header(500);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array('status' => 'error', 'message' => 'Error deleting blog post'));
        exit;
	}

}


// create new blog endpoint
add_action('template_redirect', 'postblog_endpoint_template_redirect');
//end of custom blog posts




// hook for logout action custom
add_action( 'init', 'custom_logout_action_custom_code' );
function custom_logout_action_custom_code() {
    // Custom logout URL
    $logoutUrlCustom = ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout');
	$parsedUrl = parse_url($logoutUrlCustom);
    $logoutPath = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
    if ( isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] === $logoutPath ) {
        userContactLoggout();
    }
}



function javascript_function_clean_search_data() {
	?>
	<script> 
	function cleanDataArray(dataArray, inputText) {

    // Helper function to remove special characters (#, ,) and normalize spaces to single space
    const normalizeString = str => str.replace(/[#,]/g, '').replace(/\s+/g, ' ').trim().toLowerCase();
    
    // Clean the input text
    const cleanedInputText = normalizeString(inputText);


	let cleanedInput = inputText.replace(/,/g, '');
	
    // Iterate over each item in the dataArray
    dataArray.forEach(item => {
        if (item && item.name) {
            const cleanedItemName = normalizeString(item.name);
            
            const index = cleanedItemName.indexOf(cleanedInputText);
            
            if (index !== -1) {
                let cleanedRunningIndex = 0;
                let originalStartIndex = -1;
                let originalEndIndex = -1;
                
                for (let i = 0; i < item.name.length; i++) {
                    if (/[#,]/.test(item.name[i])) continue;

                    if (cleanedRunningIndex === index && originalStartIndex === -1) {
                        originalStartIndex = i;
                    }

                    if (cleanedRunningIndex === index + cleanedInputText.length) {
                        originalEndIndex = i;
                        break;
                    }

                    cleanedRunningIndex++;
                }
                
                if (originalEndIndex === -1) {
                    originalEndIndex = item.name.length;
                }
                item.name = item.name.slice(0, originalStartIndex) + inputText + item.name.slice(originalEndIndex);
				// if(!item.name.includes(',')){
				// 	document.querySelector('#zpa-all-input input').value=cleanedInput;
				// }

            }
        }
    });

    return dataArray;
}


	</script>
	<?php
	
 }
 add_action('wp_footer', 'javascript_function_clean_search_data');