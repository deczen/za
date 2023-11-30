<ul class="zy-features-grid">
	<?php if( isset($single_property->basementfeature) || isset($single_property->flooring) || isset($single_property->unmapped->Walls) || isset($single_property->unmapped->Asbestos) || isset($single_property->beachownership) || isset($single_property->unmapped->{'Business w/Real Estate'}) || isset($single_property->unmapped->{'Commercial Units'}) || isset($single_property->unmapped->Condo) || isset($single_property->unmapped->{'Elevation Certificate'}) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Electric Natural Gas'}) || isset($single_property->assessedvaluebldg) || isset($single_property->unmapped->{'Industrial Units'}) || isset($single_property->leadpaint) || isset($single_property->location) || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->unmapped->{'Other Assessments'}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{'Residential Units'}) || isset($single_property->sewer) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->unmapped->{'Total # Comm Units'}) || isset($single_property->unmapped->{'Total # Res Units'}) || isset($single_property->water) || isset($single_property->zoning) ):?>
	<li class="cell">
		
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->basementfeature)): ?>
				<li>Basement Description: [basementfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Flooring: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Walls)): ?>
				<li>Walls: [unmapped_Walls]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Asbestos)): ?>
				<li>Asbestos: [unmapped_Asbestos]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachownership)): ?>
				<li>Beach Ownership: [beachownership]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Business w/Real Estate'})): ?>
				<li>Business With Real Estate: [unmapped_Business w/Real Estate]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Commercial Units'})): ?>
				<li>Commercial Units: [unmapped_Commercial Units]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Condo'})): ?>
				<li>Condo: [unmapped_Condo]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Elevation Certificate'})): ?>
				<li>Elevation Certificate: [unmapped_Elevation Certificate]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Flood Ins Required'})): ?>
				<li>Flood Insurance Required: [unmapped_Flood Ins Required]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fuel Type'})): ?>
				<li>Fuel Type: [unmapped_Fuel Type]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<li>Improvement Assessments: [assessedvaluebldg]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Industrial Units'})): ?>
				<li>Industrial Units: [unmapped_Industrial Units]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leadpaint)): ?>
				<li>Lead Paint: [leadpaint]</li>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<li>Location: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<li>Lot Size Source: [unmapped_Lot Size Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<li>Other Assessments: [unmapped_Other Assessments]</li>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Primary Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Residential Units'})): ?>
				<li>Residential Units: [unmapped_Residential Units]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'})): ?>
				<li>Special Listing Cond: [unmapped_Special Listing Cond]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'SqFt Source'})): ?>
				<li>Sq Ft Source: [unmapped_SqFt Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Total # Comm Units'})): ?>
				<li>Total Commercial Units: [unmapped_Total # Comm Units]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Total # Res Units'})): ?>
				<li>Total Residential Units: [unmapped_Total # Res Units]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water: [water]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->totalassessedvalue)): ?>
				<li>Total Assessment: [totalassessedvalue]</li>
				<?php endif; ?>
				<?php if( isset($single_property->buildingconstruction)): ?>
				<li>Construction: [buildingconstruction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Depth'})): ?>
				<li>Lot Depth: [unmapped_Lot Depth]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Description: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Topography: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Kitchen)): ?>
				<li>Kitchen: [unmapped_Kitchen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>Laundry: [laundryfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->gas)): ?>
				<li>Gas: [gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lead Base Paint'})): ?>
				<li>Lead Paint: [unmapped_Lead Base Paint]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Residential Units'})): ?>
				<li>Residential Units: [unmapped_Residential Units]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
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
	
	<?php if( isset($single_property->beachdescription) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->roofmaterial) || isset($single_property->exterior) || isset($single_property->unmapped->{'Underground Fuel Tank'}) || isset($single_property->unmapped->Waterview) || isset($single_property->waterviewFlag) ): ?>
	<li class="cell">
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->beachdescription)): ?>
				<li>Beach Description: [beachdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Description: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior: [exterior]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Underground Fuel Tank'})): ?>
				<li>Underground Fuel Tank: [unmapped_Underground Fuel Tank]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Waterview)): ?>
				<li>Water View: [unmapped_Waterview]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront: [waterfrontflag]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront Description: [waterfront]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->waterviewFlag)): ?>
				<li>Waterview Direction: [waterviewFlag]</li>
				<?php endif; ?>			
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		
	<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) ):?>
	
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->cooling)): ?>
				<li>Cooling: [cooling]</li>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<li>Heating: [heating]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hotwater)): ?>
				<li>Hot Water: [hotwater]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Hot Water Source'})): ?>
				<li>Hot Water Source: [unmapped_Hot Water Source]</li>
				<?php endif; ?>			
			
		</ul>
	<?php endif; ?>
		
	<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->assessedvaluebldg) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Annual Taxes: [taxes]</li>
				<?php endif; ?> 
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<li>Total Assessment: [assessedvaluebldg]</li>
				<?php endif; ?>
			
		</ul>
	<?php endif; ?>
	
	</li>					

</ul>