<ul class="zy-features-grid">
	<?php if( isset($single_property->exterior) || isset($single_property->specialfinancing) || isset($single_property->lotdescription) || isset($single_property->unmapped->ListingConditionsYN) || isset($single_property->unmapped->TypeofContract) ||
			  isset($single_property->unmapped->LandInformation) || isset($single_property->unmapped->AuctionYN) || isset($single_property->unmapped->Internet) || isset($single_property->unmapped->Occupancy) || isset($single_property->lotdescription) ||
			  isset($single_property->interiorfeatures) || isset($single_property->exteriorfeatures) || isset($single_property->interiorfeatures) || isset($single_property->exteriorfeatures) || isset($single_property->style) ||
			  isset($single_property->grossannualexp) || isset($single_property->grossannualincome) || isset($single_property->netoperatinginc) || isset($single_property->specialfinancing) || isset($single_property->exteriorfeatures) ||
			  isset($single_property->vacant) || isset($single_property->unmapped->Occupancy) || isset($single_property->leaseterms) || isset($single_property->unmapped->SpecialFeature)  || isset($single_property->unmapped->AuctionYN) || isset($single_property->unmapped->Internet) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingConditionsYN)): ?>
			<li>Listing Conditions: [unmapped_ListingConditionsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TypeofContract)): ?>
			<li>Type of Contract: [unmapped_TypeofContract]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LandInformation)): ?>
			<li>Land Information: [unmapped_LandInformation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AuctionYN)): ?>
			<li>Auction: [unmapped_AuctionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->grossannualexp)): ?>
			<li>Annual Expenses: [grossannualexp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operating: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->style)): ?>
			<li>Style : [style]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant : [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy : [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->leaseterms)): ?>
			<li>Lease Terms: [leaseterms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpecialFeature)): ?>
			<li>Special Feature: [unmapped_SpecialFeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AuctionYN)): ?>
			<li>Auction: [unmapped_AuctionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">	
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garageparking) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garageparking)): ?>
			<li>Parking Spaces: [garageparking]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>	
	
	<li class="cell">
		
		<?php if( isset($single_property->taxyear) || isset($single_property->unmapped->SemiAnnualTax) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SemiAnnualTax)): ?>
			<li>Semi Annual Taxes: [unmapped_SemiAnnualTax]</li>
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