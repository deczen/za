<ul class="zy-features-grid">
	<?php if( /*isset($single_property->style) ||*/ isset($single_property->unmapped->Levels) || isset($single_property->nostories) || isset($single_property->nobuildings) || isset($single_property->totalunits) || isset($single_property->totalbldgsf) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->basement) || isset($single_property->unmapped->View) || isset($single_property->unmapped->CommunityFeatures) || isset($single_property->vacant) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->LivingArea) || isset($single_property->unmapped->RoomType) || isset($single_property->flooring) || isset($single_property->roofmaterial) || isset($single_property->unmapped->CommonWalls) || isset($single_property->unmapped->SpaFeatures) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->UncoveredSpaces) || isset($single_property->pooldescription) || isset($single_property->appliances) || isset($single_property->nostories) || isset($single_property->nostories) || isset($single_property->nostories) || isset($single_property->unmapped->GrossOperatingIncome) || isset($single_property->unmapped->ImprovementsAmount) || isset($single_property->unmapped->GrossMultiplier) || isset($single_property->unmapped->LandValue) || isset($single_property->grossannualexp) || isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->unmapped->ProfessionalManagementExpense) || isset($single_property->netoperatinginc) || isset($single_property->unmapped->SpecialListingConditions) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php /*if( isset($single_property->style)): ?>
			<li>Style: [style]</li>
			<?php endif;*/ ?>
			<?php if( isset($single_property->unmapped->Levels)): ?>
			<li>Levels: [unmapped_Levels]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nostories)): ?>
			<li>No. Stories: [nostories]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobuildings)): ?>
			<li>No. Buildings: [nobuildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->totalunits)): ?>
			<li>Total Units: [totalunits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->totalbldgsf)): ?>
			<li>Total bldgsf: [totalbldgsf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CommunityFeatures)): ?>
			<li>Community Features: [unmapped_CommunityFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
			<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingArea)): ?>
			<li>Living Area: [unmapped_LivingArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoomType)): ?>
			<li>Room Type: [unmapped_RoomType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CommonWalls)): ?>
			<li>Common Walls: [unmapped_CommonWalls]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaFeatures)): ?>
			<li>Spa Features: [unmapped_SpaFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>laundry Features: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->UncoveredSpaces)): ?>
			<li>Uncovered Spaces: [unmapped_UncoveredSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pooldescription)): ?>
			<li>Pool Description: [pooldescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossOperatingIncome)): ?>
			<li>Gross Operating Income: [unmapped_GrossOperatingIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ImprovementsAmount)): ?>
			<li>Improvements Amount: [unmapped_ImprovementsAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossMultiplier)): ?>
			<li>Gross Multiplier: [unmapped_GrossMultiplier]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LandValue)): ?>
			<li>Land Value: [unmapped_LandValue]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualexp)): ?>
			<li>Gross Annual exp: [grossannualexp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ProfessionalManagementExpense)): ?>
			<li>Professional Management Expense: [unmapped_ProfessionalManagementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operating inc: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpecialListingConditions)): ?>
			<li>Special Listing Conditions: [unmapped_SpecialListingConditions]</li>
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
			
			<?php if( isset($single_property->unmapped->Fencing)): ?>
			<li>Fencing: [unmapped_Fencing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Features: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->landdesc)): ?>
			<li>Topography: [landdesc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MainLevelBathrooms)): ?>
			<li>Main Level Bathrooms: [unmapped_MainLevelBathrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FrontageLength)): ?>
			<li>Frontage Length: [unmapped_FrontageLength]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoadFrontageType)): ?>
			<li>Road Frontage Type: [unmapped_RoadFrontageType]</li>
			<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->ASSOCSECURITY) || isset($single_property->hoafee) || isset($single_property->feeinterval) || isset($single_property->asscpool) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->unmapped->NumberOfSeparateElectricMeters) || isset($single_property->unmapped->NumberOfSeparateWaterMeters) || isset($single_property->unmapped->NumberOfSeparateGasMeters) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->WaterSewerExpense) || isset($single_property->unmapped->TrashExpense) ):?>
	
	<li class="cell">
	<?php if( isset($single_property->unmapped->ASSOCSECURITY) || isset($single_property->hoafee) || isset($single_property->feeinterval) || isset($single_property->asscpool) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->ASSOCSECURITY)): ?>
			<li>Assoc Security: [unmapped_ASSOCSECURITY]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoafee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Fee Interval: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscpool)): ?>
			<li>Asscpool: [asscpool]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association YN: [reqdownassociation]</li>
			<?php endif; ?>	
		</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->unmapped->NumberOfSeparateElectricMeters) || isset($single_property->unmapped->NumberOfSeparateWaterMeters) || isset($single_property->unmapped->NumberOfSeparateGasMeters) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->WaterSewerExpense) || isset($single_property->unmapped->TrashExpense) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
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
			<?php if( isset($single_property->water)): ?>
			<li>Water: [water]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfSeparateElectricMeters)): ?>
			<li>Number Of Separate Electric Meters: [unmapped_NumberOfSeparateElectricMeters]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			<li>Number Of Separate Water Meters: [unmapped_NumberOfSeparateWaterMeters]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfSeparateGasMeters)): ?>
			<li>Number Of Separate Gas Meters: [unmapped_NumberOfSeparateGasMeters]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->TrashExpense)): ?>
			<li>Trash Expense: [unmapped_TrashExpense]</li>
			<?php endif; ?>		

			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>	
		</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->ElementarySchoolDistrict) || isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) || isset($single_property->unmapped->HighSchoolDistrict) ): ?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->ElementarySchoolDistrict)): ?>
			<li>Elementary School: [unmapped_ElementarySchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict)): ?>
			<li>Middle School: [unmapped_MiddleOrJuniorSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>High School: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>				
		</ul>
	<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
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
		
		<?php /*
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-feature-title">Room Information</h3>
				
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
		?> */ ?>
		
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