<ul class="zy-features-grid">
	<?php if( isset($single_property->beachownership) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->assessedvaluebldg) || isset($single_property->unmapped->{'leadpaint'}) || isset($single_property->unmapped->{'Lot Size Source'})|| isset($single_property->propsubtype) || isset($single_property->unmapped->{'Separate Living Qtrs'}) || isset($single_property->unmapped->{'Sewer: Septic Tank'}) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->yearround) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list pfeature">
		
				<?php if( isset($single_property->beachownership)): ?>
				<li>Beach Ownership: [beachownership]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'ownerLivingQuarters'})): ?>
				<li>Owner Living Quarters: [unmapped_ownerLivingQuarters]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'CarportYN'})): ?>
				<li>Carport: <?php if($single_property->unmapped->{'CarportYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->construction)): ?>
				<li>Construction: [construction]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Flood Ins Required'})): ?>
				<li>Flood Insurance Required: [unmapped_Flood Ins Required]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'LotSizeDimensions'}) ): ?>
					<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'RoomBedroomLevel'}) ): ?>
					<li>Bathroom Level: [unmapped_RoomBedroomLevel]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'WindowFeatures'}) ): ?>
					<li>Window Features: [unmapped_WindowFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BasementYN'}) ): ?>
					<li>Basement YN: [unmapped_BasementYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'BuildingAreaTotal'}) ): ?>
					<li>Living Area: [unmapped_BuildingAreaTotal]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'MainLevelBedrooms'}) ): ?>
					<li>Main Level Bedrooms: [unmapped_MainLevelBedrooms]</li>
				<?php endif; ?>
	<?php if( isset($single_property->possession) ): ?>
					<li>Possession: [possession]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'SpaYN'}) ): ?>
					<li>Spa YN: [unmapped_SpaYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->leaseterms) ): ?>
					<li>Lease Term: [leaseterms]</li>
				<?php endif; ?>

				<?php if( isset($single_property->handicapaccess) ): ?>
					<li>Accessibility Features: [handicapaccess]</li>
				<?php endif; ?>
	<?php if( isset($single_property->documentsonfile) ): ?>
					<li>Documents Available: [documentsonfile]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Inclusions'}) ): ?>
					<li>Inclusions: [unmapped_Inclusions]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ZoningDescription'}) ): ?>
					<li>Zoning Description: [unmapped_ZoningDescription]</li>
				<?php endif; ?>



				<?php if( isset($single_property->unmapped->{'CarportSpaces'}) ): ?>
					<li>Carport Spaces: [unmapped_CarportSpaces]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Fencing'}) ): ?>
					<li>Fencing: [unmapped_Fencing]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'OtherStructures'}) ): ?>
					<li>Other Structures: [unmapped_OtherStructures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'Bathroom'}) ): ?>
					<li>Bathroom Features: [unmapped_Bathroom]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'FireplaceFeatures'}) ): ?>
					<li>Fireplace Features: [unmapped_FireplaceFeatures]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'RoomKitchenFeatures'}) ): ?>
					<li>Kitchen Features: [unmapped_RoomKitchenFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'CarportSpaces'}) ): ?>
					<li>Carport Spaces: [unmapped_CarportSpaces]</li>
				<?php endif; ?>

				
				<?php if( isset($single_property->unmapped->{'Fuel Type'})): ?>
				<li>Fuel Type: [unmapped_Fuel Type]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<li>Improvement Assessments: [assessedvaluebldg]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'leadPaint'})): ?>
				<li>Lead Paint: [unmapped_leadPaint]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<li>Lot Size Source: [unmapped_Lot Size Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Property Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Separate Living Qtrs'})): ?>
				<li>Separate Living Quarters: [unmapped_Separate Living Qtrs]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Sewer: Septic Tank'})): ?>
				<li>Sewer Septic Tank: [unmapped_Sewer: Septic Tank]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'})): ?>
				<li>Special List Conditions: [unmapped_Special Listing Cond]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'SqFt Source'})): ?>
				<li>Sq Ft Source: [unmapped_SqFt Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<li>Water: [water]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<li>Year Built Description: [yearbuiltdescrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->yearround)): ?>
				<li>Year Round: [yearround]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->furnished) ): ?>
					<li>Furnished: [furnished]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'EntryLevel'}) ): ?>
					<li>Entry Level: [unmapped_EntryLevel]</li>
				<?php endif; ?>

				<?php if( isset($single_property->rentfeeincludes) ): ?>
					<li>Rent Includes: [rentfeeincludes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BodyType'}) ): ?>
					<li>Body Type: [unmapped_BodyType]</li>
				<?php endif; ?>
	<?php if( isset($single_property->greencertified) ): ?>
					<li>Green Energy Efficient: [greencertified]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LandLeaseAmount'}) ): ?>
					<li>Land Lease Amount: [unmapped_LandLeaseAmount]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LandLeaseAmountFrequency'}) ): ?>
					<li>Land Lease Amount Frequency: [unmapped_LandLeaseAmountFrequency]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'SeniorCommunityYN'}) ): ?>
					<li>Senior Community YN: [unmapped_SeniorCommunityYN]</li>
				<?php endif; ?>

				<?php if( isset($single_property->BuildingFeatures) ): ?>
					<li>Building Features: [BuildingFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'BuildingFeatures'}) ): ?>
					<li>Building Features: [unmapped_BuildingFeatures]</li>
				<?php endif; ?>

	<?php if( isset($single_property->BusinessType) ): ?>
					<li>Business Type: [BusinessType]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'BusinessType'}) ): ?>
					<li>Business Type: [unmapped_BusinessType]</li>
				<?php endif; ?>

	<?php if( isset($single_property->unmapped->{'CurrentUse'}) ): ?>
					<li>Current Use: [unmapped_CurrentUse]</li>
				<?php endif; ?>
				
	<?php if( isset($single_property->CurrentUse) ): ?>
					<li>Current Use: [CurrentUse]</li>
				<?php endif; ?>

	<?php if( isset($single_property->leasetype) ): ?>
					<li>Existing Lease Type: [leasetype]</li>
				<?php endif; ?>
				
	<?php if( isset($single_property->unmapped->{'SecurityDeposit'}) ): ?>
					<li>Security Deposit: [unmapped_SecurityDeposit]</li>
				<?php endif; ?>

	<?php if( isset($single_property->unmapped->{'Levels'}) ): ?>
					<li>Levels: [unmapped_Levels]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'LeaseConsideredYN'}) ): ?>
					<li>Lease Considered YN: [unmapped_LeaseConsideredYN]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'ListingTerms'}) ): ?>
					<li>Listing Terms: [unmapped_ListingTerms]</li>
				<?php endif; ?>
	<?php if( isset($single_property->equiplistavail) ): ?>
					<li>Other Equipment: [equiplistavail]</li>
				<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'PropertySubTypeAdditional'}) ): ?>
					<li>Property Sub Type Additional: [unmapped_PropertySubTypeAdditional]</li>
				<?php endif; ?>
				
	<?php if( isset($single_property->unmapped->{'BuildingName'}) ): ?>
					<li>Building Name: [unmapped_BuildingName]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->petsallowed)): ?>
				<li>Pets Allowed: [petsallowed]</li>
				<?php endif; ?>
				<?php if( isset($single_property->petrestrictionsallow)): ?>
				<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachdescription)): ?>
				<li>Beach Description: [beachdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->waterbodyname)): ?>
				<li>Beach Lake Pond: [waterbodyname]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<li>Dock: [unmapped_Dock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Dock Description'})): ?>
				<li>Dock Description: [unmapped_Dock Description]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exteriorfeatures)): ?>
				<li>Exterior Features: [exteriorfeatures]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->foundation)): ?>
				<li>Foundation: [foundation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Garage'})): ?>
				<li>Garage: [unmapped_Garage]</li>
				<?php endif; ?>
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Description: [garageparking]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->asscpool)): ?>
				<li>Pool: [asscpool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->pooldescription)): ?>
				<li>Pool Description: [pooldescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roofmaterial)): ?>
				<li>Roof Description: [roofmaterial]</li>
				<?php endif; ?>
				<?php if( isset($single_property->exterior)): ?>
				<li>Exterior: [exterior]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->roadtype)): ?>
				<li>Street Description: [roadtype]</li>
				<?php endif; ?>
				<?php /*if( isset($single_property->style)): ?>
				<li>Style: [style]</li>
				<?php endif;*/ ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Lot Features: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Waterview)): ?>
				<li>Water View: [unmapped_Waterview]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront YN: <?php if($single_property->unmapped->{'waterfrontflag'}=='Y'){echo "No";}else{echo "Yes";} ?></li>

				<?php endif; ?>	
				<?php if( isset($single_property->waterfront)): ?>
				<li>Waterfront Description: [waterfront]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->basement)): ?>
				<li>Basement: [basement]</li>
				<?php endif; ?>
				<?php if( isset($single_property->appliances)): ?>
				<li>Appliances: [appliances]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'AttachedGarageYN'})): ?>
				<li>Attached Garage YN: <?php if($single_property->unmapped->{'AttachedGarageYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'CommonWalls'})): ?>
				<li>Common Walls: [unmapped_CommonWalls]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'DoorFeatures'})): ?>
				<li>Door Features: [unmapped_DoorFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'FireplaceYN'})): ?>
				<li>Fireplace YN: <?php if($single_property->unmapped->{'FireplaceYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'GarageYN'})): ?>
				<li>Garage YN: <?php if($single_property->unmapped->{'GarageYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'PatioAndPorchFeatures'})): ?>
				<li>Patio And Porch Features: [unmapped_PatioAndPorchFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'PoolPrivateYN'})): ?>
				<li>Pool Private: <?php if($single_property->unmapped->{'PoolPrivateYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Basement Area SqFt'})): ?>
				<li>Basement Area Sq Ft: [unmapped_Basement Area SqFt]</li>
				<?php endif; ?>
				<?php if( isset($single_property->location)): ?>
				<li>Entry Location: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->basementfeature)): ?>
				<li>Basement Description: [basementfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2DSCRP)): ?>
				<li>Bedroom2 Features: [bed2DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3DSCRP)): ?>
				<li>Bedroom3 Features: [bed3DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4DSCRP)): ?>
				<li>Bedroom4 Features: [bed4DSCRP]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Dining Room Features: [dindscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Fireplace)): ?>
				<li>Fireplace: [unmapped_Fireplace]</li>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<li>Fireplaces: [fireplaces]</li>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<li>Flooring: [flooring]</li>
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<li>Interior Features: [interiorfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->laundryfeatures)): ?>
				<li>Laundry Features: [laundryfeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->totalrooms)): ?>
				<li>Rooms Total: [totalrooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'TotalActualRent'})): ?>
				<li>Total Actual Rent: [unmapped_TotalActualRent]</li>
				<?php endif; ?>


				<?php if( isset($single_property->unmapped->{'unit1Bedrooms'})): ?>
				<li>Unit1 Bedrooms: [unmapped_unit1Bedrooms]</li>
				<?php endif; ?>


				<?php if( isset($single_property->unmapped->{'unit1FullBaths'})): ?>
				<li>Unit1 Full Baths: [unmapped_unit1FullBaths]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'unit2Bedrooms'})): ?>
				<li>Unit2 Bedrooms: [unmapped_unit2Bedrooms]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'unit2FullBaths'})): ?>
				<li>Unit2 Full Baths: [unmapped_unit2FullBaths]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'unit2Rooms'})): ?>
				<li>Unit2 Rooms: [unmapped_unit2Rooms]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'LandLeaseYN'})): ?>
				<li>Land Lease YN: <?php if($single_property->unmapped->{'LandLeaseYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'NewConstructionYN'})): ?>
				<li>New Construction: <?php if($single_property->unmapped->{'NewConstructionYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'PropertyAttachedYN'})): ?>
				<li>Property Attached YN: <?php if($single_property->unmapped->{'PropertyAttachedYN'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'nitrogenSensitiveArea'})): ?>
				<li>Nitrogen Sensitive Area: <?php if($single_property->unmapped->{'nitrogenSensitiveArea'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'floodInsurenceRequired'})): ?>
				<li>Flood Insurance Required: <?php if($single_property->unmapped->{'floodInsurenceRequired'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'SpecialListingConditions'})): ?>
				<li>Special List Conditions: [unmapped_SpecialListingConditions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'waterviewType'})): ?>
				<li>Waterview Type: [unmapped_waterviewType]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'View'})): ?>
				<li>View: [unmapped_View]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'floodZone'})): ?>
				<li>Flood Zone: [unmapped_floodZone]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'RoadFrontageType'})): ?>
				<li>Road Frontage Type: [unmapped_RoadFrontageType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Management'})): ?>
				<li>Management: [unmapped_Management]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'milesToBeach'})): ?>
				<li>Miles From Beach: [unmapped_milesToBeach]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'membershipRequired'})): ?>
				<li>Membership Required: <?php if($single_property->unmapped->{'membershipRequired'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'RoadResponsibility'})): ?>
				<li>Road Responsibility: [unmapped_RoadResponsibility]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'improvementAssesment'})): ?>
				<li>Improvement Assessments: [unmapped_improvementAssesment]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'landAssesment'})): ?>
				<li>Land Assessments: [unmapped_landAssesment]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'otherAssesment'})): ?>
				<li>Other Assessments: [unmapped_otherAssesment]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'kitchenDiningCombo'})): ?>
				<li>Kitchen Dining Combo: <?php if($single_property->unmapped->{'kitchenDiningCombo'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'livingDiningCombo'})): ?>
				<li>Living Dining Combo: <?php if($single_property->unmapped->{'livingDiningCombo'}==false){echo "No";}else{echo "Yes";} ?></li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'complexCompleted'})): ?>
				<li>Complex Completed: [unmapped_complexCompleted]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'RoomMasterBedroomLevel'})): ?>
				<li>Master Bedroom Level: [unmapped_RoomMasterBedroomLevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->warranty)): ?>
				<li>Home Warranty YN: <?php echo $single_property->warranty=='Y'?"Yes":"No"?></li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Community Features: [termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Property Condition: [sitecondition]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'YearBuiltEffective'})): ?>
				<li>Year Built Effective: [unmapped_YearBuiltEffective]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Kitchen/Dining Combo'})): ?>
				<li>Kitchen Dining Combo: [unmapped_Kitchen/Dining Combo]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Kitchen Features: [kitdscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Living Room Features: [livdscrp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom'})): ?>
				<li>Master Bedroom: [unmapped_Master Bedroom]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Master Bedroom: Master Bedroom Level'})): ?>
				<li>Master Bedroom Level: [unmapped_Master Bedroom: Master Bedroom Level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->norooms)): ?>
				<li>Total Rooms: [norooms]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assocsecurity)): ?>
				<li>Security: [assocsecurity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'StructureType'})): ?>
				<li>Structure Type: [unmapped_StructureType]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'}) ||  isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) || isset($single_property->unmapped->{'CoolingYN'}) || isset($single_property->unmapped->{'HeatingYN'})  ):?>
    <li class="cell">
    <?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) || isset($single_property->unmapped->{'CoolingYN'}) || isset($single_property->unmapped->{'HeatingYN'}) ):?>
        <h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
            <ul class="zy-sub-list">
            
                    <?php if( isset($single_property->cooling)): ?>
                    <li>Cooling: [cooling]</li>
                    <?php endif; ?>
                    <?php if( isset($single_property->heating)): ?>
                    <li>Heating: [heating]</li>
                    <?php endif; ?>
                    <?php if( isset($single_property->hotwater)): ?>
                    <li>Hot Water: [hotwater]</li>
                    <?php endif; ?>
                    <?php if( isset($single_property->unmapped->{'Hot Water Source'})): ?>
                    <li>Hot Water Source: <?php echo $single_property->unmapped->{'Hot Water Source'}; ?></li>
                    <?php endif; ?>    
                    <?php if( isset($single_property->unmapped->{'CoolingYN'})): ?>
					 <li>Cooling YN: <?php echo $single_property->unmapped->{'CoolingYN'} ? 'Yes' : 'No'; ?></li>
                    <?php endif; ?>    
                    <?php if( isset($single_property->unmapped->{'HeatingYN'})): ?>
                    <li>Heating YN: <?php echo $single_property->unmapped->{'HeatingYN'} ? 'Yes' : 'No'; ?></li>
                    <?php endif; ?>    
                    
					  
                    <?php if( isset($single_property->utilities)): ?>
                    <li>Utilities: [utilities]</li>
                    <?php endif; ?>  
            </ul>
    <?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'}) || isset($single_property->gradeschool) ):?>
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
					<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'})): ?>
                    <li>School District: <?php echo $single_property->unmapped->{'HighSchoolDistrict'}; ?></li>
                    <?php endif; ?>  
            </ul>
    <?php endif; ?>
    </li>
