<?php

/*
 * SHORTCODE
 */ 
 
add_shortcode( 'cf7_auto_populate', 'cf7_auto_populate' );

function cf7_auto_populate($atts){	

	$atts = shortcode_atts( array(
		'assign' => '',
		'assignedto' => '',
		'leadsource' => '',
	), $atts, 'cf7_auto_populate' );
	
	$assign = $atts['assign'] ? $atts['assign'] : $atts['assignedto'];
	$leadsource = $atts['leadsource'];
	
	ob_start();	?>
	<style>
		.wpcf7 .hide-alert .wpcf7-not-valid-tip{display:none;}
	</style>
	<script>
		jQuery(document).ready(function($){
			$('.wpcf7-form input:not([type=submit]), .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select').prop("readonly", true);
			$('.wpcf7-form input, .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select').css("opacity", 0.5);
			$('.wpcf7-form input[type=email][name=your-email]').prop("readonly", false);
			$('.wpcf7-form input[type=email][name=your-email]').css("opacity", 1);
			
			$('.wpcf7-form input[type=email][name=your-email]').on('keyup',function(e){
				if (e.keyCode == 13) {
					// za_check_user($(this));
					$(this).blur();  
				}
			});
			$('.wpcf7-form input[type=email][name=your-email]').on('blur',function(){
				za_check_user($(this));
			});
			
			function za_check_user(element){
				var email = element.val();
				
				if(isEmail(email)){			
					// alert(email);
					
					console.time('generate fields');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: {
								email: email,
								assign: '<?php echo $assign ?>',
								action: 'get_user_fields'
							},
						success: function( response ) { 
							console.log(response);
							if( response['userdata']!="" && response['userdata'] != null){
								var userdata = response['userdata'];
								// console.log(userdata);
								
								$('.wpcf7-form input:not([type=submit]), .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select').prop("readonly", false);
								$('.wpcf7-form input, .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select').css("opacity", 1);
								
								if(userdata.firstName.length && userdata.firstName!=''){
									$('.wpcf7-form input[type=text][name=first-name]').val(userdata.firstName);								
									$('.wpcf7-form input[type=text][name=first-name]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=first-name]').css("opacity", 0.5);
									$('.wpcf7-form input[type=text][name=first-name]').parent().addClass('hide-alert');
									
									
									$('.wpcf7-form input[type=text][name=your-name]').val(userdata.firstName + ' ' + userdata.lastName);
									$('.wpcf7-form input[type=text][name=your-name]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=your-name]').css("opacity", 0.5);									
									$('.wpcf7-form input[type=text][name=your-name]').parent().addClass('hide-alert');
								}
								if(userdata.lastName.length && userdata.lastName!=''){
									$('.wpcf7-form input[type=text][name=last-name]').val(userdata.lastName);
									$('.wpcf7-form input[type=text][name=last-name]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=last-name]').css("opacity", 0.5);											
									$('.wpcf7-form input[type=text][name=last-name]').parent().addClass('hide-alert');
								}
								if(userdata.phoneOffice.length && userdata.phoneOffice!=''){
									$('.wpcf7-form input[type=tel][name=phone]').val(userdata.phoneOffice);
									$('.wpcf7-form input[type=tel][name=phone]').prop("readonly", true);
									$('.wpcf7-form input[type=tel][name=phone]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=tel][name=phone]').parent().addClass('hide-alert');
								}
								if(userdata.primaryAddressCity.length && userdata.primaryAddressCity!=''){
									$('.wpcf7-form input[type=text][name=city]').val(userdata.primaryAddressCity);
									$('.wpcf7-form input[type=text][name=city]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=city]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=text][name=city]').parent().addClass('hide-alert');
								}
								if(userdata.primaryAddressState.length && userdata.primaryAddressState!=''){
									$('.wpcf7-form input[type=text][name=state]').val(userdata.primaryAddressState);
									$('.wpcf7-form input[type=text][name=state]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=state]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=text][name=state]').parent().addClass('hide-alert');
								}
								if(userdata.primaryAddressPostalCode.length && userdata.primaryAddressPostalCode!=''){
									$('.wpcf7-form input[type=text][name=zipCode]').val(userdata.primaryAddressPostalCode);
									$('.wpcf7-form input[type=text][name=zipCode]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=zipCode]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=text][name=zipCode]').parent().addClass('hide-alert');
								}
							}else{
								
								$('.wpcf7-form input:not([type=submit]), .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select').prop("readonly", false);
								$('.wpcf7-form input, .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select').css("opacity", 1);
								
								$('.wpcf7-form input[type=text][name=first-name]').val('');
								$('.wpcf7-form input[type=text][name=last-name]').val('');
								$('.wpcf7-form input[type=text][name=your-name]').val('');
								$('.wpcf7-form input[type=tel][name=phone]').val('');
								$('.wpcf7-form input[type=text][name=city]').val('');
								$('.wpcf7-form input[type=text][name=state]').val('');
								$('.wpcf7-form input[type=text][name=zipCode]').val('');
								$('.wpcf7-form input[type=text][name=first-name]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=last-name]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=your-name]').prop("readonly", false);
								$('.wpcf7-form input[type=tel][name=phone]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=city]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=state]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=zipCode]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=first-name]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=last-name]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=your-name]').css("opacity", 1);
								$('.wpcf7-form input[type=tel][name=phone]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=city]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=state]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=zipCode]').css("opacity", 1);
								
								$('.wpcf7 .hide-alert').removeClass('hide-alert');
							}
							
							console.timeEnd('generate fields');
						},
						error: function(){
							console.timeEnd('generate fields');
						}
					});
				}else{
					$('.wpcf7-form input[type=text][name=first-name]').val('');
					$('.wpcf7-form input[type=text][name=last-name]').val('');
					$('.wpcf7-form input[type=text][name=your-name]').val('');
					$('.wpcf7-form input[type=tel][name=phone]').val('');
					$('.wpcf7-form input[type=text][name=city]').val('');
					$('.wpcf7-form input[type=text][name=state]').val('');
					$('.wpcf7-form input[type=text][name=zipCode]').val('');
					$('.wpcf7-form input[type=text][name=first-name]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=last-name]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=your-name]').prop("readonly", false);
					$('.wpcf7-form input[type=tel][name=phone]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=city]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=state]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=zipCode]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=first-name]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=last-name]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=your-name]').css("opacity", 1);
					$('.wpcf7-form input[type=tel][name=phone]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=city]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=state]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=zipCode]').css("opacity", 1);
					
					$('.wpcf7 .hide-alert').removeClass('hide-alert');
				}
			}
			
			function isEmail(email) {
			  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			  return regex.test(email);
			}
		});
	</script>
	<?php
	$html=ob_get_clean();
	
	return $html;
}

