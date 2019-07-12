<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->style) || isset($single_property->waterviewfeatures)  ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<li>House Style: [style]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<li>Waterview: [waterviewfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront: [waterfront]</li>
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
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool)):?>
	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
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
		
		<?php if( isset($single_property->HOAManagementName) || isset($single_property->HOAManagementPhone) || isset($single_property->hoafee) || isset($single_property->feeinterval) ):?>
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
				<?php if( isset($single_property->feeinterval)): ?>
				<li>Fee Interval: [feeinterval]</li>
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
		
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Road Type : [roadtype]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		
		<?php /*if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Association Fee ($): [hoafee]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
			</ul>
		<?php endif;*/ ?>
	</li>					

</ul>
<ul class="zy-features-grid">
	<?php if( isset($single_property->bedrms1) || isset($single_property->fbths1) || isset($single_property->coldscrp1) || isset($single_property->headscrp1) || isset($single_property->frplcs1) || isset($single_property->flrs1) || isset($single_property->levels1) || isset($single_property->rms1) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #1</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bedrms1)): ?>
				<li>Beds: [bedrms1]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fbths1)): ?>
				<li>Baths: [fbths1]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp1)): ?>
				<li>Cooling: [coldscrp1]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp1)): ?>
				<li>Heating: [headscrp1]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs1)): ?>
				<li>Fireplaces: [frplcs1]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs1)): ?>
				<li>Floor: [flrs1]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->levels1)): ?>
				<li>Levels: [levels1]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->rms1)): ?>
				<li>Rooms: [rms1]</li>								
				<?php endif; ?>
			</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->bedrms2) || isset($single_property->fbths2) || isset($single_property->coldscrp2) || isset($single_property->headscrp2) || isset($single_property->frplcs2) || isset($single_property->flrs2) || isset($single_property->levels2) || isset($single_property->rms2) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #2</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bedrms2)): ?>
				<li>Beds: [bedrms2]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fbths2)): ?>
				<li>Baths: [fbths2]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp2)): ?>
				<li>Cooling: [coldscrp2]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp2)): ?>
				<li>Heating: [headscrp2]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs2)): ?>
				<li>Fireplaces: [frplcs2]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs2)): ?>
				<li>Floor: [flrs2]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->levels2)): ?>
				<li>Levels: [levels2]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->rms2)): ?>
				<li>Rooms: [rms2]</li>								
				<?php endif; ?>
			</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>

	<?php if( isset($single_property->bedrms3) || isset($single_property->fbths3) || isset($single_property->coldscrp3) || isset($single_property->headscrp3) || isset($single_property->frplcs3) || isset($single_property->flrs3) || isset($single_property->levels3) || isset($single_property->rms3) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #3</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bedrms3)): ?>
				<li>Beds: [bedrms3]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fbths3)): ?>
				<li>Baths: [fbths3]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp3)): ?>
				<li>Cooling: [coldscrp3]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp3)): ?>
				<li>Heating: [headscrp3]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs3)): ?>
				<li>Fireplaces: [frplcs3]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs3)): ?>
				<li>Floor: [flrs3]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->levels3)): ?>
				<li>Levels: [levels3]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->rms3)): ?>
				<li>Rooms: [rms3]</li>								
				<?php endif; ?>
			</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>		
	
	<?php if( isset($single_property->bedrms4) || isset($single_property->fbths4) || isset($single_property->coldscrp4) || isset($single_property->headscrp4) || isset($single_property->frplcs4) || isset($single_property->flrs4) || isset($single_property->levels4) || isset($single_property->rms4) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #4</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bedrms4)): ?>
				<li>Beds: [bedrms4]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fbths4)): ?>
				<li>Baths: [fbths4]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp4)): ?>
				<li>Cooling: [coldscrp4]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp4)): ?>
				<li>Heating: [headscrp4]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs4)): ?>
				<li>Fireplaces: [frplcs4]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs4)): ?>
				<li>Floor: [flrs4]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->levels4)): ?>
				<li>Levels: [levels4]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->rms4)): ?>
				<li>Rooms: [rms4]</li>								
				<?php endif; ?>
			</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
	<?php if( isset($single_property->bedrms5) || isset($single_property->fbths5) || isset($single_property->coldscrp5) || isset($single_property->headscrp5) || isset($single_property->frplcs5) || isset($single_property->flrs5) || isset($single_property->levels5) || isset($single_property->rms5) ):?>
	<li class="cell">
		<?php //if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Unit #5</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bedrms5)): ?>
				<li>Beds: [bedrms5]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fbths5)): ?>
				<li>Baths: [fbths5]</li>
				<?php endif; ?>
				<?php if( isset($single_property->coldscrp5)): ?>
				<li>Cooling: [coldscrp5]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->headscrp5)): ?>
				<li>Heating: [headscrp5]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->frplcs5)): ?>
				<li>Fireplaces: [frplcs5]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->flrs5)): ?>
				<li>Floor: [flrs5]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->levels5)): ?>
				<li>Levels: [levels5]</li>								
				<?php endif; ?>
				<?php if( isset($single_property->rms5)): ?>
				<li>Rooms: [rms5]</li>								
				<?php endif; ?>
			</ul>
		<?php //endif; ?>
	</li>						
	<?php endif; ?>	
	
</ul>
