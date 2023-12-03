<ul class="zy-features-grid">
	
	<li class="cell">
		<?php if( isset($single_property->unmapped->{"shrtTOWNCODE"}) || isset($single_property->unmapped->{"Total Acres"}) ): ?>
		<h3 class="zy-feature-title">Main Frame </h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Total Acres"})): ?>
			<li>Acres: [unmapped_Total Acres]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->unmapped->{"shrtTOWNCODE"})): ?>
			<li>Neighborhood: [unmapped_shrtTOWNCODE]</li>
			<?php endif; ?>		
		</ul>	
		<?php endif; ?>
		
		<?php if( 
			isset($single_property->unmapped->{"Depth Feet"}) || isset($single_property->unmapped->{"Front Feet"}) || isset($single_property->unmapped->DESCRIPTION) || isset($single_property->unmapped->{"SEPTIC SYSTEM"}) || isset($single_property->unmapped->{"SITE/AREA FEATURES"}) ||
			isset($single_property->unmapped->TERRAIN) || isset($single_property->unmapped->TREES) || isset($single_property->improvements) || isset($single_property->location) || isset($single_property->unmapped->{"Mapsco Grid"}) ||
			isset($single_property->unmapped->MISCELLANEOUS) || isset($single_property->termsfeature) || isset($single_property->restrictions) || isset($single_property->squarefeetsource) ||
			
			isset($single_property->unmapped->{"# Barn Stalls"}) || isset($single_property->unmapped->{"Compass Point from SA"}) || isset($single_property->unmapped->{"TYPE OF CONSTRUCTION"}) || isset($single_property->unmapped->{"DISTANCE FRM S.A."}) || isset($single_property->unmapped->{"IRRIGATION WELLS"}) ||
			isset($single_property->unmapped->{"LOT IMPROVEMENTS"}) || isset($single_property->unmapped->{"ROAD FRONTAGE"}) || isset($single_property->unmapped->{"TERRAIN"}) || isset($single_property->unmapped->{"Agric"}) || isset($single_property->unmapped->{"Available w/ Lease"}) ||
			isset($single_property->unmapped->{"Disabled"}) || isset($single_property->documentsonfile) || isset($single_property->unmapped->{"Homestead"}) || isset($single_property->unmapped->{"Mineral Owned by Seller"}) || isset($single_property->unmapped->{"MINERAL RIGHTS"}) ||
			isset($single_property->restrictions) || isset($single_property->unmapped->{"SHALLOW WATER"}) || isset($single_property->unmapped->{"Potential Short Sale"}) || isset($single_property->unmapped->{"PRESENT USE"}) || isset($single_property->termsfeature) ||
			isset($single_property->unmapped->{"Value/Impr"}) ): ?>
		<h3 class="zy-feature-title">Property Features</h3>	
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Depth Feet"})): ?>
			<li>Depth Feet: [unmapped_Depth Feet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Front Feet"})): ?>
			<li>Front Feet: [unmapped_Front Feet]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->DESCRIPTION)): ?>
			<li>Lot Description: [unmapped_DESCRIPTION]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"SEPTIC SYSTEM"})): ?>
			<li>Septic System: [unmapped_SEPTIC SYSTEM]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"SITE/AREA FEATURES"})): ?>
			<li>Site Features: [unmapped_SITE/AREA FEATURES]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->TERRAIN)): ?>
			<li>Terrain: [unmapped_TERRAIN]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->TREES)): ?>
			<li>Trees: [unmapped_TREES]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->improvements)): ?>
			<li>Improvements: [improvements]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->location)): ?>
			<li>Location: [location]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->unmapped->{"Mapsco Grid"})): ?>
			<li>Maps Co Grid: [unmapped_Mapsco Grid]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MISCELLANEOUS)): ?>
			<li>Miscellaneous: [unmapped_MISCELLANEOUS]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Proposed Terms: [termsfeature]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->restrictions)): ?>
			<li>Restrictions: [restrictions]</li>
			<?php endif; ?>	
			<?php if( isset($single_property->squarefeetsource)): ?>
			<li>Source Sq Ft1: [squarefeetsource]</li>
			<?php endif; ?>		

			<?php if( isset($single_property->unmapped->{"# Barn Stalls"})): ?>
			<li>Barn Stalls: [unmapped_# Barn Stalls]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Compass Point from SA"})): ?>
			<li>Compass Point from SA: [unmapped_Compass Point from SA]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"TYPE OF CONSTRUCTION"})): ?>
			<li>Construction Type: [unmapped_TYPE OF CONSTRUCTION]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"DISTANCE FRM S.A."})): ?>
			<li>Distance From SA: [unmapped_DISTANCE FRM S.A.]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"IRRIGATION WELLS"})): ?>
			<li>Irrigation Wells: [unmapped_IRRIGATION WELLS]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"LOT IMPROVEMENTS"})): ?>
			<li>Lot Improvements: [unmapped_LOT IMPROVEMENTS]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"ROAD FRONTAGE"})): ?>
			<li>Road Frontage: [unmapped_ROAD FRONTAGE]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"TERRAIN"})): ?>
			<li>Terrain: [unmapped_TERRAIN]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Agric"})): ?>
			<li>Agric: [unmapped_Agric]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Available w/ Lease"})): ?>
			<li>Available With Lease: [unmapped_Available w/ Lease]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->Disabled)): ?>
			<li>Disabled: [unmapped_Disabled]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->documentsonfile)): ?>
			<li>Documents Available: [documentsonfile]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->Homestead)): ?>
			<li>Homestead: [unmapped_Homestead]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Mineral Owned by Seller"})): ?>
			<li>Mineral Owned by Seller: [unmapped_Mineral Owned by Seller]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"MINERAL RIGHTS"})): ?>
			<li>MINERAL RIGHTS: [unmapped_MINERAL RIGHTS]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->restrictions)): ?>
			<li>Restrictions: [restrictions]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"SHALLOW WATER"})): ?>
			<li>Shallow Water: [unmapped_SHALLOW WATER]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Potential Short Sale"})): ?>
			<li>Potential Short Sale: [unmapped_Potential Short Sale]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"PRESENT USE"})): ?>
			<li>Present Use: [unmapped_PRESENT USE]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->termsfeature)): ?>
			<li>Proposed Terms: [termsfeature]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->unmapped->{"Value/Impr"})): ?>
			<li>Value Impr : [unmapped_Value/Impr]</li>
			<?php endif; ?>			
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>	
			
		</ul>	
		<?php endif; ?>
		
		<?php if( 
		isset($single_property->cultivationacres) || isset($single_property->pastureacres) ||  isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
		<h3 class="zy-feature-title">Land Details</h3>
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
			
			<?php if( za_is_ygl( $single_property ) ): ?>
			
			<?php if( isset($single_property->rentprice)): ?>
			<li>Rent Amount: [rentprice]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unitlevel)): ?>
			<li>Unit Level: [unitlevel]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Parking: [parkingfeature]</li>
			<?php endif; ?>				
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<li>Rent Includes: [rentfeeincludes]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Fee Paid By Owner: [reqdownassociation]</li>
			<?php endif; ?>			
			<?php if( isset($single_property->laundryfeatures)): ?>
			<li>Laundry: [laundryfeatures]</li>
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
		</ul>					
		<?php endif; ?>
	</li>			
	
	<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) ||  isset($single_property->water) || isset($single_property->unmapped->{"UTILITIES ON SITE"}) ||
			  isset($single_property->unmapped->{"Utility Supplier"}) || isset($single_property->gas) || isset($single_property->unmapped->{"Utility Supplier: Other"}) || isset($single_property->utilities) ):?>
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

				<?php if( isset($single_property->unmapped->{"UTILITIES ON SITE"})): ?>
				<li>Utilities On Site: [unmapped_UTILITIES ON SITE]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Utility Supplier"})): ?>
				<li>Utility Supplier Garbage: [unmapped_Utility Supplier]</li>
				<?php endif; ?>
				<?php if( isset($single_property->gas)): ?>
				<li>Utility Supplier Gas: [gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Utility Supplier: Other"})): ?>
				<li>Utility Supplier Other: [unmapped_Utility Supplier: Other]</li>
				<?php endif; ?>
				
				<?php if( isset($single_property->utilities) ): ?>
				<li>Utilities Available: [utilities]</li>
				<?php endif; ?>
			
		</ul>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->unmapped->{"County Tax"}) || isset($single_property->unmapped->{"Other Tax"}) || 
				  isset($single_property->unmapped->{"School Tax"}) || isset($single_property->unmapped->{"Taxed by Mltpl Counties"}) || isset($single_property->unmapped->{"City Tax"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Total Tax: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning Code: [zoning]</li> <!-- not done -->
				<?php endif; ?>
				
				<?php if( isset($single_property->unmapped->{"County Tax"})): ?>
				<li>City Tax: [unmapped_City Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"County Tax"})): ?>
				<li>County Tax: [unmapped_County Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>HOA Mandatory: [reqdownassociation]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Other Tax"})): ?>
				<li>Other Tax: [unmapped_Other Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"School Tax"})): ?>
				<li>School Tax: [unmapped_School Tax]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{"Taxed by Mltpl Counties"})): ?>
				<li>Taxed By Multiple Counties: [unmapped_Taxed by Mltpl Counties]</li>
				<?php endif; ?>	
				
			
		</ul>
		<?php endif; ?>
	</li>		
	
	<?php if( 
	isset($single_property->gradeschool) || 
	isset($single_property->middleschool) || 
	isset($single_property->highschool) ||
	isset($single_property->schooldistrict)
	):?>
	<li class="cell">	
		<h3 class="zy-feature-title">School Information</h3>
		<ul class="zy-sub-list">

			<?php if( isset($single_property->gradeschool)): ?>
			<li>Elementary School: [gradeschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->middleschool)): ?>
			<li>Middle School: [middleschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->highschool)): ?>
			<li>High School: [highschool]</li>
			<?php endif; ?>
			<?php if( isset($single_property->schooldistrict)): ?>
			<li>School District: [schooldistrict]</li>
			<?php endif; ?>			

		</ul>
	</li>		
	<?php endif; ?>
</ul>