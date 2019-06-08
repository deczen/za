<?php
global $requests;

$minListPrice 		= $requests['minlistprice'];
$maxListPrice		= $requests['maxlistprice'];

?><div id="zpa-main-container" class="zpa-container">
	<div id="omnibar-wrap">
		<form class="form-inline zpa-quick-search-form" action="<?php echo zipperagent_page_url( 'search-results' ) ?>" method="GET">
			<div class="omnibar">
				<style>
					#omnibar-wrap .input-column .field-wrap .field-section .ms-ctn, #zpa-main-container .ms-ctn .ms-sel-ctn input{border:0 !important;}
				</style>
				<div class="row">
					<div class="input-column col-xs-9 col-sm-10">
						<div class="search-by dropdown hidden-xs">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Search By
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<ul>
								<li><a id="all" href="#">All Categories</a></li>
								<li><a id="addr" href="#">Address</a></li>
								<li><a id="area" href="#">Area</a></li>
								<li><a id="town" href="#">City / Town</a></li>
								<li><a id="county" href="#">County</a></li>
								<li><a id="listid" href="#">MLS #ID</a></li>
								<!-- <li><a id="school" href="#">School</a></li> -->
								<!-- <li><a id="school2" href="#">School</a></li> -->
								<li><a id="zip" href="#">Zip Code</a></li>
							</ul>
						  </div>
						</div>
						<div class="field-wrap">
							<div class="field-section all">
								<input id="zpa-all-input" class="zpa-area-input form-control" placeholder="Type any address, area, city, county, MLS# or zip code"  name="location[]"/>
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
								<input id="listid" class="form-control" placeholder="Type any MLS ID #"  name="alstid"/>
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
							jQuery('body').on('click', '#omnibar-wrap .search-by .dropdown-menu a', function(){
								var id = jQuery(this).attr('id');
								var targetClass = id;
								
								jQuery(this).parents('.input-column').find('.field-wrap .field-section:not(.'+ targetClass +') input').prop('disabled',true);
								jQuery(this).parents('.input-column').find('.field-wrap .field-section.'+targetClass+' input').prop('disabled',false);
								
								jQuery(this).parents('.input-column').find('.field-wrap .field-section:not(.'+ targetClass +')').addClass('hide');
								jQuery(this).parents('.input-column').find('.field-wrap .field-section.'+targetClass).removeClass('hide');
								
								jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
								return false;
							});
						</script>
					</div>
					<div class="submit-column col-xs-3 col-sm-2">						
						<button class="btn btn-md btn-block btn-primary btn-form-submit zpa-main-search-form-submit" type="submit"> <i class="fa fa-search visible-xs visible-sm visible-md hidden-lg" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">Find Your Home</span> </button>
						
					</div>
				</div>
			</div>
			
			<input type="hidden" name="newsearchbar" value="1" />
			<?php 
			$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order();
			if($default_order): ?>
			<input type="hidden" name="o" value="<?php echo $default_order; ?>" />
			<?php endif; ?>
			
			<?php if(isset($requests['column'])): ?>
			<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
			<?php endif; ?>
		</form>	
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
	</div>
</div>