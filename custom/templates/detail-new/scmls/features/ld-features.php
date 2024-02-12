<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) || 
			isset($single_property->petsallowed) || isset($single_property->petrestrictionsallow) ||
			isset($single_property->lotdescription) || isset($single_property->unmapped->View) || isset($single_property->waterbodyname) || isset($single_property->waterfrontflag) || isset($single_property->unmapped->AssociationFee2) ||
			isset($single_property->unmapped->CurrentUse) || isset($single_property->unmapped->CurrentUse) || isset($single_property->unmapped->LandLeaseYN) || isset($single_property->termsfeature) || isset($single_property->pooldescription) ||
			isset($single_property->assocsecurity) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->unmapped->TaxLegalDescription) ):?>
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
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
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
			

			<?php if( isset($single_property->lotdescription)): ?>
			<li>Features: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterbodyname)): ?>
			<li>Water Body Name: [waterbodyname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfrontflag)): ?>
			<li>Waterfront YN: [waterfrontflag]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFee2)): ?>
			<li>Association Fee2: [unmapped_AssociationFee2]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CurrentUse)): ?>
			<li>Current Use: [unmapped_CurrentUse]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LandLeaseYN)): ?>
			<li>Land Lease YN: [unmapped_LandLeaseYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Listing Terms: [termsfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pooldescription)): ?>
			<li>Pool Features: [pooldescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
			<li>Senior Community YN: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxLegalDescription)): ?>
			<li>Tax Legal Description: [unmapped_TaxLegalDescription]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
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
		<?php endif; ?>
		
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || 
				isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) ||
				isset($single_property->unmapped->CoolingYN) || isset($single_property->unmapped->HeatingYN) || isset($single_property->utilities) ):?>
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

			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>				
			
		</ul>
		<?php endif; ?>
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->feeinterval) || isset($single_property->reqdownassociation) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
				
				<?php if( isset($single_property->feeinterval)): ?>
				<li>Association Fee Frequency: [feeinterval]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association YN: [reqdownassociation]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
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
			<li>Road Type: [roadtype]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>