<ul class="zy-features-grid">

	<?php if( isset($single_property->basement) || isset($single_property->citype) || isset($single_property->construction) || isset($single_property->dividable) || isset($single_property->noofdrivingdoors) || 
			  isset($single_property->elevator) || isset($single_property->expandable) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || 
			  isset($single_property->noofrestrooms) || isset($single_property->sprinklers) || isset($single_property->utilities) || isset($single_property->unmapped->LivingArea) || isset($single_property->roofmaterial) || 
		 	 isset($single_property->utilities) || isset($single_property->zoning) || isset($single_property->petsallowed) || isset($single_property->petrestrictionsallow) ||
		  	isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->RoadFrontageType) || isset($single_property->waterfrontflag) ||
			isset($single_property->unmapped->BuildingAreaSource) || isset($single_property->handicapaccess) || isset($single_property->unmapped->GrossScheduledIncome) || isset($single_property->unmapped->ListingTerms) || isset($single_property->netoperatinginc) ||
			isset($single_property->unmapped->OperatingExpense) || isset($single_property->possession) || isset($single_property->unmapped->UnparsedAddress) || isset($single_property->unmapped->ZoningDescription) || isset($single_property->unmapped->ZoningDescription) || 
			isset($single_property->unmapped->RoadFrontageFeet) || isset($single_property->squarefeet) || isset($single_property->unmapped->ExistingLeaseYN) || isset($single_property->unmapped->ProtectionPeriod) || isset($single_property->unmapped->Settlement) || 
			isset($single_property->unmapped->BuildingAreaSource) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->citype)): ?>
				<li>Commercial Type: [citype]</li>
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
				<?php if( isset($single_property->unmapped->LivingArea)): ?>
				<li>Building Area Total: [unmapped_LivingArea]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
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

				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadFrontageType)): ?>
				<li>Road Frontage Type: [unmapped_RoadFrontageType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront YN: [waterfrontflag]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BuildingAreaSource)): ?>
				<li>Building Area Source: [unmapped_BuildingAreaSource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Accessibility Features: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GrossScheduledIncome)): ?>
				<li>Gross Scheduled Income: [unmapped_GrossScheduledIncome]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ListingTerms)): ?>
				<li>Listing Terms: [unmapped_ListingTerms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->netoperatinginc)): ?>
				<li>Net Operating Income: [netoperatinginc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->OperatingExpense)): ?>
				<li>Operating Expense: [unmapped_OperatingExpense]</li>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<li>Possession: [possession]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UnparsedAddress)): ?>
				<li>Unparsed Address: [unmapped_UnparsedAddress]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ZoningDescription)): ?>
				<li>Zoning: [unmapped_ZoningDescription]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->RoadFrontageFeet)): ?>
				<li>Road Frontage Feet: [unmapped_RoadFrontageFeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->squarefeet)): ?>
				<li>Sq Ft Office: [squarefeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ExistingLeaseYN)): ?>
				<li>Existing Lease YN: [unmapped_ExistingLeaseYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ProtectionPeriod)): ?>
				<li>Protection Period: [unmapped_ProtectionPeriod]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Settlement)): ?>
				<li>Settlement: [unmapped_Settlement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BuildingAreaSource)): ?>
				<li>Building Area Source: [unmapped_BuildingAreaSource]</li>
				<?php endif; ?>
			
		</ul>
	</li>
	<?php endif; ?>
	
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
		
		<?php if( ( isset($single_property->parkingspaces) && $single_property->parkingspaces ) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingspaces) && $single_property->parkingspaces ): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Features: [parkingfeature]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) || isset($single_property->unmapped->HighSchoolDistrict) ):?>
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
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
	</li>						
	<?php endif; ?>

	<li class="cell">
		
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || 
				isset($single_property->reqdownassociation) || isset($single_property->unmapped->TaxAmountSummer) || isset($single_property->unmapped->TaxAmountWinter) || isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
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
				

				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association YN: [reqdownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxAmountSummer)): ?>
				<li>Tax Amount Summer: [unmapped_TaxAmountSummer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxAmountWinter)): ?>
				<li>Tax Amount Winter: [unmapped_TaxAmountWinter]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TaxOtherAnnualAssessmentAmount)): ?>
				<li>Assessment: [unmapped_TaxOtherAnnualAssessmentAmount]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>