<ul class="zy-features-grid">
	<?php if( isset($single_property->style) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->garageparking) || isset($single_property->lotdescription) || 
			  isset($single_property->unmapped->{"Outside Feature"}) || isset($single_property->roofmaterial) || isset($single_property->basement) || isset($single_property->basementfeature) || isset($single_property->specialfinancing) || 
			  isset($single_property->unmapped->Suburb) || isset($single_property->unmapped->{"Unit Entry Level"}) || isset($single_property->zonedescription) || isset($single_property->unmapped->{"Assessment Amt"}) || isset($single_property->lngAREADESCRIPTION) || 
			  isset($single_property->unmapped->Auction) || isset($single_property->unmapped->{"Available for Lease"}) || isset($single_property->unmapped->{"Total Amount"}) || isset($single_property->feeinterval) || isset($single_property->unmapped->{"Inc.In HOA/Condo Fee"}) ||
			  isset($single_property->unmapped->{"HOA Management Co"}) || isset($single_property->unmapped->{"HOA Yes/No"}) || isset($single_property->unmapped->Miscellaneous) || isset($single_property->unmapped->Occupancy) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->style)): ?>
			<li>Architecture: [style]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage: [garageparking]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Dimensions: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Outside Feature"})): ?>
			<li>Outside Features: [unmapped_Outside Feature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basementfeature)): ?>
			<li>Basement Features: [basementfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Suburb)): ?>
			<li>Suburb SIC: [unmapped_Suburb]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit Entry Level"})): ?>
			<li>Unit Entry Level: [unmapped_Unit Entry Level]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zoning: [zonedescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Assessment Amt"})): ?>
			<li>Annual Assessment Amt: [unmapped_Assessment Amt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
			<li>Area: [lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Available for Lease"})): ?>
			<li>Available For Lease: [unmapped_Available for Lease]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Amount"})): ?>
			<li>Hoa Amount: [unmapped_Total Amount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Hoa Fee: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Inc.In HOA/Condo Fee"})): ?>
			<li>Hoa Fee Includes: [unmapped_Inc.In HOA/Condo Fee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Management Co"})): ?>
			<li>Hoa Management Co: [unmapped_HOA Management Co]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Yes/No"})): ?>
			<li>Hoa YN: [unmapped_HOA Yes/No]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
			<li>Miscellaneous: [unmapped_Miscellaneous]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy : [unmapped_Occupancy]</li>
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
		
	<?php if( isset($single_property->gas) || isset($single_property->appliances) || isset($single_property->sewer) || isset($single_property->unmapped->{"Primary Water Source"}) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Primary Water Source"})): ?>
			<li>Water Source: [unmapped_Primary Water Source]</li>
			<?php endif; ?>
			
		</ul>
	<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Other Parking"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Other Parking"})): ?>
			<li>Parking: [unmapped_Other Parking]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Semi-Annual Taxes"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Semi-Annual Taxes"})): ?>
			<li>Semi Annual Taxes: [unmapped_Semi-Annual Taxes]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->masterbath) || isset($single_property->unmapped->{"Bathroom Level 1"}) || isset($single_property->unmapped->{"Bedroom Level 1"}) || isset($single_property->unmapped->{"Entry (Foyer)"}) || isset($single_property->unmapped->{"Kitchen Features"}) || 
				  isset($single_property->unmapped->{"Laundry Room"}) || isset($single_property->unmapped->{"Living Room Feat"}) || isset($single_property->unmapped->{"MasterBed Feat"}) || isset($single_property->unmapped->{"Recreation Room"}) || isset($single_property->norooms) || 
				  isset($single_property->unmapped->Windows) ):?>
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->masterbath)): ?>
			<li>Bath1 Features: [masterbath]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bathroom Level 1"})): ?>
			<li>Bathroom Level1: [unmapped_Bathroom Level 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bedroom Level 1"})): ?>
			<li>Bedroom Level1: [unmapped_Bedroom Level 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Entry (Foyer)"})): ?>
			<li>Entry Foyer: [unmapped_Entry (Foyer)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Kitchen Features"})): ?>
			<li>Kitchen Features: [unmapped_Kitchen Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Laundry Room"})): ?>
			<li>Laundry Room: [unmapped_Laundry Room]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Living Room Feat"})): ?>
			<li>Living Room Features: [unmapped_Living Room Feat]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"MasterBed Feat"})): ?>
			<li>Master Bed Features: [unmapped_MasterBed Feat]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Recreation Room"})): ?>
			<li>Recreation Room: [unmapped_Recreation Room]</li>
			<?php endif; ?>
			<?php if( isset($single_property->norooms)): ?>
			<li>Rooms: [norooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Windows)): ?>
			<li>Windows: [unmapped_Windows]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"School Name 1"}) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"School Name 1"})): ?>
			<li>School District Phone: [unmapped_School Name 1]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>