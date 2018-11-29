<?php

class ET_Builder_Module_Za_Document_Item extends ET_Builder_Module {
		
    function init() {      
		$this->name                        = esc_html__( 'Document', 'zipperagent' );
		$this->plural                      = esc_html__( 'Documents', 'zipperagent' );
		$this->slug                        = 'et_pb_za_document';
		$this->vb_support                  = 'on';
		$this->type                        = 'child';
		$this->child_title_var             = 'title';
		$this->advanced_setting_title_text = esc_html__( 'New Document', 'zipperagent' );
		$this->settings_text               = esc_html__( 'Document Settings', 'zipperagent' );
		$this->main_css_element = '%%order_class%%';
				
        $this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'File', 'zipperagent'),
				),
			),
		);
    }

    function get_fields() {
		
		$fields = array(
			'title' => array(
				'label'       => esc_html__( 'Title', 'et_builder' ),
				'type'        => 'text',
				'description' => esc_html__( 'The title will be used for button text on frontend.', 'et_builder' ),
				'toggle_slug' => 'main_content',
			),
			'src' => array(
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload a doc', 'zipperagent'),
				'choose_text'        => esc_attr__( 'Choose document file (pdf, doc)', 'zipperagent'),
				'update_text'        => esc_attr__( 'Set As Doc', 'zipperagent'),
				'data_type'          => 'file',
				'affects'            => array(
					'alt',
					'title_text',
				),
				'description'        => esc_html__( 'Upload your document. Visitor can download this from frontend.', 'zipperagent'),
				'toggle_slug'        => 'main_content',
			),
		);
		
        return $fields;
    }
	
	function render( $attrs, $content = null, $render_slug ) {
		
		global $et_pb_document_files;
		
		$title = !empty($this->props['title'])?$this->props['title']:'Download File';
		$doc_url = $this->props['src'];
		
		$et_pb_document_files.= '<a href="'. $doc_url .'" class="btn" target="_blank">'. $title .'</a>';

		$output = '';

		return $output;
	}

}

// This adds the upload label for Document module
// TODO: Remove when BB is removed.
function _et_bb_module_document_item_add_src_label( $filed ) {
	if ( ! isset( $filed['label'] ) ) {
		$filed['label'] = esc_html__( 'File URL', 'et_builder' );
	}

	return $filed;
}

add_filter( 'et_builder_module_fields_et_pb_za_document_field_src', '_et_bb_module_document_item_add_src_label' );

new ET_Builder_Module_Za_Document_Item();

