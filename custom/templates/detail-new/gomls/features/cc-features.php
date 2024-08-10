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

	<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || 
			  isset($single_property->elevator) || isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || 
			  isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities) || isset($single_property->unmapped->{"Owner Expenses"}) || isset($single_property->unmapped->{"# Floors"}) ||
			  isset($single_property->nobuildings) || isset($single_property->tenantexpanses) || isset($single_property->rntype) || isset($single_property->unmapped->shrtCOUNTYCODE) || isset($single_property->vacant) ||
			  isset($single_property->unmapped->Amperage) || isset($single_property->unmapped->{"Flood Plain"}) || isset($single_property->unmapped->Tract) || isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->unmapped->{"Total SqFt Available"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Propery Features</h3>
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
				<?php if( isset($single_property->unmapped->{"Owner Expenses"})): ?>
				<li>Owner Expenses: [unmapped_Owner Expenses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"# Floors"})): ?>
				<li>No. of Floors: [unmapped_# Floors]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobuildings)): ?>
				<li>No. Of Buildings: [nobuildings]</li>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<li>Tenant Expanses: [tenantexpanses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->rntype)): ?>
				<li>Type: [rntype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->shrtCOUNTYCODE)): ?>
				<li>County Code: [unmapped_shrtCOUNTYCODE]</li>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<li>Vacant: [vacant]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Amperage)): ?>
				<li>Amperage: [unmapped_Amperage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Flood Plain"})): ?>
				<li>Flood Plain: [unmapped_Flood Plain]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Tract)): ?>
				<li>Tract: [unmapped_Tract]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
				<li>Towns Description: [unmapped_lngTOWNSDESCRIPTION]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Total SqFt Available"})): ?>
				<li>SqFt Available: [unmapped_Total SqFt Available]</li>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || 
				  isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{"Tax District"}) ):?>
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
				<?php if( isset($single_property->unmapped->{"Tax District"})): ?>
				<li>Tax District: [unmapped_Tax District]</li> <!-- not done -->
				<?php endif; ?>
				
		</ul>
		<?php endif; ?>
	</li>					

</ul>