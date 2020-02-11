<ul class="zy-features-grid">
	<?php if( isset($single_property->lotdescription) || isset($single_property->homeownassociation) || isset($single_property->lot) || isset($single_property->zoning) || isset($single_property->lotsize) ||
			  isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->unmapped->{"Virtual Media Count"}) || isset($single_property->unmapped->{"Multiple Listing Service"}) || isset($single_property->unmapped->Internet) || isset($single_property->vacant) ||
			  isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Virtual Media Count"})): ?>
			<li>Media Count: [unmapped_Virtual Media Count]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Multiple Listing Service"})): ?>
			<li>Listing Service: [unmapped_Multiple Listing Service]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->unmapped->{"Tax Account#"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tax Account#"})): ?>
			<li>Tax Account: [unmapped_Tax Account#]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>				

</ul>