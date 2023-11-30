<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) /*|| isset($single_property->style)*/ || isset($single_property->waterviewfeatures) || isset($single_property->waterfront) || isset($single_property->DwellingType) || isset($single_property->foundation) || isset($single_property->roofmaterial) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->parkingfeature) || isset($single_property->unmapped->LotSize) /*|| isset($single_property->lotdescription)*/ || isset($single_property->greencertified) || isset($single_property->handicapaccess) || isset($single_property->interiorfeatures ) || isset($single_property->exteriorfeatures) || isset($single_property->construction) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->GreenEnergyEfficient) || isset($single_property->unmapped->HomeWarrantyYN) || isset($single_property->unmapped->Levels) || isset($single_property->propsubtype) || isset($single_property->assocsecurity) || isset($single_property->unmapped->SpecialListingConditions) || isset($single_property->petsallowed) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->unmapped->CarportYN) || isset($single_property->utilities) || isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->garageparking) || isset($single_property->lotdescription) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->pooldescription) || isset($single_property->appliances) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->HeatingYN) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior: [exterior]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<li>House Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<li>Waterview: [waterviewfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront: [waterfront]</li>
				<?php endif; ?>
				
				<!-- ADD FIELDS -->
				<?php if( isset($single_property->DwellingType)): ?>
				<li>Dwelling Type: [DwellingType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
				<li>Fire place: [unmapped_FireplaceYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Car Storage: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSize)): ?>
				<li>Lot Size: [unmapped_LotSize]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->lotdescription)): ?>
				<li>Lot Desc: [lotdescription]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->greencertified)): ?>
				<li>Green Certified: [greencertified]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Handicap Access: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association YN: [reqdownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CoolingYN)): ?>
				<li>Cooling YN: [unmapped_CoolingYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GreenEnergyEfficient)): ?>
				<li>Green Energy Efficient: [unmapped_GreenEnergyEfficient]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HomeWarrantyYN)): ?>
				<li>Home Warranty YN: [unmapped_HomeWarrantyYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Levels)): ?>
				<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Propertysubtype: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assocsecurity)): ?>
				<li>Security Features: [assocsecurity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SpecialListingConditions)): ?>
				<li>Special Listing Conditions: [unmapped_SpecialListingConditions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
				<li>Storiestotal: [unmapped_StoriesTotal]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CarportYN)): ?>
				<li>Carport YN : [unmapped_CarportYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage YN : [garageparking]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Features: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Features: [pooldescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<li>Building Area Total: [bldgsqfeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
				<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HeatingYN)): ?>
				<li>Heating YN: [unmapped_HeatingYN]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->electricfeature)): ?>
				<li>Electric Feature: [electricfeature]</li>
				<?php endif;*/ ?>
					
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
	<li class="cell">
	
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coolingzones)): ?>
				<li>Cool Zones: [coolingzones]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heatzones)): ?>
				<li>Heat Zones: [heatzones]</li>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<li>Energy Features: [energyfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<li>Hot Water: [hotwater]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer Utilities: [sewer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water Utilities: [water]</li>
				<?php endif; ?>	

				<!-- ADD FIELD -->
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Condition: [aircondition]</li>
				<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Road Type : [roadtype]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-feature-title">Room Information</h3>
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
						
					<ul class="zy-sub-list">
						
							<li>Room Type: [roomLevels_<?php echo $rkey; ?>_roomType]</li>
							<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]</li>
							<li>Room Size: <?php //echo $roomLevel->dim1; ?>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php// echo $roomLevel->dim2; ?></li>
							<li>Room Description: [roomLevels_<?php echo $rkey; ?>_roomDescription]</li>
						
					</ul>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Association Fee ($): [hoafee]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>
<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->mbrdimen)): ?>
				<li>Size: [mbrdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<li>Level: [mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<li>Features: [mbrdscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<li>Size: [bed2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<li>Level: [bed2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<li>Features: [bed2DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<li>Size: [bed3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<li>Level: [bed3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<li>Features: [bed3DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<li>Size: [bed4DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<li>Level: [bed4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<li>Features: [bed4DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<li>Size: [bed5DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<li>Level: [bed5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<li>Features: [bed5DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth1dimen)): ?>
				<li>Size: [bth1dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<li>Level: [bth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<li>Features: [bth1dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth2dimen)): ?>
				<li>Size: [bth2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<li>Level: [bth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<li>Features: [bth2dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth3dimen)): ?>
				<li>Size: [bth3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<li>Level: [bth3level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<li>Features: [bth3dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->kitdimen)): ?>
				<li>Size: [kitdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<li>Level: [kitlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Features: [kitdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->famdimen)): ?>
				<li>Size: [famdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<li>Level: [famlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<li>Features: [famdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->livdimen)): ?>
				<li>Size: [livdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<li>Level: [livlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Features: [livdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->dindimen)): ?>
				<li>Size: [dindimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<li>Level: [dinlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Features: [dindscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<li>Size: [oth1DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<li>Level: [oth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<li>Features: [oth1DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<li>Size: [oth2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<li>Level: [oth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<li>Features: [oth2DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<li>Size: [oth3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<li>Level: [oth3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<li>Features: [oth3DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #4</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<li>Size: [oth4DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<li>Level: [oth4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<li>Features: [oth4DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #5</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<li>Size: [oth5DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<li>Level: [oth5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<li>Features: [oth5DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #6</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<li>Size: [oth6DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<li>Level: [oth6LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<li>Features: [oth6DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>