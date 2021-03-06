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
			<?php if(isset($single_property->nobedrooms)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nobedrooms]</div>
				 <div class="zy-print__meta-label">Beds</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nobaths)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nobaths]</div>
				 <div class="zy-print__meta-label">Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->no34BATHS)): ?>
			  <td>
				 <div class="zy-print__meta-val">[no34BATHS]</div>
				 <div class="zy-print__meta-label">3/4 Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->nohalfbaths)): ?>
			  <td>
				 <div class="zy-print__meta-val">[nohalfbaths]</div>
				 <div class="zy-print__meta-label">&frac12; Baths</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->acre)): ?>
			  <td>
				 <div class="zy-print__meta-val">[acre]</div>
				 <div class="zy-print__meta-label">Acres</div>
			  </td>
			<?php endif; ?>
			<?php if(isset($single_property->squarefeet)): ?>
			  <td>
				 <div class="zy-print__meta-val">[squarefeet]</div>
				 <div class="zy-print__meta-label">SQFT</div>
			  </td>
			<?php endif; ?>
			  <?php /* <td>
				 <div class="zy-print__meta-val">$170</div>
				 <div class="zy-print__meta-label">$/SQFT</div>
			  </td> */ ?>
			<?php /*if(isset($single_property->yearbuilt)): ?>
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
			<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
			  <div class="uk-clearfix">
				 <div class="zy-print__area-label">Area:</div>
				 <div class="zy-print__area-val">[lngAREADESCRIPTION]</div>
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
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Property Features</h6>
		   <p>
			  <?php if(isset($single_property->style)): ?>
			  <strong>Home Style</strong>
			  [style]
			  <?php endif; ?>
			  <?php if(isset($single_property->construction)): ?>
			  <strong>Construction</strong>
			  [construction]
			  <?php endif; ?>
			  <?php if(isset($single_property->roofmaterial)): ?>
			  <strong>Roof Material</strong>
			  [roofmaterial]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Level)): ?>
			  <strong>Level</strong>
			  [unmapped_Level]
			  <?php endif; ?>
			  <?php if(isset($single_property->exteriorfeatures)): ?>
			  <strong>Exterior Features</strong>
			  [exteriorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->interiorfeatures)): ?>
			  <strong>Interior Features</strong>
			  [interiorfeatures]
			  <?php endif; ?>
			  <?php if(isset($single_property->fireplaces)): ?>
			  <strong>Fireplaces</strong>
			  [fireplaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Laundry Room Location'})): ?>
			  <strong>Laundry Room Location</strong>
			  [unmapped_Laundry Room Location]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Exemptions)): ?>
			  <strong>Exemptions</strong>
			  [unmapped_Exemptions]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Cntrp & Backsplashes'})): ?>
			  <strong>Kitchen Cntrp & Backsplashes</strong>
			  [unmapped_Kitchen Cntrp & Backsplashes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Defects)): ?>
			  <strong>Defects</strong>
			  [unmapped_Defects]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Flooring)): ?>
			  <strong>Floor</strong>
			  [unmapped_Flooring]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Windows/Treatments'})): ?>
			  <strong>Windows/Treatments</strong>
			  [unmapped_Windows/Treatments]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Patio Features'})): ?>
			  <strong>Patio Features</strong>
			  [unmapped_Patio Features]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Plan Description'})): ?>
			  <strong>Plan Description</strong>
			  [unmapped_Plan Description]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Lighting'})): ?>
			  <strong>Kitchen Lighting</strong>
			  [unmapped_Kitchen Lighting]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Cabinets)): ?>
			  <strong>Cabinets</strong>
			  [unmapped_Cabinets]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Kitchen Sinks'})): ?>
			  <strong>Kitchen Sinks</strong>
			  [unmapped_Kitchen Sinks]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Bath Vanities'})): ?>
			  <strong>Bath Vanities</strong>
			  [unmapped_Bath Vanities]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Fencing)): ?>
			  <strong>Fencing</strong>
			  [unmapped_Fencing]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Rented?'})): ?>
			  <strong>Rented</strong>
			  [unmapped_Rented?]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"Maid's Room"})): ?>
			  <strong>Maid's Room</strong>
			  [unmapped_Maid's Room]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"Lockbox Type"})): ?>
			  <strong>Lockbox Type</strong>
			  [unmapped_Lockbox Type]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"New Home or Resale"})): ?>
			  <strong>New Home or Resale</strong>
			  [unmapped_New Home or Resale]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{"Is Property Also For Lease?"})): ?>
			  <strong>Is Property Also For Lease?</strong>
			  [unmapped_Is Property Also For Lease?]
			  <?php endif; ?>
			  <?php if(isset($single_property->vacant)): ?>
			  <strong>Vacant</strong>
			  [vacant]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotsize)): ?>
			  <strong>Lot Size</strong>
			  [lotsize]
			  <?php endif; ?>
			  <?php if(isset($single_property->schooldistrict)): ?>
			  <strong>Lot Size</strong>
			  [schooldistrict]
			  <?php endif; ?>
			  <?php if(isset($single_property->appliances)): ?>
			  <strong>Appliances</strong>
			  [appliances]
			  <?php endif; ?>
			  <?php if(isset($single_property->lotdescription)): ?>
			  <strong>Lot Description</strong>
			  [lotdescription]
			  <?php endif; ?>
			  <?php if(isset($single_property->specialfinancing)): ?>
			  <strong>Special Financing</strong>
			  [specialfinancing]
			  <?php endif; ?>
			  <?php if(isset($single_property->zoning)): ?>
			  <strong>Zoning</strong>
			  [zoning]
			  <?php endif; ?>
			  <?php if(isset($single_property->waterbodyname)): ?>
			  <strong>Waterbody Name</strong>
			  [waterbodyname]
			  <?php endif; ?>
			  <?php if(isset($single_property->landdesc)): ?>
			  <strong>Land Desc</strong>
			  [landdesc]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Garage: Carport'})): ?>
			  <strong>Garage: Carport</strong>
			  [unmapped_Garage: Carport]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Carpet)): ?>
			  <strong>Carpet</strong>
			  [unmapped_Carpet]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Guard Hse/Svc'})): ?>
			  <strong>Guard Hse/Svc</strong>
			  [unmapped_Guard Hse/Svc]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Owner Pays'})): ?>
			  <strong>Owner Pays</strong>
			  [unmapped_Owner Pays]
			  <?php endif; ?>
			  <?php if(isset($single_property->tenantexpanses)): ?>
			  <strong>Tenant Expanses</strong>
			  [tenantexpanses]
			  <?php endif; ?>
			  <?php if(isset($single_property->leaseterms)): ?>
			  <strong>Lease Terms</strong>
			  [leaseterms]
			  <?php endif; ?>
			  <?php if(isset($single_property->secdeposit)): ?>
			  <strong>Sec Deposit</strong>
			  [secdeposit]
			  <?php endif; ?>
			  <?php if(isset($single_property->petsallowed)): ?>
			  <strong>Pets Allowed</strong>
			  [petsallowed]
			  <?php endif; ?>
			  <?php if(isset($single_property->termsfeature)): ?>
			  <strong>Terms Feature</strong>
			  [termsfeature]
			  <?php endif; ?>
			  <?php if(isset($single_property->handicapaccess)): ?>
			  <strong>Handicap Access</strong>
			  [handicapaccess]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Distance to Cable'})): ?>
			  <strong>Distance to Cable</strong>
			  [unmapped_Distance to Cable]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Distance to Water'})): ?>
			  <strong>Distance to Water</strong>
			  [unmapped_Distance to Water]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Distance to Sewer'})): ?>
			  <strong>Distance to Sewer</strong>
			  [unmapped_Distance to Sewer]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Distance to Gas'})): ?>
			  <strong>Distance to Gas</strong>
			  [unmapped_Distance to Gas]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Distance to Phone'})): ?>
			  <strong>Distance to Phone</strong>
			  [unmapped_Distance to Phone]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Distance to Electrical'})): ?>
			  <strong>Distance to Electrical</strong>
			  [unmapped_Distance to Electrical]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'General Access'})): ?>
			  <strong>General Access</strong>
			  [unmapped_General Access]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Utilities Expansion Charge'})): ?>
			  <strong>Utilities Expansion Charge</strong>
			  [unmapped_Utilities Expansion Charge]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Property Access'})): ?>
			  <strong>Property Access</strong>
			  [unmapped_Property Access]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Flood Zone'})): ?>
			  <strong>Flood Zone</strong>
			  [unmapped_Flood Zone]
			  <?php endif; ?>
			  <?php if(isset($single_property->survey)): ?>
			  <strong>Survey</strong>
			  [survey]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Miscellaneous)): ?>
			  <strong>Miscellaneous</strong>
			  [unmapped_Miscellaneous]
			  <?php endif; ?>
			  <?php if(isset($single_property->unitno)): ?>
			  <strong>Unit No</strong>
			  [unitno]
			  <?php endif; ?>
			  <?php if(isset($single_property->leadpaint)): ?>
			  <strong>Lead Paint</strong>
			  [leadpaint]
			  <?php endif; ?>
			  <?php if(isset($single_property->amenities)): ?>
			  <strong>Amenities</strong>
			  [amenities]
			  <?php endif; ?>
			  <?php if(isset($single_property->nobuildings)): ?>
			  <strong>No Buildings</strong>
			  [nobuildings]
			  <?php endif; ?>
			  <?php if(isset($single_property->termofrental)): ?>
			  <strong>Term of rental</strong>
			  [termofrental]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Packages Includes'})): ?>
			  <strong>Packages Includes</strong>
			  [unmapped_Packages Includes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Data Doc'})): ?>
			  <strong>Data Doc</strong>
			  [unmapped_Data Doc]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Verification)): ?>
			  <strong>Verification</strong>
			  [unmapped_Verification]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Door Height'})): ?>
			  <strong>Door Height</strong>
			  [unmapped_Door Height]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Finished Space Y/N'})): ?>
			  <strong>Finished Space Y/N</strong>
			  [unmapped_Finished Space Y/N]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Sale Includes'})): ?>
			  <strong>Sale Includes</strong>
			  [unmapped_Sale Includes]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->{'Best Use'})): ?>
			  <strong>Best Use</strong>
			  [unmapped_Best Use]
			  <?php endif; ?>
			  <?php if(isset($single_property->grossannualincome)): ?>
			  <strong>Gross Annual Income</strong>
			  [grossannualincome]
			  <?php endif; ?>
			  <?php if(isset($single_property->location)): ?>
			  <strong>Location</strong>
			  [location]
			  <?php endif; ?>
			  <?php if(isset($single_property->ceilingheight)): ?>
			  <strong>Ceiling Height</strong>
			  [ceilingheight]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Empowerment_Zone)): ?>
			  <strong>Empowerment Zone</strong>
			  [unmapped_Empowerment_Zone]
			  <?php endif; ?>
			  <?php if(isset($single_property->unmapped->Improved)): ?>
			  <strong>Improved</strong>
			  [unmapped_Improved]
			  <?php endif; ?>
			  <?php if(isset($single_property->facingdirection)): ?>
			  <strong>Facing Direction</strong>
			  [facingdirection]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Schools</h6>
		   <p>
			  <?php if(isset($single_property->gradeschool)): ?>
			  <strong>Grade School</strong>
			  [gradeschool]
			  <?php endif; ?>
			  <?php if(isset($single_property->highschool)): ?>
			  <strong>High School</strong>
			  [highschool]
			  <?php endif; ?>
			  <?php if(isset($single_property->middleschool)): ?>
			  <strong>Middle School</strong>
			  [middleschool]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Parking Information</h6>
		   <p>
			  <?php if(isset($single_property->garagespaces)): ?>
			  <strong>Garage Spaces</strong>
			  [garagespaces]
			  <?php endif; ?>
			  <?php if(isset($single_property->parkingspaces)): ?>
			  <strong>Parking Spaces</strong>
			  [parkingspaces]
			  <?php endif; ?>
		   </p>
		</div>
		<div class="zy-print__block">
		   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Deposits, Inclusions</h6>
		   <p>
			  <?php if(isset($single_property->firstmonreqd)): ?>
			  <strong>1st Month</strong>
			  [firstmonreqd]
			  <?php endif; ?>
			  <?php if(isset($single_property->lastmonreqd)): ?>
			  <strong>Last Month</strong>
			  [lastmonreqd]
			  <?php endif; ?>
			  <?php if(isset($single_property->secdeposit)): ?>
			  <strong>Secutity</strong>
			  [secdeposit]
			  <?php endif; ?>
			  <?php if(isset($single_property->rentfeeincludes)): ?>
			  <strong>Rent Includes</strong>
			  [rentfeeincludes]
			  <?php endif; ?>
		   </p>
		</div>
		
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Master Bedroom</h6> 
			   <p>
				  <?php if(isset($single_property->mbrdimen)): ?>
				  <strong>Size</strong>
				  [mbrdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->mbrlevel)): ?>
				  <strong>Level</strong>
				  [mbrlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->mbrdscrp)): ?>
				  <strong>Features</strong>
				  [mbrdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed2DIMEN) || isset($single_property->bed2LEVEL) || isset($single_property->bed2DSCRP) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #2</h6> 
			   <p>
				  <?php if(isset($single_property->bed2DIMEN)): ?>
				  <strong>Size</strong>
				  [bed2DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed2LEVEL)): ?>
				  <strong>Level</strong>
				  [bed2LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed2DSCRP)): ?>
				  <strong>Features</strong>
				  [bed2DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed3DIMEN) || isset($single_property->bed3LEVEL) || isset($single_property->bed3DSCRP) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #3</h6> 
			   <p>
				  <?php if(isset($single_property->bed3DIMEN)): ?>
				  <strong>Size</strong>
				  [bed3DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed3LEVEL)): ?>
				  <strong>Level</strong>
				  [bed3LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed3DSCRP)): ?>
				  <strong>Features</strong>
				  [bed3DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed4DIMEN) || isset($single_property->bed4LEVEL) || isset($single_property->bed4DSCRP) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #4</h6> 
			   <p>
				  <?php if(isset($single_property->bed4DIMEN)): ?>
				  <strong>Size</strong>
				  [bed4DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed4LEVEL)): ?>
				  <strong>Level</strong>
				  [bed4LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed4DSCRP)): ?>
				  <strong>Features</strong>
				  [bed4DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bed5DIMEN) || isset($single_property->bed5LEVEL) || isset($single_property->bed5DSCRP) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bedroom #5</h6> 
			   <p>
				  <?php if(isset($single_property->bed5DIMEN)): ?>
				  <strong>Size</strong>
				  [bed5DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed5LEVEL)): ?>
				  <strong>Level</strong>
				  [bed5LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bed5DSCRP)): ?>
				  <strong>Features</strong>
				  [bed5DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bathroom #1</h6> 
			   <p>
				  <?php if(isset($single_property->bth1dimen)): ?>
				  <strong>Size</strong>
				  [bth1dimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth1LEVEL)): ?>
				  <strong>Level</strong>
				  [bth1LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth1dscrp)): ?>
				  <strong>Features</strong>
				  [bth1dscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bathroom #2</h6> 
			   <p>
				  <?php if(isset($single_property->bth2dimen)): ?>
				  <strong>Size</strong>
				  [bth2dimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth2LEVEL)): ?>
				  <strong>Level</strong>
				  [bth2LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth2dscrp)): ?>
				  <strong>Features</strong>
				  [bth2dscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Bathroom #3</h6> 
			   <p>
				  <?php if(isset($single_property->bth3dimen)): ?>
				  <strong>Size</strong>
				  [bth3dimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth3level)): ?>
				  <strong>Level</strong>
				  [bth3level]
				  <?php endif; ?>
				  <?php if(isset($single_property->bth3dscrp)): ?>
				  <strong>Features</strong>
				  [bth3dscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Kitchen</h6> 
			   <p>
				  <?php if(isset($single_property->kitdimen)): ?>
				  <strong>Size</strong>
				  [kitdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->kitlevel)): ?>
				  <strong>Level</strong>
				  [kitlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->kitdscrp)): ?>
				  <strong>Features</strong>
				  [kitdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Family Room</h6> 
			   <p>
				  <?php if(isset($single_property->famdimen)): ?>
				  <strong>Size</strong>
				  [famdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->famlevel)): ?>
				  <strong>Level</strong>
				  [famlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->famdscrp)): ?>
				  <strong>Features</strong>
				  [famdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Living Room</h6> 
			   <p>
				  <?php if(isset($single_property->livdimen)): ?>
				  <strong>Size</strong>
				  [livdimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->livlevel)): ?>
				  <strong>Level</strong>
				  [livlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->livdscrp)): ?>
				  <strong>Features</strong>
				  [livdscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Dining Room</h6> 
			   <p>
				  <?php if(isset($single_property->dindimen)): ?>
				  <strong>Size</strong>
				  [dindimen]
				  <?php endif; ?>
				  <?php if(isset($single_property->dinlevel)): ?>
				  <strong>Level</strong>
				  [dinlevel]
				  <?php endif; ?>
				  <?php if(isset($single_property->dindscrp)): ?>
				  <strong>Features</strong>
				  [dindscrp]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
			<div class="zy-print__block">
			   <h6 class="zy-print__header" style="color: <?php echo $print_color; ?> !important;">Additional Room #1</h6> 
			   <p>
				  <?php if(isset($single_property->oth1DIMEN)): ?>
				  <strong>Size</strong>
				  [oth1DIMEN]
				  <?php endif; ?>
				  <?php if(isset($single_property->oth1LEVEL)): ?>
				  <strong>Level</strong>
				  [oth1LEVEL]
				  <?php endif; ?>
				  <?php if(isset($single_property->oth1DSCRP)): ?>
				  <strong>Features</strong>
				  [oth1DSCRP]
				  <?php endif; ?>
			   </p>
			</div>
		<?php endif; ?>

		
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