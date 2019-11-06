<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->Buildings) || isset($single_property->unmapped->Cars) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->garageparking) || 
			  isset($single_property->unmapped->{"Lot Dimension"}) || isset($single_property->parkingfeature) || isset($single_property->roofmaterial) || isset($single_property->unmapped->View) || isset($single_property->unmapped->{"1-Bedroom Rent"}) || 
			  isset($single_property->unmapped->{"1-Bedroom Units"}) || isset($single_property->unmapped->{"2-Bedroom Rent"}) || isset($single_property->unmapped->{"2-Bedroom Units"}) || isset($single_property->unmapped->{"3+ Bedroom Rent"}) || isset($single_property->unmapped->{"Annual Assessmnt Amt"}) || 
			  isset($single_property->lngAREADESCRIPTION) || isset($single_property->unmapped->Auction) || isset($single_property->unmapped->{"Degree Complete"}) || isset($single_property->documentsonfile) || isset($single_property->unmapped->{"Efficiency Rent"}) ||
			  isset($single_property->unmapped->{"Efficiency Units"}) || isset($single_property->grossannualincome) || isset($single_property->insurancereqd) || isset($single_property->leaseterms) || isset($single_property->unmapped->Maintenance) ||
			  isset($single_property->unmapped->Miscellaneous) || isset($single_property->unmapped->{"Property Subtype 1"}) || isset($single_property->netoperatinginc) || isset($single_property->unmapped->Occupancy) || isset($single_property->unmapped->{"Other Expense"}) ||
			  isset($single_property->unmapped->{"Other Features"}) || isset($single_property->mftype) || isset($single_property->specialfinancing) || isset($single_property->unmapped->Suburb) || isset($single_property->rent2) ||
			  isset($single_property->unmapped->rent1) || isset($single_property->unmapped->{"Unit 3 Rent"}) || isset($single_property->unmapped->{"Unit 4 Rent"}) || isset($single_property->unmapped->Vacancy) || isset($single_property->unmapped->{"Waste Removal"}) ||
			  isset($single_property->unmapped->{"Water and Sewer"}) || isset($single_property->unmapped->{"Water Paid"}) || isset($single_property->zonedescription) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->Buildings)): ?>
			<li>Buildings: [unmapped_Buildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Cars)): ?>
			<li>Cars: [unmapped_Cars]</li>
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
			<?php if( isset($single_property->unmapped->{"Lot Dimension"})): ?>
			<li>Lot Dimensions: [unmapped_Lot Dimension]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"1-Bedroom Rent"})): ?>
			<li>1 Bedroom Rent: [unmapped_1-Bedroom Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"1-Bedroom Units"})): ?>
			<li>1 Bedroom Units: [unmapped_1-Bedroom Units]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"2-Bedroom Rent"})): ?>
			<li>2 Bedroom Rent: [unmapped_2-Bedroom Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"2-Bedroom Units"})): ?>
			<li>2 Bedroom Units: [unmapped_2-Bedroom Units]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"3+ Bedroom Rent"})): ?>
			<li>3 Plus Bedroom Rent: [unmapped_3+ Bedroom Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Assessmnt Amt"})): ?>
			<li>Annual Assessment Amt: [unmapped_Annual Assessmnt Amt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
			<li>Area: [lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Degree Complete"})): ?>
			<li>Degree Complete: [unmapped_Degree Complete]</li>
			<?php endif; ?>
			<?php if( isset($single_property->documentsonfile)): ?>
			<li>Documents Available: [documentsonfile]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Efficiency Rent"})): ?>
			<li>Efficiency Rent: [unmapped_Efficiency Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Efficiency Units"})): ?>
			<li>Efficiency Units: [unmapped_Efficiency Units]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->insurancereqd)): ?>
			<li>Insurance: [insurancereqd]</li>
			<?php endif; ?>
			<?php if( isset($single_property->leaseterms)): ?>
			<li>Lease Information: [leaseterms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Maintenance)): ?>
			<li>Maintenance: [unmapped_Maintenance]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
			<li>Miscellaneous: [unmapped_Miscellaneous]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Subtype 1"})): ?>
			<li>Multifamily Type: [unmapped_Property Subtype 1]</li>
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
			<?php if( isset($single_property->unmapped->{"Other Features"})): ?>
			<li>Other Features: [unmapped_Other Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->mftype)): ?>
			<li>Property Description: [mftype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Suburb)): ?>
			<li>Suburb SIC: [unmapped_Suburb]</li>
			<?php endif; ?>
			<?php if( isset($single_property->rent2)): ?>
			<li>Unit1 Rent: [rent2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->rent1)): ?>
			<li>Unit2 Rent: [rent1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Rent"})): ?>
			<li>Unit3 Rent: [unmapped_Unit 3 Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Rent"})): ?>
			<li>Unit4 Rent: [unmapped_Unit 4 Rent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Vacancy)): ?>
			<li>Vacancy: [unmapped_Vacancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Waste Removal"})): ?>
			<li>Waste Removal: [unmapped_Waste Removal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Water and Sewer"})): ?>
			<li>Water And Sewer: [unmapped_Water and Sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Water Paid"})): ?>
			<li>Water Paid: [unmapped_Water Paid]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zoning: [zonedescription]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">	
		
		<?php if( isset($single_property->unmapped->{"1-Bedroom Sq Ft"}) || isset($single_property->unmapped->{"2-Bedroom Sq Ft"}) || isset($single_property->unmapped->{"3+ Bedroom Sq Ft"}) || isset($single_property->unmapped->{"3+ Bedroom Units"}) || isset($single_property->appliances) || 
				  isset($single_property->unmapped->{"Efficiency Sq Ft"}) || isset($single_property->unmapped->Inoperable) || isset($single_property->interiorfeatures) || isset($single_property->bedrms1) || isset($single_property->unmapped->{"Unit 1 Full Baths"}) || 
				  isset($single_property->unmapped->{"Unit 1 Part Baths"}) || isset($single_property->unmapped->{"Unit 1 Rooms"}) || isset($single_property->bedrms2) || isset($single_property->unmapped->{"Unit 2 Full Baths"}) || isset($single_property->unmapped->{"Unit 2 Part Bath"}) || 
				  isset($single_property->unmapped->{"Unit 2 Rooms"}) || isset($single_property->bedrms3) || isset($single_property->unmapped->{"Unit 3 Full Baths"}) || isset($single_property->unmapped->{"Unit 3 Part Baths"}) || isset($single_property->unmapped->{"Unit 3 Rooms"}) || 
				  isset($single_property->bedrms4) || isset($single_property->unmapped->{"Unit 4 Full Bath"}) || isset($single_property->unmapped->{"Unit 4 Part Bath"}) || isset($single_property->unmapped->{"Unit 4 Rooms"}) || isset($single_property->unmapped->Windows) ):?>
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"1-Bedroom Sq Ft"})): ?>
			<li>1 Bedroom Sq Ft: [unmapped_1-Bedroom Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"2-Bedroom Sq Ft"})): ?>
			<li>2 Bedroom Sq Ft: [unmapped_2-Bedroom Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"3+ Bedroom Sq Ft"})): ?>
			<li>3 Plus Bedroom Sq Ft: [unmapped_3+ Bedroom Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"3+ Bedroom Units"})): ?>
			<li>3 Plus Bedroom Units: [unmapped_3+ Bedroom Units]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances Included: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Efficiency Sq Ft"})): ?>
			<li>Efficiency Sq Ft: [unmapped_Efficiency Sq Ft]</li>
			<?php endif; ?>
			<?php if( isset($single_property->firmrmk1)): ?>
			<li>Fireplace: [firmrmk1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Inside Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bedrms1)): ?>
			<li>Unit1 Bedrooms: [bedrms1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit1 Full Baths"})): ?>
			<li>Unit1 Full Baths: [unmapped_Unit1 Full Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Part Baths"})): ?>
			<li>Unit1 Part Baths: [unmapped_Unit 1 Part Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Rooms"})): ?>
			<li>Unit1 Rooms: [unmapped_Unit 1 Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bedrms2)): ?>
			<li>Unit2 Bedrooms: [bedrms2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Full Baths"})): ?>
			<li>Unit2 Full Baths: [unmapped_Unit 2 Full Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Part Bath"})): ?>
			<li>Unit2 Part Bath: [unmapped_Unit 2 Part Bath]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Rooms"})): ?>
			<li>Unit2 Rooms: [unmapped_Unit 2 Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bedrms3)): ?>
			<li>Unit3 Bedrooms: [bedrms3]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Full Baths"})): ?>
			<li>Unit3 Full Baths: [unmapped_Unit 3 Full Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Part Baths"})): ?>
			<li>Unit3 Part Baths: [unmapped_Unit 3 Part Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Rooms"})): ?>
			<li>Unit3 Rooms: [unmapped_Unit 3 Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bedrms4)): ?>
			<li>Unit4 Bedrooms: [bedrms4]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Full Bath"})): ?>
			<li>Unit4 Full Bath: [unmapped_Unit 4 Full Bath]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Part Bath"})): ?>
			<li>Unit4 Part Bath: [unmapped_Unit 4 Part Bath]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Rooms"})): ?>
			<li>Unit4 Rooms: [unmapped_Unit 4 Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Windows)): ?>
			<li>Windows: [unmapped_Windows]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>	
	
	<li class="cell">
		
	<?php if( isset($single_property->unmapped->{"Separate Air Condi."}) || isset($single_property->unmapped->{"Separate Furnace"}) || isset($single_property->unmapped->{"Separate Gas/Elect"}) || isset($single_property->gas) || 
			  isset($single_property->unmapped->{"Gas and Electric"}) || isset($single_property->unmapped->{"Heat Paid"}) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Separate Air Condi."})): ?>
			<li>Separate Air Conditioning: [unmapped_Separate Air Condi.]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Separate Furnace"})): ?>
			<li>Separate Furnace: [unmapped_Separate Furnace]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Separate Gas/Elect"})): ?>
			<li>Separate Gas/Electric: [unmapped_Separate Gas/Elect]</li>
			<?php endif; ?>
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Gas and Electric"})): ?>
			<li>Gas And Electric: [unmapped_Gas and Electric]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Heat Paid"})): ?>
			<li>Heat Paid: [unmapped_Heat Paid]</li>
			<?php endif; ?>
			
		</ul>
	<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Semi-Annual Taxes"}) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Semi-Annual Taxes"})): ?>
			<li>Semi Annual Taxes: [unmapped_Semi-Annual Taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
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