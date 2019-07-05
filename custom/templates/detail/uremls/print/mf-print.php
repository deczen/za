<div class="zy-print__wrap">
	<div class="zy-print__header">
		<div class="zy-print__logo">
			<img src="<?php echo $print_logo; ?>">
		</div>
		<div class="zy-print__title">
			<h4 class="my-5 uk-text-truncate" style="color: <?php echo $print_color; ?> !important;">
			   <?php echo zipperagent_get_address($single_property); ?> 
			</h4>
		</div>
	</div>
	 <div class="zy-print__left">
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
		<ul class="zy-print__meta">
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
		<table class="zy-print__meta-blocks">
		   <tr>
			<?php if(isset($single_property->totalrooms)): ?>
			  <td>
				 <div class="zy-print__meta-val">[totalrooms]</div>
				 <div class="zy-print__meta-label">Total Units</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nobedrooms]</div>
				 <div class="zy-print__meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nofullbaths]</div>
				 <div class="zy-print__meta-label">FULL BATHS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nohalfbaths]</div>
				 <div class="zy-print__meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print__meta-val">[squarefeet]</div>
				 <div class="zy-print__meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print__meta-val">[acre]</div>
				 <div class="zy-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="zy-print__meta-val">$170</div>
				 <div class="zy-print__meta-label">$/SQFT</div>
			  </td>  ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <td>
				 <div class="zy-print__meta-val">[yearbuilt]</div>
				 <div class="zy-print__meta-label">Built</div>
			  </td>
			<?php endif; */?>
		   </tr>
		</table>
		<div class="zy-print__area__wrap">
		   <div class="zy-print__area">
			<?php if(isset($single_property->neighborhood)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Neighborhood:</div>
				 <div class="zy-print__area-val">[neighborhood]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->proptype)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Type:</div>
				 <div class="zy-print__area-val">[proptype]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->yearbuilt)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Built:</div>
				 <div class="zy-print__area-val">[yearbuilt]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">County:</div>
				 <div class="zy-print__area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			<?php endif; ?>
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Area:</div>
				 <div class="zy-print__area-val">[lngAREADESCRIPTION]</div>
			  </div>
			<?php endif; ?>
		   </div>
		   <div class="zy-print__area">
		   </div>
		</div>
		<?php if(isset($single_property->remarks)): ?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Property Description</h6>
		   <div class="zy-print__description">[remarks]</div>
		</div>
		<?php endif; ?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->additinfo)): ?>
			  <strong>Additional Information</strong>
			  [unmapped_additinfo]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->grossoper)): ?>
			  <strong>Gross Operating</strong>
			  [unmapped_grossoper]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->yearlyoccup)): ?>
			  <strong>Yearly Occupancy </strong>
			  [unmapped_yearlyoccup]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->hascommunitypool)): ?>
			  <strong>Community Pool</strong>
			  [unmapped_hascommunitypool]
			  <?php endif; ?>
			  <?php if(isset($single_property->exclusions)): ?>
			  <strong>Exclusions</strong>
			  [exclusions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ownertype)): ?>
			  <strong>Owner Type</strong>
			  [unmapped_ownertype]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscpool)): ?>
			  <strong>Pool</strong>
			  [asscpool]
			  <?php endif; ?>
			  <?php if(isset($single_property->possession)): ?>
			  <strong>Possession</strong>
			  [possession]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->schoolother)): ?>
			  <strong>School Other</strong>
			  [unmapped_schoolother]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->hasspa)): ?>
			  <strong>Spa</strong>
			  [unmapped_hasspa]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->telcom)): ?>
			  <strong>Telecommunications</strong>
			  [unmapped_telcom]
			  <?php endif; ?>
			  <?php if(isset($single_property->termsfeature)): ?>
			  <strong>Terms</strong>
			  [termsfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water</strong>
			  [water]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->watershares)): ?>
			  <strong>Water Shares</strong>
			  [unmapped_watershares]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->yearremodeled)): ?>
			  <strong>Year Remodeled</strong>
			  [unmapped_yearremodeled]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->zoningchar)): ?>
			  <strong>Zoning Code</strong>
			  [unmapped_zoningchar]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print__block">
			<h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Exterior Features</h6>
			<p>
			  <?php if(isset($single_property->unmapped->driveway)): ?>
			  <strong>Driveway</strong>
			  [unmapped_driveway]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Exterior Building Materials</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->frontage)): ?>
			  <strong>Frontage Facing</strong>
			  [frontage]
			  <?php endif; ?>
			  <?php if(isset($single_property->landdesc)): ?>
			  <strong>Landscaping</strong>
			  [landdesc]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->dimback)): ?>
			  <strong>Length In Feet Of Back Of Property</strong>
			  [unmapped_dimback]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->dimside)): ?>
			  <strong>Length In Feet Of Side Of Property</strong>
			  [unmapped_dimside]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Description</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Features</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->storage)): ?>
			  <strong>Storage</strong>
			  [unmapped_storage]
			  <?php endif; ?>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
		   <p>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Floor Coverings</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating Features</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->unmapped->levbbed)): ?>
			  <strong>Level Basement Bedrooms</strong>
			  [unmapped_levbbed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->levbbathfull)): ?>
			  <strong>Level Basement Full Baths</strong>
			  [unmapped_levbbathfull]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->levbbathhalf)): ?>
			  <strong>Level Basement Half Baths</strong>
			  [unmapped_levbbathhalf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->levbsqf)): ?>
			  <strong>Level Basement Sq Ft</strong>
			 [unmapped_levbsqf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->levbbathtq)): ?>
			  <strong>Level Basement Three Quarter Baths</strong>
			  [unmapped_levbbathtq]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev1bed)): ?>
			  <strong>Level1 Bedrooms</strong>
			  [unmapped_lev1bed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev1bathfull)): ?>
			  <strong>Level1 Bedrooms</strong>
			  [unmapped_lev1bathfull]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev1bathhalf)): ?>
			  <strong>Level1 Half Baths</strong>
			  [unmapped_lev1bathhalf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev1sqf)): ?>
			  <strong>Level1 Sq Ft</strong>
			  [unmapped_lev1sqf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev1bathtq)): ?>
			  <strong>Level1 Three Quarter Baths</strong>
			  [unmapped_lev1bathtq]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev2bed)): ?>
			  <strong>Level2 Bedrooms</strong>
			  [unmapped_lev2bed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev2bathfull)): ?>
			  <strong>Level2 Bedrooms</strong>
			  [unmapped_lev2bathfull]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev2bathhalf)): ?>
			  <strong>Level2 Half Baths</strong>
			  [unmapped_lev2bathhalf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev2sqf)): ?>
			  <strong>Level2 Sq Ft</strong>
			  [unmapped_lev2sqf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev2bathtq)): ?>
			  <strong>Level2 Three Quarter Baths</strong>
			  [unmapped_lev2bathtq]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev3bed)): ?>
			  <strong>Level3 Bedrooms</strong>
			  [unmapped_lev3bed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev3bathfull)): ?>
			  <strong>Level3 Bedrooms</strong>
			  [unmapped_lev3bathfull]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev3bathhalf)): ?>
			  <strong>Level3 Half Baths</strong>
			  [unmapped_lev3bathhalf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev3sqf)): ?>
			  <strong>Level3 Sq Ft</strong>
			  [unmapped_lev3sqf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev3bathtq)): ?>
			  <strong>Level3 Three Quarter Baths</strong>
			  [unmapped_lev3bathtq]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev4bed)): ?>
			  <strong>Level4 Bedrooms</strong>
			  [unmapped_lev4bed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev4bathfull)): ?>
			  <strong>Level4 Bedrooms</strong>
			  [unmapped_lev4bathfull]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev4bathhalf)): ?>
			  <strong>Level4 Half Baths</strong>
			  [unmapped_lev4bathhalf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev4sqf)): ?>
			  <strong>Level4 Sq Ft</strong>
			  [unmapped_lev4sqf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->lev4bathtq)): ?>
			  <strong>Level4 Three Quarter Baths</strong>
			  [unmapped_lev4bathtq]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->mbrlevel)): ?>
			  <strong>Master Bedrooms</strong>
			  [unmapped_mbrlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->nobaths)): ?>
			  <strong>Total Baths</strong>
			  [nobaths]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totkitchenb)): ?>
			  <strong>Total Breakfast Bars</strong>
			  [unmapped_totkitchenb]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totden)): ?>
			  <strong>Total Dens</strong>
			  [unmapped_totden]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totfamroom)): ?>
			  <strong>Total Family Rooms</strong>
			  [unmapped_totfamroom]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Total Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totdiningf)): ?>
			  <strong>Total Formal Dining Rooms</strong>
			  [unmapped_totdiningf]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->nolivinglevels)): ?>
			  <strong>Total Formal Living Rooms</strong>
			  [unmapped_nolivinglevels]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totkitchenk)): ?>
			  <strong>Total Kitchens</strong>
			  [unmapped_totkitchenk]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totlaundry)): ?>
			  <strong>Total Laundry Rooms</strong>
			  [unmapped_totlaundry]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->totdinings)): ?>
			  <strong>Total Semi Formal Dining Rooms</strong>
			  [unmapped_totdinings]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->unmapped->windows)): ?>
			  <strong>Windows</strong>
			  [unmapped_windows]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->garageparking)): ?>
			  <strong>Garage Parking Features</strong>
			  [garageparking]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Capacity</strong>
			  [parkingspaces]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Taxes</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->homeownassociation)): ?>
			  <strong>Hoa</strong>
			  [homeownassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			   <strong>Hoa Fee</strong>
			  [hoafee]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="zy-print__block">
		<?php if( $source_details ){
			echo $source_details;
		}else{
			echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
		} ?>
		</div>
	 </div>
	 <div class="zy-print__right">
		<div class="uk-text-small mb-5">&nbsp;</div>
		<div class="zy-print__media-list">
			<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
			<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
			<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
			<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="zy-print__google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
		</div>
		<?php if( $agent ): ?>
		<div class="zy-print__agent">
		   <div class="zy-cell-align zy-cell-align--small">
			  <?php  if( isset( $agent->imageURL ) ): ?>
			  <div>
				 <img class="zy-image__no-mw zy-print__agent-img" src="<?php echo $agent->imageURL; ?>" />
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