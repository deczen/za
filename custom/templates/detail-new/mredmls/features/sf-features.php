<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || 
			  isset($single_property->flooring) || isset($single_property->waterviewfeatures) || isset($single_property->waterviewfeatures) || isset($single_property->waterviewfeatures) || isset($single_property->waterviewfeatures) ||
			  isset($single_property->appliances) || isset($single_property->unmapped->OtherEquipment) || isset($single_property->unmapped->ATC) || isset($single_property->basement) || isset($single_property->unmapped->BAS) ||
			  isset($single_property->unmapped->{"BSMNT_SQFT"}) || isset($single_property->unmapped->BAT) || isset($single_property->unmapped->BelowGradeFinishedArea) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->AdditionalParcelsYN) ||
			  isset($single_property->unmapped->AGE) || isset($single_property->termsfeature) || isset($single_property->unmapped->DISABILITY_ACCESS) || isset($single_property->unmapped->SALE_OR_RENT) || isset($single_property->beachownership) ||
			  isset($single_property->unmapped->TYP) || isset($single_property->unmapped->REBUILT) || isset($single_property->unmapped->RR) || isset($single_property->unmapped->RURAL) || isset($single_property->sitecondition) ||
			  isset($single_property->asscfeeincludes) || isset($single_property->unmapped->SPEC_SVC_AREA) || isset($single_property->unmapped->Township) || isset($single_property->unmapped->ZERO_LOT_LINE) || isset($single_property->unmapped->CURRENTLYLEASED) ||
			  isset($single_property->style) || isset($single_property->unmapped->ASSESSOR_SQFT) || isset($single_property->unmapped->DRV) || isset($single_property->unmapped->EXT) || isset($single_property->exteriorfeatures) ||
			  isset($single_property->foundation) || isset($single_property->lotdescription) || isset($single_property->butype) || isset($single_property->unmapped->TPE) || isset($single_property->unmapped->WaterfrontYN) ):?>
	<li class="cell">
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
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherEquipment)): ?>
			<li>Other Equipment: [unmapped_OtherEquipment]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ATC)): ?>
			<li>Attic: [unmapped_ATC]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BAS)): ?>
			<li>Basement Description: [unmapped_BAS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BSMNT_SQFT)): ?>
			<li>Basement Sq Ft: [unmapped_BSMNT_SQFT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BAT)): ?>
			<li>Bath Amenities: [unmapped_BAT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BelowGradeFinishedArea)): ?>
			<li>Below Grade Finished Area: [unmapped_BelowGradeFinishedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels YN: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AGE)): ?>
			<li>Age: [unmapped_AGE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Community Features: [termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DISABILITY_ACCESS)): ?>
			<li>Disability Access And Or Equipped: [unmapped_DISABILITY_ACCESS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SALE_OR_RENT)): ?>
			<li>Offeredfor Sale or Rent: [unmapped_SALE_OR_RENT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->beachownership)): ?>
			<li>Ownership Type: [beachownership]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TYP)): ?>
			<li>Property Type: [unmapped_TYP]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->REBUILT)): ?>
			<li>Rebuilt YN: [unmapped_REBUILT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RR)): ?>
			<li>Recent Rehab YN: [unmapped_RR]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RURAL)): ?>
			<li>Rural YN: [unmapped_RURAL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Association Fee Includes: [asscfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SPEC_SVC_AREA)): ?>
			<li>Special Service Area: [unmapped_SPEC_SVC_AREA]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<li>Township: [unmapped_Township]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ZERO_LOT_LINE)): ?>
			<li>Zero Lot Line: [unmapped_ZERO_LOT_LINE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CURRENTLYLEASED)): ?>
			<li>Currently Leased: [unmapped_CURRENTLYLEASED]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->style)): ?>
			<li>Architectural Style: [unmapped_style]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ASSESSOR_SQFT)): ?>
			<li>Assessor Square Footage: [unmapped_ASSESSOR_SQFT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DRV)): ?>
			<li>Driveway: [unmapped_DRV]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->EXT)): ?>
			<li>Exterior Building Type: [unmapped_EXT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation Details: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->butype)): ?>
			<li>Model: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TPE)): ?>
			<li>Type Detached: [unmapped_TPE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
			<li>Waterfront YN: [unmapped_WaterfrontYN]</li>
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
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->unmapped->GAR) || isset($single_property->unmapped->GARAGE_ONSITE) ||
				  isset($single_property->unmapped->GARAGE_OWNERSHIP) || isset($single_property->unmapped->GARAGE_TYPE) || isset($single_property->unmapped->SP_INCL_PARKING) || isset($single_property->garageparking) ):?>
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
			<?php if( isset($single_property->unmapped->GAR)): ?>
			<li>Garage Details: [unmapped_GAR]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GARAGE_ONSITE)): ?>
			<li>Garage On Site: [unmapped_GARAGE_ONSITE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GARAGE_OWNERSHIP)): ?>
			<li>Garage Ownership: [unmapped_GARAGE_OWNERSHIP]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GARAGE_TYPE)): ?>
			<li>Garage Type: [unmapped_GARAGE_TYPE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SP_INCL_PARKING)): ?>
			<li>Is Parking Includedin Price: [unmapped_SP_INCL_PARKING]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garageparking)): ?>
			<li>Parking: [garageparking]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) ||
				  isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->firmrmk1) ||
				  isset($single_property->unmapped->FIREPLACE_LOCATION) || isset($single_property->electricfeature) ):?>
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
			<li>Sewer: [sewer]</li>
			<?php endif; ?>							
			<?php if( isset($single_property->firmrmk1)): ?>
			<li>Fireplace Features: [firmrmk1]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->unmapped->FIREPLACE_LOCATION)): ?>
			<li>Fireplace Location: [unmapped_FIREPLACE_LOCATION]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->feeinterval) ||
				  isset($single_property->unmapped->TXC) ):?>
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
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TXC)): ?>
			<li>Association Fee Frequency: [unmapped_TXC]</li> <!-- not done -->
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) || isset($single_property->unmapped->ElementarySchoolDistrict) || isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) ||
				  isset($single_property->unmapped->HighSchoolDistrict) ):?>
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
			<?php if( isset($single_property->unmapped->ElementarySchoolDistrict)): ?>
			<li>Elementary School District: [unmapped_ElementarySchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict)): ?>
			<li>Middle School District: [unmapped_MiddleOrJuniorSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>High School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">
		
		<?php if( isset($single_property->unmapped->B2F) || isset($single_property->unmapped->B2L) || isset($single_property->unmapped->B2S) || isset($single_property->unmapped->B3F) || isset($single_property->unmapped->B3L) ||
				  isset($single_property->unmapped->B3S) || isset($single_property->unmapped->B4F) || isset($single_property->unmapped->B4L) || isset($single_property->unmapped->B4S) || isset($single_property->unmapped->A1F) ||
				  isset($single_property->unmapped->A1L) || isset($single_property->unmapped->A1N) || isset($single_property->unmapped->A1S) || isset($single_property->unmapped->A2F) || isset($single_property->unmapped->A2L) ||
				  isset($single_property->unmapped->A2N) || isset($single_property->unmapped->A2S) || isset($single_property->unmapped->A3F) || isset($single_property->unmapped->A3L) || isset($single_property->unmapped->A3N) ||
				  isset($single_property->unmapped->A3S) || isset($single_property->unmapped->A4F) || isset($single_property->unmapped->A4L) || isset($single_property->unmapped->A4N) || isset($single_property->unmapped->A4S) ||
				  isset($single_property->unmapped->A5F) || isset($single_property->unmapped->A5L) || isset($single_property->unmapped->A5N) || isset($single_property->unmapped->A4N) || isset($single_property->unmapped->A5S) ||
				  isset($single_property->unmapped->A6F) || isset($single_property->unmapped->A6L) || isset($single_property->unmapped->A6N) || isset($single_property->unmapped->A6S) || isset($single_property->unmapped->A7F) ||
				  isset($single_property->unmapped->A7L) || isset($single_property->unmapped->A7N) || isset($single_property->unmapped->A7S) || isset($single_property->unmapped->DIN) || isset($single_property->unmapped->DRF) ||
				  isset($single_property->unmapped->DRL) || isset($single_property->unmapped->DRS) || isset($single_property->unmapped->FRF) || isset($single_property->unmapped->FRL) || isset($single_property->unmapped->KTF) ||
				  isset($single_property->unmapped->FRS) || isset($single_property->unmapped->KTF) || isset($single_property->unmapped->KTL) || isset($single_property->unmapped->KTS) || isset($single_property->unmapped->KIT) ||
				  isset($single_property->unmapped->LAUNDRYF) || isset($single_property->unmapped->LAUNDRYL) || isset($single_property->unmapped->LRF) || isset($single_property->unmapped->LRL) || isset($single_property->unmapped->LRS) ||
				  isset($single_property->unmapped->MBB) || isset($single_property->unmapped->MBF) || isset($single_property->unmapped->MBL) || isset($single_property->unmapped->MBS) ):?>
		<h3 class="zy-feature-title">Rooms Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->B2F)): ?>
			<li>2nd Bedroom Flooring: [unmapped_B2F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B2L)): ?>
			<li>2nd Bedroom Level: [unmapped_B2L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B2S)): ?>
			<li>2nd Bedroom Size: [unmapped_B2S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B3F)): ?>
			<li>3rd Bedroom Flooring: [unmapped_B3F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B3L)): ?>
			<li>3rd Bedroom Level: [unmapped_B3L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B3S)): ?>
			<li>3rd Bedroom Size: [unmapped_B3S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B4F)): ?>
			<li>4th Bedroom Flooring: [unmapped_B4F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B4L)): ?>
			<li>4th Bedroom Level: [unmapped_B4L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->B4S)): ?>
			<li>4th Bedroom Size: [unmapped_B4S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A1F)): ?>
			<li>Addtl Room1 Flooring: [unmapped_A1F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A1L)): ?>
			<li>Addtl Room1 Level: [unmapped_A1L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A1N)): ?>
			<li>Addtl Room1 Name: [unmapped_A1N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A1S)): ?>
			<li>Addtl Room2 Size: [unmapped_A1S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A2F)): ?>
			<li>Addtl Room2 Flooring: [unmapped_A2F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A2L)): ?>
			<li>Addtl Room2 Level: [unmapped_A2L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A2N)): ?>
			<li>Addtl Room2 Name: [unmapped_A2N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A2S)): ?>
			<li>Addtl Room2 Size: [unmapped_A2S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A3F)): ?>
			<li>Addtl Room3 Flooring: [unmapped_A3F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A3L)): ?>
			<li>Addtl Room3 Level: [unmapped_A3L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A3N)): ?>
			<li>Addtl Room3 Name: [unmapped_A3N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A3S)): ?>
			<li>Addtl Room3 Size: [unmapped_A3S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A4F)): ?>
			<li>Addtl Room4 Flooring: [unmapped_A4F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A4L)): ?>
			<li>Addtl Room4 Level: [unmapped_A4L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A4N)): ?>
			<li>Addtl Room4 Name: [unmapped_A4N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A4S)): ?>
			<li>Addtl Room4 Size: [unmapped_A4S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A5F)): ?>
			<li>Addtl Room5 Flooring: [unmapped_A5F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A5L)): ?>
			<li>Addtl Room5 Level: [unmapped_A5L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A5N)): ?>
			<li>Addtl Room5 Name: [unmapped_A5N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A5S)): ?>
			<li>Addtl Room5 Size: [unmapped_A5S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A6F)): ?>
			<li>Addtl Room6 Flooring: [unmapped_A6F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A6L)): ?>
			<li>Addtl Room6 Level: [unmapped_A6L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A6N)): ?>
			<li>Addtl Room6 Name: [unmapped_A6N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A6S)): ?>
			<li>Addtl Room6 Size: [unmapped_A6S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A7F)): ?>
			<li>Addtl Room7 Flooring: [unmapped_A7F]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A7L)): ?>
			<li>Addtl Room7 Level: [unmapped_A7L]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A7N)): ?>
			<li>Addtl Room7 Name: [unmapped_A7N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->A7S)): ?>
			<li>Addtl Room7 Size: [unmapped_A7S]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DIN)): ?>
			<li>Dining Room: [unmapped_DIN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DRF)): ?>
			<li>Dining Room Flooring: [unmapped_DRF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DRL)): ?>
			<li>Dining Room Level: [unmapped_DRL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DRS)): ?>
			<li>Dining Room Size: [unmapped_DRS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FRF)): ?>
			<li>Family Room Flooring: [unmapped_FRF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FRL)): ?>
			<li>Family Room Level: [unmapped_FRL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FRF)): ?>
			<li>Family Room Flooring: [unmapped_FRF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FRS)): ?>
			<li>Family Room Size: [unmapped_FRS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->KTF)): ?>
			<li>Kitchen Flooring: [unmapped_KTF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->KTL)): ?>
			<li>Kitchen Level: [unmapped_KTL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->KTS)): ?>
			<li>Kitchen Size: [unmapped_KTS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->KIT)): ?>
			<li>Kitchen Type: [unmapped_KIT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LAUNDRYF)): ?>
			<li>Laundry Flooring: [unmapped_LAUNDRYF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LAUNDRYL)): ?>
			<li>Laundry Level: [unmapped_LAUNDRYL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LRF)): ?>
			<li>Living Room Flooring: [unmapped_LRF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LRL)): ?>
			<li>Living Room Level: [unmapped_LRL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LRS)): ?>
			<li>Living Room Size: [unmapped_LRS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MBB)): ?>
			<li>Master Bedroom Bath: [unmapped_MBB]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MBF)): ?>
			<li>Master Bedroom Flooring: [unmapped_MBF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MBL)): ?>
			<li>Master Bedroom Level: [unmapped_MBL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MBS)): ?>
			<li>Master Bedroom Size: [unmapped_MBS]</li>
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