<?php if($single_property->sourceid == 'CONMLS'): ?>

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

<?php elseif($single_property->sourceid == 'RIMLS'): ?>

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
				  <?php if(isset($single_property->nounits)): ?>
				  <strong>Unit Count</strong>
				  [nounits]
				  <?php endif; ?>
				  <?php if(isset($single_property->foundation)): ?>
				  <strong>Foundation</strong>
				  [foundation]
				  <?php endif; ?>
				  <?php if(isset($single_property->construction)): ?>
				  <strong>Construction</strong>
				  [construction]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->BusinessType)): ?>
				  <strong>Business Type</strong>
				  [unmapped_BusinessType]
				  <?php endif; ?>
				  <?php if(isset($single_property->pooldescription)): ?>
				  <strong>Pool Description</strong>
				  [pooldescription]
				  <?php endif; ?>
				  <?php if(isset($single_property->waterfrontflag)): ?>
				  <strong>Waterfront Flag</strong>
				  [waterfrontflag]
				  <?php endif; ?>
				  <?php if(isset($single_property->waterfront)): ?>
				  <strong>Waterfront</strong>
				  [waterfront]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->Inclusions)): ?>
				  <strong>Equipment</strong>
				  [unmapped_Inclusions]
				  <?php endif; ?>
				  <?php if(isset($single_property->interiorfeatures)): ?>
				  <strong>Interior</strong>
				  [interiorfeatures]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->LandLeaseYN)): ?>
				  <strong>LandLease</strong>
				  [unmapped_LandLeaseYN]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->SeniorCommunityYN)): ?>
				  <strong>Adult Community</strong>
				  [unmapped_SeniorCommunityYN]
				  <?php endif; ?>
				  <?php if(isset($single_property->assocsecurity)): ?>
				  <strong>Security</strong>
				  [assocsecurity]
				  <?php endif; ?>
				  <?php if(isset($single_property->possession)): ?>
				  <strong>Possession</strong>
				  [possession]
				  <?php endif; ?>
				  <?php if(isset($single_property->bldgsqfeet)): ?>
				  <strong>Building Area</strong>
				  [bldgsqfeet]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->StoriesTotal)): ?>
				  <strong>Number Of Levels</strong>
				  [unmapped_StoriesTotal]
				  <?php endif; ?>
				  <?php if(isset($single_property->furnished)): ?>
				  <strong>Furnished</strong>
				  [furnished]
				  <?php endif; ?>
				  <?php if(isset($single_property->leaseterms)): ?>
				  <strong>Lease terms</strong>
				  [leaseterms]
				  <?php endif; ?>
				  <?php if(isset($single_property->rentfeeincludes)): ?>
				  <strong>Rent Fee Includes</strong>
				  [rentfeeincludes]
				  <?php endif; ?>
				  <?php if(isset($single_property->laundryfeatures)): ?>
				  <strong>Laundry Features</strong>
				  [laundryfeatures]
				  <?php endif; ?>
				  
			   </p>
			</div>
			
			<?php if( isset($single_property->unmapped->FireplaceFeatures) || isset($single_property->unmapped->WindowFeatures) || isset($single_property->unmapped->SpaFeatures) ):?>
			<div class="zy-print-block">
			   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
			   <p>
				  <?php if(isset($single_property->unmapped->FireplaceFeatures)): ?>
				  <strong>Fireplaces</strong>
				  [unmapped_FireplaceFeatures]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->WindowFeatures)): ?>
				  <strong>Window Features</strong>
				  [unmapped_WindowFeatures]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->SpaFeatures)): ?>
				  <strong>Spa</strong>
				  [unmapped_SpaFeatures]
				  <?php endif; ?>
			   </p>
			</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->parkingfeature) || isset($single_property->unmapped->AttachedGarageYN) ):?>
			<div class="zy-print-block">
			   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
			   <p>
				  <?php if(isset($single_property->parkingfeature)): ?>
				  <strong>Parking Feature</strong>
				  [parkingfeature]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->AttachedGarageYN)): ?>
				  <strong>Attached Garage</strong>
				  [unmapped_AttachedGarageYN]
				  <?php endif; ?>
			   </p>
			</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->taxes) || isset($single_property->unmapped->TaxLot) ):?>
			<div class="zy-print-block">
			   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
			   <p>
				  <?php if(isset($single_property->taxes)): ?>
				  <strong>Taxes</strong>
				  [taxes]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->TaxLot)): ?>
				  <strong>TaxLot</strong>
				  [unmapped_TaxLot]
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

