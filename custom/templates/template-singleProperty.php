<?php
global $requests, $single_property, $property_cache;
// global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;
		
if(!$single_property && $property_cache){
	$single_property=$property_cache;
}			

$rb = zipperagent_rb();
//get source details
$source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'' ), 'detail') : false;

$excludes = get_short_excludes();
$requests=key_to_lowercase($requests); //convert all key to lowercase

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

// force array to object
$single_property = is_array( $single_property ) ? (object) $single_property : $single_property;

$afteraction = isset($_GET['afteraction'])?$_GET['afteraction']:'';
$searchId = isset($_GET['searchid'])?$_GET['searchid']:'';
if(zp_using_criteria()){	
	$criteriaBase64 = isset($_GET['criteria'])?$_GET['criteria']:'';
}else{
	$criteriaBase64 = $_SESSION['criteriaBase64'];	
}
$saved_crit = !empty($criteriaBase64)?unserialize(base64_decode($criteriaBase64)):array();
// echo '<pre>'; print_r($single_property); echo '</pre>';

$back_url = class_exists('zipperAgentStateManager') ? zipperAgentStateManager::getInstance()->getLastSearchUrl() : '';

//get agent
$agent=array();
// echo $single_property->listagent;
if( isset( $single_property->listagent ) || isset( $single_property->saleagent ) ){
	$mlsid = isset($single_property->saleagent) ? $single_property->saleagent : '';
	if($mlsid)
		$agent = zipperagent_get_agent($mlsid);
	
	if(!$agent){
		$mlsid = isset($single_property->listagent) ? $single_property->listagent : '';
		if($mlsid)
			$agent = zipperagent_get_agent($mlsid);
	}// $agent = zipperagent_get_agent("G0003031");
	// $agent = zipperagent_get_agent("BB981188");
}

// if( sizeof($_GET)<=3 && ( $searchId || $criteriaBase64|| $afteraction ) ){

$excParamCount=0;
if(isset($_GET['afteraction']))
	$excParamCount++;
if(isset($_GET['searchId']))
	$excParamCount++;
if(isset($_GET['criteria']))
	$excParamCount++;
if(isset($_GET['fbclid']))
	$excParamCount++;
if(isset($_GET['debug']))
	$excParamCount++;
if(isset($_GET['newsearchbar']))
	$excParamCount++;
	
	
if( sizeof($_GET)==$excParamCount ){
	$is_search_apply=0;
}else if(!empty($_GET)){
	$is_search_apply=1;
}else{
	$is_search_apply=0;
}
?>
<script type="text/javascript">jQuery(document).on("ready",function(){jQuery(".zpa-share-btn-print").on("click",function(){window.print()})});</script>
<?php
 // echo 'weq'.$single_property->proptype;
?>

