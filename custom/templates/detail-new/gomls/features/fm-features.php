<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->unmapped->Foreclosure) || isset($single_property->unmapped->{"Type Property"}) || isset($single_property->unmapped->{"Apx SqFt 1st Level"}) || isset($single_property->unmapped->Attic) || isset($single_property->unmapped->Tract) ||
			  isset($single_property->unmapped->{"Tax District"}) || isset($single_property->unmapped->{"Bonus Room Level"}) || isset($single_property->unmapped->{"Great Room Level"}) || isset($single_property->unmapped->{"Foyer Level"}) || isset($single_property->unmapped->{"Baths Bsmt"}) ||
			  isset($single_property->unmapped->{"Apx SqFt 3rd Level"}) || isset($single_property->unmapped->{"Bedrooms-Bsmt"}) || isset($single_property->unmapped->{"Apx SqFt 2nd Level"}) || isset($single_property->unmapped->{"Apx Wooded Acres"}) || isset($single_property->unmapped->Fireplace) ||
			  isset($single_property->buildingconstruction) || isset($single_property->appliances) || isset($single_property->roofmaterial) || isset($single_property->interiorfeatures) || isset($single_property->foundation) ||
			  isset($single_property->construction) || isset($single_property->specialfinancing) || isset($single_property->basement) || isset($single_property->frontage) || isset($single_property->unmapped->lngTOWNSDESCRIPTION) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
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
				<?php if( isset($single_property->unmapped->Foreclosure)): ?>
				<li>Foreclosure: [unmapped_Foreclosure]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Type Property"})): ?>
				<li>Type Property: [unmapped_Type Property]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Apx SqFt 1st Level"})): ?>
				<li>Apx SqFt 1st Level: [unmapped_Apx SqFt 1st Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Attic)): ?>
				<li>Attic: [unmapped_Attic]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Tract)): ?>
				<li>Tract: [unmapped_Tract]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Tax District"})): ?>
				<li>Tax District: [unmapped_Tax District]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Bonus Room Level"})): ?>
				<li>Bonus Room Level: [unmapped_Bonus Room Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Great Room Level"})): ?>
				<li>Great Room Level: [unmapped_Great Room Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Foyer Level"})): ?>
				<li>Foyer Level: [unmapped_Foyer Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Baths Bsmt"})): ?>
				<li>Baths Bsmt: [unmapped_Baths Bsmt]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Apx SqFt 3rd Level"})): ?>
				<li>Apx SqFt 3rd Level: [unmapped_Apx SqFt 3rd Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Bedrooms-Bsmt"})): ?>
				<li>Bedrooms-Bsmt: [unmapped_Bedrooms-Bsmt]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Apx SqFt 2nd Level"})): ?>
				<li>Apx SqFt 2nd Level: [unmapped_Apx SqFt 2nd Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Apx Wooded Acres"})): ?>
				<li>Apx Wooded Acres: [unmapped_Apx Wooded Acres]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<li>Fireplace: [unmapped_Fireplace]</li>
				<?php endif; ?>
				<?php if( isset($single_property->buildingconstruction)): ?>
				<li>Building Construction: [buildingconstruction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interiorfeatures: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->specialfinancing)): ?>
				<li>Special Financing: [specialfinancing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<li>Frontage: [frontage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
				<li>Towns Description: [unmapped_lngTOWNSDESCRIPTION]</li>
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
	
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->aircondition) ):?>
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
				<?php if( isset($single_property->aircondition)): ?>
				<li>Aircondition: [aircondition]</li>
				<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Grade School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->unmapped->{"Garage/Carport"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->{"Garage/Carport"})): ?>
				<li>Garage/Carport: [unmapped_Garage/Carport]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="zy-feature-title">Taxes & Considerations</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>