<div class="bt-print__wrap">
	<div class="bt-print__header_top">
		<div class="bt-print__logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
		<div class="bt-print__title">
			<h4 class="my-5 uk-text-truncate" style="color: <?php echo $print_color; ?> !important;">
			   <?php echo zipperagent_get_address($single_property); ?> 
			</h4>
		</div>
	</div>
	 <div class="bt-print__left">
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
		<ul class="bt-print__meta">
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
		<table class="bt-print__meta-blocks">
		   <tr>
			<?php if(isset($single_property->norooms)): ?>
			  <td>
				 <div class="bt-print__meta-val">[norooms]</div>
				 <div class="bt-print__meta-label">Total Rooms</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nobedrooms]</div>
				 <div class="bt-print__meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nofullbaths]</div>
				 <div class="bt-print__meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nohalfbaths]</div>
				 <div class="bt-print__meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="bt-print__meta-val">[acre]</div>
				 <div class="bt-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="bt-print__meta-val">[squarefeet]</div>
				 <div class="bt-print__meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="bt-print__meta-val">$170</div>
				 <div class="bt-print__meta-label">$/SQFT</div>
			  </td> */ ?>
			<?php /*if(isset($single_property->yearbuilt)): ?>
			  <td>
				 <div class="bt-print__meta-val">[yearbuilt]</div>
				 <div class="bt-print__meta-label">Built</div>
			  </td>
			<?php endif;*/ ?>
		   </tr>
		</table>
		<div class="bt-print__area__wrap">
		   <div class="bt-print__area">
			<?php if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Neighborhood:</div>
				 <div class="bt-print__area-val">[neighborhood]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->proptype)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Type:</div>
				 <div class="bt-print__area-val">[proptype]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Built:</div>
				 <div class="bt-print__area-val">[yearbuilt]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">County:</div>
				 <div class="bt-print__area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Area:</div>
				 <div class="bt-print__area-val">[lngAREADESCRIPTION]</div>
			  </div>
			<?php endif; ?>
		   </div>
		   <div class="bt-print__area">
		   </div>
		</div>
		<?php if(isset($single_property->remarks)): ?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Description</h6>
		   <div class="bt-print__description">[remarks]</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($single_property->direction)): ?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="bt-print__description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->cctype)): ?>
			  <strong>Condo Style</strong>
			  [cctype]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Exterior</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Flooring</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundrylevel)): ?>
			  <strong>Laundry</strong>
			  [laundrylevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitlevel)): ?>
			  <strong>Unit Level</strong>
			  [unitlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterviewfeatures)): ?>
			  <strong>Waterview</strong>
			  [waterviewfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfront)): ?>
			  <strong>Waterfront</strong>
			  [waterfront]
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
			  <?php if(isset($single_property->Fireplace)): ?>
			  <strong>Fire place</strong>
			  [Fireplace]
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
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->coolingzones)): ?>
			  <strong>Cool Zones</strong>
			  [coolingzones]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->heatzones)): ?>
			  <strong>Heat Zones</strong>
			  [heatzones]
			  <?php endif; ?>
			  <?php if(isset($single_property->energyfeatures)): ?>
			  <strong>Energy Features</strong>
			  [energyfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric Feature</strong>
			  [electricfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->hotwater)): ?>
			  <strong>Hot Water</strong>
			  [hotwater]
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
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->garagespaces)): ?>
			  <strong>Garage Spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Road Type</strong>
			  [roadtype]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6> 
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Association Fee ($)</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Fee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php $roomLevels = $single_property->roomLevels;
		if (isset($roomLevels)): ?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
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
		
		<div class="bt-print__block">
		<?php if( $source_details ){
			echo $source_details;
		}else{
			echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		} ?>
		</div>
	 </div>
	 <div class="bt-print__right">
		<div class="uk-text-small mb-5">&nbsp;</div>
		<div class="bt-print__media-list">
			<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
			<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
			<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
			<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="bt-print__google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
		</div>
		<?php if( $agent ): ?>
		<div class="bt-print__agent">
		   <div class="bt-cell-align bt-cell-align--small">
			  <?php  if( isset( $agent->imageURL ) ): ?>
			  <div>
				 <img class="bt-image__no-mw bt-print__agent-img" src="<?php echo $agent->imageURL; ?>" />
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