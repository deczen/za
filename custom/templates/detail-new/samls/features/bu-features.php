<ul class="zy-features-grid">
	
	<li class="cell">
		<?php if( 
			isset($single_property->lotsize) || 
			isset($single_property->lngTOWNSDESCRIPTION) || 
			isset($single_property->shrtTOWNCODE)
		): ?>
		<h3 class="zy-feature-title">Main Frame</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->lotsize)): ?>
			<li>Acres : [lotsize]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lngTOWNSDESCRIPTION)): ?>
			<li>Neighborhood  : [lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->shrtTOWNCODE)): ?>
			<li>Area  : [shrtTOWNCODE]</li>
			<?php endif; ?>				
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->basement) || isset($single_property->nobuildings) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->facilities) || 
		      isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->parkingspaces) || isset($single_property->noofrestrooms) || isset($single_property->system) || 
			  isset($single_property->utilities) ||
			  
			  //Commercial Land
			isset($single_property->unmapped->{"Front Feet"}) || isset($single_property->unmapped->{"Land SQFT"}) || 
			isset($single_property->lot) || isset($single_property->lotsize) || isset($single_property->unmapped->{"RAIL SERVICE"}) || isset($single_property->unmapped->{"ROAD FRONTAGE"}) || isset($single_property->unmapped->{"MINERAL OIL-GAS RIGHTS"}) || 
			isset($single_property->unmapped->{"PRESENT USE"}) || isset($single_property->Agric) || isset($single_property->unmapped->{"Available w/ Lease"}) || isset($single_property->unmapped->Class) || isset($single_property->documentsonfile) || 
			isset($single_property->easements) || isset($single_property->unmapped->{"FLOOD PLAIN"}) || isset($single_property->unmapped->{"Mapsco Grid"}) || isset($single_property->unmapped->{"Potential Short Sale"}) || isset($single_property->unmapped->{"Price/Acre"}) || 
			isset($single_property->termsfeature) || isset($single_property->restrictions) || isset($single_property->soldvsrent) || isset($single_property->squarefeetsource) || isset($single_property->unmapped->Zoning) ):?>
	
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
			
			<!-- Property Type--Commercial Land -->
			<?php if( isset($single_property->unmapped->{"Front Feet"})): ?>
			<li>Front Feet : [unmapped_Front Feet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Land SQFT"})): ?>
			<li>Land Sq Ft : [unmapped_Land SQFT]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lot)): ?>
			<li>Lot Dimensions : [lot]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size : [lotsize]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"RAIL SERVICE"})): ?>
			<li>Rail Service : [unmapped_RAIL SERVICE]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"ROAD FRONTAGE"})): ?>
			<li>Road Frontage : [unmapped_ROAD FRONTAGE]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"MINERAL OIL-GAS RIGHTS"})): ?>
			<li>Mineral Oil Gas Rights : [unmapped_MINERAL OIL-GAS RIGHTS]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"PRESENT USE"})): ?>
			<li>Present Use : [unmapped_PRESENT USE]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->Agric)): ?>
			<li>Agric : [unmapped_Agric]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Available w/ Lease"})): ?>
			<li>Available With Lease : [unmapped_Available w/ Lease]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Class)): ?>
			<li>Commercial Land Unimproved Class : [unmapped_Class]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->documentsonfile)): ?>
			<li>Documents Available : [documentsonfile]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->easements)): ?>
			<li>Easements  : [easements]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"FLOOD PLAIN"})): ?>
			<li>Flood Plain : [unmapped_FLOOD PLAIN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Mapsco Grid"})): ?>
			<li>Maps Co Grid : [unmapped_Mapsco Grid]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Potential Short Sale"})): ?>
			<li>Potential Short Sale : [unmapped_Potential Short Sale]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Price/Acre"})): ?>
			<li>Price Acre : [unmapped_Price/Acre]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Proposed Terms : [termsfeature]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->restrictions)): ?>
			<li>Restrictions  : [restrictions]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->soldvsrent)): ?>
			<li>Sale Rent  : [soldvsrent]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->squarefeetsource)): ?>
			<li>Source Sq Ft : [squarefeetsource]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Zoning)): ?>
			<li>Zoning  : [unmapped_Zoning]</li>
			<?php endif; ?>				
			<!-- EndProperty Type--Commercial Land -->
			
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
		</ul>
		<?php endif; ?>
	</li>

	<li class="cell">
		<?php if( isset($single_property->unmapped->{"City Tax"}) || isset($single_property->unmapped->{"County Tax"}) || isset($single_property->unmapped->{"Other Tax"}) || isset($single_property->unmapped->{"School Tax"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->{"City Tax"})): ?>
			<li>City Tax: [unmapped_City Tax]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"County Tax"})): ?>
			<li>County Tax: [unmapped_County Tax]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Other Tax"})): ?>
			<li>Other Tax: [unmapped_Other Tax]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"School Tax"})): ?>
			<li>School Tax: [unmapped_School Tax]</li>
			<?php endif; ?>			
			
		</ul>
		<?php endif; ?>
		
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

	<?php if( isset($single_property->utilities) || isset($single_property->unmapped->{"UTILITIES ON SITE"}) || isset($single_property->gas) || isset($single_property->unmapped->{"Tax Property ID"}) || isset($single_property->unmapped->{"Utility Supplier: Grbge"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">

			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities Available: [utilities]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"UTILITIES ON SITE"})): ?>
			<li>Utilities On Site: [unmapped_UTILITIES ON SITE]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->gas)): ?>
			<li>Utility Supplier Garbage: [gas]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Tax Property ID"})): ?>
			<li>Utility Supplier Gas: [unmapped_Tax Property ID]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Utility Supplier: Grbge"})): ?>
			<li>Utility Supplier Water: [unmapped_Utility Supplier: Grbge]</li>
			<?php endif; ?>				
		</ul>
	</li>
	<?php endif; ?>	

</ul>