<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->waterviewfeatures) ||
			  isset($single_property->unmapped->PublicSurveySection) || isset($single_property->feeinterval) || isset($single_property->lotsize) || isset($single_property->unmapped->LotFeatures) || isset($single_property->unmapped->ConstructionMaterials) ||
			  isset($single_property->unmapped->LotSizeAcres) || isset($single_property->unmapped->LotSizeUnits) || isset($single_property->unmapped->laundryFeatures) /* || isset($single_property->zoning) */ || isset($single_property->ZoningDescription) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->amenities)): ?>
			<li>Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [stylewaterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association YN: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
			<li>New Construction YN: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
			<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetEntireListingDisplayYN)): ?>
			<li>Internet EntireListing Display YN: [unmapped_InternetEntireListingDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operatinginc: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cultivationacres)): ?>
			<li>Cultivation Acres: [cultivationacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobuildings)): ?>
			<li>No Of Buildings: [nobuildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nostories)): ?>
			<li>No Of Stories: [nostories]</li>
			<?php endif; ?>
			<?php if( isset($single_property->totalunits)): ?>
			<li>Total Units: [totalunits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Expanses: [tenantexpanses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>LotSize: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Built: [yearbuilt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseRenewalOptionYN)): ?>
			<li>LeaseRenewal Option YN: [unmapped_LeaseRenewalOptionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetConsumerCommentYN)): ?>
			<li>Internet Consumer Comment YN: [unmapped_InternetConsumerCommentYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherExpense)): ?>
			<li>Other Expense: [unmapped_OtherExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WoodedArea)): ?>
			<li>Wooded Area: [unmapped_WoodedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayYN)): ?>
			<li>Internet Automated Valuation Display YN: [unmapped_InternetAutomatedValuationDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BasementYN)): ?>
			<li>BasementYN: [unmapped_BasementYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>ListingTerms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>FuelExpense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>SeniorCommunityYN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>ViewYN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>GrossScheduledIncome: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricExpense)): ?>
			<li>Electric Expense: [unmapped_ElectricExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Spa YN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->PublicSurveySection)): ?>
			<li>Public Survey Section: [unmapped_PublicSurveySection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
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
			<?php /* if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; */ ?>
			<?php if( isset($single_property->unmapped->ZoningDescription)): ?>
			<li>Zoning: [unmapped_ZoningDescription]</li>
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
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
			  isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
	
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
			<li>FireplaceYN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->fireplaces) ): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>	
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->parkingfeature) || isset($single_property->unmapped->OpenParkingSpaces)  || 
				  isset($single_property->unmapped->OpenParkingSpaces) || isset($single_property->unmapped->AttachedGarageYN) ):?>
		
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
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>	

	<li>
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) ):?>
		
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Amount ($): [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Association Fee ($): [hoafee]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Tax Other AnnualAssessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li> <!-- not done -->
			<?php endif; ?>			
		</ul>
		<?php endif; ?>
	</li>

</ul>

<ul class="zy-features-grid">
	<?php if( isset($single_property->bedrms1) || isset($single_property->fbths1) || isset($single_property->coldscrp1) || isset($single_property->headscrp1) || isset($single_property->frplcs1) || isset($single_property->flrs1) || isset($single_property->levels1) || isset($single_property->rms1) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #1</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bedrms1)): ?>
			<li>Beds: [bedrms1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fbths1)): ?>
			<li>Baths: [fbths1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coldscrp1)): ?>
			<li>Cooling: [coldscrp1]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->headscrp1)): ?>
			<li>Heating: [headscrp1]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->frplcs1)): ?>
			<li>Fireplaces: [frplcs1]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->flrs1)): ?>
			<li>Floor: [flrs1]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->levels1)): ?>
			<li>Levels: [levels1]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->rms1)): ?>
			<li>Rooms: [rms1]</li>								
			<?php endif; ?>			
		</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->bedrms2) || isset($single_property->fbths2) || isset($single_property->coldscrp2) || isset($single_property->headscrp2) || isset($single_property->frplcs2) || isset($single_property->flrs2) || isset($single_property->levels2) || isset($single_property->rms2) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #2</h3>
		<ul class="zy-sub-list">	
			<?php if( isset($single_property->bedrms2)): ?>
			<li>Beds: [bedrms2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fbths2)): ?>
			<li>Baths: [fbths2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coldscrp2)): ?>
			<li>Cooling: [coldscrp2]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->headscrp2)): ?>
			<li>Heating: [headscrp2]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->frplcs2)): ?>
			<li>Fireplaces: [frplcs2]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->flrs2)): ?>
			<li>Floor: [flrs2]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->levels2)): ?>
			<li>Levels: [levels2]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->rms2)): ?>
			<li>Rooms: [rms2]</li>								
			<?php endif; ?>			
		</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>

	<?php if( isset($single_property->bedrms3) || isset($single_property->fbths3) || isset($single_property->coldscrp3) || isset($single_property->headscrp3) || isset($single_property->frplcs3) || isset($single_property->flrs3) || isset($single_property->levels3) || isset($single_property->rms3) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #3</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->bedrms3)): ?>
			<li>Beds: [bedrms3]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fbths3)): ?>
			<li>Baths: [fbths3]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coldscrp3)): ?>
			<li>Cooling: [coldscrp3]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->headscrp3)): ?>
			<li>Heating: [headscrp3]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->frplcs3)): ?>
			<li>Fireplaces: [frplcs3]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->flrs3)): ?>
			<li>Floor: [flrs3]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->levels3)): ?>
			<li>Levels: [levels3]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->rms3)): ?>
			<li>Rooms: [rms3]</li>								
			<?php endif; ?>			
		</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>		
	
	<?php if( isset($single_property->bedrms4) || isset($single_property->fbths4) || isset($single_property->coldscrp4) || isset($single_property->headscrp4) || isset($single_property->frplcs4) || isset($single_property->flrs4) || isset($single_property->levels4) || isset($single_property->rms4) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #4</h3>
		<ul class="zy-sub-list">	
			<?php if( isset($single_property->bedrms4)): ?>
			<li>Beds: [bedrms4]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fbths4)): ?>
			<li>Baths: [fbths4]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coldscrp4)): ?>
			<li>Cooling: [coldscrp4]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->headscrp4)): ?>
			<li>Heating: [headscrp4]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->frplcs4)): ?>
			<li>Fireplaces: [frplcs4]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->flrs4)): ?>
			<li>Floor: [flrs4]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->levels4)): ?>
			<li>Levels: [levels4]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->rms4)): ?>
			<li>Rooms: [rms4]</li>								
			<?php endif; ?>			
		</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
	<?php if( isset($single_property->bedrms5) || isset($single_property->fbths5) || isset($single_property->coldscrp5) || isset($single_property->headscrp5) || isset($single_property->frplcs5) || isset($single_property->flrs5) || isset($single_property->levels5) || isset($single_property->rms5) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #5</h3>
		<ul class="zy-sub-list">	
			<?php if( isset($single_property->bedrms5)): ?>
			<li>Beds: [bedrms5]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fbths5)): ?>
			<li>Baths: [fbths5]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coldscrp5)): ?>
			<li>Cooling: [coldscrp5]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->headscrp5)): ?>
			<li>Heating: [headscrp5]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->frplcs5)): ?>
			<li>Fireplaces: [frplcs5]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->flrs5)): ?>
			<li>Floor: [flrs5]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->levels5)): ?>
			<li>Levels: [levels5]</li>								
			<?php endif; ?>
			<?php if( isset($single_property->rms5)): ?>
			<li>Rooms: [rms5]</li>								
			<?php endif; ?>			
		</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
</ul>