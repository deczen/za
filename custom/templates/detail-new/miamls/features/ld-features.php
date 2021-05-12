<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->unmapped->PublicSurveySection) || isset($single_property->feeinterval) || isset($single_property->lotsize) || isset($single_property->unmapped->LotFeatures) || isset($single_property->unmapped->ConstructionMaterials) ||
			  isset($single_property->unmapped->LotSizeAcres) || isset($single_property->unmapped->LotSizeUnits) || isset($single_property->unmapped->laundryFeatures) ):?>
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
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoafee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->warranty)): ?>
			<li>Warranty: [warranty]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Water Front: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association YN: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net operatinginc: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>WaterFront: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->facingdirection)): ?>
			<li>Facing Direction: [facingdirection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InsuranceExpense)): ?>
			<li>Insurance Expense: [unmapped_InsuranceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
			<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterSewerExpense)): ?>
			<li>Water Sewer Expense: [unmapped_WaterSewerExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View YN: [unmapped_ViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HorseYN)): ?>
			<li>Horse YN: [unmapped_HorseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nolots)): ?>
			<li>Lots: [nolots]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
			<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
			<li>NewConstruction YN: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>AssociationFee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CapRate)): ?>
			<li>Cap Rate: [unmapped_CapRate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
			<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseRenewalOptionYN)): ?>
			<li>Lease Renewal OptionYN: [unmapped_LeaseRenewalOptionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetConsumerCommentYN)): ?>
			<li>Internet Consumer CommentYN: [unmapped_InternetConsumerCommentYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherExpense)): ?>
			<li>Other Expense: [unmapped_OtherExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WoodedArea)): ?>
			<li>Wooded Area: [unmapped_WoodedArea]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water RightsY: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BasementYN)): ?>
			<li>BasementYN: [unmapped_BasementYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>ListingTerms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->YearBuiltEffective)): ?>
			<li>Year Built Effective: [unmapped_YearBuiltEffective]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			<li>Number Of Separate Water Meters: [unmapped_NumberOfSeparateWaterMeters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolExpense)): ?>
			<li>Pool Expense: [unmapped_PoolExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool PrivateYN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->PublicSurveySection)): ?>
			<li>Public Survey Section: [unmapped_PublicSurveySection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Freqency: [feeinterval]</li>
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
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
	<li class="cell">
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
		
		<?php if( isset($single_property->unmapped->OpenParkingSpaces) || isset($single_property->unmapped->GarageYN) || isset($single_property->unmapped->AttachedGarageYN) ):?>
		
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
			<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached GarageYN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>