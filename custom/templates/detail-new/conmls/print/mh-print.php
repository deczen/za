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
			<?php if(isset($single_property->norooms)): ?>
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
				 <div class="zy-print-meta-val">[nobaths]</div>
				 <div class="zy-print-meta-label">Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nohalfbaths]</div>
				 <div class="zy-print-meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print-meta-val">[acre]</div>
				 <div class="zy-print-meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print-meta-val">[squarefeet]</div>
				 <div class="zy-print-meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="zy-print-meta-val">$170</div>
				 <div class="zy-print-meta-label">$/SQFT</div>
			  </td> */ ?>
			<?php /*if(isset($single_property->yearbuilt)): ?>
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
			<?php if(isset($single_property->propsubtype)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Property Sub-type:</div>
				 <div class="zy-print-area-val">[propsubtype]</div>
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
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->color)): ?>
			  <strong>Color</strong>
			  [color]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Driveway Type</strong>
			  [roadtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation Type</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Description</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AtticDescription)): ?>
			  <strong>Attic Description</strong>
			  [unmapped_AtticDescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->AtticYN)): ?>
			  <strong>Attic Yn</strong>
			  [unmapped_AtticYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Fasement Feature</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundrylevel)): ?>
			  <strong>Laundry Room Location</strong>
			  [laundrylevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoomsAdditional)): ?>
			  <strong>Rooms Additional</strong>
			  [unmapped_RoomsAdditional]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->BankOwnedPropertyYN)): ?>
			  <strong>Bank Owned Property Yn</strong>
			  [unmapped_BankOwnedPropertyYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfrontflag)): ?>
			  <strong>Waterfront Yn</strong>
			  [waterfrontflag]
			  <?php endif; ?>
			  <?php if(isset($single_property->restrictions)): ?>
			  <strong>Restrictions</strong>
			  [restrictions]
			  <?php endif; ?>
			  <?php if(isset($single_property->exclusions)): ?>
			  <strong>Exclusions</strong>
			  [exclusions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FloodZoneYN)): ?>
			  <strong>Flood Zone Yn</strong>
			  [unmapped_FloodZoneYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->FuelTankLocation)): ?>
			  <strong>Fuel Tank Location</strong>
			  [unmapped_FuelTankLocation]
			  <?php endif; ?>
			  <?php if(isset($single_property->warranty)): ?>
			  <strong>Warranty</strong>
			  [warranty]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->InLawApartmentYNP)): ?>
			  <strong>In Law Apartment</strong>
			  [unmapped_InLawApartmentYNP]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundrydscrp)): ?>
			  <strong>Laundry Room Info</strong>
			  [laundrydscrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->NearbyAmenities)): ?>
			  <strong>Nearby Amenities</strong>
			  [unmapped_NearbyAmenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->pooldescription)): ?>
			  <strong>Pool Description</strong>
			  [pooldescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->possession)): ?>
			  <strong>Possession</strong>
			  [possession]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RadonMitigationWaterYNU)): ?>
			  <strong>Radon Mitigation Water Ynu</strong>
			  [unmapped_RadonMitigationWaterYNU]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RadonMitigationAirYNU)): ?>
			  <strong>Radon Mitigation Air Ynu</strong>
			  [unmapped_RadonMitigationAirYNU]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SewageSystem)): ?>
			  <strong>Sewage System</strong>
			  [unmapped_SewageSystem]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SignYN)): ?>
			  <strong>Sign Yn</strong>
			  [unmapped_SignYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscpool)): ?>
			  <strong>Asscpool</strong>
			  [asscpool]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->yearbuiltdescrp)): ?>
			  <strong>New Construction Type</strong>
			  [yearbuiltdescrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Association Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Association Fee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->condominiumname)): ?>
			  <strong>Complex Name</strong>
			  [condominiumname]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->EndUnitYN)): ?>
			  <strong>End Unit Yn</strong>
			  [unmapped_EndUnitYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->EnergyFeatures)): ?>
			  <strong>Energy Features</strong>
			  [unmapped_EnergyFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->LevelsInUnit)): ?>
			  <strong>Levels In Unit</strong>
			  [unmapped_LevelsInUnit]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PotentialShortSaleYN)): ?>
			  <strong>Potential Short Sale Yn</strong>
			  [unmapped_PotentialShortSaleYN]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoadFrontageDescription)): ?>
			  <strong>Road Frontage Description</strong>
			  [unmapped_RoadFrontageDescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->noofrestrooms)): ?>
			  <strong>Restrooms Number Of</strong>
			  [noofrestrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->CommercialCatagory)): ?>
			  <strong>Commercial Catagory</strong>
			  [unmapped_CommercialCatagory]
			  <?php endif; ?>
			  <?php if(isset($single_property->documentsonfile)): ?>
			  <strong>Documents Available</strong>
			  [documentsonfile]
			  <?php endif; ?>
			  <?php if(isset($single_property->location)): ?>
			  <strong>Location</strong>
			  [location]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PresentUse)): ?>
			  <strong>Present Use</strong>
			  [unmapped_PresentUse]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php if( isset($single_property->unmapped->HeatFuelType) || isset($single_property->utilities) ):?>
			<div class="zy-print-block">
			   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6> 
			   <p>
				  <?php if(isset($single_property->unmapped->HeatFuelType)): ?>
				  <strong>Heat Fuel Type</strong>
				  [unmapped_HeatFuelType]
				  <?php endif; ?>
				  <?php if(isset($single_property->utilities)): ?>
				  <strong>Level</strong>
				  [utilities]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->garageparking) || isset($single_property->unmapped->ParkingSpacesUncovered) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->garageparking)): ?>
			  <strong>Garage Parking Info</strong>
			  [garageparking]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ParkingSpacesUncovered)): ?>
			  <strong>Parking Spaces Uncovered</strong>
			  [unmapped_ParkingSpacesUncovered]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->PropertyTax) || isset($single_property->hoafee) || isset($single_property->feeinterval) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->PropertyTax)): ?>
			  <strong>Property Tax</strong>
			  [unmapped_PropertyTax]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Hoa Fee Amount</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->feeinterval)): ?>
			  <strong>Hoa Fee Frequency</strong>
			  [feeinterval]
			  <?php endif; ?>
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