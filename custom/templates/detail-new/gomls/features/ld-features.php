<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->restrictions) || isset($single_property->improvements) || isset($single_property->unmapped->lngTOWNSDESCRIPTION) || isset($single_property->lotdescription) || isset($single_property->unmapped->{"Lot Size"}) ||
			  isset($single_property->unmapped->{"Apx Wooded Acres"}) || isset($single_property->vacant) || isset($single_property->unmapped->{"#Bldgs/Improvements"}) || isset($single_property->unmapped->{"Mineral Rights"}) || isset($single_property->unmapped->Tract) ||
			  isset($single_property->unmapped->{"Acreage Info"}) || isset($single_property->waterfront) || isset($single_property->handicapaccess) || isset($single_property->frontage) ):?>
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
				<?php if( isset($single_property->restrictions)): ?>
				<li>Restrictions: [restrictions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->improvements)): ?>
				<li>Improvements: [improvements]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->lngTOWNSDESCRIPTION)): ?>
				<li>Towns Description: [unmapped_lngTOWNSDESCRIPTION]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Lot Size"})): ?>
				<li>Lot Size: [unmapped_Lot Size]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Apx Wooded Acres"})): ?>
				<li>Apx Wooded Acres: [unmapped_Apx Wooded Acres]</li>
				<?php endif; ?>
				<?php if( isset($single_property->vacant)): ?>
				<li>Vacant: [vacant]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"#Bldgs/Improvements"})): ?>
				<li>No of Bldgs/Improvements: [unmapped_#Bldgs/Improvements]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Tract)): ?>
				<li>Tract: [unmapped_Tract]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Acreage Info"})): ?>
				<li>Acreage Information: [unmapped_Acreage Info]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Water Front: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Handicap Access: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->frontage)): ?>
				<li>Frontage: [frontage]</li>
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
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities) ):?>
	<li class="cell">
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
				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>								
			
		</ul>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->unmapped->{"Tax District"}) ):?>
		<h3 class="zy-feature-title">Taxes & Considerations</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Tax District"})): ?>
				<li>Tax District: [unmapped_Tax District]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->gradeschool) || isset($single_property->highschool) || isset($single_property->middleschool) ):?>
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->gradeschool)): ?>
			<li>Grade School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>