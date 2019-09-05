<?php
add_shortcode( 'single_property', 'display_single_property' );

function display_single_property(){
	
	global $single_property, $property_cache, $requests, $zpa_show_login_popup, $is_detail_page;
	
	$zpa_show_login_popup=1;
	$is_detail_page=1;
	
	$requests=$_REQUEST;
	
	ob_start();	
	if(zipperagent_detailpage_group()=='mlspin' || is_zipperagent_new_detail_page()){		
		include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty-newDetail.php";
	}else if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){		
		include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty_new.php";
	}else{
		include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty.php";
	}
	$html=ob_get_clean();
	
	// $html = zipperagent_property_fields($single_property, $html);	

	return $html;
}

add_shortcode( 'listingphotos', 'display_single_property_exterior_features' );

function display_single_property_exterior_features(){
	
	global $single_property;
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-singlePropertyExteriorFeature.php";
	$html=ob_get_clean();
	
	$html = zipperagent_property_fields($single_property, $html);	

	return $html;
}

add_shortcode( 'search_properties', 'display_search_property' );

function display_search_property($atts){
	
	global $requests, $is_shortcode;
	
	$requests=$atts;
	
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	// if( isset($requests['propertytype']) ){
		// $requests['propertytype']=explode(',',$requests['propertytype']);
	// }
	
	$requests['is_shortcode']=1;
	$is_shortcode=1;
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	ob_start();
	if( isset($requests['ajax']) && $requests['ajax']==0 ){
		include ZIPPERAGENTPATH . "/custom/templates/template-search-results.php";
	}else{
		include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage.php";
	}
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($is_shortcode);
	// echo "<pre>"; print_r( $requests ); echo "</pre>";
	
	return $html;
}

add_shortcode( 'luxury_properties', 'display_luxury_property' );

function display_luxury_property($atts){
	
	global $requests;
	
	$requests=$atts;
	
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-luxuryProperties.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	
	return $html;
}

add_shortcode( 'za_open_house_search', 'display_open_house_search' );

function display_open_house_search($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
		// 'property_type_option' => '',
		// 'property_type_default' => '',
	), $atts, 'open_house' );
	
	$requests = $atts;
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-openHouseSearch.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_quick_search', 'display_quick_search' );

function display_quick_search($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'column' => '',
		'o' => '',
		// 'property_type_option' => '',
		// 'property_type_default' => '',
		'minlistprice' => 500,
		'maxlistprice' => 10000000,
		'newsearchbar' => '',
	), $atts, 'quick_search' );
	
	$requests = $atts;
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_quick_search2', 'display_quick_search2' );

function display_quick_search2($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'minlistprice' => 500,
		'maxlistprice' => 10000000,
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
	), $atts, 'quick_search2' );
	
	$requests = $atts;
		
	ob_start();
	if($requests['newsearchbar']==1){	
		include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch2_new.php";
	}else{	
		include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch2.php";
	}
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_quick_search3', 'display_quick_search3' );

function display_quick_search3($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'minlistprice' => 500,
		'maxlistprice' => 10000000,
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
	), $atts, 'quick_search3' );
	
	$requests = $atts;
		
	ob_start();	
	if($requests['newsearchbar']==1){	
		include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch3_new.php";
	}else{	
		include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch3.php";
	}
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_quick_search4', 'display_quick_search4' );

function display_quick_search4($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'minlistprice' => 500,
		'maxlistprice' => 10000000,
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
	), $atts, 'quick_search4' );
	
	$requests = $atts;
	
	ob_start();	
	if($requests['newsearchbar']==1){	
		include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch4_new.php";
	}else{	
		include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch4.php";
	}
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_quick_search5', 'display_quick_search5' );

function display_quick_search5($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		// 'minlistprice' => 500,
		// 'maxlistprice' => 10000000,
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
	), $atts, 'quick_search5' );
	
	$requests = $atts;
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch5.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_quick_search6', 'display_quick_search6' );

function display_quick_search6($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'column' => '',
		'o' => '',
		// 'property_type_option' => '',
		// 'property_type_default' => '',
		'minlistprice' => 500,
		'maxlistprice' => 10000000,
	), $atts, 'quick_search6' );
	
	$requests = $atts;
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-quickSearch6.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'zpa_mortgage_calculator', 'display_mortgage_calculator' );

