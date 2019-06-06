<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	
	<li class="cell">
		<?php /* if( isset($single_property->lngTOWNSDESCRIPTION) ):?>
		<h3 class="bt-listing__headline">Summary Info</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->lngTOWNSDESCRIPTION)): ?>
				<tr>
					<td class="bt-listing__table__label">Neighbourhood</td>
					<td class="bt-listing__table__items"><span>[lngTOWNSDESCRIPTION]</span></td>
				</tr>
				<?php endif; ?>				
			</tbody>
		</table>
		<?php endif; */ ?>
		
		<?php if( isset($single_property->beachownership) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->assessedvaluebldg) || isset($single_property->leadpaint) || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->beachmilesto) || isset($single_property->propsubtype)
			   || isset($single_property->unmapped->{'Separate Living Qtrs'}) || isset($single_property->unmapped->{'Sewer: Septic Tank'}) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->yearround) || isset($single_property->zoning) ):?>
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->beachownership)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Ownership</td>
					<td class="bt-listing__table__items"><span>[beachownership]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->unmapped->{'Flood Ins Required'})): ?>
				<tr>
					<td class="bt-listing__table__label">Flood Insurance Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_Flood Ins Required]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->unmapped->{'Fuel Type'})): ?>
				<tr>
					<td class="bt-listing__table__label">Fuel Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fuel Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<tr>
					<td class="bt-listing__table__label">Improvement Assessments</td>
					<td class="bt-listing__table__items"><span>[assessedvaluebldg]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->leadpaint)): ?>
				<tr>
					<td class="bt-listing__table__label">Lead Paint</td>
					<td class="bt-listing__table__items"><span>[leadpaint]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lot Size Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Property Sub Type</td>
					<td class="bt-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Separate Living Qtrs'})): ?>
				<tr>
					<td class="bt-listing__table__label">Separate Living Quarters</td>
					<td class="bt-listing__table__items"><span>[unmapped_Separate Living Qtrs]</span></td>
				</tr>
				<?php endif; ?>			
				<?php if( isset($single_property->unmapped->{'Sewer: Septic Tank'})): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer Septic Tank</td>
					<td class="bt-listing__table__items"><span>[unmapped_Sewer: Septic Tank]</span></td>
				</tr>
				<?php endif; ?>			
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'})): ?>
				<tr>
					<td class="bt-listing__table__label">Special List Conditions</td>
					<td class="bt-listing__table__items"><span>[unmapped_Special Listing Cond]</span></td>
				</tr>
				<?php endif; ?>			
				<?php if( isset($single_property->unmapped->{'SqFt Source'})): ?>
				<tr>
					<td class="bt-listing__table__label">Sq Ft Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_SqFt Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water )): ?>
				<tr>
					<td class="bt-listing__table__label">Water </td>
					<td class="bt-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Year Built Description</td>
					<td class="bt-listing__table__items"><span>[yearbuiltdescrp]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->yearround)): ?>
				<tr>
					<td class="bt-listing__table__label">Year Round</td>
					<td class="bt-listing__table__items"><span>[yearround]</span></td>
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
		<?php endif; ?>
	</li>		
	
	<li class="cell">
		<?php if( isset($single_property->beachdescription) || isset($single_property->waterbodyname) || isset($single_property->unmapped->Dock) || isset($single_property->unmapped->{'Dock Description'}) || isset($single_property->exteriorfeatures)
			   || isset($single_property->foundation) || isset($single_property->unmapped->Garage) || isset($single_property->garageparking) || isset($single_property->parkingfeature) || isset($single_property->asscpool) || isset($single_property->pooldescription) 
			   || isset($single_property->roofmaterial) || isset($single_property->exterior) || isset($single_property->roadtype) || isset($single_property->style) || isset($single_property->lotdescription) || isset($single_property->unmapped->Waterview)
			   || isset($single_property->waterfrontflag) || isset($single_property->waterfront) ): ?>
		   
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->beachdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Description</td>
					<td class="bt-listing__table__items"><span>[beachdescription]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->waterbodyname)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Lake Pond</td>
					<td class="bt-listing__table__items"><span>[waterbodyname]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<tr>
					<td class="bt-listing__table__label">Dock</td>
					<td class="bt-listing__table__items"><span>[unmapped_Dock]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Dock Description'})): ?>
				<tr>
					<td class="bt-listing__table__label">Dock Description</td>
					<td class="bt-listing__table__items"><span>[unmapped_Dock Description]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="bt-listing__table__label">Foundation</td>
					<td class="bt-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->Garage)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage</td>
					<td class="bt-listing__table__items"><span>[unmapped_Garage]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->garageparking)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage Description </td>
					<td class="bt-listing__table__items"><span>[garageparking]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Description</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->asscpool)): ?>
				<tr>
					<td class="bt-listing__table__label">Pool</td>
					<td class="bt-listing__table__items"><span>[asscpool]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->pooldescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Pool Description</td>
					<td class="bt-listing__table__items"><span>[pooldescription]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->roofmaterial)): ?>
				<tr>
					<td class="bt-listing__table__label">Roof Description</td>
					<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="bt-listing__table__label">Siding Description</td>
					<td class="bt-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Street Description</td>
					<td class="bt-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="bt-listing__table__label">Style</td>
					<td class="bt-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Topography</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->Waterview)): ?>
				<tr>
					<td class="bt-listing__table__label">Water View</td>
					<td class="bt-listing__table__items"><span>[Waterview]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfrontflag)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterfront </td>
					<td class="bt-listing__table__items"><span>[waterfrontflag]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterfront Description </td>
					<td class="bt-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>	
				
			</tbody>
		</table>
		<?php endif; ?>	
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->basement) || isset($single_property->unmapped->{'Basement Area SqFt'}) || isset($single_property->basementfeature) || isset($single_property->bed2DSCRP)
			   || isset($single_property->bed3DSCRP) || isset($single_property->bed4DSCRP) || isset($single_property->dindscrp) || isset($single_property->unmapped->Fireplace) || isset($single_property->fireplaces)
		       || isset($single_property->flooring) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->{'Kitchen/Dining Combo'}) || isset($single_property->kitdscrp) || isset($single_property->livdscrp)
			   || isset($single_property->unmapped->{'Master Bedroom'}) || isset($single_property->unmapped->{'Master Bedroom: Master Bedroom Level'}) || isset($single_property->norooms) ): ?>
		
		<h3 class="bt-listing__headline">Interior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement</td>
					<td class="bt-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->unmapped->{'Basement Area SqFt'})): ?>
				<tr>
					<td class="bt-listing__table__label">Basement Area Sq Ft</td>
					<td class="bt-listing__table__items"><span>[unmapped_Basement Area SqFt]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->basementfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement Description</td>
					<td class="bt-listing__table__items"><span>[basementfeature]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Bedroom2 Features</td>
					<td class="bt-listing__table__items"><span>[bed2DSCRP]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Bedroom3 Features</td>
					<td class="bt-listing__table__items"><span>[bed3DSCRP]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<tr>
					<td class="bt-listing__table__label">Bedroom4 Features</td>
					<td class="bt-listing__table__items"><span>[bed4DSCRP]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->dindscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Dining Room Features</td>
					<td class="bt-listing__table__items"><span>[dindscrp]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplace</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fireplace]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplaces</td>
					<td class="bt-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floors</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Interior Features</td>
					<td class="bt-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen/Dining Combo'})): ?>
				<tr>
					<td class="bt-listing__table__label">Kitchen Dining Combo</td>
					<td class="bt-listing__table__items"><span>[unmapped_Kitchen/Dining Combo]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Kitchen Features</td>
					<td class="bt-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="bt-listing__table__label">Living Room Features</td>
					<td class="bt-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom'})): ?>
				<tr>
					<td class="bt-listing__table__label">Master Bedroom</td>
					<td class="bt-listing__table__items"><span>[unmapped_Master Bedroom]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom: Master Bedroom Level'})): ?>
				<tr>
					<td class="bt-listing__table__label">Master Bedroom Level</td>
					<td class="bt-listing__table__items"><span>[unmapped_Master Bedroom: Master Bedroom Level]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->norooms)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Rooms</td>
					<td class="bt-listing__table__items"><span>[norooms]</span></td>
				</tr>
				<?php endif; ?>
				
			</tbody>
		</table>
		<?php endif; ?>
	</li>

	<li class="cell">
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) ):?>
		
		<h3 class="bt-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="bt-listing__table__label">Heating </td>
					<td class="bt-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>							
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="bt-listing__table__label">Hot Water </td>
					<td class="bt-listing__table__items"><span>[hotwater]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Hot Water Source'})): ?>
				<tr>
					<td class="bt-listing__table__label">Hot Water Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_Hot Water Source]</span></td>
				</tr>
				<?php endif; ?>							
			</tbody>
		</table>
		<?php endif; ?>
	</li>
	
	<li class="cell">	
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->totalassessedvalue) || isset($single_property->unmapped->{'Other Assessments'}) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Annual Taxes</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="bt-listing__table__label">Tax Year</td>
					<td class="bt-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->totalassessedvalue)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Assessment</td>
					<td class="bt-listing__table__items"><span>[totalassessedvalue]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<tr>
					<td class="bt-listing__table__label">Other Assessments</td>
					<td class="bt-listing__table__items"><span>[unmapped_Other Assessments]</span></td> <!-- not done -->
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>