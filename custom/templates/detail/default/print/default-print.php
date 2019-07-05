<div class="zy-print__wrap">
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
		   <li>Price: $[realprice]</li>
		   <li>Status: [status]</li>
		   <li>Updated: [syncAge] min ago</li>
		   <li>[displaySource] #: [id]</li>
		</ul>
		<table class="zy-print__meta-blocks">
		   <tr>
			  <td>
				 <div class="zy-print__meta-val">[nobedrooms]</div>
				 <div class="zy-print__meta-label">Beds</div>
			  </td>
			  <td>
				 <div class="zy-print__meta-val">[nobaths]</div>
				 <div class="zy-print__meta-label">Baths</div>
			  </td>
			  <td>
				 <div class="zy-print__meta-val">[nohalfbaths]</div>
				 <div class="zy-print__meta-label">&frac12; Baths</div>
			  </td>
			  <td>
				 <div class="zy-print__meta-val">[acre]</div>
				 <div class="zy-print__meta-label">Acres</div>
			  </td>
			  <td>
				 <div class="zy-print__meta-val">[squarefeet]</div>
				 <div class="zy-print__meta-label">SQFT</div>
			  </td>
			  <?php /* <td>
				 <div class="zy-print__meta-val">$170</div>
				 <div class="zy-print__meta-label">$/SQFT</div>
			  </td> 
			  <td>
				 <div class="zy-print__meta-val">[yearbuilt]</div>
				 <div class="zy-print__meta-label">Built</div>
			  </td> */ ?>
		   </tr>
		</table>
		<div class="zy-print__area__wrap">
		   <div class="zy-print__area">
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Neighborhood:</div>
				 <div class="zy-print__area-val">[neighborhood]</div>
			  </div>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Type:</div>
				 <div class="zy-print__area-val">[proptype]</div>
			  </div>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Built:</div>
				 <div class="zy-print__area-val">[yearbuilt]</div>
			  </div>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">County:</div>
				 <div class="zy-print__area-val">[lngCOUNTYDESCRIPTION]</div>
			  </div>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Area:</div>
				 <div class="zy-print__area-val">[lngAREADESCRIPTION]</div>
			  </div>
		   </div>
		   <div class="zy-print__area">
		   </div>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header">Property Description</h6>
		   <div class="zy-print__description">[remarks]</div>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header">Exterior Features</h6>
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
			  <strong>Lot Description</strong>
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
		<div class="zy-print__block">
		   <h6 class="zy-print__header">Interior Features</h6>
		   <p>
			  <?php if(isset($single_property->basement)): ?>
			  <strong>Basement</strong>
			  [basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Basement Feature</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed1LEVEL)): ?>
			  <strong>Bedrooms Unit1</strong>
			  [bed1LEVEL]
			  <?php endif; ?>
			  <?php if(isset($single_property->bed2LEVEL)): ?>
			   <strong>Bedrooms Unit2</strong>
			  [bed2LEVEL]
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
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->adultcommunity)): ?>
			  <strong>Adult Community</strong>
			  [adultcommunity]
			  <?php endif; ?>
			  <?php if(isset($single_property->apodavailable)): ?>
			  <strong>Apod Available</strong>
			  [apodavailable]
			  <?php endif; ?>
			  <?php /* <strong>Amenities</strong>
			  Highway Access */ ?>
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
			  <strong>Multifamily Type</strong>
			  [famlevel]
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
			  <?php if(isset($single_property->sewer)): ?>
			  <strong>Sewer</strong>
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
			  <strong>Taxes</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php /* <strong>Utility Connections</strong>
			  For Electric OvenFor Electric DryerWasher Hookup */ ?>
			  <?php if(isset($single_property->water)): ?>
			  <strong>Water</strong>
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
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
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
		<?php /* 
		<div class="zy-print__office">
		   <img src="https://bt-wpstatic.freetls.fastly.net/wp-content/blogs.dir/3244/files/2017/08/Web-Top-Left-Logo-new.jpg">
		   <address>
			  <div class="mt-5">RE/MAX Patriot Realty</div>
			  <div>55 Mead Street</div>
			  <div>Leominster MA, 01453</div>
		   </address>
		</div>
		<div class="zy-print__block">
		   <font size="2">Listing courtesy of some text.</font>
		</div> */ ?>
	</div>
</div>