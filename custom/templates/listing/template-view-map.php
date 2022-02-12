<?php
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
		
		// $rebate_text = za_get_rebate_text( $property );
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		$enable_rebate = isset($rb['web']['display.buyerrebate.amount'])?$rb['web']['display.buyerrebate.amount']:0;
		$rebate_prefix = isset($rb['web']['buyerrebate.amount.prefix'])?$rb['web']['buyerrebate.amount.prefix']:'';
		$rebate_default_text = isset($rb['web']['emptybuyerrebate.amount.text'])?$rb['web']['emptybuyerrebate.amount.text']:'';
		
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
								<img class="printonly" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>"  alt="property photo" />
								<?php if( $enable_rebate ): ?><div class="badge-rebate"><span class="rebate-price"><?php if( isset( $property->buyerRebate ) && $property->buyerRebate ): ?><?php echo zipperagent_currency() . number_format_i18n( $property->buyerRebate, 0 ); ?><?php else: ?><?php echo $rebate_default_text; ?><?php endif; ?></span><span class="rebate-prefix"><?php echo $rebate_prefix; ?></span></div><? endif; ?>
								<?php if( isset( $option->startDate ) || isset($property->openHouses) ): ?><span class="badge-open-house">Open House</span><?php endif; ?>
								<a class="listing-<?php echo $property->id; ?> save-favorite-btn <?php echo zipperagent_is_favorite($property->id)?"active":""; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" listingId="<?php echo $property->id; ?>" searchId="" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a>
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
							<div class="<?php echo $column==4 ? "col-xs-6" : "col-xs-8"; ?>">
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
							<div class="<?php echo $column==4 ? "col-xs-6" : "col-xs-4"; ?>">
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
			<span class="listing-disclaimer" role="none"><?php echo $listing_disclaimer ?></span>
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