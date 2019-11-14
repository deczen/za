<?php
global $requests, $is_shortcode;
global $zpa_show_login_popup;
global $is_view_save_search;

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

$is_direct	 		= ( isset($requests['direct'])?$requests['direct']:0 );
$enable_filter		= $boundaryWKT || $openHomesMode == "true" || $openHomesMode == 1 ? false : true;
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
	$property = ZipperagentGlobalFunction()->get_single_property($alstid);
	$fulladdress = zipperagent_get_address($property);
	
	if(isset($property->id)){
		$propurl = zipperagent_property_url($property->id, $fulladdress);
		wp_safe_redirect($propurl);		
		die('redirect to: ' . $propurl);
	}
}
unset($alstid); */
?>
<?php if(isset($requests['direct']) && $requests['direct']): ?>
<?php /* <script type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/date.format.js" ?>"></script> */ ?>
<script async type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutil.min.js"></script>
<script async type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js" ?>"></script>
<?php endif; ?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">

	<div class="zpa-listing-list">
	
		<?php if( $top_search_enabled ): ?>
		<?php zipperagent_omnibar($requests); ?>
		<?php else: ?>
			<form id="zpa-search-filter-form" action="" class="form-inline zpa-quick-search-form">
			<?php
				foreach($requests as $key=>$value){
					if(!in_array($key,get_wp_var_excludes())){
						zipperagent_generate_filter_input($key, $value);
					}
				}
			?>
			</form>
		<?php endif; ?>
	</div>
	
	<div id="zipperagent-content"><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" /></div>

</div>

<?php if( $top_search_enabled ): ?>
<script>
	jQuery(document).ready(function(){
		
		var xhr;
		
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
			
			var requests = zppr.get_form_inputs(jQuery('#zpa-search-filter-form'));
			var openHomesMode 		= ( requests.hasOwnProperty('openhomesmode')?requests['openhomesmode']:'' );
			var boundaryWKT 		= ( requests.hasOwnProperty('boundarywkt')?requests['boundarywkt']:'' );
			var searchDistance 		= ( requests.hasOwnProperty('searchdistance')?requests['searchdistance']:'' );
			var lat 				= ( requests.hasOwnProperty('lat')?requests['lat']:'' );
			var lng 				= ( requests.hasOwnProperty('lng')?requests['lng']:'' );
			
			var is_direct = <?php echo $is_direct; ?>;
			
			if(!is_direct || openHomesMode || boundaryWKT || searchDistance || lat && lng){
				if(xhr && xhr.readyState != 4){
					xhr.abort();
				}				
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
			}
			<?php if($is_direct): ?>
			else if(is_direct){
				var parm=[];
				var subdomain=zppr.data.root.web.subdomain;
				var customer_key=zppr.data.root.web.authorization.consumer_key;						
				var params = zppr.generate_api_params(requests);
				var ps=params.ps;
				var sidx=params.sidx;
				var crit = params.crit;
				console.log(crit);
				var order=params.o;
				var model=zppr.data.root.web.aloff?'aloff:'+zppr.data.root.web.aloff+';':""+order;
				var contactId=zppr.data.contactIds.join();
				var actual_link = window.location.origin+window.location.pathname+url;
				
				var args={
					searchType:0,
					subdomain:subdomain,
					customer_key:customer_key,
					crit:crit,
					model:model,
					sidx:sidx,
					ps:ps,
					contactId:contactId,
				};
				
				zppr.search('#zipperagent-content', 'list', requests, args, actual_link, 0);
			}
			<?php endif; ?>
			
			return false;
		});
	});
	
</script>
<?php endif; ?>
<script>
	
	jQuery(document).ready(function(){
		<?php
		$openHomesMode 		= ( isset($requests['openhomesmode'])?$requests['openhomesmode']:'' );
		$boundaryWKT 		= ( isset($requests['boundarywkt'])?$requests['boundarywkt']:'' );
		$searchDistance 	= ( isset($requests['searchdistance'])?$requests['searchdistance']:'' );
		$lat 				= ( isset($requests['lat'])?$requests['lat']:'' );
		$lng 				= ( isset($requests['lng'])?$requests['lng']:'' );

		?>
		var is_direct = <?php echo $is_direct; ?>;
		
		var openHomesMode	= '<?php echo $openHomesMode; ?>';
		var boundaryWKT 	= '<?php echo $boundaryWKT; ?>';
		var searchDistance 	= '<?php echo $searchDistance; ?>';
		var lat 			= '<?php echo $lat; ?>';
		var lng 			= '<?php echo $lng; ?>';
		
		if(!is_direct || openHomesMode || boundaryWKT || searchDistance || lat && lng){
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
		}
		<?php if($is_direct): ?>
		else if(is_direct){
			var parm=[];
			var subdomain=zppr.data.root.web.subdomain;
			var customer_key=zppr.data.root.web.authorization.consumer_key;		
			var requests = zppr.get_form_inputs(jQuery('#zpa-search-filter-form'));		
			var params = zppr.generate_api_params(requests);
			var ps=params.ps;
			var sidx=params.sidx;
			var crit = params.crit;
			console.log(crit);
			var order=params.o;
			var model=zppr.data.root.web.aloff?'aloff:'+zppr.data.root.web.aloff+';':""+order;
			var contactId=zppr.data.contactIds.join();
			var actual_link="<?php echo $actual_link; ?>";
			
			var args={
				searchType:0,
				subdomain:subdomain,
				customer_key:customer_key,
				crit:crit,
				model:model,
				sidx:sidx,
				ps:ps,
				contactId:contactId,
			};
			
			zppr.search('#zipperagent-content', 'list', requests, args, actual_link, 0);			
		}
		<?php endif; ?>
	});
</script>
<?php
/**
 * SCRIPTS HANDLER
 * @ javascript
 */
 
if( $top_search_enabled ):
// if( $enable_filter ):

?>
<script>
	// jQuery(document).on('click', '#saveSearchButton:not(.needLogin)', function(){
	// jQuery('.zpa-listing-search-results').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
	jQuery('#zipperagent-content').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
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
		var requests = zppr.get_form_inputs(jQuery('#zpa-search-filter-form'));		
		var params = zppr.generate_api_params(requests);
		var vars = params;
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
	jQuery('body').on('click', '.zpa-listing-search-results .save-favorite-btn:not(.needLogin)', function(){
		
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
		var requests = zppr.get_form_inputs(jQuery('#zpa-search-filter-form'));		
		var params = zppr.generate_api_params(requests);
		var crit = params.crit;
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
<?php auto_trigger_button_script(); ?>
<script>

	jQuery( 'body' ).on( 'click','.zpa-grid-result-photocount > a', function(){
		
		var listingId=jQuery(this).attr('listingId');
		
		if( ! jQuery('#modal-'+listingId+' .modal-body').is(':empty') )
			return;
		
		var data = {
			action: 'get_property_slides',
			'listingId': listingId,                      
			'contactId': zppr.data.contactIds.join(),                      
		};
		
		jQuery('#modal-'+listingId+' .modal-body').html('<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/tenor.gif"; ?>" />');
		
		console.time('generate slides');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['html'] ){
					jQuery('#modal-'+listingId+' .modal-body').html(response['html']);
				}
				console.timeEnd('generate slides');
			},
			error: function(){
				console.timeEnd('generate slides');
			}
		});
	});
	
</script>