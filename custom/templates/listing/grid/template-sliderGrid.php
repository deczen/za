<?php 
if($i % $column ==0 && ! $wrapOpen && $is_desktop): ?>
<div class="zpa-grid-wrap">
	<?php 
	$wrapOpen=true;
endif; ?>
	<div class="zpa-grid-result <?php echo $columns_code ?>" index="<?php echo $i ?>" wrap="<?php echo $wrapOpen ? 'open' : 'closed'; ?>">
		<div class="zpa-grid-result-container well">
			<div class="row">
				<div class="col-xs-12">					
					<div class="slider-container">
						<!--Main Slider Start--> 
						<div class="slider photo-carousel owl-carousel" aria-label="carousel"> 
						<?php
						if( isset( $property->photoList ) && sizeof( $property->photoList ) ){
							$index=0;
							foreach ($property->photoList as $pic ){ ?>
								<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>								
								<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=500&h=300&n={$index}"; ?>');" class="item <?php if($index==0) echo "active"; ?> zpa-results-grid-photo" ><a class="property_url" href="<?php echo $single_url ?>"></a></div>
								<?php else: ?>
								<div style="background-image: url('<?php echo $pic->imgurl ? str_replace('http://','//',$pic->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="item <?php if($index==0) echo "active"; ?> zpa-results-grid-photo" ><a class="property_url" href="<?php echo $single_url ?>"></a></div>
								<?php endif; ?>
							<?php 
							$index++;
							}
						} else { ?>
							<div style="background-image: url('<?php echo ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="item <?php if($index==0) echo "active"; ?> zpa-results-grid-photo" ><a class="property_url" href="<?php echo $single_url ?>"></a></div> <?php
						}
						?>						
						</div>
						<!--Main Slider End-->
						
						<!--Navigation Links For the Main Items
						<div class="slider-controls"> 
							<a class="slider-left" href="javascript:;"><span class="carousel-control"><i class="fa fa-2x fa-chevron-left" role="none"></i></span></a> 
							<a class="slider-right" href="javascript:;"><span class="carousel-control"><i class="fa fa-2x fa-chevron-right" role="none"></i></span></a> 
						</div> --> 
						
						<?php if( $enable_rebate ): ?><div class="badge-rebate"><span class="rebate-price"><?php if( isset( $property->buyerRebate ) && $property->buyerRebate ): ?><?php echo zipperagent_currency() . number_format_i18n( $property->buyerRebate, 0 ); ?><?php else: ?><?php echo $rebate_default_text; ?><?php endif; ?></span><span class="rebate-prefix"><?php echo $rebate_prefix; ?></span></div><? endif; ?>
						<?php if( isset( $property->startDate ) || isset($property->openHouses) ): ?><span class="badge-open-house">Open House</span><?php endif; ?>
						<a class="listing-<?php echo $property->id; ?> save-favorite-btn <?php echo zipperagent_is_favorite($property->id)?"active":""; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" listingId="<?php echo $property->id; ?>" searchId="<?php echo $searchId; ?>" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>
						<span class="zpa-for-sale-price"> <?php echo zipperagent_currency() . number_format_i18n( $price, 0 ); ?> </span> <?php //echo isset($property->forsale) && $property->forsale == "Y" ? "(For sale)" : '' ?>
												
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
					<?php if( zipperagent_get_nobedrooms($property) !== '' && zipperagent_get_nobedrooms($property) > 0 ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<div class="zpa-grid-result-basic-info-item1"> <b><?php echo zipperagent_get_nobedrooms($property); ?></b>
								<span> beds </span> </div>
							<?php $infoscount++; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php if( zipperagent_get_nobaths($property) !== '' && zipperagent_get_nobaths($property) > 0 ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<div class="zpa-grid-result-basic-info-item2"> <b><?php echo zipperagent_get_nobaths($property); ?> </b>
								<span> baths </span> </div>
							<?php $infoscount++; ?>
						</div>
					</div>
					<?php endif; ?>
					<?php /* if( isset($property->unmapped->BathsTotal ) && $property->unmapped->BathsTotal > 0 && ZipperagentGlobalFunction()->zipperagent_detailpage_group()=='gepmls' ): ?>
					<div class="col-xs-4 nopaddingleft nopaddingright"> 
						<div class="zpa-grid-result-basic-info-container">
							<?php if( isset($property->unmapped->BathsTotal ) && $property->unmapped->BathsTotal > 0 ): ?><div class="zpa-grid-result-basic-info-item2"> <b><?php echo $property->unmapped->BathsTotal ?> </b>
								<span> baths </span> </div>
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
								<span> sqft </span> </div>
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
					<div class="<?php echo $column==4 ? "col-xs-7 nopaddingright" : "col-xs-8"; ?>">
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
					<div class="<?php echo $column==4 ? "col-xs-5 nopaddingleft" : "col-xs-4"; ?>">
						<span class="zpa-on-site pull-right"> <?php if(isset($property->dayssincelisting)): ?><i class="fa fa-calendar" aria-hidden="true" role="none"></i> <?php echo isset($property->dayssincelisting)?$property->dayssincelisting:'-'; ?> Day(s) <?php endif; ?> </span>
					</div>
				</div>
				<?php if( isset( $property->startDate ) && !empty( $property->startDate ) ){ ?>
					<?php
					$openHouse=$property;
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
				<?php }else if(isset($property->openHouses) && sizeof($property->openHouses) /* && $openHomesOnlyYn */ ){ ?>
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
						<div class="zpa-grid-result-mlsnum-proptype"><?php echo $property->displaySource; ?>#<?php echo $property->listno ?> | <?php echo zipperagent_list_prop_type( $property ); ?> </div>
					</div>
					<div class="<?php echo $column==4 ? "col-xs-3" : "col-xs-2"; ?> pull-right fs-12 zpa-grid-result-photocount nopaddingleft">
						<?php if( isset($property->photoList) && sizeof($property->photoList) ): ?><a href="#" data-toggle="modal" data-target="#modal-<?php echo $property->id ?>" listingId="<?php echo $property->id ?>"> <i class="glyphicon glyphicon-camera" role="none"></i> </a> <span class="photo-count">(<?php echo isset($property->photoList)?sizeof($property->photoList):0; ?>)</span>
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
						<?php else: ?><i class="glyphicon glyphicon-camera" role="none"></i> <span class="photo-count">(<?php echo isset($property->photoList)?sizeof($property->photoList):0; ?>)</span><?php endif; ?>
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
		$source_details = isset($property->sourceid) ? zipperagent_get_source_text($property->sourceid, array('listOfficeName'=>isset($property->listOfficeName)?$property->listOfficeName:'', 'listAgentName'=>isset($property->listAgentName)?$property->listAgentName:'', 'property'=>$property), 'list') : false;
		?>
		<?php if($source_details): ?>
		<div class="property-source">
			<?php echo $source_details; ?>
		</div>
		<?php endif; ?>
		<div class="grid-margin"></div>
	</div>
<?php 
if( (($i % $column) >= ($column-1) && $wrapOpen  //if one line has reach prop limit close the div
	  || ($i+1==$total_props && $wrapOpen ) ) //if last prop reached close the div
	  && $is_desktop ): ?>
	<div class="clearfix"></div>
</div>
<?php
$wrapOpen=false;
endif;