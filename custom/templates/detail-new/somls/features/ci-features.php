<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{"Property Type"}) || isset($single_property->unmapped->Fence) || isset($single_property->unmapped->{"Office Type"}) || isset($single_property->unmapped->Internet) || isset($single_property->unpammed->lngAREADESCRIPTION) ||
			  isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->exterior) || isset($single_property->roofmaterial) || isset($single_property->homeownassociation) || isset($single_property->lot) ||
			  isset($single_property->unmapped->shrtAREACODE) || isset($single_property->unmapped->shrtCOUNTYCODE) || isset($single_property->unmapped->lngCOUNTYDESCRIPTION) || isset($single_property->lotsize) || isset($single_property->lotdescription) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Property Type"})): ?>
			<li>Property Type: [unmapped_Property Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Fence)): ?>
			<li>Fence: [unmapped_Fence]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Office Type"})): ?>
			<li>Office Type: [unmapped_Office Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngAREADESCRIPTION)): ?>
			<li>Area Description: [unmapped_lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->shrtAREACODE)): ?>
			<li>Area Code: [unmapped_shrtAREACODE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->shrtCOUNTYCODE)): ?>
			<li>County Code: [unmapped_shrtCOUNTYCODE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngCOUNTYDESCRIPTION)): ?>
			<li>County Description: [unmapped_lngCOUNTYDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>		
		
	<li class="cell">
		<?php if( isset($single_property->heating) || isset($single_property->sewer) || isset($single_property->water) ):?>
			  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Tax Account#"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Tax Account#"})): ?>
			<li>Tax Account: [unmapped_Tax Account#]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
	
	</li>

</ul>