<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->style) || isset($single_property->unmapped->BuildingUse) || isset($single_property->construction) || isset($single_property->flooring) || isset($single_property->foundation) || isset($single_property->roofmaterial) || isset($single_property->nostories) || isset($single_property->condominiumname) || isset($single_property->exteriorfeatures) || isset($single_property->interiorfeatures) || isset($single_property->parkingfeature) || isset($single_property->energyfeatures) || isset($single_property->unmapped->CommunityFeatures) || isset($single_property->rentfeeincludes) || isset($single_property->waterfront) || isset($single_property->roadtype) || isset($single_property->equiplistavail) || isset($single_property->unmapped->Inclusions) || isset($single_property->unmapped->Development) || isset($single_property->unmapped->ProposedUse) || isset($single_property->handicapaccess) || isset($single_property->unmapped->NumberOfDiningAreas) || isset($single_property->unmapped->SecuritySystemYN) || isset($single_property->unmapped->SecurityFeatures) || isset($single_property->unmapped->FinancingProposed) || isset($single_property->unmapped->TotalAnnualExpensesInclude) || isset($single_property->unmapped->IncomeExpenseSource) || isset($single_property->unmapped->CommercialFeatures) || isset($single_property->tenantexpanses) || isset($single_property->laundrylevel) || isset($single_property->unmapped->CeilingHeight) || isset($single_property->unmapped->Topography) || isset($single_property->unmapped->RoadFrontageDistance) || isset($single_property->unmapped->Fencing) || isset($single_property->unmapped->AccessibilityFeatures) || isset($single_property->unmapped->PlannedDevelopment) || isset($single_property->unmapped->MoniesRequired) || isset($single_property->unmapped->LeaseConditions) || isset($single_property->unmapped->AppliancesYN) || isset($single_property->unmapped->PermitInternetYN) || isset($single_property->unmapped->FencedYardYN) || isset($single_property->unmapped->CompensationPaid) || isset($single_property->petsallowed) || isset($single_property->leasetype) || isset($single_property->secdeposit) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->unmapped->UnitCount) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->PoolYN) || isset($single_property->unmapped->LotSize) || isset($single_property->lotdescription) || isset($single_property->restrictions) || isset($single_property->easements) || isset($single_property->unmapped->CropRetireProgramYN) || isset($single_property->fireplaces) || isset($single_property->firmrmk1) || isset($single_property->unmapped->ZoningCommercial) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BuildingUse)): ?>
				<tr>
					<td class="bt-listing__table__label">Building Use</td>
					<td class="bt-listing__table__items"><span>[unmapped_BuildingUse]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="bt-listing__table__label">Foundation</td>
					<td class="bt-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Material</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->nostories)): ?>
				<tr>
					<td class="bt-listing__table__label">No Stories</td>
					<td class="bt-listing__table__items"><span>[nostories]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->condominiumname)): ?>
				<tr>
					<td class="bt-listing__table__label">Condominium Name</td>
					<td class="bt-listing__table__items"><span>[condominiumname]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Feature</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Energy Features</td>
					<td class="bt-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommunityFeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Community Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_CommunityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Rent fee Includes</td>
					<td class="bt-listing__table__items"><span>[rentfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Front</td>
					<td class="bt-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Road Type </td>
					<td class="bt-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<tr>
					<td class="bt-listing__table__label">Equiplist Avail</td>
					<td class="bt-listing__table__items"><span>[equiplistavail]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Inclusions)): ?>
				<tr>
					<td class="bt-listing__table__label">Inclusions</td>
					<td class="bt-listing__table__items"><span>[unmapped_Inclusions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Development)): ?>
				<tr>
					<td class="bt-listing__table__label">Development</td>
					<td class="bt-listing__table__items"><span>[unmapped_Development]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ProposedUse)): ?>
				<tr>
					<td class="bt-listing__table__label">Proposed Use</td>
					<td class="bt-listing__table__items"><span>[unmapped_ProposedUse]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="bt-listing__table__label">Handicap Access</td>
					<td class="bt-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->NumberOfDiningAreas)): ?>
				<tr>
					<td class="bt-listing__table__label">Number Of Dining Areas</td>
					<td class="bt-listing__table__items"><span>[unmapped_NumberOfDiningAreas]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecuritySystemYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Security System</td>
					<td class="bt-listing__table__items"><span>[unmapped_SecuritySystemYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecurityFeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Security Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_SecurityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FinancingProposed)): ?>
				<tr>
					<td class="bt-listing__table__label">Financing Proposed</td>
					<td class="bt-listing__table__items"><span>[unmapped_FinancingProposed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TotalAnnualExpensesInclude)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Annual Expenses Include</td>
					<td class="bt-listing__table__items"><span>[unmapped_TotalAnnualExpensesInclude]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->IncomeExpenseSource)): ?>
				<tr>
					<td class="bt-listing__table__label">Income Expense Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_IncomeExpenseSource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommercialFeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Commercial Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_CommercialFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<tr>
					<td class="bt-listing__table__label">Tenant Expanses</td>
					<td class="bt-listing__table__items"><span>[tenantexpanses]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->laundrylevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Laundry Level</td>
					<td class="bt-listing__table__items"><span>[laundrylevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CeilingHeight)): ?>
				<tr>
					<td class="bt-listing__table__label">Ceiling Height</td>
					<td class="bt-listing__table__items"><span>[unmapped_CeilingHeight]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Topography)): ?>
				<tr>
					<td class="bt-listing__table__label">Topography</td>
					<td class="bt-listing__table__items"><span>[unmapped_Topography]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadFrontageDistance)): ?>
				<tr>
					<td class="bt-listing__table__label">Road Frontage Distance</td>
					<td class="bt-listing__table__items"><span>[unmapped_RoadFrontageDistance]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fencing)): ?>
				<tr>
					<td class="bt-listing__table__label">Fencing</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fencing]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AccessibilityFeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Accessibility Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_AccessibilityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PlannedDevelopment)): ?>
				<tr>
					<td class="bt-listing__table__label">Planned Development</td>
					<td class="bt-listing__table__items"><span>[unmapped_PlannedDevelopment]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MoniesRequired)): ?>
				<tr>
					<td class="bt-listing__table__label">Monies Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_MoniesRequired]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LeaseConditions)): ?>
				<tr>
					<td class="bt-listing__table__label">Lease Conditions</td>
					<td class="bt-listing__table__items"><span>[unmapped_LeaseConditions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AppliancesYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Appliances</td>
					<td class="bt-listing__table__items"><span>[unmapped_AppliancesYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PermitInternetYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Permit Internet</td>
					<td class="bt-listing__table__items"><span>[unmapped_PermitInternetYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FencedYardYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Fenced Yard</td>
					<td class="bt-listing__table__items"><span>[unmapped_FencedYardYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CompensationPaid)): ?>
				<tr>
					<td class="bt-listing__table__label">Compensation Paid</td>
					<td class="bt-listing__table__items"><span>[unmapped_CompensationPaid]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="bt-listing__table__label">Pets Allowed</td>
					<td class="bt-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->leasetype)): ?>
				<tr>
					<td class="bt-listing__table__label">Lease type</td>
					<td class="bt-listing__table__items"><span>[leasetype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<tr>
					<td class="bt-listing__table__label">Sec deposit</td>
					<td class="bt-listing__table__items"><span>[secdeposit]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
				<tr>
					<td class="bt-listing__table__label">Insurance Expense</td>
					<td class="bt-listing__table__items"><span>[unmapped_InsuranceExpense]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UnitCount)): ?>
				<tr>
					<td class="bt-listing__table__label">Unit Count</td>
					<td class="bt-listing__table__items"><span>[unmapped_UnitCount]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<tr>
					<td class="bt-listing__table__label">Bldgsqfeet</td>
					<td class="bt-listing__table__items"><span>[bldgsqfeet]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PoolYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Pool</td>
					<td class="bt-listing__table__items"><span>[unmapped_PoolYN]</span></td>
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
					<td class="bt-listing__table__label">Lot Description</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->restrictions)): ?>
				<tr>
					<td class="bt-listing__table__label">Restrictions</td>
					<td class="bt-listing__table__items"><span>[restrictions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->easements)): ?>
				<tr>
					<td class="bt-listing__table__label">Easements</td>
					<td class="bt-listing__table__items"><span>[easements]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CropRetireProgramYN)): ?>
				<tr>
					<td class="bt-listing__table__label">Crop Retire Program</td>
					<td class="bt-listing__table__items"><span>[unmapped_CropRetireProgramYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->firmrmk1)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplace Features</td>
					<td class="bt-listing__table__items"><span>[firmrmk1]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ZoningCommercial)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning Commercial</td>
					<td class="bt-listing__table__items"><span>[unmapped_ZoningCommercial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->AssociationType) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->feeinterval) || isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->utilities) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
	<?php if( isset($single_property->unmapped->AssociationType) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->feeinterval) ):?>
		<h3 class="bt-listing__headline">Association information</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->AssociationType)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_AssociationType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">Hoafee</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Assc Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td>
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
	
	<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->utilities) ):?>
		<h3 class="bt-listing__headline">Heating, Cooling, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities</td>
					<td class="bt-listing__table__items"><span>[utilities]</span></td>
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
	
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->unmapped->ParkingSpacesCoveredTotal) || isset($single_property->unmapped->GarageLength) || isset($single_property->unmapped->GarageWidth) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->ParkingSpacesCoveredTotal)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Spaces Covered Total</td>
					<td class="bt-listing__table__items"><span>[unmapped_ParkingSpacesCoveredTotal]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GarageLength) && isset($single_property->unmapped->GarageWidth)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Size</td>
					<td class="bt-listing__table__items"><span>[unmapped_GarageLength] X [unmapped_GarageWidth]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Spaces</td>
					<td class="bt-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->TaxLegalDescription) || isset($single_property->taxes) ):?>
		<h3 class="bt-listing__headline">Taxes</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Legal Description</td>
					<td class="bt-listing__table__items"><span>[unmapped_TaxLegalDescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Amount ($)</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php
			$roomLevels = $single_property->roomLevels;
			if (isset($roomLevels)): ?>
				<h3 class="bt-listing__headline">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="bt-listing__table">
						<tbody>
							<tr>
								<td class="bt-listing__table__label">Room Type</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></span></td>
							</tr>
							<tr>
								<td class="bt-listing__table__label">Room Level</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<tr>
								<td class="bt-listing__table__label">Room Size</td>
								<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></span></td>
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
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="bt-listing__headline">Bedroom #2</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed2DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="bt-listing__headline">Bedroom #3</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed3DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="bt-listing__headline">Bedroom #4</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed4DSCRP]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="bt-listing__headline">Bedroom #5</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed5DSCRP]</span></td>
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
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #2</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth2DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth2DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #3</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth3DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth3DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #4</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth4DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth4DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #5</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth5DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth5DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #6</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth6DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth6LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth6DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>
*/ ?>