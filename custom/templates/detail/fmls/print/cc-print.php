<div class="bt-print__wrap">
	<div class="bt-print__header_top">
		<div class="bt-print__logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
		<div class="bt-print__title">
			<h4 class="my-5 uk-text-truncate" style="color: <?php echo $print_color; ?> !important;">
			   <?php echo zipperagent_get_address($single_property); ?> 
			</h4>
		</div>
	</div>
	 <div class="bt-print__left">
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
		<ul class="bt-print__meta">
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
		<table class="bt-print__meta-blocks">
		   <tr>
			<?php if(isset($single_property->norooms)): ?>
			  <td>
				 <div class="bt-print__meta-val">[norooms]</div>
				 <div class="bt-print__meta-label">Total Rooms</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nobedrooms]</div>
				 <div class="bt-print__meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nofullbaths]</div>
				 <div class="bt-print__meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->unmapped->BathsThreeQuarter)): ?>
			  <td>
				 <div class="bt-print__meta-val">[unmapped_BathsThreeQuarter]</div>
				 <div class="bt-print__meta-label">3/4 Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nohalfbaths]</div>
				 <div class="bt-print__meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="bt-print__meta-val">[squarefeet]</div>
				 <div class="bt-print__meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="bt-print__meta-val">[acre]</div>
				 <div class="bt-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="bt-print__meta-val">$170</div>
				 <div class="bt-print__meta-label">$/SQFT</div>
			  </td>  ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <td>
				 <div class="bt-print__meta-val">[yearbuilt]</div>
				 <div class="bt-print__meta-label">Built</div>
			  </td>
			<?php endif;*/ ?>
		   </tr>
		</table>
		<div class="bt-print__area__wrap">
		   <div class="bt-print__area">
			<?php if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Neighborhood:</div>
				 <div class="bt-print__area-val">[neighborhood]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->proptype)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Type:</div>
				 <div class="bt-print__area-val">[proptype]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Built:</div>
				 <div class="bt-print__area-val">[yearbuilt]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">County:</div>
				 <div class="bt-print__area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Area:</div>
				 <div class="bt-print__area-val">[lngAREADESCRIPTION]</div>
			  </div>
			<?php endif; ?>
		   </div>
		   <div class="bt-print__area">
		   </div>
		</div>
		<?php if(isset($single_property->remarks)): ?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Description</h6>
		   <div class="bt-print__description">[remarks]</div>
		</div>
		<?php endif; ?>
		
		<?php if(isset($single_property->direction)): ?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="bt-print__description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Levels)): ?>
			  <strong>Levels</strong>
			  [unmapped_Levels]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Stories)): ?>
			  <strong>Stories</strong>
			  [unmapped_Stories]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Construction Status'})): ?>
			  <strong>Construction Status</strong>
			  [unmapped_Construction Status]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Flooring</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->vacant)): ?>
			  <strong>Vacant</strong>
			  [vacant]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FireplaceFeatures)): ?>
			  <strong>Fireplace Features</strong>
			  [unmapped_FireplaceFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Fireplace Type'})): ?>
			  <strong>Fireplace Type</strong>
			  [unmapped_Fireplace Type]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GreenEnergyGeneration)): ?>
			  <strong>Green Energy Generation</strong>
			  [unmapped_GreenEnergyGeneration]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->GreenEnergyEfficient)): ?>
			  <strong>Green Energy Efficient</strong>
			  [unmapped_GreenEnergyEfficient]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WindowFeatures)): ?>
			  <strong>Window Features</strong>
			  [unmapped_WindowFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PatioAndPorchFeatures)): ?>
			  <strong>Patio And Porch Features</strong>
			  [unmapped_PatioAndPorchFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoadFrontageType)): ?>
			  <strong>Road Frontage Type</strong>
			  [unmapped_RoadFrontageType]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->HorseAmenities)): ?>
			  <strong>Horse Amenities</strong>
			  [unmapped_HorseAmenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LotSizeDimensions)): ?>
			  <strong>Lot Size Dimensions</strong>
			  [unmapped_LotSizeDimensions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->OtherStructures)): ?>
			  <strong>Other Structures</strong>
			  [unmapped_OtherStructures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Dock)): ?>
			  <strong>Dock</strong>
			  [unmapped_Dock]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfront)): ?>
			  <strong>Waterfront</strong>
			  [waterfront]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterbodyname)): ?>
			  <strong>Waterbody Name</strong>
			  [waterbodyname]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterfrontageLength)): ?>
			  <strong>Water frontage Length</strong>
			  [unmapped_WaterfrontageLength]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->View)): ?>
			  <strong>View</strong>
			  [unmapped_View]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PropertyAttachedYN)): ?>
			  <strong>Property Attached</strong>
			  [unmapped_PropertyAttachedYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LandLeaseYN)): ?>
			  <strong>Land Lease</strong>
			  [unmapped_LandLeaseYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommonWalls)): ?>
			  <strong>Common Walls</strong>
			  [unmapped_CommonWalls]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AccessibilityFeatures)): ?>
			  <strong>Accessibility Features</strong>
			  [unmapped_AccessibilityFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fencing)): ?>
			  <strong>Fencing</strong>
			  [unmapped_Fencing]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->WaterOnLand)): ?>
			  <strong>Water On Land</strong>
			  [unmapped_WaterOnLand]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Description</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size'})): ?>
			  <strong>Lot Size</strong>
			  [unmapped_Lot Size]
			  <?php endif; ?>
			  <?php if(isset($single_property->pooldescription)): ?>
			  <strong>Pool Description</strong>
			  [pooldescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric Feature</strong>
			  [electricfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Road Type</strong>
			  [roadtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->adultcommunity)): ?>
			  <strong>Adult Community</strong>
			  [adultcommunity]
			  <?php endif; ?>
			  <?php if(isset($single_property->sitecondition)): ?>
			  <strong>Site Condition</strong>
			  [sitecondition]
			  <?php endif; ?>
			  <?php if(isset($single_property->equiplistavail)): ?>
			  <strong>Equiplist Avail</strong>
			  [equiplistavail]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Laundry Type'})): ?>
			  <strong>Laundry Type</strong>
			  [unmapped_Laundry Type]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Equipment)): ?>
			  <strong>Equipment</strong>
			  [unmapped_Equipment]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Financing Type'})): ?>
			  <strong>Financing Type</strong>
			  [unmapped_Financing Type]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Possible Financing'})): ?>
			  <strong>Possible Financing</strong>
			  [unmapped_Possible Financing]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Above Grade Finished'})): ?>
			  <strong>Above Grade Finished</strong>
			  [unmapped_Above Grade Finished]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Below Grade Unfinished'})): ?>
			  <strong>Below Grade Unfinished</strong>
			  [unmapped_Below Grade Unfinished]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			</p>
			   <!-- Parking Information -->
			<p>  
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Feature</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CarportGarageTotal)): ?>
			  <strong>Carport Garage Total</strong>
			  [unmapped_CarportGarageTotal]
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
			   <!-- Schools -->
			<p>   
			  <?php if(isset($single_property->gradeschool)): ?>
			  <strong>Grade School</strong>
			  [gradeschool]
			  <?php endif; ?>
			  <?php if(isset($single_property->middleschool)): ?>
			  <strong>Middle School</strong>
			  [middleschool]
			  <?php endif; ?>
			  <?php if(isset($single_property->highschool)): ?>
			  <strong>High School</strong>
			  [highschool]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Association information</h6>
		   <p>
			  <?php if(isset($single_property->reqdownassociation)): ?>
			  <strong>Reqdown Association</strong>
			  [reqdownassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->feeinterval)): ?>
			  <strong>Fee Interval</strong>
			  [feeinterval]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Hoafee</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->assocsecurity)): ?>
			  <strong>Assoc Security</strong>
			  [assocsecurity]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Fees Include'})): ?>
			  <strong>Fees Include</strong>
			  [unmapped_Fees Include]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Assc Fee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			</p>
			   <!-- Taxes, Fees -->
			<p> 
			  <?php if(isset($single_property->unmapped->{'Tax ID'})): ?>
			  <strong>Tax ID</strong>
			  [unmapped_Tax ID]
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
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Cooling Source'})): ?>
			  <strong>Cooling Source</strong>
			  [unmapped_Cooling Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Heating Source'})): ?>
			  <strong>Heating Source</strong>
			  [unmapped_Heating Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer</strong>
			  [sewer]
			  <?php endif; ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water</strong>
			  [water]
			  <?php endif; ?>
			  <?php if(isset($single_property->sewerandwater)): ?>
			   <strong>Sewer and Water</strong>
			  [sewerandwater]
			  <?php endif; ?>
			  <?php if(isset($single_property->energyfeatures)): ?>
			   <strong>Energy Features</strong>
			  [energyfeatures]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->Rooms)): ?>
			  <strong>Rooms</strong>
			  [unmapped_Rooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoomType)): ?>
			  <strong>Room Type</strong>
			  [unmapped_RoomType]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->UpperLevelBedrooms)): ?>
			  <strong>Upper Level Bedrooms</strong>
			  [unmapped_UpperLevelBedrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LowerLevelBedrooms)): ?>
			  <strong>Lower Level Bedrooms</strong>
			  [unmapped_LowerLevelBedrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->UpperLevelHalfBathrooms)): ?>
			  <strong>Upper Level Half Bathrooms</strong>
			  [unmapped_UpperLevelHalfBathrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BAF Main'})): ?>
			  <strong>BAF Main</strong>
			  [unmapped_BAF Main]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BAF Upper'})): ?>
			  <strong>BAF Upper</strong>
			  [unmapped_BAF Upper]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BAF Lower'})): ?>
			  <strong>BAF Lower</strong>
			  [unmapped_BAF Lower]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BR Main'})): ?>
			  <strong>BR Main</strong>
			  [unmapped_BR Main]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BR Upper'})): ?>
			  <strong>BR Upper</strong>
			  [unmapped_BR Upper]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BR Lower'})): ?>
			  <strong>BR Lower</strong>
			  [unmapped_BR Lower]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BAH Main'})): ?>
			  <strong>BAH Main</strong>
			  [unmapped_BAH Main]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BAH Upper'})): ?>
			  <strong>BAH Upper</strong>
			  [unmapped_BAH Upper]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'BAH Lower'})): ?>
			  <strong>BAH Lower</strong>
			  [unmapped_BAH Lower]
			  <?php endif; ?>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->masterbath)): ?>
			  <strong>Masterbath</strong>
			  [masterbath]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->bed2DSCRP)): ?>
			  <strong>Bedrooms Description</strong>
			  [unmapped_bed2DSCRP]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->dinDSCRP)): ?>
			  <strong>Dinning room Description</strong>
			  [unmapped_dinDSCRP]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->kitDSCRP)): ?>
			  <strong>Kitchen Description</strong>
			  [unmapped_kitDSCRP]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen/Breakfas'})): ?>
			  <strong>Kitchen/Breakfas</strong>
			  [unmapped_Kitchen/Breakfas]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Equipment'})): ?>
			  <strong>Kitchen Equipment</strong>
			  [unmapped_Kitchen Equipment]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Laundry Location'})): ?>
			  <strong>Laundry Location</strong>
			  [unmapped_Laundry Location]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundryfeatures)): ?>
			  <strong>Laundry Features</strong>
			  [laundryfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Fireplace Location'})): ?>
			  <strong>Fireplace Location</strong>
			  [unmapped_Fireplace Location]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="bt-print__block">
		<?php if( $source_details ){
			echo $source_details;
		}else{
			echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		} ?>
		</div>
	 </div>
	 <div class="bt-print__right">
		<div class="uk-text-small mb-5">&nbsp;</div>
		<div class="bt-print__media-list">
			<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
			<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
			<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
			<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="bt-print__google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
		</div>
		<?php if( $agent ): ?>
		<div class="bt-print__agent">
		   <div class="bt-cell-align bt-cell-align--small">
			  <?php  if( isset( $agent->imageURL ) ): ?>
			  <div>
				 <img class="bt-image__no-mw bt-print__agent-img" src="<?php echo $agent->imageURL; ?>" />
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