<ul class="zy-features-grid">

	<?php if( isset($single_property->amenities) || isset($single_property->unmapped->hascommunitypool) || isset($single_property->exclusions) || isset($single_property->unmapped->ownertype) || isset($single_property->asscpool) || isset($single_property->possession) || isset($single_property->unmapped->schoolother) || isset($single_property->unmapped->hasspa) || isset($single_property->unmapped->telcom) || isset($single_property->termsfeature) || isset($single_property->utilities) || isset($single_property->water) || isset($single_property->unmapped->watershares) || isset($single_property->unmapped->yearremodeled) || isset($single_property->zoning) || isset($single_property->unmapped->zoningchar) ):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->additinfo)): ?>
				<li>Additional Information : [unmapped_additinfo]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->grossoper)): ?>
				<li>Gross Operating : [unmapped_grossoper]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->yearlyoccup)): ?>
				<li>Yearly Occupancy: [unmapped_yearlyoccup]</li>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->hascommunitypool)): ?>
				<li>Community Pool: [unmapped_hascommunitypool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exclusions)): ?>
				<li>Exclusions: [exclusions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<li>Owner Type: [unmapped_ownertype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscpool)): ?>
				<li>Pool: [asscpool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<li>Possession: [possession]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->schoolother)): ?>
				<li>School Other: [unmapped_schoolother]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->hasspa)): ?>
				<li>Spa: [unmapped_hasspa]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->telcom)): ?>
				<li>Telecommunications: [unmapped_telcom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Terms: [termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water: [water]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->watershares)): ?>
				<li>Water Shares: [unmapped_watershares]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->yearremodeled)): ?>
				<li>Year Remodeled: [unmapped_yearremodeled]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->zoningchar)): ?>
				<li>Zoning Code: [unmapped_zoningchar]</li>
				<?php endif; ?>
			
		</ul>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) || isset($single_property->style) || isset($single_property->garageparking) || isset($single_property->parkingspaces) || isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) || isset($single_property->style) ):?>
		
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<li>Driveway: [unmapped_driveway]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior Building Materials: [exterior]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<li>Frontage Facing: [frontage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<li>Landscaping: [landdesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<li>Length In Feet Of Back Of Property: [unmapped_dimback]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<li>Length In Feet Of Side Of Property: [unmapped_dimside]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Features: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->storage)): ?>
				<li>Storage: [unmapped_storage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garageparking) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Parking Features: [garageparking]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Capacity: [parkingspaces]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Hoa: [homeownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->flooring) || isset($single_property->heating) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->levbbed) || isset($single_property->unmapped->levbbathfull) || isset($single_property->unmapped->levbbathhalf) || isset($single_property->unmapped->levbsqf) || isset($single_property->unmapped->levbbathtq) || isset($single_property->unmapped->lev1bed) || isset($single_property->unmapped->lev1bathfull) || isset($single_property->unmapped->lev1bathhalf) || isset($single_property->unmapped->lev1sqf) || isset($single_property->unmapped->lev1bathtq) || isset($single_property->unmapped->lev2bed) || isset($single_property->unmapped->lev2bathfull) || isset($single_property->unmapped->lev2bathhalf) || isset($single_property->unmapped->lev2sqf) || isset($single_property->unmapped->lev2bathtq) || isset($single_property->unmapped->lev3bed) || isset($single_property->unmapped->lev3bathfull) || isset($single_property->unmapped->lev3bathhalf) || isset($single_property->unmapped->lev3sqf) || isset($single_property->unmapped->lev3bathtq) || isset($single_property->unmapped->lev4bed) || isset($single_property->unmapped->lev4bathfull) || isset($single_property->unmapped->lev4bathhalf) || isset($single_property->unmapped->lev4sqf) || isset($single_property->unmapped->lev4bathtq) || isset($single_property->nobaths) || isset($single_property->unmapped->totkitchenb) || isset($single_property->unmapped->totden) || isset($single_property->unmapped->totfamroom) || isset($single_property->fireplaces) || isset($single_property->unmapped->totdiningf) || isset($single_property->unmapped->nolivinglevels) || isset($single_property->unmapped->totkitchenk) || isset($single_property->unmapped->totlaundry) || isset($single_property->unmapped->totdinings) || isset($single_property->unmapped->windows) ):?>
		
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor Coverings: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating Features: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->levbbed)): ?>
				<li>Level Basement Bedrooms: [unmapped_levbbed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathfull)): ?>
				<li>Level Basement Full Baths: [unmapped_levbbathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathhalf)): ?>
				<li>Level Basement Half Baths: [unmapped_levbbathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbsqf)): ?>
				<li>Level Basement Sq Ft: [unmapped_levbsqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathtq)): ?>
				<li>Level Basement Three Quarter Baths: [unmapped_levbbathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bed)): ?>
				<li>Level1 Bedrooms: [unmapped_lev1bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathfull)): ?>
				<li>Level1 Bedrooms: [unmapped_lev1bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathhalf)): ?>
				<li>Level1 Half Baths: [unmapped_lev1bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1sqf)): ?>
				<li>Level1 Sq Ft: [unmapped_lev1sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathtq)): ?>
				<li>Level1 Three Quarter Baths: [unmapped_lev1bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bed)): ?>
				<li>Level2 Bedrooms: [unmapped_lev2bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathfull)): ?>
				<li>Level2 Full Baths: [unmapped_lev2bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathhalf)): ?>
				<li>Level2 Half Baths: [unmapped_lev2bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2sqf)): ?>
				<li>Level2 Sq Ft: [unmapped_lev2sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathtq)): ?>
				<li>Level2 Three Quarter Baths: [unmapped_lev2bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bed)): ?>
				<li>Level3 Bedrooms: [unmapped_lev3bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathfull)): ?>
				<li>Level3 Full Baths: [unmapped_lev3bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathhalf)): ?>
				<li>Level3 Half Baths: [unmapped_lev3bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3sqf)): ?>
				<li>Level3 Sq Ft: [unmapped_lev3sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathtq)): ?>
				<li>Level3 Three Quarter Baths: [unmapped_lev3bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bed)): ?>
				<li>Level4 Bedrooms: [unmapped_lev4bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathfull)): ?>
				<li>Level4 Full Baths: [unmapped_lev4bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathhalf)): ?>
				<li>Level4 Half Baths: [unmapped_lev4bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4sqf)): ?>
				<li>Level4 Sq Ft: [unmapped_lev4sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathtq)): ?>
				<li>Level4 Three Quarter Baths: [unmapped_lev4bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->mbrlevel)): ?>
				<li>Master Bedrooms: [unmapped_mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobaths)): ?>
				<li>Total Baths: [nobaths]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenb)): ?>
				<li>Total Breakfast Bars: [unmapped_totkitchenb]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totden)): ?>
				<li>Total Dens: [unmapped_totden]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totfamroom)): ?>
				<li>Total Family Rooms: [unmapped_totfamroom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Total Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdiningf)): ?>
				<li>Total Formal Dining Rooms: [unmapped_totdiningf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->nolivinglevels)): ?>
				<li>Total Formal Living Rooms: [unmapped_nolivinglevels]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenk)): ?>
				<li>Total Kitchens: [unmapped_totkitchenk]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totlaundry)): ?>
				<li>Total Laundry Rooms: [unmapped_totlaundry]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdinings)): ?>
				<li>Total Semi Formal Dining Rooms: [unmapped_totdinings]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->windows)): ?>
				<li>Windows: [unmapped_windows]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>
	
</ul>
