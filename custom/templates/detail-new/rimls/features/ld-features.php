<ul class="zy-features-grid">
	<?php if( isset($single_property->nounits) || isset($single_property->foundation) || isset($single_property->construction) || isset($single_property->unmapped->BusinessType) || isset($single_property->pooldescription) || isset($single_property->waterfrontflag) || isset($single_property->waterfront) || isset($single_property->unmapped->Inclusions) || isset($single_property->interiorfeatures) || isset($single_property->unmapped->LandLeaseYN) || isset($single_property->unmapped->SeniorCommunityYN) || isset($single_property->assocsecurity) || isset($single_property->possession) || isset($single_property->bldgsqfeet) || isset($single_property->unmapped->StoriesTotal) || isset($single_property->furnished) || isset($single_property->leaseterms) || isset($single_property->rentfeeincludes) || isset($single_property->laundryfeatures) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
		
				<?php if( isset($single_property->nounits)): ?>
				<li>Unit Count: [nounits]</li>
				<?php endif; ?>
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BusinessType)): ?>
				<li>Business Type: [unmapped_BusinessType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Description: [pooldescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront Flag: [waterfrontflag]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront: [waterfront]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Inclusions)): ?>
				<li>Equipment: [unmapped_Inclusions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->LandLeaseYN)): ?>
				<li>LandLease: [unmapped_LandLeaseYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->SeniorCommunityYN)): ?>
				<li>Adult Community: [unmapped_SeniorCommunityYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assocsecurity)): ?>
				<li>Security: [assocsecurity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->possession)): ?>
				<li>Possession: [possession]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bldgsqfeet)): ?>
				<li>Building Area: [bldgsqfeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->StoriesTotal)): ?>
				<li>Number Of Levels: [unmapped_StoriesTotal]</li>
				<?php endif; ?>
				<?php if( isset($single_property->furnished)): ?>
				<li>Furnished: [furnished]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leaseterms)): ?>
				<li>Lease terms: [leaseterms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->rentfeeincludes)): ?>
				<li>Rent Fee Includes: [rentfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>Laundry Features: [laundryfeatures]</li>
				<?php endif; ?>
				
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->SpaFeatures) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->unmapped->FireplaceFeatures)): ?>
			<li>Fireplaces: [unmapped_FireplaceFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WindowFeatures)): ?>
			<li>Window Features: [unmapped_WindowFeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->SpaFeatures)): ?>
			<li>Spa: [unmapped_SpaFeatures]</li>
			<?php endif; ?>
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
	
		<?php if( isset($single_property->parkingfeature) || isset($single_property->unmapped->AttachedGarageYN) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking Feature: [parkingfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AttachedGarageYN)): ?>
			<li>Attached Garage: [unmapped_AttachedGarageYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>

		<?php if( isset($single_property->taxes) || isset($single_property->unmapped->TaxLot) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxLot)): ?>
			<li>TaxLot: [unmapped_TaxLot]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
		
	</li>

</ul>
