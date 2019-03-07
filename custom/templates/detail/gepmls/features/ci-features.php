<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
	<li class="cell">
		<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) ):?>
		<h3 class="bt-listing__headline">Space, #Units, SQ FT</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->mauunits) || isset($single_property->mafbldgsf)): ?>
				<tr>
					<td class="bt-listing__table__label">Manufacturing</td>
					<td class="bt-listing__table__label"><span>[mauunits]</span></td>
					<td class="bt-listing__table__items"><span>[mafbldgsf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->ofuunits) || isset($single_property->offbldgsf)): ?>
				<tr>
					<td class="bt-listing__table__label">Office</td>
					<td class="bt-listing__table__label"><span>[ofuunits]</span></td>
					<td class="bt-listing__table__items"><span>[offbldgsf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->rsuunits) || isset($single_property->rsfbldgsf)): ?>
				<tr>
					<td class="bt-listing__table__label">Residential</td>
					<td class="bt-listing__table__label"><span>[rsuunits]</span></td>
					<td class="bt-listing__table__items"><span>[rsfbldgsf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->reuunits) || isset($single_property->refbldgsf)): ?>
				<tr>
					<td class="bt-listing__table__label">Retail</td>
					<td class="bt-listing__table__label"><span>[reuunits]</span></td>
					<td class="bt-listing__table__items"><span>[refbldgsf]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->wauunits) || isset($single_property->wafbldgsf)): ?>
				<tr>
					<td class="bt-listing__table__label">Warehouse</td>
					<td class="bt-listing__table__label"><span>[wauunits]</span></td>
					<td class="bt-listing__table__items"><span>[wafbldgsf]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->garageparking) || isset($single_property->parkingfeature) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Parking</td>
					<td class="bt-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Feature</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities)  ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Details</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement</td>
					<td class="bt-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->citype)): ?>
				<tr>
					<td class="bt-listing__table__label">Commercial Type</td>
					<td class="bt-listing__table__items"><span>[citype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dividable)): ?>
				<tr>
					<td class="bt-listing__table__label">Dividable</td>
					<td class="bt-listing__table__items"><span>[dividable]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofdrivingdoors)): ?>
				<tr>
					<td class="bt-listing__table__label">Drive in Doors</td>
					<td class="bt-listing__table__items"><span>[noofdrivingdoors]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->elevator)): ?>
				<tr>
					<td class="bt-listing__table__label">Elevator</td>
					<td class="bt-listing__table__items"><span>[elevator]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->expandable)): ?>
				<tr>
					<td class="bt-listing__table__label">Expandable</td>
					<td class="bt-listing__table__items"><span>[expandable]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->facilities)): ?>
				<tr>
					<td class="bt-listing__table__label">Facilities</td>
					<td class="bt-listing__table__items"><span>[facilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="bt-listing__table__label">Handicap Access</td>
					<td class="bt-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofloadingdocks)): ?>
				<tr>
					<td class="bt-listing__table__label">Loading Docks </td>
					<td class="bt-listing__table__items"><span>[noofloadingdocks]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofrestrooms)): ?>
				<tr>
					<td class="bt-listing__table__label">Restrooms</td>
					<td class="bt-listing__table__items"><span>[noofrestrooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sprinklers)): ?>
				<tr>
					<td class="bt-listing__table__label">Sprinklers</td>
					<td class="bt-listing__table__items"><span>[sprinklers]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities</td>
					<td class="bt-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
			
		</table>
	</li>
	<?php endif; ?>
	
	<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->unmapped->Legal) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
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
</ul>