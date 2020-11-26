<ul class="zy-features-grid">
	<?php if( isset($single_property->appliances) || isset($single_property->amenities) || isset($single_property->unmapped->OtherEquipment) || isset($single_property->basement) || isset($single_property->unmapped->BAS) || 
			  isset($single_property->unmapped->BAT) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->AGE) || isset($single_property->unmapped->DISABILITY_ACCESS) || isset($single_property->unmapped->SALE_OR_RENT) ||
			  isset($single_property->unmapped->TYP) || isset($single_property->unmapped->REBUILT) || isset($single_property->unmapped->RR) || isset($single_property->sitecondition) || isset($single_property->unmapped->Township) ||
			  isset($single_property->unmapped->EXT) || isset($single_property->exteriorfeatures) || isset($single_property->unmapped->WaterfrontYN) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->amenities)): ?>
			<li>Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherEquipment)): ?>
			<li>Other Equipment: [unmapped_OtherEquipment]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BAS)): ?>
			<li>Basement Description: [unmapped_BAS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BAT)): ?>
			<li>Bath Amenities: [unmapped_BAT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AGE)): ?>
			<li>Age: [unmapped_AGE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DISABILITY_ACCESS)): ?>
			<li>Disability Access And Or Equipped: [unmapped_DISABILITY_ACCESS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SALE_OR_RENT)): ?>
			<li>Offeredfor Sale or Rent: [unmapped_SALE_OR_RENT]</li>
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
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<li>Township: [unmapped_Township]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->EXT)): ?>
			<li>Exterior Building Type: [unmapped_EXT]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
			<li>Waterfront YN: [unmapped_WaterfrontYN]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->GAR) || isset($single_property->garagespaces) || isset($single_property->unmapped->GARAGE_ONSITE) || isset($single_property->unmapped->GARAGE_OWNERSHIP) || isset($single_property->unmapped->GARAGE_TYPE) ||
				  isset($single_property->unmapped->SP_INCL_PARKING) || isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->GAR)): ?>
			<li>Garage Details: [unmapped_GAR]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
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
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>						
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
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