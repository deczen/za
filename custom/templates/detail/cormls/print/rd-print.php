<div class="zy-print__wrap">
	<div class="zy-print__header_top">
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
			<?php /*if(isset($single_property->norooms)): ?>
			  <td>
				 <div class="zy-print__meta-val">[norooms]</div>
				 <div class="zy-print__meta-label">Total Rooms</div>
			  </td>
			<?php endif;*/ ?>
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
			<?php /*if(isset($single_property->unmapped->{'List Price/SqFt'})): ?>
			  <td>
				 <div class="zy-print__meta-val">[unmapped_List Price/SqFt]</div>
				 <div class="zy-print__meta-label">PRICE/SQFT</div>
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
			<?php endif;*/ ?>
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
			<?php if(isset($single_property->shrtTOWNCODE)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Area:</div>
				 <div class="zy-print__area-val">[shrtTOWNCODE]</div>
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
		
		<?php if(isset($single_property->direction)): ?>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="zy-print__description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->propsubtype)): ?>
			  <strong>Property Sub Type</strong>
			  [propsubtype]
			  <?php endif; ?>
			  <?php if(isset($single_property->lot)): ?>
			  <strong>Lot Size Source</strong>
			  [lot]
			  <?php endif; ?>
			  <?php if(isset($single_property->nobaths)): ?>
			  <strong>Baths Total</strong>
			  [nobaths]
			  <?php endif; ?>
			  <?php if(isset($single_property->kitdscrp)): ?>
			  <strong>Kitchen Features</strong>
			  [kitdscrp]
			  <?php endif; ?>
			  <?php if(isset($single_property->specialassessments)): ?>
			  <strong>Assessments</strong>
			  [specialassessments]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->BuildingLevel)): ?>
			  <strong>Building Level</strong>
			  [unmapped_BuildingLevel]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->DistressedProperty)): ?>
			  <strong>Distressed Property</strong>
			  [unmapped_DistressedProperty]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitno)): ?>
			  <strong>Unit No</strong>
			  [unitno]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Located on Floor'})): ?>
			  <strong>Located on Floor</strong>
			  [unmapped_Located on Floor]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Levels)): ?>
			  <strong>Levels</strong>
			  [unmapped_Levels]
			  <?php endif; ?>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->vacant)): ?>
			  <strong>Vacant</strong>
			  [vacant]
			  <?php endif; ?>
			  <?php if(isset($single_property->buildingconstruction)): ?>
			  <strong>Building Construction</strong>
			  [buildingconstruction]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->foundation)): ?>
			  <strong>Foundation</strong>
			  [foundation]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Basement: Basement Y/N'})): ?>
			  <strong>Basement</strong>
			  [unmapped_Basement: Basement Y/N]
			  <?php endif; ?>
			  <?php if(isset($single_property->basementfeature)): ?>
			  <strong>Basement Feature</strong>
			  [basementfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->schooldistrict)): ?>
			  <strong>School District</strong>
			  [schooldistrict]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->exterior)): ?>
			  <strong>Exterior</strong>
			  [exterior]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorunitfeatures)): ?>
			  <strong>Exterior Unit Features</strong>
			  [exteriorunitfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliance</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Eterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->unmapped->Fireplace)): ?>
			  <strong>Fireplace</strong>
			  [unmapped_Fireplace]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Manufactured Housing Y/N'})): ?>
			  <strong>Manufactured Housing</strong>
			  [unmapped-Manufactured Housing Y/N]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Cumulative DOM'})): ?>
			  <strong>Cumulative DOM</strong>
			  [unmapped_Cumulative DOM]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Dir Neg w/Sell Perm'})): ?>
			  <strong>Dir Neg w/Sell Perm</strong>
			  [unmapped_Dir Neg w/Sell Perm]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Basement)): ?>
			  <strong>Basement</strong>
			  [unmapped_Basement]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tenant Occupied'})): ?>
			  <strong>Tenant Occupied</strong>
			  [unmapped_Tenant Occupied]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->unmapped->{'Lot Size (Side)'})): ?>
			  <strong>Lot Size (Side)</strong>
			  [unmapped_Lot Size (Side)]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->unmapped->{'Mid/High Rise'})): ?>
			  <strong>Mid/High Rise</strong>
			  [unmapped_Mid/High Rise]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->unmapped->{'Built Prior to 1978'})): ?>
			  <strong>Built Prior to 1978</strong>
			  [unmapped_Built Prior to 1978]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Documented SqFt Source'})): ?>
			  <strong>Documented SqFt Source</strong>
			  [unmapped_Documented SqFt Source]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->TransactionType)): ?>
			  <strong>Transaction Type</strong>
			  [unmapped_TransactionType]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Lot Characteristics'})): ?>
			  <strong>Lot Description</strong>
			  [unmapped_'Lot Characteristics]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Windows)): ?>
			  <strong>Windows</strong>
			  [unmapped_Windows]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'SqFt ATFLS'})): ?>
			  <strong>Finished Total</strong>
			  [unmapped_SqFt ATFLS]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Price Per Acre'})): ?>
			  <strong>Price Per Acre</strong>
			  [unmapped_Price Per Acre]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Multiple Parcels'})): ?>
			  <strong>Mulitple Parcels</strong>
			  [unmapped_Multiple Parcels]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			</p>
			  <!-- parking information -->
			<p>
			  <?php if(isset($single_property->parkingfeature)): ?>
			  <strong>Parking Feature</strong>
			  [parkingfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->garagespaces)): ?>
			  <strong>Garage spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->garageparking)): ?>
			  <strong>Garage parking</strong>
			  [garageparking]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
		   <p>
			  <?php if(isset($single_property->unmapped->Fireplace)): ?>
			  <strong>Fireplace</strong>
			  [unmapped_Fireplace]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Fireplace Features'})): ?>
			  <strong>Fireplace Features</strong>
			  [unmapped_Fireplace Features]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Rooms)): ?>
			  <strong>Rooms</strong>
			  [unmapped_Rooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Interior Flooring'})): ?>
			  <strong>Flooring</strong>
			  [unmapped_Interior Flooring]
			  <?php endif; ?>
			</p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			  <?php if(isset($single_property->heating)): ?>
			  <strong>Heating</strong>
			  [heating]
			  <?php endif; ?>
			  <?php if(isset($single_property->aircondition)): ?>
			  <strong>Air Condition</strong>
			  [aircondition]
			  <?php endif; ?>
			  <?php if(isset($single_property->cooling)): ?>
			  <strong>Cooling</strong>
			  [cooling]
			  <?php endif; ?>
			  <?php if(isset($single_property->utilities)): ?>
			  <strong>Utilities</strong>
			  [utilities]
			  <?php endif; ?>
			</p>
				<!-- Association Information -->
		    <p>
			  <?php if(isset($single_property->feeinterval)): ?>
			  <strong>HOA Fee Frequency</strong>
			  [feeinterval]
			  <?php endif; ?>
			  <?php if(isset($single_property->reqdownassociation)): ?>
			  <strong>Reqdown Association</strong>
			  [reqdownassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->condoassociation)): ?>
			  <strong>Condo Association</strong>
			  [condoassociation]
			  <?php endif; ?>
			  <?php if(isset($single_property->hoafee)): ?>
			  <strong>Hoafee</strong>
			  [hoafee]
			  <?php endif; ?>
			  <?php if(isset($single_property->asscfeeincludes)): ?>
			  <strong>Assc fee includes</strong>
			  [asscfeeincludes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'HOA/COA Info: HOA/COA Contact Name'})): ?>
			  <strong>HOA/COA Info: HOA/COA Contact Name</strong>
			  [unmapped_HOA/COA Info: HOA/COA Contact Name]
			  <?php endif; ?>
		   </p>
				<!-- Taxes, Fees -->
		   <p>
			  <?php if(isset($single_property->unmapped->LegalDescription)): ?>
			  <strong>Legal Description</strong>
			  [unmapped_LegalDescription]
			  <?php endif; ?>
			  <?php /*if(isset($single_property->unmapped->{'Tax District'})): ?>
			  <strong>Tax District</strong>
			  [unmapped_Tax]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Tax Abatement'})): ?>
			  <strong>Tax Abatement</strong>
			  [unmapped_Tax Abatement]
			  <?php endif;*/ ?>
			  <?php if(isset($single_property->taxyear)): ?>
			  <strong>Tax Year</strong>
			  [taxyear]
			  <?php endif; ?>
			  <?php if(isset($single_property->taxes)): ?>
			  <strong>Tax Amount ($)</strong>
			  [taxes]
			  <?php endif; ?>
			  <?php if(isset($single_property->specialassessments)): ?>
			  <strong>Assessments</strong>
			  [specialassessments]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Room Information</h6>
		   <p>
			  <?php if(isset($single_property->norooms)): ?>
			  <strong>Room Count</strong>
			  [norooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->totalrooms)): ?>
			  <strong>Rooms Total</strong>
			  [totalrooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Rooms)): ?>
			  <strong>Rooms</strong>
			  [unmapped_Rooms]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Great Room Level'})): ?>
			  <strong>Great Rooms (Entry Level)</strong>
			  [unmapped_Great Room Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds Down1'})): ?>
			  <strong>Bedrooms (Lower Level1)</strong>
			  [unmapped_Bedroom Level: Beds Down1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds Down2'})): ?>
			  <strong>Bedrooms (Lower Level2)</strong>
			  [unmapped_Bedroom Level: Beds Down2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds UP1'})): ?>
			  <strong>Bedrooms (Upper Level1)</strong>
			  [unmapped_Bedroom Level: Beds UP1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bedroom Level: Beds UP2'})): ?>
			  <strong>Bedrooms (Upper Level2)</strong>
			  [unmapped_Bedroom Level: Beds UP2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full B Entry Level'})): ?>
			  <strong>Full Baths (Entry Level)</strong>
			  [unmapped_Full Baths Level: Full B Entry Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half B Entry Level'})): ?>
			  <strong>Half Baths (Entry Level)</strong>
			  [unmapped_Half Baths Level: Half B Entry Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Bath Down2'})): ?>
			  <strong>Half Baths (Lower Level2)</strong>
			  [unmapped_Half Baths Level: Half Bath Down2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Bath Down1'})): ?>
			  <strong>Half Baths (Lower Level1)</strong>
			  [unmapped_Half Baths Level: Half Bath Down1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths Down1'})): ?>
			  <strong>Full Baths (Lower Level1)</strong>
			  [unmapped_Full Baths Level: Full Baths Down1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Baths UP2'})): ?>
			  <strong>Half Baths (Upper Level2)</strong>
			  [unmapped_Half Baths Level: Half Baths UP2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Half Baths Level: Half Baths UP1'})): ?>
			  <strong>Half Baths (Upper Level1)</strong>
			  [unmapped_Half Baths Level: Half Baths UP1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths UP2'})): ?>
			  <strong>Full Baths (Upper Level2)</strong>
			  [unmapped_Full Baths Level: Full Baths UP2]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths UP1'})): ?>
			  <strong>Full Baths (Upper Level1)</strong>
			  [unmapped_Full Baths Level: Full Baths UP1]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Full Baths Level: Full Baths Down2'})): ?>
			  <strong>Full Baths (Lower Level2)</strong>
			  [unmapped_Full Baths Level: Full Baths Down2]
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