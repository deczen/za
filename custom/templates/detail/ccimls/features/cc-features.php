<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	
	<li class="cell">
		<?php /* if( isset($single_property->lngTOWNSDESCRIPTION) ):?>
		<h3 class="zy-listing__headline">Summary Info</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->lngTOWNSDESCRIPTION)): ?>
				<tr>
					<td class="zy-listing__table__label">Neighbourhood</td>
					<td class="zy-listing__table__items"><span>[lngTOWNSDESCRIPTION]</span></td>
				</tr>
				<?php endif; ?>				
			</tbody>
		</table>
		<?php endif; */ ?>
		
		<?php if( isset($single_property->basement) || isset($single_property->flooring) || isset($single_property->norooms) || isset($single_property->complexcomplete) || isset($single_property->condominiumname) || isset($single_property->unmapped->{'Condo Style'}) || isset($single_property->condoassociation) || isset($single_property->unmapped->{'Convenient To'})
			   || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->assessedvaluebldg) || isset($single_property->leadpaint) || isset($single_property->location) || isset($single_property->unmapped->{'Lot Size Source'})
		       || isset($single_property->management) || isset($single_property->beachmilesto) || isset($single_property->hoafee) || isset($single_property->unmapped->{'Neighborhood Amen'}) || isset($single_property->unmapped->{'Other Assessments'}) || isset($single_property->petsallowed) || isset($single_property->propsubtype)
			   || isset($single_property->propsubtype) || isset($single_property->sewer) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->yearround) || isset($single_property->zoning)):?>
		
		<h3 class="zy-listing__headline">Property Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Floors</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->norooms)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Rooms</td>
					<td class="zy-listing__table__items"><span>[norooms]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->complexcomplete)): ?>
				<tr>
					<td class="zy-listing__table__label">Complex Completed</td>
					<td class="zy-listing__table__items"><span>[complexcomplete]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->condominiumname)): ?>
				<tr>
					<td class="zy-listing__table__label">Complex Name</td>
					<td class="zy-listing__table__items"><span>[condominiumname]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->unmapped->{'Condo Style'})): ?>
				<tr>
					<td class="zy-listing__table__label">Condo</td>
					<td class="zy-listing__table__items"><span>[unmapped_Condo Style]</span></td>
				</tr>
				<?php endif; ?>				
				<?php if( isset($single_property->condoassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Condo Type</td>
					<td class="zy-listing__table__items"><span>[condoassociation]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Convenient To'})): ?>
				<tr>
					<td class="zy-listing__table__label">Convenient To</td>
					<td class="zy-listing__table__items"><span>[unmapped_Convenient To]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Flood Ins Required'})): ?>
				<tr>
					<td class="zy-listing__table__label">Flood Insurance Required</td>
					<td class="zy-listing__table__items"><span>[unmapped_Flood Ins Required]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Fuel Type'})): ?>
				<tr>
					<td class="zy-listing__table__label">Fuel Type</td>
					<td class="zy-listing__table__items"><span>[unmapped_Fuel Type]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<tr>
					<td class="zy-listing__table__label">Improvement Assessments</td>
					<td class="zy-listing__table__items"><span>[assessedvaluebldg]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->leadpaint)): ?>
				<tr>
					<td class="zy-listing__table__label">Lead Paint</td>
					<td class="zy-listing__table__items"><span>[leadpaint]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->location)): ?>
				<tr>
					<td class="zy-listing__table__label">Location Description</td>
					<td class="zy-listing__table__items"><span>[location]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Size Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_Lot Size Source]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->management)): ?>
				<tr>
					<td class="zy-listing__table__label">Management</td>
					<td class="zy-listing__table__items"><span>[management]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->beachmilesto)): ?>
				<tr>
					<td class="zy-listing__table__label">Miles From Beach</td>
					<td class="zy-listing__table__items"><span>[beachmilesto]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->hoafee)): ?>
				<tr>
					<td class="zy-listing__table__label">Monthly Association Fee</td>
					<td class="zy-listing__table__items"><span>[hoafee]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Neighborhood Amen'})): ?>
				<tr>
					<td class="zy-listing__table__label">Neighborhood Amenities</td>
					<td class="zy-listing__table__items"><span>[unmapped_Neighborhood Amen]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<tr>
					<td class="zy-listing__table__label">Other Assessments</td>
					<td class="zy-listing__table__items"><span>[unmapped_Other Assessments]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->petsallowed)): ?>
				<tr>
					<td class="zy-listing__table__label">Pets Allowed</td>
					<td class="zy-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->propsubtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Property Sub Type</td>
					<td class="zy-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer	</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'})): ?>
				<tr>
					<td class="zy-listing__table__label">Special List Conditions</td>
					<td class="zy-listing__table__items"><span>[unmapped_Special Listing Cond]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'SqFt Source'})): ?>
				<tr>
					<td class="zy-listing__table__label">Sq Ft Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_SqFt Source]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Year Built Description</td>
					<td class="zy-listing__table__items"><span>[yearbuiltdescrp]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->yearround)): ?>
				<tr>
					<td class="zy-listing__table__label">Year Round</td>
					<td class="zy-listing__table__items"><span>[yearround]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->zoning)): ?>
				<tr>
					<td class="zy-listing__table__label">Zoning</td>
					<td class="zy-listing__table__items"><span>[zoning]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->kitdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Kitchen Features</td>
					<td class="zy-listing__table__items"><span>[kitdscrp]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->livdscrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Living Room Features</td>
					<td class="zy-listing__table__items"><span>[livdscrp]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Master Bedroom'})): ?>
				<tr>
					<td class="zy-listing__table__label">Master Bedroom</td>
					<td class="zy-listing__table__items"><span>[unmapped_Master Bedroom]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->mbrlevel)): ?>
				<tr>
					<td class="zy-listing__table__label">Master Bedroom Level</td>
					<td class="zy-listing__table__items"><span>[mbrlevel]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->interiorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Interior Features</td>
					<td class="zy-listing__table__items"><span>[interiorfeatures]</span></td>
				</tr>
				<?php endif; ?>	
								
			</tbody>
		</table>				
		<?php endif; ?>
	</li>		
	
	<li class="cell">
		<?php if( isset($single_property->beachdescription) || isset($single_property->waterbodyname) || isset($single_property->unmapped->Dock) || isset($single_property->asscpool)
			   || isset($single_property->roadtype) || isset($single_property->lotdescription) || isset($single_property->unitplacement) || isset($single_property->unmapped->{'Water Access'}) 
		       || isset($single_property->unmapped->Waterview) || isset($single_property->waterfrontflag) || isset($single_property->waterfront) || isset($single_property->waterviewFlag) ): ?>
		   
		<h3 class="zy-listing__headline">Exterior Features</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->beachdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Beach Description</td>
					<td class="zy-listing__table__items"><span>[beachdescription]</span></td>
				</tr>
				<?php endif; ?>					
				<?php if( isset($single_property->waterbodyname)): ?>
				<tr>
					<td class="zy-listing__table__label">Beach Lake Pond</td>
					<td class="zy-listing__table__items"><span>[waterbodyname]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<tr>
					<td class="zy-listing__table__label">Dock</td>
					<td class="zy-listing__table__items"><span>[unmapped_Dock]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->foundation)): ?>
				<tr>
					<td class="zy-listing__table__label">Foundation</td>
					<td class="zy-listing__table__items"><span>[foundation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscpool)): ?>
				<tr>
					<td class="zy-listing__table__label">Pool</td>
					<td class="zy-listing__table__items"><span>[asscpool]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="zy-listing__table__label">Street Description</td>
					<td class="zy-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="zy-listing__table__label">Topography</td>
					<td class="zy-listing__table__items"><span>[lotdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unitplacement)): ?>
				<tr>
					<td class="zy-listing__table__label">Unit Placement</td>
					<td class="zy-listing__table__items"><span>[unitplacement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Water Access'})): ?>
				<tr>
					<td class="zy-listing__table__label">Water Access</td>
					<td class="zy-listing__table__items"><span>[unmapped_Water Access]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Waterview)): ?>
				<tr>
					<td class="zy-listing__table__label">Water View</td>
					<td class="zy-listing__table__items"><span>[unmapped_Waterview]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfrontflag)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterfront</td>
					<td class="zy-listing__table__items"><span>[waterfrontflag]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterfront Description</td>
					<td class="zy-listing__table__items"><span>[waterfront]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->waterviewFlag)): ?>
				<tr>
					<td class="zy-listing__table__label">Waterview Direction</td>
					<td class="zy-listing__table__items"><span>[waterviewFlag]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior Features</td>
					<td class="zy-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<tr>
					<td class="zy-listing__table__label">Exterior</td>
					<td class="zy-listing__table__items"><span>[exterior]</span></td>
				</tr>
				<?php endif; ?>
				
			</tbody>
		</table>
		<?php endif; ?>	
	</li>

	<li class="cell">
		
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) ):?>
		
		<h3 class="zy-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heating </td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>							
				<?php if( isset($single_property->hotwater)): ?>
				<tr>
					<td class="zy-listing__table__label">Hot Water </td>
					<td class="zy-listing__table__items"><span>[hotwater]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Hot Water Source'})): ?>
				<tr>
					<td class="zy-listing__table__label">Hot Water Source</td>
					<td class="zy-listing__table__items"><span>[unmapped_Hot Water Source]</span></td>
				</tr>
				<?php endif; ?>							
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->reqdownassociation) || isset($single_property->asscfeeincludes) || isset($single_property->beachownership) || isset($single_property->taxyear) || isset($single_property->assessedvaluebldg) ):?>
		<h3 class="zy-listing__headline">Taxes, Fees</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Annual Taxes</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<tr>
					<td class="zy-listing__table__label">Association </td>
					<td class="zy-listing__table__items"><span>[reqdownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Association Fee Includes</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->beachownership)): ?>
				<tr>
					<td class="zy-listing__table__label">Beach Ownership</td>
					<td class="zy-listing__table__items"><span>[beachownership]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<tr>
					<td class="zy-listing__table__label">Tax Year</td>
					<td class="zy-listing__table__items"><span>[taxyear]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<tr>
					<td class="zy-listing__table__label">Total Assessment</td>
					<td class="zy-listing__table__items"><span>[assessedvaluebldg]</span></td>
				</tr>
				<?php endif; ?>
				
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->parkingfeature) || isset($single_property->parkingspaces) || isset($single_property->unmapped->{'Garage'}) || isset($single_property->unmapped->{'Underground Fuel Tank'}) ):?>
		<h3 class="zy-listing__headline">Parking Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Description</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Spaces</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Garage'})): ?>
				<tr>
					<td class="zy-listing__table__label">Garage	</td>
					<td class="zy-listing__table__items"><span>[unmapped_Garage]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Underground Fuel Tank'})): ?>
				<tr>
					<td class="zy-listing__table__label">Underground Fuel Tank	</td>
					<td class="zy-listing__table__items"><span>[unmapped_Underground Fuel Tank]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>		

</ul>