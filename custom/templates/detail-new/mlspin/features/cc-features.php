<ul class="zy-features-grid">
	<?php if( isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->cctype) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->laundrylevel) || isset($single_property->unitlevel) || isset($single_property->petsallowed) || isset($single_property->waterviewfeatures) || isset($single_property->waterfront)  ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->cctype)): ?>
				<li>Condo Style: [cctype]</li>
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
				<li>Flooring: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundrylevel)): ?>
				<li>Laundry: [laundrylevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitlevel)): ?>
				<li>Unit Level: [unitlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<li>Waterview: [waterviewfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront: [waterfront]</li>
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
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->mbrdimen)): ?>
				<li>Size: [mbrdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<li>Level: [mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<li>Features: [mbrdscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed2DIMEN)): ?>
				<li>Size: [bed2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<li>Level: [bed2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<li>Features: [bed2DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed3DIMEN)): ?>
				<li>Size: [bed3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<li>Level: [bed3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<li>Features: [bed3DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed4DIMEN)): ?>
				<li>Size: [bed4DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<li>Level: [bed4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<li>Features: [bed4DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed5DIMEN)): ?>
				<li>Size: [bed5DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<li>Level: [bed5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5DSCRP)): ?>
				<li>Features: [bed5DSCRP]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1DIMEN) || isset($single_property->bth1LEVEL) || isset($single_property->bth1DSCRP) || isset($single_property->bth2DIMEN) || isset($single_property->bth2LEVEL) || isset($single_property->bth2DSCRP) || isset($single_property->bth3DIMEN) || isset($single_property->bth3LEVEL) || isset($single_property->bth3DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1DIMEN) || isset($single_property->bth1LEVEL) || isset($single_property->bth1DSCRP) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth1DIMEN)): ?>
				<li>Size: [bth1DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<li>Level: [bth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1DSCRP)): ?>
				<li>Features: [bth1DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2DIMEN) || isset($single_property->bth2LEVEL) || isset($single_property->bth2DSCRP) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth2DIMEN)): ?>
				<li>Size: [bth2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<li>Level: [bth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2DSCRP)): ?>
				<li>Features: [bth2DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3DIMEN) || isset($single_property->bth3LEVEL) || isset($single_property->bth3DSCRP) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth3DIMEN)): ?>
				<li>Size: [bth3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<li>Level: [bth3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3DSCRP)): ?>
				<li>Features: [bth3DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->kitdimen)): ?>
				<li>Size: [kitdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<li>Level: [kitlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Features: [kitdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->famdimen)): ?>
				<li>Size: [famdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<li>Level: [famlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<li>Features: [famdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->livdimen)): ?>
				<li>Size: [livdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<li>Level: [livlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Features: [livdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->dindimen)): ?>
				<li>Size: [dindimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<li>Level: [dinlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Features: [dindscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<li>Size: [oth1DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<li>Level: [oth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<li>Features: [oth1DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth2DIMEN)): ?>
				<li>Size: [oth2DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth2LEVEL)): ?>
				<li>Level: [oth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth2DSCRP)): ?>
				<li>Features: [oth2DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth3DIMEN)): ?>
				<li>Size: [oth3DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth3LEVEL)): ?>
				<li>Level: [oth3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth3DSCRP)): ?>
				<li>Features: [oth3DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #4</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth4DIMEN)): ?>
				<li>Size: [oth4DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth4LEVEL)): ?>
				<li>Level: [oth4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth4DSCRP)): ?>
				<li>Features: [oth4DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #5</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth5DIMEN)): ?>
				<li>Size: [oth5DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth5LEVEL)): ?>
				<li>Level: [oth5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth5DSCRP)): ?>
				<li>Features: [oth5DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #6</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth6DIMEN)): ?>
				<li>Size: [oth6DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth6LEVEL)): ?>
				<li>Level: [oth6LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth6DSCRP)): ?>
				<li>Features: [oth6DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>