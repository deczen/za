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
		   <li>MLS #: [id]</li>
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
		
		<?php if(isset($single_property->direction)): ?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="bt-print__description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->adultcommunity)): ?>
			  <strong>Adult Community</strong>
			  [adultcommunity]
			  <?php endif; ?>
			  <?php if(isset($single_property->apodavailable)): ?>
			  <strong>Apod Available</strong>
			  [apodavailable]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->assessments)): ?>
			  <strong>Assessments</strong>
			  [assessments]
			  <?php endif; ?>
			  <?php if(isset($single_property->disclosure)): ?>
			  <strong>Disclosure</strong>
			  [disclosure]
			  <?php endif; ?>
			  <?php if(isset($single_property->electricfeature)): ?>
			  <strong>Electric Features</strong>
			  [electricfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->exclusions)): ?>
			  <strong>Exclusions</strong>
			  [exclusions]
			  <?php endif; ?>
			  <?php if(isset($single_property->netoperatinginc)): ?>
			  <strong>Gross Operating Income</strong>
			  [netoperatinginc]
			  <?php endif; ?>
			  <?php /* <strong>Home Owners Association</strong>
			  No */ ?>
			  <?php if(isset($single_property->leadpaint)): ?>
			  <strong>Lead Paint</strong>
			  [leadpaint]
			  <?php endif; ?>
			  <?php if(isset($single_property->lease1)): ?>
			  <strong>Lease Unit1</strong>
			  [lease1]
			  <?php endif; ?>
			  <?php if(isset($single_property->lease2)): ?>
			  <strong>Lease Unit2</strong>
			  [lease2]
			  <?php endif; ?>
			  <?php if(isset($single_property->lenderowned)): ?>
			  <strong>Lender Owned</strong>
			  [lenderowned]
			  <?php endif; ?>
			  <?php if(isset($single_property->famlevel)): ?>
			  <strong>Family Room Type</strong>
			  [famlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->livlevel)): ?>
			  <strong>Living Room Type</strong>
			  [livlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->dinlevel)): ?>
			  <strong>Dining Room Type</strong>
			  [dinlevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->oth1level)): ?>
			  <strong>Additional Room #1</strong>
			  [oth1level]
			  <?php endif; ?>
			  <?php if(isset($single_property->netoperatinginc)): ?>
			  <strong>Net Operating Income</strong>
			  [netoperatinginc]
			  <?php endif; ?>
			  <?php if(isset($single_property->rntdscrp1)): ?>
			  <strong>Rent Description Unit1</strong>
			  [rntdscrp1]
			  <?php endif; ?>
			  <?php if(isset($single_property->rent1)): ?>
			  <strong>Rent Unit1</strong>
			  [rent1]
			  <?php endif; ?>
			  <?php if(isset($single_property->rent2)): ?>
			  <strong>Rent Unit2</strong>
			  [rent2]
			  <?php endif; ?>
			  <?php if(isset($single_property->style)): ?>
			  <strong>House Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer Utilities</strong>
			  [sewer]
			  <?php endif; ?>
			  <?php /* <strong>Lender Owned</strong>
			  No 
			  <strong>Sewer</strong>
			  Private Sewerage */ ?>
			  <?php if(isset($single_property->shortsalelenderappreqd)): ?>
			  <strong>Short Sale Lender App Required</strong>
			  [shortsalelenderappreqd]
			  <?php endif; ?>
			  <?php /* <strong>Single Family Type</strong>
			  Detached 
			  <strong>Sq Ft Disclosures</strong>
			  1762 is The First FloorThe inl-aw is 880. Calculated By Matterport Not Guaranteed. */ ?>
			  <?php if(isset($single_property->squarefeetsource)): ?>
			  <strong>Sq Ft Source</strong>
			  [squarefeetsource]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Association Fee ($)</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Fee Includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php /* <strong>Utility Connections</strong>
			  For Electric OvenFor Electric DryerWasher Hookup */ ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water Utilities</strong>
			  [water]
			  <?php endif; ?>
			  <?php if(isset($single_property->yearbuiltdescrp)): ?>
			  <strong>Year Built Description</strong>
			  [yearbuiltdescrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->yearbuiltsource)): ?>
			  <strong>Year Built Source</strong>
			  [yearbuiltsource]
			  <?php endif; ?>
			  <?php /* <strong>Year Round</strong>
			  Yes */ ?>
			  <?php if(isset($single_property->unmapped->CondoFloorLocationType)): ?>
			  <strong>Condo Floor Location</strong>
			  [unmapped_CondoFloorLocationType]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->StructuralStyle)): ?>
			  <strong>Structural Style</strong>
			  [unmapped_StructuralStyle]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SiteFeatures)): ?>
			  <strong>Site Features</strong>
			  [unmapped_SiteFeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->ListingFinancing)): ?>
			  <strong>Listing Financing</strong>
			  [unmapped_ListingFinancing]
			  <?php endif; ?>
			  <?php if(isset($single_property->laundryfeatures)): ?>
			  <strong>Laundry Features</strong>
			  [laundryfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->DistanceType)): ?>
			  <strong>Distance Type</strong>
			  [unmapped_DistanceType]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->SchoolDistrict)): ?>
			  <strong>School District</strong>
			  [unmapped_SchoolDistrict]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->View)): ?>
			  <strong>View</strong>
			  [unmapped_View]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->RoadSurface)): ?>
			  <strong>Road Surface</strong>
			  [unmapped_RoadSurface]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->MaintainedBy)): ?>
			  <strong>Maintained By</strong>
			  [unmapped_MaintainedBy]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->PossibleUse)): ?>
			  <strong>Possible Use</strong>
			  [unmapped_PossibleUse]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
		<div class="bt-print__block">
		   <h6 class="bt-print__header" style="color: <?php echo $print_color; ?> !important;">Taxes</h6>
		   <p>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning Code</strong>
			  [zoning]
			  <?php endif; ?>
		   </p>
		</div>
		<?php endif; ?>
		
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