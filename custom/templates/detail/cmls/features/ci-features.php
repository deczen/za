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
		
		<?php
			$roomLevels = $single_property->roomLevels;
			if (isset($roomLevels)): ?>
				<h3 class="bt-listing__headline">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="bt-listing__table">
						<tbody>
							<tr>
								<td class="bt-listing__table__label">Room Level</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<tr>
								<td class="bt-listing__table__label">Room Type</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></span></td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
		<?php if( isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Spaces</td>
					<td class="bt-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Features</td>
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
				
				<!-- ADD NEW FIELDS -->
				<?php /*if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->ConstructionType)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_ConstructionType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ConstructionStatus)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction Status</td>
					<td class="bt-listing__table__items"><span>[unmapped_ConstructionStatus]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="bt-listing__table__label">Foundation</td>
					<td class="bt-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Features</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Driveway)): ?>
				<tr>
					<td class="bt-listing__table__label">Driveway</td>
					<td class="bt-listing__table__items"><span>[unmapped_Driveway]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<tr>
					<td class="bt-listing__table__label">Equipment</td>
					<td class="bt-listing__table__items"><span>[equiplistavail]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Common Features</td>
					<td class="bt-listing__table__items"><span>[termsfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Porch)): ?>
				<tr>
					<td class="bt-listing__table__label">Porch</td>
					<td class="bt-listing__table__items"><span>[unmapped_Porch]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Material</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->DoorsWindows)): ?>
				<tr>
					<td class="bt-listing__table__label">Doors Windows</td>
					<td class="bt-listing__table__items"><span>[unmapped_DoorsWindows]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotDimension)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Dimension</td>
					<td class="bt-listing__table__items"><span>[unmapped_LotDimension]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
			
		</table>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="bt-listing__headline">Taxes & Considerations</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Amount ($)</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Year</td>
					<td class="bt-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning Code</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zonedescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning Description</td>
					<td class="bt-listing__table__items"><span>[zonedescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Fee ($)</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>