<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->propsubtype) || isset($single_property->unitno) || isset($single_property->unmapped->{'Located on Floor'}) || isset($single_property->unmapped->Levels) || isset($single_property->style) || isset($single_property->vacant) || isset($single_property->buildingconstruction) || isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->basement) || isset($single_property->basementfeature) || isset($single_property->schooldistrict) || isset($single_property->amenities) || isset($single_property->exterior) || isset($single_property->exteriorunitfeatures) || isset($single_property->interiorfeatures) || isset($single_property->appliances) || isset($single_property->exteriorfeatures) || isset($single_property->unmapped->Fireplace) || isset($single_property->unmapped->{'Manufactured Housing Y/N'}) /*|| isset($single_property->unmapped->{'Cumulative DOM'})*/ /*|| isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})*/ || isset($single_property->unmapped->Basement) || isset($single_property->unmapped->{'Tenant Occupied'}) || isset($single_property->unmapped->{'Lot Size (Side)'}) || isset($single_property->unmapped->{'Mid/High Rise'}) || isset($single_property->unmapped->{'Built Prior to 1978'}) || isset($single_property->unmapped->{'Documented SqFt Source'}) || isset($single_property->unmapped->TransactionType) || isset($single_property->lotdescription) || isset($single_property->zoning) || isset($single_property->petsallowed) || isset($single_property->unmapped->{'3 Bedroom: 3 Bedroom # of Units'}) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Property Sub Type</td>
					<td class="zy-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unitno)): ?>
				<tr>
					<td class="zy-listing__table__label">Unit No.</td>
					<td class="zy-listing__table__items"><span>[unitno]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Located on Floor'})): ?>
				<tr>
					<td class="zy-listing__table__label">Located on Floor</td>
					<td class="zy-listing__table__items"><span>[unmapped_Located on Floor]</span></td>
				</tr>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->Levels)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[unmapped_Levels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">House Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<tr>
					<td class="zy-listing__table__label">Vacant</td>
					<td class="zy-listing__table__items"><span>[vacant]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->buildingconstruction)): ?>
				<tr>
					<td class="zy-listing__table__label">Building Construction</td>
					<td class="zy-listing__table__items"><span>[buildingconstruction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction</td>
					<td class="zy-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="zy-listing__table__label">Foundation</td>
					<td class="zy-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basementfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement Feature</td>
					<td class="zy-listing__table__items"><span>[basementfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->schooldistrict)): ?>
				<tr>
					<td class="zy-listing__table__label">School District</td>
					<td class="zy-listing__table__items"><span>[schooldistrict]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Amenities</td>
					<td class="zy-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorunitfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Unit Features</td>
					<td class="zy-listing__table__items"><span>[exteriorunitfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="zy-listing__table__label">Apliances</td>
					<td class="zy-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplace</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fireplace]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Manufactured Housing Y/N'})): ?>
				<tr>
					<td class="zy-listing__table__label">Manufactured Housing</td>
					<td class="zy-listing__table__items"><span>[unmapped_Manufactured Housing Y/N]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Cumulative DOM'})): ?>
				<tr>
					<td class="zy-listing__table__label">Cumulative DOM</td>
					<td class="zy-listing__table__items"><span>[unmapped_Cumulative DOM]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})): ?>
				<tr>
					<td class="zy-listing__table__label">Dir Neg w/Sell Perm</td>
					<td class="zy-listing__table__items"><span>[unmapped_Dir Neg w/Sell Perm]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->Basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[unmapped_Basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tenant Occupied'})): ?>
				<tr>
					<td class="zy-listing__table__label">Tenant Occupied</td>
					<td class="zy-listing__table__items"><span>[unmapped_Tenant Occupied]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size (Side)</td>
					<td class="zy-listing__table__items"><span>[unmapped_Lot Size (Side)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Mid/High Rise'})): ?>
				<tr>
					<td class="zy-listing__table__label">Mid/High Rise</td>
					<td class="zy-listing__table__items"><span>[unmapped_Mid/High Rise]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Built Prior to 1978'})): ?>
				<tr>
					<td class="zy-listing__table__label">Built Prior to 1978</td>
					<td class="zy-listing__table__items"><span>[unmapped_Built Prior to 1978]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Documented SqFt Source'})): ?>
				<tr>
					<td class="zy-listing__table__label">Documented SqFt Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_Documented SqFt Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->TransactionType)): ?>
				<tr>
					<td class="zy-listing__table__label">Transaction Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_TransactionType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Description</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning</td>
					<td class="zy-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="zy-listing__table__label">Pets Allowed</td>
					<td class="zy-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Front)'})): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Frontage</td>
					<td class="zy-listing__table__items"><span>[unmapped_Lot Size (Front)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'3 Bedroom: 3 Bedroom # of Units'})): ?>
				<tr>
					<td class="zy-listing__table__label">3 Bedroom Units</td>
					<td class="zy-listing__table__items"><span>[unmapped_3 Bedroom: 3 Bedroom # of Units]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Alternate Uses'})): ?>
				<tr>
					<td class="zy-listing__table__label">Alternate Uses</td>
					<td class="zy-listing__table__items"><span>[unmapped_Alternate Uses]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
				<tr>
					<td class="zy-listing__table__label">Auction</td>
					<td class="zy-listing__table__items"><span>[unmapped_Auction Info: Auction/Online Bidding]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Front)'})): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Frontage</td>
					<td class="zy-listing__table__items"><span>[unmapped_Lot Size (Front)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (1)'})): ?>
				<tr>
					<td class="zy-listing__table__label">Between Street1</td>
					<td class="zy-listing__table__items"><span>[unmapped_Between Street (1)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Between Street (2)'}) ): ?>
				<tr>
					<td class="zy-listing__table__label">Between Street2</td>
					<td class="zy-listing__table__items"><span>[unmapped_Between Street (2)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size (Front)'}) ): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Frontage</td>
					<td class="zy-listing__table__items"><span>[unmapped_Lot Size (Front)]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Corp LimitPerAuditor'}) ): ?>
				<tr>
					<td class="zy-listing__table__label">Corp Limit Per Auditor</td>
					<td class="zy-listing__table__items"><span>[unmapped_Corp LimitPerAuditor]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dist To Intersxn'}) ): ?>
				<tr>
					<td class="zy-listing__table__label">Dist To Intersection</td>
					<td class="zy-listing__table__items"><span>[unmapped_Dist To Intersxn]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Exchange) ): ?>
				<tr>
					<td class="zy-listing__table__label">For Exchange</td>
					<td class="zy-listing__table__items"><span>[unmapped_Exchange]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->forsale) ): ?>
				<tr>
					<td class="zy-listing__table__label">For Sale</td>
					<td class="zy-listing__table__items"><span>[forsale]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Miscellaneous) ): ?>
				<tr>
					<td class="zy-listing__table__label">Miscellaneous</td>
					<td class="zy-listing__table__items"><span>[unmapped_Miscellaneous]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Occupancy Rate'}) ): ?>
				<tr>
					<td class="zy-listing__table__label">Occupancy Rate</td>
					<td class="zy-listing__table__items"><span>[unmapped_Occupancy Rate]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Services Available'}) ): ?>
				<tr>
					<td class="zy-listing__table__label">Services Available</td>
					<td class="zy-listing__table__items"><span>[unmapped_Services Available]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lngAREADESCRIPTION) ): ?>
				<tr>
					<td class="zy-listing__table__label">Township</td>
					<td class="zy-listing__table__items"><span>[lngAREADESCRIPTION]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->heating) || isset($single_property->aircondition) || isset($single_property->cooling) || isset($single_property->utilities) || isset($single_property->reqdownassociation) || isset($single_property->condoassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'}) ):?>
	<li class="cell">
		<?php if( isset($single_property->heating) || isset($single_property->aircondition) || isset($single_property->cooling) || isset($single_property->utilities) ):?>
		<h3 class="zy-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->aircondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Air Condition</td>
					<td class="zy-listing__table__items"><span>[aircondition]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="zy-listing__table__label">Utilities</td>
					<td class="zy-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Heat Fuel'})): ?>
				<tr>
					<td class="zy-listing__table__label">Heat Fuel</td>
					<td class="zy-listing__table__items"><span>[unmapped_Heat Fuel]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php /*
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-listing__headline">Schools</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->gradeschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Grade School</td>
					<td class="zy-listing__table__items"><span>[gradeschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="zy-listing__table__label">High School</td>
					<td class="zy-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Middle School</td>
					<td class="zy-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		*/ ?>
		
		<?php if( isset($single_property->reqdownassociation) || isset($single_property->condoassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'}) ):?>
		<h3 class="zy-listing__headline">Association Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">HOA Fee</td>
					<td class="zy-listing__table__items"><span>[reqdownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->condoassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Condo Association</td>
					<td class="zy-listing__table__items"><span>[condoassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">HOA Fee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Assc Fee Includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'})): ?>
				<tr>
					<td class="zy-listing__table__label">HOA/COA Info: HOA/COA Contact Name</td>
					<td class="zy-listing__table__items"><span>[unmapped_HOA/COA Info: HOA/COA Contact Name]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php $roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false; ?>
		<?php if( isset($roomLevels) ||  isset($single_property->Rooms) || isset($single_property->unmapped->{'Great Room Level'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) ):?>
		
			<h3 class="zy-listing__headline">Room Information</h3>
			
			<?php if( isset($single_property->Rooms) || isset($single_property->unmapped->{'Great Room Level'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) || isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) || isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) || isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) ):?>
			<table class="zy-listing__table">
				<tbody>
					<?php if( isset($single_property->unmapped->Rooms)): ?>
					<tr>
						<td class="zy-listing__table__label">Rooms</td>
						<td class="zy-listing__table__items"><span>[unmapped_Rooms]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Great Room Level'}) && $single_property->unmapped->{'Great Room Level'} !== 0): ?>
					<tr>
						<td class="zy-listing__table__label">Great Rooms (Entry Level)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Great Room Level]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds Down1'}) && $single_property->unmapped->{'Bedroom Level: Beds Down1'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Bedrooms (Lower Level1)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Bedroom Level: Beds Down1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds Down2'}) && $single_property->unmapped->{'Bedroom Level: Beds Down2'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Bedrooms (Lower Level2)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Bedroom Level: Beds Down2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds UP1'}) && $single_property->unmapped->{'Bedroom Level: Beds UP1'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Bedrooms (Upper Level1)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Bedroom Level: Beds UP1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Bedroom Level: Beds UP2'}) && $single_property->unmapped->{'Bedroom Level: Beds UP2'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Bedrooms (Upper Level2)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Bedroom Level: Beds UP2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'}) && $single_property->unmapped->{'Full Baths Level: Full B Entry Level'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Full Baths (Entry Level)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Full Baths Level: Full B Entry Level]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'}) && $single_property->unmapped->{'Half Baths Level: Half B Entry Level'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Half Baths (Entry Level)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Half Baths Level: Half B Entry Level]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'}) && $single_property->unmapped->{'Half Baths Level: Half Bath Down2'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Half Baths (Lower Level2)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Half Baths Level: Half Bath Down2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'}) && $single_property->unmapped->{'Half Baths Level: Half Bath Down1'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Half Baths (Lower Level1)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Half Baths Level: Half Bath Down1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'}) && $single_property->unmapped->{'Full Baths Level: Full Baths Down1'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Full Baths (Lower Level1)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths Down1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'}) && $single_property->unmapped->{'Half Baths Level: Half Baths UP2'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Half Baths (Upper Level2)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Half Baths Level: Half Baths UP2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'}) && $single_property->unmapped->{'Half Baths Level: Half Baths UP1'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Half Baths (Upper Level1)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Half Baths Level: Half Baths UP1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'}) && $single_property->unmapped->{'Full Baths Level: Full Baths UP2'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Full Baths (Upper Level2)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths UP2]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'}) && $single_property->unmapped->{'Full Baths Level: Full Baths UP1'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Full Baths (Upper Level1)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths UP1]</span></td>
					</tr>
					<?php endif; ?>
					<?php if( isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'}) && $single_property->unmapped->{'Full Baths Level: Full Baths Down2'} > 0 ): ?>
					<tr>
						<td class="zy-listing__table__label">Full Baths (Lower Level2)</td>
						<td class="zy-listing__table__items"><span>[unmapped_Full Baths Level: Full Baths Down2]</span></td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
			<?php endif; ?>
		
			<?php if($roomLevels): ?>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="zy-listing__table">
						<tbody>
							<tr>
								<td class="zy-listing__table__label">Room Type</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]</span></td>
							</tr>
							<tr>
								<td class="zy-listing__table__label">Room Level</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]</span></td>
							</tr>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<tr>
								<td class="zy-listing__table__label">Room Dim</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]</span></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if( isset($single_property->parkingfeature) || isset($single_property->garagespaces) || isset($single_property->garageparking) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Feature</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Spaces</td>
					<td class="zy-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Parking</td>
					<td class="zy-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->LegalDescription) || isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->unmapped->{'Tax District'}) /*|| isset($single_property->unmapped->{'Tax Abatement'})*/ ):?>
		<h3 class="zy-listing__headline">Taxes, Fees</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->LegalDescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Legal Description</td>
					<td class="zy-listing__table__items"><span>[unmapped_LegalDescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Taxes</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td> 
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Tax District'})): ?>
				<tr>
					<td class="zy-listing__table__label">Tax District</td>
					<td class="zy-listing__table__items"><span>[unmapped_Tax District]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->unmapped->{'Tax Abatement'})): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Abatement</td>
					<td class="zy-listing__table__items"><span>[unmapped_Tax Abatement]</span></td> 
				</tr>
				<?php endif;*/ ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>