<ul class="zy-features-grid">
	
	{section fields="single_property.basement,single_property.nobuildings,single_property.noofdrivingdoors,single_property.elevator,single_property.facilities,single_property.handicapaccess,single_property.noofloadingdocks,single_property.parkingspaces,single_property.noofrestrooms,single_property.system,single_property.utilities"}
	<li class="cell">
		<h3 class="zy-feature-title">Property Details</h3>
		<ul class="zy-sub-list">
			{if field="single_property.basement"}
			<li>Basement: {{basement}}</li>
			{/if}
			{if field="single_property.nobuildings"}
			<li>Building: {{nobuildings}}</li>
			{/if}
			{if field="single_property.noofdrivingdoors"}
			<li>Drive in Doors: {{noofdrivingdoors}}</li>
			{/if}
			{if field="single_property.elevator"}
			<li>Elevator: {{elevator}}</li>
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
			{if field="single_property.parkingspaces"}
			<li>Parking Spaces: {{parkingspaces}}</li>
			{/if}
			{if field="single_property.noofrestrooms"}
			<li>Restrooms: {{noofrestrooms}}</li>
			{/if}
			{if field="single_property.system"}
			<li>System: {{system}}</li>
			{/if}
			{if field="single_property.utilities"}
			<li>Utilities: {{utilities}}</li>
			{/if}
			
			{ygl}
			
				{if field="single_property.rentprice"}
				<li>Rent Amount: {{rentprice}}</li>
				{/if}
				{if field="single_property.unitlevel"}
				<li>Unit Level: {{unitlevel}}</li>
				{/if}				
				{if field="single_property.parkingfeature"}
				<li>Parking: {{parkingfeature}}</li>
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
			
			{/ygl}
		</ul>
	</li>
	{/section}

	<li class="cell">
		
		{section fields="single_property.businesshrs,single_property.butype,single_property.equiplistavail,single_property.form,single_property.inventoryavail,single_property.realestateincld,single_property.speciallicenses,single_property.tenantexpanses,single_property.yearbuilt,single_property.zoning,single_property.zonedescription"}
		<h3 class="zy-feature-title">Business Information</h3>
		<ul class="zy-sub-list">			
			{if field="single_property.businesshrs"}
			<li>Business Hours: {{businesshrs}}</li>
			{/if}
			{if field="single_property.butype"}
			<li>Business Type: {{butype}}</li>
			{/if}
			{if field="single_property.equiplistavail"}
			<li>Equipment List Available: {{equiplistavail}}</li>
			{/if}
			{if field="single_property.form"}
			<li>Form: {{form}}</li>
			{/if}
			{if field="single_property.inventoryavail"}
			<li>Inventory Included: {{inventoryavail}}</li> <!-- not done -->
			{/if}
			{if field="single_property.realestateincld"}
			<li>Real Estate Included: {{realestateincld}}</li> <!-- not done -->
			{/if}
			{if field="single_property.speciallicenses"}
			<li>Special Licenses: {{speciallicenses}}</li> <!-- not done -->
			{/if}
			{if field="single_property.tenantexpanses"}
			<li>Tenant Expenses: {{tenantexpanses}}</li> <!-- not done -->
			{/if}
			{if field="single_property.yearbuilt"}
			<li>Year Established: {{yearbuilt}}</li> <!-- not done -->
			{/if}
			{if field="single_property.zoning"}
			<li>Zoning Code: {{zoning}}</li> <!-- not done -->
			{/if}
			{if field="single_property.zonedescription"}
			<li>Zoning Description: {{zonedescription}}</li> <!-- not done -->
			{/if}			
		</ul>
		{/section}
	</li>					

</ul>