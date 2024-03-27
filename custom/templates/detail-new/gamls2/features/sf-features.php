<ul class="zy-features-grid">
	<li class="cell">
	
		<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || 
				  isset($single_property->flooring) || isset($single_property->waterviewfeatures) || isset($single_property->unmapped->{"Construction Materials"}) || isset($single_property->unmapped->{"Lot Features"}) || isset($single_property->unmapped->{"Lot Size Source"}) ||
				  isset($single_property->roofmaterial) || isset($single_property->unmapped->{"Above Grade Finished Area"}) || isset($single_property->unmapped->Appliances) || isset($single_property->unmapped->Basement) || isset($single_property->unmapped->{"Below Grade Finished"}) ||
				  isset($single_property->unmapped->{"Below Grade Unfinished"}) || isset($single_property->unmapped->{"Total Finished Area"}) || isset($single_property->interiorfeatures) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->{"Living Area Source"}) ||
				  isset($single_property->unmapped->{"Bath Full Main"}) || isset($single_property->unmapped->{"Bed Main"}) || isset($single_property->unmapped->Rooms) || isset($single_property->unmapped->{"Community Features"}) || isset($single_property->unmapped->District) ||
				  isset($single_property->unmapped->{"Home Warranty"}) || isset($single_property->unmapped->{"Leased Land"}) || isset($single_property->unmapped->{"Land Lot"}) || isset($single_property->unmapped->{"Listing Terms"}) || isset($single_property->unmapped->{"Property Condition"}) ||
				  isset($single_property->unmapped->Section) || isset($single_property->unmapped->{"Structure Type"}) ||
				  isset($single_property->petrestrictionsallow) || isset($single_property->petsallowed) ||
		  		  isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->unmapped->CarportYN) || isset($single_property->construction) || isset($single_property->unmapped->Fencing) || isset($single_property->foundation) || 
		  		  isset($single_property->unmapped->GarageYN) || isset($single_property->unmapped->Levels) || isset($single_property->lotdescription) || isset($single_property->lotsize) || isset($single_property->unmapped->LotSizeSource) ||
		  		  isset($single_property->unmapped->LotSizeUnits) || isset($single_property->roofmaterial) || isset($single_property->unmapped->ViewYN) || isset($single_property->unmapped->AboveGradeFinishedArea) || isset($single_property->unmapped->AboveGradeFinishedAreaUnits) || 
		  		  isset($single_property->appliances) || isset($single_property->unmapped->BelowGradeFinishedArea) || isset($single_property->unmapped->BelowGradeFinishedAreaUnits) || isset($single_property->unmapped->BuildingAreaTotal) || isset($single_property->unmapped->BuildingAreaUnits) || 
		  		  isset($single_property->unmapped->FireplaceYN) || isset($single_property->interiorfeatures) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->LivingAreaSource) || isset($single_property->unmapped->LivingAreaUnits) || 
		  		  isset($single_property->unmapped->MainLevelBedrooms) || isset($single_property->unmapped->MainLevelBathrooms) || isset($single_property->termsfeature) || isset($single_property->unmapped->ElectricOnPropertyYN) || isset($single_property->unmapped->LandLeaseYN) || 
		  		  isset($single_property->warranty) || isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->NewConstructionYN) || isset($single_property->sitecondition) || isset($single_property->unmapped->StructureType) ||
		 		  isset($single_property->unmapped->CommonWalls) || isset($single_property->unmapped->Room_DiningRoom_Features) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->RoomKitchenFeatures) || isset($single_property->unmapped->PropertyAttachedYN) ||
		 		  isset($single_property->assocsecurity) || isset($single_property->waterbodyname) || isset($single_property->unmapped->TotalNumberOfSlips) || isset($single_property->unmapped->BelowGradeUnfinished) || isset($single_property->unmapped->EsBusYn) || 
		 		  isset($single_property->unmapped->HsBusYn) || isset($single_property->unmapped->MsBusYn) ||
		  		  isset($single_property->unmapped->CommonWalls) || isset($single_property->unmapped->OpenParkingYN) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->unmapped->Room_DiningRoom_Features) || isset($single_property->unmapped->FireplaceFeatures) || 
		  	   	  isset($single_property->unmapped->RoomKitchenFeatures) || isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->PropertyAttachedYN) || isset($single_property->unmapped->BelowGradeUnfinished) ):?>
			  
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->amenities)): ?>
			<li>Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
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
			
			<?php if( za_is_ygl( $single_property ) ): ?>
			
			<?php if( isset($single_property->rentprice)): ?>
			<li>Rent Amount: [rentprice]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitlevel)): ?>
			<li>Unit Level: [unitlevel]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<li>Rent Includes: [rentfeeincludes]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Fee Paid By Owner: [reqdownassociation]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry: [laundryfeatures]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->heating)): ?>
			<li>Heat Source: [heating]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->dateavailableformatted)): ?>
			<li>Avail Date: [dateavailableformatted]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->butype)): ?>
			<li>Building Type: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->student)): ?>
			<li>Student: [student]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->facilities)): ?>
			<li>Features: [facilities]</li>
			<?php endif; ?>	
			
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->{"Construction Materials"})): ?>
			<li>Construction Materials: [unmapped_Construction Materials]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Features"})): ?>
			<li>Lot Features: [unmapped_Lot Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Source"})): ?>
			<li>Lot Size Source: [unmapped_Lot Size Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Above Grade Finished"})): ?>
			<li>Above Grade Finished Area: [unmapped_Above Grade Finished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Appliances)): ?>
			<li>Appliances: [unmapped_Appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Basement)): ?>
			<li>Basement: [unmapped_Basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Below Grade Finished"})): ?>
			<li>Below Grade Finished Area: [unmapped_Below Grade Finished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Below Grade Unfinished"})): ?>
			<li>Below Grade Unfinished Area: [unmapped_Below Grade Unfinished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Finished Area"})): ?>
			<li>Building Area Total: [unmapped_Total Finished Area]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Living Area Source"})): ?>
			<li>Living Area Source: [unmapped_Living Area Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bath Full Main"})): ?>
			<li>Main Level Bathrooms: [unmapped_Bath Full Main]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bed Main"})): ?>
			<li>Main Level Bedrooms: [unmapped_Bed Main]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Rooms)): ?>
			<li>Rooms: [unmapped_Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Community Features"})): ?>
			<li>Community Features: [unmapped_Community Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->District)): ?>
			<li>District: [unmapped_District]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Home Warranty"})): ?>
			<li>Home Warranty YN: [unmapped_Home Warranty]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Leased Land"})): ?>
			<li>Land Lease YN: [unmapped_Leased Land]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Land Lot"})): ?>
			<li>Land Lot: [unmapped_Land Lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Listing Terms"})): ?>
			<li>Listing Terms: [unmapped_Listing Terms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Condition"})): ?>
			<li>Property Condition: [unmapped_Property Condition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Section)): ?>
			<li>Section: [unmapped_Section]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Structure Type"})): ?>
			<li>Structure Type: [unmapped_Structure Type]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>Carport YN: [unmapped_CarportYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Fencing)): ?>
			<li>Fencing: [unmapped_Fencing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Levels)): ?>
			<li>Levels: [unmapped_Levels]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Features: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size Area: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeSource)): ?>
			<li>Lot Size Source: [unmapped_LotSizeSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeUnits)): ?>
			<li>Lot Size Units: [unmapped_LotSizeUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View YN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AboveGradeFinishedArea)): ?>
			<li>Above Grade Finished Area: [unmapped_AboveGradeFinishedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AboveGradeFinishedAreaUnits)): ?>
			<li>Above Grade Finished Area Units: [unmapped_AboveGradeFinishedAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BelowGradeFinishedArea)): ?>
			<li>Below Grade Finished Area: [unmapped_BelowGradeFinishedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BelowGradeFinishedAreaUnits)): ?>
			<li>Below Grade Finished Area Units: [unmapped_BelowGradeFinishedAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaUnits)): ?>
			<li>Building Area Units: [unmapped_BuildingAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Features: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingAreaSource)): ?>
			<li>Living Area Source: [unmapped_LivingAreaSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingAreaUnits)): ?>
			<li>Living Area Units: [unmapped_LivingAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MainLevelBedrooms)): ?>
			<li>Main Level Bathrooms: [unmapped_MainLevelBedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MainLevelBathrooms)): ?>
			<li>Main Level Bedrooms: [unmapped_MainLevelBathrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Community Features: [termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LandLeaseYN)): ?>
			<li>Land Lease YN: [unmapped_LandLeaseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->warranty)): ?>
			<li>Home Warranty YN: [warranty]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
			<li>New Construction YN: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Property Condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StructureType)): ?>
			<li>Structure Type: [unmapped_StructureType]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->CommonWalls)): ?>
			<li>Common Walls: [unmapped_CommonWalls]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingYN)): ?>
			<li>Open Parking YN: [unmapped_OpenParkingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Room_DiningRoom_Features)): ?>
			<li>Dining Room Features: [unmapped_Room_DiningRoom_Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
			<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoomKitchenFeatures)): ?>
			<li>Kitchen Features: [unmapped_RoomKitchenFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
			<li>Property Attached YN: [unmapped_PropertyAttachedYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BelowGradeUnfinished)): ?>
			<li>Below Grade Unfinished Area: [unmapped_BelowGradeUnfinished]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->CommonWalls)): ?>
			<li>Common Walls: [unmapped_CommonWalls]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Room_DiningRoom_Features)): ?>
			<li>Dining Room Features: [unmapped_Room_DiningRoom_Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
			<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoomKitchenFeatures)): ?>
			<li>Kitchen Features: [unmapped_RoomKitchenFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
			<li>Property Attached YN: [unmapped_PropertyAttachedYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterbodyname)): ?>
			<li>Water Body Name: [waterbodyname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TotalNumberOfSlips)): ?>
			<li>Total Number Of Slips: [unmapped_TotalNumberOfSlips]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BelowGradeUnfinished)): ?>
			<li>Below Grade Unfinished Area: [unmapped_BelowGradeUnfinished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->EsBusYn)): ?>
			<li>Es Bus Yn: [unmapped_EsBusYn]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HsBusYn)): ?>
			<li>Hs Bus Yn: [unmapped_HsBusYn]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MsBusYn)): ?>
			<li>Ms Bus Yn: [unmapped_MsBusYn]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->Vegetation)): ?>
			<li>Vegetation: [unmapped_Vegetation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->handicapaccess)): ?>
			<li>Accessibility Features: [handicapaccess]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherStructures)): ?>
			<li>Other Structures: [unmapped_OtherStructures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront YN: [waterfrontflag]</li>
			<?php endif; ?>
		</ul>						
		<?php endif; ?>	
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
			  isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->water) ||
			  isset($single_property->utilities) ||
			  isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) ):?>
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
			<?php if( isset($single_property->waterheater)): ?>
			<li>Water Heater: [waterheater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>	
			
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>							
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Elementary School: [gradeschool]</li>
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

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Parking Total"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Type: [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Parking Total"})): ?>
			<li>Parking Total: [unmapped_Parking Total]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->Association) ||
				  isset($single_property->unmapped->{"Tax Annual Amount"}) || isset($single_property->unmapped->{"Annual Association Fee"}) || isset($single_property->unmapped->{"Association Fee Includes"}) || 
				  isset($single_property->reqdownassociation) ):?>
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
			<?php if( isset($single_property->unmapped->Association)): ?>
			<li>Association YN: [unmapped_Association]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tax Annual Amount"})): ?>
			<li>Tax Annual Amount: [unmapped_Tax Annual Amount]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Association Fee"})): ?>
			<li>Association Fee: [unmapped_Annual Association Fee]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Association Fee Includes"})): ?>
			<li>Association Fee Includes: [unmapped_Association Fee Includes]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association YN: [reqdownassociation]</li>
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