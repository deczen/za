<?php

class ET_Builder_Module_Za_Map extends ET_Builder_Module {
	
	 function init() {
        $this->name = '[Zipperagent] Map';
        $this->slug = 'et_pb_za_map_module';

        $this->main_css_element = '%%order_class%%';
        $this->whitelisted_fields = array(
			'use_za_map',
            'za_lat',
            'za_long',
        );
		
        $this->options_toggles = array(
            'general' => array(
                'toggles' => array(
                    'smap' => 'Maps',
                ),
            ),
        );
		
		$this->fields_defaults = array(
			'use_za_map' => array( 'off' ),
		);
    }
	
	
	function get_fields() {
		
		$fields = array(
			'use_za_map' => array(
				'label'           => esc_html__( 'Auto Maps', 'zipperagent' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'zipperagent' ),
					'on'  => esc_html__( 'Yes', 'zipperagent' ),
				),
				'toggle_slug'     => 'smap',
				'description'     => esc_html__( 'Use default property Map.', 'zipperagent' ),
			),
			'za_lat' => array(
				'label'           => esc_html__( 'Latitude', 'zipperagent' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Add Latitude.', 'zipperagent' ),
				'toggle_slug'     => 'smap',

			),
			'za_long' => array(
				'label'           => esc_html__( 'Longitude', 'zipperagent' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Add Longitude.', 'zipperagent' ),
				'toggle_slug'     => 'smap',

			),
		);
		
        return $fields;
    }
	
	function shortcode_callback($atts, $content = null, $function_name) {
		global $single_property;
		
		$use_za_map		= $this->shortcode_atts['use_za_map'];
		$za_lat		= !empty($this->shortcode_atts['za_lat'])?$this->shortcode_atts['za_lat']:0;
		$za_long 	= !empty($this->shortcode_atts['za_long'])?$this->shortcode_atts['za_long']:0;
		
		if($use_za_map=='on' && isset($single_property->lat) && isset($single_property->lng)){
			$za_lat = $single_property->lat;
			$za_long = $single_property->lng;
		}
		
		$module_class 	= ET_Builder_Element::add_module_order_class('', $function_name);
		
		
		ob_start();
		?>
		<br>
		<div id="map" style="height:400px"></div>
		<script type="text/javascript">
		  
		  jQuery(document).ready(function(){
			  var map;
			  function initMap() {
				var latlng = new google.maps.LatLng(<?php echo $za_lat; ?>, <?php echo $za_long; ?>);
				var myOptions = {
					zoom: 15,
					center: latlng,
					gestureHandling: 'greedy',
					// mapTypeControl: true,
					// mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					// navigationControl: true,
					// mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("map"), myOptions);
				
				var marker = new google.maps.Marker({
				  position: latlng,
				  map: map,
				  // title: address
				});
				
			  }
			  
			  initMap();
		  });
		</script>

		
		<?php
		$output = ob_get_contents();
        ob_clean();
		
		return $output;
	}
	
}

new ET_Builder_Module_Za_Map();

