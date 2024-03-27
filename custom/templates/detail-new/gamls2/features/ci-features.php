<ul class="zy-features-grid">
	<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) || 
			  isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
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
		
		<?php if( isset($single_property->parkingspaces) || isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Parking Total"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Features: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Parking Total"})): ?>
			<li>Parking Total: [unmapped_Parking Total]</li>
			<?php endif; ?>
				
		</ul>
		<?php endif; ?>
		
	</li>						
	<?php endif; ?>

	<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || 
			  isset($single_property->elevator) || isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || 
			  isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities) || isset($single_property->unmapped->{"Construction Materials"}) || isset($single_property->roofmaterial) || isset($single_property->unmapped->{"Lot Size Source"}) ||
			  isset($single_property->unmapped->{"Building Area Total"}) || isset($single_property->unmapped->{"Lot Features"}) || isset($single_property->unmapped->{"Road Frontage Type"}) || isset($single_property->unmapped->{"Building Area Total"}) || isset($single_property->unmapped->{"Building Area Source"}) ||
			  isset($single_property->unmapped->District) || isset($single_property->unmapped->{"Land Lot"}) || isset($single_property->unmapped->{"Property Condition"}) || isset($single_property->businesshrs) || isset($single_property->unmapped->{"Structure Type"}) ||
	  		  isset($single_property->unmapped->AttachedGarageYN) || isset($single_property->unmapped->CarportYN) || isset($single_property->unmapped->Fencing) || isset($single_property->unmapped->FrontageLength) || isset($single_property->unmapped->GarageYN) || 
	  		  isset($single_property->lotdescription) || isset($single_property->lotsize) || isset($single_property->unmapped->LotSizeSource) || isset($single_property->unmapped->LotSizeUnits) || isset($single_property->unmapped->AboveGradeFinishedAreaUnits) || 
	  		  isset($single_property->unmapped->BelowGradeFinishedAreaUnits) || isset($single_property->unmapped->BuildingAreaTotal) || isset($single_property->unmapped->BuildingAreaUnits) || isset($single_property->flooring) || isset($single_property->unmapped->LivingAreaSource) || 
	  		  isset($single_property->unmapped->LandLot) || isset($single_property->unmapped->Section) || isset($single_property->unmapped->BusinessType) || isset($single_property->unmapped->ElectricOnPropertyYN) || isset($single_property->unmapped->ListingTerms) || 
	  		  isset($single_property->unmapped->NewConstructionYN) || isset($single_property->sitecondition) || isset($single_property->unmapped->StructureType) || isset($single_property->waterbodyname) ):?>
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
			
			<?php if( isset($single_property->unmapped->{"Construction Materials"})): ?>
			<li>Construction Materials: [unmapped_Construction Materials]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Source"})): ?>
			<li>Lot Size Source: [unmapped_Lot Size Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Building Area Total"})): ?>
			<li>Building Area Total: [unmapped_Building Area Total]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Features"})): ?>
			<li>Lot Features: [unmapped_Lot Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage Type"})): ?>
			<li>Road Frontage Type: [unmapped_Road Frontage Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Building Area Total"})): ?>
			<li>Building Area Total: [unmapped_Building Area Total]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Building Area Source"})): ?>
			<li>Living Area Source: [unmapped_Building Area Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->District)): ?>
			<li>District: [unmapped_District]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Land Lot"})): ?>
			<li>Land Lot: [unmapped_Land Lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Condition"})): ?>
			<li>Property Condition: [unmapped_Property Condition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->businesshrs)): ?>
			<li>Business Type: [businesshrs]</li>
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
			
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
			<li>Carport YN: [unmapped_CarportYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Fencing)): ?>
			<li>Fencing: [unmapped_Fencing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FrontageLength)): ?>
			<li>Frontage Length: [unmapped_FrontageLength]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
			<li>Garage YN: [unmapped_GarageYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Features: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size Area: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeSource)): ?>
			<li>Lot Size Source: [unmapped_LotSizeSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeUnits)): ?>
			<li>Lot Size Units: [unmapped_LotSizeUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AboveGradeFinishedAreaUnits)): ?>
			<li>Above Grade Finished Area Units: [unmapped_AboveGradeFinishedAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BelowGradeFinishedAreaUnits)): ?>
			<li>Below Grade Finished Area Units: [unmapped_BelowGradeFinishedAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
			<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BuildingAreaUnits)): ?>
			<li>Building Area Units: [unmapped_BuildingAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingAreaSource)): ?>
			<li>Living Area Source: [unmapped_LivingAreaSource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LivingAreaUnits)): ?>
			<li>Living Area Units: [unmapped_LivingAreaUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LandLot)): ?>
			<li>Land Lot: [unmapped_LandLot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Section)): ?>
			<li>Section: [unmapped_Section]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->BusinessType)): ?>
			<li>Business Type: [unmapped_BusinessType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElectricOnPropertyYN)): ?>
			<li>Electric On Property YN: [unmapped_ElectricOnPropertyYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
			<li>New Construction YN: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Property Condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->StructureType)): ?>
			<li>Structure Type: [unmapped_StructureType]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterbodyname)): ?>
			<li>Water Body Name: [waterbodyname]</li>
			<?php endif; ?>
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || 
				  isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{"Tax Annual Amount"}) ):?>
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
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zoning Description: [zonedescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Association Fee ($): [hoafee]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Tax Annual Amount"})): ?>
			<li>Tax Annual Amount: [unmapped_Tax Annual Amount]</li> <!-- not done -->
			<?php endif; ?>
				
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->utilities) ||
			 	  isset($single_property->cooling) || isset($single_property->unmapped->CoolingYN) || isset($single_property->heating) || isset($single_property->unmapped->HeatingYN) || isset($single_property->sewer) || 
				  isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
			<li>Cooling YN: [unmapped_CoolingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
			<li>Heating YN: [unmapped_HeatingYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>