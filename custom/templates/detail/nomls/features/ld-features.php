<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) || isset($single_property->interiorfeatures ) || isset($single_property->exteriorfeatures ) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Land Details</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cultivationacres)): ?>
				<tr>
					<td class="bt-listing__table__label">Cultivation Acres</td>
					<td class="bt-listing__table__items"><span>[cultivationacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->pastureacres)): ?>
				<tr>
					<td class="bt-listing__table__label">Pasture Acres</td>
					<td class="bt-listing__table__items"><span>[pastureacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->timberacres)): ?>
				<tr>
					<td class="bt-listing__table__label">Timber Acres</td>
					<td class="bt-listing__table__items"><span>[timberacres]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->ldtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Land Style</td>
					<td class="bt-listing__table__items"><span>[ldtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<tr>
					<td class="bt-listing__table__label">Street Frontage</td>
					<td class="bt-listing__table__items"><span>[frontage]</span></td>
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
				<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Fire place</td>
					<td class="bt-listing__table__items"><span>[unmapped_FireplaceYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Car Storage</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
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
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="bt-listing__table__label">Handicap Access</td>
					<td class="bt-listing__table__items"><span>[handicapaccess]</span></td>
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
				<?php /*if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric Feature</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif;*/ ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->gas)): ?>
				<tr>
					<td class="bt-listing__table__label">Gas</td>
					<td class="bt-listing__table__items"><span>[gas]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
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

				<!-- ADD FIELD -->
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="bt-listing__table__label">Air Condition</td>
					<td class="bt-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>	
			</tbody>
		</table>
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
							<tr>
								<td class="bt-listing__table__label">Room Description</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomDescription]</span></td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="bt-listing__headline">Taxes</h3>
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
					<td class="bt-listing__table__items"><span>[zoning]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>
