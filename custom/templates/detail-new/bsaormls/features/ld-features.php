<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) || 
			isset($single_property->petsallowed) || isset($single_property->petrestrictionsallow) ||
			isset($single_property->propsubtype) || isset($single_property->facingdirection) || isset($single_property->unmapped->FrontageLength) || isset($single_property->lotdescription) || isset($single_property->unmapped->SpaYN) ||
			isset($single_property->unmapped->RoadFrontageType) || isset($single_property->roadtype) || isset($single_property->unmapped->ViewYN) || isset($single_property->waterfront) || isset($single_property->waterfrontflag) ||
			isset($single_property->unmapped->CurrentUse) || isset($single_property->unmapped->ElectricOnPropertyYN) || isset($single_property->termsfeature) || isset($single_property->unmapped->IrrigationSource) || isset($single_property->unmapped->LandLeaseAmount) ||
			isset($single_property->possession) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->unmapped->BuildingName) || isset($single_property->unmapped->ListingTerms) || 
		  	  isset($single_property->unmapped->CanalWidth) || isset($single_property->unmapped->AmenityRecFee) || isset($single_property->unmapped->CondoFee) || isset($single_property->unmapped->LegalUnit) || isset($single_property->unmapped->LotSizeUnits) ||
  			  isset($single_property->unmapped->MandatoryClubFee) || isset($single_property->unmapped->AssociationFee2) || isset($single_property->unmapped->OneTimeMandatoryClubFee) || isset($single_property->unmapped->OneTimeOtherFee) || isset($single_property->unmapped->OneTimeRecLeaseFee) ||
  			  isset($single_property->unmapped->OneTimeSpecialAssessmentFee) || isset($single_property->unmapped->TransferFee) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Land Details</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cultivationacres)): ?>
			<li>Cultivation Acres: [cultivationacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pastureacres)): ?>
			<li>Pasture Acres: [pastureacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->timberacres)): ?>
			<li>Timber Acres: [timberacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->ldtype)): ?>
			<li>Land Style: [ldtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->frontage)): ?>
			<li>Street Frontage: [frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
			
			<?php if( za_is_ygl( $single_property ) ): ?>
			
			<?php if( isset($single_property->rentprice)): ?>
			<li>Rent Amount: [rentprice]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitlevel)): ?>
			<li>Unit Level: [unitlevel]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<li>Rent Includes: [rentfeeincludes]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Fee Paid By Owner: [reqdownassociation]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry: [laundryfeatures]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->heating)): ?>
			<li>Heat Source: [heating]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->dateavailableformatted)): ?>
			<li>Avail Date: [dateavailableformatted]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->butype)): ?>
			<li>Building Type: [butype]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->student)): ?>
			<li>Student: [student]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->facilities)): ?>
			<li>Features: [facilities]</li>
			<?php endif; ?>	
			
			<?php endif; ?>

			<?php if( isset($single_property->propsubtype)): ?>
			<li>Building Design: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->facingdirection)): ?>
			<li>Direction Faces: [facingdirection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FrontageLength)): ?>
			<li>Frontage Length: [unmapped_FrontageLength]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Private Spa YN: [unmapped_SpaYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoadFrontageType)): ?>
			<li>Road Frontage Type: [unmapped_RoadFrontageType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Surface Type: [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View YN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront YN: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CurrentUse)): ?>
			<li>Current Use: [unmapped_CurrentUse]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Community Features: [termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationSource)): ?>
			<li>Irrigation Source: [unmapped_IrrigationSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LandLeaseAmount)): ?>
			<li>Land Lease Amount: [unmapped_LandLeaseAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Private Pool YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingName)): ?>
			<li>Sub Condo Name: [unmapped_BuildingName]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->CanalWidth)): ?>
			<li>Canal Width: [unmapped_CanalWidth]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AmenityRecFee)): ?>
			<li>Amenity Rec Fee: [unmapped_AmenityRecFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CondoFee)): ?>
			<li>Condo Fee: [unmapped_CondoFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LegalUnit)): ?>
			<li>Legal Unit: [unmapped_LegalUnit]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeUnits)): ?>
			<li>Lot Unit: [unmapped_LotSizeUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MandatoryClubFee)): ?>
			<li>Mandatory Club Fee: [unmapped_MandatoryClubFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Master HOAFee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OneTimeMandatoryClubFee)): ?>
			<li>One Time Mandatory Club Fee: [unmapped_OneTimeMandatoryClubFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OneTimeOtherFee)): ?>
			<li>One Time Other Fee: [unmapped_OneTimeOtherFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OneTimeRecLeaseFee)): ?>
			<li>One Time Rec Lease Fee: [unmapped_OneTimeRecLeaseFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OneTimeSpecialAssessmentFee)): ?>
			<li>One Time Special Assessment Fee: [unmapped_OneTimeSpecialAssessmentFee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TransferFee)): ?>
			<li>Transfer Fee: [unmapped_TransferFee]</li>
			<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		<?php /* <?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->gas)): ?>
				<li>Gas: [gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer Utilities: [sewer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water Utilities: [water]</li>
				<?php endif; ?>								
			
		</ul>
		<?php endif; ?> */ ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
				isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) ||
				isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->utilities) ):?>
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

			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>				
			
		</ul>
		<?php endif; ?>
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->feeinterval) || isset($single_property->reqdownassociation) || 
				isset($single_property->unmapped->TaxDistrictType) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
				
				<?php if( isset($single_property->feeinterval)): ?>
				<li>Association Fee Frequency: [feeinterval]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association YN: [reqdownassociation]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->hoafee)): ?>
				<li>Association Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Association Amenities: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxBlock)): ?>
				<li>Tax Block: [unmapped_TaxBlock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
				<li>Tax Legal Description: [unmapped_TaxLegalDescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
				<li>Tax Other Annual Assessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->TaxDistrictType)): ?>
				<li>Tax District Type: [unmapped_TaxDistrictType]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
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
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) || isset($single_property->unmapped->HighSchoolDistrict) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Elementary School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>