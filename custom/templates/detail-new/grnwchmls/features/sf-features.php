<ul class="zy-features-grid">
	<?php if( isset($single_property->beachownership) || isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->unmapped->{'Fuel Type'}) || isset($single_property->assessedvaluebldg) || isset($single_property->unmapped->{'leadpaint'}) || isset($single_property->unmapped->{'Lot Size Source'})|| isset($single_property->propsubtype) || isset($single_property->unmapped->{'Separate Living Qtrs'}) || isset($single_property->unmapped->{'Sewer: Septic Tank'}) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->unmapped->{'SqFt Source'}) || isset($single_property->water) || isset($single_property->yearbuiltdescrp) || isset($single_property->yearround) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features </h3>	
		<ul class="zy-sub-list">
		
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
				<li>Waterfront: [waterfrontflag]</li>
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
				<li>Warranty Available: [warranty]</li>
				<?php endif; ?>
				<?php if( isset($single_property->termsfeature)): ?>
				<li>Community Features: [termsfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->sitecondition)): ?>
				<li>Year Built Description: [sitecondition]</li>
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
				<li>Security Features: [assocsecurity]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'StructureType'})): ?>
				<li>Structure Type: [unmapped_StructureType]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'CityRegion'})): ?>
				<li>City Region: [unmapped_CityRegion]</li>
				<?php endif; ?>
				<?php if( isset($single_property->buyerbrokercomp)): ?>
				<li>Compensation Buyer Agency: [buyerbrokercomp]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Inclusions'})): ?>
				<li>Inclusions: [unmapped_Inclusions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'WindowFeatures'})): ?>
				<li>Window Features: [unmapped_WindowFeatures]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'generalPropertyGarageDesc'})): ?>
				<li>Garage Desc: [unmapped_generalPropertyGarageDesc]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'primaryBedroomLevelA'})): ?>
				<li>Primary Bedroom Level A: [unmapped_primaryBedroomLevelA]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'primaryBedroomLevelB'})): ?>
				<li>Primary Bedroom Level B: [unmapped_primaryBedroomLevelB]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'primaryBedroomLevelD'})): ?>
				<li>Primary Bedroom Level D: [unmapped_primaryBedroomLevelD]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'diningRoomFormalYN'})): ?>
				<li>Dining Room Formal: [unmapped_diningRoomFormalYN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'propertyRentInfo'})): ?>
				<li>For Rent: [unmapped_propertyRentInfo]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'propertyOwnerFinancing'})): ?>
				<li>Owner Financing: [unmapped_propertyOwnerFinancing]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'yearOfRenovation'})): ?>
				<li>Year Of Renovations: [unmapped_yearOfRenovation]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{'isPool'})): ?>
				<li>Pool: [unmapped_isPool]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'compensationDisclaimer'})): ?>
				<li>Compensation Disclaimer: [unmapped_compensationDisclaimer]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'ccIncludedGroundCare'})): ?>
                    <li>Cc Included Grounds Care: <?php echo $single_property->unmapped->{'ccIncludedGroundCare'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?>   
				<?php if( isset($single_property->unmapped->{'ccIncludedSnowRemoval'})): ?>
                    <li>Cc Included Snow Removal: <?php echo $single_property->unmapped->{'ccIncludedSnowRemoval'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?> 
				<?php if( isset($single_property->unmapped->{'ccIncludedCoTaxes'})): ?>
                    <li>Cc Included Taxes: <?php echo $single_property->unmapped->{'ccIncludedCoTaxes'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?> 
				<?php if( isset($single_property->unmapped->{'ccIncludedTrashRemoval'})): ?>
                    <li>Cc Included Trash Removal: <?php echo $single_property->unmapped->{'ccIncludedTrashRemoval'} ? 'Yes' : 'No'; ?></li>
                <?php endif; ?> 
				<?php if( isset($single_property->unmapped->{'condoAssociation'})): ?>
				<li>Condo Association: [unmapped_condoAssociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'condoInfoCoopCharges'})): ?>
				<li>Condo Coop Info Coop Charges: [unmapped_condoInfoCoopCharges]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'condoCoopInfoCommercialCharges'})): ?>
				<li>Condo Coop Info Coop Charges: [unmapped_condoCoopInfoCommercialCharges]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'condoInfoCoopShares'})): ?>
				<li>Condo Coop Info Coop Shares: [unmapped_condoInfoCoopShares]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'condoCoopInfoHeatInclusions'})): ?>
				<li>Condo Coop Info Heat Incl: [unmapped_condoCoopInfoHeatInclusions]</li>
				<?php endif; ?>

				<?php if( isset($single_property->unmapped->{'condoCoopInfoWaterInclusion'})): ?>
				<li>Condo Coop Info Water Incl: [unmapped_condoCoopInfoWaterInclusion]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				
				
			
		</ul>
	</li>						
	<?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'}) ||  isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) || isset($single_property->unmapped->{'CoolingYN'}) || isset($single_property->unmapped->{'HeatingYN'}) || isset($single_property->utilities) ):?>
    <li class="cell">
    <?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->hotwater) || isset($single_property->unmapped->{'Hot Water Source'}) || isset($single_property->unmapped->{'CoolingYN'}) || isset($single_property->unmapped->{'HeatingYN'}) || isset($single_property->utilities) ):?>
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
	<?php if( isset($single_property->homeownassociation) || isset($single_property->reqdownassociation)||isset($single_property->unmapped->{'AssociationName2'}) ):?>
            <h3 class="zy-feature-title">Association Information</h3>
            <ul class="zy-sub-list">
                    <?php if( isset($single_property->homeownassociation)): ?>
                    <li>Association Name: [homeownassociation]</li>
                    <?php endif; ?> 
					<?php if( isset($single_property->reqdownassociation)): ?>
                    <li>Association YN: <?php echo $single_property->reqdownassociation=='Y'?"Yes":"No"; ?></li>
                    <?php endif; ?>
					<?php if( isset($single_property->unmapped->{'AssociationName2'})): ?>
                    <li>Association Name2: <?php echo $single_property->unmapped->{'AssociationName2'}; ?></li>
                    <?php endif; ?> 
            </ul>
    <?php endif; ?>
	<?php if( isset($single_property->unmapped->{'HighSchoolDistrict'}) ||  isset($single_property->gradeschool) || isset($single_property->middleschool)):?>
            <h3 class="zy-feature-title">School Information</h3>
            <ul class="zy-sub-list">
					<?php if( isset($single_property->gradeschool)): ?>
                    <li>Elementary School: [gradeschool]</li>
                    <?php endif; ?>  
					<?php if( isset($single_property->middleschool)): ?>
                    <li>Middle School: [middleschool]</li>
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
    <?php if( isset($single_property->cooling) || isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->totalassessedvalue) || isset($single_property->unmapped->{'Other Assessments'}) ):?>
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
                <li>Association YN: [reqdownassociation]</li>
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