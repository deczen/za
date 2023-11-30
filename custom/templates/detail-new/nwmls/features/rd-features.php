<ul class="zy-features-grid">
	<?php if( isset($single_property->lotdescription) || isset($single_property->flooring) || isset($single_property->interiorfeatures) || isset($single_property->appliances) || isset($single_property->unmapped->BuildingFeatures) ||
			  isset($single_property->roofmaterial) || isset($single_property->warranty) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->homeownassociation) ||
			  isset($single_property->reqdownassociation) || isset($single_property->grossannualincome) || isset($single_property->basement) || isset($single_property->nolots) || isset($single_property->lotsize) ||
			  isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->InternetConsumerCommentYN) || isset($single_property->unmapped->CoveredSpaces) || isset($single_property->unmapped->GrazingPermitsBlmYN) ||
			  isset($single_property->unmapped->InternetAutomatedValuationDisplayYN) || isset($single_property->unmapped->IrrigationWaterRightsYN) || isset($single_property->unmapped->IrrigationWaterRightsAcres) || isset($single_property->unmapped->LivingArea) || isset($single_property->nobuildings) ||
			  isset($single_property->nostories) || isset($single_property->sitecondition) || isset($single_property->totalunits) || isset($single_property->possession) || isset($single_property->netoperatinginc) ||
			  isset($single_property->waterfrontflag) || isset($single_property->cultivationacres) || isset($single_property->landdesc) || isset($single_property->unmapped->InternetAddressDisplayYN) || isset($single_property->unmapped->CarportSpaces) ||
			  isset($single_property->unmapped->TotalActualRent) || isset($single_property->unmapped->GrossScheduledIncome) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingFeatures)): ?>
			<li>Building Features: [unmapped_BuildingFeatures]</li>
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
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Request Down Association: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nolots)): ?>
			<li>No. of Lots: [nolots]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetConsumerCommentYN)): ?>
			<li>Internet Consumer Comment YN: [unmapped_InternetConsumerCommentYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
			<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrazingPermitsBlmYN)): ?>
			<li>Grazing Permits: [unmapped_GrazingPermitsBlmYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
			<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingArea)): ?>
			<li>Living Area: [unmapped_LivingArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobuildings)): ?>
			<li>Buildings: [nobuildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nostories)): ?>
			<li>Stories: [nostories]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Stories: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->totalunits)): ?>
			<li>Total Units: [totalunits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operating Include: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Water Front Flag: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cultivationacres)): ?>
			<li>Cultivation Acres: [cultivationacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->landdesc)): ?>
			<li>Land Description: [landdesc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAddressDisplayYN)): ?>
			<li>Internet Address Display YN: [unmapped_InternetAddressDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Space: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TotalActualRent)): ?>
			<li>Actual Total Rent: [unmapped_TotalActualRent]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Income: [unmapped_GrossScheduledIncome]</li>
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
		
		<?php if( isset($single_property->hoafee) || isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->unmapped->ElectricExpense) || isset($single_property->unmapped->AssociationFee2) ||
			  isset($single_property->unmapped->SuppliesExpense) || isset($single_property->unmapped->FurnitureReplacementExpense) || isset($single_property->unmapped->NewTaxesExpense) || isset($single_property->unmapped->OperatingExpense) || isset($single_property->unmapped->OtherExpense) ||
			  isset($single_property->unmapped->LicensesExpense) || isset($single_property->unmapped->InsuranceExpense) || isset($single_property->unmapped->FuelExpense) || isset($single_property->unmapped->PestControlExpense) || isset($single_property->unmapped->PoolExpense) ||
			  isset($single_property->unmapped->CableTvExpense) || isset($single_property->unmapped->ManagerExpense) ): ?>
			  
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
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee($): [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SuppliesExpense)): ?>
			<li>Supplies Expense: [unmapped_SuppliesExpense]</li>
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
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CableTvExpense)): ?>
			<li>Cable Tv Expense: [unmapped_CableTvExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ManagerExpense)): ?>
			<li>Manager  Expense: [unmapped_ManagerExpense]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->fireplaces) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->unmapped->CoolingYN) || isset($single_property->cooling) ||
				  isset($single_property->unmapped->WaterSource) || isset($single_property->sewer) ):?>
				  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling Type: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSource)): ?>
			<li>Water Source: [unmapped_WaterSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) || isset($single_property->unmapped->HighSchoolDistrict) || isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) ||
				  isset($single_property->unmapped->ElementarySchoolDistrict) ):?>
				  
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
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>High School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict)): ?>
			<li>Middle Or Junior School District: [unmapped_MiddleOrJuniorSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElementarySchoolDistrict)): ?>
			<li>Elementary School District: [unmapped_ElementarySchoolDistrict]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->unmapped->GarageYN) || isset($single_property->garagespaces) || isset($single_property->parkingfeature) || isset($single_property->parkingspaces) || isset($single_property->unmapped->AttachedGarageYN) ||
				  isset($single_property->unmapped->OpenParkingSpaces) ):?>
				  
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>