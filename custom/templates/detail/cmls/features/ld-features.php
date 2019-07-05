<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Land Details</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cultivationacres)): ?>
				<tr>
					<td class="zy-listing__table__label">Cultivation Acres</td>
					<td class="zy-listing__table__items"><span>[cultivationacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->pastureacres)): ?>
				<tr>
					<td class="zy-listing__table__label">Pasture Acres</td>
					<td class="zy-listing__table__items"><span>[pastureacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->timberacres)): ?>
				<tr>
					<td class="zy-listing__table__label">Timber Acres</td>
					<td class="zy-listing__table__items"><span>[timberacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->ldtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Land Style</td>
					<td class="zy-listing__table__items"><span>[ldtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<tr>
					<td class="zy-listing__table__label">Street Frontage</td>
					<td class="zy-listing__table__items"><span>[frontage]</span></td>
				</tr>
				<?php endif; ?>
				
				<!-- ADD NEW FIELDS -->
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction</td>
					<td class="zy-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ConstructionType)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_ConstructionType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ConstructionStatus)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction Status</td>
					<td class="zy-listing__table__items"><span>[unmapped_ConstructionStatus]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="zy-listing__table__label">Foundation</td>
					<td class="zy-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Features</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Driveway)): ?>
				<tr>
					<td class="zy-listing__table__label">Driveway</td>
					<td class="zy-listing__table__items"><span>[unmapped_Driveway]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<tr>
					<td class="zy-listing__table__label">Equipment</td>
					<td class="zy-listing__table__items"><span>[equiplistavail]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Common Features</td>
					<td class="zy-listing__table__items"><span>[termsfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Porch)): ?>
				<tr>
					<td class="zy-listing__table__label">Porch</td>
					<td class="zy-listing__table__items"><span>[unmapped_Porch]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="zy-listing__table__label">Roof Material</td>
					<td class="zy-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->DoorsWindows)): ?>
				<tr>
					<td class="zy-listing__table__label">Doors Windows</td>
					<td class="zy-listing__table__items"><span>[unmapped_DoorsWindows]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotDimension)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Dimension</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotDimension]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool)):?>
	<li class="cell">
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
		<h3 class="zy-listing__headline">Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->gas)): ?>
				<tr>
					<td class="zy-listing__table__label">Gas</td>
					<td class="zy-listing__table__items"><span>[gas]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer Utilities</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Utilities</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>		
				
				<!-- ADD NEW FIELD -->
				<?php if( isset($single_property->unmapped->WaterHeater)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Heater</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterHeater]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-listing__headline">Schools</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->gradeschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Grade School</td>
					<td class="zy-listing__table__items"><span>[gradeschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="zy-listing__table__label">High School</td>
					<td class="zy-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Middle School</td>
					<td class="zy-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) ):?>
		<h3 class="zy-listing__headline">Association Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->HOAManagementName)): ?>
				<tr>
					<td class="zy-listing__table__label">HOA Management</td>
					<td class="zy-listing__table__items"><span>[HOAManagementName]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->HOAManagementPhone)): ?>
				<tr>
					<td class="zy-listing__table__label">HOA Mgmt Phone</td>
					<td class="zy-listing__table__items"><span>[HOAManagementPhone]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">HOA Fee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-listing__headline">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="zy-listing__table">
						<tbody>
							<tr>
								<td class="zy-listing__table__label">Room Level</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Type</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></span></td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="zy-listing__headline">Taxes</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Amount ($)</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning Code</td>
					<td class="zy-listing__table__items"><span>[zoning]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>