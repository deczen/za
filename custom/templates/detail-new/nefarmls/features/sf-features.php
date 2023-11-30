<ul class="zy-features-grid">
	<?php if( 
			isset($single_property->amenities) || 
			isset($single_property->basement) || 
			isset($single_property->exteriorfeatures) || 
			isset($single_property->exterior) || 
			isset($single_property->fireplaces) || 
			isset($single_property->flooring) /*|| isset($single_property->style)*/ || 
			isset($single_property->waterviewfeatures) ||
			isset($single_property->waterfront) ||
			isset($single_property->unmapped->{"Approx Parcel Size"}) ||
			isset($single_property->squarefeet) ||
			isset($single_property->unmapped->{"Legal Name of Subdiv"}) ||
			isset($single_property->nobaths) ||
			isset($single_property->nofullbaths) ||
			isset($single_property->nohalfbaths) ||
			isset($single_property->bathtype) ||
			isset($single_property->unmapped->Bedrooms) ||
			isset($single_property->unmapped->Fencing) ||
			isset($single_property->lotdescription) ||
			isset($single_property->unmapped->{"Navigable to Ocean Y/N"}) ||
			isset($single_property->pooldescription) ||
			isset($single_property->unmapped->{"Road Frontage"}) ||
			isset($single_property->roofmaterial) ||
			isset($single_property->unmapped->Structure)||
			isset($single_property->waterfrontflag) ||
			isset($single_property->appliances) ||
			isset($single_property->unmapped->{"Additional Rooms"}) ||
			isset($single_property->unmapped->{"All Bedrooms Conform"}) ||
			isset($single_property->unmapped->{"Common/ClubAmenities"}) ||
			isset($single_property->unmapped->Country) ||
			isset($single_property->documentsonfile) ||
			isset($single_property->adultcommunity) ||
			isset($single_property->unmapped->{"Historic Area"}) ||
			isset($single_property->unmapped->{"Misc Exterior"}) ||
			isset($single_property->unmapped->{"Legal Name of Subdiv"}) ||
			isset($single_property->unmapped->{"Appx. Lot Dimensions"}) ||
			isset($single_property->homeownassociation) ||
			isset($single_property->unmapped->{"New Construction Y/N"}) ||
			isset($single_property->unmapped->Occupancy) ||
			isset($single_property->specialfinancing) ||
			isset($single_property->zoning) ||
			isset($single_property->squarefeetsource) ||
			isset($single_property->unmapped->{"Property Attached YN"}) ||
			isset($single_property->customtype) ||
			isset($single_property->unmapped->{"Unit #"}) ||
			isset($single_property->unmapped->Type) ||
			isset($single_property->unmapped->{"Development Status"}) ||
			isset($single_property->documentsonfile) ||
			isset($single_property->unmapped->Occupancy) ||
			isset($single_property->unmapped->{"Present Use/Zoned"}) ||
			isset($single_property->squarefeetsource) ||
			isset($single_property->unmapped->{"Type/Potential Use"}) ||
			isset($single_property->unmapped->{"Building Stories"}) ||
			isset($single_property->lotdescription) ||
			isset($single_property->unmapped->{"Lot Location"}) ||
			isset($single_property->unmapped->{"Road Frontage"}) ||
			
			isset($single_property->butype) ||
			isset($single_property->unmapped->HVAC) ||
			isset($single_property->unmapped->{"Total Bldg SqFt"}) ||
			isset($single_property->unmapped->{"Number of Buildings"}) ||
			isset($single_property->unmapped->Type) ||
			isset($single_property->unmapped->Country) ||
			isset($single_property->unmapped->{"Current Zoning"}) ||
			isset($single_property->unmapped->{"Development Status"}) ||
			isset($single_property->unmapped->documentsonfile) ||
			isset($single_property->unmapped->{"Max Base Lease Rate"}) ||
			isset($single_property->unmapped->{"Min Base Lease Rate"}) ||
			isset($single_property->squarefeetsource) ||
			isset($single_property->unmapped->{"Tenant Expenses"}) ||
			isset($single_property->unmapped->{"Number of Units"}) ||
			isset($single_property->unmapped->HVAC) ||
			isset($single_property->amenities) ||
			isset($single_property->unmapped->{"Total Bldg SqFt"}) ||
			isset($single_property->unmapped->{"Building Stories"}) ||
			isset($single_property->lotdescription) ||
			isset($single_property->unmapped->{"Lot Location"}) ||
			isset($single_property->location) ||
			isset($single_property->documentsonfile)
				
			):?>
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
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php /*if( isset($single_property->style)): ?>
			<li>House Style: [style]</li>
			<?php endif;*/ ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->{"Approx Parcel Size"})): ?>
				<li>Approx Parcel Size: [unmapped_Approx Parcel Size]</li>
			<?php endif; ?>
			<?php if( isset($single_property->squarefeet)): ?>
				<li>Square Feets: [squarefeet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Legal Name of Subdiv"})): ?>
				<li>Legal Name of Subdiv: [unmapped_Legal Name of Subdiv]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobaths)): ?>
				<li>Bath: [nobaths]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->nofullbaths)): ?>
				<li>No of Full Baths: [nofullbaths]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->nohalfbaths)): ?>
				<li>No of Half Baths: [nohalfbaths]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->bathtype)): ?>
				<li>Bath Type: [bathtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Bedrooms)): ?>
				<li>Bedrooms: [unmapped_Bedrooms]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Fencing)): ?>
				<li>Fencing: [unmapped_Fencing]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Navigable to Ocean Y/N"})): ?>
				<li>Navigable to Ocean Y/N: [unmapped_Navigable to Ocean Y/N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Hot Tub: [pooldescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): //not show?>
				<li>Road Frontage: [unmapped_Road Frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Structure)): ?>
				<li>Structure: [unmapped_Structure]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Water front flag: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
				<li>Major Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Additional Rooms"})): ?>
				<li>Additional Rooms: [unmapped_Additional Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"All Bedrooms Conform"})): ?>
				<li>All Bedrooms Conform: [unmapped_All Bedrooms Conform]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Common/ClubAmenities"})):?>
				<li>Common/ClubAmenities: [unmapped_Common/ClubAmenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Country)): ?>
				<li>Country: [unmapped_Country]</li>
			<?php endif; ?>
			<?php if( isset($single_property->documentsonfile)): ?>
				<li>Documents On File: [documentsonfile]</li>
			<?php endif; ?>
			<?php if( isset($single_property->adultcommunity)): ?>
				<li>Gated Community: [adultcommunity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Historic Area"})): ?>
				<li>Historic Area: [unmapped_Historic Area]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Misc Exterior"})): //not show?>
				<li>Misc Exterior: [unmapped_Misc Exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Legal Name of Subdiv"})): ?>
				<li>Legal Name of Subdiv: [unmapped_Legal Name of Subdiv]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Appx. Lot Dimensions"})): //not show?>
				<li>Appx. Lot Dimensions: [unmapped_Appx. Lot Dimensions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
				<li>Mobile Mfg Home: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"New Construction Y/N"})): ?>
				<li>New Construction Y/N: [unmapped_New Construction Y/N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
				<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): //not show?>
				<li>Possible Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
				<li>Presently Zoned: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->squarefeetsource)): ?>
				<li>Square Foot Source: [squarefeetsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Attached YN"})): ?>
				<li>Property Attached Y/N: [unmapped_Property Attached YN]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
			
			
		<?php //----Property Type-->  Commercial Sale ------------------------------ ?>
		<?php if( isset($single_property->customtype) ): ?>
			<?php if ($single_property->customtype == "Commercial"):?>
			
			<?php if( isset($single_property->unmapped->{"Unit #"})): ?>
				<li>Unit #: [unmapped_Unit #]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Type)): ?>
				<li>Type: [unmapped_Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
				<li>Current Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Development Status"})): ?>
				<li>Development Status: [unmapped_Development Status]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->documentsonfile)): ?>
				<li>Documents On File: [documentsonfile]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
				<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Present Use/Zoned"})): ?>
				<li>Present Use/Zoned: [unmapped_Present Use/Zoned]</li>
			<?php endif; ?>
			<?php if( isset($single_property->squarefeetsource)): ?>
				<li>Square Foot Source: [squarefeetsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Type/Potential Use"})): ?>
				<li>Type/Potential Use: [unmapped_Type/Potential Use]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Building Stories"})): ?>
				<li>Building Stories: [unmapped_Building Stories]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Location"})): ?>
				<li>Lot Location: [unmapped_Lot Location]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): ?>
				<li>Road Frontage: [unmapped_Road Frontage]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roofmaterial: [roofmaterial]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->butype)): ?>
				<li>Structure: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HVAC)): ?>
				<li>HVAC: [unmapped_HVAC]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Total Bldg SqFt"})): ?>
				<li>Total Bldg SqFt: [unmapped_Total Bldg SqFt]</li>
			<?php endif; ?>							
			<?php endif; ?>	
		<?php endif; ?>			

		
		<?php //----Property Type-->  Commercial Lease ------------------------------ ?>
		<?php if( isset($single_property->customtype) ): ?>
			<?php if ($single_property->customtype == "Commercial for Lease"):?>
			
			<?php if( isset($single_property->unmapped->{"Unit #"})): ?>
				<li>Unit #: [unmapped_Unit #]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Number of Buildings"})): //not show?>
				<li>Buildings: [unmapped_Number of Buildings]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Type)): ?>
				<li>Commercial Lease Type: [unmapped_Type]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Type)): ?>
				<li>Commercial Type: [unmapped_Type]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Country)): //not show?>
				<li>Country: [unmapped_Country]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Current Zoning"})): ?>
				<li>Current Zoning: [unmapped_Current Zoning]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Development Status"})): ?>
				<li>Development Status: [unmapped_Development Status]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->documentsonfile)): ?>
				<li>Documents On File: [documentsonfile]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Max Base Lease Rate"})): //not show?>
				<li>Max Base Lease Rate: [unmapped_Max Base Lease Rate]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Min Base Lease Rate"})): //not show?>
				<li>Min Base Lease Rate: [unmapped_Min Base Lease Rate]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->zoning)): ?>
				<li>Present Use Zoned: [zoning]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->squarefeetsource)): ?>
				<li>Square Foot Source: [squarefeetsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tenant Expenses"})): //not show?>
				<li>Tenant Expenses: [unmapped_Tenant Expenses]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Number of Units"})): //not show?>
				<li>Number of Units: [unmapped_Number of Units]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->HVAC)): ?>
				<li>HVAC: [unmapped_HVAC]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->amenities)): ?>
				<li>Misc Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Bldg SqFt"})): ?>
				<li>Total Bldg Sq Ft: [unmapped_Total Bldg SqFt]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Building Stories"})): ?>
				<li>Building Stories: [unmapped_Building Stories]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->{"Lot Location"})): ?>
				<li>Lot Location: [unmapped_Lot Location]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->location)): //not show?>
				<li>Unit Location: [location]</li>
			<?php endif; ?>	

			
			<?php endif; ?>	
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
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet: [petrestrictionsallow]</li>
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
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( 
			isset($single_property->cooling) || 
			isset($single_property->coolingzones) || 
			isset($single_property->heating) || 
			isset($single_property->heatzones) || 
			isset($single_property->energyfeatures) || 
			isset($single_property->electricfeature) || 
			isset($single_property->hotwater) || 
			isset($single_property->sewer) || 
			isset($single_property->water) ||
			isset($single_property->firmrmk1) ||
			isset($single_property->utilities)
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

			<?php if( isset($single_property->firmrmk1)): ?>
				<li>Fireplace : [firmrmk1]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->utilities)): ?>
				<li>Utilities : [utilities]</li>
			<?php endif; ?>				
			
		</ul>
		
		<?php if( 
				isset($single_property->gradeschool) || 
				isset($single_property->middleschool) || 
				isset($single_property->highschool) 
				):?>
		<h3 class="zy-feature-title">Schools</h3>
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
		</ul>
		<?php endif; ?>	
		
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( 
				isset($single_property->garagespaces) || 
				isset($single_property->parkingspaces) || 
				isset($single_property->roadtype) ||
				isset($single_property->parkingfeature)
				):?>
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
			
			<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Facilities : [parkingfeature]</li>
			<?php endif; ?>			
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
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
			
			<?php if( isset($single_property->unmapped->{"Association Fee Frequency"})): ?>
				<li>Association Fee Frequency : [unmapped_Association Fee Frequency]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association Fee YN : [reqdownassociation]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"CDD Fee"})): ?>
				<li>CDD Fee : [unmapped_CDD Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"CDD Fee Y/N"})): ?>
				<li>Cdd Fee YN : [unmapped_CDD Fee Y/N]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Condo Fees"})): ?>
				<li>Condo Fees : [unmapped_Condo Fees]</li>
			<?php endif; ?>				
			
		</ul>
		<?php endif; ?>	
	</li>					

