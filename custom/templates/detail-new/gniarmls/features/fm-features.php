<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->lotdescription) || isset($single_property->lotsize) || isset($single_property->streetname) || isset($single_property->unmapped->Septic) || isset($single_property->unmapped->Well) || 
			  isset($single_property->unmapped->{"Transaction Type"}) || isset($single_property->style) || isset($single_property->lotsize) || isset($single_property->nobedrooms) || isset($single_property->nofullbaths) || isset($single_property->nohalfbaths) ||
			  isset($single_property->yearbuilt) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cultivationacres)): ?>
			<li>Cultivation Acres: [cultivationacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pastureacres)): ?>
			<li>Pasture Acres: [pastureacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->timberacres)): ?>
			<li>Timber Acres: [timberacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->ldtype)): ?>
			<li>Land Style: [ldtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->frontage)): ?>
			<li>Street Frontage: [frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->streetname)): ?>
			<li>Cross Street Address: [streetname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Septic)): ?>
			<li>Septic: [unmapped_Septic]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Well)): ?>
			<li>Well: [unmapped_Well]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Transaction Type"})): ?>
			<li>Transaction Type: [unmappedTransaction Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->style)): ?>
			<li>Style: [style]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobedrooms)): ?>
			<li>No of Bedrooms: [nobedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nofullbaths)): ?>
			<li>No of Full Baths: [nofullbaths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nohalfbaths)): ?>
			<li>No of Half Baths: [nohalfbaths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Built: [yearbuilt]</li>
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
	
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
			  isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->unmapped->{"Central Air"}) ||
			  isset($single_property->unmapped->{"Heat System"}) ):?>
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
			<?php if( isset($single_property->unmapped->{"Central Air"})): ?>
			<li>Central Air: [unmapped_Central Air]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->unmapped->{"Heat System"})): ?>
			<li>Heat System: [unmapped_Heat System]</li>
			<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->garageparking) || isset($single_property->unmapped->{"Garage # of Cars"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Type: [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking: [garageparking]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Garage # of Cars"})): ?>
			<li>Garage no. of Cars: [unmapped_Garage # of Cars]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>