<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || 
			  isset($single_property->flooring) || isset($single_property->waterviewfeatures)  || isset($single_property->unmapped->Basement)  || isset($single_property->unmapped->Well)  || isset($single_property->unmapped->Septic)  || 
			  isset($single_property->unmapped->Bathrooms) || isset($single_property->vacant) || isset($single_property->nobedrooms) || isset($single_property->nofullbaths) || isset($single_property->nohalfbaths) || 
			  isset($single_property->lotsize) || isset($single_property->yearbuilt) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->amenities)): ?>
			<li>Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [stylewaterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Basement)): ?>
			<li>Basement: [unmapped_Basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Well)): ?>
			<li>Well: [unmapped_Well]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Septic)): ?>
			<li>Septic: [unmapped_Septic]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Bathrooms)): ?>
			<li>Bathrooms: [unmapped_Bathrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nobedrooms)): ?>
			<li>No of Bedrooms: [nobedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nofullbaths)): ?>
			<li>No of Full Baths: [nofullbaths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->nohalfbaths)): ?>
			<li>No of Half Baths: [nohalfbaths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Built: [yearbuilt]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
	<li class="cell">
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
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>				
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Type: [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking: [garageparking]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>	

	<li>
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
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
		<?php endif; ?>
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