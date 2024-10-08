<ul class="zy-features-grid">

	<li class="cell">
	
		<?php if( 
			isset($single_property->amenities) ||
			isset($single_property->basement) || 
			isset($single_property->cctype) || 
			isset($single_property->exterior) ||
			isset($single_property->flooring) || 
			isset($single_property->laundrylevel) || 
			isset($single_property->unitlevel) || 
			isset($single_property->petsallowed) || 
			isset($single_property->waterviewfeatures) ||
			isset($single_property->waterfront) || 
			isset($single_property->facingdirection) || 
			isset($single_property->landdesc) || 
			isset($single_property->zoning) || 
			isset($single_property->schooldistrict) || 
			isset($single_property->construction) || 
			isset($single_property->roofmaterial) || 
			isset($single_property->termsfeature) || 
			isset($single_property->construction) ||
			
			isset($single_property->unmapped->NewConstructionYN) ||
			isset($single_property->unmapped->CoveredSpaces) ||
			isset($single_property->unmapped->FrontageLength) ||
			isset($single_property->unmapped->HorseYN) ||
			isset($single_property->unmapped->LotSizeDimensions) ||
			isset($single_property->unmapped->PoolPrivateYN) ||
			isset($single_property->unmapped->SpaYN) ||
			isset($single_property->unmapped->ViewYN) ||
			isset($single_property->waterfrontflag) ||
			isset($single_property->unmapped->AboveGradeFinishedArea) ||
			isset($single_property->unmapped->BasementFinished) ||
			isset($single_property->unmapped->BathroomsPartial) ||
			isset($single_property->unmapped->BuildingAreaTotal) ||
			isset($single_property->totalrooms) ||
			isset($single_property->hoafee) ||
			isset($single_property->reqdownassociation) ||
			isset($single_property->unmapped->CapRate) ||
			isset($single_property->unmapped->CrossStreet) ||
			isset($single_property->unmapped->CurrentUse) ||
			isset($single_property->unmapped->IrrigationWaterRightsAcres) ||
			isset($single_property->unmapped->LeaseConsideredYN) ||
			isset($single_property->unmapped->NumberOfUnitsLeased) ||
			isset($single_property->unmapped->NewConstructionYN) ||
			isset($single_property->unmapped->NumberOfPads) ||
			isset($single_property->unmapped->PowerProductionSolarYearInstall) ||
			isset($single_property->unmapped->PropertyAttachedYN) ||
			isset($single_property->sitecondition) ||
			isset($single_property->propsubtype) ||
			isset($single_property->unmapped->SeniorCommunityYN) ||
			isset($single_property->unmapped->ZoningDescription)
		):?>
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
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior Features: [exterior]</li>
			<?php endif; ?>
			<?php /*if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif;*/ ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundrylevel)): ?>
			<li>Laundry: [laundrylevel]</li>
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
			<?php if( isset($single_property->facingdirection)): ?>
			<li>Facing Direction: [facingdirection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->landdesc)): ?>
			<li>Land Desc: [landdesc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->schooldistrict)): ?>
			<li>School District: [schooldistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<li>Construction: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Terms Feature: [termsfeature]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->ConstStatus)): ?>
				<li>Const Status: [unmapped_ConstStatus]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
				<li>New Construction Y/N: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
				<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FrontageLength)): ?>
				<li>Frontage Length: [unmapped_FrontageLength]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->HorseYN)): ?>
				<li>Horse Y/N: [unmapped_HorseYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PoolPrivateYN)): ?>
				<li>Pool Private Y/N: [unmapped_PoolPrivateYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->SpaYN)): ?>
				<li>Spa Y/N: [unmapped_SpaYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->ViewYN)): ?>
				<li>View Y/N: [unmapped_ViewYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront Y/N: [waterfrontflag]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->AboveGradeFinishedArea)): ?>
				<li>Above Grade Finished Area: [unmapped_AboveGradeFinishedArea]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->BasementFinished)): ?>
				<li>Basement Finished: [unmapped_BasementFinished]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->BathroomsPartial)): ?>
				<li>Bathrooms Partial: [unmapped_BathroomsPartial]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->BuildingAreaTotal)): ?>
				<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->totalrooms)): ?>
				<li>Rooms Total: [totalrooms]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association Y/N: [reqdownassociation]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CapRate)): ?>
				<li>Capitalization Rate: [unmapped_CapRate]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CrossStreet)): ?>
				<li>Cross Street: [unmapped_CrossStreet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CurrentUse)): ?>
				<li>Current Use: [unmapped_CurrentUse]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->IrrigationWaterRightsAcres)): ?>
				<li>Irrigation Water Rights Acres: [unmapped_IrrigationWaterRightsAcres]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->LeaseConsideredYN)): ?>
				<li>Lease Considered Y/N: [unmapped_LeaseConsideredYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfUnitsLeased)): ?>
				<li>Number Of Units Leased: [unmapped_NumberOfUnitsLeased]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NewConstructionYN)): ?>
				<li>New Construction Y/N: [unmapped_NewConstructionYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->NumberOfPads)): ?>
				<li>Number Of Pads: [unmapped_NumberOfPads]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PowerProductionSolarYearInstall)): ?>
				<li>Power Production Solar Year Install: [unmapped_PowerProductionSolarYearInstall]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
				<li>Property Attached Y/N: [unmapped_PropertyAttachedYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->sitecondition)): ?>
				<li>Property Condition: [sitecondition]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
				<li>PSenior Community Y/N: [unmapped_SeniorCommunityYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->ZoningDescription)): ?>
				<li>Zoning Description: [unmapped_ZoningDescription]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileLength)): ?>
				<li>Mobile Length: [unmapped_MobileLength]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MobileWidth)): ?>
				<li>Mobile Width: [unmapped_MobileWidth]</li>
			<?php endif; ?>	

			<?php if( isset($single_property->handicapaccess)): ?>
				<li>Accessibility Features: [handicapaccess]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->exclusions)): ?>
			<li>Exclusions: [exclusions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LeaseAmount)): ?>
				<li>Lease Amount: [unmapped_LeaseAmount]</li>
			<?php endif; ?>	

			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
		</ul>
		
		<?php endif; ?>
		
		<?php if( isset($single_property->interiorfeatures) || isset($single_property->fireplaces) ):?>
		
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">

			
			<?php if( isset($single_property->interiorfeatures)): ?>
			<li>Interior Features: [interiorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			
		</ul>
		
		<?php endif; ?>
		
	</li>			
	
	<li class="cell">
	
		<?php if( 
			isset($single_property->aircondition) || 
			isset($single_property->cooling) || 
			isset($single_property->coolingzones) || 
			isset($single_property->heating) || 
			isset($single_property->heatzones) || 
			isset($single_property->energyfeatures) || 
			isset($single_property->electricfeature) || 
			isset($single_property->hotwater) || 
			isset($single_property->sewer) || 
			isset($single_property->water) ||
			isset($single_property->unmapped->CoolingYN) ||
			isset($single_property->unmapped->FireplaceYN) ||
			isset($single_property->fireplaces) ||
			isset($single_property->unmapped->HeatingYN)
		):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->aircondition)): ?>
			<li>Air Condition: [aircondition]</li>
			<?php endif; ?>
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
			<?php if( isset($single_property->utilities)): ?>
			<li>utilities: [utilities]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->unmapped->CoolingYN)): ?>
				<li>Cooling Y/N: [unmapped_CoolingYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
				<li>Fireplace Y/N: [unmapped_FireplaceYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces Total: [fireplaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->HeatingYN)): ?>
				<li>Heating Y/N: [unmapped_HeatingYN]</li>
			<?php endif; ?>			
			
		</ul>
		<?php endif; ?>
		
		<?php if(
			isset($single_property->gradeschool) || 
			isset($single_property->middleschool) || 
			isset($single_property->highschool) 
		):?>
		
		<h3 class="zy-feature-title">Schools</h3>
		
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Grade School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			
		</ul>
		
		<?php endif; ?>
		
	</li>

	<li class="cell">
		<?php if( 
			isset($single_property->garagespaces) || 
			isset($single_property->parkingspaces) || 
			isset($single_property->roadtype) ||
			isset($single_property->unmapped->AttachedGarageYN) ||
			isset($single_property->unmapped->CarportSpaces) ||
			isset($single_property->unmapped->CarportYN) ||
			isset($single_property->unmapped->GarageYN) ||
			isset($single_property->unmapped->OpenParkingSpaces) ||
			isset($single_property->unmapped->OpenParkingYN)
		):?>
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
			
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
				<li>Attached Garage Y/N: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CarportSpaces)): ?>
				<li>Carport Spaces: [unmapped_CarportSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->CarportYN)): ?>
				<li>Carport Y/N: [unmapped_CarportYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->GarageYN)): ?>
				<li>Garage Y/N: [unmapped_GarageYN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->OpenParkingSpaces)): ?>
				<li>Open Parking Spaces: [unmapped_OpenParkingSpaces]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->OpenParkingYN)): ?>
				<li>OpenParking Y/N: [unmapped_OpenParkingYN]</li>
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
		
		<?php if( isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->homeownassociation)): ?>
			<li>Home Own Association: [homeownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Assc fee includes: [asscfeeincludes]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->nolivinglevels) ):?>
		<h3 class="zy-feature-title">Room Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->nolivinglevels)): ?>
			<li>No Living Levels: [nolivinglevels]</li>
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