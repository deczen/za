<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->cctype) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->laundrylevel) /*|| isset($single_property->petsallowed)*/ || isset($single_property->unitlevel) || isset($single_property->waterviewfeatures) || isset($single_property->waterfront) || isset($single_property->DwellingType) || isset($single_property->foundation) || isset($single_property->style) || isset($single_property->roofmaterial) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->parkingfeature) || isset($single_property->unmapped->LotSize) /*|| isset($single_property->lotdescription)*/ || isset($single_property->greencertified) || isset($single_property->handicapaccess) || isset($single_property->interiorfeatures ) || isset($single_property->exteriorfeatures) || isset($single_property->construction) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->GreenEnergyEfficient) || isset($single_property->unmapped->HomeWarrantyYN) || isset($single_property->unmapped->Levels) || isset($single_property->propsubtype) || isset($single_property->assocsecurity) || isset($single_property->unmapped->SpecialListingConditions) || isset($single_property->petsallowed) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->unmapped->CarportYN) || isset($single_property->utilities) || isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->garageparking) || isset($single_property->lotdescription) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->pooldescription) || isset($single_property->appliances) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->HeatingYN) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Amenities</td>
					<td class="zy-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->cctype)): ?>
				<tr>
					<td class="zy-listing__table__label">Condo Style</td>
					<td class="zy-listing__table__items"><span>[cctype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Flooring</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->laundrylevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Laundry</td>
					<td class="zy-listing__table__items"><span>[laundrylevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="zy-listing__table__label">Pets Allowed</td>
					<td class="zy-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unitlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Unit Level</td>
					<td class="zy-listing__table__items"><span>[unitlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterview</td>
					<td class="zy-listing__table__items"><span>[waterviewfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterfront</td>
					<td class="zy-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				
				<!-- ADD FIELDS -->
				<?php if( isset($single_property->DwellingType)): ?>
				<tr>
					<td class="zy-listing__table__label">Dwelling Type</td>
					<td class="zy-listing__table__items"><span>[DwellingType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="zy-listing__table__label">Foundation</td>
					<td class="zy-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="zy-listing__table__label">Roof Material</td>
					<td class="zy-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Fire place</td>
					<td class="zy-listing__table__items"><span>[unmapped_FireplaceYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Car Storage</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSize)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotSize]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Desc</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->greencertified)): ?>
				<tr>
					<td class="zy-listing__table__label">Green Certified</td>
					<td class="zy-listing__table__items"><span>[greencertified]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="zy-listing__table__label">Handicap Access</td>
					<td class="zy-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction</td>
					<td class="zy-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Association YN</td>
					<td class="zy-listing__table__items"><span>[reqdownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CoolingYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling YN</td>
					<td class="zy-listing__table__items"><span>[unmapped_CoolingYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GreenEnergyEfficient)): ?>
				<tr>
					<td class="zy-listing__table__label">Green Energy Efficient</td>
					<td class="zy-listing__table__items"><span>[unmapped_GreenEnergyEfficient]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HomeWarrantyYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Home Warranty YN</td>
					<td class="zy-listing__table__items"><span>[unmapped_HomeWarrantyYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Levels)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[unmapped_Levels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Propertysubtype</td>
					<td class="zy-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->assocsecurity)): ?>
				<tr>
					<td class="zy-listing__table__label">Security Features</td>
					<td class="zy-listing__table__items"><span>[assocsecurity]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SpecialListingConditions)): ?>
				<tr>
					<td class="zy-listing__table__label">Special Listing Conditions</td>
					<td class="zy-listing__table__items"><span>[unmapped_SpecialListingConditions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="zy-listing__table__label">Pets Allowed</td>
					<td class="zy-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
				<tr>
					<td class="zy-listing__table__label">Storiestotal</td>
					<td class="zy-listing__table__items"><span>[unmapped_StoriesTotal]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CarportYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Carport YN </td>
					<td class="zy-listing__table__items"><span>[unmapped_CarportYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="zy-listing__table__label">Utilities</td>
					<td class="zy-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Attached Garage YN</td>
					<td class="zy-listing__table__items"><span>[unmapped_AttachedGarageYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage YN </td>
					<td class="zy-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Features</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Dimensions</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotSizeDimensions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Patio And Porch Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_PatioAndPorchFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Pool Features</td>
					<td class="zy-listing__table__items"><span>[pooldescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="zy-listing__table__label">Appliances</td>
					<td class="zy-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<tr>
					<td class="zy-listing__table__label">Building Area Total</td>
					<td class="zy-listing__table__items"><span>[bldgsqfeet]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplace Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_FireplaceFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HeatingYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating YN</td>
					<td class="zy-listing__table__items"><span>[unmapped_HeatingYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric Feature</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif;*/ ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
	<li class="cell">
		
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
		<h3 class="zy-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coolingzones)): ?>
				<tr>
					<td class="zy-listing__table__label">Cool Zones</td>
					<td class="zy-listing__table__items"><span>[coolingzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heatzones)): ?>
				<tr>
					<td class="zy-listing__table__label">Heat Zones</td>
					<td class="zy-listing__table__items"><span>[heatzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Energy Features</td>
					<td class="zy-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="zy-listing__table__label">Hot Water</td>
					<td class="zy-listing__table__items"><span>[hotwater]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer Utilities</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Utilities</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>	

				<!-- ADD FIELD -->
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Air Condition</td>
					<td class="zy-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>	
			</tbody>
		</table>
		<?php endif; ?>	
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Spaces</td>
					<td class="zy-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Spaces</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Road Type </td>
					<td class="zy-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-listing__headline">Room Information</h3>
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
						
					<table class="zy-listing__table">
						<tbody>
							<tr>
								<td class="zy-listing__table__label">Room Type</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]</span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Level</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]</span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Size</td>
								<td class="zy-listing__table__items"><span><?php //echo $roomLevel->dim1; ?>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php// echo $roomLevel->dim2; ?></span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Description</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomDescription]</span></td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-listing__headline">Taxes, Fees</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Amount ($)</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Association Fee ($)</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Fee Includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>
<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-listing__headline">Master Bedroom</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->mbrdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[mbrdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[mbrdscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed2DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed3DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #4</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed4DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #5</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed5DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1DIMEN) || isset($single_property->bth1LEVEL) || isset($single_property->bth1DSCRP) || isset($single_property->bth2DIMEN) || isset($single_property->bth2LEVEL) || isset($single_property->bth2DSCRP) || isset($single_property->bth3DIMEN) || isset($single_property->bth3LEVEL) || isset($single_property->bth3DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1DIMEN) || isset($single_property->bth1LEVEL) || isset($single_property->bth1DSCRP) ):?>
		<h3 class="zy-listing__headline">Bathroom #1</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth1DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth1DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth1DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2DIMEN) || isset($single_property->bth2LEVEL) || isset($single_property->bth2DSCRP) ):?>
		<h3 class="zy-listing__headline">Bathroom #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth2DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3DIMEN) || isset($single_property->bth3LEVEL) || isset($single_property->bth3DSCRP) ):?>
		<h3 class="zy-listing__headline">Bathroom #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth3DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-listing__headline">Kitchen</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->kitdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[kitdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[kitlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-listing__headline">Family Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->famdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[famdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[famlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[famdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-listing__headline">Living Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->livdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[livdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[livlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-listing__headline">Dining Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->dindimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[dindimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[dinlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[dindscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #1</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth1DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth1DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth2DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth3DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #4</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth4DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #5</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth5DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #6</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth6DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth6LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth6DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>
