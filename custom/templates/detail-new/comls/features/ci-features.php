<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->CondoFloorLocationType) || isset($single_property->construction) || isset($single_property->flooring) || isset($single_property->unmapped->StructuralStyle) || isset($single_property->roofmaterial) || isset($single_property->unmapped->SiteFeatures) || isset($single_property->interiorfeatures) || isset($single_property->exteriorfeatures) || isset($single_property->appliances) || isset($single_property->garagespaces) || isset($single_property->unmapped->ListingFinancing) || isset($single_property->parkingspcs) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->DistanceType) || isset($single_property->unmapped->SchoolDistrict) || isset($single_property->unmapped->View) || isset($single_property->unmapped->RoadSurface) || isset($single_property->unmapped->MaintainedBy) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->CondoFloorLocationType)): ?>
				<li>Condo Floor Location: [unmapped_CondoFloorLocationType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Floor: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StructuralStyle)): ?>
				<li>Structural Style: [unmapped_StructuralStyle]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Material: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SiteFeatures)): ?>
				<li>Site Features: [unmapped_SiteFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->garagespaces)): ?>
				<li>Garage Spaces: [garagespaces]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->unmapped->ListingFinancing)): ?>
				<li>Listing Financing: [unmapped_ListingFinancing]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->parkingspcs)): ?>
				<li>Parking Spaces: [parkingspcs]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>Laundry Features: [laundryfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->DistanceType)): ?>
				<li>Distance Type: [unmapped_DistanceType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SchoolDistrict)): ?>
				<li>School District: [unmapped_SchoolDistrict]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->View)): ?>
				<li>View: [unmapped_View]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->RoadSurface)): ?>
				<li>Road Surface: [unmapped_RoadSurface]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->MaintainedBy)): ?>
				<li>Maintained By: [unmapped_MaintainedBy]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
			</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
	<?php if( isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->unmapped->AssociationFeeTotalAnnual) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->AssociationPhonePrimary) ):?>
		<h3 class="zy-feature-title">Association information</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Home Own Association: [homeownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoafee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationFeeTotalAnnual)): ?>
				<li>AssociationFeeTotalAnnual: [unmapped_AssociationFeeTotalAnnual]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AssociationPhonePrimary)): ?>
				<li>Association Phone Primary: [unmapped_AssociationPhonePrimary]</li>
				<?php endif; ?>						
			</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->HeatingFuel) || isset($single_property->heating) || isset($single_property->cooling) || isset($single_property->unmapped->ElectricitySource) || isset($single_property->unmapped->WaterSource) || isset($single_property->unmapped->GasSource) || isset($single_property->sewer) ):?>
		<h3 class="zy-feature-title">Heating, Cooling, Utilities</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->unmapped->HeatingFuel)): ?>
				<li>Heating Fuel: [unmapped_HeatingFuel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->ElectricitySource)): ?>
				<li>Electricity Source: [unmapped_ElectricitySource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterSource)): ?>
				<li>Water Source: [unmapped_WaterSource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->GasSource)): ?>
				<li>Gas Source: [unmapped_GasSource]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
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
		
		<?php if( isset($single_property->taxyear) || isset($single_property->taxes) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
				</tr>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
		
	</li>					

</ul>