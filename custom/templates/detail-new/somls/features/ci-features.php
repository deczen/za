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
			  isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities) ||
			  
			  isset($single_property->unmapped->{"Property Type"}) || isset($single_property->unmapped->Fence) || isset($single_property->unmapped->{"Office Type"}) || isset($single_property->unmapped->Internet) || isset($single_property->unpammed->lngAREADESCRIPTION) ||
			  isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->exterior) || isset($single_property->roofmaterial) || isset($single_property->homeownassociation) || isset($single_property->lot) ||
			  isset($single_property->unmapped->shrtAREACODE) || isset($single_property->unmapped->shrtCOUNTYCODE) || isset($single_property->unmapped->lngCOUNTYDESCRIPTION) || isset($single_property->lotsize) || isset($single_property->lotdescription) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
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
			
			<?php if( isset($single_property->unmapped->{"Property Type"})): ?>
			<li>Property Type: [unmapped_Property Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Fence)): ?>
			<li>Fence: [unmapped_Fence]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Office Type"})): ?>
			<li>Office Type: [unmapped_Office Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngAREADESCRIPTION)): ?>
			<li>Area Description: [unmapped_lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->shrtAREACODE)): ?>
			<li>Area Code: [unmapped_shrtAREACODE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->shrtCOUNTYCODE)): ?>
			<li>County Code: [unmapped_shrtCOUNTYCODE]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngCOUNTYDESCRIPTION)): ?>
			<li>County Description: [unmapped_lngCOUNTYDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>		
		
	<li class="cell">
		<?php if( isset($single_property->heating) || isset($single_property->sewer) || isset($single_property->water) ):?>
			  
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) ||
				  isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{"Tax Account#"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
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
			
			<?php if( isset($single_property->unmapped->{"Tax Account#"})): ?>
			<li>Tax Account: [unmapped_Tax Account#]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
	
	</li>

</ul>