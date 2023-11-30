<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->nolots) || isset($single_property->nostories) || isset($single_property->totalunits) || isset($single_property->possession) ||
			  isset($single_property->construction) || isset($single_property->flooring) || isset($single_property->garagespaces) || isset($single_property->appliances) || isset($single_property->parkingfeature) ||
			  isset($single_property->roofmaterial) || isset($single_property->warranty) || isset($single_property->exteriorfeatures) || isset($single_property->homeownassociation) || isset($single_property->reqdownassociation) ||
			  isset($single_property->asscfeeincludes) || isset($single_property->grossannualincome) || isset($single_property->netoperatinginc) || isset($single_property->fireplaces) || isset($single_property->lotsize) ||
			  isset($single_property->lotdescription) || isset($single_property->yearbuiltsource) || isset($single_property->unmapped->LeaseAmount) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->ListingTerms) ||
			  isset($single_property->unmapped->LeaseRenewalOptionYN) || isset($single_property->unmapped->InternetConsumerCommentYN) || isset($single_property->unmapped->BuildingAreaTotal) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->unmapped->ElectricOnPropertyYN) ||
			  isset($single_property->unmapped->PropertyAttachedYN) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->unmapped->ViewYN) || isset($single_property->unmapped->IrrigationWaterRightsAcres) || isset($single_property->unmapped->VacancyAllowanceRate) ||
			  isset($single_property->unmapped->HorseYN) || isset($single_property->unmapped->OpenParkingYN) || isset($single_property->unmapped->WoodedArea) || isset($single_property->unmapped->CarportYN) || isset($single_property->unmapped->VacancyAllowance) ||
			  isset($single_property->unmapped->CarportSpaces) || isset($single_property->unmapped->FarmCreditServiceInclYN) || isset($single_property->unmapped->NumberOfUnitsVacant) || isset($single_property->unmapped->Elevation) || isset($single_property->unmapped->InternetEntireListingDisplayYN) ||
			  isset($single_property->unmapped->CoveredSpaces) || isset($single_property->unmapped->InternetAutomatedValuationDisplayYN) || isset($single_property->unmapped->IrrigationWaterRightsYN) || isset($single_property->unmapped->InternetAddressDisplayYN) || isset($single_property->unmapped->SpaYN) ||
			  isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->unmapped->RentControlYN) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cultivationacres)): ?>
			<li>Cultivation Acres: [cultivationacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nolots)): ?>
			<li>Lots: [nolots]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nostories)): ?>
			<li>Stories: [nostories]</li>
			<?php endif; ?>
			<?php if( isset($single_property->totalunits)): ?>
			<li>Total Units: [totalunits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->warranty)): ?>
			<li>Warranty: [warranty]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Home Own Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Request Down Association: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Association Fee Includes: [asscfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net operating: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltsource)): ?>
			<li>Year Built Source: [yearbuiltsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseAmount)): ?>
			<li>Lease Amount: [unmapped_LeaseAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseRenewalOptionYN)): ?>
			<li>Lease Renewal Option YN: [Lunmapped_easeRenewalOptionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetConsumerCommentYN)): ?>
			<li>Internet Consumer Comment YN: [unmapped_InternetConsumerCommentYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
			<li>Stories: [unmapped_StoriesTotal]</li>
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
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View YN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
			<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->VacancyAllowanceRate)): ?>
			<li>Vacancy Allowance Rate: [unmapped_VacancyAllowanceRate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HorseYN)): ?>
			<li>Horse YN: [unmapped_HorseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingYN)): ?>
			<li>Open Parking YN: [unmapped_OpenParkingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WoodedArea)): ?>
			<li>Wooded Area: [unmapped_WoodedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>Carport YN: [unmapped_CarportYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->VacancyAllowance)): ?>
			<li>Vacancy Allowance: [unmapped_VacancyAllowance]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FarmCreditServiceInclYN)): ?>
			<li>Farm Credit Service Include YN: [unmapped_FarmCreditServiceInclYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfUnitsVacant)): ?>
			<li>Number Of Units Vacant: [unmapped_NumberOfUnitsVacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Elevation)): ?>
			<li>Elevation: [unmapped_Elevation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetEntireListingDisplayYN)): ?>
			<li>Internet Entire Listing Display YN: [unmapped_InternetEntireListingDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
			<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation Display YN: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAddressDisplayYN)): ?>
			<li>Internet Address Display YN: [unmapped_InternetAddressDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Spa YN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>GrossScheduledIncome: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RentControlYN)): ?>
			<li>Rent Control YN: [unmapped_RentControlYN]</li>
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
		
		<?php if( isset($single_property->hoafee) || isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->unmapped->OtherExpense) || isset($single_property->unmapped->LicensesExpense) ||
			  isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) || isset($single_property->unmapped->SuppliesExpense) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->FurnitureReplacementExpense) || isset($single_property->unmapped->NewTaxesExpense) ||
			  isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->unmapped->WaterSewerExpense) || isset($single_property->unmapped->OperatingExpense) || isset($single_property->unmapped->WorkmansCompensationExpense) ||
			  isset($single_property->unmapped->ManagerExpense) || isset($single_property->unmapped->AssociationFee2) || isset($single_property->unmapped->PestControlExpense) || isset($single_property->unmapped->CableTvExpense) || isset($single_property->unmapped->PoolExpense) ): ?>
			  
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Amount ($): [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherExpense)): ?>
			<li>Other Expense: [unmapped_OtherExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LicensesExpense)): ?>
			<li>Licenses Expense: [unmapped_LicensesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Other Annual Assessment Tax Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SuppliesExpense)): ?>
			<li>Supplies Expense: [unmapped_SuppliesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewTaxesExpense)): ?>
			<li>New Taxes Expense: [unmapped_NewTaxesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
			<li>Operating Expense: [unmapped_OperatingExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WorkmansCompensationExpense)): ?>
			<li>Workmans Compensation Expense: [unmapped_WorkmansCompensationExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManagerExpense)): ?>
			<li>Manager Expense: [unmapped_ManagerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee($): [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CableTvExpense)): ?>
			<li>Cable Tv Expense: [unmapped_CableTvExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->FireplaceYN) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->waterfrontflag) || isset($single_property->cooling) ):?>
				  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Water Front Flag: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling Type: [cooling]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) || isset($single_property->unmapped->HighSchoolDistrict) ):?>
				  
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict)): ?>
			<li>Middle Or Junior School District: [unmapped_MiddleOrJuniorSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Grade School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>High School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->parkingspaces) || isset($single_property->unmapped->OpenParkingSpaces) || isset($single_property->unmapped->GarageYN) ):?>
				  
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>