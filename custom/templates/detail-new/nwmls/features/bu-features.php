<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->InternetAddressDisplayYN) || isset($single_property->unmapped->LotSizeSource) || isset($single_property->unmapped->SeatingCapacity) || isset($single_property->unmapped->StreetSuffix) || isset($single_property->unmapped->CarportYN) ||
			  isset($single_property->unmapped->CarportSpaces) || isset($single_property->unmapped->YearEstablished) || isset($single_property->unmapped->ElectricOnPropertyYN) || isset($single_property->unmapped->PropertyAttachedYN) || isset($single_property->unmapped->SeniorCommunityYN) ||
			  isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->NumberOfSeparateWaterMeters) || isset($single_property->unmapped->NumberOfSeparateElectricMeters) || isset($single_property->unmapped->RentControlYN) || isset($single_property->unmapped->SpaYN) ||
			  isset($single_property->unmapped->LotSizeArea) || isset($single_property->unmapped->BusinessType) || isset($single_property->unmapped->NumberOfSeparateGasMeters) || isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->unmapped->NewConstructionYN) ||
			  isset($single_property->unmapped->IrrigationWaterRightsYN) || isset($single_property->unmapped->MobileHomeRemainsYN) || isset($single_property->unmapped->SignOnPropertyYN) || isset($single_property->grossannualincome) ) :?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->InternetAddressDisplayYN)): ?>
			<li>Internet Address Display YN: [unmapped_InternetAddressDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeSource)): ?>
			<li>Lot Size Source: [unmapped_LotSizeSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeatingCapacity)): ?>
			<li>Seating Capacity: [unmapped_SeatingCapacity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StreetSuffix)): ?>
			<li>Street Suffix: [unmapped_StreetSuffix]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>Carport YN: [unmapped_CarportYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->YearEstablished)): ?>
			<li>Year Established: [unmapped_YearEstablished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
			<li>Property Attached YN: [unmapped_PropertyAttachedYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community YN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Private Pool YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			<li>Number Of Separate Water Meters: [unmapped_NumberOfSeparateWaterMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateElectricMeters)): ?>
			<li>Number Of Separate Electric Meters: [unmapped_NumberOfSeparateElectricMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RentControlYN)): ?>
			<li>Rent Control YN: [unmapped_RentControlYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Spa YN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeArea)): ?>
			<li>Lot Size Area: [unmapped_LotSizeArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BusinessType)): ?>
			<li>BusinessType: [unmapped_BusinessType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateGasMeters)): ?>
			<li>Number Of Separate Gas Meters: [unmapped_NumberOfSeparateGasMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
			<li>New Construction YN: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileHomeRemainsYN)): ?>
			<li>Mobile Home Remains YN: [unmapped_MobileHomeRemainsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SignOnPropertyYN)): ?>
			<li>Sign On Property YN: [unmapped_SignOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
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
	
	<li class="cell">
		
		<?php if( isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->unmapped->WaterSewerExpense) || isset($single_property->unmapped->ProfessionalManagementExpense) || isset($single_property->unmapped->CableTvExpense) ||
			  isset($single_property->unmapped->ManagerExpense) || isset($single_property->unmapped->GardnerExpense) || isset($single_property->unmapped->PoolExpense) || isset($single_property->unmapped->MaintenanceExpense) || isset($single_property->unmapped->TrashExpense) ||
			  isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->SuppliesExpense) || isset($single_property->unmapped->NewTaxesExpense) || isset($single_property->unmapped->OtherExpense) ||
			  isset($single_property->unmapped->FurnitureReplacementExpense) || isset($single_property->unmapped->WorkmansCompensationExpense) || isset($single_property->unmapped->PestControlExpense) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->OperatingExpense) ||
			  isset($single_property->unmapped->LicensesExpense) || isset($single_property->unmapped->OperatingExpense) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->hoafee) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) ): ?>
			  
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ProfessionalManagementExpense)): ?>
			<li>Professional Management Expense: [unmapped_ProfessionalManagementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CableTvExpense)): ?>
			<li>Cable Tv Expense: [unmapped_CableTvExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManagerExpense)): ?>
			<li>Manager Expense: [unmapped_ManagerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GardnerExpense)): ?>
			<li>Gardner Expense: [unmapped_GardnerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MaintenanceExpense)): ?>
			<li>Maintenance Expense: [unmapped_MaintenanceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TrashExpense)): ?>
			<li>Trash Expense: [unmapped_TrashExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SuppliesExpense)): ?>
			<li>Supplies Expense: [unmapped_SuppliesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewTaxesExpense)): ?>
			<li>New Taxes Expense: [unmapped_NewTaxesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherExpense)): ?>
			<li>Other Expense: [unmapped_OtherExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WorkmansCompensationExpense)): ?>
			<li>Workmans Compensation Expense: [unmapped_WorkmansCompensationExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
			<li>Operating Expense: [unmapped_OperatingExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LicensesExpense)): ?>
			<li>Licenses Expense: [unmapped_LicensesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
			<li>Operating Expense: [unmapped_OperatingExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Other Tax Annual Assessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->FireplaceYN) || isset($single_property->fireplaces) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->waterfrontflag) ):?>
				  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">	
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fire Place YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fire Place: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront Flag: [waterfrontflag]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->unmapped->ElementarySchoolDistrict) || isset($single_property->unmapped->HighSchoolDistrict) || isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) || isset($single_property->gradeschool) || isset($single_property->highschool) ||
				  isset($single_property->middleschool) ):?>
				  
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->ElementarySchoolDistrict)): ?>
			<li>Elementary School District: [unmapped_ElementarySchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>High School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict)): ?>
			<li>Middle Or Junior School District: [unmapped_MiddleOrJuniorSchoolDistrict]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Grade SChool: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->unmapped->GarageYN) || isset($single_property->garagespaces) || isset($single_property->unmapped->OpenParkingYN) || isset($single_property->unmapped->OpenParkingSpaces) ):?>
				  
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingYN)): ?>
			<li>Open Parking YN: [unmapped_OpenParkingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>