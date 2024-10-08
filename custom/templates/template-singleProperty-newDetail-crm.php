<?php
global $requests, $single_property, $property_cache, $is_search_apply;
// global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;
		
if(!$single_property && $property_cache){
	$single_property=$property_cache;
}			

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
//get source details
// $source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'', 'property'=>$single_property ), 'detail') : false;
$source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'', 'property'=>$single_property ), 'detail_source') : false;
$source_disclaimer = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'', 'updatedate'=>isset($single_property->updatedate)?$single_property->updatedate:'', 'property'=>$single_property ), 'detail_disclaimer') : false;

$excludes = get_short_excludes();
$requests=key_to_lowercase($requests); //convert all key to lowercase

$location 			= ( isset($requests['location'])?$requests['location']:'' );
$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
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
	$criteriaBase64 = isset($_SESSION['criteriaBase64'])?$_SESSION['criteriaBase64']:'';
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
if(isset($_GET['groupname']))
	$excParamCount++;
if(isset($_GET['custom_proptype']))
	$excParamCount++;
if(isset($_GET['cid']))
	$excParamCount++;
	
	
if( sizeof($_GET)==$excParamCount ){
	$is_search_apply=0;
}else if(!empty($_GET)){
	$is_search_apply=1;
}else{
	$is_search_apply=0;
}

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$plugin_data = get_plugin_data( ABSPATH . "/wp-content/plugins/zipperagent/zipperagent.php", false, false );
?>
<script type="text/javascript">jQuery(document).on("ready",function(){jQuery(".zpa-share-btn-print").on("click",function(){window.print()})});</script>
<?php
 // echo 'weq'.$single_property->proptype;
