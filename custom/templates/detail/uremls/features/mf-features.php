<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">

	<?php if( isset($single_property->amenities) || isset($single_property->unmapped->hascommunitypool) || isset($single_property->exclusions) || isset($single_property->unmapped->ownertype) || isset($single_property->asscpool) || isset($single_property->possession) || isset($single_property->unmapped->schoolother) || isset($single_property->unmapped->hasspa) || isset($single_property->unmapped->telcom) || isset($single_property->termsfeature) || isset($single_property->utilities) || isset($single_property->water) || isset($single_property->unmapped->watershares) || isset($single_property->unmapped->yearremodeled) || isset($single_property->zoning) || isset($single_property->unmapped->zoningchar) ):?>
	
	<li class="cell">
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->additinfo)): ?>
				<tr>
					<td class="bt-listing__table__label">Additional Information </td>
					<td class="bt-listing__table__items"><span>[unmapped_additinfo]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->grossoper)): ?>
				<tr>
					<td class="bt-listing__table__label">Gross Operating </td>
					<td class="bt-listing__table__items"><span>[unmapped_grossoper]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->yearlyoccup)): ?>
				<tr>
					<td class="bt-listing__table__label">Yearly Occupancy</td>
					<td class="bt-listing__table__items"><span>[unmapped_yearlyoccup]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="bt-listing__table__label">Amenities</td>
					<td class="bt-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->hascommunitypool)): ?>
				<tr>
					<td class="bt-listing__table__label">Community Pool</td>
					<td class="bt-listing__table__items"><span>[unmapped_hascommunitypool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exclusions)): ?>
				<tr>
					<td class="bt-listing__table__label">Exclusions</td>
					<td class="bt-listing__table__items"><span>[exclusions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<tr>
					<td class="bt-listing__table__label">Owner Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_ownertype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscpool)): ?>
				<tr>
					<td class="bt-listing__table__label">Pool</td>
					<td class="bt-listing__table__items"><span>[asscpool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<tr>
					<td class="bt-listing__table__label">Possession</td>
					<td class="bt-listing__table__items"><span>[possession]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->schoolother)): ?>
				<tr>
					<td class="bt-listing__table__label">School Other</td>
					<td class="bt-listing__table__items"><span>[unmapped_schoolother]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->hasspa)): ?>
				<tr>
					<td class="bt-listing__table__label">Spa</td>
					<td class="bt-listing__table__items"><span>[unmapped_hasspa]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->telcom)): ?>
				<tr>
					<td class="bt-listing__table__label">Telecommunications</td>
					<td class="bt-listing__table__items"><span>[unmapped_telcom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Terms</td>
					<td class="bt-listing__table__items"><span>[termsfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities</td>
					<td class="bt-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="bt-listing__table__label">Water</td>
					<td class="bt-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->watershares)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Shares</td>
					<td class="bt-listing__table__items"><span>[unmapped_watershares]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->yearremodeled)): ?>
				<tr>
					<td class="bt-listing__table__label">Year Remodeled</td>
					<td class="bt-listing__table__items"><span>[unmapped_yearremodeled]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->zoningchar)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning Code</td>
					<td class="bt-listing__table__items"><span>[unmapped_zoningchar]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) || isset($single_property->style) || isset($single_property->garageparking) || isset($single_property->parkingspaces) || isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) || isset($single_property->style) ):?>
		
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<tr>
					<td class="bt-listing__table__label">Driveway</td>
					<td class="bt-listing__table__items"><span>[unmapped_driveway]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Building Materials</td>
					<td class="bt-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<tr>
					<td class="bt-listing__table__label">Frontage Facing</td>
					<td class="bt-listing__table__items"><span>[frontage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<tr>
					<td class="bt-listing__table__label">Landscaping</td>
					<td class="bt-listing__table__items"><span>[landdesc]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<tr>
					<td class="bt-listing__table__label">Length In Feet Of Back Of Property</td>
					<td class="bt-listing__table__items"><span>[unmapped_dimback]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<tr>
					<td class="bt-listing__table__label">Length In Feet Of Side Of Property</td>
					<td class="bt-listing__table__items"><span>[unmapped_dimside]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Description</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Features</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->storage)): ?>
				<tr>
					<td class="bt-listing__table__label">Storage</td>
					<td class="bt-listing__table__items"><span>[unmapped_storage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->garageparking) || isset($single_property->parkingspaces) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Parking Features</td>
					<td class="bt-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Capacity</td>
					<td class="bt-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Taxes</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->homeownassociation)): ?>
				<tr>
					<td class="bt-listing__table__label">Hoa</td>
					<td class="bt-listing__table__items"><span>[homeownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">Hoa Fee</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->flooring) || isset($single_property->heating) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->levbbed) || isset($single_property->unmapped->levbbathfull) || isset($single_property->unmapped->levbbathhalf) || isset($single_property->unmapped->levbsqf) || isset($single_property->unmapped->levbbathtq) || isset($single_property->unmapped->lev1bed) || isset($single_property->unmapped->lev1bathfull) || isset($single_property->unmapped->lev1bathhalf) || isset($single_property->unmapped->lev1sqf) || isset($single_property->unmapped->lev1bathtq) || isset($single_property->unmapped->lev2bed) || isset($single_property->unmapped->lev2bathfull) || isset($single_property->unmapped->lev2bathhalf) || isset($single_property->unmapped->lev2sqf) || isset($single_property->unmapped->lev2bathtq) || isset($single_property->unmapped->lev3bed) || isset($single_property->unmapped->lev3bathfull) || isset($single_property->unmapped->lev3bathhalf) || isset($single_property->unmapped->lev3sqf) || isset($single_property->unmapped->lev3bathtq) || isset($single_property->unmapped->lev4bed) || isset($single_property->unmapped->lev4bathfull) || isset($single_property->unmapped->lev4bathhalf) || isset($single_property->unmapped->lev4sqf) || isset($single_property->unmapped->lev4bathtq) || isset($single_property->nobaths) || isset($single_property->unmapped->totkitchenb) || isset($single_property->unmapped->totden) || isset($single_property->unmapped->totfamroom) || isset($single_property->fireplaces) || isset($single_property->unmapped->totdiningf) || isset($single_property->unmapped->nolivinglevels) || isset($single_property->unmapped->totkitchenk) || isset($single_property->unmapped->totlaundry) || isset($single_property->unmapped->totdinings) || isset($single_property->unmapped->windows) ):?>
		
		<h3 class="bt-listing__headline">Interior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor Coverings</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating Features</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->levbbed)): ?>
				<tr>
					<td class="bt-listing__table__label">Level Basement Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_levbbed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathfull)): ?>
				<tr>
					<td class="bt-listing__table__label">Level Basement Full Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_levbbathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathhalf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level Basement Half Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_levbbathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbsqf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level Basement Sq Ft</td>
					<td class="bt-listing__table__items"><span>[unmapped_levbsqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathtq)): ?>
				<tr>
					<td class="bt-listing__table__label">Level Basement Three Quarter Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_levbbathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bed)): ?>
				<tr>
					<td class="bt-listing__table__label">Level1 Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev1bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathfull)): ?>
				<tr>
					<td class="bt-listing__table__label">Level1 Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev1bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathhalf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level1 Half Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev1bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1sqf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level1 Sq Ft</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev1sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathtq)): ?>
				<tr>
					<td class="bt-listing__table__label">Level1 Three Quarter Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev1bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bed)): ?>
				<tr>
					<td class="bt-listing__table__label">Level2 Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev2bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathfull)): ?>
				<tr>
					<td class="bt-listing__table__label">Level2 Full Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev2bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathhalf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level2 Half Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev2bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2sqf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level2 Sq Ft</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev2sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathtq)): ?>
				<tr>
					<td class="bt-listing__table__label">Level2 Three Quarter Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev2bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bed)): ?>
				<tr>
					<td class="bt-listing__table__label">Level3 Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev3bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathfull)): ?>
				<tr>
					<td class="bt-listing__table__label">Level3 Full Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev3bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathhalf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level3 Half Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev3bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3sqf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level3 Sq Ft</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev3sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathtq)): ?>
				<tr>
					<td class="bt-listing__table__label">Level3 Three Quarter Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev3bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bed)): ?>
				<tr>
					<td class="bt-listing__table__label">Level4 Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev4bed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathfull)): ?>
				<tr>
					<td class="bt-listing__table__label">Level4 Full Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev4bathfull]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathhalf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level4 Half Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev4bathhalf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4sqf)): ?>
				<tr>
					<td class="bt-listing__table__label">Level4 Sq Ft</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev4sqf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathtq)): ?>
				<tr>
					<td class="bt-listing__table__label">Level4 Three Quarter Baths</td>
					<td class="bt-listing__table__items"><span>[unmapped_lev4bathtq]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->mbrlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Master Bedrooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->nobaths)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Baths</td>
					<td class="bt-listing__table__items"><span>[nobaths]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenb)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Breakfast Bars</td>
					<td class="bt-listing__table__items"><span>[unmapped_totkitchenb]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totden)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Dens</td>
					<td class="bt-listing__table__items"><span>[unmapped_totden]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totfamroom)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Family Rooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_totfamroom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Fireplaces</td>
					<td class="bt-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdiningf)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Formal Dining Rooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_totdiningf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->nolivinglevels)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Formal Living Rooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_nolivinglevels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenk)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Kitchens</td>
					<td class="bt-listing__table__items"><span>[unmapped_totkitchenk]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totlaundry)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Laundry Rooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_totlaundry]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdinings)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Semi Formal Dining Rooms</td>
					<td class="bt-listing__table__items"><span>[unmapped_totdinings]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->windows)): ?>
				<tr>
					<td class="bt-listing__table__label">Windows</td>
					<td class="bt-listing__table__items"><span>[unmapped_windows]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	
</ul>
