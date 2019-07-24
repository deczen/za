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

	<div class="zpa-listing-list">
	
		<?php if( $top_search_enabled ): ?>
		<?php zipperagent_omnibar($requests); ?>
		<?php endif; ?>
	</div>
	
	<div id="zipperagent-content"><img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" /></div>

</div>

<?php if( $top_search_enabled ): ?>
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
			var valueToPush={};
			valueToPush = {"name":"action", "value":"search_results_view"};
			request.push(valueToPush);
			var url = $form.attr('action') + '?' + data;
			var loading = '<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />';			
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