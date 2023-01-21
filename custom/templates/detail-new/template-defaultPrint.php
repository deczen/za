<div class="zy_print-view-wrap">

	<?php if($print_color): ?>
	<div class="zy-print-header-top" style="color: <?php echo $print_color; ?> !important;">
		<div class="zy-print-logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
	</div>
	<?php endif; ?>
	
	<div class="row">
		<div class="zy_prop-main col-xs-7">
			
			<div class="zy_prop-address">
				<h1><?php echo zipperagent_get_address($single_property); ?></h1>
			</div>
			
			<div class="zy_prop-img">
				<?php	
				$img=array();
				if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
					$i=0;
					foreach ($single_property->photoList as $pic ){ 
						if( strpos($pic->imgurl, 'mlspin.com') !== false ):
							$img[]= "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=744&h=419&n={$i}";
						else:
							$img[]=$pic->imgurl;
						endif;
					$i++;
					}
				} ?>
				<?php if ( isset($img[0]) ) echo "<img src='$img[0]' />";?>			
			</div>
		</div>
		
		<div class="zy_prop-sidebar col-xs-5">
			<ul class="zy_prop-details">
				
				<li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">List Price</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding"><?php echo zipperagent_currency(); ?>[realprice]</span></li>
				<li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">MLS#</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[listno]</span></li>
				<?php
				/* incldue sidebar template */
				if(file_exists($template_sidebar_path) && $template_sidebar){
					include $template_sidebar_path;
				}else{
					include $template_sidebar_path_default;
				}
				?>					
			</ul>
		</div>
	</div>
	<div class="row">
	
		<div class="zy_prop-desc col-xs-12">
			
			<h3 class="zy-feature-title nomargintop">Description</h3>
			
			[remarks]
		</div>
	</div>
	<div class="row">
		<div class="zy_prop-openhouse col-xs-12">
			<?php if(isset($single_property->openHouses) && sizeof($single_property->openHouses)): ?>
				
				<h3 class="zy-feature-title">Open House</h3>
				<?php 
				foreach($single_property->openHouses as $openHouse){
											
					$sourceid=isset($single_property->sourceid)?$single_property->sourceid:'';
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
					
					<p class="open-house-info"><span class="openHomeText"><?php echo $startDate ?> <?php echo $printEndTime; ?></p>							
				<?php
				}
				?>
				<?php endif; ?>
		</div>
	</div>
	<div class="row zy-mls-toggle">
		
		<div class="zy_mls-infos col-xs-12">
			<?php
			/* incldue content template */
			if(file_exists($template_features_path) && $template_features){
				include $template_features_path;
			}else{
				include $template_features_path_default;
			}
			?>
		</div>
	</div>
	<div class="row zy-photos-toggle" style="display:none">
		
		<div class="zy_prop-photos col-xs-12">
			
			<h3 class="zy-feature-title nomargintop">Additional Photos</h3>
			
			<?php
			if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
				$i=0;
				$image_urls=array();
				foreach ($single_property->photoList as $pic ){
					if( strpos($pic->imgurl, 'mlspin.com') !== false ){
						$image_urls[]="//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1600&h=1024&n={$i}";
					}else{
						$image_urls[]=$pic->imgurl;
					}					 
				$i++;
				}
				
				foreach($image_urls as $img){
					echo "<img src=\"{$img}\" />";
				}
			} ?>
		</div>
	</div>
	<div class="row">
		<div class="zy_prop-disclaimer col-xs-12">
			<?php
			if( $source_details ){
				echo $source_details;
			}else{
				echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
			} ?>
		</div>
		<div class="zy_prop-disclaimer col-xs-12">
			<?php
			if($source_disclaimer){
				echo $source_disclaimer;
			}
			?>	
		</div>
	</div>
</div>