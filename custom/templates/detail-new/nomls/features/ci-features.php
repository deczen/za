<ul class="zy-features-grid">
	<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
	<li class="cell">
		<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) ):?>
		<h3 class="zy-feature-title">Space, #Units, SQ FT</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->mauunits) || isset($single_property->mafbldgsf)): ?>
				<li>Manufacturing: [mauunits] - [mafbldgsf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->ofuunits) || isset($single_property->offbldgsf)): ?>
				<li>Office: [ofuunits] - [offbldgsf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->rsuunits) || isset($single_property->rsfbldgsf)): ?>
				<li>Residential: [rsuunits] - [rsfbldgsf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reuunits) || isset($single_property->refbldgsf)): ?>
				<li>Retail: [reuunits] - [refbldgsf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->wauunits) || isset($single_property->wafbldgsf)): ?>
				<li>Warehouse: [wauunits] - [wafbldgsf]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Features: [parkingfeature]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities) || isset($single_property->DwellingType) || isset($single_property->foundation) /*|| isset($single_property->style)*/ || isset($single_property->roofmaterial) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->parkingfeature) || isset($single_property->unmapped->LotSize) || isset($single_property->lotdescription) || isset($single_property->greencertified) || isset($single_property->electricfeature) || isset($single_property->interiorfeatures ) || isset($single_property->exteriorfeatures ) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->GreenEnergyEfficient) || isset($single_property->unmapped->HomeWarrantyYN) || isset($single_property->unmapped->Levels) || isset($single_property->propsubtype) || isset($single_property->assocsecurity) || isset($single_property->unmapped->SpecialListingConditions) || isset($single_property->petsallowed) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->unmapped->CarportYN) || isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->garageparking) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->pooldescription) || isset($single_property->appliances) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->HeatingYN) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Details</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->citype)): ?>
				<li>Commercial Type: [citype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dividable)): ?>
				<li>Dividable: [dividable]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofdrivingdoors)): ?>
				<li>Drive in Doors: [noofdrivingdoors]</li>
				<?php endif; ?>
				<?php if( isset($single_property->elevator)): ?>
				<li>Elevator: [elevator]</li>
				<?php endif; ?>
				<?php if( isset($single_property->expandable)): ?>
				<li>Expandable: [expandable]</li>
				<?php endif; ?>
				<?php if( isset($single_property->facilities)): ?>
				<li>Facilities: [facilities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Handicap Access: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofloadingdocks)): ?>
				<li>Loading Docks : [noofloadingdocks]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofrestrooms)): ?>
				<li>Restrooms: [noofrestrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sprinklers)): ?>
				<li>Sprinklers: [sprinklers]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
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
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Desc: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->greencertified)): ?>
				<li>Green Certified: [greencertified]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric Feature: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
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
				<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage YN : [garageparking]</li>
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
			
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
		</ul>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes & Considerations</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zonedescription)): ?>
				<li>Zoning Description: [zonedescription]</li>
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