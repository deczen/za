<?php

class ET_Builder_Module_Property_Gallery extends ET_Builder_Module {
	
	public static $agent_options;
	
    function init() {
        $this->name = '[Zipperagent] Gallery';
        $this->slug = 'et_pb_za_gallery_module';

        $this->main_css_element = '%%order_class%%';
        $this->whitelisted_fields = array(
            'za_gallery_ids',
        );
		
        $this->options_toggles = array(
            'general' => array(
                'toggles' => array(
                    'main_content' => 'Gallery',
                ),
            ),
        );
    }

    function get_fields() {
		
		$fields = array(
			'za_auto_gallery' => array(
				'label'           => esc_html__( 'Automatic Gallery', 'zipperagent' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'zipperagent' ),
					'on'  => esc_html__( 'Yes', 'zipperagent' ),
				),
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( 'Use default property Gallery.', 'zipperagent' ),
			),
			'gallery_ids' => array(
				'label'            => esc_html__( 'Gallery Images', 'zipperagent' ),
				'type'             => 'upload-gallery',
				'computed_affects' => array(
					'__za_gallery',
				),
				'option_category'  => 'basic_option',
				'toggle_slug'      => 'main_content',
			),
			'gallery_orderby' => array(
				'label' => esc_html__( 'Gallery Images', 'et_builder' ),
				'type'  => 'hidden',
				'class' => array( 'et-pb-gallery-ids-field' ),
				'computed_affects'   => array(
					'__za_gallery',
				),
				'toggle_slug' => 'main_content',
			),
			'__za_gallery' => array(
				'type' => 'computed',
				'computed_callback' => array( 'ET_Builder_Module_Gallery', 'get_gallery' ),
				'computed_depends_on' => array(
					'gallery_ids',
				),
			),
		);
		
