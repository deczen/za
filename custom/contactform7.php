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
		'google_field_id' => '',
	), $atts, 'cf7_auto_populate' );
	
	$assign = $atts['assign'] ? $atts['assign'] : $atts['assignedto'];
	$leadsource = $atts['leadsource'];
	$google_field_id = $atts['google_field_id'];
	
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
			
			<?php if($google_field_id): ?>
			$('.wpcf7-form input#<?php echo $google_field_id; ?>').prop("readonly", false);
			$('.wpcf7-form input#<?php echo $google_field_id; ?>').css("opacity", 1);
			<?php endif; ?>
			
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
								
								if(userdata.hasOwnProperty('firstName') && userdata.firstName.length && userdata.firstName!=''){
									$('.wpcf7-form input[type=text][name=first-name]').val(userdata.firstName);								
									$('.wpcf7-form input[type=text][name=first-name]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=first-name]').css("opacity", 0.5);
									$('.wpcf7-form input[type=text][name=first-name]').parent().addClass('hide-alert');
									
									
									$('.wpcf7-form input[type=text][name=your-name]').val(userdata.firstName + ' ' + userdata.lastName);
									$('.wpcf7-form input[type=text][name=your-name]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=your-name]').css("opacity", 0.5);									
									$('.wpcf7-form input[type=text][name=your-name]').parent().addClass('hide-alert');
								}
								if(userdata.hasOwnProperty('lastName') && userdata.lastName.length && userdata.lastName!=''){
									$('.wpcf7-form input[type=text][name=last-name]').val(userdata.lastName);
									$('.wpcf7-form input[type=text][name=last-name]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=last-name]').css("opacity", 0.5);											
									$('.wpcf7-form input[type=text][name=last-name]').parent().addClass('hide-alert');
								}
								if(userdata.hasOwnProperty('phoneMobile') && userdata.phoneMobile.length && userdata.phoneMobile!='' ||
								   userdata.hasOwnProperty('phoneOffice') && userdata.phoneOffice.length && userdata.phoneOffice!='' ||
								   userdata.hasOwnProperty('phoneOther') && userdata.phoneOther.length && userdata.phoneOther!='' ){
									
									var phone = '';
									
									if( userdata.hasOwnProperty('phoneMobile') && userdata.phoneMobile.length && userdata.phoneMobile!='' ){
										phone = userdata.phoneMobile;
									}else if( userdata.hasOwnProperty('phoneOffice') && userdata.phoneOffice.length && userdata.phoneOffice!='' ){
										phone = userdata.phoneOffice;
									}else if( userdata.hasOwnProperty('phoneOther') && userdata.phoneOther.length && userdata.phoneOther!='' ){
										phone = userdata.phoneOther;
									}
									   
									$('.wpcf7-form input[type=tel][name=phone]').val(phone);
									$('.wpcf7-form input[type=tel][name=phone]').prop("readonly", true);
									$('.wpcf7-form input[type=tel][name=phone]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=tel][name=phone]').parent().addClass('hide-alert');
									$('.wpcf7-form input[name=your-phone]').val(phone);
									$('.wpcf7-form input[name=your-phone]').prop("readonly", true);
									$('.wpcf7-form input[name=your-phone]').css("opacity", 0.5);				
									$('.wpcf7-form input[name=your-phone]').parent().addClass('hide-alert');
								}
								if(userdata.hasOwnProperty('primaryAddressCity') && userdata.primaryAddressCity.length && userdata.primaryAddressCity!=''){
									$('.wpcf7-form input[type=text][name=city]').val(userdata.primaryAddressCity);
									$('.wpcf7-form input[type=text][name=city]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=city]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=text][name=city]').parent().addClass('hide-alert');
								}
								if(userdata.hasOwnProperty('primaryAddressState') && userdata.primaryAddressState.length && userdata.primaryAddressState!=''){
									$('.wpcf7-form input[type=text][name=state]').val(userdata.primaryAddressState);
									$('.wpcf7-form input[type=text][name=state]').prop("readonly", true);
									$('.wpcf7-form input[type=text][name=state]').css("opacity", 0.5);				
									$('.wpcf7-form input[type=text][name=state]').parent().addClass('hide-alert');
								}
								if(userdata.hasOwnProperty('primaryAddressPostalCode') && userdata.primaryAddressPostalCode.length && userdata.primaryAddressPostalCode!=''){
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
								$('.wpcf7-form input[name=your-phone]').val('');
								$('.wpcf7-form input[type=text][name=city]').val('');
								$('.wpcf7-form input[type=text][name=state]').val('');
								$('.wpcf7-form input[type=text][name=zipCode]').val('');
								$('.wpcf7-form input[type=text][name=first-name]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=last-name]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=your-name]').prop("readonly", false);
								$('.wpcf7-form input[type=tel][name=phone]').prop("readonly", false);
								$('.wpcf7-form input[name=your-phone]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=city]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=state]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=zipCode]').prop("readonly", false);
								$('.wpcf7-form input[type=text][name=first-name]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=last-name]').css("opacity", 1);
								$('.wpcf7-form input[type=text][name=your-name]').css("opacity", 1);
								$('.wpcf7-form input[type=tel][name=phone]').css("opacity", 1);
								$('.wpcf7-form input[name=your-phone]').css("opacity", 1);
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
					$('.wpcf7-form input[name=your-phone]').val('');
					$('.wpcf7-form input[type=text][name=city]').val('');
					$('.wpcf7-form input[type=text][name=state]').val('');
					$('.wpcf7-form input[type=text][name=zipCode]').val('');
					$('.wpcf7-form input[type=text][name=first-name]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=last-name]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=your-name]').prop("readonly", false);
					$('.wpcf7-form input[type=tel][name=phone]').prop("readonly", false);
					$('.wpcf7-form input[name=your-phone]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=city]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=state]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=zipCode]').prop("readonly", false);
					$('.wpcf7-form input[type=text][name=first-name]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=last-name]').css("opacity", 1);
					$('.wpcf7-form input[type=text][name=your-name]').css("opacity", 1);
					$('.wpcf7-form input[type=tel][name=phone]').css("opacity", 1);
					$('.wpcf7-form input[name=your-phone]').css("opacity", 1);
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
		var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'long_name',
			country: 'short_name',
			postal_code: 'short_name'
		};
		var addressTypes = {
			street_number: 'streetno',
			route: 'streetname',
			locality : 'city',
			administrative_area_level_1 : 'state',
			country : 'country',
			postal_code : 'zipCode',
		};
		var input = document.getElementById('<?php echo $google_field_id ?>');
		
		function initAutocomplete() {
			var options = {
				types: ['geocode'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us"]},
			};
			autocomplete = new google.maps.places.Autocomplete(
			/** @type {!HTMLInputElement} */(input), options);
			
			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		}
		
		function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();

			for (var component in componentForm) {
				var addressType = addressTypes[component];
				document.querySelector('input[name="'+ addressType +'"]').value = '';
				document.querySelector('input[name="'+ addressType +'"]').disabled = false;
			}

			// Get each component of the address from the place details
			// and fill the corresponding field on the form.
			console.log(place.address_components);
			console.log(componentForm);
			for (var i = 0; i < place.address_components.length; i++) {
				var component = place.address_components[i].types[0];
				var addressType = addressTypes[component];
				if (componentForm[component]) {
					var val = place.address_components[i][componentForm[component]];
					document.querySelector('input[name="'+ addressType +'"]').value = val;
				}
			}
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

add_action( 'wpcf7_contact_form', 'zipperagent_custom_script' );

function zipperagent_custom_script( $post ) {
	
	if( isset($post->id) ){
		$za_save_rental = get_post_meta( $post->id, 'za_save_rental', true);
	}else{
		$za_save_rental = get_post_meta( $post->id(), 'za_save_rental', true);
	}

	if( ! $za_save_rental || !empty($_POST)) return;
	
	// echo "<pre>"; print_r($_REQUEST); echo "</pre>";
	?>
	<style>
		.autocomplete-wrap{
			border: 1px solid #ddd;
		    height: auto;
		    min-height: 42px;
		    border-radius: 0 3px 3px 0;
		}
		.autocomplete-wrap .ms-ctn{
		    box-shadow: none;
		    padding-top: 7px;
		    padding-bottom: 7px;
		    height: auto;
		}
		.autocomplete-wrap .ms-ctn .ms-sel-ctn input{
			width: 1012px;
		    padding: 0px;
		    line-height: 1.8;
		    box-shadow: none;
		    border: 0px !important;
		}
		.autocomplete-wrap .ms-ctn .ms-sel-ctn input:focus{
			outline: none;
		}
		.autocomplete-wrap .dropdown-menu{
			position: absolute;
			background: #fff;
		    top: 100%;
		    left: 0px;
		    z-index: 1000;
		    float: left;
		    min-width: 160px;
			max-width: unset !important;
		    margin: 2px 0px 0px;
		    list-style: none;
		    font-size: 14px;
		    background-color: rgb(255, 255, 255);
		    border: 1px solid #c8c8c8;
		    border-radius: 4px;
		    -webkit-box-shadow: inset 0 -2px 4px -1px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.1);
		    box-shadow: inset 0 -2px 4px -1px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.1);
		    border-radius: 2px;
		    text-align: left;
		    background-clip: padding-box;
		    padding: 0px !important;
		    width: 100% !important;
			right: 0 !important;
		}
		.autocomplete-wrap .ms-inv{
			border: 0 !important;
		    padding: 0;
		    line-height: 1.8;
		    /* height: 40px !important; */
		    box-shadow: none;
		}
		.autocomplete-wrap .ms-helper{
			bottom:-24px;
		}
		.hidden{
			display:none;
		}
	</style>
	<script>		
		jQuery(document).ready(function($) {
			
			var timer;
			
			<?php 
			$data = get_autocomplete_data();
			
			$towns = isset($data->towns)?$data->towns:array();
			$tenants = isset($data->tenants)?$data->tenants:array();
			?>
			
			var direct=0;
			
			var towns = <?php echo json_encode($towns); ?>;
			var tenants = <?php echo json_encode($tenants); ?>;
			
			var ms_town = $('input[name=town-autocomplete').magicSuggest({
				
				data: towns,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				// maxSelection: 1,
				allowFreeEntries: false,
				minChars: 2,
				renderer: function(data){
					return '<div class="location">' +
						'<div class="name '+ data.type +'">' + data.name + '</div>' +
						'<div style="clear:both;"></div>' +
					'</div>';
				},
				selectionRenderer: function(data){
					return '<div class="name">' + data.name + '</div>';
				},				
			});
			
			$(ms_town).on('selectionchange', function(e,m){
				$('[name=town]').val(this.getValue());
			});
		});
	</script>
	<script>
		jQuery(document).ready(function($){
			console.time('autopopulate');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: {
					action: 'cf7_autopopulate_rental_search_form'
				},
				success: function( response ) { 
					console.log(response);
					if( response['userdata']!="" && response['userdata'] != null){
						var userdata = response['userdata'];
						// console.log(userdata);
					
						if(userdata.hasOwnProperty('emailWork1') && userdata.emailWork1.length && userdata.emailWork1!=''){
							$('.wpcf7-form input[name=your-email]').val(userdata.emailWork1);
							$('.wpcf7-form input[name=your-email]').prop("readonly", true);
							$('.wpcf7-form input[name=your-email]').css("opacity", 0.5);				
							$('.wpcf7-form input[name=your-email]').parent().addClass('hide-alert');
						}
						if(userdata.hasOwnProperty('firstName') && userdata.firstName.length && userdata.firstName!=''){
							$('.wpcf7-form input[type=text][name=first-name]').val(userdata.firstName);
						
						
							$('.wpcf7-form input[type=text][name=your-name]').val(userdata.firstName + ' ' + userdata.lastName);
						}
						if(userdata.hasOwnProperty('lastName') && userdata.lastName.length && userdata.lastName!=''){
							$('.wpcf7-form input[type=text][name=last-name]').val(userdata.lastName);
						}
						if(userdata.hasOwnProperty('phoneMobile') && userdata.phoneMobile.length && userdata.phoneMobile!='' ||
						   userdata.hasOwnProperty('phoneOffice') && userdata.phoneOffice.length && userdata.phoneOffice!='' ||
						   userdata.hasOwnProperty('phoneOther') && userdata.phoneOther.length && userdata.phoneOther!='' ){
						
							var phone = '';
						
							if( userdata.hasOwnProperty('phoneMobile') && userdata.phoneMobile.length && userdata.phoneMobile!='' ){
								phone = userdata.phoneMobile;
							}else if( userdata.hasOwnProperty('phoneOffice') && userdata.phoneOffice.length && userdata.phoneOffice!='' ){
								phone = userdata.phoneOffice;
							}else if( userdata.hasOwnProperty('phoneOther') && userdata.phoneOther.length && userdata.phoneOther!='' ){
								phone = userdata.phoneOther;
							}
						   
							$('.wpcf7-form input[type=tel][name=phone]').val(phone);
							$('.wpcf7-form input[name=your-phone]').val(phone);
						}
						if(userdata.hasOwnProperty('primaryAddressCity') && userdata.primaryAddressCity.length && userdata.primaryAddressCity!=''){
							$('.wpcf7-form input[type=text][name=city]').val(userdata.primaryAddressCity);
						}
						if(userdata.hasOwnProperty('primaryAddressState') && userdata.primaryAddressState.length && userdata.primaryAddressState!=''){
							$('.wpcf7-form input[type=text][name=state]').val(userdata.primaryAddressState);
						}
						if(userdata.hasOwnProperty('primaryAddressPostalCode') && userdata.primaryAddressPostalCode.length && userdata.primaryAddressPostalCode!=''){
							$('.wpcf7-form input[type=text][name=zipCode]').val(userdata.primaryAddressPostalCode);
						}
					}
				
					console.timeEnd('autopopulate');
				},
				error: function(){
					console.timeEnd('autopopulate');
				}
			});
		})
	</script>
	<?php
}
 
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
		$za_save_form = get_post_meta( $post->id, 'za_save_form', true);
		$za_contact_save = get_post_meta( $post->id, 'za_contact_save', true);
		$za_agent_login = get_post_meta( $post->id, 'za_agent_login', true);
		$za_assignedTo = get_post_meta( $post->id, 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $post->id, 'za_leadSource', true);
		$za_save_rental = get_post_meta( $post->id, 'za_save_rental', true);
	}else{
		$za_contact_form = get_post_meta( $post->id(), 'za_contact_form', true);
		$za_save_form = get_post_meta( $post->id(), 'za_save_form', true);
		$za_contact_save = get_post_meta( $post->id(), 'za_contact_save', true);
		$za_agent_login = get_post_meta( $post->id(), 'za_agent_login', true);
		$za_assignedTo = get_post_meta( $post->id(), 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $post->id(), 'za_leadSource', true);
		$za_save_rental = get_post_meta( $post->id(), 'za_save_rental', true);
	}
	?>
	<p><label>
	<input type="hidden" name="za_contact_form" value="0" />
	<input type="checkbox" name="za_contact_form" value="1" <?php checked($za_contact_form, 1); ?> /> Enable Zipperagent Contact Form </label></p>	
	<p><label>assignedTo
	<input type="text" name="za_assignedTo" value="<?php echo $za_assignedTo; ?>" /></label></p>	
	<p><label>leadSource
	<input type="text" name="za_leadSource" value="<?php echo $za_leadSource; ?>" /></label></p>	
	<hr />
	<p><label>
	<input type="hidden" name="za_save_form" value="0" />
	<input type="checkbox" name="za_save_form" value="1" <?php checked($za_save_form, 1); ?> /> Enable Zipperagent Save Form </label></p>	
	<hr />
	<p><label>
	<input type="hidden" name="za_contact_save" value="0" />
	<input type="checkbox" name="za_contact_save" value="1" <?php checked($za_contact_save, 1); ?> /> Enable Zipperagent Contact Save</label></p>
	<hr />
	<p><label>
	<input type="hidden" name="za_save_rental" value="0" />
	<input type="checkbox" name="za_save_rental" value="1" <?php checked($za_save_rental, 1); ?> /> Enable Zipperagent Save Rental Search</label></p>
	<?php /* <p><label>	Agent Login
	<input type="text" name="za_agent_login" value="<?php echo $za_agent_login; ?>" /> </label>	</p> */
}

