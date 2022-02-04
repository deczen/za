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
        <form id="searchProfile" class="form-inline zpa-quick-search-form omnibar" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET" data-zpa-quick-search-bound="true">
            <fieldset>
                <div class="row">
					<?php /*
					<ul class="nav nav-tabs mb-10" id="zpa-search-location-tabs">
						<li class=" active "> <a id="zpa-location-tab" href="#zpa-search-location-tab" data-toggle="tab" data-zpa-search-tab="location"> Location </a> </li>
						<li class=" "> <a id="zpa-address-tab" href="#zpa-search-address-tab" data-toggle="tab" data-zpa-search-tab="address"> Address </a> </li>
						<li class=" "> <a id="zpa-listingids-tab" href="#zpa-search-listingids-tab" data-toggle="tab" data-zpa-search-tab="listingids"> Listing Id </a> </li>
					</ul> */ ?>	
					<script>
						jQuery('#zpa-search-location-tabs a').click(function(){
							jQuery(this).tab('show');
						})
					</script>
					<div class="tab-content omnibar-content">
						<div id="zpa-search-location-tab" class="tab-pane active">
							<div class="row">
								<div class="col-xs-12 col-sm-5 mb-10">
									<label for="zpa-area-input" class="field-label"> Location </label>
									<div id="zpa-search-location" class="zpa-search-location col-xs-9 col-sm-10">
										<div class="search-by dropdown">
										  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Search By
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<ul>
												<li><a id="all" href="#"><input type="radio" name="search_category" checked /> All Categories</a></li>
												<!-- <li><a id="addr" href="#"><input type="radio" name="search_category" /> Address</a></li> -->
												<li><a id="addr2" href="#"><input type="radio" name="search_category" /> Address</a></li>
												<li><a id="area" href="#"><input type="radio" name="search_category" /> Area</a></li>
												<li><a id="town" href="#"><input type="radio" name="search_category" /> City / Town</a></li>
												<li><a id="county" href="#"><input type="radio" name="search_category" /> County</a></li>
												<!-- <li><a id="lake" href="#"><input type="radio" name="search_category" /> Lake</a></li> -->
												<li><a id="listid" href="#"><input type="radio" name="search_category" /> MLS #ID</a></li>
												<!-- <li><a id="school" href="#"><input type="radio" name="search_category" /> School</a></li> -->
												<!-- <li><a id="school2" href="#"><input type="radio" name="search_category" /> School</a></li> -->
												<li><a id="school3" href="#"><input type="radio" name="search_category" /> School</a></li>
												<li><a id="zip" href="#"><input type="radio" name="search_category" /> Zip Code</a></li>
											</ul>
										  </div>
										</div>
										<div class="field-wrap">
											<div class="field-section all">
												<input id="zpa-all-input" class="zpa-area-input form-control" placeholder="Type any Address, Area, City, County, MLS# or Zip Code"  name="" aria-label="search" />
												<input id="zpa-all-input-address" type="hidden" value="" />
												<input id="zpa-all-input-address-values" type="hidden" value="" />
												<div style="display:none;" class="input-fields"></div>
											</div>
											<div class="field-section addr hide">
												<input type="text" id="zpa-area-address" class="form-control" placeholder="Type any Address" />
																																								
												<input type="hidden" id="street_number" name="advStNo" disabled="true" />
												<input type="hidden" id="route" name="advStName" disabled="true" />
												<input type="hidden" id="locality" name="advTownNm" disabled="true" />
												<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
												<input type="hidden" id="country" name="advCounties" disabled="true" />
												<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
											</div>
											<div class="field-section addr2 hide">
												<input type="text" id="zpa-address-key" class="form-control" placeholder="Type any Address" name="location[]"/>
											</div>
											<div class="field-section area hide">
												<input id="zpa-areas-input" class="form-control" placeholder="Type any Area"  name="location[]"/>
											</div>
											<div class="field-section town hide">
												<input id="zpa-town-input" class="form-control" placeholder="Type any City or Town"  name="location[]"/>
											</div>
											<div class="field-section county hide">
												<input id="zpa-county-input" class="form-control" placeholder="Type any County"  name="location[]"/>
											</div>
											<div class="field-section lake hide">
												<input id="zpa-lake-input" class="form-control" placeholder="Type any Lake"  name="alkChnNm[]"/>
											</div>
											<div class="field-section listid hide">
												<input id="zpa-listid-input" class="form-control" placeholder="Type any MLS ID #"  name=""/>
												<div style="display:none;" class="input-fields"></div>
											</div>
											<div class="field-section school hide">
												<input type="text" id="zpa-school" class="form-control" placeholder="Type any Address" />
												
												<input type="hidden" id="lat" name="lat" />
												<input type="hidden" id="lng" name="lng" />
											</div>
											<div class="field-section school2 hide">
												<input id="zpa-school-input" class="form-control" placeholder="Type any Address"  name="school[]"/>
											</div>
											<div class="field-section school3 hide">
												<input id="zpa-school3-input" class="form-control" placeholder="Type any Address"  name="location[]"/>
											</div>
											<div class="field-section zip hide">
												<input id="zpa-zipcode-input" class="form-control" placeholder="Type any Zip Code"  name="location[]"/>
											</div>
										</div>
										<script>
											jQuery('body').on('click', '.zpa-search-location .search-by .dropdown-menu a', function(){
												var id = jQuery(this).attr('id');
												var targetClass = id;
												
												jQuery(this).parents('.zpa-search-location').find('.field-wrap .field-section:not(.'+ targetClass +') input').prop('disabled',true);
												jQuery(this).parents('.zpa-search-location').find('.field-wrap .field-section.'+targetClass+' input').prop('disabled',false);
												
												jQuery(this).parents('.zpa-search-location').find('.field-wrap .field-section:not(.'+ targetClass +')').addClass('hide');
												jQuery(this).parents('.zpa-search-location').find('.field-wrap .field-section.'+targetClass).removeClass('hide');
												
												jQuery(this).find('input').prop('checked', true);
												
												jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
												
												jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' ); //force google autocomplete dropdown visible
												
												return false;
											});
										</script>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 mb-10">
									<label for="zpa-minprice-homes" class="field-label"> Property Type </label>
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
											
											if($extra_proptypes = zipperagent_extra_proptype()){
												foreach($extra_proptypes as $key=>$extra_proptype){
													echo "<li><label class=\"radio-btn\"><input type=\"checkbox\" name=\"". strtolower($extra_proptype['abbrev']) ."\" value='". $extra_proptype['selectValue'] ."'>". $extra_proptype['displayName'] ." </label></li>";
												}
											}
											?>
										</ul>
									</div>
								</div>
								<?php /* <div class="col-xs-12 col-sm-2">
									<label for="zpa-minprice-homes" class="field-label"> Min. Price </label>
									<div style="position: relative;">
										<div class="zpa-label-overlay-money"> $ </div>
										<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value=""> </div>
								</div> */ ?>
								<div class="col-xs-12 col-sm-2">
									<label for="zpa-maxprice-homes" class="field-label"> Max. Price </label>
									<div style="position: relative;">
										<div class="zpa-label-overlay-money"> $ </div>
										<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value=""> </div>
								</div>
								<div class="col-xs-12 col-sm-1 hidden-xs hidden-sm">
									<label for="zpa-select-baths-homes" class="field-label">&nbsp;</label>						
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true" role="none"></i> </button>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12">
									<input type="hidden" id="qs-price-slider-range-2" />
								</div>
							</div>
						</div>
						<div id="zpa-search-address-tab" class="tab-pane">
							<div class="row">
								<div class="col-xs-12 col-sm-11 mb-10">
									<label for="zpa-area-address" class="field-label"> Address </label>
									<input type="text" id="zpa-area-address" class="zpa-area-address form-control" placeholder="Type address here" onFocus="geolocate()" name="address"/>
																															
									<input type="hidden" id="street_number" name="advStNo" disabled="true" />
									<input type="hidden" id="route" name="advStName" disabled="true" />
									<input type="hidden" id="locality" name="advTownNm" disabled="true" />
									<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
									<input type="hidden" id="country" name="advCounties" disabled="true" />
									<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
								</div>
								<div class="col-xs-12 col-sm-1 hidden-xs hidden-sm">
									<label for="zpa-select-baths-homes" class="field-label">&nbsp;</label>						
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true" role="none"></i> </button>
								</div>
							</div>
						</div>						
						<div id="zpa-search-listingids-tab" class="tab-pane">
							<div class="row">
								<div class="col-xs-12 col-sm-11 mb-10">
									<label for="zpa-listingids" class="field-label"> Listing Id </label>
									<input id="zpa-listingids" class="zpa-area-input form-control" placeholder="Comma separted listing ids"  name="alstid"/>
								</div>							
								<div class="col-xs-12 col-sm-1 hidden-xs hidden-sm">
									<label for="zpa-select-baths-homes" class="field-label">&nbsp;</label>						
									<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true" role="none"></i> </button>
								</div>
							</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-xs-12 col-sm-1 hidden-md hidden-lg">
							<label for="zpa-select-baths-homes" class="field-label">&nbsp;</label>
							<button id="zpa-quicksearch-submit3" class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search" aria-hidden="true" role="none"></i> </button>
							
						</div>
					</div>
                </div>
            </fieldset>
            <div> </div>
			
			<?php 
			$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
			if($default_order): ?>
			<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
			<?php endif; ?>
			
			<?php if($requests['column']): ?>
			<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
			<?php endif; ?>
			
			<?php if($requests['newsearchbar']): ?>
			<input type="hidden" name="newsearchbar" value="<?php echo $requests['newsearchbar']; ?>" />
			<?php endif; ?>
			
			<?php if($requests['direct']): ?>
			<input type="hidden" name="direct" value="<?php echo $requests['direct']; ?>" />
			<?php endif; ?>
        </form>
    </div>
	
	<?php /* if(empty($requests['location_option'])): ?>
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
				componentRestrictions: {country: ["us"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete( /** @type {!HTMLInputElement} *(input), options);

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
		
	</script> */ ?>
	
	<?php echo global_new_omnibar_script_v2(0, isset($requests['direct'])&&$requests['direct']?$requests['direct']:0); ?>
	
	<script>
		var $range = jQuery("#qs-price-slider-range-2");
		
		$range.ionRangeSlider({
			type: "single",
			grid: false,
			step: 10000,
			min: '<?php echo $minListPrice ?>',
			max: 10000000,
			from: '<?php echo $minListPrice ?>',
			to: '<?php echo $maxListPrice ?>',
			prefix: "$",
			onChange: function(data){
				jQuery( "#zpa-maxprice-homes" ).val(addCommas(data.from));
			},
			onFinish: function(data){
				jQuery('#zpa-search-filter-form').submit();
			},
		});
		
		var instance = $range.data("ionRangeSlider");
		
		jQuery('#zpa-maxprice-homes').on("change keyup", function () {
			var val = jQuery(this).prop("value");
			
			instance.update({
				from: val.replace(/,/g, '')
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