<?php else: ?>

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
				  <?php if(isset($single_property->amenities)): ?>
				  <strong>Amenities</strong>
				  [amenities]
				  <?php endif; ?>
				  <?php if(isset($single_property->basement)): ?>
				  <strong>Basement</strong>
				  [basement]
				  <?php endif; ?>
				  <?php if(isset($single_property->rntype)): ?>
				  <strong>Rental Style</strong>
				  [rntype]
				  <?php endif; ?>
				  <?php if(isset($single_property->exterior)): ?>
				  <strong>Exterior Features</strong>
				  [exterior]
				  <?php endif; ?>
				  <?php if(isset($single_property->fireplaces)): ?>
				  <strong>Fireplaces</strong>
				  [fireplaces]
				  <?php endif; ?>
				  <?php if(isset($single_property->flooring)): ?>
				  <strong>Floor</strong>
				  [flooring]
				  <?php endif; ?>
				  <?php if(isset($single_property->laundryfeatures)): ?>
				  <strong>Laundry</strong>
				  [laundryfeatures]
				  <?php endif; ?>
				  <?php if(isset($single_property->petsallowed)): ?>
				  <strong>Pets Allowed</strong>
				  [petsallowed]
				  <?php endif; ?>
				  <?php if(isset($single_property->unitlevel)): ?>
				  <strong>Unit Level</strong>
				  [unitlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->waterviewfeatures)): ?>
				  <strong>Waterview</strong>
				  [waterviewfeatures]
				  <?php endif; ?>
				  <?php if(isset($single_property->waterfront)): ?>
				  <strong>Waterfront</strong>
				  [waterfront]
				  <?php endif; ?>
			   </p>
			</div>
			
			<?php if( isset($single_property->garagespaces) || isset($single_property->parkingspaces) || isset($single_property->roadtype) ):?>
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
			<?php endif; ?>
			
			<div class="zy-print-block">
			   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Deposits, Inclusions</h6>
			   <p>
				  <?php if(isset($single_property->firstmonreqd)): ?>
				  <strong>1st Month</strong>
				  [firstmonreqd]
				  <?php endif; ?>
				  <?php if(isset($single_property->lastmonreqd)): ?>
				  <strong>Last Month</strong>
				  [lastmonreqd]
				  <?php endif; ?>
				  <?php if(isset($single_property->secdeposit)): ?>
				  <strong>Secutity</strong>
				  [secdeposit]
				  <?php endif; ?>
				  <?php if(isset($single_property->rentfeeincludes)): ?>
				  <strong>Rent Includes</strong>
				  [rentfeeincludes]
				  <?php endif; ?>
			   </p>
			</div>
			
			<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Master Bedroom</h6> 
				   <p>
					  <?php if(isset($single_property->mbrdimen)): ?>
					  <strong>Size</strong>
					  [mbrdimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->mbrlevel)): ?>
					  <strong>Level</strong>
					  [mbrlevel]
					  <?php endif; ?>
					  <?php if(isset($single_property->mbrdscrp)): ?>
					  <strong>Features</strong>
					  [mbrdscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bedroom #2</h6> 
				   <p>
					  <?php if(isset($single_property->bed2DIMEN)): ?>
					  <strong>Size</strong>
					  [bed2DIMEN]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed2LEVEL)): ?>
					  <strong>Level</strong>
					  [bed2LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed2DSCRP)): ?>
					  <strong>Features</strong>
					  [bed2DSCRP]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bedroom #3</h6> 
				   <p>
					  <?php if(isset($single_property->bed3DIMEN)): ?>
					  <strong>Size</strong>
					  [bed3DIMEN]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed3LEVEL)): ?>
					  <strong>Level</strong>
					  [bed3LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed3DSCRP)): ?>
					  <strong>Features</strong>
					  [bed3DSCRP]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bedroom #4</h6> 
				   <p>
					  <?php if(isset($single_property->bed4DIMEN)): ?>
					  <strong>Size</strong>
					  [bed4DIMEN]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed4LEVEL)): ?>
					  <strong>Level</strong>
					  [bed4LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed4DSCRP)): ?>
					  <strong>Features</strong>
					  [bed4DSCRP]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bedroom #5</h6> 
				   <p>
					  <?php if(isset($single_property->bed5DIMEN)): ?>
					  <strong>Size</strong>
					  [bed5DIMEN]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed5LEVEL)): ?>
					  <strong>Level</strong>
					  [bed5LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->bed5DSCRP)): ?>
					  <strong>Features</strong>
					  [bed5DSCRP]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bathroom #1</h6> 
				   <p>
					  <?php if(isset($single_property->bth1dimen)): ?>
					  <strong>Size</strong>
					  [bth1dimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->bth1LEVEL)): ?>
					  <strong>Level</strong>
					  [bth1LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->bth1dscrp)): ?>
					  <strong>Features</strong>
					  [bth1dscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bathroom #2</h6> 
				   <p>
					  <?php if(isset($single_property->bth2dimen)): ?>
					  <strong>Size</strong>
					  [bth2dimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->bth2LEVEL)): ?>
					  <strong>Level</strong>
					  [bth2LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->bth2dscrp)): ?>
					  <strong>Features</strong>
					  [bth2dscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Bathroom #3</h6> 
				   <p>
					  <?php if(isset($single_property->bth3dimen)): ?>
					  <strong>Size</strong>
					  [bth3dimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->bth3level)): ?>
					  <strong>Level</strong>
					  [bth3level]
					  <?php endif; ?>
					  <?php if(isset($single_property->bth3dscrp)): ?>
					  <strong>Features</strong>
					  [bth3dscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Kitchen</h6> 
				   <p>
					  <?php if(isset($single_property->kitdimen)): ?>
					  <strong>Size</strong>
					  [kitdimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->kitlevel)): ?>
					  <strong>Level</strong>
					  [kitlevel]
					  <?php endif; ?>
					  <?php if(isset($single_property->kitdscrp)): ?>
					  <strong>Features</strong>
					  [kitdscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Family Room</h6> 
				   <p>
					  <?php if(isset($single_property->famdimen)): ?>
					  <strong>Size</strong>
					  [famdimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->famlevel)): ?>
					  <strong>Level</strong>
					  [famlevel]
					  <?php endif; ?>
					  <?php if(isset($single_property->famdscrp)): ?>
					  <strong>Features</strong>
					  [famdscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Living Room</h6> 
				   <p>
					  <?php if(isset($single_property->livdimen)): ?>
					  <strong>Size</strong>
					  [livdimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->livlevel)): ?>
					  <strong>Level</strong>
					  [livlevel]
					  <?php endif; ?>
					  <?php if(isset($single_property->livdscrp)): ?>
					  <strong>Features</strong>
					  [livdscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Dining Room</h6> 
				   <p>
					  <?php if(isset($single_property->dindimen)): ?>
					  <strong>Size</strong>
					  [dindimen]
					  <?php endif; ?>
					  <?php if(isset($single_property->dinlevel)): ?>
					  <strong>Level</strong>
					  [dinlevel]
					  <?php endif; ?>
					  <?php if(isset($single_property->dindscrp)): ?>
					  <strong>Features</strong>
					  [dindscrp]
					  <?php endif; ?>
				   </p>
				</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
				<div class="zy-print-block">
				   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Additional Room #1</h6> 
				   <p>
					  <?php if(isset($single_property->oth1DIMEN)): ?>
					  <strong>Size</strong>
					  [oth1DIMEN]
					  <?php endif; ?>
					  <?php if(isset($single_property->oth1LEVEL)): ?>
					  <strong>Level</strong>
					  [oth1LEVEL]
					  <?php endif; ?>
					  <?php if(isset($single_property->oth1DSCRP)): ?>
					  <strong>Features</strong>
					  [oth1DSCRP]
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
	
<?php endif; ?>