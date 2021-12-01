<div id="zy_list-print" class="printonly">
	<?php
	
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$print_logo = isset($rb['web']['print_logo'])?$rb['web']['print_logo']:'';
		$print_color = isset($rb['web']['print_color'])?$rb['web']['print_color']:'';
	?>	
	<?php if($print_logo): ?>
	<div class="zy-print-header-top">
		<div class="zy-print-logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
	</div>
	<?php endif; ?>
<?php
$i=0;
$column=2;
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
	$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
	?>
	
	<?php
	if($i % $column ==0 && ! $wrapOpen){		
	echo "<div class='zy_row'>";
	$wrapOpen=true;
	}
	?>
		<div class="zy_pt-prop-wrap">
			<div class="zy_pt-property">
				<div class="zy_pt-border">
					<div class="zy_pt-prop-img">
						<img src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>"  alt="property photo" />
					</div>
					<div class="zy_pt-price zy_pt-wrap">
						<span class="zy_pt-price"> <?php echo zipperagent_currency() . number_format_i18n( $price, 0 ); ?> </span>
					</div>
					<div class="zy_pt-address zy_pt-wrap">
						<span class="zpa-grid-result-address"> <img src="<?php echo ZIPPERAGENTURL . "images/map-marker.png" ?>" title="map marker" alt="map marker" /> <?php echo $fulladdress; ?> </span> 
					</div>
					<div class="zy_pt-prop-features">
						<?php
						$infoscount=0;
						?>
						<?php if( zipperagent_get_nobedrooms($property) !== '' && zipperagent_get_nobedrooms($property) > 0 ): ?>
						<div class="zy_pt-feature"> 
							<div class="zpa-grid-result-basic-info-container">
								<div class="zpa-grid-result-basic-info-item1"> <b><?php echo zipperagent_get_nobedrooms($property); ?></b>
									<span> beds </span> </div>
								<?php $infoscount++; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if( zipperagent_get_nobaths($property) !== '' && zipperagent_get_nobaths($property) > 0 ): ?>
						<div class="zy_pt-feature"> 
							<div class="zpa-grid-result-basic-info-container">
								<div class="zpa-grid-result-basic-info-item2"> <b><?php echo zipperagent_get_nobaths($property); ?> </b>
									<span> baths </span> </div>
								<?php $infoscount++; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if( zipperagent_get_sqft($property) !== '' && zipperagent_get_sqft($property) > 0 ): ?>
						<div class="zy_pt-feature"> 
							<div class="zpa-grid-result-basic-info-container">
								<div class="zpa-grid-result-basic-info-item3"> <b> <?php echo zipperagent_get_sqft($property); ?> </b>
									<span> sqft </span> </div>
								<?php $infoscount++; ?>
							</div>
						</div>
						<?php endif; ?>	
						<?php if( !$infoscount ): ?>
						<div class="zy_pt-feature"> 
							<div class="zpa-grid-result-basic-info-container">
								&nbsp;
							</div>
						</div>
						<?php endif; ?>	
						<div class="clearfix"></div>
					</div>
					<div class="zy_pt-prop-info zy_pt-wrap">
						<div class="zpa-status <?php echo is_numeric($property->status)? 'status_'.str_replace(' ','',$property->status) : str_replace(' ','',$property->status); ?>">
							<?php
								$status=isset($property->status)?$property->status:'';
								$converted_status = zipperagent_get_status_name($status,isset($property->sourceid)?$property->sourceid:'');
							?>
							<span class="text-center d-block"><?php echo strtoupper($converted_status) ?></span>
						</div>
						<div class="zy_pt-days">
							<span class="pull-right"> <?php if(isset($property->dayssincelisting)): ?><i class="fa fa-calendar" aria-hidden="true" role="none"></i> <?php echo isset($property->dayssincelisting)?$property->dayssincelisting:'-'; ?> Day(s) <?php endif; ?> </span>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="zy_pt-open-house zy_pt-wrap">
						<?php if( isset( $option->startDate ) && !empty( $option->startDate ) ){ ?>
						<?php
						$openHouse=$option;		
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
						?>
						<span class="openHomeText"> Open House:</span> <?php echo $startDate ?> <?php echo $printEndTime; ?>
						<?php } ?>
					<?php }else if(isset($property->openHouses) && sizeof($property->openHouses) /* && $openHomesOnlyYn */ ){ ?>
							<?php
							$openHouse=$property->openHouses[0];			
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
						<?php } ?>
					</div>
					<div class="zy_pt-mls-info zy_pt-wrap">
						<?php echo $property->displaySource; ?>#<?php echo $property->listno ?> | <?php echo zipperagent_property_type( $property->proptype ); ?>
					</div>			
				</div>
			</div>
			<?php						
			$source_details = isset($property->sourceid) ? zipperagent_get_source_text($property->sourceid, array('listOfficeName'=>isset($property->listOfficeName)?$property->listOfficeName:'', 'listAgentName'=>isset($property->listAgentName)?$property->listAgentName:'', 'property'=>$property), 'list') : false;
			?>
			<?php if($source_details): ?>
			<div class="zy_pt-property-source">			
				<?php echo $source_details; ?>
			</div>
			<?php endif; ?>
		</div>
	<?php if( (($i % $column) >= ($column-1) && $wrapOpen  //if one line has reach prop limit close the div
			  || ($i+1==sizeof($list) && $wrapOpen ) ) ): //if last prop reached close the div  ?>			
		<div class="clearfix"></div>
	</div>
	<?php
	$wrapOpen=false;
	endif; ?>
<?php $i++; ?>
<?php endforeach; ?>
</div>