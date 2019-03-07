<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->style) || isset($single_property->construction)  || isset($single_property->roofmaterial)  || isset($single_property->unmapped->Level)  || isset($single_property->exteriorfeatures)  || isset($single_property->interiorfeatures)  || isset($single_property->fireplaces)  || isset($single_property->unmapped->{'Laundry Room Location'})  || isset($single_property->unmapped->Exemptions)  || isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})  || isset($single_property->unmapped->Defects)  || isset($single_property->unmapped->flooring)  || isset($single_property->unmapped->{'Windows/Treatments'})  || isset($single_property->unmapped->{'Patio Features'})  || isset($single_property->unmapped->{'Plan Description'})  || isset($single_property->unmapped->{'Kitchen Lighting'})  || isset($single_property->unmapped->Cabinets)  || isset($single_property->unmapped->{'Kitchen Sinks'})  || isset($single_property->unmapped->{'Bath Vanities'})  || isset($single_property->unmapped->Fencing)  || isset($single_property->unmapped->{'Rented?'}) || isset($single_property->unmapped->{"Maid's Room"}) || isset($single_property->unmapped->{"Is Property Also For Lease?"}) || isset($single_property->unmapped->{"New Home or Resale"}) || isset($single_property->unmapped->{"Lockbox Type"}) || isset($single_property->vacant) || isset($single_property->lotsize) || isset($single_property->schooldistrict) || isset($single_property->appliances) || isset($single_property->lotdescription) || isset($single_property->specialfinancing) || isset($single_property->zoning) || isset($single_property->waterbodyname) || isset($single_property->landdesc) || isset($single_property->unmapped->{"Garage: Carport"}) || isset($single_property->unmapped->Carpet) || isset($single_property->unmapped->{'Guard Hse/Svc'}) || isset($single_property->unmapped->{'Owner Pays'}) || isset($single_property->tenantexpanses) || isset($single_property->leaseterms) || isset($single_property->secdeposit) || isset($single_property->petsallowed) || isset($single_property->termsfeature) || isset($single_property->handicapaccess) || isset($single_property->unmapped->{"Distance to Cable"}) || isset($single_property->unmapped->{"Distance to Water"}) || isset($single_property->unmapped->{"Distance to Sewer"}) || isset($single_property->unmapped->{"Distance to Gas"}) || isset($single_property->unmapped->{"Distance to Phone"}) || isset($single_property->unmapped->{"Distance to Electrical"}) || isset($single_property->unmapped->{"General Access"}) || isset($single_property->unmapped->{"Utilities Expansion Charge"}) || isset($single_property->unmapped->{"Property Access"}) || isset($single_property->unmapped->{"Flood Zone"}) || isset($single_property->survey) || isset($single_property->unmapped->Miscellaneous) || isset($single_property->unitno) || isset($single_property->leadpaint) || isset($single_property->amenities) || isset($single_property->nobuildings) || isset($single_property->termofrental) || isset($single_property->unmapped->{"Packages Includes"}) || isset($single_property->unmapped->{"Data Doc"}) || isset($single_property->unmapped->Verification) || isset($single_property->unmapped->{"Door Height"}) || isset($single_property->unmapped->{"Finished Space Y/N"}) || isset($single_property->unmapped->{"Sale Includes"}) || isset($single_property->unmapped->{"Best Use"}) || isset($single_property->grossannualincome) || isset($single_property->location) || isset($single_property->ceilingheight) || isset($single_property->unmapped->{"Empowerment_Zone"}) || isset($single_property->unmapped->Improved) || isset($single_property->facingdirection) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">House Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Material</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Level)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[unmapped_Level]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Laundry Room Location'})): ?>
				<tr>
					<td class="bt-listing__table__label">Laundry Room Location</td>
					<td class="bt-listing__table__items"><span>[unmapped_Laundry Room Location]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Exemptions)): ?>
				<tr>
					<td class="bt-listing__table__label">Exemptions</td>
					<td class="bt-listing__table__items"><span>[unmapped_Exemptions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})): ?>
				<tr>
					<td class="bt-listing__table__label">Kitchen Cntrp & Backsplashes</td>
					<td class="bt-listing__table__items"><span>[unmapped_Kitchen Cntrp & Backsplashes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Defects)): ?>
				<tr>
					<td class="bt-listing__table__label">Defects</td>
					<td class="bt-listing__table__items"><span>[unmapped_Defects]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[unmapped_flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Windows/Treatments'})): ?>
				<tr>
					<td class="bt-listing__table__label">Windows/Treatments</td>
					<td class="bt-listing__table__items"><span>[unmapped_Windows/Treatments]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Patio Features'})): ?>
				<tr>
					<td class="bt-listing__table__label">Patio Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_Patio Features]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Plan Description'})): ?>
				<tr>
					<td class="bt-listing__table__label">Plan Description</td>
					<td class="bt-listing__table__items"><span>[unmapped_Plan Description]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Lighting'})): ?>
				<tr>
					<td class="bt-listing__table__label">Kitchen Lighting</td>
					<td class="bt-listing__table__items"><span>[unmapped_Kitchen Lighting]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Cabinets)): ?>
				<tr>
					<td class="bt-listing__table__label">Cabinets</td>
					<td class="bt-listing__table__items"><span>[unmapped_Cabinets]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Sinks'})): ?>
				<tr>
					<td class="bt-listing__table__label">Kitchen Sinks</td>
					<td class="bt-listing__table__items"><span>[unmapped_Kitchen Sinks]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Bath Vanities'})): ?>
				<tr>
					<td class="bt-listing__table__label">Bath Vanities</td>
					<td class="bt-listing__table__items"><span>[unmapped_Bath Vanities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fencing)): ?>
				<tr>
					<td class="bt-listing__table__label">Fencing</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fencing]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Rented?'})): ?>
				<tr>
					<td class="bt-listing__table__label">Rented?</td>
					<td class="bt-listing__table__items"><span>[unmapped_Rented?]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Maid's Room"})): ?>
				<tr>
					<td class="bt-listing__table__label">Maid's Room</td>
					<td class="bt-listing__table__items"><span>[unmapped_Maid's Room]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Lockbox Type"})): ?>
				<tr>
					<td class="bt-listing__table__label">Lockbox Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lockbox Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"New Home or Resale"})): ?>
				<tr>
					<td class="bt-listing__table__label">New Home or Resale</td>
					<td class="bt-listing__table__items"><span>[unmapped_New Home or Resale]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Is Property Also For Lease?"})): ?>
				<tr>
					<td class="bt-listing__table__label">Is Property Also For Lease?</td>
					<td class="bt-listing__table__items"><span>[unmapped_Is Property Also For Lease?]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<tr>
					<td class="bt-listing__table__label">Vacant</td>
					<td class="bt-listing__table__items"><span>[vacant]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotsize)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size</td>
					<td class="bt-listing__table__items"><span>[lotsize]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->schooldistrict)): ?>
				<tr>
					<td class="bt-listing__table__label">School District</td>
					<td class="bt-listing__table__items"><span>[schooldistrict]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="bt-listing__table__label">Appliances</td>
					<td class="bt-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Description</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->specialfinancing)): ?>
				<tr>
					<td class="bt-listing__table__label">Special Financing</td>
					<td class="bt-listing__table__items"><span>[specialfinancing]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterbody Name</td>
					<td class="bt-listing__table__items"><span>[waterbodyname]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->landdesc)): ?>
				<tr>
					<td class="bt-listing__table__label">Land Desc</td>
					<td class="bt-listing__table__items"><span>[landdesc]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Garage: Carport"})): ?>
				<tr>
					<td class="bt-listing__table__label">Garage: Carport</td>
					<td class="bt-listing__table__items"><span>[unmapped_Garage: Carport]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Carpet)): ?>
				<tr>
					<td class="bt-listing__table__label">Carpet</td>
					<td class="bt-listing__table__items"><span>[unmapped_Carpet]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Guard Hse/Svc'})): ?>
				<tr>
					<td class="bt-listing__table__label">Guard Hse/Svc</td>
					<td class="bt-listing__table__items"><span>[unmapped_Guard Hse/Svc]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Owner Pays'})): ?>
				<tr>
					<td class="bt-listing__table__label">Owner Pays</td>
					<td class="bt-listing__table__items"><span>[unmapped_Owner Pays]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<tr>
					<td class="bt-listing__table__label">Tenant Expanses</td>
					<td class="bt-listing__table__items"><span>[tenantexpanses]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->leaseterms)): ?>
				<tr>
					<td class="bt-listing__table__label">Lease Terms</td>
					<td class="bt-listing__table__items"><span>[leaseterms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<tr>
					<td class="bt-listing__table__label">Sec Deposit</td>
					<td class="bt-listing__table__items"><span>[secdeposit]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="bt-listing__table__label">Pets Allowed</td>
					<td class="bt-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Terms Feature</td>
					<td class="bt-listing__table__items"><span>[termsfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<tr>
					<td class="bt-listing__table__label">Handicap Access</td>
					<td class="bt-listing__table__items"><span>[handicapaccess]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Cable"})): ?>
				<tr>
					<td class="bt-listing__table__label">Distance to Cable</td>
					<td class="bt-listing__table__items"><span>[unmapped_Distance to Cable]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Water"})): ?>
				<tr>
					<td class="bt-listing__table__label">Distance to Water</td>
					<td class="bt-listing__table__items"><span>[unmapped_Distance to Water]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Sewer"})): ?>
				<tr>
					<td class="bt-listing__table__label">Distance to Sewer</td>
					<td class="bt-listing__table__items"><span>[unmapped_Distance to Sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Gas"})): ?>
				<tr>
					<td class="bt-listing__table__label">Distance to Gas</td>
					<td class="bt-listing__table__items"><span>[unmapped_Distance to Gas]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Phone"})): ?>
				<tr>
					<td class="bt-listing__table__label">Distance to Phone</td>
					<td class="bt-listing__table__items"><span>[unmapped_Distance to Phone]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Distance to Electrical"})): ?>
				<tr>
					<td class="bt-listing__table__label">Distance to Electrical</td>
					<td class="bt-listing__table__items"><span>[unmapped_Distance to Electrical]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"General Access"})): ?>
				<tr>
					<td class="bt-listing__table__label">General Access</td>
					<td class="bt-listing__table__items"><span>[unmapped_General Access]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Utilities Expansion Charge"})): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities Expansion Charge</td>
					<td class="bt-listing__table__items"><span>[unmapped_Utilities Expansion Charge]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Property Access"})): ?>
				<tr>
					<td class="bt-listing__table__label">Property Access</td>
					<td class="bt-listing__table__items"><span>[unmapped_Property Access]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Flood Zone"})): ?>
				<tr>
					<td class="bt-listing__table__label">Flood Zone</td>
					<td class="bt-listing__table__items"><span>[unmapped_Flood Zone]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->survey)): ?>
				<tr>
					<td class="bt-listing__table__label">Survey</td>
					<td class="bt-listing__table__items"><span>[survey]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
				<tr>
					<td class="bt-listing__table__label">Miscellaneous</td>
					<td class="bt-listing__table__items"><span>[unmapped_Miscellaneous]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unitno)): ?>
				<tr>
					<td class="bt-listing__table__label">Unit no</td>
					<td class="bt-listing__table__items"><span>[unitno]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->leadpaint)): ?>
				<tr>
					<td class="bt-listing__table__label">Lead Paint</td>
					<td class="bt-listing__table__items"><span>[leadpaint]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="bt-listing__table__label">Amenities</td>
					<td class="bt-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->nobuildings)): ?>
				<tr>
					<td class="bt-listing__table__label">No Buildings</td>
					<td class="bt-listing__table__items"><span>[nobuildings]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->termofrental)): ?>
				<tr>
					<td class="bt-listing__table__label">Termofrental</td>
					<td class="bt-listing__table__items"><span>[termofrental]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Packages Includes"})): ?>
				<tr>
					<td class="bt-listing__table__label">Packages Includes</td>
					<td class="bt-listing__table__items"><span>[unmapped_Packages Includes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Data Doc"})): ?>
				<tr>
					<td class="bt-listing__table__label">Data Doc</td>
					<td class="bt-listing__table__items"><span>[unmapped_Data Doc]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Verification)): ?>
				<tr>
					<td class="bt-listing__table__label">Verification</td>
					<td class="bt-listing__table__items"><span>[unmapped_Verification]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Door Height"})): ?>
				<tr>
					<td class="bt-listing__table__label">Door Height</td>
					<td class="bt-listing__table__items"><span>[unmapped_Door Height]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Finished Space Y/N"})): ?>
				<tr>
					<td class="bt-listing__table__label">Finished Space Y/N</td>
					<td class="bt-listing__table__items"><span>[unmapped_Finished Space Y/N]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Sale Includes"})): ?>
				<tr>
					<td class="bt-listing__table__label">Sale Includes</td>
					<td class="bt-listing__table__items"><span>[unmapped_Sale Includes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Best Use"})): ?>
				<tr>
					<td class="bt-listing__table__label">Best Use</td>
					<td class="bt-listing__table__items"><span>[unmapped_Best Use]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->grossannualincome)): ?>
				<tr>
					<td class="bt-listing__table__label">Gross Annual Income</td>
					<td class="bt-listing__table__items"><span>[grossannualincome]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<tr>
					<td class="bt-listing__table__label">Location</td>
					<td class="bt-listing__table__items"><span>[location]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->ceilingheight)): ?>
				<tr>
					<td class="bt-listing__table__label">Ceiling Height</td>
					<td class="bt-listing__table__items"><span>[ceilingheight]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Empowerment_Zone"})): ?>
				<tr>
					<td class="bt-listing__table__label">Empowerment Zone</td>
					<td class="bt-listing__table__items"><span>[unmapped_Empowerment Zone]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Improved)): ?>
				<tr>
					<td class="bt-listing__table__label">Improved</td>
					<td class="bt-listing__table__items"><span>[unmapped_Improved]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->facingdirection)): ?>
				<tr>
					<td class="bt-listing__table__label">Facing Direction</td>
					<td class="bt-listing__table__items"><span>[facingdirection]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php /*if( isset($single_property->cooling) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->coolingzones)): ?>
				<tr>
					<td class="bt-listing__table__label">Cool Zones</td>
					<td class="bt-listing__table__items"><span>[coolingzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heatzones)): ?>
				<tr>
					<td class="bt-listing__table__label">Heat Zones</td>
					<td class="bt-listing__table__items"><span>[heatzones]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Energy Features</td>
					<td class="bt-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Electric</td>
					<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="bt-listing__table__label">Hot Water</td>
					<td class="bt-listing__table__items"><span>[hotwater]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer Utilities</td>
					<td class="bt-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Utilities</td>
					<td class="bt-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>								
			</tbody>
		</table>
	</li>
	<?php endif;*/ ?>
	
	<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Schools</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->gradeschool)): ?>
				<tr>
					<td class="bt-listing__table__label">Grade School</td>
					<td class="bt-listing__table__items"><span>[gradeschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="bt-listing__table__label">High School</td>
					<td class="bt-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="bt-listing__table__label">Middle School</td>
					<td class="bt-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>	
			</tbody>
		</table>
	</li>
		<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garageparking) || isset($single_property->parkingfeature) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Parking</td>
					<td class="bt-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Feature</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="bt-listing__headline">Deposits, Inclusions</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->firstmonreqd)): ?>
				<tr>
					<td class="bt-listing__table__label">1st Month</td>
					<td class="bt-listing__table__items"><span>[firstmonreqd]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lastmonreqd)): ?>
				<tr>
					<td class="bt-listing__table__label">Last Month</td>
					<td class="bt-listing__table__items"><span>[lastmonreqd]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->secdeposit)): ?>
				<tr>
					<td class="bt-listing__table__label">Secutity</td>
					<td class="bt-listing__table__items"><span>[secdeposit]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Rent Includes</td>
					<td class="bt-listing__table__items"><span>[rentfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>
<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) || isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) || isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) || isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="bt-listing__headline">Master Bedroom</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->mbrdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[mbrdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[mbrlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[mbrdscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #2</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed2dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed2dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed2dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed2dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #3</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed3dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed3dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed3LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed3dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed3dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #4</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed4dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed4dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed4LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed4dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed4dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
		<h3 class="bt-listing__headline">Bedroom #5</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bed5dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bed5dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bed5LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bed5dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bed5dscrp]</span></td>
				</tr>								
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="bt-listing__headline">Bathroom #1</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bth1dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bth1dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bth1dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="bt-listing__headline">Bathroom #2</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bth2dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bth2dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bth2LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bth2dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="bt-listing__headline">Bathroom #3</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->bth3dimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[bth3dimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[bth3level]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[bth3dscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="bt-listing__headline">Kitchen</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->kitdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[kitdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[kitlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="bt-listing__headline">Family Room</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->famdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[famdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[famlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[famdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="bt-listing__headline">Living Room</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->livdimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[livdimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[livlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="bt-listing__headline">Dining Room</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->dindimen)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[dindimen]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[dinlevel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[dindscrp]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="bt-listing__headline">Additional Room #1</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<tr>
					<td class="bt-listing__table__label">Size</td>
					<td class="bt-listing__table__items"><span>[oth1DIMEN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<tr>
					<td class="bt-listing__table__label">Level</td>
					<td class="bt-listing__table__items"><span>[oth1LEVEL]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Features</td>
					<td class="bt-listing__table__items"><span>[oth1DSCRP]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>