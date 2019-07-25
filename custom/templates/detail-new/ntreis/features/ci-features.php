<ul class="zy-features-grid">
	<?php if( /*isset($single_property->style) ||*/ isset($single_property->unmapped->BuildingUse) || isset($single_property->construction) || isset($single_property->flooring) || isset($single_property->foundation) || isset($single_property->roofmaterial) || isset($single_property->nostories) || isset($single_property->condominiumname) || isset($single_property->exteriorfeatures) || isset($single_property->interiorfeatures) || isset($single_property->parkingfeature) || isset($single_property->energyfeatures) || isset($single_property->unmapped->CommunityFeatures) || isset($single_property->rentfeeincludes) || isset($single_property->waterfront) || isset($single_property->roadtype) || isset($single_property->equiplistavail) || isset($single_property->unmapped->Inclusions) || isset($single_property->unmapped->Development) || isset($single_property->unmapped->ProposedUse) || isset($single_property->handicapaccess) || isset($single_property->unmapped->NumberOfDiningAreas) || isset($single_property->unmapped->SecuritySystemYN) || isset($single_property->unmapped->SecurityFeatures) || isset($single_property->unmapped->FinancingProposed) || isset($single_property->unmapped->TotalAnnualExpensesInclude) || isset($single_property->unmapped->IncomeExpenseSource) || isset($single_property->unmapped->CommercialFeatures) || isset($single_property->tenantexpanses) || isset($single_property->laundrylevel) || isset($single_property->unmapped->CeilingHeight) || isset($single_property->unmapped->Topography) || isset($single_property->unmapped->RoadFrontageDistance) || isset($single_property->unmapped->Fencing) || isset($single_property->unmapped->AccessibilityFeatures) || isset($single_property->unmapped->PlannedDevelopment) || isset($single_property->unmapped->MoniesRequired) || isset($single_property->unmapped->LeaseConditions) || isset($single_property->unmapped->AppliancesYN) || isset($single_property->unmapped->PermitInternetYN) || isset($single_property->unmapped->FencedYardYN) || isset($single_property->unmapped->CompensationPaid) || isset($single_property->petsallowed) || isset($single_property->leasetype) || isset($single_property->secdeposit) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->unmapped->UnitCount) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->PoolYN) || isset($single_property->unmapped->LotSize) || isset($single_property->lotdescription) || isset($single_property->restrictions) || isset($single_property->easements) || isset($single_property->unmapped->CropRetireProgramYN) || isset($single_property->fireplaces) || isset($single_property->firmrmk1) || isset($single_property->unmapped->ZoningCommercial) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->BuildingUse)): ?>
				<li>Building Use: [unmapped_BuildingUse]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nostories)): ?>
				<li>No Stories: [nostories]</li>
				<?php endif; ?>
				<?php if( isset($single_property->condominiumname)): ?>
				<li>Condominium Name: [condominiumname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<li>Energy Features: [energyfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommunityFeatures)): ?>
				<li>Community Features: [unmapped_CommunityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<li>Rent fee Includes: [rentfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Water Front: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Road Type : [roadtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<li>Equiplist Avail: [equiplistavail]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Inclusions)): ?>
				<li>Inclusions: [unmapped_Inclusions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Development)): ?>
				<li>Development: [unmapped_Development]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ProposedUse)): ?>
				<li>Proposed Use: [unmapped_ProposedUse]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Handicap Access: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NumberOfDiningAreas)): ?>
				<li>Number Of Dining Areas: [unmapped_NumberOfDiningAreas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecuritySystemYN)): ?>
				<li>Security System: [unmapped_SecuritySystemYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecurityFeatures)): ?>
				<li>Security Features: [unmapped_SecurityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FinancingProposed)): ?>
				<li>Financing Proposed: [unmapped_FinancingProposed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TotalAnnualExpensesInclude)): ?>
				<li>Total Annual Expenses Include: [unmapped_TotalAnnualExpensesInclude]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->IncomeExpenseSource)): ?>
				<li>Income Expense Source: [unmapped_IncomeExpenseSource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommercialFeatures)): ?>
				<li>Commercial Features: [unmapped_CommercialFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<li>Tenant Expanses: [tenantexpanses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundrylevel)): ?>
				<li>Laundry Level: [laundrylevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CeilingHeight)): ?>
				<li>Ceiling Height: [unmapped_CeilingHeight]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Topography)): ?>
				<li>Topography: [unmapped_Topography]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadFrontageDistance)): ?>
				<li>Road Frontage Distance: [unmapped_RoadFrontageDistance]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fencing)): ?>
				<li>Fencing: [unmapped_Fencing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AccessibilityFeatures)): ?>
				<li>Accessibility Features: [unmapped_AccessibilityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PlannedDevelopment)): ?>
				<li>Planned Development: [unmapped_PlannedDevelopment]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MoniesRequired)): ?>
				<li>Monies Required: [unmapped_MoniesRequired]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LeaseConditions)): ?>
				<li>Lease Conditions: [unmapped_LeaseConditions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AppliancesYN)): ?>
				<li>Appliances: [unmapped_AppliancesYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PermitInternetYN)): ?>
				<li>Permit Internet: [unmapped_PermitInternetYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FencedYardYN)): ?>
				<li>Fenced Yard: [unmapped_FencedYardYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CompensationPaid)): ?>
				<li>Compensation Paid: [unmapped_CompensationPaid]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leasetype)): ?>
				<li>Lease type: [leasetype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<li>Sec deposit: [secdeposit]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
				<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UnitCount)): ?>
				<li>Unit Count: [unmapped_UnitCount]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<li>Bldgsqfeet: [bldgsqfeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PoolYN)): ?>
				<li>Pool: [unmapped_PoolYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSize)): ?>
				<li>Lot Size: [unmapped_LotSize]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->restrictions)): ?>
				<li>Restrictions: [restrictions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->easements)): ?>
				<li>Easements: [easements]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CropRetireProgramYN)): ?>
				<li>Crop Retire Program: [unmapped_CropRetireProgramYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->firmrmk1)): ?>
				<li>Fireplace Features: [firmrmk1]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ZoningCommercial)): ?>
				<li>Zoning Commercial: [unmapped_ZoningCommercial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->AssociationType) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->feeinterval) || isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->utilities) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
	<?php if( isset($single_property->unmapped->AssociationType) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->feeinterval) ):?>
		<h3 class="zy-feature-title">Association information</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->AssociationType)): ?>
				<li>Association Type: [unmapped_AssociationType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoafee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->feeinterval)): ?>
				<li>Fee Interval: [feeinterval]</li>
				<?php endif; ?>			
			
		</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Heating, Cooling, Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>			
			
		</ul>
	<?php endif; ?>
	
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
	
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->unmapped->ParkingSpacesCoveredTotal) || isset($single_property->unmapped->GarageLength) || isset($single_property->unmapped->GarageWidth) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->ParkingSpacesCoveredTotal)): ?>
				<li>Parking Spaces Covered Total: [unmapped_ParkingSpacesCoveredTotal]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GarageLength) && isset($single_property->unmapped->GarageWidth)): ?>
				<li>Garage Size: [unmapped_GarageLength] X [unmapped_GarageWidth]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->TaxLegalDescription) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
				<li>Tax Legal Description: [unmapped_TaxLegalDescription]</li>
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
							<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<li>Room Size: [roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></li>
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