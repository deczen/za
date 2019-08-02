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
					<li>Fasement Feature: [basementfeature]</li>
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
		<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
		<li class="cell">
			<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) ):?>
			<h3 class="zy-feature-title">Space, #Units, SQ FT</h3>
			<ul class="zy-sub-list">

				
					<?php if( isset($single_property->mauunits) || isset($single_property->mafbldgsf)): ?>
					<li>Manufacturing</td>
						<td class="zy-listing__table__label"><span>[mauunits]</span>: [mafbldgsf]</li>
					<?php endif; ?>
					<?php if( isset($single_property->ofuunits) || isset($single_property->offbldgsf)): ?>
					<li>Office</td>
						<td class="zy-listing__table__label"><span>[ofuunits]</span>: [offbldgsf]</li>
					<?php endif; ?>
					<?php if( isset($single_property->rsuunits) || isset($single_property->rsfbldgsf)): ?>
					<li>Residential</td>
						<td class="zy-listing__table__label"><span>[rsuunits]</span>: [rsfbldgsf]</li>
					<?php endif; ?>
					<?php if( isset($single_property->reuunits) || isset($single_property->refbldgsf)): ?>
					<li>Retail</td>
						<td class="zy-listing__table__label"><span>[reuunits]</span>: [refbldgsf]</li>
					<?php endif; ?>
					<?php if( isset($single_property->wauunits) || isset($single_property->wafbldgsf)): ?>
					<li>Warehouse</td>
						<td class="zy-listing__table__label"><span>[wauunits]</span>: [wafbldgsf]</li>
					<?php endif; ?>
				
			</ul>
			<?php endif; ?>
			
			<?php if( isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
			<h3 class="zy-feature-title">Parking Information</h3>
			<ul class="zy-sub-list">
				
					<?php if( isset($single_property->parkingspaces)): ?>
					<li>Parking Spaces: [parkingspaces]</li>
					<?php endif; ?>
					<?php if( isset($single_property->parkingfeature)): ?>
					<li>Parking Features: [parkingfeature]</li>
					<?php endif; ?>
				
			</ul>
			<?php endif; ?>
			
		</li>						
		<?php endif; ?>

		<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities)  ):?>
		<li class="cell">
			<h3 class="zy-feature-title">Property Details</h3>
			<ul class="zy-sub-list">

				
					<?php if( isset($single_property->basement)): ?>
					<li>Basement: [basement]</li>
					<?php endif; ?>
					<?php if( isset($single_property->citype)): ?>
					<li>Commercial Type: [citype]</li>
					<?php endif; ?>
					<?php if( isset($single_property->construction)): ?>
					<li>Construction: [construction]</li>
					<?php endif; ?>
					<?php if( isset($single_property->dividable)): ?>
					<li>Dividable: [dividable]</li>
					<?php endif; ?>
					<?php if( isset($single_property->noofdrivingdoors)): ?>
					<li>Drive in Doors: [noofdrivingdoors]</li>
					<?php endif; ?>
					<?php if( isset($single_property->elevator)): ?>
					<li>Elevator: [elevator]</li>
					<?php endif; ?>
					<?php if( isset($single_property->expandable)): ?>
					<li>Expandable: [expandable]</li>
					<?php endif; ?>
					<?php if( isset($single_property->facilities)): ?>
					<li>Facilities: [facilities]</li>
					<?php endif; ?>
					<?php if( isset($single_property->handicapaccess)): ?>
					<li>Handicap Access: [handicapaccess]</li>
					<?php endif; ?>
					<?php if( isset($single_property->noofloadingdocks)): ?>
					<li>Loading Docks : [noofloadingdocks]</li>
					<?php endif; ?>
					<?php if( isset($single_property->noofrestrooms)): ?>
					<li>Restrooms: [noofrestrooms]</li>
					<?php endif; ?>
					<?php if( isset($single_property->sprinklers)): ?>
					<li>Sprinklers: [sprinklers]</li>
					<?php endif; ?>
					<?php if( isset($single_property->utilities)): ?>
					<li>Utilities: [utilities]</li>
					<?php endif; ?>
				
				
			</ul>
		</li>
		<?php endif; ?>

		<li class="cell">
			
			<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
			<h3 class="zy-feature-title">Taxes & Considerations</h3>
			<ul class="zy-sub-list">
				
					<?php if( isset($single_property->taxes)): ?>
					<li>Tax Amount ($): [taxes]</li>
					<?php endif; ?>
					<?php if( isset($single_property->taxyear)): ?>
					<li>Tax Year: [taxyear]</li>
					<?php endif; ?>
					<?php if( isset($single_property->zoning)): ?>
					<li>Zoning Code: [zoning]</li>
					<?php endif; ?>
					<?php if( isset($single_property->zonedescription)): ?>
					<li>Zoning Description: [zonedescription]</li>
					<?php endif; ?>
					<?php if( isset($single_property->hoafee)): ?>
					<li>Association Fee ($): [hoafee]</li> <!-- not done -->
					<?php endif; ?>
					<?php if( isset($single_property->asscfeeincludes)): ?>
					<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
					<?php endif; ?>
				
			</ul>
			<?php endif; ?>
		</li>					

	</ul>
	
<?php endif; ?>