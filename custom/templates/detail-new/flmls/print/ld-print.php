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
				 <div class="zy-print-meta-label">Style</div>
			  </td>
			<?php endif; ?>
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
			<?php if(isset($single_property->unmapped->LivingArea)): ?>
			  <td>
				 <div class="zy-print-meta-val">[unmapped_LivingArea]</div>
				 <div class="zy-print-meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->unmapped->TotalAcreage)): ?>
			  <td>
				 <div class="zy-print-meta-val">[unmapped_TotalAcreage]</div>
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
			  <?php /*if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->unmapped->CurrentUse)): ?>
			  <strong>Current Use</strong>
			  [unmapped_CurrentUse]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->sitecondition)): ?>
			  <strong>Site Condition</strong>
			  [sitecondition]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Floor</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->condominiumname)): ?>
			  <strong>Condominium Name</strong>
			  [condominiumname]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Levels)): ?>
			  <strong>Levels</strong>
			  [unmapped_Levels]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FloorNumber)): ?>
			  <strong>Floor Number</strong>
			  [unmapped_FloorNumber]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommunityFeatures)): ?>
			  <strong>Community Features</strong>
			  [unmapped_CommunityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Township)): ?>
			  <strong>Town ship</strong>
			  [unmapped_Township]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Feature</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->View)): ?>
			  <strong>View</strong>
			  [unmapped_View]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterAccess)): ?>
			  <strong>Water Access</strong>
			  [unmapped_WaterAccess]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfront)): ?>
			  <strong>Water Front</strong>
			  [waterfront]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterviewfeatures)): ?>
			  <strong>Water View Features</strong>
			  [waterviewfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
			  <strong>Waterfront Feet Total</strong>
			  [unmapped_WaterfrontFeetTotal]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterExtras)): ?>
			  <strong>Water Extras</strong>
			  [unmapped_WaterExtras]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AdditionalWaterInformation)): ?>
			  <strong>Additional Water Information</strong>
			  [unmapped_AdditionalWaterInformation]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SecurityFeatures)): ?>
			  <strong>Security Features</strong>
			  [unmapped_SecurityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WindowFeatures)): ?>
			  <strong>Window Features</strong>
			  [unmapped_WindowFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			  <strong>Patio And Porch Features</strong>
			  [unmapped_PatioAndPorchFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Vegetation)): ?>
			  <strong>Vegetation</strong>
			  [unmapped_Vegetation]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LotSizeSquareFeet)): ?>
			  <strong>Lot Size Square Feet</strong>
			  [unmapped_LotSizeSquareFeet]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AdditionalRooms)): ?>
			  <strong>Additional Rooms</strong>
			  [unmapped_AdditionalRooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FloodZoneCode)): ?>
			  <strong>Flood Zone Code</strong>
			  [unmapped_FloodZoneCode]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->BuildingElevatorYN)): ?>
			  <strong>Building Elevator</strong>
			  [unmapped_BuildingElevatorYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->disclosures)): ?>
			  <strong>Disclosures</strong>
			  [disclosures]
			  <?php endif; ?>
			  <?php if(isset($single_property->pooldescription)): ?>
			  <strong>Pool Description</strong>
			  [pooldescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitplacement)): ?>
			  <strong>Unit Placement</strong>
			  [unitplacement]
			  <?php endif; ?>
			  <?php if(isset($single_property->facingdirection)): ?>
			  <strong>Facing Direction</strong>
			  [facingdirection]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundryfeatures)): ?>
			  <strong>Laundry features</strong>
			  [laundryfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->BusinessType)): ?>
			  <strong>Business Type</strong>
			  [unmapped_BusinessType]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->NumofConferenceMeetingRooms)): ?>
			  <strong>Numof Conference Meeting Rooms</strong>
			  [unmapped_NumofConferenceMeetingRooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->leasepriceincludes)): ?>
			  <strong>Lease Price Includes</strong>
			  [leasepriceincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Description</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LotSizeDimensions)): ?>
			  <strong>Lot Size Dimensions</strong>
			  [unmapped_LotSizeDimensions]
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
			  <strong>Association Fee Frequency</strong>
			  [unmapped_AssociationFeeFrequency]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AssociationFee)): ?>
			  <strong>Association Fee</strong>
			  [unmapped_AssociationFee]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CondoFees)): ?>
			  <strong>Condo Fees</strong>
			  [unmapped_CondoFees]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->MonthlyCondoFeeAmount)): ?>
			  <strong>Monthly Condo Fee Amount</strong>
			  [unmapped_MonthlyCondoFeeAmount]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CondoFeesTerm)): ?>
			  <strong>Condo Fees Term</strong>
			  [unmapped_CondoFeesTerm]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Asscfee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AssociationAmenities)): ?>
			  <strong>Association Amenities</strong>
			  [unmapped_AssociationAmenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Features</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->MonthlyHOAAmount)): ?>
			  <strong>Monthly HOA Amount</strong>
			  [unmapped_MonthlyHOAAmount]
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
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer</strong>
			  [sewer]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterSource)): ?>
			  <strong>Water Source</strong>
			  [unmapped_WaterSource]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			   <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>	
			<p>    
			  <?php if(isset($single_property->garagespaces)): ?>
			  <strong>Garage Spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Road Type</strong>
			  [roadtype]
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
			  <?php if(isset($single_property->unmapped->TaxBlock)): ?>
			   <strong>Tax Block</strong>
			  [unmapped_TaxBlock]
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
		
		<?php $roomLevels = isset($single_property->roomLevels)?$single_property->roomLevels:false;
		if($roomLevels): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
			<p>
			<?php foreach($roomLevels as $rkey => $roomLevel): ?>
				
					<strong>Room Type</strong>
					[roomLevels_<?php echo $rkey; ?>_roomType]
					
					<?php $dim1 = $roomLevels[$rkey]->dim1; 
						  $dim2 = $roomLevels[$rkey]->dim2; 
					?>
					<?php if( isset($dim1) && isset($dim2)): ?>
					<strong>Room Size</strong>
					[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]
					<?php endif; ?>
					
					<strong>Room Level</strong>
					[roomLevels_<?php echo $rkey; ?>_roomLevel]
					
					<strong>Floor</strong>
					[roomLevels_<?php echo $rkey; ?>_floor]
					
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