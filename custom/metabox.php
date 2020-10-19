<?php
add_action( 'init', 'enable_page_categories' );

function enable_page_categories(){	
	 register_taxonomy_for_object_type('category', 'page');  
}

add_filter( 'rwmb_meta_boxes', 'zipperagent_landing_page' );
function zipperagent_landing_page( $meta_boxes ) {
    
	$agents = ZipperagentGlobalFunction()->getAgentList();
	$agent_options = array();
	foreach( $agents as $agent ){
		$key=isset($agent->login)?$agent->login:'';
		$username=isset($agent->userName)?$agent->userName:'';
		if($key)
			$agent_options[$key]=$username;
	}
	
	$meta_boxes[] = array(
        'id'         => 'mb-after-title',
        'title'      => __( 'Property', 'zipperagent' ),
        'post_types' => array( 'zipperagent-lp' ),
        'context'    => 'mb_after_title',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'LISTING ID', 'zipperagent' ),
                'desc'  => 'Put listing id to generate values automatically',
                'id'    => '_lp_listid',
                'type'  => 'text',
                'clone' => false,
            ),
		)
	);
	
	$meta_boxes[] = array(
        'id'         => 'listing-remarks',
        'title'      => __( 'Remarks', 'zipperagent' ),
        'post_types' => array( 'page', 'zipperagent-listing' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Listing Remarks', 'zipperagent' ),
                'desc'  => 'just copy this value to content page',
                'id'    => '_lp_remarks',
                'type'  => 'textarea',
                'clone' => false,
            ),
		)
	);
	
	 $meta_boxes[] = array(
        'id'         => 'listing-header',
        'title'      => __( 'Template Option', 'zipperagent' ),
        'post_types' => array( 'page', 'zipperagent-listing' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'            => __( 'Hide header & footer?', 'zipperagent' ),
				'id'              => '_lp_hide_header_footer',
				'type'            => 'radio',
				'options'         => array(
					1 => 'Yes',
					0 => 'No',
				),
				'inline' 		  => true,
				'std' 			  => 0
			),
		)
	);
	
    $meta_boxes[] = array(
        'id'         => 'listing-info',
        'title'      => __( 'Listing Info', 'zipperagent' ),
        'post_types' => array( 'page', 'zipperagent-listing' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'LISTING ID', 'zipperagent' ),
                'desc'  => 'Put listing id to generate values automatically',
                'id'    => '_lp_listid',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Header Images (3-5 images please)', 'zipperagent' ),
                'desc'  => 'upload images',
                'id'    => '_lp_header_images',
                'type'  => 'file_advanced',
				'max_file_uploads' => 1,
                'clone' => true	,
            ),
			array(
                'name'  => __( 'List Price', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_listing_price',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Address', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_Address',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Number of Bedrooms', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_bedrooms',
                'type'  => 'text',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Number of Bathrooms', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_bathrooms',
                'type'  => 'text',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Property Type', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_proptype',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Property Status', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_status',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Video URL', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_video',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'County', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_county',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Zip Code', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_zipcode',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Assessed Value', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_assessed_value',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Taxes', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_taxes',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Tax Year', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_tax_year',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Condo Fees', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_condo_fees',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Style', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_styles',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Living Levels', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_living_levels',
                'type'  => 'text',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Units', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_units',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Lot Size (Sq Ft)', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_lot_size',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Living Area', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_living_area',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Basement', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_basement',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Number of Rooms', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_rooms',
                'type'  => 'text',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Number of Full Bathrooms', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_full_bathrooms',
                'type'  => 'text',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Master Bath', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_master_bathrooms',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Parking Spaces', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_parking_space',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Parking', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_parking',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Year Built', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_year_built',
                'type'  => 'number',
				'step' => 'any',
                'clone' => false,
            ),
			array(
                'name'  => __( 'Floorplan (1 PDF)', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_floorplan_pdf',
                'type'  => 'file_advanced',
				'max_file_uploads' => 1,
                'clone' => false	,
            ),
			array(
                'name'  => __( 'Feature Sheet (1 PDF)', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_feature_sheet_pdf',
                'type'  => 'file_advanced',
				'max_file_uploads' => 1,
                'clone' => false	,
            ),
			array(
                'name'  => __( 'Additional Files (button text will be the file name)', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_additional_files_pdf',
                'type'  => 'file_advanced',
				'max_file_uploads' => 1,
                'clone' => true	,
            ),
			array(
				'name'            => __( 'Listing Agent', 'zipperagent' ),
				'id'              => '_lp_agent',
				'type'            => 'select',
				'options'         => $agent_options,
				'multiple'        => false,
				'placeholder'     => 'Select agent',
				'select_all_none' => false,
			),
			array(
                'name'  => __( 'Contact Form Shortcode', 'zipperagent' ),
                'desc'  => '',
                'id'    => '_lp_form_shortcode',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
				'name'             => __( 'Listing Gallery', 'zipperagent' ),
				'id'               => '_lp_gallery',
				'type'             => 'image_advanced',
				'force_delete'     => false,
				'max_file_uploads' => 50,
				'max_status'       => 'false',
				'image_size'       => 'thumbnail',
			),
        )
    );
    return $meta_boxes;
}

add_action( 'admin_footer', 'generate_listing_by_id' );

function generate_listing_by_id(){
?>
<script>
	
	var xhr;
	
	jQuery('#_lp_listid').on('change', function(){
		
		if(xhr && xhr.readyState != 4){
			xhr.abort();
		}
		
		var listid = jQuery(this).val();
		
		if(listid!=''){
			
			console.time('generate fields');
			xhr = jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: '<?php echo admin_url('/admin-ajax.php'); ?>',
				data: {
						listid: listid,
						action: 'get_property_fields'
					},
				success: function( response ) { 
					// console.log(response);
					if( response['fields']!="" ){
						var fields = response['fields'];
												
						for (var key in fields) {
							if (fields.hasOwnProperty(key)) {
								if(jQuery(this).is("textarea"))
									jQuery('#' + key).html(fields[key]);
								else
									jQuery('#' + key).val(fields[key]);
							}
						}
						// console.log(response['fields']);
					}
					
					console.timeEnd('generate fields');
				},
				error: function(){
					console.timeEnd('generate fields');
				}
			});	
		}		
	});
</script>
<?php
}