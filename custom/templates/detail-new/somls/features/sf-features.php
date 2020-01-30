<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{"Fenced Type"}) || isset($single_property->unmapped->Substructure) || isset($single_property->unmapped->Street) || isset($single_property->unmapped->{"Cross Street Address"}) || isset($single_property->unmapped->{"Alarm Type"}) ||
			  isset($single_property->unmapped->View) || isset($single_property->unmapped->Terrain) || isset($single_property->unmapped->Internet) || isset($single_property->vacant) || isset($single_property->unmapped->lngAREADESCRIPTION) ||
			  isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->appliances) || isset($single_property->construction) || isset($single_property->interiorfeatures) || isset($single_property->roofmaterial) ||
			  isset($single_property->unmapped->foundation) || isset($single_property->homeownassociation) || isset($single_property->lot) || isset($single_property->landdesc) || isset($single_property->lotdescription) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Fenced Type"})): ?>
			<li>Fence Type: [unmapped_Fenced Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Substructure)): ?>
			<li>Substructure: [unmapped_Substructure]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Street)): ?>
			<li>Street: [unmapped_Street]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street Address"})): ?>
			<li>Cross Street Address: [unmapped_Cross Street Address]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Alarm Type"})): ?>
			<li>Alarm Type: [unmapped_Alarm Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Terrain)): ?>
			<li>Terrain: [unmapped_Terrain]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Internet)): ?>
			<li>Internet: [unmapped_Internet]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngAREADESCRIPTION)): ?>
			<li>Area Description: [unmapped_lngAREADESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
			<li>Town Description: [unmapped_lngTOWNSDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Owner Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>Lot: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->landdesc)): ?>
			<li>Land Description: [landdesc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		
		<?php if( isset($single_property->garageparking) || isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking: [garageparking]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"Household Water Avlb"}) || isset($single_property->unmapped->{"Heat Source"}) || isset($single_property->aircondition) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Household Water Avlb"})): ?>
			<li>Water Available: [unmapped_Household Water Avlb]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Heat Source"})): ?>
			<li>Heat Source: [unmapped_Heat Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->aircondition)): ?>
			<li>Air Condition: [aircondition]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>

	<li class="cell">	
		
		<?php if( isset($single_property->unmapped->{"Tax Account#"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Tax Account#"})): ?>
			<li>Tax Account: [unmapped_Tax Account#]</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Gradeschool: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middleschool: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>Highschool: [highschool]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>