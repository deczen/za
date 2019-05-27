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
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nobedrooms]</div>
				 <div class="bt-print__meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nofullbaths]</div>
				 <div class="bt-print__meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->no34BATHS)): ?>
			  <td>
				 <div class="bt-print__meta-val">[no34BATHS]</div>
				 <div class="bt-print__meta-label">3/4 BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nohalfbaths]</div>
				 <div class="bt-print__meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="bt-print__meta-val">[acre]</div>
				 <div class="bt-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="bt-print__meta-val">[squarefeet]</div>
				 <div class="bt-print__meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="bt-print__meta-val">$170</div>
				 <div class="bt-print__meta-label">$/SQFT</div>
			  </td> */ ?>
			<?php /*if(isset($single_property->yearbuilt)): ?>
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
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Home Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			 [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Level)): ?>
			  <strong>Level</strong>
			 [unmapped_Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Laundry Room Location'})): ?>
			  <strong>Laundry Room Location</strong>
			  [unmapped_Laundry Room Location]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Exemptions)): ?>
			  <strong>Exemptions</strong>
			  [unmapped_Exemptions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})): ?>
			  <strong>Kitchen Cntrp & Backsplashes</strong>
			  [unmapped_Kitchen Cntrp & Backsplashes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Defects)): ?>
			  <strong>Defects</strong>
			  [unmapped_Defects]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Flooring)): ?>
			  <strong>Floor</strong>
			  [unmapped_Flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Windows/Treatments'})): ?>
			  <strong>Windows/Treatments</strong>
			  [unmapped_Windows/Treatments]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Patio Features'})): ?>
			  <strong>Patio Features</strong>
			  [unmapped_Patio Features]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Plan Description'})): ?>
			  <strong>Plan Description</strong>
			  [unmapped_Plan Description]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Lighting'})): ?>
			  <strong>Kitchen Lighting</strong>
			  [unmapped_Kitchen Lighting]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Cabinets)): ?>
			  <strong>Cabinets</strong>
			  [unmapped_Cabinets]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Sinks'})): ?>
			  <strong>Kitchen Sinks</strong>
			  [unmapped_Kitchen Sinks]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bath Vanities'})): ?>
			  <strong>Bath Vanities</strong>
			  [unmapped_Bath Vanities]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fencing)): ?>
			  <strong>Fencing</strong>
			  [unmapped_Fencing]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Rented?'})): ?>
			  <strong>Rented</strong>
			  [unmapped_Rented?]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"Maid's Room"})): ?>
			  <strong>Maid's Room</strong>
			  [unmapped_Maid's Room]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"Lockbox Type"})): ?>
			  <strong>Lockbox Type</strong>
			  [unmapped_Lockbox Type]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"New Home or Resale"})): ?>
			  <strong>New Home or Resale</strong>
			  [unmapped_New Home or Resale]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"Is Property Also For Lease?"})): ?>
			  <strong>Is Property Also For Lease?</strong>
			  [unmapped_Is Property Also For Lease?]
			  <?php endif; ?>
			  <?php if(isset($single_property->vacant)): ?>
			  <strong>Vacant</strong>
			  [vacant]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotsize)): ?>
			  <strong>Lot Size</strong>
			  [lotsize]
			  <?php endif; ?>
			  <?php if(isset($single_property->schooldistrict)): ?>
			  <strong>Lot Size</strong>
			  [schooldistrict]
			  <?php endif; ?>
			  
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Exterior Features</h6>
		   <p>
			  <?php /* <strong>Beach Description</strong>
			  Lake/Pond
			  <strong>Beach Ownership</strong>
			  Private */ ?>
			  <?php if(isset($single_property->beachfrontflag)): ?>
			  <strong>Beachfront</strong>
			  [beachfrontflag]
			  <?php endif; ?>
			  <?php /* <strong>Color</strong>
			  Light Grey */ ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Exterior</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php /* <strong>Exterior Features</strong>
			  Deck */ ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->garagespaces)): ?>
			  <strong>Garage Spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Road Type</strong>
			  [roadtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Features</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
			  <?php /* <strong>Road Type</strong>
			  Private */ ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			 [roofmaterial]
			  <?php endif; ?>
			  <?php /* <strong>Style</strong>
			  Ranch
			  <strong>Water View Features</strong>
			  Pond
			  <strong>Waterfront</strong> 
			  Pond */ ?>
			  <?php if(isset($single_property->waterviewfeatures)): ?>
			  <strong>Waterview</strong>
			  [waterviewfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfront)): ?>
			  <strong>Waterfront</strong>
			  [waterfront]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfrontflag)): ?>
			  <strong>Waterfront Flag</strong>
			  [waterfrontflag]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterviewflag)): ?>
			  <strong>Waterview Flag</strong>
			  [waterviewflag]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
		   <p>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundrylevel)): ?>
			  <strong>Laundry</strong>
			  [laundrylevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitlevel)): ?>
			  <strong>Unit Level</strong>
			  [unitlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Basement Feature</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->mbrlevel)): ?>
			  <strong>Master Bedroom</strong>
			  [mbrlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed2LEVEL)): ?>
			   <strong>Bedrooms #2</strong>
			  [bed2LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed3LEVEL)): ?>
			   <strong>Bedrooms #3</strong>
			  [bed3LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed4LEVEL)): ?>
			   <strong>Bedrooms #4</strong>
			  [bed4LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed5LEVEL)): ?>
			   <strong>Bedrooms #5</strong>
			  [bed5LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bth1LEVEL)): ?>
			   <strong>Bathroom #1</strong>
			  [bth1LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bth2LEVEL)): ?>
			   <strong>Bathroom #2</strong>
			  [bth2LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bth3level)): ?>
			   <strong>Bathroom #3</strong>
			  [bth3level]
			  <?php endif; ?>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->coolingzones)): ?>
			  <strong>Cool Zones</strong>
			  [coolingzones]
			  <?php endif; ?>
			  <?php if(isset($single_property->heatzones)): ?>
			  <strong>Heat Zones</strong>
			  [heatzones]
			  <?php endif; ?>
			  <?php /* <strong>Cooling</strong>
			  Wall Ac
			  <strong>Cooling Zones</strong>
			  0 */ ?>
			  <?php if(isset($single_property->energyfeatures)): ?>
			  <strong>Energy Features</strong>
			  [energyfeatures]
			  <?php endif; ?>
			  <?php /* <strong>Family Room Level</strong>
			  First Floor */ ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs1)): ?>
			  <strong>Fireplaces Unit1</strong>
			  [frplcs1]
			  <?php endif; ?>
			  <?php if(isset($single_property->frplcs2)): ?>
			  <strong>Fireplaces Unit2</strong>
			  [frplcs2]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Flooring</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs1)): ?>
			  <strong>Floors Unit1</strong>
			  [flrs1]
			  <?php endif; ?>
			  <?php if(isset($single_property->flrs2)): ?>
			  <strong>Floors Unit2</strong>
			  [flrs2]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths1)): ?>
			  <strong>Full Baths Unit1</strong>
			  [fbths1]
			  <?php endif; ?>
			  <?php if(isset($single_property->fbths2)): ?>
			  <strong>Full Baths Unit2</strong>
			  [fbths2]
			  <?php endif; ?>
			  <?php if(isset($single_property->hbths1)): ?>
			  <strong>Half Baths Unit1</strong>
			  [hbths1]
			  <?php endif; ?>
			  <?php if(isset($single_property->hbths2)): ?>
			  <strong>Half Baths Unit2</strong>
			  [hbths2]
			  <?php endif; ?>
			  <?php /* <strong>Heat Zones</strong>
			  2
			  <strong>Heating</strong>
			  Hot Water Baseboard */ ?>
			  <?php if(isset($single_property->hotwater)): ?>
			  <strong>Hot Water</strong>
			  [hotwater]
			  <?php endif; ?>
			  <?php /* <strong>Insulation Features</strong>
			  FullFiberglass
			  <strong>Interior Features</strong>
			  Cable Available
			  <strong>Kitchen Level</strong>
			  First Floor
			  <strong>Living Room Level</strong>
			  First Floor
			  <strong>Master Bath</strong>
			  No
			  <strong>Master Bedroom Level</strong>
			  First Floor */ ?>
			  <?php if(isset($single_property->levels)): ?>
			  <strong>Levels</strong>
			  [levels]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels1)): ?>
			  <strong>Levels Unit1</strong>
			  [levels1]
			  <?php endif; ?>
			  <?php if(isset($single_property->levels2)): ?>
			  <strong>Levels Unit2</strong>
			  [levels2]
			  <?php endif; ?>
			  <?php if(isset($single_property->norooms)): ?>
			  <strong>Rooms</strong>
			  [norooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms1)): ?>
			  <strong>Rooms Unit1</strong>
			  [rms1]
			  <?php endif; ?>
			  <?php if(isset($single_property->rms2)): ?>
			  <strong>Rooms Unit2</strong>
			  [rms2]
			  <?php endif; ?>
			  <?php if(isset($single_property->kitlevel)): ?>
			  <strong>Kitchen</strong>
			  [kitlevel]
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