<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->BuildingAreaTotal) || isset($single_property->unmapped->InternetAddressDisplayYN) || isset($single_property->unmapped->InternetAutomatedValuationDisplayYN) || isset($single_property->unmapped->LotSizeSource) || isset($single_property->unmapped->SeatingCapacity) ||
			  isset($single_property->unmapped->CarportSpaces) || isset($single_property->unmapped->StreetSuffix) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->unmapped->ViewYN) ||
			  isset($single_property->unmapped->NumberOfSeparateWaterMeters) || isset($single_property->unmapped->NumberOfSeparateElectricMeters) || isset($single_property->unmapped->CarportYN) || isset($single_property->unmapped->RentControlYN) || isset($single_property->unmapped->SpaYN) ||
			  isset($single_property->unmapped->LotSizeArea) || isset($single_property->unmapped->CropsIncludedYN) || isset($single_property->unmapped->IrrigationWaterRightsYN) || isset($single_property->unmapped->StreetDirSuffix) || isset($single_property->unmapped->RangeArea) ||
			  isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) || isset($single_property->unmapped->waterfrontflag) || isset($single_property->waterfront) ) :?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Total Building Area: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAddressDisplayYN)): ?>
			<li>Internet Address Display YN: [unmapped_InternetAddressDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation Display YN: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeSource)): ?>
			<li>Lot Size Source: [unmapped_LotSizeSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeatingCapacity)): ?>
			<li>Seating Capacity: [unmapped_SeatingCapacity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StreetSuffix)): ?>
			<li>Street Suffix: [unmapped_StreetSuffix]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
			<li>Total Stories: [unmapped_StoriesTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>SeniorCommunityYN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View YN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			<li>Number Of Separate Water Meters: [unmapped_NumberOfSeparateWaterMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateElectricMeters)): ?>
			<li>Number Of Separate Electric Meters: [unmapped_NumberOfSeparateElectricMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>Carport YN: [unmapped_CarportYN]</li>
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
			<?php if( isset($single_property->unmapped->CropsIncludedYN)): ?>
			<li>Crops Included YN: [unmapped_CropsIncludedYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StreetDirSuffix)): ?>
			<li>Street Suffix: [unmapped_StreetDirSuffix]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RangeArea)): ?>
			<li>Area Range: [unmapped_RangeArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Private Pool YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Tax Other Annual Assessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfrontflag: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->unmapped->FireplaceYN) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->sewer) ):?>
				  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">	
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fire Place YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->hoafee) || isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->unmapped->WaterSewerExpense) ||
			  isset($single_property->unmapped->ProfessionalManagementExpense) || isset($single_property->unmapped->CableTvExpense) || isset($single_property->unmapped->PoolExpense) || isset($single_property->unmapped->ManagerExpense) || isset($single_property->unmapped->GardnerExpense) ||
			  isset($single_property->unmapped->MaintenanceExpense) || isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->SuppliesExpense) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->FurnitureReplacementExpense) ||
			  isset($single_property->unmapped->NewTaxesExpense) || isset($single_property->unmapped->OperatingExpense) || isset($single_property->unmapped->OtherExpense) || isset($single_property->unmapped->LicensesExpense) || isset($single_property->unmapped->PestControlExpense) ): ?>
			  
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
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
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManagerExpense)): ?>
			<li>Manager Expense: [unmapped_ManagerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GardnerExpense)): ?>
			<li>Gardner Expense: [unmapped_GardnerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MaintenanceExpense)): ?>
			<li>Maintenance Expense: [unmapped_MaintenanceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SuppliesExpense)): ?>
			<li>Supplies Expense: [unmapped_SuppliesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>FuelExpense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewTaxesExpense)): ?>
			<li>New Taxes Expense: [unmapped_NewTaxesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
			<li>Operating Expense: [unmapped_OperatingExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherExpense)): ?>
			<li>Other Expense: [unmapped_OtherExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LicensesExpense)): ?>
			<li>Licenses Expense: [unmapped_LicensesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
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