add_action( 'wpcf7_save_contact_form', 'zipperagent_save_contact_form', 10, 3 );

function zipperagent_save_contact_form($contact_form, $args, $context){
	
	if( isset($contact_form->id) ){
		update_post_meta( $contact_form->id, 'za_contact_form', sanitize_text_field( $_REQUEST['za_contact_form'] ) );
		update_post_meta( $contact_form->id, 'za_save_form', sanitize_text_field( $_REQUEST['za_save_form'] ) );
		update_post_meta( $contact_form->id, 'za_contact_save', sanitize_text_field( $_REQUEST['za_contact_save'] ) );
		update_post_meta( $contact_form->id, 'za_agent_login', sanitize_text_field( $_REQUEST['za_agent_login'] ) );
		update_post_meta( $contact_form->id, 'za_assignedTo', sanitize_text_field( $_REQUEST['za_assignedTo'] ) );
		update_post_meta( $contact_form->id, 'za_save_rental', sanitize_text_field( $_REQUEST['za_save_rental'] ) );
	}else{
		update_post_meta( $contact_form->id(), 'za_contact_form', sanitize_text_field( $_REQUEST['za_contact_form'] ) );
		update_post_meta( $contact_form->id(), 'za_save_form', sanitize_text_field( $_REQUEST['za_save_form'] ) );
		update_post_meta( $contact_form->id(), 'za_contact_save', sanitize_text_field( $_REQUEST['za_contact_save'] ) );
		update_post_meta( $contact_form->id(), 'za_agent_login', sanitize_text_field( $_REQUEST['za_agent_login'] ) );
		update_post_meta( $contact_form->id(), 'za_assignedTo', sanitize_text_field( $_REQUEST['za_assignedTo'] ) );
		update_post_meta( $contact_form->id(), 'za_leadSource', sanitize_text_field( $_REQUEST['za_leadSource'] ) );
		update_post_meta( $contact_form->id(), 'za_save_rental', sanitize_text_field( $_REQUEST['za_save_rental'] ) );
	}
}
 
