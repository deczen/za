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

				<?php if( isset($single_property->unmapped->CoveredSpaces)): ?>
				<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->FrontageLength)): ?>
				<li>Frontage Length: [unmapped_FrontageLength]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'GarageYN'})): ?>
				<li>Garage YN: <?php if($single_property->unmapped->{'GarageYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Features: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<li>Parking Total: [parkingspaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
				<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BelowGradeFinishedArea)): ?>
				<li>Below Grade Finished Area: [unmapped_BelowGradeFinishedArea]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'FireplaceYN'})): ?>
				<li>Fireplace YN: <?php if($single_property->unmapped->{'FireplaceYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces Total: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Flooring: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->squarefeet)): ?>
				<li>Living Area: [squarefeet]</li>
				<?php endif; ?>
				<?php if( isset($single_property->handicapaccess)): ?>
				<li>Accessibility Features: [handicapaccess]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Community Features: [termsfeature]</li>
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
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>Laundry Features: [laundryfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'NewConstructionYN'})): ?>
				<li>New Construction: <?php if($single_property->unmapped->{'NewConstructionYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'SeniorCommunityYN'})): ?>
				<li>Senior Community YN: <?php if($single_property->unmapped->{'SeniorCommunityYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
		</ul>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->unmapped->sewer) || isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->SpaFeatures) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->cooling)): ?>
                    <li>Cooling: [cooling]</li>
                <?php endif; ?>
				<?php if( isset($single_property->unmapped->{'CoolingYN'})): ?>
					 <li>Cooling YN: <?php echo $single_property->unmapped->{'CoolingYN'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?> 
                <?php if( isset($single_property->heating)): ?>
                    <li>Heating: [heating]</li>
                <?php endif; ?>
				<?php if( isset($single_property->unmapped->{'HeatingYN'})): ?>
                    <li>Heating YN: <?php echo $single_property->unmapped->{'HeatingYN'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?>  
				<?php if( isset($single_property->sewer)): ?>
                    <li>Sewer Utilities: [sewer]</li>
                <?php endif; ?> 
				<?php if( isset($single_property->water)): ?>
                    <li>Water Utilities: [water]</li>
                <?php endif; ?>
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

		<?php if( isset($single_property->taxes) || isset($single_property->unmapped->hoafee) || isset($single_property->unmapped->feeinterval)):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hoafee)): ?>
			<li>Association Fee: [hoafee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->TaxLot)): ?>
			<li>TaxLot: [unmapped_TaxLot]</li>
			<?php endif; ?>	
			
		</ul>
		<?php endif; ?>
		
	</li>

</ul>
