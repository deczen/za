<ul class="zy-features-grid">
	<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) || 
			  isset($single_property->parkingspaces)  || isset($single_property->advertisement) || isset($single_property->vacant) || isset($single_property->zipcode) ||
			  isset($single_property->lotsize) || isset($single_property->unmapped->{'View'}) || isset($single_property->yearbuilt) || isset($single_property->unmapped->{"Transaction Type"}) || isset($single_property->lotdescription) || isset($single_property->waterfrontflag) || isset($single_property->laundryfeatures) ):?>
	<li class="cell">
		<?php if( isset($single_property->mauunits) || isset($single_property->ofuunits) || isset($single_property->rsuunits) || isset($single_property->reuunits) || isset($single_property->wauunits) ||  isset($single_property->lotdescription) || isset($single_property->waterfrontflag) || isset($single_property->laundryfeatures)):?>
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list pfeature">
			
			<?php if( isset($single_property->mauunits) || isset($single_property->mafbldgsf)): ?>
			<li>Manufacturing</td>
				<td class="zy-listing__table__label"><span>[mauunits]</span>: [mafbldgsf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->ofuunits) || isset($single_property->offbldgsf)): ?>
			<li>Office</td>
				<td class="zy-listing__table__label"><span>[ofuunits]</span>: [offbldgsf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->rsuunits) || isset($single_property->rsfbldgsf)): ?>
			<li>Residential</td>
				<td class="zy-listing__table__label"><span>[rsuunits]</span>: [rsfbldgsf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reuunits) || isset($single_property->refbldgsf)): ?>
			<li>Retail</td>
				<td class="zy-listing__table__label"><span>[reuunits]</span>: [refbldgsf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->wauunits) || isset($single_property->wafbldgsf)): ?>
			<li>Warehouse</td>
				<td class="zy-listing__table__label"><span>[wauunits]</span>: [wafbldgsf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->advertisement)): ?>
			<li>Advertisement: [advertisement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zipcode)): ?>
			<li>Zipcode: [zipcode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuilt)): ?>
			<li>Year Built: [yearbuilt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Transaction Type"})): ?>
			<li>Transaction Type: [unmapped_Transaction Type]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures) ): ?>
					<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Fencing'}) ): ?>
					<li>Fencing: [unmapped_Fencing]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'FrontageLength'}) ): ?>
					<li>Frontage Length: [unmapped_FrontageLength]</li>
				<?php endif; ?>
	<?php if( isset($single_property->lotdescription) ): ?>
					<li>Lot Features: [lotdescription]</li>
				<?php endif; ?>
	<?php if( isset($single_property->waterfrontflag) ): ?>
					<li>Waterfront YN: [waterfrontflag]</li>
				<?php endif; ?>
	<?php if( isset($single_property->interiorfeatures) ): ?>
					<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->laundryfeatures) ): ?>
					<li>Laundry Features: [laundryfeatures]</li>
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
	<?php if( isset($single_property->unmapped->{'PropertyAttachedYN'}) ): ?>
					<li>Property Attached YN: [unmapped_PropertyAttachedYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->assocsecurity) ): ?>
					<li>Security Features: [assocsecurity]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'SpecialListingConditions'}) ): ?>
					<li>Special Listing Conditions: [unmapped_SpecialListingConditions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'View'}) ): ?>
					<li>View: [unmapped_View]</li>
				<?php endif; ?>
	<?php if( isset($single_property->neighborhood) ): ?>
					<li>Township: [neighborhood]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ZoningDescription'}) ): ?>
					<li>Zoning Description: [unmapped_ZoningDescription]</li>
				<?php endif; ?>

		</ul>
		<?php endif; ?>
		
	
	</li>						
	<?php endif; ?>

	<?php if(isset($single_property->utilities) || isset($single_property->parkingfeature)  ):?>
	<li class="cell">
	<?php if(isset($single_property->utilities)   ):?>

		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">

				<?php if( isset($single_property->utilities)): ?>
				<li>Utilities: [utilities]</li>
				<?php endif; ?>
			
			
		</ul>
		<?php endif; ?>

		<?php if( isset($single_property->parkingspaces) || isset($single_property->parkingfeature) || isset($single_property->unmapped->{"Parking Spaces"}) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Spaces: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<li>Parking Features: [parkingfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Parking Spaces"})): ?>
				<li>Parking Spaces: [unmapped_Parking Spaces]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes & Considerations</h3>
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
				<?php if( isset($single_property->zonedescription)): ?>
				<li>Zoning Description: [zonedescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Association Fee ($): [hoafee]</li> <!-- not done -->
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<li>Fee Includes: [asscfeeincludes]</li> <!-- not done -->
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>