<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->style) || isset($single_property->waterviewfeatures)  ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Amenities</td>
					<td class="zy-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">House Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterview</td>
					<td class="zy-listing__table__items"><span>[waterviewfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterfront</td>
					<td class="zy-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				
				<!-- ADD FIELDS -->
				<?php if( isset($single_property->DwellingType)): ?>
				<tr>
					<td class="zy-listing__table__label">Dwelling Type</td>
					<td class="zy-listing__table__items"><span>[DwellingType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="zy-listing__table__label">Foundation</td>
					<td class="zy-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="zy-listing__table__label">Roof Material</td>
					<td class="zy-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<tr>
					<td class="zy-listing__table__label">Fire place</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fireplace]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CarStorage)): ?>
				<tr>
					<td class="zy-listing__table__label">Car Storage</td>
					<td class="zy-listing__table__items"><span>[unmapped_CarStorage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSize)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotSize]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Desc</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->greencertified)): ?>
				<tr>
					<td class="zy-listing__table__label">Green Certified</td>
					<td class="zy-listing__table__items"><span>[greencertified]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="zy-listing__table__label">Handicap Access</td>
					<td class="zy-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric Feature</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif;*/ ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coolingzones)): ?>
				<tr>
					<td class="zy-listing__table__label">Cool Zones</td>
					<td class="zy-listing__table__items"><span>[coolingzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heatzones)): ?>
				<tr>
					<td class="zy-listing__table__label">Heat Zones</td>
					<td class="zy-listing__table__items"><span>[heatzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Energy Features</td>
					<td class="zy-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="zy-listing__table__label">Hot Water</td>
					<td class="zy-listing__table__items"><span>[hotwater]</span></td>
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

				<!-- ADD FIELD -->
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Air Condition</td>
					<td class="zy-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>											
			</tbody>
		</table>
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
								<td class="zy-listing__table__label">Room Type</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]</span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Level</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]</span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Size</td>
								<td class="zy-listing__table__items"><span><?php //echo $roomLevel->dim1; ?>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php// echo $roomLevel->dim2; ?></span></td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Spaces</td>
					<td class="zy-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Spaces</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Road Type </td>
					<td class="zy-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-listing__headline">Taxes, Fees</h3>
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
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Association Fee ($)</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Fee Includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>
<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->bedrms1) || isset($single_property->fbths1) || isset($single_property->coldscrp1) || isset($single_property->headscrp1) || isset($single_property->frplcs1) || isset($single_property->flrs1) || isset($single_property->levels1) || isset($single_property->rms1) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-listing__headline">Unit #1</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms1)): ?>
				<tr>
					<td class="zy-listing__table__label">Beds</td>
					<td class="zy-listing__table__items"><span>[bedrms1]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths1)): ?>
				<tr>
					<td class="zy-listing__table__label">Baths</td>
					<td class="zy-listing__table__items"><span>[fbths1]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp1)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[coldscrp1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp1)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[headscrp1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs1)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[frplcs1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs1)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flrs1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels1)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[levels1]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms1)): ?>
				<tr>
					<td class="zy-listing__table__label">Rooms</td>
					<td class="zy-listing__table__items"><span>[rms1]</span></td>
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
		<h3 class="zy-listing__headline">Unit #2</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms2)): ?>
				<tr>
					<td class="zy-listing__table__label">Beds</td>
					<td class="zy-listing__table__items"><span>[bedrms2]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths2)): ?>
				<tr>
					<td class="zy-listing__table__label">Baths</td>
					<td class="zy-listing__table__items"><span>[fbths2]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp2)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[coldscrp2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp2)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[headscrp2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs2)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[frplcs2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs2)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flrs2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels2)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[levels2]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms2)): ?>
				<tr>
					<td class="zy-listing__table__label">Rooms</td>
					<td class="zy-listing__table__items"><span>[rms2]</span></td>
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
		<h3 class="zy-listing__headline">Unit #3</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms3)): ?>
				<tr>
					<td class="zy-listing__table__label">Beds</td>
					<td class="zy-listing__table__items"><span>[bedrms3]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths3)): ?>
				<tr>
					<td class="zy-listing__table__label">Baths</td>
					<td class="zy-listing__table__items"><span>[fbths3]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp3)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[coldscrp3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp3)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[headscrp3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs3)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[frplcs3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs3)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flrs3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels3)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[levels3]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms3)): ?>
				<tr>
					<td class="zy-listing__table__label">Rooms</td>
					<td class="zy-listing__table__items"><span>[rms3]</span></td>
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
		<h3 class="zy-listing__headline">Unit #4</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms4)): ?>
				<tr>
					<td class="zy-listing__table__label">Beds</td>
					<td class="zy-listing__table__items"><span>[bedrms4]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths4)): ?>
				<tr>
					<td class="zy-listing__table__label">Baths</td>
					<td class="zy-listing__table__items"><span>[fbths4]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp4)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[coldscrp4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp4)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[headscrp4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs4)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[frplcs4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs4)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flrs4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels4)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[levels4]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms4)): ?>
				<tr>
					<td class="zy-listing__table__label">Rooms</td>
					<td class="zy-listing__table__items"><span>[rms4]</span></td>
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
		<h3 class="zy-listing__headline">Unit #5</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->bedrms5)): ?>
				<tr>
					<td class="zy-listing__table__label">Beds</td>
					<td class="zy-listing__table__items"><span>[bedrms5]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fbths5)): ?>
				<tr>
					<td class="zy-listing__table__label">Baths</td>
					<td class="zy-listing__table__items"><span>[fbths5]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp5)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[coldscrp5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp5)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[headscrp5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs5)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[frplcs5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs5)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flrs5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->levels5)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[levels5]</span></td>
				</tr>								
				<?php endif; ?>
				<?php if( isset($single_property->rms5)): ?>
				<tr>
					<td class="zy-listing__table__label">Rooms</td>
					<td class="zy-listing__table__items"><span>[rms5]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
</ul>