        return $fields;
    }

    function shortcode_callback($atts, $content = null, $function_name) {
		global $single_property, $za_gallery_popup;
		
        $za_gallery_ids = $this->shortcode_atts['gallery_ids'];
        $za_auto_gallery = $this->shortcode_atts['za_auto_gallery'];
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
        ob_start();
        

		// echo "<pre>"; print_r($single_property); echo "</pre>";

		if ( $za_auto_gallery!='on' && $za_gallery_ids  ) { 
			// $za_gallery_ids = '[gallery ids="'. $za_gallery_ids .'" columns=4 size="medium" link="file"]';
			?>
			<?php /*
			<div class="list-gallery span-page">
				<?php echo do_shortcode( $za_gallery_ids ); ?>
			</div> */?>
			<div class="list-gallery span-page">
				<style type="text/css">
					#gallery-1 {
						margin: auto;
					}
					#gallery-1 .gallery-item {
						float: left;
						margin-top: 10px;
						text-align: center;
						width: 25%;
					}
					#gallery-1 img {
						border: 2px solid #cfcfcf;
					}
					#gallery-1 .gallery-caption {
						margin-left: 0;
					}
					/* see gallery_shortcode() in wp-includes/media.php */
				</style>
				<div id="gallery-1" class="gallery galleryid-328 gallery-columns-4 gallery-size-medium">
				<?php
					$ids_arr = explode(',',$za_gallery_ids);
					if( is_array($ids_arr) ):
						$i=0;
						foreach ($ids_arr as $attachment_id ){
							
							$img_arr =  wp_get_attachment_image_src($attachment_id, 'large');
							// $img_arr =  wp_get_attachment_image_src($attachment_id, 'medium');
							// echo "<pre>"; print_r($img_arr); echo "</pre>";
							$big_img = isset($img_arr[0])?$img_arr[0]:'';
							$i++;
						
							?>
						   <dl class="gallery-item">
							  <dt class="gallery-icon landscape">
								 <div onclick="openModal();currentSlide(<?php echo $i; ?>)" class="image cursor" style='background-image:url("<?php echo str_replace(array('http://','https://'),array('//','//'),$big_img); ?>")'></div>
							  </dt>
						   </dl>
						<?php } 
					endif; ?>
				   <br style="clear: both">				  
				</div>
			</div>
		<?php } else if($za_auto_gallery=='on' && isset($single_property->photoList )){ ?>
			<div class="list-gallery span-page">
				<style type="text/css">
					#gallery-1 {
						margin: auto;
					}
					#gallery-1 .gallery-item {
						float: left;
						margin-top: 10px;
						text-align: center;
						width: 25%;
					}
					#gallery-1 img {
						border: 2px solid #cfcfcf;
					}
					#gallery-1 .gallery-caption {
						margin-left: 0;
					}
					/* see gallery_shortcode() in wp-includes/media.php */
				</style>
				<div id="gallery-1" class="gallery galleryid-328 gallery-columns-4 gallery-size-medium">
				<?php
					if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ):
						$i=0;
						foreach ($single_property->photoList as $pic ){
							
							if( strpos($pic->imgurl, 'mlspin.com') !== false ){
								$big_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1440&h=768&n={$i}&ext=.jpg";
								$small_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}&ext=.jpg";
							}else{
								$big_img =  $pic->imgurl;
								$small_img =  $pic->imgurl;
							}
							$i++;
						
							?>
						   <dl class="gallery-item">
							  <dt class="gallery-icon landscape">
								 <?php /* <a href="<?php echo $big_img; ?>"> */ ?>
								 <div onclick="openModal();currentSlide(<?php echo $i; ?>)" class="image cursor" style='background-image:url("<?php echo str_replace(array('http://','https://'),array('//','//'),$big_img); ?>")'></div>
							  </dt>
						   </dl>
						<?php } 
					endif; ?>
				   <br style="clear: both">				   
				</div>
			</div>
		<?php } ?>
		<style>
		/* The Modal (background) */
		.modal {
			display: none;
			position: fixed;
			vertical-align: middle;
			z-index: 99;
			padding-top: 50px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: scrol;
			background-color: rgba(1,1,1,0.8);
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			/* background-color: #fefefe; */
			margin: auto;
			padding: 0;
			width: fit-content;
			max-width: 980px;
		}

		/* The Close Button */
		.close {
		  color: white;
		  position: absolute;
		  top: 40px;
		  right: 25px;
		  font-size: 35px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #999;
		  text-decoration: none;
		  cursor: pointer;
		}

		.mySlides {
		  display: none;
		}
		.mySlides img{
			max-height: 512px;
		}

		.cursor {
		  cursor: pointer;
		}

		/* Next & previous buttons */
		.modal-content .prev,
		.modal-content .next {
		  cursor: pointer;
		  position: absolute;
		  top: 50%;
		  width: fit-content !important;
		  padding: 16px;
		  margin-top: -50px;
		  color: white;
		  font-weight: bold;
		  font-size: 20px;
		  transition: 0.6s ease;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		  -webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.modal-content a.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
		  background-color: rgba(0, 0, 0, 0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		img {
		  margin-bottom: -4px;
		}

		.caption-container {
		  text-align: center;
		  background-color: black;
		  padding: 2px 16px;
		  color: white;
		}

		.demo {
		  opacity: 0.6;
		}

		.active,
		.demo:hover {
		  opacity: 1;
		}

		img.hover-shadow {
		  transition: 0.3s;
		}

		.hover-shadow:hover {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		</style>
		<?php
		
        $output = ob_get_contents();
        ob_clean();
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );
		
		//Gallery Popup
		ob_start();
		if ( $za_auto_gallery!='on' && $za_gallery_ids  ) { 
			$ids_arr = explode(',',$za_gallery_ids);
			?>
			 <div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content">
					
					<?php
					if( is_array($ids_arr) ):
					$i=0;
					$ct = sizeof($ids_arr);
					foreach ($ids_arr as $attachment_id ){
						
						$img_arr =  wp_get_attachment_image_src($attachment_id, 'large');
						// $img_arr =  wp_get_attachment_image_src($attachment_id, 'medium');
						$big_img = isset($img_arr[0])?$img_arr[0]:'';
					
						$i++;
					
						?>
						
						<div class="mySlides">
						  <div class="numbertext"><?php echo $i; ?> / <?php echo $ct; ?></div>
						  <img src="<?php echo $big_img; ?>" style="width:auto">
						</div>
						
					<?php } ?>
					<?php endif; ?>
					
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

				  </div>
				</div>
		<?php } else if($za_auto_gallery=='on' && isset($single_property->photoList )){ ?>
		   <div id="myModal" class="modal">
			  <span class="close cursor" onclick="closeModal()">&times;</span>
			  <div class="modal-content">
				
				<?php
				if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ):
				$i=0;
				$ct = sizeof($single_property->photoList);
				foreach ($single_property->photoList as $pic ){
					
					if( strpos($pic->imgurl, 'mlspin.com') !== false ){
						$big_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1440&h=768&n={$i}&ext=.jpg";
						$small_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}&ext=.jpg";
					}else{
						$big_img =  $pic->imgurl;
						$small_img =  $pic->imgurl;
					}
					$i++;
				
					?>
					
					<div class="mySlides">
					  <div class="numbertext"><?php echo $i; ?> / <?php echo $ct; ?></div>
					  <img src="<?php echo $big_img; ?>" style="width:auto">
					</div>
					
				<?php } ?>
				<?php endif; ?>
				
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

			  </div>
			</div>
		<?php } ?>
		<script>
			function openModal() {
			  document.getElementById('myModal').style.display = "block";
			}

			function closeModal() {
			  document.getElementById('myModal').style.display = "none";
			}

			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("demo");
			  var captionText = document.getElementById("caption");
			  if (n > slides.length) {slideIndex = 1}
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";
			  // dots[slideIndex-1].className += " active";
			  // captionText.innerHTML = dots[slideIndex-1].alt;
			}
		</script>
		
		<?php
		
		$za_gallery_popup = ob_get_clean();

        return $output;
    }

}

new ET_Builder_Module_Property_Gallery();

