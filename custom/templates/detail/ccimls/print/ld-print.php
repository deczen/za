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
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="bt-print__meta-val">[acre]</div>
				 <div class="bt-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nolots)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nolots]</div>
				 <div class="bt-print__meta-label">APPROVED LOTS</div>
			  </td>
			<?php endif; ?>
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
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Description</h6>
		   <div class="bt-print__description">[remarks]</div>
		</div>
		<?php endif; ?>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->{'Flood Ins Required'})): ?>
			  <strong>Flood Insurance Required</strong>
			  [unmapped_Flood Ins Required]
			  <?php endif; ?>
			  <?php if(isset($single_property->assessedvaluebldg)): ?>
			  <strong>Improvement Assessments</strong>
			  [assessedvaluebldg]
			  <?php endif; ?>
			  <?php if(isset($single_property->assessedvalueland)): ?>
			  <strong>Land Assessments</strong>
			  [assessedvalueland]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size Source'})): ?>
			  <strong>Lot Size Source</strong>
			  [unmapped_Lot Size Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Membership Required'})): ?>
			  <strong>Membership Required</strong>
			  [unmapped_Membership Required]
			  <?php endif; ?>
			  <?php if(isset($single_property->beachmilesto)): ?>
			  <strong>Miles From Beach</strong>
			  [beachmilesto]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Other Assessments'})): ?>
			  <strong>Other Assessments</strong>
			  [unmapped_Other Assessments]
			  <?php endif; ?>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Property Sub Type</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Special Listing Cond'})): ?>
			  <strong>Special Listing Cond</strong>
			  [unmapped_Special Listing Cond]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->totalassessedvalue)): ?>
			  <strong>Total Assessment</strong>
			  [totalassessedvalue]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Water Access'})): ?>
			  <strong>Water Access</strong>
			  [unmapped_Water Access]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Utilities: Water'})): ?>
			  <strong>Water</strong>
			  [unmapped_Utilities: Water]
			  <?php endif; ?>
			  <?php if(isset($single_property->location)): ?>
			  <strong>Location Description</strong>
			  [location]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot #'})): ?>
			  <strong>Lot Number</strong>
			  [unmapped_Lot #]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Utilities: Gas'})): ?>
			  <strong>Gas</strong>
			  [unmapped_Utilities: Gas]
			  <?php endif; ?>
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric</strong>
			  [electricfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Convenient To'})): ?>
			  <strong>Convenient To</strong>
			  [unmapped_Convenient To]
			  <?php endif; ?>
			  <?php if(isset($single_property->cableavailable)): ?>
			  <strong>Cable</strong>
			  [cableavailable]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Exterior Features</h6>
		   <p>
			  <?php if(isset($single_property->beachdescription)): ?>
			  <strong>Beach Description</strong>
			  [beachdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Dock)): ?>
			  <strong>Dock</strong>
			  [unmapped_Dock]
			  <?php endif; ?>
			  <?php if(isset($single_property->roadtype)): ?>
			  <strong>Street Description</strong>
			  [roadtype]
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
		   </p>
		</div>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Annual Taxes</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->beachownership)): ?>
			  <strong>Beach Ownership</strong>
			  [beachownership]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Deed Restrictions'})): ?>
			  <strong>Deed Restrictions</strong>
			  [unmapped_Deed Restrictions]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->assessedvaluebldg)): ?>
			  <strong>Total Assessments</strong>
			  [assessedvaluebldg]
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