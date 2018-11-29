<?php
/**
 * Registering meta boxes
 *
 * In this file, I'll show you how to extend the class to add more field type (in this case, the 'taxonomy' type)
 * All the definitions of meta boxes are listed below with comments, please read them carefully.
 * Note that each validation method of the Validation Class MUST return value instead of boolean as before
 *
 * You also should read the changelog to know what has been changed
 *
 * For more information, please visit: http://www.deluxeblogtips.com/2010/04/how-to-create-meta-box-wordpress-post.html
 *
 */

/********************* BEGIN EXTENDING CLASS ***********************/

/**
 * Extend ARTIFAKT_Meta_Box class
 * Add field type: 'taxonomy'
 */
class ARTIFAKT_Meta_Box_Taxonomy extends ARTIFAKT_Meta_Box {
	
	function add_missed_values() {
		parent::add_missed_values();
		
		// add 'multiple' option to taxonomy field with checkbox_list type
		foreach ($this->_meta_box['fields'] as $key => $field) {
			if ('taxonomy' == $field['type'] && 'checkbox_list' == $field['options']['type']) {
				$this->_meta_box['fields'][$key]['multiple'] = true;
			}
		}
	}
	
	// show taxonomy list
	function show_field_taxonomy($field, $meta) {
		global $post;
		
		if (!is_array($meta)) $meta = (array) $meta;
		
		$this->show_field_begin($field, $meta);
		
		$options = $field['options'];
		$terms = get_terms($options['taxonomy'], $options['args']);
		
		// checkbox_list
		if ('checkbox_list' == $options['type']) {
			foreach ($terms as $term) {
				echo "<input type='checkbox' name='{$field['id']}[]' value='$term->slug'" . checked(in_array($term->slug, $meta), true, false) . " /> $term->name<br/>";
			}
		}
		// select
		else {
			echo "<select name='{$field['id']}" . ($field['multiple'] ? "[]' multiple='multiple' style='height:auto'" : "'") . ">";
		
			foreach ($terms as $term) {
				echo "<option value='$term->slug'" . selected(in_array($term->slug, $meta), true, false) . ">$term->name</option>";
			}
			echo "</select>";
		}
		
		$this->show_field_end($field, $meta);
	}
}

/********************* END EXTENDING CLASS ***********************/

/********************* BEGIN DEFINITION OF META BOXES ***********************/

// prefix of meta keys, optional
// use underscore (_) at the beginning to make keys hidden, for example $prefix = '_me_';
// you also can make prefix empty to disable it
$prefix = 'af_';

$meta_boxes = array();

// first meta box
$meta_boxes[] = array(
	'id' => 'share_box',							// meta box id, unique per meta box
	'title' => 'Show Share Icons',			// meta box title
	'pages' => array('page'),	// post types, accept custom post types as well, default is array('post'); optional
	'context' => 'side',						// where the meta box appear: normal (default), advanced, side; optional
	'priority' => 'high',						// order of meta box: high (default), low; optional

	'fields' => array(							// list of meta fields
		array( 
			'id'	=>	$prefix . 'share',
			'type'	=>	'select',
			'options' => array (
					'yes' => 'Yes',
					'no' => 'No'
					)
		),
	)
);


$meta_boxes[] = array(
	'id' => 'page_meta',
	'title' => 'Page Meta',
	'pages' => array('page'),
	'priority' => 'high',
	'fields' => array(
		array( 
			'id'	=>	$prefix . 'header',
			'type'	=>	'wysiwyg',
			'name'	=>	'Header Blurb'
		),
		array( 
			'id'	=>	$prefix . 'sidebar',
			'type'	=>	'wysiwyg',
			'name'	=>	'Sidebar'
		),
		array( 
			'id'	=>	$prefix . 'panel',
			'type'	=>	'text',
			'name'	=>	'Panel Shortcode'
		),
		array( 
			'id'	=>	$prefix . 'testimonial',
			'type'	=>	'text',
			'name'	=>	'Testimonial (ID)'
		),
		array( 
			'id'	=>	$prefix . 'buysell',
			'type'	=>	'select',
			'name'	=>	'Show Buy/Sell Box in Sidebar?',
			'options' => array (
				'na' => 'N/A',
				'buy' => 'Buy',
				'sell' => 'Sell'
			)
		),
		array( 
			'id'	=>	$prefix . 'class',
			'type'	=>	'text',
			'name'	=>	'Extra Class'
		),
	)
);


