<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->AREANAME) || isset($single_property->unmapped->PROVIDED) || isset($single_property->unmapped->MISCELLANEOUS) || isset($single_property->unmapped->LIFESTYLE) || isset($single_property->yearbuiltdescrp) ||
			  isset($single_property->laundrydscrp) ):?>
			  
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->AREANAME)): ?>
			<li>Area Name: [unmapped_AREANAME]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PROVIDED)): ?>
			<li>Provided: [unmapped_PROVIDED]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MISCELLANEOUS)): ?>
			<li>Miscellaneous: [unmapped_MISCELLANEOUS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LIFESTYLE)): ?>
			<li>Lifestyle: [unmapped_LIFESTYLE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Year Built Description: [yearbuiltdescrp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundrydscrp)): ?>
			<li>Laundry Description: [laundrydscrp]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->heating) || isset($single_property->firmrmk1) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->firmrmk1)): ?>
			<li>Fireplace Description: [firmrmk1]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>	
		
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