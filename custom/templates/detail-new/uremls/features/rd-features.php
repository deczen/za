<ul class="zy-features-grid">

	<?php if( 
		isset($single_property->amenities) || 
		isset($single_property->unmapped->hascommunitypool) || 
		isset($single_property->exclusions) || 
		isset($single_property->unmapped->ownertype) || 
		isset($single_property->asscpool) || 
		isset($single_property->possession) || 
		isset($single_property->unmapped->schoolother) || 
		isset($single_property->unmapped->hasspa) || 
		isset($single_property->unmapped->telcom) || 
		isset($single_property->termsfeature) || 
		isset($single_property->utilities) || 
		isset($single_property->water) || 
		isset($single_property->unmapped->watershares) || 
		isset($single_property->unmapped->yearremodeled) || 
		isset($single_property->zoning) || 
		isset($single_property->unmapped->zoningchar) ||
		
		isset($single_property->area) ||
		isset($single_property->unmapped->LivingArea) ||
		isset($single_property->construction) ||
		isset($single_property->unmapped->ConstStatus) ||
		isset($single_property->unmapped->CoveredSpaces) ||
		isset($single_property->unmapped->FrontageLength) ||
		isset($single_property->unmapped->HorseYN) ||
		isset($single_property->lotdescription) ||
		isset($single_property->unmapped->LotSizeDimensions) ||
		isset($single_property->unmapped->MobileLength) ||
		isset($single_property->unmapped->MobileWidth) ||
		isset($single_property->equiplistavail) ||
		isset($single_property->unmapped->PatioAndPorchFeatures) ||
		isset($single_property->roofmaterial) ||
		isset($single_property->unmapped->SpaYN) ||
		isset($single_property->landdesc) ||
		isset($single_property->unmapped->Vegetation) ||
		isset($single_property->unmapped->View) ||
		isset($single_property->unmapped->ViewYN) ||
		isset($single_property->waterfrontflag) ||
		isset($single_property->unmapped->AboveGradeFinishedArea) ||
		isset($single_property->appliances) ||
		isset($single_property->unmapped->BasementFinished) ||
		isset($single_property->unmapped->BathroomsPartial) ||
		isset($single_property->unmapped->BuildingAreaTotal) ||
		isset($single_property->interiorfeatures) ||
		isset($single_property->laundryfeatures) ||
		isset($single_property->unmapped->MainLevelBedrooms) ||
		isset($single_property->unmapped->MasterBedroomLevel) ||
		isset($single_property->totalrooms) ||
		isset($single_property->unmapped->WindowFeatures) ||
		isset($single_property->unmapped->CapRate) ||
		isset($single_property->unmapped->CrossStreet) ||
		isset($single_property->unmapped->CurrentUse) ||
		isset($single_property->unmapped->Inclusions) ||
		isset($single_property->unmapped->IrrigationWaterRightsAcres) ||
		isset($single_property->unmapped->LeaseAmount) ||
		isset($single_property->unmapped->LeaseConsideredYN) ||
		isset($single_property->sitecondition) ||
		isset($single_property->water) ||
		isset($single_property->zoning) ||
		isset($single_property->unmapped->ZoningDescription)
		
	):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

		<?php if( isset($single_property->amenities)): ?>
		<li>Amenities: [amenities]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->hascommunitypool)): ?>
		<li>Community Pool: [unmapped_hascommunitypool]</li>
		<?php endif; ?>
		<?php if( isset($single_property->exclusions)): ?>
		<li>Exclusions: [exclusions]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->ownertype)): ?>
		<li>Owner Type: [unmapped_ownertype]</li>
		<?php endif; ?>
		<?php if( isset($single_property->asscpool)): ?>
		<li>Pool: [asscpool]</li>
		<?php endif; ?>
		<?php if( isset($single_property->possession)): ?>
		<li>Possession: [possession]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->schoolother)): ?>
		<li>School Other: [unmapped_schoolother]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->hasspa)): ?>
		<li>Spa: [unmapped_hasspa]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->telcom)): ?>
		<li>Telecommunications: [unmapped_telcom]</li>
		<?php endif; ?>
		<?php if( isset($single_property->termsfeature)): ?>
		<li>Terms: [termsfeature]</li>
		<?php endif; ?>
		<?php if( isset($single_property->utilities)): ?>
		<li>Utilities: [utilities]</li>
		<?php endif; ?>
		<?php if( isset($single_property->water)): ?>
		<li>Water: [water]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->watershares)): ?>
		<li>Water Shares: [unmapped_watershares]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->yearremodeled)): ?>
		<li>Year Remodeled: [unmapped_yearremodeled]</li>
		<?php endif; ?>
		<?php if( isset($single_property->zoning)): ?>
		<li>Zoning: [zoning]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->zoningchar)): ?>
		<li>Zoning Code: [unmapped_zoningchar]</li>
		<?php endif; ?>


		<?php if( isset($single_property->unmapped->LivingArea)): ?>
			<li>SQFT: [unmapped_LivingArea]</li>
		<?php endif; ?>
		<?php if( isset($single_property->area)): ?>
			<li>Area: [area]</li>
		<?php endif; ?>			
		<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->ConstStatus)): ?>
			<li>Construction Status: [unmapped_ConstStatus]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
			<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->FrontageLength)): ?>
			<li>Frontage Length: [unmapped_FrontageLength]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->HorseYN)): ?>
			<li>Horse Property Y/N: [unmapped_HorseYN]</li>
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
		<?php if( isset($single_property->equiplistavail)): ?>
			<li>Other Equipment: [equiplistavail]</li>
		<?php endif; ?>		
		<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->SpaYN)): ?>
			<li>Spa Y/N: [unmapped_SpaYN]</li>
		<?php endif; ?>				
		<?php if( isset($single_property->landdesc)): ?>
			<li>Topography: [landdesc]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->Vegetation)): ?>
			<li>Vegetation: [unmapped_Vegetation]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->ViewYN)): ?>
			<li>View Y/N: [unmapped_ViewYN]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfrontflag Y/N: [waterfrontflag]</li>
		<?php endif; ?>				
		<?php if( isset($single_property->unmapped->AboveGradeFinishedArea)): ?>
			<li>Above Grade Finished Area: [unmapped_AboveGradeFinishedArea]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->BasementFinished)): ?>
			<li>Basement Finished Percentage: [unmapped_BasementFinished]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->BathroomsPartial)): ?>
			<li>Bathrooms Partial: [unmapped_BathroomsPartial]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Features: [laundryfeatures]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->MainLevelBedrooms)): ?>
			<li>Main Level Bedrooms: [unmapped_MainLevelBedrooms]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->MasterBedroomLevel)): ?>
			<li>Master Bedroom Level: [unmapped_MasterBedroomLevel]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->totalrooms)): ?>
			<li>Rooms Total: [totalrooms]</li>
		<?php endif; ?>				
		<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
			<li>Window Features: [unmapped_WindowFeatures]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->CapRate)): ?>
			<li>Capitalization Rate: [unmapped_CapRate]</li>
		<?php endif; ?>
		<?php if( isset($single_property->unmapped->CrossStreet)): ?>
			<li>Cross Street: [unmapped_CrossStreet]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->CurrentUse)): ?>
			<li>Current Use: [unmapped_CurrentUse]</li>
		<?php endif; ?>	
		<?php if( isset($single_property->unmapped->Inclusions)): ?>
			<li>Inclusions: [unmapped_Inclusions]</li>
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
		<?php if( isset($single_property->sitecondition)): ?>
			<li>Property Condition: [sitecondition]</li>
		<?php endif; ?>				
		<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
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
	

	<?php if( isset($single_property->unmapped->capcarport) || isset($single_property->unmapped->deck) || isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->unmapped->patio) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) /*|| isset($single_property->style)*/ || isset($single_property->garagespaces) || isset($single_property->garageparking) || isset($single_property->parkingspaces) || isset($single_property->taxes) || isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->maintfree) ):?>
	
	<li class="cell">		

		<?php if( isset($single_property->unmapped->capcarport) || isset($single_property->unmapped->deck) || isset($single_property->unmapped->driveway) || isset($single_property->exterior) || isset($single_property->exteriorfeatures) || isset($single_property->frontage) || isset($single_property->landdesc) || isset($single_property->unmapped->dimback) || isset($single_property->unmapped->dimside) || isset($single_property->lotdescription) || isset($single_property->unmapped->patio) || isset($single_property->roofmaterial) || isset($single_property->unmapped->storage) /*|| isset($single_property->style)*/ ):?>
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->capcarport)): ?>
				<li>Carport Capacity: [unmapped_capcarport]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->deck)): ?>
				<li>Decks: [unmapped_deck]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->driveway)): ?>
				<li>Driveway: [unmapped_driveway]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior Building Materials: [exterior]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<li>Frontage Facing: [frontage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<li>Landscaping: [landdesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimback)): ?>
				<li>Length In Feet Of Back Of Property: [unmapped_dimback]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dimside)): ?>
				<li>Length In Feet Of Side Of Property: [unmapped_dimside]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->patio)): ?>
				<li>Patios: [unmapped_patio]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Features: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->storage)): ?>
				<li>Storage: [unmapped_storage]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
			
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

			<?php //----Property Type-->  Residential Lease ------------------------------ ?>
			<?php //----Property Type-->  Commercial Sale ------------------------------ ?>
			<?php //----Property Type-->  Commercial Lease ------------------------------ ?>
		
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
		
		<?php if( 
			isset($single_property->taxes) || 
			isset($single_property->homeownassociation) || 
			isset($single_property->hoafee) || 
			isset($single_property->asscfeeincludes) || 
			isset($single_property->unmapped->maintfree) ||
			isset($single_property->feeinterval)
			):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Hoa: [homeownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Inclusions: [asscfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->maintfree)): ?>
				<li>Maintenance Fee: [unmapped_maintfree]</li> <!-- not done -->
				<?php endif; ?>
				
			<?php if( isset($single_property->feeinterval)): ?>
				<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>					
			
		</ul>
		<?php endif; ?>
		
	</li>	
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->aircondition) || isset($single_property->basement) || isset($single_property->unmapped->basmntfin) || isset($single_property->flooring) || isset($single_property->heating) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->levbbed) || isset($single_property->unmapped->levbbathfull) || isset($single_property->unmapped->levbbathhalf) || isset($single_property->unmapped->levbsqf) || isset($single_property->unmapped->levbbathtq) || isset($single_property->unmapped->lev1bed) || isset($single_property->unmapped->lev1bathfull) || isset($single_property->unmapped->lev1bathhalf) || isset($single_property->unmapped->lev1sqf) || isset($single_property->unmapped->lev1bathtq) || isset($single_property->unmapped->lev2bed) || isset($single_property->unmapped->lev2bathfull) || isset($single_property->unmapped->lev2bathhalf) || isset($single_property->unmapped->lev2sqf) || isset($single_property->unmapped->lev2bathtq) || isset($single_property->unmapped->lev3bed) || isset($single_property->unmapped->lev3bathfull) || isset($single_property->unmapped->lev3bathhalf) || isset($single_property->unmapped->lev3sqf) || isset($single_property->unmapped->lev3bathtq) || isset($single_property->unmapped->lev4bed) || isset($single_property->unmapped->lev4bathfull) || isset($single_property->unmapped->lev4bathhalf) || isset($single_property->unmapped->lev4sqf) || isset($single_property->unmapped->lev4bathtq) || isset($single_property->nobaths) || isset($single_property->unmapped->totkitchenb) || isset($single_property->unmapped->totden) || isset($single_property->unmapped->totfamroom) || isset($single_property->fireplaces) || isset($single_property->unmapped->totdiningf) || isset($single_property->unmapped->nolivinglevels) || isset($single_property->unmapped->totkitchenk) || isset($single_property->unmapped->totlaundry) || isset($single_property->unmapped->totdinings) || isset($single_property->unmapped->windows) ):?>
		
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Conditioning: [aircondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->basmntfin)): ?>
				<li>Basement Finished Percentage: [unmapped_basmntfin]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor Coverings: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating Features: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbed)): ?>
				<li>Level Basement Bedrooms: [unmapped_levbbed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathfull)): ?>
				<li>Level Basement Full Baths: [unmapped_levbbathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathhalf)): ?>
				<li>Level Basement Half Baths: [unmapped_levbbathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbsqf)): ?>
				<li>Level Basement Sq Ft: [unmapped_levbsqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->levbbathtq)): ?>
				<li>Level Basement Three Quarter Baths: [unmapped_levbbathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bed)): ?>
				<li>Level1 Bedrooms: [unmapped_lev1bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathfull)): ?>
				<li>Level1 Bedrooms: [unmapped_lev1bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathhalf)): ?>
				<li>Level1 Half Baths: [unmapped_lev1bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1sqf)): ?>
				<li>Level1 Sq Ft: [unmapped_lev1sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev1bathtq)): ?>
				<li>Level1 Three Quarter Baths: [unmapped_lev1bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bed)): ?>
				<li>Level2 Bedrooms: [unmapped_lev2bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathfull)): ?>
				<li>Level2 Full Baths: [unmapped_lev2bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathhalf)): ?>
				<li>Level2 Half Baths: [unmapped_lev2bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2sqf)): ?>
				<li>Level2 Sq Ft: [unmapped_lev2sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev2bathtq)): ?>
				<li>Level2 Three Quarter Baths: [unmapped_lev2bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bed)): ?>
				<li>Level3 Bedrooms: [unmapped_lev3bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathfull)): ?>
				<li>Level3 Full Baths: [unmapped_lev3bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathhalf)): ?>
				<li>Level3 Half Baths: [unmapped_lev3bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3sqf)): ?>
				<li>Level3 Sq Ft: [unmapped_lev3sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev3bathtq)): ?>
				<li>Level3 Three Quarter Baths: [unmapped_lev3bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bed)): ?>
				<li>Level4 Bedrooms: [unmapped_lev4bed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathfull)): ?>
				<li>Level4 Full Baths: [unmapped_lev4bathfull]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathhalf)): ?>
				<li>Level4 Half Baths: [unmapped_lev4bathhalf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4sqf)): ?>
				<li>Level4 Sq Ft: [unmapped_lev4sqf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lev4bathtq)): ?>
				<li>Level4 Three Quarter Baths: [unmapped_lev4bathtq]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->mbrlevel)): ?>
				<li>Master Bedrooms: [unmapped_mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobaths)): ?>
				<li>Total Baths: [nobaths]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenb)): ?>
				<li>Total Breakfast Bars: [unmapped_totkitchenb]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totden)): ?>
				<li>Total Dens: [unmapped_totden]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totfamroom)): ?>
				<li>Total Family Rooms: [unmapped_totfamroom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Total Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdiningf)): ?>
				<li>Total Formal Dining Rooms: [unmapped_totdiningf]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->nolivinglevels)): ?>
				<li>Total Formal Living Rooms: [unmapped_nolivinglevels]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totkitchenk)): ?>
				<li>Total Kitchens: [unmapped_totkitchenk]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totlaundry)): ?>
				<li>Total Laundry Rooms: [unmapped_totlaundry]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->totdinings)): ?>
				<li>Total Semi Formal Dining Rooms: [unmapped_totdinings]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->windows)): ?>
				<li>Windows: [unmapped_windows]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( 
			isset($single_property->gradeschool) || 
			isset($single_property->highschool) || 
			isset($single_property->middleschool) || 
			isset($single_property->unmapped->HighSchoolDistrict)
			):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
				<li>Elimentary School: [gradeschool]</li>
			<?php endif; ?>
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
				<li>Power Production Solar Year Install: [unmapped_PowerProductionSolarYearInstall]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
			<?php endif; ?>
			
			
			<?php //----Property Type-->  Commercial Sale ------------------------------ ?>
			<?php //----Property Type-->  Commercial Lease ------------------------------ ?>
			<?php //----Property Type-->  Commercial Sale Commercial Lease ------------------------------ ?>
				
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