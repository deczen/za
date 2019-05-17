<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">

	<?php if( isset($single_property->unmapped->businessname) || isset($single_property->unmapped->caprate) || isset($single_property->unmapped->leasetermsfrom) || isset($single_property->unmapped->leasetermsto) || isset($single_property->unmapped->ownertype) || isset($single_property->possession) || isset($single_property->unmapped->subleasefrom) || isset($single_property->unmapped->subleaseto) || isset($single_property->unmapped->zoningchar) ):?>
	
	<li class="cell">
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->businessname)): ?>
				<tr>
					<td class="bt-listing__table__label">Business Name</td>
					<td class="bt-listing__table__items"><span>[unmapped_businessname]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->caprate)): ?>
				<tr>
					<td class="bt-listing__table__label">Capitalization Rate</td>
					<td class="bt-listing__table__items"><span>[unmapped_caprate]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->leasetermsfrom)): ?>
				<tr>
					<td class="bt-listing__table__label">Lease Terms From</td>
					<td class="bt-listing__table__items"><span>[unmapped_leasetermsfrom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->leasetermsto)): ?>
				<tr>
					<td class="bt-listing__table__label">Lease Terms To</td>
					<td class="bt-listing__table__items"><span>[unmapped_leasetermsto]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ownertype)): ?>
				<tr>
					<td class="bt-listing__table__label">Owner Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_ownertype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<tr>
					<td class="bt-listing__table__label">Possession</td>
					<td class="bt-listing__table__items"><span>[possession]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->subleasefrom)): ?>
				<tr>
					<td class="bt-listing__table__label">Sublease From </td>
					<td class="bt-listing__table__items"><span>[unmapped_subleasefrom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->subleaseto)): ?>
				<tr>
					<td class="bt-listing__table__label">Sublease To</td>
					<td class="bt-listing__table__items"><span>[unmapped_subleaseto]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->zoningchar)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning Code</td>
					<td class="bt-listing__table__items"><span>[unmapped_zoningchar]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->taxes) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) ):?>
		
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
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
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Taxes</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
</ul>