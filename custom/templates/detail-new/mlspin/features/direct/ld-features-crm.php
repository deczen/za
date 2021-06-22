<ul class="zy-features-grid">
	{section fields="single_property.cultivationacres,single_property.pastureacres,single_property.timberacres,single_property.ldtype,single_property.frontage"}
	<li class="cell">
		<h3 class="zy-feature-title">Land Details</h3>
		<ul class="zy-sub-list">

		
			{if field="single_property.cultivationacres"}
			<li>Cultivation Acres: {{cultivationacres}}</li>
			{/if}
			{if field="single_property.pastureacres"}
			<li>Pasture Acres: {{pastureacres}}</li>
			{/if}
			{if field="single_property.timberacres"}
			<li>Timber Acres: {{timberacres}}</li>
			{/if}
			{if field="single_property.ldtype"}
			<li>Land Style: {{ldtype}}</li>
			{/if}
			{if field="single_property.frontage"}
			<li>Street Frontage: {{frontage}}</li>
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
				{if field="single_property.butype"}
				<li>Building Type: {{butype}}</li>
				{/if}
				{if field="single_property.student"}
				<li>Student: {{student}}</li>
				{/if}
				{if field="single_property.vtlink"}
				<li>Virtual Tour/Media: {{vtlink}}</li>
				{/if}
				{if field="single_property.facilities"}
				<li>Features: {{facilities}}</li>
				{/if}
			
			{/ygl}
			
		</ul>
	</li>						
	{/section}
	
	{section fields="single_property.gas,single_property.electricfeature,single_property.sewer,single_property.water"}
	<li class="cell">
		<h3 class="zy-feature-title">Utilities</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.gas"}
				<li>Gas: {{gas}}</li>
				{/if}
				{if field="single_property.electricfeature"}
				<li>Electric: {{electricfeature}}</li>
				{/if}
				{if field="single_property.sewer"}
				<li>Sewer Utilities: {{sewer}}</li>
				{/if}
				{if field="single_property.water"}
				<li>Water Utilities: {{water}}</li>
				{/if}								
			
		</ul>
	</li>
	{/section}
	
	<li class="cell">
		{section fields="single_property.taxes,single_property.taxyear,single_property.zoning"}
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				{if field="single_property.taxes"}
				<li>Tax Amount ($): {{taxes}}</li>
				{/if}
				{if field="single_property.taxyear"}
				<li>Tax Year: {{taxyear}}</li>
				{/if}
				{if field="single_property.zoning"}
				<li>Zoning Code: {{zoning}}</li> <!-- not done -->
				{/if}
			
		</ul>
		{/section}
	</li>					

</ul>