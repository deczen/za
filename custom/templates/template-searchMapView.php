<?php

global $list, $maplist, $crit, $search, $searchId;
global $location, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet, $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $o;

$query_args=array();
$rb = zipperagent_rb();

$contactIds=get_contact_id();

//map zoom level
$zoom = isset($requests['map_zoom'])?$requests['map_zoom']:10; // default 10

if( $list ): ?>
<div id="map-content">
   <?php 
		$i=0;
		$wrapOpen=false;
		$column=2; //map view only has 2 columns
		foreach( $list as $option ): ?>
		<?php 				
		
		if( $open )
			$property=isset($option->mergedProperty)?$option->mergedProperty:null;
		else
			$property=$option;
		
		if( !isset($property->id) )
			continue;
		
		// echo "<pre>"; print_r( $property ); echo "</pre>";
		
		$fulladdress = zipperagent_get_address($property);
		
		$saved_crit=$search;
		$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
		if(!empty($searchId)){
			$query_args['searchId']= $searchId;
		}
		if(zp_using_criteria() && !empty($critBase64)){
			$query_args['criteria']= $critBase64;
		}
		if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
			$query_args['newsearchbar']= 1;
		}
		$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
		$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
		
		if($i % $column ==0 && ! $wrapOpen): ?>
		<div class="zpa-grid-wrap">
			<?php 
			$wrapOpen=true;
		endif; ?>
			<div class="zpa-grid-result col-lg-6 col-sm-6 col-md-12 col-xs-12" index="<?php echo $i ?>">
				<div class="zpa-grid-result-container well">
					<div class="row">
						<div class="col-xs-12">
							<div style="background-image: url('<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="zpa-results-grid-photo" >
								<img class="printonly" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>" />
								<a class="listing-<?php echo $property->id; ?> save-favorite-btn <?php echo zipperagent_is_favorite($property->id)?"active":""; ?>" isLogin="<?php echo getCurrentUserContactLogin() ? 1:0; ?>" listingId="<?php echo $property->id; ?>" searchId="" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true"></i></a>
								<a class="property_url" href="<?php echo $single_url ?>"></a>
								<a class="property_url" href="<?php echo $single_url ?>"><span class="zpa-for-sale-price"> <?php echo zipperagent_currency() . number_format_i18n( $price, 0 ); ?> </span> <?php //echo isset($property->forsale) && $property->forsale == "Y" ? "(For sale)" : '' ?></a>
							</div>
						</div>
					</div>
					<div class="za-container">
						<div class="row mt-10">
							<div class="col-xs-12">
								<a class="property_url" href="<?php echo $single_url ?>"> <span class="zpa-grid-result-address"> <img src="<?php echo ZIPPERAGENTURL . "images/map-marker.png" ?>" title="map marker" alt="map marker" /> <?php echo $fulladdress; ?> </span> </a>
							</div>
						</div>
						<?php /*
						<div class="row mt-10">
							<div class="col-xs-12">
								<span class="zpa-for-sale-price text-bold"> <?php echo zipperagent_currency() . number_format_i18n( $property->listprice, 0 ); ?> </span> <?php //echo isset($property->forsale) && $property->forsale == "Y" ? "(For sale)" : '' ?>
							</div>
						</div> */ ?>												
						<div class="row mt-10 property-infos">
							<?php
							$infoscount=0;
							?>
							<?php if( isset($property->nobedrooms ) && $property->nobedrooms > 0 ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->nobedrooms ) && $property->nobedrooms > 0 ): ?><div class="zpa-grid-result-basic-info-item1"> <b><?php echo $property->nobedrooms ?></b>
										beds </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>
							<?php if( isset($property->nobaths ) && $property->nobaths > 0 ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->nobaths ) && $property->nobaths > 0 ): ?><div class="zpa-grid-result-basic-info-item2"> <b><?php echo $property->nobaths ?> </b>
										baths </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>
							<?php if( isset($property->squarefeet ) && $property->squarefeet > 0 ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									<?php if( isset($property->squarefeet ) && $property->squarefeet > 0 ): ?><div class="zpa-grid-result-basic-info-item3"> <b> <?php echo number_format_i18n( $property->squarefeet, 0 ) ?> </b>
										sqft </div>
									<?php $infoscount++; ?>
									<?php else: ?>
										&nbsp;
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>	
							<?php if( !$infoscount ): ?>
							<div class="col-xs-4 nopaddingleft nopaddingright"> 
								<div class="zpa-grid-result-basic-info-container">
									&nbsp;
								</div>
							</div>
							<?php endif; ?>											
						</div>
						<div class="row mb-5 fs-12 mt-10">
							<div class="<?php echo $column==4 ? "col-xs-6" : "col-xs-8"; ?>">
								<div class="zpa-grid-result-additional-info">
									<div class="zpa-status <?php echo is_numeric($property->status)? 'status_'.$property->status : $property->status; ?>">
										<?php
											$status=isset($property->status)?$property->status:'';
											$converted_status = zipperagent_get_status_name($status);
										?>
										<span class="text-center d-block"><?php echo strtoupper($converted_status) ?></span>
									</div>
								</div>
							</div>
							<div class="<?php echo $column==4 ? "col-xs-6" : "col-xs-4"; ?>">
								<span class="zpa-on-site pull-right"> <?php if(isset($property->dayssincelisting)): ?><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo isset($property->dayssincelisting)?$property->dayssincelisting:'-'; ?> Day(s) <?php endif; ?> </span>
							</div>
						</div>
						<?php if( isset( $option->startDate ) && !empty( $option->startDate ) ){ ?>
							<?php
							$openHouse=$option;
							?>
							<div class="row mb-5 fs-12">
								<div class="col-xs-12 mt-10">
									<div class="zpa-grid-result-additional-info">
										<div class="zpa-listing-open-home-text-grid">
											<?php
											
											$mlstz = zipperagent_mls_timezone();
											$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
											$dt->setTimestamp($openHouse->startDate/1000); //adjust the object to correct timestamp
											$startDateOnly = $dt->format('Y-m-d');
											$startDate = $dt->format('M j, Y h:i A');
											$startTime =  $dt->format('h:i A');
											
											$duration = isset( $openHouse->duration ) && !empty( $openHouse->duration ) ? $openHouse->duration : 0;
											$printEndTime = '';
											
											if( $duration ){
												$dt->add(new DateInterval('PT' . $duration . 'M'));
												// $endTime = date( 'h:i A', strtotime("+{$duration} minutes", strtotime($startTime)) );
												$endTime = $dt->format('h:i A');
												$printEndTime = '- '.$endTime;
											}else if($openHouse->endDate){
												$dt->setTimestamp($openHouse->endDate/1000);
												$endDateOnly = $dt->format('Y-m-d');
												
												if($startDateOnly!=$endDateOnly){
													
													$endDate = $dt->format('M j, Y h:i A');
													$printEndTime = '- '.$endDate;
												}else{
													
													$endTime = $dt->format('h:i A');
													$printEndTime = '- '.$endTime;
												}
											}
											?>
											<span class="openHomeText"> Open House:</span> <?php echo $startDate ?> <?php echo $printEndTime; ?>
										</div>
									</div>
								</div>
							</div>
						<?php }else if(isset($property->openHouses) && sizeof($property->openHouses) && $openHomesOnlyYn){ ?>
							<?php
							$openHouse=$property->openHouses[0];
							?>
							<div class="row mb-5 fs-12">
								<div class="col-xs-12 mt-10">
									<div class="zpa-grid-result-additional-info">
										<div class="zpa-listing-open-home-text-grid">
											<?php
											
											$mlstz = zipperagent_mls_timezone();
											$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
											$dt->setTimestamp($openHouse->startDate/1000); //adjust the object to correct timestamp
											$startDateOnly = $dt->format('Y-m-d');
											$startDate = $dt->format('M j, Y h:i A');
											$startTime =  $dt->format('h:i A');
											
											$duration = isset( $openHouse->duration ) && !empty( $openHouse->duration ) ? $openHouse->duration : 0;
											$printEndTime = '';
											
											if( $duration ){
												$dt->add(new DateInterval('PT' . $duration . 'M'));
												// $endTime = date( 'h:i A', strtotime("+{$duration} minutes", strtotime($startTime)) );
												$endTime = $dt->format('h:i A');
												$printEndTime = '- '.$endTime;
											}else if($openHouse->endDate){
												$dt->setTimestamp($openHouse->endDate/1000);
												$endDateOnly = $dt->format('Y-m-d');
												
												if($startDateOnly!=$endDateOnly){
													
													$endDate = $dt->format('M j, Y h:i A');
													$printEndTime = '- '.$endDate;
												}else{
													
													$endTime = $dt->format('h:i A');
													$printEndTime = '- '.$endTime;
												}
											}
											?>
											<span class="openHomeText"> Open House:</span> <?php echo $startDate ?> <?php echo $printEndTime; ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php /*
						<div class="row mb-5 fs-12">
							<div class="col-xs-12 mt-10">
								<div class="zpa-grid-result-additional-info">
									<div class="listing-open-home-text">&nbsp;</div>
								</div>
							</div>
						</div> */ ?>
					</div>
					
					<div class="row">
						<div class="col-xs-12">
							<div class="property-divider">&nbsp;</div>
						</div>
					</div>
						
					<div class="za-container">	
						<div class="row">
							<div class="<?php echo $column==4 ? "col-xs-9" : "col-xs-10"; ?> pull-left fs-11 ">
								<div class="zpa-grid-result-mlsnum-proptype"><?php echo $property->displaySource; ?>#<?php echo $property->listno ?> | <?php echo zipperagent_property_type( $property->proptype ); ?> </div>
							</div>
							<div class="<?php echo $column==4 ? "col-xs-3" : "col-xs-2"; ?> pull-right fs-12 zpa-grid-result-photocount nopaddingleft">
								<?php if( isset($property->photoList) && sizeof($property->photoList) ): ?><a href="#" data-toggle="modal" data-target="#modal-<?php echo $property->id ?>" listingId="<?php echo $property->id ?>"> <i class="glyphicon glyphicon-camera"></i> </a> <span class="photo-count">(<?php echo isset($property->photoList)?sizeof($property->photoList):0; ?>)</span>
								<div id="modal-<?php echo $property->id ?>" class="modal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<div class="modal-title text-left"><?php echo $fulladdress; ?></div>
												<button type="button" class="close" data-dismiss="modal"> &#215; </button>
											</div>
											<div class="modal-body"></div>
											<div class="modal-footer">
												<button class="btn btn-link" data-dismiss="modal"> Close </button>
											</div>
										</div>
									</div>
								</div>
								<?php else: ?><i class="glyphicon glyphicon-camera"></i> <span class="photo-count">(<?php echo isset($property->photoList)?sizeof($property->photoList):0; ?>)</span><?php endif; ?>
							</div>
						</div>
						<?php /*
						<div class="row">
							<div class="col-xs-12 fs-11">
								<div class="zpa-grid-result-attribution"> &nbsp; </div>
							</div>
						</div> */ ?>
					</div>
					<div style="clear:both"></div>
				</div>
				<?php						
				$source_details = isset($property->sourceid) ? zipperagent_get_source_text($property->sourceid, array('listOfficeName'=>isset($property->listOfficeName)?$property->listOfficeName:'', 'listAgentName'=>isset($property->listAgentName)?$property->listAgentName:''), 'list') : false;
				?>
				<?php if($source_details): ?>
				<div class="property-source">
					<?php echo $source_details; ?>
				</div>
				<?php endif; ?>
				<div class="grid-margin"></div>
			</div>
		<?php if( ($i % $column) >= ($column-1) && $wrapOpen  //if one line has reach prop limit close the div
				  || ($i+1==sizeof($list) && $wrapOpen ) ): //if last prop reached close the div
			?> 
			<div class="clearfix"></div>
		</div>
			<?php
			$wrapOpen=false;
		endif; ?>
		<?php 
		$i++;
	endforeach; ?>
   
   
	<?php if( $showPagination ): ?>
	<div class="clearfix"></div>
		<?php if( ! $is_ajax_count ): ?>
		<div class="col-md-12 pagination-wrap prop-pagination">
			<div class="col-xs-12">			
				<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
			</div>
		</div>
		<!--col-->
		<?php else: ?>
		<div class="col-md-12 pagination-wrap prop-pagination"></div> <!-- show on ajax -->
		<?php endif; ?>
	<?php endif; ?>
	
	<?php
	$listing_disclaimer = zipperagent_get_listing_disclaimer();
	?>
	<?php if( $listing_disclaimer ): ?>
	<div class="row">
		<div class="col-xs-12">
			<span class="listing-disclaimer"><?php echo $listing_disclaimer ?></span>
		</div>
		<!--col-->
	</div>
	<?php endif; ?>
</div>
	
<?php
else: ?>
<div id="map-content" class="row">

	<div class="col-md-12">
		<div class="col-md-12 mb-10 mt-25">
			<span>No Properties Found </span>
		</div>
		<div class="col-md-12 pagination-wrap">
			<ul class="pagination">
				<li class="disabled"><a href="#">&laquo;</a>
				</li>
				<li class="disabled"><a href="#">1 of 0</a>
				</li>
				<li class="disabled"><a href="#">&raquo;</a>
				</li>
			</ul>
		</div>		
		<!--col-->
	</div>
	<!--row-->
</div>
<?php endif; ?>
<script>		
	jQuery(window).scroll(function() {
		
		var $sticky = jQuery('#map');
		var $mapWrapper = $sticky.find('#map_wrapper');
		var $top = 0;
		if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
			// var $headerHeight = jQuery('.edgtf-fixed-wrapper').outerHeight();
			var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
				$top = $top + $headerHeight;
				$mapWrapper.css('height',jQuery(window).outerHeight() - $headerHeight);
		}else{
			var $headerHeight = 0;
				$top = $top + $headerHeight;
				$mapWrapper.css('height',jQuery(window).outerHeight() - $headerHeight);
		}
		var $stickyH = $sticky.outerHeight();
		var $stickyContainer = jQuery('.sticky-container');
		var $stickyContainerOffset = $stickyContainer.offset();
		var $start = $stickyContainerOffset.top;
		var $limit = $start + $stickyContainer.outerHeight();
		var $padding = 15; // padding size;
		var $maxWidth = $sticky.find('#map_canvas').outerWidth() + $padding;
		
		if(jQuery(window).width() > 768){
		   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
			   $sticky.css({
			   'position':'fixed', 
			   'top': $top,
			   'max-width' : $maxWidth});
		   }
		   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
			   $sticky.css({
					   'position': 'absolute',
					   'top'     : 'auto',
					   'bottom'  : 0
				   });
		   }
		   else {
			   $sticky.css({
				'position' : 'static',
				'max-width' : '100%'});
			   $maxWidth = $sticky.find('#map_canvas').outerWidth() + $padding;
			   $mapWrapper.css('height',jQuery(window).outerHeight() - $headerHeight);
		   }
		}
	});
