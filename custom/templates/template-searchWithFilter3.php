<?php
global $type, $requests;
global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;
global $zpa_show_login_popup;

$zpa_show_login_popup=1;

$requests=key_to_lowercase($requests); //convert all key to lowercase

$list = array();
$addressSearch = false;
$enable_filter  = false;

$location 			= ( isset($requests['location'])?$requests['location']:'' );
$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
$propSubType 		= ( isset($requests['propsubtype'])?(!is_array($requests['propsubtype'])?array($requests['propsubtype']):$requests['propsubtype']):array() );
$status 			= ( isset($requests['status'])?$requests['status']:'' );
$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:500 );
$maxListPrice		= ( isset($requests['maxlistprice'])?$requests['maxlistprice']:10000000 );
$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
$o 					= ( isset($requests['o'])?$requests['o']:'' );
$priceRange			= zipperagent_price_format( $minListPrice ) . ' - ' . zipperagent_price_format( $maxListPrice );

$excludes = get_short_excludes();

//set page
if(get_query_var('page')){	
	$requests['page'] = get_query_var('page');
}
?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;" data-zpa-client-id="">
	
	<?php if( in_array( $type, array( 'photo' ) ) ): ?>
		 
		<div class="zpa-container">
			<div class="zpa-listing-search-results">					
				<div class="container-fluid">				
					<div id="" class="row sticky-container" style="position:relative;">      
						<div id="small-property" class="col-lg-4 col-md-4 col-xs-12 bg-light ">
							<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />
						</div>
						<div class="col-lg-8 col-md-8 col-xs-12 ml-auto" id="photos">
						
							<div id="filter-wrap">							
								<form id="zpa-search-filter-form" class="form-inline" action="" method="GET" target="_self" novalidate="novalidate">
									<fieldset>
										<div class="row mt-25 filter field-wrap">
											<div class="col-xs-12 col-sm-6 field-input exception">
												<input id="zpa-area-input" class="zpa-area-input form-control" placeholder="<?php echo (empty($requests['location_option'])) ? "Enter City / County / Zip" : "Select Location"; ?>"  name="location[]"/>
												<?php /* <input class="zpa-area-input-hidden" name="" type="hidden"> */ ?>
											</div>	
											<div class="col-xs-6 col-sm-3 field-input"> 
												<select id="zpa-status-fields" name="status" class="form-control zpa-chosen-select-width">
													<option <?php selected( $status, 'none' ) ?> value="">status</option>                     
													<option <?php selected( $status, '' ) ?> value="">Active</option>                     
													<option <?php selected( $status, zipperagent_sold_status() ) ?> value="<?php echo zipperagent_sold_status(); ?>">Sold</option>
												</select>
											</div>											
											<div class="col-xs-6 col-sm-3 field-input">
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
													<button class="btn btn-default dropdown-toggle form-control" type="button" id="proptype-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Property Type <span class="caret"></span> </button>
													<ul class="dropdown-menu" aria-labelledby="proptype-dropdown">
														<?php
														$propTypeFields = get_property_type();
														$propTypeOption = !empty($requests['property_type_option']) ? explode( ',', $requests['property_type_option'] ) : array();
														
														//generate proptype options
														foreach( $propTypeFields as $fieldCode=>$fieldName ){
															// echo $propDefaultOption . " == " . $fieldCode. "<br>";
															if(in_array($fieldCode, $propertyType))
																$checked="checked";
															else if(in_array($fieldCode, $propSubType))
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
										
										<div class="row mt-25 zpa-home-search-fields filter field-wrap">											
											<div class="col-xs-6 col-sm-3 field-input">
												<input id="zpa-sqft-homes" name="squareFeet" placeholder="Min. SqFt." type="text" class="form-control zpa-search-form-input" value="<?php echo $squareFeet ?>">
											</div>
											<div class="col-xs-6 col-sm-3 field-input">
												<select id="zpa-select-bedrooms-homes" name="bedrooms" class="form-control zpa-chosen-select-width">
													<option <?php selected( $bedrooms, '' ) ?> value="0">Beds</option>
													<option <?php selected( $bedrooms, '1' ) ?> value="1">1+</option>
													<option <?php selected( $bedrooms, '2' ) ?> value="2">2+</option>
													<option <?php selected( $bedrooms, '3' ) ?> value="3">3+</option>
													<option <?php selected( $bedrooms, '4' ) ?> value="4">4+</option>
													<option <?php selected( $bedrooms, '5' ) ?> value="5">5+</option>
												</select>
											</div>
											<div class="col-xs-6 col-sm-3 field-input">
												<select id="zpa-select-baths-homes" name="bathCount" class="form-control zpa-chosen-select-width">
													<option <?php selected( $bathCount, '' ) ?> value="0">Baths</option>
													<option <?php selected( $bathCount, '1' ) ?> value="1">1+</option>
													<option <?php selected( $bathCount, '2' ) ?> value="2">2+</option>
													<option <?php selected( $bathCount, '3' ) ?> value="3">3+</option>
													<option <?php selected( $bathCount, '4' ) ?> value="4">4+</option>
													<option <?php selected( $bathCount, '5' ) ?> value="5">5+</option>
												</select>
											</div>
											<div class="col-xs-6 col-sm-3 field-input">
												<select id="zpa-select-order-by" name="o" class="form-control zpa-chosen-select-width">
													<option <?php selected( $o, '' ) ?> value="">Sort by </option>
													<option <?php selected( $o, 'apmin:DESC' ) ?> value="apmin:DESC">Price (High to Low)</option>
													<option <?php selected( $o, 'apmin:ASC' ) ?> value="apmin:ASC">Price (Low to High)</option>
													<option <?php selected( $o, 'asts:ASC' ) ?> value="asts:ASC">Status</option>
													<option <?php selected( $o, 'atwns:ASC' ) ?> value="atwns:ASC">City</option>
													<option <?php selected( $o, 'lid:DESC' ) ?> value="lid:DESC">Listing Date</option>
													<option <?php selected( $o, 'apt:DESC' ) ?> value="apt:DESC">Type / Price Descending</option>
													<?php /* <option <?php selected( $o, 'alstid:ASC' ) ?> value="alstid:ASC">Listing Number</option> */ ?>
													<?php /* <option value="">Open Home Date Asc</option> */ ?>
												</select>
											</div>
										</div>
										
										<div class="row field-wrap">	
											<div class="col-xs-12 mt-15 col-sm-12 field-input">
												<?php /* <div><label>Price Range:</label>&nbsp;<span id="price-amount-show"><?php echo $priceRange ?></span></div> */ ?>
												<div><label>Price Range:</label>&nbsp;
													$<input id="zpa-minprice-homes" class="input-number" name="minListPrice" type="text" value="<?php echo $minListPrice ?>"> 
													- 
													$<input id="zpa-maxprice-homes" class="input-number" name="maxListPrice" type="text" value="<?php echo $maxListPrice ?>"> 
												</div>
												<input type="hidden" id="price-slider-range" />
											</div>
										</div>												
									</fieldset>
									
									<?php /* <input id="zpa-minprice-homes" name="minListPrice" type="hidden" value="<?php echo $minListPrice ?>">
									<input id="zpa-maxprice-homes" name="maxListPrice" type="hidden" value="<?php echo $maxListPrice ?>"> */ ?>
									<input type="hidden" name="action" value="properties_view" />
									<input type="hidden" name="view_type" value="<?php echo $type ?>" />
									<?php
									if( isset($requests) && sizeof($requests) ){
										foreach( $requests as $key=>$val ){
											if( ! in_array(strtolower($key), $excludes) ){
												echo "<input type='hidden' name='{$key}' value='{$val}' />"."\r\n";
											}
										}
									}
									?>
								</form>
							</div>	
							
							<div id="zipperagent-content" class=""><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" /></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>				
			</div>

			<?php // include "template-registerUser.php"; ?>
			<?php // include ZIPPERAGENTPATH . '/custom/templates/template-needLogin.php'; ?>

		</div>		
	
	<?php endif;
	
   /**
	* SCRIPTS HANDLER
	* @ javascript
	*/
	?>
			
	<script>
		
		jQuery(document).ready(function(){
			
			var data = { 
				action: 'properties_view',
				<?php
				foreach( $requests as $var=>$val ){
					if( is_array( $val ) ){
						echo "'". strtolower($var) ."': ['". implode( "', '", $val ) ."'],"."\r\n";
					}else{					
						echo "'". strtolower($var) ."': '{$val}',"."\r\n";
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
						jQuery( '#small-property' ).html( response['sidebar'] );
						jQuery( '#zipperagent-content' ).html( response['html'] );
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
				jQuery( "#price-amount-show" ).html( "<?php echo zipperagent_currency() ?>" + addCommas(data.from) + " - <?php echo zipperagent_currency() ?>" + addCommas(data.to) );
				jQuery( "#zpa-minprice-homes" ).val(addCommas(data.from));
				jQuery( "#zpa-maxprice-homes" ).val(addCommas(data.to));
			},
			onFinish: function(data){
				setTimeout(function(){			
					jQuery('#zpa-search-filter-form').submit();
				}, 1000);	
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
	</script>
	
	<?php if(empty($requests['location_option'])): ?>
		<?php global_magicsuggest_script($location); ?>
	<?php else: ?>
		<?php global_magicsuggest_script($location, $requests); ?>
	<?php endif; ?>
	<script>
		jQuery(document).ready(function(){
			
			<?php if( !empty( $location ) || is_array( $location ) ): ?>
			var changeCount=0;
			jQuery(jQuery('#zpa-area-input').magicSuggest()).on(
			  'selectionchange', function(e, cb, s){
				 changeCount++; 
				 if(changeCount>0){
					jQuery('#zpa-search-filter-form').submit();
				 }
			  }
			);
			<?php else: ?>
			jQuery(jQuery('#zpa-area-input').magicSuggest()).on(
			  'selectionchange', function(e, cb, s){
				 jQuery('#zpa-search-filter-form').submit();
			  }
			);
			<?php endif; ?>
			
			jQuery('#zpa-search-filter-form .field-input:not(.exception) input, #zpa-search-filter-form .field-input select, #zpa-search-filter-form .field-input textarea').on( 'change', function(){
				jQuery('#zpa-search-filter-form').submit();
			});
			
			jQuery('#zpa-search-filter-form').on("submit", function(event) {
				var $form = jQuery(this); //wrap this in jQuery
				var data = jQuery(this).serialize();
				var request = jQuery(this).serializeArray();
				var url = $form.attr('action') + '?' + data;
				var loading = '<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />';
				var valueToPush={};
				valueToPush = {"name":"actual_link", "value":url};
				request.push(valueToPush);
				window.history.pushState("", "", url);
				
				jQuery( '#small-property' ).html( loading );
				jQuery( '#zipperagent-content' ).html( loading );
				
				console.time('generate list');
				jQuery.ajax({
					type: 'POST',
					dataType : 'json',
					url: zipperagent.ajaxurl,
					data: request,
					success: function( response ) {         
						if( response['html'] ){
							jQuery( '#small-property' ).html( response['sidebar'] );
							jQuery( '#zipperagent-content' ).html( response['html'] );
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
		jQuery(function(){ jQuery('.cq-dropdown').dropdownCheckboxes(); });
	</script> 
	<?php /*
	<script>
		// Material Select Initialization
		jQuery(document).ready(function($) {
		  $('.multiselect').multiselect({
			// buttonWidth : '160px',			
			includeSelectAllOption : true,
			nonSelectedText: 'Property Type',
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