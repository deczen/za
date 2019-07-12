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
			<?php /*if(isset($single_property->norooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[norooms]</div>
				 <div class="zy-print-meta-label">Total Rooms</div>
			  </td>
			<?php endif;*/ ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nobedrooms]</div>
				 <div class="zy-print-meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nofullbaths]</div>
				 <div class="zy-print-meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php /*if(isset($single_property->unmapped->BathsThreeQuarter)): ?>
			  <td>
				 <div class="zy-print-meta-val">[unmapped_BathsThreeQuarter]</div>
				 <div class="zy-print-meta-label">3/4 Baths</div>
			  </td>
			<?php endif;*/ ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nohalfbaths]</div>
				 <div class="zy-print-meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print-meta-val">[squarefeet]</div>
				 <div class="zy-print-meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->lotsize)): ?>
			  <td>
				 <div class="zy-print-meta-val">[lotsize]</div>
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
			  <?php if(isset($single_property->unmapped->Levels)): ?>
			  <strong>Levels</strong>
			  [unmapped_Levels]
			  <?php endif; ?>
			  <?php if(isset($single_property->nostories)): ?>
			  <strong>No. Stories</strong>
			  [nostories]
			  <?php endif; ?>
			  <?php if(isset($single_property->nobuildings)): ?>
			  <strong>No. Buildings</strong>
			  [nobuildings]
			  <?php endif; ?>
			  <?php if(isset($single_property->totalunits)): ?>
			  <strong>Total Units</strong>
			  [totalunits]
			  <?php endif; ?>
			  <?php if(isset($single_property->totalbldgsf)): ?>
			  <strong>Total bldgsf</strong>
			  [totalbldgsf]
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
			  <?php if(isset($single_property->unmapped->View)): ?>
			  <strong>View</strong>
			  [unmapped_View]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommunityFeatures)): ?>
			  <strong>Community Features</strong>
			  [unmapped_CommunityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->vacant)): ?>
			  <strong>Vacant</strong>
			  [vacant]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FireplaceYN)): ?>
			  <strong>Fireplace YN</strong>
			  [unmapped_FireplaceYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FireplaceFeatures)): ?>
			  <strong>Fireplace Features</strong>
			  [unmapped_Fireplace Features]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LivingArea)): ?>
			  <strong>Living Area</strong>
			  [unmapped_LivingArea]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoomType)): ?>
			  <strong>Room Type</strong>
			  [unmapped_RoomType]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Flooring</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommonWalls)): ?>
			  <strong>Common Walls</strong>
			  [unmapped_CommonWalls]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SpaFeatures)): ?>
			  <strong>Spa Features</strong>
			  [unmapped_SpaFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundryfeatures)): ?>
			  <strong>Laundry Features</strong>
			  [laundryfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->UncoveredSpaces)): ?>
			  <strong>Uncovered Spaces</strong>
			  [unmapped_UncoveredSpaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->pooldescription)): ?>
			  <strong>Pool Description</strong>
			  [pooldescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GrossOperatingIncome)): ?>
			  <strong>Gross Operating Income</strong>
			  [unmapped_GrossOperatingIncome]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ImprovementsAmount)): ?>
			  <strong>Improvements Amount</strong>
			  [unmapped_ImprovementsAmount]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GrossMultiplier)): ?>
			  <strong>Gross Multiplier</strong>
			  [unmapped_GrossMultiplier]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LandValue)): ?>
			  <strong>Land Value</strong>
			  [unmapped_LandValue]
			  <?php endif; ?>
			  <?php if(isset($single_property->grossannualexp)): ?>
			  <strong>Gross Annual exp</strong>
			  [grossannualexp]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GrossScheduledIncome)): ?>
			  <strong>Gross Scheduled Income</strong>
			  [unmapped_GrossScheduledIncome]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ProfessionalManagementExpense)): ?>
			  <strong>Professional Management Expense</strong>
			  [unmapped_ProfessionalManagementExpense]
			  <?php endif; ?>
			  <?php if(isset($single_property->netoperatinginc)): ?>
			  <strong>Net Operating inc</strong>
			  [netoperatinginc]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SpecialListingConditions)): ?>
			  <strong>Special Listing Conditions</strong>
			  [unmapped_SpecialListingConditions]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
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
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Association Information</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->ASSOCSECURITY)): ?>
			  <strong>Assoc Security</strong>
			  [unmapped_ASSOCSECURITY]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Hoafee</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->feeinterval)): ?>
			  <strong>Fee Interval</strong>
			  [feeinterval]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscpool)): ?>
			  <strong>Assc pool</strong>
			  [asscpool]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer</strong>
			  [sewer]
			  <?php endif; ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water</strong>
			  [water]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->NumberOfSeparateElectricMeters)): ?>
			   <strong>Number Of Separate Electric Meters</strong>
			  [unmapped_NumberOfSeparateElectricMeters]
			  <?php endif; ?>
			  
			  <?php if(isset($single_property->unmapped->NumberOfSeparateWaterMeters)): ?>
			   <strong>Number Of Separate Water Meters</strong>
			  [unmapped_NumberOfSeparateWaterMeters]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->NumberOfSeparateGasMeters)): ?>
			   <strong>Number Of Separate Gas Meters</strong>
			  [unmapped_NumberOfSeparateGasMeters]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FuelExpense)): ?>
			   <strong>Fuel Expense</strong>
			  [unmapped_FuelExpense]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ElectricExpense)): ?>
			   <strong>Electric Expense</strong>
			  [unmapped_ElectricExpense]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterSewerExpense)): ?>
			   <strong>Water Sewer Expense</strong>
			  [unmapped_WaterSewerExpense]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->TrashExpense)): ?>
			   <strong>Trash Expense</strong>
			  [unmapped_TrashExpense]
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