</script>
<script>

	jQuery( '.zpa-grid-result-photocount > a' ).on( 'click', function(){
		
		var listingId=jQuery(this).attr('listingId');
		
		if( ! jQuery('#modal-'+listingId+' .modal-body').is(':empty') )
			return;
		
		var data = {
			action: 'get_property_slides',
			'listingId': listingId,                      
			'contactId': '<?php echo implode(',',$contactIds) ?>',                      
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
<script>
	jQuery('.zpa-listing-search-results').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
		
		var element = jQuery(this);
		
		if( element.hasClass('active') )
			return false;		
		
		var searchId = element.attr('searchId');
		var contactId = element.attr('contactId');
		var listingId = element.attr('listingId');
		var isLogin = element.attr('isLogin');
		
		save_favorite_listing(element, listingId, contactId, searchId, isLogin, isLogin );	
		
		return false;
	});
	
	function save_favorite_listing(element, listingId, contactId, searchId, isLogin){
		var crit={
			<?php
			$saved_crit=array();
			if(!$crit){
				$saved_crit=$search;
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
	<?php /*
	jQuery(function($) {
	// Asynchronously Load the map API 
	var script = document.createElement('script');
	// script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyDuQ5zA1N7-IcAJnbMm_QoZLCNmRhFilNw&sensor=false&callback=initialize";
	<?php
	if( function_exists( 'conall_edge_options' ) )
		$conall_google_api_key = conall_edge_options()->getOptionValue('google_maps_api_key');
	?>
	script.src = "//maps.googleapis.com/maps/api/js?key=<?php echo $conall_google_api_key ?>&sensor=false&callback=initialize";
	document.body.appendChild(script);
	}); */ ?>



	jQuery(document).ready(function(){ 

	var map;
	var saved_markers=new Array();
	var infoWindow = new google.maps.InfoWindow({
		disableAutoPan: true,
	});
	var infoWindowContent = [];

	function initialize() {
		var bounds = new google.maps.LatLngBounds();
		var mapOptions = {
			mapTypeId: 'roadmap',
			gestureHandling: 'greedy',
		};
						
		// Display a map on the page
		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		map.setTilt(45);
			
		// Multiple Markers
		var markers = [
		<?php
			$index=0;
			foreach( $maplist as $option ){			
									
				if( $open )
					$property=isset($option->mergedProperty)?$option->mergedProperty:null;
				else
					$property=$option;

				if( !isset($property->id) )
					continue;
				
				if( !isset($property->lat) || empty($property->lat) || !isset($property->lng) || empty($property->lng) )
					continue;
				
				$fulladdress = zipperagent_get_address($property);
				$lat = $property->lat;
				$lng = $property->lng;
				$listingId = $property->id;
				$beds = isset($property->nobedrooms)?$property->nobedrooms:'-';
				$bath = isset($property->nobaths)?$property->nobaths:'-';
				$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
				$longprice = zipperagent_currency() . number_format_i18n( $price, 0 );
				$shortprice = zipperagent_currency() . number_format_short( $price, 0 );
				$proptype = $property->proptype;
				
				
				echo "['". str_replace( "'", "\'", $fulladdress ) ."', {$lat},{$lng},'{$listingId}','{$longprice}','{$shortprice}','{$beds}','{$bath}',{$index},'{$proptype}'],"."\r\n";
				
				$index++;
			}
		?>
		];
							
		// Info Window Content
		infoWindowContent = [
			<?php
			 foreach( $maplist as $option ){			
									
				if( $open )
					$property=isset($option->mergedProperty)?$option->mergedProperty:null;
				else
					$property=$option;
				
				if( !isset($property->id) )
					continue;
				
				if( !isset($property->lat) || empty($property->lat) || !isset($property->lng) || empty($property->lng) )
					continue;
				
				$fulladdress = zipperagent_get_address($property);
				$lat = $property->lat;
				$lng = $property->lng;
				$beds = isset($property->nobedrooms)?$property->nobedrooms:'-';
				$bath = isset($property->nobaths)?$property->nobaths:'-';
				$sqft = isset($property->squarefeet)?$property->squarefeet:'-';
				$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
				$price = zipperagent_currency() . number_format_i18n( $price, 0 );
				if( strpos($property->photoList[0]->imgurl, 'mlspin.com') !== false )
					$src = "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=100&h=100&n=0";
				else
					$src = str_replace('http://','//',$property->photoList[0]->imgurl);
				
				$saved_crit=$search;
				$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
				if(!empty($searchId)){
					$query_args['searchId']= $searchId;
				}
				if(zp_using_criteria() && !empty($critBase64)){
					$query_args['criteria']= $critBase64;
				}
				if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
					$query_args['newsearchbar']= 1;
				}
				$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
				$is_login=getCurrentUserContactLogin() ? 1:0;
				$is_active=zipperagent_is_favorite($property->id)?"active":"";
				$searchId='';
				$str_contactIds=implode(',',$contactIds);
				
				echo "['<div class=\"info_content\">' +
						'<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"{$src}\" /></div>' +
						'<div class=\"content\">' +				
							'<a href=\"{$single_url}\"><strong>". str_replace( "'", "\'", $fulladdress )  ."</strong></a>' +
							'<p class=\"price\">{$price}</p>' +
							'<p class=\"favorite\"><a class=\"listing-{$property->id} save-favorite-btn {$is_active}\" isLogin=\"{$is_login}\" listingId=\"{$property->id}\" searchId=\"{$searchId}\" contactId=\"{$str_contactIds}\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Favorite</a></p>' +
							'<p class=\"info\">{$beds} BEDS | {$bath} BATH | {$sqft} SQFT</p>' +
						'</div>' +
					'</div>'],"."\r\n";
			}
			?>
		];
			
		// Display multiple markers on a map		
		var marker, i;
		
		// Loop through our array of markers & place each one on the map  
		for( i = 0; i < markers.length; i++ ) {
			
			//marker
			var icon1 = "<?php echo ZIPPERAGENTURL . "images/marker.png"; ?>";
			var icon2 = "<?php echo ZIPPERAGENTURL . "images/marker-hover.png"; ?>";
			
			var position = new google.maps.LatLng(markers[i][1], markers[i][2]);		
			
			bounds.extend(position);
			
			<?php /*
			marker = new google.maps.Marker({
				position: position,
				map: map,			
				icon: icon1,
				title: markers[i][0]
			}); */ ?>
			
			marker = new CustomMarker(
				position, 
				map,
				{
					marker_id: markers[i][3],
					price: markers[i][4],
					shortprice: markers[i][5],
					bedrooms: markers[i][6],
					bath: markers[i][7],
					index: markers[i][8],
					proptype: markers[i][9],
				}
			);
			
			saved_markers.push(marker);
			
			<?php /*
			// Allow each marker to have an info window    
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infoWindow.setContent(infoWindowContent[i][0]);
					infoWindow.open(map, marker);
				}
			})(marker, i));

			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
				return function() {
					marker.setIcon(icon2);
				}
			})(marker, i));
			
			google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
				return function() {
					marker.setIcon(icon1);
				}
			})(marker, i)); */ ?>
			
			// Automatically center the map fitting all markers on the screen
			map.fitBounds(bounds);        
		}
		
		<?php /* //not works
		//fit all markers
		// var latlngbounds = new google.maps.LatLngBounds();
		// for (var i = 0; i < markers.length; i++) {
			// latlngbounds.extend(markers[i]);
		// }
		// map.fitBounds(latlngbounds); */ ?>
		
		// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
		var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
			this.setZoom(<?php echo $zoom; ?>);
			google.maps.event.removeListener(boundsListener);
		});
		
		//map clustering
		var markerCluster = new MarkerClusterer(map, saved_markers,
		{imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
		
		<?php		
		//map highlight
		ob_start();
		include ZIPPERAGENTPATH . '/custom/options.php';
		$jsonData=ob_get_clean();				
		$data = json_decode($jsonData);
		$boundaryWKT=isset($requests['boundarywkt'])?$requests['boundarywkt']:'';
		if($boundaryWKT){
			preg_match( '/POLYGON \(\((.*?)\)\)/', urldecode($boundaryWKT), $match );
			$coor_string = isset($match[1])?'('.$match[1].')':'';
			preg_match_all( "/\(([^)]+)\)/", $coor_string, $match );
			// $polygons = array_map('trim', explode( ',', $match[1] ));
			$polygons = $match[1];
			$added_polygons=array();
			foreach( $polygons as $index=>&$polygon ){
				$polygon= str_replace(' ','',$polygon);
				$temp = explode(',',$polygon);
				
				// $polygon= str_replace(', ',':',$polygon); 
				$polygon = array(
					'lat'=> $temp[0],
					'lng'=> $temp[1],
				);
				$added_polygons[]=$polygon;
			}
			$added_polygons[]=$added_polygons[0];
			if($added_polygons):
			?>
			
			// Define the LatLng coordinates for the polygon's path.
			var areaCoords = [
			<?php
			  foreach($added_polygons as $coordinate){
					echo '{lat: '. $coordinate['lat'] .', lng: '. $coordinate['lng']. '},'."\r\n";
			  } ?>
			];

			// Construct the polygon.
			var highlight_area = new google.maps.Polygon({
			  paths: areaCoords,
			  strokeColor: '#FF0000',
			  strokeOpacity: 0.8,
			  strokeWeight: 2,
			  fillColor: '#FF0000',
			  fillOpacity: 0.35
			});
			highlight_area.setMap(map); 
			<?php 
			endif; 
		}
		
		
		$codes=$requests['location'];
		if(is_array($codes)){			
			$search=array();
			foreach($data as $area){
				if(in_array($area->code,$codes)){
					$search[]=$area->name;
				}
			}					
			
			$i=1;
			// echo "search: ";
			// print_r($search);
			foreach($search as $search_query){	
				$coordinates=array();
				$areas = get_map_coordinate($search_query);
				// echo "<pre>"; print_r($areas); echo "</pre>";
				if(isset($areas[0]->geojson->coordinates[0])){
					foreach($areas[0]->geojson->coordinates[0] as $coordinate){
						if(isset($$coordinate[0]) && $coordinate[0] && isset($$coordinate[1]) && $coordinate[1]){
							$coordinates[]=array(
								'lat'=> $coordinate[1],
								'lng'=> $coordinate[0],
							);
						}
					}
				}
				
				if($coordinates):
				?>
				
				// Define the LatLng coordinates for the polygon's path.
				var areaCoords_<?php echo $i; ?> = [
				<?php
				  foreach($coordinates as $coordinate){
						echo '{lat: '. $coordinate['lat'] .', lng: '. $coordinate['lng']. '},'."\r\n";
				  } ?>
				];

				// Construct the polygon.
				var highlight_area_<?php echo $i; ?> = new google.maps.Polygon({
				  paths: areaCoords_<?php echo $i; ?>,
				  strokeColor: '#FF0000',
				  strokeOpacity: 0.8,
				  strokeWeight: 2,
				  fillColor: '#FF0000',
				  fillOpacity: 0.35
				});
				highlight_area_<?php echo $i; ?>.setMap(map); 
				<?php 
				endif; 
				$i++;
			}
		}
		?>
	}
	
	function CustomMarker(latlng, map, args) {
		this.latlng = latlng;	
		this.args = args;	
		this.setMap(map);	
	}

	CustomMarker.prototype = new google.maps.OverlayView();

	CustomMarker.prototype.draw = function() {
		
		var self = this;
		
		var div = this.div;
		
		var price = this.args.price;
		var shortprice = this.args.shortprice;
		var bedrooms = this.args.bedrooms;
		var bath = this.args.bath;
		var index = this.args.index;
		var proptype = this.args.proptype;
		
		if (!div) {
		
			div = this.div = document.createElement('div');
			
			div.className = 'zpa-marker';
			
			div.style.position = 'absolute';
			div.style.cursor = 'pointer';
			// div.style.width = '100px';
			// div.style.height = '20px';
			div.style.background = 'white';
			div.setAttribute("index", index)
			
			if (typeof(self.args.marker_id) !== 'undefined') {
				div.dataset.marker_id = self.args.marker_id;
			}
			
			<?php /*
			div.innerHTML = "<div class=\"short-info\"><span class=\"price\">"+ price +"</span>&nbsp;|&nbsp;<span class=\"beds\">Beds&nbsp;"+ bedrooms +"</span>&nbsp;|&nbsp;<span class=\"bath\">Baths&nbsp;"+ bath +"</span></div>" +
							"<span class=\"short-price\">"+ shortprice +"</span>"; */ ?>
							
			div.innerHTML = "<div class=\"short-info\"><span class=\"price\">"+ price +"</span>&nbsp;|&nbsp;<span class=\"beds\">Beds&nbsp;"+ bedrooms +"</span>&nbsp;|&nbsp;<span class=\"bath\">Baths&nbsp;"+ bath +"</span></div>";
							
			<?php
			$markers = zipperagent_get_map_markers();
			
			if($markers){ ?>
				
				switch(proptype){				
					<?php
					foreach( $markers as $ptype => $marker_url ){ ?>
						
						case "<?php echo $ptype; ?>":
								div.className = 'zpa-marker zpa-image-marker';
								div.innerHTML += "<span class=\"short-price-marker\">"+ shortprice +"<img src=\"<?php echo $marker_url; ?>\" /></span>";
							break;
					<?php
					} ?>
						default:
								div.innerHTML += "<span class=\"short-price\">"+ shortprice +"</span>";
							break;
				}
			<?php	
			}else{ ?>
			div.innerHTML += "<span class=\"short-price\">"+ shortprice +"</span>";
			<?php
			}
			?>
							
							
			// div.innerHTML ='<div class="marker" data-marker_id="123" style="position: absolute; cursor: pointer; width: 20px; height: 20px; background: blue; left: -9.65656px; top: -20.4536px;"></div>');
			// console.log(div);
			
			google.maps.event.addDomListener(div, "click", function(event) {
				// alert('You clicked on a custom marker!');		
				google.maps.event.trigger(self, "click");
				// console.log(event);
				infoWindow.setContent(infoWindowContent[index][0]);
				// console.log(infoWindowContent[index][0]);
				// console.log(map);
				infoWindow.open(map, self);
			});
			
			var panes = this.getPanes();
			panes.overlayImage.appendChild(div);
		}
		
		var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
		
		if (point) {
			div.style.left = (point.x - 20) + 'px';
			div.style.top = (point.y - 0) + 'px';
		}
	};

	CustomMarker.prototype.remove = function() {
		if (this.div) {
			this.div.parentNode.removeChild(this.div);
			this.div = null;
		}	
	};

	CustomMarker.prototype.getPosition = function() {
		return this.latlng;	
	};
	
	
	function scrollToMarker(index) {
		map.panTo(saved_markers[index].getPosition());
	}	
	
	jQuery(".zpa-grid-result").mouseover( function(){
		var index = jQuery(this).attr('index');	
		google.maps.event.trigger(saved_markers[index], 'mouseover');
		// scrollToMarker(index); //scroll to location
		infoWindow.setContent(infoWindowContent[index][0]);
		infoWindow.setPosition(saved_markers[index].position);
		infoWindow.open(map, saved_markers[index]);
	});

	jQuery(".zpa-grid-result").mouseleave( function(){
		var index = jQuery(this).attr('index');	
		google.maps.event.trigger(saved_markers[index], 'mouseout');
		infoWindow.close();
	});

	initialize();
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
			'page': '<?php echo $page; ?>',
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
					jQuery('.zpa-listing-search-results .prop-pagination').html(response['html_pagination']);
					jQuery( '.property-results .prop-total' ).removeClass('hide');
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
<?php auto_trigger_button_script(); ?>