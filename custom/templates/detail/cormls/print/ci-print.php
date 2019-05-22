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
			<?php if(isset($single_property->nounits)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nounits]</div>
				 <div class="bt-print__meta-label">UNITS</div>
			  </td>
			<?php endif; ?>
			<?php /*if(isset($single_property->nostories)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nostories]</div>
				 <div class="bt-print__meta-label">STORIES</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobuildings)): ?>
			  <td>
				 <div class="bt-print__meta-val">[nobuildings]</div>
				 <div class="bt-print__meta-label">BUILDINGS</div>
			  </td>
			<?php endif;*/ ?>
			<?php if(isset($single_property->parkingspaces)): ?>
			  <td>
				 <div class="bt-print__meta-val">[parkingspaces]</div>
				 <div class="bt-print__meta-label">PARKING SPACES</div>
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
			<?php if(isset($single_property->lngTOWNSDESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="bt-print__area-label">Area:</div>
				 <div class="bt-print__area-val">[lngTOWNSDESCRIPTION]</div>
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
			  <?php if(isset($single_property->specialassessments)): ?>
			  <strong>Assessment</strong>
			  [specialassessments]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Auction Info: Auction/Online Bidding'})): ?>
			  <strong>Auction</strong>
			  [unmapped_Auction Info: Auction/Online Bidding]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Between Street (1)'})): ?>
			  <strong>Between Street1</strong>
			  [unmapped_Between Street (1)]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Between Street (2)'})): ?>
			  <strong>Between Street2</strong>
			  [unmapped_Between Street (2)]
			  <?php endif; ?>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Commercial Sub Type</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Corp LimitPerAuditor'})): ?>
			  <strong>Corp Limit Per Auditor</strong>
			  [unmapped_Corp LimitPerAuditor]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Dist To Interchange'})): ?>
			  <strong>Dist To Interchange</strong>
			  [unmapped_Dist To Interchange]
			  <?php endif; ?>
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric</strong>
			  [electricfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->unmapped->{'Expenses Paid by L: Curr Yr Est $/SF LL'})): ?>
			  <strong>Expenses Paid By Landlord</strong>
			  [unmapped_Expenses Paid by L: Curr Yr Est $/SF LL]
			  <?php endif; ?>
			  <?php if(isset($single_property->exchange)): ?>
			  <strong>For Exchange</strong>
			  [exchange]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'For Lease'})): ?>
			  <strong>For Lease</strong>
			  [unmapped_For Lease]
			  <?php endif; ?>
			  <?php if(isset($single_property->forsale)): ?>
			  <strong>For Sale</strong>
			  [forsale]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Mult Use'})): ?>
			  <strong>Mult Use</strong>
			  [unmapped_Mult Use]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Near Interchange'})): ?>
			  <strong>Near Interchange</strong>
			  [unmapped_Near Interchange]
			  <?php endif; ?>
			  <?php if(isset($single_property->specialfinancing)): ?>
			  <strong>New Financing</strong>
			  [specialfinancing]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Occupancy Rate'})): ?>
			  <strong>Occupancy Rate</strong>
			  [unmapped_Occupancy Rate]
			  <?php endif; ?>
			  <?php if(isset($single_property->possession)): ?>
			  <strong>Possession</strong>
			  [possession]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Previous Use'})): ?>
			  <strong>Previous Use</strong>
			  [unmapped_Previous Use]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Services Available'})): ?>
			  <strong>Services Available</strong>
			  [unmapped_Services Available]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Suite Info 1: Date Available'})): ?>
			  <strong>Suite1 Date Available</strong>
			  [unmapped_Suite Info 1: Date Available]
			  <?php endif; ?>
			  <?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <strong>Township</strong>
			  [lngAREADESCRIPTION]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Use Code'})): ?>
			  <strong>Use Code</strong>
			  [unmapped_Use Code]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Year Remodeled'})): ?>
			  <strong>Year Remodeled</strong>
			  [unmapped_Year Remodeled]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Exterior Features</h6>
		   <p>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Dock Size'})): ?>
			  <strong>Dock Size</strong>
			  [unmapped_Dock Size]
			  <?php endif; ?>
			  <?php if(isset($single_property->noofloadingdocks)): ?>
			  <strong>Docks</strong>
			  [noofloadingdocks]
			  <?php endif; ?>
			  <?php if(isset($single_property->noofdrivingdoors)): ?>
			  <strong>Drive in Doors</strong>
			  [noofdrivingdoors]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotsize)): ?>
			  <strong>Lot Size Frontage</strong>
			  [lotsize]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
			  <strong>Lot Size Side</strong>
			  [unmapped_Lot Size (Side)]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Total Parking</strong>
			  [parkingspaces]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
		   <p>
			  <?php if(isset($single_property->bldgsqfeet)): ?>
			  <strong>Bldg Sq Ft.</strong>
			  [bldgsqfeet]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'# Floors AboveGround'})): ?>
			  <strong>Floors Above Ground</strong>
			  [unmapped_# Floors AboveGround]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Heat Fuel'})): ?>
			  <strong>Heat Fuel</strong>
			  [unmapped_Heat Fuel]
			  <?php endif; ?>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heat Type</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Max Cont Sqft Avail'})): ?>
			  <strong>Max Cont Sqft Avail</strong>
			  [unmapped_Max Cont Sqft Avail]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Minimum Sqft Avail'})): ?>
			  <strong>Minimum Sqft Avail</strong>
			  [unmapped_Minimum Sqft Avail]
			  <?php endif; ?>
			  <?php if(isset($single_property->sprinklers)): ?>
			  <strong>Sprinklers</strong>
			  [sprinklers]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Suite Info 1: SQ FT'})): ?>
			  <strong>Suite1 Sq Ft</strong>
			  [unmapped_Suite Info 1: SQ FT]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->{'Tax District'})): ?>
			  <strong>Tax District</strong>
			  [unmapped_Tax District]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tax Incentive'})): ?>
			  <strong>Tax Incentive</strong>
			  [unmapped_Tax Incentive]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Taxes Yearly</strong>
			  [taxes]
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