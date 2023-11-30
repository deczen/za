<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Land Details</h3>
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
				
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
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
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School: [gradeschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
				<?php endif; ?>	
			</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->unmapped->Legal) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->Legal)): ?>
				<li>Legal: [unmapped_Legal]</li> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	</li>					

</ul>