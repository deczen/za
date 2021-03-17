<ul class="zy-features-grid">
	{section fields="single_property.amenities,single_property.basement,single_property.exteriorfeatures,single_property.exterior,single_property.fireplaces,single_property.flooring,single_property.waterviewfeatures"}
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
			{if field="single_property.amenities"}
			<li>Amenities: {{amenities}}</li>
			{/if}
			{if field="single_property.basement"}
			<li>Basement: {{basement}}</li>
			{/if}
			{if field="single_property.exteriorfeatures"}
			<li>Exterior Features: {{exteriorfeatures}}</li>
			{/if}
			{if field="single_property.exterior"}
			<li>Exterior: {{exterior}}</li>
			{/if}
			{if field="single_property.fireplaces"}
			<li>Fireplaces: {{fireplaces}}</li>
			{/if}
			{if field="single_property.flooring"}
			<li>Floor: {{flooring}}</li>
			{/if}
			<?php /*if( isset($single_property.style"}
			<li>House Style: {{style}}</li>
			<?php endif;*/ ?>
			{if field="single_property.waterviewfeatures"}
			<li>Waterview: {{stylewaterviewfeatures}}</li>
			{/if}
			{if field="single_property.waterfront"}
			<li>Waterfront: {{waterfront}}</li>
			{/if}
			
			{ygl}
			
				{if field="single_property.rentprice"}
				<li>Rent Amount: [rentprice]</li>
				{/if}
				{if field="single_property.unitlevel"}
				<li>Unit Level: [unitlevel]</li>
				{/if}				
				{if field="single_property.parkingfeature"}
				<li>Parking: [parkingfeature]</li>
				{/if}			
				{if field="single_property.petrestrictionsallow"}
				<li>Pet: [petrestrictionsallow]</li>
				{/if}			
				{if field="single_property.rentfeeincludes"}
				<li>Rent Includes: [rentfeeincludes]</li>
				{/if}			
				{if field="single_property.reqdownassociation"}
				<li>YGL data: [reqdownassociation]</li>
				{/if}			
				{if field="single_property.laundryfeatures"}
				<li>Laundry: [laundryfeatures]</li>
				{/if}		
				{if field="single_property.dateavailableformatted"}
				<li>Avail Date: [dateavailableformatted]</li>
				{/if}			
				{if field="single_property.butype"}
				<li>Building Type: [butype]</li>
				{/if}			
			
			{/ygl}
		</ul>
	</li>						
	{/section}
	
	{section fields="single_property.cooling,single_property.coolingzones,single_property.heating,single_property.heatzones,single_property.energyfeatures,single_property.electricfeature,single_property.hotwater,single_property.sewer,single_property.water"}
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			{if field="single_property.cooling"}
			<li>Cooling: {{cooling}}</li>
			{/if}
			{if field="single_property.coolingzones"}
			<li>Cool Zones: {{coolingzones}}</li>
			{/if}
			{if field="single_property.heating"}
			<li>Heating: {{heating}}</li>
			{/if}
			{if field="single_property.heatzones"}
			<li>Heat Zones: {{heatzones}}</li>
			{/if}
			{if field="single_property.energyfeatures"}
			<li>Energy Features: {{energyfeatures}}</li>
			{/if}
			{if field="single_property.electricfeature"}
			<li>Electric: {{electricfeature}}</li>
			{/if}
			{if field="single_property.hotwater"}
			<li>Hot Water: {{hotwater}}</li>
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
		{section fields="single_property.garagespaces,single_property.parkingspaces,single_property.roadtype"}
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			{if field="single_property.garagespaces"}
			<li>Garage Spaces: {{garagespaces}}</li>
			{/if}
			{if field="single_property.parkingspaces"}
			<li>Parking Spaces: {{parkingspaces}}</li>
			{/if}
			{if field="single_property.roadtype"}
			<li>Road Type : {{roadtype}}</li>
			{/if}
			
		</ul>
		{/section}
	</li>	

	<li>
		{section fields="single_property.taxes,single_property.taxyear,single_property.hoafee,single_property.asscfeeincludes"}
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			{if field="single_property.taxes"}
			<li>Tax Amount ($): {{taxes}}</li>
			{/if}
			{if field="single_property.taxyear"}
			<li>Tax Year: {{taxyear}}</li>
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