$meta_boxes[] = array(
	'id' => 'team_meta',
	'title' => 'Team Meta',
	'pages' => array('team_member'),
	'priority' => 'high',
	'fields' => array(
		array( 
			'id'	=>	$prefix . 'jobtitle',
			'type'	=>	'text',
			'name'	=>	'Job Title'
		),
		array( 
			'id'	=>	$prefix . 'office_num',
			'type'	=>	'text',
			'name'	=>	'Office Number'
		),
		array( 
			'id'	=>	$prefix . 'office_num_ext',
			'type'	=>	'text',
			'name'	=>	'Office Number Extension'
		),
		array( 
			'id'	=>	$prefix . 'cell_num',
			'type'	=>	'text',
			'name'	=>	'Cell Number'
		),
		array( 
			'id'	=>	$prefix . 'fax_num',
			'type'	=>	'text',
			'name'	=>	'Fax Number'
		),
		array( 
			'id'	=>	$prefix . 'email',
			'type'	=>	'text',
			'name'	=>	'Email'
		),
		array( 
			'id'	=>	$prefix . 'social',
			'type'	=>	'wysiwyg',
			'name'	=>	'Social Link Shortcodes'
		)
	)
);


$meta_boxes[] = array(
	'id' => 'vendor_meta',
	'title' => 'Vendor Meta',
	'pages' => array('vendor'),
	'priority' => 'high',
	'fields' => array(
		array( 
			'id'	=>	$prefix . 'contact_name',
			'type'	=>	'text',
			'name'	=>	'Contact Name'
		),
		array( 
			'id'	=>	$prefix . 'address',
			'type'	=>	'text',
			'name'	=>	'Address'
		),
		array( 
			'id'	=>	$prefix . 'office_num',
			'type'	=>	'text',
			'name'	=>	'Office Number'
		),
		array( 
			'id'	=>	$prefix . 'cell_num',
			'type'	=>	'text',
			'name'	=>	'Cell Number'
		),
		array( 
			'id'	=>	$prefix . 'fax_num',
			'type'	=>	'text',
			'name'	=>	'Fax Number'
		),
		array( 
			'id'	=>	$prefix . 'email',
			'type'	=>	'text',
			'name'	=>	'Email'
		),
		array( 
			'id'	=>	$prefix . 'website',
			'type'	=>	'text',
			'name'	=>	'Website URL (include http://)'
		)
	)
);


// TESTIMONIAL META
$meta_boxes[] = array(
	'id' => 'Testimonial Info',							// meta box id, unique per meta box
	'title' => 'Testimonial Info',			// meta box title
	'pages' => array('testimonial'),	// post types, accept custom post types as well, default is array('post'); optional
	'context' => 'side',						// where the meta box appear: normal (default), advanced, side; optional
	'priority' => 'low',						// order of meta box: high (default), low; optional

	'fields' => array(							// list of meta fields
		array( 
			'id'	=>	$prefix . 'location',
			'type'	=>	'text',
			'name'	=>	'Location'
		)
	)
);


$team_q = new WP_Query( array( 'post_type' => 'team_member', 'posts_per_page' => -1 ) );
$team[] = 'Select';
while( $team_q->have_posts() ) : $team_q->the_post();
	$team[get_the_ID()] = get_the_title();
endwhile;