add_shortcode( 'cf7_auto_suggest', 'cf7_auto_suggest' );

function cf7_auto_suggest($atts){	

	$atts = shortcode_atts( array(
		'google_field_id' => 'address',
	), $atts, 'cf7_auto_suggest' );
	
	$google_field_id = $atts['google_field_id'];
	
	ob_start();	?>
	<script>
		jQuery(document).ready(function($){
			var hiddenfields = $('.wpcf7-form input:not([type=submit]):not(#<?php echo $google_field_id ?>), .wpcf7-form checkbox, .wpcf7-form textarea, .wpcf7-form select');
			hiddenfields.closest('label').hide();
			
			$('#<?php echo $google_field_id ?>').on( 'change', function(){
				if(!($(this).val())){
					hiddenfields.closest('label').fadeOut();
				}else{					
					hiddenfields.closest('label').fadeIn();
				}
			});
		});
	</script>
	<script>
		<?php
		 $rb = ZipperagentGlobalFunction()->zipperagent_rb();
	  $states=isset($rb['web']['states'])?$rb['web']['states']:'';
	  $states=array_map('trim', explode(',', $states));
	  $states=sizeof($states)===1?implode(' | ',$states):'';
		?>
		
		var autocomplete;
		var input = document.getElementById('<?php echo $google_field_id ?>');
		
		function initAutocomplete() {
			var options = {
				types: ['geocode'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us"]},
			};
			autocomplete = new google.maps.places.Autocomplete(
			/** @type {!HTMLInputElement} */(input), options);
		}

		jQuery(document).ready(function(){
			initAutocomplete();
		});
		
		<?php if($states): ?>
		jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				console.log(input.value);
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}
		});
		<?php endif; ?>
    </script>
	<?php
	$html=ob_get_clean();
	
	return $html;
}

