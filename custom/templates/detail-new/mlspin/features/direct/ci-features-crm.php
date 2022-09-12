<ul class="zy-features-grid">
	{nested fields="single_property.mauunits,single_property.ofuunits,single_property.rsuunits,single_property.reuunits,single_property.wauunits,single_property.parkingspaces,single_property.parkingfeature"}
	<li class="cell">
		{section fields="single_property.mauunits,single_property.ofuunits,single_property.rsuunits,single_property.reuunits,single_property.wauunits"}
		<h3 class="zy-feature-title">Space, #Units, SQ FT</h3>
		<ul class="zy-sub-list">
			
			{if field="single_property.mauunits,single_property.mafbldgsf"}
			<li>Manufacturing</td>
				<td class="zy-listing__table__label"><span>{{mauunits}}</span>: {{mafbldgsf}}</li>
			{/if}
			{if field="single_property.ofuunits,single_property.offbldgsf"}
			<li>Office</td>
				<td class="zy-listing__table__label"><span>{{ofuunits}}</span>: {{offbldgsf}}</li>
			{/if}
			{if field="single_property.rsuunits,single_property.rsfbldgsf"}
			<li>Residential</td>
				<td class="zy-listing__table__label"><span>{{rsuunits}}</span>: {{rsfbldgsf}}</li>
			{/if}
			{if field="single_property.reuunits,single_property.refbldgsf"}
			<li>Retail</td>
				<td class="zy-listing__table__label"><span>{{reuunits}}</span>: {{refbldgsf}}</li>
			{/if}
			{if field="single_property.wauunits,single_property.wafbldgsf"}
			<li>Warehouse</td>
				<td class="zy-listing__table__label"><span>{{wauunits}}</span>: {{wafbldgsf}}</li>
			{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.parkingspaces,single_property.parkingfeature"}
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				{if field="single_property.parkingspaces"}
				<li>Parking Spaces: {{parkingspaces}}</li>
				{/if}
				{if field="single_property.parkingfeature"}
				<li>Parking Features: {{parkingfeature}}</li>
				{/if}
			
		</ul>
		{/section}
		
	</li>						
	{/nested}

	{section fields="single_property.basement,single_property.citype,single_property.construction,single_property.dividable,single_property.noofdrivingdoors,single_property.elevator,single_property.expandable,single_property.facilities,single_property.handicapaccess,single_property.noofloadingdocks,single_property.noofrestrooms,single_property.sprinklers,single_property.unmapped.LivingArea,single_property.roofmaterial,single_property.utilities,single_property.zoning"}
	<li class="cell">
		<h3 class="zy-feature-title">Property Details</h3>
		<ul class="zy-sub-list">

		
			{if field="single_property.basement"}
			<li>Basement: {{basement}}</li>
			{/if}
			{if field="single_property.citype"}
			<li>Commercial Type: {{citype}}</li>
			{/if}
			{if field="single_property.construction"}
			<li>Construction: {{construction}}</li>
			{/if}
			{if field="single_property.dividable"}
			<li>Dividable: {{dividable}}</li>
			{/if}
			{if field="single_property.noofdrivingdoors"}
			<li>Drive in Doors: {{noofdrivingdoors}}</li>
			{/if}
			{if field="single_property.elevator"}
			<li>Elevator: {{elevator}}</li>
			{/if}
			{if field="single_property.expandable"}
			<li>Expandable: {{expandable}}</li>
			{/if}
			{if field="single_property.facilities"}
			<li>Facilities: {{facilities}}</li>
			{/if}
			{if field="single_property.handicapaccess"}
			<li>Handicap Access: {{handicapaccess}}</li>
			{/if}
			{if field="single_property.noofloadingdocks"}
			<li>Loading Docks : {{noofloadingdocks}}</li>
			{/if}
			{if field="single_property.noofrestrooms"}
			<li>Restrooms: {{noofrestrooms}}</li>
			{/if}
			{if field="single_property.sprinklers"}
			<li>Sprinklers: {{sprinklers}}</li>
			{/if}
			{if field="single_property.unmapped.LivingArea"}
			<li>Building Area Total: {{unmapped_LivingArea}}</li>
			{/if}
			{if field="single_property.roofmaterial"}
			<li>Roof Material: {{roofmaterial}}</li>
			{/if}
			{if field="single_property.utilities"}
			<li>Utilities: {{utilities}}</li>
			{/if}
			{if field="single_property.zoning"}
			<li>Zoning: {{zoning}}</li>
			{/if}
			
			{ygl}
			
				{if field="single_property.rentprice"}
				<li>Rent Amount: {{rentprice}}</li>
				{/if}
				{if field="single_property.unitlevel"}
				<li>Unit Level: {{unitlevel}}</li>
				{/if}		
				{if field="single_property.petrestrictionsallow"}
				<li>Pet: {{petrestrictionsallow}}</li>
				{/if}			
				{if field="single_property.rentfeeincludes"}
				<li>Rent Includes: {{rentfeeincludes}}</li>
				{/if}			
				{if field="single_property.reqdownassociation"}
				<li>Fee Paid By Owner: {{reqdownassociation}}</li>
				{/if}			
				{if field="single_property.laundryfeatures"}
				<li>Laundry: {{laundryfeatures}}</li>
				{/if}			
				{if field="single_property.heating"}
				<li>Heat Source: {{heating}}</li>
				{/if}			
				{if field="single_property.dateavailableformatted"}
				<li>Avail Date: {{dateavailableformatted}}</li>
				{/if}			
				{if field="single_property.butype"}
				<li>Building Type: {{butype}}</li>
				{/if}
				{if field="single_property.student"}
				<li>Student: {{student}}</li>
				{/if}
			
			{/ygl}
			
			
		</ul>
	</li>
	{/section}

	<li class="cell">
		
		{section fields="single_property.taxes,single_property.taxyear,single_property.zoning,single_property.zonedescription,single_property.hoafee,single_property.asscfeeincludes"}
		<h3 class="zy-feature-title">Taxes & Considerations</h3>
		<ul class="zy-sub-list">
			
				{if field="single_property.taxes"}
				<li>Tax Amount ($): {{taxes}}</li>
				{/if}
				{if field="single_property.taxyear"}
				<li>Tax Year: {{taxyear}}</li>
				{/if}
				{if field="single_property.zoning"}
				<li>Zoning Code: {{zoning}}</li>
				{/if}
				{if field="single_property.zonedescription"}
				<li>Zoning Description: {{zonedescription}}</li>
				{/if}
				{if field="single_property.hoafee"}
				<li>Association Fee ($): {{hoafee}}</li> <!-- not done -->
				{/if}
				{if field="single_property.asscfeeincludes"}
				<li>Fee Includes: {{asscfeeincludes}}</li> <!-- not done -->
				{/if}
			
		</ul>
		{/section}
	</li>					

</ul>