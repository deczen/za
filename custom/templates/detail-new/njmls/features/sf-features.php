<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->LIFESTYLE) || isset($single_property->unmapped->MISC) || isset($single_property->unmapped->STREETTYP) || isset($single_property->unmapped->FLOODPLAIN) || isset($single_property->unmapped->VIEWSEXPOSURE) ||
			  isset($single_property->lotdescription) ):?>
			  
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->LIFESTYLE)): ?>
			<li>Lifestyle: [unmapped_LIFESTYLE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MISC)): ?>
			<li>Miscellaneous: [unmapped_MISC]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->STREETTYP)): ?>
			<li>Street Type: [unmapped_STREETTYP]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FLOODPLAIN)): ?>
			<li>Flood Plain: [unmapped_FLOODPLAIN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->VIEWSEXPOSURE)): ?>
			<li>View: [unmapped_VIEWSEXPOSURE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		
		<?php if( isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking: [garageparking]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>				

</ul>