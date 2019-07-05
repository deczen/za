<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">

	<?php if( isset($single_property->amenities) || isset($single_property->unmapped->hascommunitypool) || isset($single_property->exclusions) || isset($single_property->unmapped->ownertype) || isset($single_property->asscpool) || isset($single_property->possession) || isset($single_property->unmapped->schoolother) || isset($single_property->unmapped->hasspa) || isset($single_property->unmapped->telcom) || isset($single_property->termsfeature) || isset($single_property->utilities) || isset($single_property->water) || isset($single_property->unmapped->watershares) || isset($single_property->unmapped->yearremodeled) || isset($single_property->zoning) || isset($single_property->unmapped->zoningchar) ):?>
	
	<li class="cell">
		
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Amenities</td>
					<td class="zy-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->hascommunitypool)): ?>
				<tr>
					<td class="zy-listing__table__label">Community Pool</td>
					<td class="zy-listing__table__items"><span>[unmapped_hascommunitypool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exclusions)): ?>
				<tr>
					<td class="zy-listing__table__label">Exclusions</td>
					<td class="zy-listing__table__items"><span>[exclusions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<tr>
					<td class="zy-listing__table__label">Owner Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_ownertype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscpool)): ?>
				<tr>
					<td class="zy-listing__table__label">Pool</td>
					<td class="zy-listing__table__items"><span>[asscpool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<tr>
					<td class="zy-listing__table__label">Possession</td>
					<td class="zy-listing__table__items"><span>[possession]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->schoolother)): ?>
				<tr>
					<td class="zy-listing__table__label">School Other</td>
					<td class="zy-listing__table__items"><span>[unmapped_schoolother]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->hasspa)): ?>
				<tr>
					<td class="zy-listing__table__label">Spa</td>
					<td class="zy-listing__table__items"><span>[unmapped_hasspa]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->telcom)): ?>
				<tr>
					<td class="zy-listing__table__label">Telecommunications</td>
					<td class="zy-listing__table__items"><span>[unmapped_telcom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Terms</td>
					<td class="zy-listing__table__items"><span>[termsfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="zy-listing__table__label">Utilities</td>
					<td class="zy-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->watershares)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Shares</td>
					<td class="zy-listing__table__items"><span>[unmapped_watershares]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->yearremodeled)): ?>
				<tr>
					<td class="zy-listing__table__label">Year Remodeled</td>
					<td class="zy-listing__table__items"><span>[unmapped_yearremodeled]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning</td>
					<td class="zy-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->zoningchar)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning Code</td>
					<td class="zy-listing__table__items"><span>[unmapped_zoningchar]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->capcarport) || isset($single_property->unmapped->deck) || isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->unmapped->patio) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) || isset($single_property->style) || isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) || isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->capcarport) || isset($single_property->unmapped->deck) || isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->unmapped->patio) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) || isset($single_property->style) ):?>
		
		<h3 class="zy-listing__headline">Exterior Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->capcarport)): ?>
				<tr>
					<td class="zy-listing__table__label">Carport Capacity</td>
					<td class="zy-listing__table__items"><span>[unmapped_capcarport]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->deck)): ?>
				<tr>
					<td class="zy-listing__table__label">Decks</td>
					<td class="zy-listing__table__items"><span>[unmapped_deck]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<tr>
					<td class="zy-listing__table__label">Driveway</td>
					<td class="zy-listing__table__items"><span>[unmapped_driveway]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Building Materials</td>
					<td class="zy-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<tr>
					<td class="zy-listing__table__label">Frontage Facing</td>
					<td class="zy-listing__table__items"><span>[frontage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<tr>
					<td class="zy-listing__table__label">Landscaping</td>
					<td class="zy-listing__table__items"><span>[landdesc]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<tr>
					<td class="zy-listing__table__label">Length In Feet Of Back Of Property</td>
					<td class="zy-listing__table__items"><span>[unmapped_dimback]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<tr>
					<td class="zy-listing__table__label">Length In Feet Of Side Of Property</td>
					<td class="zy-listing__table__items"><span>[unmapped_dimside]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Description</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->patio)): ?>
				<tr>
					<td class="zy-listing__table__label">Patios</td>
					<td class="zy-listing__table__items"><span>[unmapped_patio]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="zy-listing__table__label">Roof Features</td>
					<td class="zy-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->storage)): ?>
				<tr>
					<td class="zy-listing__table__label">Storage</td>
					<td class="zy-listing__table__items"><span>[unmapped_storage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Capacity</td>
					<td class="zy-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Parking Features</td>
					<td class="zy-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Capacity</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
		<h3 class="zy-listing__headline">Taxes, Fees</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Taxes</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->homeownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Hoa</td>
					<td class="zy-listing__table__items"><span>[homeownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Hoa Fee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Inclusions</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->maintfree)): ?>
				<tr>
					<td class="zy-listing__table__label">Maintenance Fee</td>
					<td class="zy-listing__table__items"><span>[unmapped_maintfree]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->aircondition) || isset($single_property->basement) || isset($single_property->unmapped->basmntfin) || isset($single_property->flooring) || isset($single_property->heating) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->levbbed) || isset($single_property->unmapped->levbbathfull) || isset($single_property->unmapped->levbbathhalf) || isset($single_property->unmapped->levbsqf) || isset($single_property->unmapped->levbbathtq) || isset($single_property->unmapped->lev1bed) || isset($single_property->unmapped->lev1bathfull) || isset($single_property->unmapped->lev1bathhalf) || isset($single_property->unmapped->lev1sqf) || isset($single_property->unmapped->lev1bathtq) || isset($single_property->unmapped->lev2bed) || isset($single_property->unmapped->lev2bathfull) || isset($single_property->unmapped->lev2bathhalf) || isset($single_property->unmapped->lev2sqf) || isset($single_property->unmapped->lev2bathtq) || isset($single_property->unmapped->lev3bed) || isset($single_property->unmapped->lev3bathfull) || isset($single_property->unmapped->lev3bathhalf) || isset($single_property->unmapped->lev3sqf) || isset($single_property->unmapped->lev3bathtq) || isset($single_property->unmapped->lev4bed) || isset($single_property->unmapped->lev4bathfull) || isset($single_property->unmapped->lev4bathhalf) || isset($single_property->unmapped->lev4sqf) || isset($single_property->unmapped->lev4bathtq) || isset($single_property->nobaths) || isset($single_property->unmapped->totkitchenb) || isset($single_property->unmapped->totden) || isset($single_property->unmapped->totfamroom) || isset($single_property->fireplaces) || isset($single_property->unmapped->totdiningf) || isset($single_property->unmapped->nolivinglevels) || isset($single_property->unmapped->totkitchenk) || isset($single_property->unmapped->totlaundry) || isset($single_property->unmapped->totdinings) || isset($single_property->unmapped->windows) ):?>
		
		<h3 class="zy-listing__headline">Interior Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Air Conditioning</td>
					<td class="zy-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->basmntfin)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement Finished Percentage</td>
					<td class="zy-listing__table__items"><span>[unmapped_basmntfin]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor Coverings</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating Features</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbed)): ?>
				<tr>
					<td class="zy-listing__table__label">Level Basement Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_levbbed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathfull)): ?>
				<tr>
					<td class="zy-listing__table__label">Level Basement Full Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_levbbathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathhalf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level Basement Half Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_levbbathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbsqf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level Basement Sq Ft</td>
					<td class="zy-listing__table__items"><span>[unmapped_levbsqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathtq)): ?>
				<tr>
					<td class="zy-listing__table__label">Level Basement Three Quarter Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_levbbathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bed)): ?>
				<tr>
					<td class="zy-listing__table__label">Level1 Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev1bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathfull)): ?>
				<tr>
					<td class="zy-listing__table__label">Level1 Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev1bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathhalf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level1 Half Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev1bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1sqf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level1 Sq Ft</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev1sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathtq)): ?>
				<tr>
					<td class="zy-listing__table__label">Level1 Three Quarter Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev1bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bed)): ?>
				<tr>
					<td class="zy-listing__table__label">Level2 Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev2bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathfull)): ?>
				<tr>
					<td class="zy-listing__table__label">Level2 Full Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev2bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathhalf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level2 Half Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev2bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2sqf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level2 Sq Ft</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev2sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathtq)): ?>
				<tr>
					<td class="zy-listing__table__label">Level2 Three Quarter Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev2bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bed)): ?>
				<tr>
					<td class="zy-listing__table__label">Level3 Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev3bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathfull)): ?>
				<tr>
					<td class="zy-listing__table__label">Level3 Full Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev3bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathhalf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level3 Half Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev3bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3sqf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level3 Sq Ft</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev3sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathtq)): ?>
				<tr>
					<td class="zy-listing__table__label">Level3 Three Quarter Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev3bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bed)): ?>
				<tr>
					<td class="zy-listing__table__label">Level4 Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev4bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathfull)): ?>
				<tr>
					<td class="zy-listing__table__label">Level4 Full Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev4bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathhalf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level4 Half Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev4bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4sqf)): ?>
				<tr>
					<td class="zy-listing__table__label">Level4 Sq Ft</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev4sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathtq)): ?>
				<tr>
					<td class="zy-listing__table__label">Level4 Three Quarter Baths</td>
					<td class="zy-listing__table__items"><span>[unmapped_lev4bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->mbrlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Master Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->nobaths)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Baths</td>
					<td class="zy-listing__table__items"><span>[nobaths]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenb)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Breakfast Bars</td>
					<td class="zy-listing__table__items"><span>[unmapped_totkitchenb]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totden)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Dens</td>
					<td class="zy-listing__table__items"><span>[unmapped_totden]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totfamroom)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Family Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_totfamroom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Fireplaces</td>
					<td class="zy-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdiningf)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Formal Dining Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_totdiningf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->nolivinglevels)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Formal Living Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_nolivinglevels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenk)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Kitchens</td>
					<td class="zy-listing__table__items"><span>[unmapped_totkitchenk]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totlaundry)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Laundry Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_totlaundry]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdinings)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Semi Formal Dining Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_totdinings]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->windows)): ?>
				<tr>
					<td class="zy-listing__table__label">Windows</td>
					<td class="zy-listing__table__items"><span>[unmapped_windows]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	
	<?php /*
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->aircondition) || isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
	<li class="cell">
	 
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->aircondition) ):?>
		<h3 class="zy-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coolingzones)): ?>
				<tr>
					<td class="zy-listing__table__label">Cool Zones</td>
					<td class="zy-listing__table__items"><span>[coolingzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heatzones)): ?>
				<tr>
					<td class="zy-listing__table__label">Heat Zones</td>
					<td class="zy-listing__table__items"><span>[heatzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Energy Features</td>
					<td class="zy-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="zy-listing__table__label">Hot Water</td>
					<td class="zy-listing__table__items"><span>[hotwater]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterheater)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Heater</td>
					<td class="zy-listing__table__items"><span>[waterheater]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer Utilities</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Utilities</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>		
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Air Condition</td>
					<td class="zy-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>								
			</tbody>
		</table>
		<?php endif; ?>	
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
		
		<h3 class="zy-listing__headline">Schools</h3>
		
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->gradeschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Grade School</td>
					<td class="zy-listing__table__items"><span>[gradeschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Middle School</td>
					<td class="zy-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="zy-listing__table__label">High School</td>
					<td class="zy-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		
		<?php endif; ?>
		
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Capacity</td>
					<td class="zy-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Parking Features</td>
					<td class="zy-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Capacity</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
		<h3 class="zy-listing__headline">Taxes, Fees</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Taxes</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->homeownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Hoa</td>
					<td class="zy-listing__table__items"><span>[homeownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif;*//* ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Hoa Fee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Inclusions</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->maintfree)): ?>
				<tr>
					<td class="zy-listing__table__label">Maintenance Fee</td>
					<td class="zy-listing__table__items"><span>[unmapped_maintfree]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-listing__headline">Association Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->homeownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Home Own Association</td>
					<td class="zy-listing__table__items"><span>[homeownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Hoa Fee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Assc fee includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->nolivinglevels) ):?>
		<h3 class="zy-listing__headline">Room Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->nolivinglevels)): ?>
				<tr>
					<td class="zy-listing__table__label">No Living Levels</td>
					<td class="zy-listing__table__items"><span>[nolivinglevels]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					
	
	*/ ?>
	
</ul>
<?php /*
<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-listing__headline">Master Bedroom</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->mbrdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[mbrdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[mbrdscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed2DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed3DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #4</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed4DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #5</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed5DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-listing__headline">Bathroom #1</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth1dimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth1dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth1dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-listing__headline">Bathroom #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth2dimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth2dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth2dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-listing__headline">Bathroom #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth3dimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth3dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth3level]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth3dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-listing__headline">Kitchen</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->kitdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[kitdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[kitlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-listing__headline">Family Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->famdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[famdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[famlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[famdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-listing__headline">Living Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->livdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[livdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[livlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-listing__headline">Dining Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->dindimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[dindimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[dinlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[dindscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #1</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth1DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth1DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth2DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth3DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #4</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth4DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #5</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth5DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #6</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth6DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth6LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth6DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul> */ ?>