<?php
global $requests, $is_shortcode;
global $zpa_show_login_popup;

$excludes = get_short_excludes();
$requests=key_to_lowercase($requests); //convert all key to lowercase
$zpa_show_login_popup = 1;

$location 			= ( isset($requests['location'])?$requests['location']:'' );
$propertyType 		= ( isset($requests['propertytype'])?urldecode($requests['propertytype']):'none' );
$status 			= ( isset($requests['status'])?$requests['status']:'' );
$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:500 );
$maxListPrice		= ( isset($requests['maxlistprice']) && !empty($requests['maxlistprice']) ?$requests['maxlistprice']:10000000 );
$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
$o 					= ( isset($requests['o'])?$requests['o']:'' );

$boundaryWKT 		= ( isset($requests['boundarywkt'])?$requests['boundarywkt']:false );
$openHomesMode 		= ( isset($requests['openhomesmode'])?$requests['openhomesmode']:false );
// echo "<pre>"; print_r( $requests ); echo "</pre>";

//set page
if(get_query_var('page')){	
	$requests['page'] = get_query_var('page');
}

if(is_open_house_search_enabled()){
	$top_search_enabled = ! $boundaryWKT && ! $is_shortcode || ( isset($requests['search_form_enabled']) && $requests['search_form_enabled'] );
}else{
	$top_search_enabled = ! $boundaryWKT && ! $openHomesMode && ! $is_shortcode || ( isset($requests['search_form_enabled']) && $requests['search_form_enabled'] );
}

