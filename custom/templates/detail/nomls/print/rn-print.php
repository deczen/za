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
			<?php if(isset($single_property->nobaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nobaths]</div>
				 <div class="bt-print__meta-label">Baths</div>
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
			  <?php if(isset($single_property->rntype)): ?>
			  <strong>Rental Style</strong>
			  [rntype]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Exterior Features</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Floor</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundryfeatures)): ?>
			  <strong>Laundry</strong>
			  [laundryfeatures]
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
			  <?php if(isset($single_property->unmapped->FireplaceYN)): ?>
			  <strong>Fire place</strong>
			  [unmapped_FireplaceYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Car Storage</strong>
			  [parkingfeature]
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
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric Feature</strong>
			  [electricfeature]
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
					
					<strong>Room Size</strong>
					[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]
					
					<strong>Room Description</strong>
					[roomLevels_<?php echo $rkey; ?>_roomDescription]
			<?php endforeach; ?>
			</p>
		</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
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
		<?php endif; ?>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Deposits, Inclusions</h6>
		   <p>
			  <?php if(isset($single_property->firstmonreqd)): ?>
			  <strong>1st Month</strong>
			  [firstmonreqd]
			  <?php endif; ?>
			  <?php if(isset($single_property->lastmonreqd)): ?>
			  <strong>Last Month</strong>
			  [lastmonreqd]
			  <?php endif; ?>
			  <?php if(isset($single_property->secdeposit)): ?>
			  <strong>Secutity</strong>
			  [secdeposit]
			  <?php endif; ?>
			  <?php if(isset($single_property->rentfeeincludes)): ?>
			  <strong>Rent Includes</strong>
			  [rentfeeincludes]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Master Bedroom</h6> 
			   <p>
				  <?php if(isset($single_property->mbrdimen)): ?>
				  <strong>Size</strong>
				  [mbrdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->mbrlevel)): ?>
				  <strong>Level</strong>
				  [mbrlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->mbrdscrp)): ?>
				  <strong>Features</strong>
				  [mbrdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #2</h6> 
			   <p>
				  <?php if(isset($single_property->bed2DIMEN)): ?>
				  <strong>Size</strong>
				  [bed2DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed2LEVEL)): ?>
				  <strong>Level</strong>
				  [bed2LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed2DSCRP)): ?>
				  <strong>Features</strong>
				  [bed2DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #3</h6> 
			   <p>
				  <?php if(isset($single_property->bed3DIMEN)): ?>
				  <strong>Size</strong>
				  [bed3DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed3LEVEL)): ?>
				  <strong>Level</strong>
				  [bed3LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed3DSCRP)): ?>
				  <strong>Features</strong>
				  [bed3DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #4</h6> 
			   <p>
				  <?php if(isset($single_property->bed4DIMEN)): ?>
				  <strong>Size</strong>
				  [bed4DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed4LEVEL)): ?>
				  <strong>Level</strong>
				  [bed4LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed4DSCRP)): ?>
				  <strong>Features</strong>
				  [bed4DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #5</h6> 
			   <p>
				  <?php if(isset($single_property->bed5DIMEN)): ?>
				  <strong>Size</strong>
				  [bed5DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed5LEVEL)): ?>
				  <strong>Level</strong>
				  [bed5LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed5DSCRP)): ?>
				  <strong>Features</strong>
				  [bed5DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bathroom #1</h6> 
			   <p>
				  <?php if(isset($single_property->bth1dimen)): ?>
				  <strong>Size</strong>
				  [bth1dimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth1LEVEL)): ?>
				  <strong>Level</strong>
				  [bth1LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth1dscrp)): ?>
				  <strong>Features</strong>
				  [bth1dscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bathroom #2</h6> 
			   <p>
				  <?php if(isset($single_property->bth2dimen)): ?>
				  <strong>Size</strong>
				  [bth2dimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth2LEVEL)): ?>
				  <strong>Level</strong>
				  [bth2LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth2dscrp)): ?>
				  <strong>Features</strong>
				  [bth2dscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Bathroom #3</h6> 
			   <p>
				  <?php if(isset($single_property->bth3dimen)): ?>
				  <strong>Size</strong>
				  [bth3dimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth3level)): ?>
				  <strong>Level</strong>
				  [bth3level]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth3dscrp)): ?>
				  <strong>Features</strong>
				  [bth3dscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Kitchen</h6> 
			   <p>
				  <?php if(isset($single_property->kitdimen)): ?>
				  <strong>Size</strong>
				  [kitdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->kitlevel)): ?>
				  <strong>Level</strong>
				  [kitlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->kitdscrp)): ?>
				  <strong>Features</strong>
				  [kitdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Family Room</h6> 
			   <p>
				  <?php if(isset($single_property->famdimen)): ?>
				  <strong>Size</strong>
				  [famdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->famlevel)): ?>
				  <strong>Level</strong>
				  [famlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->famdscrp)): ?>
				  <strong>Features</strong>
				  [famdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Living Room</h6> 
			   <p>
				  <?php if(isset($single_property->livdimen)): ?>
				  <strong>Size</strong>
				  [livdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->livlevel)): ?>
				  <strong>Level</strong>
				  [livlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->livdscrp)): ?>
				  <strong>Features</strong>
				  [livdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Dining Room</h6> 
			   <p>
				  <?php if(isset($single_property->dindimen)): ?>
				  <strong>Size</strong>
				  [dindimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->dinlevel)): ?>
				  <strong>Level</strong>
				  [dinlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->dindscrp)): ?>
				  <strong>Features</strong>
				  [dindscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Additional Room #1</h6> 
			   <p>
				  <?php if(isset($single_property->oth1DIMEN)): ?>
				  <strong>Size</strong>
				  [oth1DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->oth1LEVEL)): ?>
				  <strong>Level</strong>
				  [oth1LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->oth1DSCRP)): ?>
				  <strong>Features</strong>
				  [oth1DSCRP]
				  <?php endif; ?>
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