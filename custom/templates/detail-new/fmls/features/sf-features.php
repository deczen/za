<ul class="zy-features-grid">
	<?php if( /*isset($single_property->style) ||*/ isset($single_property->unmapped->Levels) || isset($single_property->unmapped->Stories) || isset($single_property->construction) || isset($single_property->unmapped->{'Construction Status'}) || isset($single_property->exteriorfeatures) || 
		isset($single_property->interiorfeatures) || isset($single_property->roofmaterial) || isset($single_property->flooring) || isset($single_property->fireplaces) || isset($single_property->vacant) || 
		isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->{'Fireplace Type'}) || isset($single_property->unmapped->GreenEnergyGeneration) || isset($single_property->unmapped->GreenEnergyEfficient) || isset($single_property->unmapped->WindowFeatures) || 
		isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->unmapped->RoadFrontageType) || isset($single_property->unmapped->HorseAmenities) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->OtherStructures) || 
		isset($single_property->unmapped->Dock) || isset($single_property->waterfront) || isset($single_property->waterbodyname) || isset($single_property->unmapped->WaterfrontageLength) || isset($single_property->unmapped->View) || 
		isset($single_property->unmapped->PropertyAttachedYN) || isset($single_property->unmapped->LandLeaseYN) || isset($single_property->unmapped->CommonWalls) || isset($single_property->unmapped->AccessibilityFeatures) || isset($single_property->unmapped->Fencing) || 
		isset($single_property->unmapped->WaterOnLand) || isset($single_property->lotdescription) || isset($single_property->unmapped->{'Lot Size'}) || isset($single_property->pooldescription) || isset($single_property->appliances) || 
		isset($single_property->electricfeature) || isset($single_property->roadtype) || isset($single_property->adultcommunity) || isset($single_property->sitecondition) || isset($single_property->equiplistavail) || 
		isset($single_property->unmapped->{'Laundry Type'}) || isset($single_property->unmapped->Equipment) || isset($single_property->unmapped->{'Financing Type'}) || isset($single_property->unmapped->{'Possible Financing'}) || isset($single_property->unmapped->{'Above Grade Finished'}) || 
		isset($single_property->unmapped->{'Below Grade Unfinished'}) || isset($single_property->amenities) || isset($single_property->petsallowed) || isset($single_property->petrestrictionsallow) ||
		isset($single_property->foundation) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->waterfront) || isset($single_property->unmapped->Room_DiningRoom_Features) || isset($single_property->unmapped->RoomKitchenFeatures) ||
		isset($single_property->unmapped->MainLevelBedrooms) || isset($single_property->unmapped->MainLevelBathrooms) || isset($single_property->unmapped->RoomMasterBathroomFeatures) || isset($single_property->handicapaccess) || isset($single_property->termsfeature) ||
		isset($single_property->greencertified) || isset($single_property->warranty) || isset($single_property->unmapped->NumberOfUnitsInCommunity) || isset($single_property->equiplistavail) || isset($single_property->unmapped->Ownership) ||
		isset($single_property->unmapped->SpaFeatures) || isset($single_property->unmapped->SpecialListingConditions) || isset($single_property->parkingspaces) || isset($single_property->unmapped->ListingTerms) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->Levels)): ?>
				<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Stories)): ?>
				<li>Stories: [unmapped_Stories]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Construction Status'})): ?>
				<li>Construction Status: [unmapped_Construction Status]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<li>Vacant: [vacant]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
				<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fireplace Type'})): ?>
				<li>Fireplace Type: [unmapped_Fireplace Type]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GreenEnergyGeneration)): ?>
				<li>Green Energy Generation: [unmapped_GreenEnergyGeneration]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GreenEnergyEfficient)): ?>
				<li>Green Energy Efficient: [unmapped_GreenEnergyEfficient]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
				<li>Window Features: [unmapped_WindowFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadFrontageType)): ?>
				<li>Road Frontage Type: [unmapped_RoadFrontageType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HorseAmenities)): ?>
				<li>Horse Amenities: [unmapped_HorseAmenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->OtherStructures)): ?>
				<li>Other Structures: [unmapped_OtherStructures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<li>Dock: [unmapped_Dock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Water Front: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<li>Water Body Name: [waterbodyname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterfrontageLength)): ?>
				<li>Water Front Age Length: [unmapped_WaterfrontageLength]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<li>View: [unmapped_View]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
				<li>Property Attached Y/N: [unmapped_PropertyAttachedYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LandLeaseYN)): ?>
				<li>Land Lease Y/N: [unmapped_LandLeaseYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommonWalls)): ?>
				<li>Common Walls: [unmapped_CommonWalls]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AccessibilityFeatures)): ?>
				<li>Accessibility Features: [unmapped_AccessibilityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fencing)): ?>
				<li>Fencing: [unmapped_Fencing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterOnLand)): ?>
				<li>Water OnLand: [unmapped_WaterOnLand]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size'})): ?>
				<li>Lot Size: [unmapped_Lot Size]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Description: [pooldescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric Feature: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Road Type: [roadtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->adultcommunity)): ?>
				<li>Adult Community: [adultcommunity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Site Condition: [sitecondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<li>Equiplist Avail: [equiplistavail]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Laundry Type'})): ?>
				<li>Laundry Type: [unmapped_Laundry Type]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Equipment)): ?>
				<li>Equipment: [unmapped_Equipment]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Financing Type'})): ?>
				<li>Financing Type: [unmapped_Financing Type]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Possible Financing'})): ?>
				<li>Possible Financing: [unmapped_Possible Financing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Above Grade Finished'})): ?>
				<li>Above Grade Finished: [unmapped_Above Grade Finished]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Below Grade Unfinished'})): ?>
				<li>Below Grade Unfinished: [unmapped_Below Grade Unfinished]</li>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
				<li>Pool Private YN: [unmapped_PoolPrivateYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront Features: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Room_DiningRoom_Features)): ?>
				<li>Dining Room Features: [unmapped_Room_DiningRoom_Features]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoomKitchenFeatures)): ?>
				<li>Kitchen Features: [unmapped_RoomKitchenFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MainLevelBedrooms)): ?>
				<li>Main Bedrooms: [unmapped_MainLevelBedrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MainLevelBathrooms)): ?>
				<li>Main Full Baths: [unmapped_MainLevelBathrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoomMasterBathroomFeatures)): ?>
				<li>Master Bathroom Features: [unmapped_RoomMasterBathroomFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Accessibility Features: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Community Features: [termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->greencertified)): ?>
				<li>Green Energy Efficient: [greencertified]</li>
				<?php endif; ?>
				<?php if( isset($single_property->warranty)): ?>
				<li>Home Warranty: [warranty]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NumberOfUnitsInCommunity)): ?>
				<li>Number Of Units In Community: [unmapped_NumberOfUnitsInCommunity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<li>Other Equipment: [equiplistavail]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Ownership)): ?>
				<li>Ownership: [unmapped_Ownership]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SpaFeatures)): ?>
				<li>Spa Features: [unmapped_SpaFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SpecialListingConditions)): ?>
				<li>Special Listing Conditions: [unmapped_SpecialListingConditions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ListingTerms)): ?>
				<li>Proposed Financing: [unmapped_ListingTerms]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->reqdownassociation) || isset($single_property->feeinterval) || isset($single_property->hoafee) || isset($single_property->assocsecurity) || isset($single_property->unmapped->{'Fees Include'}) || isset($single_property->asscfeeincludes) || isset($single_property->cooling) || isset($single_property->unmapped->{'Cooling Source'}) || isset($single_property->heating) || isset($single_property->unmapped->{'Heating Source'}) || isset($single_property->utilities) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->sewerandwater) || isset($single_property->energyfeatures) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	
	<li class="cell">
	<?php if( isset($single_property->reqdownassociation) || isset($single_property->feeinterval) || isset($single_property->hoafee) || isset($single_property->assocsecurity) || isset($single_property->unmapped->{'Fees Include'}) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Reqdown Association: [reqdownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->feeinterval)): ?>
				<li>Fee Interval: [feeinterval]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoafee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assocsecurity)): ?>
				<li>Assoc Security: [assocsecurity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fees Include'})): ?>
				<li>Fees Include: [unmapped_Fees Include]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes Include]</li>
				<?php endif; ?>		
			</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->unmapped->{'Cooling Source'}) || isset($single_property->heating) || isset($single_property->unmapped->{'Heating Source'}) || isset($single_property->utilities) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->sewerandwater) || isset($single_property->energyfeatures) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Cooling Source'})): ?>
				<li>Cooling Source: [unmapped_Cooling Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Heating Source'})): ?>
				<li>Heating Source: [unmapped_Heating Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->water)): ?>
				<li>Water: [water]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->sewerandwater)): ?>
				<li>Sewer and Water: [sewerandwater]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->energyfeatures)): ?>
				<li>Energy Features: [energyfeatures]</li>
				<?php endif; ?>	
			</ul>
	<?php endif; ?>
	
	
	<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School: [gradeschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
				<?php endif; ?>			
			</ul>
	<?php endif; ?>
	
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->unmapped->CarportGarageTotal) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CarportGarageTotal)): ?>
				<li>Carport Garage Total: [unmapped_CarportGarageTotal]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{'Tax ID'}) || isset($single_property->taxyear) || isset($single_property->taxes) ||
				  isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationFee2) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->{'Tax ID'})): ?>
				<li>Tax ID: [unmapped_Tax ID]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				

				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Association Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
				<li>Master Association Fee: [unmapped_AssociationFee2]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->Rooms) || isset($single_property->unmapped->RoomType) || isset($single_property->unmapped->UpperLevelBedrooms) || isset($single_property->unmapped->LowerLevelBedrooms) || isset($single_property->unmapped->UpperLevelHalfBathrooms) || isset($single_property->unmapped->{'BAF Main'}) || isset($single_property->unmapped->{'BAF Upper'}) || isset($single_property->unmapped->{'BAF Lower'}) || isset($single_property->unmapped->{'BR Main'}) || isset($single_property->unmapped->{'BR Upper'}) || isset($single_property->unmapped->{'BR Lower'}) || isset($single_property->unmapped->{'BAH Main'}) || isset($single_property->unmapped->{'BAH Upper'}) || isset($single_property->unmapped->{'BAH Lower'}) || isset($single_property->basement) || isset($single_property->masterbath) || isset($single_property->unmapped->bed2DSCRP) || isset($single_property->unmapped->dinDSCRP) || isset($single_property->unmapped->kitDSCRP) || isset($single_property->unmapped->{'Kitchen/Breakfas'}) || isset($single_property->unmapped->{'Kitchen Equipment'}) || isset($single_property->unmapped->{'Laundry Location'}) || isset($single_property->unmapped->laundryfeatures) || isset($single_property->unmapped->{'Fireplace Location'}) ):?>
		<h3 class="zy-feature-title">Room Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->Rooms)): ?>
				<li>Rooms: [unmapped_Rooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoomType)): ?>
				<li>Room Type: [unmapped_RoomType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UpperLevelBedrooms)): ?>
				<li>Upper Level Bedrooms: [unmapped_UpperLevelBedrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LowerLevelBedrooms)): ?>
				<li>Lower Level Bedrooms: [unmapped_LowerLevelBedrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UpperLevelHalfBathrooms)): ?>
				<li>Upper Level Half Bathrooms: [unmapped_UpperLevelHalfBathrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAF Main'})): ?>
				<li>BAF Main: [unmapped_BAF Main]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAF Upper'})): ?>
				<li>BAF Upper: [unmapped_BAF Upper]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAF Lower'})): ?>
				<li>BAF Lower: [unmapped_BAF Lower]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BR Main'})): ?>
				<li>BR Main: [unmapped_BR Main]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BR Upper'})): ?>
				<li>BR Upper: [unmapped_BR Upper]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BR Lower'})): ?>
				<li>BR Lower: [unmapped_BR Lower]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAH Main'})): ?>
				<li>BAH Main: [unmapped_BAH Main]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAH Upper'})): ?>
				<li>BAH Upper: [unmapped_BAH Upper]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAH Lower'})): ?>
				<li>BAH Lower: [unmapped_BAH Lower]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->masterbath)): ?>
				<li>Masterbath: [masterbath]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->bed2DSCRP)): ?>
				<li>Bedrooms Description: [unmapped_bed2DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dinDSCRP)): ?>
				<li>Dinning room Description: [unmapped_dinDSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->kitDSCRP)): ?>
				<li>Kitchen Description: [unmapped_kitDSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen/Breakfas'})): ?>
				<li>Kitchen/Breakfas: [unmapped_Kitchen/Breakfas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Equipment'})): ?>
				<li>Kitchen Equipment: [unmapped_Kitchen Equipment]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Laundry Location'})): ?>
				<li>Laundry Location: [unmapped_Laundry Location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>Laundry Features: [laundryfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fireplace Location'})): ?>
				<li>Fireplace Location: [unmapped_Fireplace Location]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php /*
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-feature-title">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<ul class="zy-sub-list">
							<li>Room Type: [roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></li>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<li>Room Size: [roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php endif; ?>
							<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php $Des = $roomLevels[$rkey]->floor; ?>
							<?php if( isset($Des)): ?>
							<li>Floor: [roomLevels_<?php echo $rkey; ?>_floor]</li>
							<?php endif; ?>
						</ul>
				<?php endforeach; ?>
					
			<?php
			endif;
		?> */ ?>
		
	</li>					

</ul>