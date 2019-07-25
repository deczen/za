<ul class="zy-features-grid">
	<?php if( isset($single_property->propsubtype) || isset($single_property->unitno) || isset($single_property->unmapped->{'Located on Floor'}) || isset($single_property->unmapped->Levels) /*|| isset($single_property->style)*/ || isset($single_property->vacant) || isset($single_property->buildingconstruction) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->basement) || isset($single_property->basementfeature) || isset($single_property->schooldistrict) || isset($single_property->amenities) || isset($single_property->exterior) || isset($single_property->exteriorunitfeatures) || isset($single_property->interiorfeatures) || isset($single_property->appliances) || isset($single_property->exteriorfeatures) || isset($single_property->unmapped->Fireplace) || isset($single_property->unmapped->{'Manufactured Housing Y/N'}) /*|| isset($single_property->unmapped->{'Cumulative DOM'})*/ /*|| isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})*/ || isset($single_property->unmapped->Basement) || isset($single_property->unmapped->{'Tenant Occupied'}) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->unmapped->{'Mid/High Rise'}) || isset($single_property->unmapped->{'Built Prior to 1978'}) || isset($single_property->unmapped->{'Documented SqFt Source'}) || isset($single_property->unmapped->TransactionType) || isset($single_property->lotdescription) || isset($single_property->zoning) || isset($single_property->petsallowed) || isset($single_property->unmapped->AnnualBaseRent) || isset($single_property->unmapped->EffectiveIncome) || isset($single_property->unmapped->EffectiveIncomePotential) || isset($single_property->unmapped->ExpenseNonReimbursable) || isset($single_property->unmapped->ExpenseNonReimbursementPotential) || isset($single_property->unmapped->ExpenseReimbursable) || isset($single_property->unmapped->ExpenseReimbursablePotential) || isset($single_property->unmapped->GrossIncomePotential) || isset($single_property->unmapped->NetOperatingIncomePotential) || isset($single_property->unmapped->SubLeaseYN) || isset($single_property->unmapped->TaxesRealEstate) || isset($single_property->unmapped->VacancyPCT) || isset($single_property->unmapped->VacancyPCTPotential) || isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'}) || isset($single_property->unmapped->{'Auction Info: Deposit Required'}) || isset($single_property->unmapped->{'Between Street (1)'}) || isset($single_property->unmapped->{'Between Street (2)'}) || isset($single_property->unmapped->{'Bus Financial Info: Annual Expenses'}) || isset($single_property->unmapped->{'Bus Financial Info: Cost of Goods'}) || isset($single_property->unmapped->{'Bus Financial Info: From'}) || isset($single_property->unmapped->{'Bus Financial Info: Gross Profit'}) || isset($single_property->unmapped->{'Bus Financial Info: Gross Sales'}) || isset($single_property->unmapped->{'Bus Financial Info: Net Before Taxes'}) || isset($single_property->unmapped->{'Bus Financial Info: Through'}) || isset($single_property->unmapped->{'Business Description'}) || isset($single_property->unmapped->{'Corp LimitPerAuditor'}) || isset($single_property->unmapped->{'# of Employees'}) || isset($single_property->unmapped->{'Hours Open'}) || isset($single_property->unmapped->{'Landlord Pays'}) || isset($single_property->unmapped->Ownership) || isset($single_property->reasonforsell) || isset($single_property->unmapped->{'Renewals Available'}) || isset($single_property->unmapped->{'Sales Includes'}) || isset($single_property->secdeposit) || isset($single_property->unmapped->{'Seller/Business Name'}) || isset($single_property->unmapped->{'Tax District'}) || isset($single_property->tenantexpanses) || isset($single_property->unmapped->{'Time SellerWillTrain'}) || isset($single_property->lngAREADESCRIPTION) || isset($single_property->unmapped->{'Years in Business'}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitno)): ?>
				<li>Unit No.: [unitno]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Located on Floor'})): ?>
				<li>Located on Floor: [unmapped_Located on Floor]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->Levels)): ?>
				<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<li>House Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->vacant)): ?>
				<li>Vacant: [vacant]</li>
				<?php endif; ?>
				<?php if( isset($single_property->buildingconstruction)): ?>
				<li>Building Construction: [buildingconstruction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basementfeature)): ?>
				<li>Basement Feature: [basementfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->schooldistrict)): ?>
				<li>School District: [schooldistrict]</li>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior Features: [exterior]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorunitfeatures)): ?>
				<li>Exterior Unit Features: [exteriorunitfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Apliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<li>Fireplace: [unmapped_Fireplace]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Manufactured Housing Y/N'})): ?>
				<li>Manufactured Housing: [unmapped_Manufactured Housing Y/N]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Cumulative DOM'})): ?>
				<li>Cumulative DOM: [unmapped_Cumulative DOM]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})): ?>
				<li>Dir Neg w/Sell Perm: [unmapped_Dir Neg w/Sell Perm]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->Basement)): ?>
				<li>Basement: [unmapped_Basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tenant Occupied'})): ?>
				<li>Tenant Occupied: [unmapped_Tenant Occupied]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
				<li>Lot Size (Side): [unmapped_Lot Size (Side)]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Mid/High Rise'})): ?>
				<li>Mid/High Rise: [unmapped_Mid/High Rise]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Built Prior to 1978'})): ?>
				<li>Built Prior to 1978: [unmapped_Built Prior to 1978]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Documented SqFt Source'})): ?>
				<li>Documented SqFt Source: [unmapped_Documented SqFt Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TransactionType)): ?>
				<li>Transaction Type: [unmapped_TransactionType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AnnualBaseRent)): ?>
				<li>Annual Base Rent: [unmapped_AnnualBaseRent]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->EffectiveIncome)): ?>
				<li>Effective Income: [unmapped_EffectiveIncome]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->EffectiveIncomePotential)): ?>
				<li>Effective Income Potential: [unmapped_EffectiveIncomePotential]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseNonReimbursable)): ?>
				<li>Expense Non Reimbursable: [unmapped_ExpenseNonReimbursable]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseNonReimbursementPotential)): ?>
				<li>Expense Non Reimbursement Potent: [unmapped_ExpenseNonReimbursementPotential]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseReimbursable)): ?>
				<li>Expense Reimbursable: [unmapped_ExpenseReimbursable]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseReimbursablePotential)): ?>
				<li>Expense Reimbursable Potential: [unmapped_ExpenseReimbursablePotential]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GrossIncomePotential)): ?>
				<li>Gross Income Potential: [unmapped_GrossIncomePotential]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NetOperatingIncomePotential)): ?>
				<li>Net Operating Income Potential: [unmapped_NetOperatingIncomePotential]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SubLeaseYN)): ?>
				<li>Sub Lease YN: [unmapped_SubLeaseYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxesRealEstate)): ?>
				<li>Taxes Real Estate: [unmapped_TaxesRealEstate]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->VacancyPCT)): ?>
				<li>Vacancy PCT: [unmapped_VacancyPCT]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->VacancyPCTPotential)): ?>
				<li>Vacancy PCTPotential: [unmapped_VacancyPCTPotential]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
				<li>Auction: [unmapped_Auction Info: Auction/Online Bidding]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Auction Info: Deposit Required'})): ?>
				<li>Auction Deposit Required: [unmapped_Auction Info: Deposit Required]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (1)'})): ?>
				<li>Between Street1: [unmapped_Between Street (1)]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (2)'})): ?>
				<li>Between Street2: [unmapped_Between Street (2)]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Annual Expenses'})): ?>
				<li>Bus Financial Info Annual Expenses: [unmapped_Bus Financial Info: Annual Expenses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Cost of Goods'})): ?>
				<li>Bus Financial Info Costof Goods: [unmapped_Bus Financial Info: Cost of Goods]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: From'})): ?>
				<li>Bus Financial Info From: [unmapped_Bus Financial Info: From]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Gross Profit'})): ?>
				<li>Bus Financial Info Gross Profit: [unmapped_Bus Financial Info: Gross Profit]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Gross Sales'})): ?>
				<li>Bus Financial Info Gross Sales: [unmapped_Bus Financial Info: Gross Sales]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Net Before Taxes'})): ?>
				<li>Bus Financial Info Net Before Taxes: [unmapped_Bus Financial Info: Net Before Taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Through'})): ?>
				<li>Bus Financial Info Through: [unmapped_Bus Financial Info: Through]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Business Description'})): ?>
				<li>Business Description: [unmapped_Business Description]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Corp LimitPerAuditor'})): ?>
				<li>Corp Limit Per Auditor: [unmapped_Corp LimitPerAuditor]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'# of Employees'})): ?>
				<li>Employees : [unmapped_# of Employees]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Hours Open'})): ?>
				<li>Hours Open: [unmapped_Hours Open]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Landlord Pays'})): ?>
				<li>Landlord Pays: [unmapped_Landlord Pays]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Ownership)): ?>
				<li>Ownership: [unmapped_Ownership]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reasonforsell)): ?>
				<li>Reason For Sale: [reasonforsell]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Renewals Available'})): ?>
				<li>Renewals Available: [unmapped_Renewals Available]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Sales Includes'})): ?>
				<li>Sales Includes: [unmapped_Sales Includes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<li>Security Deposit: [secdeposit]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Seller/Business Name'})): ?>
				<li>Seller Business Name: [unmapped_Seller/Business Name]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tax District'})): ?>
				<li>Tax District: [unmapped_Tax District]</li>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<li>Tenant Pays: [tenantexpanses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Time SellerWillTrain'})): ?>
				<li>Time Seller Will Train: [unmapped_Time SellerWillTrain]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
				<li>Township : [lngAREADESCRIPTION]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Years in Business'})): ?>
				<li>Years In Business: [unmapped_Years in Business]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->bldgsqfeet) || isset($single_property->heating) || isset($single_property->aircondition) || isset($single_property->cooling) || isset($single_property->utilities) || isset($single_property->reqdownassociation) || isset($single_property->condoassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'}) ):?>
			
	<li class="cell">
		<?php if( isset($single_property->bldgsqfeet) ):?>
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<li>Bldg Sq Ft: [bldgsqfeet]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->heating) || isset($single_property->aircondition) || isset($single_property->cooling) || isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Condition: [aircondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php /*
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School: [gradeschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		*/ ?>
		
		<?php if( isset($single_property->reqdownassociation) || isset($single_property->condoassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'}) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>HOA Fee: [reqdownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->condoassociation)): ?>
				<li>Condo Association: [condoassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>HOA Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'})): ?>
				<li>HOA/COA Info: HOA/COA Contact Name: [unmapped_HOA/COA Info: HOA/COA Contact Name]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php $roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false; ?>
		<?php if( isset($roomLevels) ||  isset($single_property->Rooms) || isset($single_property->unmapped->{'Great Room Level'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) ):?>
		
			<h3 class="zy-feature-title">Room Information</h3>
			
			<?php if( isset($single_property->Rooms) || isset($single_property->unmapped->{'Great Room Level'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) ):?>
			<ul class="zy-sub-list">
					<?php if( isset($single_property->unmapped->Rooms)): ?>
					<li>Rooms: [unmapped_Rooms]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Great Room Level'}) && $single_property->unmapped->{'Great Room Level'} !== 0): ?>
					<li>Great Rooms (Entry Level): [unmapped_Great Room Level]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) && $single_property->unmapped->{'Bedroom Level: Beds Down1'} > 0 ): ?>
					<li>Bedrooms (Lower Level1): [unmapped_Bedroom Level: Beds Down1]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) && $single_property->unmapped->{'Bedroom Level: Beds Down2'} > 0 ): ?>
					<li>Bedrooms (Lower Level2): [unmapped_Bedroom Level: Beds Down2]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) && $single_property->unmapped->{'Bedroom Level: Beds UP1'} > 0 ): ?>
					<li>Bedrooms (Upper Level1): [unmapped_Bedroom Level: Beds UP1]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) && $single_property->unmapped->{'Bedroom Level: Beds UP2'} > 0 ): ?>
					<li>Bedrooms (Upper Level2): [unmapped_Bedroom Level: Beds UP2]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) && $single_property->unmapped->{'Full Baths Level: Full B Entry Level'} > 0 ): ?>
					<li>Full Baths (Entry Level): [unmapped_Full Baths Level: Full B Entry Level]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) && $single_property->unmapped->{'Half Baths Level: Half B Entry Level'} > 0 ): ?>
					<li>Half Baths (Entry Level): [unmapped_Half Baths Level: Half B Entry Level]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) && $single_property->unmapped->{'Half Baths Level: Half Bath Down2'} > 0 ): ?>
					<li>Half Baths (Lower Level2): [unmapped_Half Baths Level: Half Bath Down2]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) && $single_property->unmapped->{'Half Baths Level: Half Bath Down1'} > 0 ): ?>
					<li>Half Baths (Lower Level1): [unmapped_Half Baths Level: Half Bath Down1]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) && $single_property->unmapped->{'Full Baths Level: Full Baths Down1'} > 0 ): ?>
					<li>Full Baths (Lower Level1): [unmapped_Full Baths Level: Full Baths Down1]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) && $single_property->unmapped->{'Half Baths Level: Half Baths UP2'} > 0 ): ?>
					<li>Half Baths (Upper Level2): [unmapped_Half Baths Level: Half Baths UP2]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) && $single_property->unmapped->{'Half Baths Level: Half Baths UP1'} > 0 ): ?>
					<li>Half Baths (Upper Level1): [unmapped_Half Baths Level: Half Baths UP1]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) && $single_property->unmapped->{'Full Baths Level: Full Baths UP2'} > 0 ): ?>
					<li>Full Baths (Upper Level2): [unmapped_Full Baths Level: Full Baths UP2]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) && $single_property->unmapped->{'Full Baths Level: Full Baths UP1'} > 0 ): ?>
					<li>Full Baths (Upper Level1): [unmapped_Full Baths Level: Full Baths UP1]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) && $single_property->unmapped->{'Full Baths Level: Full Baths Down2'} > 0 ): ?>
					<li>Full Baths (Lower Level2): [unmapped_Full Baths Level: Full Baths Down2]</li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
		
			<?php if($roomLevels): ?>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<ul class="zy-sub-list">
							<li>Room Type: [roomLevels_<?php echo $rkey; ?>_roomType]</li>
							<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]</li>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<li>Room Dim: [roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]</li>
							<?php endif; ?>
						</ul>
				<?php endforeach; ?>
					
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if( isset($single_property->parkingfeature) || isset($single_property->garagespaces) || isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Parking: [garageparking]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->LegalDescription) || isset($single_property->taxyear) || isset($single_property->taxes) /*|| isset($single_property->unmapped->{'Tax District'})*/ /*|| isset($single_property->unmapped->{'Tax Abatement'})*/ ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->LegalDescription)): ?>
				<li>Legal Description: [unmapped_LegalDescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Tax District'})): ?>
				<li>Tax District: [unmapped_Tax District]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Tax Abatement'})): ?>
				<li>Tax Abatement: [unmapped_Tax Abatement]</li>
				<?php endif;*/ ?>
			</ul>
		<?php endif; ?>
	</li>	
</ul>