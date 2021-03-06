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
			  <?php if(isset($single_property->beachownership)): ?>
			  <strong>Beach Ownership</strong>
			  [beachownership]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Flood Ins Required'})): ?>
			  <strong>Flood Ins Required</strong>
			  [unmapped_Flood Ins Required]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Fuel Type'})): ?>
			  <strong>Fuel Type</strong>
			  [unmapped_Fuel Type]
			  <?php endif; ?>
			  <?php if(isset($single_property->assessedvaluebldg)): ?>
			  <strong>Improvement Assessments</strong>
			  [assessedvaluebldg]
			  <?php endif; ?>
			  <?php if(isset($single_property->leadpaint)): ?>
			  <strong>Lead Paint</strong>
			  [leadpaint]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size Source'})): ?>
			  <strong>Lot Size Source</strong>
			  [unmapped_Lot Size Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Property Sub Type</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Separate Living Qtrs'})): ?>
			  <strong>Separate Living Quarters</strong>
			  [unmapped_Separate Living Qtrs]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Sewer: Septic Tank'})): ?>
			  <strong>Sewer Septic Tank</strong>
			  [unmapped_Sewer: Septic Tank]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Special Listing Cond'})): ?>
			  <strong>Special Listing Cond</strong>
			  [unmapped_Special Listing Cond]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'SqFt Source'})): ?>
			  <strong>Sq Ft Source</strong>
			  [unmapped_SqFt Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water</strong>
			  [water]
			  <?php endif; ?>
			  <?php if(isset($single_property->yearbuiltdescrp)): ?>
			  <strong>Year Built Description</strong>
			  [yearbuiltdescrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->yearround)): ?>
			  <strong>Year Round</strong>
			  [yearround]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Beach/Lake/Pond'})): ?>
			  <strong>Beach Lake Pond</strong>
			  [unmapped_Beach/Lake/Pond]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Siding Description'})): ?>
			  <strong>Siding Description</strong>
			  [unmapped_Siding Description]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Street Description'})): ?>
			  <strong>Street Description</strong>
			  [unmapped_Street Description]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Topography</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Convenient To'})): ?>
			  <strong>Convenient To</strong>
			  [unmapped_Convenient To]
			  <?php endif; ?>
			  <?php if(isset($single_property->location)): ?>
			  <strong>Location Description</strong>
			  [location]
			  <?php endif; ?>
			  <?php if(isset($single_property->beachmilesto)): ?>
			  <strong>Miles From Beach</strong>
			  [beachmilesto]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Neighborhood Amen'})): ?>
			  <strong>Neighborhood Amenities</strong>
			  [unmapped_Neighborhood Amen]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Exterior Features</h6>
		   <p>
			  <?php if(isset($single_property->beachdescription)): ?>
			  <strong>Beach Description</strong>
			  [beachdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterbodyname)): ?>
			  <strong>Beach Lake Pondn</strong>
			  [waterbodyname]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Dock)): ?>
			  <strong>Dock</strong>
			  [unmapped_Dock]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Garage)): ?>
			  <strong>Garage Description</strong>
			  [unmapped_Garage]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Features</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscpool)): ?>
			  <strong>Pool</strong>
			  [asscpool]
			  <?php endif; ?>
			  <?php if(isset($single_property->pooldescription)): ?>
			  <strong>Pool Description</strong>
			  [pooldescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Description</strong>
			 [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Siding Description</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Street Description</strong>
			  [roadtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Topography</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Waterview)): ?>
			  <strong>Water View</strong>
			  [unmapped_Waterview]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfrontflag)): ?>
			  <strong>Waterfront</strong>
			  [waterfrontflag]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfront)): ?>
			  <strong>Waterfront Description</strong>
			  [waterfront]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
		   <p>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Basement Area SqFt'})): ?>
			  <strong>Basement Area SqFt</strong>
			  [unmapped_Basement Area SqFt]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Basement Description</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed2DSCRP)): ?>
			  <strong>Bedroom2 Features</strong>
			  [bed2DSCRP]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed3DSCRP)): ?>
			  <strong>Bedroom3 Features</strong>
			  [bed3DSCRP]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed4DSCRP)): ?>
			  <strong>Bedroom4 Features</strong>
			  [bed4DSCRP]
			  <?php endif; ?>
			  <?php if(isset($single_property->dindscrp)): ?>
			  <strong>Dining Room Features</strong>
			  [dindscrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fireplace)): ?>
			  <strong>Fireplace</strong>
			  [unmapped_Fireplace]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Floor</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen/Dining Combo'})): ?>
			  <strong>Kitchen Dining Combo</strong>
			  [unmapped_Kitchen/Dining Combo]
			  <?php endif; ?>
			  <?php if(isset($single_property->kitdscrp)): ?>
			  <strong>Kitchen Features</strong>
			  [kitdscrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->livdscrp)): ?>
			  <strong>Living Room Features</strong>
			  [livdscrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Master Bedroom'})): ?>
			  <strong>Master Bedroom</strong>
			  [unmapped_Master Bedroom]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Master Bedroom: Master Bedroom Level'})): ?>
			  <strong>Master Bedroom Level</strong>
			  [unmapped_Master Bedroom: Master Bedroom Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->norooms)): ?>
			  <strong>Total Rooms</strong>
			  [norooms]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Room Informations</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->{'Unit 1 Info: Bedrooms'})): ?>
			  <strong>Unit1 Bedrooms</strong>
			  [unmapped_Unit 1 Info: Bedrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 1 Features'})): ?>
			  <strong>Unit1 Features</strong>
			  [unmapped_Unit 1 Features]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 1 Info: Floor/Level'})): ?>
			  <strong>Unit1 Floor Level</strong>
			  [unmapped_Unit 1 Info: Floor/Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 1 Floor Lvl/Des'})): ?>
			  <strong>Unit1 Floor Level Description</strong>
			  [unmapped_Unit 1 Floor Lvl/Des]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 1 Info: Full Baths'})): ?>
			  <strong>Unit1 Full Baths</strong>
			  [unmapped_Unit 1 Info: Full Baths]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 2 Info: Bedrooms'})): ?>
			  <strong>Unit2 Bedrooms</strong>
			  [unmapped_Unit 2 Info: Bedrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 2 Features'})): ?>
			  <strong>Unit2 Features</strong>
			  [unmapped_Unit 2 Features]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 2 Floor Lvl/Des'})): ?>
			  <strong>Unit2 Floor Level Description</strong>
			  [unmapped_Unit 2 Floor Lvl/Des]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Unit 2 Info: Full Baths'})): ?>
			  <strong>Unit2 Full Baths</strong>
			  [unmapped_Unit 2 Info: Full Baths]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->hotwater)): ?>
			  <strong>Hot Water</strong>
			  [hotwater]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Hot Water Source'})): ?>
			  <strong>Hot Water Source</strong>
			  [unmapped_Hot Water Source]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Annual Taxes</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->totalassessedvalue)): ?>
			  <strong>Total Assessment</strong>
			  [totalassessedvalue]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Other Assessments'})): ?>
			  <strong>Other Assessments</strong>
			  [unmapped_Other Assessments]
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