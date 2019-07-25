<ul class="zy-features-grid">

	<?php if( isset($single_property->amenities) || isset($single_property->unmapped->hascommunitypool) || isset($single_property->exclusions) || isset($single_property->unmapped->ownertype) || isset($single_property->asscpool) || isset($single_property->possession) || isset($single_property->unmapped->schoolother) || isset($single_property->unmapped->hasspa) || isset($single_property->unmapped->telcom) || isset($single_property->termsfeature) || isset($single_property->utilities) || isset($single_property->water) || isset($single_property->unmapped->watershares) || isset($single_property->unmapped->yearremodeled) || isset($single_property->zoning) || isset($single_property->unmapped->zoningchar) ):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
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
	
	<?php if( isset($single_property->unmapped->capcarport) || isset($single_property->unmapped->deck) || isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->unmapped->patio) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) /*|| isset($single_property->style)*/ || isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) || isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->capcarport) || isset($single_property->unmapped->deck) || isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->unmapped->patio) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) /*|| isset($single_property->style)*/ ):?>
		
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->capcarport)): ?>
				<li>Carport Capacity: [unmapped_capcarport]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->deck)): ?>
				<li>Decks: [unmapped_deck]</li>
				<?php endif; ?>
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
				<?php if( isset($single_property->unmapped->patio)): ?>
				<li>Patios: [unmapped_patio]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Features: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->storage)): ?>
				<li>Storage: [unmapped_storage]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Capacity: [garagespaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Parking Features: [garageparking]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Capacity: [parkingspaces]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
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
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Inclusions: [asscfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->maintfree)): ?>
				<li>Maintenance Fee: [unmapped_maintfree]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->aircondition) || isset($single_property->basement) || isset($single_property->unmapped->basmntfin) || isset($single_property->flooring) || isset($single_property->heating) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->levbbed) || isset($single_property->unmapped->levbbathfull) || isset($single_property->unmapped->levbbathhalf) || isset($single_property->unmapped->levbsqf) || isset($single_property->unmapped->levbbathtq) || isset($single_property->unmapped->lev1bed) || isset($single_property->unmapped->lev1bathfull) || isset($single_property->unmapped->lev1bathhalf) || isset($single_property->unmapped->lev1sqf) || isset($single_property->unmapped->lev1bathtq) || isset($single_property->unmapped->lev2bed) || isset($single_property->unmapped->lev2bathfull) || isset($single_property->unmapped->lev2bathhalf) || isset($single_property->unmapped->lev2sqf) || isset($single_property->unmapped->lev2bathtq) || isset($single_property->unmapped->lev3bed) || isset($single_property->unmapped->lev3bathfull) || isset($single_property->unmapped->lev3bathhalf) || isset($single_property->unmapped->lev3sqf) || isset($single_property->unmapped->lev3bathtq) || isset($single_property->unmapped->lev4bed) || isset($single_property->unmapped->lev4bathfull) || isset($single_property->unmapped->lev4bathhalf) || isset($single_property->unmapped->lev4sqf) || isset($single_property->unmapped->lev4bathtq) || isset($single_property->nobaths) || isset($single_property->unmapped->totkitchenb) || isset($single_property->unmapped->totden) || isset($single_property->unmapped->totfamroom) || isset($single_property->fireplaces) || isset($single_property->unmapped->totdiningf) || isset($single_property->unmapped->nolivinglevels) || isset($single_property->unmapped->totkitchenk) || isset($single_property->unmapped->totlaundry) || isset($single_property->unmapped->totdinings) || isset($single_property->unmapped->windows) ):?>
		
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Conditioning: [aircondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->basmntfin)): ?>
				<li>Basement Finished Percentage: [unmapped_basmntfin]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor Coverings: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating Features: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbed)): ?>
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
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->windows)): ?>
				<li>Windows: [unmapped_windows]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>
	
	<?php /*
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->aircondition) || isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
	<li class="cell">
	 
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->aircondition) ):?>
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
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Condition: [aircondition]</li>
				<?php endif; ?>								
			
		</ul>
		<?php endif; ?>	
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
		
		<h3 class="zy-feature-title">Schools</h3>
		
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School: [gradeschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
				<?php endif; ?>
			
		</ul>
		
		<?php endif; ?>
		
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Capacity: [garagespaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Parking Features: [garageparking]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Capacity: [parkingspaces]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Hoa: [homeownassociation]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif;*//* ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Inclusions: [asscfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->maintfree)): ?>
				<li>Maintenance Fee: [unmapped_maintfree]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Home Own Association: [homeownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc fee includes: [asscfeeincludes]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->nolivinglevels) ):?>
		<h3 class="zy-feature-title">Room Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->nolivinglevels)): ?>
				<li>No Living Levels: [nolivinglevels]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					
	
	*/ ?>
	
</ul>
<?php /*
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

</ul> */ ?>