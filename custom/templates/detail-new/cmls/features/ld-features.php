<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) || isset($single_property->construction) || isset($single_property->unmapped->ConstructionType) || isset($single_property->unmapped->ConstructionStatus) || isset($single_property->foundation) || isset($single_property->parkingfeature) || isset($single_property->unmapped->Driveway) || isset($single_property->equiplistavail) || isset($single_property->termsfeature) || isset($single_property->interiorfeatures) || isset($single_property->exteriorfeatures) || isset($single_property->unmapped->Porch) || isset($single_property->roofmaterial) || isset($single_property->unmapped->DoorsWindows) || isset($single_property->unmapped->LotDimension) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Land Details</h3>
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
				
				<!-- ADD NEW FIELDS -->
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ConstructionType)): ?>
				<li>Construction Type: [unmapped_ConstructionType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ConstructionStatus)): ?>
				<li>Construction Status: [unmapped_ConstructionStatus]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Features: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Driveway)): ?>
				<li>Driveway: [unmapped_Driveway]</li>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<li>Equipment: [equiplistavail]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Common Features: [termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Porch)): ?>
				<li>Porch: [unmapped_Porch]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->DoorsWindows)): ?>
				<li>Doors Windows: [unmapped_DoorsWindows]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotDimension)): ?>
				<li>Lot Dimension: [unmapped_LotDimension]</li>
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
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool)):?>
	<li class="cell">
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
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
				
				<!-- ADD NEW FIELD -->
				<?php if( isset($single_property->unmapped->WaterHeater)): ?>
				<li>Water Heater: [unmapped_WaterHeater]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">Schools</h3>
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
		
		<?php if( isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->HOAManagementName)): ?>
				<li>HOA Management: [HOAManagementName]</li>
				<?php endif; ?>
				<?php if( isset($single_property->HOAManagementPhone)): ?>
				<li>HOA Mgmt Phone: [HOAManagementPhone]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>HOA Fee: [hoafee]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-feature-title">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<ul class="zy-sub-list">
								<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></li>
							
								<li>Room Type: [roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></li>
						</ul>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
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