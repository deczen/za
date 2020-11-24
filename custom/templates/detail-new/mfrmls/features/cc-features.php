<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->CarportSpaces) || isset($single_property->unmapped->CarportYN) || isset($single_property->construction) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || 
			  isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->unmapped->PoolPrivateYN) || isset($single_property->roofmaterial) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterfrontYN) || 
			  isset($single_property->unmapped->AdditionalRooms) || isset($single_property->appliances) || isset($single_property->elevator) || isset($single_property->flooring) || isset($single_property->furnished) || 
			  isset($single_property->interiorfeatures) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->RoomCount) || isset($single_property->nostories) || isset($single_property->unmapped->AdditionalParcelsYN) || 
			  isset($single_property->unmapped->AssociationApprovalRequiredYN) || isset($single_property->asscfeeincludes) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->AvailableForLeaseYN) || isset($single_property->unmapped->BuildingNameNumber) || 
			  isset($single_property->unmapped->CDDYN) || isset($single_property->termsfeature) || isset($single_property->unmapped->CondoLandIncludedYN) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->FloorNumber) || 
			  isset($single_property->unmapped->HomesteadYN) || isset($single_property->unmapped->ListingTerms) || isset($single_property->unmapped->MinimumLease) || isset($single_property->assocsecurity) || isset($single_property->unmapped->SeniorCommunityYN) || 
			  isset($single_property->unmapped->CondoLandIncludedYN) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>CarportSpaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>Carport Yn: [unmapped_CarportYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation Details: [foundation]</li>
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
			<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
			<li>Waterfront Yn: [unmapped_WaterfrontYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalRooms)): ?>
			<li>Additional Rooms: [unmapped_AdditionalRooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->elevator)): ?>
			<li>Building Elevator Yn: [elevator]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->furnished)): ?>
			<li>Furnished: [furnished]</li>
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
			<?php if( isset($single_property->nostories)): ?>
			<li>Stories Total: [nostories]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels Yn: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationApprovalRequiredYN)): ?>
			<li>Association Approval Required Yn: [unmapped_AssociationApprovalRequiredYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Association Fee Includes: [asscfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association Yn: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AvailableForLeaseYN)): ?>
			<li>Available For Lease Yn: [unmapped_AvailableForLeaseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingNameNumber)): ?>
			<li>Building Name Number: [unmapped_BuildingNameNumber]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CDDYN)): ?>
			<li>Cdd Yn: [unmapped_CDDYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Community Features: [termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CondoLandIncludedYN)): ?>
			<li>Condo Land Included Yn: [unmapped_CondoLandIncludedYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
			<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloorNumber)): ?>
			<li>Floor Number: [unmapped_FloorNumber]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HomesteadYN)): ?>
			<li>Homestead Yn: [unmapped_HomesteadYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MinimumLease)): ?>
			<li>Minimum Lease: [unmapped_MinimumLease]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community Yn: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CondoLandIncludedYN)): ?>
			<li>Condo Land Included YN: [unmapped_CondoLandIncludedYN]</li>
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
				
		<?php if( isset($single_property->unmapped->MonthlyCondoFeeAmount) || isset($single_property->unmapped->CondoFees) || isset($single_property->unmapped->CondoFeesTerm) || isset($single_property->taxes) || isset($single_property->taxyear) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->MonthlyCondoFeeAmount)): ?>
			<li>Condo Fee Monthly Amount: [unmapped_MonthlyCondoFeeAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CondoFees)): ?>
			<li>Condo Fees: [unmapped_CondoFees]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CondoFeesTerm)): ?>
			<li>Condo Fees Term: [unmapped_CondoFeesTerm]</li>
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