?>
<script defer type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutil.min.js"></script>
<script defer type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js?ver=" . $plugin_data['Version']; ?>"></script>
<script src="https://unpkg.com/@googlemaps/markerclusterer@2.5.3/dist/index.min.js"></script>
<div id="zpa-main-container" class="zpa-container ">
	
	<div class="zpa-listing-detail">	
		
		<?php 
		$omnibar_params=$requests;
		$omnibar_params['direct']=1;
		zipperagent_omnibar($omnibar_params); ?>
		
		<?php if( $is_search_apply ): ?>
		<div id="zipperagent-content"><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" /></div>
		<?php else: 
		
		ob_start();
		
		include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-defaultDetail-crm.php';
		
		$property_detail=ob_get_clean();
		$property_detail = zipperagent_property_fields($single_property, $property_detail);	
		echo $property_detail;
		
		endif; ?>
	</div>
	
	<script>
		jQuery('.js-listing-map').on('click', function(){
			 window.location = "#map";
		});
	</script>
	<script>
		jQuery('body').on('click', '.zy_save-favorite:not(.needLogin):not(.favorited)', function(e){
			var contactId = jQuery(this).attr('contactid');
			var searchId = jQuery(this).attr('searchid');
			var isLogin = jQuery(this).attr('isLogin');
			var listingId = jQuery(this).attr('listingid');
			
			save_favorite( contactId, searchId, isLogin, listingId );			
		});
		jQuery('body').on('click', '.zy_save-property:not(.needLogin)', function(e){
			var contactId = jQuery(this).attr('contactid');
			var searchId = jQuery(this).attr('searchid');
			var listingId = jQuery(this).attr('listingid');
			
			save_property( contactId, searchId, listingId);			
		});
		
		
		function save_favorite(contactId, searchId, isLogin, listingId){
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
						jQuery('.zy_save-favorite').addClass('favorited');
						
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
				if(isset($crit) && !$crit){
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
				}else if(isset($crit)){
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
		
		function save_property(contactId, searchId, listingId){
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
						jQuery('.zy_save-property').find('.text').html('Saved');
						jQuery('.zy_save-property').prop("disabled",true);
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
	</script>
	<script>

		jQuery( 'body' ).on( 'submit', '#zpa-modal-contact-agent-form', function(){
			
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
						
						jQuery('#ask-a-question-form').html('<p class="submitted">Your request has been submitted successfully. Thank you!</p>');
						// jQuery('input[name=contactId]').val(contactId);
						// jQuery('.needLogin').attr('contactId', contactId);
						// jQuery('.needLogin').removeClass('needLogin');
						<?php
						$adwords_code = isset($rb['google']['adwords']['code'])?$rb['google']['adwords']['code']:'';	
						if($adwords_code){
							echo "if (typeof gtag !== 'undefined' && $.isFunction(gtag)) {";
							echo "	gtag('event', 'conversion', {'send_to': '{$adwords_code}'});"."\r\n";
							echo "}";
						}
						?>
					}else{
						alert( response['message'] );
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
		jQuery(document).on('click', '.zy-listing-search__wrapper .dropdown-menu, #omnibar-tools .dropdown-group > .dropdown > .dropdown-menu', function (e) {
		  e.stopPropagation();
		});
	</script>
	
	<script>
		jQuery(document).ready(function(){
			
			var xhr;
			
			jQuery('#zpa-search-filter-form').on("submit", function(event) {
				
				if(xhr && xhr.readyState != 4){
					xhr.abort();
				}
				
				var $form = jQuery(this); //wrap this in jQuery
				var data = jQuery(this).serialize();
				var request = jQuery(this).serializeArray();				
				var url = $form.attr('action') + '?' + data;
				var loading = '<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" />';
				var valueToPush={};
				valueToPush = {"name":"action", "value":"search_results_view"};
				request.push(valueToPush);
				valueToPush = {"name":"actual_link", "value":url};
				request.push(valueToPush);
				window.history.pushState("", "", url);
				
				jQuery( '#zipperagent-content' ).html( loading );
				
				console.time('generate list');
				xhr = jQuery.ajax({
					type: 'POST',
					dataType : 'json',
					url: zipperagent.ajaxurl,
					data: request,
					success: function( response ) {
						if( response['html'] ){
							jQuery( '#zipperagent-content' ).html( response['html'] );
							
							if (typeof enableSaveSearchButton === "function") {						
								enableSaveSearchButton();
							}
						}
						
						console.timeEnd('generate list');
					},
					error: function(){
						console.timeEnd('generate list');
					}
				});
				
				jQuery('#za_prop-navigation').hide();
				jQuery('#omnibar-tools').addClass('fixedheader');
				
				return false;
			});
		});
		
	</script>
	<?php if( $is_search_apply ): ?>
	<script>
	
		jQuery(document).ready(function(){
			
			var data = {
				action: 'search_results_view',
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
						
						if (typeof enableSaveSearchButton === "function") {						
							enableSaveSearchButton();
						}
					}
					
					console.timeEnd('generate list');
				},
				error: function(){
					console.timeEnd('generate list');
				}
			});
			
			jQuery('#za_prop-navigation').hide();
		});
	</script>
	<?php endif; ?>	
	<script>		
		jQuery(window).bind( 'scroll', function() {
			
			var $sticky = jQuery('#zy_header-section');
			var $top = 0;
			if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){ //Conall
				// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
				var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
					$top = $top + $headerHeight;
			}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
				var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
				var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
					$top = $top + $topheaderHeight + $headerHeight;
			}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
				var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
				var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
					$top = $top + $topheaderHeight + $headerHeight;
			}else{
				var $headerHeight = 0;
					$top = $top + $headerHeight;
			}
			if(jQuery('#wpadminbar').length){
				var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
					$top = $top + $wpadminbarHeight;
			}
			
			var $stickyH = $sticky.outerHeight();
			var $stickyContainer = jQuery('#zipperagent-content');
			var $stickyContainerOffset = $stickyContainer.offset();
			var $start = $stickyContainerOffset.top;
			var $limit = $start + $stickyContainer.outerHeight();
			var $padding = 0; // padding size;
			var $maxWidth = $stickyContainer.outerWidth() + $padding;
			
			if(jQuery(window).width() > 768){
			   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
				   $sticky.css({
					   'position':'fixed', 
					   'top': $top,
					   'width': '100%',
					   'max-width': $maxWidth,
					   'bottom':'auto',
				   });
				   $sticky.find('.zy_filter-wrap').css({
						'border-bottom': '1px solid #ddd',					   
						'padding-bottom': '10px'
				   });
				   $stickyContainer.find('.zy_main').css({
					   'padding-top': $stickyH
				   });
			   }
			   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
				   $sticky.css({
					   'position': 'absolute',
					   'top'     : 'auto',
					   'bottom'  : 0,
				   });
			   }
			   else {
					$sticky.css({
						'width' : 'calc(100% + 30px)',
						'position' : 'static',
						'max-width' : 'auto',
					});
					$sticky.find('.zy_filter-wrap').css({
						'border-bottom': 0,
						'padding-bottom': 0
					});
					$stickyContainer.find('.zy_main').css({
						'padding-top': 0
					});
					
					$maxWidth = $stickyContainer.outerWidth() + $padding;
			   }
			}
		});
	</script>
	<script>
		jQuery('document').ready(function(){
			jQuery(".go-to-form").click(function() {
				jQuery('html, body').animate({
					scrollTop: jQuery("#zpa-modal-contact-agent-form").offset().top - 300
				}, 1000);
			});
		});
	</script> 
</div>

<?php detailpage_visit_counter(); ?>

<?php auto_trigger_button_script(); ?>