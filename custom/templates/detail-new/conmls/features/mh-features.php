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
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->HeatFuelType) || isset($single_property->utilities) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->fireplaces) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->unmapped->Middle_JrHighSchool) ):?>
	<li class="cell">
	
		<?php if( isset($single_property->unmapped->HeatFuelType) || isset($single_property->utilities) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->fireplaces)  ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->HeatFuelType)): ?>
				<li>Heat Fuel Type: [unmapped_HeatFuelType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities Available: [utilities]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>		
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>		
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>						
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->unmapped->Middle_JrHighSchool) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">

				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School : [gradeschool]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->highschool)): ?>
				<li>Highschool: [highschool]</li>
				<?php endif; ?>		
				<?php if( isset($single_property->unmapped->Middle_JrHighSchool)): ?>
				<li>Middle & Jr High School: [unmapped_Middle_JrHighSchool]</li>
				<?php endif; ?>				
			
		</ul>
		<?php endif; ?>
		
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
		
		<?php if( isset($single_property->unmapped->PropertyTax) || isset($single_property->taxyear) || isset($single_property->unmapped->TaxYearUpdatedDT) || isset($single_property->hoafee) || isset($single_property->feeinterval) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->PropertyTax)): ?> 
				<li>Property Tax: [unmapped_PropertyTax]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxYearUpdatedDT)): ?>
				<li>Tax Period: [unmapped_TaxYearUpdatedDT]</li>
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