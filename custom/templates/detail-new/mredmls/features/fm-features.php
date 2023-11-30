<ul class="zy-features-grid">
	<?php if( isset($single_property->yearbuiltdescrp) || isset($single_property->unmapped->LSZ) || isset($single_property->sitecondition) || isset($single_property->unmapped->AdditionalParcelsYN) || isset($single_property->unmapped->DRV) ||
			  isset($single_property->unmapped->OtherStructures) || isset($single_property->roadtype) || isset($single_property->unmapped->WaterfrontYN) || isset($single_property->unmapped->INF) || isset($single_property->unmapped->PossibleUse) ||
			  isset($single_property->unmapped->CurrentUse) || isset($single_property->zoning) || isset($single_property->unmapped->CRP) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Year Built Description: [yearbuiltdescrp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LSZ)): ?>
			<li>Lot Size: [unmapped_LSZ]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site condition: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels YN: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->DRV)): ?>
			<li>Driveway: [unmapped_DRV]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->OtherStructures)): ?>
			<li>Other Structures: [unmapped_OtherStructures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Surface Type: [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
			<li>Waterfront YN: [unmapped_WaterfrontYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->INF)): ?>
			<li>General Information: [unmapped_INF]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->PossibleUse)): ?>
			<li>Possible Use: [unmapped_PossibleUse]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CurrentUse)): ?>
			<li>Current Use: [unmapped_CurrentUse]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CRP)): ?>
			<li>Corporate Limits: [unmapped_CRP]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
		
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities ) ||
				  isset($single_property->heating) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->gas)): ?>
			<li>Gas: [gas]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>							
			<?php if( isset($single_property->utilities  )): ?>
			<li>Utilities : [utilities]</li>
			<?php endif; ?>								
			<?php if( isset($single_property->heating  )): ?>
			<li>Heating : [heating]</li>
			<?php endif; ?>								
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->unmapped->CARS) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">

			<?php if( isset($single_property->unmapped->CARS)): ?>
			<li>Number Of Cars: [unmapped_CARS]</li>
			<?php endif; ?>			
		</ul>
		<?php endif; ?>
		
		
	</li>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->hoafee) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Amount ($): [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning Code: [zoning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Association Fee: [hoafee]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool) || isset($single_property->highschool) || isset($single_property->unmapped->ElementarySchoolDistrict) || isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict) ||
				  isset($single_property->unmapped->HighSchoolDistrict) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Elementary School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ElementarySchoolDistrict)): ?>
			<li>Elementary School District: [unmapped_ElementarySchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MiddleOrJuniorSchoolDistrict)): ?>
			<li>Middle School District: [unmapped_MiddleOrJuniorSchoolDistrict]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->HighSchoolDistrict)): ?>
			<li>High School District: [unmapped_HighSchoolDistrict]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>