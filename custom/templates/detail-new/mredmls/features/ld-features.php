<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->yearbuiltdescrp) || isset($single_property->unmapped->LSZ) || isset($single_property->roadtype) || isset($single_property->unmapped->WaterfrontYN) || isset($single_property->unmapped->InternetAddressDisplayYN) ||
			  isset($single_property->unmapped->AdditionalParcelsYN) || isset($single_property->unmapped->INF) || isset($single_property->sitecondition) || isset($single_property->unmapped->SPEC_SVC_AREA) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->cultivationacres)): ?>
				<li>Cultivation Acres: [cultivationacres]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pastureacres)): ?>
				<li>Pasture Acres: [pastureacres]</li>
				<?php endif; ?>
				<?php if( isset($single_property->timberacres)): ?>
				<li>Timber Acres: [timberacres]</li>
				<?php endif; ?>
				<?php if( isset($single_property->ldtype)): ?>
				<li>Land Style: [ldtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<li>Street Frontage: [frontage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<li>Year Built Description: [yearbuiltdescrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LSZ)): ?>
				<li>Lot Size: [unmapped_LSZ]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Road Surface Type: [roadtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
				<li>Waterfront YN: [unmapped_WaterfrontYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->InternetAddressDisplayYN)): ?>
				<li>Internet Address Display YN: [unmapped_InternetAddressDisplayYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
				<li>Additional Parcels YN: [unmapped_AdditionalParcelsYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->INF)): ?>
				<li>General Information: [unmapped_INF]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Site condition: [sitecondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SPEC_SVC_AREA)): ?>
				<li>Special Service Area: [unmapped_SPEC_SVC_AREA]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
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
		<?php if( isset($single_property->unmapped->CARS) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">

			<?php if( isset($single_property->unmapped->CARS)): ?>
			<li>Number Of Cars: [unmapped_CARS]</li>
			<?php endif; ?>			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->unmapped->Utilities ) ):?>
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
			<?php if( isset($single_property->unmapped->Utilities  )): ?>
			<li>Utilities : [unmapped_Utilities]</li>
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