function display_mortgage_calculator($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'home_price' => '',
		'down_payment_percentage' => '',
		'interest_rate_percentage' => '',
		'tax_percentage' => '',
		'loan_type' => '',
	), $atts, 'mortgage_calculator' );
	
	$requests = $atts;
	
	$args=array();
	
	if(!empty($atts['home_price']))					$args['default_homeprice'] = $requests['home_price'];
	if(!empty($atts['down_payment_percentage']))	$args['default_downpayment_percent'] = $requests['down_payment_percentage'];
	if(!empty($atts['tax_percentage']))				$args['default_taxes_percent'] = $requests['tax_percentage'];
	if(!empty($atts['interest_rate_percentage']))	$args['default_interestrate'] = $requests['interest_rate_percentage'];
	if(!empty($atts['loan_type']))					$args['default_loan_type'] = $requests['loan_type'];
	
	ob_start();	
	if(is_zipperagent_new_detail_page()){
		
		echo '<div id="zpa-main-container" class="zpa-container">';
		echo '<div class="row">';
		echo '<div id="zy_mortgage-calculator" class="col-xs-12 col-md-12 col-lg-12">';
		zipperagent_mortgage_calculator($args);
		echo '</div></div></div>';
		
	}else{	
		include ZIPPERAGENTPATH . "/custom/templates/template-shortcode-mortgage.php";
	}
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_logout', 'display_zipperagent_logout' );

