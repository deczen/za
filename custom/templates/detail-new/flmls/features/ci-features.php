<ul class="zy-features-grid">
	<?php if( /*isset($single_property->style) ||*/ isset($single_property->unmapped->CurrentUse) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->sitecondition) || isset($single_property->exteriorfeatures) || isset($single_property->interiorfeatures) || isset($single_property->flooring) || isset($single_property->roofmaterial) || isset($single_property->condominiumname) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->FloorNumber) || isset($single_property->unmapped->CommunityFeatures) || isset($single_property->unmapped->Township) || isset($single_property->appliances) || isset($single_property->parkingfeature) || isset($single_property->fireplaces) || isset($single_property->unmapped->View) || isset($single_property->unmapped->WaterAccess) || isset($single_property->waterfront) || isset($single_property->waterviewfeatures) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterExtras) || isset($single_property->unmapped->AdditionalWaterInformation) || isset($single_property->unmapped->SecurityFeatures) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->unmapped->Vegetation) || isset($single_property->unmapped->LotSizeSquareFeet) || isset($single_property->unmapped->AdditionalRooms) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->BuildingElevatorYN) || isset($single_property->disclosures) || isset($single_property->pooldescription) || isset($single_property->unitplacement) || isset($single_property->facingdirection) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->BusinessType) || isset($single_property->unmapped->NumofConferenceMeetingRooms) || isset($single_property->leasepriceincludes) || isset($single_property->petsallowed) || isset($single_property->lotdescription) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->CurrentUse)): ?>
				<li>Current Use: [unmapped_CurrentUse]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Site Condition: [sitecondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->condominiumname)): ?>
				<li>Condominium Name: [condominiumname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Levels)): ?>
				<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloorNumber)): ?>
				<li>Floor Number: [unmapped_FloorNumber]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommunityFeatures)): ?>
				<li>Community Features: [unmapped_CommunityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Township)): ?>
				<li>Town Ship: [unmapped_Township]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<li>View: [unmapped_View]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterAccess)): ?>
				<li>Water Access: [unmapped_WaterAccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Water Front: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<li>Water View Features: [waterviewfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
				<li>Water Front Feet Total: [unmapped_WaterfrontFeetTotal]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterExtras)): ?>
				<li>Water Extras: [unmapped_WaterExtras]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AdditionalWaterInformation)): ?>
				<li>Additional Water Information: [unmapped_AdditionalWaterInformation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecurityFeatures)): ?>
				<li>Security Features: [unmapped_SecurityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
				<li>Window Features: [unmapped_WindowFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Vegetation)): ?>
				<li>Vegetation: [unmapped_Vegetation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeSquareFeet)): ?>
				<li>Lot Size Square Feet: [unmapped_LotSizeSquareFeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AdditionalRooms)): ?>
				<li>Additional Rooms: [unmapped_AdditionalRooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
				<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BuildingElevatorYN)): ?>
				<li>Building Elevator: [unmapped_BuildingElevatorYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->disclosures)): ?>
				<li>Disclosures: [disclosures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Description: [pooldescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitplacement)): ?>
				<li>Unit Placement: [unitplacement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->facingdirection)): ?>
				<li>Facing Direction: [facingdirection]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>laundry Features: [laundryfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BusinessType)): ?>
				<li>Business Type: [unmapped_BusinessType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NumofConferenceMeetingRooms)): ?>
				<li>Numof Conference Meeting Rooms: [unmapped_NumofConferenceMeetingRooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leasepriceincludes)): ?>
				<li>Lease Price Includes: [leasepriceincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->AssociationFeeFrequency) || isset($single_property->unmapped->AssociationFee) || isset($single_property->unmapped->CondoFees) || isset($single_property->unmapped->MonthlyCondoFeeAmount) || isset($single_property->unmapped->CondoFeesTerm) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationAmenities) || isset($single_property->unmapped->MonthlyHOAAmount) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->WaterSource) || isset($single_property->sewer)):?>
	<li class="cell">
	<?php if( isset($single_property->unmapped->AssociationFeeFrequency) || isset($single_property->unmapped->AssociationFee) || isset($single_property->unmapped->CondoFees) || isset($single_property->unmapped->MonthlyCondoFeeAmount) || isset($single_property->unmapped->CondoFeesTerm) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationAmenities) || isset($single_property->unmapped->MonthlyHOAAmount) ):?>
		<h3 class="zy-feature-title">Association information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->AssociationFeeFrequency)): ?>
				<li>Association Fee Frequency: [unmapped_AssociationFeeFrequency]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationFee)): ?>
				<li>Association Fee: [unmapped_AssociationFee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CondoFees)): ?>
				<li>Condo Fees: [unmapped_CondoFees]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MonthlyCondoFeeAmount)): ?>
				<li>Monthly Condo Fee Amount: [unmapped_MonthlyCondoFeeAmount]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CondoFeesTerm)): ?>
				<li>Condo Fees Term: [unmapped_CondoFeesTerm]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationAmenities)): ?>
				<li>Association Amenities: [unmapped_AssociationAmenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MonthlyHOAAmount)): ?>
				<li>Monthly HOA Amount: [unmapped_MonthlyHOAAmount]</li>
				<?php endif; ?>						
			</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->WaterSource) || isset($single_property->sewer) ):?>
		<h3 class="zy-feature-title">Heating, Cooling, Utilities</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->WaterSource)): ?>
				<li>Water Source: [unmapped_WaterSource]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>			
			</ul>
	<?php endif; ?>
	
	<?php /*
	<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School: [gradeschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
				<?php endif; ?>				
			</ul>
	<?php endif; ?>
	*/ ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Road Type : [roadtype]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->TaxLegalDescription) || isset($single_property->unmapped->TaxBlock) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
				<li>Tax Legal Description: [unmapped_TaxLegalDescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxBlock)): ?>
				<li>Tax Block: [unmapped_TaxBlock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-feature-title">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<ul class="zy-sub-list">
							<li>Room Type: [roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></li>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<li>Room Size: [roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php endif; ?>
							<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php $Des = $roomLevels[$rkey]->floor; ?>
							<?php if( isset($Des)): ?>
							<li>Floor: [roomLevels_<?php echo $rkey; ?>_floor]</li>
							<?php endif; ?>
						</ul>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
	</li>					

</ul>

<?php /*
<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->mbrdimen)): ?>
				<li>Size: [mbrdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<li>Level: [mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<li>Features: [mbrdscrp]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<li>Size: [bed2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<li>Level: [bed2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<li>Features: [bed2DSCRP]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<li>Size: [bed3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<li>Level: [bed3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<li>Features: [bed3DSCRP]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<li>Size: [bed4DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<li>Level: [bed4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<li>Features: [bed4DSCRP]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<li>Size: [bed5DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<li>Level: [bed5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<li>Features: [bed5DSCRP]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bth1dimen)): ?>
				<li>Size: [bth1dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<li>Level: [bth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<li>Features: [bth1dscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bth2dimen)): ?>
				<li>Size: [bth2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<li>Level: [bth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<li>Features: [bth2dscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bth3dimen)): ?>
				<li>Size: [bth3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<li>Level: [bth3level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<li>Features: [bth3dscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->kitdimen)): ?>
				<li>Size: [kitdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<li>Level: [kitlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Features: [kitdscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->famdimen)): ?>
				<li>Size: [famdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<li>Level: [famlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<li>Features: [famdscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->livdimen)): ?>
				<li>Size: [livdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<li>Level: [livlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Features: [livdscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->dindimen)): ?>
				<li>Size: [dindimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<li>Level: [dinlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Features: [dindscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<li>Size: [oth1DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<li>Level: [oth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<li>Features: [oth1DSCRP]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #2</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<li>Size: [oth2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<li>Level: [oth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<li>Features: [oth2DSCRP]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #3</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<li>Size: [oth3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<li>Level: [oth3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<li>Features: [oth3DSCRP]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #4</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<li>Size: [oth4DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<li>Level: [oth4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<li>Features: [oth4DSCRP]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #5</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<li>Size: [oth5DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<li>Level: [oth5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<li>Features: [oth5DSCRP]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #6</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<li>Size: [oth6DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<li>Level: [oth6LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<li>Features: [oth6DSCRP]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
	</li>					

</ul>
*/ ?>