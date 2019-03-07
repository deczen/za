<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->rntype) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->laundryfeatures) || isset($single_property->unitlevel) || isset($single_property->petsallowed) || isset($single_property->waterviewfeatures) || isset($single_property->waterfront)  ):?>
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
				<?php if( isset($single_property->rntype)): ?>
				<tr>
					<td class="bt-listing__table__label">Rental Style</td>
					<td class="bt-listing__table__items"><span>[rntype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exterior]</span></td>
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
				<?php if( isset($single_property->laundryfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Laundry</td>
					<td class="bt-listing__table__items"><span>[laundryfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="bt-listing__table__label">Pets Allowed</td>
					<td class="bt-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unitlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Unit Level</td>
					<td class="bt-listing__table__items"><span>[unitlevel]</span></td>
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
				
				<!-- ADD FIELDS -->
				<?php if( isset($single_property->DwellingType)): ?>
				<tr>
					<td class="bt-listing__table__label">Dwelling Type</td>
					<td class="bt-listing__table__items"><span>[DwellingType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="bt-listing__table__label">Foundation</td>
					<td class="bt-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Material</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<tr>
					<td class="bt-listing__table__label">Fire place</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fireplace]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CarStorage)): ?>
				<tr>
					<td class="bt-listing__table__label">Car Storage</td>
					<td class="bt-listing__table__items"><span>[unmapped_CarStorage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSize)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size</td>
					<td class="bt-listing__table__items"><span>[unmapped_LotSize]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Desc</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->greencertified)): ?>
				<tr>
					<td class="bt-listing__table__label">Green Certified</td>
					<td class="bt-listing__table__items"><span>[greencertified]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric Feature</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="bt-listing__table__label">Handicap Access</td>
					<td class="bt-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php /*if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
	<li class="cell">
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
			</tbody>
		</table>
	</li>
	<?php endif;*/ ?>

	<li class="cell">
		<?php
			$roomLevels = $single_property->roomLevels;
			if (isset($roomLevels)): ?>
				<h3 class="bt-listing__headline">Room Information</h3>
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
						
					<table class="bt-listing__table">
						<tbody>
							<tr>
								<td class="bt-listing__table__label">Room Type</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]</span></td>
							</tr>
							<tr>
								<td class="bt-listing__table__label">Room Level</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]</span></td>
							</tr>
							<tr>
								<td class="bt-listing__table__label">Room Size</td>
								<td class="bt-listing__table__items"><span><?php //echo $roomLevel->dim1; ?>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php// echo $roomLevel->dim2; ?></span></td>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="bt-listing__headline">Deposits, Inclusions</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->firstmonreqd)): ?>
				<tr>
					<td class="bt-listing__table__label">1st Month</td>
					<td class="bt-listing__table__items"><span>[firstmonreqd]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lastmonreqd)): ?>
				<tr>
					<td class="bt-listing__table__label">Last Month</td>
					<td class="bt-listing__table__items"><span>[lastmonreqd]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<tr>
					<td class="bt-listing__table__label">Secutity</td>
					<td class="bt-listing__table__items"><span>[secdeposit]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Rent Includes</td>
					<td class="bt-listing__table__items"><span>[rentfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>
<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) || isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) || isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) || isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Master Bedroom</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->mbrdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[mbrdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[mbrdscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #2</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed2dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed2dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed2dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #3</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed3dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed3dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed3dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #4</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed4dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed4dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed4dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #5</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed5dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed5dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed5dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="bt-listing__headline">Bathroom #1</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bth1dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bth1dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bth1dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="bt-listing__headline">Bathroom #2</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bth2dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bth2dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bth2dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="bt-listing__headline">Bathroom #3</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bth3dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bth3dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bth3level]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bth3dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="bt-listing__headline">Kitchen</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->kitdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[kitdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[kitlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="bt-listing__headline">Family Room</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->famdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[famdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[famlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[famdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="bt-listing__headline">Living Room</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->livdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[livdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[livlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="bt-listing__headline">Dining Room</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->dindimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[dindimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[dinlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[dindscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #1</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth1DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth1DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>
