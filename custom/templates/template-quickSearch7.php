<?php
global $requests;

$uniqid = uniqid();
$uniqueClass = 'form_'.$uniqid;
$uniqueClassWithDot = '.'.$uniqueClass;
$el = $uniqueClassWithDot;
$direct = isset($requests['direct'])&&$requests['direct']?$requests['direct']:0;

?><div id="zpa-main-container" class="zpa-container " style="display: inline;">
    <link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/dropdownCheckboxes.min.css'; ?>">
	<script src="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'js/dropdownCheckboxes.min.js'; ?>"></script>
	<div class="zpa-widget mb-25">
        <form id="searchFormMobile" class="form-inline zpa-quick-search-form omnibar <?php echo $uniqueClass; ?>" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET">
            <fieldset>
                <div class="row">
					<div class="form-content">
						<div id="zpa-search-location">
							<div class="row">
								<div class="col-xs-12 mb-15">
									<div class="input-area">
										<input id="zpa-all-input" class="zpa-area-input form-control" placeholder="<?php echo (empty($requests['location_option'])) ? "Enter City / County / Zip" : "Select Location"; ?>"  name="location[]"/>
										<input class="zpa-all-input-hidden" name="" type="hidden">
									</div>									
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 mb-15">
									<label for="zpa-select-property-type" class="field-label zpa-select-property-type-label"> Property Type </label>
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
								<div class="col-xs-6 col-sm-6 mb-15"> 
									<span id="zpa-lake-name-fields"> 
										<label for="zpa-lakename" class="field-label zpa-lakename-label"> Lake Name </label> 
										<input id="zpa-lake-input" class="form-control" placeholder="Type any Lake"  name="alkChnNm[]"/>
									</span> 
								</div>	
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 mb-15">
									<label for="zpa-minprice-homes" class="field-label zpa-minprice-label"> Min. Price </label>
									<div class="" style="position:relative;">
										<div class="zpa-label-overlay-money"> $ </div>
										<input id="zpa-minprice-homes" name="minListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['minlistprice']; ?>"> </div>
								</div>							
								<div class="col-xs-6 col-sm-6 mb-15">
									<label for="zpa-maxprice-homes" class="field-label zpa-maxprice-label"> Max. Price </label>
									<div class="" style="position:relative;">
										<div class="zpa-label-overlay-money"> $ </div>
										<input id="zpa-maxprice-homes" name="maxListPrice" placeholder="" type="text" class="form-control zpa-search-form-input input-number" value="<?php echo $requests['maxlistprice']; ?>"> </div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<button id="zpa-quicksearch-submit7" class="" type="submit"> Search </button>
								</div>
							</div>
						</div>						
					</div>
                </div>
            </fieldset>
			
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
	
	<?php echo global_new_omnibar_script_v2(0, $direct, $el); ?>
	<script>
		jQuery(function(){ jQuery('.cq-dropdown').dropdownCheckboxes(); });
	</script> 
	<script>
		jQuery('<?php echo $el; ?> #zpa-minprice-homes').on( 'change', function(){
			var maxvalue = jQuery('<?php echo $el; ?> #zpa-maxprice-homes').val();
			var minvalue = jQuery(this).val();
			var maxlistprice =  parseInt(maxvalue.replace(/,/g, ''));
			var minlistprice =  parseInt(minvalue.replace(/,/g, ''));
			
			if(minlistprice > maxlistprice && maxlistprice){
				jQuery(this).val(maxvalue);
				jQuery('<?php echo $el; ?> #zpa-maxprice-homes').val(minvalue);
			}
		});
		
		jQuery('<?php echo $el; ?> #zpa-maxprice-homes').on( 'change', function(){
			var maxvalue = jQuery(this).val();
			var minvalue = jQuery('<?php echo $el; ?> #zpa-minprice-homes').val();
			var maxlistprice =  parseInt(maxvalue.replace(/,/g, ''));
			var minlistprice =  parseInt(minvalue.replace(/,/g, ''));
			
			if(maxlistprice < minlistprice){
				jQuery(this).val(minvalue);
				jQuery('<?php echo $el; ?> #zpa-minprice-homes').val(maxvalue);
			}
		});
	</script>
	<script>
		jQuery(document).ready(function($){
			$('<?php echo $el; ?> .input-number').keyup(function(event) {

				// skip for arrow keys
				if(event.which >= 37 && event.which <= 40) return;

				// format number
				$(this).val(function(index, value) {
					return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
				});
			});
			
			$('<?php echo $el; ?> .input-number').val(function(index, value) {
				return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			});
		});
	</script>
</div>