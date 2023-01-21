<?php
/**
 * GLOBAL VARIABLES
 * @ declare global variables
 */	   
global $requests, $is_ajax, $is_view_save_search, $actual_link;
global $o, $location, $address, $advStNo, $advStName, $advTownNm, $advStates, $advCounties, $advStZip, $boundaryWKT, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet,
	   $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $startTime, $endTime, $daysfromnow, $openHomesMode, $openHomesOnlyYn, $maxDaysListed, $featuredOnlyYn, $hasVirtualTour, $withImage, $dateRange, $year, $alagt, $aloff, $showPagination, $showResults, $crit;

$query_args=array();

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
	   
$variables = zipperagent_generate_list($requests, $is_ajax);

extract($variables);

// $enable_filter= $coords || $openHomesMode == "true" ? false : true;
$enable_filter= $openHomesMode == "true" ? false : true;
$top_search_enabled = ! $boundaryWKT && ! $openHomesMode;

/**
 * SAVE CRIT SESSION
 * @ save search criteria session for detail page
 */
if(!zp_using_criteria()){
	$saved_crit=$search;
	$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
	$_SESSION['criteriaBase64'] = $critBase64;	
	unset($saved_crit);
} 
/**
 * TEMPLATE PROCESS
 * @ populate properties and build the template
 */

if(!isset($list['dataCount']) && $list){ //property exists
	switch( $view ){
		case "map":
				ob_start();
				include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-map-index.php";
				// include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-map-index_new.php";
				$html = ob_get_clean();
			break;
		case "photo":
				ob_start();
				include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-photo-index.php";
				$html = ob_get_clean();
			break;
		case "gallery":
		default:
				ob_start();
				if( $is_shortcode ){
					include "template-shortcode-results.php";
				}else{
					
					include ZIPPERAGENTPATH . '/custom/templates/listing/template-defaultListing.php';
				}
				$html = ob_get_clean();
			break;
	}
}else{
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/listing/template-no-property.php";
	$html = ob_get_clean();
}
/**
 * SCRIPTS HANDLER
 * @ javascript
 */

