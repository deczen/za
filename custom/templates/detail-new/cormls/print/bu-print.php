<div class="zy-print-wrap">
	<div class="zy-print-header-top">
		<div class="zy-print-logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
		<div class="zy-print-title">
			<h4 class="my-5 uk-text-truncate" style="color: <?php echo $print_color; ?> !important;">
			   <?php echo zipperagent_get_address($single_property); ?> 
			</h4>
		</div>
	</div>
	 <div class="zy-print-left">
		<div class="uk-text-small mb-5">
		   <?php echo get_permalink(); ?>
		   <?php // echo $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
		</div>
		<?php	
		$img=array();
		if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
			$i=0;
			foreach ($single_property->photoList as $pic ){ 
				if( strpos($pic->imgurl, 'mlspin.com') !== false ):
					$img[]= "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=744&h=419&n={$i}";
				else:
					$img[]=$pic->imgurl;
				endif;
			$i++;
			}
		} ?>
		<?php if ( isset($img[0]) ) echo "<img src='$img[0]' />";?>			
		<h4 class="my-5 uk-text-truncate">
		   <?php echo zipperagent_get_address($single_property); ?> 
		</h4>
		<ul class="zy-print-meta">
			<?php if(isset($single_property->listprice)): ?>
		   <li>Price: $[realprice]</li>
			<?php endif; ?>
			<?php if(isset($single_property->status)): ?>
		   <li>Status: [status]</li>
			<?php endif; ?>
			<?php if(isset($single_property->syncAge)): ?>
		   <li>Updated: [syncAge] min ago</li>
			<?php endif; ?>
			<?php if(isset($single_property->id)): ?>
		   <li>[displaySource] #: [id]</li>
			<?php endif; ?>
		</ul>
		<table class="zy-print-meta-blocks">
		   <tr>
			<?php if(isset($single_property->style)): ?>
			  <td>
				 <div class="zy-print-meta-val">[style]</div>
				 <div class="zy-print-meta-label">House Style</div>
			  </td>
			<?php endif; ?>
			<?php /*if(isset($single_property->norooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[norooms]</div>
				 <div class="zy-print-meta-label">Total Rooms</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nobedrooms]</div>
				 <div class="zy-print-meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nofullbaths]</div>
				 <div class="zy-print-meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nohalfbaths]</div>
				 <div class="zy-print-meta-label">&frac12; Baths</div>
			  </td>
			<?php endif;*/ ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print-meta-val">[squarefeet]</div>
				 <div class="zy-print-meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print-meta-val">[acre]</div>
				 <div class="zy-print-meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="zy-print-meta-val">$170</div>
				 <div class="zy-print-meta-label">$/SQFT</div>
			  </td>  ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <td>
				 <div class="zy-print-meta-val">[yearbuilt]</div>
				 <div class="zy-print-meta-label">Built</div>
			  </td>
			<?php endif;*/ ?>
		   </tr>
		</table>
		<div class="zy-print-area-wrap">
		   <div class="zy-print-area">
			<?php /*if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Neighborhood:</div>
				 <div class="zy-print-area-val">[neighborhood]</div>
			  </div>
			<?php endif;*/ ?>
			<?php if(isset($single_property->location)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Location:</div>
				 <div class="zy-print-area-val">[location]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->proptype)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Type:</div>
				 <div class="zy-print-area-val">[proptype]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Built:</div>
				 <div class="zy-print-area-val">[yearbuilt]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">County:</div>
				 <div class="zy-print-area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->shrtTOWNCODE)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Area:</div>
				 <div class="zy-print-area-val">[shrtTOWNCODE]</div>
			  </div>
			<?php endif; ?>
		   </div>
		   <div class="zy-print-area">
		   </div>
		</div>
		<?php if(isset($single_property->remarks)): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Description</h6>
		   <div class="zy-print-description">[remarks]</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($single_property->direction)): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="zy-print-description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Type</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitno)): ?>
			  <strong>Unit No</strong>
			  [unitno]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Located on Floor'})): ?>
			  <strong>Located on Floor</strong>
			  [unmapped_Located on Floor]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Levels)): ?>
			  <strong>Levels</strong>
			  [unmapped_Levels]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->style)): ?>
			  <strong>House Style</strong>
			  [style]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->vacant)): ?>
			  <strong>Vacant</strong>
			  [vacant]
			  <?php endif; ?>
			  <?php if(isset($single_property->buildingconstruction)): ?>
			  <strong>Building Construction</strong>
			  [buildingconstruction]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Basement Feature</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->schooldistrict)): ?>
			  <strong>School District</strong>
			  [schooldistrict]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Exterior</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorunitfeatures)): ?>
			  <strong>Exterior Unit Features</strong>
			  [exteriorunitfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Eterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fireplace)): ?>
			  <strong>Fireplace</strong>
			  [unmapped_Fireplace]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Manufactured Housing Y/N'})): ?>
			  <strong>Manufactured Housing</strong>
			  [unmapped-Manufactured Housing Y/N]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->unmapped->{'Cumulative DOM'})): ?>
			  <strong>Cumulative DOM</strong>
			  [unmapped_Cumulative DOM]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})): ?>
			  <strong>Dir Neg w/Sell Perm</strong>
			  [unmapped_Dir Neg w/Sell Perm]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->unmapped->Basement)): ?>
			  <strong>Basement</strong>
			  [unmapped_Basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tenant Occupied'})): ?>
			  <strong>Tenant Occupied</strong>
			  [unmapped_Tenant Occupied]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
			  <strong>Lot Size (Side)</strong>
			  [unmapped_Lot Size (Side)]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Mid/High Rise'})): ?>
			  <strong>Mid/High Rise</strong>
			  [unmapped_Mid/High Rise]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Built Prior to 1978'})): ?>
			  <strong>Built Prior to 1978</strong>
			  [unmapped_Built Prior to 1978]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Documented SqFt Source'})): ?>
			  <strong>Documented SqFt Source</strong>
			  [unmapped_Documented SqFt Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->TransactionType)): ?>
			  <strong>Transaction Type</strong>
			  [unmapped_TransactionType]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Description</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AnnualBaseRent)): ?>
			  <strong>Annual Base Rent</strong>
			  [unmapped_AnnualBaseRent]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->EffectiveIncome)): ?>
			  <strong>Effective Income</strong>
			  [unmapped_EffectiveIncome]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->EffectiveIncomePotential)): ?>
			  <strong>Effective Income Potential</strong>
			  [unmapped_EffectiveIncomePotential]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ExpenseNonReimbursable)): ?>
			  <strong>Expense Non Reimbursable</strong>
			  [unmapped_ExpenseNonReimbursable]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ExpenseNonReimbursementPotential)): ?>
			  <strong>Expense Non Reimbursement Potent</strong>
			  [unmapped_ExpenseNonReimbursementPotential]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ExpenseReimbursable)): ?>
			  <strong>Expense Reimbursable</strong>
			  [unmapped_ExpenseReimbursable]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ExpenseReimbursablePotential)): ?>
			  <strong>Expense Reimbursable Potential</strong>
			  [unmapped_ExpenseReimbursablePotential]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GrossIncomePotential)): ?>
			  <strong>Gross Income Potential</strong>
			  [unmapped_GrossIncomePotential]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->NetOperatingIncomePotential)): ?>
			  <strong>Net Operating Income Potential</strong>
			  [unmapped_NetOperatingIncomePotential]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SubLeaseYN)): ?>
			  <strong>Sub Lease YN</strong>
			  [unmapped_SubLeaseYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->TaxesRealEstate)): ?>
			  <strong>Taxes Real Estate</strong>
			  [unmapped_TaxesRealEstate]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->VacancyPCT)): ?>
			  <strong>Vacancy PCT</strong>
			  [unmapped_VacancyPCT]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->VacancyPCTPotential)): ?>
			  <strong>Vacancy PCTPotential</strong>
			  [unmapped_VacancyPCTPotential]
			  <?php endif; ?>
			  
			  <?php if(isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
			  <strong>Auction</strong>
			  [unmapped_Auction Info: Auction/Online Bidding]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Auction Info: Deposit Required'})): ?>
			  <strong>Auction Deposit Required</strong>
			  [unmapped_Auction Info: Deposit Required]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Between Street (1)'})): ?>
			  <strong>Between Street1</strong>
			  [unmapped_Between Street (1)]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Between Street (2)'})): ?>
			  <strong>Between Street2</strong>
			  [unmapped_Between Street (2)]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: Annual Expenses'})): ?>
			  <strong>Bus Financial Info Annual Expenses</strong>
			  [unmapped_Bus Financial Info: Annual Expenses]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: Cost of Goods'})): ?>
			  <strong>Bus Financial Info Costof Goods</strong>
			  [unmapped_Bus Financial Info: Cost of Goods]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: From'})): ?>
			  <strong>Bus Financial Info From</strong>
			  [unmapped_Bus Financial Info: From]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: Gross Profit'})): ?>
			  <strong>Bus Financial Info Gross Profit</strong>
			  [unmapped_Bus Financial Info: Gross Profit]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: Gross Sales'})): ?>
			  <strong>Bus Financial Info Gross Sales</strong>
			  [unmapped_Bus Financial Info: Gross Sales]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: Net Before Taxes'})): ?>
			  <strong>Bus Financial Info Net Before Taxes</strong>
			  [unmapped_Auction Info: Auction/Online Bidding]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bus Financial Info: Through'})): ?>
			  <strong>Bus Financial Info Through</strong>
			  [unmapped_Bus Financial Info: Through]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Business Description'})): ?>
			  <strong>Business Description</strong>
			  [unmapped_Business Description]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Corp LimitPerAuditor'})): ?>
			  <strong>Corp Limit Per Auditor</strong>
			  [unmapped_Corp LimitPerAuditor]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'# of Employees'})): ?>
			  <strong>Employees</strong>
			  [unmapped_# of Employees]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Hours Open'})): ?>
			  <strong>Hours Open</strong>
			  [unmapped_Hours Open]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Landlord Pays'})): ?>
			  <strong>Landlord Pays</strong>
			  [unmapped_Landlord Pays]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Ownership)): ?>
			  <strong>Ownership</strong>
			  [unmapped_Ownership]
			  <?php endif; ?>
			  <?php if(isset($single_property->reasonforsell)): ?>
			  <strong>Reason For Sale</strong>
			  [reasonforsell]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Renewals Available'})): ?>
			  <strong>Renewals Available</strong>
			  [unmapped_Renewals Available]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Sales Includes'})): ?>
			  <strong>Sales Includes</strong>
			  [unmapped_Sales Includes]
			  <?php endif; ?>
			  <?php if(isset($single_property->secdeposit)): ?>
			  <strong>Security Deposit</strong>
			  [secdeposit]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Seller/Business Name'})): ?>
			  <strong>Seller Business Name</strong>
			  [unmapped_Seller/Business Name]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tax District'})): ?>
			  <strong>Tax District</strong>
			  [unmapped_Tax District]
			  <?php endif; ?>
			  <?php if(isset($single_property->tenantexpanses)): ?>
			  <strong>Tenant Pays</strong>
			  [tenantexpanses]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Time SellerWillTrain'})): ?>
			  <strong>Time Seller Will Train</strong>
			  [unmapped_Time SellerWillTrain]
			  <?php endif; ?>
			  <?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <strong>Township</strong>
			  [lngAREADESCRIPTION]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Years in Business'})): ?>
			  <strong>Years In Business</strong>
			  [unmapped_Years in Business]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->aircondition)): ?>
			  <strong>Air Condition</strong>
			  [aircondition]
			  <?php endif; ?>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Association Information</h6>
		   <p>
			  <?php if(isset($single_property->reqdownassociation)): ?>
			  <strong>Reqdown Association</strong>
			  [reqdownassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->condoassociation)): ?>
			  <strong>Condo Association</strong>
			  [condoassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Hoafee</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Assc fee includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'})): ?>
			  <strong>HOA/COA Info: HOA/COA Contact Name</strong>
			  [unmapped_HOA/COA Info: HOA/COA Contact Name]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->Rooms)): ?>
			  <strong>Rooms</strong>
			  [unmapped_Rooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Great Room Level'})): ?>
			  <strong>Great Rooms (Entry Level)</strong>
			  [unmapped_Great Room Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds Down1'})): ?>
			  <strong>Bedrooms (Lower Level1)</strong>
			  [unmapped_Bedroom Level: Beds Down1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds Down2'})): ?>
			  <strong>Bedrooms (Lower Level2)</strong>
			  [unmapped_Bedroom Level: Beds Down2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds UP1'})): ?>
			  <strong>Bedrooms (Upper Level1)</strong>
			  [unmapped_Bedroom Level: Beds UP1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds UP2'})): ?>
			  <strong>Bedrooms (Upper Level2)</strong>
			  [unmapped_Bedroom Level: Beds UP2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'})): ?>
			  <strong>Full Baths (Entry Level)</strong>
			  [unmapped_Full Baths Level: Full B Entry Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'})): ?>
			  <strong>Half Baths (Entry Level)</strong>
			  [unmapped_Half Baths Level: Half B Entry Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'})): ?>
			  <strong>Half Baths (Lower Level2)</strong>
			  [unmapped_Half Baths Level: Half Bath Down2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'})): ?>
			  <strong>Half Baths (Lower Level1)</strong>
			  [unmapped_Half Baths Level: Half Bath Down1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'})): ?>
			  <strong>Full Baths (Lower Level1)</strong>
			  [unmapped_Full Baths Level: Full Baths Down1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'})): ?>
			  <strong>Half Baths (Upper Level2)</strong>
			  [unmapped_Half Baths Level: Half Baths UP2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'})): ?>
			  <strong>Half Baths (Upper Level1)</strong>
			  [unmapped_Half Baths Level: Half Baths UP1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'})): ?>
			  <strong>Full Baths (Upper Level2)</strong>
			  [unmapped_Full Baths Level: Full Baths UP2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'})): ?>
			  <strong>Full Baths (Upper Level1)</strong>
			  [unmapped_Full Baths Level: Full Baths UP1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'})): ?>
			  <strong>Full Baths (Lower Level2)</strong>
			  [unmapped_Full Baths Level: Full Baths Down2]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Feature</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->garagespaces)): ?>
			  <strong>Garage Spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->garageparking)): ?>
			  <strong>Garage Parking</strong>
			  [garageparking]
			  <?php endif; ?>
			</p>
		</div>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->LegalDescription)): ?>
			  <strong>Legal Description</strong>
			  [unmapped_LegalDescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tax District'})): ?>
			  <strong>Tax District</strong>
			  [unmapped_Tax]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tax Abatement'})): ?>
			  <strong>Tax Abatement</strong>
			  [unmapped_Tax Abatement]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
			</p>
		</div>
		
		<div class="zy-print-block">
		<?php if( $source_details ){
			echo $source_details;
		}else{
			echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		} ?>
		</div>
	 </div>
	 <div class="zy-print-right">
		<div class="uk-text-small mb-5">&nbsp;</div>
		<div class="zy-print-media-list">
			<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
			<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
			<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
			<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="zy-print-google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
		</div>
		<?php if( $agent ): ?>
		<div class="zy-print-agent">
		   <div class="zy-cell-align zy-cell-align--small">
			  <?php  if( isset( $agent->imageURL ) ): ?>
			  <div>
				 <img class="zy-image-no-mw zy-print-agent-img" src="<?php echo $agent->imageURL; ?>" />
			  </div>
			  <?php endif; ?>
			  <div class="pl-10">
				 <h6 class="mt-5 mb-0"><?php echo isset( $agent->userName )?$agent->userName:'-'; ?></h6>
				 <?php /* <div class="uk-text-muted">The King Team</div> */ ?>
				 <ul class="uk-list mt-5">
					<li>
					   <?php echo isset( $agent->phoneMobile )? $agent->phoneMobile : ( isset($agent->phoneOffice) ? $agent->phoneOffice : ''); ?>
					</li>
					<li>
					   <?php echo isset( $agent->email )?$agent->email:''; ?>
					</li>
				 </ul>
			  </div>
		   </div>
		</div>
		<?php endif; ?>
	 </div>
  </div>