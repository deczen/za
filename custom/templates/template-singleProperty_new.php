<?php
global $requests, $single_property, $property_cache;
// global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;
		
if(!$single_property && $property_cache){
	$single_property=$property_cache;
}			

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
//get source details
$source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'' ), 'detail') : false;

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
	
	
if( sizeof($_GET)==$excParamCount ){
	$is_search_apply=0;
}else if(!empty($_GET)){
	$is_search_apply=1;
}else{
	$is_search_apply=0;
}

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<script type="text/javascript">jQuery(document).on("ready",function(){jQuery(".zpa-share-btn-print").on("click",function(){window.print()})});</script>
<?php
 // echo 'weq'.$single_property->proptype;
?>

<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	
	<div class="zpa-listing-detail">	
		
		<?php zipperagent_omnibar($requests); ?>
		
		<?php if( $is_search_apply ): ?>
		<div id="zipperagent-content"><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" /></div>
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
		jQuery('body').on('click', '.zy-listing__favorite-container:not(.favorited) .zy-listing__favorite-button:not(.needLogin)', function(e){
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
						jQuery('.zy-listing__favorite-container').addClass('favorited');
						
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
		jQuery(document).on('click', '.zy-listing-search__wrapper .dropdown-menu, #omnibar-wrap .dropdown-menu', function (e) {
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
				valueToPush = {"name":"action", "value":"properties_view"};
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
	<?php if($property_cache && !ZipperagentGlobalFunction()->is_facebook_bot()): ?>
	<script>
		jQuery(document).ready(function(){
			var data = {
				action: 'property_detail',
				listingId: '<?php echo zipperAgentUtility::getInstance()->getQueryVar("listingNumber"); ?>',                 
				searchId: '<?php echo $searchId; ?>',  
				actual_link: '<?php echo $actual_link; ?>',
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
	<script>
		jQuery(window).on('popstate', function(event) {
			window.location.reload();
		});
	</script>
	
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
	
	<?php // if(!zipperagent_signup_optional()): include "template-registerUser.php"; endif; ?>
</div>

<?php detailpage_visit_counter(); ?>

<?php auto_trigger_button_script(); ?>