/*
 * HOOKS
 */
 
// add_filter('wpcf7_form_elements', 'zipperagent_contact_us_form1');

function zipperagent_contact_us_form1($args){
	// echo "<pre>"; print_r($args); echo "</pre>";
	
	return $args;
}

// add_filter('wpcf7_form_tag', 'zipperagent_contact_us_form');

function zipperagent_contact_us_form($scanned_tag, $replace){
	// echo "<pre>"; print_r($scanned_tag); echo "</pre>";
	// echo "<hr />";
	// echo "<pre>"; print_r($replace); echo "</pre>";
	// if($scanned_tag['type']=='text*' && $scanned_tag['name']=='your-name'){
		// $scanned_tag['values']=array('ABC','BCA');
	// }
	// echo "<pre>"; print_r($scanned_tag); echo "</pre>";
	return $scanned_tag;
}
 
add_filter('wpcf7_editor_panels', 'zipperagent_cf7_panel');

function zipperagent_cf7_panel($panels){
	$panels['zipperagent-panel'] = array(
			'title' => 'Zipperagent',
			'callback' => 'zipperagent_panel_additional_settings' 
	);
			
	return $panels;
}
 
function zipperagent_panel_additional_settings( $post ) {
	
	if( isset($post->id) ){
		$za_contact_form = get_post_meta( $post->id, 'za_contact_form', true);
		$za_agent_login = get_post_meta( $post->id, 'za_agent_login', true);
		$za_assignedTo = get_post_meta( $post->id, 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $post->id, 'za_leadSource', true);
	}else{
		$za_contact_form = get_post_meta( $post->id(), 'za_contact_form', true);
		$za_agent_login = get_post_meta( $post->id(), 'za_agent_login', true);
		$za_assignedTo = get_post_meta( $post->id(), 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $post->id(), 'za_leadSource', true);
	}
	?>
	<p><label>Enable Zipperagent Contact Form 
	<input type="hidden" name="za_contact_form" value="0" />
	<input type="checkbox" name="za_contact_form" value="1" <?php checked($za_contact_form, 1); ?> /></label></p>	
	<p><label>assignedTo
	<input type="text" name="za_assignedTo" value="<?php echo $za_assignedTo; ?>" /></label></p>	
	<p><label>leadSource
	<input type="text" name="za_leadSource" value="<?php echo $za_leadSource; ?>" /></label></p>	
	<?php /* <p><label>	Agent Login
	<input type="text" name="za_agent_login" value="<?php echo $za_agent_login; ?>" /> </label>	</p> */
}

add_action( 'wpcf7_save_contact_form', 'zipperagent_save_contact_form', 10, 3 );

function zipperagent_save_contact_form($contact_form, $args, $context){
	
	if( isset($contact_form->id) ){
		update_post_meta( $contact_form->id, 'za_contact_form', sanitize_text_field( $_REQUEST['za_contact_form'] ) );
		update_post_meta( $contact_form->id, 'za_agent_login', sanitize_text_field( $_REQUEST['za_agent_login'] ) );
		update_post_meta( $contact_form->id, 'za_assignedTo', sanitize_text_field( $_REQUEST['za_assignedTo'] ) );
		update_post_meta( $contact_form->id, 'za_leadSource', sanitize_text_field( $_REQUEST['za_leadSource'] ) );
	}else{
		update_post_meta( $contact_form->id(), 'za_contact_form', sanitize_text_field( $_REQUEST['za_contact_form'] ) );
		update_post_meta( $contact_form->id(), 'za_agent_login', sanitize_text_field( $_REQUEST['za_agent_login'] ) );
		update_post_meta( $contact_form->id(), 'za_assignedTo', sanitize_text_field( $_REQUEST['za_assignedTo'] ) );
		update_post_meta( $contact_form->id(), 'za_leadSource', sanitize_text_field( $_REQUEST['za_leadSource'] ) );
	}
}
 