function display_zipperagent_logout(){
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-organizerLogout.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_gallery_view', 'display_zipperagent_gallery_view' );

function display_zipperagent_gallery_view($atts){
	global $type, $requests;
	
	$requests=$atts;
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	$type="gallery";
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-searchWithFilter.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($type);
	
	return $html;
}

add_shortcode( 'za_map_view', 'display_zipperagent_map_view' );

function display_zipperagent_map_view($atts){
	global $type, $requests;
	
	$requests=$atts;
	
	//define location
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	$type="map";
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-searchWithFilter2.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($type);
	
	return $html;
}

add_shortcode( 'za_photo_view', 'display_zipperagent_photo_view' );

function display_zipperagent_photo_view($atts){
	global $type, $requests;
	
	$requests=$atts;
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	$type="photo";
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-searchWithFilter3.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($type);
	
	return $html;
}

add_shortcode( 'za_user_access', 'display_zipperagent_za_user_access' );

function display_zipperagent_za_user_access($atts){
	global $requests;
	
	$atts = shortcode_atts( array(
		'login_url' => '',
		'myaccount_url' => '',
	), $atts, 'myaccount_url' );
	
	$requests = $atts;
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-shortcode-myaccountUrl.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'own_listing_slider', 'display_own_listing_slider' );

function display_own_listing_slider($atts){
	global $requests;
	
	$requests=$atts;
	
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	$requests['is_shortcode']=1;
	$is_shortcode=1;
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-propertySliderWidget.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($is_shortcode);
	// echo "<pre>"; print_r( $requests ); echo "</pre>";
	
	return $html;
}

add_shortcode( 'own_listing_banner', 'display_own_listing_banner' );

function display_own_listing_banner($atts){
	global $requests;
	
	$requests=$atts;
	
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	$requests['is_shortcode']=1;
	$is_shortcode=1;
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-propertyOwnListingSliderBanner.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($is_shortcode);
	// echo "<pre>"; print_r( $requests ); echo "</pre>";
	
	return $html;
}

add_shortcode( 'listing_banner', 'display_listing_banner' );

function display_listing_banner($atts){
	global $requests;
	
	$requests=$atts;
	
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	$requests['is_shortcode']=1;
	$is_shortcode=1;
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-propertySliderBanner.php";
	$html=ob_get_clean();
	
	/* Reset variables */
	unset($requests);
	unset($is_shortcode);
	// echo "<pre>"; print_r( $requests ); echo "</pre>";
	
	return $html;
}

add_shortcode( 'masonry_listing', 'display_masonry_listing' );

function display_masonry_listing($atts){
	global $requests;
	
	$requests=$atts;
	
	if( isset($requests['location']) ){
		$requests['location']=explode(',',$requests['location']);
	}
	
	$requests['is_shortcode']=1;
	$is_shortcode=1;
	
	//save all http request to $request
	foreach( $_REQUEST as $key=>$val ){
		$requests[$key]=$val;
	}
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-masonryListing.php";
	$html=ob_get_clean();
	
	/* Reset variables */	
	unset($requests);
	unset($is_shortcode);
	// echo "<pre>"; print_r( $requests ); echo "</pre>";
	
	return $html;
}

add_shortcode( 'office_listing', 'display_office_listing' );

function display_office_listing($atts){
	
	$rb = zipperagent_rb();
	$aloff=isset($rb['web']['aloff'])?$rb['web']['aloff']:null;
	
	$vars=array();
	if(is_array($atts)){
		foreach( $atts as $var=>$val ){
			$vars[]= $var.'="'.$val.'"';
		}
	}
	
	ob_start();	
	echo do_shortcode('[search_properties aloff="'. $aloff .'" '. implode( ' ', $vars ) .']');
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'open_house', 'display_open_house' );

function display_open_house($atts){
	$vars=array();
	if(is_array($atts)){
		foreach( $atts as $var=>$val ){
			$vars[]= $var.'="'.$val.'"';
		}
	}
	
	ob_start();	
	echo do_shortcode('[search_properties openHomesMode="true" '. implode( ' ', $vars ) .']');
	// echo do_shortcode('[search_properties openHomesMode="true" minDate="2016-7-1" maxDate="2017-10-31" maxdays="14"]');
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'search_distance', 'display_search_distance' );

function display_search_distance($atts){
	$vars=array();
	if(is_array($atts)){
		foreach( $atts as $var=>$val ){
			$vars[]= $var.'="'.$val.'"';
		}
	}
	
	ob_start();	
	echo do_shortcode('[search_properties searchDistance="true" '. implode( ' ', $vars ) .']');
	$html=ob_get_clean();
	
	return $html;
}

// add_shortcode( 'own_listing', 'display_own_listing' );

function display_own_listing($atts){
	$vars=array();
	if(is_array($atts)){
		foreach( $atts as $var=>$val ){
			$vars[]="$var=$val";
		}
	}
	
	ob_start();	
	echo do_shortcode('[own_listing_slider openHomesMode="true" '. implode( ' ', $vars ) .']');
	// echo do_shortcode('[search_properties openHomesMode="true" minDate="2016-7-1" maxDate="2017-10-31" maxdays="14"]');
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_basic_search', 'getAdvancedSearch' );
function getBasicSearch($atts){
	
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
		'minlistprice' => '',
		'maxlistprice' => '',
	), $atts, 'basic_search' );
	
	$requests = $atts;
	
	ob_start();	
	if($requests['newsearchbar']==1){		
		include ZIPPERAGENTPATH . "/custom/templates/template-searchFormVirtualPage_new.php";
	}else{
		include ZIPPERAGENTPATH . "/custom/templates/template-searchFormVirtualPage.php";
	}
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'za_advanced_search', 'getAdvancedSearch' );
function getAdvancedSearch($atts){
	
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'column' => '',
		'o' => '',
		'newsearchbar' => '',
		'minlistprice' => '',
		'maxlistprice' => '',
	), $atts, 'quick_search2' );
	
	$requests = $atts;
		
	ob_start();	
	if($requests['newsearchbar']==1){
		include ZIPPERAGENTPATH . "/custom/templates/template-advancedSearchFormVirtualPage_new.php";
	}else{
		include ZIPPERAGENTPATH . "/custom/templates/template-advancedSearchFormVirtualPage.php";
	}
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'za_map_search', 'getMapSearch' );
function getMapSearch($atts){
	
	global $requests;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'o' => '',
		'newsearchbar' => '',
		'minlistprice' => '',
		'maxlistprice' => '',
		'map_zoom' => 9,
	), $atts, 'za_map_search' );
	
	$requests = $atts;
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-mapSearch.php";	
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'za_map_explore', 'getMapExplore' );
function getMapExplore($atts){
	
	global $requests, $is_ajax_count, $showResults;
	
	$atts = shortcode_atts( array(
		'location_option' => '',
		'property_type_option' => '',
		'property_type_default' => '',
		'o' => '',
		'newsearchbar' => '',
		'minlistprice' => '',
		'maxlistprice' => '',
		'map_zoom' => 9,
		'result' => 1,
	), $atts, 'za_map_search' );
	$requests = $atts;
	$is_ajax_count = 1;
	
	$showResults = $requests['result'];
	
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-mapExplore.php";	
	$html=ob_get_clean();
	
	return $html;	
}

