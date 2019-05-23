<?php
global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;
?>
<div id="filter-wrap">
	
	<form id="zpa-search-filter-form" class="form-inline" action="" method="GET" target="_self" novalidate="novalidate">
		<fieldset>
			<div class="row mt-25 filter">
				<div class="col-xs-12 col-sm-7">
					<input id="zpa-area-input" class="zpa-area-input form-control" placeholder="Enter City / County / Zip"  name="location[]"/>
					<?php /* <input class="zpa-area-input-hidden" name="" type="hidden"> */ ?>
				</div>
				
				<div class="col-xs-12 col-sm-2"> 
					<select id="zpa-status-fields" name="status" class="form-control zpa-chosen-select-width">
						<option <?php selected( $status, 'none' ) ?> value="">status</option>                     
						<option <?php selected( $status, '' ) ?> value="">Active</option>                     
						<option <?php selected( $status, zipperagent_sold_status() ) ?> value="<?php echo zipperagent_sold_status(); ?>">Sold</option>
					</select>
				</div>
				<div class="col-xs-12 col-sm-3">
					<?php /*
					<select id="zpa-select-property-type" name="propertyType[]" class="form-control multiselect" multiple="multiple">
						<?php
						$propTypeFields = get_property_type();
						$propDefaultOption = !empty($requests['property_type_default']) ? explode(',',$requests['property_type_default']) : za_get_default_proptype();
					
						foreach( $propTypeFields as $fieldCode=>$fieldName ){
							// if(in_array($fieldCode, $propDefaultOption) || in_array($fieldCode, $propertyType))
								// $selected="selected";
							// else
								// $selected="";
							
							echo "<option $selected value='{$fieldCode}'>{$fieldName}</option>"."\r\n";									
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
			</div>
			<div class="row mt-25 zpa-home-search-fields filter">
				<div class="col-xs-6 col-sm-2">
					<div class="" style="position:relative;">
						<div class="zpa-label-overlay-money"> $ </div>
						<input id="zpa-minprice-homes" name="minListPrice" placeholder="Min. Price" type="text" class="form-control zpa-search-form-input" value="<?php echo $minListPrice ?>"> </div>
					<label class="error" for="zpa-minprice-homes" style="display:none;"></label>
				</div>
				<div class="col-xs-6 col-sm-2">
					<div class="" style="position:relative;">
						<div class="zpa-label-overlay-money"> $ </div>
						<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="Max. Price" type="text" class="form-control zpa-search-form-input" value="<?php echo $maxListPrice ?>"> </div>
					<label class="error" for="zpa-maxprice-homes" style="display:none;"></label>
				</div>
				<div class="col-xs-6 col-sm-2">
					<input id="zpa-sqft-homes" name="squareFeet" placeholder="Min. SqFt." type="text" class="form-control zpa-search-form-input" value="<?php echo $squareFeet ?>">
					<label class="error" for="zpa-sqft-homes" style="display:none;"></label>
				</div>
				<div class="col-xs-6 col-sm-2">
					<select id="zpa-select-bedrooms-homes" name="bedrooms" class="form-control zpa-chosen-select-width" style="display: none;">
						<option <?php selected( $bedrooms, '' ) ?> value="0">Beds</option>
						<option <?php selected( $bedrooms, '1' ) ?> value="1">1+</option>
						<option <?php selected( $bedrooms, '2' ) ?> value="2">2+</option>
						<option <?php selected( $bedrooms, '3' ) ?> value="3">3+</option>
						<option <?php selected( $bedrooms, '4' ) ?> value="4">4+</option>
						<option <?php selected( $bedrooms, '5' ) ?> value="5">5+</option>
					</select>
				</div>
				<div class="col-xs-6 col-sm-2">
					<select id="zpa-select-baths-homes" name="bathCount" class="form-control zpa-chosen-select-width" style="display: none;">
						<option <?php selected( $bathCount, '' ) ?> value="0">Baths</option>
						<option <?php selected( $bathCount, '1' ) ?> value="1">1+</option>
						<option <?php selected( $bathCount, '2' ) ?> value="2">2+</option>
						<option <?php selected( $bathCount, '3' ) ?> value="3">3+</option>
						<option <?php selected( $bathCount, '4' ) ?> value="4">4+</option>
						<option <?php selected( $bathCount, '5' ) ?> value="5">5+</option>
					</select>
				</div>
				<div class="col-xs-6 col-sm-2">
					<select id="zpa-select-order-by" name="o" class="form-control zpa-chosen-select-width" style="display: none;">
						<option <?php selected( $o, '' ) ?> value="">Sort by </option>
						<option <?php selected( $o, 'apmin:DESC' ) ?> value="apmin:DESC">Price (High to Low)</option>
						<option <?php selected( $o, 'apmin:ASC' ) ?> value="apmin:ASC">Price (Low to High)</option>
						<option <?php selected( $o, 'asts:ASC' ) ?> value="asts:ASC">Status</option>
						<option <?php selected( $o, 'atwns:ASC' ) ?> value="atwns:ASC">City</option>
						<option <?php selected( $o, 'lid:DESC' ) ?> value="lid:DESC">Listing Date</option>
						<option <?php selected( $o, 'apt:DESC' ) ?> value="apt:DESC">Type / Price Descending</option>
						<option <?php selected( $o, 'alstid:ASC' ) ?> value="alstid:ASC">Listing Number</option>
						<?php /* <option value="">Open Home Date Asc</option> */ ?>
					</select>
				</div>
			</div>
			<?php /*
			<div class="row mt-25">
				<div class="col-xs-8">
					
					<div class="checkbox filter">
						<label class="field-label zpa-featured-only-label"> <input id="zpa-open-homes-only" name="featuredOnlyYn" type="checkbox" value="true"> Featured </label>
					</div>
					
					<div class="checkbox">
						<label class="field-label zpa-open-homes-only-label">
							<input id="zpa-open-homes-only" name="openHomesOnlyYn" type="checkbox" value="true">
							<input type="hidden" name="_openHomesOnlyYn" value="on"> Open Houses </label>
					</div>
					<div class="clearfix"></div>
					<div class="checkbox">
						<label class="field-label zpa-date-range-label">
							<input id="zpa-date-range" name="dateRange" type="checkbox" value="7">
							<input type="hidden" name="_dateRange" value="on"> New (Within 7 Days) </label>
					</div>
				
				</div>
			</div>	*/ ?>
		</fieldset>
		
		<input type="hidden" name="action" value="properties_view" />
		<input type="hidden" name="view_type" value="<?php echo $type ?>" />
	</form>
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
</div>