<?php endif; ?>

<?php if( isset($single_property->unmapped->{'OpenParkingYN'}) || isset($single_property->parkingfeature)|| isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->totalassessedvalue) || isset($single_property->unmapped->{'Other Assessments'}) ):?>
    <li class="cell">
    <?php if( isset($single_property->feeinterval) || isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->totalassessedvalue) || isset($single_property->unmapped->{'Other Assessments'}) ):?>
        <h3 class="zy-feature-title">Taxes, Fees</h3>
        <ul class="zy-sub-list">
        
                <?php if( isset($single_property->taxes)): ?>
                <li>Annual Taxes: [taxes]</li>
                <?php endif; ?>
                <?php if( isset($single_property->taxyear)): ?>
                <li>Tax Year: [taxyear]</li>
                <?php endif; ?>
                <?php if( isset($single_property->totalassessedvalue)): ?>
                <li>Total Assessment: [totalassessedvalue]</li>
                <?php endif; ?>
                <?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
                <li>Other Assessments: [unmapped_Other Assessments]</li>
                <?php endif; ?> 
                <?php if( isset($single_property->reqdownassociation)): ?>
                <li>Association YN: <?php echo $single_property->reqdownassociation=='Y' ? 'Yes' : 'No'; ?></li>
                <?php endif; ?>
				<?php if( isset($single_property->feeinterval)): ?>
                <li>Association Fee Frequency: [feeinterval]</li>
                <?php endif; ?>    
                <?php if( isset($single_property->unmapped->{'TaxAssessedValue'})): ?>
                <li>Tax Assessed Value: [unmapped_TaxAssessedValue]</li>
                <?php endif; ?>    
                <?php if( isset($single_property->unmapped->{'TaxBookNumber'})): ?>
                <li>Tax Book Number: [unmapped_TaxBookNumber]</li>
                <?php endif; ?>    
        </ul>
    <?php endif; ?>
	<?php if( isset($single_property->unmapped->{'OpenParkingYN'}) || isset($single_property->parkingfeature) ):?>
        <h3 class="zy-feature-title">Parking Information</h3>
        <ul class="zy-sub-list">
        
            
                <?php if( isset($single_property->unmapped->{'OpenParkingYN'})): ?>
                <li>Open Parking: <?php echo $single_property->unmapped->{'OpenParkingYN'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?>    
                <?php if( isset($single_property->parkingfeature)): ?>
                <li>Parking Features: [parkingfeature]</li>
                <?php endif; ?>
                
        </ul>
    <?php endif; ?>

    </li>
<?php endif; ?>

</ul>