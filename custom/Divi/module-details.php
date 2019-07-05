<?php

class ET_Builder_Module_Za_Details extends ET_Builder_Module {
	
	public static $agent_options;
	
    function init() {
        $this->name = '[Zipperagent] Property Details';
        $this->slug = 'et_pb_property_details_module';

        $this->main_css_element = '%%order_class%%';
        $this->whitelisted_fields = array(
            'za_county',
			'za_zipcode',
			'za_assessed_value',
			'za_taxes',
			'za_tax_year',
			'za_styles',
			'za_living_levels',
			'za_lot_size',
			'za_living_area',
			'za_basement',
			'za_rooms',
			'za_full_bathrooms',
			'za_master_bathrooms',
			'za_parking_space',
			'za_parking',
			'za_year_built',			
        );
		
		
		// self::$agent_options = $agent_options;
		
        $this->options_toggles = array(
            'general' => array(
                'toggles' => array(
                    'main_content' => 'Property Details',
                ),
            ),
        );
    }

    function get_fields() {
		
		$fields = array(
            'za_dummy' => array(
                'type' => 'text',
                'toggle_slug' => 'main_content',
				'after'           => array(
					array(
						'type'  => 'button',
						'class' => 'et_pb_generate_details',
						'text'  => esc_html__( 'Generate Values', 'zipperagent' ),
					),
				),
            ),
			'za_county' => array(
                'label' => 'County',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_zipcode' => array(
                'label' => 'Zipcode',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_assessed_value' => array(
                'label' => 'Assesed Value',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_taxes' => array(
                'label' => 'Taxes',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_tax_year' => array(
                'label' => 'Tax Year',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_styles' => array(
                'label' => 'Styles',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_living_levels' => array(
                'label' => 'Living Levels',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_lot_size' => array(
                'label' => 'Lot Size',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_living_area' => array(
                'label' => 'Living Area',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_basement' => array(
                'label' => 'Basement',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_rooms' => array(
                'label' => 'Rooms',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_full_bathrooms' => array(
                'label' => 'Full Bathrooms',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_master_bathrooms' => array(
                'label' => 'Master Bathrooms',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_parking_space' => array(
                'label' => 'Parking Space',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_parking' => array(
                'label' => 'Parking',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_year_built' => array(
                'label' => 'Year Built',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			
        );
		
        return $fields;
    }

    function shortcode_callback($atts, $content = null, $function_name) {
		$za_county = $this->shortcode_atts['za_county'];
		$za_zipcode = $this->shortcode_atts['za_zipcode'];
		$za_assessed_value = $this->shortcode_atts['za_assessed_value'];
		$za_taxes = $this->shortcode_atts['za_taxes'];
		$za_tax_year = $this->shortcode_atts['za_tax_year'];
		$za_styles = $this->shortcode_atts['za_styles'];
		$za_living_levels = $this->shortcode_atts['za_living_levels'];
		$za_lot_size = $this->shortcode_atts['za_lot_size'];
		$za_living_area = $this->shortcode_atts['za_living_area'];
		$za_basement = $this->shortcode_atts['za_basement'];
		$za_rooms = $this->shortcode_atts['za_rooms'];
		$za_full_bathrooms = $this->shortcode_atts['za_full_bathrooms'];
		$za_master_bathrooms = $this->shortcode_atts['za_master_bathrooms'];
		$za_parking_space = $this->shortcode_atts['za_parking_space'];
		$za_parking = $this->shortcode_atts['za_parking'];
		$za_year_built = $this->shortcode_atts['za_year_built'];
		
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
        ob_start();
		
		?>
		<div id="zpa-main-container" class="list-details">
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>County</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_county)?$za_county:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Zip</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_zipcode)?$za_zipcode:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Assessed Value</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_assessed_value)?$za_assessed_value:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Taxes</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_taxes)?$za_taxes:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Tax Year</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_tax_year)?$za_tax_year:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Style</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_styles)?$za_styles:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Living Levels</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_living_levels)?$za_living_levels:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Lot Size</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_lot_size)?$za_lot_size:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Living Area</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_living_area)?$za_living_area:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Basement</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_basement)?$za_basement:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Number of Rooms</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_rooms)?$za_rooms:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Number of Full Bathrooms</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_full_bathrooms)?$za_full_bathrooms:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Master Bath</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_master_bathrooms)?$za_master_bathrooms:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Parking Spaces</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_parking_space)?$za_parking_space:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Parking</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_parking)?$za_parking:'-'; ?></p>
					</div>
				</div>
				<div class="list-detail col-sm-6">
					<div class="col-xs-6">
						<p><em>Year Built</em></p>
					</div>
					<div class="col-xs-6">
						<p class="redtext"><?php echo !empty($za_year_built)?$za_year_built:'-'; ?></p>
					</div>
				</div>
			</div>
			<div class="row"> </div>
		</div>
		<?php
		
        $output = ob_get_contents();
        ob_clean();
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );
        

        return $output;
    }

}

new ET_Builder_Module_Za_Details();

