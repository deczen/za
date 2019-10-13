<?php
global $requests;

$minListPrice 		= $requests['minlistprice'];
$maxListPrice		= $requests['maxlistprice'];

?>
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/ion.rangeSlider.css'; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/ion.rangeSlider.skinModern.css'; ?>">
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/ion.rangeSlider.min.js'; ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/dropdownCheckboxes.min.css'; ?>">
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/dropdownCheckboxes.min.js'; ?>"></script>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <div class="zpa-widget mb-25">
        <form id="searchProfile" class="form-inline zpa-quick-search-form" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET" data-zpa-quick-search-bound="true">
            <fieldset>
				<div class="row mb-10">
					<ul class="nav nav-tabs mb-15" id="zpa-search-location-tabs">
						<li class=" active "> <a id="zpa-location-tab" href="#zpa-search-location-tab" data-toggle="tab" data-zpa-search-tab="location"> Location </a> </li>
						<li class=" "> <a id="zpa-address-tab" href="#zpa-search-address-tab" data-toggle="tab" data-zpa-search-tab="address"> Address </a> </li>
						<li class=" "> <a id="zpa-listingids-tab" href="#zpa-search-listingids-tab" data-toggle="tab" data-zpa-search-tab="listingids"> Listing Id </a> </li>
					</ul>	
					<script>
						jQuery('#zpa-search-location-tabs a').click(function(){
							jQuery(this).tab('show');
						})
					</script>
					<div class="tab-content omnibar-content">
						<div id="zpa-search-location-tab" class="tab-pane active">
							<div class="row">
								<div class="col-xs-12 col-md-10 col-sm-12 mb-10">
									<input id="zpa-area-input" class="zpa-area-input form-control" placeholder="<?php echo (empty($requests['location_option'])) ? "Enter City / County / Zip" : "Select Location"; ?>"  name="location[]"/>
									<input class="zpa-area-input-hidden" name="" type="hidden">
								</div>							
								
								<div class="col-sm-2 hidden-xs hidden-sm">
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
								</div>
							</div>
							    
							<div class="row">
								<div class="col-xs-12 col-sm-4 mb-10 field-input">					
									<label for="zpa-select-baths-homes" class="field-label"> Property Type </label>
									<?php /*
									<select id="zpa-select-property-type" name="propertyType[]" class="form-control multiselect" multiple="multiple">
										<?php
										$propTypeFields = get_property_type();
										$propTypeOption = !empty($requests['property_type_option']) ? explode( ',', $requests['property_type_option'] ) : array();
										$propDefaultOption = !empty($requests['property_type_default']) ? explode(',',$requests['property_type_default']) : za_get_default_proptype();
									
										foreach( $propTypeFields as $fieldCode=>$fieldName ){
											if($propTypeOption){
												if(in_array($fieldCode, $propTypeOption)){
													echo "<option value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
												}
											}else{
												// echo $propDefaultOption . " == " . $fieldCode. "<br>";
												// if(in_array($fieldCode, $propDefaultOption))
													// $selected="selected";
												// else
													// $selected="";
												
												echo "<option $selected value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
											}										
										}
										?>
									</select> */ ?>

									<div class="dropdown cq-dropdown">
										<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Select <span class="caret"></span> </button>
										<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
											<?php
											$propTypeFields = get_property_type();
											$propTypeOption = !empty($requests['property_type_option']) ? explode( ',', $requests['property_type_option'] ) : array();
											$propDefaultOption = !empty($requests['property_type_default']) ? explode(',',$requests['property_type_default']) : za_get_default_proptype();
											
											//generate proptype options
											foreach( $propTypeFields as $fieldCode=>$fieldName ){
												// echo $propDefaultOption . " == " . $fieldCode. "<br>";
												if(in_array($fieldCode, $propDefaultOption))
													$checked="checked";
												else
													$checked="";
													
												if($propTypeOption){
													if(in_array($fieldCode, $propTypeOption)){
														echo "<option value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
														echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propertyType[]\" value='{$fieldCode}' $checked>{$fieldName} </label></li>";
													}
												}else{									
													echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propertyType[]\" value='{$fieldCode}' $checked>{$fieldName} </label></li>";
												}										
											}
											
											$propSubTypeFields = get_property_sub_type();
											
											//generate propsubtype options
											foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
												
												if(in_array($fieldCode, $propDefaultOption))
													$checked="checked";
												else
													$checked="";
													
												echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"propSubType[]\" value='{$fieldCode}' $checked>{$fieldName} </label></li>";																		
											}
											?>
										</ul>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 mb-10">
									<label for="zpa-minprice-homes" class="field-label"> Min. Price </label>
									<div style="position: relative;">
										<div class="zpa-label-overlay-money"> $ </div>
										<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value=""> </div>
								</div>
								<div class="col-xs-6 col-sm-2 mb-10">
									<label for="zpa-maxprice-homes" class="field-label"> Max. Price </label>
									<div style="position: relative;">
										<div class="zpa-label-overlay-money"> $ </div>
										<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value=""> </div>
								</div> 
								<div class="col-xs-6 col-sm-1 mb-10">
									<label for="zpa-sqft-commercial" class="field-label zpa-sqft-label"> Min. SqFt. </label>
									<input id="zpa-sqft-commercial" name="squareFeet" placeholder="Any" type="text" class="form-control zpa-search-form-input" value="">
								</div>   
								<div class="col-xs-6 col-sm-1 mb-10">
									<label for="zpa-sqft-commercial" class="field-label zpa-sqft-label"> Max. SqFt. </label>
									<input id="zpa-sqft-commercial" name="altszel" placeholder="Any" type="text" class="form-control zpa-search-form-input" value="">
								</div>   
								<div class="col-xs-6 col-sm-1 mb-10">
									<label for="zpa-select-bedrooms-homes" class="field-label"> Beds </label>
									<select id="zpa-select-bedrooms-homes" name="bedrooms" class="form-control zpa-chosen-select-width">
										<option value="">Any</option>
										<option value="1">1+</option>
										<option value="2">2+</option>
										<option value="3">3+</option>
										<option value="4">4+</option>
										<option value="5">5+</option>
									</select>
								</div>
								<div class="col-xs-6 col-sm-1 mb-10">
									<label for="zpa-select-baths-homes" class="field-label"> Baths </label>
									<select id="zpa-select-baths-homes" name="bathCount" class="form-control zpa-chosen-select-width">
										<option value="">Any</option>
										<option value="1">1+</option>
										<option value="2">2+</option>
										<option value="3">3+</option>
										<option value="4">4+</option>
										<option value="5">5+</option>
									</select>
								</div> 
							</div>
							
							<div class="row">			
								<div class="col-xs-12 col-sm-12">
									<input type="hidden" id="qs-price-slider-range-4" />
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-12 hidden-md hidden-lg">
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
								</div>
							</div>
						</div>
						<div id="zpa-search-address-tab" class="tab-pane">
							<div class="row">
								<div class="col-xs-12 col-md-10 col-sm-12 mb-10">
									<input type="text" id="zpa-area-address" class="zpa-area-address form-control" placeholder="Type address here" onFocus="geolocate()" name="address"/>
																															
									<input type="hidden" id="street_number" name="advStNo" disabled="true" />
									<input type="hidden" id="route" name="advStName" disabled="true" />
									<input type="hidden" id="locality" name="advTownNm" disabled="true" />
									<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
									<input type="hidden" id="country" name="advCounties" disabled="true" />
									<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
								</div>
								
								<div class="col-xs-12 col-md-2 col-sm-2">
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
								</div>
							</div>
						</div>
						<div id="zpa-search-listingids-tab" class="tab-pane">
							<div class="row">
								<div class="col-xs-12 col-md-10 col-sm-12 mb-10">
									<input id="zpa-listingids" class="zpa-area-input form-control" placeholder="Comma separted listing ids"  name="alstid"/>
								</div>						
								
								<div class="col-xs-12 col-md-2 col-sm-2">
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
									<?php 
									$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
									if($default_order): ?>
									<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
									<?php endif; ?>
									
									<?php if(isset($requests['column'])): ?>
									<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
                
            </fieldset>
            <div> </div>
        </form>
    </div>
	
	<?php if(empty($requests['location_option'])): ?>
		<?php global_magicsuggest_script(); ?>
	<?php else: ?>
		<?php global_magicsuggest_script('',$requests); ?>
	<?php endif; ?>
	
	<script>  
		<?php
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$states=isset($rb['web']['states'])?$rb['web']['states']:'';
		$states=array_map('trim', explode(',', $states));
		$states=implode(' | ',$states);
		?>
		// This example displays an address form, using the autocomplete feature
		// of the Google Places API to help users fill in the information.

		// This example requires the Places library. Include the libraries=places
		// parameter when you first load the API. For example:
		// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

		var placeSearch, autocomplete;
		var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			country: 'long_name',
			postal_code: 'short_name'
		};
		var input = document.getElementById('zpa-area-address');

		function initAutocomplete() {
			var options = {
				types: ['geocode'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us","ca","in"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete( /** @type {!HTMLInputElement} */(input), options);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		}

		function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();

			for (var component in componentForm) {
				document.getElementById(component).value = '';
				document.getElementById(component).disabled = false;
			}

			// Get each component of the address from the place details
			// and fill the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					document.getElementById(addressType).value = val;
				}
			}
		}

		// Bias the autocomplete object to the user's geographical location,
		// as supplied by the browser's 'navigator.geolocation' object.
		function geolocate() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position) {
					var geolocation = {
						lat: position.coords.latitude,
						lng: position.coords.longitude
					};
					var circle = new google.maps.Circle({
						center: geolocation,
						radius: position.coords.accuracy
					});
					autocomplete.setBounds(circle.getBounds());
				});
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
	<script>	
		
		jQuery(function(){
			
			var location=jQuery('#zpa-search-location-tab');
			var address=jQuery('#zpa-search-address-tab');
			var listingid=jQuery('#zpa-search-listingids-tab');
			
			jQuery("#zpa-address-tab").on("show.bs.tab", function() {
				enabledFields(location, false);
				enabledFields(address, true);
				enabledFields(listingid, false);
				
			});
			jQuery("#zpa-listingids-tab").on("show.bs.tab", function() {
				enabledFields(location, false);
				enabledFields(address, false);
				enabledFields(listingid, true);
			});
			jQuery("#zpa-location-tab").on("show.bs.tab", function() {
				enabledFields(location, true);
				enabledFields(address, false);
				enabledFields(listingid, false);
			});				
				
			function enabledFields(element, enable){
				element.find('input').each(function(){
					jQuery(this).prop('disabled', ! enable);
				});
				element.find('select').each(function(){
					jQuery(this).prop('disabled', ! enable);
				});
				element.find('textarea').each(function(){
					jQuery(this).prop('disabled', ! enable);
				});
			}
		});
		
		
	</script>
	<script>
		var $range = jQuery("#qs-price-slider-range-4");
		
		$range.ionRangeSlider({
			type: "double",
			grid: false,
			step: 10000,
			min: '<?php echo $minListPrice ?>',
			max: 10000000,
			from: '<?php echo $minListPrice ?>',
			to: '<?php echo $maxListPrice ?>',
			prefix: "$",
			onChange: function(data){
				// jQuery( "#price-amount-show" ).html( "<?php echo zipperagent_currency() ?>" + addCommas(data.from) + " - <?php echo zipperagent_currency() ?>" + addCommas(data.to) );
				jQuery( "#zpa-minprice-homes" ).val(addCommas(data.from));
				jQuery( "#zpa-maxprice-homes" ).val(addCommas(data.to));
			},
			onFinish: function(data){
				jQuery('#zpa-search-filter-form').submit();
			},
		});
		
		var instance = $range.data("ionRangeSlider");

		jQuery('#zpa-minprice-homes').on("change keyup", function () {
			var val = jQuery(this).prop("value");
			
			instance.update({
				from: val.replace(/,/g, '')
			});
		});
		
		jQuery('#zpa-maxprice-homes').on("change keyup", function () {
			var val = jQuery(this).prop("value");
			
			instance.update({
				to: val.replace(/,/g, '')
			});
		});
		
		jQuery(document).ready(function() {
			/* allow only number input */
			jQuery("#zpa-minprice-homes, #zpa-maxprice-homes").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					 // Allow: Ctrl/cmd+A
					(e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
					 // Allow: Ctrl/cmd+C
					(e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
					 // Allow: Ctrl/cmd+X
					(e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
					 // Allow: home, end, left, right
					(e.keyCode >= 35 && e.keyCode <= 39)) {
						 // let it happen, don't do anything
						 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}
			});
		});
	</script>
	<script>
		jQuery(function(){ jQuery('.cq-dropdown').dropdownCheckboxes(); });
	</script> 
	<?php /*
	<script>
		// Material Select Initialization
		jQuery(document).ready(function($) {
		  $('.multiselect').multiselect({
			// buttonWidth : '160px',			
			includeSelectAllOption : true,
			nonSelectedText: 'Select',
			numberDisplayed: 1,
			buttonClass: 'form-control',
		  });
		  
		  <?php if(is_array($propDefaultOption)): ?>$('#zpa-select-property-type.multiselect').multiselect('select', ['<?php echo implode("','",$propDefaultOption) ?>']);<?php endif; ?>
		});
	</script> */ ?>
	<script>
		function addCommas(nStr)
		{
			nStr += '';
			x = nStr.split('.');
			x1 = x[0];
			x2 = x.length > 1 ? '.' + x[1] : '';
			var rgx = /(\d+)(\d{3})/;
			while (rgx.test(x1)) {
				x1 = x1.replace(rgx, '$1' + ',' + '$2');
			}
			return x1 + x2;
		}
		jQuery(document).ready(function($){
			$('.input-number').keyup(function(event) {

				// skip for arrow keys
				if(event.which >= 37 && event.which <= 40) return;

				// format number
				$(this).val(function(index, value) {
					return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				});
			});
			
			$('.input-number').val(function(index, value) {
				return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			});
		});
	</script>
</div>