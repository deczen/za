<ul class="zy-features-grid">
	
	<?php if( isset($single_property->basement) || isset($single_property->nobuildings) || isset($single_property->noofdrivingdoors) || isset($single_property->elevator) || isset($single_property->facilities) || isset($single_property->handicapaccess) || isset($single_property->noofloadingdocks) || isset($single_property->parkingspaces) || isset($single_property->noofrestrooms) || isset($single_property->system) || isset($single_property->utilities) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Details</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->nobuildings)): ?>
				<li>Building: [nobuildings]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofdrivingdoors)): ?>
				<li>Drive in Doors: [noofdrivingdoors]</li>
				<?php endif; ?>
				<?php if( isset($single_property->elevator)): ?>
				<li>Elevator: [elevator]</li>
				<?php endif; ?>
				<?php if( isset($single_property->facilities)): ?>
				<li>Facilities: [facilities]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Handicap Access: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofloadingdocks)): ?>
				<li>Loading Docks : [noofloadingdocks]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->noofrestrooms)): ?>
				<li>Restrooms: [noofrestrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->system)): ?>
				<li>System: [system]</li>
				<?php endif; ?>
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>
			
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->businesshrs) || isset($single_property->butype) || isset($single_property->equiplistavail) || isset($single_property->form) || isset($single_property->inventoryavail) || isset($single_property->realestateincld) || isset($single_property->speciallicenses) || isset($single_property->tenantexpanses) || isset($single_property->yearbuilt) || isset($single_property->zoning) || isset($single_property->zonedescription) ):?>
		<h3 class="zy-feature-title">Business Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->businesshrs)): ?>
				<li>Business Hours: [businesshrs]</li>
				<?php endif; ?>
				<?php if( isset($single_property->butype)): ?>
				<li>Business Type: [butype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->equiplistavail)): ?>
				<li>Equipment List Available: [equiplistavail]</li>
				<?php endif; ?>
				<?php if( isset($single_property->form)): ?>
				<li>Form: [form]</li>
				<?php endif; ?>
				<?php if( isset($single_property->inventoryavail)): ?>
				<li>Inventory Included: [inventoryavail]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->realestateincld)): ?>
				<li>Real Estate Included: [realestateincld]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->speciallicenses)): ?>
				<li>Special Licenses: [speciallicenses]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->tenantexpanses)): ?>
				<li>Tenant Expenses: [tenantexpanses]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->yearbuilt)): ?>
				<li>Year Established: [yearbuilt]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->zonedescription)): ?>
				<li>Zoning Description: [zonedescription]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) ):?>
		
		<h3 class="zy-feature-title">Schools</h3>
		
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->gradeschool)): ?>
				<li>Grade School: [gradeschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->middleschool)): ?>
				<li>Middle School: [middleschool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->highschool)): ?>
				<li>High School: [highschool]</li>
				<?php endif; ?>
			
		</ul>
		
		<?php endif; ?>
		
	</li>

	<li class="cell">	
	
		<?php if( isset($single_property->homeownassociation) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Association Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->homeownassociation)): ?>
				<li>Home Own Association: [homeownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Fee: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Assc fee includes: [asscfeeincludes]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->nolivinglevels) ):?>
		<h3 class="zy-feature-title">Room Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->nolivinglevels)): ?>
				<li>No Living Levels: [nolivinglevels]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>

</ul>