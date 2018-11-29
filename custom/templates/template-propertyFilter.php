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
					<select id="zpa-select-property-type" name="propertyType" class="form-control zpa-chosen-select-width">
						<?php
							$propTypeFields = get_property_type();
							foreach( $propTypeFields as $fieldCode=>$fieldName ){
								echo "<option ". selected( $propertyType, $fieldCode, false ) ." value='{$fieldCode}'>{$fieldName}</option>"."\r\n";
							}
						?>
					</select>						
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
							<input type="hidden" name="_openHomesOnlyYn" value="on"> Open Homes </label>
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
</div>	