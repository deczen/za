<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) || isset($single_property->listprice) || isset($single_property->waterfront) || isset($single_property->waterbodyname) || isset($single_property->restrictions) || isset($single_property->landdesc) || isset($single_property->direction) || isset($single_property->exteriorfeatures) || isset($single_property->lotdescription) || isset($single_property->beachdescription) ):?>
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
				
				<?php if( isset($single_property->listprice)): ?>
				<li>List Price: [listprice]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Water Front: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<li>Water Body: [waterbodyname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->restrictions)): ?>
				<li>Restrictions: [restrictions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<li>Land Description: [landdesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->direction)): ?>
				<li>Direction: [direction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachdescription)): ?>
				<li>Beach Description: [beachdescription]</li>
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
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilityconnections) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Utilities</h3>
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
				
				<?php if( isset($single_property->utilityconnections)): ?>
				<li>Utility Connections: [utilityconnections]</li>
				<?php endif; ?>								
			
		</ul>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		
		<?php if( isset($single_property->schooldistrict) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->schooldistrict)): ?>
				<li>District School: [schooldistrict]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
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