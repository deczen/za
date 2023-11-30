<ul class="zy-features-grid">
	<?php if( isset($single_property->appliances) || isset($single_property->basementfeature) || isset($single_property->unmapped->{"Bath 1 Features"}) || isset($single_property->unmapped->{"Bathroom Level 1"}) || isset($single_property->unpammed->{"Bath Lvl 1 Type"}) ||
			  isset($single_property->unmapped->{"Bedroom Level 1"}) || isset($single_property->unmapped->{"Entry (Foyer)"}) || isset($single_property->unmapped->{"Family Room"}) || isset($single_property->unmapped->{"Formal Dining Room"}) || isset($single_property->furnished) ||
			  isset($single_property->interiorfeatures) || isset($single_property->unmapped->{"Kitchen Features"}) || isset($single_property->unmapped->{"Laundry Room"}) || isset($single_property->unmapped->{"MasterBed Feat"}) || isset($single_property->unmapped->Windows) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basementfeature)): ?>
			<li>Basement Features: [basementfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bath 1 Features"})): ?>
			<li>Bath1 Features: [unmapped_Bath 1 Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bathroom Level 1"})): ?>
			<li>Bathroom Level1: [unmapped_Bathroom Level 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bath Lvl 1 Type"})): ?>
			<li>Bathroom Level1 Type: [unmapped_Bath Lvl 1 Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bedroom Level 1"})): ?>
			<li>Bedroom Level1: [unmapped_Bedroom Level 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Entry (Foyer)"})): ?>
			<li>Entry Foyer: [unmapped_Entry (Foyer)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Family Room"})): ?>
			<li>Family Room YN: [unmapped_Family Room]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Formal Dining Room"})): ?>
			<li>Formal Dining Room: [unmapped_Formal Dining Room]</li>
			<?php endif; ?>
			<?php if( isset($single_property->furnished)): ?>
			<li>Furnishing: [furnished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Inside Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Kitchen Features"})): ?>
			<li>Kitchen Features: [unmapped_Kitchen Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Laundry Room"})): ?>
			<li>Laundry Room: [unmapped_Laundry Room]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"MasterBed Feat"})): ?>
			<li>Master Bed Features: [unmapped_MasterBed Feat]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Windows)): ?>
			<li>Windows: [unmapped_Windows]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>		
	
	
	<?php if( isset($single_property->unmapped->Access) || isset($single_property->unmapped->{"Condo/Apt Bldg Lev"}) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->garageparking) ||
			  isset($single_property->unmapped->{"Land Description"}) || isset($single_property->lotdescription) || isset($single_property->unmapped->{"Outside Feature"}) || isset($single_property->parkingfeature) || isset($single_property->roofmaterial) ||
			  isset($single_property->unmapped->{"Topography Description"}) || isset($single_property->unmapped->View) || isset($single_property->unmapped->{"Association Brd Appr"}) || isset($single_property->unmapped->{"Cross Street Address"}) || isset($single_property->unpammed->{"Degree Complete"}) ||
			  isset($single_property->depositreqd) || isset($single_property->unmapped->{"Extra Pet Deposit"}) || isset($single_property->unmapped->{"Extra Smoking Depst"}) || isset($single_property->forsale) || isset($single_property->unmapped->{"HOA Amount"}) ||
			  isset($single_property->unmapped->{"HOA Management Co"}) || isset($single_property->unmapped->{"HOA Paid By"}) || isset($single_property->unmapped->{"HOA Yes/No"}) || isset($single_property->leasetype) || isset($single_property->unmapped->Miscellaneous) || isset($single_property->unmapped->Occupancy) ||
			  isset($single_property->petrestrictionsallow) || isset($single_property->petsallowed) || isset($single_property->unitplacement) || isset($single_property->propsubtype) || isset($single_property->smokingallowed) || isset($single_property->specialfinancing) ||
			  isset($single_property->unmapped->{"Suburb (SIC)"}) || isset($single_property->unmapped->Township) || isset($single_property->unmapped->{"Water Paid By"}) || isset($single_property->unmapped->{"Primary Water Source"}) || isset($single_property->zonedescription) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->Access)): ?>
			<li>Access: [unmapped_Access]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Condo/Apt Bldg Lev"})): ?>
			<li>Condo Level: [unmapped_Condo/Apt Bldg Lev]</li>
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
			<?php if( isset($single_property->unmapped->{"Land Description"})): ?>
			<li>Land Description: [unmapped_Land Description]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Dimensions: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Outside Feature"})): ?>
			<li>Outside Features: [unmapped_Outside Feature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Topography Description"})): ?>
			<li>Topography: [unmapped_Topography Description]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Association Brd Appr"})): ?>
			<li>Association Board Approval: [unmapped_Association Brd Appr]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street Address"})): ?>
			<li>Cross Street Address: [unmapped_Cross Street Address]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Degree Complete"})): ?>
			<li>Degree Complete: [unmapped_Degree Complete]</li>
			<?php endif; ?>
			<?php if( isset($single_property->depositreqd)): ?>
			<li>Deposit Amount: [depositreqd]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Extra Pet Deposit"})): ?>
			<li>Extra Pet Deposit: [unmapped_Extra Pet Deposit]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Extra Smoking Depst"})): ?>
			<li>Extra Smoking Deposit: [unmapped_Extra Smoking Depst]</li>
			<?php endif; ?>
			<?php if( isset($single_property->forsale)): ?>
			<li>For Sale: [forsale]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Amount"})): ?>
			<li>Hoa Amount: [unmapped_HOA Amount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Management Co"})): ?>
			<li>Hoa Management Co: [unmapped_HOA Management Co]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Paid By"})): ?>
			<li>Hoa Paid By: [unmapped_HOA Paid By]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Yes/No"})): ?>
			<li>Hoa YN: [unmapped_HOA Yes/No]</li>
			<?php endif; ?>
			<?php if( isset($single_property->leasetype)): ?>
			<li>Lease Type Length: [leasetype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
			<li>Miscellaneous: [unmapped_Miscellaneous]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitplacement)): ?>
			<li>Property Description: [unitplacement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Rental Type: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->smokingallowed)): ?>
			<li>Smoking Allowed: [smokingallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Suburb (SIC)"})): ?>
			<li>Suburb SIC: [unmapped_Suburb (SIC)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<li>Township: [unmapped_Township]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Water Paid By"})): ?>
			<li>Water Paid By: [unmapped_Water Paid By]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Primary Water Source"})): ?>
			<li>Water Source: [unmapped_Primary Water Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zoning: [zonedescription]</li>
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
		
	<?php if( isset($single_property->unmapped->{"Separate Air Cond"}) || isset($single_property->unmapped->{"Separate Furnace"}) || isset($single_property->unmapped->{"Separate Gas & Elec"}) || isset($single_property->gas) || isset($single_property->unmapped->{"Heat Paid By"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Separate Air Cond"})): ?>
			<li>Separate Air Conditioning: [unmapped_Separate Air Cond]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Separate Furnace"})): ?>
			<li>Separate Furnace: [unmapped_Separate Furnace]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Separate Gas & Elec"})): ?>
			<li>Separate Gas Electric: [unmapped_Separate Gas & Elec]</li>
			<?php endif; ?>
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Heat Paid By"})): ?>
			<li>Heat Paid By: [unmapped_Heat Paid By]</li>
			<?php endif; ?>
			
		</ul>
	
	</li>
	<?php endif; ?>

</ul>