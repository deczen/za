<?php

class ET_Builder_Module_Divi_Remarks extends ET_Builder_Module {
	
	function init() {
        $this->name = '[Zipperagent] Remarks';
        $this->slug = 'et_pb_za_remarks_module';
		
        $this->main_css_element = '%%order_class%%';
       
	    $this->whitelisted_fields = array(
			'za_remarks',
        );
		
		$this->options_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content'     => esc_html__( 'Remarks', 'zipperagent' ),
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
						'text'  => esc_html__( 'Generate Remarks', 'zipperagent' ),
					),
				),
            ),
			'za_remarks' => array(
				'label'           => esc_html__( 'Content', 'zipperagent' ),
				// 'type'            => 'tiny_mce',
				'type'            => 'textarea',
				'option_category' => 'basic_option',
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( 'Property Description', 'zipperagent' ),
			),
		);
		
		return $fields;
		
	}
	
	function shortcode_callback($atts, $content = null, $function_name) {
		// $za_remarks 	= $this->content;
        $za_remarks = $this->shortcode_atts['za_remarks'];
        $module_class 	= ET_Builder_Element::add_module_order_class('', $function_name);
		$output = $za_remarks;
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );
		
		
		return $output;
		
	}
	
}

new ET_Builder_Module_Divi_Remarks();