<ul class="zy-features-grid">
	<?php if( isset($single_property->vacant) || isset($single_property->lotdescription) || isset($single_property->interiorfeatures) || isset($single_property->foundation) || isset($single_property->specialfinancing) ||
			  isset($single_property->unmapped->Refrigerator) || isset($single_property->unmapped->ManufacturedHomeYN) || isset($single_property->unmapped->Internet) || isset($single_property->unmapped->OvenRange) || isset($single_property->unmapped->LevelStyle) ||
			  isset($single_property->unmapped->TypeofContract) || isset($single_property->unmapped->AuctionYN) || isset($single_property->unmapped->Occupancy) || isset($single_property->unmapped->RATIO_CurrentPrice_By_SQFT) || isset($single_property->unmapped->SecondBeds) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Refrigerator)): ?>
			<li>Refrigerator: [unmapped_Refrigerator]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManufacturedHomeYN)): ?>
			<li>Manufactured Home: [unmapped_ManufacturedHomeYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OvenRange)): ?>
			<li>OvenRange: [unmapped_OvenRange]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LevelStyle)): ?>
			<li>Level Style: [unmapped_LevelStyle]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TypeofContract)): ?>
			<li>Type of Contract: [unmapped_TypeofContract]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AuctionYN)): ?>
			<li>Auction: [unmapped_AuctionYN]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->RATIO_CurrentPrice_By_SQFT)): ?>
			<li>RATIO CurrentPrice By SQFT: [unmapped_RATIO_CurrentPrice_By_SQFT]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->SecondBeds)): ?>
			<li>SecondBeds: [unmapped_SecondBeds]</li>
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
		
		<?php if( isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage: [garageparking]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->SemiAnnualTax) || isset($single_property->unmapped->GrossMonthlyRent) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->SemiAnnualTax)): ?>
			<li>Semi Annual Taxes: [unmapped_SemiAnnualTax]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossMonthlyRent)): ?>
			<li>Gross Monthly Rent: [unmapped_GrossMonthlyRent]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->schooldistrict) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->schooldistrict)): ?>
			<li>School District: [schooldistrict]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>