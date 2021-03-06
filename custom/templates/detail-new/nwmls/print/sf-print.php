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
			<?php if( isset($single_property->style)): ?>
			<strong>Architecture</strong> [style]
			<?php endif; ?>
			<?php if( isset($single_property->construction)): ?>
			<strong>Construction</strong> [construction]
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<strong>Foundation</strong> [foundation]
			<?php endif; ?>
			<?php if( isset($single_property->garageparking)): ?>
			<strong>Garage</strong> [garageparking]
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<strong>Lot Dimensions</strong> [lotdescription]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Outside Feature"})): ?>
			<strong>Outside Features</strong> [unmapped_Outside Feature]
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<strong>Roof</strong> [roofmaterial]
			<?php endif; ?>
			<?php if( isset($single_property->basement)): ?>
			<strong>Basement</strong> [basement]
			<?php endif; ?>
			<?php if( isset($single_property->basementfeature)): ?>
			<strong>Basement Features</strong> [basementfeature]
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<strong>Special Financing</strong> [specialfinancing]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Suburb)): ?>
			<strong>Suburb SIC</strong> [unmapped_Suburb]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit Entry Level"})): ?>
			<strong>Unit Entry Level</strong> [unmapped_Unit Entry Level]
			<?php endif; ?>
			<?php if( isset($single_property->zonedescription)): ?>
			<strong>Zoning</strong> [zonedescription]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Assessment Amt"})): ?>
			<strong>Annual Assessment Amt</strong> [unmapped_Assessment Amt]
			<?php endif; ?>
			<?php if( isset($single_property->lngAREADESCRIPTION)): ?>
			<strong>Area</strong> [lngAREADESCRIPTION]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<strong>Auction</strong> [unmapped_Auction]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Available for Lease"})): ?>
			<strong>Available For Lease</strong> [unmapped_Available for Lease]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Amount"})): ?>
			<strong>Hoa Amount</strong> [unmapped_Total Amount]
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<strong>Hoa Fee</strong> [feeinterval]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Inc.In HOA/Condo Fee"})): ?>
			<strong>Hoa Fee Includes</strong> [unmapped_Inc.In HOA/Condo Fee]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Management Co"})): ?>
			<strong>Hoa Management Co</strong> [unmapped_HOA Management Co]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"HOA Yes/No"})): ?>
			<strong>Hoa YN</strong> [unmapped_HOA Yes/No]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
			<strong>Miscellaneous</strong> [unmapped_Miscellaneous]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<strong>Occupancy </strong> [unmapped_Occupancy]
			<?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			<?php if( isset($single_property->gas)): ?>
			<strong>Gas</strong> [gas]
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<strong>Appliances</strong> [appliances]
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<strong>Sewer</strong> [sewer]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Primary Water Source"})): ?>
			<strong>Water Source</strong> [unmapped_Primary Water Source]
			<?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
			<p>  
			<?php if( isset($single_property->unmapped->{"Other Parking"})): ?>
			<strong>Parking</strong> [unmapped_Other Parking]
			<?php endif; ?>
			</p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
			<p> 
			  <?php if( isset($single_property->unmapped->{"Semi-Annual Taxes"})): ?>
			  <strong>Semi Annual Taxes</strong> [unmapped_Semi-Annual Taxes]
			  <?php endif; ?>
		   </p>
		</div>		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
			<p> 
				<?php if( isset($single_property->masterbath)): ?>
				<strong>Bath1 Features</strong> [masterbath]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Bathroom Level 1"})): ?>
				<strong>Bathroom Level1</strong> [unmapped_Bathroom Level 1]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Bedroom Level 1"})): ?>
				<strong>Bedroom Level1</strong> [unmapped_Bedroom Level 1]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Entry (Foyer)"})): ?>
				<strong>Entry Foyer</strong> [unmapped_Entry (Foyer)]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Kitchen Features"})): ?>
				<strong>Kitchen Features</strong> [unmapped_Kitchen Features]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Laundry Room"})): ?>
				<strong>Laundry Room</strong> [unmapped_Laundry Room]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Living Room Feat"})): ?>
				<strong>Living Room Features</strong> [unmapped_Living Room Feat]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"MasterBed Feat"})): ?>
				<strong>Master Bed Features</strong> [unmapped_MasterBed Feat]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Recreation Room"})): ?>
				<strong>Recreation Room</strong> [unmapped_Recreation Room]
				<?php endif; ?>
				<?php if( isset($single_property->norooms)): ?>
				<strong>Rooms</strong> [norooms]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Windows)): ?>
				<strong>Windows</strong> [unmapped_Windows]
				<?php endif; ?>
		   </p>
		</div>		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">School Information</h6>
			<p> 
			  <?php if( isset($single_property->unmapped->{"School Name 1"})): ?>
			  <strong>School District Phone</strong> [unmapped_School Name 1]
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