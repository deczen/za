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
			<?php if(isset($single_property->nounits)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nounits]</div>
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
			<?php if(isset($single_property->unmapped->BathsThreeQuarter)): ?>
			  <td>
				 <div class="zy-print-meta-val">[unmapped_BathsThreeQuarter]</div>
				 <div class="zy-print-meta-label">3/4 Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nohalfbaths]</div>
				 <div class="zy-print-meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print-meta-val">[unmapped_SqFtTotal]</div>
				 <div class="zy-print-meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print-meta-val">[unmapped_LotSizeAreaSQFT]</div>
				 <div class="zy-print-meta-label">Lot Size SQFT</div>
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
			<?php if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Neighborhood:</div>
				 <div class="zy-print-area-val">[neighborhood]</div>
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
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Area:</div>
				 <div class="zy-print-area-val">[lngAREADESCRIPTION]</div>
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
			  <?php if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->BuildingUse)): ?>
			  <strong>Building Use</strong>
			  [unmapped_BuildingUse]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Floor</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->nostories)): ?>
			  <strong>No stories</strong>
			  [nostories]
			  <?php endif; ?>
			  <?php if(isset($single_property->condominiumname)): ?>
			  <strong>Condominium name</strong>
			  [condominiumname]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking feature</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->energyfeatures)): ?>
			  <strong>Energy features</strong>
			  [energyfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommunityFeatures)): ?>
			  <strong>Community Features</strong>
			  [unmapped_CommunityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->rentfeeincludes)): ?>
			  <strong>Rent fee includes</strong>
			  [rentfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfront)): ?>
			  <strong>Water front</strong>
			  [waterfront]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Road type</strong>
			  [roadtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->equiplistavail)): ?>
			  <strong>Equiplist avail</strong>
			  [equiplistavail]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Inclusions)): ?>
			  <strong>Inclusions</strong>
			  [unmapped_Inclusions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Development)): ?>
			  <strong>Development</strong>
			  [unmapped_Development]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ProposedUse)): ?>
			  <strong>Proposed Use</strong>
			  [unmapped_ProposedUse]
			  <?php endif; ?>
			  <?php if(isset($single_property->handicapaccess)): ?>
			  <strong>Handicap access</strong>
			  [handicapaccess]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->NumberOfDiningAreas)): ?>
			  <strong>Number Of Dining Areas</strong>
			  [unmapped_NumberOfDiningAreas]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SecuritySystemYN)): ?>
			  <strong>Security System</strong>
			  [unmapped_SecuritySystemYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SecurityFeatures)): ?>
			  <strong>Security Features</strong>
			  [unmapped_SecurityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FinancingProposed)): ?>
			  <strong>Financing Proposed</strong>
			  [unmapped_FinancingProposed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->TotalAnnualExpensesInclude)): ?>
			  <strong>Total Annual Expenses Include</strong>
			  [unmapped_TotalAnnualExpensesInclude]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->IncomeExpenseSource)): ?>
			  <strong>Income ExpenseSource</strong>
			  [unmapped_IncomeExpenseSource]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommercialFeatures)): ?>
			  <strong>Commercial Features</strong>
			  [unmapped_CommercialFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->tenantexpanses)): ?>
			  <strong>Tenant expanses</strong>
			  [tenantexpanses]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundrylevel)): ?>
			  <strong>Laundry level</strong>
			  [laundrylevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CeilingHeight)): ?>
			  <strong>Ceiling Height</strong>
			  [unmapped_CeilingHeight]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Topography)): ?>
			  <strong>Topography</strong>
			  [unmapped_Topography]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoadFrontageDistance)): ?>
			  <strong>Road Frontage Distance</strong>
			  [unmapped_RoadFrontageDistance]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fencing)): ?>
			  <strong>Fencing</strong>
			  [unmapped_Fencing]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AccessibilityFeatures)): ?>
			  <strong>Accessibility Features</strong>
			  [unmapped_AccessibilityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PlannedDevelopment)): ?>
			  <strong>Planned Development</strong>
			  [unmapped_PlannedDevelopment]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->MoniesRequired)): ?>
			  <strong>Monies Required</strong>
			  [unmapped_MoniesRequired]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LeaseConditions)): ?>
			  <strong>Lease Conditions</strong>
			  [unmapped_LeaseConditions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AppliancesYN)): ?>
			  <strong>Appliances</strong>
			  [unmapped_AppliancesYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PermitInternetYN)): ?>
			  <strong>Permit Internet</strong>
			  [unmapped_PermitInternetYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FencedYardYN)): ?>
			  <strong>Fenced Yard</strong>
			  [unmapped_FencedYardYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CompensationPaid)): ?>
			  <strong>Compensation Paid</strong>
			  [unmapped_CompensationPaid]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->leasetype)): ?>
			  <strong>Lease type</strong>
			  [leasetype]
			  <?php endif; ?>
			  <?php if(isset($single_property->secdeposit)): ?>
			  <strong>Sec deposit</strong>
			  [secdeposit]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->InsuranceExpense)): ?>
			  <strong>Insurance Expense</strong>
			  [unmapped_InsuranceExpense]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->UnitCount)): ?>
			  <strong>Unit Count</strong>
			  [unmapped_UnitCount]
			  <?php endif; ?>
			  <?php if(isset($single_property->bldgsqfeet)): ?>
			  <strong>Bldgsqfeet</strong>
			  [bldgsqfeet]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PoolYN)): ?>
			  <strong>Pool</strong>
			  [unmapped_PoolYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LotSize)): ?>
			  <strong>Lot Size</strong>
			  [unmapped_LotSize]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot description</strong>
			  [lotdescription]
			  <?php endif; ?> <?php if(isset($single_property->restrictions)): ?>
			  <strong>Restrictions</strong>
			  [restrictions]
			  <?php endif; ?>
			  <?php if(isset($single_property->easements)): ?>
			  <strong>Easements</strong>
			  [easements]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CropRetireProgramYN)): ?>
			  <strong>Crop Retire Program</strong>
			  [unmapped_CropRetireProgramYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->firmrmk1)): ?>
			  <strong>Fireplace Features</strong>
			  [firmrmk1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ZoningCommercial)): ?>
			  <strong>Zoning Commercial</strong>
			  [unmapped_ZoningCommercial]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Association information</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->AssociationFeeFrequency)): ?>
			  <strong>Association Type</strong>
			  [unmapped_AssociationType]
			  <?php endif; ?>
			  <?php if(isset($single_property->Hoafee)): ?>
			  <strong>Hoafee</strong>
			  [Hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Asscfee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->feeinterval)): ?>
			  <strong>Fee interval</strong>
			  [feeinterval]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Heating, Cooling, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			   <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Schools</h6>
		   <p>  
			  <?php if(isset($single_property->gradeschool)): ?>
			   <strong>Grade School</strong>
			  [gradeschool]
			  <?php endif; ?>
			  <?php if(isset($single_property->highschool)): ?>
			   <strong>High School</strong>
			  [highschool]
			  <?php endif; ?>
			  <?php if(isset($single_property->middleschool)): ?>
			   <strong>Middle School</strong>
			  [middleschool]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>  
			  <?php if(isset($single_property->unmapped->ParkingSpacesCoveredTotal)): ?>
			   <strong>Tax Legal Description</strong>
			  [unmapped_ParkingSpacesCoveredTotal]
			  <?php endif; ?>
			  <?php if( isset($single_property->unmapped->GarageLength) && isset($single_property->unmapped->GarageWidth)): ?>
			   <strong>Garage Size</strong>
			  [unmapped_GarageLength] X [unmapped_GarageWidth]
			  <?php endif; ?>
			  <?php if(isset($single_property->garagespaces)): ?>
			   <strong>Garage Spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes</h6>
		   <p>    
			  <?php if(isset($single_property->unmapped->TaxLegalDescription)): ?>
			   <strong>Tax Legal Description</strong>
			  [unmapped_TaxLegalDescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxes)): ?>
			   <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php $roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
		if($roomLevels): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
			<p>
			<?php foreach($roomLevels as $rkey => $roomLevel): ?>
				
					<strong>Room Type</strong>
					[roomLevels_<?php echo $rkey; ?>_roomType]
					<strong>Room Level</strong>
					[roomLevels_<?php echo $rkey; ?>_roomLevel]
					
					<?php $dim1 = $roomLevels[$rkey]->dim1; 
						  $dim2 = $roomLevels[$rkey]->dim2; 
					?>
					<?php if( isset($dim1) && isset($dim2)): ?>
					<strong>Room Size</strong>
					[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]
					<?php endif; ?>
					
			<?php endforeach; ?>
			</p>
		</div>
		<?php endif; ?>
		
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