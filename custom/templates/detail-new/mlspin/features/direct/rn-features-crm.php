<ul class="zy-features-grid">
	{section fields="single_property.amenities,single_property.basement,single_property.rntype,single_property.exteriorfeatures,single_property.exterior,single_property.fireplaces,single_property.flooring,single_property.laundryfeatures,single_property.unitlevel,single_property.petsallowed,single_property.waterviewfeatures,single_property.waterfront"}
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

		
			{if field="single_property.amenities"}
			<li>Amenities: {{amenities}}</li>
			{/if}
			{if field="single_property.basement"}
			<li>Basement: {{basement}}</li>
			{/if}
			{if field="single_property.rntype"}
			<li>Rental Style: {{rntype}}</li>
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
			{if field="single_property.laundryfeatures"}
			<li>Laundry: {{laundryfeatures}}</li>
			{/if}
			{if field="single_property.petsallowed"}
			<li>Pets Allowed: {{petsallowed}}</li>
			{/if}
			{if field="single_property.unitlevel"}
			<li>Unit Level: {{unitlevel}}</li>
			{/if}
			{if field="single_property.waterviewfeatures"}
			<li>Waterview: {{waterviewfeatures}}</li>
			{/if}
			{if field="single_property.waterfront"}
			<li>Waterfront: {{waterfront}}</li>
			{/if}
			
			{ygl}
			
				{if field="single_property.rentprice"}
				<li>Rent Amount: {{rentprice}}</li>
				{/if}				
				{if field="single_property.parkingfeature"}
				<li>Parking: {{parkingfeature}}</li>
				{/if}			
				{if field="single_property.petrestrictionsallow"}
				<li>Pet: {{petrestrictionsallow}}</li>
				{/if}		
				{if field="single_property.reqdownassociation"}
				<li>Fee Paid By Owner: {{reqdownassociation}}</li>
				{/if}		
				{if field="single_property.dateavailableformatted"}
				<li>Avail Date: {{dateavailableformatted}}</li>
				{/if}			
				{if field="single_property.butype"}
				<li>Building Type: {{butype}}</li>
				{/if}			
			
			{/ygl}
			
		</ul>
	</li>						
	{/section}
	
	<?php /*if( isset($single_property.cooling,single_property.coolingzones,single_property.heating,single_property.heatzones,single_property.energyfeatures,single_property.electricfeature,single_property.hotwater,single_property.sewer,single_property.water"}
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
	<?php endif;*/ ?>

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
		
		{section fields="single_property.taxes,single_property.taxyear,single_property.hoafee,single_property.asscfeeincludes"}
		<h3 class="zy-feature-title">Deposits, Inclusions</h3>
		<ul class="zy-sub-list">
			
				{if field="single_property.firstmonreqd"}
				<li>1st Month: {{firstmonreqd}}</li>
				{/if}
				{if field="single_property.lastmonreqd"}
				<li>Last Month: {{lastmonreqd}}</li>
				{/if}
				{if field="single_property.secdeposit"}
				<li>Secutity: {{secdeposit}}</li> <!-- not done -->
				{/if}
				{if field="single_property.rentfeeincludes"}
				<li>Rent Includes: {{rentfeeincludes}}</li> <!-- not done -->
				{/if}
			
		</ul>
		{/section}
	</li>					

</ul>

<ul class="zy-features-grid">
	{nested fields="single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp,single_property.bed2dimen,single_property.bed2LEVEL,single_property.bed2dscrp,single_property.bed3dimen,single_property.bed3LEVEL,single_property.bed3dscrp,single_property.bed4dimen,single_property.bed4LEVEL,single_property.bed4dscrp,single_property.bed5dimen,single_property.bed5LEVEL,single_property.bed5dscrp"}
	<li class="cell">
		{section fields="single_property.mbrdimen,single_property.mbrlevel,single_property.mbrdscrp"}
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
				{if field="single_property.mbrdimen"}
				<li>Size: {{mbrdimen}}</li>
				{/if}
				{if field="single_property.mbrlevel"}
				<li>Level: {{mbrlevel}}</li>
				{/if}
				{if field="single_property.mbrdscrp"}
				<li>Features: {{mbrdscrp}}</li>								
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.bed2dimen,single_property.bed2LEVEL,single_property.bed2dscrp"}
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bed2dimen"}
				<li>Size: {{bed2dimen}}</li>
				{/if}
				{if field="single_property.bed2LEVEL"}
				<li>Level: {{bed2LEVEL}}</li>
				{/if}
				{if field="single_property.bed2dscrp"}
				<li>Features: {{bed2dscrp}}</li>								
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.bed3dimen,single_property.bed3LEVEL,single_property.bed3dscrp"}
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bed3dimen"}
				<li>Size: {{bed3dimen}}</li>
				{/if}
				{if field="single_property.bed3LEVEL"}
				<li>Level: {{bed3LEVEL}}</li>
				{/if}
				{if field="single_property.bed3dscrp"}
				<li>Features: {{bed3dscrp}}</li>								
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.bed4dimen,single_property.bed4LEVEL,single_property.bed4dscrp"}
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bed4dimen"}
				<li>Size: {{bed4dimen}}</li>
				{/if}
				{if field="single_property.bed4LEVEL"}
				<li>Level: {{bed4LEVEL}}</li>
				{/if}
				{if field="single_property.bed4dscrp"}
				<li>Features: {{bed4dscrp}}</li>								
				{/if}
			
		</ul>
		{/section}
		
		<?php //echo $single_property.style; ?>
		{section fields="single_property.bed5dimen,single_property.bed5LEVEL,single_property.bed5dscrp"}
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bed5dimen"}
				<li>Size: {{bed5dimen}}</li>
				{/if}
				{if field="single_property.bed5LEVEL"}
				<li>Level: {{bed5LEVEL}}</li>
				{/if}
				{if field="single_property.bed5dscrp"}
				<li>Features: {{bed5dscrp}}</li>								
				{/if}
			
		</ul>
		{/section}
	</li>						
	{/nested}
	
