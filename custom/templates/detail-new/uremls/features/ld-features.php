<ul class="zy-features-grid">

	<?php if( isset($single_property->propsubtype) || isset($single_property->unmapped->improvements) || isset($single_property->unmapped->irrigation) || isset($single_property->unmapped->ownertype) || isset($single_property->taxes) || isset($single_property->unmapped->termsfeature) || isset($single_property->unmapped->watershares) || isset($single_property->unmapped->waterviewfeatures) || isset($single_property->zoning) ):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Farm Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->improvements)): ?> <!-- -->
				<li>Improvements: [unmapped_improvements]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->irrigation)): ?>
				<li>Irrigation : [unmapped_irrigation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<li>Owner Type: [unmapped_ownertype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->termsfeature)): ?> <!-- -->
				<li>Terms: [unmapped_termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->watershares)): ?>
				<li>Water Shares: [unmapped_watershares]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->waterviewfeatures)): ?> <!-- -->
				<li>Water Source: [unmapped_waterviewfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
			
		</ul>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->acresdry) || isset($single_property->unmapped->acresirrig) || isset($single_property->unmapped->acresleased) || isset($single_property->unmapped->acresrange) || isset($single_property->unmapped->driveway) || isset($single_property->exteriorfeatures) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) ):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->acresdry)): ?>
				<li>Acres Dry: [unmapped_acresdry]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresirrig)): ?>
				<li>Acres Irrigated: [unmapped_acresirrig]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresleased)): ?>
				<li>Acres Leased: [unmapped_acresleased]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresrange)): ?>
				<li>Acres Range: [unmapped_acresrange]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<li>Driveway: [unmapped_driveway]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<li>Land Use: [landdesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<li>Length In Feet Of Back Of Property: [unmapped_dimback]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<li>Length In Feet Of Side Of Property: [unmapped_dimside]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Facts: [lotdescription]</li>
				<?php endif; ?>
			
		</ul>
		
	</li>	
	<?php endif; ?>
	
</ul>