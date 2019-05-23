<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->propsubtype) || isset($single_property->unitno) || isset($single_property->unmapped->{'Located on Floor'}) || isset($single_property->unmapped->Levels) || isset($single_property->style) || isset($single_property->vacant) || isset($single_property->buildingconstruction) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->basement) || isset($single_property->basementfeature) || isset($single_property->schooldistrict) || isset($single_property->amenities) || isset($single_property->exterior) || isset($single_property->exteriorunitfeatures) || isset($single_property->interiorfeatures) || isset($single_property->appliances) || isset($single_property->exteriorfeatures) || isset($single_property->unmapped->Fireplace) || isset($single_property->unmapped->{'Manufactured Housing Y/N'}) /*|| isset($single_property->unmapped->{'Cumulative DOM'})*/ /*|| isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})*/ || isset($single_property->unmapped->Basement) || isset($single_property->unmapped->{'Tenant Occupied'}) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->unmapped->{'Mid/High Rise'}) || isset($single_property->unmapped->{'Built Prior to 1978'}) || isset($single_property->unmapped->{'Documented SqFt Source'}) || isset($single_property->unmapped->TransactionType) || isset($single_property->lotdescription) || isset($single_property->zoning) || isset($single_property->petsallowed) || isset($single_property->unmapped->AnnualBaseRent) || isset($single_property->unmapped->EffectiveIncome) || isset($single_property->unmapped->EffectiveIncomePotential) || isset($single_property->unmapped->ExpenseNonReimbursable) || isset($single_property->unmapped->ExpenseNonReimbursementPotential) || isset($single_property->unmapped->ExpenseReimbursable) || isset($single_property->unmapped->ExpenseReimbursablePotential) || isset($single_property->unmapped->GrossIncomePotential) || isset($single_property->unmapped->NetOperatingIncomePotential) || isset($single_property->unmapped->SubLeaseYN) || isset($single_property->unmapped->TaxesRealEstate) || isset($single_property->unmapped->VacancyPCT) || isset($single_property->unmapped->VacancyPCTPotential) || isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'}) || isset($single_property->unmapped->{'Auction Info: Deposit Required'}) || isset($single_property->unmapped->{'Between Street (1)'}) || isset($single_property->unmapped->{'Between Street (2)'}) || isset($single_property->unmapped->{'Bus Financial Info: Annual Expenses'}) || isset($single_property->unmapped->{'Bus Financial Info: Cost of Goods'}) || isset($single_property->unmapped->{'Bus Financial Info: From'}) || isset($single_property->unmapped->{'Bus Financial Info: Gross Profit'}) || isset($single_property->unmapped->{'Bus Financial Info: Gross Sales'}) || isset($single_property->unmapped->{'Bus Financial Info: Net Before Taxes'}) || isset($single_property->unmapped->{'Bus Financial Info: Through'}) || isset($single_property->unmapped->{'Business Description'}) || isset($single_property->unmapped->{'Corp LimitPerAuditor'}) || isset($single_property->unmapped->{'# of Employees'}) || isset($single_property->unmapped->{'Hours Open'}) || isset($single_property->unmapped->{'Landlord Pays'}) || isset($single_property->unmapped->Ownership) || isset($single_property->reasonforsell) || isset($single_property->unmapped->{'Renewals Available'}) || isset($single_property->unmapped->{'Sales Includes'}) || isset($single_property->secdeposit) || isset($single_property->unmapped->{'Seller/Business Name'}) || isset($single_property->unmapped->{'Tax District'}) || isset($single_property->tenantexpanses) || isset($single_property->unmapped->{'Time SellerWillTrain'}) || isset($single_property->lngAREADESCRIPTION) || isset($single_property->unmapped->{'Years in Business'}) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Property Sub Type</td>
					<td class="bt-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unitno)): ?>
				<tr>
					<td class="bt-listing__table__label">Unit No.</td>
					<td class="bt-listing__table__items"><span>[unitno]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Located on Floor'})): ?>
				<tr>
					<td class="bt-listing__table__label">Located on Floor</td>
					<td class="bt-listing__table__items"><span>[unmapped_Located on Floor]</span></td>
				</tr>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->Levels)): ?>
				<tr>
					<td class="bt-listing__table__label">Levels</td>
					<td class="bt-listing__table__items"><span>[unmapped_Levels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">House Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<tr>
					<td class="bt-listing__table__label">Vacant</td>
					<td class="bt-listing__table__items"><span>[vacant]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->buildingconstruction)): ?>
				<tr>
					<td class="bt-listing__table__label">Building Construction</td>
					<td class="bt-listing__table__items"><span>[buildingconstruction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="bt-listing__table__label">Foundation</td>
					<td class="bt-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement</td>
					<td class="bt-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basementfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement Feature</td>
					<td class="bt-listing__table__items"><span>[basementfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->schooldistrict)): ?>
				<tr>
					<td class="bt-listing__table__label">School District</td>
					<td class="bt-listing__table__items"><span>[schooldistrict]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="bt-listing__table__label">Amenities</td>
					<td class="bt-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorunitfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Unit Features</td>
					<td class="bt-listing__table__items"><span>[exteriorunitfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="bt-listing__table__label">Apliances</td>
					<td class="bt-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplace</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fireplace]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Manufactured Housing Y/N'})): ?>
				<tr>
					<td class="bt-listing__table__label">Manufactured Housing</td>
					<td class="bt-listing__table__items"><span>[unmapped_Manufactured Housing Y/N]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Cumulative DOM'})): ?>
				<tr>
					<td class="bt-listing__table__label">Cumulative DOM</td>
					<td class="bt-listing__table__items"><span>[unmapped_Cumulative DOM]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})): ?>
				<tr>
					<td class="bt-listing__table__label">Dir Neg w/Sell Perm</td>
					<td class="bt-listing__table__items"><span>[unmapped_Dir Neg w/Sell Perm]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->Basement)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement</td>
					<td class="bt-listing__table__items"><span>[unmapped_Basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tenant Occupied'})): ?>
				<tr>
					<td class="bt-listing__table__label">Tenant Occupied</td>
					<td class="bt-listing__table__items"><span>[unmapped_Tenant Occupied]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size (Side)</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lot Size (Side)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Mid/High Rise'})): ?>
				<tr>
					<td class="bt-listing__table__label">Mid/High Rise</td>
					<td class="bt-listing__table__items"><span>[unmapped_Mid/High Rise]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Built Prior to 1978'})): ?>
				<tr>
					<td class="bt-listing__table__label">Built Prior to 1978</td>
					<td class="bt-listing__table__items"><span>[unmapped_Built Prior to 1978]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Documented SqFt Source'})): ?>
				<tr>
					<td class="bt-listing__table__label">Documented SqFt Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_Documented SqFt Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TransactionType)): ?>
				<tr>
					<td class="bt-listing__table__label">Transaction Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_TransactionType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Description</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="bt-listing__table__label">Pets Allowed</td>
					<td class="bt-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AnnualBaseRent)): ?>
				<tr>
					<td class="bt-listing__table__label">Annual Base Rent</td>
					<td class="bt-listing__table__items"><span>[unmapped_AnnualBaseRent]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->EffectiveIncome)): ?>
				<tr>
					<td class="bt-listing__table__label">Effective Income</td>
					<td class="bt-listing__table__items"><span>[unmapped_EffectiveIncome]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->EffectiveIncomePotential)): ?>
				<tr>
					<td class="bt-listing__table__label">Effective Income Potential</td>
					<td class="bt-listing__table__items"><span>[unmapped_EffectiveIncomePotential]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseNonReimbursable)): ?>
				<tr>
					<td class="bt-listing__table__label">Expense Non Reimbursable</td>
					<td class="bt-listing__table__items"><span>[unmapped_ExpenseNonReimbursable]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseNonReimbursementPotential)): ?>
				<tr>
					<td class="bt-listing__table__label">Expense Non Reimbursement Potent</td>
					<td class="bt-listing__table__items"><span>[unmapped_ExpenseNonReimbursementPotential]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseReimbursable)): ?>
				<tr>
					<td class="bt-listing__table__label">Expense Reimbursable</td>
					<td class="bt-listing__table__items"><span>[unmapped_ExpenseReimbursable]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExpenseReimbursablePotential)): ?>
				<tr>
					<td class="bt-listing__table__label">Expense Reimbursable Potential</td>
					<td class="bt-listing__table__items"><span>[unmapped_ExpenseReimbursablePotential]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GrossIncomePotential)): ?>
				<tr>
					<td class="bt-listing__table__label">Gross Income Potential</td>
					<td class="bt-listing__table__items"><span>[unmapped_GrossIncomePotential]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NetOperatingIncomePotential)): ?>
				<tr>
					<td class="bt-listing__table__label">Net Operating Income Potential</td>
					<td class="bt-listing__table__items"><span>[unmapped_NetOperatingIncomePotential]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SubLeaseYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Sub Lease YN</td>
					<td class="bt-listing__table__items"><span>[unmapped_SubLeaseYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxesRealEstate)): ?>
				<tr>
					<td class="bt-listing__table__label">Taxes Real Estate</td>
					<td class="bt-listing__table__items"><span>[unmapped_TaxesRealEstate]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->VacancyPCT)): ?>
				<tr>
					<td class="bt-listing__table__label">Vacancy PCT</td>
					<td class="bt-listing__table__items"><span>[unmapped_VacancyPCT]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->VacancyPCTPotential)): ?>
				<tr>
					<td class="bt-listing__table__label">Vacancy PCTPotential</td>
					<td class="bt-listing__table__items"><span>[unmapped_VacancyPCTPotential]</span></td>
				</tr>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
				<tr>
					<td class="bt-listing__table__label">Auction</td>
					<td class="bt-listing__table__items"><span>[unmapped_Auction Info: Auction/Online Bidding]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Auction Info: Deposit Required'})): ?>
				<tr>
					<td class="bt-listing__table__label">Auction Deposit Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_Auction Info: Deposit Required]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (1)'})): ?>
				<tr>
					<td class="bt-listing__table__label">Between Street1</td>
					<td class="bt-listing__table__items"><span>[unmapped_Between Street (1)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (2)'})): ?>
				<tr>
					<td class="bt-listing__table__label">Between Street2</td>
					<td class="bt-listing__table__items"><span>[unmapped_Between Street (2)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Annual Expenses'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info Annual Expenses</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: Annual Expenses]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Cost of Goods'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info Costof Goods</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: Cost of Goods]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: From'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info From</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: From]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Gross Profit'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info Gross Profit</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: Gross Profit]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Gross Sales'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info Gross Sales</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: Gross Sales]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Net Before Taxes'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info Net Before Taxes</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: Net Before Taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bus Financial Info: Through'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bus Financial Info Through</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bus Financial Info: Through]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Business Description'})): ?>
				<tr>
					<td class="bt-listing__table__label">Business Description</td>
					<td class="bt-listing__table__items"><span>[unmapped_Business Description]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Corp LimitPerAuditor'})): ?>
				<tr>
					<td class="bt-listing__table__label">Corp Limit Per Auditor</td>
					<td class="bt-listing__table__items"><span>[unmapped_Corp LimitPerAuditor]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'# of Employees'})): ?>
				<tr>
					<td class="bt-listing__table__label">Employees </td>
					<td class="bt-listing__table__items"><span>[unmapped_# of Employees]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Hours Open'})): ?>
				<tr>
					<td class="bt-listing__table__label">Hours Open</td>
					<td class="bt-listing__table__items"><span>[unmapped_Hours Open]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Landlord Pays'})): ?>
				<tr>
					<td class="bt-listing__table__label">Landlord Pays</td>
					<td class="bt-listing__table__items"><span>[unmapped_Landlord Pays]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Ownership)): ?>
				<tr>
					<td class="bt-listing__table__label">Ownership</td>
					<td class="bt-listing__table__items"><span>[unmapped_Ownership]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->reasonforsell)): ?>
				<tr>
					<td class="bt-listing__table__label">Reason For Sale</td>
					<td class="bt-listing__table__items"><span>[reasonforsell]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Renewals Available'})): ?>
				<tr>
					<td class="bt-listing__table__label">Renewals Available</td>
					<td class="bt-listing__table__items"><span>[unmapped_Renewals Available]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Sales Includes'})): ?>
				<tr>
					<td class="bt-listing__table__label">Sales Includes</td>
					<td class="bt-listing__table__items"><span>[unmapped_Sales Includes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<tr>
					<td class="bt-listing__table__label">Security Deposit</td>
					<td class="bt-listing__table__items"><span>[secdeposit]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Seller/Business Name'})): ?>
				<tr>
					<td class="bt-listing__table__label">Seller Business Name</td>
					<td class="bt-listing__table__items"><span>[unmapped_Seller/Business Name]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tax District'})): ?>
				<tr>
					<td class="bt-listing__table__label">Tax District</td>
					<td class="bt-listing__table__items"><span>[unmapped_Tax District]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<tr>
					<td class="bt-listing__table__label">Tenant Pays</td>
					<td class="bt-listing__table__items"><span>[tenantexpanses]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Time SellerWillTrain'})): ?>
				<tr>
					<td class="bt-listing__table__label">Time Seller Will Train</td>
					<td class="bt-listing__table__items"><span>[unmapped_Time SellerWillTrain]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
				<tr>
					<td class="bt-listing__table__label">Township </td>
					<td class="bt-listing__table__items"><span>[lngAREADESCRIPTION]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Years in Business'})): ?>
				<tr>
					<td class="bt-listing__table__label">Years In Business</td>
					<td class="bt-listing__table__items"><span>[unmapped_Years in Business]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->bldgsqfeet) || isset($single_property->heating) || isset($single_property->aircondition) || isset($single_property->cooling) || isset($single_property->utilities) || isset($single_property->reqdownassociation) || isset($single_property->condoassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'}) ):?>
			
	<li class="cell">
		<?php if( isset($single_property->bldgsqfeet) ):?>
		<h3 class="bt-listing__headline">Interior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<tr>
					<td class="bt-listing__table__label">Bldg Sq Ft</td>
					<td class="bt-listing__table__items"><span>[bldgsqfeet]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->heating) || isset($single_property->aircondition) || isset($single_property->cooling) || isset($single_property->utilities) ):?>
		<h3 class="bt-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="bt-listing__table__label">Air Condition</td>
					<td class="bt-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities</td>
					<td class="bt-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php /*
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="bt-listing__headline">Schools</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->gradeschool)): ?>
				<tr>
					<td class="bt-listing__table__label">Grade School</td>
					<td class="bt-listing__table__items"><span>[gradeschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="bt-listing__table__label">High School</td>
					<td class="bt-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="bt-listing__table__label">Middle School</td>
					<td class="bt-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		*/ ?>
		
		<?php if( isset($single_property->reqdownassociation) || isset($single_property->condoassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'}) ):?>
		<h3 class="bt-listing__headline">Association Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<tr>
					<td class="bt-listing__table__label">HOA Fee</td>
					<td class="bt-listing__table__items"><span>[reqdownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->condoassociation)): ?>
				<tr>
					<td class="bt-listing__table__label">Condo Association</td>
					<td class="bt-listing__table__items"><span>[condoassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">HOA Fee</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Assc Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'})): ?>
				<tr>
					<td class="bt-listing__table__label">HOA/COA Info: HOA/COA Contact Name</td>
					<td class="bt-listing__table__items"><span>[unmapped_HOA/COA Info: HOA/COA Contact Name]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php $roomLevels = $single_property->roomLevels; ?>
		<?php if( isset($roomLevels) ||  isset($single_property->Rooms) || isset($single_property->unmapped->{'Great Room Level'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) ):?>
		
			<h3 class="bt-listing__headline">Room Information</h3>
			
			<?php if( isset($single_property->Rooms) || isset($single_property->unmapped->{'Great Room Level'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) ):?>
			<table class="bt-listing__table">
				<tbody>
					<?php if( isset($single_property->unmapped->Rooms)): ?>
					<tr>
						<td class="bt-listing__table__label">Rooms</td>
						<td class="bt-listing__table__items"><span>[unmapped_Rooms]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Great Room Level'}) && $single_property->unmapped->{'Great Room Level'} !== 0): ?>
					<tr>
						<td class="bt-listing__table__label">Great Rooms (Entry Level)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Great Room Level]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) && $single_property->unmapped->{'Bedroom Level: Beds Down1'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Bedrooms (Lower Level1)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Bedroom Level: Beds Down1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) && $single_property->unmapped->{'Bedroom Level: Beds Down2'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Bedrooms (Lower Level2)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Bedroom Level: Beds Down2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) && $single_property->unmapped->{'Bedroom Level: Beds UP1'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Bedrooms (Upper Level1)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Bedroom Level: Beds UP1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) && $single_property->unmapped->{'Bedroom Level: Beds UP2'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Bedrooms (Upper Level2)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Bedroom Level: Beds UP2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) && $single_property->unmapped->{'Full Baths Level: Full B Entry Level'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Full Baths (Entry Level)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Full Baths Level: Full B Entry Level]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) && $single_property->unmapped->{'Half Baths Level: Half B Entry Level'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Half Baths (Entry Level)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Half Baths Level: Half B Entry Level]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) && $single_property->unmapped->{'Half Baths Level: Half Bath Down2'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Half Baths (Lower Level2)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Half Baths Level: Half Bath Down2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) && $single_property->unmapped->{'Half Baths Level: Half Bath Down1'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Half Baths (Lower Level1)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Half Baths Level: Half Bath Down1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) && $single_property->unmapped->{'Full Baths Level: Full Baths Down1'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Full Baths (Lower Level1)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths Down1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) && $single_property->unmapped->{'Half Baths Level: Half Baths UP2'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Half Baths (Upper Level2)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Half Baths Level: Half Baths UP2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) && $single_property->unmapped->{'Half Baths Level: Half Baths UP1'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Half Baths (Upper Level1)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Half Baths Level: Half Baths UP1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) && $single_property->unmapped->{'Full Baths Level: Full Baths UP2'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Full Baths (Upper Level2)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths UP2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) && $single_property->unmapped->{'Full Baths Level: Full Baths UP1'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Full Baths (Upper Level1)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths UP1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) && $single_property->unmapped->{'Full Baths Level: Full Baths Down2'} > 0 ): ?>
					<tr>
						<td class="bt-listing__table__label">Full Baths (Lower Level2)</td>
						<td class="bt-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths Down2]</span></td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
			<?php endif; ?>
		
			<?php if (isset($roomLevels)): ?>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="bt-listing__table">
						<tbody>
							<tr>
								<td class="bt-listing__table__label">Room Type</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]</span></td>
							</tr>
							<tr>
								<td class="bt-listing__table__label">Room Level</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]</span></td>
							</tr>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<tr>
								<td class="bt-listing__table__label">Room Dim</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]</span></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if( isset($single_property->parkingfeature) || isset($single_property->garagespaces) || isset($single_property->garageparking) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Feature</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Spaces</td>
					<td class="bt-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Parking</td>
					<td class="bt-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->LegalDescription) || isset($single_property->taxyear) || isset($single_property->taxes) /*|| isset($single_property->unmapped->{'Tax District'})*/ /*|| isset($single_property->unmapped->{'Tax Abatement'})*/ ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->LegalDescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Legal Description</td>
					<td class="bt-listing__table__items"><span>[unmapped_LegalDescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Year</td>
					<td class="bt-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Taxes</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td> 
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Tax District'})): ?>
				<tr>
					<td class="bt-listing__table__label">Tax District</td>
					<td class="bt-listing__table__items"><span>[unmapped_Tax District]</span></td> 
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Tax Abatement'})): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Abatement</td>
					<td class="bt-listing__table__items"><span>[unmapped_Tax Abatement]</span></td> 
				</tr>
				<?php endif;*/ ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>	
</ul>