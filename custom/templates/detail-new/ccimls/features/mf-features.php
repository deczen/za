<ul class="zy-features-grid">
	<?php if( isset($single_property->beachownership) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->assessedvaluebldg) || isset($single_property->leadpaint) || isset($single_property->unmapped->{'Lot Size Source'})|| isset($single_property->propsubtype) || isset($single_property->unmapped->{'Separate Living Qtrs'}) || isset($single_property->unmapped->{'Sewer: Septic Tank'}) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->yearround) || isset($single_property->zoning) || isset($single_property->unmapped->{'Beach/Lake/Pond'}) || isset($single_property->parkingspaces) || isset($single_property->unmapped->{'Siding Description'}) || isset($single_property->unmapped->{'Street Description'}) || isset($single_property->lotdescription) || isset($single_property->appliances) || isset($single_property->unmapped->{'Convenient To'}) || isset($single_property->location) || isset($single_property->beachmilesto) || isset($single_property->unmapped->{'Neighborhood Amen'}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
		
				<?php if( isset($single_property->beachownership)): ?>
				<li>Beach Ownership: [beachownership]</li>
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
				<?php if( isset($single_property->leadpaint)): ?>
				<li>Lead Paint: [leadpaint]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<li>Lot Size Source: [unmapped_Lot Size Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Separate Living Qtrs'})): ?>
				<li>Separate Living Quarters: [unmapped_Separate Living Qtrs]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Sewer: Septic Tank'})): ?>
				<li>Sewer Septic Tank: [unmapped_Sewer: Septic Tank]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'})): ?>
				<li>Special List Conditions: [unmapped_Special Listing Cond]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'SqFt Source'})): ?>
				<li>Sq Ft Source: [unmapped_SqFt Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water: [water]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<li>Year Built Description: [yearbuiltdescrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearround)): ?>
				<li>Year Round: [yearround]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Beach/Lake/Pond'})): ?>
				<li>Beach Lake Pond: [unmapped_Beach/Lake/Pond]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Siding Description'})): ?>
				<li>Siding Description: [unmapped_Siding Description]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Street Description'})): ?>
				<li>Street Description: [unmapped_Street Description]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Topography: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Convenient To'})): ?>
				<li>Convenient To: [unmapped_Convenient To]</li>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<li>Location Description: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachmilesto)): ?>
				<li>Miles From Beach: [beachmilesto]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Neighborhood Amen'})): ?>
				<li>Neighborhood Amen: [unmapped_Neighborhood Amen]</li>
				<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->beachdescription) || isset($single_property->waterbodyname) || isset($single_property->unmapped->Dock) || isset($single_property->unmapped->{'Dock Description'}) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->unmapped->Garage) || isset($single_property->garageparking) || isset($single_property->parkingfeature) || isset($single_property->asscpool) || isset($single_property->pooldescription) || isset($single_property->roofmaterial) || isset($single_property->exterior) || isset($single_property->roadtype) || isset($single_property->style) || isset($single_property->lotdescription) || isset($single_property->unmapped->Waterview) || isset($single_property->waterfrontflag) || isset($single_property->waterfront) ): ?>
	<li class="cell">
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">
		
				<?php if( isset($single_property->beachdescription)): ?>
				<li>Beach Description: [beachdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<li>Beach Lake Pond: [waterbodyname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<li>Dock: [unmapped_Dock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dock Description'})): ?>
				<li>Dock Description: [unmapped_Dock Description]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Garage'})): ?>
				<li>Garage: [unmapped_Garage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Description: [garageparking]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Description: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscpool)): ?>
				<li>Pool: [asscpool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Description: [pooldescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Description: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior: [exterior]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->roadtype)): ?>
				<li>Street Description: [roadtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Topography: [lotdescription]</li>
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
				
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->basement) || isset($single_property->unmapped->{'Basement Area SqFt'}) || isset($single_property->basementfeature) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DSCRP) || isset($single_property->dindscrp) || isset($single_property->unmapped->Fireplace) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->{'Kitchen/Dining Combo'}) || isset($single_property->kitdscrp) || isset($single_property->livdscrp) || isset($single_property->unmapped->{'Master Bedroom'}) || isset($single_property->unmapped->{'Master Bedroom: Master Bedroom Level'}) || isset($single_property->norooms) ): ?>
		<h3 class="zy-feature-title">Interior Features</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Basement Area SqFt'})): ?>
				<li>Basement Area Sq Ft: [unmapped_Basement Area SqFt]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basementfeature)): ?>
				<li>Basement Description: [basementfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<li>Bedroom2 Features: [bed2DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<li>Bedroom3 Features: [bed3DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<li>Bedroom4 Features: [bed4DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Dining Room Features: [dindscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<li>Fireplace: [unmapped_Fireplace]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Flooring: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen/Dining Combo'})): ?>
				<li>Kitchen Dining Combo: [unmapped_Kitchen/Dining Combo]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Kitchen Features: [kitdscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Living Room Features: [livdscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom'})): ?>
				<li>Master Bedroom: [unmapped_Master Bedroom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom: Master Bedroom Level'})): ?>
				<li>Master Bedroom Level: [unmapped_Master Bedroom: Master Bedroom Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->norooms)): ?>
				<li>Total Rooms: [norooms]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{'Unit 1 Info: Bedrooms'}) || isset($single_property->unmapped->{'Unit 1 Features'}) || isset($single_property->unmapped->{'Unit 1 Info: Floor/Level'}) || isset($single_property->unmapped->{'Unit 1 Floor Lvl/Des'}) || isset($single_property->unmapped->{'Unit 1 Info: Full Baths'}) || isset($single_property->unmapped->{'Unit 2 Info: Bedrooms'}) || isset($single_property->unmapped->{'Unit 2 Features'}) || isset($single_property->unmapped->{'Unit 2 Floor Lvl/Des'})
			   || isset($single_property->unmapped->{'Unit 2 Info: Full Baths'}) ):?>
		<h3 class="zy-feature-title">Room Informations</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->{'Unit 1 Info: Bedrooms'})): ?>
				<li>Unit1 Bedrooms: [unmapped_Unit 1 Info: Bedrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 1 Features'})): ?>
				<li>Unit1 Features: [unmapped_Unit 1 Features]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 1 Info: Floor/Level'})): ?>
				<li>Unit1 Floor Level: [unmapped_Unit 1 Info: Floor/Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 1 Floor Lvl/Des'})): ?>
				<li>Unit1 Floor Level Description: [unmapped_Unit 1 Floor Lvl/Des]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 1 Info: Full Baths'})): ?>
				<li>Unit1 Full Baths: [unmapped_Unit 1 Info: Full Baths]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 2 Info: Bedrooms'})): ?>
				<li>Unit2 Bedrooms: [unmapped_Unit 2 Info: Bedrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 2 Features'})): ?>
				<li>Unit2 Features: [unmapped_Unit 2 Features]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 2 Floor Lvl/Des'})): ?>
				<li>Unit2 Floor Level Description: [unmapped_Unit 2 Floor Lvl/Des]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Unit 2 Info: Full Baths'})): ?>
				<li>Unit2 Full Baths: [unmapped_Unit 2 Info: Full Baths]</li>
				<?php endif; ?>
				
		</ul>
		<?php endif; ?>		
			   
	</li>
	
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
		
	</li>

	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->totalassessedvalue) || isset($single_property->unmapped->{'Other Assessments'}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
		
				<?php if( isset($single_property->taxes)): ?>
				<li>Annual Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->totalassessedvalue)): ?>
				<li>Total Assessment: [totalassessedvalue]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<li>Other Assessments: [unmapped_Other Assessments]</li>
				<?php endif; ?>	
				
		</ul>
		<?php endif; ?>	
	</li>

</ul>
