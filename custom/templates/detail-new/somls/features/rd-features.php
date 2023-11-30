<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{"Fenced Type"}) || isset($single_property->unmapped->Substructure) || isset($single_property->unmapped->Street) || isset($single_property->unmapped->{"Cross Street Address"}) || isset($single_property->unmapped->{"Alarm Type"}) ||
			  isset($single_property->unmapped->View) || isset($single_property->unmapped->Terrain) || isset($single_property->unmapped->Internet) || isset($single_property->vacant) || isset($single_property->unmapped->lngAREADESCRIPTION) ||
			  isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->appliances) || isset($single_property->construction) || isset($single_property->interiorfeatures) || isset($single_property->roofmaterial) ||
			  isset($single_property->unmapped->foundation) || isset($single_property->homeownassociation) || isset($single_property->lot) || isset($single_property->landdesc) || isset($single_property->lotdescription) ||
			  isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || 
			  isset($single_property->flooring) || isset($single_property->waterviewfeatures) ||
			  
			  isset($single_property->foundation) || isset($single_property->lotdescription) || isset($single_property->appliances) || isset($single_property->construction) || isset($single_property->interiorfeatures) ||
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
			
			<?php if( isset($single_property->amenities)): ?>
			<li>Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->{"Fenced Type"})): ?>
			<li>Fence Type: [unmapped_Fenced Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Substructure)): ?>
			<li>Substructure: [unmapped_Substructure]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Street)): ?>
			<li>Street: [unmapped_Street]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street Address"})): ?>
			<li>Cross Street Address: [unmapped_Cross Street Address]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Alarm Type"})): ?>
			<li>Alarm Type: [unmapped_Alarm Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Terrain)): ?>
			<li>Terrain: [unmapped_Terrain]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngAREADESCRIPTION)): ?>
			<li>Area Description: [unmapped_lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
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
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->landdesc)): ?>
			<li>Land Description: [landdesc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngCOUNTYDESCRIPTION)): ?>
			<li>County Description: [unmapped_lngCOUNTYDESCRIPTION]</li>
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
		
		<?php if(  isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->garageparking) || isset($single_property->garageparking) || 
				   isset($single_property->unmapped->{"Garage YN"}) || isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Parking Features"}) || isset($single_property->unmapped->{"Parking Details: # of Carports"}) || isset($single_property->unmapped->{"Parking Details: # of Other Parking"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Type : [roadtype]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking: [garageparking]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->{"Garage YN"})): ?>
			<li>Garage YN: [unmapped_Garage YN]</li>
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
		
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
				  isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->unmapped->{"Household Water Avlb"}) ||
				  isset($single_property->unmapped->{"Heat Source"}) || isset($single_property->aircondition) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coolingzones)): ?>
			<li>Cool Zones: [coolingzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heatzones)): ?>
			<li>Heat Zones: [heatzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->energyfeatures)): ?>
			<li>Energy Features: [energyfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hotwater)): ?>
			<li>Hot Water: [hotwater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterheater)): ?>
			<li>Water Heater: [waterheater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>


			<?php if( isset($single_property->unmapped->{"Household Water Avlb"})): ?>
			<li>Water Available: [unmapped_Household Water Avlb]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Heat Source"})): ?>
			<li>Heat Source: [unmapped_Heat Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->aircondition)): ?>
			<li>Air Condition: [aircondition]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{"Tax Account#"}) ||
				  isset($single_property->unmapped->{"Personal Property Taxes"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
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
			
			<?php if( isset($single_property->unmapped->{"Tax Account#"})): ?>
			<li>Tax Account: [unmapped_Tax Account#]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->{"Personal Property Taxes"})): ?>
			<li>Personal Property Taxes: [unmapped_Personal Property Taxes]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Gradeschool: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middleschool: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>Highschool: [highschool]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>

<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->mbrdimen)): ?>
			<li>Size: [mbrdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->mbrlevel)): ?>
			<li>Level: [mbrlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->mbrdscrp)): ?>
			<li>Features: [mbrdscrp]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed2DIMEN)): ?>
			<li>Size: [bed2DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed2LEVEL)): ?>
			<li>Level: [bed2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed2DSCRP)): ?>
			<li>Features: [bed2DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed3DIMEN)): ?>
			<li>Size: [bed3DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed3LEVEL)): ?>
			<li>Level: [bed3LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed3DSCRP)): ?>
			<li>Features: [bed3DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed4DIMEN)): ?>
			<li>Size: [bed4DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed4LEVEL)): ?>
			<li>Level: [bed4LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed4DSCRP)): ?>
			<li>Features: [bed4DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed5DIMEN)): ?>
			<li>Size: [bed5DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed5LEVEL)): ?>
			<li>Level: [bed5LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed5DSCRP)): ?>
			<li>Features: [bed5DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bth1dimen)): ?>
			<li>Size: [bth1dimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth1LEVEL)): ?>
			<li>Level: [bth1LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth1dscrp)): ?>
			<li>Features: [bth1dscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bth2dimen)): ?>
			<li>Size: [bth2dimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth2LEVEL)): ?>
			<li>Level: [bth2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth2dscrp)): ?>
			<li>Features: [bth2dscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bth3dimen)): ?>
			<li>Size: [bth3dimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth3level)): ?>
			<li>Level: [bth3level]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth3dscrp)): ?>
			<li>Features: [bth3dscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->kitdimen)): ?>
			<li>Size: [kitdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->kitlevel)): ?>
			<li>Level: [kitlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->kitdscrp)): ?>
			<li>Features: [kitdscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->famdimen)): ?>
			<li>Size: [famdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->famlevel)): ?>
			<li>Level: [famlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->famdscrp)): ?>
			<li>Features: [famdscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->livdimen)): ?>
			<li>Size: [livdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->livlevel)): ?>
			<li>Level: [livlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->livdscrp)): ?>
			<li>Features: [livdscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->dindimen)): ?>
			<li>Size: [dindimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->dinlevel)): ?>
			<li>Level: [dinlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->dindscrp)): ?>
			<li>Features: [dindscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth1DIMEN)): ?>
			<li>Size: [oth1DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth1LEVEL)): ?>
			<li>Level: [oth1LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth1DSCRP)): ?>
			<li>Features: [oth1DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth2DIMEN)): ?>
			<li>Size: [oth2DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth2LEVEL)): ?>
			<li>Level: [oth2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth2DSCRP)): ?>
			<li>Features: [oth2DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth3DIMEN)): ?>
			<li>Size: [oth3DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth3LEVEL)): ?>
			<li>Level: [oth3LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth3DSCRP)): ?>
			<li>Features: [oth3DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #4</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth4DIMEN)): ?>
			<li>Size: [oth4DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth4LEVEL)): ?>
			<li>Level: [oth4LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth4DSCRP)): ?>
			<li>Features: [oth4DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #5</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth5DIMEN)): ?>
			<li>Size: [oth5DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth5LEVEL)): ?>
			<li>Level: [oth5LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth5DSCRP)): ?>
			<li>Features: [oth5DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #6</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth6DIMEN)): ?>
			<li>Size: [oth6DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth6LEVEL)): ?>
			<li>Level: [oth6LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth6DSCRP)): ?>
			<li>Features: [oth6DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>