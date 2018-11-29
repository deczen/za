<?php

$savedSearch='zipperagentnotfound';

if(interface_exists('zipperAgentConstants')){
	$savedSearch=get_option(zipperAgentConstants::OPTION_VIRTUAL_PAGE_PERMALINK_TEXT_ORGANIZER_VIEW_SAVED_SEARCH,null);
}

$args = array ( 'name' => $savedSearch, 'post_type'=>'page', 'posts_per_page'=> 1, 'post_status' => 'publish' );
$savedSearch = get_posts( $args );
if( $savedSearch ){
	foreach( $savedSearch as $page ){
		echo $page->post_content;
		// do_action( 'zipperagent_single_content', $page->post_content );
		// echo apply_filters( 'the_content', $page->post_content );
	}
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedSearch.php";
	$html=ob_get_clean();
	echo $html;
	// wp_reset_query();
}else{
	
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedSearch.php";
	$html=ob_get_clean();
	echo $html;
}



?>