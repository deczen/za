<ul class="zy-features-grid">
	<?php if( isset($single_property->construction) || isset($single_property->interiorfeatures) || isset($single_property->lotdescription) || isset($single_property->lotsize) || isset($single_property->lot) || isset($single_property->yearbuilt) || isset($single_property->zoning) || isset($single_property->listingagreement) || isset($single_property->electricfeature) || isset($single_property->appliances) || isset($single_property->bldgsqfeet) || isset($single_property->grossannualexp) || isset($single_property->grossannualincome) || isset($single_property->netoperatinginc) || isset($single_property->nounits) || isset($single_property->unitplacement) || isset($single_property->vacant) || isset($single_property->style) || isset($single_property->nobedrooms) || isset($single_property->nofullbaths) || isset($single_property->nohalfbaths) || isset($single_property->nobaths) || isset($single_property->norooms) || isset($single_property->block) || isset($single_property->tenantexpanses) || isset($single_property->rentfeeincludes) || isset($single_property->rentprice) || isset($single_property->secdeposit) || isset($single_property->smokingallowed) || isset($single_property->gas) || isset($single_property->listno) || isset($single_property->dayssincelisting) || isset($single_property->yearbuiltdescrp) || isset($single_property->sitecondition) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotsize)): ?>
				<li>Lot Size: [lotsize]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lot)): ?>
				<li>Lot: [lot]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuilt)): ?>
				<li>Built Year: [yearbuilt]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->listingagreement)): ?>
				<li>Listing Agreement: [listingagreement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric Feature: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<li>Building Square Feet: [bldgsqfeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->grossannualexp)): ?>
				<li>Gross Annual Expense: [grossannualexp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->grossannualincome)): ?>
				<li>Gross Annual Income: [grossannualincome]</li>
				<?php endif; ?>
				<?php if( isset($single_property->netoperatinginc)): ?>
				<li>Net Operating: [netoperatinginc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nounits)): ?>
				<li>Units: [nounits]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitplacement)): ?>
				<li>Unit Placement: [unitplacement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<li>Vacant: [vacant]</li>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobedrooms)): ?>
				<li>Bedrooms: [nobedrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nofullbaths)): ?>
				<li>Full Bath: [nofullbaths]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nohalfbaths)): ?>
				<li>Half Bath: [nohalfbaths]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobaths)): ?>
				<li>Number Of Bathrooms: [nobaths]</li>
				<?php endif; ?>
				<?php if( isset($single_property->norooms)): ?>
				<li>Number Of Rooms: [norooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->block)): ?>
				<li>Block: [block]</li>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<li>Tenant Expanses: [tenantexpanses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<li>Rent Fee Includes: [rentfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->rentprice)): ?>
				<li>Rent Price: [rentprice]</li>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<li>Security Deposite: [secdeposit]</li>
				<?php endif; ?>
				<?php if( isset($single_property->smokingallowed)): ?>
				<li>Smoking Allowed: [smokingallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->gas)): ?>
				<li>Gas: [gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->listno)): ?>
				<li>List No: [listno]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dayssincelisting)): ?>
				<li>Days Since Listing: [dayssincelisting]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<li>Built Year Description: [yearbuiltdescrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Site Condition: [sitecondition]</li>
				<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->aircondition) || isset($single_property->sewer) || isset($single_property->coolingunits) || isset($single_property->sprinklers) || isset($single_property->heatunits) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->aircondition)): ?>
				<li>Air Condition: [aircondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coolingunits)): ?>
				<li>Cooling: [coolingunits]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sprinklers)): ?>
				<li>Sprinklers: [sprinklers]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heatunits)): ?>
				<li>Heat Units: [heatunits]</li>
				<?php endif; ?>			
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>
