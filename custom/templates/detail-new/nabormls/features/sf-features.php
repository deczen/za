<ul class="zy-features-grid">
	<?php if(isset($single_property->unmapped->{'AttachedGarageYN'}) || isset($single_property->unmapped->{'CoveredSpaces'}) || isset($single_property->unmapped->{'CarportYN'}) || isset($single_property->amenities) || isset($single_property->basement) || isset($single_property->exteriorfeatures) || isset($single_property->exterior) || isset($single_property->fireplaces) || isset($single_property->flooring) /*|| isset($single_property->style)*/ || isset($single_property->waterviewfeatures)  ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
		<?php if( isset($single_property->unmapped->{'GulfAccessYN'}) ): ?>
					<li>Gulf Access YN: [unmapped_GulfAccessYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LotBack'}) || $single_property->unmapped->{'LotBack'}==0 ): ?>
					<li>
						Lot Back: <?php  if($single_property->unmapped->{'LotBack'}==0){
						echo "0";
					}else{
						echo $single_property->unmapped->{'LotBack'};
					}?>
					</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LotFrontage'}) || $single_property->unmapped->{'LotFrontage'}==0 ): ?>
					<li>Lot Frontage: 
					<?php  if($single_property->unmapped->{'LotFrontage'}==0){
						echo "0";
					}else{
						echo $single_property->unmapped->{'LotFrontage'};
					}?>


					</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LotLeft'}) || $single_property->unmapped->{'LotLeft'}==0 ): ?>
					<li>Lot Left: <?php  if($single_property->unmapped->{'LotLeft'}==0){
						echo "0";
					}else{
						echo $single_property->unmapped->{'LotLeft'};
					}?></li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LotRight'}) || $single_property->unmapped->{'LotRight'}==0 ): ?>
					<li>Lot Right: <?php  if($single_property->unmapped->{'LotRight'}==0){
						echo "0";
					}else{
						echo $single_property->unmapped->{'LotRight'};
					}?></li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'RearExposure'}) ): ?>
					<li>Rear Exposure: [unmapped_RearExposure]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Bedrooms'}) ): ?>
					<li>Bedrooms: [unmapped_Bedrooms]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Elevator'}) ): ?>
					<li>Elevator: [unmapped_Elevator]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'CondoFee'}) ): ?>
					<li>Condo Fee: [unmapped_CondoFee]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ForeclosedREOYN'}) ): ?>
					<li>Foreclosed Reo YN: [unmapped_ForeclosedREOYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HOAFee'}) ): ?>
					<li>Hoa Fee: [unmapped_HOAFee]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HOAFeeFreq'}) ): ?>
					<li>Hoa Fee Freq: [unmapped_HOAFeeFreq]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Maintenance'}) ): ?>
					<li>Maintenance: [unmapped_Maintenance]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Management'}) ): ?>
					<li>Management: [unmapped_Management]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'MandatoryClubFee'}) ): ?>
					<li>Mandatory Club Fee: [unmapped_MandatoryClubFee]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'MasterHOAFee'}) ): ?>
					<li>Master Hoa Fee: [unmapped_MasterHOAFee]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'MinDaysOfLease'}) ): ?>
					<li>Min Days of Lease: [unmapped_MinDaysOfLease]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'NumUnitFloor'}) ): ?>
					<li>Num Unit Floor: [unmapped_NumUnitFloor]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'OwnershipDesc'}) ): ?>
					<li>Ownership Desc: [unmapped_OwnershipDesc]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'PetsLimitMaxNumber'}) ): ?>
					<li>Pets Limit Max Number: [unmapped_PetsLimitMaxNumber]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'PotentialShortSaleYN'}) ): ?>
					<li>Potential Short Sale YN: [unmapped_PotentialShortSaleYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->hoafee) ): ?>
					<li>Total Annual Recurring Fees: [hoafee]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'TransferFee'}) ): ?>
					<li>Transfer Fee: [unmapped_TransferFee]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'NumberOfUnitsInCommunity'}) ): ?>
					<li>Units in Complex: [unmapped_NumberOfUnitsInCommunity]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'CanalWidth'}) ): ?>
					<li>Canal Width: [unmapped_CanalWidth]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'GulfAccessType'}) ): ?>
					<li>Gulf Access Type: [unmapped_GulfAccessType]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'GolfType'}) ): ?>
					<li>Golf Type: [unmapped_GolfType]</li>
				<?php endif; ?>
				
			<?php if( isset($single_property->amenities)): ?>
			<li>Amenities: [amenities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<li>Exterior Features: [exteriorfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->fireplaces)): ?>
			<li>Fireplaces: [fireplaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floor: [flooring]</li>
			<?php endif; ?>
			<?php /*if( isset($single_property->style)): ?>
			<li>House Style: [style]</li>
			<?php endif;*/ ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Waterview: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{'AttachedGarageYN'}) ): ?>
					<li>Attached Garage: [unmapped_AttachedGarageYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'CarportYN'}) ): ?>
					<li>Carport Desc: [unmapped_CarportYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'CarportSpaces'}) ): ?>
					<li>Carport Spaces: [unmapped_CarportSpaces]</li>
				<?php endif; ?>
	<?php if( isset($single_property->construction) ): ?>
					<li>Construction: [construction]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'CoveredSpaces'}) ): ?>
					<li>Covered Spaces: [unmapped_CoveredSpaces]</li>
				<?php endif; ?>
	<?php if( isset($single_property->foundation) ): ?>
					<li>Foundation: [foundation]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'FrontageType'}) ): ?>
					<li>Frontage Type: [unmapped_FrontageType]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'GarageYN'}) ): ?>
					<li>Garage YN: [unmapped_GarageYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'IrrigationSource'}) ): ?>
					<li>Irrigation: [unmapped_IrrigationSource]</li>
				<?php endif; ?>
	<?php if( isset($single_property->lotdescription) ): ?>
					<li>Lot Description: [lotdescription]</li>
				<?php endif; ?>
	<?php if( isset($single_property->pooldescription) ): ?>
					<li>Pool Description: [pooldescription]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'PoolPrivateYN'}) ): ?>
					<li>Pool Private: [unmapped_PoolPrivateYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->roofmaterial) ): ?>
					<li>Roof: [roofmaterial]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'View'}) ): ?>
					<li>View: [unmapped_View]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ViewYN'}) ): ?>
					<li>View YN: [unmapped_ViewYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->waterfrontflag) ): ?>
					<li>Waterfront YN:  <?php echo $single_property->waterfrontflag=='Y'? 'Yes' : 'No'; ?></li>
				<?php endif; ?>
	<?php if( isset($single_property->nobaths) ): ?>
					<li>Baths Total: [nobaths]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'BedroomFeatures'}) ): ?>
					<li>Bedroom Desc: [unmapped_BedroomFeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Room_DiningRoom_Features'}) ): ?>
					<li>Dining Description: [unmapped_Room_DiningRoom_Features]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'DoorFeatures'}) ): ?>
					<li>Door Features: [unmapped_DoorFeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->appliances) ): ?>
					<li>Equipment: [appliances]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'FireplaceYN'}) ): ?>
					<li>Fireplace YN: [unmapped_FireplaceYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->furnished) ): ?>
					<li>Furnished Desc: [furnished]</li>
				<?php endif; ?>
	<?php if( isset($single_property->interiorfeatures) ): ?>
					<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Features: [laundryfeatures]</li>
			<?php endif; ?>	
	<?php if( isset($single_property->unmapped->{'SpaYN'}) ): ?>
					<li>Spa YN: [unmapped_SpaYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'SpaFeatures'}) ): ?>
					<li>Spa Features: [unmapped_SpaFeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'BuildingAreaTotal'}) ): ?>
					<li>Building Area Total: [unmapped_BuildingAreaTotal]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'BuildingFeatures'}) ): ?>
					<li>Building Features: [unmapped_BuildingFeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->termsfeature) ): ?>
					<li>Community Features: [termsfeature]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HorseYN'}) ): ?>
					<li>Horse YN: [unmapped_HorseYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Levels'}) ): ?>
					<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'NewConstructionYN'}) ): ?>
					<li>New Construction YN: [unmapped_NewConstructionYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'OtherStructures'}) ): ?>
					<li>Other Structures: [unmapped_OtherStructures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->assocsecurity) ): ?>
					<li>Security Features: [assocsecurity]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'SeniorCommunityYN'}) ): ?>
					<li>Senior Community: [unmapped_SeniorCommunityYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'StructureType'}) ): ?>
					<li>Structure Type: [unmapped_StructureType]</li>
				<?php endif; ?>
	<?php if( isset($single_property->leaseterms) ): ?>
					<li>Lease Terms: [leaseterms]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'RoadResponsibility'}) ): ?>
					<li>Road Responsibility: [unmapped_RoadResponsibility]</li>
				<?php endif; ?>
	<?php if( isset($single_property->totalrooms) ): ?>
					<li>Rooms Total: [totalrooms]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'WindowFeatures'}) ): ?>
					<li>Window Features: [unmapped_WindowFeatures]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'PatioAndPorchFeatures'}) ): ?>
					<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
				<?php endif; ?>

