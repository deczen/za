<ul class="zy-features-grid">

	<?php if( isset($single_property->unmapped->businessname) || isset($single_property->unmapped->caprate) || isset($single_property->unmapped->leasetermsfrom) || isset($single_property->unmapped->leasetermsto) || isset($single_property->unmapped->ownertype) || isset($single_property->possession) || isset($single_property->unmapped->subleasefrom) || isset($single_property->unmapped->subleaseto) || isset($single_property->unmapped->zoningchar) ):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->businessname)): ?>
				<li>Business Name: [unmapped_businessname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->caprate)): ?>
				<li>Capitalization Rate: [unmapped_caprate]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->leasetermsfrom)): ?>
				<li>Lease Terms From: [unmapped_leasetermsfrom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->leasetermsto)): ?>
				<li>Lease Terms To: [unmapped_leasetermsto]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<li>Owner Type: [unmapped_ownertype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<li>Possession: [possession]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->subleasefrom)): ?>
				<li>Sublease From : [unmapped_subleasefrom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->subleaseto)): ?>
				<li>Sublease To: [unmapped_subleaseto]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->zoningchar)): ?>
				<li>Zoning Code: [unmapped_zoningchar]</li>
				<?php endif; ?>
			
		</ul>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->taxes) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) ):?>
		
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<li>Length In Feet Of Back Of Property: [unmapped_dimback]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<li>Length In Feet Of Side Of Property: [unmapped_dimside]</li>
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
	<?php endif; ?>
	
</ul>