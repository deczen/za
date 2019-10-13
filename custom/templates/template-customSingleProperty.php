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
		if(ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='mlspin' || ZipperagentGlobalFunction()->is_zipperagent_new_detail_page()){			
			echo "<div class='zy-margin'>". $page->post_content ."</div>";
		}else{			
			echo $page->post_content;
		}
		
		// do_action( 'zipperagent_single_content', $page->post_content );
		// echo apply_filters( 'the_content', $page->post_content );
	}
	// wp_reset_query();
}else{
	
	ob_start();
	if(ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='mlspin' || ZipperagentGlobalFunction()->is_zipperagent_new_detail_page()){		
		include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty-newDetail.php";
	}else if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){		
		include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty_new.php";
	}else{
		include ZIPPERAGENTPATH . "/custom/templates/template-singleProperty.php";
	}
	$html=ob_get_clean();
	echo $html;
}



?>