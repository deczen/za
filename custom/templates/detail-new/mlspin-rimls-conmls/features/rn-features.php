<?php if($single_property->sourceid == 'CONMLS'): ?>

	<ul class="zy-features-grid">
		<?php if( isset($single_property->color) || isset($single_property->construction) || isset($single_property->roadtype) || isset($single_property->foundation) || isset($single_property->lotdescription) || isset($single_property->roofmaterial) || isset($single_property->appliances) || isset($single_property->unmapped->AtticDescription) || isset($single_property->unmapped->AtticYN) || isset($single_property->basementfeature) || isset($single_property->interiorfeatures) || isset($single_property->laundrylevel) || isset($single_property->unmapped->RoomsAdditional) || isset($single_property->unmapped->BankOwnedPropertyYN) || isset($single_property->waterfrontflag) || isset($single_property->restrictions) || isset($single_property->exclusions) || isset($single_property->unmapped->FloodZoneYN) || isset($single_property->unmapped->FuelTankLocation) || isset($single_property->unmapped->InLawApartmentYNP) || isset($single_property->laundrydscrp) || isset($single_property->unmapped->NearbyAmenities) || isset($single_property->pooldescription) || isset($single_property->possession) || isset($single_property->unmapped->RadonMitigationWaterYNU) || isset($single_property->unmapped->RadonMitigationAirYNU) || isset($single_property->unmapped->SewageSystem) || isset($single_property->unmapped->SignYN) || isset($single_property->asscpool) || isset($single_property->zoning) || isset($single_property->yearbuiltdescrp) || isset($single_property->amenities) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->EndUnitYN) || isset($single_property->unmapped->EnergyFeatures) || isset($single_property->unmapped->LevelsInUnit) || isset($single_property->unmapped->PotentialShortSaleYN) || isset($single_property->unmapped->RoadFrontageDescription) || isset($single_property->noofrestrooms) || isset($single_property->unmapped->CommercialCatagory) || isset($single_property->documentsonfile) || isset($single_property->location) || isset($single_property->unmapped->PresentUse)  ):?>
		<li class="cell">
			<h3 class="zy-feature-title">Property Features</h3>
			<ul class="zy-sub-list">

				
					<?php if( isset($single_property->color)): ?>
					<li>Color: [color]</li>
					<?php endif; ?>
					<?php if( isset($single_property->construction)): ?>
					<li>Construction: [construction]</li>
					<?php endif; ?>
					<?php if( isset($single_property->roadtype)): ?>
					<li>Driveway Type: [roadtype]</li>
					<?php endif; ?>
					<?php if( isset($single_property->foundation)): ?>
					<li>Foundation Type: [foundation]</li>
					<?php endif; ?>
					<?php if( isset($single_property->lotdescription)): ?>
					<li>Lot Description: [lotdescription]</li>
					<?php endif; ?>
					<?php if( isset($single_property->roofmaterial)): ?>
					<li>Roof Material: [roofmaterial]</li>
					<?php endif; ?>
					<?php if( isset($single_property->appliances)): ?>
					<li>Appliances: [appliances]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->AtticDescription)): ?>
					<li>Attic Description: [unmapped_AtticDescription]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->AtticYN)): ?>
					<li>Attic Yn: [unmapped_AtticYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->basementfeature)): ?>
					<li>Basement Feature: [basementfeature]</li>
					<?php endif; ?>
					<?php if( isset($single_property->interiorfeatures)): ?>
					<li>Interior Features: [interiorfeatures]</li>
					<?php endif; ?>
					<?php if( isset($single_property->laundrylevel)): ?>
					<li>Laundry Room Location: [laundrylevel]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->RoomsAdditional)): ?>
					<li>Rooms Additional: [unmapped_RoomsAdditional]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->BankOwnedPropertyYN)): ?>
					<li>Bank Owned Property Yn: [unmapped_BankOwnedPropertyYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->waterfrontflag)): ?>
					<li>Waterfront Yn: [waterfrontflag]</li>
					<?php endif; ?>
					<?php if( isset($single_property->restrictions)): ?>
					<li>Restrictions: [restrictions]</li>
					<?php endif; ?>
					<?php if( isset($single_property->exclusions)): ?>
					<li>Exclusions: [exclusions]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->FloodZoneYN)): ?>
					<li>Flood Zone Yn: [unmapped_FloodZoneYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->FuelTankLocation)): ?>
					<li>Fuel Tank Location: [unmapped_FuelTankLocation]</li>
					<?php endif; ?>
					<?php if( isset($single_property->warranty)): ?>
					<li>Warranty: [warranty]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->InLawApartmentYNP)): ?>
					<li>In Law Apartment: [unmapped_InLawApartmentYNP]</li>
					<?php endif; ?>
					<?php if( isset($single_property->laundrydscrp)): ?>
					<li>Laundry Room Info: [laundrydscrp]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->NearbyAmenities)): ?>
					<li>Nearby Amenities: [unmapped_NearbyAmenities]</li>
					<?php endif; ?>
					<?php if( isset($single_property->pooldescription)): ?>
					<li>Pool Description: [pooldescription]</li>
					<?php endif; ?>
					<?php if( isset($single_property->possession)): ?>
					<li>Possession: [possession]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->RadonMitigationWaterYNU)): ?>
					<li>Radon Mitigation Water Ynu: [unmapped_RadonMitigationWaterYNU]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->RadonMitigationAirYNU)): ?>
					<li>Radon Mitigation Air Ynu: [unmapped_RadonMitigationAirYNU]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->SewageSystem)): ?>
					<li>Sewage System: [unmapped_SewageSystem]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->SignYN)): ?>
					<li>Sign Yn: [unmapped_SignYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->asscpool)): ?>
					<li>Asscpool: [asscpool]</li>
					<?php endif; ?>
					<?php if( isset($single_property->zoning)): ?>
					<li>Zoning: [zoning]</li>
					<?php endif; ?>
					<?php if( isset($single_property->yearbuiltdescrp)): ?>
					<li>New Construction Type: [yearbuiltdescrp]</li>
					<?php endif; ?>
					<?php if( isset($single_property->amenities)): ?>
					<li>Association Amenities: [amenities]</li>
					<?php endif; ?>
					<?php if( isset($single_property->asscfeeincludes)): ?>
					<li>Association Fee Includes: [asscfeeincludes]</li>
					<?php endif; ?>
					<?php if( isset($single_property->condominiumname)): ?>
					<li>Complex Name: [condominiumname]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->EndUnitYN)): ?>
					<li>End Unit Yn: [unmapped_EndUnitYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->EnergyFeatures)): ?>
					<li>Energy Features: [unmapped_EnergyFeatures]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->LevelsInUnit)): ?>
					<li>Levels In Unit: [unmapped_LevelsInUnit]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->PotentialShortSaleYN)): ?>
					<li>Potential Short Sale Yn: [unmapped_PotentialShortSaleYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->RoadFrontageDescription)): ?>
					<li>Road Frontage Description: [unmapped_RoadFrontageDescription]</li>
					<?php endif; ?>
					<?php if( isset($single_property->noofrestrooms)): ?>
					<li>Restrooms Number Of: [noofrestrooms]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->CommercialCatagory)): ?>
					<li>Commercial Catagory: [unmapped_CommercialCatagory]</li>
					<?php endif; ?>
					<?php if( isset($single_property->documentsonfile)): ?>
					<li>Documents Available: [documentsonfile]</li>
					<?php endif; ?>
					<?php if( isset($single_property->location)): ?>
					<li>Location: [location]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->PresentUse)): ?>
					<li>Present Use: [unmapped_PresentUse]</li>
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
		
		<?php if( isset($single_property->unmapped->HeatFuelType) || isset($single_property->utilities)  ):?>
		<li class="cell">
			<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
			<ul class="zy-sub-list">

				
					<?php if( isset($single_property->unmapped->HeatFuelType)): ?>
					<li>Heat Fuel Type: [unmapped_HeatFuelType]</li>
					<?php endif; ?>
					<?php if( isset($single_property->utilities)): ?>
					<li>Utilities Available: [utilities]</li>
					<?php endif; ?>						
				
			</ul>
		</li>
		<?php endif; ?>

		<li class="cell">
			<?php if( isset($single_property->garageparking) || isset($single_property->unmapped->ParkingSpacesUncovered) ):?>
			<h3 class="zy-feature-title">Parking Information</h3>
			<ul class="zy-sub-list">
				
					<?php if( isset($single_property->garageparking)): ?>
					<li>Garage Parking Info: [garageparking]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->ParkingSpacesUncovered)): ?>
					<li>Parking Spaces Uncovered: [unmapped_ParkingSpacesUncovered]</li>
					<?php endif; ?>
				
			</ul>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped_PropertyTax) || isset($single_property->hoafee) || isset($single_property->feeinterval) ):?>
			<h3 class="zy-feature-title">Taxes, Fees</h3>
			<ul class="zy-sub-list">
				
					<?php if( isset($single_property->unmapped->PropertyTax)): ?> 
					<li>Property Tax: [unmapped_PropertyTax]</li>
					<?php endif; ?>
					<?php if( isset($single_property->hoafee)): ?>
					<li>Hoa Fee Amount: [hoafee]</li>
					<?php endif; ?>
					<?php if( isset($single_property->feeinterval)): ?>
					<li>Hoa Fee Frequency: [feeinterval]</li>
					<?php endif; ?>
				
			</ul>
			<?php endif; ?>
		</li>					

	</ul>

