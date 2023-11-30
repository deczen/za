<ul class="zy-features-grid">
	<li class="cell">
		<?php if( 
				isset($single_property->acre) ||
				isset($single_property->unmapped->{"Legal Name of Subdiv"}) ||
				isset($single_property->shrtCOUNTYCODE) ||
				isset($single_property->unmapped->{"Approx Parcel Size"}) ||
				isset($single_property->propsubtype) ||
				isset($single_property->lotdescription) ||
				isset($single_property->unmapped->{"Lot Location"}) ||
				isset($single_property->unmapped->{"Navgble to Ocean Y/N"}) ||
				isset($single_property->unmapped->{"Road Frontage"}) ||
				isset($single_property->roadtype) ||
				isset($single_property->waterfront) ||
				isset($single_property->waterfrontflag) ||
				isset($single_property->unmapped->Country) ||
				isset($single_property->unmapped->{"Current Zoning"}) ||
				isset($single_property->zoning) ||
				isset($single_property->documentsonfile) ||
				isset($single_property->unmapped->{"Legal Name of Subdiv"}) ||
				isset($single_property->unmapped->Occupancy)
				
				):?>
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->acre)): ?>
				<li>Acres : [acre]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Legal Name of Subdiv"})): ?>
				<li>Legal Name of Subdiv: [unmapped_Legal Name of Subdiv]</li>
			<?php endif; ?>
			<?php if( isset($single_property->shrtCOUNTYCODE)): ?>
				<li>County : [shrtCOUNTYCODE]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->unmapped->{"Approx Parcel Size"})): ?>
				<li>Approx Parcel Size: [unmapped_Approx Parcel Size]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Type : [propsubtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description : [lotdescription]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Lot Location"})): ?>
				<li>Lot Location: [unmapped_Lot Location]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Navgble to Ocean Y/N"})): ?>
				<li>Navigble to Ocean Y/N: [unmapped_Navgble to Ocean Y/N]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): ?>
				<li>Road Frontage: [unmapped_Road Frontage]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->roadtype)): ?>
				<li>Road Surface : [roadtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront Description : [waterfront]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront Y/N : [waterfrontflag]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Country)): ?>
				<li>Country : [unmapped_Country]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Current Zoning"})): ?>
				<li>Current Zoning : [unmapped_Current Zoning]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->zoning)): ?>
				<li>Zoning : [zoning]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->documentsonfile)): ?>
				<li>Documents On File : [documentsonfile]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
				<li>Occupancy : [unmapped_Occupancy]</li>
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
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
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
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
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
			isset($single_property->taxes) || 
			isset($single_property->taxyear) || 
			isset($single_property->zoning) ||
			isset($single_property->hoafee) ||
			isset($single_property->unmapped->{"Association Fee"}) ||
			isset($single_property->unmapped->{"CDD Fee"}) ||
			isset($single_property->unmapped->{"CDD Fee Y/N"})
			
			):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
			
			<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee : [hoafee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Association Fee"})): ?>
				<li>Association Fee : [unmapped_Association Fee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"CDD Fee"})): ?>
				<li>CDD Fee : [unmapped_CDD Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"CDD Fee Y/N"})): ?>
				<li>CDD Fee Y/N : [unmapped_CDD Fee Y/N]</li>
			<?php endif; ?>				
			
		</ul>
		<?php endif; ?>
	</li>

</ul>