/**
 * SPECIAL CASE
 * @ only do this when user do search by listing id
 *
$alstid = ( isset($requests['alstid'])?$requests['alstid']:'' );
$is_singleid = strpos($alstid, ',') !== false ? explode(',', $alstid) : $alstid;
if(!empty($is_singleid) && !is_array($is_singleid)){
	$alstid = strpos($alstid, '-') !== false ? $alstid : $alstid . '-0';
	$property = get_single_property($alstid);
	$fulladdress = zipperagent_get_address($property);
	
	if(isset($property->id)){
		$propurl = zipperagent_property_url($property->id, $fulladdress);
		wp_safe_redirect($propurl);		
		die('redirect to: ' . $propurl);
	}
}
unset($alstid); */
?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">

	<div class="zpa-listing-detail">
	
		<?php if( $top_search_enabled ): ?>
		<div class="bt-listing-search__wrapper js-filter-bar">
			<div class="grid grid--gutters grid--center">
				<div class="cell">
					<div>
						<div class="bt-filter-bar">
							<form action="" id="zpa-search-filter-form" class="js-search">
								<div class="row btn-toolbar bt-filter-bar__components" role="toolbar" aria-label="Properties Search Toolbar">
									<div class="col-md-12 col-lg-6 input-group uk-flex-item-1 bt-search__query-wrapper">
										<div class="bt-search__query-inner">
											<div class="cell bt-off-canvas__ballerbox-wrapper width-1-1">
												<div class="bt-search__query-wrapper">
													<input type="text" id="zpa-area-input" class="zpa-area-input undefined autocomplete bt-search__query" placeholder="Enter City / County / Zip" name="location[]">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-lg-6 btn-group bt-search__options-wrapper" role="group" aria-label="Properties Search Filters">
										
										<div class="bt-ccomp bt-ccomp__dropdown dropdown">
											<button class="dropdown-toggle bt-ccomp__trigger at-price-trigger bt-filter__button js-search-price btn-primary" data-toggle="dropdown" type="button">
												<!-- react-text: 42 -->Price&nbsp;
												
												<i class="bt-icon bt-icon--smaller fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right bt-react-dropdown__content bt-dropdown--right">
												<div class="bt-ccomp__content__inner">
													<div class="grid grid--gutters grid-xs--halves">
														<div class="cell">
															<div>
																<input type="text" id="minListPrice--ballerbox" class="at-minListPrice--ballerbox bt-off-canvas__price-range-input" value="<?php echo $minListPrice; ?>" name="minListPrice" title="Please enter a Min Price">
																<div><span id="minListPrice--ballerboxHelper" class="uk-text-small uk-text-muted">Min Price</span></div>
															</div>
														</div>
														<div class="cell">
															<div>
																<input type="text" id="maxListPrice--ballerbox" class="at-maxListPrice--ballerbox bt-off-canvas__price-range-input" value="<?php echo $maxListPrice; ?>" name="maxListPrice" title="Please enter a Max Price">
																<div><span id="maxListPrice--ballerboxHelper" class="uk-text-small uk-text-muted">Max Price</span></div>
															</div>
														</div>
													</div>													
												</div>
											</div>
										</div>
										
										<div class="bt-ccomp bt-ccomp__dropdown dropdown">
											<button class="dropdown-toggle bt-ccomp__trigger at-type-menu-trigger bt-filter__button btn-primary" type="button" data-toggle="dropdown" >
												<!-- react-text: 48 -->Status
												
												<i class="bt-icon bt-icon--smaller fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right bt-react-dropdown__content bt-dropdown--right bt-dropdown--small">
												<div class="bt-ccomp__content__inner">
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
										
										<div class="bt-ccomp bt-ccomp__dropdown dropdown">
											<button class="dropdown-toggle bt-ccomp__trigger at-type-menu-trigger bt-filter__button btn-primary" type="button" data-toggle="dropdown" >
												<!-- react-text: 48 -->Type
												
												<i class="bt-icon bt-icon--smaller fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right bt-react-dropdown__content bt-dropdown--right bt-dropdown--small">
												<div class="bt-ccomp__content__inner">
													<ul class="uk-list uk-list-space m-0">
														<?php
															$propTypeFields = get_property_type();
															$propTypeNum=0;
															$excludePropTypeFields=array();
															foreach( $propTypeFields as $fieldCode=>$fieldName ){
																echo "<li><label class='form__check' for='propertyType-{$propTypeNum}'><input type='radio' class='at-propertyType' value='{$fieldCode}' name='propertyType' id='propertyType-{$propTypeNum}' ". checked( $propertyType, $fieldCode, false ) ."><span>{$fieldName}</span></label></li>"."\r\n";
																$propTypeNum++;
																
																$excludePropTypeFields[]=$fieldCode;
															}
														?>
														
														<?php														
														if( !empty($propertyType) && ! in_array( $propertyType, $excludePropTypeFields ) ){
															if( $propertyType=="none" )
																$propertyType=""; //avoid result zero
															echo '<input style="display:none" type="radio" value="'. $propertyType .'" name="propertyType" checked />';
														}														
														?>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="bt-ccomp bt-ccomp__dropdown dropdown">
											<button class="dropdown-toggle bt-ccomp__trigger at-minbeds-trigger bt-filter__button js-search-beds btn-primary" type="button" data-toggle="dropdown">
												<!-- react-text: 54 -->Beds
												
												<!-- react-text: 55 -->
												
												<i class="bt-icon bt-icon--smaller fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right bt-react-dropdown__content bt-dropdown--right bt-dropdown--small">
												<div class="bt-ccomp__content__inner">
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
										
										<div class="bt-ccomp bt-ccomp__dropdown dropdown">
											<button class="dropdown-toggle bt-ccomp__trigger at-minbaths-trigger bt-filter__button js-search-beds btn-primary" type="button" data-toggle="dropdown">
												<!-- react-text: 61 -->Baths
												
												<!-- react-text: 62 -->
												
												<i class="bt-icon bt-icon--smaller fa fa-angle-down" aria-hidden="true"></i>
											</button><div class="dropdown-menu dropdown-menu-right bt-react-dropdown__content bt-dropdown--right bt-dropdown--small">
												<div class="bt-ccomp__content__inner">
													<ul class="uk-list uk-list-space m-0">
														<li>
															<label class="form__check" for="bathCount-0">
																<input type="radio" class="at-bathCount" value="" name="bathCount" id="bathCount-0" <?php checked( $bathCount, '' ) ?>><span>Any</span></label>
														</li>
														<li>
															<label class="form__check" for="bathCount-1">
																<input type="radio" class="at-bathCount" value="1" name="bathCount" id="bathCount-1" <?php checked( $bathCount, '1' ) ?>><span>1+</span></label>
														</li>
														<li>
															<label class="form__check" for="bathCount-2">
																<input type="radio" class="at-bathCount" value="2" name="bathCount" id="bathCount-2" <?php checked( $bathCount, '2' ) ?>><span>2+</span></label>
														</li>
														<li>
															<label class="form__check" for="bathCount-3">
																<input type="radio" class="at-bathCount" value="3" name="bathCount" id="bathCount-3" <?php checked( $bathCount, '3' ) ?>><span>3+</span></label>
														</li>
														<li>
															<label class="form__check" for="bathCount-4">
																<input type="radio" class="at-bathCount" value="4" name="bathCount" id="bathCount-4" <?php checked( $bathCount, '4' ) ?>><span>4+</span></label>
														</li>
														<li>
															<label class="form__check" for="bathCount-5">
																<input type="radio" class="at-bathCount" value="5" name="bathCount" id="bathCount-5" <?php checked( $bathCount, '5' ) ?>><span>5+</span></label>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="bt-ccomp bt-ccomp__dropdown dropdown">
											<button class="dropdown-toggle bt-ccomp__trigger at-minbaths-trigger bt-filter__button js-search-beds btn-primary" type="button" data-toggle="dropdown">
												<!-- react-text: 61 -->Order By
												
												<!-- react-text: 62 -->
												
												<i class="bt-icon bt-icon--smaller fa fa-angle-down" aria-hidden="true"></i>
											</button><div class="dropdown-menu dropdown-menu-right bt-react-dropdown__content bt-dropdown--right bt-dropdown--small">
												<div class="bt-ccomp__content__inner">
																										
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
														<li>
															<label class="form__check" for="o-6">
																<input type="radio" class="at-o" value="alstid:ASC" name="o" id="o-6" <?php checked( $o, 'alstid:ASC' ) ?>><span>Listing Number</span></label>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
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
							
							<?php if( is_price_slider_enabled() ): ?>
							<div id="zpa-price-slider">
								<input type="hidden" id="price-slider-range" />
							</div>
							<script>
								var $range = jQuery("#price-slider-range");
								
								$range.ionRangeSlider({
									type: "double",
									grid: false,
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
									},
									onFinish: function(data){
										jQuery('#zpa-search-filter-form').submit();
									},
								});
							</script>
							<?php endif; ?>
							
							<div id="zpa-view-selected-filter">
								<input type="text" id="zpa-selected-filter">
								<script>
								jQuery(document).ready(function(){
									var msSelect = jQuery('#zpa-selected-filter').magicSuggest({
										allowFreeEntries: false,
										editable: false,
										hideTrigger: true,
										placeholder: '',
										maxSelection: 999,
										selectionRenderer: function(data){
											// console.log(data);
											return '<div class="name">' + data.name + '</div>';
										}
									});
									
									var currentSelection=[];
									
									jQuery(msSelect).on('selectionchange', function(e,m){
										
										var new_parameters;
										var newSelection = this.getValue();
										if(newSelection.length < currentSelection.length){ //remove mark
											var removedSelection = currentSelection.filter(function(obj) { return newSelection.indexOf(obj) == -1; });
											if(removedSelection.length){
												jQuery.each(removedSelection, function(index,value){
													switch(value) {
														case "status":															
														case "propertytype":															
														case "bedrooms":															
														case "bathcount":															
														case "o":															
															jQuery("#zpa-search-filter-form input[name*='"+value+"' i]").prop('checked', false);
															break;
														case "minlistprice":
														case "maxlistprice":
															jQuery("#zpa-search-filter-form input[name*='"+value+"' i]").val('');
															break;
														default:															
															jQuery("#zpa-search-filter-form input[name*='"+value+"' i]").remove();
													}
													new_parameters=removeUrlParameter(value);
													var url = jQuery('#zpa-search-filter-form').attr('action') + '?' + new_parameters;	
													window.history.pushState("", "", url);											
													
													jQuery('#zpa-search-filter-form').submit();
												});
											}
										}
										currentSelection = newSelection;		
										
									});
									
									function removeUrlParameter(parameter){
										/*
										 * queryParameters -> handles the query string parameters
										 * queryString -> the query string without the fist '?' character
										 * re -> the regular expression
										 * m -> holds the string matching the regular expression
										 */
										var queryParameters = {}, queryString = location.search.substring(1),
											re = /([^&=]+)=([^&]*)/g, m;

										// Creates a map with the query string parameters
										while (m = re.exec(queryString)) {
											queryParameters[decodeURIComponent(m[1]).toLowerCase()] = decodeURIComponent(m[2]);
										}

										// Add new parameters or update existing ones
										delete queryParameters[parameter];
										/*
										 * Replace the query portion of the URL.
										 * jQuery.param() -> create a serialized representation of an array or
										 *     object, suitable for use in a URL query string or Ajax request.
										 */
										return jQuery.param(queryParameters); // Causes page to reload
									}
									
									window.onFilterChange = function(label, name){
										
										if(label==''){
											return;
										}
										
										var value = {id:name, name: label};
										currentSelection.push(value);
										// removeFilterField(label, name);
										msSelect.setValue([value]);
										changeLabel(name, label);
									}
									
									function removeFilterField(label, name){
										var value = {id:name, name: label};
										msSelect.removeFromSelection([value]);
									}
									
									window.filterLabel = function(name, value){
										name = name.toLowerCase();
										var newLabel;
										var currency='<?php echo zipperagent_currency(); ?>';
										var vall;
										switch(name){
											case "maxlistprice":
												newLabel = 'up to '+ currency + shortenmoney(value) ;	
												break;
											case "minlistprice":
												newLabel = 'over '+ currency + shortenmoney(value) ;	
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
											case "propertytype":
												switch(value){
													<?php
														foreach($propTypeFields as $key => $val){
															
															echo "case '".$key."':"."\r\n";
															echo "newLabel = '".$val."';"."\r\n";
															echo "break;"."\r\n";
		
														}
													?>
												}
												break;
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
												newLabel = 'open homes only';	
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
											case "alstid":
												newLabel = 'mls# ' + value;	
												break;
											default:												
												newLabel = name.toLowerCase()+' '+value;
												break;
										}
										return newLabel;
									}
									
									function shortenmoney(num){
										if(num>=1000){
											return num/1000 + 'K';
										}else{
											return num;
										}
									}
									
									function changeLabel(name, newLabel){
										var index=0;
										jQuery('#zpa-selected-filter input[type=hidden]').each(function(){
											if(jQuery(this).val()==name){
												return false; 
											}
											index++;
										});
										
										var oldLabel = jQuery('#zpa-selected-filter .ms-sel-item:eq('+index+') .name').html();
										jQuery('#zpa-selected-filter .ms-sel-item .name:contains("'+oldLabel+'")').html(newLabel);
									}
									
									jQuery('#zpa-main-container').on('click', '#zpa-selected-filter .ms-sel-ctn .ms-sel-item', function(){
										jQuery(this).find('.ms-close-btn').click();
									});
									
									<?php /*
									function changeSelection(name, newLabel){
										var selection = msSelect.getSelection();
										var newSelection = [];
										var newValue;
										var i;
										var found=0;
										
										console.log(selection);
										for (i = 0; i < selection.length; ++i) {
											// do something with `selection[i]`
											if(selection[i].id==name){
												selection[i].name=newLabel;
												found=1;
											}
											
											newValue = {name:name, value: newLabel};
											newSelection.push(newValue);
										}
										if(!found){
											var value = {id:name, name: newLabel};
											newValue = {name:name, value: newLabel};
											selection.push(value);
											newSelection.push(newValue);
										}
										// console.log(selection);
										// selection = (object) selection;
										// console.log(newSelection);
										// msSelect.removeFromSelection(newSelection, true);
										// msSelect.setSelection([]);
										msSelect.clear();
										msSelect.setSelection(newSelection);
									}
									
									function populateFromArray(array) {
									  var output = {};
									  array.forEach(function(item, index) {
										if (!item) return;
										if (Array.isArray(item)) {
										  output[index] = populateFromArray(item);
										} else {
										  output[index] = item;
										}
									  });
									  return output;
									} */ ?>
									
									<?php																		
									$filterExcluded=get_filter_excludes();
									
									foreach($requests as $filterField=>$filterValue){
										if(!in_array($filterField, $filterExcluded) && !empty($filterValue) ){
											$label='';
											switch($filterField){
												case "propertytype":
														$label="$filterField $filterValue";
													break;
												default:
														$label="$filterField $filterValue";
													break;
											}
											
											// echo "onFilterChange('{$label}', '{$filterField}');"."\r\n";
											echo "onFilterChange(filterLabel('{$filterField}','{$filterValue}'), '{$filterField}');"."\r\n";
										}
									}
									?>
								});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php endif; ?>
	</div>
	
	<div id="zipperagent-content"><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" /></div>

