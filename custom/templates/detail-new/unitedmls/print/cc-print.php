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
				 <div class="zy-print-meta-label">TOTAL ROOMS</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nobedrooms]</div>
				 <div class="zy-print-meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nofullbaths]</div>
				 <div class="zy-print-meta-label">Full Baths</div>
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
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->flooring)): ?>
			  <strong>Floor</strong>
			  [flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->norooms)): ?>
			  <strong>Total Rooms</strong>
			  [norooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->complexcomplete)): ?>
			  <strong>Complex Completed</strong>
			  [complexcomplete]
			  <?php endif; ?>
			  <?php if(isset($single_property->condominiumname)): ?>
			  <strong>Complex Name</strong>
			  [condominiumname]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Condo Style'})): ?>
			  <strong>Condo</strong>
			  [unmapped_Condo Style]
			  <?php endif; ?>
			  <?php if(isset($single_property->condoassociation)): ?>
			  <strong>Condo Type</strong>
			  [condoassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Convenient To'})): ?>
			  <strong>Convenient To</strong>
			  [unmapped_Convenient To]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Flood Ins Required'})): ?>
			  <strong>Flood Insurance Required</strong>
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
			  <?php if(isset($single_property->location)): ?>
			  <strong>Location Description</strong>
			  [location]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size Source'})): ?>
			  <strong>Lot Size Source</strong>
			  [unmapped_Lot Size Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->management)): ?>
			  <strong>Management</strong>
			  [management]
			  <?php endif; ?>
			  <?php if(isset($single_property->beachmilesto)): ?>
			  <strong>Miles From Beach</strong>
			  [beachmilesto]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Monthly Association Fee</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Neighborhood Amen'})): ?>
			  <strong>Neighborhood Amen</strong>
			  [unmapped_Neighborhood Amen]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Other Assessments'})): ?>
			  <strong>Other Assessments</strong>
			  [unmapped_Other Assessments]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Property Sub Type</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer</strong>
			  [sewer]
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
			  <?php if(isset($single_property->mbrlevel)): ?>
			  <strong>Master Bedroom Level</strong>
			  [mbrlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Exterior Features</h6>
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
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscpool)): ?>
			  <strong>Pool</strong>
			  [asscpool]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Street Description</strong>
			  [roadtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Topography</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitplacement)): ?>
			  <strong>Unit Placement</strong>
			  [unitplacement]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Water Access'})): ?>
			  <strong>Water Access</strong>
			  [unmapped_Water Access]
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
			  <?php if(isset($single_property->waterviewFlag)): ?>
			  <strong>Waterview Direction</strong>
			  [waterviewFlag]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Siding Description</strong>
			  [exterior]
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
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Annual Taxes</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->reqdownassociation)): ?>
			  <strong>Association</strong>
			  [reqdownassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Association Fee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->beachownership)): ?>
			  <strong>Beach Ownership</strong>
			  [beachownership]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->assessedvaluebldg)): ?>
			  <strong>Improvement Assessments</strong>
			  [assessedvaluebldg]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Description</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Garage)): ?>
			  <strong>Garage</strong>
			  [unmapped_Garage]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Underground Fuel Tank'})): ?>
			  <strong>Underground Fuel Tank</strong>
			  [unmapped_Underground Fuel Tank]
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