{nested fields="single_property.bth1dimen,single_property.bth1LEVEL,single_property.bth1dscrp,single_property.bth2dimen,single_property.bth2LEVEL,single_property.bth2dscrp,single_property.bth3dimen,single_property.bth3LEVEL,single_property.bth3dscrp,single_property.bth4dimen,single_property.bth4LEVEL,single_property.bth4dscrp,single_property.bth5dimen,single_property.bth5LEVEL,single_property.bth5dscrp"}
	<li class="cell">
		{section fields="single_property.bth1dimen,single_property.bth1LEVEL,single_property.bth1dscrp"}
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bth1dimen"}
				<li>Size: {{bth1dimen}}</li>
				{/if}
				{if field="single_property.bth1LEVEL"}
				<li>Level: {{bth1LEVEL}}</li>
				{/if}
				{if field="single_property.bth1dscrp"}
				<li>Features: {{bth1dscrp}}</li>
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.bth2dimen,single_property.bth2LEVEL,single_property.bth2dscrp"}
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bth2dimen"}
				<li>Size: {{bth2dimen}}</li>
				{/if}
				{if field="single_property.bth2LEVEL"}
				<li>Level: {{bth2LEVEL}}</li>
				{/if}
				{if field="single_property.bth2dscrp"}
				<li>Features: {{bth2dscrp}}</li>
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.bth3dimen,single_property.bth3level,single_property.bth3dscrp"}
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.bth3dimen"}
				<li>Size: {{bth3dimen}}</li>
				{/if}
				{if field="single_property.bth3level"}
				<li>Level: {{bth3level}}</li>
				{/if}
				{if field="single_property.bth3dscrp"}
				<li>Features: {{bth3dscrp}}</li>
				{/if}
			
		</ul>
		{/section}
	</li>
	{/nested}

	<li class="cell">
		{section fields="single_property.kitdimen,single_property.kitlevel,single_property.kitdscrp"}
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.kitdimen"}
				<li>Size: {{kitdimen}}</li>
				{/if}
				{if field="single_property.kitlevel"}
				<li>Level: {{kitlevel}}</li>
				{/if}
				{if field="single_property.kitdscrp"}
				<li>Features: {{kitdscrp}}</li>
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.famdimen,single_property.famlevel,single_property.famdscrp"}
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.famdimen"}
				<li>Size: {{famdimen}}</li>
				{/if}
				{if field="single_property.famlevel"}
				<li>Level: {{famlevel}}</li>
				{/if}
				{if field="single_property.famdscrp"}
				<li>Features: {{famdscrp}}</li>
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.livdimen,single_property.livlevel,single_property.livdscrp"}
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.livdimen"}
				<li>Size: {{livdimen}}</li>
				{/if}
				{if field="single_property.livlevel"}
				<li>Level: {{livlevel}}</li>
				{/if}
				{if field="single_property.livdscrp"}
				<li>Features: {{livdscrp}}</li>
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.dindimen,single_property.dinlevel,single_property.dindscrp"}
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.dindimen"}
				<li>Size: {{dindimen}}</li>
				{/if}
				{if field="single_property.dinlevel"}
				<li>Level: {{dinlevel}}</li>
				{/if}
				{if field="single_property.dindscrp"}
				<li>Features: {{dindscrp}}</li>
				{/if}
			
		</ul>
		{/section}
		
		{section fields="single_property.oth1DIMEN,single_property.oth1LEVEL,single_property.oth1DSCRP"}
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">

			
				{if field="single_property.oth1DIMEN"}
				<li>Size: {{oth1DIMEN}}</li>
				{/if}
				{if field="single_property.oth1LEVEL"}
				<li>Level: {{oth1LEVEL}}</li>
				{/if}
				{if field="single_property.oth1DSCRP"}
				<li>Features: {{oth1DSCRP}}</li>
				{/if}
			
		</ul>
		{/section}
		
	</li>					

</ul>