<?php
global $requests;
// $addressSearch=1;
?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <div>
		<?php
		$actionUrl = zipperagent_page_url( 'search-results' );
		?>
        <form id="zpa-main-search-form" class="form-inline" action="<?php echo $actionUrl ?>" method="GET" target="_self" novalidate="novalidate">
            <fieldset>
                <div class="row">
                    <div class="col-xs-12" id="zpa-search-tabs">
						<ul class="nav nav-tabs" id="zpa-search-location-tabs">
                            <li class=" active "> <a id="zpa-location-tab" href="#zpa-search-location-tab" data-toggle="tab" data-zpa-search-tab="location"> Location </a> </li>
                            <?php /* if($addressSearch): ?><li class=" "> <a id="zpa-address-tab" href="#zpa-search-address-tab" data-toggle="tab" data-zpa-search-tab="address"> Address </a> </li><?php endif;
							<li class=" "> <a id="zpa-listingids-tab" href="#zpa-search-listingids-tab" data-toggle="tab" data-zpa-search-tab="listingids"> Listing Id </a> </li> */ ?>
                            <li class=" "> <a id="zpa-polygon-tab" href="#zpa-search-polygon-tab" data-toggle="tab" data-zpa-search-tab="polygon"> Draw on Map </a> </li> 
						</ul><script>
							jQuery('#zpa-search-location-tabs a').click(function(){
								jQuery(this).tab('show');
							})
						</script>
                        <div class="tab-content">
							<div id="zpa-search-location-tab" class="tab-pane active">
								<div>
									<div class="row mt-10" id="areaPickerContainer">										
										<div class="col-xs-12">
											<label for="zpa-area-input" class="field-label"> Location </label>
											<?php /* <input id="zpa-area-input" class="zpa-area-input form-control" placeholder="Enter City / County / Zip"  name="location[]"/>
											<input class="zpa-area-input-hidden" name="" type="hidden"> */ ?>
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
										<?php /*
										<div class="col-xs-12">
											<div class="input-group"> <span class="input-group-addon" style="margin:2px;"> <span class="fs-12 hidden-xs areaPickerExpandAllButtonClass"> View All </span> <span class="glyphicon glyphicon-align-justify fs-12 hidden-xs areaPickerExpandAllButtonClass"></span> </span>
												<div class="form-control" id="areaPickerInputWrapper"> <span id="zpa-selectedAreas" style="float:left;"></span> <span style="float:left;"> <input name="location" id="areaPicker" type="text" size="30" placeholder="" autocomplete="off" class="areaPickerDefaultText"> </span> </div>
											</div>
										</div>										
											
										<div class="col-xs-12"> <span id="zpa-selectedAreasLabel" style="display:none;"></span>
											<div id="autocompleteMatch">
												<div id="autocompleteMatchValues"></div>
												<div class="areaPickerExpandAllButtonClass">
													<button type="button" class="btn-link"> View All </button>
												</div>
											</div>
											<div id="areaPickerExpandAll">
												<div class="areaPickerExpandAllTopBar btn-primary">
													<div id="areaPickerCustomListToggle" style="cursor: pointer; display: none;">&nbsp;+&nbsp;More</div>
													<div id="areaPickerClearAll" style="cursor:pointer;"> <span class="glyphicon glyphicon-remove-circle" style="font-size:12px;color:#999;"></span> Clear </div>
													<div id="areaPickerExpandAllCloseButton" class="areaPickerExpandAllButtonClass"> <span class="badge"> Close </span> </div>
												</div>
												<div id="areaPickerExpandAllContainer">
													<div id="areaPickerExpandAllResults"></div>
												</div>
											</div>
										</div>
										 */ ?>
									</div>
								</div>
									
							</div>	
							<?php /* if($addressSearch): ?>
							<div id="zpa-search-address-tab" class="tab-pane">
								<div>									
									 <div class="row mt-10">							
									
										 <div id="locationField" class="col-xs-12">
											<label for="zpa-area-address" class="field-label"> Address </label>
											<input type="text" id="zpa-area-address" class="zpa-area-address form-control" placeholder="Type address here" onFocus="geolocate()" name="address" disabled />
																																	
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
							<?php endif; 													
							<div id="zpa-search-listingids-tab" class="tab-pane">
								<div>									
									<div class="row mt-10">				
										<div class="col-xs-12">
											<label for="zpa-listingids" class="field-label"> Listing Id </label>
											<input id="zpa-listingids" class="zpa-area-input form-control" placeholder="Comma separted listing ids"  name="alstid" disabled />
										</div>
									</div>
								</div>
							</div> */ ?>
							<div id="zpa-search-polygon-tab" class="tab-pane">
								<div id="map-fields" class="row mt-10">
									 <div class="col-xs-12 col-sm-4 mb-10">
										<label for="zpa-select-property-type" class="field-label zpa-select-property-type-label"> Property Type </label>
										<div class="zpa-property-type-message" style="display: none;"> <small> Some selected areas can be used only in residential property searches </small> </div>
										<?php /*
										<select id="zpa-select-property-type" name="propertyType[]" class="form-control multiselect" multiple="multiple" disabled>
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
									<div class="col-xs-12 col-sm-2 mb-10">
										<label for="zpa-minprice-homes" class="field-label zpa-minprice-label"> Min. Price </label>
										<div class="" style="position:relative;">
											<div class="zpa-label-overlay-money"> $ </div>
											<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>" disabled /> </div>
									</div>
									<div class="col-xs-12 col-sm-2 mb-10">
										<label for="zpa-maxprice-homes" class="field-label zpa-maxprice-label"> Max. Price </label>
										<div class="" style="position:relative;">
											<div class="zpa-label-overlay-money"> $ </div>
											<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>" disabled /> </div>
									</div>
									<div class="col-xs-12 col-sm-2 mb-10">
										<label for="zpa-select-bedrooms-homes" class="field-label zpa-select-bedrooms-label"> Beds </label>
										<select id="zpa-select-bedrooms-homes" name="bedrooms" class="form-control zpa-chosen-select-width">
											<option value="">Any</option>
											<option value="1">1+</option>
											<option value="2">2+</option>
											<option value="3">3+</option>
											<option value="4">4+</option>
											<option value="5">5+</option>
										</select>
									</div>
									<div class="col-xs-12 col-sm-2 mb-10">
										<label for="zpa-select-baths-homes" class="field-label zpa-select-baths-label"> Baths </label>
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
								<div class="row mb-10">
									<div class="col-xs-12 mt-10"> Click or tap on the map to begin. To edit your completed polygon, drag any point to a new location. </div>
									<div class="col-xs-12">
										<div id="panel">
										  <div id="color-palette" style="display:none"></div>
										  <div class="pull-right">
											<button id="delete-button">Delete Selected Shape</button>
										  </div>
										</div>
										<div id="map" style="height: 400px; width: 100%"></div>
										<div id="zpa-map-canvas" style="height: 400px; width: 100%"></div>
									</div>
								</div>
								<input id="zpa-boundary" name="boundaryWKT" type="hidden" value="" disabled="disabled">
								
							</div>	
						</div>
					</div>
                </div>
				
				<div id="location-fields">
					<div class="row mt-25 filter">
						<div class="col-xs-12 col-sm-6 mb-10">
							<label for="zpa-select-property-type" class="field-label zpa-select-property-type-label"> Property Type </label>
							<div class="zpa-property-type-message" style="display: none;"> <small> Some selected areas can be used only in residential property searches </small> </div>
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
							<?php /* <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title="" id="za_select_property_type_chosen"><a class="chosen-single" tabindex="-1"><span>Lots / Land</span><div><b></b></div></a>
								<div class="chosen-drop">
									<div class="chosen-search">
										<input type="text" autocomplete="off" readonly="">
									</div>
									<ul class="chosen-results"></ul>
								</div>
							</div> */ ?>	
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
						<div class="col-xs-12 col-sm-2 rental-field" style="display:none">
							<label for="zpa-available-from" class="field-label zpa-available-from-label"> Available From </label>
							<div class="" style="position:relative;">
								<input id="zpa-available-from" name="aavldtf" placeholder="" type="text" class="form-control zpa-search-form-input datepicker" value="" disabled>
							</div>
								
						</div>
						<div class="col-xs-12 col-sm-2 rental-field" style="display:none">
							<label for="zpa-available-to" class="field-label zpa-available-to-label"> Available To </label>
							<div class="" style="position:relative;">
								<input id="zpa-available-to" name="aavldtt" placeholder="" type="text" class="form-control zpa-search-form-input datepicker" value="" disabled>
							</div>
								
						</div>
						<div class="col-xs-12 col-sm-2 mb-10"> <span id="zpa-status-fields"> <label for="zpa-status" class="field-label zpa-status-label"> Status </label> <div> <label class="radio-inline"> <input class="radio" name="status" value="" type="radio" checked> Active </label>  <label class="radio-inline"> <input class="radio" name="status" value="<?php echo zipperagent_sold_status(); ?>" type="radio"> Sold </label> </div> </span> </div>
					</div>
					<div id="zpa-house-condo-search-fields" class="">
						<div class="row mt-25 zpa-home-search-fields filter">
							<div class="col-xs-12 col-sm-3">
								<label for="zpa-minprice-homes" class="field-label zpa-minprice-label"> Min. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>"> </div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<label for="zpa-maxprice-homes" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>"> </div>
							</div>
							<div class="col-xs-12 col-sm-2">
								<label for="zpa-sqft-homes" class="field-label zpa-sqft-label"> Min. SqFt. </label>
								<input id="zpa-sqft-homes" name="squareFeet" placeholder="Any" type="text" class="form-control zpa-search-form-input" value="">
							</div>
							<div class="col-xs-12 col-sm-2">
								<label for="zpa-select-bedrooms-homes" class="field-label zpa-select-bedrooms-label"> Beds </label>
								<select id="zpa-select-bedrooms-homes" name="bedrooms" class="form-control zpa-chosen-select-width">
									<option value="">Any</option>
									<option value="1">1+</option>
									<option value="2">2+</option>
									<option value="3">3+</option>
									<option value="4">4+</option>
									<option value="5">5+</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-2">
								<label for="zpa-select-baths-homes" class="field-label zpa-select-baths-label"> Baths </label>
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
					</div>
					<div id="zpa-lots-land-search-fields" class="hide">
						<div class="row mt-10 zpa-lot-land-search-fields filter">
							<div class="col-xs-12 col-sm-4 col-lg-4 mb-10">
								<label for="zpa-minprice-lots-land" class="field-label zpa-minprice-label"> Min. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-minprice-lots-land" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4 mb-10">
								<label for="zpa-maxprice-lots-land" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-lots-land" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4 mb-10">
								<label for="zpa-acres-lots-land" class="field-label zpa-acres-label"> Min. Lot Acres </label>
								<input id="zpa-acres-lots-land" name="lotAcres" placeholder="Any" class="form-control zpa-search-form-input" type="text" value="" disabled="disabled">
								<label class="error" for="zpa-sqft-lots-land"></label>
							</div>
						</div>
					</div>
					<div id="zpa-commercial-search-fields" class="hide">
						<div class="row mt-10 zpa-commercial-search-fields filter">
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-minprice-commercial" class="field-label zpa-minprice-label"> Min. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-minprice-commercial" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-maxprice-commercial" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-commercial" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-sqft-commercial" class="field-label zpa-sqft-label"> Min. SqFt. </label>
								<input id="zpa-sqft-commercial" name="squareFeet" placeholder="Any" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled">
							</div>
						</div>
					</div>
					<?php /*
					<div id="zpa-residential-income-search-fields" class="hide">
						<div class="row mt-10 zpa-residential-income-search-fields filter">
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-minprice-res-income" class="field-label zpa-minprice-label"> Min. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-minprice-res-income" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-maxprice-res-income" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-res-income" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>" disabled="disabled"> </div>
							</div>
							<?php /*
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-sqft-res-income" class="field-label zpa-sqft-label"> Min. SqFt. </label>
								<input id="zpa-sqft-res-income" name="squareFeet" placeholder="Any" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled">
							</div>
							* ?>
						</div>
					</div>
					*/ ?>
					<div class="row mt-25 filter">
						<div class="col-xs-12 col-sm-3 mb-10">
							<label for="zpa-select-order-by" class="field-label zpa-select-order-by-label"> Sort by </label>
							<?php 
							$default_order = isset($requests['o']) ? $requests['o'] : za_get_default_order(); ?>
							<select id="zpa-select-order-by" name="o" class="form-control zpa-chosen-select-width">
								<option value="<?php echo $default_order; ?>">Select</option>
								<option value="apmin:DESC">Price (High to Low)</option>
								<option value="apmin:ASC">Price (Low to High)</option>
								<option value="asts:ASC">Status</option>
								<option value="atwns:ASC">City</option>
								<option value="lid:DESC">Listing Date</option>
								<option value="apt:DESC">Type / Price Descending</option>
								<?php /* <option value="alstid:ASC">Listing Number</option> */ ?>
								<?php /* <option value="">Open Home Date Asc</option> */ ?>
							</select>
						</div>
						
						<div class="col-xs-12 col-sm-3">
							<?php
							
							$lotDescriptions = get_lot_descriptions();
							
							if($lotDescriptions):
							?>
							<label for="zpa-lot-description-listed" class="field-label zpa-lot-description-label"> Lot Description </label>
							
							<select id="zpa-select-lot-description" name="altand" class="form-control">
								<option value="">Select</option>
								<?php								
								foreach( $lotDescriptions as $fieldCode=>$fieldName ){
									$selected="";									
									echo "<option $selected value='{$fieldCode}'>{$fieldName}</option>"."\r\n";										
								}
								?>
							</select>
							<?php endif; ?>
						</div>
						
						<div class="col-xs-12 col-sm-2">
							<label for="zpa-max-days-listed" class="field-label zpa-max-days-listed-label"> Max days On Site </label>
							<input id="zpa-max-days-listed" name="maxDaysListed" placeholder="days number" type="text" class="form-control" value="">
						</div>
						<div class="col-xs-12 col-sm-2">
							<label for="zpa-resulst" class="field-label zpa-resulst-label"> Results per page </label>
							<select id="zpa-resulst" name="listinapage" class="form-control zpa-chosen-select-width">
								<option value="24">24</option>
								<option value="30">30</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-2">
							<label for="zpa-year" class="field-label zpa-year-label"> Year </label>
							<input id="zpa-year" name="yearBuilt" placeholder="Ex: 1990" type="text" class="form-control" value="">
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12 mb-10"> </div>
					</div>
					<div class="row mt-25">
						<div class="col-xs-8">
							<?php if(is_show_extra_search_feature()): ?>
							<div class="checkbox filter">
								<label class="field-label zpa-featured-only-label">
									<input id="zpa-open-homes-only" name="featuredOnlyYn" type="checkbox" value="true">
									<?php /* <input type="hidden" name="_featuredOnlyYn" value="on"> */ ?> Featured </label>
							</div>
							
							<div class="checkbox filter">
								<label class="field-label zpa-open-homes-only-label">
									<input id="zpa-open-homes-only" name="openHomesOnlyYn" type="checkbox" value="true"> Open Houses </label>
							</div>
							<div class="checkbox filter">
								<label class="field-label zpa-has-virtual-tour-label">
									<input id="zpa-has-virtual-tour" name="hasVirtualTour" type="checkbox" value="true"> Virtual Tour </label>
							</div>
							<div class="checkbox filter">
								<label class="field-label zpa-with-image-label">
									<input id="zpa-with-image" name="withImage" type="checkbox" value="true"> With Image </label>
							</div>
							<div class="checkbox filter">
								<label class="field-label zpa-with-image-label">
									<input id="zpa-with-image" name="apold" type="checkbox" value="$$ISNOTNULL$$"> Pool Description </label>
							</div>
							<div class="checkbox filter">
								<label class="field-label zpa-with-image-label">
									<input id="zpa-with-image" name="awtrf" type="checkbox" value="1"> Waterfront Flag </label>
							</div>
							<div class="clearfix"></div>
							<?php /*
							<div class="checkbox">
								<label class="field-label zpa-date-range-label">
									<input id="zpa-date-range" name="dateRange" type="checkbox" value="7">
									<input type="hidden" name="_dateRange" value="on"> New (Within 7 Days) </label>
							</div>
							*/ ?>
							<?php endif; ?>
						</div>
						<div class="col-xs-4" style="text-align:right;">
							<button id="zpa-main-search-form-submit" type="submit" class="btn btn-lg btn-block btn-primary btn-form-submit"> Search </button>
						</div>
					</div>
					<?php /*
					<div class="row mt-25">
						<div class="col-xs-12" style="text-align: right;"> <a href="<?php echo site_url('/'); ?>homes-for-sale-search-advanced/13/" class="zpa-advanced-search-launch"> MORE SEARCH OPTIONS </a> </div>
					</div>
					*/ ?>
				</div>
            </fieldset>
			
			
			<?php if(isset($requests['column'])): ?>
			<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
			<?php endif; ?>
			
			<?php if(isset($requests['newsearchbar'])): ?>
			<input type="hidden" name="newsearchbar" value="<?php echo $requests['newsearchbar']; ?>" />
			<?php endif; ?>
        </form>
    </div>
	
	<?php // global_magicsuggest_script(); ?>
	
	<script>		
		
		jQuery(function(){
			
			var filter = jQuery('fieldset div.filter');
			var house=jQuery('#zpa-house-condo-search-fields');
			var land=jQuery('#zpa-lots-land-search-fields');
			var comm=jQuery('#zpa-commercial-search-fields');
			var location=jQuery('#location-fields');
			var map=jQuery('#map-fields');
			
			jQuery('#zpa-select-property-type').on( 'change', function(){
				
				switch(jQuery(this).val()){
					case "SF":
					case "MF":
					case "MH":
					case "RN":
					case "CC":
					case "BU":
							house.removeClass('hide');
							land.addClass('hide');
							comm.addClass('hide');
							enabledFields(house, true);
							enabledFields(land, false);
							enabledFields(comm, false);
						break;
					case "LD":
							house.addClass('hide');
							land.removeClass('hide');
							comm.addClass('hide');
							enabledFields(house, false);
							enabledFields(land, true);
							enabledFields(comm, false);
						break;											
					case "CI":											
							house.addClass('hide');
							land.addClass('hide');
							comm.removeClass('hide');
							enabledFields(house, false);
							enabledFields(land, false);
							enabledFields(comm, true);
						break;
				}
			});
			jQuery("#zpa-polygon-tab").on("show.bs.tab", function() {
				
				jQuery("#zpa-boundary").removeAttr("disabled");				
				jQuery("#zpa-listingids").attr("disabled", true);
				jQuery("#zpa-area-address").attr("disabled", true);
				jQuery("#zpa-area-location").attr("disabled", true);
				
				enabledFields(location, false);
				enabledFields(map, true);
				filter.addClass('hide');
				
				initialize(); // show map
			});
			jQuery("#zpa-address-tab").on("show.bs.tab", function() {
				
				jQuery("#zpa-boundary").attr("disabled", true);
				jQuery("#zpa-listingids").attr("disabled", true);
				jQuery("#zpa-area-address").attr("disabled", false);
				jQuery("#zpa-area-location").attr("disabled", true);
				
				enabledFields(location, false);
				enabledFields(map, false);
				filter.addClass('hide');
			});
			jQuery("#zpa-listingids-tab").on("show.bs.tab", function() {
				
				jQuery("#zpa-boundary").attr("disabled", true);
				jQuery("#zpa-listingids").attr("disabled", false);
				jQuery("#zpa-area-address").attr("disabled", true);
				jQuery("#zpa-area-location").attr("disabled", true);
				
				enabledFields(location, false);
				enabledFields(map, false);
				filter.addClass('hide');
			});
			jQuery("#zpa-location-tab").on("show.bs.tab", function() {
				
				jQuery("#zpa-boundary").attr("disabled", true);
				jQuery("#zpa-listingids").attr("disabled", true);
				jQuery("#zpa-area-address").attr("disabled", true);
				jQuery("#zpa-area-location").attr("disabled", false);
				
				enabledFields(location, true);
				enabledFields(map, false);
				filter.removeClass('hide');
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
				element.find('button.multiselect').each(function(){
					jQuery(this).prop('disabled', ! enable);
					if(enable)
						jQuery(this).removeClass('disabled');
					else
						jQuery(this).addClass('disabled');
				});
			}
		});
		
		
	</script>
	<script>
		jQuery(document).ready(function($) {
			$('.datepicker').pikaday({
				format: 'MM/D/YYYY',
				onSelect: function(date, format) {
				}
			});
			
			$('#zpa-select-property-type').on( 'change', function(){
				switch($(this).val()){
					case "<?php echo get_rental_status() ?>":
							$('.rental-field').show();
							$('.rental-field input').prop('disabled', false);
						break;
					default:
							$('.rental-field').hide();
							$('.rental-field input').prop('disabled', true);
						break;
				}
			});
			
			if( $('#zpa-select-property-type').val()=='<?php echo get_rental_status() ?>' ){
				$('.rental-field').show();
				$('.rental-field input').prop('disabled', false);
			}
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
	<?php /*
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
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} *(input), options);

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
		  <?php if($addressSearch): ?>initAutocomplete();<?php endif; ?>
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
	<?php /* if(  wp_get_theme() != "Conall" && $addressSearch ): ?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuQ5zA1N7-IcAJnbMm_QoZLCNmRhFilNw&libraries=places&callback=initAutocomplete" async defer></script>
	<?php endif; */ ?>
	
	<script type="text/javascript">
      var drawingManager;
      var selectedShape;
      var colors = ['#1E90FF', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
      var selectedColor;
      var colorButtons = {};

      function clearSelection() {
        if (selectedShape) {
          selectedShape.setEditable(false);
          selectedShape = null;
        }
      }

      function setSelection(shape) {
        clearSelection();
        selectedShape = shape;
        shape.setEditable(true);
        selectColor(shape.get('fillColor') || shape.get('strokeColor'));
      }

      function deleteSelectedShape() {
        if (selectedShape) {
          selectedShape.setMap(null);
        }
      }

      function selectColor(color) {
        selectedColor = color;
        for (var i = 0; i < colors.length; ++i) {
          var currColor = colors[i];
          colorButtons[currColor].style.border = currColor == color ? '2px solid #789' : '2px solid #fff';
        }

        // Retrieves the current options from the drawing manager and replaces the
        // stroke or fill color as appropriate.
        var polylineOptions = drawingManager.get('polylineOptions');
        polylineOptions.strokeColor = color;
        drawingManager.set('polylineOptions', polylineOptions);

        var rectangleOptions = drawingManager.get('rectangleOptions');
        rectangleOptions.fillColor = color;
        drawingManager.set('rectangleOptions', rectangleOptions);

        var circleOptions = drawingManager.get('circleOptions');
        circleOptions.fillColor = color;
        drawingManager.set('circleOptions', circleOptions);

        var polygonOptions = drawingManager.get('polygonOptions');
        polygonOptions.fillColor = color;
        drawingManager.set('polygonOptions', polygonOptions);
      }

      function setSelectedShapeColor(color) {
        if (selectedShape) {
          if (selectedShape.type == google.maps.drawing.OverlayType.POLYLINE) {
            selectedShape.set('strokeColor', color);
          } else {
            selectedShape.set('fillColor', color);
          }
        }
      }

      function makeColorButton(color) {
        var button = document.createElement('span');
        button.className = 'color-button';
        button.style.backgroundColor = color;
        google.maps.event.addDomListener(button, 'click', function() {
          selectColor(color);
          setSelectedShapeColor(color);
        });

        return button;
      }

       function buildColorPalette() {
         var colorPalette = document.getElementById('color-palette');
         for (var i = 0; i < colors.length; ++i) {
           var currColor = colors[i];
           var colorButton = makeColorButton(currColor);
           colorPalette.appendChild(colorButton);
           colorButtons[currColor] = colorButton;
         }
         selectColor(colors[0]);
       }

      function initialize() {
		<?php extract(zipperagent_get_map_centre()); ?>
		var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: new google.maps.LatLng('<?php echo $za_lat; ?>', '<?php echo $za_lng; ?>'),
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          disableDefaultUI: true,
		  streetViewControl: true,
          zoomControl: true,
		  gestureHandling: 'greedy',
        });

        var polyOptions = {
          strokeWeight: 0,
          fillOpacity: 0.45,
          editable: true
        };
        // Creates a drawing manager attached to the map that allows the user to draw
        // markers, lines, and shapes.
        drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
		  drawingControl: true,
		  drawingControlOptions: {
			position: google.maps.ControlPosition.TOP_LEFT,
			drawingModes: ['polygon']
		  },
          markerOptions: {
            draggable: true
          },
          polylineOptions: {
            editable: true
          },
          rectangleOptions: polyOptions,
          circleOptions: polyOptions,
          polygonOptions: polyOptions,
          map: map
        });
        

        google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
            if (e.type != google.maps.drawing.OverlayType.MARKER) {
            // Switch back to non-drawing mode after drawing a shape.
            drawingManager.setDrawingMode(null);

            // Add an event listener that selects the newly-drawn shape when the user
            // mouses down on it.
            var newShape = e.overlay;
            newShape.type = e.type;
            google.maps.event.addListener(newShape, 'click', function() {
              setSelection(newShape);
            });
            setSelection(newShape);
          }
        });
 

        // Clear the current selection when the drawing mode is changed, or when the
        // map is clicked.
        google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
        google.maps.event.addListener(map, 'click', clearSelection);
        google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);
		google.maps.event.addListener(drawingManager, 'polylinecomplete', function(line) {
			var coordinates = line.getPath().getArray().toString();
			jQuery( '#zpa-boundary' ).val('POLYGON ('+ coordinates +')');
		});
		google.maps.event.addListener(drawingManager, 'rectanglecomplete', function(line) {
			// var coordinates = line.getPath().getArray().toString();
			// jQuery( '#zpa-boundary' ).val('POLYGON ('+ coordinates +')');
		});
		google.maps.event.addListener(drawingManager, 'circlecomplete', function(line) {
			// alert(line.getPath().getArray().toString());
		});
		google.maps.event.addListener(drawingManager, 'polygoncomplete', function(line) {
			var coordinates = line.getPath().getArray().toString();
			jQuery( '#zpa-boundary' ).val('POLYGON ('+ coordinates +')');
		});
		
        buildColorPalette();
      }
      // google.maps.event.addDomListener(window, 'load', initialize);
	  
	  jQuery(document).ready(function(){		
		
		jQuery( '#delete-button' ).on( 'click', function(){
			jQuery( '.gmnoprint > div:not(:last-child)' ).click();
			return false;
		});
	  });
    </script>
	
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