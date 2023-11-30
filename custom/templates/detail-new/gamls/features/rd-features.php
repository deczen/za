<ul class="zy-features-grid">
	<li class="cell">
		
		<?php if( isset($single_property->basement) || isset($single_property->nobuildings) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->facilities) || 
				  isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->parkingspaces) || isset($single_property->noofrestrooms) || isset($single_property->system) || 
				  isset($single_property->utilities) || isset($single_property->unmapped->{"Architectural Style"}) || isset($single_property->unmapped->{"Construction Materials"}) || isset($single_property->unmapped->{"Foundation Details"}) || isset($single_property->unmapped->{"Lot Features"}) || 
				  isset($single_property->unmapped->{"Lot Size Source"}) || isset($single_property->roofmaterial) || isset($single_property->unmapped->{"Window Features"}) || isset($single_property->unmapped->{"Above Grade Finished"}) || isset($single_property->unmapped->{"Total Finished Area"}) || 
				  isset($single_property->unmapped->Appliances) || isset($single_property->unmapped->Basement) || isset($single_property->interiorfeatures) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->{"Living Area Source"}) || 
				  isset($single_property->unmapped->Rooms) || isset($single_property->unmapped->{"Community Features"}) || isset($single_property->energyfeatures) || isset($single_property->unmapped->{"Bath Full Main"}) || isset($single_property->unmapped->{"Bed Main"}) || 
				  isset($single_property->unmapped->{"Max Rental Period (months)"}) || isset($single_property->unmapped->{"Min Rental Period (months)"}) || isset($single_property->unmapped->{"Availability Date"}) || isset($single_property->unmapped->{"Middle School Bus"}) || isset($single_property->unmapped->{"Elementary Bus"}) || 
				  isset($single_property->unmapped->{"High School Bus"}) || isset($single_property->petsallowed) || isset($single_property->unmapped->{"Property Condition"}) || isset($single_property->unmapped->{"Availability Date"}) || isset($single_property->unmapped->{"Security Deposit"}) || isset($single_property->unmapped->{"Structure Type"}) ):?>
	
		<h3 class="zy-feature-title">Property Details</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobuildings)): ?>
			<li>Building: [nobuildings]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofdrivingdoors)): ?>
			<li>Drive in Doors: [noofdrivingdoors]</li>
			<?php endif; ?>
			<?php if( isset($single_property->elevator)): ?>
			<li>Elevator: [elevator]</li>
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
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->noofrestrooms)): ?>
			<li>Restrooms: [noofrestrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->system)): ?>
			<li>System: [system]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
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
				<?php if( isset($single_property->student)): ?>
				<li>Student: [student]</li>
				<?php endif; ?>
			
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->{"Architectural Style"})): ?>
			<li>House Style: [unmapped_Architectural Style]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Construction Materials"})): ?>
			<li>Construction Materials: [unmapped_Construction Materials]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Foundation Details"})): ?>
			<li>Foundation Details: [unmapped_Foundation Details]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Features"})): ?>
			<li>Lot Features: [unmapped_Lot Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Source"})): ?>
			<li>Lot Size Source: [unmapped_Lot Size Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Window Features"})): ?>
			<li>Window Features: [unmapped_Window Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Above Grade Finished"})): ?>
			<li>Above Grade Finished Area: [unmapped_Above Grade Finished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Finished Area"})): ?>
			<li>Building Area Total: [unmapped_Total Finished Area]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Appliances)): ?>
			<li>Appliances: [unmapped_Appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Basement)): ?>
			<li>Basement: [unmapped_Basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Furnished)): ?>
			<li>Furnished: [unmapped_Furnished]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Features: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Living Area Source"})): ?>
			<li>Living Area Source: [unmapped_Living Area Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Rooms)): ?>
			<li>Rooms: [unmapped_Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Community Features"})): ?>
			<li>Community Features: [unmapped_Community Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->energyfeatures)): ?>
			<li>Green Energy Efficient: [energyfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bath Full Main"})): ?>
			<li>Main Level Bathrooms: [unmapped_Bath Full Main]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Bed Main"})): ?>
			<li>Main Level Bedrooms: [unmapped_Bed Main]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Max Rental Period (months)"})): ?>
			<li>Max Rental Period: [unmapped_Max Rental Period (months)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Min Rental Period (months)"})): ?>
			<li>Min Rental Period: [unmapped_Min Rental Period (months)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Availability Date"})): ?>
			<li>Rental Availability Date: [unmapped_Availability Date]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Middle School Bus"})): ?>
			<li>Middle School Bus YN: [unmapped_Middle School Bus]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Elementary Bus"})): ?>
			<li>Elementary School Bus YN: [unmapped_Elementary Bus]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"High School Bus"})): ?>
			<li>High School Bus YN: [unmapped_High School Bus]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Condition"})): ?>
			<li>Property Condition: [unmapped_Property Condition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Availability Date"})): ?>
			<li>Rental Availability Date: [unmapped_Availability Date]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Security Deposit"})): ?>
			<li>Security Deposit: [unmapped_Security Deposit]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Structure Type"})): ?>
			<li>Structure Type: [unmapped_Structure Type]</li>
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

	<li class="cell">
		
		<?php if( isset($single_property->businesshrs) || isset($single_property->butype) || isset($single_property->equiplistavail) || isset($single_property->form) || isset($single_property->inventoryavail) || isset($single_property->realestateincld) || isset($single_property->speciallicenses) || isset($single_property->tenantexpanses) || isset($single_property->yearbuilt) || isset($single_property->zoning) || isset($single_property->zonedescription) ):?>
		<h3 class="zy-feature-title">Business Information</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->businesshrs)): ?>
			<li>Business Hours: [businesshrs]</li>
			<?php endif; ?>
			<?php if( isset($single_property->butype)): ?>
			<li>Business Type: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->equiplistavail)): ?>
			<li>Equipment List Available: [equiplistavail]</li>
			<?php endif; ?>
			<?php if( isset($single_property->form)): ?>
			<li>Form: [form]</li>
			<?php endif; ?>
			<?php if( isset($single_property->inventoryavail)): ?>
			<li>Inventory Included: [inventoryavail]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->realestateincld)): ?>
			<li>Real Estate Included: [realestateincld]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->speciallicenses)): ?>
			<li>Special Licenses: [speciallicenses]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Expenses: [tenantexpanses]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Established: [yearbuilt]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning Code: [zoning]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zoning Description: [zonedescription]</li> <!-- not done -->
			<?php endif; ?>			
		</ul>
		<?php endif; ?>
	</li>	

	<li class="cell">
		
		<?php if( isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Parking Total"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Parking Total"})): ?>
			<li>Parking Total: [unmapped_Parking Total]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->Utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>	
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Application Fee"}) || isset($single_property->unmapped->{"Association Fee Includes"}) || isset($single_property->unmapped->Association) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->unmapped->{"Application Fee"})): ?>
			<li>Application Fee: [unmapped_Application Fee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Association Fee Includes"})): ?>
			<li>Association Fee Includes: [unmapped_Association Fee Includes]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Association)): ?>
			<li>Association YN: [unmapped_Association]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
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
	</li>		

</ul>