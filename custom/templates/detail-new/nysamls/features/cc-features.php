<ul class="zy-features-grid">
	<?php if( isset($single_property->basement) || isset($single_property->flooring) || isset($single_property->norooms) || isset($single_property->complexcomplete) || isset($single_property->condominiumname) || isset($single_property->unmapped->{'Condo Style'}) || isset($single_property->condoassociation) || isset($single_property->unmapped->{'Convenient To'}) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->assessedvaluebldg) || isset($single_property->unmapped->{'leadpaint'}) || isset($single_property->location) || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->management) || isset($single_property->beachmilesto) || isset($single_property->hoafee) || isset($single_property->unmapped->{'Neighborhood Amen'}) || isset($single_property->unmapped->{'Other Assessments'}) || isset($single_property->petsallowed) || isset($single_property->propsubtype) || isset($single_property->propsubtype) || isset($single_property->sewer) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->yearround) || isset($single_property->zoning) || isset($single_property->kitdscrp) || isset($single_property->livdscrp) || isset($single_property->unmapped->{'Master Bedroom'}) || isset($single_property->mbrlevel) || isset($single_property->interiorfeatures)):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
		<?php if( isset($single_property->construction) ): ?>
					<li>Construction: [construction]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Levels'}) ): ?>
					<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
	<?php if( isset($single_property->roofmaterial) ): ?>
					<li>Roof: [roofmaterial]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'RoadFrontageType'}) ): ?>
					<li>Additional Transportation: [unmapped_RoadFrontageType]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'BusinessType'}) ): ?>
					<li>Business Type: [unmapped_BusinessType]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'OperatingExpenseIncludes'}) ): ?>
					<li>Expenses Include: [unmapped_OperatingExpenseIncludes]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ListingTerms'}) ): ?>
					<li>Listing Terms: [unmapped_ListingTerms]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'NewConstructionYN'}) ): ?>
					<li>New Construction YN: [unmapped_NewConstructionYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'PossibleUse'}) ): ?>
					<li>Possible Use: [unmapped_PossibleUse]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LotSizeDimensions'}) ): ?>
					<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
	<?php if( isset($single_property->sitecondition) ): ?>
					<li>Approx Age Code: [sitecondition]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Flooring: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->norooms)): ?>
				<li>Total Rooms: [norooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->complexcomplete)): ?>
				<li>Complex Completed: [complexcomplete]</li>
				<?php endif; ?>
				<?php if( isset($single_property->condominiumname)): ?>
				<li>Complex Name: [condominiumname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Condo Style'})): ?>
				<li>Condo: [unmapped_Condo]</li>
				<?php endif; ?>
				<?php if( isset($single_property->condoassociation)): ?>
				<li>Condo Type: [condoassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Convenient To'})): ?>
				<li>Convenient To: [unmapped_Convenient To]</li>
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
				<?php if( isset($single_property->unmapped->{'leadPaint'})): ?>
					<li>Lead Paint: [unmapped_leadPaint]</li>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<li>Location Description: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<li>Lot Size Source: [unmapped_Lot Size Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->management)): ?>
				<li>Management: [management]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachmilesto)): ?>
				<li>Miles From Beach: [beachmilesto]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Monthly Association Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Neighborhood Amen'})): ?>
				<li>Neighborhood Amenities: [unmapped_Neighborhood Amen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<li>Other Assessments: [unmapped_Other Assessments]</li>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<li>Sewer: [sewer]</li>
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
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Kitchen Features: [kitdscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Living Room Features: [livdscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom'})): ?>
				<li>Master Bedroom: [unmapped_Master Bedroom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<li>Master Bedroom Level: [mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachdescription)): ?>
				<li>Beach Description: [beachdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<li>Beach Lake Pond: [waterbodyname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<li>Dock: [unmapped_Dock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscpool)): ?>
				<li>Pool: [asscpool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Street Description: [roadtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Topography: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unitplacement)): ?>
				<li>Unit Placement: [unitplacement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Water Access'})): ?>
				<li>Water Access: [unmapped_Water Access]</li>
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
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior: [exterior]</li>
				<?php endif; ?>			
		</ul>
	</li>						
	<?php endif; ?>
	
	
	
	<li class="cell">
	
	<?php if( isset($single_property->cooling)  || isset($single_property->utilities) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) ):?>
	
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
				<?php if( isset($single_property->utilities)): ?>
                    <li>Utilities: [utilities]</li>
                    <?php endif; ?>  		
			
		</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->taxes) || isset($single_property->reqdownassociation) || isset($single_property->asscfeeincludes) || isset($single_property->beachownership) || isset($single_property->taxyear) || isset($single_property->assessedvaluebldg) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Annual Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
					<li>Association YN: <?php echo $single_property->reqdownassociation=='Y' ? 'Yes' : 'No'; ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Association Fee Includes: [asscfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachownership)): ?>
				<li>Beach Ownership: [beachownership]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<li>Total Assessment: [assessedvaluebldg]</li>
				<?php endif; ?>
			
		</ul>
	<?php endif; ?>
	
	<?php if( isset($single_property->parkingfeature) || isset($single_property->parkingspaces) || isset($single_property->unmapped->{'Garage'}) || isset($single_property->unmapped->{'Underground Fuel Tank'}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Description: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Garage'})): ?>
				<li>Garage: [unmapped_Garage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'OpenParkingSpaces'})): ?>
				<li>Number Parking Spaces Uncovered: [unmapped_Underground Fuel Tank]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Underground Fuel Tank'})): ?>
				<li>Underground Fuel Tank: [unmapped_Underground Fuel Tank]</li>
				<?php endif; ?>
			
		</ul>
	<?php endif; ?>
		
	</li>				

</ul>
