<?php
global $requests, $crit;

$query_args=array();
$rb = ZipperagentGlobalFunction()->zipperagent_rb();

$contactIds=get_contact_id();
?>
<div class="row ">
<?php 
	$i=0;
	foreach( $list as $option ): ?>
	<?php 				
	
	if( $open )
		$property=isset($option->mergedProperty)?$option->mergedProperty:null;
	else
		$property=$option;
	
	if( !isset($property->id) )
		continue;
	
	$fulladdress = zipperagent_get_address($property);
	
	$saved_crit=$search;
	$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
	if(!empty($searchId))
		$query_args['searchId']= $searchId;
	if(!empty($critBase64))
		$query_args['criteria']= $critBase64;
	$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
	$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
	?>
	<div class="zpa-grid-result col-lg-12 col-sm-12 col-md-12 col-xs-12" index="<?php echo $i ?>">
		<?php /* <a onclick="scrollToMarker('<?php echo $i ?>')">test</a> */ ?>
				
		<div class="zpa-grid-result-container well">
			<div class="row">
				<div class="col-xs-12">
					<div style="background-image: url('<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="zpa-results-grid-photo" >
						<img class="printonly" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>"  alt="property photo" />
						<?php if( isset( $option->startDate ) || isset($property->openHouses) ): ?><span class="badge-open-house">Open House</span><?php endif; ?>
						<a class="listing-<?php echo $property->id; ?> save-favorite-btn <?php echo zipperagent_is_favorite($property->id)?"active":""; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" listingId="<?php echo $property->id; ?>" searchId="" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>
						<a class="property_url" href="#to_<?php echo $property->listno ?>"></a>
						<a class="property_url" href="#to_<?php echo $property->listno ?>"><span class="zpa-for-sale-price"> <?php echo zipperagent_currency() . number_format_i18n( $price, 0 ); ?> </span> <?php //echo isset($property->forsale) && $property->forsale == "Y" ? "(For sale)" : '' ?></a>
					</div>
				</div>
			</div>
			<div class="za-container">
				<div class="row mt-10">
					<div class="col-xs-12">
						<a class="property_url" href="#to_<?php echo $property->listno ?>"> <span class="zpa-grid-result-address"> <img src="<?php echo ZIPPERAGENTURL . "images/map-marker.png" ?>" title="map marker" alt="map marker" /> <?php echo $fulladdress; ?> </span> </a>
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
					<?php if( zipperagent_get_nobedrooms($property) !== '' && zipperagent_get_nobedrooms($property) > 0 ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<div class="zpa-grid-result-basic-info-item1"> <b><?php echo zipperagent_get_nobedrooms($property); ?></b>
								beds </div>
							<?php $infoscount++; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php if( zipperagent_get_nobaths($property) !== '' && zipperagent_get_nobaths($property) > 0 ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<div class="zpa-grid-result-basic-info-item2"> <b><?php echo zipperagent_get_nobaths($property); ?> </b>
								baths </div>
							<?php $infoscount++; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php /* if( isset($property->unmapped->BathsTotal ) && $property->unmapped->BathsTotal > 0 && ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='gepmls' ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<?php if( isset($property->unmapped->BathsTotal ) && $property->unmapped->BathsTotal > 0 ): ?><div class="zpa-grid-result-basic-info-item2"> <b><?php echo $property->unmapped->BathsTotal ?> </b>
								baths </div>
							<?php $infoscount++; ?>
							<?php else: ?>
								&nbsp;
							<?php endif; ?>
						</div>
					</div>
					<?php endif; */ ?>
					<?php if( zipperagent_get_sqft($property) !== '' && zipperagent_get_sqft($property) > 0 ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<div class="zpa-grid-result-basic-info-item3"> <b> <?php echo zipperagent_get_sqft($property); ?> </b>
								sqft </div>
							<?php $infoscount++; ?>
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
					<div class="col-xs-7">
						<div class="zpa-grid-result-additional-info">
							<div class="zpa-status <?php echo is_numeric($property->status)? 'status_'.str_replace(' ','',$property->status) : str_replace(' ','',$property->status); ?>">
								<?php
									$status=isset($property->status)?$property->status:'';
									$converted_status = zipperagent_get_status_name($status,isset($property->sourceid)?$property->sourceid:'');
								?>
								<span class="text-center d-block"><?php echo strtoupper($converted_status) ?></span>
							</div>
						</div>
					</div>
					<div class="col-xs-5">
						<span class="zpa-on-site pull-right"> <?php if(isset($property->dayssincelisting)): ?><i class="fa fa-calendar" aria-hidden="true" role="none"></i> <?php echo isset($property->dayssincelisting)?$property->dayssincelisting:'-'; ?> Day(s) <?php endif; ?> </span>
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
									
									$sourceid=isset($property->sourceid)?$property->sourceid:'';
									$mlstz = zipperagent_mls_timezone($sourceid);
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
									
									$sourceid=isset($property->sourceid)?$property->sourceid:'';
									$mlstz = zipperagent_mls_timezone($sourceid);
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
<?php 
$i++;
endforeach; ?>
</div>
<script>		
	jQuery(document).ready(function(){
		
		jQuery(window).scroll(function() {	
			var $sticky = jQuery('#small-property');
			var $mapWrapper = $sticky;
			var $top = 0;
			var $stickyH;
			if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
				var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
					$top = $top + $headerHeight;
					$stickyH = jQuery(window).outerHeight() - $headerHeight;
			}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
				var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
				var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
					$top = $top + $topheaderHeight + $headerHeight;
					$stickyH = jQuery(window).outerHeight() - $topheaderHeight - $headerHeight;
			}else{
				$stickyH = jQuery(window).outerHeight();		
			}
			if(jQuery('#wpadminbar').length){
				var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
					$top = $top + $wpadminbarHeight;
			}
			
			var $searchBarHeight = jQuery('#omnibar-tools.fixedheader').length ? jQuery('#omnibar-tools').outerHeight() : 0;
		
			$top = $top + $searchBarHeight;
			
			$mapWrapper.css('height', jQuery(window).outerHeight() - $top);	
			
			var $stickyContainer = jQuery('.sticky-container');
			var $stickyContainerOffset = $stickyContainer.offset();
			var $start = $stickyContainer.length?$stickyContainerOffset.top:0;
			var $limit = $start + $stickyContainer.outerHeight();
			var $padding = 0; // padding size;
			var $maxWidth = $sticky.outerWidth() + $padding;	
			
			if(jQuery(window).width() > 768){
			   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
				   $sticky.css({
				   'position':'fixed', 
				   'top': $top,
				   'max-width' : $maxWidth
				   });
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
				   $maxWidth = $sticky.outerWidth() + $padding;
				   $mapWrapper.css('height', jQuery(window).outerHeight() - $top);
			   }
			}
		});
	});
</script>