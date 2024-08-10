<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->lotdescription) || isset($single_property->lotsize) || isset($single_property->streetname) || isset($single_property->unmapped->Septic) || isset($single_property->unmapped->Well) || 
			  isset($single_property->unmapped->{"Transaction Type"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list pfeature">
			
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
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->streetname)): ?>
			<li>Cross Street Address: [streetname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Septic)): ?>
			<li>Septic: [unmapped_Septic]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Well)): ?>
			<li>Well: [unmapped_Well]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Transaction Type"})): ?>
			<li>Transaction Type: [unmappedTransaction Type]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{'View'}) ): ?>
					<li>View: [unmapped_View]</li>
				<?php endif; ?>
	<?php if( isset($single_property->reqdownassociation) ): ?>
					<li>Association YN: [reqdownassociation]</li>
				<?php endif; ?>
	<?php if( isset($single_property->termsfeature) ): ?>
					<li>Community Features: [termsfeature]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ListingTerms'}) ): ?>
					<li>Listing Terms: [unmapped_ListingTerms]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LotSizeDimensions'}) ): ?>
					<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
	<?php if( isset($single_property->neighborhood) ): ?>
					<li>Township: [neighborhood]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ZoningDescription'}) ): ?>
					<li>Zoning Description: [unmapped_ZoningDescription]</li>
				<?php endif; ?>


		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if(isset($single_property->unmapped->{'HighSchoolDistrict'}) || isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) || isset($single_property->utilities) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Utilities</h3>
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
		<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'}) ): ?>

		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">

			
		<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'}) ): ?>
			<li>School District: [unmapped_HighSchoolDistrict]</li>
				<?php endif; ?>							
			
		</ul>
		<?php endif; ?>							


	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<h3 class="zy-feature-title">Taxes</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Tax Amount ($): [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>