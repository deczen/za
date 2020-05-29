<ul class="zy-features-grid">
	<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ||
			  isset($single_property->vacant) || isset($single_property->handicapaccess) || isset($single_property->yearbuiltdescrp) || isset($single_property->waterbodyname) || isset($single_property->waterfront) ||
			  isset($single_property->buildingconstruction) || isset($single_property->roofmaterial) || isset($single_property->waterfront) || isset($single_property->appliances) || isset($single_property->propsubtype) ||
			  isset($single_property->unmapped->lngCOUNTYDESCRIPTION) || isset($single_property->lotsize) || isset($single_property->lotdescription) || isset($single_property->parkingfeature) || isset($single_property->firmrmk1) ||
			  isset($single_property->facingdirection) || isset($single_property->handicapaccess) || isset($single_property->hoafee) || isset($single_property->unmapped->FireplaceYN) || isset($single_property->zonedescription) ||
			  isset($single_property->unmapped->LotSizeUnits) || isset($single_property->unmapped->LotSizeDimensions) ):?>
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
			
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->handicapaccess)): ?>
			<li>Handicap Access: [handicapaccess]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Year Built Description: [yearbuiltdescrp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterbodyname)): ?>
			<li>Water Body Name: [waterbodyname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Water Front: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->buildingconstruction)): ?>
			<li>Building Construction: [buildingconstruction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Water Front: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Appliances: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Property Subtype: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->lngCOUNTYDESCRIPTION)): ?>
			<li>County Description: [unmapped_lngCOUNTYDESCRIPTION]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lotsize: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lotdescription: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->firmrmk1)): ?>
			<li>Fireplace Description: [firmrmk1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->facingdirection)): ?>
			<li>Facing Direction: [facingdirection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->handicapaccess)): ?>
			<li>Handicap Access: [handicapaccess]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Hoa Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FireplaceYN)): ?>
			<li>Fireplace YN: [unmapped_FireplaceYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<li>Zone Description: [zonedescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeUnits)): ?>
			<li>Lot Size Units: [unmapped_LotSizeUnits]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
			<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
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
			
		</ul>
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