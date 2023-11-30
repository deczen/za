<ul class="zy-features-grid">
	<?php if( isset($single_property->specialfinancing) || isset($single_property->lotdescription) || isset($single_property->unmapped->ListingConditionsYN) || isset($single_property->unmapped->TypeofContract) || isset($single_property->unmapped->LandInformation) ||
			  isset($single_property->unmapped->AuctionYN) || isset($single_property->unmapped->Internet) || isset($single_property->unmapped->Occupancy) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
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