</div>

<?php if( $top_search_enabled ): ?>
<?php global_magicsuggest_script($location); ?>
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
		
		jQuery('#zpa-search-filter-form .btn-group input, #zpa-search-filter-form .btn-group select, #zpa-search-filter-form .btn-group textarea').on( 'change', function(){
			jQuery('#zpa-search-filter-form').submit();
			jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
			
			var field=jQuery(this);
			var value=field.val();
			var name=field.attr('name');			
			onFilterChange( filterLabel(name,value), name.toLowerCase()); //add field to filter
		});
		
		jQuery('#zpa-search-filter-form').on("submit", function(event) {
			var $form = jQuery(this); //wrap this in jQuery
			var data = jQuery(this).serialize();
			var request = jQuery(this).serializeArray();
			var valueToPush={};
			valueToPush = {"name":"action", "value":"search_results_view"};
			request.push(valueToPush);
			var url = $form.attr('action') + '?' + data;
			var loading = '<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />';			
			valueToPush = {"name":"actual_link", "value":url};
			request.push(valueToPush);
			window.history.pushState("", "", url);
			
			jQuery( '#zipperagent-content' ).html( loading );
	 
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: request,
				success: function( response ) {         
					if( response['html'] ){
						jQuery( '#zipperagent-content' ).html( response['html'] );
					}
				}
			});
			
			return false;
		});
	});
	
</script>
<?php endif; ?>
<script>
	
	jQuery(document).ready(function(){
		
		var data = {
			action: 'search_results_view',
			<?php
			if( is_array($requests) && sizeof($requests) ){
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
			?>                  
		};
 
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {         
				if( response['html'] ){
					jQuery( '#zipperagent-content' ).html( response['html'] );
				}
			}
		});
	});
</script>