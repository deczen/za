<ul class="zy-features-grid">
	
	<li class="cell">
	
		<?php if( 
			isset($single_property->acre) ||
			isset($single_property->shrtTOWNCODE)
			): ?>
		<h3 class="zy-feature-title">Main Frame </h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->acre)): ?>
			<li>Acres  : [acre]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->shrtTOWNCODE)): ?>
			<li>Neighborhood : [shrtTOWNCODE]</li>
			<?php endif; ?>				
		</ul>	
		<?php endif; ?>
		
		<?php if( 
		isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->rntype) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || 
		isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->laundryfeatures) || isset($single_property->unitlevel) || isset($single_property->petsallowed) || 
		isset($single_property->waterviewfeatures) || isset($single_property->waterfront)  || isset($single_property->foundation)  || isset($single_property->lotdescription)  || isset($single_property->pooldescription) ||
		isset($single_property->roofmaterial) || isset($single_property->aircondition)  || isset($single_property->unmapped->{"WINDOW COVERINGS"})  || isset($single_property->assocsecurity)  || isset($single_property->tenantexpanses) ||
		isset($single_property->secdeposit) || isset($single_property->unmapped->{"Pet Deposit"})  || isset($single_property->unmapped->{"Application Fee"})  || isset($single_property->unmapped->{"Application Form"})  || isset($single_property->unmapped->{"Cash Accepted"}) ||
		isset($single_property->unmapped->{"Cleaning Deposit"}) || isset($single_property->unmapped->{"Personal Checks Accepted"})  || isset($single_property->unmapped->{"Monthly Lease"})  || isset($single_property->unmapped->{"Apply At"})  || isset($single_property->unmapped->{"Apprx Age"}) ||
		isset($single_property->unmapped->{"Builder Name"}) || isset($single_property->amenities)  || isset($single_property->unmapped->{"Section 8 Qualified"})  || isset($single_property->condominiumname)  || isset($single_property->construction) ||
		isset($single_property->dateavailable) || isset($single_property->soldvsrent)  || isset($single_property->unmapped->{"Max # of Months"})  || isset($single_property->unmapped->{"Min # of Months"})  || isset($single_property->unmapped->MISCELLANEOUS) ||
		isset($single_property->restrictions) || isset($single_property->unmapped->{"Owner LREA/LREB"})  || isset($single_property->squarefeetsource)  || isset($single_property->tenantexpanses)  || isset($single_property->handicapaccess) ):?>
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

			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation  : [foundation]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description : [lotdescription]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->pooldescription)): ?>
			<li>Pool Spa : [pooldescription]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof  : [roofmaterial]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->aircondition)): ?>
			<li>Air Conditioning : [aircondition]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"WINDOW COVERINGS"})): ?>
			<li>Window Coverings : [unmapped_WINDOW COVERINGS]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Subdivision"})): ?>
			<li>Neighborhood : [unmapped_Subdivision]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security  : [assocsecurity]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Pays : [tenantexpanses]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->secdeposit)): ?>
			<li>Security Deposit : [secdeposit]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Pet Deposit"})): ?>
			<li>Pet Deposit : [unmapped_Pet Deposit]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Application Fee"})): ?>
			<li>Application Fee : [unmapped_Application Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Application Form"})): ?>
			<li>Application Form : [unmapped_Application Form]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Cash Accepted"})): ?>
			<li>Cash Accepted : [unmapped_Cash Accepted]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Cleaning Deposit"})): ?>
			<li>Cleaning Deposit : [unmapped_Cleaning Deposit]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Personal Checks Accepted"})): ?>
			<li>Personal Checks Accepted : [unmapped_Personal Checks Accepted]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Monthly Lease"})): ?>
			<li>Monthly Lease : [unmapped_Monthly Lease]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Apprx Age"})): ?>
			<li>Approx Age : [unmapped_Apprx Age]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Builder Name"})): ?>
			<li>Builder Name : [unmapped_Builder Name]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->amenities)): ?>
			<li>Common Area Amenities : [amenities]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Section 8 Qualified"})): ?>
			<li>Section8 Qualified : [unmapped_Section 8 Qualified]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->condominiumname)): ?>
			<li>Condo Name : [condominiumname]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->construction)): ?>
			<li>Construction  : [construction]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->dateavailable)): ?>
			<li>Date Available : [dateavailable]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->soldvsrent)): ?>
			<li>For Sale Or Rent : [soldvsrent]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Max # of Months"})): ?>
			<li>Max Months : [unmapped_Max # of Months]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Min # of Months"})): ?>
			<li>Min Months : [unmapped_Min # of Months]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->MISCELLANEOUS)): ?>
			<li>Miscellaneous  : [unmapped_MISCELLANEOUS]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->restrictions)): ?>
			<li>Restrictions  : [restrictions]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Owner LREA/LREB"})): ?>
			<li>Owner Licensee : [unmapped_Owner LREA/LREB]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->squarefeetsource)): ?>
			<li>Source Sq Ft : [squarefeetsource]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Pays : [tenantexpanses]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->handicapaccess)): ?>
			<li>Accessibility  : [handicapaccess]</li>
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
		<?php endif; ?>
	</li>			
	
	<?php if( 
		isset($single_property->cooling) || 
		isset($single_property->coolingzones) || 
		isset($single_property->heating) || 
		isset($single_property->heatzones) || 
		isset($single_property->energyfeatures) || 
		isset($single_property->electricfeature) || 
		isset($single_property->hotwater) || 
		isset($single_property->sewer) || 
		isset($single_property->water)  ):?>
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

				<?php if( isset($single_property->unmapped->{"HEATING FUEL"})): ?>
				<li>Heating Fuel : [unmapped_HEATING FUEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Utility Supplier: Grbge"})): ?>
				<li>Utility Supplier Garbage : [unmapped_Utility Supplier: Grbge]</li>
				<?php endif; ?>
				<?php if( isset($single_property->gas)): ?>
				<li>Utility Supplier Gas : [gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewerandwater)): ?>
				<li>Water Sewer : [sewerandwater]</li>
				<?php endif; ?>				
			
		</ul>
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
				
				<?php if( isset($single_property->garageparking)): ?>
				<li>Parking  : [garageparking]</li>
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
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) || isset($single_property->schooldistrict)): ?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Elementary School : [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [High School]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School : [middleschool]</li> 
			<?php endif; ?>
			<?php if( isset($single_property->schooldistrict)): ?>
			<li>School District: [schooldistrict]</li> 
			<?php endif; ?>
			
		</ul>		
		<?php endif; ?>		
		
		
	</li>					

</ul>

<ul class="zy-features-grid">
	<?php if( 
		isset($single_property->mbrdimen) || 
		isset($single_property->mbrlevel) || 
		isset($single_property->mbrdscrp) || 
		isset($single_property->unmapped->{"Master Bdrm Length"}) ||
		isset($single_property->unmapped->{"Master Bdrm Width"}) ||
		isset($single_property->bed2dimen) || 
		isset($single_property->bed2LEVEL) || 
		isset($single_property->bed2dscrp) || 
		isset($single_property->bed3dimen) || 
		isset($single_property->bed3LEVEL) || 
		isset($single_property->bed3dscrp) || 
		isset($single_property->bed4dimen) || 
		isset($single_property->bed4LEVEL) || 
		isset($single_property->bed4dscrp) || 
		isset($single_property->bed5dimen) || 
		isset($single_property->bed5LEVEL) || 
		isset($single_property->bed5dscrp) ):?>
	<li class="cell">
		<?php if( 
			isset($single_property->unmapped->{"Master Bdrm Length"}) ||
			isset($single_property->unmapped->{"Master Bdrm Width"}) ||			
			isset($single_property->mbrdimen) || 
			isset($single_property->mbrlevel) || 
			isset($single_property->mbrdscrp) ):?>
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
				
				<?php if( isset($single_property->unmapped->{"Master Bdrm Length"})): ?>
				<li>Master Bedroom Length : [unmapped_Master Bdrm Length]</li>
				<?php endif; ?>		
				<?php if( isset($single_property->unmapped->{"Master Bdrm Width"})): ?>
				<li>Master Bedroom Width : [unmapped_Master Bdrm Width]</li>
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