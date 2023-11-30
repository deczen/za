<ul class="zy-features-grid">
	<?php if( isset($single_property->sellerconcessionsatclosing) || isset($single_property->landdesc) || isset($single_property->nolots) || isset($single_property->sitecondition) || isset($single_property->nostories) ||
			  isset($single_property->totalunits) || isset($single_property->possession) || isset($single_property->flooring) || isset($single_property->roofmaterial) || isset($single_property->warranty) ||
			  isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->foundationsize) || isset($single_property->homeownassociation) || isset($single_property->reqdownassociation) ||
			  isset($single_property->grossannualincome) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->RangeArea) || isset($single_property->unmapped->FrontageType) || isset($single_property->unmapped->LeaseAmount) ||
			  isset($single_property->netoperatinginc) || isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->NumberOfUnitsLeased) || isset($single_property->unmapped->MobileHomeRemainsYN) || isset($single_property->unmapped->LeaseRenewalOptionYN) ||
			  isset($single_property->unmapped->InternetConsumerCommentYN) || isset($single_property->unmapped->BuildingAreaTotal) || isset($single_property->unmapped->WoodedArea) || isset($single_property->unmapped->LeaseConsideredYN) || isset($single_property->unmapped->NumberOfSeparateGasMeters) ||
			  isset($single_property->unmapped->PublicSurveySection) || isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->unmapped->NewConstructionYN) || isset($single_property->unmapped->InternetEntireListingDisplayYN) || isset($single_property->unmapped->CoveredSpaces) ||
			  isset($single_property->unmapped->CropsIncludedYN) || isset($single_property->unmapped->InternetAutomatedValuationDisplayYN) || isset($single_property->unmapped->IrrigationWaterRightsYN) || isset($single_property->unmapped->LotSizeArea) || isset($single_property->unmapped->GrazingPermitsPrivateYN) ||
			  isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->unmapped->CarportYN) || isset($single_property->unmapped->CableTvExpense) || isset($single_property->unmapped->NumberOfSeparateElectricMeters) || isset($single_property->unmapped->CarportSpaces) ||
			  isset($single_property->unmapped->Elevation) || isset($single_property->unmapped->SpaYN) || isset($single_property->unmapped->ManagerExpense) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->StoriesTotal) ||
			  isset($single_property->unmapped->ViewYN) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->unmapped->LeasableArea) || isset($single_property->unmapped->ElectricOnPropertyYN) || isset($single_property->unmapped->IrrigationWaterRightsAcres) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->sellerconcessionsatclosing)): ?>
			<li>Seller Concessions at Closing: [sellerconcessionsatclosing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->landdesc)): ?>
			<li>Land Description: [landdesc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nolots)): ?>
			<li>No of Lots: [nolots]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site Condition: [sitecondition]</li>
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
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
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
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Home Own Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Required owner Association: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Grossannualincome: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RangeArea)): ?>
			<li>RangeArea: [unmapped_RangeArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FrontageType)): ?>
			<li>Frontage Type: [unmapped_FrontageType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseAmount)): ?>
			<li>LeaseAmount: [unmapped_LeaseAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operating Income: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfUnitsLeased)): ?>
			<li>Number Of Units Leased: [unmapped_NumberOfUnitsLeased]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileHomeRemainsYN)): ?>
			<li>Mobile Home Remains YN: [unmapped_MobileHomeRemainsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseRenewalOptionYN)): ?>
			<li>Lease Renewal Option YN: [unmapped_LeaseRenewalOptionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetConsumerCommentYN)): ?>
			<li>Internet Consumer Comment YN: [unmapped_InternetConsumerCommentYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Building Area: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WoodedArea)): ?>
			<li>Wooded Area: [unmapped_WoodedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseConsideredYN)): ?>
			<li>Lease Considered YN: [unmapped_LeaseConsideredYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateGasMeters)): ?>
			<li>Number Of Separate GasMeters: [unmapped_NumberOfSeparateGasMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PublicSurveySection)): ?>
			<li>PublicSurveySection: [unmapped_PublicSurveySection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
			<li>New Construction YN: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetEntireListingDisplayYN)): ?>
			<li>Internet Entire Listing Display YN: [unmapped_InternetEntireListingDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
			<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CropsIncludedYN)): ?>
			<li>Crops Included YN: [unmapped_CropsIncludedYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation Display: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeArea)): ?>
			<li>Lot Size: [unmapped_LotSizeArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrazingPermitsPrivateYN)): ?>
			<li>Grazing Permits Private YN: [unmapped_GrazingPermitsPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>CarportYN: [unmapped_CarportYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CableTvExpense)): ?>
			<li>Cable TvExpense: [unmapped_CableTvExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateElectricMeters)): ?>
			<li>Number Of Separate Electric Meters: [unmapped_NumberOfSeparateElectricMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Elevation)): ?>
			<li>Elevation: [unmapped_Elevation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Spa YN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManagerExpense)): ?>
			<li>Manager Expense: [unmapped_ManagerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
			<li>Lot Dimension: [unmapped_LotSizeDimensions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
			<li>Stories: [unmapped_StoriesTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View YN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community YN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeasableArea)): ?>
			<li>IrrigationWater Rights Acres: [unmapped_LeasableArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
			<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
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
		
		<?php if( isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->hoafee) || isset($single_property->unmapped->SuppliesExpense) || isset($single_property->unmapped->FuelExpense) ||
			  isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->WorkmansCompensationExpense) || isset($single_property->unmapped->FurnitureReplacementExpense) || isset($single_property->unmapped->TrashExpense) || isset($single_property->unmapped->NewTaxesExpense) ||
			  isset($single_property->unmapped->OperatingExpense) || isset($single_property->unmapped->OtherExpense) || isset($single_property->unmapped->LicensesExpense) || isset($single_property->unmapped->MaintenanceExpense) || isset($single_property->unmapped->GardnerExpense) ||
			   isset($single_property->unmapped->WaterSewerExpense) || isset($single_property->unmapped->ProfessionalManagementExpense) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) || isset($single_property->unmapped->PestControlExpense) || isset($single_property->unmapped->AssociationFee2) ||
			  isset($single_property->unmapped->PoolExpense) || isset($single_property->unmapped->TaxAssessedValue) || isset($single_property->unmapped->InsuranceExpense) ): ?>
			  
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SuppliesExpense)): ?>
			<li>Supplies Expense: [unmapped_SuppliesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WorkmansCompensationExpense)): ?>
			<li>Workmans Compensation Expense: [unmapped_WorkmansCompensationExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TrashExpense)): ?>
			<li>Trash Expense: [unmapped_TrashExpense]</li>
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
			<?php if( isset($single_property->unmapped->MaintenanceExpense)): ?>
			<li>Maintenance Expense: [unmapped_MaintenanceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GardnerExpense)): ?>
			<li>Gardner Expense: [unmapped_GardnerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ProfessionalManagementExpense)): ?>
			<li>Professional Management Expense: [unmapped_ProfessionalManagementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Tax Other Annual Assessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxAssessedValue)): ?>
			<li>Tax Assessed Value: [unmapped_TaxAssessedValue]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->FireplaceYN) || isset($single_property->fireplaces) || isset($single_property->waterfrontflag) || isset($single_property->cooling) || isset($single_property->sewer) ||
				  isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->HeatingYN) || isset($single_property->unmapped->CoolingYN) ):?>
				  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Water Front Flag: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling Type: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSource)): ?>
			<li>Water Source: [unmapped_WaterSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
	
		<?php if( isset($single_property->garagespaces) || isset($single_property->unmapped->GarageYN) || isset($single_property->unmapped->OpenParkingSpaces) || isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->unmapped->OpenParkingYN) ):?>
				  
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingYN)): ?>
			<li>Open Parking YN: [unmapped_OpenParkingYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>