add_action('wpcf7_mail_sent', 'zipperagent_cf7_submit_contact_form', 2);
add_action('wpcf7_mail_sent', 'zipperagent_cf7_submit_contact_save', 2);
add_action('wpcf7_mail_sent', 'zipperagent_cf7_submit_save_rental', 2);
// add_action('wpcf7_mail_failed', 'zipperagent_cf7_submit', 2);

function zipperagent_cf7_submit_contact_form($contact_form, $cfresult=null){
	
	if(isset($contact_form->id)){
		$za_contact_form = get_post_meta( $contact_form->id, 'za_contact_form', true);
		$za_save_form = get_post_meta( $contact_form->id, 'za_save_form', true);
		$za_assignedTo = get_post_meta( $contact_form->id, 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $contact_form->id, 'za_leadSource', true);
	}else{	
		$za_contact_form = get_post_meta( $contact_form->id(), 'za_contact_form', true);
		$za_save_form = get_post_meta( $contact_form->id(), 'za_save_form', true);
		$za_assignedTo = get_post_meta( $contact_form->id(), 'za_assignedTo', true);
		$za_leadSource = get_post_meta( $contact_form->id(), 'za_leadSource', true);
	}
	
	if($za_contact_form || $za_save_form){		
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
		$phone = ! $phone ? sanitize_text_field( $_REQUEST['your-phone'] ) : $phone;
		$address = isset($_REQUEST['address']) ? sanitize_text_field( $_REQUEST['address'] ) : '';
		$city = isset($_REQUEST['city']) ? sanitize_text_field( $_REQUEST['city'] ) : '';
		$state = isset($_REQUEST['state']) ? sanitize_text_field( $_REQUEST['state'] ) : '';
		$zipCode = isset($_REQUEST['zipCode']) ? sanitize_text_field( $_REQUEST['zipCode'] ) : '';
		$streetno = isset($_REQUEST['streetno']) ? sanitize_text_field( $_REQUEST['streetno'] ) : '';
		$streetname = isset($_REQUEST['streetname']) ? sanitize_text_field( $_REQUEST['streetname'] ) : '';
		$country = isset($_REQUEST['country']) ? sanitize_text_field( $_REQUEST['country'] ) : '';
		$subject = isset($_REQUEST['your-subject']) ? sanitize_text_field( $_REQUEST['your-subject'] ) : '';
		$message = isset($_REQUEST['your-message']) ? sanitize_textarea_field( $_REQUEST['your-message'] ) : '';
		$message = ! $message ? ( isset($_REQUEST['important-features']) ? sanitize_textarea_field( $_REQUEST['important-features'] ): '' ) : $message;
		$url = isset($_REQUEST['current-url']) ? urlencode( $_REQUEST['current-url'] ) : '';
		$lookfor = isset($_REQUEST['lookfor'])?$_REQUEST['lookfor']:'';
		$buyer = isset($_REQUEST['buyer'])?$_REQUEST['buyer']:(strpos(strtolower($lookfor), 'buy') !== false?1:0);
		$seller = isset($_REQUEST['seller'])?$_REQUEST['seller']:(strpos(strtolower($lookfor), 'sell') !== false?1:0);
		$your_interest = isset($_REQUEST['your-interest']) ? (is_array( $_REQUEST['your-interest'] ) ? implode(', ',  $_REQUEST['your-interest']) : sanitize_text_field($_REQUEST['your-interest']) ) : '';
		$planning = isset($_REQUEST['planning']) ? (is_array( $_REQUEST['planning'] ) ? implode(', ',  $_REQUEST['planning']) : sanitize_text_field($_REQUEST['planning']) ) : '';
		$source_url = isset($_REQUEST['source_url']) ? sanitize_text_field( $_REQUEST['source_url'] ) : '';
		$hidden_subject = isset($_REQUEST['hidden_subject']) ? sanitize_text_field( $_REQUEST['hidden_subject'] ) : '';
		
		if($hidden_subject){
			$message = 'Subject: ' . $hidden_subject . "</ br></ br>". ' ' . $message;
		}
		
		if($address){
			$message .= "</ br></ br>".' Address: ' . $address;
		}
		
		if($your_interest){
			$message .= "</ br></ br>".' Your Interest: ' . $your_interest;
		}
		
		if($planning){
			$message .= "</ br></ br>".' Move Planning: ' . $planning;
		}
		
		if($source_url){
			$message .= "</ br></ br>".' Source URL: ' . $source_url;
		}
		
		$vars=array(
			// 'id'=>implode(',',$contactIds), //disabled
			'email'=>($email),
			'firstName'=>($firstName),
			'lastName'=>($lastName),
			// 'Name' => $firstName . ' ' . $lastName,
			'phone'=>($phone),					
			'subject'=>($subject),			
			'notes'=>($message),			
			'url'=>($source_url),			
		);
		
		if($za_assignedTo){
			$vars['assignedTo']=$za_assignedTo;
		}
		
		if($za_leadSource){
			$vars['leadSource']=$za_leadSource;
		}
		
		if($hidden_subject){
			$vars['websiteLeadFrom']=$hidden_subject;
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
		if($streetno){
			$vars['streetno']=$streetno;
		}
		if($streetname){
			$vars['streetname']=$streetname;
		}
		if($country){
			$vars['country']=$country;
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
		
		if( !$contactIds && isset($result->result->id) ){
			$contactIds=array();
			$contactIds[] = $result->result->id;
		}
		// $result=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		
		if($result){
			// print_r($vars);
			// print_r($result);
		}
		
		if($za_save_form){	
			
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			$minprice = isset($_REQUEST['minprice']) ? sanitize_text_field( $_REQUEST['minprice'] ) : '';
			$maxprice = isset($_REQUEST['maxprice']) ? sanitize_text_field( $_REQUEST['maxprice'] ) : '';
			$bedroom = isset($_REQUEST['bedroom']) ? sanitize_text_field( $_REQUEST['bedroom'] ) : '';
			$bathroom = isset($_REQUEST['bathroom']) ? sanitize_text_field( $_REQUEST['bathroom'] ) : '';
			$proptype = isset($_REQUEST['proptype']) ? ( is_array($_REQUEST['proptype']) ? implode( ',', $_REQUEST['proptype'] ) : sanitize_text_field($_REQUEST['proptype']) ) : '';
			$town = isset($_REQUEST['town']) ? ( is_array($_REQUEST['town']) ? implode( ',', $_REQUEST['town'] ) : sanitize_text_field($_REQUEST['town']) ) : '';
			$status = isset($_REQUEST['status']) ? ( $_REQUEST['status'] ) : '';
			$status = empty($status)?zipperagent_active_status():$status;
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			
			$args=array(
				'asrc' => $rb['web']['asrc'],
				'abeds' => $bedroom,
				'abths' => $bathroom,
				'apt' => $proptype,
				'asts' => $status,
				'apmin' => $minprice,
				'apmax' => $maxprice,
				'astt' => str_replace(' ','',$states),
				'atwns' => $town,
			);
		
			$vars_2= array(
				'crit' => proces_crit($args),
				'ps' => 24,
				'sidx' => 0,
				'o' => '',
				'contactId' => implode(',',$contactIds),
			);
			
			
			$result = zipperagent_save_search( $vars_2 );
			
			if($result){
				// print_r($_REQUEST);
				// print_r($vars_2);
				// print_r($result);
				// die();
			}
		}
	}
}

function zipperagent_cf7_submit_contact_save($contact_form, $cfresult=null){
	
	if(isset($contact_form->id)){
		$za_contact_save = get_post_meta( $contact_form->id, 'za_contact_save', true);
	}else{	
		$za_contact_save = get_post_meta( $contact_form->id(), 'za_contact_save', true);
	}
	
	if( $za_contact_save ){		
		// $contactIds=get_contact_id();
		
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
		$phone = ! $phone ? sanitize_text_field( $_REQUEST['your-phone'] ) : $phone;
		
		$role = sanitize_text_field( $_REQUEST['role'] );
		$role = ! $role ? sanitize_text_field( $_REQUEST['your-role'] ) : $role;
		
		
		$vars=array(
			'emailWork1'=>($email),
			'firstName'=>($firstName),
			'lastName'=>($lastName),
			'phoneMobile'=>($phone),	
			'title' => $role,		
		);
		
        $result = zipperagent_run_curl("/api/lite/contact/save", array(), 1, $vars);
		
		// $result=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		
		if($result){
			// echo 'result';
			// print_r($vars);
			// print_r($result);
		}
	}
}

function zipperagent_cf7_submit_save_rental($contact_form, $cfresult=null){
	
	if(isset($contact_form->id)){
		$za_save_rental = get_post_meta( $contact_form->id, 'za_save_rental', true);
	}else{	
		$za_save_rental = get_post_meta( $contact_form->id(), 'za_save_rental', true);
	}
	
	if( $za_save_rental ){		
		// $contactIds=get_contact_id();
		
		$email = $_REQUEST['your-email'] ? sanitize_text_field( $_REQUEST['your-email'] ) : '';
		$firstName = $_REQUEST['first-name'] ? sanitize_text_field( $_REQUEST['first-name'] ) : '';
		$lastName = $_REQUEST['last-name'] ? sanitize_text_field( $_REQUEST['last-name'] ) : '';
		$phone = $_REQUEST['your-phone'] ? sanitize_text_field( $_REQUEST['your-phone'] ) : '';
		$phoneType = $_REQUEST['call-from'] ? sanitize_text_field( $_REQUEST['call-from'] ) : '';
		$rentalType = $_REQUEST['property'] ? sanitize_text_field( $_REQUEST['property'] ) : '';
		$dateStart = $_REQUEST['date-start'] ? sanitize_text_field( $_REQUEST['date-start'] ) : '';
		$dateEnd = $_REQUEST['date-end'] ? sanitize_text_field( $_REQUEST['date-end'] ) : '';
		$bedroom = $_REQUEST['bedroom'] ? sanitize_text_field( $_REQUEST['bedroom'] ) : '';
		$bath = $_REQUEST['bath'] ? sanitize_text_field( $_REQUEST['bath'] ) : '';
		$minrent = $_REQUEST['minrent'] ? sanitize_text_field( $_REQUEST['minrent'] ) : '';
		$maxrent = $_REQUEST['maxrent'] ? sanitize_text_field( $_REQUEST['maxrent'] ) : '';
		$neighbor = $_REQUEST['neighbor'] ? sanitize_text_field( $_REQUEST['neighbor'] ) : '';
		$breaker = $_REQUEST['breaker'] ? sanitize_text_field( $_REQUEST['breaker'] ) : '';
		$wish = $_REQUEST['wish'] ? sanitize_text_field( $_REQUEST['wish'] ) : '';
		$transport = $_REQUEST['transport'] ? sanitize_text_field( $_REQUEST['transport'] ) : '';
		$transportation = $_REQUEST['Transportation'] ? sanitize_text_field( $_REQUEST['Transportation'] ) : '';
		$parking = $_REQUEST['parking'] ? sanitize_text_field( $_REQUEST['parking'] ) : ''; 
		$max_parking_space = $_REQUEST['max-parking-space'] ? sanitize_text_field( $_REQUEST['max-parking-space'] ) : '';
		$car = $_REQUEST['car'] ? sanitize_text_field( $_REQUEST['car'] ) : '';
		$pet = $_REQUEST['pet'] ? sanitize_text_field( $_REQUEST['pet'] ) : '';
		$showingTimes = $_REQUEST['showing-times'] ? sanitize_text_field( $_REQUEST['showing-times'] ) : '';
		$income = $_REQUEST['income'] ? sanitize_text_field( $_REQUEST['income'] ) : '';
		$jobTitle = $_REQUEST['job-title'] ? sanitize_text_field( $_REQUEST['job-title'] ) : '';
		$creditScore = $_REQUEST['credit-score'] ? sanitize_text_field( $_REQUEST['credit-score'] ) : '';
		$brokerFee = $_REQUEST['broker-fee'] ? sanitize_text_field( $_REQUEST['broker-fee'] ) : '';
		$firstRent = $_REQUEST['first-rent'] ? sanitize_text_field( $_REQUEST['first-rent'] ) : '';
		$security = $_REQUEST['security'] ? sanitize_text_field( $_REQUEST['security'] ) : '';
		$lastRent = $_REQUEST['last-rent'] ? sanitize_text_field( $_REQUEST['last-rent'] ) : '';
		$message = $_REQUEST['your-message'] ? sanitize_text_field( $_REQUEST['your-message'] ) : '';
		$request_showing_date = $_REQUEST['request-showing-date'] ? sanitize_text_field( $_REQUEST['request-showing-date'] ) : '';
		$request_showing_time = $_REQUEST['request-showing-time'] ? sanitize_text_field( $_REQUEST['request-showing-time'] ) : '';
		$request_showing_message = $_REQUEST['request-showing-message'] ? sanitize_text_field( $_REQUEST['request-showing-message'] ) : '';
		$towns = $_REQUEST['town'] ? sanitize_text_field( $_REQUEST['town'] ) : '';
		
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		// $note = "Rental Type : {$rentalType} , Move-In-Date(From) : {$dateStart}, Move-In-Date(To) {$dateEnd}: , Deal Breakers : {$breaker} , Wish List : {$wish} , near public transport : {$transport} , Transportation line : {$transportation} , Showing Times : {$showingTimes} , Income : {$income} , Occupation : {$jobTitle} , Credit Score : {$creditScore} , Broker Fee :{$brokerFee} , 1st Month's Rent :{$firstRent} , Security Deposit : {$security} , Last Month's Rent : {$lastRent} , Desired Areas/Neighborhoods : {$neighbor} , how many cars : {$car} Comments : {$message}";
		
		$note = "Rental Type : {$rentalType} , Deal Breakers : {$breaker} , Wish List : {$wish} , near public transport : {$transport} , Transportation line : {$transportation} , Showing Times : {$showingTimes} , Income : {$income} , Occupation : {$jobTitle} , Credit Score : {$creditScore} , Broker Fee :{$brokerFee} , 1st Month's Rent :{$firstRent} , Security Deposit : {$security} , Last Month's Rent : {$lastRent} , Desired Areas/Neighborhoods : {$neighbor} , how many cars : {$car} Comments : {$message} , Request showing date : {$request_showing_date} , Request showing time : {$request_showing_time} , Request showing message : {$request_showing_message}";
		
		$vars=array(
			'asrc'=>$rb['web']['asrc'],
			// 'aloff'=>$rb['web']['aloff'],
			// 'apt'=> implode( ',', array_map("trim",$rentalType) ),
			'apt'=> 'RN',
			'abeds' => (int)filter_var($bedroom, FILTER_SANITIZE_NUMBER_INT),
			'abths'=>(int)filter_var($bath, FILTER_SANITIZE_NUMBER_INT),
			'apmax' => za_correct_money_format($maxrent),
			'apmin' => za_correct_money_format($minrent),
			'atwns' => 'BOST',
			'aavldtf' => $dateStart,
			'aavldtt' => $dateEnd,
			'agrgspc' => $parking == 'Yes' ? 1 : 0,
			'aptp' => $pet,
		);
		
		if($max_parking_space && is_numeric($max_parking_space)){
			$vars['agrgspcmx'] = $max_parking_space;
		}
		if($towns){
		    $towns = str_replace('atwns_', '', $towns);
			$vars['atwns'] = $towns;
		}
		
		$params=array(
			'firstName' => $firstName,
			'lastName' => $lastName,
			'email' => $email,
			'phone' => $phone,	
			'phoneType' => $phoneType,
			'note' => $note,
			'crit' => proces_crit($vars),
		);
		
		$contactIds=get_contact_id();
		if($contactIds)
			$params['cid'] = implode(',',$contactIds);
		
        $result = zipperagent_run_curl("/api/mls/saveRentalSearch", $params, 1, '', 1);
		
		// $result=isset($result->status) && $result->status=='SUCCESS'?$result->status:0;
		
		if($result){
			// echo 'result';
			// print_r($params);
			// print_r($result);
			// print_r($_POST);
		}
	}
}

// add_action( 'wpcf7_mail_failed', 'za_contact_form_send_mail_always_success' );

function za_contact_form_send_mail_always_success( $contact_form ) {
	$contact_form->set_status( 'mail_sent' );
}

add_filter('wpcf7_form_tag', 'enable_pipe_cf7_select_values', 10);
function enable_pipe_cf7_select_values($tag)
{
    if ($tag['basetype'] != 'select' && $tag['basetype'] != 'checkbox' && $tag['basetype'] != 'radio') {
        return $tag;
    }

    $values = [];
    $labels = [];
    foreach ($tag['raw_values'] as $raw_value) {
        $raw_value_parts = explode('|', $raw_value);
        if (count($raw_value_parts) >= 2) {
            $values[] = $raw_value_parts[1];
            $labels[] = $raw_value_parts[0];
        } else {
            $values[] = $raw_value;
            $labels[] = $raw_value;
        }
    }
    $tag['values'] = $values;
    $tag['labels'] = $labels;

    // Optional but recommended:
    //    Display labels in mails instead of values
    //    You can still use values using [_raw_tag] instead of [tag]
    $reversed_raw_values = array_map(function ($raw_value) {
        $raw_value_parts = explode('|', $raw_value);
        return implode('|', array_reverse($raw_value_parts));
    }, $tag['raw_values']);
    $tag['pipes'] = new \WPCF7_Pipes($reversed_raw_values);

    return $tag;
}

add_action( 'wpcf7_init', 'wpcf7_add_form_tag_current_url' );
function wpcf7_add_form_tag_current_url() {
    // Add shortcode for the form [source_url]
    wpcf7_add_form_tag( 'source_url',
        'wpcf7_current_url_form_tag_handler',
        array(
            'name-attr' => true
        )
    );
}

// Parse the shortcode in the frontend
function wpcf7_current_url_form_tag_handler( $tag ) {
    global $wp;
    $url = home_url( $wp->request );
	$tagname = isset($tag['name']) && !empty($tag['name']) ? $tag['name'] : 'source_url';
    return '<input type="hidden" name="'.$tagname.'" value="'.$url.'" />';
}