function getOrganizerLogin(){
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-organizerLoginForm.php";
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'landingpage_gallery', 'display_landingpage_gallery' );

function display_landingpage_gallery($atts){
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-gallery.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'landingpage_map', 'display_landingpage_map' );

function display_landingpage_map($atts){
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-map.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'landingpage_highlight', 'display_landingpage_highlight' );

function display_landingpage_highlight($atts){
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-highlight.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'landingpage_details', 'display_landingpage_details' );

function display_landingpage_details($atts){
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-details.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'landingpage_agent', 'display_landingpage_agent' );

function display_landingpage_agent($atts){
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-agent.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'landingpage_download', 'display_landingpage_download' );

function display_landingpage_download($atts){
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-download.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'landingpage_other_properties', 'display_landingpage_other_properties' );

function display_landingpage_other_properties($atts){
	global $args;
	
	$atts = shortcode_atts( array(
		'posts_per_page' => -1,
		'category' => '',
		'category_name' => '',
		'orderby' => 'title',
		'order' => 'ASC',
		'post_type' => 'page',
	), $atts, 'other_properties' );
	
	$args=$atts;
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/landingpage/template-other-properties.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'za_social_share', 'display_social_share' );

function display_social_share($atts){
	global $is_shortcode;
	
	$is_shortcode = 1;
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-social-share.php";
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'za_thankyou', 'display_thankyou_page' );

function display_thankyou_page($atts){
	
	ob_start();
	include_once ZIPPERAGENTPATH . '/custom/templates/template-thankyou.php';
	$html=ob_get_clean();
	
	return $html;	
}

add_shortcode( 'artifakt-video', 'art_vid_func' );

function art_vid_func( $atts ) {
    $a = shortcode_atts( array(
        'url' => '',
	'image' => '',
    ), $atts );
	
	if ( strpos( $a['url'], 'you' ) !== false ) {
		$url = str_replace('watch?v=', 'embed/', $a['url']);	
		$parse = parse_url( $a['url'] );
		$id = str_replace('v=', '', $parse['query'] );
		$class = 'artYoutube';
	} elseif ( strpos( $a['url'], 'vimeo' ) !== false ) {
		$url = $a['url'];
		$id = 'vimeo';
		$class = 'artVimeo';
	}
	
	$html = '<div class="fluid-width-video-wrapper artVideo '.$class.'">';
	$html .= '<a class="showvid" href="#" style="background-image:url('.$a['image'].');"><span><i class="fa fa-play-circle"></i></span></a>';
	$frame = wp_oembed_get( $a['url'] );
	$frame = str_replace('?feature', '?enablejsapi=1&modestbranding=1&rel=0&showinfo=0&feature', $frame);
	$frame = str_replace('<iframe', '<iframe id="player-'.$id.'" class="art-player"', $frame);
	$html .= $frame;
	$html .= '</div>';
    return $html;
}

add_shortcode( 'fancytitle', 'fancytitle_func' );
function fancytitle_func( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => '',
		'class' => ''
	), $atts );
	
	$html = '<div class="fancy-wrap '.$a[ 'class' ].'">';
	$html .= '<div class="fancy-title"><h4 class="redtext caps"><strong>'.$a[ 'title' ].'</strong></h4></div>';
	$html .= do_shortcode( $content );
	$html .= '</div>';
		
	return $html;

}

