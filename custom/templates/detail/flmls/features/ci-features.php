<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->style) || isset($single_property->unmapped->CurrentUse) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->sitecondition) || isset($single_property->exteriorfeatures) || isset($single_property->interiorfeatures) || isset($single_property->flooring) || isset($single_property->roofmaterial) || isset($single_property->condominiumname) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->FloorNumber) || isset($single_property->unmapped->CommunityFeatures) || isset($single_property->unmapped->Township) || isset($single_property->appliances) || isset($single_property->parkingfeature) || isset($single_property->fireplaces) || isset($single_property->unmapped->View) || isset($single_property->unmapped->WaterAccess) || isset($single_property->waterfront) || isset($single_property->waterviewfeatures) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterExtras) || isset($single_property->unmapped->AdditionalWaterInformation) || isset($single_property->unmapped->SecurityFeatures) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->unmapped->Vegetation) || isset($single_property->unmapped->LotSizeSquareFeet) || isset($single_property->unmapped->AdditionalRooms) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->BuildingElevatorYN) || isset($single_property->disclosures) || isset($single_property->pooldescription) || isset($single_property->unitplacement) || isset($single_property->facingdirection) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->BusinessType) || isset($single_property->unmapped->NumofConferenceMeetingRooms) || isset($single_property->leasepriceincludes) || isset($single_property->petsallowed) || isset($single_property->lotdescription) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CurrentUse)): ?>
				<tr>
					<td class="zy-listing__table__label">Current Use</td>
					<td class="zy-listing__table__items"><span>[unmapped_CurrentUse]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction</td>
					<td class="zy-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="zy-listing__table__label">Foundation</td>
					<td class="zy-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Site Condition</td>
					<td class="zy-listing__table__items"><span>[sitecondition]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="zy-listing__table__label">Roof Material</td>
					<td class="zy-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->condominiumname)): ?>
				<tr>
					<td class="zy-listing__table__label">Condominium Name</td>
					<td class="zy-listing__table__items"><span>[condominiumname]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Levels)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[unmapped_Levels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloorNumber)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor Number</td>
					<td class="zy-listing__table__items"><span>[unmapped_FloorNumber]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommunityFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Community Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_CommunityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Township)): ?>
				<tr>
					<td class="zy-listing__table__label">Town Ship</td>
					<td class="zy-listing__table__items"><span>[unmapped_Township]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="zy-listing__table__label">Appliances</td>
					<td class="zy-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Feature</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<tr>
					<td class="zy-listing__table__label">View</td>
					<td class="zy-listing__table__items"><span>[unmapped_View]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterAccess)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Access</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterAccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Front</td>
					<td class="zy-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Water View Features</td>
					<td class="zy-listing__table__items"><span>[waterviewfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Front Feet Total</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterfrontFeetTotal]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterExtras)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Extras</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterExtras]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AdditionalWaterInformation)): ?>
				<tr>
					<td class="zy-listing__table__label">Additional Water Information</td>
					<td class="zy-listing__table__items"><span>[unmapped_AdditionalWaterInformation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecurityFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Security Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_SecurityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Window Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_WindowFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Patio And Porch Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_PatioAndPorchFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Vegetation)): ?>
				<tr>
					<td class="zy-listing__table__label">Vegetation</td>
					<td class="zy-listing__table__items"><span>[unmapped_Vegetation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeSquareFeet)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Square Feet</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotSizeSquareFeet]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AdditionalRooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Additional Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_AdditionalRooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
				<tr>
					<td class="zy-listing__table__label">Flood Zone Code</td>
					<td class="zy-listing__table__items"><span>[unmapped_FloodZoneCode]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BuildingElevatorYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Building Elevator</td>
					<td class="zy-listing__table__items"><span>[unmapped_BuildingElevatorYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->disclosures)): ?>
				<tr>
					<td class="zy-listing__table__label">Disclosures</td>
					<td class="zy-listing__table__items"><span>[disclosures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Pool Description</td>
					<td class="zy-listing__table__items"><span>[pooldescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unitplacement)): ?>
				<tr>
					<td class="zy-listing__table__label">Unit Placement</td>
					<td class="zy-listing__table__items"><span>[unitplacement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->facingdirection)): ?>
				<tr>
					<td class="zy-listing__table__label">Facing Direction</td>
					<td class="zy-listing__table__items"><span>[facingdirection]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">laundry Features</td>
					<td class="zy-listing__table__items"><span>[laundryfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BusinessType)): ?>
				<tr>
					<td class="zy-listing__table__label">Business Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_BusinessType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NumofConferenceMeetingRooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Numof Conference Meeting Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_NumofConferenceMeetingRooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->leasepriceincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Lease Price Includes</td>
					<td class="zy-listing__table__items"><span>[leasepriceincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="zy-listing__table__label">Pets Allowed</td>
					<td class="zy-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Description</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Dimensions</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotSizeDimensions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning</td>
					<td class="zy-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->AssociationFeeFrequency) || isset($single_property->unmapped->AssociationFee) || isset($single_property->unmapped->CondoFees) || isset($single_property->unmapped->MonthlyCondoFeeAmount) || isset($single_property->unmapped->CondoFeesTerm) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationAmenities) || isset($single_property->unmapped->MonthlyHOAAmount) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->WaterSource) || isset($single_property->sewer)):?>
	<li class="cell">
	<?php if( isset($single_property->unmapped->AssociationFeeFrequency) || isset($single_property->unmapped->AssociationFee) || isset($single_property->unmapped->CondoFees) || isset($single_property->unmapped->MonthlyCondoFeeAmount) || isset($single_property->unmapped->CondoFeesTerm) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationAmenities) || isset($single_property->unmapped->MonthlyHOAAmount) ):?>
		<h3 class="zy-listing__headline">Association information</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->AssociationFeeFrequency)): ?>
				<tr>
					<td class="zy-listing__table__label">Association Fee Frequency</td>
					<td class="zy-listing__table__items"><span>[unmapped_AssociationFeeFrequency]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationFee)): ?>
				<tr>
					<td class="zy-listing__table__label">Association Fee</td>
					<td class="zy-listing__table__items"><span>[unmapped_AssociationFee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CondoFees)): ?>
				<tr>
					<td class="zy-listing__table__label">Condo Fees</td>
					<td class="zy-listing__table__items"><span>[unmapped_CondoFees]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MonthlyCondoFeeAmount)): ?>
				<tr>
					<td class="zy-listing__table__label">Monthly Condo Fee Amount</td>
					<td class="zy-listing__table__items"><span>[unmapped_MonthlyCondoFeeAmount]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CondoFeesTerm)): ?>
				<tr>
					<td class="zy-listing__table__label">Condo Fees Term</td>
					<td class="zy-listing__table__items"><span>[unmapped_CondoFeesTerm]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Assc Fee Includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationAmenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Association Amenities</td>
					<td class="zy-listing__table__items"><span>[unmapped_AssociationAmenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MonthlyHOAAmount)): ?>
				<tr>
					<td class="zy-listing__table__label">Monthly HOA Amount</td>
					<td class="zy-listing__table__items"><span>[unmapped_MonthlyHOAAmount]</span></td>
				</tr>
				<?php endif; ?>						
			</tbody>
		</table>
	<?php endif; ?>
	
	<?php if( isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->WaterSource) || isset($single_property->sewer) ):?>
		<h3 class="zy-listing__headline">Heating, Cooling, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->WaterSource)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterSource]</span></td>
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
	<?php endif; ?>
	
	<?php /*
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
	*/ ?>
	</li>
	<?php endif; ?>

	<li class="cell">
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
		
		<?php if( isset($single_property->unmapped->TaxLegalDescription) || isset($single_property->unmapped->TaxBlock) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="zy-listing__headline">Taxes</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Legal Description</td>
					<td class="zy-listing__table__items"><span>[unmapped_TaxLegalDescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxBlock)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Block</td>
					<td class="zy-listing__table__items"><span>[unmapped_TaxBlock]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Amount ($)</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-listing__headline">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="zy-listing__table">
						<tbody>
							<tr>
								<td class="zy-listing__table__label">Room Type</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></span></td>
							</tr>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<tr>
								<td class="zy-listing__table__label">Room Size</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php endif; ?>
							<tr>
								<td class="zy-listing__table__label">Room Level</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php $Des = $roomLevels[$rkey]->floor; ?>
							<?php if( isset($Des)): ?>
							<tr>
								<td class="zy-listing__table__label">Floor</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_floor]</span></td>
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
*/ ?>