<div class="zy-print__wrap">
	<div class="zy-print__header_top">
		<div class="zy-print__logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
		<div class="zy-print__title">
			<h4 class="my-5 uk-text-truncate" style="color: <?php echo $print_color; ?> !important;">
			   <?php echo zipperagent_get_address($single_property); ?> 
			</h4>
		</div>
	</div>
	 <div class="zy-print__left">
		<div class="uk-text-small mb-5">
		   <?php echo get_permalink(); ?>
		   <?php // echo $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
		</div>
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
		<h4 class="my-5 uk-text-truncate">
		   <?php echo zipperagent_get_address($single_property); ?> 
		</h4>
		<ul class="zy-print__meta">
			<?php if(isset($single_property->listprice)): ?>
		   <li>Price: $[realprice]</li>
			<?php endif; ?>
			<?php if(isset($single_property->status)): ?>
		   <li>Status: [status]</li>
			<?php endif; ?>
			<?php if(isset($single_property->syncAge)): ?>
		   <li>Updated: [syncAge] min ago</li>
			<?php endif; ?>
			<?php if(isset($single_property->id)): ?>
		   <li>[displaySource] #: [id]</li>
			<?php endif; ?>
		</ul>
		<table class="zy-print__meta-blocks">
		   <tr>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print__meta-val">[acre]</div>
				 <div class="zy-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nolots)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nolots]</div>
				 <div class="zy-print__meta-label">APPROVED LOTS</div>
			  </td>
			<?php endif; ?>
		   </tr>
		</table>
		<div class="zy-print__area__wrap">
		   <div class="zy-print__area">
			<?php if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Neighborhood:</div>
				 <div class="zy-print__area-val">[neighborhood]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->proptype)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Type:</div>
				 <div class="zy-print__area-val">[proptype]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">County:</div>
				 <div class="zy-print__area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Area:</div>
				 <div class="zy-print__area-val">[lngAREADESCRIPTION]</div>
			  </div>
			<?php endif; ?>
		   </div>
		   <div class="zy-print__area">
		   </div>
		</div>
		<?php if(isset($single_property->remarks)): ?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Description</h6>
		   <div class="zy-print__description">[remarks]</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($single_property->direction)): ?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="zy-print__description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Land Details</h6>
		   <p>
			  <?php if(isset($single_property->cultivationacres)): ?>
			  <strong>Cultivation Acres</strong>
			  [cultivationacres]
			  <?php endif; ?>
			  <?php if(isset($single_property->pastureacres)): ?>
			  <strong>Pasture Acres</strong>
			  [pastureacres]
			  <?php endif; ?>
			  <?php if(isset($single_property->timberacres)): ?>
			  <strong>Timber Acres</strong>
			  [timberacres]
			  <?php endif; ?>
			  <?php if(isset($single_property->ldtype)): ?>
			  <strong>Land Style</strong>
			  [ldtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->frontage)): ?>
			  <strong>Street Frontage</strong>
			  [frontage]
			  <?php endif; ?>
			  <?php if(isset($single_property->DwellingType)): ?>
			  <strong>Dwelling Type</strong>
			  [DwellingType]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fireplace)): ?>
			  <strong>Fire place</strong>
			  [unmapped_Fireplace]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CarStorage)): ?>
			  <strong>Car Storage</strong>
			  [unmapped_CarStorage]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LotSize)): ?>
			  <strong>Lot Size</strong>
			  [unmapped_LotSize]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Desc</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->greencertified)): ?>
			  <strong>Green Certified</strong>
			  [greencertified]
			  <?php endif; ?>
			  <?php if(isset($single_property->handicapaccess)): ?>
			  <strong>Handicap Access</strong>
			  [handicapaccess]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->electricfeature)): ?>
			  <strong>Electric Feature</strong>
			  [electricfeature]
			  <?php endif;*/ ?>
		   </p>
		</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Utilities</h6>
		   <p>
			  <?php if(isset($single_property->gas)): ?>
			  <strong>Gas</strong>
			  [gas]
			  <?php endif; ?>
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric</strong>
			  [electricfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer Utilities</strong>
			  [sewer]
			  <?php endif; ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water Utilities</strong>
			  [water]
			  <?php endif; ?>
			  <?php if(isset($single_property->aircondition)): ?>
			  <strong>Air Condition</strong>
			  [aircondition]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes</h6>
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning Code</strong>
			  [zoning]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		
		<?php $roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
		if($roomLevels): ?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
			<p>
			<?php foreach($roomLevels as $rkey => $roomLevel): ?>
				
					<strong>Room Type</strong>
					[roomLevels_<?php echo $rkey; ?>_roomType]
					<strong>Room Level</strong>
					[roomLevels_<?php echo $rkey; ?>_roomLevel]
					
					<?php $dim1 = $roomLevels[$rkey]->dim1; 
						  $dim2 = $roomLevels[$rkey]->dim2; 
					?>
					<?php if( isset($dim1) && isset($dim2)): ?>
					<strong>Room Size</strong>
					[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]
					<?php endif; ?>
					
			<?php endforeach; ?>
			</p>
		</div>
		<?php endif; ?>
		
		<div class="zy-print__block">
		<?php if( $source_details ){
			echo $source_details;
		}else{
			echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		} ?>
		</div>
	 </div>
	 <div class="zy-print__right">
		<div class="uk-text-small mb-5">&nbsp;</div>
		<div class="zy-print__media-list">
			<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
			<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
			<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
			<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="zy-print__google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
		</div>
		<?php if( $agent ): ?>
		<div class="zy-print__agent">
		   <div class="zy-cell-align zy-cell-align--small">
			  <?php  if( isset( $agent->imageURL ) ): ?>
			  <div>
				 <img class="zy-image__no-mw zy-print__agent-img" src="<?php echo $agent->imageURL; ?>" />
			  </div>
			  <?php endif; ?>
			  <div class="pl-10">
				 <h6 class="mt-5 mb-0"><?php echo isset( $agent->userName )?$agent->userName:'-'; ?></h6>
				 <?php /* <div class="uk-text-muted">The King Team</div> */ ?>
				 <ul class="uk-list mt-5">
					<li>
					   <?php echo isset( $agent->phoneMobile )? $agent->phoneMobile : ( isset($agent->phoneOffice) ? $agent->phoneOffice : ''); ?>
					</li>
					<li>
					   <?php echo isset( $agent->email )?$agent->email:''; ?>
					</li>
				 </ul>
			  </div>
		   </div>
		</div>
		<?php endif; ?>
	 </div>
  </div>