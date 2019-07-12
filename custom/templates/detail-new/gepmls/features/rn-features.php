<ul class="zy-features-grid">
	<?php if( isset($single_property->style) || isset($single_property->construction)  || isset($single_property->roofmaterial)  || isset($single_property->unmapped->Level)  || isset($single_property->exteriorfeatures)  || isset($single_property->interiorfeatures)  || isset($single_property->fireplaces)  || isset($single_property->unmapped->{'Laundry Room Location'})  || isset($single_property->unmapped->Exemptions)  || isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})  || isset($single_property->unmapped->Defects)  || isset($single_property->unmapped->flooring)  || isset($single_property->unmapped->{'Windows/Treatments'})  || isset($single_property->unmapped->{'Patio Features'})  || isset($single_property->unmapped->{'Plan Description'})  || isset($single_property->unmapped->{'Kitchen Lighting'})  || isset($single_property->unmapped->Cabinets)  || isset($single_property->unmapped->{'Kitchen Sinks'})  || isset($single_property->unmapped->{'Bath Vanities'})  || isset($single_property->unmapped->Fencing)  || isset($single_property->unmapped->{'Rented?'}) || isset($single_property->unmapped->{"Maid's Room"}) || isset($single_property->unmapped->{"Is Property Also For Lease?"}) || isset($single_property->unmapped->{"New Home or Resale"}) || isset($single_property->unmapped->{"Lockbox Type"}) || isset($single_property->vacant) || isset($single_property->lotsize) || isset($single_property->schooldistrict) || isset($single_property->appliances) || isset($single_property->lotdescription) || isset($single_property->specialfinancing) || isset($single_property->zoning) || isset($single_property->waterbodyname) || isset($single_property->landdesc) || isset($single_property->unmapped->{"Garage: Carport"}) || isset($single_property->unmapped->Carpet) || isset($single_property->unmapped->{'Guard Hse/Svc'}) || isset($single_property->unmapped->{'Owner Pays'}) || isset($single_property->tenantexpanses) || isset($single_property->leaseterms) || isset($single_property->secdeposit) || isset($single_property->petsallowed) || isset($single_property->termsfeature) || isset($single_property->handicapaccess) || isset($single_property->unmapped->{"Distance to Cable"}) || isset($single_property->unmapped->{"Distance to Water"}) || isset($single_property->unmapped->{"Distance to Sewer"}) || isset($single_property->unmapped->{"Distance to Gas"}) || isset($single_property->unmapped->{"Distance to Phone"}) || isset($single_property->unmapped->{"Distance to Electrical"}) || isset($single_property->unmapped->{"General Access"}) || isset($single_property->unmapped->{"Utilities Expansion Charge"}) || isset($single_property->unmapped->{"Property Access"}) || isset($single_property->unmapped->{"Flood Zone"}) || isset($single_property->survey) || isset($single_property->unmapped->Miscellaneous) || isset($single_property->unitno) || isset($single_property->leadpaint) || isset($single_property->amenities) || isset($single_property->nobuildings) || isset($single_property->termofrental) || isset($single_property->unmapped->{"Packages Includes"}) || isset($single_property->unmapped->{"Data Doc"}) || isset($single_property->unmapped->Verification) || isset($single_property->unmapped->{"Door Height"}) || isset($single_property->unmapped->{"Finished Space Y/N"}) || isset($single_property->unmapped->{"Sale Includes"}) || isset($single_property->unmapped->{"Best Use"}) || isset($single_property->grossannualincome) || isset($single_property->location) || isset($single_property->ceilingheight) || isset($single_property->unmapped->{"Empowerment_Zone"}) || isset($single_property->unmapped->Improved) || isset($single_property->facingdirection) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->style)): ?>
				<li>House Style: [style]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Level)): ?>
				<li>Level: [unmapped_Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Laundry Room Location'})): ?>
				<li>Laundry Room Location: [unmapped_Laundry Room Location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Exemptions)): ?>
				<li>Exemptions: [unmapped_Exemptions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})): ?>
				<li>Kitchen Cntrp & Backsplashes: [unmapped_Kitchen Cntrp & Backsplashes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Defects)): ?>
				<li>Defects: [unmapped_Defects]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->flooring)): ?>
				<li>Floor: [unmapped_flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Windows/Treatments'})): ?>
				<li>Windows/Treatments: [unmapped_Windows/Treatments]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Patio Features'})): ?>
				<li>Patio Features: [unmapped_Patio Features]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Plan Description'})): ?>
				<li>Plan Description: [unmapped_Plan Description]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Lighting'})): ?>
				<li>Kitchen Lighting: [unmapped_Kitchen Lighting]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Cabinets)): ?>
				<li>Cabinets: [unmapped_Cabinets]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Sinks'})): ?>
				<li>Kitchen Sinks: [unmapped_Kitchen Sinks]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bath Vanities'})): ?>
				<li>Bath Vanities: [unmapped_Bath Vanities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fencing)): ?>
				<li>Fencing: [unmapped_Fencing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Rented?'})): ?>
				<li>Rented?: [unmapped_Rented?]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Maid's Room"})): ?>
				<li>Maid's Room: [unmapped_Maid's Room]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Lockbox Type"})): ?>
				<li>Lockbox Type: [unmapped_Lockbox Type]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"New Home or Resale"})): ?>
				<li>New Home or Resale: [unmapped_New Home or Resale]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Is Property Also For Lease?"})): ?>
				<li>Is Property Also For Lease?: [unmapped_Is Property Also For Lease?]</li>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<li>Vacant: [vacant]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotsize)): ?>
				<li>Lot Size: [lotsize]</li>
				<?php endif; ?>
				<?php if( isset($single_property->schooldistrict)): ?>
				<li>School District: [schooldistrict]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->specialfinancing)): ?>
				<li>Special Financing: [specialfinancing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<li>Waterbody Name: [waterbodyname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<li>Land Desc: [landdesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Garage: Carport"})): ?>
				<li>Garage: Carport: [unmapped_Garage: Carport]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Carpet)): ?>
				<li>Carpet: [unmapped_Carpet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Guard Hse/Svc'})): ?>
				<li>Guard Hse/Svc: [unmapped_Guard Hse/Svc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Owner Pays'})): ?>
				<li>Owner Pays: [unmapped_Owner Pays]</li>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<li>Tenant Expanses: [tenantexpanses]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leaseterms)): ?>
				<li>Lease Terms: [leaseterms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<li>Sec Deposit: [secdeposit]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Terms Feature: [termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Handicap Access: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Cable"})): ?>
				<li>Distance to Cable: [unmapped_Distance to Cable]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Water"})): ?>
				<li>Distance to Water: [unmapped_Distance to Water]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Sewer"})): ?>
				<li>Distance to Sewer: [unmapped_Distance to Sewer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Gas"})): ?>
				<li>Distance to Gas: [unmapped_Distance to Gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Phone"})): ?>
				<li>Distance to Phone: [unmapped_Distance to Phone]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Electrical"})): ?>
				<li>Distance to Electrical: [unmapped_Distance to Electrical]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"General Access"})): ?>
				<li>General Access: [unmapped_General Access]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Utilities Expansion Charge"})): ?>
				<li>Utilities Expansion Charge: [unmapped_Utilities Expansion Charge]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Property Access"})): ?>
				<li>Property Access: [unmapped_Property Access]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Flood Zone"})): ?>
				<li>Flood Zone: [unmapped_Flood Zone]</li>
				<?php endif; ?>
				<?php if( isset($single_property->survey)): ?>
				<li>Survey: [survey]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
				<li>Miscellaneous: [unmapped_Miscellaneous]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitno)): ?>
				<li>Unit no: [unitno]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leadpaint)): ?>
				<li>Lead Paint: [leadpaint]</li>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<li>Amenities: [amenities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobuildings)): ?>
				<li>No Buildings: [nobuildings]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termofrental)): ?>
				<li>Termofrental: [termofrental]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Packages Includes"})): ?>
				<li>Packages Includes: [unmapped_Packages Includes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Data Doc"})): ?>
				<li>Data Doc: [unmapped_Data Doc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Verification)): ?>
				<li>Verification: [unmapped_Verification]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Door Height"})): ?>
				<li>Door Height: [unmapped_Door Height]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Finished Space Y/N"})): ?>
				<li>Finished Space Y/N: [unmapped_Finished Space Y/N]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Sale Includes"})): ?>
				<li>Sale Includes: [unmapped_Sale Includes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Best Use"})): ?>
				<li>Best Use: [unmapped_Best Use]</li>
				<?php endif; ?>
				<?php if( isset($single_property->grossannualincome)): ?>
				<li>Gross Annual Income: [grossannualincome]</li>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<li>Location: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->ceilingheight)): ?>
				<li>Ceiling Height: [ceilingheight]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Empowerment_Zone"})): ?>
				<li>Empowerment Zone: [unmapped_Empowerment Zone]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Improved)): ?>
				<li>Improved: [unmapped_Improved]</li>
				<?php endif; ?>
				<?php if( isset($single_property->facingdirection)): ?>
				<li>Facing Direction: [facingdirection]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php /*if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
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
	<?php endif;*/ ?>
	
	<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
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
	</li>
		<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garageparking) || isset($single_property->parkingfeature) ):?>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Deposits, Inclusions</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->firstmonreqd)): ?>
				<li>1st Month: [firstmonreqd]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lastmonreqd)): ?>
				<li>Last Month: [lastmonreqd]</li>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<li>Secutity: [secdeposit]</li> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<li>Rent Includes: [rentfeeincludes]</li> <!-- not done -->
				</tr>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	</li>					

</ul>
<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) || isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) || isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) || isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
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
		
		<?php if( isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed2dimen)): ?>
				<li>Size: [bed2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<li>Level: [bed2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2dscrp)): ?>
				<li>Features: [bed2dscrp]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed3dimen)): ?>
				<li>Size: [bed3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<li>Level: [bed3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3dscrp)): ?>
				<li>Features: [bed3dscrp]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed4dimen)): ?>
				<li>Size: [bed4dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<li>Level: [bed4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4dscrp)): ?>
				<li>Features: [bed4dscrp]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bed5dimen)): ?>
				<li>Size: [bed5dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<li>Level: [bed5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5dscrp)): ?>
				<li>Features: [bed5dscrp]</li>								
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bth1dimen)): ?>
				<li>Size: [bth1dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<li>Level: [bth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<li>Features: [bth1dscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bth2dimen)): ?>
				<li>Size: [bth2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<li>Level: [bth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<li>Features: [bth2dscrp]</li>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->bth3dimen)): ?>
				<li>Size: [bth3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<li>Level: [bth3level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<li>Features: [bth3dscrp]</li>
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
		
	</li>					

</ul>