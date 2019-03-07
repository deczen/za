<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Land Details</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cultivationacres)): ?>
				<tr>
					<td class="bt-listing__table__label">Cultivation Acres</td>
					<td class="bt-listing__table__items"><span>[cultivationacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->pastureacres)): ?>
				<tr>
					<td class="bt-listing__table__label">Pasture Acres</td>
					<td class="bt-listing__table__items"><span>[pastureacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->timberacres)): ?>
				<tr>
					<td class="bt-listing__table__label">Timber Acres</td>
					<td class="bt-listing__table__items"><span>[timberacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->ldtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Land Style</td>
					<td class="bt-listing__table__items"><span>[ldtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<tr>
					<td class="bt-listing__table__label">Street Frontage</td>
					<td class="bt-listing__table__items"><span>[frontage]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
		<h3 class="bt-listing__headline">Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->gas)): ?>
				<tr>
					<td class="bt-listing__table__label">Gas</td>
					<td class="bt-listing__table__items"><span>[gas]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer Utilities</td>
					<td class="bt-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Utilities</td>
					<td class="bt-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>								
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="bt-listing__headline">Schools</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->gradeschool)): ?>
				<tr>
					<td class="bt-listing__table__label">Grade School</td>
					<td class="bt-listing__table__items"><span>[gradeschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="bt-listing__table__label">High School</td>
					<td class="bt-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="bt-listing__table__label">Middle School</td>
					<td class="bt-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>	
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->unmapped->Legal) ):?>
		<h3 class="bt-listing__headline">Taxes</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->Legal)): ?>
				<tr>
					<td class="bt-listing__table__label">Legal</td>
					<td class="bt-listing__table__items"><span>[unmapped_Legal]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Year</td>
					<td class="bt-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Amount ($)</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>