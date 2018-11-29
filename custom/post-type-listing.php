<?php

class Single_Property {
	
	
	public function __construct() {
		
		add_action( 'init', array( &$this, 'init' ) );
	}
	
	/**
	 * Register the custom post type
	 */
	public function init() {
	
		register_post_type( 'zipperagent-listing',
			array(
				'labels' => array(
					'name' => __( 'Listings' ),
					'singular_name' => __( 'Listing' ),
					'menu_name' => __( 'All Listings' ),					
					'all_items' => 'All Listings',
					'add_new' => 'Add Listing',
					'add_new_item' => 'Add New Listing',
				),
				'taxonomies' => array('category'),  
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'listing'),				
			)
		);
		
		//template
		// add_action( 'the_content', array( &$this, 'process_template' ) );	
		add_filter( 'template_include',  array( &$this, 'listing_single_template' ) );
	}
	
	public function process_template($content){
		global $post;
		// echo "<pre>"; print_r($post); echo "</pre>";
		if( !is_admin() && $post->post_type=='zipperagent-listing'){
			ob_start();
			require ZIPPERAGENTPATH . '/custom/templates/listingpost/template-listing-content.php';
			$content = ob_get_clean();
		}
		
		return $content;
	}
	
	
	function listing_single_template($template) {
		$plugindir = ZIPPERAGENTPATH;

		// if (is_post_type_archive( 'zipperagent-listing' )) {
			// $templatefilename = 'archive-post_type_name.php';
			// $template = $plugindir . '/custom/' . $templatefilename;
			// return $template;
		// }

		if ('zipperagent-listing' == get_post_type() ){
			$templatefilename = 'template-single-listing.php';
			$template = $plugindir . '/custom/templates/listingpost/' . $templatefilename;
			return $template;
		}
		
		return $template;
	}
}

// finally instantiate our plugin class and add it to the set of globals
$GLOBALS['Single_Property'] = new Single_Property();
