<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">

	<?php if( isset($single_property->propsubtype) || isset($single_property->unmapped->improvements) || isset($single_property->unmapped->irrigation) || isset($single_property->unmapped->ownertype) || isset($single_property->taxes) || isset($single_property->unmapped->termsfeature) || isset($single_property->unmapped->watershares) || isset($single_property->unmapped->waterviewfeatures) || isset($single_property->zoning) ):?>
	
	<li class="cell">
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Farm Type</td>
					<td class="bt-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->improvements)): ?> <!-- -->
				<tr>
					<td class="bt-listing__table__label">Improvements</td>
					<td class="bt-listing__table__items"><span>[unmapped_improvements]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->irrigation)): ?>
				<tr>
					<td class="bt-listing__table__label">Irrigation </td>
					<td class="bt-listing__table__items"><span>[unmapped_irrigation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<tr>
					<td class="bt-listing__table__label">Owner Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_ownertype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Taxes</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->termsfeature)): ?> <!-- -->
				<tr>
					<td class="bt-listing__table__label">Terms</td>
					<td class="bt-listing__table__items"><span>[unmapped_termsfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->watershares)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Shares</td>
					<td class="bt-listing__table__items"><span>[unmapped_watershares]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->waterviewfeatures)): ?> <!-- -->
				<tr>
					<td class="bt-listing__table__label">Water Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_waterviewfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->acresdry) || isset($single_property->unmapped->acresirrig) || isset($single_property->unmapped->acresleased) || isset($single_property->unmapped->acresrange) || isset($single_property->unmapped->driveway) || isset($single_property->exteriorfeatures) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) ):?>
	
	<li class="cell">
		
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->acresdry)): ?>
				<tr>
					<td class="bt-listing__table__label">Acres Dry</td>
					<td class="bt-listing__table__items"><span>[unmapped_acresdry]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresirrig)): ?>
				<tr>
					<td class="bt-listing__table__label">Acres Irrigated</td>
					<td class="bt-listing__table__items"><span>[unmapped_acresirrig]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresleased)): ?>
				<tr>
					<td class="bt-listing__table__label">Acres Leased</td>
					<td class="bt-listing__table__items"><span>[unmapped_acresleased]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresrange)): ?>
				<tr>
					<td class="bt-listing__table__label">Acres Range</td>
					<td class="bt-listing__table__items"><span>[unmapped_acresrange]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<tr>
					<td class="bt-listing__table__label">Driveway</td>
					<td class="bt-listing__table__items"><span>[unmapped_driveway]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<tr>
					<td class="bt-listing__table__label">Land Use</td>
					<td class="bt-listing__table__items"><span>[landdesc]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<tr>
					<td class="bt-listing__table__label">Length In Feet Of Back Of Property</td>
					<td class="bt-listing__table__items"><span>[unmapped_dimback]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<tr>
					<td class="bt-listing__table__label">Length In Feet Of Side Of Property</td>
					<td class="bt-listing__table__items"><span>[unmapped_dimside]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Facts</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		
	</li>	
	<?php endif; ?>
	
</ul>