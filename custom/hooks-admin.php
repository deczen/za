<?php
if(!is_admin()) //only run in admin dashboard
	return;

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

register_activation_hook( ZIPPERAGENTPATH . '/zipperagent.php', 'zipperagent_plugin_active' );

function zipperagent_plugin_active() {	

	create_zipperagent_plugin_version_file();
}