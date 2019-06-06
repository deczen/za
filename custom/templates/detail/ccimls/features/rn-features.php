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
		
		<?php if( isset($single_property->unmapped->{'Convenient To'}) || isset($single_property->unmapped->{'First Month Required'}) || isset($single_property->forsale) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->unmapped->{'Last Month Required'}) || isset($single_property->leadpaint)
               || isset($single_property->unmapped->{'Lease w/Option to Buy'}) || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->nolots) || isset($single_property->beachmilesto) || isset($single_property->petsallowed) || isset($single_property->propsubtype) 
			   || isset($single_property->unmapped->Rate) || isset($single_property->unmapped->{'Rental Type'}) || isset($single_property->unmapped->{'Secuirty Deposit Required'}) || isset($single_property->sewer) || isset($single_property->unmapped->{'Sewer: Septic Tank'}) || isset($single_property->smokingallowed)
			   || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->utilities) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->appliances) || isset($single_property->flooring) || isset($single_property->furnished) 
			   || isset($single_property->basement) || isset($single_property->unmapped->{'Master Bath'})  || isset($single_property->norooms) ):?>
		
		<h3 class="bt-listing__headline">Property Features</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->unmapped->{'Convenient To'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Convenient To</td>
					<td class="bt-listing__table__items"><span>[unmapped_Convenient To]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'First Month Required'} )): ?>
				<tr>
					<td class="bt-listing__table__label">First Month Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_First Month Required]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->forsale) ): ?>
				<tr>
					<td class="bt-listing__table__label">For Sale</td>
					<td class="bt-listing__table__items"><span>[forsale]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Fuel Type'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Fuel Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fuel Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Last Month Required'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Last Month Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_Last Month Required]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->leadpaint) ): ?>
				<tr>
					<td class="bt-listing__table__label">Lead Paint</td>
					<td class="bt-listing__table__items"><span>[leadpaint]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lease Purchase'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Lease Purchase</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lease Purchase]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lease w/Option to Buy'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Lease With Option To Buy</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lease w/Option to Buy]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Lot Size Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_Lot Size Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->nolots) ): ?>
				<tr>
					<td class="bt-listing__table__label">Maximum Occupancy</td>
					<td class="bt-listing__table__items"><span>[nolots]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->beachmilesto) ): ?>
				<tr>
					<td class="bt-listing__table__label">Miles From Beach</td>
					<td class="bt-listing__table__items"><span>[beachmilesto]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed) ): ?>
				<tr>
					<td class="bt-listing__table__label">Pets Allowed</td>
					<td class="bt-listing__table__items"><span>[petsallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype) ): ?>
				<tr>
					<td class="bt-listing__table__label">Property Sub Type</td>
					<td class="bt-listing__table__items"><span>[propsubtype]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Rate) ): ?>
				<tr>
					<td class="bt-listing__table__label">Rate</td>
					<td class="bt-listing__table__items"><span>[unmapped_Rate]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Rental Type'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Rental Type</td>
					<td class="bt-listing__table__items"><span>[unmapped_Rental Type]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Secuirty Deposit Required'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Secuirty Deposit Required</td>
					<td class="bt-listing__table__items"><span>[unmapped_Secuirty Deposit Required]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer) ): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer</td>
					<td class="bt-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Sewer: Septic Tank'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Sewer Septic Tank</td>
					<td class="bt-listing__table__items"><span>[unmapped_Sewer: Septic Tank]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->smokingallowed) ): ?>
				<tr>
					<td class="bt-listing__table__label">Smoking Allowed</td>
					<td class="bt-listing__table__items"><span>[smokingallowed]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'SqFt Source'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Sq Ft Source</td>
					<td class="bt-listing__table__items"><span>[unmapped_SqFt Source]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->utilities) ): ?>
				<tr>
					<td class="bt-listing__table__label">Utilities Included</td>
					<td class="bt-listing__table__items"><span>[utilities]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water) ): ?>
				<tr>
					<td class="bt-listing__table__label">Water</td>
					<td class="bt-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuiltdescrp) ): ?>
				<tr>
					<td class="bt-listing__table__label">Year Built Description</td>
					<td class="bt-listing__table__items"><span>[yearbuiltdescrp]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->appliances) ): ?>
				<tr>
					<td class="bt-listing__table__label">Appliances</td>
					<td class="bt-listing__table__items"><span>[appliances]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring) ): ?>
				<tr>
					<td class="bt-listing__table__label">Floors</td>
					<td class="bt-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->furnished) ): ?>
				<tr>
					<td class="bt-listing__table__label">Furnished</td>
					<td class="bt-listing__table__items"><span>[furnished]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement) ): ?>
				<tr>
					<td class="bt-listing__table__label">Includes Basement</td>
					<td class="bt-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bath'}) ): ?>
				<tr>
					<td class="bt-listing__table__label">Master Bath</td>
					<td class="bt-listing__table__items"><span>[unmapped_Master Bath]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->norooms) ): ?>
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
		<?php if( isset($single_property->beachdescription) || isset($single_property->waterbodyname) || isset($single_property->unmapped->Dock) || isset($single_property->exteriorfeatures) || isset($single_property->unmapped->Garage)
			   || isset($single_property->parkingfeature) || isset($single_property->parkingspaces) || isset($single_property->asscpool) || isset($single_property->pooldescription) || isset($single_property->unmapped->Waterview) 
			   || isset($single_property->waterviewfeatures) || isset($single_property->waterfrontflag) || isset($single_property->waterviewFlag) ): ?>
		   
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
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Exterior Features</td>
					<td class="bt-listing__table__items"><span>[exteriorfeatures]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->Garage)): ?>
				<tr>
					<td class="bt-listing__table__label">Garage</td>
					<td class="bt-listing__table__items"><span>[unmapped_Garage]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Description</td>
					<td class="bt-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="bt-listing__table__label">Parking Spaces</td>
					<td class="bt-listing__table__items"><span>[parkingspaces]</span></td>
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
				<?php if( isset($single_property->unmapped->Waterview)): ?>
				<tr>
					<td class="bt-listing__table__label">Water View</td>
					<td class="bt-listing__table__items"><span>[unmapped_Waterview]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->waterviewfeatures)): ?>
				<tr>
					<td class="bt-listing__table__label">Water View Description</td>
					<td class="bt-listing__table__items"><span>[waterviewfeatures]</span></td>
				</tr>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfrontflag)): ?>
				<tr>
					<td class="bt-listing__table__label">Waterfront</td>
					<td class="bt-listing__table__items"><span>[waterfrontflag]</span></td>
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
		
		<?php if( isset($single_property->cooling) || isset($single_property->unmapped->Fireplace) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) ):?>
		
		<h3 class="bt-listing__headline">Cooling, Heating, Utilities</h3>
		<table class="bt-listing__table">

			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="bt-listing__table__label">Cooling</td>
					<td class="bt-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<tr>
					<td class="bt-listing__table__label">Fireplace</td>
					<td class="bt-listing__table__items"><span>[unmapped_Fireplace]</span></td>
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
		
		<?php if( isset($single_property->unmapped->{'Addnl Cleaning Fee'}) || isset($single_property->unmapped->{'Addnl Laundry Fee'}) || isset($single_property->reqdownassociation) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="bt-listing__headline">Taxes, Fees</h3>
		<table class="bt-listing__table">
			<tbody>
				<?php if( isset($single_property->unmapped->{'Addnl Cleaning Fee'})): ?>
				<tr>
					<td class="bt-listing__table__label">Additional Cleaning Fee</td>
					<td class="bt-listing__table__items"><span>[unmapped_Addnl Cleaning Fee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Addnl Laundry Fee'})): ?>
				<tr>
					<td class="bt-listing__table__label">Additional Laundry Fee</td>
					<td class="bt-listing__table__items"><span>[unmapped_Addnl Laundry Fee]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<tr>
					<td class="bt-listing__table__label">Association</td>
					<td class="bt-listing__table__items"><span>[reqdownassociation]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="bt-listing__table__label">Association Fee Includes</td>
					<td class="bt-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				
			</tbody>
		</table>
		<?php endif; ?>
	</li>		

</ul>