<?php
$contactIds=get_contact_id();
$detect = new Mobile_Detect;
$is_desktop = !$detect->isMobile() && !$detect->isTablet();

$templatename = zipperagent_listpage_layout();
$template_path = ZIPPERAGENTPATH . '/custom/templates/listing/' . $templatename;
if($templatename && file_exists($template_path)){
	include $template_path;
	return;
}
?>
<div class="zpa-listing-search-results">
	<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->			
	<div class="row mb-10">
		<?php /*
		<div class="col-xs-5">
		<?php if( ! $top_search_enabled ): ?>
			<?php if( $openHomesMode != 'true' ): ?>
			<a href="<?php echo site_url('/'); ?>homes-for-sale-search/" class="btn btn-link"> &laquo; New Search </a>
			<?php else: ?>
			<a href="<?php echo site_url('/'); ?>open-home-search/" class="btn btn-link"> &laquo; New Search </a>
			<?php endif; ?>
		<?php endif; ?>
		</div> */ ?>
		
		<?php /* <div class="col-xs-7">
			<?php if( $enable_filter ): ?>
			<div class="pull-right">
				<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star"></i> Saved </button>
			</div>
			<button id="saveSearchButton" class="saveSearchButton <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?> btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search"> <i class="glyphicon glyphicon-star"></i> Save This Search </button>
			<?php endif; ?>
		</div> */ ?>
	</div>
	<?php /* if( $enable_filter && $featuredOnlyYn != 'true' ): ?>
	<div class="row mb-10 mt-25">
		<div class="col-xs-0 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<div class="btn-group btn-group-justified"> <a class="btn btn-primary <?php if($status!=zipperagent_sold_status()) echo "active"?>" href="<?php echo add_query_arg( array('status'=>''), $actual_link ) ?>"> Active </a> <a class="btn btn-primary <?php if($status==zipperagent_sold_status()) echo "active"?>" href="<?php echo add_query_arg( array('status'=>zipperagent_sold_status()), $actual_link ) ?>"> Sold </a> </div>
		</div>
	</div>
	<?php endif; */ ?>
	<div class="row mb-10 mt-25">
		
		<?php
		if(isset($list['totalCount']) && $list['totalCount']==0){
		?>
			<div class="col-xs-4"> No Properties Found </div>
		<?php
		}else if( $showResults ){ ?>
			<?php if( ! $is_ajax_count ): ?>
			<div class="col-xs-4 prop-total"><?php echo zipperagent_list_total($count); ?></div>
			<?php else: ?>
			<div class="col-xs-4 prop-total"></div>
			<? endif; ?>
		<?php } ?>
		
		<div class="col-xs-8">
			<?php /*
			<div class="btn-group pull-right">
				<?php if( $enable_filter ): ?>
				<div id="zpa-refine-search" class="btn-group">
					<button id="zpa-refine-search-button" class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown"> Refine Search <span class="caret"></span> </button>
					<div class="dropdown-menu pull-right" style="padding: 17px;">
						<div class="zpa-container zpa-refine-search-container">
							<form id="zpa-mini-search-form" class="form-inline" action="<?php echo ZipperagentGlobalFunction()->zipperagent_page_url( 'search-results' ) ?>" method="GET">
							   <?php
								foreach( $requests as $key=>$val ){
									if( !is_array($val) && !in_array($key,array('minListPrice','maxListPrice')))
										echo "<input type='hidden' name='{$key}' value='{$val}' />";
									else if( is_array($val) ){
										
										foreach( $val as $k=>$v ){
											echo "<input type='hidden' name='{$key}[]' value='{$v}' />";
										}
										
									}
								}
							   ?>
								<div class="row">
									<div class="col-xs-6">
										<div id="zpa-mini-search-minprice"> <span class="zpa-widget-label">Min. Price</span>
											<div class="" style="position:relative;">
												<div class="zpa-label-overlay-money"> $ </div>
												<input id="zpa-mini-form-minprice" name="minListPrice" class="zpa-mini-form-element form-control zpa-search-form-input" placeholder="" type="text" value="<?php echo is_numeric($minListPrice)?number_format_i18n($minListPrice,0):'' ?>"> </div>
										</div>
									</div>
									<div class="col-xs-6">
										<div id="zpa-mini-search-maxprice"> <span class="zpa-widget-label">Max. Price</span>
											<div class="" style="position:relative;">
												<div class="zpa-label-overlay-money"> $ </div>
												<input id="zpa-mini-form-maxprice" name="maxListPrice" class="zpa-mini-form-element form-control zpa-search-form-input" placeholder="" type="text" value="<?php echo is_numeric($maxListPrice)?number_format_i18n($maxListPrice,0):'' ?>"> </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div id="zpa-mini-search-submit">
											<button type="submit" class="btn btn-primary"> Update </button>
										</div>
									</div>
								</div>
								<div> </div>
							</form>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if( $enable_filter ): ?>
				<div class="btn-group">
					<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown"> Sort <span class="caret"></span> </button>
					<ul id="zpa-sort-values" class="dropdown-menu pull-right">
						<li class="<?php if($o=='apmin:DESC') echo "active" ?>"> <a data-zpa-sort-value="pd" href="<?php echo add_query_arg( array('o'=>'apmin:DESC'), $actual_link ); ?>">Price (High to Low)</a> </li>
						<li class="<?php if($o=='apmin:ASC') echo "active" ?>"> <a data-zpa-sort-value="lpa" href="<?php echo add_query_arg( array('o'=>'apmin:ASC'), $actual_link ); ?>">Price (Low to High)</a> </li>
						<li class="<?php if($o=='asts:ASC') echo "active" ?>"> <a data-zpa-sort-value="st" href="<?php echo add_query_arg( array('o'=>'asts:ASC'), $actual_link ); ?>">Status</a> </li>
						<li class="<?php if($o=='atwns:ASC') echo "active" ?>"> <a data-zpa-sort-value="cn" href="<?php echo add_query_arg( array('o'=>'atwns:ASC'), $actual_link ); ?>">City</a> </li>
						<li class="<?php if($o=='lid:DESC') echo "active" ?>"> <a data-zpa-sort-value="ds" href="<?php echo add_query_arg( array('o'=>'lid:DESC'), $actual_link ); ?>">Listing Date</a> </li>
						<li class="<?php if($o=='apt:DESC') echo "active" ?>"> <a data-zpa-sort-value="lpd" href="<?php echo add_query_arg( array('o'=>'apt:DESC'), $actual_link ); ?>">Type / Price Descending</a> </li>
						<li class="<?php if($o=='alstid:ASC') echo "active" ?>"> <a data-zpa-sort-value="ln" href="<?php echo add_query_arg( array('o'=>'alstid:ASC'), $actual_link ); ?>">Listing Number</a> </li>
						<?php /* <li class=""> <a data-zpa-sort-value="ohd" href="<?php echo add_query_arg( array('o'=>''), $actual_link ); ?>">Open Home Date Asc</a> </li> * ?>
					</ul>
				</div>
				<?php endif; ?>
			</div> */ ?>
			
			<?php if( $enable_filter ): ?>
			<div class="pull-right">
				<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star"></i> <?php if($is_view_save_search) echo "Updated"; else echo "Saved"; ?> </button>
			</div>
			<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="<?php echo implode(',',$contactIds) ?>"> <i class="glyphicon glyphicon-star"></i> <?php if($is_view_save_search) echo "Update This Search"; else echo "Save This Search"; ?>  </button>
			<?php endif; ?>
		</div>
	</div>
	<div class="row list-section">
	   <?php 
			$i=0;
			$wrapOpen=false;
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
			
			if($i % $column ==0 && ! $wrapOpen && $is_desktop): ?>
			<div class="zpa-grid-wrap">
				<?php 
				$wrapOpen=true;
			endif; ?>
				<div class="zpa-grid-result <?php echo $columns_code ?>">
					<div class="zpa-grid-result-container well">
						<div class="row">
							<div class="col-xs-12">
								<div style="background-image: url('<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="zpa-results-grid-photo" >
									<img class="printonly" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>" />
									<a class="listing-<?php echo $property->id; ?> save-favorite-btn <?php echo zipperagent_is_favorite($property->id)?"active":""; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" listingId="<?php echo $property->id; ?>" searchId="<?php echo $searchId; ?>" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true"></i></a>
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
								<div class="<?php echo $column==4 ? "col-xs-7 nopaddingright" : "col-xs-8"; ?>">
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
								<div class="<?php echo $column==4 ? "col-xs-5 nopaddingleft" : "col-xs-4"; ?>">
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
			<?php if( (($i % $column) >= ($column-1) && $wrapOpen  //if one line has reach prop limit close the div
					  || ($i+1==sizeof($list) && $wrapOpen ) ) //if last prop reached close the div
					  && $is_desktop ): ?>
				<div class="clearfix"></div>
			</div>
				<?php
				$wrapOpen=false;
			endif; ?>
			<?php
			$i++;
			?>
		<?php endforeach; ?>
	   
	</div>		
	
	<?php if( $showPagination ): ?>
	
		<?php if( ! $is_ajax_count ): ?>
		<div class="row prop-pagination">
			<div class="col-xs-6">				
				<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
			</div>
			<!--col-->
		</div>
		<!--row-->
		<?php else: ?>
		<div class="row prop-pagination"></div> <!-- show on ajax -->
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

<?php // include "template-registerUser.php"; ?>

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