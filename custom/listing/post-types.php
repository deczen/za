<?php
// Simply comment out post types we don't need
// add_action( 'init', 'custom_team_member', 0 );
//add_action( 'init', 'register_cpt_neighbourhood' );
// add_action( 'init', 'register_cpt_listings' );
// add_action( 'init', 'register_tax_listing_cats' );
register_cpt_listings();
register_tax_listing_cats();
// add_action( 'init', 'register_cpt_testimonial' );
// add_action( 'init', 'register_taxonomy_testimonial_categories' );
// add_action( 'init', 'register_cpt_vendor' );
// add_action( 'init', 'register_taxonomy_vendor_category' );

function register_taxonomy_testimonial_categories() {

    $labels = array( 
        'name' => _x( 'Testimonial Categories', 'testimonial_categories' ),
        'singular_name' => _x( 'Testimonial Category', 'testimonial_categories' ),
        'search_items' => _x( 'Search Testimonial Categories', 'testimonial_categories' ),
        'popular_items' => _x( 'Popular Testimonial Categories', 'testimonial_categories' ),
        'all_items' => _x( 'All Testimonial Categories', 'testimonial_categories' ),
        'parent_item' => _x( 'Parent Testimonial Category', 'testimonial_categories' ),
        'parent_item_colon' => _x( 'Parent Testimonial Category:', 'testimonial_categories' ),
        'edit_item' => _x( 'Edit Testimonial Category', 'testimonial_categories' ),
        'update_item' => _x( 'Update Testimonial Category', 'testimonial_categories' ),
        'add_new_item' => _x( 'Add New Testimonial Category', 'testimonial_categories' ),
        'new_item_name' => _x( 'New Testimonial Category', 'testimonial_categories' ),
        'separate_items_with_commas' => _x( 'Separate testimonial categories with commas', 'testimonial_categories' ),
        'add_or_remove_items' => _x( 'Add or remove testimonial categories', 'testimonial_categories' ),
        'choose_from_most_used' => _x( 'Choose from the most used testimonial categories', 'testimonial_categories' ),
        'menu_name' => _x( 'Testimonial Categories', 'testimonial_categories' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'testimonial_categories', array('testimonial'), $args );
}


function register_cpt_testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonials', 'testimonial' ),
        'singular_name' => _x( 'Testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
        'new_item' => _x( 'New Testimonial', 'testimonial' ),
        'view_item' => _x( 'View Testimonial', 'testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'testimonial' ),
        'not_found' => _x( 'No case studies found', 'testimonial' ),
        'not_found_in_trash' => _x( 'No case studies found in Trash', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
        'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'artifakt testimonials',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'testimonial_categories' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'case-study'),
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}

function register_cpt_listings() {
	//Listings Custom Post Type//
	register_post_type( 'listings', array(
						'labels' => array(
						'name' => __( 'Listings' ),
						'singular_name' => __( 'Listing' ),
						'add_new' =>  _x('Add a New Listing', 'listings'),
						'all_items' => __('Existing Listings'),
						'show_ui' => true, // UI in admin panel
						'hierarchical' => false,
						),
					'supports' => array( 'custom-fields','editor','excerpt','title','author', 'thumbnail' ),
					'taxonomies' => array(),
					'exclude_from_search' => false,
					'public' => true,
					'has_archive' => false, //change to true if you want to use WP default archive page
					'rewrite' => array( 'slug' => 'listings','with_front' => TRUE),
					)
			);
}

function register_tax_listing_cats() {
	//Listings Cat
    	$labels1 = array( 
        		'name' => _x( 'Listing Categories', 'listings_categories' ),
        		'singular_name' => _x( 'Listing Category', 'listings_categories' ),
        		'search_items' => _x( 'Search Listing Categories', 'listings_categories' ),
        		'popular_items' => _x( 'Popular Listing Categories', 'listings_categories' ),
        		'all_items' => _x( 'All Listing Categories', 'listings_categories' ),
        		'parent_item' => _x( 'Parent Listing Category', 'listings_categories' ),
        		'parent_item_colon' => _x( 'Parent Listing Category:', 'listings_categories' ),
        		'edit_item' => _x( 'Edit Listing Category', 'listings_categories' ),
        		'update_item' => _x( 'Update Listing Category', 'listings_categories' ),
        		'add_new_item' => _x( 'Add New Listing Category', 'listings_categories' ),
        		'new_item_name' => _x( 'New Listing Category', 'listings_categories' ),
        		'separate_items_with_commas' => _x( 'Separate listing categories with commas', 'listings_categories' ),
        		'add_or_remove_items' => _x( 'Add or remove listing categories', 'listings_categories' ),
        		'choose_from_most_used' => _x( 'Choose from the most used listing categories', 'listings_categories' ),
        		'menu_name' => _x( 'Listing Categories', 'listings_categories' ),
    		);

    	$args1 = array( 
        		'labels' => $labels1,
        		'public' => true,
        		'show_in_nav_menus' => true,
        		'show_ui' => true,
        		'show_tagcloud' => false,
        		'show_admin_column' => true,
        		'hierarchical' => true,
		        'rewrite' => true,
        		'query_var' => true
    		);

	register_taxonomy( 'listings_categories', array('listings'), $args1 );
}

function register_cpt_neighbourhood() {

    $labels = array( 
        'name' => _x( 'Neighbourhoods', 'neighbourhood' ),
        'singular_name' => _x( 'Neighbourhood', 'neighbourhood' ),
        'add_new' => _x( 'Add New', 'neighbourhood' ),
        'add_new_item' => _x( 'Add New Neighbourhood', 'neighbourhood' ),
        'edit_item' => _x( 'Edit Neighbourhood', 'neighbourhood' ),
        'new_item' => _x( 'New Neighbourhood', 'neighbourhood' ),
        'view_item' => _x( 'View Neighbourhood', 'neighbourhood' ),
        'search_items' => _x( 'Search Neighbourhoods', 'neighbourhood' ),
        'not_found' => _x( 'No neighbourhoods found', 'neighbourhood' ),
        'not_found_in_trash' => _x( 'No neighbourhoods found in Trash', 'neighbourhood' ),
        'parent_item_colon' => _x( 'Parent Neighbourhood:', 'neighbourhood' ),
        'menu_name' => _x( 'Neighbourhoods', 'neighbourhood' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite'   => true,
	'capability_type' => 'post'
    );

    register_post_type( 'neighbourhood', $args );
}

function custom_team_member() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Team Member', 'text_domain' ),
		'name_admin_bar'        => __( 'Team Member', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'team-member',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Team Member', 'text_domain' ),
		'description'           => __( 'Team Member Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'team_member', $args );

}


function register_cpt_vendor() {

    $labels = array( 
        'name' => _x( 'Vendor', 'vendor' ),
        'singular_name' => _x( 'vendor', 'vendor' ),
        'add_new' => _x( 'Add New', 'vendor' ),
        'add_new_item' => _x( 'Add New Vendor', 'vendor' ),
        'edit_item' => _x( 'Edit Vendor', 'vendor' ),
        'new_item' => _x( 'New Vendor', 'vendor' ),
        'view_item' => _x( 'View Vendor', 'vendor' ),
        'search_items' => _x( 'Search Vendors', 'vendor' ),
        'not_found' => _x( 'No Vendors found', 'vendor' ),
        'not_found_in_trash' => _x( 'No Vendors found in Trash', 'vendor' ),
        'parent_item_colon' => _x( 'Parent Vendor:', 'vendor' ),
        'menu_name' => _x( 'Vendors', 'vendor' )
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title'),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite'   => false,
		'capability_type' => 'post'
    );

    register_post_type( 'vendor', $args );
}


function vendor_category() {

	$labels = array(
		'name'                       => _x( 'Vendor Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Vendor Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Vendor Category', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'vendor_category', array( 'vendor' ), $args );

}
add_action( 'init', 'vendor_category', 0 );
