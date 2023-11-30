<ul class="zy-features-grid">

	<?php if( 
		isset($single_property->unmapped->businessname) || 
		isset($single_property->unmapped->caprate) || 
		isset($single_property->unmapped->leasetermsfrom) || 
		isset($single_property->unmapped->leasetermsto) || 
		isset($single_property->unmapped->ownertype) || 
		isset($single_property->possession) || 
		isset($single_property->unmapped->subleasefrom) || 
		isset($single_property->unmapped->subleaseto) || 
		isset($single_property->unmapped->zoningchar) ||
		
		isset($single_property->unmapped->ConstStatus) ||
		isset($single_property->unmapped->NewConstructionYN) ||
		isset($single_property->unmapped->CoveredSpaces) ||
		isset($single_property->unmapped->FrontageLength) ||
		isset($single_property->unmapped->HorseYN) ||
		isset($single_property->unmapped->LotSizeDimensions) ||
		isset($single_property->unmapped->MobileLength) ||
		isset($single_property->unmapped->MobileWidth) ||
		isset($single_property->unmapped->PoolPrivateYN) ||
		isset($single_property->unmapped->SpaYN) ||
		isset($single_property->unmapped->ViewYN) ||
		isset($single_property->waterfrontflag) ||
		isset($single_property->unmapped->AboveGradeFinishedArea) ||
		isset($single_property->unmapped->BasementFinished) ||
		isset($single_property->unmapped->BathroomsPartial) ||
		isset($single_property->unmapped->BuildingAreaTotal) ||
		isset($single_property->totalrooms) ||
		isset($single_property->hoafee) ||
		isset($single_property->reqdownassociation) ||
		isset($single_property->unmapped->CapRate) ||
		isset($single_property->unmapped->CrossStreet) ||
		isset($single_property->unmapped->CurrentUse) ||
		isset($single_property->unmapped->IrrigationWaterRightsAcres) ||
		isset($single_property->unmapped->LeaseAmount) ||
		isset($single_property->unmapped->LeaseConsideredYN) ||
		isset($single_property->unmapped->NumberOfUnitsLeased) ||
		isset($single_property->unmapped->NewConstructionYN) ||
		isset($single_property->unmapped->NumberOfPads) ||
		isset($single_property->unmapped->PowerProductionSolarYearInstall) ||
		isset($single_property->unmapped->PropertyAttachedYN) ||
		isset($single_property->sitecondition) ||
		isset($single_property->propsubtype) ||
		isset($single_property->unmapped->SeniorCommunityYN)
		
	):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->businessname)): ?>
			<li>Business Name: [unmapped_businessname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->caprate)): ?>
			<li>Capitalization Rate: [unmapped_caprate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->leasetermsfrom)): ?>
			<li>Lease Terms From: [unmapped_leasetermsfrom]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->leasetermsto)): ?>
			<li>Lease Terms To: [unmapped_leasetermsto]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ownertype)): ?>
			<li>Owner Type: [unmapped_ownertype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->subleasefrom)): ?>
			<li>Sublease From : [unmapped_subleasefrom]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->subleaseto)): ?>
			<li>Sublease To: [unmapped_subleaseto]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->zoningchar)): ?>
			<li>Zoning Code: [unmapped_zoningchar]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->ConstStatus)): ?>
				<li>Construction Status: [unmapped_ConstStatus]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
				<li>New Construction Y/N: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
				<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FrontageLength)): ?>
				<li>Frontage Length: [unmapped_FrontageLength]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HorseYN)): ?>
				<li>Horse Y/N: [unmapped_HorseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileLength)): ?>
				<li>Mobile Length: [unmapped_MobileLength]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileWidth)): ?>
				<li>Mobile Width: [unmapped_MobileWidth]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
				<li>Pool Private Y/N: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
				<li>Spa Y/N: [unmapped_SpaYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
				<li>View Y/N: [unmapped_ViewYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront Y/N: [waterfrontflag]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->AboveGradeFinishedArea)): ?>
				<li>Above Grade Finished Area: [unmapped_AboveGradeFinishedArea]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->BasementFinished)): ?>
				<li>Basement Finished: [unmapped_BasementFinished]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->BathroomsPartial)): ?>
				<li>Bathrooms Partial: [unmapped_BathroomsPartial]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
				<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->totalrooms)): ?>
				<li>Rooms Total: [totalrooms]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association Y/N: [reqdownassociation]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->CapRate)): ?>
				<li>Cap Rate: [unmapped_CapRate]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CrossStreet)): ?>
				<li>Cross Street: [unmapped_CrossStreet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CurrentUse)): ?>
				<li>Current Use: [unmapped_CurrentUse]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
				<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->LeaseAmount)): ?>
				<li>Lease Amount: [unmapped_LeaseAmount]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->LeaseConsideredYN)): ?>
				<li>Lease Considered Y/N: [unmapped_LeaseConsideredYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfUnitsLeased)): ?>
				<li>Number Of Units Leased: [unmapped_NumberOfUnitsLeased]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
				<li>New Construction Y/N: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfPads)): ?>
				<li>Number Of Pads: [unmapped_NumberOfPads]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PowerProductionSolarYearInstall)): ?>
				<li>Power Production Solar Year Install: [unmapped_PowerProductionSolarYearInstall]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
				<li>Property Attached Y/N: [unmapped_PropertyAttachedYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->sitecondition)): ?>
				<li>Property Condition: [sitecondition]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
				<li>Senior Community Y/N: [unmapped_SeniorCommunityYN]</li>
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
	
	<?php if( isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->taxes) ):?>
	
	<li class="cell">
		
		<?php if( isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) ):?>
		
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->dimback)): ?>
			<li>Length In Feet Of Back Of Property: [unmapped_dimback]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->dimside)): ?>
			<li>Length In Feet Of Side Of Property: [unmapped_dimside]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if(
			isset($single_property->garagespaces) || 
			isset($single_property->garageparking) || 
			isset($single_property->parkingspaces) ||
			isset($single_property->unmapped->AttachedGarageYN) ||
			isset($single_property->unmapped->CarportSpaces) ||
			isset($single_property->unmapped->CarportYN) ||
			isset($single_property->unmapped->GarageYN) ||
			isset($single_property->unmapped->OpenParkingSpaces) ||
			isset($single_property->unmapped->OpenParkingYN)
		):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Capacity: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking Features: [garageparking]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Capacity: [parkingspaces]</li>
			<?php endif; ?>
		
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<li>Attached Garage Y/N: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
				<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
				<li>Carport Y/N: [unmapped_CarportYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
				<li>Garage Y/N: [unmapped_GarageYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
				<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->OpenParkingYN)): ?>
				<li>OpenParking Y/N: [unmapped_OpenParkingYN]</li>
			<?php endif; ?>
		
		</ul>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
	<?php if( 
			isset ($single_property->proptype) ||
			isset($single_property->cooling) ||
			isset($single_property->coolingzones) ||
			isset($single_property->heating) ||
			isset($single_property->heatzones) ||
			isset($single_property->energyfeatures) ||
			isset($single_property->electricfeature) ||
			isset($single_property->hotwater) ||
			isset($single_property->waterheater) ||
			isset($single_property->sewer) ||
			isset($single_property->water) ||
			isset($single_property->aircondition) ||
			isset($single_property->unmapped->FireplaceFeatures) ||
			isset($single_property->unmapped->PowerProductionSolarYearInstall) ||
			isset($single_property->utilities) ||
			isset($single_property->unmapped->CoolingYN) ||
			isset($single_property->unmapped->FireplaceYN) ||
			isset($single_property->fireplaces) ||
			isset($single_property->unmapped->HeatingYN)
			
			):?>
	<li class="cell">
		
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
			<?php if( isset($single_property->waterheater)): ?>
			<li>Water Heater: [waterheater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->aircondition)): ?>
			<li>Air Condition: [aircondition]</li>
			<?php endif; ?>		

			<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
				<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PowerProductionSolarYearInstall)): ?>
				<li>FPower Production Solar Year Install: [unmapped_PowerProductionSolarYearInstall]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
			<?php endif; ?>
							
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
				<li>Cooling Y/N: [unmapped_CoolingYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
				<li>Fireplace Y/N: [unmapped_FireplaceYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces Total: [fireplaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
				<li>Heating Y/N: [unmapped_HeatingYN]</li>
			<?php endif; ?>
		</ul>
	</li>
	<?php endif; ?>	
	
</ul>