<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	
	<li class="cell">
		<?php if( isset($single_property->lngTOWNSDESCRIPTION) ):?>
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
		<?php endif; ?>
		
		<?php if( isset($single_property->basementfeature) || isset($single_property->flooring) || isset($single_property->unmapped->Walls) || isset($single_property->unmapped->Asbestos)
               || isset($single_property->beachownership) || isset($single_property->unmapped->{'Business w/Real Estate'}) || isset($single_property->unmapped->{'Commercial Units'}) || isset($single_property->unmapped->Condo) 
			   || isset($single_property->unmapped->{'Elevation Certificate'}) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Electric Natural Gas'}) 
			   || isset($single_property->assessedvaluebldg) || isset($single_property->unmapped->{'Industrial Units'}) || isset($single_property->leadpaint) || isset($single_property->location) 
			   || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->unmapped->{'Other Assessments'}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{'Residential Units'})
			   || isset($single_property->sewer) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->unmapped->{'Total # Comm Units'})
			   || isset($single_property->unmapped->{'Total # Res Units'}) || isset($single_property->water) || isset($single_property->zoning) ):?>
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->basementfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Basement Description</td>
					<td class="bt-listing__table__items"><span>[basementfeature]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="bt-listing__table__label">Floors</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Walls)): ?>
				<tr>
					<td class="bt-listing__table__label">Walls </td>
					<td class="bt-listing__table__items"><span>[unmapped_Walls]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Asbestos)): ?>
				<tr>
					<td class="bt-listing__table__label">Asbestos</td>
					<td class="bt-listing__table__items"><span>[unmapped_Asbestos]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->beachownership)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Ownership</td>
					<td class="bt-listing__table__items"><span>[beachownership]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Business w/Real Estate'})): ?>
				<tr>
					<td class="bt-listing__table__label">Business With Real Estate</td>
					<td class="bt-listing__table__items"><span>[unmapped_Business w/Real Estate]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Commercial Units'})): ?>
				<tr>
					<td class="bt-listing__table__label">Commercial Units</td>
					<td class="bt-listing__table__items"><span>[unmapped_Commercial Units]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Condo'})): ?>
				<tr>
					<td class="bt-listing__table__label">Condo</td>
					<td class="bt-listing__table__items"><span>[unmapped_Condo]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Elevation Certificate'})): ?>
				<tr>
					<td class="bt-listing__table__label">Elevation Certificate</td>
					<td class="bt-listing__table__items"><span>[unmapped_Elevation Certificate]</span></td>
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
				<?php if( isset($single_property->unmapped->{'Industrial Units'})): ?>
				<tr>
					<td class="bt-listing__table__label">Industrial Units</td>
					<td class="bt-listing__table__items"><span>[unmapped_Industrial Units]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->leadpaint)): ?>
				<tr>
					<td class="bt-listing__table__label">Lead Paint</td>
					<td class="bt-listing__table__items"><span>[leadpaint]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<tr>
					<td class="bt-listing__table__label">Location Description</td>
					<td class="bt-listing__table__items"><span>[location]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lot Size Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<tr>
					<td class="bt-listing__table__label">Other Assessments</td>
					<td class="bt-listing__table__items"><span>[unmapped_Other Assessments]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Primary Sub Type</td>
					<td class="bt-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmmaped->{'Residential Units'})): ?>
				<tr>
					<td class="bt-listing__table__label">Residential Units</td>
					<td class="bt-listing__table__items"><span>[unmapped_Residential Units]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer</td>
					<td class="bt-listing__table__items"><span>[sewer]</span></td>
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
				<?php if( isset($single_property->unmapped->{'Total # Comm Units'})): ?>
				<tr>
					<td class="bt-listing__table__label">Total Commercial Units</td>
					<td class="bt-listing__table__items"><span>[unmapped_Total # Comm Units]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Total # Res Units'})): ?>
				<tr>
					<td class="bt-listing__table__label">Total Residential Units</td>
					<td class="bt-listing__table__items"><span>[unmapped_Total # Res Units]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="bt-listing__table__label">Water</td>
					<td class="bt-listing__table__items"><span>[water]</span></td>
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
		<?php if( isset($single_property->beachdescription) || isset($single_property->exteriorfeatures) || isset($single_property->foundation) || isset($single_property->roofmaterial) || isset($single_property->exterior) 
			   || isset($single_property->unmapped->{'Underground Fuel Tank'}) || isset($single_property->unmapped->Waterview) || isset($single_property->waterviewFlag) ): ?>
		   
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->beachdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Description</td>
					<td class="bt-listing__table__items"><span>[beachdescription]</span></td>
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
				<?php if( isset($single_property->unmapped->{'Underground Fuel Tank'})): ?>
				<tr>
					<td class="bt-listing__table__label">Underground Fuel Tank</td>
					<td class="bt-listing__table__items"><span>[unmapped_Underground Fuel Tank]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->unmapped->Waterview)): ?>
				<tr>
					<td class="bt-listing__table__label">Water View</td>
					<td class="bt-listing__table__items"><span>[unmapped_Waterview]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfrontflag)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterfront</td>
					<td class="bt-listing__table__items"><span>[waterfrontflag]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterfront Description</td>
					<td class="bt-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewFlag)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterview Direction</td>
					<td class="bt-listing__table__items"><span>[waterviewFlag]</span></td>
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
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->assessedvaluebldg) ):?>
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
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<tr>
					<td class="bt-listing__table__label">Total Assessment</td>
					<td class="bt-listing__table__items"><span>[assessedvaluebldg]</span></td>
				</tr>
				<?php endif; ?>
				
			</tbody>
		</table>
		<?php endif; ?>
	</li>		

</ul>