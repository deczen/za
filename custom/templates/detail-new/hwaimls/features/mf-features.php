<ul class="zy-features-grid">
	<?php if( isset($single_property->style) || isset($single_property->construction) || isset($single_property->roofmaterial) || isset($single_property->unmapped->Topography) || isset($single_property->location) || isset($single_property->flooring) || isset($single_property->unmapped->Inclusions) || isset($single_property->unmapped->StoriesType) || isset($single_property->unmapped->SecurityFeatures) || isset($single_property->parkingfeature) || isset($single_property->unmapped->CondoParkingUnit) || isset($single_property->unmapped->OccupantType) || isset($single_property->unmapped->FloodZone) || isset($single_property->unmapped->View) || isset($single_property->unmapped->PropertyFrontage) || isset($single_property->unmapped->FloorNumber) || isset($single_property->elevator) || isset($single_property->amenities) || isset($single_property->sitecondition) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Topography)): ?>
				<li>Topography: [unmapped_Topography]</li>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<li>Location: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Inclusions)): ?>
				<li>Inclusions: [unmapped_Inclusions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StoriesType)): ?>
				<li>Stories Type: [unmapped_StoriesType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SecurityFeatures)): ?>
				<li>Security Features: [unmapped_SecurityFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Feature: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CondoParkingUnit)): ?>
				<li>Condo Parking Unit: [unmapped_CondoParkingUnit]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->OccupantType)): ?>
				<li>Occupant Type: [unmapped_OccupantType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloodZone)): ?>
				<li>Flood Zone: [unmapped_FloodZone]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<li>View: [unmapped_View]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PropertyFrontage)): ?>
				<li>Property Frontage: [unmapped_PropertyFrontage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FloorNumber)): ?>
				<li>Floor Number: [unmapped_FloorNumber]</li>
				<?php endif; ?>
				<?php if( isset($single_property->elevator)): ?>
				<li>Elevator: [elevator]</li>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Site Condition: [sitecondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->AssociationCommunityName) || isset($single_property->unmapped->AssociationPhone) || isset($single_property->unmapped->AssociationFee) || isset($single_property->asscfeeincludes) || isset($single_property->hoafee) || isset($single_property->unmapped->HeatingFuel) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->ElectricitySource) || isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->GasSource) || isset($single_property->sewer) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
	<?php if( isset($single_property->unmapped->AssociationCommunityName) || isset($single_property->unmapped->AssociationPhone) || isset($single_property->unmapped->AssociationFee) || isset($single_property->asscfeeincludes) || isset($single_property->hoafee) ):?>
		<h3 class="zy-feature-title">Association information</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->AssociationCommunityName)): ?>
				<li>Association Community Name: [unmapped_AssociationCommunityName]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationPhone)): ?>
				<li>Association Phone: [unmapped_AssociationPhone]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->AssociationFee)): ?>
				<li>Association Fee: [unmapped_AssociationFee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoafee: [hoafee]</li>
				<?php endif; ?>			
			
		</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->HeatingFuel) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->ElectricitySource) || isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->GasSource) || isset($single_property->sewer) ):?>
		<h3 class="zy-feature-title">Heating, Cooling, Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->unmapped->HeatingFuel)): ?>
				<li>Heating Fuel: [unmapped_HeatingFuel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ElectricitySource)): ?>
				<li>Electricity Source: [unmapped_ElectricitySource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterSource)): ?>
				<li>Water Source: [unmapped_WaterSource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GasSource)): ?>
				<li>Gas Source: [unmapped_GasSource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
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
	</li>
	<?php endif; ?>

	<li class="cell">
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
		
		<?php if( isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-feature-title">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<ul class="zy-sub-list">
						
							<li>Room Type: [roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></li>
							<li>Room Level: [roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<li>Room Size: [roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></li>
							<?php endif; ?>
							<?php $Des = $roomLevels[$rkey]->roomDescription; ?>
							<?php if( isset($Des)): ?>
							<li>Room Feature: [roomLevels_<?php echo $rkey; ?>_roomDescription]</li>
							<?php endif; ?>
						
					</ul>
				<?php endforeach; ?>
					
			<?php
			endif;
		?>
		
	</li>					

</ul>

<?php /*
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
*/ ?>