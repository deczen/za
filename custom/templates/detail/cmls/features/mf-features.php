<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->style) || isset($single_property->waterviewfeatures)  ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="bt-listing__table__label">Amenities</td>
					<td class="bt-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement</td>
					<td class="bt-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">House Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterview</td>
					<td class="bt-listing__table__items"><span>[waterviewfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterfront</td>
					<td class="bt-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				
				<!-- ADD NEW FIELDS -->
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
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
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool)):?>
	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
		<h3 class="bt-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coolingzones)): ?>
				<tr>
					<td class="bt-listing__table__label">Cool Zones</td>
					<td class="bt-listing__table__items"><span>[coolingzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heatzones)): ?>
				<tr>
					<td class="bt-listing__table__label">Heat Zones</td>
					<td class="bt-listing__table__items"><span>[heatzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Energy Features</td>
					<td class="bt-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="bt-listing__table__label">Hot Water</td>
					<td class="bt-listing__table__items"><span>[hotwater]</span></td>
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
				
				<!-- ADD NEW FIELD -->
				<?php if( isset($single_property->unmapped->WaterHeater)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Heater</td>
					<td class="bt-listing__table__items"><span>[unmapped_WaterHeater]</span></td>
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
		
		<?php if( isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) || isset($single_property->feeinterval) ):?>
		<h3 class="bt-listing__headline">Association Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->HOAManagementName)): ?>
				<tr>
					<td class="bt-listing__table__label">HOA Management</td>
					<td class="bt-listing__table__items"><span>[HOAManagementName]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->HOAManagementPhone)): ?>
				<tr>
					<td class="bt-listing__table__label">HOA Mgmt Phone</td>
					<td class="bt-listing__table__items"><span>[HOAManagementPhone]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">HOA Fee</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->feeinterval)): ?>
				<tr>
					<td class="bt-listing__table__label">Fee Interval</td>
					<td class="bt-listing__table__items"><span>[feeinterval]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
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
		
		
		<?php /*if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
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
		<?php endif;*/ ?>
	</li>					

</ul>
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