<ul class="zy-features-grid">
	{section fields="single_property.bedrms1,single_property.fbths1,single_property.coldscrp1,single_property.headscrp1,single_property.frplcs1,single_property.flrs1,single_property.levels1,single_property.rms1"}
	<li class="cell">
		<?php //if( isset($single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp"} ?>
		<h3 class="zy-feature-title">Unit #1</h3>
		<ul class="zy-sub-list">
			
			{if field="single_property.bedrms1"}
			<li>Beds: {{bedrms1}}</li>
			{/if}
			{if field="single_property.fbths1"}
			<li>Baths: {{fbths1}}</li>
			{/if}
			{if field="single_property.coldscrp1"}
			<li>Cooling: {{coldscrp1}}</li>								
			{/if}
			{if field="single_property.headscrp1"}
			<li>Heating: {{headscrp1}}</li>								
			{/if}
			{if field="single_property.frplcs1"}
			<li>Fireplaces: {{frplcs1}}</li>								
			{/if}
			{if field="single_property.flrs1"}
			<li>Floor: {{flrs1}}</li>								
			{/if}
			{if field="single_property.levels1"}
			<li>Levels: {{levels1}}</li>								
			{/if}
			{if field="single_property.rms1"}
			<li>Rooms: {{rms1}}</li>								
			{/if}			
		</ul>
		<?php //endif; ?>
	</li>						
	{/section}
	
	{section fields="single_property.bedrms2,single_property.fbths2,single_property.coldscrp2,single_property.headscrp2,single_property.frplcs2,single_property.flrs2,single_property.levels2,single_property.rms2"}
	<li class="cell">
		<?php //if( isset($single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp"} ?>
		<h3 class="zy-feature-title">Unit #2</h3>
		<ul class="zy-sub-list">	
			{if field="single_property.bedrms2"}
			<li>Beds: {{bedrms2}}</li>
			{/if}
			{if field="single_property.fbths2"}
			<li>Baths: {{fbths2}}</li>
			{/if}
			{if field="single_property.coldscrp2"}
			<li>Cooling: {{coldscrp2}}</li>								
			{/if}
			{if field="single_property.headscrp2"}
			<li>Heating: {{headscrp2}}</li>								
			{/if}
			{if field="single_property.frplcs2"}
			<li>Fireplaces: {{frplcs2}}</li>								
			{/if}
			{if field="single_property.flrs2"}
			<li>Floor: {{flrs2}}</li>								
			{/if}
			{if field="single_property.levels2"}
			<li>Levels: {{levels2}}</li>								
			{/if}
			{if field="single_property.rms2"}
			<li>Rooms: {{rms2}}</li>								
			{/if}			
		</ul>
		<?php //endif; ?>
	</li>						
	{/section}

	{section fields="single_property.bedrms3,single_property.fbths3,single_property.coldscrp3,single_property.headscrp3,single_property.frplcs3,single_property.flrs3,single_property.levels3,single_property.rms3"}
	<li class="cell">
		<?php //if( isset($single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp"} ?>
		<h3 class="zy-feature-title">Unit #3</h3>
		<ul class="zy-sub-list">
			{if field="single_property.bedrms3"}
			<li>Beds: {{bedrms3}}</li>
			{/if}
			{if field="single_property.fbths3"}
			<li>Baths: {{fbths3}}</li>
			{/if}
			{if field="single_property.coldscrp3"}
			<li>Cooling: {{coldscrp3}}</li>								
			{/if}
			{if field="single_property.headscrp3"}
			<li>Heating: {{headscrp3}}</li>								
			{/if}
			{if field="single_property.frplcs3"}
			<li>Fireplaces: {{frplcs3}}</li>								
			{/if}
			{if field="single_property.flrs3"}
			<li>Floor: {{flrs3}}</li>								
			{/if}
			{if field="single_property.levels3"}
			<li>Levels: {{levels3}}</li>								
			{/if}
			{if field="single_property.rms3"}
			<li>Rooms: {{rms3}}</li>								
			{/if}			
		</ul>
		<?php //endif; ?>
	</li>						
	{/section}		
	
	{section fields="single_property.bedrms4,single_property.fbths4,single_property.coldscrp4,single_property.headscrp4,single_property.frplcs4,single_property.flrs4,single_property.levels4,single_property.rms4"}
	<li class="cell">
		<?php //if( isset($single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp"} ?>
		<h3 class="zy-feature-title">Unit #4</h3>
		<ul class="zy-sub-list">	
			{if field="single_property.bedrms4"}
			<li>Beds: {{bedrms4}}</li>
			{/if}
			{if field="single_property.fbths4"}
			<li>Baths: {{fbths4}}</li>
			{/if}
			{if field="single_property.coldscrp4"}
			<li>Cooling: {{coldscrp4}}</li>								
			{/if}
			{if field="single_property.headscrp4"}
			<li>Heating: {{headscrp4}}</li>								
			{/if}
			{if field="single_property.frplcs4"}
			<li>Fireplaces: {{frplcs4}}</li>								
			{/if}
			{if field="single_property.flrs4"}
			<li>Floor: {{flrs4}}</li>								
			{/if}
			{if field="single_property.levels4"}
			<li>Levels: {{levels4}}</li>								
			{/if}
			{if field="single_property.rms4"}
			<li>Rooms: {{rms4}}</li>								
			{/if}			
		</ul>
		<?php //endif; ?>
	</li>						
	{/section}	
	
	{section fields="single_property.bedrms5,single_property.fbths5,single_property.coldscrp5,single_property.headscrp5,single_property.frplcs5,single_property.flrs5,single_property.levels5,single_property.rms5"}
	<li class="cell">
		<?php //if( isset($single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp"} ?>
		<h3 class="zy-feature-title">Unit #5</h3>
		<ul class="zy-sub-list">	
			{if field="single_property.bedrms5"}
			<li>Beds: {{bedrms5}}</li>
			{/if}
			{if field="single_property.fbths5"}
			<li>Baths: {{fbths5}}</li>
			{/if}
			{if field="single_property.coldscrp5"}
			<li>Cooling: {{coldscrp5}}</li>								
			{/if}
			{if field="single_property.headscrp5"}
			<li>Heating: {{headscrp5}}</li>								
			{/if}
			{if field="single_property.frplcs5"}
			<li>Fireplaces: {{frplcs5}}</li>								
			{/if}
			{if field="single_property.flrs5"}
			<li>Floor: {{flrs5}}</li>								
			{/if}
			{if field="single_property.levels5"}
			<li>Levels: {{levels5}}</li>								
			{/if}
			{if field="single_property.rms5"}
			<li>Rooms: {{rms5}}</li>								
			{/if}			
		</ul>
		<?php //endif; ?>
	</li>						
	{/section}	
	
</ul>