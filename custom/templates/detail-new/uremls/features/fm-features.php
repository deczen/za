<ul class="zy-features-grid">

	<?php if( 
			isset($single_property->propsubtype) || 
			isset($single_property->unmapped->improvements) || 
			isset($single_property->unmapped->irrigation) || 
			isset($single_property->unmapped->ownertype) || 
			isset($single_property->taxes) || 
			isset($single_property->unmapped->termsfeature) || 
			isset($single_property->unmapped->watershares) || 
			isset($single_property->unmapped->waterviewfeatures) || 
			isset($single_property->zoning) ||						
			isset($single_property->unmapped->CoveredSpaces) ||			
			isset($single_property->unmapped->FrontageLength) ||
			isset($single_property->unmapped->HorseYN) ||
			isset($single_property->lotdescription) ||
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
			isset($single_property->unmapped->MainLevelBedrooms) ||
			isset($single_property->totalrooms) ||
			isset($single_property->unmapped->CapRate) ||
			isset($single_property->unmapped->CrossStreet) ||
			isset($single_property->unmapped->IrrigationWaterRightsAcres) ||
			isset($single_property->unmapped->LeaseAmount) ||
			isset($single_property->unmapped->ListingTerms) ||
			isset($single_property->sitecondition) ||
			isset($single_property->unmapped->ZoningDescription)			
			):?>
	
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Farm Type: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->improvements)): ?> <!-- -->
			<li>Improvements: [unmapped_improvements]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->irrigation)): ?>
			<li>Irrigation : [unmapped_irrigation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ownertype)): ?>
			<li>Owner Type: [unmapped_ownertype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->termsfeature)): ?> <!-- -->
			<li>Terms: [unmapped_termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->watershares)): ?>
			<li>Water Shares: [unmapped_watershares]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->waterviewfeatures)): ?> <!-- -->
			<li>Water Source: [unmapped_waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
				<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FrontageLength)): ?>
				<li>Frontage Length: [unmapped_FrontageLength]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->HorseYN)): ?>
				<li>Horse Property YN: [unmapped_HorseYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Features: [lotdescription]</li>
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
				<li>Pool Private YN: [unmapped_PoolPrivateYN]</li>
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
			<?php if( isset($single_property->unmapped->MainLevelBedrooms)): ?>
				<li>Main Level Bedrooms: [unmapped_MainLevelBedrooms]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->totalrooms)): ?>
				<li>Rooms Total: [totalrooms]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->CapRate)): ?>
				<li>Cap Rate: [unmapped_CapRate]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CrossStreet)): ?>
				<li>Cross Street: [unmapped_CrossStreet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
				<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->LeaseAmount)): ?>
				<li>Lease Amount: [unmapped_LeaseAmount]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
				<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->sitecondition)): ?>
				<li>Property Condition: [sitecondition]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->ZoningDescription)): ?>
				<li>Zoning Description: [unmapped_ZoningDescription]</li>
			<?php endif; ?>

		</ul>
	
	</li>
	
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->acresdry) || isset($single_property->unmapped->acresirrig) || isset($single_property->unmapped->acresleased) || isset($single_property->unmapped->acresrange) || isset($single_property->unmapped->driveway) || isset($single_property->exteriorfeatures) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) ):?>
	
	<li class="cell">
	
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->acresdry)): ?>
				<li>Acres Dry: [unmapped_acresdry]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresirrig)): ?>
				<li>Acres Irrigated: [unmapped_acresirrig]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresleased)): ?>
				<li>Acres Leased: [unmapped_acresleased]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->acresrange)): ?>
				<li>Acres Range: [unmapped_acresrange]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<li>Driveway: [unmapped_driveway]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<li>Land Use: [landdesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<li>Length In Feet Of Back Of Property: [unmapped_dimback]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<li>Length In Feet Of Side Of Property: [unmapped_dimside]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Facts: [lotdescription]</li>
				<?php endif; ?>
			
		</ul>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities </h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
				<li>Cooling Y/N: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
				<li>Heating Y/N: [unmapped_HeatingYN]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->PowerProductionSolarYearInstall)): ?>
				<li>Power Production Solar Year Install: [unmapped_PowerProductionSolarYearInstall]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
			<?php endif; ?>	
					
		</ul>
		
	</li>	
	<?php endif; ?>

	<li class="cell">
		<?php if( 
			isset($single_property->unmapped->GarageYN) ||
			isset($single_property->unmapped->AttachedGarageYN) ||
			isset($single_property->unmapped->CarportSpaces) ||
			isset($single_property->unmapped->CarportYN) ||
			isset($single_property->unmapped->OpenParkingSpaces) 
			
			):?>
		<h3 class="zy-feature-title">Parking </h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
				<li>Garage Y/N: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<li>AttachedGarage Y/N: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
				<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
				<li>Carport Y/N: [unmapped_CarportYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
				<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>				
		</ul>
		<?php endif; ?>	
		
		<?php if( 
			isset($single_property->highschool) || 
			isset($single_property->middleschool) || 
			isset($single_property->unmapped->HighSchoolDistrict)
			):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
				<li>School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>				
			
		</ul>
		<?php endif; ?>			
	</li>	
	
</ul>