add_action('wpcf7_mail_sent', 'zipperagent_cf7_submit', 2);
// add_action('wpcf7_mail_failed', 'zipperagent_cf7_submit', 2);

function zipperagent_cf7_submit($contact_form, $cfresult=null){
	
	if(isset($contact_form->id)){
		$za_contact_form = get_post_meta( $contact_form->id, 'za_contact_form', true);
		$za_assignedTo = get_post_meta( $contact_form->id, 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $contact_form->id, 'za_leadSource', true);
	}else{	
		$za_contact_form = get_post_meta( $contact_form->id(), 'za_contact_form', true);
		$za_assignedTo = get_post_meta( $contact_form->id(), 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $contact_form->id(), 'za_leadSource', true);
	}
	
	if($za_contact_form){		
		$contactIds=get_contact_id();
		
		$email = $_REQUEST['your-email'];
		if( isset($_REQUEST['your-name']) ){
			$fullname = explode(' ', sanitize_text_field( $_REQUEST['your-name'] ));
			$firstName = sanitize_text_field( $fullname[0] );
			$lastName = substr( sanitize_text_field( $_REQUEST['your-name'] ), strlen ($firstName) + 1 );
		}else{
			$firstName = $_REQUEST['first-name'] ? sanitize_text_field( $_REQUEST['first-name'] ) : '';
			$lastName = $_REQUEST['last-name'] ? sanitize_text_field( $_REQUEST['last-name'] ) : '';
		}
		$phone = sanitize_text_field( $_REQUEST['phone'] );
		$city = isset($_REQUEST['city']) ? sanitize_text_field( $_REQUEST['city'] ) : '';
		$state = isset($_REQUEST['state']) ? sanitize_text_field( $_REQUEST['state'] ) : '';
		$zipCode = isset($_REQUEST['zipCode']) ? sanitize_text_field( $_REQUEST['zipCode'] ) : '';
		$subject = sanitize_text_field( $_REQUEST['your-subject'] );
		$message = sanitize_textarea_field( $_REQUEST['your-message'] );
		$url = isset($_REQUEST['current-url']) ? urlencode( $_REQUEST['current-url'] ) : '';
		$lookfor = isset($_REQUEST['lookfor'])?$_REQUEST['lookfor']:'';
		$buyer = isset($_REQUEST['buyer'])?$_REQUEST['buyer']:(strpos(strtolower($lookfor), 'buy') !== false?1:0);
		$seller = isset($_REQUEST['seller'])?$_REQUEST['seller']:(strpos(strtolower($lookfor), 'sell') !== false?1:0);
		
		$vars=array(
			// 'id'=>implode(',',$contactIds), //disabled
			'email'=>($email),
			'firstName'=>($firstName),
			'lastName'=>($lastName),
			'phone'=>($phone),					
			'subject'=>($subject),			
			'notes'=>($message),			
			'url'=>($url),			
		);
		
		if($za_assignedTo){
			$vars['assignedTo']=$za_assignedTo;
		}
		
		if($za_leadSource){
			$vars['leadSource']=$za_leadSource;
		}
		
		if($city){
			$vars['city']=$city;
		}
		if($state){
			$vars['state']=$state;
		}
		if($zipCode){
			$vars['zipCode']=$zipCode;
		}
		
		if(isset($_REQUEST['buyer'])){
			$vars['buyer']=$buyer;
		}
		
		if(isset($_REQUEST['seller'])){
			$vars['seller']=$seller;
		}
		
		if(isset($_REQUEST['lookfor'])){
			$vars['buyer']=$buyer;
			$vars['seller']=$seller;
		}
		
        $result = zipperagent_register_user( $vars );
		
		$result=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		
		if($result){
			// print_r($result);
		}
	}
}