<?php if( isset($single_property->unmapped->{'Fencing'}) ): ?>
					<li>Fencing: [unmapped_Fencing]</li>
				<?php endif; ?>

			<?php if( za_is_ygl( $single_property ) ): ?>
			
			<?php if( isset($single_property->rentprice)): ?>
			<li>Rent Amount: [rentprice]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitlevel)): ?>
			<li>Unit Level: [unitlevel]</li>
			<?php endif; ?>			
					
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<li>Rent Includes: [rentfeeincludes]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Fee Paid By Owner: [reqdownassociation]</li>
			<?php endif; ?>			
					
			<?php if( isset($single_property->heating)): ?>
			<li>Heat Source: [heating]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->dateavailableformatted)): ?>
			<li>Avail Date: [dateavailableformatted]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->butype)): ?>
			<li>Building Type: [butype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->student)): ?>
			<li>Student: [student]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->facilities)): ?>
			<li>Features: [facilities]</li>
			<?php endif; ?>	
			
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	

	<?php if( isset($single_property->cooling) || isset($single_property->utilities) || isset($single_property->coolingzones) || isset($single_property->heating) || isset($single_property->heatzones) || isset($single_property->energyfeatures) || isset($single_property->electricfeature) || isset($single_property->hotwater) || isset($single_property->sewer) || isset($single_property->water)  ):?>
		<li class="cell">
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			
		<?php if( isset($single_property->unmapped->{'CoolingYN'})): ?>
					 <li>Cooling YN: <?php echo $single_property->unmapped->{'CoolingYN'} ? 'Yes' : 'No'; ?></li>
                    <?php endif; ?>    
                    <?php if( isset($single_property->unmapped->{'HeatingYN'})): ?>
                    <li>Heating YN: <?php echo $single_property->unmapped->{'HeatingYN'} ? 'Yes' : 'No'; ?></li>
                    <?php endif; ?>    

			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->coolingzones)): ?>
			<li>Cool Zones: [coolingzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<li>Heating: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->heatzones)): ?>
			<li>Heat Zones: [heatzones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->energyfeatures)): ?>
			<li>Energy Features: [energyfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->electricfeature)): ?>
			<li>Electric: [electricfeature]</li>
			<?php endif; ?>
			<?php if( isset($single_property->hotwater)): ?>
			<li>Hot Water: [hotwater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterheater)): ?>
			<li>Water Heater: [waterheater]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Utilities: [water]</li>
			<?php endif; ?>								
			
		</ul>
		<?php if( isset($single_property->gradeschool) || isset($single_property->middleschool)|| isset($single_property->highschool)):?>
            <h3 class="zy-feature-title">School Information</h3>
            <ul class="zy-sub-list">
                    <?php if( isset($single_property->gradeschool)): ?>
                    <li>Elementary School: <?php echo $single_property->gradeschool; ?></li>
                    <?php endif; ?>    
					<?php if( isset($single_property->middleschool)): ?>
                    <li>Middle School: <?php echo $single_property->middleschool; ?></li>
                    <?php endif; ?>  
					<?php if( isset($single_property->highschool)): ?>
                    <li>High School: <?php echo $single_property->highschool; ?></li>
                    <?php endif; ?>  
            </ul>
    <?php endif; ?>
	</li>
	<?php endif; ?>
	

	<li class="cell">
		<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) ):?>
		<h3 class="zy-feature-title">Parking Information</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->garagespaces)): ?>
			<li>Garage Spaces: [garagespaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingspaces)): ?>
			<li>Parking Spaces: [parkingspaces]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roadtype)): ?>
			<li>Road Type : [roadtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>	
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Amount ($): [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
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

<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) || isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) || isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) || isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->mbrdimen)): ?>
			<li>Size: [mbrdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->mbrlevel)): ?>
			<li>Level: [mbrlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->mbrdscrp)): ?>
			<li>Features: [mbrdscrp]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed2DIMEN)): ?>
			<li>Size: [bed2DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed2LEVEL)): ?>
			<li>Level: [bed2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed2DSCRP)): ?>
			<li>Features: [bed2DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed3DIMEN)): ?>
			<li>Size: [bed3DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed3LEVEL)): ?>
			<li>Level: [bed3LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed3DSCRP)): ?>
			<li>Features: [bed3DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed4DIMEN)): ?>
			<li>Size: [bed4DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed4LEVEL)): ?>
			<li>Level: [bed4LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed4DSCRP)): ?>
			<li>Features: [bed4DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bed5DIMEN)): ?>
			<li>Size: [bed5DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed5LEVEL)): ?>
			<li>Level: [bed5LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bed5DSCRP)): ?>
			<li>Features: [bed5DSCRP]</li>								
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bth1dimen)): ?>
			<li>Size: [bth1dimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth1LEVEL)): ?>
			<li>Level: [bth1LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth1dscrp)): ?>
			<li>Features: [bth1dscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bth2dimen)): ?>
			<li>Size: [bth2dimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth2LEVEL)): ?>
			<li>Level: [bth2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth2dscrp)): ?>
			<li>Features: [bth2dscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->bth3dimen)): ?>
			<li>Size: [bth3dimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth3level)): ?>
			<li>Level: [bth3level]</li>
			<?php endif; ?>
			<?php if( isset($single_property->bth3dscrp)): ?>
			<li>Features: [bth3dscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->kitdimen)): ?>
			<li>Size: [kitdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->kitlevel)): ?>
			<li>Level: [kitlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->kitdscrp)): ?>
			<li>Features: [kitdscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->famdimen)): ?>
			<li>Size: [famdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->famlevel)): ?>
			<li>Level: [famlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->famdscrp)): ?>
			<li>Features: [famdscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->livdimen)): ?>
			<li>Size: [livdimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->livlevel)): ?>
			<li>Level: [livlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->livdscrp)): ?>
			<li>Features: [livdscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->dindimen)): ?>
			<li>Size: [dindimen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->dinlevel)): ?>
			<li>Level: [dinlevel]</li>
			<?php endif; ?>
			<?php if( isset($single_property->dindscrp)): ?>
			<li>Features: [dindscrp]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth1DIMEN)): ?>
			<li>Size: [oth1DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth1LEVEL)): ?>
			<li>Level: [oth1LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth1DSCRP)): ?>
			<li>Features: [oth1DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth2DIMEN) || isset($single_property->oth2LEVEL) || isset($single_property->oth2DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #2</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth2DIMEN)): ?>
			<li>Size: [oth2DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth2LEVEL)): ?>
			<li>Level: [oth2LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth2DSCRP)): ?>
			<li>Features: [oth2DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth3DIMEN) || isset($single_property->oth3LEVEL) || isset($single_property->oth3DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #3</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth3DIMEN)): ?>
			<li>Size: [oth3DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth3LEVEL)): ?>
			<li>Level: [oth3LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth3DSCRP)): ?>
			<li>Features: [oth3DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth4DIMEN) || isset($single_property->oth4LEVEL) || isset($single_property->oth4DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #4</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth4DIMEN)): ?>
			<li>Size: [oth4DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth4LEVEL)): ?>
			<li>Level: [oth4LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth4DSCRP)): ?>
			<li>Features: [oth4DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth5DIMEN) || isset($single_property->oth5LEVEL) || isset($single_property->oth5DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #5</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth5DIMEN)): ?>
			<li>Size: [oth5DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth5LEVEL)): ?>
			<li>Level: [oth5LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth5DSCRP)): ?>
			<li>Features: [oth5DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth6DIMEN) || isset($single_property->oth6LEVEL) || isset($single_property->oth6DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #6</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->oth6DIMEN)): ?>
			<li>Size: [oth6DIMEN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth6LEVEL)): ?>
			<li>Level: [oth6LEVEL]</li>
			<?php endif; ?>
			<?php if( isset($single_property->oth6DSCRP)): ?>
			<li>Features: [oth6DSCRP]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>