// LISTING META
$meta_boxes[] = array(
	'id' => 'Listing_Info',							// meta box id, unique per meta box
	'title' => 'Listing Info',			// meta box title
	'pages' => array('listings'),	// post types, accept custom post types as well, default is array('post'); optional
	'context' => 'normal',						// where the meta box appear: normal (default), advanced, side; optional
	'priority' => 'high',						// order of meta box: high (default), low; optional
	'fields' => array(							// list of meta fields
		array( 
			'id'	=>	$prefix . 'header_img',
			'type'	=>	'image',
			'name'	=>	'Header Images (3-5 images please)'
		),
		array( 
			'id'	=>	$prefix . 'price',
			'type'	=>	'text',
			'name'	=>	'List Price'
		),
		array(
			'id'	=>	$prefix . 'address',
			'type'	=>	'text',
			'name'	=>	'Address'
		),
		array(
			'id'	=>	$prefix . 'bedrooms',
			'type'	=>	'text',
			'name'	=>	'Number of Bedrooms'
		),
		array(
			'id'	=>	$prefix . 'bathrooms',
			'type'	=>	'text',
			'name'	=>	'Number of Bathrooms'
		),
		array(
			'id'	=>	$prefix . 'type',
			'type'	=>	'text',
			'name'	=>	'Property Type'
		),
		array(
			'id'	=>	$prefix . 'sold',
			'type'	=>	'select',
			'name'	=>	'Property Status',
			'options' => array(
					'for-sale' => 'For Sale',
					'sold' => 'Sold',
					'for-lease' => 'For Lease',
					'leased' => 'Leased',		
					'exclusive' => 'Exclusive',		
					'coming-soon' => 'Coming Soon',		
					'Under Agreement' => 'Under Agreement',		
							   )
		),
		array( 
			'id'	=>	$prefix . 'tour',
			'type'	=>	'text',
			'name'	=>	'Video URL'
		),
		array( 
			'id'	=>	$prefix . 'county',
			'type'	=>	'text',
			'name'	=>	'County'
		),
		array( 
			'id'	=>	$prefix . 'zip',
			'type'	=>	'text',
			'name'	=>	'Zip Code'
		),
		array( 
			'id'	=>	$prefix . 'assessed_value',
			'type'	=>	'text',
			'name'	=>	'Assessed Value'
		),
		array( 
			'id'	=>	$prefix . 'taxes',
			'type'	=>	'text',
			'name'	=>	'Taxes'
		),
		array( 
			'id'	=>	$prefix . 'tax_year',
			'type'	=>	'text',
			'name'	=>	'Tax Year'
		),
		array( 
			'id'	=>	$prefix . 'condo_fees',
			'type'	=>	'text',
			'name'	=>	'Condo Fees'
		),
		array( 
			'id'	=>	$prefix . 'style',
			'type'	=>	'text',
			'name'	=>	'Style'
		),
		array( 
			'id'	=>	$prefix . 'living_levels',
			'type'	=>	'text',
			'name'	=>	'Living Levels'
		),
		array( 
			'id'	=>	$prefix . 'units',
			'type'	=>	'text',
			'name'	=>	'Units'
		),
		array( 
			'id'	=>	$prefix . 'lot_size',
			'type'	=>	'text',
			'name'	=>	'Lot Size (Sq Ft)'
		),
		array( 
			'id'	=>	$prefix . 'living_area',
			'type'	=>	'text',
			'name'	=>	'Living Area'
		),
		array( 
			'id'	=>	$prefix . 'basement',
			'type'	=>	'text',
			'name'	=>	'Basement'
		),
		array( 
			'id'	=>	$prefix . 'num_rooms',
			'type'	=>	'text',
			'name'	=>	'Number of Rooms'
		),
		array( 
			'id'	=>	$prefix . 'num_baths',
			'type'	=>	'text',
			'name'	=>	'Number of Full Bathrooms'
		),
		array( 
			'id'	=>	$prefix . 'master_bath',
			'type'	=>	'text',
			'name'	=>	'Master Bath'
		),
		array( 
			'id'	=>	$prefix . 'parking_spaces',
			'type'	=>	'text',
			'name'	=>	'Parking Spaces'
		),
		array( 
			'id'	=>	$prefix . 'parking',
			'type'	=>	'text',
			'name'	=>	'Parking'
		),
		array( 
			'id'	=>	$prefix . 'year',
			'type'	=>	'text',
			'name'	=>	'Year Built'
		),
		array( 
			'id'	=>	$prefix . 'floorplan',
			'type'	=>	'file',
			'name'	=>	'Floorplan (1 PDF)'
		),
		array( 
			'id'	=>	$prefix . 'featuresheet',
			'type'	=>	'file',
			'name'	=>	'Feature Sheet (1 PDF)'
		),
		array( 
			'id'	=>	$prefix . 'downloads',
			'type'	=>	'file',
			'name'	=>	'Additional Files (button text will be the file name)'
		),
		array(
			'id'    =>	$prefix . 'agent_id',
			'type'  =>	'select',
			'name'  =>	'Listing Agent',
			'options' =>	$team
        	),
		array( 
			'id'	=>	$prefix . 'gallery',
			'type'	=>	'wysiwyg',
			'name'	=>	'Listing Gallery'
		),
			
	)
);


$meta_boxes[] = array(
	'id' => 'slide_meta',
	'title' => 'Slide Meta',
	'pages' => array('slide'),
	'priority' => 'high',
	'fields' => array(
		array( 
			'id'	=>	$prefix . 'color',
			'type'	=>	'select',
			'name'	=>	'Color',
			'options' => array(
				'white' => 'White',
				'red' => 'Red',
				'black' => 'Black'
			)
		)
	)
);




foreach ($meta_boxes as $meta_box) {
	$my_box = new ARTIFAKT_Meta_Box_Taxonomy($meta_box);
}

/********************* END DEFINITION OF META BOXES ***********************/

/********************* BEGIN VALIDATION ***********************/

/**
 * Validation class
 * Define ALL validation methods inside this class
 * Use the names of these methods in the definition of meta boxes (key 'validate_func' of each field)
 */
class ARTIFAKT_Meta_Box_Validate {
	function check_name($text) {
		if ($text == 'Anh Tran') {
			return 'He is Rilwis';
		}
		return $text;
	}
}

/********************* END VALIDATION ***********************/
?>
