<?php

class ET_Builder_Module_Za_Documents extends ET_Builder_Module {
		
    function init() {
        $this->name = '[Zipperagent] Documents';
        $this->slug = 'et_pb_za_documents_module';
		$this->child_slug      = 'et_pb_za_document';
		$this->child_item_text = esc_html__( 'Document', 'zipperagent' );
        $this->main_css_element = '%%order_class%%';
    }

    function shortcode_callback($atts, $content = null, $function_name) {
		global $et_pb_document_files;
		
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
        ob_start(); ?>        
		<div class="list-downloads">
			<?php echo $et_pb_document_files; ?>
		</div>
		<?php
		// echo "<pre>"; print_r($this); echo "</pre>";
        $output = ob_get_contents();
        ob_clean();
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );        

        return $output;
    }

}

new ET_Builder_Module_Za_Documents();

