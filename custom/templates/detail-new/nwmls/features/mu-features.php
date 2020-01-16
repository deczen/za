<ul class="zy-features-grid">
	<?php if( isset($single_property->lotsize) || isset($single_property->lotdescription) || isset($single_property->flooring) || isset($single_property->appliances) || isset($single_property->roofmaterial) ||
			  isset($single_property->exteriorfeatures) || isset($single_property->foundationsize) || isset($single_property->homeownassociation) || isset($single_property->reqdownassociation) || isset($single_property->grossannualincome) ||
			  isset($single_property->netoperatinginc) || isset($single_property->unmapped->BuildingAreaTotal) || isset($single_property->unmapped->WoodedArea) || isset($single_property->unmapped->LeaseConsideredYN) || isset($single_property->unmapped->SpaYN) ||
			  isset($single_property->unmapped->LivingArea) || isset($single_property->unmapped->GrazingPermitsPrivateYN) || isset($single_property->unmapped->NumberOfSeparateGasMeters) || isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->nolots) ||
			  isset($single_property->nostories) || isset($single_property->totalunits) || isset($single_property->possession) || isset($single_property->unmapped->InternetAutomatedValuationDisplayYN) || isset($single_property->unmapped->IrrigationWaterRightsYN) ||
			  isset($single_property->unmapped->SuppliesExpense) || isset($single_property->unmapped->LeaseRenewalOptionYN) || isset($single_property->unmapped->InternetConsumerCommentYN) || isset($single_property->unmapped->IrrigationWaterRightsAcres) || isset($single_property->unmapped->NumberOfSeparateWaterMeters) ||
			  isset($single_property->unmapped->NumberOfSeparateElectricMeters) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->FurnitureReplacementExpense) || isset($single_property->unmapped->MobileHomeRemainsYN) ||
			  isset($single_property->unmapped->View) || isset($single_property->unmapped->CarportSpaces) || isset($single_property->unmapped->Elevation) || isset($single_property->unmapped->ElectricOnPropertyYN) || isset($single_property->unmapped->SeniorCommunityYN) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Home Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Required Owner Association: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net operating income: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WoodedArea)): ?>
			<li>Wooded Area: [unmapped_WoodedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseConsideredYN)): ?>
			<li>Lease Considered YN: [unmapped_LeaseConsideredYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Spa YN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingArea)): ?>
			<li>Living Area: [unmapped_LivingArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrazingPermitsPrivateYN)): ?>
			<li>Grazing Permits Private YN: [unmapped_GrazingPermitsPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateGasMeters)): ?>
			<li>Number Of Separate Gas Meters: [unmapped_NumberOfSeparateGasMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
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
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation Display YN: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SuppliesExpense)): ?>
			<li>Supplies Expense: [unmapped_SuppliesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseRenewalOptionYN)): ?>
			<li>Lease Renewal Option YN: [unmapped_LeaseRenewalOptionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetConsumerCommentYN)): ?>
			<li>Internet Consumer Comment YN: [unmapped_InternetConsumerCommentYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
			<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			<li>Number Of Separate Water Meters: [unmapped_NumberOfSeparateWaterMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateElectricMeters)): ?>
			<li>Number Of Separate Electric Meters: [unmapped_NumberOfSeparateElectricMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Private Pool YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileHomeRemainsYN)): ?>
			<li>Mobile Home Remains YN: [unmapped_MobileHomeRemainsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Elevation)): ?>
			<li>Elevation: [unmapped_Elevation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community YN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->PoolExpense) || isset($single_property->unmapped->ManagerExpense) || isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->unmapped->OtherExpense) ||
			  isset($single_property->unmapped->LicensesExpense) || isset($single_property->unmapped->PestControlExpense) || isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->GardnerExpense) || isset($single_property->unmapped->MaintenanceExpense) ||
			  isset($single_property->unmapped->TrashExpense) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) || isset($single_property->unmapped->NewTaxesExpense) || isset($single_property->unmapped->AssociationFee2) || isset($single_property->unmapped->WaterSewerExpense) ||
			  isset($single_property->unmapped->CableTvExpense) || isset($single_property->unmapped->OperatingExpense) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->unmapped->FuelExpense) ): ?>
			  
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManagerExpense)): ?>
			<li>Manager Expense: [unmapped_ManagerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
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
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GardnerExpense)): ?>
			<li>Gardner Expense: [unmapped_GardnerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MaintenanceExpense)): ?>
			<li>Maintenance Expense: [unmapped_MaintenanceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TrashExpense)): ?>
			<li>Trash Expense: [unmapped_TrashExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Other Tax Annual Assessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewTaxesExpense)): ?>
			<li>New Taxes Expense: [unmapped_NewTaxesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CableTvExpense)): ?>
			<li>Cable Tv Expense: [unmapped_CableTvExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
			<li>Operating Expense: [unmapped_OperatingExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->FireplaceYN) || isset($single_property->fireplaces) || isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->waterfrontflag) ||
				  isset($single_property->unmapped->FireplaceYN) || isset($single_property->fireplaces) || isset($single_property->unmapped->CoolingYN) ):?>
				  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling Type: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Water Front Flag: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSource)): ?>
			<li>Water Source: [unmapped_WaterSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->unmapped->ElementarySchoolDistrict) || isset($single_property->unmapped->HighSchoolDistrict) || isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) ):?>
				  
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
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->unmapped->GarageYN) || isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->unmapped->OpenParkingSpaces) || isset($single_property->parkingfeature) ||
				  isset($single_property->unmapped->AttachedGarageYN) ):?>
				  
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>