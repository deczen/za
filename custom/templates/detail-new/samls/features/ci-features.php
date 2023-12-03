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

	<?php if( 
	isset($single_property->basement) || 
	isset($single_property->citype) || 
	isset($single_property->construction) || 
	isset($single_property->dividable) || 
	isset($single_property->noofdrivingdoors) || 
	isset($single_property->elevator) || 
	isset($single_property->expandable) || 
	isset($single_property->facilities) || 
	isset($single_property->handicapaccess) || 
	isset($single_property->noofloadingdocks) || 
	isset($single_property->noofrestrooms) || 
	isset($single_property->sprinklers) || 
	isset($single_property->utilities) 
	):?>
	<li class="cell">
	
		<h3 class="zy-feature-title">Main Frame</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Lot Size"})): ?>
			<li>Acres : [unmapped_Subdivision Legal Name]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Price/SQFT"})): ?>
			<li>$/SqFt : [unmapped_Price/SQFT]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->lngTOWNSDESCRIPTION)): ?>
			<li>Neighborhood : [lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>				
		</ul>	
	
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
				
				<?php if( isset($single_property->construction)): ?>
				<li>Construction : [construction]</li>
				<?php endif; ?>				
				<?php if( isset($single_property->unmapped->{"# Drive-In Doors"})): ?>
				<li>Drive In Doors : [unmapped_# Drive-In Doors]</li>
				<?php endif; ?>					
				<?php if( isset($single_property->facilities)): ?>
				<li>Loading Facilities : [facilities]</li>
				<?php endif; ?>					
				<?php if( isset($single_property->unmapped->{"RAIL SERVICE"})): ?>
				<li>Rail Service : [unmapped_RAIL SERVICE]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof  : [roofmaterial]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"# Total Parking"})): ?>
				<li>Total Parking : [unmapped_# Total Parking]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Conditioning : [aircondition]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Ceiling Height"})): ?>
				<li>Ceiling Height : [unmapped_Ceiling Height]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Accessibility : [handicapaccess]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Apprx Age"})): ?>
				<li>Approx Age : [unmapped_Apprx Age]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Available w/ Lease"})): ?>
				<li>Available With Lease : [unmapped_Available w/ Lease]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Building/Center Name"})): ?>
				<li>Building Center Name : [unmapped_Building/Center Name]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Commercial Type : [propsubtype]</li>
				<?php endif; ?>					
				<?php if( isset($single_property->unmapped->{"FLOOD PLAIN"})): ?>
				<li>Flood Plain : [unmapped_FLOOD PLAIN]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Lease Only"})): ?>
				<li>Lease Only : [unmapped_Lease Only]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Monthly Lease"})): ?>
				<li>Monthly Lease : [unmapped_Monthly Lease]</li>
				<?php endif; ?>					
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Proposed Terms : [termsfeature]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"# Rentals"})): ?>
				<li>Rentals : [unmapped_# Rentals]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->restrictions)): ?>
				<li>Restrictions : [restrictions]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->soldvsrent)): ?>
				<li>Sale Rent : [soldvsrent]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->Zoning)): ?>
				<li>Zoning : [unmapped_Zoning]</li>
				<?php endif; ?>					


				<?php if( za_is_ygl( $single_property ) ): ?>
				
				<?php if( isset($single_property->rentprice)): ?>
				<li>Rent Amount: [rentprice]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitlevel)): ?>
				<li>Unit Level: [unitlevel]</li>
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
				
				<?php if( isset($single_property->unmapped->{"City Tax"})): ?>
				<li>City Tax : [unmapped_City Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"County Tax"})): ?>
				<li>County Tax : [unmapped_County Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Other Tax"})): ?>
				<li>Other Tax : [unmapped_Other Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"School Tax"})): ?>
				<li>School Tax : [unmapped_School Tax]</li>
				<?php endif; ?>					
				
				
			
		</ul>
		<?php endif; ?>
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities : [utilities]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
		<?php if( isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->schooldistrict)): ?>
			<li>School District : [schooldistrict]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
		
	</li>		

</ul>