<div id="zpa-main-container" class="zpa-container " style="display: inline;">

	<div class="zpa-listing-detail">
		<div class="bt-listing-search__wrapper js-filter-bar hideonprint" style="margin-bottom:0;">
			<div class="grid grid--gutters grid--center">
				<div class="cell">
					<div>
						<div class="bt-filter-bar">
							<form action="" id="zpa-search-filter-form" class="js-search">
								<div class="row btn-toolbar bt-filter-bar__components" role="toolbar" aria-label="Properties Search Toolbar">
									<div class="col-md-12 col-lg-6 input-group uk-flex-item-1 bt-search__query-wrapper">
										<div class="bt-search__query-inner">
											<?php /*
											<div class="bt-search-type__wrapper">
												<div class="bt-ccomp bt-ccomp__dropdown">
													<button class="bt-ccomp__trigger at-searchby-trigger" type="button">
														<!-- react-text: 23 -->Search By
														
														<svg class="bt-icon bt-icon--smaller">
															<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-arrow-down"></use>
														</svg>
													</button><span></span></div>
											</div> */ ?>
											<div class="cell bt-off-canvas__ballerbox-wrapper width-1-1">
												<?php /* <div class="bt-off-canvas__ballerbox-search-icon">
													<svg class="bt-icon bt-icon--larger">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-search"></use>
													</svg>
												</div> */ ?>
												<div class="bt-search__query-wrapper">
													<input type="text" id="zpa-area-input" class="zpa-area-input undefined autocomplete bt-search__query" placeholder="Enter City / County / Zip" name="location[]">
												</div>
												<?php /* 
												<div class="bt-off-canvas__ballerbox-nearby"><a class="bt-nearby-link at-nearby-button"><span><svg class="bt-icon bt-icon--larger"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-search-nearby"></use></svg></span></a></div> */ ?>
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
														<?php
															$propSubTypeFields = get_property_sub_type();
															$propTypeNum=0;
															foreach( $propSubTypeFields as $fieldCode=>$fieldName ){
																$checked='';
																if(is_array($propSubType) && in_array($fieldCode,$propSubType))
																	$checked='checked';
																
																echo "<li><label class='form__check' for='propSubType-{$propTypeNum}'><input type='checkbox' class='at-propSubType' value='{$fieldCode}' label='{$fieldName}' name='propSubType[]' id='propSubType-{$propTypeNum}' ". $checked ."><span>{$fieldName}</span></label></li>"."\r\n";
																$propTypeNum++;
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
										
										<?php /*
										<div class="bt-ccomp bt-ccomp__dropdown bt-ccomp--full-width">
											<button class="bt-filter__button bt-more__trigger btn-primary" type="button">
												<!-- react-text: 68 -->More
												
												<svg class="bt-icon bt-icon--smaller">
													<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-plus"></use>
												</svg>
											</button><span></span></div> */ ?>
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
							
							<?php zipperagent_search_filter(); ?>
						</div>
					</div>
					<?php /*
					<div class="bt-search-filter-area mt-15 js-search-filter-area">
						<div class="grid grid--gutters grid--noWrap grid--justifyBetween grid--center">
							<div class="cell pr-5 bt-save-search__wrapper">
								<div class="bt-search-tags__container">
									<ul class="bt-search-tags"></ul>
								</div>
								<!-- react-empty: 77 -->
							</div>
							<div id="results-set-interactions" class="cell pl-10 bt-view-options__wrapper"></div>
						</div>
					</div> */ ?>
				</div>
			</div>
		</div>
		<?php if( $is_search_apply ): ?>
		<div id="zipperagent-content"><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" /></div>
		<?php else: 
		
		if(in_array($single_property->status, explode(',',zipperagent_sold_status()))){
			echo '<style>.mortgage-calculator{display:none !important}</style>';
		}
		
		ob_start();
		
		include ZIPPERAGENTPATH . '/custom/templates/detail/template-defaultDetail.php';
		
		$property_detail=ob_get_clean();
		$property_detail = zipperagent_property_fields($single_property, $property_detail);	
		echo $property_detail;
		
		endif; ?>
	</div>
	
	<?php // include ZIPPERAGENTPATH . '/custom/templates/template-needLogin.php'; ?>
	<?php //include ZIPPERAGENTPATH . '/custom/templates/template-schedule-show.php'; ?>
	<?php //include ZIPPERAGENTPATH . '/custom/templates/template-requestInfo.php'; ?>
	
	<script>
		jQuery('.js-listing-map').on('click', function(){
			 window.location = "#map";
		});
	</script>
	
	<?php if( ! $is_search_apply ): ?>
		
		<?php if(isset($single_property->lat) && isset($single_property->lng)): ?>
		<script>
			jQuery(document).ready(function(){
				window.initMap=function(){
					
					var myLatLng = {lat: <?php echo $single_property->lat; ?>, lng: <?php echo $single_property->lng; ?>};

					var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 15,
					center: myLatLng,
					gestureHandling: 'greedy',
					});

					var marker = new google.maps.Marker({
					position: myLatLng,
					map: map,
					// title: 'Hello World!'
					});
				}
				
				if(jQuery('#map').length)
					initMap();
			});		  
		</script>
		<?php endif; ?>
	
	<?php endif; ?>
	<script>
		jQuery('body').on('click', '.bt-listing__favorite-container:not(.favorited) .bt-listing__favorite-button:not(.needLogin)', function(e){
			var contactId = jQuery(this).attr('contactid');
			var searchId = jQuery(this).attr('searchid');
			var isLogin = jQuery(this).attr('isLogin');
			
			save_favorite( contactId, searchId, isLogin );			
		});
		jQuery('body').on('click', '.save-property-btn:not(.needLogin)', function(e){
			var contactId = jQuery(this).attr('contactid');
			var searchId = jQuery(this).attr('searchid');
			save_property( contactId, searchId );			
		});
		
		function save_favorite(contactId, searchId, isLogin){
			var listingId = '<?php echo $single_property->id; ?>';
			var crit={
				<?php				
				foreach( $saved_crit as $key=>$val ){
					echo "'{$key}': '{$val}',"."\r\n";
				}
				?>
			};
			var data = {
				action: 'save_as_favorite',
				'listingId': listingId,                  
				'contactId': contactId,
				'crit': crit,				
				'searchId': searchId,
				'isLogin': isLogin,				
			};
			
			console.time('save favorite');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					// console.log(response);
					if( response['result'] ){
						// alert('success');
						jQuery('.bt-listing__favorite-container').addClass('favorited');
						
						//set topbar count
						jQuery('.favorites-count .za-count-num').html(response['favorites_count']);
					}else{
						// alert( 'Submit failed!' );
					}
					
					console.timeEnd('save favorite');
				},
				error: function(){
					console.timeEnd('save favorite');
				}
			});
		}
		function save_favorite_listing(element, listingId, contactId, searchId, isLogin){
			var crit={
				<?php
				$saved_crit=array();
				if(!$crit){
					$search=array(
						'asrc'=>$rb['web']['asrc'],
						'aloff'=>$rb['web']['aloff'],
						'abeds'=>$bedrooms,
						'abths'=>$bathCount,
						'apt'=>implode( ',', array_map("trim",$propertyType) ),
						'apts'=>implode( ',', array_map("trim",$propSubType) ),
						'asts'=>$status,
						'apmin'=>za_correct_money_format($minListPrice),
						'apmax'=>za_correct_money_format($maxListPrice),
						'aacr'=>$lotAcres,
					);	
					
					$saved_crit= $search;
				}else{
					$temp = explode(';', $crit);
					foreach( $temp as $val ){
						if( empty($val) )
							continue;
						
						$temp2 = explode(':', $val);
						$saved_crit[$temp2[0]]=$temp2[1];
					}
				}
				
				foreach( $saved_crit as $key=>$val ){
					echo "'{$key}': '{$val}',"."\r\n";
				}
				?>
			};
			var data = {
				action: 'save_as_favorite',
				'listingId': listingId,                  
				'contactId': contactId,                    
				'crit': crit,                    
				'searchId': searchId,
				'isLogin': isLogin,
			};
			
			console.time('save favorite');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					// console.log(response);
					if( response['result'] ){
						// alert('success');
						element.addClass('active');
						
						//set topbar count
						jQuery('.favorites-count .za-count-num').html(response['favorites_count']);
					}else{
						// alert( 'Submit failed!' );
					}
					
					console.timeEnd('save favorite');
				},
				error: function(){
					console.timeEnd('save favorite');
				}
			});
		}
		function save_property(contactId, searchId){
			var listingId = '<?php echo $single_property->id; ?>';
			var crit={
				<?php				
				foreach( $saved_crit as $key=>$val ){
					echo "'{$key}': '{$val}',"."\r\n";
				}
				?>
			};
			var data = {
				action: 'save_property',
				'listingId': listingId,                  
				'contactId': contactId,                    
				'crit': crit,                    
				'searchId': searchId,                    
			};
			
			console.time('save property');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					// console.log(response);
					if( response['result'] ){
						// alert('success');
						jQuery('.save-property-btn').find('.text').html('Saved');
						jQuery('.save-property-btn').prop("disabled",true);
					}else{
						// alert( 'Submit failed!' );
					}
					
					console.timeEnd('save property');
				},
				error: function(){
					console.timeEnd('save property');
				}
			});
		}		
		<?php /*
		function schedule_show(contactId, assignedTo, when, searchId){
			var listingId = '<?php echo $single_property->id; ?>';
			var data = {
				action: 'schedule_show',
				'listingId': listingId,                  
				'contactId': contactId,                    
				'assignedTo': assignedTo,                    
				'when': when,                     
				'searchId': searchId,                    
			};
			
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {    
					// console.log(response);
					if( response['result'] ){
						alert('Submitted');
						// jQuery('.save-listing-btn').addClass('disabled');
						// jQuery('.save-listing-btn .change').html('Saved');
					}else{
						// alert( 'Submit failed!' );
					}
				}
			});
		} */ ?>
	</script>
	<script>

		jQuery( '#zpa-modal-contact-agent-form' ).on( 'submit', function(){
			
			var data = jQuery(this).serialize();
			
			console.time('submit contact form');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					// console.log(response);
					if( response['result'] ){						
						var contactId=response['result'];					
						
						jQuery('#ask-a-question-form').html('<p class="submitted">Your data is submitted. Thank You.</p>');
						// jQuery('input[name=contactId]').val(contactId);
						// jQuery('.needLogin').attr('contactId', contactId);
						// jQuery('.needLogin').removeClass('needLogin');
						<?php
						$adwords_code = $rb['google']['adwords']['code'];	
						if($adwords_code){
							echo "if (typeof gtag !== 'undefined' && $.isFunction(gtag)) {";
							echo "	gtag('event', 'conversion', {'send_to': '{$adwords_code}'});"."\r\n";
							echo "}";
						}
						?>
					}else{
						alert( 'Submit failed!' );
					}
					
					console.timeEnd('submit contact form');
				},
				error: function(){
					console.timeEnd('submit contact form');
				}
			});
			
			return false;
		});
		
	</script>
	<script>
		jQuery(document).on('click', '.bt-listing-search__wrapper .dropdown-menu', function (e) {
		  e.stopPropagation();
		});
	</script>
	
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
				// jQuery(this).closest(".dropdown-toggle").dropdown("toggle"); //close dropdown
				// jQuery(this).closest(".dropdown-menu").toggle(100); //close dropdown
				
				jQuery('#zpa-search-filter-form').submit();
				// jQuery(this).closest(".dropdown-menu").dropdown("toggle"); //close dropdown
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
			// jQuery("#zpa-search-filter-form .dropdown .dropdown-toggle").click(function(){
				// e.stopPropagation();
				// jQuery(this).closest(".dropdown-menu").hide();
				// jQuery(this).parent().find(".dropdown-menu").toggle(100);
			// });
			
			jQuery('#zpa-search-filter-form').on("submit", function(event) {
				var $form = jQuery(this); //wrap this in jQuery
				var data = jQuery(this).serialize();
				var request = jQuery(this).serializeArray();				
				var url = $form.attr('action') + '?' + data;
				var loading = '<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />';
				var valueToPush={};
				valueToPush = {"name":"action", "value":"properties_view"};
				request.push(valueToPush);
				valueToPush = {"name":"actual_link", "value":url};
				request.push(valueToPush);
				window.history.pushState("", "", url);
				
				jQuery( '#zipperagent-content' ).html( loading );
				
				console.time('generate list');
				jQuery.ajax({
					type: 'POST',
					dataType : 'json',
					url: zipperagent.ajaxurl,
					data: request,
					success: function( response ) {
						if( response['html'] ){
							jQuery( '#zipperagent-content' ).html( response['html'] );
						}
						
						console.timeEnd('generate list');
					},
					error: function(){
						console.timeEnd('generate list');
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
	<?php if( $is_search_apply ): ?>
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
	<?php endif; ?>
	<?php if($property_cache): ?>
	<script>
		jQuery(document).ready(function(){
			var data = {
				action: 'property_detail',
				listingId: '<?php echo zipperAgentUtility::getInstance()->getQueryVar("listingNumber"); ?>',                 
				searchId: '<?php echo $searchId; ?>',                 
			};
			
			console.time('generate detail');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					if( response ){
						// jQuery( '#zipperagent-content' ).replaceWith( response['html'] );						
						jQuery( '#header-column' ).html( response['header_section'] );						
						jQuery( '#description-column' ).html( response['description_section'] );						
						jQuery( '#props-column' ).html( response['sidebar_section'] );
						jQuery( '#detail-column' ).html( response['bottom_section'] );
						jQuery( '#print-view-column' ).html( response['print_section'] );
						<?php if(isset($single_property->lat) && isset($single_property->lng)): ?>
						initMap();
						<?php endif; ?>
					}
					
					console.timeEnd('generate detail');
				},
				error: function(){
					console.timeEnd('generate detail');
				}
			});
		});
	</script>
	<?php endif; ?>
	
	<?php // if(!zipperagent_signup_optional()): include "template-registerUser.php"; endif; ?>
</div>

<?php detailpage_visit_counter(); ?>

<?php auto_trigger_button_script(); ?>