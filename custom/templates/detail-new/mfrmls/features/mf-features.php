<?php if($single_property->proptype=='Multi Unit 2-4'){ ?>

<ul class="zy-features-grid">
	<?php if( isset($single_property->exterior) || isset($single_property->foundation) || isset($single_property->lotdescription) || isset($single_property->pooldescription) || isset($single_property->roofmaterial) || 
			  isset($single_property->style) || isset($single_property->unmapped->Type) || isset($single_property->unmapped->View) || isset($single_property->waterviewfeatures) || isset($single_property->unmapped->{"Yard/Grnd"}) || 
			  isset($single_property->basement) || isset($single_property->flooring) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->Auction) || isset($single_property->unmapped->{"Cap Rate"}) || 
			  isset($single_property->unmapped->{"Common Int Dev"}) || isset($single_property->unmapped->{"Common/Rec"}) || isset($single_property->secdeposit) || isset($single_property->unmapped->{"Est Ann Net Income"}) || isset($single_property->unmapped->{"Est. Insurance Exp."}) || 
			  isset($single_property->unmapped->{"Est. Maintenance Exp"}) || isset($single_property->unmapped->{"Est. Management"}) || isset($single_property->unmapped->{"Est. Misc. Expenses"}) || isset($single_property->unmapped->{"Est. Utilities Exp."}) || isset($single_property->expensessource) || 
			  isset($single_property->unmapped->GRM) || isset($single_property->grossannualincome) || isset($single_property->grossannualexp) || isset($single_property->unmapped->{"Lot Size Source"}) || isset($single_property->unmapped->{"Monthly Expenses"}) || 
			  isset($single_property->unmapped->{"Monthly Income"}) || isset($single_property->unmapped->{"New Construct/Resale"}) || isset($single_property->unmapped->{"Operating Exp Inc"}) || isset($single_property->unmapped->{"Planned Unit Develop"}) || isset($single_property->unmapped->{"Projected or Actual"}) || 
			  isset($single_property->unmapped->{"Property Mgmt Co"}) || isset($single_property->assocsecurity) || isset($single_property->unmapped->{"Separate Meters"}) || isset($single_property->unmapped->{"Sewer/Septic"}) || isset($single_property->unmapped->{"Special Zones"}) || 
			  isset($single_property->squarefeetsource) || isset($single_property->unmapped->{"Subject to Crt Conf"}) || isset($single_property->tenantexpanses) || isset($single_property->unmapped->{"Unit 1 Access Feat"}) || isset($single_property->unmapped->{"Unit 1 Approx SqFt"}) || 
			  isset($single_property->unmapped->{"Unit 1 Baths Full"}) || isset($single_property->unmapped->{"Unit 1 Bedrooms"}) || isset($single_property->unmapped->{"Unit 1 Half Baths"}) || isset($single_property->unmapped->{"Unit 1 Includes"}) || isset($single_property->unmapped->{"Unit 1 SqFt Source"}) || 
			  isset($single_property->unmapped->{"Unit 1 Total Rooms"}) || isset($single_property->unmapped->{"Unit 1 Occupancy"}) || isset($single_property->unmapped->{"Unit 1 Lease Term"}) || isset($single_property->unmapped->{"Unit 1 Rents for"}) || isset($single_property->unmapped->{"Unit 2 Access Feat"}) || 
			  isset($single_property->unmapped->{"Unit 2 Approx SqFt"}) || isset($single_property->unmapped->{"Unit 2 Baths Full"}) || isset($single_property->unmapped->{"Unit 2 Bedrooms"}) || isset($single_property->unmapped->{"Unit 2 Half Baths"}) || isset($single_property->unmapped->{"Unit 2 Includes"}) || 
			  isset($single_property->unmapped->{"Unit 2 SqFt Source"}) || isset($single_property->unmapped->{"Unit 2 Total Rooms"}) || isset($single_property->unmapped->{"Unit 2 Occupancy"}) || isset($single_property->unmapped->{"Unit 2 Lease Term"}) || isset($single_property->unmapped->{"Unit 2 Rents for"}) || 
			  isset($single_property->unmapped->{"Unit 3 Approx SqFt"}) || isset($single_property->unmapped->{"Unit 3 Total Rooms"}) || isset($single_property->unmapped->{"Unit 3 Rents for"}) || isset($single_property->unmapped->{"Unit 4 Approx SqFt"}) || isset($single_property->unmapped->{"Unit 4 Total Rooms"}) || 
			  isset($single_property->unmapped->{"Unit 4 Rents for"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pooldescription)): ?>
			<li>Pool: [pooldescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->style)): ?>
			<li>Style: [style]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Type)): ?>
			<li>Type: [unmapped_Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Water Views: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Yard/Grnd"})): ?>
			<li>Yard Grounds: [unmapped_Yard/Grnd]</li>
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<li>Basement: [basement]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Floors: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Appliance: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cap Rate"})): ?>
			<li>Cap Rate: [unmapped_Cap Rate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Common Int Dev"})): ?>
			<li>Common Int Dev: [unmapped_Common Int Dev]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Common/Rec"})): ?>
			<li>Common Rec: [unmapped_Common/Rec]</li>
			<?php endif; ?>
			<?php if( isset($single_property->secdeposit)): ?>
			<li>Deposits: [secdeposit]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Ann Net Income"})): ?>
			<li>Est Ann Net Income: [unmapped_Est Ann Net Income]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Insurance Exp."})): ?>
			<li>Est Insurance Exp: [unmapped_Est. Insurance Exp.]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Maintenance Exp"})): ?>
			<li>Est Maintenance Exp: [unmapped_Est. Maintenance Exp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Management"})): ?>
			<li>Est Management: [unmapped_Est. Management]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Misc. Expenses"})): ?>
			<li>Est Misc Expenses: [unmapped_Est. Misc. Expenses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Utilities Exp."})): ?>
			<li>Est Utilities Exp: [unmapped_Est. Utilities Exp.]</li>
			<?php endif; ?>
			<?php if( isset($single_property->expensessource)): ?>
			<li>Expense Source: [expensessource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GRM)): ?>
			<li>GRM: [unmapped_GRM]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualexp)): ?>
			<li>Gross Annual Expences: [grossannualexp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Source"})): ?>
			<li>Lot Size Source: [unmapped_Lot Size Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Monthly Expenses"})): ?>
			<li>Monthly Expenses: [unmapped_Monthly Expenses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Monthly Income"})): ?>
			<li>Monthly Income: [unmapped_Monthly Income]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"New Construct/Resale"})): ?>
			<li>New Construction Or Resale: [unmapped_New Construct/Resale]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Operating Exp Inc"})): ?>
			<li>Operating Exp Inc: [unmapped_Operating Exp Inc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Planned Unit Develop"})): ?>
			<li>Planned Unit Develop: [unmapped_Planned Unit Develop]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Projected or Actual"})): ?>
			<li>Projected Or Actual: [unmapped_Projected or Actual]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Mgmt Co"})): ?>
			<li>Property Mgmt Co: [unmapped_Property Mgmt Co]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Safety Security: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Separate Meters"})): ?>
			<li>Separate Meters: [unmapped_Separate Meters]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Sewer/Septic"})): ?>
			<li>Sewer Septic: [unmapped_Sewer/Septic]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Special Zones"})): ?>
			<li>Special Zones: [unmapped_Special Zones]</li>
			<?php endif; ?>
			<?php if( isset($single_property->squarefeetsource)): ?>
			<li>Square Footage Source: [squarefeetsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Subject to Crt Conf"})): ?>
			<li>Subject To Crt Conf: [unmapped_Subject to Crt Conf]</li>
			<?php endif; ?>
			<?php if( isset($single_property->tenantexpanses)): ?>
			<li>Tenant Pays: [tenantexpanses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Access Feat"})): ?>
			<li>Unit1 Access Feat: [unmapped_Unit 1 Access Feat]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Approx SqFt"})): ?>
			<li>Unit1 Approx Sq Ft: [unmapped_Unit 1 Approx SqFt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Baths Full"})): ?>
			<li>Unit1 Baths Full: [unmapped_Unit 1 Baths Full]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Bedrooms"})): ?>
			<li>Unit1 Bedrooms: [unmapped_Unit 1 Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Half Baths"})): ?>
			<li>Unit1 Half Baths: [unmapped_Unit 1 Half Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Includes"})): ?>
			<li>Unit1 Includes: [unmapped_Unit 1 Includes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 SqFt Source"})): ?>
			<li>Unit1 Sq Ft Source: [unmapped_Unit 1 SqFt Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Total Rooms"})): ?>
			<li>Unit1 Total Rooms: [unmapped_Unit 1 Total Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Occupancy"})): ?>
			<li>Unit1 Occupancy: [unmapped_Unit 1 Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Lease Term"})): ?>
			<li>Unit1 Lease Term: [unmapped_Unit 1 Lease Term]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 1 Rents for"})): ?>
			<li>Unit1 Rents for: [unmapped_Unit 1 Rents for]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Access Feat"})): ?>
			<li>Unit2 Access Feat: [unmapped_Unit 2 Access Feat]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Approx SqFt"})): ?>
			<li>Unit2 Approx Sq Ft: [unmapped_Unit 2 Approx SqFt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Baths Full"})): ?>
			<li>Unit2 Baths Full: [unmapped_Unit 2 Baths Full]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Bedrooms"})): ?>
			<li>Unit2 Bedrooms: [unmapped_Unit 2 Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Half Baths"})): ?>
			<li>Unit2 Half Baths: [unmapped_Unit 2 Half Baths]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Includes"})): ?>
			<li>Unit2 Includes: [unmapped_Unit 2 Includes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 SqFt Source"})): ?>
			<li>Unit2 Sq Ft Source: [unmapped_Unit 2 SqFt Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Total Rooms"})): ?>
			<li>Unit2 Total Rooms: [unmapped_Unit 2 Total Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Occupancy"})): ?>
			<li>Unit2 Occupancy: [unmapped_Unit 2 Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Lease Term"})): ?>
			<li>Unit2 Lease Term: [unmapped_Unit 2 Lease Term]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 2 Rents for"})): ?>
			<li>Unit2 Rents for: [unmapped_Unit 2 Rents for]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Approx SqFt"})): ?>
			<li>Unit3 Approx Sq Ft: [unmapped_Unit 3 Approx SqFt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Total Rooms"})): ?>
			<li>Unit3 Total Rooms: [unmapped_Unit 3 Total Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 3 Rents for"})): ?>
			<li>Unit3 Rents for: [unmapped_Unit 3 Rents for]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Approx SqFt"})): ?>
			<li>Unit4 Approx Sq Ft: [unmapped_Unit 4 Approx SqFt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Total Rooms"})): ?>
			<li>Unit4 Total Rooms: [unmapped_Unit 4 Total Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit 4 Rents for"})): ?>
			<li>Unit4 Rents for: [unmapped_Unit 4 Rents for]</li>
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
		<?php if( isset($single_property->unmapped->{"Energy Conservation"}) || isset($single_property->unmapped->Fireplace) || isset($single_property->sewer) || isset($single_property->utilities) || isset($single_property->unmapped->{"Water Source"}) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Energy Conservation"})): ?>
			<li>Energy Conservation: [unmapped_Energy Conservation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Fireplace"})): ?>
			<li>Fireplace: [unmapped_Fireplace]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer Utilities: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Water Source"})): ?>
			<li>Water Source: [unmapped_Water Source]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	
		<?php if( isset($single_property->garageparking) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->garageparking)): ?>
			<li>Garage Parking: [garageparking]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"City Transfer Tax"}) || isset($single_property->unmapped->{"Cty Transfer Tax Rat"}) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"City Transfer Tax"})): ?>
			<li>City Transfer Tax: [unmapped_City Transfer Tax]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->unmapped->{"Cty Transfer Tax Rat"})): ?>
			<li>City Transfer Tax Rate: [unmapped_Cty Transfer Tax Rat]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
	</li>
</ul>

<?php }else if($single_property->proptype=='Multi Unit 5+'){ ?>

<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{"# of Carport(s)"}) || isset($single_property->exterior) || isset($single_property->foundation) || isset($single_property->lotdescription) || isset($single_property->unmapped->{"# of Open/Uncovered"}) || 
			  isset($single_property->roofmaterial) || isset($single_property->unmapped->{"# of RV/Boat"}) || isset($single_property->unmapped->{"2 Story,Apartments"}) || isset($single_property->unmapped->{"# Underground"}) || isset($single_property->unmapped->{"# Furnished Units"}) || 
			  isset($single_property->unmapped->{"# of Guest Space(s)"}) || isset($single_property->laundryfeatures) || isset($single_property->unmapped->{"Operating Exp Inc"}) || isset($single_property->unmapped->{"Planned Unit Develop"}) || isset($single_property->unmapped->{"Property Mgmt Co"}) || 
			  isset($single_property->unmapped->{"1 Bdrm Ann Occupancy"}) || isset($single_property->unmapped->{"#of 1 Bdrms Occupied"}) || isset($single_property->unmapped->{"1 Bedroom Rent Range"}) || isset($single_property->unmapped->{"# of 1 Bedrooms"}) || isset($single_property->unmapped->{"2 Bdrm Ann Occupancy"}) || 
			  isset($single_property->unmapped->{"#of 2 Bdrms Occupied"}) || isset($single_property->unmapped->{"2 Bedroom Rent Range"}) || isset($single_property->unmapped->{"# of 2 Bedrooms"}) || isset($single_property->unmapped->{"3 Bdrm Ann Occupancy"}) || isset($single_property->unmapped->{"#of 3 Bdrms Occupied"}) || 
			  isset($single_property->unmapped->{"3 Bedroom Rent Range"}) || isset($single_property->unmapped->{"# of 3 Bedrooms"}) || isset($single_property->unmapped->{"4 Bdrm Ann Occupancy"}) || isset($single_property->unmapped->{"#of 4 Bdrms Occupied"}) || isset($single_property->unmapped->{"4 Bedroom Rent Range"}) || 
			  isset($single_property->unmapped->{"# of 4 Bedrooms"}) || isset($single_property->unmapped->{"Actual/Projected"}) || isset($single_property->unmapped->Auction) || isset($single_property->unmapped->{"Cap Rate"}) || isset($single_property->unmapped->{"# Commercial Units"}) || 
			  isset($single_property->unmapped->{"Common Int Dev"}) || isset($single_property->unmapped->{"Est. Insurance Exp."}) || isset($single_property->unmapped->{"Est. Maintenance Exp"}) || isset($single_property->unmapped->{"Est. Management"}) || isset($single_property->unmapped->{"Est. Misc. Expenses"}) || 
			  isset($single_property->unmapped->{"Est Net Income"}) || isset($single_property->unmapped->{"Est. Utilities Exp."}) || isset($single_property->expensessource) || isset($single_property->unmapped->GRM) || isset($single_property->grossannualincome) || 
			  isset($single_property->unmapped->{"Lease Deposit"}) || isset($single_property->unmapped->{"Lot Size Source"}) || isset($single_property->unmapped->{"Monthly Expenses"}) || isset($single_property->unmapped->{"Monthly Income"}) || isset($single_property->unmapped->{"Studio Ann Occupancy"}) || 
			  isset($single_property->unmapped->{"Studio Rent Range"}) || isset($single_property->unmapped->{"# of Studios"}) || isset($single_property->unmapped->{"# Studios Occupied"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"# of Carport(s)"})): ?>
			<li>Carports: [unmapped_# of Carport(s)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of Open/Uncovered"})): ?>
			<li>Open Uncovered Spaces: [unmapped_# of Open/Uncovered]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof Material: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of RV/Boat"})): ?>
			<li>Rv Boat Spaces: [unmapped_# of RV/Boat]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Type)): ?>
			<li>Type: [unmapped_Type]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# Underground"})): ?>
			<li>Type: [unmapped_# Underground]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# Furnished Units"})): ?>
			<li>Furnished Units: [unmapped_# Furnished Units]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of Guest Space(s)"})): ?>
			<li>Guest Spaces: [unmapped_# of Guest Space(s)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry Appliance: [laundryfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Operating Exp Inc"})): ?>
			<li>Operating Exp Inc: [unmapped_Operating Exp Inc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Planned Unit Develop"})): ?>
			<li>Planned Unit Develop: [unmapped_Planned Unit Develop]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Mgmt Co"})): ?>
			<li>Property Mgmt Co: [unmapped_Property Mgmt Co]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"1 Bdrm Ann Occupancy"})): ?>
			<li>1 Bdrm Ann Occupancy: [unmapped_1 Bdrm Ann Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"#of 1 Bdrms Occupied"})): ?>
			<li>1 Bdrms Occupied: [unmapped_#of 1 Bdrms Occupied]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"1 Bedroom Rent Range"})): ?>
			<li>1 Bedroom Rent Range: [unmapped_1 Bedroom Rent Range]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of 1 Bedrooms"})): ?>
			<li>1 Bedrooms: [unmapped_# of 1 Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"2 Bdrm Ann Occupancy"})): ?>
			<li>2 Bdrm Ann Occupancy: [unmapped_2 Bdrm Ann Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"#of 2 Bdrms Occupied"})): ?>
			<li>2 Bdrms Occupied: [unmapped_#of 2 Bdrms Occupied]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"2 Bedroom Rent Range"})): ?>
			<li>2 Bedroom Rent Range: [unmapped_2 Bedroom Rent Range]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of 2 Bedrooms"})): ?>
			<li>2 Bedrooms: [unmapped_# of 2 Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"3 Bdrm Ann Occupancy"})): ?>
			<li>3 Bdrm Ann Occupancy: [unmapped_3 Bdrm Ann Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"#of 3 Bdrms Occupied"})): ?>
			<li>3 Bdrms Occupied: [unmapped_#of 3 Bdrms Occupied]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"3 Bedroom Rent Range"})): ?>
			<li>3 Bedroom Rent Range: [unmapped_3 Bedroom Rent Range]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of 3 Bedrooms"})): ?>
			<li>3 Bedrooms: [unmapped_# of 3 Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"4 Bdrm Ann Occupancy"})): ?>
			<li>4 Bdrm Ann Occupancy: [unmapped_4 Bdrm Ann Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"#of 4 Bdrms Occupied"})): ?>
			<li>4 Bdrms Occupied: [unmapped_#of 4 Bdrms Occupied]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"4 Bedroom Rent Range"})): ?>
			<li>4 Bedroom Rent Range: [unmapped_4 Bedroom Rent Range]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of 4 Bedrooms"})): ?>
			<li>4 Bedrooms: [unmapped_# of 4 Bedrooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Actual/Projected"})): ?>
			<li>Actual Or Projected: [unmapped_Actual/Projected]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cap Rate"})): ?>
			<li>Cap Rate: [unmapped_Cap Rate]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# Commercial Units"})): ?>
			<li>Commercial Units: [unmapped_# Commercial Units]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Common Int Dev"})): ?>
			<li>Common Int Dev: [unmapped_Common Int Dev]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Insurance Exp."})): ?>
			<li>Est Insurance Exp: [unmapped_Est. Insurance Exp.]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Maintenance Exp"})): ?>
			<li>Est Maintenance Exp: [unmapped_Est. Maintenance Exp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Management"})): ?>
			<li>Est Management: [unmapped_Est. Management]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Misc. Expenses"})): ?>
			<li>Est Misc Expenses: [unmapped_Est. Misc. Expenses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Net Income"})): ?>
			<li>Est Net Income: [unmapped_Est Net Income]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est. Utilities Exp."})): ?>
			<li>Est Utilities Exp: [unmapped_Est. Utilities Exp.]</li>
			<?php endif; ?>
			<?php if( isset($single_property->expensessource)): ?>
			<li>Expense Source: [expensessource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->GRM)): ?>
			<li>GRM: [unmapped_GRM]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Inc: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lease Deposit"})): ?>
			<li>Lease Deposit: [unmapped_Lease Deposit]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lot Size Source"})): ?>
			<li>Lot Size Source: [unmapped_Lot Size Source]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Monthly Expenses"})): ?>
			<li>Monthly Expenses: [unmapped_Monthly Expenses]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Monthly Income"})): ?>
			<li>Monthly Income: [unmapped_Monthly Income]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Studio Ann Occupancy"})): ?>
			<li>Studio Ann Occupancy: [unmapped_Studio Ann Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Studio Rent Range"})): ?>
			<li>Studio Rent Range: [unmapped_Studio Rent Range]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of Studios"})): ?>
			<li>Studios: [unmapped_# of Studios]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# Studios Occupied"})): ?>
			<li>Studios Occupied: [unmapped_# Studios Occupied]</li>
			<?php endif; ?>
			
		</ul>
	</li>						
	<?php endif; ?>
	
	<li class="cell">
	
		<?php if( isset($single_property->unmapped->{"# of Garage(s)"}) || isset($single_property->unmapped->{"On Site Parking"}) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"# of Garage(s)"})): ?>
			<li>Garages: [unmapped_# of Garage(s)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"On Site Parking"})): ?>
			<li>On Site Parking: [unmapped_On Site Parking]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->heating) || isset($single_property->unmapped->{"Sewer/Septic"}) || isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->heating)): ?>
			<li>Heat/Cool: [heating]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Sewer/Septic"})): ?>
			<li>Sewer Utilities: [unmapped_Sewer/Septic]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->{"City Transfer Tax"}) || isset($single_property->unmapped->{"Cty Transfer Tax Rat"}) || isset($single_property->taxes) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"City Transfer Tax"})): ?>
			<li>City Transfer Tax: [unmapped_City Transfer Tax]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->unmapped->{"Cty Transfer Tax Rat"})): ?>
			<li>City Transfer Tax Rate: [unmapped_Cty Transfer Tax Rat]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
	</li>

</ul>

<?php } ?>