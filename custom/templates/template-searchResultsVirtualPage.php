<?php
global $requests, $is_shortcode;
global $zpa_show_login_popup;

$excludes = get_short_excludes();
$requests=key_to_lowercase($requests); //convert all key to lowercase
$zpa_show_login_popup = 1;

$location 			= ( isset($requests['location'])?$requests['location']:'' );
$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
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
																<input type="text" id="minListPrice--ballerbox" class="at-minListPrice--ballerbox bt-off-canvas__price-range-input input-number" value="<?php echo $minListPrice; ?>" name="minListPrice" title="Please enter a Min Price">
																<div><span id="minListPrice--ballerboxHelper" class="uk-text-small uk-text-muted">Min Price</span></div>
															</div>
														</div>
														<div class="cell">
															<div>
																<input type="text" id="maxListPrice--ballerbox" class="at-maxListPrice--ballerbox bt-off-canvas__price-range-input input-number" value="<?php echo $maxListPrice; ?>" name="maxListPrice" title="Please enter a Max Price">
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
										
										<?php /*
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
										</div> */ ?>
										
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
																$checked='';
																if(is_array($propertyType) && in_array($fieldCode,$propertyType))
																	$checked='checked';
																
																echo "<li><label class='form__check' for='propertyType-{$propTypeNum}'><input type='checkbox' class='at-propertyType' value='{$fieldCode}' label='{$fieldName}' name='propertyType[]' id='propertyType-{$propTypeNum}' ". $checked ."><span>{$fieldName}</span></label></li>"."\r\n";
																$propTypeNum++;
																
																$excludePropTypeFields[]=$fieldCode;
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
										jQuery( "#minListPrice--ballerbox" ).val(addCommas(data.from));
										jQuery( "#maxListPrice--ballerbox" ).val(addCommas(data.to));
										
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
							
							<?php zipperagent_search_filter(); ?>
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
		
		jQuery('body').on('change', '#zpa-search-filter-form .btn-group input:not([type=checkbox]), #zpa-search-filter-form .btn-group select, #zpa-search-filter-form .btn-group textarea', function(e){
		// jQuery('#zpa-search-filter-form .btn-group input, #zpa-search-filter-form .btn-group select, #zpa-search-filter-form .btn-group textarea').on( 'change', function(){
			jQuery('#zpa-search-filter-form').submit();
			jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
		
			var field=jQuery(this);
			var value=field.val();
			var name=field.attr('name');	
			if(name.substr(name.length - 2)=='[]'){
				name=name.toLowerCase().substring(0, name.length-2)+'_'+value;
				onFilterChange( filterLabel(name,value), name); 
			}else{
				onFilterChange( filterLabel(name,value), name.toLowerCase()); //add field to filter
			}
		});
		
		jQuery('body').on('change', '#zpa-search-filter-form .btn-group input[type=checkbox]', function(){
			jQuery('#zpa-search-filter-form').submit();
			jQuery(this).closest(".dropdown").removeClass('open'); //close dropdown
			var field=jQuery(this);
			var value=field.val();
			var name=field.attr('name');	
			var label=field.attr('label');
			
			if(field.prop("checked") == false){
			   if(name.substr(name.length - 2)=='[]'){
					name=name.toLowerCase().substring(0, name.length-2)+'_'+value;
					removeFilterField(label, name);
				}else{
					removeFilterField(label, name);
				}	
			}else{	
				if(name.substr(name.length - 2)=='[]'){
					name=name.toLowerCase().substring(0, name.length-2)+'_'+value;
					onFilterChange( filterLabel(name,value), name); 
				}else{
					onFilterChange( filterLabel(name,value), name.toLowerCase()); //add field to filter
				}
			}
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