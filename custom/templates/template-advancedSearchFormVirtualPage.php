<?php
global $requests;
$addressSearch=1;
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
                            <?php if($addressSearch): ?><li class=" "> <a id="zpa-address-tab" href="#zpa-search-address-tab" data-toggle="tab" data-zpa-search-tab="address"> Address </a> </li><?php endif; ?>
							<li class=" "> <a id="zpa-listingids-tab" href="#zpa-search-listingids-tab" data-toggle="tab" data-zpa-search-tab="listingids"> Listing Id </a> </li>
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
											<input id="zpa-area-input" class="zpa-area-input form-control" placeholder="Enter City / County / Zip"  name="location[]"/>
											<input class="zpa-area-input-hidden" name="" type="hidden">
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
							<?php if($addressSearch): ?>
							<div id="zpa-search-address-tab" class="tab-pane">
								<div>									
									 <div class="row mt-10">							
									
										 <div id="locationField" class="col-xs-12">
											<label for="zpa-area-address" class="field-label"> Address </label>
											<input type="text" id="zpa-area-address" class="zpa-area-address form-control" placeholder="Type address here" onFocus="geolocate()" name="address"/>
																																	
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
							<?php endif; ?>													
							<div id="zpa-search-listingids-tab" class="tab-pane">
								<div>									
									<div class="row mt-10">				
										<div class="col-xs-12">
											<label for="zpa-listingids" class="field-label"> Listing Id </label>
											<input id="zpa-listingids" class="zpa-area-input form-control" placeholder="Comma separted listing ids"  name="alstid"/>
										</div>
									</div>
								</div>
							</div>
							<div id="zpa-search-polygon-tab" class="tab-pane">
								<div id="map-fields" class="row mt-10">
									 <div class="col-xs-12 col-sm-4 mb-10">
										<label for="zpa-select-property-type" class="field-label zpa-select-property-type-label"> Property Type </label>
										<div class="zpa-property-type-message" style="display: none;"> <small> Some selected areas can be used only in residential property searches </small> </div>
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
													if(in_array($fieldCode, $propDefaultOption))
														$selected="selected";
													else
														$selected="";
													
													echo "<option $selected value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
												}										
											}
											?>
										</select>						
									</div>
									<div class="col-xs-12 col-sm-2 mb-10">
										<label for="zpa-minprice-homes" class="field-label zpa-minprice-label"> Min. Price </label>
										<div class="" style="position:relative;">
											<div class="zpa-label-overlay-money"> $ </div>
											<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value=""> </div>
									</div>
									<div class="col-xs-12 col-sm-2 mb-10">
										<label for="zpa-maxprice-homes" class="field-label zpa-maxprice-label"> Max. Price </label>
										<div class="" style="position:relative;">
											<div class="zpa-label-overlay-money"> $ </div>
											<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value=""> </div>
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
								
								<?php if(isset($requests['column'])): ?>
								<input type="hidden" name="column" value="<?php echo $requests['column']; ?>" />
								<?php endif; ?>
							</div>	
						</div>
					</div>
                </div>
				
				<div id="location-fields">
					<div class="row mt-25 filter">
						<div class="col-xs-12 col-sm-6 mb-10">
							<label for="zpa-select-property-type" class="field-label zpa-select-property-type-label"> Property Type </label>
							<div class="zpa-property-type-message" style="display: none;"> <small> Some selected areas can be used only in residential property searches </small> </div>
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
										if(in_array($fieldCode, $propDefaultOption))
											$selected="selected";
										else
											$selected="";
										
										echo "<option $selected value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
									}										
								}
								?>
							</select>
							<?php /* <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 100%;" title="" id="za_select_property_type_chosen"><a class="chosen-single" tabindex="-1"><span>Lots / Land</span><div><b></b></div></a>
								<div class="chosen-drop">
									<div class="chosen-search">
										<input type="text" autocomplete="off" readonly="">
									</div>
									<ul class="chosen-results"></ul>
								</div>
							</div> */ ?>						
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
									<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value=""> </div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<label for="zpa-maxprice-homes" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value=""> </div>
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
									<input id="zpa-minprice-lots-land" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4 mb-10">
								<label for="zpa-maxprice-lots-land" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-lots-land" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled"> </div>
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
									<input id="zpa-minprice-commercial" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-maxprice-commercial" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-commercial" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled"> </div>
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
									<input id="zpa-minprice-res-income" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled"> </div>
							</div>
							<div class="col-xs-12 col-sm-4 col-lg-4">
								<label for="zpa-maxprice-res-income" class="field-label zpa-maxprice-label"> Max. Price </label>
								<div class="" style="position:relative;">
									<div class="zpa-label-overlay-money"> $ </div>
									<input id="zpa-maxprice-res-income" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input" value="" disabled="disabled"> </div>
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
								<option value="alstid:ASC">Listing Number</option>
								<?php /* <option value="">Open Home Date Asc</option> */ ?>
							</select>
						</div>
						
						<div class="col-xs-12 col-sm-3">
							<label for="zpa-max-days-listed" class="field-label zpa-max-days-listed-label"> Waterfront Flag </label>
							<input id="zpa-max-days-listed" name="awtrf" placeholder="" type="text" class="form-control" value="">
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
					
					<div class="row mt-25 filter">
						<div class="col-xs-12 col-sm-3 mb-10">
							<label for="zpa-max-days-listed" class="field-label zpa-max-days-listed-label"> Pool Description </label>
							<input id="zpa-max-days-listed" name="apold" placeholder="" type="text" class="form-control" value="">
						</div>
						
						<div class="col-xs-12 col-sm-3">
							<label for="zpa-max-days-listed" class="field-label zpa-max-days-listed-label"> Lot Description </label>
							<input id="zpa-max-days-listed" name="altand" placeholder="" type="text" class="form-control" value="">
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
									<input id="zpa-open-homes-only" name="openHomesOnlyYn" type="checkbox" value="true"> Open Homes </label>
							</div>
							<div class="checkbox filter">
								<label class="field-label zpa-has-virtual-tour-label">
									<input id="zpa-has-virtual-tour" name="hasVirtualTour" type="checkbox" value="true"> Virtual Tour </label>
							</div>
							<div class="checkbox filter">
								<label class="field-label zpa-with-image-label">
									<input id="zpa-with-image" name="withImage" type="checkbox" value="true"> With Image </label>
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
        </form>
    </div>
	
	<?php global_magicsuggest_script(); ?>
	
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
		// Material Select Initialization
		jQuery(document).ready(function($) {
		  $('.multiselect').multiselect({
			// buttonWidth : '160px',
			includeSelectAllOption : true,
			nonSelectedText: 'Select',
			numberDisplayed: 1,
			buttonClass: 'form-control',
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
</div>