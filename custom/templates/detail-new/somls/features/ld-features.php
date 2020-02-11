<ul class="zy-features-grid">
	<?php if( isset($single_property->propsubtype) || isset($single_property->unmapped->lngAREADESCRIPTION) || isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->unmapped->lngCOUNTYDESCRIPTION) || isset($single_property->homeownassociation) ||
			  isset($single_property->lot) || isset($single_property->lotsize) || isset($single_property->lotdescription) || isset($single_property->unmapped->{"Virtual Media Count"}) || isset($single_property->unmapped->View) ||
			  isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Property Sub Type: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngAREADESCRIPTION)): ?>
			<li>Area Description: [unmapped_lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngCOUNTYDESCRIPTION)): ?>
			<li>County Description: [unmapped_lngCOUNTYDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Virtual Media Count"})): ?>
			<li>Media Count: [unmapped_Virtual Media Count]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			
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
			
		</ul>
	</li>						
	<?php endif; ?>

	<li class="cell">	
		
		<?php if( isset($single_property->utilities) || isset($single_property->water) || isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water: [water]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>						
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>