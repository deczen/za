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
			<?php if(isset($single_property->nofullbaths)): ?>
			  <td>
				 <div class="zy-print-meta-val">[nofullbaths]</div>
				 <div class="zy-print-meta-label">FULL BATHS</div>
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
			<?php if(isset($single_property->unmapped->Develop)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print-area-label">Neighborhood:</div>
				 <div class="zy-print-area-val">[unmapped_Develop]</div>
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
			  <?php if(isset($single_property->unmapped->Bldg_size)): ?>
			  <strong>Building Size</strong>
			  [unmapped_Bldg_size]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Drive)): ?>
			  <strong>Driveway</strong>
			  [unmapped_Drive]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Gated_property)): ?>
			  <strong>Gated Property</strong>
			  [unmapped_Gated_property]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Lot_sz)): ?>
			  <strong>Lot Size</strong>
			  [unmapped_Lot_sz]
			  <?php endif; ?>
			  <?php if(isset($single_property->totalflrs)): ?>
			  <strong>Flooring</strong>
			  [totalflrs]
			  <?php endif; ?>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Floors In Building</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscpool)): ?>
			  <strong>Pool</strong>
			  [asscpool]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterfrontflag)): ?>
			  <strong>Waterfront</strong>
			  [waterfrontflag]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterviewFlag)): ?>
			  <strong>Waterview</strong>
			  [waterviewFlag]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Attic)): ?>
			  <strong>Waterfront</strong>
			  [unmapped_Attic]
			  <?php endif; ?>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Basement Subfloor</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Den_fr)): ?>
			  <strong>Den Family Room</strong>
			  [unmapped_Den_fr]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Dr)): ?>
			  <strong>Dining Room</strong>
			  [unmapped_Dr]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fl_1)): ?>
			  <strong>Floor Plan Level1</strong>
			  [unmapped_Fl_1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fl_2)): ?>
			  <strong>Floor Plan Level2</strong>
			  [unmapped_Fl_2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fl_3)): ?>
			  <strong>Floor Plan Level3</strong>
			  [unmapped_Fl_3]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Mbr_1st_floor)): ?>
			  <strong>Master Bedroom On First Floor</strong>
			  [unmapped_Mbr_1st_floor]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Office)): ?>
			  <strong>Office</strong>
			  [unmapped_Office]
			  <?php endif; ?>
			  <?php if(isset($single_property->norooms)): ?>
			  <strong>Rooms</strong>
			  [norooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->adultcommunity)): ?>
			  <strong>Adult Community</strong>
			  [adultcommunity]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Greenfeat)): ?>
			  <strong>Green Features</strong>
			  [unmapped_Greenfeat]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Outof_area)): ?>
			  <strong>Out Of Area Town</strong>
			  [unmapped_Outof_area]
			  <?php endif; ?>
			  <?php if(isset($single_property->shortsalelenderappreqd)): ?>
			  <strong>Short Sale</strong>
			  [shortsalelenderappreqd]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Temp_off_mkt)): ?>
			  <strong>Temporarily Off Market</strong>
			  [unmapped_Temp_off_mkt]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Model_name)): ?>
			  <strong>Model Name</strong>
			  [unmapped_Model_name]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Pet_type1_out)): ?>
			  <strong>Pet Types</strong>
			  [unmapped_Pet_type1_out]
			  <?php endif; ?>
			  <?php if(isset($single_property->smokingallowed)): ?>
			  <strong>Smoking</strong>
			  [smokingallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Skylight)): ?>
			  <strong>Skylight</strong>
			  [unmapped_Skylight]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->W_w)): ?>
			  <strong>Wall To Wall Carpet</strong>
			  [unmapped_W_w]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Wood_floor)): ?>
			  <strong>Wood Floors</strong>
			  [unmapped_Wood_floor]
			  <?php endif; ?>
			  <?php if(isset($single_property->handicapaccess)): ?>
			  <strong>Handicap Access</strong>
			  [handicapaccess]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Type_sale)): ?>
			  <strong>Type Of Sale</strong>
			  [unmapped_Type_sale]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Augld_ren)): ?>
			  <strong>August To Labor Day Rental</strong>
			  [unmapped_Augld_ren]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->July_ren)): ?>
			  <strong>July Rental</strong>
			  [unmapped_July_ren]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Opt_to_buy)): ?>
			  <strong>Option To Buy</strong>
			  [unmapped_Opt_to_buy]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Rent_type1_out)): ?>
			  <strong>Rent Type</strong>
			  [unmapped_Rent_type1_out]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Soryr_ren)): ?>
			  <strong>Seasonal Or Year Round Rental</strong>
			  [unmapped_Soryr_ren]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Wh_rental)): ?>
			  <strong>Whole House Rental</strong>
			  [unmapped_Wh_rental]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Kitchen</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->Eik)): ?>
			  <strong>Eat In Kitchen</strong>
			  [unmapped_Eik]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Num_kit)): ?>
			  <strong>Kitchens</strong>
			  [unmapped_Num_kit]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Dish)): ?>
			  <strong>Dishwasher</strong>
			  [unmapped_Dish]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Wash)): ?>
			  <strong>Washer</strong>
			  [unmapped_Wash]
			  <?php endif; ?>
		   </p>
		</div>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->aircondition)): ?>
			  <strong>Air Conditioning</strong>
			  [aircondition]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Dry)): ?>
			  <strong>Dryer</strong>
			  [unmapped_Dry]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Ref)): ?>
			  <strong>Refrigerator</strong>
			  [unmapped_Ref]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Stove)): ?>
			  <strong>Stove</strong>
			  [unmapped_Stove]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fuel)): ?>
			  <strong>Fuel</strong>
			  [unmapped_Fuel]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php if( isset($single_property->unmapped->Taxes) || isset($single_property->taxes) || isset($single_property->unmapped->Vill_tax) ):?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->Taxes)): ?>
			  <strong>Taxes</strong>
			  [unmapped_Taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Taxes Total</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Vill_tax)): ?>
			  <strong>Village Taxes</strong>
			  [unmapped_Vill_tax]
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