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

<?php /*
<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->bedrms1) || isset($single_property->fbths1) || isset($single_property->coldscrp1) || isset($single_property->headscrp1) || isset($single_property->frplcs1) || isset($single_property->flrs1) || isset($single_property->levels1) || isset($single_property->rms1) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Unit #1</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms1)): ?>
				<tr>
					<td class="bt-listing__table__label">Beds</td>
					<td class="bt-listing__table__items"><span>[bedrms1]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths1)): ?>
				<tr>
					<td class="bt-listing__table__label">Baths</td>
					<td class="bt-listing__table__items"><span>[fbths1]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp1)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[coldscrp1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp1)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[headscrp1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs1)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[frplcs1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs1)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flrs1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels1)): ?>
				<tr>
					<td class="bt-listing__table__label">Levels</td>
					<td class="bt-listing__table__items"><span>[levels1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms1)): ?>
				<tr>
					<td class="bt-listing__table__label">Rooms</td>
					<td class="bt-listing__table__items"><span>[rms1]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->bedrms2) || isset($single_property->fbths2) || isset($single_property->coldscrp2) || isset($single_property->headscrp2) || isset($single_property->frplcs2) || isset($single_property->flrs2) || isset($single_property->levels2) || isset($single_property->rms2) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Unit #2</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms2)): ?>
				<tr>
					<td class="bt-listing__table__label">Beds</td>
					<td class="bt-listing__table__items"><span>[bedrms2]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths2)): ?>
				<tr>
					<td class="bt-listing__table__label">Baths</td>
					<td class="bt-listing__table__items"><span>[fbths2]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp2)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[coldscrp2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp2)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[headscrp2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs2)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[frplcs2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs2)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flrs2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels2)): ?>
				<tr>
					<td class="bt-listing__table__label">Levels</td>
					<td class="bt-listing__table__items"><span>[levels2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms2)): ?>
				<tr>
					<td class="bt-listing__table__label">Rooms</td>
					<td class="bt-listing__table__items"><span>[rms2]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>

	<?php if( isset($single_property->bedrms3) || isset($single_property->fbths3) || isset($single_property->coldscrp3) || isset($single_property->headscrp3) || isset($single_property->frplcs3) || isset($single_property->flrs3) || isset($single_property->levels3) || isset($single_property->rms3) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Unit #3</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms3)): ?>
				<tr>
					<td class="bt-listing__table__label">Beds</td>
					<td class="bt-listing__table__items"><span>[bedrms3]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths3)): ?>
				<tr>
					<td class="bt-listing__table__label">Baths</td>
					<td class="bt-listing__table__items"><span>[fbths3]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp3)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[coldscrp3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp3)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[headscrp3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs3)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[frplcs3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs3)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flrs3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels3)): ?>
				<tr>
					<td class="bt-listing__table__label">Levels</td>
					<td class="bt-listing__table__items"><span>[levels3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms3)): ?>
				<tr>
					<td class="bt-listing__table__label">Rooms</td>
					<td class="bt-listing__table__items"><span>[rms3]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>		
	
	<?php if( isset($single_property->bedrms4) || isset($single_property->fbths4) || isset($single_property->coldscrp4) || isset($single_property->headscrp4) || isset($single_property->frplcs4) || isset($single_property->flrs4) || isset($single_property->levels4) || isset($single_property->rms4) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Unit #4</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms4)): ?>
				<tr>
					<td class="bt-listing__table__label">Beds</td>
					<td class="bt-listing__table__items"><span>[bedrms4]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths4)): ?>
				<tr>
					<td class="bt-listing__table__label">Baths</td>
					<td class="bt-listing__table__items"><span>[fbths4]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp4)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[coldscrp4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp4)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[headscrp4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs4)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[frplcs4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs4)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flrs4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels4)): ?>
				<tr>
					<td class="bt-listing__table__label">Levels</td>
					<td class="bt-listing__table__items"><span>[levels4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms4)): ?>
				<tr>
					<td class="bt-listing__table__label">Rooms</td>
					<td class="bt-listing__table__items"><span>[rms4]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
	<?php if( isset($single_property->bedrms5) || isset($single_property->fbths5) || isset($single_property->coldscrp5) || isset($single_property->headscrp5) || isset($single_property->frplcs5) || isset($single_property->flrs5) || isset($single_property->levels5) || isset($single_property->rms5) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Unit #5</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms5)): ?>
				<tr>
					<td class="bt-listing__table__label">Beds</td>
					<td class="bt-listing__table__items"><span>[bedrms5]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths5)): ?>
				<tr>
					<td class="bt-listing__table__label">Baths</td>
					<td class="bt-listing__table__items"><span>[fbths5]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp5)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[coldscrp5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp5)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[headscrp5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs5)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[frplcs5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs5)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flrs5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels5)): ?>
				<tr>
					<td class="bt-listing__table__label">Levels</td>
					<td class="bt-listing__table__items"><span>[levels5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms5)): ?>
				<tr>
					<td class="bt-listing__table__label">Rooms</td>
					<td class="bt-listing__table__items"><span>[rms5]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
</ul>
*/ ?>