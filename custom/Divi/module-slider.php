<?php

class ET_Builder_Module_Za_Slider extends ET_Builder_Module {
	function init() {
		$this->name            = esc_html__( '[Zipperagent] Slider', 'zipperagent' );
		$this->slug            = 'et_pb_za_slider_module';
		$this->fb_support      = true;
		$this->child_slug      = 'et_pb_za_slide';
		$this->child_item_text = esc_html__( 'Slide', 'zipperagent' );

		$this->whitelisted_fields = array(
			'height_desktop',
			'height_tablet',
			'height_mobile',
			'admin_label',
		);

		$this->main_css_element = '%%order_class%%.et_pb_slider';
		
		$this->options_toggles = array(
            'general' => array(
                'toggles' => array(
					'custom_height' => 'Custom Height',
                    'admin_label' => 'Admin Label',
                ),
            ),
        );
	}

	function get_fields() {
		$fields = array(
			'height_desktop' => array(
				'label'       => esc_html__( 'Desktop Height', 'zipperagent' ),
				'type'        => 'text',
				'description' => esc_html__( 'Specific height size for Desktop view (size in pixel).', 'zipperagent' ),
				'toggle_slug' => 'custom_height',
			),
			'height_tablet' => array(
				'label'       => esc_html__( 'Tablet Height', 'zipperagent' ),
				'type'        => 'text',
				'description' => esc_html__( 'Specific height size for Tablet view (size in pixel).', 'zipperagent' ),
				'toggle_slug' => 'custom_height',
			),
			'height_mobile' => array(
				'label'       => esc_html__( 'Mobile Height', 'zipperagent' ),
				'type'        => 'text',
				'description' => esc_html__( 'Specific height size for Mobile view (size in pixel).', 'zipperagent' ),
				'toggle_slug' => 'custom_height',
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'zipperagent' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'zipperagent' ),
				'toggle_slug' => 'admin_label',
			),
		);

		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		$height_desktop              = !empty($this->shortcode_atts['height_desktop'])?$this->shortcode_atts['height_desktop']:500;
		$height_tablet               = !empty($this->shortcode_atts['height_tablet'])?$this->shortcode_atts['height_tablet']:300;
		$height_mobile               = !empty($this->shortcode_atts['height_mobile'])?$this->shortcode_atts['height_mobile']:220;

		global $et_pb_slider_has_video, $et_pb_slider_parallax, $et_pb_slider_parallax_method, $et_pb_slider_show_mobile, $et_pb_slider_custom_icon, $et_pb_slider;
		
		global $et_pb_slider_item_num;
		
		if(is_numeric($et_pb_slider_item_num)){			
			$content = $this->shortcode_content;
		}else{//auto generate slider
			
		}
		
		$class  = '';
		
		$carousel = "<script>
						jQuery(document).ready(function(){
							jQuery('.et_pb_za_slides.owl-carousel').owlCarousel({
								loop: true,
								margin: 10,
								nav: true,
								dots: true,
								items: 1,
								autoHeight: true,
								autoplay: true,
								// slideSpeed: 1000,
								smartSpeed: 1000,
								autoplayTimeout: 5000,
								autoplayHoverPause: true,
								navText:['',''],
								// onTranslate: function() {
									// jQuery('.owl-item').find('iframe').each(function() {
										// jQuery(this).pause();
									// });
								// }
							});
							
						});
					</script>";
		
		$style = "<style>
					.et_pb_za_slides .owl-item{height:{$height_desktop}px;}	
					.et_pb_za_slides .et_pb_za_slide_video iframe{height:{$height_desktop}px;}
					@media screen and (max-width: 768px){					
						.et_pb_za_slides .owl-item{height:{$height_tablet}px;}	
						.et_pb_za_slides .et_pb_za_slide_video iframe{height:{$height_tablet}px;}
					}
					@media screen and (max-width:767px){	
						.et_pb_za_slides .owl-item{height:{$height_mobile}px;}	
						.et_pb_za_slides .et_pb_za_slide_video iframe{height:{$height_mobile}px;}
					}
				</style>";
		
		$output = sprintf(
			'<div class="et_pb_module et_pb_za_slider">
				<div class="et_pb_za_slides owl-carousel owl-theme">
					%1$s
				</div> <!-- .et_pb_slides -->
			</div> <!-- .et_pb_slider -->
			%2$s
			%3$s
			',
			$content, $carousel, $style
		);
		

		// Reset passed slider item value
		$et_pb_slider = array();

		return $output;
	}

}

new ET_Builder_Module_Za_Slider;
