<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->style) || isset($single_property->unmapped->Levels) || isset($single_property->unmapped->Stories) || isset($single_property->construction) || isset($single_property->unmapped->{'Construction Status'}) || isset($single_property->exteriorfeatures) || isset($single_property->interiorfeatures) || isset($single_property->roofmaterial) || isset($single_property->flooring) || isset($single_property->fireplaces) || isset($single_property->vacant) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->{'Fireplace Type'}) || isset($single_property->unmapped->GreenEnergyGeneration) || isset($single_property->unmapped->GreenEnergyEfficient) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->PatioAndPorchFeatures) || isset($single_property->unmapped->RoadFrontageType) || isset($single_property->unmapped->HorseAmenities) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->OtherStructures) || isset($single_property->unmapped->Dock) || isset($single_property->waterfront) || isset($single_property->waterbodyname) || isset($single_property->unmapped->WaterfrontageLength) || isset($single_property->unmapped->View) || isset($single_property->unmapped->PropertyAttachedYN) || isset($single_property->unmapped->LandLeaseYN) || isset($single_property->unmapped->CommonWalls) || isset($single_property->unmapped->AccessibilityFeatures) || isset($single_property->unmapped->Fencing) || isset($single_property->unmapped->WaterOnLand) || isset($single_property->lotdescription) || isset($single_property->unmapped->{'Lot Size'}) || isset($single_property->pooldescription) || isset($single_property->appliances) || isset($single_property->electricfeature) || isset($single_property->roadtype) || isset($single_property->adultcommunity) || isset($single_property->sitecondition) || isset($single_property->equiplistavail) || isset($single_property->unmapped->{'Laundry Type'}) || isset($single_property->unmapped->Equipment) || isset($single_property->unmapped->{'Financing Type'}) || isset($single_property->unmapped->{'Possible Financing'}) || isset($single_property->unmapped->{'Above Grade Finished'}) || isset($single_property->unmapped->{'Below Grade Unfinished'}) || isset($single_property->amenities) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Levels)): ?>
				<tr>
					<td class="zy-listing__table__label">Levels</td>
					<td class="zy-listing__table__items"><span>[unmapped_Levels]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Stories)): ?>
				<tr>
					<td class="zy-listing__table__label">Stories</td>
					<td class="zy-listing__table__items"><span>[unmapped_Stories]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction</td>
					<td class="zy-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Construction Status'})): ?>
				<tr>
					<td class="zy-listing__table__label">Construction Status</td>
					<td class="zy-listing__table__items"><span>[unmapped_Construction Status]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="zy-listing__table__label">Roof Material</td>
					<td class="zy-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Floor</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplaces</td>
					<td class="zy-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<tr>
					<td class="zy-listing__table__label">Vacant</td>
					<td class="zy-listing__table__items"><span>[vacant]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplace Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_FireplaceFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fireplace Type'})): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplace Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fireplace Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GreenEnergyGeneration)): ?>
				<tr>
					<td class="zy-listing__table__label">Green Energy Generation</td>
					<td class="zy-listing__table__items"><span>[unmapped_GreenEnergyGeneration]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GreenEnergyEfficient)): ?>
				<tr>
					<td class="zy-listing__table__label">Green Energy Efficient</td>
					<td class="zy-listing__table__items"><span>[unmapped_GreenEnergyEfficient]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Window Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_WindowFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Patio And Porch Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_PatioAndPorchFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadFrontageType)): ?>
				<tr>
					<td class="zy-listing__table__label">Road Frontage Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_RoadFrontageType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HorseAmenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Horse Amenities</td>
					<td class="zy-listing__table__items"><span>[unmapped_HorseAmenities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Dimensions</td>
					<td class="zy-listing__table__items"><span>[unmapped_LotSizeDimensions]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->OtherStructures)): ?>
				<tr>
					<td class="zy-listing__table__label">Other Structures</td>
					<td class="zy-listing__table__items"><span>[unmapped_OtherStructures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<tr>
					<td class="zy-listing__table__label">Dock</td>
					<td class="zy-listing__table__items"><span>[unmapped_Dock]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Front</td>
					<td class="zy-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Body Name</td>
					<td class="zy-listing__table__items"><span>[waterbodyname]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterfrontageLength)): ?>
				<tr>
					<td class="zy-listing__table__label">Water Front Age Length</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterfrontageLength]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<tr>
					<td class="zy-listing__table__label">View</td>
					<td class="zy-listing__table__items"><span>[unmapped_View]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PropertyAttachedYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Property Attached Y/N</td>
					<td class="zy-listing__table__items"><span>[unmapped_PropertyAttachedYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LandLeaseYN)): ?>
				<tr>
					<td class="zy-listing__table__label">Land Lease Y/N</td>
					<td class="zy-listing__table__items"><span>[unmapped_LandLeaseYN]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CommonWalls)): ?>
				<tr>
					<td class="zy-listing__table__label">Common Walls</td>
					<td class="zy-listing__table__items"><span>[unmapped_CommonWalls]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AccessibilityFeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Accessibility Features</td>
					<td class="zy-listing__table__items"><span>[unmapped_AccessibilityFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fencing)): ?>
				<tr>
					<td class="zy-listing__table__label">Fencing</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fencing]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterOnLand)): ?>
				<tr>
					<td class="zy-listing__table__label">Water OnLand</td>
					<td class="zy-listing__table__items"><span>[unmapped_WaterOnLand]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Description</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size'})): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size</td>
					<td class="zy-listing__table__items"><span>[unmapped_Lot Size]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Pool Description</td>
					<td class="zy-listing__table__items"><span>[pooldescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="zy-listing__table__label">Appliances</td>
					<td class="zy-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Electric Feature</td>
					<td class="zy-listing__table__items"><span>[electricfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Road Type</td>
					<td class="zy-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->adultcommunity)): ?>
				<tr>
					<td class="zy-listing__table__label">Adult Community</td>
					<td class="zy-listing__table__items"><span>[adultcommunity]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<tr>
					<td class="zy-listing__table__label">Site Condition</td>
					<td class="zy-listing__table__items"><span>[sitecondition]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<tr>
					<td class="zy-listing__table__label">Equiplist Avail</td>
					<td class="zy-listing__table__items"><span>[equiplistavail]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Laundry Type'})): ?>
				<tr>
					<td class="zy-listing__table__label">Laundry Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_Laundry Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Equipment)): ?>
				<tr>
					<td class="zy-listing__table__label">Equipment</td>
					<td class="zy-listing__table__items"><span>[unmapped_Equipment]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Financing Type'})): ?>
				<tr>
					<td class="zy-listing__table__label">Financing Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_Financing Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Possible Financing'})): ?>
				<tr>
					<td class="zy-listing__table__label">Possible Financing</td>
					<td class="zy-listing__table__items"><span>[unmapped_Possible Financing]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Above Grade Finished'})): ?>
				<tr>
					<td class="zy-listing__table__label">Above Grade Finished</td>
					<td class="zy-listing__table__items"><span>[unmapped_Above Grade Finished]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Below Grade Unfinished'})): ?>
				<tr>
					<td class="zy-listing__table__label">Below Grade Unfinished</td>
					<td class="zy-listing__table__items"><span>[unmapped_Below Grade Unfinished]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->amenities)): ?>
				<tr>
					<td class="zy-listing__table__label">Amenities</td>
					<td class="zy-listing__table__items"><span>[amenities]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->reqdownassociation) || isset($single_property->feeinterval) || isset($single_property->hoafee) || isset($single_property->assocsecurity) || isset($single_property->unmapped->{'Fees Include'}) || isset($single_property->asscfeeincludes) || isset($single_property->cooling) || isset($single_property->unmapped->{'Cooling Source'}) || isset($single_property->heating) || isset($single_property->unmapped->{'Heating Source'}) || isset($single_property->utilities) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->sewerandwater) || isset($single_property->energyfeatures) || isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
	
	<li class="cell">
	<?php if( isset($single_property->reqdownassociation) || isset($single_property->feeinterval) || isset($single_property->hoafee) || isset($single_property->assocsecurity) || isset($single_property->unmapped->{'Fees Include'}) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-listing__headline">Association Information</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Reqdown Association</td>
					<td class="zy-listing__table__items"><span>[reqdownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->feeinterval)): ?>
				<tr>
					<td class="zy-listing__table__label">Fee Interval</td>
					<td class="zy-listing__table__items"><span>[feeinterval]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Hoafee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->assocsecurity)): ?>
				<tr>
					<td class="zy-listing__table__label">Assoc Security</td>
					<td class="zy-listing__table__items"><span>[assocsecurity]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fees Include'})): ?>
				<tr>
					<td class="zy-listing__table__label">Fees Include</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fees Include]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Assc Fee Includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes Include]</span></td>
				</tr>
				<?php endif; ?>		
			</tbody>
		</table>
	<?php endif; ?>
	
	<?php if( isset($single_property->cooling) || isset($single_property->unmapped->{'Cooling Source'}) || isset($single_property->heating) || isset($single_property->unmapped->{'Heating Source'}) || isset($single_property->utilities) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->sewerandwater) || isset($single_property->energyfeatures) ):?>
		<h3 class="zy-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Cooling Source'})): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_Cooling Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Heating Source'})): ?>
				<tr>
					<td class="zy-listing__table__label">Heating Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_Heating Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="zy-listing__table__label">Utilities</td>
					<td class="zy-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->sewerandwater)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer and Water</td>
					<td class="zy-listing__table__items"><span>[sewerandwater]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->energyfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Energy Features</td>
					<td class="zy-listing__table__items"><span>[energyfeatures]</span></td>
				</tr>
				<?php endif; ?>	
			</tbody>
		</table>
	<?php endif; ?>
	
	
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
				<?php if( isset($single_property->middleschool)): ?>
				<tr>
					<td class="zy-listing__table__label">Middle School</td>
					<td class="zy-listing__table__items"><span>[middleschool]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->highschool)): ?>
				<tr>
					<td class="zy-listing__table__label">High School</td>
					<td class="zy-listing__table__items"><span>[highschool]</span></td>
				</tr>
				<?php endif; ?>			
			</tbody>
		</table>
	<?php endif; ?>
	
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->unmapped->CarportGarageTotal) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Feature</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->CarportGarageTotal)): ?>
				<tr>
					<td class="zy-listing__table__label">Carport Garage Total</td>
					<td class="zy-listing__table__items"><span>[unmapped_CarportGarageTotal]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Garage Spaces</td>
					<td class="zy-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{'Tax ID'}) || isset($single_property->taxyear) || isset($single_property->taxes) ):?>
		<h3 class="zy-listing__headline">Taxes</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->{'Tax ID'})): ?>
				<tr>
					<td class="zy-listing__table__label">Tax ID</td>
					<td class="zy-listing__table__items"><span>[unmapped_Tax ID]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Amount ($)</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->Rooms) || isset($single_property->unmapped->RoomType) || isset($single_property->unmapped->UpperLevelBedrooms) || isset($single_property->unmapped->LowerLevelBedrooms) || isset($single_property->unmapped->UpperLevelHalfBathrooms) || isset($single_property->unmapped->{'BAF Main'}) || isset($single_property->unmapped->{'BAF Upper'}) || isset($single_property->unmapped->{'BAF Lower'}) || isset($single_property->unmapped->{'BR Main'}) || isset($single_property->unmapped->{'BR Upper'}) || isset($single_property->unmapped->{'BR Lower'}) || isset($single_property->unmapped->{'BAH Main'}) || isset($single_property->unmapped->{'BAH Upper'}) || isset($single_property->unmapped->{'BAH Lower'}) || isset($single_property->basement) || isset($single_property->masterbath) || isset($single_property->unmapped->bed2DSCRP) || isset($single_property->unmapped->dinDSCRP) || isset($single_property->unmapped->kitDSCRP) || isset($single_property->unmapped->{'Kitchen/Breakfas'}) || isset($single_property->unmapped->{'Kitchen Equipment'}) || isset($single_property->unmapped->{'Laundry Location'}) || isset($single_property->unmapped->laundryfeatures) || isset($single_property->unmapped->{'Fireplace Location'}) ):?>
		<h3 class="zy-listing__headline">Room Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->Rooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Rooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_Rooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoomType)): ?>
				<tr>
					<td class="zy-listing__table__label">Room Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_RoomType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UpperLevelBedrooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Upper Level Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_UpperLevelBedrooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LowerLevelBedrooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Lower Level Bedrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_LowerLevelBedrooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->UpperLevelHalfBathrooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Upper Level Half Bathrooms</td>
					<td class="zy-listing__table__items"><span>[unmapped_UpperLevelHalfBathrooms]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAF Main'})): ?>
				<tr>
					<td class="zy-listing__table__label">BAF Main</td>
					<td class="zy-listing__table__items"><span>[unmapped_BAF Main]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAF Upper'})): ?>
				<tr>
					<td class="zy-listing__table__label">BAF Upper</td>
					<td class="zy-listing__table__items"><span>[unmapped_BAF Upper]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAF Lower'})): ?>
				<tr>
					<td class="zy-listing__table__label">BAF Lower</td>
					<td class="zy-listing__table__items"><span>[unmapped_BAF Lower]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BR Main'})): ?>
				<tr>
					<td class="zy-listing__table__label">BR Main</td>
					<td class="zy-listing__table__items"><span>[unmapped_BR Main]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BR Upper'})): ?>
				<tr>
					<td class="zy-listing__table__label">BR Upper</td>
					<td class="zy-listing__table__items"><span>[unmapped_BR Upper]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BR Lower'})): ?>
				<tr>
					<td class="zy-listing__table__label">BR Lower</td>
					<td class="zy-listing__table__items"><span>[unmapped_BR Lower]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAH Main'})): ?>
				<tr>
					<td class="zy-listing__table__label">BAH Main</td>
					<td class="zy-listing__table__items"><span>[unmapped_BAH Main]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAH Upper'})): ?>
				<tr>
					<td class="zy-listing__table__label">BAH Upper</td>
					<td class="zy-listing__table__items"><span>[unmapped_BAH Upper]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BAH Lower'})): ?>
				<tr>
					<td class="zy-listing__table__label">BAH Lower</td>
					<td class="zy-listing__table__items"><span>[unmapped_BAH Lower]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->masterbath)): ?>
				<tr>
					<td class="zy-listing__table__label">Masterbath</td>
					<td class="zy-listing__table__items"><span>[masterbath]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->bed2DSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Bedrooms Description</td>
					<td class="zy-listing__table__items"><span>[unmapped_bed2DSCRP]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->dinDSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Dinning room Description</td>
					<td class="zy-listing__table__items"><span>[unmapped_dinDSCRP]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->kitDSCRP)): ?>
				<tr>
					<td class="zy-listing__table__label">Kitchen Description</td>
					<td class="zy-listing__table__items"><span>[unmapped_kitDSCRP]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen/Breakfas'})): ?>
				<tr>
					<td class="zy-listing__table__label">Kitchen/Breakfas</td>
					<td class="zy-listing__table__items"><span>[unmapped_Kitchen/Breakfas]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen Equipment'})): ?>
				<tr>
					<td class="zy-listing__table__label">Kitchen Equipment</td>
					<td class="zy-listing__table__items"><span>[unmapped_Kitchen Equipment]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Laundry Location'})): ?>
				<tr>
					<td class="zy-listing__table__label">Laundry Location</td>
					<td class="zy-listing__table__items"><span>[unmapped_Laundry Location]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Laundry Features</td>
					<td class="zy-listing__table__items"><span>[laundryfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fireplace Location'})): ?>
				<tr>
					<td class="zy-listing__table__label">Fireplace Location</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fireplace Location]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php /*
		<?php
			$roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
			if($roomLevels): ?>
				<h3 class="zy-listing__headline">Room Information</h3>
				
				<?php foreach($roomLevels as $rkey => $roomLevel): ?>
					<table class="zy-listing__table">
						<tbody>
							<tr>
								<td class="zy-listing__table__label">Room Type</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]<?php //echo $roomLevel->roomType; ?></span></td>
							</tr>
							<?php $dim1 = $roomLevels[$rkey]->dim1; 
								  $dim2 = $roomLevels[$rkey]->dim2; 
							?>
							<?php if( isset($dim1) && isset($dim2)): ?>
							<tr>
								<td class="zy-listing__table__label">Room Size</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php endif; ?>
							<tr>
								<td class="zy-listing__table__label">Room Level</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]<?php //echo $roomLevel->roomLevel; ?></span></td>
							</tr>
							<?php $Des = $roomLevels[$rkey]->floor; ?>
							<?php if( isset($Des)): ?>
							<tr>
								<td class="zy-listing__table__label">Floor</td>
								<td class="zy-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_floor]</span></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				<?php endforeach; ?>
					
			<?php
			endif;
		?> */ ?>
		
	</li>					

</ul>