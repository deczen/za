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
		
		<?php if(isset($single_property->direction)): ?>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Directions</h6>
		   <div class="zy-print-description">[direction]</div>
		</div>
		<?php endif; ?>
		
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Interior Features</h6>
		   <p>
				<?php if( isset($single_property->flooring)): ?>
				<strong>Flooring</strong> [flooring]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Gross Building Area"})): ?>
				<strong>Gross Building Area</strong> [unmapped_Gross Building Area]
				<?php endif; ?>
				<?php if( isset($single_property->interiorfeatures)): ?>
				<strong>Inside Features</strong> [interiorfeatures]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Net Leasable Area"})): ?>
				<strong>Net Leasable Area</strong> [unmapped_Net Leasable Area]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Office)): ?>
				<strong>Office</strong> [unmapped_Office]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Rentable)): ?>
				<strong>Rentable</strong> [unmapped_Rentable]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Retail)): ?>
				<strong>Retail</strong> [unmapped_Retail]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Rooms)): ?>
				<strong>Rooms</strong> [unmapped_Rooms]
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Warehouse)): ?>
				<strong>Warehouse</strong> [unmapped_Warehouse]
				<?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			<?php if( isset($single_property->unmapped->{"Access Roads"})): ?>
			<strong>Access Roads</strong> [unmapped_Access Roads]
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<strong>Foundation</strong> [foundation]
			<?php endif; ?>
			<?php if( isset($single_property->frontage)): ?>
			<strong>Frontage</strong> [frontage]
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<strong>Lot Dimensions</strong> [lotdescription]
			<?php endif; ?>
			<?php if( isset($single_property->exteriorfeatures)): ?>
			<strong>Outside Features</strong> [exteriorfeatures]
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<strong>Parking</strong> [parkingfeature]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Road Frontage"})): ?>
			<strong>Road Frontage</strong> [unmapped_Road Frontage]
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<strong>Roof</strong> [roofmaterial]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Assessmnt Amt"})): ?>
			<strong>Annual Assessment Amt</strong> [unmapped_Annual Assessmnt Amt]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<strong>Auction</strong> [unmapped_Auction]
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<strong>Commercial Type</strong> [propsubtype]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street Address"})): ?>
			<strong>Cross Street Address</strong> [unmapped_Cross Street Address]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Degree Complete"})): ?>
			<strong>Degree Complete</strong> [unmapped_Degree Complete]
			<?php endif; ?>
			<?php if( isset($single_property->easements)): ?>
			<strong>Easements</strong> [easements]
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<strong>Gross Income2</strong> [grossannualincome]
			<?php endif; ?>
			<?php if( isset($single_property->insurancereqd)): ?>
			<strong>Insurance</strong> [insurancereqd]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lease Only"})): ?>
			<strong>Lease Only</strong> [unmapped_Lease Only]
			<?php endif; ?>
			<?php if( isset($single_property->netoperatinginc)): ?>
			<strong>Net Operating Income</strong> [netoperatinginc]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<strong>Occupancy</strong> [unmapped_Occupancy]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Other Expense"})): ?>
			<strong>Other Expense</strong> [unmapped_Other Expense]
			<?php endif; ?>
			<?php if( isset($single_property->rentfeeincludes)): ?>
			<strong>Owner Pays</strong> [rentfeeincludes]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Sales)): ?>
			<strong>Sales</strong> [unmapped_Sales]
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<strong>Sewer</strong> [sewer]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Site)): ?>
			<strong>Site</strong> [unmapped_Site]
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<strong>Special Financing</strong> [specialfinancing]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Suburb (SIC)"})): ?>
			<strong>Suburb SIC</strong> [unmapped_Suburb (SIC)]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Total Buildings"})): ?>
			<strong>Total Buildings</strong> [unmapped_Total Buildings]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<strong>Township</strong> [unmapped_Township]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Use/Type"})): ?>
			<strong>Use Type</strong> [unmapped_Use/Type]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Vacancy)): ?>
			<strong>Vacancy</strong> [unmapped_Vacancy]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Waste Removal"})): ?>
			<strong>Waste Removal</strong> [unmapped_Waste Removal]
			<?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Cooling, Heating, Utilities</h6>
		   <p>
			<?php if( isset($single_property->cooling)): ?>
			<strong>Cooling</strong> [cooling]
			<?php endif; ?>
			<?php if( isset($single_property->heating)): ?>
			<strong>Heating</strong> [heating]
			<?php endif; ?>
			<?php if( isset($single_property->gas)): ?>
			<strong>Gas</strong> [gas]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Gas and Electric"})): ?>
			<strong>Gas And Electric</strong> [unmapped_Gas and Electric]
			<?php endif; ?>
			<?php if( isset($single_property->sewerandwater)): ?>
			<strong>Water And Sewer</strong> [sewerandwater]
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<strong>Water Source</strong> [water]
			<?php endif; ?>
		   </p>
		</div>
		<div class="zy-print-block">
		   <h6 class="zy-print-header" style="color: <?php echo $print_color; ?> !important;">Taxes, Fees</h6>
		   <p>
			<?php if( isset($single_property->unmapped->{"Taxes(annual)"})): ?>
			<strong>Taxes Annual</strong> [unmapped_Taxes(annual)]
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Maintenance)): ?>
			<strong>Maintenance</strong> [unmapped_Maintenance]
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