add_shortcode( 'za_map', 'za_generate_map' );
function za_generate_map($atts) {
	// Extract the attributes
	extract(shortcode_atts(array(
		'center' => '',
		'zoom' => 12,
		'color' => '',
		'msid' => '',
		'div' => 'map-canvas',
		'width' => '100%',
		'image' => '',
		'height' => '300px',
		'text' => '',
		'street' => '',
		'sat' => '',
		'url' => '',
		'satellite' => '',
		), $atts));

		$style =  html_entity_decode(get_option('artmap_json'));

		$html = '<div id="'. $div .'" style="width:'. $width .'; height: '. $height .';" class="artifakt-maps"></div>';
		
		ob_start();
		?>
		<script>
			var map = "";

			function loadMap( options ) {

			var center = options.center;
			var msid = options.msid;
			var image = options.image;
			var url = options.url;
			var zoom = options.zoom || 16;
			var color = options.color || '';
			var div = options.div || 'map-canvas';
			var text = options.text;
			var str = options.street;
			var sat = options.sat || 1;
			var invert = options.invert || false;
			var satellite = options.satellite;
			  
				var MY_MAPTYPE_ID = 'custom_style';    	
				var featureOpts = [
				{
				stylers: [
					{ hue: color },
				{ saturation: sat },
				{ invert_lightness: invert },
					]
					}
				];
				
			var mapOptions = {
				zoom: zoom,
				scrollwheel: false,
				mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
				},
				mapTypeId: MY_MAPTYPE_ID
				
			};

			map = new google.maps.Map(document.getElementById(div), mapOptions);

			var geocoder;
			geocoder = new google.maps.Geocoder();
			   var address = center;
				geocoder.geocode( { 'address': address}, function(results, status) {
				  if (status == google.maps.GeocoderStatus.OK) {
					var latlng = results[0].geometry.location;
					map.setCenter(results[0].geometry.location);
					newMarker({address : address, url : url, image : image, text : text, map : map });
				}
			});

			var styledMapOptions = {
				name: 'Custom Style'
			};
			var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
			map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

			if ( msid ) {
				var georssLayer = new google.maps.KmlLayer( { url: 'http://mapsengine.google.com/map/kml?mid='+msid });
				georssLayer.setMap(map);
			}

			function loadStreet(div) {
			var geocoder;
			geocoder = new google.maps.Geocoder();
			   var address = center;
				geocoder.geocode( { 'address': address}, function(results, status) {
				  if (status == google.maps.GeocoderStatus.OK) {
						var latlng = results[0].geometry.location;
					var panoramaOptions = {
						position: latlng,
						pov: {
						heading: 165,
						pitch: 0
						},
						zoom: 1
					};
					var myPano = new google.maps.StreetViewPanorama(document.getElementById(div), panoramaOptions); 
					myPano.setVisible(true);
					}
				});
			}

			if ( str ) {
				loadStreet(div)
			}

			if ( satellite ) {
				map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
			}

			google.maps.event.addListenerOnce(map, 'idle', function() {
			   google.maps.event.trigger(map, 'resize');
			var geocoder2;
			geocoder2 = new google.maps.Geocoder();
			   var address = center;
				geocoder2.geocode( { 'address': address}, function(results, status) {
				  if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
					}
			});
			});

			google.maps.event.addListenerOnce(map, 'idle', function() {
			   google.maps.event.trigger(map, 'resize');
			});

			}

			function newMarker(opts) {
				var address = opts.address;
				var url = opts.url;
				var image = opts.image;
				var text = opts.text;
				var map = opts.map;

				geocoder = new google.maps.Geocoder();
				geocoder.geocode( { 'address': address}, function(results, status) {
						if (status == google.maps.GeocoderStatus.OK) {   
							var myLatlng = results[0].geometry.location;
							var marker = new google.maps.Marker({
							position: myLatlng,
						icon: image,    
						map: map,
						url: url
							});
						if ( url ) {
							google.maps.event.addListener(marker, 'click', function() {
							window.location.href = marker.url;
							});
						}
						if ( text ) {
							var infowindow = new google.maps.InfoWindow({
									content: text
								});
								google.maps.event.addListener(marker, 'click', function() {
									infowindow.open(map,marker);
								});
						}
					}
				});
			}

			function updateMapStyle(json) {
				map.setOptions({mapTypeId: google.maps.MapTypeId.ROADMAP, styles: json});
			}

		</script>
		<?php
		$html .= ob_get_clean();
		$html .= '<script async>jQuery(document).load( loadMap({ center : "'.$center.'", sat : "'. $sat . ' ", msid : "'.$msid.'", image : "'.$image.'", url : "'.$url.'", zoom : '.$zoom.', color : "'.$color.'", div : "'.$div.'", text : "'. $text .'", street : "' . $street.'", satellite : "'.$satellite.'" }) );</script>';
		
		if ( isset($style) && $style !== '' ) {
			$stylejson = json_decode(json_encode( $style ));
			$html .= '<script>updateMapStyle('.$stylejson.');</script>';
		}
		
		return $html;
}

add_shortcode( 'za_seller_saving', 'display_slide_price' );

function display_slide_price(){ //$atts
		
	ob_start();	
	include ZIPPERAGENTPATH . "/custom/templates/template-slidePrice.php";
	$html=ob_get_clean();
	
	return $html;
}
?>