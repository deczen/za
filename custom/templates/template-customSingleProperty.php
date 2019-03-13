<?php
global $zpa_show_login_popup, $requests, $is_detail_page;

$zpa_show_login_popup=1;
$is_detail_page=1;

$listing='zipperagentnotfound';

if(interface_exists('zipperAgentConstants')){
	$listing=get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_DETAIL,null);
}

$args = array ( 'name' => $listing, 'post_type'=>'page', 'posts_per_page'=> 1, 'post_status' => 'publish' );
$listing = get_posts( $args );
if( $listing ){
	foreach( $listing as $page ){
		echo $page->post_content;
		// do_action( 'zipperagent_single_content', $page->post_content );
		// echo apply_filters( 'the_content', $page->post_content );
	}
	// wp_reset_query();
}else{
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty.php";
	$html=ob_get_clean();
	echo $html;
}



?>