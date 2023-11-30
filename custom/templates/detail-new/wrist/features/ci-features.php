<ul class="zy-features-grid">
	<?php if( isset($single_property->flooring) || isset($single_property->unmapped->{"Gross Building Area"}) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->{"Net Leasable Area"}) || isset($single_property->unpammed->Office) ||
			  isset($single_property->unmapped->Rentable) || isset($single_property->unmapped->Retail) || isset($single_property->unmapped->Rooms) || isset($single_property->unmapped->Warehouse) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Gross Building Area"})): ?>
			<li>Gross Building Area: [unmapped_Gross Building Area]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Inside Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Net Leasable Area"})): ?>
			<li>Net Leasable Area: [unmapped_Net Leasable Area]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Office)): ?>
			<li>Office: [unmapped_Office]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Rentable)): ?>
			<li>Rentable: [unmapped_Rentable]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Retail)): ?>
			<li>Retail: [unmapped_Retail]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Rooms)): ?>
			<li>Rooms: [unmapped_Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Warehouse)): ?>
			<li>Warehouse: [unmapped_Warehouse]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>		
	
	
	<?php if( isset($single_property->unmapped->{"Access Roads"}) || isset($single_property->foundation) || isset($single_property->frontage) || isset($single_property->lotdescription) || isset($single_property->exteriorfeatures) ||
			  isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Road Frontage"}) || isset($single_property->roofmaterial) || isset($single_property->unmapped->{"Annual Assessmnt Amt"}) || isset($single_property->unmapped->Auction) ||
			  isset($single_property->propsubtype) || isset($single_property->unmapped->{"Cross Street Address"}) || isset($single_property->unmapped->{"Degree Complete"}) || isset($single_property->easements) || isset($single_property->grossannualincome) ||
			  isset($single_property->insurancereqd) || isset($single_property->unmapped->{"Lease Only"}) || isset($single_property->netoperatinginc) || isset($single_property->unmapped->Occupancy) || isset($single_property->unmapped->{"Other Expense"}) ||
			  isset($single_property->rentfeeincludes) || isset($single_property->unmapped->Sales) || isset($single_property->sewer) || isset($single_property->unmapped->Site) || isset($single_property->specialfinancing) || isset($single_property->unmapped->{"Suburb (SIC)"}) ||
			  isset($single_property->unmapped->{"Total Buildings"}) || isset($single_property->unmapped->Township) || isset($single_property->unmapped->{"Use/Type"}) || isset($single_property->unmapped->Vacancy) || isset($single_property->unmapped->{"Waste Removal"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Access Roads"})): ?>
			<li>Access Roads: [unmapped_Access Roads]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->frontage)): ?>
			<li>Frontage: [frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Dimensions: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Outside Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): ?>
			<li>Road Frontage: [unmapped_Road Frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Assessmnt Amt"})): ?>
			<li>Annual Assessment Amt: [unmapped_Annual Assessmnt Amt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Commercial Type: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street Address"})): ?>
			<li>Cross Street Address: [unmapped_Cross Street Address]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Degree Complete"})): ?>
			<li>Degree Complete: [unmapped_Degree Complete]</li>
			<?php endif; ?>
			<?php if( isset($single_property->easements)): ?>
			<li>Easements: [easements]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Income2: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->insurancereqd)): ?>
			<li>Insurance: [insurancereqd]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lease Only"})): ?>
			<li>Lease Only: [unmapped_Lease Only]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operating Income: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Other Expense"})): ?>
			<li>Other Expense: [unmapped_Other Expense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<li>Owner Pays: [rentfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Sales)): ?>
			<li>Sales: [unmapped_Sales]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Site)): ?>
			<li>Site: [unmapped_Site]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Suburb (SIC)"})): ?>
			<li>Suburb SIC: [unmapped_Suburb (SIC)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Buildings"})): ?>
			<li>Total Buildings: [unmapped_Total Buildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<li>Township: [unmapped_Township]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Use/Type"})): ?>
			<li>Use Type: [unmapped_Use/Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Vacancy)): ?>
			<li>Vacancy: [unmapped_Vacancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Waste Removal"})): ?>
			<li>Waste Removal: [unmapped_Waste Removal]</li>
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
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->gas) || isset($single_property->unmapped->{"Gas and Electric"}) || isset($single_property->sewerandwater) || 
				  isset($single_property->water) ):?>
			  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Gas and Electric"})): ?>
			<li>Gas And Electric: [unmapped_Gas and Electric]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewerandwater)): ?>
			<li>Water And Sewer: [sewerandwater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Taxes(annual)"}) || isset($single_property->unmapped->Maintenance) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Taxes(annual)"})): ?>
			<li>Taxes Annual: [unmapped_Taxes(annual)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Maintenance)): ?>
			<li>Maintenance: [unmapped_Maintenance]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	
	</li>

</ul>