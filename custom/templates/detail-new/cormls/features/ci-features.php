<ul class="zy-features-grid">
	<?php if( isset($single_property->specialassessments) || isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'}) || isset($single_property->unmapped->{'Between Street (1)'}) || isset($single_property->unmapped->{'Between Street (2)'}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{'Corp LimitPerAuditor'}) || isset($single_property->unmapped->{'Dist To Interchange'}) || isset($single_property->electricfeature) || isset($single_property->unmapped->{'Expenses Paid by L: Curr Yr Est $/SF LL'}) || isset($single_property->exchange) || isset($single_property->unmapped->{'For Lease'}) || isset($single_property->forsale) || isset($single_property->unmapped->{'Mult Use'}) || isset($single_property->unmapped->{'Near Interchange'}) || isset($single_property->specialfinancing) || isset($single_property->unmapped->{'Occupancy Rate'}) || isset($single_property->possession) || isset($single_property->unmapped->{'Previous Use'}) || isset($single_property->unmapped->{'Services Available'}) || isset($single_property->unmapped->{'Suite Info 1: Date Available'}) || isset($single_property->lngAREADESCRIPTION) || isset($single_property->unmapped->{'Use Code'}) || isset($single_property->unmapped->{'Year Remodeled'}) || isset($single_property->zoning) || isset($single_property->zoning) || isset($single_property->unmapped->{'TransactionType'}) || isset($single_property->unmapped->{'VacancyPCT'}) || isset($single_property->unmapped->{'TaxesRealEstate'}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->specialassessments)): ?>
				<li>Assessment : [specialassessments]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
				<li>Auction: [unmapped_Auction Info: Auction/Online Bidding]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (1)'})): ?>
				<li>Between Street1: [unmapped_Between Street (1)]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (2)'})): ?>
				<li>Between Street2: [unmapped_Between Street (2)]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Corp LimitPerAuditor'})): ?>
				<li>Corp Limit Per Auditor: [unmapped_Corp LimitPerAuditor]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dist To Interchange'})): ?>
				<li>Dist To Interchange: [unmapped_Dist To Interchange]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Expenses Paid by L: Curr Yr Est $/SF LL'})): ?>
				<li>Expenses Paid By Landlord: [unmapped_Expenses Paid by L: Curr Yr Est $/SF LL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exchange)): ?>
				<li>For Exchange: [exchange]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'For Lease'})): ?>
				<li>For Lease: [unmapped_For Lease]</li>
				<?php endif; ?>
				<?php if( isset($single_property->forsale)): ?>
				<li>For Sale: [forsale]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Mult Use'})): ?>
				<li>Mult Use: [unmapped_Mult Use]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Near Interchange'})): ?>
				<li>Near Interchange: [unmapped_Near Interchange]</li>
				<?php endif; ?>
				<?php if( isset($single_property->specialfinancing)): ?>
				<li>New Financing: [specialfinancing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Occupancy Rate'})): ?>
				<li>Occupancy Rate: [unmapped_Occupancy Rate]</li>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<li>Possession: [possession]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Previous Use'})): ?>
				<li>Previous Use: [unmapped_Previous Use]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'Services Available'})): ?>
				<li>Services Available: [unmapped_Services Available]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Suite Info 1: Date Available'})): ?>
				<li>Suite1 Date Available: [unmapped_Suite Info 1: Date Available]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
				<li>Township: [lngAREADESCRIPTION]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Use Code'})): ?>
				<li>Use Code: [unmapped_Use Code]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Year Remodeled'})): ?>
				<li>Year Remodeled: [unmapped_Year Remodeled]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'TransactionType'})): ?>
				<li>Transaction Type: [unmapped_TransactionType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'VacancyPCT'})): ?>
				<li>Vacancy PCT: [unmapped_VacancyPCT]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'TaxesRealEstate'})): ?>
				<li>Taxes Real Estate: [unmapped_TaxesRealEstate]</li>
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
	
	<?php if( isset($single_property->construction) || isset($single_property->unmapped->{'Dock Size'}) || isset($single_property->noofloadingdocks) || isset($single_property->noofdrivingdoors) || isset($single_property->lotsize) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->parkingspaces) || isset($single_property->unmapped->{'Tax District'}) || isset($single_property->unmapped->{'Tax Incentive'}) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
	<li class="cell">
		<?php if( isset($single_property->construction) || isset($single_property->unmapped->{'Dock Size'}) || isset($single_property->noofloadingdocks) || isset($single_property->noofdrivingdoors) || isset($single_property->lotsize) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dock Size'})): ?>
				<li>Dock Size: [unmapped_Dock Size]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofloadingdocks)): ?>
				<li>Docks: [noofloadingdocks]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofdrivingdoors)): ?>
				<li>Drive in Doors: [noofdrivingdoors]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotsize)): ?>
				<li>Lot Size Frontage: [lotsize]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
				<li>Lot Size side: [unmapped_Lot Size (Side)]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Total Parking: [parkingspaces]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		
		<?php if( isset($single_property->unmapped->{'Tax District'}) || isset($single_property->unmapped->{'Tax Incentive'}) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->{'Tax District'})): ?>
				<li>Tax District: [unmapped_Tax District]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tax Incentive'})): ?>
				<li>Tax Incentive: [unmapped_Tax Incentive]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes Yearly: [taxes]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
	
		<?php if( isset($single_property->bldgsqfeet) || isset($single_property->unmapped->{'# Floors AboveGround'}) || isset($single_property->unmapped->{'Heat Fuel'}) || isset($single_property->heating) || isset($single_property->unmapped->{'Max Cont Sqft Avail'}) || isset($single_property->unmapped->{'Minimum Sqft Avail'}) || isset($single_property->sprinklers) || isset($single_property->unmapped->{'Suite Info 1: SQ FT'}) ):?>
		
			<h3 class="zy-feature-title">Interior Features</h3>
			
			<ul class="zy-sub-list">
					<?php if( isset($single_property->bldgsqfeet)): ?>
					<li>Bldg Sq Ft.: [bldgsqfeet]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'# Floors AboveGround'})): ?>
					<li>Floors Above Ground: [unmapped_# Floors AboveGround]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Heat Fuel'})): ?>
					<li>Heat Fuel: [unmapped_Heat Fuel]</li>
					<?php endif; ?>
					<?php if( isset($single_property->heating)): ?>
					<li>Heat Type: [heating]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Max Cont Sqft Avail'})): ?>
					<li>Max Cont Sqft Avail: [unmapped_Max Cont Sqft Avail]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Minimum Sqft Avail'})): ?>
					<li>Minimum Sq Ft Available: [unmapped_Minimum Sqft Avail]</li>
					<?php endif; ?>
					<?php if( isset($single_property->sprinklers)): ?>
					<li>Sprinkler: [sprinklers]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Suite Info 1: SQ FT'})): ?>
					<li>Suite1 Sq Ft: [unmapped_Suite Info 1: SQ FT]</li>
					<?php endif; ?>
				</ul>
			
		<?php endif; ?>
	</li>					

</ul>