</ul>

<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
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
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed2DIMEN)): ?>
			<li>Size: [bed2DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed2LEVEL)): ?>
			<li>Level: [bed2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed2DSCRP)): ?>
			<li>Features: [bed2DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed3DIMEN)): ?>
			<li>Size: [bed3DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed3LEVEL)): ?>
			<li>Level: [bed3LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed3DSCRP)): ?>
			<li>Features: [bed3DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed4DIMEN)): ?>
			<li>Size: [bed4DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed4LEVEL)): ?>
			<li>Level: [bed4LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed4DSCRP)): ?>
			<li>Features: [bed4DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed5DIMEN)): ?>
			<li>Size: [bed5DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed5LEVEL)): ?>
			<li>Level: [bed5LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed5DSCRP)): ?>
			<li>Features: [bed5DSCRP]</li>								
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
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth2DIMEN)): ?>
			<li>Size: [oth2DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth2LEVEL)): ?>
			<li>Level: [oth2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth2DSCRP)): ?>
			<li>Features: [oth2DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth3DIMEN)): ?>
			<li>Size: [oth3DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth3LEVEL)): ?>
			<li>Level: [oth3LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth3DSCRP)): ?>
			<li>Features: [oth3DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #4</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth4DIMEN)): ?>
			<li>Size: [oth4DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth4LEVEL)): ?>
			<li>Level: [oth4LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth4DSCRP)): ?>
			<li>Features: [oth4DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #5</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth5DIMEN)): ?>
			<li>Size: [oth5DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth5LEVEL)): ?>
			<li>Level: [oth5LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth5DSCRP)): ?>
			<li>Features: [oth5DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #6</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth6DIMEN)): ?>
			<li>Size: [oth6DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth6LEVEL)): ?>
			<li>Level: [oth6LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth6DSCRP)): ?>
			<li>Features: [oth6DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>