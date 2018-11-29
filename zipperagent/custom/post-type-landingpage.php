<?php

class Property_Landing_Page {
	
	
	public function __construct() {
		
		add_action( 'init', array( &$this, 'init' ) );
	}
	
	/**
	 * Register the custom post type
	 */
	public function init() {
	
		register_post_type( 'zipperagent-lp',
			array(
				'labels' => array(
					'name' => __( 'Landing Pages' ),
					'singular_name' => __( 'Landing Page' ),
					'menu_name' => __( 'All Landing Pages' ),					
					'all_items' => 'All Landing Pages',
					'add_new' => 'Add Landing Page',
					'add_new_item' => 'Add New Landing Page',
				),
				'taxonomies' => array('category'),  
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'landing-page'),				
			)
		);
		add_filter( 'et_builder_post_types', array($this,'my_et_builder_post_types') );		
		add_action( 'edit_form_after_title', array($this,'my_edit_form_after_title'), 1 );
	}
	
	public function my_et_builder_post_types( $post_types ) {
		$post_types[] = 'zipperagent-lp';
		 
		return $post_types;
	}
	
	public function my_edit_form_after_title() {
		// get globals vars
		global $post, $wp_meta_boxes;

		// render the FM meta box in 'ai_after_title' context
		do_meta_boxes( get_current_screen(), 'mb_after_title', $post );
		
		// unset 'mb_after_title' context from the post's meta boxes
		unset( $wp_meta_boxes['mb_after_title']);
	}
}

// finally instantiate our plugin class and add it to the set of globals
$GLOBALS['Property_Landing_Page'] = new Property_Landing_Page();
