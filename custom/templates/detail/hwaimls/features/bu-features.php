<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->style) || isset($single_property->construction) || isset($single_property->roofmaterial) || isset($single_property->unmapped->Topography) || isset($single_property->location) || isset($single_property->flooring) || isset($single_property->unmapped->Inclusions) || isset($single_property->unmapped->StoriesType) || isset($single_property->unmapped->SecurityFeatures) || isset($single_property->parkingfeature) || isset($single_property->unmapped->CondoParkingUnit) || isset($single_property->unmapped->OccupantType) || isset($single_property->unmapped->FloodZone) || isset($single_property->unmapped->View) || isset($single_property->unmapped->PropertyFrontage) || isset($single_property->unmapped->FloorNumber) || isset($single_property->elevator) || isset($single_property->amenities) || isset($single_property->sitecondition) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Material</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Topography)): ?>
				<tr>
					<td class="bt-listing__table__label">Topography</td>
					<td class="bt-listing__table__items"><span>[unmapped_Topography]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<tr>
					<td class="bt-listing__table__label">Location</td>
					<td class="bt-listing__table__items"><span>[location]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Inclusions)): ?>
				<tr>
					<td class="bt-listing__table__label">Inclusions</td>
					<td class="bt-listing__table__items"><span>[unmapped_Inclusions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StoriesType)): ?>
				<tr>
					<td class="bt-listing__table__label">Stories Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_StoriesType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecurityFeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Security Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_SecurityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Feature</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CondoParkingUnit)): ?>
				<tr>
					<td class="bt-listing__table__label">Condo Parking Unit</td>
					<td class="bt-listing__table__items"><span>[unmapped_CondoParkingUnit]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->OccupantType)): ?>
				<tr>
					<td class="bt-listing__table__label">Occupant Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_OccupantType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloodZone)): ?>
				<tr>
					<td class="bt-listing__table__label">Flood Zone</td>
					<td class="bt-listing__table__items"><span>[unmapped_FloodZone]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<tr>
					<td class="bt-listing__table__label">View</td>
					<td class="bt-listing__table__items"><span>[unmapped_View]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PropertyFrontage)): ?>
				<tr>
					<td class="bt-listing__table__label">Property Frontage</td>
					<td class="bt-listing__table__items"><span>[unmapped_PropertyFrontage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloorNumber)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor Number</td>
					<td class="bt-listing__table__items"><span>[unmapped_FloorNumber]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->elevator)): ?>
				<tr>
					<td class="bt-listing__table__label">Elevator</td>
					<td class="bt-listing__table__items"><span>[elevator]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="bt-listing__table__label">Amenities</td>
					<td class="bt-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<tr>
					<td class="bt-listing__table__label">Site Condition</td>
					<td class="bt-listing__table__items"><span>[sitecondition]</span></td>
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
	
	<?php if( isset($single_property->unmapped->AssociationCommunityName) || isset($single_property->unmapped->AssociationPhone) || isset($single_property->unmapped->AssociationFee) || isset($single_property->asscfeeincludes) || isset($single_property->hoafee) || isset($single_property->unmapped->HeatingFuel) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->ElectricitySource) || isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->GasSource) || isset($single_property->sewer) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
	<?php if( isset($single_property->unmapped->AssociationCommunityName) || isset($single_property->unmapped->AssociationPhone) || isset($single_property->unmapped->AssociationFee) || isset($single_property->asscfeeincludes) || isset($single_property->hoafee) ):?>
		<h3 class="bt-listing__headline">Association information</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->AssociationCommunityName)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Community Name</td>
					<td class="bt-listing__table__items"><span>[unmapped_AssociationCommunityName]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationPhone)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Phone</td>
					<td class="bt-listing__table__items"><span>[unmapped_AssociationPhone]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->AssociationFee)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Fee</td>
					<td class="bt-listing__table__items"><span>[unmapped_AssociationFee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Assc Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">Hoafee</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>			
			</tbody>
		</table>
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->HeatingFuel) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->ElectricitySource) || isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->GasSource) || isset($single_property->sewer) ):?>
		<h3 class="bt-listing__headline">Heating, Cooling, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->HeatingFuel)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating Fuel</td>
					<td class="bt-listing__table__items"><span>[unmapped_HeatingFuel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ElectricitySource)): ?>
				<tr>
					<td class="bt-listing__table__label">Electricity Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_ElectricitySource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterSource)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_WaterSource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GasSource)): ?>
				<tr>
					<td class="bt-listing__table__label">Gas Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_GasSource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer</td>
					<td class="bt-listing__table__items"><span>[sewer]</span></td>
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
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Spaces</td>
					<td class="bt-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Spaces</td>
					<td class="bt-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Road Type </td>
					<td class="bt-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="bt-listing__headline">Taxes</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax year</td>
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
		
		<?php
			$roomLevels = $single_property->roomLevels;
			if (isset($roomLevels)): ?>
				<h3 class="bt-listing__headline">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="bt-listing__table">
						<tbody>
							<tr>
								<td class="bt-listing__table__label">Room Type</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></span></td>
							</tr>
							<tr>
								<td class="bt-listing__table__label">Room Level</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<tr>
								<td class="bt-listing__table__label">Room Size</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php endif; ?>
							<?php $Des = $roomLevels[$rkey]->roomDescription; ?>
							<?php if( isset($Des)): ?>
							<tr>
								<td class="bt-listing__table__label">Room Feature</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomDescription]</span></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
	</li>					

</ul>