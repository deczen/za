<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->unmapped->CondoFloorLocationType) || isset($single_property->construction) || isset($single_property->flooring) || isset($single_property->unmapped->StructuralStyle) || isset($single_property->roofmaterial) || isset($single_property->unmapped->SiteFeatures) || isset($single_property->interiorfeatures) || isset($single_property->exteriorfeatures) || isset($single_property->appliances) || isset($single_property->garagespaces) || isset($single_property->unmapped->ListingFinancing) || isset($single_property->parkingspcs) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->DistanceType) || isset($single_property->unmapped->SchoolDistrict) || isset($single_property->unmapped->View) || isset($single_property->unmapped->RoadSurface) || isset($single_property->unmapped->MaintainedBy) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->CondoFloorLocationType)): ?>
				<tr>
					<td class="bt-listing__table__label">Condo Floor Location</td>
					<td class="bt-listing__table__items"><span>[unmapped_CondoFloorLocationType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="bt-listing__table__label">Construction</td>
					<td class="bt-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floor</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StructuralStyle)): ?>
				<tr>
					<td class="bt-listing__table__label">Structural Style</td>
					<td class="bt-listing__table__items"><span>[unmapped_StructuralStyle]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Material</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SiteFeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Site Features</td>
					<td class="bt-listing__table__items"><span>[unmapped_SiteFeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<tr>
					<td class="bt-listing__table__label">Appliances</td>
					<td class="bt-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Spaces</td>
					<td class="bt-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->ListingFinancing)): ?>
				<tr>
					<td class="bt-listing__table__label">Listing Financing</td>
					<td class="bt-listing__table__items"><span>[unmapped_ListingFinancing]</span></td>
				</tr>
				<?php endif; ?>
				<?php /*if( isset($single_property->parkingspcs)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Spaces</td>
					<td class="bt-listing__table__items"><span>[parkingspcs]</span></td>
				</tr>
				<?php endif;*/ ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Laundry Features</td>
					<td class="bt-listing__table__items"><span>[laundryfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->DistanceType)): ?>
				<tr>
					<td class="bt-listing__table__label">Distance Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_DistanceType]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SchoolDistrict)): ?>
				<tr>
					<td class="bt-listing__table__label">School District</td>
					<td class="bt-listing__table__items"><span>[unmapped_SchoolDistrict]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<tr>
					<td class="bt-listing__table__label">View</td>
					<td class="bt-listing__table__items"><span>[unmapped_View]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadSurface)): ?>
				<tr>
					<td class="bt-listing__table__label">Road Surface</td>
					<td class="bt-listing__table__items"><span>[unmapped_RoadSurface]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MaintainedBy)): ?>
				<tr>
					<td class="bt-listing__table__label">Maintained By</td>
					<td class="bt-listing__table__items"><span>[unmapped_MaintainedBy]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="bt-listing__table__label">Zoning</td>
					<td class="bt-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
	<?php if( isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->unmapped->AssociationFeeTotalAnnual) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationPhonePrimary) ):?>
		<h3 class="bt-listing__headline">Association information</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->homeownassociation)): ?>
				<tr>
					<td class="bt-listing__table__label">Home Own Association</td>
					<td class="bt-listing__table__items"><span>[homeownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="bt-listing__table__label">Hoafee</td>
					<td class="bt-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationFeeTotalAnnual)): ?>
				<tr>
					<td class="bt-listing__table__label">AssociationFeeTotalAnnual</td>
					<td class="bt-listing__table__items"><span>[unmapped_AssociationFeeTotalAnnual]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Assc Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationPhonePrimary)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Phone Primary</td>
					<td class="bt-listing__table__items"><span>[unmapped_AssociationPhonePrimary]</span></td>
				</tr>
				<?php endif; ?>						
			</tbody>
		</table>
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->HeatingFuel) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->ElectricitySource) || isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->GasSource) || isset($single_property->sewer) ):?>
		<h3 class="bt-listing__headline">Heating, Cooling, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->HeatingFuel)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating Fuel</td>
					<td class="bt-listing__table__items"><span>[unmapped_HeatingFuel]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating</td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ElectricitySource)): ?>
				<tr>
					<td class="bt-listing__table__label">Electricity Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_ElectricitySource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterSource)): ?>
				<tr>
					<td class="bt-listing__table__label">Water Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_WaterSource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GasSource)): ?>
				<tr>
					<td class="bt-listing__table__label">Gas Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_GasSource]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer</td>
					<td class="bt-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->utilities)): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities</td>
					<td class="bt-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php endif; ?>
	
	<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
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
	<?php endif; ?>
	</li>

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
		<h3 class="bt-listing__headline">Parking Information</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->garagespaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Spaces</td>
					<td class="bt-listing__table__items"><span>[garagespaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Spaces</td>
					<td class="bt-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Road Type </td>
					<td class="bt-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="bt-listing__headline">Taxes</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax year</td>
					<td class="bt-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Amount ($)</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
		
	</li>					

</ul>