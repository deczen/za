<ul class="zy-features-grid">
	<?php if( isset($single_property->foundation) || isset($single_property->lotdescription) || isset($single_property->appliances) || isset($single_property->construction) || isset($single_property->interiorfeatures) ||
			  isset($single_property->unmapped->View) || isset($single_property->vacant) || isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->unmapped->lngCOUNTYDESCRIPTION) || isset($single_property->roofmaterial) ||
			  isset($single_property->firmrmk1) || isset($single_property->noofloadingdocks) || isset($single_property->unmapped->{"Irrigation Water Rights YN"}) || isset($single_property->unmapped->{"Additional Parcels YN"}) || isset($single_property->unmapped->{"Senior Community YN"}) ||
			  isset($single_property->unmapped->{"Association YN"}) || isset($single_property->unmapped->{"Rented YN"}) || isset($single_property->unmapped->{"Irrigation Water Rights YN"}) || isset($single_property->unmapped->{"Special Listing Conditions"}) || isset($single_property->unmapped->{"Horse Property YN"}) ||
			  isset($single_property->unmapped->{"Potential Tax Liability YN"}) || isset($single_property->unmapped->{"Assessment YN"}) || isset($single_property->unmapped->{"Common Walls"}) || isset($single_property->unmapped->{"Inclusions/Exclusions: Inclusions"}) || isset($single_property->unmapped->{"Rooms"}) ||
			  isset($single_property->unmapped->{"Window Features"}) || isset($single_property->unmapped->{"Other Structures"}) || isset($single_property->unmapped->{"Accessory Dwelling Unit YN"}) || isset($single_property->unmapped->{"Cumulative DOM"}) || isset($single_property->unmapped->{"Security Features"}) ||
			  isset($single_property->unmapped->{"Road Surface Type"}) || isset($single_property->yearbuilt) || isset($single_property->zoning) || isset($single_property->unmapped->{"Existing Lease Type"}) || isset($single_property->unmapped->{"Business Type (AKA Sub Type)"}) ||
			  isset($single_property->unmapped->{"Listing Terms"}) || isset($single_property->unmapped->{"Miscellaneous Information: # Overhead/Dock Doors"}) || isset($single_property->unmapped->{"Income and Expenses (Annual Amounts): Vacancy %"}) || isset($single_property->unmapped->{"Miscellaneous Information: Confidentiality/Non-Disclosure Agreement"}) || isset($single_property->unmapped->{"Income and Expenses (Annual Amounts): Cap Rate %"}) ||
			  isset($single_property->unmapped->{"Lot Size Square Feet"}) || isset($single_property->unmapped->{"Building Area Source"}) || isset($single_property->unmapped->{"Sign On Property YN"}) || isset($single_property->neighborhood) || isset($single_property->tenantexpanses) ||
			  isset($single_property->rentfeeincludes) || isset($single_property->unmapped->{"Owner Name"}) || isset($single_property->unmapped->{"Current Use"}) || isset($single_property->unmapped->{"Cross Street"}) || isset($single_property->unmapped->{"Not Applicable"}) ||
			  isset($single_property->unmapped->{"Power Production"}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{"Acreage Details: Deeded Acres"}) || isset($single_property->feeinterval) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngCOUNTYDESCRIPTION)): ?>
			<li>County Description: [unmapped_lngCOUNTYDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->firmrmk1)): ?>
			<li>Fire Place: [firmrmk1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofloadingdocks)): ?>
			<li>No of Loading Docks: [noofloadingdocks]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Irrigation Water Rights YN"})): ?>
			<li>Irrigation Water Rights: [unmapped_Irrigation Water Rights YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Additional Parcels YN"})): ?>
			<li>Additional Parcels YN: [unmapped_Additional Parcels YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Senior Community YN"})): ?>
			<li>Senior Community YN: [unmapped_Senior Community YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Association YN"})): ?>
			<li>Association YN: [unmapped_Association YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Rented YN"})): ?>
			<li>Rented YN: [unmapped_Rented YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Special Listing Conditions"})): ?>
			<li>Special Listing Conditions: [unmapped_Special Listing Conditions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Horse Property YN"})): ?>
			<li>Horse Property YN: [unmapped_Horse Property YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Potential Tax Liability YN"})): ?>
			<li>Potential Tax Liability YN: [unmapped_Potential Tax Liability YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Assessment YN"})): ?>
			<li>Assessment YN: [unmapped_Assessment YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Common Walls"})): ?>
			<li>Common Walls: [unmapped_Common Walls]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Inclusions/Exclusions"})): ?>
			<li>Inclusions/Exclusions: [unmapped_Inclusions/Exclusions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Rooms"})): ?>
			<li>Rooms: [unmapped_Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Window Features"})): ?>
			<li>Window Features: [unmapped_Window Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Other Structures"})): ?>
			<li>Other Structures: [unmapped_Other Structures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Accessory Dwelling Unit YN"})): ?>
			<li>Accessory Dwelling Unit YN: [unmapped_Accessory Dwelling Unit YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cumulative DOM"})): ?>
			<li>Cumulative DOM: [unmapped_Cumulative DOM]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Security Features"})): ?>
			<li>Security Features: [unmapped_Security Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Surface Type"})): ?>
			<li>Road Surface Type: [unmapped_Road Surface Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Built: [yearbuilt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Existing Lease Type"})): ?>
			<li>Existing Lease Type: [unmapped_Existing Lease Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Business Type (AKA Sub Type)"})): ?>
			<li>Business Type (AKA Sub Type): [unmapped_Business Type (AKA Sub Type)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Listing Terms"})): ?>
			<li>Listing Terms: [unmapped_Listing Terms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Miscellaneous Information: # Overhead/Dock Doors"})): ?>
			<li>No. of Overhead/Dock Doors: [unmapped_Miscellaneous Information: # Overhead/Dock Doors]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Income and Expenses (Annual Amounts): Vacancy %"})): ?>
			<li>Vacancy %: [unmapped_Income and Expenses (Annual Amounts): Vacancy %]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Miscellaneous Information: Confidentiality/Non-Disclosure Agreement"})): ?>
			<li>Confidentiality/Non-Disclosure Agreement: [unmapped_Miscellaneous Information: Confidentiality/Non-Disclosure Agreement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Income and Expenses (Annual Amounts): Cap Rate %"})): ?>
			<li>Cap Rate %: [unmapped_Income and Expenses (Annual Amounts): Cap Rate %]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Square Feet"})): ?>
			<li>Lot Size Square Feet: [unmapped_Lot Size Square Feet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Building Area Source"})): ?>
			<li>Building Area Source: [unmapped_Building Area Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Sign On Property YN"})): ?>
			<li>Sign On Property YN: [unmapped_Sign On Property YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->neighborhood)): ?>
			<li>Neighborhood: [neighborhood]</li>
			<?php endif; ?>
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Expanses: [tenantexpanses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<li>Rent Fee Includes: [rentfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Owner Name"})): ?>
			<li>Owner Name: [unmapped_Owner Name]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Current Use"})): ?>
			<li>Current Use: [unmapped_Current Use]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street"})): ?>
			<li>Cross Street: [unmapped_Cross Street]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Section"})): ?>
			<li>Section: [unmapped_Section]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Power Production"})): ?>
			<li>Power Production: [unmapped_Power Production]</li>
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Property Sub Type: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Acreage Details: Deeded Acres"})): ?>
			<li>Acreage Details: [unmapped_Acreage Details: Deeded Acres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Fee Interval: [feeinterval]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		
		
		
		<?php if( isset($single_property->unmapped->{"# of Units Total"}) || isset($single_property->unmapped->{"Unit 1: # of Bedrooms"}) || isset($single_property->unmapped->{"Unit 1 Rent Includes"}) || isset($single_property->unmapped->{"Unit 2: # of Bedrooms"}) || isset($single_property->unmapped->{"Unit 2: # Full Baths"}) ||
				  isset($single_property->unmapped->{"Unit 2: Monthly Rent"}) || isset($single_property->unmapped->{"Unit 3: # of Bedrooms"}) || isset($single_property->unmapped->{"Unit 3: # Full Baths"}) || isset($single_property->unmapped->{"Unit 3: Monthly Rent"}) ):?>
		<h3 class="zy-feature-title">Room Informations</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"# of Units Total"})): ?>
			<li>No of Total Units: [unmapped_# of Units Total]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1: # of Bedrooms"})): ?>
			<li>Unit 1: No. of Bedrooms: [unmapped_Unit 1: # of Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Rent Includes"})): ?>
			<li>Unit 1: Rent Includes: [unmapped_Unit 1 Rent Includes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2: # of Bedrooms"})): ?>
			<li>Unit 2: No. of Bedrooms: [unmapped_Unit 2: # of Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2: # Full Baths"})): ?>
			<li>Unit 2: No. of Full Baths: [unmapped_Unit 2: # Full Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2: Monthly Rent"})): ?>
			<li>Unit 2: Monthly Rent: [unmapped_Unit 2: Monthly Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3: # of Bedrooms"})): ?>
			<li>Unit 3: No. of Bedrooms: [unmapped_Unit 3: # of Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3: # Full Baths"})): ?>
			<li>Unit 3: No. of Full Baths: [unmapped_Unit 3: # Full Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3: Monthly Rent"})): ?>
			<li>Unit 3: Monthly Rent: [unmapped_Unit 3: Monthly Rent]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if(  isset($single_property->unmapped->{"Garage YN"}) || isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Parking Features"}) || isset($single_property->unmapped->{"Parking Details: # of Carports"}) || isset($single_property->unmapped->{"Parking Details: # of Other Parking"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->{"Garage YN"})): ?>
			<li>Garage YN: [unmapped_Garage YN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>*Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Parking Features"})): ?>
			<li>Parking Features: [unmapped_Parking Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Parking Details: # of Carports"})): ?>
			<li>Parking Details: No. of Carports: [unmapped_Parking Details: # of Carports]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Parking Details: # of Other Parking"})): ?>
			<li>Parking Details: No. of Other Parking: [unmapped_Parking Details: # of Other Parking]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->unmapped->{"Personal Property Taxes"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->{"Personal Property Taxes"})): ?>
			<li>Personal Property Taxes: [unmapped_Personal Property Taxes]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>