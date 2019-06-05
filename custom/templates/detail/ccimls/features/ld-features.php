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
		
		<?php if( isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->assessedvaluebldg) || isset($single_property->assessedvalueland) || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->unmapped->{'Membership Required'})
			   || isset($single_property->beachmilesto) || isset($single_property->unmapped->{'Other Assessments'}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->zoning) ):?>
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->{'Flood Ins Required'})): ?>
				<tr>
					<td class="bt-listing__table__label">Flood Insurance Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_Flood Ins Required]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg) ): ?>
				<tr>
					<td class="bt-listing__table__label">Improvement Assessments</td>
					<td class="bt-listing__table__items"><span>[assessedvaluebldg]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvalueland) ): ?>
				<tr>
					<td class="bt-listing__table__label">Land Assessments</td>
					<td class="bt-listing__table__items"><span>[assessedvalueland]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lot Size Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Membership Required'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Membership Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_Membership Required]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->beachmilesto) ): ?>
				<tr>
					<td class="bt-listing__table__label">Miles From Beach</td>
					<td class="bt-listing__table__items"><span>[beachmilesto]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Other Assessments</td>
					<td class="bt-listing__table__items"><span>[unmapped_Other Assessments]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype) ): ?>
				<tr>
					<td class="bt-listing__table__label">Property Sub Type</td>
					<td class="bt-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Special List Conditions</td>
					<td class="bt-listing__table__items"><span>[unmapped_Special Listing Cond]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->zoning) ): ?>
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
		<?php if( isset($single_property->beachdescription) || isset($single_property->unmapped->Dock) || isset($single_property->roadtype) || isset($single_property->lotdescription) || isset($single_property->unmapped->Waterview) || isset($single_property->waterfrontflag) ): ?>
		   
		<h3 class="bt-listing__headline">Exterior Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->beachdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Description</td>
					<td class="bt-listing__table__items"><span>[beachdescription]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<tr>
					<td class="bt-listing__table__label">Dock</td>
					<td class="bt-listing__table__items"><span>[unmapped_Dock]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->roadtype)): ?>
				<tr>
					<td class="bt-listing__table__label">Street Description</td>
					<td class="bt-listing__table__items"><span>[roadtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<tr>
					<td class="bt-listing__table__label">Topography</td>
					<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
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
				
			</tbody>
		</table>
		<?php endif; ?>	
	</li>

	<li class="cell">
		
		<?php if( isset($single_property->taxes) || isset($single_property->beachownership) || isset($single_property->unmapped->{'Deed Restrictions'}) || isset($single_property->taxyear) || isset($single_property->assessedvaluebldg) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="bt-listing__table__label">Annual Taxes</td>
					<td class="bt-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->beachownership)): ?>
				<tr>
					<td class="bt-listing__table__label">Beach Ownership</td>
					<td class="bt-listing__table__items"><span>[beachownership]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Deed Restrictions'})): ?>
				<tr>
					<td class="bt-listing__table__label">Deed Restrictions</td>
					<td class="bt-listing__table__items"><span>[unmapped_Deed Restrictions]</span></td>
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