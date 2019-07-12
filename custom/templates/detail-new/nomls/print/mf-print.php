<div class="zy-print-wrap">
	<div class="zy-print-header-top">
		<div class="zy-print-logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
		<div class="zy-print-title">
			<h4 class="my-5 uk-text-truncate" style="color: <?php echo $print_color; ?> !important;">
			   <?php echo zipperagent_get_address($single_property); ?> 
			</h4>
		</div>
	</div>
	 <div class="zy-print-left">
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
		<ul class="zy-print-meta">
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
		<table class="zy-print-meta-blocks">
		   <tr>
			<?php if(isset($single_property->totalrooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[totalrooms]</div>
				 <div class="zy-print-meta-label">Total Units</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nobedrooms]</div>
				 <div class="zy-print-meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nofullbaths]</div>
				 <div class="zy-print-meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nohalfbaths]</div>
				 <div class="zy-print-meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print-meta-val">[squarefeet]</div>
				 <div class="zy-print-meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print-meta-val">[acre]</div>
				 <div class="zy-print-meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="zy-print-meta-val">$170</div>
				 <div class="zy-print-meta-label">$/SQFT</div>
			  </td>  ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <td>
				 <div class="zy-print-meta-val">[yearbuilt]</div>
				 <div class="zy-print-meta-label">Built</div>
			  </td>
			<?php endif; */?>
		   </tr>
		</table>
		<div class="zy-print-area-wrap">
		   <div class="zy-print-area">
			<?php if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Neighborhood:</div>
				 <div class="zy-print-area-val">[neighborhood]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->proptype)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Type:</div>
				 <div class="zy-print-area-val">[proptype]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Built:</div>
				 <div class="zy-print-area-val">[yearbuilt]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">County:</div>
				 <div class="zy-print-area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Area:</div>
				 <div class="zy-print-area-val">[lngAREADESCRIPTION]</div>
			  </div>
			<?php endif; ?>
		   </div>
		   <div class="zy-print-area">
		   </div>
		</div>
		<?php if(isset($single_property->remarks)): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Description</h6>
		   <div class="zy-print-description">[remarks]</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($single_property->direction)): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="zy-print-description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif;*/ ?>
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
			  <?php if(isset($single_property->style)): ?>
			  <strong>House Style</strong>
			  [style]
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
			  <?php /*if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Desc</strong>
			  [lotdescription]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->greencertified)): ?>
			  <strong>Green Certified</strong>
			  [greencertified]
			  <?php endif; ?>
			  <?php if(isset($single_property->handicapaccess)): ?>
			  <strong>Handicap Access</strong>
			  [handicapaccess]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->reqdownassociation)): ?>
			  <strong>Association YN</strong>
			  [reqdownassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CoolingYN)): ?>
			  <strong>Cooling YN</strong>
			  [unmapped_CoolingYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GreenEnergyEfficient)): ?>
			  <strong>Green Energy Efficient</strong>
			  [unmapped_GreenEnergyEfficient]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->HomeWarrantyYN)): ?>
			  <strong>Home Warranty YN</strong>
			  [unmapped_HomeWarrantyYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Levels)): ?>
			  <strong>Levels</strong>
			  [unmapped_Levels]
			  <?php endif; ?>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Propertysubtype</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->assocsecurity)): ?>
			  <strong>Security Features</strong>
			  [assocsecurity]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SpecialListingConditions)): ?>
			  <strong>Special Listing Conditions</strong>
			  [unmapped_SpecialListingConditions]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->StoriesTotal)): ?>
			  <strong>Storiestotal</strong>
			  [unmapped_StoriesTotal]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CarportYN)): ?>
			  <strong>Carport YN</strong>
			  [unmapped_CarportYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AttachedGarageYN)): ?>
			  <strong>Attached Garage YN</strong>
			  [unmapped_AttachedGarageYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->garageparking)): ?>
			  <strong>Garage YN</strong>
			  [garageparking]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Features</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LotSizeDimensions)): ?>
			  <strong>Lot Size Dimensions</strong>
			  [unmapped_LotSizeDimensions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			  <strong>Patio And Porch Features</strong>
			  [unmapped_PatioAndPorchFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->pooldescription)): ?>
			  <strong>Pool Features</strong>
			  [pooldescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->bldgsqfeet)): ?>
			  <strong>Building Area Total</strong>
			  [bldgsqfeet]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FireplaceFeatures)): ?>
			  <strong>Fireplace Features</strong>
			  [unmapped_FireplaceFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->HeatingYN)): ?>
			  <strong>Heating YN</strong>
			  [unmapped_HeatingYN]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
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
			  <strong>Electric Features</strong>
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
		
		<?php $roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
		if($roomLevels): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
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
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
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
		<?php endif; ?>
		
		<?php if( isset($single_property->bedrms1) || isset($single_property->fbths1) || isset($single_property->coldscrp1) || isset($single_property->headscrp1) || isset($single_property->frplcs1) || isset($single_property->flrs1) || isset($single_property->levels1) || isset($single_property->rms1) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Unit #1</h6>
		   <p>
			  <?php if(isset($single_property->bedrms1)): ?>
			  <strong>Beds</strong>
			  [bedrms1]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths1)): ?>
			  <strong>Baths</strong>
			  [fbths1]
			  <?php endif; ?>
			  <?php if(isset($single_property->coldscrp1)): ?>
			  <strong>Cooling</strong>
			  [coldscrp1]
			  <?php endif; ?>
			  <?php if(isset($single_property->headscrp1)): ?>
			  <strong>Heating</strong>
			  [headscrp1]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs1)): ?>
			  <strong>Fireplaces</strong>
			  [frplcs1]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs1)): ?>
			  <strong>Floor</strong>
			  [flrs1]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels1)): ?>
			  <strong>Levels</strong>
			  [levels1]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms1)): ?>
			  <strong>Rooms</strong>
			  [rms1]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		<?php if( isset($single_property->bedrms2) || isset($single_property->fbths2) || isset($single_property->coldscrp2) || isset($single_property->headscrp2) || isset($single_property->frplcs2) || isset($single_property->flrs2) || isset($single_property->levels2) || isset($single_property->rms2) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Unit #2</h6>
		   <p>
			  <?php if(isset($single_property->bedrms2)): ?>
			  <strong>Beds</strong>
			  [bedrms2]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths2)): ?>
			  <strong>Baths</strong>
			  [fbths2]
			  <?php endif; ?>
			  <?php if(isset($single_property->coldscrp2)): ?>
			  <strong>Cooling</strong>
			  [coldscrp2]
			  <?php endif; ?>
			  <?php if(isset($single_property->headscrp2)): ?>
			  <strong>Heating</strong>
			  [headscrp2]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs2)): ?>
			  <strong>Fireplaces</strong>
			  [frplcs2]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs2)): ?>
			  <strong>Floor</strong>
			  [flrs2]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels2)): ?>
			  <strong>Levels</strong>
			  [levels2]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms2)): ?>
			  <strong>Rooms</strong>
			  [rms2]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		<?php if( isset($single_property->bedrms3) || isset($single_property->fbths3) || isset($single_property->coldscrp3) || isset($single_property->headscrp3) || isset($single_property->frplcs3) || isset($single_property->flrs3) || isset($single_property->levels3) || isset($single_property->rms3) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Unit #3</h6>
		   <p>
			  <?php if(isset($single_property->bedrms3)): ?>
			  <strong>Beds</strong>
			  [bedrms3]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths3)): ?>
			  <strong>Baths</strong>
			  [fbths3]
			  <?php endif; ?>
			  <?php if(isset($single_property->coldscrp3)): ?>
			  <strong>Cooling</strong>
			  [coldscrp3]
			  <?php endif; ?>
			  <?php if(isset($single_property->headscrp3)): ?>
			  <strong>Heating</strong>
			  [headscrp3]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs3)): ?>
			  <strong>Fireplaces</strong>
			  [frplcs3]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs3)): ?>
			  <strong>Floor</strong>
			  [flrs3]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels3)): ?>
			  <strong>Levels</strong>
			  [levels3]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms3)): ?>
			  <strong>Rooms</strong>
			  [rms3]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		<?php if( isset($single_property->bedrms4) || isset($single_property->fbths4) || isset($single_property->coldscrp4) || isset($single_property->headscrp4) || isset($single_property->frplcs4) || isset($single_property->flrs4) || isset($single_property->levels4) || isset($single_property->rms4) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Unit #4</h6>
		   <p>
			  <?php if(isset($single_property->bedrms4)): ?>
			  <strong>Beds</strong>
			  [bedrms4]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths4)): ?>
			  <strong>Baths</strong>
			  [fbths4]
			  <?php endif; ?>
			  <?php if(isset($single_property->coldscrp4)): ?>
			  <strong>Cooling</strong>
			  [coldscrp4]
			  <?php endif; ?>
			  <?php if(isset($single_property->headscrp4)): ?>
			  <strong>Heating</strong>
			  [headscrp4]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs4)): ?>
			  <strong>Fireplaces</strong>
			  [frplcs4]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs4)): ?>
			  <strong>Floor</strong>
			  [flrs4]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels4)): ?>
			  <strong>Levels</strong>
			  [levels4]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms4)): ?>
			  <strong>Rooms</strong>
			  [rms4]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		<?php if( isset($single_property->bedrms5) || isset($single_property->fbths5) || isset($single_property->coldscrp5) || isset($single_property->headscrp5) || isset($single_property->frplcs5) || isset($single_property->flrs5) || isset($single_property->levels5) || isset($single_property->rms5) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Unit #5</h6>
		   <p>
			  <?php if(isset($single_property->bedrms5)): ?>
			  <strong>Beds</strong>
			  [bedrms5]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths5)): ?>
			  <strong>Baths</strong>
			  [fbths5]
			  <?php endif; ?>
			  <?php if(isset($single_property->coldscrp5)): ?>
			  <strong>Cooling</strong>
			  [coldscrp5]
			  <?php endif; ?>
			  <?php if(isset($single_property->headscrp5)): ?>
			  <strong>Heating</strong>
			  [headscrp5]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs5)): ?>
			  <strong>Fireplaces</strong>
			  [frplcs5]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs5)): ?>
			  <strong>Floor</strong>
			  [flrs5]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels5)): ?>
			  <strong>Levels</strong>
			  [levels5]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms5)): ?>
			  <strong>Rooms</strong>
			  [rms5]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		
		<div class="zy-print-block">
		<?php if( $source_details ){
			echo $source_details;
		}else{
			echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		} ?>
		</div>
	 </div>
	 <div class="zy-print-right">
		<div class="uk-text-small mb-5">&nbsp;</div>
		<div class="zy-print-media-list">
			<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
			<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
			<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
			<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="zy-print-google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
		</div>
		<?php if( $agent ): ?>
		<div class="zy-print-agent">
		   <div class="zy-cell-align zy-cell-align--small">
			  <?php  if( isset( $agent->imageURL ) ): ?>
			  <div>
				 <img class="zy-image-no-mw zy-print-agent-img" src="<?php echo $agent->imageURL; ?>" />
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