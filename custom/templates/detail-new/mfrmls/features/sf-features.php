<?php if( $single_property->propsubtype=='Townhouse' ){ ?>
<ul class="zy-features-grid">
	<?php if( isset($single_property->construction) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->foundationsize) || isset($single_property->unmapped->PatioAndPorchFeatures) || 
			  isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->roofmaterial) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterViewYN) || isset($single_property->unmapped->AdditionalRooms) || 
			  isset($single_property->appliances) || isset($single_property->flooring) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->RoomCount) || 
			  isset($single_property->unmapped->AdditionalParcelsYN) || isset($single_property->unmapped->AssociationApprovalRequiredYN) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->AvailableForLeaseYN) || isset($single_property->unmapped->CDDYN) || 
			  isset($single_property->unmapped->DPRYN) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->FloodZoneDate) || isset($single_property->unmapped->HomesteadYN) || isset($single_property->unmapped->ListingTerms) || 
			  isset($single_property->petrestrictionsallow) || isset($single_property->assocsecurity) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->sitecondition) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation Details: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private Yn: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
			<li>Waterfront Feet Total: [unmapped_WaterfrontFeetTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterViewYN)): ?>
			<li>Waterfront Yn: [unmapped_WaterViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalRooms)): ?>
			<li>Additional Rooms: [unmapped_AdditionalRooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Levels)): ?>
			<li>Levels: [unmapped_Levels]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoomCount)): ?>
			<li>Room Count: [unmapped_RoomCount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels Yn: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationApprovalRequiredYN)): ?>
			<li>Association Approval Required Yn: [unmapped_AssociationApprovalRequiredYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association Yn: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AvailableForLeaseYN)): ?>
			<li>Available For Lease Yn: [unmapped_AvailableForLeaseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CDDYN)): ?>
			<li>Cdd Yn: [unmapped_CDDYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DPRYN)): ?>
			<li>DPR: [unmapped_DPRYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
			<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneDate)): ?>
			<li>Flood Zone Date: [unmapped_FloodZoneDate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HomesteadYN)): ?>
			<li>Homestead Yn: [unmapped_HomesteadYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pets Allowed: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community Yn: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site Condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
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
	
		<?php if( isset($single_property->unmapped->GarageYN) || isset($single_property->garagespaces) || isset($single_property->unmapped->GarageDimensions) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage Yn: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageDimensions)): ?>
			<li>Garage Dimensions: [unmapped_GarageDimensions]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->water) || isset($single_property->sewer) ||
				  isset($single_property->unmapped->WaterAccessYN) || isset($single_property->unmapped->WaterExtrasYN) || isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace Yn: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterAccessYN)): ?>
			<li>Water Access Yn: [unmapped_WaterAccessYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterExtrasYN)): ?>
			<li>Water Extras Yn: [unmapped_WaterExtrasYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>						
			
		</ul>
		<?php endif; ?>
	</li>

	<li class="cell">
				
		<?php if( isset($single_property->unmapped->AssociationFeeRequirement) || isset($single_property->unmapped->TotalAnnualFees) || isset($single_property->feeinterval) || isset($single_property->unmapped->MonthlyHOAAmount) || isset($single_property->taxes) ||
				  isset($single_property->taxyear) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->AssociationFeeRequirement)): ?>
			<li>Association Fee Requirement: [unmapped_AssociationFeeRequirement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TotalAnnualFees)): ?>
			<li>Association Fee: [unmapped_TotalAnnualFees]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MonthlyHOAAmount)): ?>
			<li>Association Fee Monthly Amount: [unmapped_MonthlyHOAAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Annual Amount: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>

<?php } else if( $single_property->propsubtype=='Villa' ){ ?>
<ul class="zy-features-grid">
	<?php if( isset($single_property->construction) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->foundationsize) || isset($single_property->unmapped->PoolPrivateYN) || 
			  isset($single_property->roofmaterial) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterViewYN) || isset($single_property->unmapped->AdditionalRooms) || isset($single_property->appliances) ||
			  isset($single_property->flooring) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->RoomCount) || isset($single_property->unmapped->AdditionalParcelsYN) ||
			  isset($single_property->unmapped->AssociationApprovalRequiredYN) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->AvailableForLeaseYN) || isset($single_property->unmapped->CDDYN) || isset($single_property->unmapped->DPRYN) ||
			  isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->FloodZoneDate) || isset($single_property->unmapped->HomesteadYN) || isset($single_property->unmapped->ListingTerms) || isset($single_property->petrestrictionsallow) ||
			  isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->sitecondition) || isset($single_property->termsfeature) || isset($single_property->zoning) || isset($single_property->asscfeeincludes) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation Details: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private Yn: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Levels)): ?>
			<li>Levels: [unmapped_Levels]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoomCount)): ?>
			<li>Room Count: [unmapped_RoomCount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels Yn: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationApprovalRequiredYN)): ?>
			<li>Association Approval Required Yn: [unmapped_AssociationApprovalRequiredYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association Yn: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AvailableForLeaseYN)): ?>
			<li>Available For Lease Yn: [unmapped_AvailableForLeaseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CDDYN)): ?>
			<li>Cdd Yn: [unmapped_CDDYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DPRYN)): ?>
			<li>DPR: [unmapped_DPRYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
			<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneDate)): ?>
			<li>Flood Zone Date: [unmapped_FloodZoneDate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HomesteadYN)): ?>
			<li>Homestead Yn: [unmapped_HomesteadYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pets Allowed: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community Yn: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site Condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Terms feature: [termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Association Fee Includes: [asscfeeincludes]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	
	<li class="cell">
	
		<?php if( isset($single_property->unmapped->GarageYN) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage Yn: [unmapped_GarageYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->water) || isset($single_property->sewer) ||
				  isset($single_property->unmapped->WaterAccessYN) || isset($single_property->unmapped->WaterExtrasYN) || isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace Yn: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterAccessYN)): ?>
			<li>Water Access Yn: [unmapped_WaterAccessYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterExtrasYN)): ?>
			<li>Water Extras Yn: [unmapped_WaterExtrasYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>						
			
		</ul>
		<?php endif; ?>
	</li>

	<li class="cell">
				
		<?php if( isset($single_property->unmapped->AssociationFeeRequirement) || isset($single_property->unmapped->TotalAnnualFees) || isset($single_property->feeinterval) || isset($single_property->unmapped->MonthlyHOAAmount) || isset($single_property->taxes) ||
				  isset($single_property->taxyear) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->AssociationFeeRequirement)): ?>
			<li>Association Fee Requirement: [unmapped_AssociationFeeRequirement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TotalAnnualFees)): ?>
			<li>Association Fee: [unmapped_TotalAnnualFees]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MonthlyHOAAmount)): ?>
			<li>Association Fee Monthly Amount: [unmapped_MonthlyHOAAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Annual Amount: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>

<?php } else { ?>

<ul class="zy-features-grid">
	<?php if( isset($single_property->construction) || isset($single_property->facingdirection) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->foundationsize) || 
			  isset($single_property->lotdescription) || isset($single_property->unmapped->OtherStructures) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->pooldescription) || isset($single_property->unmapped->PoolPrivateYN) || 
			  isset($single_property->roofmaterial) || isset($single_property->unmapped->View) || isset($single_property->unmapped->WaterAccessYN) || isset($single_property->unmapped->WaterExtrasYN) || isset($single_property->unmapped->WaterfrontFeetTotal) || 
			  isset($single_property->unmapped->WaterViewYN) || isset($single_property->unmapped->AdditionalRooms) || isset($single_property->appliances) || isset($single_property->flooring) || isset($single_property->interiorfeatures) || 
			  isset($single_property->laundryfeatures) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->RoomCount) || isset($single_property->unmapped->AdditionalParcelsYN) || isset($single_property->unmapped->AssociationApprovalRequiredYN) || 
			  isset($single_property->unmapped->AssociationFeeRequirement) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->AvailableForLeaseYN) || isset($single_property->unmapped->Disclosures) || isset($single_property->unmapped->CDDYN) || 
			  isset($single_property->unmapped->DPRYN) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->FloodZoneDate) || isset($single_property->unmapped->HomesteadYN) || isset($single_property->unmapped->ListingTerms) || 
			  isset($single_property->unmapped->MinimumLease) || isset($single_property->petrestrictionsallow) || isset($single_property->unmapped->RealtorInfo) || isset($single_property->assocsecurity) || isset($single_property->unmapped->SeniorCommunityYN) || 
			  isset($single_property->sitecondition) || isset($single_property->unmapped->YrsOfOwnerPriorToLeasingReqYN) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->facingdirection)): ?>
			<li>Direction Faces: [facingdirection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation Details: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherStructures)): ?>
			<li>Other Structures: [unmapped_OtherStructures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pooldescription)): ?>
			<li>Pool Features: [pooldescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private Yn: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterAccessYN)): ?>
			<li>Water Access Yn: [unmapped_WaterAccessYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterExtrasYN)): ?>
			<li>Water Extras Yn: [unmapped_WaterExtrasYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
			<li>Waterfront Feet Total: [unmapped_WaterfrontFeetTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterViewYN)): ?>
			<li>Waterfront Yn: [unmapped_WaterViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalRooms)): ?>
			<li>Additional Rooms: [unmapped_AdditionalRooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Features: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Levels)): ?>
			<li>Levels: [unmapped_Levels]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RoomCount)): ?>
			<li>Room Count: [unmapped_RoomCount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels Yn: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationApprovalRequiredYN)): ?>
			<li>Association Approval Required Yn: [unmapped_AssociationApprovalRequiredYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFeeRequirement)): ?>
			<li>Association Fee Requirement: [unmapped_AssociationFeeRequirement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association Yn: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AvailableForLeaseYN)): ?>
			<li>Available For Lease Yn: [unmapped_AvailableForLeaseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Disclosures)): ?>
			<li>Disclosures: [unmapped_Disclosures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CDDYN)): ?>
			<li>Cdd Yn: [unmapped_CDDYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DPRYN)): ?>
			<li>DPR: [unmapped_DPRYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
			<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneDate)): ?>
			<li>Flood Zone Date: [unmapped_FloodZoneDate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HomesteadYN)): ?>
			<li>Homestead Yn: [unmapped_HomesteadYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MinimumLease)): ?>
			<li>Listing Terms: [unmapped_MinimumLease]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pets Allowed: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RealtorInfo)): ?>
			<li>Realtor Info: [unmapped_RealtorInfo]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community Yn: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site Condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->YrsOfOwnerPriorToLeasingReqYN)): ?>
			<li>Yrs Of Owner Prior To Leasing Re: [unmapped_YrsOfOwnerPriorToLeasingReqYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	
	<li class="cell">
	
		<?php if( isset($single_property->unmapped->GarageYN) || isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->garagespaces) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage Yn: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->firmrmk1) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->heating) || isset($single_property->sewer) ||
				  isset($single_property->water) || isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->firmrmk1)): ?>
			<li>Fireplace Features: [firmrmk1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace Yn: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>						
			
		</ul>
		<?php endif; ?>
	</li>

	<li class="cell">
				
		<?php if( isset($single_property->unmapped->TotalAnnualFees) || isset($single_property->feeinterval) || isset($single_property->unmapped->MonthlyHOAAmount) || isset($single_property->taxes) || isset($single_property->taxyear) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->TotalAnnualFees)): ?>
			<li>Association Fee: [unmapped_TotalAnnualFees]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MonthlyHOAAmount)): ?>
			<li>Association Fee Monthly Amount: [unmapped_MonthlyHOAAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Annual Amount: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>

<?php } ?>