switch( $view ){
	case "map":
	case "photo":
	case "gallery":
	default:
			ob_start();
			
			if( $enable_filter ):
			?>
			<script>
				<?php /*
				// jQuery(document).on('click', '#saveSearchButton:not(.needLogin)', function(){
				// jQuery('.zpa-listing-search-results').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
				// jQuery('#zipperagent-content').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){ */ ?>
				jQuery('.zy_filter-wrap').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
					var contactId=jQuery(this).attr('contactId');
					var isLogin=jQuery(this).attr('isLogin');
					<?php if($is_view_save_search): ?>
					update_search();
					<?php else: ?>
					save_search(contactId,isLogin);
					<?php endif; ?>
					return false;
				});	
				
				<?php if($is_view_save_search){ ?>
				function update_search(){
					var search = jQuery.parseJSON('<?php echo json_encode( $search ); ?>');
					var data = {
						action: 'update_search_result',
						'criteria': search,			
						'id': '<?php echo $searchId ?>',
					};
					
					console.time('update search');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
							// console.log(response);
							if( response['result'] ){
								var searchId = response['result'];
								jQuery('#saveSearchButton').hide();
								jQuery('#savedSearchButton').show();
								jQuery('.save-favorite-btn').attr( 'searchId', searchId );
								jQuery('.save-favorite-btn').attr( 'contactId', contactId );
								jQuery('.property_url').each(function(){
									var url = jQuery(this).attr( 'href' );
									
									if(searchId && searchId!==1)
										jQuery(this).attr( 'href', url + '?searchId=' + searchId );
									
									// jQuery(this).attr( 'href', url + '&searchId=' + searchId );
								});
							}else{
								alert( 'save failed!' );
							}
							
							console.timeEnd('update search');
						},
						error: function(){
							console.timeEnd('update search');
						}
					});
				}
				<?php }else{ ?>
				function save_search(contactId,isLogin){
					var vars = jQuery.parseJSON('<?php echo json_encode( $vars ); ?>');
					vars['contactId']=contactId;
					var data = {
						action: 'save_search_result',
						'vars': vars,  
						'isLogin': isLogin,  
					};
					
					console.time('save search');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {
							// console.log(response);
							if( response['result'] ){
								var searchId = response['result'];
								jQuery('#saveSearchButton').hide();
								jQuery('#savedSearchButton').show();
								jQuery('.save-favorite-btn').attr( 'searchId', searchId );
								jQuery('.save-favorite-btn').attr( 'contactId', contactId );
								jQuery('.property_url').each(function(){
									var url = jQuery(this).attr( 'href' );
									
									if(searchId && searchId!==1)
										jQuery(this).attr( 'href', url + '?searchId=' + searchId );
									
									// jQuery(this).attr( 'href', url + '&searchId=' + searchId );
								});
								
								//set topbar count
								jQuery('.save-search-count .za-count-num').html(response['saved_search_count']);
							}else{
								alert( 'save failed!' );
							}
							
							console.timeEnd('save search');
						},
						error: function(){
							console.timeEnd('save search');
						}
					});
				}
				<?php } ?>
			</script>
			<?php endif; ?>
			<script>
				jQuery('.zpa-listing-search-results').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
					
					var element = jQuery(this);
					
					if( element.hasClass('active') )
						return false;		
					
					var searchId = element.attr('searchId');
					var contactId = element.attr('contactId');
					var listingId = element.attr('listingId');
					var isLogin = element.attr('isLogin');
					
					save_favorite_listing(element, listingId, contactId, searchId, isLogin );
					
					return false;
				});
				
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
							
							$saved_crit= array_merge($search, $locqry, $advSearch);
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
			</script>
			<script>
				jQuery(document).on('click', '#zpa-main-container .dropdown-menu', function (e) {
				  e.stopPropagation();
				});
			</script>
			<?php if($is_ajax_count): ?>
			<script>
				jQuery(document).ready(function(){
					var vars={
						<?php 
						foreach($vars as $key=>$val){
							echo "$key: '$val',"."\r\n";
						}			
						?>
					};
					
					var data = {
						action: 'prop_result_and_pagination',
						'vars': vars,
						'pagenum': '<?php echo $page; ?>',
						'num': '<?php echo $num; ?>',
						'maxlist': '<?php echo $maxtotal; ?>',
						'actual_link': '<?php echo $actual_link; ?>',
					};
					
					console.time('generate list count/pagination');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
						
							if( response['result'] ){
								jQuery('.zpa-listing-search-results .prop-total').html(response['html_count']);
								jQuery('.zpa-listing-search-results .prop-pagination').html('<div class="col-xs-12">' + response['html_pagination'] + '</div>');
							}
							
							console.timeEnd('generate list count/pagination');
						},
						error: function(){
							console.timeEnd('generate list count/pagination');
						}
					});
				});
			</script>
			<?php endif; ?>
			<script>
				jQuery(document).ready(function ($) {
					// reference for main items
					var mainSlider=new Array();
					//transition time in ms
					var duration = 500;
					var index=0;
					
					index=0;
					$('.photo-carousel').each(function(){
						var slider = $(this);
						mainSlider.push(slider);
					});
					index=0;
					
					// carousel function for main slider
					index=0;
					$('.photo-carousel').each(function(){
						
						var tempMainSlider = mainSlider[index];
						
						// console.log('current index: '+index);
						tempMainSlider.owlCarousel({
							loop:false,
							nav:true,
							navText: ['<a class="slider-left"><span class="carousel-control"><i class="fa fa-2x fa-angle-left" role="none"></i></span></a>','<a class="slider-right"><span class="carousel-control"><i class="fa fa-2x fa-angle-right" role="none"></i></span></a>'],
							lazyLoad:true,
							items:1,
							dots: false,
							slideBy: 1,
						}).on('changed.owl.carousel', function (e) {
							//On change of main item to trigger thumbnail item
							
							//These two are navigation for main items
						})
						
						index++;
					});
				});
			</script>
			<?php auto_trigger_button_script(); ?>
			<?php
			$scripts = ob_get_clean();
		break;
}

echo $html;
echo $scripts;