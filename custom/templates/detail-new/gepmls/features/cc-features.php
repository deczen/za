<ul class="zy-features-grid">
	<?php if( /*isset($single_property->style) ||*/ isset($single_property->construction)  || isset($single_property->roofmaterial)  || isset($single_property->unmapped->Level)  || isset($single_property->exteriorfeatures)  || isset($single_property->interiorfeatures)  || isset($single_property->fireplaces)  || isset($single_property->unmapped->{'Laundry Room Location'})  || isset($single_property->unmapped->Exemptions)  || isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})  || isset($single_property->unmapped->Defects)  || isset($single_property->unmapped->flooring)  || isset($single_property->unmapped->{'Windows/Treatments'})  || isset($single_property->unmapped->{'Patio Features'})  || isset($single_property->unmapped->{'Plan Description'})  || isset($single_property->unmapped->{'Kitchen Lighting'})  || isset($single_property->unmapped->Cabinets)  || isset($single_property->unmapped->{'Kitchen Sinks'})  || isset($single_property->unmapped->{'Bath Vanities'})  || isset($single_property->unmapped->Fencing)  || isset($single_property->unmapped->{'Rented?'}) || isset($single_property->unmapped->{"Maid's Room"}) || isset($single_property->unmapped->{"Is Property Also For Lease?"}) || isset($single_property->unmapped->{"New Home or Resale"}) || isset($single_property->unmapped->{"Lockbox Type"}) || isset($single_property->vacant) || isset($single_property->lotsize) || isset($single_property->schooldistrict) || isset($single_property->appliances) || isset($single_property->lotdescription) || isset($single_property->specialfinancing) || isset($single_property->zoning) || isset($single_property->waterbodyname) || isset($single_property->landdesc) || isset($single_property->unmapped->{"Garage: Carport"}) || isset($single_property->unmapped->Carpet) || isset($single_property->unmapped->{'Guard Hse/Svc'}) || isset($single_property->unmapped->{'Owner Pays'}) || isset($single_property->tenantexpanses) || isset($single_property->leaseterms) || isset($single_property->secdeposit) || isset($single_property->petsallowed) || isset($single_property->termsfeature) || isset($single_property->handicapaccess) || isset($single_property->unmapped->{"Distance to Cable"}) || isset($single_property->unmapped->{"Distance to Water"}) || isset($single_property->unmapped->{"Distance to Sewer"}) || isset($single_property->unmapped->{"Distance to Gas"}) || isset($single_property->unmapped->{"Distance to Phone"}) || isset($single_property->unmapped->{"Distance to Electrical"}) || isset($single_property->unmapped->{"General Access"}) || isset($single_property->unmapped->{"Utilities Expansion Charge"}) || isset($single_property->unmapped->{"Property Access"}) || isset($single_property->unmapped->{"Flood Zone"}) || isset($single_property->survey) || isset($single_property->unmapped->Miscellaneous) || isset($single_property->unitno) || isset($single_property->leadpaint) || isset($single_property->amenities) || isset($single_property->nobuildings) || isset($single_property->termofrental) || isset($single_property->unmapped->{"Packages Includes"}) || isset($single_property->unmapped->{"Data Doc"}) || isset($single_property->unmapped->Verification) || isset($single_property->unmapped->{"Door Height"}) || isset($single_property->unmapped->{"Finished Space Y/N"}) || isset($single_property->unmapped->{"Sale Includes"}) || isset($single_property->unmapped->{"Best Use"}) || isset($single_property->grossannualincome) || isset($single_property->location) || isset($single_property->ceilingheight) || isset($single_property->unmapped->{"Empowerment_Zone"}) || isset($single_property->unmapped->Improved) || isset($single_property->facingdirection) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php /*if( isset($single_property->style)): ?>
				<li>House Style: [style]</li>
				<?php endif;*/ ?>
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
				
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities) || isset($single_property->unmapped->Metering) || isset($single_property->unmapped->{"HOA Required?"}) || isset($single_property->homeownassociation) || isset($single_property->unmapped->{"HOA Fees Y/N"}) || isset($single_property->unmapped->{"HOA Frequency"}) || isset($single_property->unmapped->{"HOA Dues"}) || isset($single_property->asscfeeincludes) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities) || isset($single_property->unmapped->Metering) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer Utilities: [sewer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water Utilities: [water]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->Metering)): ?>
				<li>Metering: [unmapped_Metering]</li>
				<?php endif; ?>				
			</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"HOA Required?"}) || isset($single_property->homeownassociation) || isset($single_property->unmapped->{"HOA Fees Y/N"}) || isset($single_property->unmapped->{"HOA Frequency"}) || isset($single_property->unmapped->{"HOA Dues"}) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Association information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->{"HOA Required?"})): ?>
				<li>HOA Required?: [unmapped_HOA Required?]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Home Own Association: [homeownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"HOA Fees Y/N"})): ?>
				<li>HOA Fees Y/N: [unmapped_HOA Fees Y/N]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"HOA Frequency"})): ?>
				<li>HOA Frequency: [unmapped_HOA Frequency]</li>
				<?php endif; ?>		
				<?php if( isset($single_property->unmapped->{"HOA Dues"})): ?>
				<li>HOA Dues: [unmapped_HOA Dues]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes]</li>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->unmapped->Legal) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->Legal)): ?>
				<li>Legal: [unmapped_Legal]</li> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
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