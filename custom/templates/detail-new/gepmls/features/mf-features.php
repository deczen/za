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