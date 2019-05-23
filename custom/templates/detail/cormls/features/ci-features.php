<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->specialassessments) || isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'}) || isset($single_property->unmapped->{'Between Street (1)'}) || isset($single_property->unmapped->{'Between Street (2)'}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{'Corp LimitPerAuditor'}) || isset($single_property->unmapped->{'Dist To Interchange'}) || isset($single_property->electricfeature) || isset($single_property->unmapped->{'Expenses Paid by L: Curr Yr Est $/SF LL'}) || isset($single_property->exchange) || isset($single_property->unmapped->{'For Lease'}) || isset($single_property->forsale) || isset($single_property->unmapped->{'Mult Use'}) || isset($single_property->unmapped->{'Near Interchange'}) || isset($single_property->specialfinancing) || isset($single_property->unmapped->{'Occupancy Rate'}) || isset($single_property->possession) || isset($single_property->unmapped->{'Previous Use'}) || isset($single_property->unmapped->{'Services Available'}) || isset($single_property->unmapped->{'Suite Info 1: Date Available'}) || isset($single_property->lngAREADESCRIPTION) || isset($single_property->unmapped->{'Use Code'}) || isset($single_property->unmapped->{'Year Remodeled'}) || isset($single_property->zoning) || isset($single_property->zoning) || isset($single_property->unmapped->{'TransactionType'}) || isset($single_property->unmapped->{'VacancyPCT'}) || isset($single_property->unmapped->{'TaxesRealEstate'}) ):?>
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
				<?php if( isset($single_property->specialassessments)): ?>
				<tr>
					<td class="bt-listing__table__label">Assessment </td>
					<td class="bt-listing__table__items"><span>[specialassessments]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
				<tr>
					<td class="bt-listing__table__label">Auction</td>
					<td class="bt-listing__table__items"><span>[unmapped_Auction Info: Auction/Online Bidding]</span></td>
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
				<?php if( isset($single_property->unmapped->{'Corp LimitPerAuditor'})): ?>
				<tr>
					<td class="bt-listing__table__label">Corp Limit Per Auditor</td>
					<td class="bt-listing__table__items"><span>[unmapped_Corp LimitPerAuditor]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dist To Interchange'})): ?>
				<tr>
					<td class="bt-listing__table__label">Dist To Interchange</td>
					<td class="bt-listing__table__items"><span>[unmapped_Dist To Interchange]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Expenses Paid by L: Curr Yr Est $/SF LL'})): ?>
				<tr>
					<td class="bt-listing__table__label">Expenses Paid By Landlord</td>
					<td class="bt-listing__table__items"><span>[unmapped_Expenses Paid by L: Curr Yr Est $/SF LL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exchange)): ?>
				<tr>
					<td class="bt-listing__table__label">For Exchange</td>
					<td class="bt-listing__table__items"><span>[exchange]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'For Lease'})): ?>
				<tr>
					<td class="bt-listing__table__label">For Lease</td>
					<td class="bt-listing__table__items"><span>[unmapped_For Lease]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->forsale)): ?>
				<tr>
					<td class="bt-listing__table__label">For Sale</td>
					<td class="bt-listing__table__items"><span>[forsale]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Mult Use'})): ?>
				<tr>
					<td class="bt-listing__table__label">Mult Use</td>
					<td class="bt-listing__table__items"><span>[unmapped_Mult Use]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Near Interchange'})): ?>
				<tr>
					<td class="bt-listing__table__label">Near Interchange</td>
					<td class="bt-listing__table__items"><span>[unmapped_Near Interchange]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->specialfinancing)): ?>
				<tr>
					<td class="bt-listing__table__label">New Financing</td>
					<td class="bt-listing__table__items"><span>[specialfinancing]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Occupancy Rate'})): ?>
				<tr>
					<td class="bt-listing__table__label">Occupancy Rate</td>
					<td class="bt-listing__table__items"><span>[unmapped_Occupancy Rate]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<tr>
					<td class="bt-listing__table__label">Possession</td>
					<td class="bt-listing__table__items"><span>[possession]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Previous Use'})): ?>
				<tr>
					<td class="bt-listing__table__label">Previous Use</td>
					<td class="bt-listing__table__items"><span>[unmapped_Previous Use]</span></td>
				</tr>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'Services Available'})): ?>
				<tr>
					<td class="bt-listing__table__label">Services Available</td>
					<td class="bt-listing__table__items"><span>[unmapped_Services Available]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Suite Info 1: Date Available'})): ?>
				<tr>
					<td class="bt-listing__table__label">Suite1 Date Available</td>
					<td class="bt-listing__table__items"><span>[unmapped_Suite Info 1: Date Available]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
				<tr>
					<td class="bt-listing__table__label">Township</td>
					<td class="bt-listing__table__items"><span>[lngAREADESCRIPTION]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Use Code'})): ?>
				<tr>
					<td class="bt-listing__table__label">Use Code</td>
					<td class="bt-listing__table__items"><span>[unmapped_Use Code]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Year Remodeled'})): ?>
				<tr>
					<td class="bt-listing__table__label">Year Remodeled</td>
					<td class="bt-listing__table__items"><span>[unmapped_Year Remodeled]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'TransactionType'})): ?>
				<tr>
					<td class="bt-listing__table__label">Transaction Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_TransactionType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'VacancyPCT'})): ?>
				<tr>
					<td class="bt-listing__table__label">Vacancy PCT</td>
					<td class="bt-listing__table__items"><span>[unmapped_VacancyPCT]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'TaxesRealEstate'})): ?>
				<tr>
					<td class="bt-listing__table__label">Taxes Real Estate</td>
					<td class="bt-listing__table__items"><span>[unmapped_TaxesRealEstate]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->construction) || isset($single_property->unmapped->{'Dock Size'}) || isset($single_property->noofloadingdocks) || isset($single_property->noofdrivingdoors) || isset($single_property->lotsize) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->parkingspaces) || isset($single_property->unmapped->{'Tax District'}) || isset($single_property->unmapped->{'Tax Incentive'}) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
	<li class="cell">
		<?php if( isset($single_property->construction) || isset($single_property->unmapped->{'Dock Size'}) || isset($single_property->noofloadingdocks) || isset($single_property->noofdrivingdoors) || isset($single_property->lotsize) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->parkingspaces) ):?>
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dock Size'})): ?>
				<tr>
					<td class="bt-listing__table__label">Dock Size</td>
					<td class="bt-listing__table__items"><span>[unmapped_Dock Size]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofloadingdocks)): ?>
				<tr>
					<td class="bt-listing__table__label">Docks</td>
					<td class="bt-listing__table__items"><span>[noofloadingdocks]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofdrivingdoors)): ?>
				<tr>
					<td class="bt-listing__table__label">Drive in Doors</td>
					<td class="bt-listing__table__items"><span>[noofdrivingdoors]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotsize)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size Frontage</td>
					<td class="bt-listing__table__items"><span>[lotsize]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size side</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lot Size (Side)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Parking</td>
					<td class="bt-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		
		<?php if( isset($single_property->unmapped->{'Tax District'}) || isset($single_property->unmapped->{'Tax Incentive'}) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->{'Tax District'})): ?>
				<tr>
					<td class="bt-listing__table__label">Tax District</td>
					<td class="bt-listing__table__items"><span>[unmapped_Tax District]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tax Incentive'})): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Incentive</td>
					<td class="bt-listing__table__items"><span>[unmapped_Tax Incentive]</span></td>
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
					<td class="bt-listing__table__label">Taxes Yearly</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
	
		<?php if( isset($single_property->bldgsqfeet) || isset($single_property->unmapped->{'# Floors AboveGround'}) || isset($single_property->unmapped->{'Heat Fuel'}) || isset($single_property->heating) || isset($single_property->unmapped->{'Max Cont Sqft Avail'}) || isset($single_property->unmapped->{'Minimum Sqft Avail'}) || isset($single_property->sprinklers) || isset($single_property->unmapped->{'Suite Info 1: SQ FT'}) ):?>
		
			<h3 class="bt-listing__headline">Interior Features</h3>
			
			<table class="bt-listing__table">
				<tbody>
					<?php if( isset($single_property->bldgsqfeet)): ?>
					<tr>
						<td class="bt-listing__table__label">Bldg Sq Ft.</td>
						<td class="bt-listing__table__items"><span>[bldgsqfeet]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'# Floors AboveGround'})): ?>
					<tr>
						<td class="bt-listing__table__label">Floors Above Ground</td>
						<td class="bt-listing__table__items"><span>[unmapped_# Floors AboveGround]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Heat Fuel'})): ?>
					<tr>
						<td class="bt-listing__table__label">Heat Fuel</td>
						<td class="bt-listing__table__items"><span>[unmapped_Heat Fuel]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->heating)): ?>
					<tr>
						<td class="bt-listing__table__label">Heat Type</td>
						<td class="bt-listing__table__items"><span>[heating]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Max Cont Sqft Avail'})): ?>
					<tr>
						<td class="bt-listing__table__label">Max Cont Sqft Avail</td>
						<td class="bt-listing__table__items"><span>[unmapped_Max Cont Sqft Avail]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Minimum Sqft Avail'})): ?>
					<tr>
						<td class="bt-listing__table__label">Minimum Sq Ft Available</td>
						<td class="bt-listing__table__items"><span>[unmapped_Minimum Sqft Avail]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->sprinklers)): ?>
					<tr>
						<td class="bt-listing__table__label">Sprinkler</td>
						<td class="bt-listing__table__items"><span>[sprinklers]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Suite Info 1: SQ FT'})): ?>
					<tr>
						<td class="bt-listing__table__label">Suite1 Sq Ft</td>
						<td class="bt-listing__table__items"><span>[unmapped_Suite Info 1: SQ FT]</span></td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
			
		<?php endif; ?>
	</li>					

</ul>