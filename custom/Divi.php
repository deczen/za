<?php
add_action('wp_head', 'set_global_property');

function set_global_property(){
	global $single_property, $post;
	if($post->post_type=='zipperagent-lp'){
		$listid=get_post_meta($post->ID,'_lp_listid',true);
		$single_property= get_single_property($listid);
		
		// echo "<pre>"; print_r($single_property); echo "</pre>";
	}	
}

add_action('et_builder_ready', 'zipperagent_load_the_module');

function zipperagent_load_the_module() {
	include 'Divi/module-social-media.php';
    include 'Divi/module-agent.php';
    include 'Divi/module-remarks.php';
	include 'Divi/module-documents.php';
	include 'Divi/module-document-item.php';
	include 'Divi/module-slider.php';
	include 'Divi/module-slide-item.php';
	include 'Divi/module-contact.php';
	include 'Divi/module-details.php';
	include 'Divi/module-map.php';
	include 'Divi/module-highlight.php';
	include 'Divi/module-gallery.php';
}

add_action( 'admin_footer', 'za_divi_builder_scripts' );

function za_divi_builder_scripts(){
	global $post;
	
	if(!isset($post->post_type) && $post->post_type!='zipperagent-lp')
		return;
	
	?>
	<script>

		jQuery('body').on('click', '.et_pb_generate_remarks, .et_pb_generate_details', function(){
			
			var listid = jQuery('#_lp_listid').val();
			
			if(listid!=''){
				jQuery.ajax({
					type: 'POST',
					dataType : 'json',
					url: '<?php echo admin_url('/admin-ajax.php'); ?>',
					data: {
							listid: listid,
							action: 'get_property_fields',
							type: 'landingpage',
						},
					success: function( response ) { 
						// console.log(response);
						if( response['fields']!="" ){
							var fields = response['fields'];
													
							for (var key in fields) {
								if (fields.hasOwnProperty(key)) {
									if(key=='za_remarks'){
										// tinyMCE.getInstanceById('et_pb_' + key).setContent(fields[key]);
										// console.log('test');
										jQuery('#et_pb_' + key).html(fields[key]);
									}
									else if(jQuery(this).is("textarea"))
										jQuery('#et_pb_' + key).html(fields[key]);
									else
										jQuery('#et_pb_' + key).val(fields[key]);
								}
							}
							// console.log(response['fields']);
						}
					}
				});	
			}		
		});
		
		<?php /*
		jQuery('body').on('click', 'div[data-module_type=et_pb_za_slider_module] .et-pb-add-sortable-option', function(){
			var count = jQuery('div[data-module_type=et_pb_za_slider_module] ul.et-pb-sortable-options li').length;
			// console.log(count);
			if(count>5){
				alert('Maximum 5 slides only!');
				return false;
			}
		}); */ ?>
	</script>
	<style>
		#et_pb_za_dummy, label[for=et_pb_za_dummy]{display:none !important}
		.button.et_pb_generate_details{display:block !important;}
	</style>
<?php
}

add_action( 'wp_footer', 'za_gallery_script');

function za_gallery_script(){
	global $za_gallery_popup, $post;
	
	if($post->post_type!='zipperagent-lp')
		return;
	
	if(isset($za_gallery_popup) && !empty($za_gallery_popup))
		echo $za_gallery_popup;
	
}