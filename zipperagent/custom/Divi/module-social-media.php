<?php

class ET_Builder_Module_Za_Social_Module extends ET_Builder_Module {

    function init() {
        $this->name = '[Zipperagent] Social Share';
        $this->slug = 'et_pb_za_social_module';

        $this->main_css_element = '%%order_class%%';
       
        $this->custom_css_options = array(
            'zipperagent_social_share_css' => array(
                'label' => 'Custom CSS',
                'selector' => '.our_custom_zipperagent_social_share_class',
            ),
        );
    }

    function shortcode_callback($atts, $content = null, $function_name) {
        $zipperagent_social_share = $this->shortcode_atts['zipperagent_social_share'];
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
        $is_shortcode = 1;
	
		ob_start();
		include ZIPPERAGENTPATH . "/custom/templates/template-social-share-landing.php";
		
        $output = ob_get_contents();
        ob_clean();
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );
        

        return $output;
    }

}

new ET_Builder_Module_Za_Social_Module();

