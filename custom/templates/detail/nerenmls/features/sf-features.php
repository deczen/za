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
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exterior]</span></td>
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
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-listing__headline">Master Bedroom</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->mbrdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[mbrdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[mbrdscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed2DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed3DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #4</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed4DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-listing__headline">Bedroom #5</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bed5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bed5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bed5DSCRP]</span></td>
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
		<h3 class="zy-listing__headline">Bathroom #1</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth1dimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth1dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth1dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-listing__headline">Bathroom #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth2dimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth2dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth2dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-listing__headline">Bathroom #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->bth3dimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[bth3dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[bth3level]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[bth3dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-listing__headline">Kitchen</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->kitdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[kitdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[kitlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-listing__headline">Family Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->famdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[famdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[famlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[famdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-listing__headline">Living Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->livdimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[livdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[livlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-listing__headline">Dining Room</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->dindimen)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[dindimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[dinlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[dindscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #1</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth1DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth1DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #2</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth2DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #3</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth3DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #4</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth4DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #5</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth5DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-listing__headline">Additional Room #6</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<tr>
					<td class="zy-listing__table__label">Size</td>
					<td class="zy-listing__table__items"><span>[oth6DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<tr>
					<td class="zy-listing__table__label">Level</td>
					<td class="zy-listing__table__items"><span>[oth6LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Features</td>
					<td class="zy-listing__table__items"><span>[oth6DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>