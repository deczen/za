<ul class="zy-features-grid">
	<?php if( /*isset($single_property->style) ||*/ isset($single_property->yearbuilt) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) || isset($single_property->shortsalelenderappreqd) || isset($single_property->unmapped->Foreclosure) || isset($single_property->water) || isset($single_property->sewer) || isset($single_property->asscfeeincludes) || isset($single_property->taxes) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">General Information</h3>
		<ul class="zy-sub-list">
			<?php /*if( isset($single_property->style)): ?>
			<li>Style: [style]</li>
			<?php endif;*/ ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Built: [yearbuilt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Description: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->shortsalelenderappreqd)): ?>
			<li>Short Sale: [shortsalelenderappreqd]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Foreclosure)): ?>
			<li>Foreclosure: [unmapped_Foreclosure]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water: [water]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Inclusions: [asscfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->construction) || isset($single_property->yearbuiltdescrp) || isset($single_property->acre) || isset($single_property->lotsize) /*|| isset($single_property->style)*/ ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Exterior Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Construction Type: [yearbuiltdescrp]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->acre)): ?>
			<li>Acres: [acre]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Dimensions: [lotsize]</li>
			<?php endif; ?>		
			<?php /*if( isset($single_property->style)): ?>
			<li>Style: [style]</li>
			<?php endif;*/ ?>	
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->unmapped->HeatType2) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->unmapped->Basement) || isset($single_property->basementfeature) || isset($single_property->basement) || isset($single_property->unmapped->BathsFullLocations) || isset($single_property->unmapped->BathsPartialLocations) ):?>
		<h3 class="zy-feature-title">Interior Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heat Type: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatType2)): ?>
			<li>Heat Type 2: [unmapped_HeatType2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Number of Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floors: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Basement)): ?>
			<li>Basement: [unmapped_Basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basementfeature)): ?>
			<li>Basement Access: [basementfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basemet Description: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BathsFullLocations)): ?>
			<li>Full Bath Locations: [unmapped_BathsFullLocations]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BathsPartialLocations)): ?>
			<li>Partial Bath Locations: [unmapped_BathsPartialLocations]</li>
			<?php endif; ?>	
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->schooldistrict) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->schooldistrict)): ?>
			<li>School District: [schooldistrict]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
	</li>					

</ul>
