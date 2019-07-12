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
			<?php if(isset($single_property->nounits)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nounits]</div>
				 <div class="zy-print-meta-label">Units</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nostories)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nostories]</div>
				 <div class="zy-print-meta-label">Stories</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobuildings)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nobuildings]</div>
				 <div class="zy-print-meta-label">Buildings</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->parkingspaces)): ?>
			  <td>
				 <div class="zy-print-meta-val">[parkingspaces]</div>
				 <div class="zy-print-meta-label">Parking Spaces</div>
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
		   </tr>
		</table>
		<div class="zy-print-area-wrap">
		   <div class="zy-print-area">
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
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Space, #Units, SQ FT</h6>
		   <p>
			  <?php if( isset($single_property->mauunits) || isset($single_property->mafbldgsf)): ?>
			  <strong>Manufacturing</strong>
			  [mauunits] [mafbldgsf]
			  <?php endif; ?>
			  <?php if( isset($single_property->ofuunits) || isset($single_property->offbldgsf)): ?>
			  <strong>Office</strong>
			  [ofuunits] [offbldgsf]
			  <?php endif; ?>
			  <?php if( isset($single_property->rsuunits) || isset($single_property->rsfbldgsf)): ?>
			  <strong>Residential</strong>
			  [rsuunits] [rsfbldgsf]
			  <?php endif; ?>
			  <?php if( isset($single_property->reuunits) || isset($single_property->refbldgsf)): ?>
			  <strong>Retail</strong>
			  [reuunits] [refbldgsf]
			  <?php endif; ?>
			  <?php if( isset($single_property->wauunits) || isset($single_property->wafbldgsf)): ?>
			  <strong>Warehouse</strong>
			  [wauunits] [wafbldgsf]
			  <?php endif; ?>
			</p>
		</div>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Details</h6>
		   <p>	  
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->citype)): ?>
			  <strong>Commercial Type</strong>
			  [citype]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->dividable)): ?>
			  <strong>Dividable</strong>
			  [dividable]
			  <?php endif; ?>
			  <?php if(isset($single_property->noofdrivingdoors)): ?>
			  <strong>Drive in Doors</strong>
			  [noofdrivingdoors]
			  <?php endif; ?>
			  <?php if(isset($single_property->elevator)): ?>
			  <strong>Elevator</strong>
			  [elevator]
			  <?php endif; ?>
			  <?php if(isset($single_property->expandable)): ?>
			  <strong>Expandable</strong>
			  [expandable]
			  <?php endif; ?>
			  <?php if(isset($single_property->facilities)): ?>
			  <strong>Facilities</strong>
			  [facilities]
			  <?php endif; ?>
			  <?php if(isset($single_property->handicapaccess)): ?>
			  <strong>Handicap Access</strong>
			  [handicapaccess]
			  <?php endif; ?>
			  <?php if(isset($single_property->noofloadingdocks)): ?>
			  <strong>Loading Docks</strong>
			  [noofloadingdocks]
			  <?php endif; ?>
			  <?php if(isset($single_property->noofrestrooms)): ?>
			  <strong>Restrooms</strong>
			  [noofrestrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->sprinklers)): ?>
			  <strong>Sprinklers</strong>
			  [sprinklers]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Features</strong>
			  [parkingfeature]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) || isset($single_property->zonedescription) || isset($single_property->hoafee) || isset($single_property->asscfeeincludes) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes & Considerations</h6>
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
			  <?php if(isset($single_property->zonedescription)): ?>
			  <strong>Zoning Description</strong>
			  [zonedescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Association Fee ($)</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Fee Includes</strong>
			  [asscfeeincludes]
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