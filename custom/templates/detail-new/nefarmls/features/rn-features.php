<ul class="zy-features-grid">
	<?php if( 
		isset($single_property->amenities) || 
		isset($single_property->basement) || 
		isset($single_property->rntype) || 
		isset($single_property->exteriorfeatures) || 
		isset($single_property->exterior) || 
		isset($single_property->fireplaces) || 
		isset($single_property->flooring) || 
		isset($single_property->laundryfeatures) || 
		isset($single_property->unitlevel) || 
		isset($single_property->petsallowed) || 
		isset($single_property->waterviewfeatures) || 
		isset($single_property->waterfront) ||
		isset($single_property->unmapped->{"Legal Name of Subdiv"}) ||
		isset($single_property->shrtCOUNTYCODE) ||
		isset($single_property->yearbuilt) ||
		isset($single_property->proptype) ||
		isset($single_property->propsubtype) ||
		isset($single_property->equiplistavail) ||
		isset($single_property->unmapped->{"Additional Rooms"}) ||
		isset($single_property->unmapped->{"Addl Accomodations"}) ||
		isset($single_property->bathtype) ||
		isset($single_property->dindscrp) ||
		isset($single_property->kitdscrp) ||
		isset($single_property->appliances) ||
		isset($single_property->unmapped->{"Common Amenities"}) ||
		isset($single_property->unmapped->Country) ||
		isset($single_property->unmapped->{"Date Available"}) ||
		isset($single_property->unmapped->{"Type of Dwelling"}) ||
		isset($single_property->adultcommunity) ||
		isset($single_property->unmapped->{"Min Rental Term"}) ||
		isset($single_property->unmapped->Occupancy) ||
		isset($single_property->restrictions) ||
		isset($single_property->squarefeetsource) ||
		isset($single_property->unmapped->{"Tenant Pays"}) ||
		isset($single_property->unmapped->{"Parcel Size"}) ||
		isset($single_property->unmapped->{"Building Stories"}) ||
		isset($single_property->lotdescription) ||
		isset($single_property->unmapped->{"Lot Location"}) ||
		isset($single_property->unmapped->{"Navgble to Ocean Y/N"}) ||
		isset($single_property->pooldescription) ||
		isset($single_property->unmapped->{"Road Frontage"}) ||
		isset($single_property->roofmaterial) ||
		isset($single_property->butype) ||
		isset($single_property->style) ||
		isset($single_property->location) ||
		isset($single_property->waterfrontflag) 
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
			
			<?php if( isset($single_property->unmapped->{"Legal Name of Subdiv"})): ?>
				<li>Legal Name of Subdiv: [unmapped_Legal Name of Subdiv]</li>
			<?php endif; ?>
			<?php if( isset($single_property->shrtCOUNTYCODE)): ?>
				<li>County: [shrtCOUNTYCODE]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->yearbuilt)): ?>
				<li>Built: [yearbuilt]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->proptype)): ?>
				<li>Property Type: [proptype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->equiplistavail)): ?>
				<li>Additional Equipment: [equiplistavail]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Additional Rooms"})): ?>
				<li>Additional Rooms: [unmapped_Additional Rooms]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Addl Accomodations"})): ?>
				<li>Addl Accomodations: [unmapped_Addl Accomodations]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->bathtype)): ?>
				<li>Bath: [bathtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->dindscrp)): ?>
				<li>Dining: [dindscrp]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->kitdscrp)): ?>
				<li>Kitchen: [kitdscrp]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Common Amenities"})): ?>
				<li>Common Amenities: [unmapped_Common Amenities]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Country)): ?>
				<li>Country: [unmapped_Country]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Date Available"})): ?>
				<li>Date Available: [unmapped_Date Available]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Type of Dwelling"})): ?>
				<li>Type of Dwelling: [unmapped_Date Available]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->adultcommunity)): ?>
				<li>Gated Community: [adultcommunity]</li>
			<?php endif; ?>					
			<?php if( isset($single_property->unmapped->{"Min Rental Term"})): ?>
				<li>Min Rental Term: [unmapped_Min Rental Term]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
				<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->restrictions)): ?>
				<li>Restrictions: [restrictions]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->squarefeetsource)): ?>
				<li>Square Foot Source: [squarefeetsource]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Tenant Pays"})): ?>
				<li>Tenant Pays: [unmapped_Tenant Pays]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Parcel Size"})): ?>
				<li>Parcel Size: [unmapped_Parcel Size]</li>
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
			<?php if( isset($single_property->unmapped->{"Navgble to Ocean Y/N"})): ?>
				<li>Navigable To Ocean Y/N: [unmapped_Navgble to Ocean Y/N]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Hot Tub: [pooldescription]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): ?>
				<li>Road Frontage: [unmapped_Road Frontage]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof: [roofmaterial]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->butype)): ?>
				<li>Structure: [butype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->location)): ?>
				<li>Unit Location: [location]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront Y/N: [waterfrontflag]</li>
			<?php endif; ?>				
			

			
			
			
			<?php if( za_is_ygl( $single_property ) ): ?>
			
			<?php if( isset($single_property->rentprice)): ?>
			<li>Rent Amount: [rentprice]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Fee Paid By Owner: [reqdownassociation]</li>
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
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
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

				<?php if( isset($single_property->utilities)): ?>
					<li>Utilities: [utilities]</li>
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
				
				<?php if( isset($single_property->parkingfeature)): ?>
					<li>Parking Facilities : [parkingfeature]</li>
				<?php endif; ?>				
			
		</ul>
		<?php endif; ?>
		
		<?php if( 
				isset($single_property->taxes) || 
				isset($single_property->taxyear) || 
				isset($single_property->hoafee) || 
				isset($single_property->asscfeeincludes) ||
				isset($single_property->firstmonreqd) ||
				isset($single_property->lastmonreqd) ||
				isset($single_property->secdeposit) ||
				isset($single_property->rentfeeincludes) ||
				isset($single_property->unmapped->{"Assoc Appl Fee"}) ||
				isset($single_property->unmapped->{"Association Fee"}) ||
				isset($single_property->unmapped->{"Application Fee"}) ||
				isset($single_property->unmapped->{"Min Lease/Rent Term"}) ||
				isset($single_property->unmapped->{"Cleaning Fee"}) ||
				isset($single_property->unmapped->{"% of Tax"}) ||
				isset($single_property->unmapped->{"Security Deposit"}) ||
				isset($single_property->unmapped->{"Payment Freq"}) ||
				isset($single_property->unmapped->{"Terms/Deposits/Fees: Application Fee"}) ||
				isset($single_property->unmapped->{"Terms/Deposits/Fees: Min Lease/Rent Term"}) ||
				isset($single_property->unmapped->{"Terms/Deposits/Fees: Cleaning Fee"}) ||
				isset($single_property->unmapped->{"Terms/Deposits/Fees: % of Tax"}) ||
				isset($single_property->unmapped->{"Terms/Deposits/Fees: Security Deposit"})
				
				
				):?>
		<h3 class="zy-feature-title">Taxes, Deposits, Inclusions</h3>
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
				
			<?php if( isset($single_property->unmapped->{"Assoc Appl Fee"})): ?>
				<li>Assoc Appl Fee: [unmapped_Assoc Appl Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Association Fee"})): ?>
				<li>Association Fee Y/N: [unmapped_Association Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Application Fee"})): ?>
				<li>Terms/Deposits/Fees: Application Fee: [unmapped_Application Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Min Lease/Rent Term"})): ?>
				<li>Terms/Deposits/Fees: Min Lease/Rent Term: [unmapped_Min Lease/Rent Term]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Cleaning Fee"})): ?>
				<li>Terms/Deposits/Fees: Cleaning Fee: [unmapped_Cleaning Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"% of Tax"})): ?>
				<li>Terms/Deposits/Fees: % of Tax: [unmapped_% of Tax]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Security Deposit"})): ?>
				<li>Terms/Deposits/Fees: Security Deposit: [unmapped_Security Deposit]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Payment Freq"})): ?>
				<li>Payment Freq: [unmapped_Payment Freq]</li>
			<?php endif; ?>	
			
			<?php if( isset($single_property->unmapped->{"Terms/Deposits/Fees: Application Fee"})): ?>
				<li>Terms/Deposits/Fees: Application Fee: [unmapped_Terms/Deposits/Fees: Application Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Terms/Deposits/Fees: Min Lease/Rent Term"})): ?>
				<li>Terms/Deposits/Fees: Min Lease/Rent Term: [unmapped_Terms/Deposits/Fees: Min Lease/Rent Term]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Terms/Deposits/Fees: Cleaning Fee"})): ?>
				<li>Terms/Deposits/Fees: Cleaning Fee: [unmapped_Terms/Deposits/Fees: Cleaning Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Terms/Deposits/Fees: % of Tax"})): ?>
				<li>Terms/Deposits/Fees: % of Tax: [unmapped_Terms/Deposits/Fees: % of Tax]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Terms/Deposits/Fees: Security Deposit"})): ?>
				<li>Terms/Deposits/Fees: Security Deposit: [unmapped_Terms/Deposits/Fees: Security Deposit]</li>
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