<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || 
			  isset($single_property->flooring) /*|| isset($single_property->style)*/ || isset($single_property->waterviewfeatures) || isset($single_property->bldgsqfeet) || isset($single_property->area) || isset($single_property->unmapped->AttachedGarageYN) ||
			  isset($single_property->construction) || isset($single_property->unmapped->Fencing) || isset($single_property->unmapped->Levels) || isset($single_property->roofmaterial) || isset($single_property->unmapped->WaterfrontYN) ||
			  isset($single_property->unmapped->FireplaceYN) || isset($single_property->unmapped->AboveGradeFinishedArea) || isset($single_property->appliances) || isset($single_property->furnished) || isset($single_property->interiorfeatures) ||
			  isset($single_property->bldgsqfeet) || isset($single_property->leaseterms) || isset($single_property->petsallowed) || isset($single_property->unmapped->PropertyAttachedYN) || isset($single_property->assocsecurity) ):?>
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
			<?php /*if( isset($single_property->style)): ?>
			<li>House Style: [style]</li>
			<?php endif;*/ ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [stylewaterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->bldgsqfeet)): ?>
			<li>SqFt.: [bldgsqfeet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->area)): ?>
			<li>Area: [area]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage YN: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Fencing)): ?>
			<li>Fencing: [unmapped_Fencing]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->Levels)): ?>
			<li>Levels: [unmapped_Levels]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
			<li>Waterfront YN: [unmapped_WaterfrontYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->AboveGradeFinishedArea)): ?>
			<li>Above Grade Finished Area: [unmapped_AboveGradeFinishedArea]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->furnished)): ?>
			<li>Furnished: [furnished]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->bldgsqfeet)): ?>
			<li>Building Area Total: [bldgsqfeet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->leaseterms)): ?>
			<li>Lease Term: [leaseterms]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
			<li>Property Attached YN: [unmapped_PropertyAttachedYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>	
			
			<?php if( za_is_ygl( $single_property ) ): ?>
			
			<?php if( isset($single_property->rentprice)): ?>
			<li>Rent Amount: [rentprice]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitlevel)): ?>
			<li>Unit Level: [unitlevel]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet: [petrestrictionsallow]</li>
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
			<?php if( isset($single_property->dateavailableformatted)): ?>
			<li>Avail Date: [dateavailableformatted]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->butype)): ?>
			<li>Building Type: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->student)): ?>
			<li>Student: [student]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->facilities)): ?>
			<li>Features: [facilities]</li>
			<?php endif; ?>	
			
			<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coolingzones)): ?>
			<li>Cool Zones: [coolingzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heat Source: [heating]</li>
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
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ): ?>
		<h3 class="zy-feature-title">Schools</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Elimentary School: [gradeschool]</li>
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
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) || isset($single_property->parkingfeature) ):?>
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
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
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