<?php elseif($single_property->sourceid == 'RIMLS'): ?>

	<ul class="zy-features-grid">
		<?php if( isset($single_property->nounits) || isset($single_property->foundation) || isset($single_property->construction) || isset($single_property->unmapped->BusinessType) || isset($single_property->pooldescription) || isset($single_property->waterfrontflag) || isset($single_property->waterfront) || isset($single_property->unmapped->Inclusions) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->LandLeaseYN) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->assocsecurity) || isset($single_property->possession) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->furnished) || isset($single_property->leaseterms) || isset($single_property->rentfeeincludes) || isset($single_property->laundryfeatures) ):?>
		<li class="cell">
			<h3 class="zy-feature-title">Property Features</h3>	
			<ul class="zy-sub-list">
			
					<?php if( isset($single_property->nounits)): ?>
					<li>Unit Count: [nounits]</li>
					<?php endif; ?>
					<?php if( isset($single_property->foundation)): ?>
					<li>Foundation: [foundation]</li>
					<?php endif; ?>
					<?php if( isset($single_property->construction)): ?>
					<li>Construction: [construction]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->BusinessType)): ?>
					<li>Business Type: [unmapped_BusinessType]</li>
					<?php endif; ?>
					<?php if( isset($single_property->pooldescription)): ?>
					<li>Pool Description: [pooldescription]</li>
					<?php endif; ?>
					<?php if( isset($single_property->waterfrontflag)): ?>
					<li>Waterfront Flag: [waterfrontflag]</li>
					<?php endif; ?>
					<?php if( isset($single_property->waterfront)): ?>
					<li>Waterfront: [waterfront]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->Inclusions)): ?>
					<li>Equipment: [unmapped_Inclusions]</li>
					<?php endif; ?>
					<?php if( isset($single_property->interiorfeatures)): ?>
					<li>Interior: [interiorfeatures]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->LandLeaseYN)): ?>
					<li>LandLease: [unmapped_LandLeaseYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
					<li>Adult Community: [unmapped_SeniorCommunityYN]</li>
					<?php endif; ?>
					<?php if( isset($single_property->assocsecurity)): ?>
					<li>Security: [assocsecurity]</li>
					<?php endif; ?>
					<?php if( isset($single_property->possession)): ?>
					<li>Possession: [possession]</li>
					<?php endif; ?>
					<?php if( isset($single_property->bldgsqfeet)): ?>
					<li>Building Area: [bldgsqfeet]</li>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
					<li>Number Of Levels: [unmapped_StoriesTotal]</li>
					<?php endif; ?>
					<?php if( isset($single_property->furnished)): ?>
					<li>Furnished: [furnished]</li>
					<?php endif; ?>
					<?php if( isset($single_property->leaseterms)): ?>
					<li>Lease terms: [leaseterms]</li>
					<?php endif; ?>
					<?php if( isset($single_property->rentfeeincludes)): ?>
					<li>Rent Fee Includes: [rentfeeincludes]</li>
					<?php endif; ?>
					<?php if( isset($single_property->laundryfeatures)): ?>
					<li>Laundry Features: [laundryfeatures]</li>
					<?php endif; ?>
					
			</ul>
		</li>						
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->SpaFeatures) ):?>
		<li class="cell">
			<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
			<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
				<li>Fireplaces: [unmapped_FireplaceFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
				<li>Window Features: [unmapped_WindowFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SpaFeatures)): ?>
				<li>Spa: [unmapped_SpaFeatures]</li>
				<?php endif; ?>
				
			</ul>
		</li>
		<?php endif; ?>

		<li class="cell">
		
			<?php if( isset($single_property->parkingfeature) || isset($single_property->unmapped->AttachedGarageYN) ):?>
			<h3 class="zy-feature-title">Parking Information</h3>
			<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<li>Attached Garage: [unmapped_AttachedGarageYN]</li>
				<?php endif; ?>
				
			</ul>
			<?php endif; ?>

			<?php if( isset($single_property->taxes) || isset($single_property->unmapped->TaxLot) ):?>
			<h3 class="zy-feature-title">Taxes, Fees</h3>
			<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxLot)): ?>
				<li>TaxLot: [unmapped_TaxLot]</li>
				<?php endif; ?>	
				
			</ul>
			<?php endif; ?>
			
		</li>

	</ul>

<?php else: ?>

	<ul class="zy-features-grid">
		<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->rntype) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->laundryfeatures) || isset($single_property->unitlevel) || isset($single_property->petsallowed) || isset($single_property->waterviewfeatures) || isset($single_property->waterfront)  ):?>
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
					<?php if( isset($single_property->unitlevel)): ?>
					<li>Unit Level: [unitlevel]</li>
					<?php endif; ?>
					<?php if( isset($single_property->waterviewfeatures)): ?>
					<li>Waterview: [waterviewfeatures]</li>
					<?php endif; ?>
					<?php if( isset($single_property->waterfront)): ?>
					<li>Waterfront: [waterfront]</li>
					<?php endif; ?>
				
			</ul>
		</li>						
		<?php endif; ?>
		
		<?php /*if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
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
				
			</ul>
		</li>
		<?php endif;*/ ?>

		<li class="cell">
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
					<li>Road Type : [roadtype]</li>
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
	
<?php endif; ?>