<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->rntype) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->laundryfeatures) || isset($single_property->unitlevel) || isset($single_property->petsallowed) || isset($single_property->waterviewfeatures) || isset($single_property->waterfront) ||
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
			<?php if( isset($single_property->rntype)): ?>
			<li>Rental Style: [rntype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitlevel)): ?>
			<li>Unit Level: [unitlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cultivationacres)): ?>
			<li>Cultivation Acres: [cultivationacres]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<li>Net Operatinginc: [netoperatinginc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Year Built Details: [yearbuiltdescrp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->possession)): ?>
			<li>Possession: [possession]</li>
			<?php endif; ?>
			<?php if( isset($single_property->totalunits)): ?>
			<li>Total Units: [totalunits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseAmount)): ?>
			<li>Lease Amount: [unmapped_LeaseAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
			<li>Pool Private YN: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FuelExpense)): ?>
			<li>Fuel Expense: [unmapped_FuelExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FurnitureReplacementExpense)): ?>
			<li>Furniture Replacement Expense: [unmapped_FurnitureReplacementExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileHomeRemainsYN)): ?>
			<li>Mobile Home Remains YN: [unmapped_MobileHomeRemainsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
			<li>Operating Expense: [unmapped_OperatingExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseRenewalOptionYN)): ?>
			<li>Lease Renewal Option YN: [unmapped_LeaseRenewalOptionYN]</li>
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
			<?php if( isset($single_property->unmapped->LicensesExpense)): ?>
			<li>Licenses Expense: [unmapped_LicensesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MaintenanceExpense)): ?>
			<li>Maintenance Expense: [unmapped_MaintenanceExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HabitableResidenceYN)): ?>
			<li>Habi table Residence YN: [unmapped_HabitableResidenceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PestControlExpense)): ?>
			<li>Pest Control Expense: [unmapped_PestControlExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetEntireListingDisplayYN)): ?>
			<li>Internet EntireListing Display YN: [unmapped_InternetEntireListingDisplayYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->InternetAutomatedValuationDisplayY)): ?>
			<li>Internet Automated Valuation Display YN: [unmapped_InternetAutomatedValuationDisplayY]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsYN)): ?>
			<li>Irrigation Water Rights YN: [unmapped_IrrigationWaterRightsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BasementYN)): ?>
			<li>Basement YN: [unmapped_BasementYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CapRate)): ?>
			<li>Cap Rate: [unmapped_CapRate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
			<li>Tax Legal Description: [unmapped_TaxLegalDescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SyndicationRemarks)): ?>
			<li>Syndication Remarks: [unmapped_SyndicationRemarks]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->PublicSurveySection)): ?>
			<li>Public Survey Section: [unmapped_PublicSurveySection]</li>
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

	<li class="cell">
		<?php if( isset($single_property->unmapped->FireplaceYN) || isset($single_property->fireplaces) || isset($single_property->cooling)  || isset($single_property->heating) || isset($single_property->sewer) || 
				  isset($single_property->water) ):?>
		
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype)  || isset($single_property->unmapped->OpenParkingSpaces)  || isset($single_property->unmapped->AttachedGarageYN) ):?>
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
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->hoafee) || isset($single_property->taxyear) || isset($single_property->taxes)  || isset($single_property->unmapped->NewTaxesExpense) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) ):?>
		
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewTaxesExpense)): ?>
			<li>New Taxes Expense: [unmapped_NewTaxesExpense]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
			<li>Tax Other Annual Assessment Amount: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Deposits, Inclusions</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->firstmonreqd)): ?>
				<li>1st Month: [firstmonreqd]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lastmonreqd)): ?>
				<li>Last Month: [lastmonreqd]</li>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<li>Secutity: [secdeposit]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<li>Rent Includes: [rentfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>

<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) || isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) || isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) || isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->mbrdimen)): ?>
				<li>Size: [mbrdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<li>Level: [mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<li>Features: [mbrdscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed2dimen)): ?>
				<li>Size: [bed2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<li>Level: [bed2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2dscrp)): ?>
				<li>Features: [bed2dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed3dimen)): ?>
				<li>Size: [bed3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<li>Level: [bed3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3dscrp)): ?>
				<li>Features: [bed3dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed4dimen)): ?>
				<li>Size: [bed4dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<li>Level: [bed4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4dscrp)): ?>
				<li>Features: [bed4dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed5dimen)): ?>
				<li>Size: [bed5dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<li>Level: [bed5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5dscrp)): ?>
				<li>Features: [bed5dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth1dimen)): ?>
				<li>Size: [bth1dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<li>Level: [bth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<li>Features: [bth1dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth2dimen)): ?>
				<li>Size: [bth2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<li>Level: [bth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<li>Features: [bth2dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth3dimen)): ?>
				<li>Size: [bth3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<li>Level: [bth3level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<li>Features: [bth3dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->kitdimen)): ?>
				<li>Size: [kitdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<li>Level: [kitlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Features: [kitdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->famdimen)): ?>
				<li>Size: [famdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<li>Level: [famlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<li>Features: [famdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->livdimen)): ?>
				<li>Size: [livdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<li>Level: [livlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Features: [livdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->dindimen)): ?>
				<li>Size: [dindimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<li>Level: [dinlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Features: [dindscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<li>Size: [oth1DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<li>Level: [oth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<li>Features: [oth1DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>