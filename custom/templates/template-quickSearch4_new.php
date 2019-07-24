<?php
global $requests;

$minListPrice 		= $requests['minlistprice'];
$maxListPrice		= $requests['maxlistprice'];

?><div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <div class="zpa-widget mb-25">
        <form id="searchProfile" class="form-inline zpa-quick-search-form" action="<?php echo zipperagent_page_url( 'search-results' ) ?>" method="GET" data-zpa-quick-search-bound="true">
            <fieldset>
				<div class="row mb-10">
					<?php /*
					<ul class="nav nav-tabs mb-15" id="zpa-search-location-tabs">
						<li class=" active "> <a id="zpa-location-tab" href="#zpa-search-location-tab" data-toggle="tab" data-zpa-search-tab="location"> Location </a> </li>
						<li class=" "> <a id="zpa-address-tab" href="#zpa-search-address-tab" data-toggle="tab" data-zpa-search-tab="address"> Address </a> </li>
						<li class=" "> <a id="zpa-listingids-tab" href="#zpa-search-listingids-tab" data-toggle="tab" data-zpa-search-tab="listingids"> Listing Id </a> </li>
					</ul>	
					<script>
						jQuery('#zpa-search-location-tabs a').click(function(){
							jQuery(this).tab('show');
						})
					</script> */ ?>
					<div class="tab-content omnibar-content">
						<div id="zpa-search-location-tab" class="tab-pane active">
							<div class="row">
								<div class="col-xs-12 col-md-10 col-sm-12 mb-10">
									<div id="zpa-search-location" class="zpa-search-location col-xs-9 col-sm-10">
										<div class="search-by dropdown">
										  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Search By
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<ul>
												<li><a id="all" href="#"><input type="radio" name="search_category" checked /> All Categories</a></li>
												<li><a id="addr" href="#"><input type="radio" name="search_category" /> Address</a></li>
												<li><a id="area" href="#"><input type="radio" name="search_category" /> Area</a></li>
												<li><a id="town" href="#"><input type="radio" name="search_category" /> City / Town</a></li>
												<li><a id="county" href="#"><input type="radio" name="search_category" /> County</a></li>
												<li><a id="listid" href="#"><input type="radio" name="search_category" /> MLS #ID</a></li>
												<!-- <li><a id="school" href="#"><input type="radio" name="search_category" /> School</a></li> -->
												<!-- <li><a id="school2" href="#"><input type="radio" name="search_category" /> School</a></li> -->
												<li><a id="zip" href="#"><input type="radio" name="search_category" /> Zip Code</a></li>
											</ul>
										  </div>
										</div>
										<div class="field-wrap">
											<div class="field-section all">
												<input id="zpa-all-input" class="zpa-area-input form-control" placeholder="Type any address, area, city, county, MLS# or zip code"  name=""/>
												<input id="zpa-all-input-address" type="hidden" value="" />
												<input id="zpa-all-input-address-values" type="hidden" value="" />
												<div style="display:none;" class="input-fields"></div>
											</div>
											<div class="field-section addr hide">
												<input type="text" id="zpa-area-address" class="form-control" placeholder="Type any address" />
																																								
												<input type="hidden" id="street_number" name="advStNo" disabled="true" />
												<input type="hidden" id="route" name="advStName" disabled="true" />
												<input type="hidden" id="locality" name="advTownNm" disabled="true" />
												<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
												<input type="hidden" id="country" name="advCounties" disabled="true" />
												<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
											</div>
											<div class="field-section area hide">
												<input id="zpa-areas-input" class="form-control" placeholder="Type any area"  name="location[]"/>
											</div>
											<div class="field-section town hide">
												<input id="zpa-town-input" class="form-control" placeholder="Type any city or town"  name="location[]"/>
											</div>
											<div class="field-section county hide">
												<input id="zpa-county-input" class="form-control" placeholder="Type any county"  name="location[]"/>
											</div>
											<div class="field-section listid hide">
												<input id="listid" class="form-control" placeholder="Type any MLS ID #"  name=""/>
												<div style="display:none;" class="input-fields"></div>
											</div>
											<div class="field-section school hide">
												<input type="text" id="zpa-school" class="form-control" placeholder="Type any address" />
												
												<input type="hidden" id="lat" name="lat" />
												<input type="hidden" id="lng" name="lng" />
											</div>
											<div class="field-section school2 hide">
												<input id="zpa-school-input" class="form-control" placeholder="Type any address"  name="school[]"/>
											</div>
											<div class="field-section zip hide">
												<input id="zpa-zipcode-input" class="form-control" placeholder="Type any zip code"  name="location[]"/>
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
												
												jQuery(this).find('input').attr('checked', true);
												
												jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
												return false;
											});
										</script>
									</div>
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
									
								</div>
							</div>
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
			
			<?php if(isset($requests['column'])): ?>
			<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
			<?php endif; ?>
			
			<?php if(isset($requests['newsearchbar'])): ?>
			<input type="hidden" name="newsearchbar" value="<?php echo $requests['newsearchbar']; ?>" />
			<?php endif; ?>
        </form>
    </div>
	
	<?php /*
	<?php if(empty($requests['location_option'])): ?>
		<?php global_magicsuggest_script(); ?>
	<?php else: ?>
		<?php global_magicsuggest_script('',$requests); ?>
	<?php endif; ?>
	
	<script>  
		<?php
		$rb = zipperagent_rb();
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
	
	<script>
		jQuery(document).ready(function($) {
			
			var timer;
			
			<?php 
			$data = get_autocomplete_data();
			
			$towns = isset($data->towns)?$data->towns:array();
			$areas = isset($data->areas)?$data->areas:array();
			$counties = isset($data->counties)?$data->counties:array();
			$zipcodes = isset($data->zipcodes)?$data->zipcodes:array();
			?>
			
			var towns = <?php echo json_encode($towns); ?>;
			var areas = <?php echo json_encode($areas); ?>;
			var counties = <?php echo json_encode($counties); ?>;
			var zipcodes = <?php echo json_encode($zipcodes); ?>;
			var all = $.merge(towns, areas);
				all = $.merge(all, counties);
				all = $.merge(all, zipcodes);
			
			var ms_town = $('#zpa-town-input').magicSuggest({
				
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
			
			var ms_area = $('#zpa-areas-input').magicSuggest({
				
				data: areas,
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
			
			var ms_county = $('#zpa-county-input').magicSuggest({
				
				data: counties,
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
			
			var ms_zip = $('#zpa-zipcode-input').magicSuggest({
				
				data: zipcodes,
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
			
			var ms_all = $('#zpa-all-input').magicSuggest({
				
				data: all,
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
			
			var ms_school = $('#zpa-school-input').magicSuggest({
				
				data: null,
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
			
			/* magicSuggest actions */
			
			$(ms_all).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value, check, name, add;
				var fields = $('.field-wrap .field-section.all .input-fields');
				
				fields.html(''); //clear all fields
				clearGoogleAddressFields(); //clear address fields
				
				for(i=0; i<values.length; i++){
					
					is_location=0;
					is_address=0;
					is_mls=0;
					is_add=0;
					value  = values[i];
					
					if (value.toLowerCase().indexOf("atwns_") >= 0){ //town
						is_location=1;
					}else if (value.toLowerCase().indexOf("aars_") >= 0){ //area
						is_location=1;
					}else if (value.toLowerCase().indexOf("acnty_") >= 0){ //county
						is_location=1;
					}else if (value.toLowerCase().indexOf("azip_") >= 0){ //zip
						is_location=1;
					}else if (value.toLowerCase().indexOf("addr_") >= 0){ //google address
						is_address=1;
					}else if (value.toLowerCase().indexOf("alstid_") >= 0){ //mls
						is_mls=1;
					}
					
					if(is_location){							
						name = 'location[]';
						is_add=1;
					}else if(is_address){
						name = '';
						is_add=0;
					}else if(is_mls){
						name = 'alstid[]';
						value = value.replace('alstid_','');
						is_add=1;
					}
					
					if(is_add){
						add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
						fields.append(add);
					}else if(is_address){
						var saved_address = jQuery.parseJSON(jQuery('#zpa-all-input-address-values').val());
						if(saved_address){
							$.each(saved_address, function(key, value) {
								jQuery('.field-section.addr #'+ key).val(value);
								jQuery('.field-section.addr #'+ key).prop('disabled',false);
							});
						}
					}
				}
			});
			
			jQuery('body').on( 'change', '.field-wrap .field-section.listid #listid', function(){
				 
				var values=jQuery.unique(jQuery(this).val().split(','));
				var name='alstid[]';
				var value, add;
				var fields = $('.field-wrap .field-section.listid .input-fields');
				
				fields.html(''); //clear all fields
				for(i=0; i<values.length; i++){		
					value=jQuery.trim(values[i]);
					
					if(!value) continue;
					
					add = '<input type="hidden" name="'+ name +'" value="'+ value +'" />';
					fields.append(add);
				};
			});

			jQuery(ms_school).on('keyup', function(event){
				
				event.preventDefault();
				
				clearTimeout(timer);
				//create a new timer with a delay of 0.5 seconds, if the keyup is fired before the 2 secs then the timer will be cleared
				timer = setTimeout(function () {
					//this will be executed if there is a gap of 0.5 seconds between 2 keyup events
					var inputText = ms_school.getRawValue();
					
					console.time('populate schools');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: {
							'key': inputText,
							'action': 'school_options',
						},
						success: function( response ) {         
							if( response ){
								var data = response.schools;
								ms_school.setData(data);
							}
							console.timeEnd('populate schools');
						},
						error: function(){
							console.timeEnd('populate schools');
						}
					});
				}, 500);
			});
			
			/* Combine ms_all and google autocomplete */
			var ms_all__rawValue='';
			var ms_all__google_autocomplete;
			
			//select value on enter key pressed
			$(ms_all).on('keydown', function(e,m,v){
				var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
				var magicSuggest_option_exists = data.length;
				var google_option_exists = $('body .pac-container.pac-logo').html();
				
				if(magicSuggest_option_exists){
					ms_all__google_autocomplete=0;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
				}else if(google_option_exists && ms_all__rawValue.length > 2){
					ms_all__google_autocomplete=1;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' );
				}else{
					ms_all__google_autocomplete=0;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
				}
			});
			
			function clearGoogleAddressFields(){
				jQuery('#zpa-all-input-address').val('');
				jQuery('.field-section.addr #street_number').val('');
				jQuery('.field-section.addr #street_number').prop('disabled',true);
				jQuery('.field-section.addr #route').val('');
				jQuery('.field-section.addr #route').prop('disabled',true);
				jQuery('.field-section.addr #locality').val('');
				jQuery('.field-section.addr #locality').prop('disabled',true);
				jQuery('.field-section.addr #administrative_area_level_1').val('');
				jQuery('.field-section.addr #administrative_area_level_1').prop('disabled',true);
				jQuery('.field-section.addr #country').val('');
				jQuery('.field-section.addr #country').prop('disabled',true);
				jQuery('.field-section.addr #postal_code').val('');
				jQuery('.field-section.addr #postal_code').prop('disabled',true);
			}
			
			/* auto select dropdown function (ms_all) */
			var ms_all__afterDelete=0;
			var ms_all__recentSelected=[];
			var ms_all__currentSelected=[];
			
			//get user input keywords
			$(ms_all).on('keyup', function(){
				ms_all__rawValue = ms_all.getRawValue();
				ms_all__afterDelete=0;
			});
			
			//get current selected value
			$(ms_all).on('focus', function(c){
				ms_all__recentSelected = ms_all.getValue();
				ms_all__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_all).on('blur', function(c, e){
				var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_all__currentSelected = ms_all.getValue();
				
				// console.log(ms_all__recentSelected);
				// console.log(ms_all__currentSelected);
				// console.log('ms_all__rawValue: ' + ms_all__rawValue);
				// console.log('ms_all__afterDelete: ' + ms_all__afterDelete);
				
				// if( ms_all__rawValue!="" && ms_all__currentSelected.length && ! ms_all__afterDelete && (ms_all__recentSelected.length == ms_all__currentSelected.length || !ms_all__recentSelected.length) ){
				if( ms_all__rawValue!="" && ! ms_all__afterDelete && ms_all__recentSelected.length == ms_all__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_all.setValue([firstData.code]);
					}else if(!ms_all__google_autocomplete){
						var val = ms_all__rawValue;
						var prefix = 'alstid_';
						var code = prefix + val;							
						var label = 'MLS#' + val;
						
						var push = {group:'Mls', name: label, code: code, type: 'mls' };
						ms_all.setValue([push]);
					}else if(ms_all__google_autocomplete){
						var val = $('#zpa-all-input-address').val();
						var prefix = 'addr_';
						var code = prefix + 'selected_address';							
						var label = val;
						
						// var push = {id:name, name: label};
						var push = {group:'Address', name: label, code: code, type: 'address' };
						ms_all.setValue([push]);
					}
					
					ms_all__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_all).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_all__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_all.setValue([firstData.code]);
						}else if(!ms_all__google_autocomplete){
							var val = ms_all__rawValue;
							var prefix = 'alstid_';
							var code = prefix + val;							
							var label = 'MLS#' + val;
							
							var push = {group:'Mls', name: label, code: code, type: 'mls' };
							ms_all.setValue([push]);
						}else if(ms_all__google_autocomplete){
							var val = $('#zpa-all-input-address').val();
							var prefix = 'addr_';
							var code = prefix + 'selected_address';							
							var label = val;
							
							// var push = {id:name, name: label};
							var push = {group:'Address', name: label, code: code, type: 'address' };
							ms_all.setValue([push]);
						}
					}
					
					ms_all.collapse();
				}
			});
			
			//set after delete state
			$(ms_all).on('selectionchange', function(e,m,r){
				if(r.length==ms_all__recentSelected.length && r.length==ms_all__currentSelected.length){
					ms_all__afterDelete=1;
				}else{
					ms_all__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_town) */
			var ms_town__rawValue='';
			var ms_town__afterDelete=0;
			var ms_town__recentSelected=[];
			var ms_town__currentSelected=[];
			
			//get user input keywords
			$(ms_town).on('keyup', function(){
				ms_town__rawValue = ms_town.getRawValue();
				ms_town__afterDelete=0;
			});
			
			//get current selected value
			$(ms_town).on('focus', function(c){
				ms_town__recentSelected = ms_town.getValue();
				ms_town__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_town).on('blur', function(c, e){
				var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_town__currentSelected = ms_town.getValue();
				
				if( ms_town__rawValue!="" && ! ms_town__afterDelete && ms_town__recentSelected.length == ms_town__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_town.setValue([firstData.code]);
					}
					
					ms_town__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_town).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_town.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_town__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_town.setValue([firstData.code]);
						}
					}
					
					ms_town.collapse();
				}
			});
			
			//set after delete state
			$(ms_town).on('selectionchange', function(e,m,r){
				if(r.length==ms_town__recentSelected.length && r.length==ms_town__currentSelected.length){
					ms_town__afterDelete=1;
				}else{
					ms_town__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_area) */
			var ms_area__rawValue='';
			var ms_area__afterDelete=0;
			var ms_area__recentSelected=[];
			var ms_area__currentSelected=[];
			
			//get user input keywords
			$(ms_area).on('keyup', function(){
				ms_area__rawValue = ms_area.getRawValue();
				ms_area__afterDelete=0;
			});
			
			//get current selected value
			$(ms_area).on('focus', function(c){
				ms_area__recentSelected = ms_area.getValue();
				ms_area__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_area).on('blur', function(c, e){
				var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_area__currentSelected = ms_area.getValue();
				
				if( ms_area__rawValue!="" && ! ms_area__afterDelete && ms_area__recentSelected.length == ms_area__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_area.setValue([firstData.code]);
					}
					
					ms_area__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_area).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_area.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_area__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_area.setValue([firstData.code]);
						}
					}
					
					ms_area.collapse();
				}
			});
			
			//set after delete state
			$(ms_area).on('selectionchange', function(e,m,r){
				if(r.length==ms_area__recentSelected.length && r.length==ms_area__currentSelected.length){
					ms_area__afterDelete=1;
				}else{
					ms_area__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_county) */
			var ms_county__rawValue='';
			var ms_county__afterDelete=0;
			var ms_county__recentSelected=[];
			var ms_county__currentSelected=[];
			
			//get user input keywords
			$(ms_county).on('keyup', function(){
				ms_county__rawValue = ms_county.getRawValue();
				ms_county__afterDelete=0;
			});
			
			//get current selected value
			$(ms_county).on('focus', function(c){
				ms_county__recentSelected = ms_county.getValue();
				ms_county__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_county).on('blur', function(c, e){
				var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_county__currentSelected = ms_county.getValue();
				
				if( ms_county__rawValue!="" && ! ms_county__afterDelete && ms_county__recentSelected.length == ms_county__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_county.setValue([firstData.code]);
					}
					
					ms_county__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_county).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_county.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_county__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_county.setValue([firstData.code]);
						}
					}
					
					ms_county.collapse();
				}
			});
			
			//set after delete state
			$(ms_county).on('selectionchange', function(e,m,r){
				if(r.length==ms_county__recentSelected.length && r.length==ms_county__currentSelected.length){
					ms_county__afterDelete=1;
				}else{
					ms_county__afterDelete=0;
				}
			});
			
			/* auto select dropdown function (ms_zip) */
			var ms_zip__rawValue='';
			var ms_zip__afterDelete=0;
			var ms_zip__recentSelected=[];
			var ms_zip__currentSelected=[];
			
			//get user input keywords
			$(ms_zip).on('keyup', function(){
				ms_zip__rawValue = ms_zip.getRawValue();
				ms_zip__afterDelete=0;
			});
			
			//get current selected value
			$(ms_zip).on('focus', function(c){
				ms_zip__recentSelected = ms_zip.getValue();
				ms_zip__afterDelete=1;
			});
			
			//select value on blur / mouse leave
			$(ms_zip).on('blur', function(c, e){
				var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
				var firstData = '';
				ms_zip__currentSelected = ms_zip.getValue();
				
				if( ms_zip__rawValue!="" && ! ms_zip__afterDelete && ms_zip__recentSelected.length == ms_zip__currentSelected.length ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_zip.setValue([firstData.code]);
					}
					
					ms_zip__afterDelete=0;
				}
			});
			
			//select value on enter key pressed
			$(ms_zip).on('keydown', function(e,m,v){
				if(v.keyCode == 13 || v.keyCode == 188){ // enter pressed or comma pressed
					var data = ms_zip.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_zip__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_zip.setValue([firstData.code]);
						}
					}
					
					ms_zip.collapse();
				}
			});
			
			//set after delete state
			$(ms_zip).on('selectionchange', function(e,m,r){
				if(r.length==ms_zip__recentSelected.length && r.length==ms_zip__currentSelected.length){
					ms_zip__afterDelete=1;
				}else{
					ms_zip__afterDelete=0;
				}
			});
		});
	</script>
	<script>  
	  <?php
	  $rb = zipperagent_rb();
	  $states=isset($rb['web']['states'])?$rb['web']['states']:'';
	  $states=array_map('trim', explode(',', $states));
	  $states=implode(' | ',$states);
	  ?>
	  // This example displays an address form, using the autocomplete feature
	  // of the Google Places API to help users fill in the information.

	  // This example requires the Places library. Include the libraries=places
	  // parameter when you first load the API. For example:
	  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
	  jQuery(document).ready(function(){
		  var placeSearch, autocomplete;
		  var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			// country: 'short_name',
			postal_code: 'short_name'
		  };
		  // var input = document.getElementById('zpa-all-input');
		  var input = document.querySelector('#zpa-all-input input');

		  function initAutocomplete() {
			var options = {
				types: ['geocode'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us","ca","in"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(input), options);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		  }

		  function fillInAddress() {
			
			var saved_values={};
			  
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
				var field = jQuery('#'+addressType);
				var key = addressType;
				document.getElementById(addressType).value = val;
				// saved_values.push({key:val});
				saved_values[addressType]=val;
			  }
			}
			var json = JSON.stringify(saved_values);
			jQuery('#zpa-all-input-address-values').val(json);
			jQuery('#zpa-all-input-address').val(place.formatted_address);
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
				
				console.log(circle.getBounds());
			  });
			}
		  }
		  
		  jQuery('#zpa-all-input input').on('focus', function(){
			  geolocate();
		  });
		  
		  initAutocomplete();
		  <?php  /* if($states): ?>
		  jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				// console.log(input.value);
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}

		  }); 
		  <?php endif; */ ?>
	  });
	</script>
	<script>  
	  <?php
	  $rb = zipperagent_rb();
	  $states=isset($rb['web']['states'])?$rb['web']['states']:'';
	  $states=array_map('trim', explode(',', $states));
	  $states=implode(' | ',$states);
	  ?>
	  // This example displays an address form, using the autocomplete feature
	  // of the Google Places API to help users fill in the information.

	  // This example requires the Places library. Include the libraries=places
	  // parameter when you first load the API. For example:
	  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
	  jQuery(document).ready(function(){
		  var placeSearch, autocomplete;
		  var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			// country: 'short_name',
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
			  document.getElementById(component).value = '';
			  document.getElementById(component).disabled = false;
			}

			// Get each component of the address from the place details
			// and fill the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
			  var addressType = place.address_components[i].types[0];
			  if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				var field = jQuery('#'+addressType);
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
		  
		  jQuery('#zpa-area-address').on('focus', function(){
			  geolocate();
		  });
		  
		  initAutocomplete();
		  
		  <?php if($states): ?>
		  jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				// console.log(input.value);
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}

		  });
		  <?php endif; ?>
	  });
	  
	  jQuery(document).ready(function(){
		  var placeSearch, autocomplete;
		  var input = document.getElementById('zpa-school');

		  function initAutocomplete() {
			var options = {
				types: ['establishment'],  // or '(cities)' if that's what you want?
				componentRestrictions: {country: ["us","ca","in"]},
			};
			// Create the autocomplete object, restricting the search to geographical
			// location types.
			autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(input), options);

			// When the user selects an address from the dropdown, populate the address
			// fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		  }

		  function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();
			
			var lat=place['geometry']['location'].lat();
			var lng=place['geometry']['location'].lng();
			
			jQuery('#lat').val(lat);
			jQuery('#lng').val(lng);
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
		  
		  jQuery('#zpa-school').on('focus', function(){
			  geolocate();
		  });
		  
		  initAutocomplete();
		  
		  <?php if($states): ?>
		  jQuery(input).on('input',function(){
			var str = input.value;
			var prefix = '<?php echo $states; ?> | ';
			if(str.indexOf(prefix) == 0) {
				// console.log(input.value);
			} else {
				if (prefix.indexOf(str) >= 0) {
					input.value = prefix;
				} else {
					input.value = prefix+str;
				}
			}

		  });
		  <?php endif; ?>
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