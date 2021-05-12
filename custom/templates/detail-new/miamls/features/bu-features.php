<ul class="zy-features-grid">
	
	<?php if( isset($single_property->basement) || isset($single_property->nobuildings) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->facilities) || 
			  isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->parkingspaces) || isset($single_property->noofrestrooms) || isset($single_property->system) || isset($single_property->utilities) ||
			  isset($single_property->unmapped->PublicSurveySection) || isset($single_property->feeinterval) || isset($single_property->lotsize) || isset($single_property->unmapped->LotFeatures) || isset($single_property->unmapped->ConstructionMaterials) ||
			  isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->LotSizeAcres) || isset($single_property->unmapped->LotSizeUnits) || isset($single_property->unmapped->laundryFeatures) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Details</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobuildings)): ?>
			<li>Building: [nobuildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofdrivingdoors)): ?>
			<li>Drive in Doors: [noofdrivingdoors]</li>
			<?php endif; ?>
			<?php if( isset($single_property->elevator)): ?>
			<li>Elevator: [elevator]</li>
			<?php endif; ?>
			<?php if( isset($single_property->facilities)): ?>
			<li>Facilities: [facilities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->handicapaccess)): ?>
			<li>Handicap Access: [handicapaccess]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofloadingdocks)): ?>
			<li>Loading Docks : [noofloadingdocks]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofrestrooms)): ?>
			<li>Restrooms: [noofrestrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->system)): ?>
			<li>System: [system]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->BusinessType)): ?>
			<li>Business Type: [unmapped_BusinessType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingName)): ?>
			<li>Building Name: [unmapped_BuildingName]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>ViewYN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association YN: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
			<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ZoningDescription)): ?>
			<li>Zoning Description: [unmapped_ZoningDescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HorseYN)): ?>
			<li>Horse YN: [unmapped_HorseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			<li>Number Of Separate WaterMeters: [unmapped_NumberOfSeparateWaterMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->YearEstablished)): ?>
			<li>Year Established: [unmapped_YearEstablished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community YN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->VacancyAllowance)): ?>
			<li>Vacancy Allowance: [unmapped_VacancyAllowance]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>SpaYN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->PublicSurveySection)): ?>
			<li>Public Survey Section: [unmapped_PublicSurveySection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Squarefeet: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotFeatures)): ?>
			<li>Lot Features: [unmapped_LotFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ConstructionMaterials)): ?>
			<li>Construction Materials: [unmapped_ConstructionMaterials]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeAcres)): ?>
			<li>Lot Size Acres: [unmapped_LotSizeAcres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeUnits)): ?>
			<li>Lot Size Units: [unmapped_LotSizeUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->laundryFeatures)): ?>
			<li>laundry Features: [unmapped_laundryFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>

		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
	
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
				  isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->unmapped->HeatingYN) ):?>
	
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coolingzones)): ?>
			<li>Cool Zones: [coolingzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heatzones)): ?>
			<li>Heat Zones: [heatzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->energyfeatures)): ?>
			<li>Energy Features: [energyfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hotwater)): ?>
			<li>Hot Water: [hotwater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->fireplaces) ): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype)  || isset($single_property->unmapped->OpenParkingSpaces) || isset($single_property->unmapped->AttachedGarageYN) || 
				  isset($single_property->unmapped->GarageYN) ): ?>
				  
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Type: [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>GarageYN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->hoafee) || isset($single_property->taxyear) || 
				  isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning Code: [zoning]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Taxyear: [taxyear]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li> 
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
		
	<li class="cell">
		<?php if( isset($single_property->businesshrs) || isset($single_property->butype) || isset($single_property->equiplistavail) || isset($single_property->form) || isset($single_property->inventoryavail) || isset($single_property->realestateincld) || isset($single_property->speciallicenses) || isset($single_property->tenantexpanses) || isset($single_property->yearbuilt) || isset($single_property->zoning) || isset($single_property->zonedescription) ):?>
		<h3 class="zy-feature-title">Business Information</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->businesshrs)): ?>
			<li>Business Hours: [businesshrs]</li>
			<?php endif; ?>
			<?php if( isset($single_property->butype)): ?>
			<li>Business Type: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->equiplistavail)): ?>
			<li>Equipment List Available: [equiplistavail]</li>
			<?php endif; ?>
			<?php if( isset($single_property->form)): ?>
			<li>Form: [form]</li>
			<?php endif; ?>
			<?php if( isset($single_property->inventoryavail)): ?>
			<li>Inventory Included: [inventoryavail]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->realestateincld)): ?>
			<li>Real Estate Included: [realestateincld]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->speciallicenses)): ?>
			<li>Special Licenses: [speciallicenses]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Expenses: [tenantexpanses]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Established: [yearbuilt]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning Code: [zoning]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zoning Description: [zonedescription]</li> 
			<?php endif; ?>			
		</ul>
		<?php endif; ?>
	</li>					

</ul>