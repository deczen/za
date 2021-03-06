<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	
	<?php if( isset($single_property->basement) || isset($single_property->nobuildings) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->parkingspaces) || isset($single_property->noofrestrooms) || isset($single_property->system) || isset($single_property->utilities) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Property Details</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->nobuildings)): ?>
				<tr>
					<td class="zy-listing__table__label">Building</td>
					<td class="zy-listing__table__items"><span>[nobuildings]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofdrivingdoors)): ?>
				<tr>
					<td class="zy-listing__table__label">Drive in Doors</td>
					<td class="zy-listing__table__items"><span>[noofdrivingdoors]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->elevator)): ?>
				<tr>
					<td class="zy-listing__table__label">Elevator</td>
					<td class="zy-listing__table__items"><span>[elevator]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->facilities)): ?>
				<tr>
					<td class="zy-listing__table__label">Facilities</td>
					<td class="zy-listing__table__items"><span>[facilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="zy-listing__table__label">Handicap Access</td>
					<td class="zy-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofloadingdocks)): ?>
				<tr>
					<td class="zy-listing__table__label">Loading Docks </td>
					<td class="zy-listing__table__items"><span>[noofloadingdocks]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Spaces</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->noofrestrooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Restrooms</td>
					<td class="zy-listing__table__items"><span>[noofrestrooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->system)): ?>
				<tr>
					<td class="zy-listing__table__label">System</td>
					<td class="zy-listing__table__items"><span>[system]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="zy-listing__table__label">Utilities</td>
					<td class="zy-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
			
		</table>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->businesshrs) || isset($single_property->butype) || isset($single_property->equiplistavail) || isset($single_property->form) || isset($single_property->inventoryavail) || isset($single_property->realestateincld) || isset($single_property->speciallicenses) || isset($single_property->tenantexpanses) || isset($single_property->yearbuilt) || isset($single_property->zoning) || isset($single_property->zonedescription) ):?>
		<h3 class="zy-listing__headline">Business Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->businesshrs)): ?>
				<tr>
					<td class="zy-listing__table__label">Business Hours</td>
					<td class="zy-listing__table__items"><span>[businesshrs]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->butype)): ?>
				<tr>
					<td class="zy-listing__table__label">Business Type</td>
					<td class="zy-listing__table__items"><span>[butype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<tr>
					<td class="zy-listing__table__label">Equipment List Available</td>
					<td class="zy-listing__table__items"><span>[equiplistavail]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->form)): ?>
				<tr>
					<td class="zy-listing__table__label">Form</td>
					<td class="zy-listing__table__items"><span>[form]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->inventoryavail)): ?>
				<tr>
					<td class="zy-listing__table__label">Inventory Included</td>
					<td class="zy-listing__table__items"><span>[inventoryavail]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->realestateincld)): ?>
				<tr>
					<td class="zy-listing__table__label">Real Estate Included</td>
					<td class="zy-listing__table__items"><span>[realestateincld]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->speciallicenses)): ?>
				<tr>
					<td class="zy-listing__table__label">Special Licenses</td>
					<td class="zy-listing__table__items"><span>[speciallicenses]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<tr>
					<td class="zy-listing__table__label">Tenant Expenses</td>
					<td class="zy-listing__table__items"><span>[tenantexpanses]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuilt)): ?>
				<tr>
					<td class="zy-listing__table__label">Year Established</td>
					<td class="zy-listing__table__items"><span>[yearbuilt]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning Code</td>
					<td class="zy-listing__table__items"><span>[zoning]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zonedescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning Description</td>
					<td class="zy-listing__table__items"><span>[zonedescription]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>