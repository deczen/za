<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->Auction) || isset($single_property->nobuildings) || isset($single_property->unmapped->{"Business Type"}) || isset($single_property->unmapped->{"Cap Rate"}) || isset($single_property->unmapped->{"Dock Doors"}) ||
			  isset($single_property->exterior) || isset($single_property->flooring) || isset($single_property->unmapped->Ceilings) || isset($single_property->construction) || isset($single_property->location) ||
			  isset($single_property->lot) || isset($single_property->lotdescription) || isset($single_property->lotsize) || isset($single_property->unmapped->{"Road Frontage"}) || isset($single_property->unmapped->Structures) ||
			  isset($single_property->unmapped->{"Stories"}) || isset($single_property->unmapped->Condition) || isset($single_property->noofrestrooms) || isset($single_property->unmapped->{"Close To"}) || isset($single_property->unmapped->{"Current Use"}) ||
			  isset($single_property->zoning) || isset($single_property->yearbuiltsource) || isset($single_property->unmapped->{"Source of Financials"}) || isset($single_property->unmapped->Auction) || isset($single_property->unmapped->{"New Construct/Resale"}) ||
			  isset($single_property->unmapped->{"Industrial Sq Ft"}) || isset($single_property->unmapped->{"Min Avail SqFt"}) || isset($single_property->unmapped->{"Office Sq Ft"}) || isset($single_property->unmapped->{"# of Offices"}) || isset($single_property->unmapped->{"Percent Office"}) ||
			  isset($single_property->unmapped->{"Retail Sq Ft"}) || isset($single_property->unmapped->{"Tenant Allow/Fixed"}) || isset($single_property->unmapped->{"Tenant Allow/Sq Ft"}) || isset($single_property->unmapped->{"Tenant Sq Ft"}) || isset($single_property->unmapped->{"Warehouse Sq Ft"}) ||
			  isset($single_property->unmapped->{"Est Net Income"}) || isset($single_property->unmapped->{"Est Total Annual Exp"}) || isset($single_property->grossannualincome) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobuildings)): ?>
			<li>Buildings: [nobuildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Business Type"})): ?>
			<li>Business Type: [unmapped_Business Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cap Rate"})): ?>
			<li>Cap Rate: [unmapped_Cap Rate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Dock Doors"})): ?>
			<li>Dock Doors: [unmapped_Dock Doors]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Ceilings)): ?>
			<li>Ceilings: [unmapped_Ceilings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Status: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->location)): ?>
			<li>Location: [location]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): ?>
			<li>Road Frontage: [unmapped_Road Frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Structures)): ?>
			<li>Structures: [unmapped_Structures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Stories)): ?>
			<li>Stories: [unmapped_Stories]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Condition)): ?>
			<li>Condition: [unmapped_Condition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofrestrooms)): ?>
			<li>Restrooms: [noofrestrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Close To"})): ?>
			<li>Close To: [unmapped_Close To]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Current Use"})): ?>
			<li>Current Use: [unmapped_Current Use]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltsource)): ?>
			<li>Year Built Source: [yearbuiltsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Source of Financials"})): ?>
			<li>Source of Financials: [unmapped_Source of Financials]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"New Construct/Resale"})): ?>
			<li>New Construct/Resale: [unmapped_New Construct/Resale]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Industrial Sq Ft"})): ?>
			<li>Industrial Sq Ft: [unmapped_Industrial Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Min Avail SqFt"})): ?>
			<li>Min Avail SqFt: [unmapped_Min Avail SqFt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Office Sq Ft"})): ?>
			<li>Office Sq Ft: [unmapped_Office Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of Offices"})): ?>
			<li>No of Offices: [unmapped_# of Offices]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Percent Office"})): ?>
			<li>Percent Office: [unmapped_Percent Office]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Retail Sq Ft"})): ?>
			<li>Retail Sq Ft: [unmapped_Retail Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tenant Allow/Fixed"})): ?>
			<li>Tenant Allow Fixed: [unmapped_Tenant Allow/Fixed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tenant Allow/Sq Ft"})): ?>
			<li>Tenant Allow Sq Ft: [unmapped_Tenant Allow/Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tenant Sq Ft"})): ?>
			<li>Tenant Sq Ft: [unmapped_Tenant Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Warehouse Sq Ft"})): ?>
			<li>Warehouse Sq Ft: [unmapped_Warehouse Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Net Income"})): ?>
			<li>Est Net Income: [unmapped_Est Net Income]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Total Annual Exp"})): ?>
			<li>Est Total Annual Exp: [unmapped_Est Total Annual Exp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Scheduled Inc: [grossannualincome]</li>
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
		
		<?php if( isset($single_property->parkingfeature) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->heating) || isset($single_property->water) || isset($single_property->unmapped->{"Sewer/Septic"}) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->heating)): ?>
				<li>Heat / Cool: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water Utilities: [water]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Sewer/Septic"})): ?>
				<li>Sewer/Septic: [unmapped_Sewer/Septic]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"City Transfer Tax"}) || isset($single_property->unmapped->{"Cty Transfer Tax Rat"}) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->{"City Transfer Tax"})): ?>
				<li>City Transfer Tax: [unmapped_City Transfer Tax]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Cty Transfer Tax Rat"})): ?>
				<li>City Transfer Tax Rate: [unmapped_Cty Transfer Tax Rat]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>