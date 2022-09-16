<?php
global $type, $requests;
global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o, $showResults;
global $zpa_show_login_popup;

$zpa_show_login_popup=1;

$query_args=array();
$requests=key_to_lowercase($requests); //convert all key to lowercase

$addressSearch = false;
$enable_filter  = false;

$location 			= ( isset($requests['location'])?$requests['location']:'' );
$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
$propSubType 		= ( isset($requests['propsubtype'])?(!is_array($requests['propsubtype'])?array($requests['propsubtype']):$requests['propsubtype']):array() );
$status 			= ( isset($requests['status'])?$requests['status']:'' );
$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:'' );
$maxListPrice		= ( isset($requests['maxlistprice'])?$requests['maxlistprice']:'' );
$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
$o 					= ( isset($requests['o'])?$requests['o']:'' );
$priceRange			= zipperagent_price_format( $minListPrice ) . ' - ' . zipperagent_price_format( $maxListPrice );
$showResults	 	= ( isset($requests['result'])?$requests['result']:1 );

$excludes = get_short_excludes();

//set page
if(get_query_var('pagenum')){	
	$requests['pagenum'] = get_query_var('pagenum');
}
?>
<?php /* <link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/view-new.css'; ?>"> */ ?>
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/ion.rangeSlider.css'; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/ion.rangeSlider.skinModern.css'; ?>">
<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/ion.rangeSlider.min.js'; ?>"></script>
<div id="zpa-main-container" class="zpa-container " style="display: inline;" data-zpa-client-id="">
	
	<?php if( in_array( $type, array( 'map' ) ) ): ?>
		 
		<div class="zpa-container">
			<div class="zpa-listing-search-results">					
				<div class="container-fluid">				
					<div class="row sticky-container" style="position:relative;">
					
						<div id="zpa-top-searh-bar" class="zpa-listing-detail">
							
							<div class="zy-listing-search__wrapper js-filter-bar">
								<div class="grid grid--gutters grid--center">
									<div class="cell">
										<div>
											<div class="zy-filter-bar">
												<div class="row btn-toolbar zy-filter-bar__components" role="toolbar" aria-label="Properties Search Toolbar">
													<div class="col-md-12 col-lg-6 input-group uk-flex-item-1 zy-search__query-wrapper">
														<div class="zy-search__query-inner">
															<div class="cell zy-off-canvas__ballerbox-wrapper width-1-1">
																<div class="zy-search__query-wrapper">
																	<input type="text" id="zpa-all-input" class="zpa-area-input undefined autocomplete zy-search__query" placeholder="Type any Address, Area, City, County, MLS# or Zip Code" name="location[]" aria-label="search">
																	
																	<input id="zpa-all-input-address" type="hidden" value="" />
																	<input id="zpa-all-input-address-values" type="hidden" value="" />
																	
																	<input type="hidden" id="street_number" name="advStNo" disabled="true" />
																	<input type="hidden" id="route" name="advStName" disabled="true" />
																	<input type="hidden" id="locality" name="advTownNm" disabled="true" />
																	<input type="hidden" id="administrative_area_level_1" name="advStates" disabled="true"  />
																	<input type="hidden" id="country" name="advCounties" disabled="true" />
																	<input type="hidden" id="postal_code" name="advStZip" disabled="true" />
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 btn-group zy-search__options-wrapper" role="group" aria-label="Properties Search Filters">
														
														<div class="zy-ccomp zy-ccomp__dropdown dropdown">
															<button class="dropdown-toggle zy-ccomp__trigger at-price-trigger zy-filter__button js-search-price btn-primary" data-toggle="dropdown" type="button">
																<!-- react-text: 42 -->Price&nbsp;
																
																<i class="zy-icon zy-icon--smaller fa fa-angle-down" aria-hidden="true" role="none"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right zy-react-dropdown__content zy-dropdown--right">
																<div class="zy-ccomp__content__inner">
																	<div class="grid grid--gutters grid-xs--halves">
																		<div class="cell">
																			<div>
																				<input type="text" id="minListPrice--ballerbox" class="at-minListPrice--ballerbox zy-off-canvas__price-range-input input-number" value="<?php echo $minListPrice; ?>" name="minlistprice" title="Please enter a Min Price">
																				<div><span id="minListPrice--ballerboxHelper" class="uk-text-small uk-text-muted">Min Price</span></div>
																			</div>
																		</div>
																		<div class="cell">
																			<div>
																				<input type="text" id="maxListPrice--ballerbox" class="at-maxListPrice--ballerbox zy-off-canvas__price-range-input input-number" value="<?php echo $maxListPrice; ?>" name="maxlistprice" title="Please enter a Max Price">
																				<div><span id="maxListPrice--ballerboxHelper" class="uk-text-small uk-text-muted">Max Price</span></div>
																			</div>
																		</div>
																	</div>													
																</div>
															</div>
														</div>
														
														<div class="zy-ccomp zy-ccomp__dropdown dropdown">
															<button class="dropdown-toggle zy-ccomp__trigger at-type-menu-trigger zy-filter__button btn-primary" type="button" data-toggle="dropdown" >
																<!-- react-text: 48 -->Status
																
																<i class="zy-icon zy-icon--smaller fa fa-angle-down" aria-hidden="true" role="none"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right zy-react-dropdown__content zy-dropdown--right zy-dropdown--small">
																<div class="zy-ccomp__content__inner">
																	<ul class="uk-list uk-list-space m-0">
																		<li>
																			<label class="form__check" for="status-0">
																				<input type="radio" class="at-status" value="" name="status" id="status-0" <?php checked( $status, '' ) ?>><span>Active</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="status-1">
																				<input type="radio" class="at-status" value="<?php echo zipperagent_sold_status(); ?>" name="status" id="status-1" <?php checked( $status, zipperagent_sold_status() ) ?>><span>Sold</span></label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<div class="zy-ccomp zy-ccomp__dropdown dropdown">
															<button class="dropdown-toggle zy-ccomp__trigger at-type-menu-trigger zy-filter__button btn-primary" type="button" data-toggle="dropdown" >
																<!-- react-text: 48 -->Type
																
																<i class="zy-icon zy-icon--smaller fa fa-angle-down" aria-hidden="true" role="none"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right zy-react-dropdown__content zy-dropdown--right zy-dropdown--small">
																<div class="zy-ccomp__content__inner">
																	<ul class="uk-list uk-list-space m-0">
																		<?php
																			$propTypeFields = get_property_type();
																			$propTypeNum=0;
																			$excludePropTypeFields=array();
																			foreach( $propTypeFields as $fieldCode=>$fieldName ){
																				$checked='';
																				if(in_array($fieldCode,$propertyType))
																					$checked='checked';
																				
																				echo "<li><label class='form__check' for='propertyType-{$propTypeNum}'><input type='checkbox' class='at-propertyType' value='{$fieldCode}' label='{$fieldName}' name='propertytype[]' id='propertyType-{$propTypeNum}' ". $checked ."><span>{$fieldName}</span></label></li>"."\r\n";
																				$propTypeNum++;
																				
																				$excludePropTypeFields[]=$fieldCode;
																			}
																		?>
																		<?php
																			$propSubTypeFields = get_property_sub_type();
																			$propTypeNum=0;
																			foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
																				$checked='';
																				if(in_array($fieldCode,$propSubType))
																					$checked='checked';
																				
																				echo "<li><label class='form__check' for='propSubType-{$propTypeNum}'><input type='checkbox' class='at-propSubType' value='{$fieldCode}' label='{$fieldName}' name='propsubtype[]' id='propSubType-{$propTypeNum}' ". $checked ."><span>{$fieldName}</span></label></li>"."\r\n";
																				$propTypeNum++;
																			}
																		?>
																	</ul>
																</div>
															</div>
														</div>
														
														<div class="zy-ccomp zy-ccomp__dropdown dropdown">
															<button class="dropdown-toggle zy-ccomp__trigger at-minbeds-trigger zy-filter__button js-search-beds btn-primary" type="button" data-toggle="dropdown">
																<!-- react-text: 54 -->Beds
																
																<!-- react-text: 55 -->
																
																<i class="zy-icon zy-icon--smaller fa fa-angle-down" aria-hidden="true" role="none"></i>
															</button>
															<div class="dropdown-menu dropdown-menu-right zy-react-dropdown__content zy-dropdown--right zy-dropdown--small">
																<div class="zy-ccomp__content__inner">
																	<ul class="uk-list uk-list-space m-0">
																		<li>
																			<label class="form__check" for="bedrooms-0">
																				<input type="radio" class="at-bedrooms" value="" name="bedrooms" id="bedrooms-0" <?php checked( $bedrooms, '' ) ?>><span>Any</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bedrooms-1">
																				<input type="radio" class="at-bedrooms" value="1" name="bedrooms" id="bedrooms-1" <?php checked( $bedrooms, '1' ) ?>><span>1+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bedrooms-2">
																				<input type="radio" class="at-bedrooms" value="2" name="bedrooms" id="bedrooms-2" <?php checked( $bedrooms, '2' ) ?>><span>2+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bedrooms-3">
																				<input type="radio" class="at-bedrooms" value="3" name="bedrooms" id="bedrooms-3" <?php checked( $bedrooms, '3' ) ?>><span>3+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bedrooms-4">
																				<input type="radio" class="at-bedrooms" value="4" name="bedrooms" id="bedrooms-4" <?php checked( $bedrooms, '4' ) ?>><span>4+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bedrooms-5">
																				<input type="radio" class="at-bedrooms" value="5" name="bedrooms" id="bedrooms-5" <?php checked( $bedrooms, '5' ) ?>><span>5+</span></label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>									
														
														<div class="zy-ccomp zy-ccomp__dropdown dropdown">
															<button class="dropdown-toggle zy-ccomp__trigger at-minbaths-trigger zy-filter__button js-search-beds btn-primary" type="button" data-toggle="dropdown">
																<!-- react-text: 61 -->Baths
																
																<!-- react-text: 62 -->
																
																<i class="zy-icon zy-icon--smaller fa fa-angle-down" aria-hidden="true" role="none"></i>
															</button><div class="dropdown-menu dropdown-menu-right zy-react-dropdown__content zy-dropdown--right zy-dropdown--small">
																<div class="zy-ccomp__content__inner">
																	<ul class="uk-list uk-list-space m-0">
																		<li>
																			<label class="form__check" for="bathCount-0">
																				<input type="radio" class="at-bathCount" value="" name="bathcount" id="bathCount-0" <?php checked( $bathCount, '' ) ?>><span>Any</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bathCount-1">
																				<input type="radio" class="at-bathCount" value="1" name="bathcount" id="bathCount-1" <?php checked( $bathCount, '1' ) ?>><span>1+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bathCount-2">
																				<input type="radio" class="at-bathCount" value="2" name="bathcount" id="bathCount-2" <?php checked( $bathCount, '2' ) ?>><span>2+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bathCount-3">
																				<input type="radio" class="at-bathCount" value="3" name="bathcount" id="bathCount-3" <?php checked( $bathCount, '3' ) ?>><span>3+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bathCount-4">
																				<input type="radio" class="at-bathCount" value="4" name="bathcount" id="bathCount-4" <?php checked( $bathCount, '4' ) ?>><span>4+</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="bathCount-5">
																				<input type="radio" class="at-bathCount" value="5" name="bathcount" id="bathCount-5" <?php checked( $bathCount, '5' ) ?>><span>5+</span></label>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														
														<div class="zy-ccomp zy-ccomp__dropdown dropdown">
															<button class="dropdown-toggle zy-ccomp__trigger at-minbaths-trigger zy-filter__button js-search-beds btn-primary" type="button" data-toggle="dropdown">
																<!-- react-text: 61 -->Order By
																
																<!-- react-text: 62 -->
																
																<i class="zy-icon zy-icon--smaller fa fa-angle-down" aria-hidden="true" role="none"></i>
															</button><div class="dropdown-menu dropdown-menu-right zy-react-dropdown__content zy-dropdown--right zy-dropdown--small">
																<div class="zy-ccomp__content__inner">
																														
																	<ul class="uk-list uk-list-space m-0">
																		<li>
																			<label class="form__check" for="o-0">
																				<input type="radio" class="at-o" value="apmin:DESC" name="o" id="o-0" <?php checked( $o, 'apmin:DESC' ) ?>><span>Price (High to Low)</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="o-1">
																				<input type="radio" class="at-o" value="apmin:ASC" name="o" id="o-1" <?php checked( $o, 'apmin:ASC' ) ?>><span>Price (Low to High)</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="o-2">
																				<input type="radio" class="at-o" value="asts:ASC" name="o" id="o-2" <?php checked( $o, 'asts:ASC' ) ?>><span>Status</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="o-3">
																				<input type="radio" class="at-o" value="atwns:ASC" name="o" id="o-3" <?php checked( $o, 'atwns:ASC' ) ?>><span>City</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="o-4">
																				<input type="radio" class="at-o" value="lid:DESC" name="o" id="o-4" <?php checked( $o, 'lid:DESC' ) ?>><span>Listing Date</span></label>
																		</li>
																		<li>
																			<label class="form__check" for="o-5">
																				<input type="radio" class="at-o" value="apt:DESC" name="o" id="o-5" <?php checked( $o, 'apt:DESC' ) ?>><span>Type / Price Descending</span></label>
																		</li>
																		<?php /* 
																		<li>
																			<label class="form__check" for="o-6">
																				<input type="radio" class="at-o" value="alstid:ASC" name="o" id="o-6" <?php checked( $o, 'alstid:ASC' ) ?>><span>Listing Number</span></label>
																		</li> */ ?>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<?php /* if( is_price_slider_enabled() ): ?>
												<div id="zpa-price-slider">
													<input type="hidden" id="price-slider-range" />
													<input type="hidden" id="priceRangeOnTemp" />
												</div>
												<script>
													var $range = jQuery("#price-slider-range");
													
													$range.ionRangeSlider({
														type: "double",
														grid: false,
														step: 10000,
														min: 500,
														max: 10000000,
														from: '<?php echo $minListPrice ?>',
														to: '<?php echo $maxListPrice ?>',
														prefix: "$",
														onChange: function(data){
															jQuery( "#minListPrice--ballerbox" ).val(data.from);
															jQuery( "#maxListPrice--ballerbox" ).val(data.to);
															
															onFilterChange( filterLabel('minlistprice',data.from), 'minlistprice'); //add field to filter
															onFilterChange( filterLabel('maxlistprice',data.to), 'maxlistprice'); //add field to filter										
															
															// localStorage.setItem('priceRangeOnTemp', "slide");
															// jQuery('#priceRangeOnTemp').val('slide');
															// console.log('change: ' + localStorage.getItem('priceRangeOnTemp'));
															// console.log('change: ' + jQuery('#priceRangeOnTemp').val());
														},
														onFinish: function(data){										
															// localStorage.setItem('priceRangeOnTemp', "go");
															// jQuery('#priceRangeOnTemp').val('go');
															// console.log('finish: ' + localStorage.getItem('priceRangeOnTemp'));
															// console.log('finish: ' + jQuery('#priceRangeOnTemp').val());
															setTimeout(function(){			
																// var priceRangeOnTemp = localStorage.getItem('priceRangeOnTemp');
																// var priceRangeOnTemp = jQuery('#priceRangeOnTemp').val();
																// console.log('execute: ' + localStorage.getItem('priceRangeOnTemp'));
																// console.log('>> execute: ' + jQuery('#priceRangeOnTemp').val());
																// if(priceRangeOnTemp!=="slide"){
																	jQuery('#zpa-search-filter-form').submit();
																// }											
																
																// jQuery('#priceRangeOnTemp').val('go');
															}, 1000);
														},
													});
												</script>
												<?php endif; ?>
												
												 */ ?>
											</div>
											<div id="zy-filter-tag">
												<?php zipperagent_search_filter_new(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="loading-wrap">
							<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" />
						</div>
						
						<?php
						$markers = zipperagent_get_map_markers();
						//echo '<pre>'; print_r($markers); echo '</pre>';
						
						if($markers):
							echo '<div class="proptype-markers col-lg-12 col-md-12 hide"><ul>';
							foreach($markers as $key => $value){
								
								$proptype = zipperagent_property_type( $key );
								
								echo '<li class="proptype-marker"><img src="' . $value . '" alt=" ' . $proptype . '" title=""><span>' . $proptype . '</span></li>';
							}
							echo '</ul></div>';
							
						endif;
						?>
						
						<div class="property-results mt-25 mb-25 hide">
						<?php
						if( $showResults ){ ?>
							<div class="col-xs-12 prop-total">&nbsp;</div>
						<?php } ?>
						</div>
						
						<div id="map" class="col-lg-7 col-md-6 ml-auto">
							<div id="map_wrapper">								
								<div id="color-palette" style="display:none"></div>
								<div id="map_canvas" class="mapping" style="width:100%; height:100%;"></div>
							</div>
						</div>
						
						<div id="property-sidebar" class="col-lg-5 col-md-6 bg-light">
							<div id="zipperagent-content" class="row"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>				
			</div>

		</div>	
	
	<?php endif; 
   /**
	* SCRIPTS HANDLER
	* @ javascript
	*/	
	?>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script>
		
		jQuery(document).ready(function(){
			
			var data = { 
				action: 'properties_view',
				<?php
				if( isset($requests) && sizeof($requests) ){
					foreach( $requests as $var=>$val ){
						if( is_array( $val ) ){
							echo "'". strtolower($var) ."': ['". implode( "', '", $val ) ."'],"."\r\n";
						}else{					
							echo "'". strtolower($var) ."': '{$val}',"."\r\n";
						}
					}
				}
				$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				echo "'actual_link': '{$actual_link}',"."\r\n";
				echo "'view_type': '{$type}',"."\r\n";
				?>
			};
			
			console.time('generate list');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {         
					if( response['html'] ){
						jQuery( '.loading-wrap' ).hide();
						jQuery( '#zipperagent-content' ).html( response['html'] );
						jQuery( '.proptype-markers, .property-results' ).removeClass('hide');
					}
					console.timeEnd('generate list');
				},
				error: function(){
					console.timeEnd('generate list');
				}
			});
		});
	</script>
	<script>
		jQuery(document).ready(function($) {
						
			<?php 
			$data = get_autocomplete_data();
			
			$towns = isset($data->towns)?$data->towns:array();
			$areas = isset($data->areas)?$data->areas:array();
			$counties = isset($data->counties)?$data->counties:array();
			$zipcodes = isset($data->zipcodes)?$data->zipcodes:array();
			$tenants = isset($data->tenants)?$data->tenants:array();
			$lakes = populate_lakes_with_option();
			?>
			
			var towns = <?php echo json_encode($towns); ?>;
			var areas = <?php echo json_encode($areas); ?>;
			var counties = <?php echo json_encode($counties); ?>;			
			var lakes = <?php echo json_encode($lakes); ?>;
			var zipcodes = <?php echo json_encode($zipcodes); ?>;
			var all = $.merge(towns, areas);
				all = $.merge(all, counties);
				all = $.merge(all, lakes);
				all = $.merge(all, zipcodes);
			
			var ms_all = $('#zpa-all-input').magicSuggest({
				
				data: all,
				valueField: 'code',
				displayField: 'name',
				hideTrigger: true,
				groupBy: 'group',
				maxSelection: 1,
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
			
			$(ms_all).on('selectionchange', function(e,m){		
				var values = this.getValue();
				var value  = values[0];
				var data   = this.getData();
				var label  = '';
				var name, linked_name;
				var is_add, is_location, is_address, is_mls = 0;
								
				for(i=0; i<data.length; i++){
					if(data[i].code==value){
						label = data[i].name;
					}
				}
				if (value.toLowerCase().indexOf("atwns_") >= 0){ //town
					is_location=1;
				}else if (value.toLowerCase().indexOf("aars_") >= 0){ //area
					is_location=1;
				}else if (value.toLowerCase().indexOf("acnty_") >= 0){ //county
					is_location=1;
				}else if (value.toLowerCase().indexOf("azip_") >= 0){ //zip
					is_location=1;
				}else if (value.toLowerCase().indexOf("alkchnnm_") >= 0){ //lake
					is_lake=1;
				}else if (value.toLowerCase().indexOf("addr_") >= 0){ //google address
					is_address=1;
				}else if (value.toLowerCase().indexOf("alstid_") >= 0){ //mls
					is_mls=1;
				}
				
				if(is_location){							
					name = 'location[]';
					linked_name = 'location_'+value;
					is_add=1;
				}else if(is_lake){
					name = 'alkChnNm[]';
					linked_name = value.replace('alkchnnm_','');
					value = value.replace('alkchnnm_','');
					is_add=1;
				}else if(is_address){
					name = '';
					is_add=0;
				}else if(is_mls){
					name = 'alstid[]';
					linked_name = value;
					value = value.replace('alstid_','');
					// linked_name = 'alstid_'+value;
					is_add=1;
				}
								
				this.removeFromSelection(this.getSelection(), true);
				
				clearGoogleAddressFields();
				
				if(is_add){
					addFilterLabel(name, value, linked_name, label);
					addFormField(name,value,linked_name);
				}else if(is_address){
					var saved_address = jQuery.parseJSON(jQuery('#zpa-all-input-address-values').val());
					if(saved_address){
						$.each(saved_address, function(key, value) {
							jQuery('.field-section.addr #'+ key).val(value);
							jQuery('.field-section.addr #'+ key).prop('disabled',false);
							label="";
							
							switch(key){
								case "street_number":
										name="advStNo";
										linked_name="";
									break;
								case "route":
										name="advStName";
										linked_name="";
									break;
								case "locality":
										name="advTownNm";
										linked_name="";
									break;
								case "administrative_area_level_1":
										name="advStates";
										linked_name="";
									break;
								case "country":
										name="advCounties";
										linked_name="";
									break;
								case "postal_code":
										name="advStZip";
										linked_name="";
									break;
							}
							name=name.toLowerCase();
							linked_name=name;
							
							addFilterLabel(name, value, linked_name, label);
							addFormField(name,value,linked_name);
						});
					}
				}
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			/* Combine ms_all and google autocomplete */
			var ms_all__rawValue='';
			var ms_all__google_autocomplete;
			var google_autocomplete_selected=0;
			
			//select value on enter key pressed
			$(ms_all).on('keydown', function(e,m,v){
				var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
				var magicSuggest_option_exists = data.length;
				var google_option_exists = $('body .pac-container.pac-logo').html().length;
				
				if(magicSuggest_option_exists){
					ms_all__google_autocomplete=0;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
				}else if(google_option_exists && ms_all__rawValue.length >= 2){
					ms_all__google_autocomplete=1;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'visible' );
				}else{
					ms_all__google_autocomplete=0;
					jQuery('body .pac-container.pac-logo').css( 'visibility', 'hidden' );
				}
				
				$('#zpa-all-input-address').val('');
			});
			
			function clearGoogleAddressFields(){
				jQuery('#zpa-all-input-address').val('');						
				removeLabel('advstno', 'advstno', '');
				removeLabel('advstname', 'advstname', '');
				removeLabel('advtownnm', 'advtownnm', '');
				removeLabel('advstates', 'advstates', '');
				removeLabel('advcounties', 'advcounties', '');
				removeLabel('advstzip', 'advstzip', '');
			}
			
			<?php
			$rb = ZipperagentGlobalFunction()->zipperagent_rb();
			$states=isset($rb['web']['states'])?$rb['web']['states']:'';
			$states=array_map('trim', explode(',', $states));
			$states=implode(' | ',$states);
			?>
			
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

			(function pacSelectFirst(inp){
				// store the original event binding function
				var _addEventListener = (inp.addEventListener) ? inp.addEventListener : inp.attachEvent;

				function addEventListenerWrapper(type, listener) {
					// Simulate a 'down arrow' keypress on hitting 'return' when no pac suggestion is selected,
					// and then trigger the original listener.

					if (type == "keydown") {
						var orig_listener = listener;
						listener = function (event) {
							var suggestion_selected = jQuery(".pac-item-selected").length > 0;
							if (event.which == 9 || event.which == 13 && !suggestion_selected && ms_all__rawValue) {
								var simulated_downarrow = jQuery.Event("keydown", {keyCode:40, which:40})
								orig_listener.apply(inp, [simulated_downarrow]);													
								
								if(ms_all__google_autocomplete)
									google_autocomplete_selected=1;
							}

							orig_listener.apply(inp, [event]);
						};
					}

					// add the modified listener
					_addEventListener.apply(inp, [type, listener]);
				}

				if (inp.addEventListener)
				inp.addEventListener = addEventListenerWrapper;
				else if (inp.attachEvent)
				inp.attachEvent = addEventListenerWrapper;

			})(input);

			function initAutocomplete() {
				var options = {
					types: ['geocode'],  // or '(cities)' if that's what you want?
					componentRestrictions: {country: ["us"]},
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

				if(!place.address_components)
				return;

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
				
				var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
				
				if(!data.length){
					
					var val = place.formatted_address;
					var prefix = 'addr_';
					var code = prefix + 'selected_address';							
					var label = val;	
					var push = {group:'Address', name: label, code: code, type: 'address' };
					if(val){
						ms_all.setValue([push]);
					}
				}
			}

			initAutocomplete();
			
			<?php if($states): ?>
			jQuery(input).on('input',function(){				
				if(ms_all__google_autocomplete){
					var str = input.value;
					var prefix = '<?php echo $states; ?> | ';
					
					if(str.indexOf(prefix) == 0) {
						// console.log(input.value);
					} else if( str + ' ' === prefix ){
						input.value = "";
					}else {
						if (prefix.indexOf(str) >= 0) {
							input.value = prefix;
						} else {
							input.value = prefix+str;
						}
					}
				}
			});
			<?php endif; ?>
			
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
				
				if( ms_all__rawValue!="" && ! ms_all__afterDelete ){
					if(data.length){
						firstData=JSON.parse(data[0].dataset.json);
						ms_all.setValue([firstData.code]);
					}else if(!ms_all__google_autocomplete && !google_autocomplete_selected){
						var val = ms_all__rawValue;
						var prefix = 'alstid_';
						var code = prefix + val;							
						var label = 'MLS#' + val;
						
						var push = {group:'Mls', name: label, code: code, type: 'mls' };
						ms_all.setValue([push]);
					}
					
					ms_all__afterDelete=0;
					
					$('#zpa-all-input input').focus();
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
						}else if(!ms_all__google_autocomplete && !google_autocomplete_selected && ms_all__rawValue.indexOf(" ") < 0){
							var val = ms_all__rawValue;
							var prefix = 'alstid_';
							var code = prefix + val;							
							var label = 'MLS#' + val;
							
							var push = {group:'Mls', name: label, code: code, type: 'mls' };
							ms_all.setValue([push]);
						}
					}
					
					ms_all.collapse();
					
					$('#zpa-all-input input').focus();
				}
			});
			
			//select value on tab key pressed
			$('#zpa-all-input input').on( 'keydown', function(e){
				if(e.keyCode === 9) { //tab pressed 
					var data = ms_all.combobox.children().filter('.ms-res-item-grouped');
					var firstData = '';
					
					if( ms_all__rawValue!=""){
						if(data.length){
							firstData=JSON.parse(data[0].dataset.json);
							ms_all.setValue([firstData.code]);
						}else if(!ms_all__google_autocomplete && !google_autocomplete_selected){
							var val = ms_all__rawValue;
							var prefix = 'alstid_';
							var code = prefix + val;							
							var label = 'MLS#' + val;
							var push = {group:'Mls', name: label, code: code, type: 'mls' };
							ms_all.setValue([push]);
						}
					}
					
					ms_all.empty();
					$('#zpa-all-input input').focus();
					
					ms_all.collapse();
					
					e.preventDefault();
				}
			});
			
			//set after delete state
			$(ms_all).on('selectionchange', function(e,m,r){
				
				ms_all.empty();
				ms_all__rawValue="";
				google_autocomplete_selected=0;
				
				if(r.length==ms_all__recentSelected.length && r.length==ms_all__currentSelected.length){
					ms_all__afterDelete=1;
				}else{
					ms_all__afterDelete=0;
				}
			});
		});
	</script>
	<script>
		jQuery(document).ready(function(){
			
			var xhr;
			
			jQuery('#zpa-search-filter-form').on("submit", function(event) {
				
				if(xhr && xhr.readyState != 4){
					xhr.abort();
				}
				
				var $form = jQuery(this); //wrap this in jQuery
				var data = jQuery(this).serialize();
				var request = jQuery(this).serializeArray();
				var url = $form.attr('action') + '?' + data;
				<?php /* var loading = '<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" />'; */ ?>
				var valueToPush={};
				valueToPush = {"name":"view_type", "value":"map"};
				request.push(valueToPush);
				var valueToPush={};
				valueToPush = {"name":"action", "value":"properties_view"};
				request.push(valueToPush);
				var valueToPush={};
				valueToPush = {"name":"actual_link", "value":url};
				request.push(valueToPush);
				window.history.pushState("", "", url);
				
				jQuery( '.loading-wrap' ).show();
				jQuery( '#map' ).hide();
				jQuery( '#zipperagent-content' ).html( '' );
				jQuery( '.proptype-markers, .property-results, .property-results' ).addClass('hide');
				jQuery( '.property-results .prop-total' ).html('&nbsp;');
				
				console.time('generate list');
				xhr = jQuery.ajax({
					type: 'POST',
					dataType : 'json',
					url: zipperagent.ajaxurl,
					data: request,
					success: function( response ) {         
						if( response['html'] ){
							jQuery( '.loading-wrap' ).hide();
							jQuery( '#map' ).show();
							jQuery( '#zipperagent-content' ).html( response['html'] );
							jQuery( '.proptype-markers, .property-results' ).removeClass('hide');
						}
						console.timeEnd('generate list');
					},
					error: function(){
						console.timeEnd('generate list');
					}
				});
				event.preventDefault();
				// return false;
			});
		});
		
	</script>
	<script>
		jQuery(document).on('click', '#zpa-main-container .dropdown-menu', function (e) {
		  e.stopPropagation();
		});
	</script>
	<script>
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
	<script>
		jQuery(document).ready(function(){
			
			window.removeLabel = function(linked_name, name, value){
				
				jQuery('#zpa-search-filter-form input[linked-name="'+linked_name+'"]').remove();
				jQuery('#zpa-selected-filter .ms-sel-ctn .ms-sel-item[attribute-name="'+ linked_name +'"]').remove();
				
				//remove from search bar		
				jQuery('#zpa-top-searh-bar .btn-group input[type=text][name="'+name+'"]').val('');
				jQuery('#zpa-top-searh-bar .btn-group select[name="'+name+'"]').val('');
				if(value)
					jQuery('#zpa-top-searh-bar .btn-group input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", false);
				else
					jQuery('#zpa-top-searh-bar .btn-group input[type=radio][name="'+name+'"][value="'+value+'"]').prop("checked", true);
				jQuery('#zpa-top-searh-bar .btn-group input[type=checkbox][name="'+name+'"][value="'+value+'"]').prop("checked", false);
			}
			
			window.addFormField = function(name, value, linked_name){
				var field = jQuery('#zpa-search-filter-form input[linked-name="'+ linked_name +'"]');
				
				add='<input type="hidden" linked-name="'+linked_name+'" name="'+name+'" value="'+value+'">';
				
				if(!field.length){
					jQuery('#zpa-search-filter-form').append(add);
				}else{
					jQuery(field).replaceWith(add);
				}				
			}
			
			window.addFilterLabel = function(name, value, linked_name, label){
				var newLabel=label;
				var currency='<?php echo zipperagent_currency(); ?>';
				
				if(!newLabel){
					switch(linked_name){
						case "maxlistprice":
							newLabel = 'up to '+ currency + shortenmoney(value.replace(/,/g, '')) ;	
							break;
						case "minlistprice":
							newLabel = 'over '+ currency + shortenmoney(value.replace(/,/g, '')) ;	
							break;
						case "bedrooms":
							newLabel = value + ' + Beds';	
							break;
						case "bathcount":
							newLabel = value + ' + Bath';	
							break;
						case "squarefeet":
							newLabel = value + ' sqft';	
							break;
						<?php
						$propTypeFields = get_property_type();
						foreach($propTypeFields as $key => $val){
						echo "\r\n" .
						'case "propertytype_'.$key.'":'."\r\n" .
							"newLabel = '{$val}'"."\r\n" .
							'break;'."\r\n";
						} ?>
						<?php
						$propSubTypeFields = get_property_sub_type();
						foreach($propSubTypeFields as $key => $val){
						echo "\r\n" .
						'case "propsubtype_'.$key.'":'."\r\n" .
							"newLabel = '{$val}'"."\r\n" .
							'break;'."\r\n";
						} ?>
						<?php
						$fields = get_references_field('STYLE');
						foreach($fields as $field){
						echo "\r\n" .
						'case "astle_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						<?php
						$fields = get_references_field('EXTERIORFEATURES');
						foreach($fields as $field){
						echo "\r\n" .
						'case "aextf_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						<?php
						$fields = get_references_field('WATERFRONT');
						foreach($fields as $field){
						echo "\r\n" .
						'case "awtrf_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						<?php
						$fields = get_references_field('WATERVIEWFEATURES');
						foreach($fields as $field){
						echo "\r\n" .
						'case "awvf_'.$field->shortDescription.'":'."\r\n" .
							"newLabel = '{$field->longDescription}'"."\r\n" .
							'break;'."\r\n";
						}
						?>
						case "yearbuilt":
							newLabel = 'year ' + value;	
							break;
						case "maxdayslisted":
							newLabel = 'max ' + value + ' days listed';
							break;
						case "withimage":
							newLabel = 'has photos';	
							break;
						case "featuredonlyyn":
							newLabel = 'featured';	
							break;
						case "openhomesonlyyn":
							newLabel = 'open houses only';	
							break;
						case "hasvirtualtour":
							newLabel = 'has virtual tour';	
							break;
						case "listinapage":
							newLabel = value + ' results per page';	
							break;
						case "o":
							switch(value){
								case "apmin:DESC":
									vall = 'price (high to low)';
								break;
								case "apmin:ASC":
									vall = 'price (low to high)';
								break;
								case "asts:ASC":
									vall = 'status';
								break;
								case "atwns:ASC":
									vall = 'city';
								break;
								case "lid:DESC":
									vall = 'listing date';
								break;
								case "apt:DESC":
									vall = 'type/price descending';
								break;
								case "alstid:ASC":
									vall = 'listing number';
								break;
								default:
									vall = value;
								break;
							}
							
							// newLabel = 'order by ' + vall; //disable order label
							newLabel='';
							break;
						case "advstno":
							newLabel = 'street number ' + value;	
							break;
						case "advstname":
						case "advtownnm":
						case "advstates":
						case "advcounties":
							newLabel = value;	
							break;
						case "advstzip":
							newLabel = 'zipcode ' + value;	
							break;
						case "apold":
							newLabel = 'Pool Description';	
							break;
						case "altand":
							newLabel = 'Lot Description ' + value;	
							break;
						case "school":
							newLabel = value;	
							break;
						default:
							switch(name){
								case "alstid":
								case "alstid[]":
									newLabel = 'MLS#' + value;	
									break;
								default:										
									newLabel = linked_name.toLowerCase()+' '+value;
									break;
							}
							break;
					}
				}
				
				if(!newLabel)
					return;
				
				if(jQuery('#zpa-selected-filter .ms-sel-ctn .ms-sel-item[attribute-name="'+linked_name+'"]').length){
					var replace='<div class="ms-sel-item" real-name="'+name+'" attribute-name="'+linked_name+'" attribute-value="'+value+'"><div class="name">'+ newLabel +'</div><span class="ms-close-btn"></span></div>';
					jQuery('#zpa-selected-filter .ms-sel-ctn .ms-sel-item[attribute-name="'+linked_name+'"]').replaceWith(replace);
				}else{
					var add='<div class="ms-sel-item" real-name="'+name+'" attribute-name="'+linked_name+'" attribute-value="'+value+'"><div class="name">'+ newLabel +'</div><span class="ms-close-btn"></span></div>';
					jQuery('#zpa-selected-filter .ms-sel-ctn').append(add);						
				}
			}
			
			function shortenmoney(num){
				var digits=0;
				var si = [
					{ value: 1, symbol: "" },
					{ value: 1E3, symbol: "k" },
					{ value: 1E6, symbol: "M" },
					{ value: 1E9, symbol: "G" },
					{ value: 1E12, symbol: "T" },
					{ value: 1E15, symbol: "P" },
					{ value: 1E18, symbol: "E" }
				  ];
				  var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
				  var i;
				  for (i = si.length - 1; i > 0; i--) {
					if (num >= si[i].value) {
					  break;
					}
				  }
				  return (num / si[i].value).toFixed(digits).replace(rx, "$1") + si[i].symbol;
			}
			
			jQuery('body').on('click', '#zpa-selected-filter .ms-sel-ctn .ms-sel-item', function(){
				name = jQuery(this).attr('real-name');
				linked_name = jQuery(this).attr('attribute-name');
				value = jQuery(this).attr('attribute-value');
				
				removeLabel(linked_name, name, value);		
				
				jQuery('#zpa-search-filter-form').submit();
			});
			
			<?php
			// echo "<pre>"; print_r($requests); echo "</pre>";
			foreach($requests as $key=>$value){	
				if(!in_array($key, get_new_filter_excludes()))
					zipperagent_generate_filter_label($key, $value);
			}
			?>
		});
	</script>
	<script>
		jQuery('body').on('change', '#zpa-top-searh-bar .btn-group input:not([type=checkbox]), #zpa-top-searh-bar .btn-group select, #zpa-top-searh-bar .btn-group textarea, #zpa-top-searh-bar .btn-group input[type=checkbox]', function(e){
										 
			var name = jQuery(this).attr('name').toLowerCase();
			var value = jQuery(this).val();
			var is_array = name.substr(name.length - 2) == '[]';
			var linked_name='';
			var type = jQuery(this).attr('type');
			
			if(is_array){				
				linked_name=name.substr(0, name.length - 2) +'_'+value;
			}else{
				linked_name=name;
			}
			
			switch(type){
				case "checkbox":
						var checked = jQuery(this).prop('checked');
						if(!checked){
							removeLabel(linked_name, name, value);
						}else{
							addFilterLabel(name, value, linked_name, '');
							addFormField(name,value,linked_name);							
						}
					break;
				case "text":
				default:	
						if(!value){
							removeLabel(linked_name, name, value);
						}else{
							addFilterLabel(name, value, linked_name, '');
							addFormField(name,value,linked_name);							
						}	
					break;
					
			}
			jQuery('#zpa-search-filter-form').submit();
		});
	</script>
</div>

<style>
.detail-toggle{display: none;}
.uc-searchBar-toggleMenuIcon {
    display: inline-block;
    margin: 0 0 0 14px;
    width: 16px;
    height: 16px;
}
</style>