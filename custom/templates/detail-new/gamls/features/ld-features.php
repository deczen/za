<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) || 
			  isset($single_property->unmapped->{"Lot Features"}) || isset($single_property->unmapped->{"Lot Size Source"}) || isset($single_property->unmapped->{"Road Frontage Type"}) || isset($single_property->unmapped->{"Total Dock Slips"}) || isset($single_property->unmapped->Vegetation) ||
			  isset($single_property->unmapped->View) || isset($single_property->unmapped->{"Community Features"}) || isset($single_property->unmapped->{"Current Use"}) || isset($single_property->unmapped->District) || isset($single_property->unmapped->{"Elementary Bus"}) ||
			  isset($single_property->unmapped->{"High School Bus"}) || isset($single_property->unmapped->{"Middle School Bus"}) || isset($single_property->unmapped->{"Land Lot"}) || isset($single_property->unmapped->{"Listing Terms"}) || isset($single_property->unmapped->{"Other Sturctures"}) ||
			  isset($single_property->unmapped->{"Possible Use"}) || isset($single_property->unmapped->Section) || isset($single_property->unmapped->Unit) || isset($single_property->unmapped->{"Waterfront Features"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Details</h3>
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
			
			<?php if( isset($single_property->unmapped->{"Lot Features"})): ?>
			<li>Lot Features: [unmapped_Lot Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Source"})): ?>
			<li>Lot Size Source: [unmapped_Lot Size Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage Type"})): ?>
			<li>Road Frontage Type: [unmapped_Road Frontage Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Dock Slips"})): ?>
			<li>Total Number Of Slips: [unmapped_Total Dock Slips]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Vegetation)): ?>
			<li>Vegetation: [unmapped_Vegetation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Community Features"})): ?>
			<li>Community Features: [unmapped_Community Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Current Use"})): ?>
			<li>Current Use: [unmapped_Current Use]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->District)): ?>
			<li>District: [unmapped_District]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Elementary Bus"})): ?>
			<li>Elementary School Bus YN: [unmapped_Elementary Bus]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"High School Bus"})): ?>
			<li>High School Bus YN: [unmapped_High School Bus]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Middle School Bus"})): ?>
			<li>Middle School Bus YN: [unmapped_Middle School Bus]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Land Lot"})): ?>
			<li>Land Lot: [unmapped_Land Lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Listing Terms"})): ?>
			<li>Listing Terms: [unmapped_Listing Terms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Other Structures"})): ?>
			<li>Other Structures: [unmapped_Other Structures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Possible Use"})): ?>
			<li>Possible Use: [unmapped_Possible Use]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Section)): ?>
			<li>Section: [unmapped_Section]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Unit)): ?>
			<li>Unit: [unmapped_Unit]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Waterfront Features"})): ?>
			<li>Waterfront Features: [unmapped_Waterfront Features]</li>
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
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ): ?>
		<h3 class="zy-feature-title">School Information</h3>
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
		
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities) ): ?>
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
			<li>Utilities: [utilities]</li>
			<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->unmapped->{"Annual Association Fee"}) || isset($single_property->unmapped->Association) || 
				  isset($single_property->unmapped->{"Tax Annual Amount"}) ): ?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
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
			<?php if( isset($single_property->unmapped->{"Annual Association Fee"})): ?>
			<li>Association Fee: [unmapped_Annual Association Fee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Association)): ?>
			<li>Association YN: [unmapped_Association]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tax Annual Amount"})): ?>
			<li>Tax Annual Amount: [unmapped_Tax Annual Amount]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>