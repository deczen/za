<?php

class ET_Builder_Module_Za_Slider_Item extends ET_Builder_Module {
	function init() {
		$this->name                        = esc_html__( 'Slide', 'zipperagent' );
		$this->slug                        = 'et_pb_za_slide';
		$this->fb_support                  = true;
		$this->type                        = 'child';
		$this->child_title_var             = 'admin_title';
		$this->child_title_fallback_var    = 'heading';

		$this->whitelisted_fields = array(
			'admin_title',
			'za_auto_image',
			'image',
			'video_url',
		);

		$this->advanced_setting_title_text = esc_html__( 'New Slide', 'zipperagent' );
		$this->settings_text               = esc_html__( 'Slide Settings', 'zipperagent' );
		$this->main_css_element = '%%order_class%%';

		$this->options_toggles = array(
			'general'  => array(
				'toggles' => array(
					'admin_label'  => esc_html__( 'Label', 'zipperagent' ),
					'image_video'  => esc_html__( 'Image & Video', 'zipperagent' ),
				),
			),
		);

	}

	function get_fields() {
		$fields = array(
			'admin_title' => array(
				'label'       => esc_html__( 'Title', 'zipperagent' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the slide in the builder for easy identification.', 'zipperagent' ),
				'toggle_slug' => 'admin_label',
			),
			'za_auto_image' => array(
				'label'           => esc_html__( 'Auto Generate Image', 'zipperagent' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'zipperagent' ),
					'on'  => esc_html__( 'Yes', 'zipperagent' ),
				),
				'toggle_slug'     => 'image_video',
				'description'     => esc_html__( 'Use default property Image.', 'zipperagent' ),
			),
			'image' => array(
				'label'              => esc_html__( 'Slide Image', 'zipperagent' ),
				'type'               => 'upload',
				'option_category'    => 'configuration',
				'upload_button_text' => esc_attr__( 'Upload an image', 'zipperagent' ),
				'choose_text'        => esc_attr__( 'Choose a Slide Image', 'zipperagent' ),
				'update_text'        => esc_attr__( 'Set As Slide Image', 'zipperagent' ),
				'affects'            => array(
					'image_alt',
				),
				'description'        => esc_html__( 'Add Image for image slide', 'zipperagent' ),
				'toggle_slug'        => 'image_video',
			),
			'video_url' => array(
				'label'           => esc_html__( 'Slide Video', 'zipperagent' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Add video URL for video slide', 'zipperagent' ),
				'toggle_slug'     => 'image_video',
				'computed_affects' => array(
					'__video_embed',
				),
			),
			'__video_embed' => array(
				'type' => 'computed',
				'computed_callback' => array( 'ET_Builder_Module_Slider_Item', 'get_video_embed' ),
				'computed_depends_on' => array(
					'video_url',
				),
				'computed_minimum' => array(
					'video_url',
				),
			),
		);

		return $fields;
	}

	static function get_video_embed( $args = array(), $conditonal_args = array(), $current_page = array() ) {
		global $wp_embed;

		$video_url = esc_url( $args['video_url'] );

		$autoembed      = $wp_embed->autoembed( $video_url );
		$is_local_video = has_shortcode( $autoembed, 'video' );
		$video_embed    = '';

		if ( $is_local_video ) {
			$video_embed = wp_video_shortcode( array( 'src' => $video_url ) );
		} else {
			$video_embed = wp_oembed_get( $video_url );

			$video_embed = preg_replace( '/<embed /','<embed wmode="transparent" ', $video_embed );

			$video_embed = preg_replace( '/<\/object>/','<param name="wmode" value="transparent" /></object>', $video_embed );
		}

		return $video_embed;
	}

	function maybe_inherit_values() {
		// Inheriting slider attribute
		global $et_pb_slider;

		// Attribute inheritance should be done on front-end / published page only.
		// Don't run attribute inheritance in VB and Backend to avoid attribute inheritance accidentally being saved on VB / BB
		if ( ! empty( $et_pb_slider ) && ! is_admin() && ! et_fb_is_enabled() ) {
			foreach ( $et_pb_slider as $slider_attr => $slider_attr_value ) {
				// Get default value
				$default = isset( $this->fields_unprocessed[ $slider_attr ][ 'default' ] ) ? $this->fields_unprocessed[ $slider_attr ][ 'default' ] : '';

				if ( isset( $this->fields_defaults[ $slider_attr ] ) && isset( $this->fields_defaults[ $slider_attr ][0] ) ) {
					$default = $this->fields_defaults[ $slider_attr ][0];
				}

				// Slide item isn't empty nor default
				if ( ! in_array( $this->shortcode_atts[ $slider_attr ], array( '', $default ) ) ) {
					continue;
				}

				// Slider value is equal to empty or slide item's default
				if ( in_array( $slider_attr_value, array( '', $default ) ) ) {
					continue;
				}

				// Overwrite slider item's empty / default value
				$this->shortcode_atts[ $slider_attr ] = $slider_attr_value;
			}
		}
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		
		$image                = $this->shortcode_atts['image'];
		$video_url            = $this->shortcode_atts['video_url'];
		$za_auto_image = $this->shortcode_atts['za_auto_image'];

		global $et_pb_slider_has_video, $et_pb_slider_parallax, $et_pb_slider_parallax_method, $et_pb_slider_show_mobile, $et_pb_slider_custom_icon, $et_pb_slider_item_num, $et_pb_slider_button_rel;
		
		global $single_property;

		$et_pb_slider_item_num++;

		$hide_on_mobile_class = self::HIDE_ON_MOBILE;

		$is_text_overlay_applied = 'on' === $use_text_overlay;

		$custom_slide_icon = 'on' === $button_custom && '' !== $custom_icon ? $custom_icon : $et_pb_slider_custom_icon;

		$style = $class = '';

		$style = '' !== $style ? " style='{$style}'" : '';

		$item = '' !== $image
			? sprintf( '<div class="et_pb_za_slide_image" style="background-image:url(\'%1$s\')" alt="%2$s">&nbsp;</div>',
				esc_url( $image ),
				esc_attr( $image_alt )
			)
			: '';

		if ( '' !== $video_url ) {  
			$video_embed = self::get_video_embed(array(
				'video_url' => $video_url,
			));

			$item = sprintf( '<div class="et_pb_za_slide_video">%1$s</div>',
				$video_embed
			);
		}
		
		if( $za_auto_image=='on' ){
			
			$image = isset($single_property->photoList[$et_pb_slider_item_num-1]->imgurl)?$single_property->photoList[$et_pb_slider_item_num-1]->imgurl:'';
			$image = str_replace( array('http://','https://'), array('//', '//'),$image );
			$item = sprintf( '<div class="et_pb_za_slide_image" style="background-image:url(\'%1$s\')" >&nbsp;</div>',
				esc_url( $image ));
		}

		if ( '' !== $image || $za_auto_image=='on' ) $class = ' et_pb_za_slide_with_image';

		if ( '' !== $video_url ) $class .= ' et_pb_za_slide_with_video';

		$class .= " et_pb_bg_layout_{$background_layout}";

		$class = ET_Builder_Element::add_module_order_class( $class, $function_name );

		// Images: Add CSS Filters and Mix Blend Mode rules (if set)
		if ( array_key_exists( 'image', $this->advanced_options ) && array_key_exists( 'css', $this->advanced_options['image'] ) ) {
			$class .= $this->generate_css_filters(
				$function_name,
				'child_',
				self::$data_utils->array_get( $this->advanced_options['image']['css'], 'main', '%%order_class%%' )
			);
		}

		if ( 1 === $et_pb_slider_item_num ) {
			$class .= " et-pb-active-slide";
		}

		$slide_content = sprintf(
			'<div class="et_pb_za_slide_content">%s</div>',
			$this->shortcode_content
		);

		//apply text overlay wrapper
		if ( $is_text_overlay_applied ) {
			$slide_content = sprintf(
				'<div class="et_pb_text_overlay_wrapper">
					%1$s
				</div>',
				$slide_content
			);
		}
		
		$output = sprintf(
			'<div class="item et_pb_za_slide">
				%s
			</div> <!-- .et_pb_slide -->
			',
			$item
		);

		return $output;
	}

}

new ET_Builder_Module_Za_Slider_Item;
