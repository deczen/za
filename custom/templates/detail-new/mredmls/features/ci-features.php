<ul class="zy-features-grid">
	<?php if( isset($single_property->construction) || isset($single_property->buildingconstruction) || isset($single_property->roofmaterial) || isset($single_property->electricfeature) || isset($single_property->unmapped->ElectricExpense) || 
			  isset($single_property->unmapped->InternetAutomatedValuationDisplayYN) || isset($single_property->lotsize) || isset($single_property->unmapped->CurrentUse) || isset($single_property->possession) || isset($single_property->zoning) ||
			  isset($single_property->unmapped->Township) || isset($single_property->vacant) || isset($single_property->tenantexpanses) || isset($single_property->yearbuiltdescrp) || isset($single_property->unmapped->FuelExpense) ||
			  isset($single_property->grossannualincome) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->buildingconstruction)): ?>
			<li>Building Construction: [buildingconstruction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation Display YN: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CurrentUse)): ?>
			<li>Current Use: [unmapped_CurrentUse]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<li>Township: [unmapped_Township]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Expanses: [tenantexpanses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Year Built Description: [yearbuiltdescrp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
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
		<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || 
			  isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->noofrestrooms) || 
			  isset($single_property->sprinklers) || isset($single_property->utilities) || isset($single_property->cooling) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
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
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->parkingspaces) || isset($single_property->parkingfeature)  || isset($single_property->unmapped->ParkingTotal) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Features: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ParkingTotal)): ?>
				<li>Parking Total: [unmapped_ParkingTotal]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Amount: [taxes]</li>
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
			<li>Association Fee): [hoafee]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>				

</ul>