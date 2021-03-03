<?php
$contactIds=get_contact_id();
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:$actual_link; // fix on ajax request

$is_enable_save = zipperagent_is_enable_save();

/* Process the template */	
$template_name='';
$template_features='';
$template_print='';
$template_sidebar='';
$template_vtlink='';
$is_custom_template=0;
$property_type = isset($single_property->proptype)?strtoupper($single_property->proptype):'';
$property_subtype = isset($single_property->propsubtype)?strtoupper($single_property->propsubtype):'';

if(isset($_GET['custom_proptype'])){
	$property_type = $_GET['custom_proptype'];
}

//special case
switch($property_type){
	case "A":
			switch($property_subtype){
				case "CONDOMINIUM":
						$property_type=$property_subtype;
					break;
			}
		break;
	case "E":
			switch($property_subtype){
				case "Commercial":
						$property_type='COMMERCIAL';
					break;
			}
		break;
}

//custom case for bmmls-fgmmls-fmxmls-gfkmls-mwmmls
if( $single_property->sourceid == 'BMMLS' || $single_property->sourceid == 'FGMMLS' || $single_property->sourceid == 'FMXMLS' || $single_property->sourceid == 'GFKMLS' || $single_property->sourceid == 'MWMMLS' ){
		
	if($single_property->sourceid == 'BMMLS'){
		
		switch($property_type){
			// case "A": changed to RES
			case "RES":
					$property_type='RESIDENTIAL';
				break;
			// case "B": changed to LND
			case "LND":
					$property_type='LAND';
				break;
			// case "C": changed to CIS
			case "CIS":
					$property_type='COMMERCIAL';
				break;
		}

	}else if($single_property->sourceid == 'FGMMLS'){
		
		switch($property_type){
			// case "A": changed to RES
			case "RES":
					$property_type='RESIDENTIAL';
				break;
			// case "I": changed to MUL
			case "MUL":
					$property_type='MULTYFAMILY';
				break;
			// case "J": changed to LND
			case "LND":
					$property_type='LAND';
				break;
			// case "K": changed to CIS
			case "CIS":
					$property_type='COMMERCIAL';
				break;
		}
		
	}else if($single_property->sourceid == 'FMXMLS'){
		
		switch($property_type){
			// case "A": changed to CIS
			case "CIS":
					$property_type='RESIDENTIAL';
				break;
			// case "B": changed to CIL
			case "CIL":
					$property_type='COMMERCIAL';
				break;
		}
		
	}else if($single_property->sourceid == 'GFKMLS'){
		
		switch($property_type){
			// case "A": changed to RES
			case "RES":
					$property_type='RESIDENTIAL';
				break;
			// case "B": changed to MUL
			case "MUL":
					$property_type='MULTYFAMILY';
				break;
			// case "C": changed to LND
			case "LND":
					$property_type='LAND';
				break;
			// case "D": changed to CIL
			case "CIL":
					$property_type='COMMERCIAL';
				break;
			// case "F": changed to MOB
			case "MOB":
					$property_type='MOBILEHOMES';
				break;
			// case "G": changed to BUS
			case "BUS":
					$property_type='BUSINESS';
				break;
			// case "H": changed to CIS
			case "CIS":
					$property_type='COMMERCIAL';
				break;
			case "RES":
					$property_type='RES';
				break;
			case "LN":
					$property_type='LAND';
				break;
			case "COM":
					$property_type='COM';
				break;
			case "CL":
					$property_type='COMMERCIAL';
				break;
			case "MF":
					$property_type='MF';
				break;
			case "REL":
					$property_type='RESI';
				break;
		}
		
	}else if($single_property->sourceid == 'MWMMLS'){
		
		switch($property_type){
			// case "A": changed to RES
			case "RES":
					$property_type='RESIDENTIAL';
				break;
			// case "B": changed to MUL
			case "MUL":
					$property_type='MULTYFAMILY';
				break;
			// case "C": changed to FRM
			case "FRM":
					$property_type='FARM';
				break;
			// case "D": LND
			case "LND":
					$property_type='LAND';
				break;
			// case "E": CIS
			case "CIS":
					$property_type='COMMERCIAL';
				break;
		}
		
	}	
}
//custom case for nwmls
else if($single_property->sourceid == 'NWMLS'){
	switch($property_type){
		// case "MANU": changed to MANUFACTURING
		case "MANU":
				$property_type='MANUFACTURING';
			break;
	}
}
//custom case for MFRMLS
else if($single_property->sourceid == 'MFRMLS'){
	switch($property_type){
		case "RESIDENTIAL":
				
				switch($property_subtype){
					case "SINGLE FAMILY RESIDENCE":
							$property_type='RESIDENTIAL';
						break;
					case "CONDOMINIUM":
							$property_type='CONDOMINIUM';
						break;
					case "TOWNHOUSE":
							$property_type='RESIDENTIAL';
						break;
				}
			break;
	}
}

//Template selection
switch($property_type){
	case "SF": //Single Family		
	case "SFR": //Single Family		
	case "RES": //Single Family			
	case "DETSF": //Detached Single Family		
	// case "FARM": //Farm and Ranch
	case "CS": //CommonInterest CS
	case "CL": //CommonInterest CL
	case "BF": //ResidentialProperty BF
	case "COF": //OFFICE
	case "RESIDENTIAL": //Residential
	case "RESI": //Residential
	case "Residential": //Residential
		$template_name=get_detail_template_filename('sf')?get_detail_template_filename('sf'):'';
		$template_features='sf-features.php';
		$template_print='sf-print.php';
		$template_sidebar='sf-sidebar.php';
		$template_vtlink='sf-vtlink.php';
		break;
	case "MF": //Multifamily	
	case "MUL": //Multifamily	
	case "MUL": //Multifamily	
	case "MANU": //MAnufactured in Park	
	case "B": //Multi-family
	case "MULTYFAMILY": //Multi-family
	case "MULTI FAMILY": //Multi-family
	case "MULT": //Multi-family
	case "MUNT": //Multi unit
	case "MULTI UNIT 2-4": //Multi unit
	case "MULTI UNIT 5+": //Multi unit
	case "MULTI UNIT/INCOME": //Multi unit
		$template_name=get_detail_template_filename('mf')?get_detail_template_filename('mf'):'';
		$template_features='mf-features.php';
		$template_print='mf-print.php';
		$template_sidebar='mf-sidebar.php';
		$template_vtlink='mf-vtlink.php';
		break;
	case "MH": //Mobile Home	
	case "MOBILEHOMES": //Mobile Home	
	case "MOB": //Mobile Home	
	case "MOBILE/FLOATING HOME": //Mobile Home	
		$template_name=get_detail_template_filename('mh')?get_detail_template_filename('mh'):'';
		$template_features='mh-features.php';
		$template_print='mh-print.php';
		$template_sidebar='mh-sidebar.php';
		$template_vtlink='mh-vtlink.php';
		break;
	case "LD": //Land		
	case "LND": //Land		
	case "LAND": //Land		
	case "VLD": //Land		
	case "LN": //Land		
	case "FM": //Farm		
	case "FR": //Farm		
	case "C": //Lands&Lots		
	case "LAN": //Land		
	case "VACL": //Land
	case "Land": //Land	
	case "LOTS": //Farm	without house
		$template_name=get_detail_template_filename('ld')?get_detail_template_filename('ld'):'';
		$template_features='ld-features.php';
		$template_print='ld-print.php';
		$template_sidebar='ld-sidebar.php';
		$template_vtlink='ld-vtlink.php';
		break;
	case "RN": //Rental		
	case "RNT": //Rental		
	case "LSE": //Rental		
	case "RENT": //Rental		
	case "REN": //Rental		
	case "REL": //Rental		
	case "E": //Rental		
	case "LEASE/RENT": //Rental		
		$template_name=get_detail_template_filename('rn')?get_detail_template_filename('rn'):'';
		$template_features='rn-features.php';
		$template_print='rn-print.php';
		$template_sidebar='rn-sidebar.php';
		$template_vtlink='rn-vtlink.php';
		break;
	case "CC": //Condo		
	case "CND": //Condo		
	case "CND": //Condo		
	case "ATTSF": //Attached Single Family	
	case "CONDOMINIUM": //Condo		
	case "CON": //Condo	
	case "COND": //Condo	
	case "CLse": //Commercial Lease	
		$template_name=get_detail_template_filename('cc')?get_detail_template_filename('cc'):'';
		$template_features='cc-features.php';
		$template_print='cc-print.php';
		$template_sidebar='cc-sidebar.php';
		$template_vtlink='cc-vtlink.php';
		break;
	case "CI": //Commercial			
	case "CLSE": //Commercial Lease			
	case "COM": //Commercial				
	case "COMM": //Commercial		
	case "CM": //Commercial		
	case "INC": //Income		
	case "D": //Commercial		
	case "COMMERCIAL": //Commercial		
	case "COMI": //Commercial		
	case "Commercial_Sale": //Commercial Sale	
	case "Commercial": //Commercial	
	case "COMMERCIAL_SALE": //Commercial	
		$template_name=get_detail_template_filename('ci')?get_detail_template_filename('ci'):'';
		$template_features='ci-features.php';
		$template_print='ci-print.php';
		$template_sidebar='ci-sidebar.php';
		$template_vtlink='ci-vtlink.php';
		break;
	case "BU": //Business		
	case "BUS": //Business		
	case "BUSOP": //Business Opportunity		
	case "BOP": //Business Opportunity		
	case "IND": //Industri		
	case "BUSI": //Business		
	case "BUSINESS": //Business		
	case "BUSO": //Business		
	case "BUSINESS OPPORTUNITY": //Business Opportunity		
	case "BUSINESS_OPPORTUNITY": //Business Opportunity		
		$template_name=get_detail_template_filename('bu')?get_detail_template_filename('bu'):'';
		$template_features='bu-features.php';
		$template_print='bu-print.php';
		$template_sidebar='bu-sidebar.php';
		$template_vtlink='bu-vtlink.php';
		break;
	case "RESI": //Residential
	case "RINC": //Residential
	case "RLSE": //Residential
	case "A": //Residential
	case "RLse": //Residential Lease
	case "RESIDENTIAL_LEASE": //Residential Lease
		$template_name=get_detail_template_filename('rd')?get_detail_template_filename('rd'):'';
		$template_features='rd-features.php';
		$template_print='rd-print.php';
		$template_sidebar='rd-sidebar.php';
		$template_vtlink='rd-vtlink.php';
		break;
	case "FARM": //Farm
	case "FAR": //Farm
	case "Farm": //Farm	
		$template_name=get_detail_template_filename('fm')?get_detail_template_filename('fm'):'';
		$template_features='fm-features.php';
		$template_print='fm-print.php';
		$template_sidebar='fm-sidebar.php';
		$template_vtlink='fm-vtlink.php';
		break;
	case "MANUFACTURING": //Manufacturing
		$template_name=get_detail_template_filename('mu')?get_detail_template_filename('mu'):'';
		$template_features='mu-features.php';
		$template_print='mu-print.php';
		$template_sidebar='mu-sidebar.php';
		$template_vtlink='mu-vtlink.php';
		break;
	default: //custom default		
		// $template_name = zipperagent_detailpage_layout();
		$template_name=get_detail_template_filename('sf')?get_detail_template_filename('sf'):'';
		$template_features='sf-features.php';
		$template_print='sf-print.php';
		$template_sidebar='sf-sidebar.php';
		$template_vtlink='sf-vtlink.php';
		break;
	
}

/* Generate custom template */
$groupname = ZipperagentGlobalFunction()->zipperagent_detailpage_group();
$sourceid = strtolower($single_property->sourceid);

// $group_dir_default='/default';
// $template_features_default = 'default-features.php';
// $template_print_default	   = 'default-print.php';
// $template_sidebar_default  = 'default-sidebar.php';
// $template_vtlink_default   = 'default-vtlink.php';
$group_dir_default='/mlspin';
$template_features_default = 'sf-features.php';
$template_print_default	   = 'sf-print.php';
$template_sidebar_default  = 'sf-sidebar.php';
$template_vtlink_default   = 'sf-vtlink.php';

if($groupname == 'old_mlspin'){
	$group_dir = $group_dir_default;
	$template_features = $template_features_default;
	$template_print	   = $template_print_default;
	$template_sidebar  = $template_sidebar_default;
	$template_vtlink   = $template_vtlink_default;
}else{
	$group_dir = $groupname ? '/' . $groupname : '';
}

$template_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/'. $template_name;
$template_features_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/features/'. $template_features;
$template_print_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/print/'. $template_print;
$template_sidebar_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/sidebar/'. $template_sidebar;
$template_vtlink_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/vtlink/'. $template_vtlink;

/* custom case for NERENMLS in MLSPIN group */
$rb = ZipperagentGlobalFunction()->zipperagent_rb();
$asrc=$rb['web']['asrc'];
if($groupname=='mlspin' && $asrc=='0,NERENMLS'){
	$template_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/'. $template_name;
	$template_features_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/features/nerenmls/'. $template_features;
	$template_print_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/print/nerenmls/'. $template_print;	
	$template_sidebar_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/sidebar/nerenmls/'. $template_sidebar;
	$template_vtlink_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/vtlink/nerenmls/'. $template_vtlink;
}
/* end custom case for NERENMLS in MLSPIN group */

//check subfolder
$template_path = file_exists(ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/'. $sourceid .'/'. $template_name)?ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/'. $sourceid .'/'. $template_name:$template_path;
$template_features_path = file_exists(ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid. '/features/'. $template_features)?ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid. '/features/'. $template_features:$template_features_path;
$template_print_path = file_exists(ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid. '/print/'. $template_print)?ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid. '/print/'. $template_print:$template_print_path;
$template_sidebar_path = file_exists(ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid .'/sidebar/'.$template_sidebar)?ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid .'/sidebar/'.$template_sidebar:$template_sidebar_path;
$template_vtlink_path = file_exists(ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid .'/vtlink/'. $template_vtlink)?ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir. '/'. $sourceid .'/vtlink/'. $template_vtlink:$template_vtlink_path;

//default template
$template_features_path_default = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir_default .'/features/'. $template_features_default;
$template_print_path_default = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir_default .'/print/'. $template_print_default;
$template_sidebar_path_default = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir_default .'/sidebar/'. $template_sidebar_default;
$template_vtlink_path_default = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir_default .'/vtlink/'. $template_vtlink_default;

/* if custom template exists, show the template */
if(file_exists($template_path) && $template_name ){
	include $template_path;
	return;
}	

/* if there is no template, run default template */

?>
<?php /* <link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/bootstrap.min.css'; ?>">	*/ ?>

<div id="zipperagent-content">
	<section class="col-lg-12 col-sm-12 col-md-12 col-xl-12 zy_main hideonprint <?php echo $groupname; ?>" itemtype="http://schema.org/Residence">
		<article class="container-fluid">
			<div id="zy_header-section" class="row zyapp_main-style" style="max-width:none;">
				
				<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save header section ?>
				
				<div class="zy_header-style col-lg-3 col-sm-12 col-md-12 col-xl-3 zy_nopadding">
					<div class="zy_address-style" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
						<h1>
							<p class="zy_address-style"><span itemprop="streetAddress">[streetno] <?php echo isset($single_property->streetname)?zipperagent_fix_comma($single_property->streetname):'' ?> <?php echo isset($single_property->unitno)?'#'.$single_property->unitno:'' ?></span></p>
							<p class="zy_subaddress-style">
								<span itemprop="addressLocality"> <?php echo isset($single_property->lngTOWNSDESCRIPTION) && !empty($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION. ',':'' ?> </span>
								<span itemprop="addressRegion"> <?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?> </span>
								<span itemprop="postalCode"> <?php echo isset($single_property->zipcode)?$single_property->zipcode:'' ?> </span>
							</p>							
						</h1>
					</div>
				</div>
				
				<div class="zy_price-mls col-lg-3 col-sm-12 col-md-12 col-xl-4 zy_nopadding">
					<div class="row">
						<div class="col-lg-6 col-sm-12 col-md-12 col zy_nopadding">
							<h2>
								<p class="zy_price-style"><?php echo zipperagent_currency(); ?>[realprice]</p>
								<p class="zy_label-style">Price</p>
							</h2>
						</div>
						<div class="col-lg-6 col-sm-12 col-md-12 col zy_nopadding">
							<h2>
								<p class="zy_mlsno">[listno]</p>
								<p class="zy_label-style">[displaySource]#</p>
							</h2>
						</div>
					</div>
				</div>
				
				<div class="zy_price-mls col-lg-6 col-sm-12 col-md-12 col-xl-5 zy_nopadding">
					<div class="row">
						<div class="<?php echo $is_enable_save ? 'col-lg-3' : 'col-lg-4'; ?> col-sm-12 col-md-12">
							<h2>
								<p class="zy_price-style zy_status-style zpa-status <?php echo is_numeric($single_property->status)? 'status_'.$single_property->status : $single_property->status; ?>">[status]</p>
								<p class="zy_label-style">Status</p>
							</h2>
						</div>
						<div class="<?php echo $is_enable_save ? 'col-lg-8' : 'col-lg-7'; ?> col-sm-12 col-md-12 zy_nopadding zy-detail-tool">
							<div class="row">								
								<div class="btn_wrap zy_save-favorite-wrap col-btn">
									<button class="zy_save-favorite <?php echo zipperagent_is_favorite($single_property->id)?"favorited":""; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" afterAction="save_favorite" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>"><i class="fa fa-heart fa-fw" role="none"></i></button>
									<span>Favorite</span>
								</div>
								
								<?php if($is_enable_save): ?>
								<div class="btn_wrap zy_save-property-wrap col-btn">
									<button class="zy_save-property <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" afterAction="save_property" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>"><i class="fa fa-floppy-o fa-fw" role="none"></i></button>
									<span>Save</span>
								</div>
								<?php endif; ?>
								
								<div class="btn_wrap zy_schedule-showing-wrap col-btn">
									<button class="zy_schedule-showing <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="schedule_show"><i class="fa fa-clock-o fa-fw" role="none"></i></button>
									<span>Request Showing</span>
								</div>
								
								<div class="btn_wrap zy_request-showing-wrap col-btn">
									<button class="zy_request-showing <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="request_info"><i class="fa fa-info fa-fw" role="none"></i></button>
									<span>Request info</span>
								</div>
								
								<div class="btn_wrap zy_share-property-wrap col-btn">
									<button class="zy_share-property dropdown-toggle" id="dropdownShare" data-toggle="dropdown"><i class="fa fa-share fa-fw" role="none"></i></button>
									<span>Share</span>
									<div class="dropdown-menu" aria-labelledby="dropdownShare">
										<ul class="menu-list">
											<li>
												<a class="share-item share-email <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="share_email" contactid="<?php echo implode(',',$contactIds) ?>" href="#">
													<i class="zy-icon zy-icon--larger fa fa-at" aria-hidden="true" role="none"></i>
													<span>Email this listing</span>
												</a>
												
											</li>
											<?php /*
											<li>
												<a class="share-item" href="https://pinterest.com/pin/create/button/?url=<?php echo $actual_link; ?>" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
													<i class="zy-icon zy-icon--larger fa fa-pinterest" aria-hidden="true" role="none"></i>
													<span>Share on Pinterest</span>
												</a>
											</li>
											<li>
												<a class="share-item" href="https://plus.google.com/share?url=<?php echo $actual_link; ?>" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
													<i class="zy-icon zy-icon--larger fa fa-google-plus" aria-hidden="true" role="none"></i>
													<span>Share on Google+</span>
												</a>
											</li> */ ?>
											<li>
												<a class="share-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>" target="_blank" onclick="window.open(this.href, 'facebook-share-dialog', 'width=626,height=436'); return false;">
													<i class="zy-icon zy-icon--larger fa fa-facebook" aria-hidden="true" role="none"></i>
													<span>Share on Facebook</span>
												</a>
											</li>
											<?php /*
											<li>
												<a class="share-item" href="https://twitter.com/share?url=<?php echo $actual_link; ?>" target="_blank" onclick="window.open(this.href, 'twitter-share', 'width=626,height=436'); return false;">
													<i class="zy-icon zy-icon--larger fa fa-twitter" aria-hidden="true" role="none"></i>
													<span>Share on Twitter</span>
												</a>
											</li>
											<li>
												<a class="share-item" href="#" onClick="window.print()" target="_blank">
													<i class="zy-icon zy-icon--larger fa fa-print" aria-hidden="true" role="none"></i>
													<span>Print this listing</span>
												</a>
											</li> */ ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($is_doing_ajax) && $is_doing_ajax) $header_section = ob_get_clean(); //end save header section ?>
			</div>
			
			<div class="row zy_highlight-section">
				
				
				<?php if( strpos($asrc, 'NERENMLS') !== false ): ?>
				<div class="col-xs-12">
					<div class="full-details-disclaimer">
						<?php echo $source_details; ?>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-lg-8 col-sm-12 col-md-12 col-xl-8"> 
					<div id="gallery-column" style="display: block !important;">
						
						<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">	
						
						<?php if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ): ?>
						
						<div class="row">
							<div class="col-xs-12 zpa-property-photo">
								<div class="owl-carousel-container">
										
									<div class="top-head-carousel-wrapper">
										<div class="zy-full-lightbox">
											<a class="btn btn-primary btn-zy-lightbox">
												<svg id="zy-icon-arrowsExpand_16x16" viewBox="0 0 16 16"><path d="M14.53 10.12h-.84a.42.42 0 0 0-.44.4V12l-2.66-2.68a.48.48 0 0 0-.61 0l-.64.68a.38.38 0 0 0 0 .55l2.72 2.72h-1.57a.43.43 0 0 0-.4.46v.82a.43.43 0 0 0 .41.46h3.86a.63.63 0 0 0 .64-.64v-3.85a.45.45 0 0 0-.47-.4zM6 9.33a.38.38 0 0 0-.55 0l-2.72 2.74v-1.59a.43.43 0 0 0-.45-.4h-.82a.43.43 0 0 0-.46.41v3.87a.63.63 0 0 0 .63.65h3.85a.45.45 0 0 0 .4-.47v-.85a.42.42 0 0 0-.4-.44H4l2.66-2.66a.48.48 0 0 0 0-.62zM3.93 2.73h1.58a.43.43 0 0 0 .4-.46v-.81a.43.43 0 0 0-.4-.46H1.65a.63.63 0 0 0-.65.63v3.85a.45.45 0 0 0 .47.4h.84a.42.42 0 0 0 .44-.4V4l2.66 2.68a.48.48 0 0 0 .61 0L6.66 6a.38.38 0 0 0 0-.55zM14.37 1h-3.85a.45.45 0 0 0-.4.47v.84a.42.42 0 0 0 .4.44H12L9.32 5.41a.48.48 0 0 0 0 .62l.68.64a.38.38 0 0 0 .55 0l2.72-2.72v1.57a.43.43 0 0 0 .45.4h.82a.43.43 0 0 0 .46-.41V1.65a.63.63 0 0 0-.63-.65z" fill-rule="evenodd"></path></svg>
											</a>
										</div>
										<?php /* < div class="owl-carousel top-head-carousel <?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ) echo "needLogin"; ?>"> */ ?>
										<div class="owl-carousel top-head-carousel" aria-label="carousel">
											<?php
											if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
												$i=0;
												foreach ($single_property->photoList as $pic ){ ?>
													<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
														<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1600&h=1024&n={$i}" ?>')" class="owl-slide"><img class="" src="<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1600&h=1024&n={$i}" ?>" /></div>
													<?php else: ?>
														<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="owl-slide"><img class="" src="<?php echo $pic->imgurl; ?>" /></div>
													<?php endif; ?>
												<?php 
												$i++;
												}
											} ?>
										</div>
										<div class="left-nav"><i class="icon-left-arrow" role="none"></i>
										</div>
										<div class="right-nav"><i class="icon-right-arrow" role="none"></i>
										</div>
									</div>
									<div class="carousel-controller-wrapper">
										<div class="owl-carousel carousel-controller" aria-label="carousel">
											<?php
											if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
												$i=0;
												foreach ($single_property->photoList as $pic ){ ?>
													<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
														<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=150&h=150&n={$i}" ?>')" class="item"></div>
													<?php else: ?>
														<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="item"></div>
													<?php endif; ?>
													<?php 
												$i++;
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>							
								
						</div>
							
							
						<?php /*
						if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
							$i=0;
							echo '<div id="za-popup-gallery-0" style="display:none;">';
							foreach ($single_property->photoList as $pic ){ ?>
								<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
									<a href="<?php echo '//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}' ?>") title=''>Image-<?php echo $i; ?></a>
								<?php else: ?>
										<a href="<?php echo $pic->imgurl; ?>">Image-<?php echo $i; ?></a>
								<?php endif; ?>
							<?php 
							$i++;
							}
							echo '</div>';
						} */?>
											
						<script>
							// jQuery(document).ready(function() {
								// jQuery('.zy-full-lightbox .btn-zy-lightbox').click(function(e){
									// e.preventDefault();
									// var gallery = jQuery(this).attr('href');
									// jQuery(gallery).magnificPopup({
										// delegate: 'a',
										// type: 'image',
										// gallery: {
											// enabled: true,
											// navigateByImgClick: true,
										// }
									// }).magnificPopup('open');
								// });
								// jQuery(document).on('click', '.popup-modal-dismiss', function (e) {
									// e.preventDefault();
									// jQuery.magnificPopup.close();
								// });
							// });
						</script>
						<?php endif; ?>
						
						<?php 
						$includes=array('gsmls','nwmls');
						if(in_array($groupname,$includes)): ?>
						<div class="zy_img-source">
							<?php
							$img_disclaimer='';
							if(isset($single_property->listAgentName) && is_show_agent_name()){
								$img_disclaimer.= sprintf( "Listing Provided Courtesy %s of", $single_property->listAgentName);							
							}else{
								$img_disclaimer.= "Listing Provided Courtesy of";						
							}
							
							if(isset($single_property->listOfficeName)){
								$img_disclaimer.= ' '. "<strong>{$single_property->listOfficeName}</strong>";
							}	
							echo $img_disclaimer;
							?>
						</div>
						<?php endif; ?>
					</div>
						
					<div id="zy_description-section" class="zy_description-section">
						
						<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save description section ?>
												
						<div class="zy_print-button">
							<a id="zy_open-print-popup" href="#"><i class="fa fa-print" aria-hidden="true" role="none"></i> Print</a>
						</div>
						
						<div class="zy_vitural-tour">
						<?php
						/* incldue vtlink template */
						if(file_exists($template_vtlink_path) && $template_vtlink){
							include $template_vtlink_path;
						}else{
							include $template_vtlink_path_default;
						}
						?>			
						</div>
						
						<?php if(isset($single_property->openHouses) && sizeof($single_property->openHouses)): ?>	
						<h2>Open House</h2>
						<?php 
						foreach($single_property->openHouses as $openHouse){
													
							$sourceid=isset($single_property->sourceid)?$single_property->sourceid:'';
							$mlstz = zipperagent_mls_timezone($sourceid);
							$dt = new DateTime("now", new DateTimeZone($mlstz)); //first argument "must" be a string
							$dt->setTimestamp($openHouse->startDate/1000); //adjust the object to correct timestamp
							$startDateOnly = $dt->format('Y-m-d');
							$startDate = $dt->format('M j, Y h:i A');
							$startTime =  $dt->format('h:i A');
							
							$duration = isset( $openHouse->duration ) && !empty( $openHouse->duration ) ? $openHouse->duration : 0;
							$printEndTime = '';
							
							if( $duration ){
								$dt->add(new DateInterval('PT' . $duration . 'M'));
								// $endTime = date( 'h:i A', strtotime("+{$duration} minutes", strtotime($startTime)) );
								$endTime = $dt->format('h:i A');
								$printEndTime = '- '.$endTime;
							}else if($openHouse->endDate){
								$dt->setTimestamp($openHouse->endDate/1000);
								$endDateOnly = $dt->format('Y-m-d');
								
								if($startDateOnly!=$endDateOnly){
									
									$endDate = $dt->format('M j, Y h:i A');
									$printEndTime = '- '.$endDate;
								}else{
									
									$endTime = $dt->format('h:i A');
									$printEndTime = '- '.$endTime;
								}
							}
							?>
							
							<p class="open-house-info"><span class="openHomeText"><?php echo $startDate ?> <?php echo $printEndTime; ?></p>							
						<?php
						}
						?>
						<?php endif; ?>
						
						<h2>Description</h2>
						<p>[remarks]</p>
					
						<?php if(isset($is_doing_ajax) && $is_doing_ajax) $description_section = ob_get_clean(); //end save description section ?>
						
					</div>
						
				</div>				
				
				<div id="zy_sidebar" class="col-lg-4 col-sm-12 col-md-12 col-xl-4">					
					
					<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save sidebar section ?>
					
					<?php ob_start(); ?>
					<ul class="zy_prop-details">						
						
						
						<?php if( isset($single_property->syncTime) ){ ?>
						<li><label class="update-info col-xs-12 zy_nopadding"> Last Checked for Updates on [syncTime] </label></li>
						<?php }else if( isset($single_property->syncAge) ){ ?>
						<li><label class="update-info col-xs-12 zy_nopadding"> Last Checked for Updates: [syncAge] minutes ago </label></li>
						<?php } ?>
						
						<?php
						/* incldue sidebar template */
						if(file_exists($template_sidebar_path) && $template_sidebar){
							include $template_sidebar_path;
						}else{
							include $template_sidebar_path_default;
						}
						?>					
					</ul>
					<?php $property_detail=ob_get_clean(); ?>
					
					<?php echo strpos($asrc, 'NERENMLS') === false ?$property_detail:''; ?>
					
					<ul class="zy_agent-info">
					
						<?php $user_default = ZipperagentGlobalFunction()->zipperagent_url() . 'images/user-default.png'; ?>
						
						<?php if( isset($single_property->listingAgent) ): 
						$agentFullName = isset( $single_property->listingAgent->userName ) ? $single_property->listingAgent->userName : '';
						$agentFullNameArr = explode( ' ',  $agentFullName );
						$agentFirstName =  $agentFullNameArr ? $agentFullNameArr[0] : '';
						$agentImage = isset( $single_property->listingAgent->imageURL )? $single_property->listingAgent->imageURL : $user_default;
						$agentPhone = isset( $single_property->listingAgent->phoneMobile )? $single_property->listingAgent->phoneMobile : ( isset($single_property->listingAgent->phoneOffice) ? $single_property->listingAgent->phoneOffice : '');
						$agentPhoneMobile = isset( $single_property->listingAgent->phoneMobile )? $single_property->listingAgent->phoneMobile : '';
						$agentPhoneOffice = isset($single_property->listingAgent->phoneOffice) ? $single_property->listingAgent->phoneOffice : '';
						$agentPhoneFax = isset( $single_property->listingAgent->phoneFax )? $single_property->listingAgent->phoneFax : '';
						$agentEmail = isset( $single_property->listingAgent->email )? $single_property->listingAgent->email : '';
						
						switch($groupname):
						
							case "sibor":
							?>
							<li>
								<div class="zy_single-agent">
									<span class="zy_agent-title">Listing Agent</span>
									<?php if($agentImage): ?><div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
									<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
									<?php if($agentEmail): ?><p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:<?php echo $agentEmail; ?>"><?php echo $agentEmail; ?></a></p><?php endif; ?>
									<?php if($agentPhoneOffice): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span><?php echo $agentPhoneOffice; ?></p><?php endif; ?>
									<?php if($agentPhoneFax): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span><?php echo $agentPhoneFax; ?></p><?php endif; ?>
									<?php if($agentPhoneMobile): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span><?php echo $agentPhoneMobile; ?></p><?php endif; ?>
									<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
									<div class="clearfix"></div>
								</div>
							</li>							
							<?php break; ?>
							
							<?php default: ?>
							<li>Listing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
								<div class="clearfix"></div>
							</li>
							<?php break; ?>
							
						<?php endswitch; ?>
						<?php /* elseif( isset($single_property->listAgent) ): 
						$agentFullName = isset( $single_property->listAgent->fullName ) ? $single_property->listAgent->fullName : '';
						$agentFullNameArr = explode( ' ',  $agentFullName );
						$agentFirstName =  $agentFullNameArr ? $agentFullNameArr[0] : '';
						$agentImage = isset( $single_property->listAgent->imageURL )? $single_property->listAgent->imageURL : $user_default;
						$agentPhone = isset( $single_property->listOffice->officePhone )? $single_property->listOffice->officePhone : '';
						$agentEmail = isset( $single_property->listAgent->preferredMail )? $single_property->listAgent->preferredMail : '';
						
						?>
							<li>Listing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
								<div class="clearfix"></div>
							</li>
						<?php */ endif; ?>
						
						<?php if( isset($single_property->coListingAgent) ):
						$agentFullName = isset( $single_property->coListingAgent->userName ) ? $single_property->coListingAgent->userName : '';
						$agentFullNameArr = explode( ' ',  $agentFullName );
						$agentFirstName =  $agentFullNameArr ? $agentFullNameArr[0] : '';
						$agentImage = isset( $single_property->coListingAgent->imageURL )? $single_property->coListingAgent->imageURL : $user_default;
						$agentPhone = isset( $single_property->coListingAgent->phoneMobile )? $single_property->coListingAgent->phoneMobile : ( isset($single_property->coListingAgent->phoneOffice) ? $single_property->coListingAgent->phoneOffice : '');
						$agentPhoneMobile = isset( $single_property->coListingAgent->phoneMobile )? $single_property->coListingAgent->phoneMobile : '';
						$agentPhoneOffice = isset($single_property->coListingAgent->phoneOffice) ? $single_property->coListingAgent->phoneOffice : '';
						$agentPhoneFax = isset( $single_property->coListingAgent->phoneFax )? $single_property->coListingAgent->phoneFax : '';
						$agentEmail = isset( $single_property->coListingAgent->email )? $single_property->coListingAgent->email : '';
						
						switch($groupname):
						
							case "sibor":
							?>
							<li>
								<div class="zy_single-agent">
									<span class="zy_agent-title">CoListing Agent</span>
									<?php if($agentImage): ?><div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
									<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
									<?php if($agentEmail): ?><p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:<?php echo $agentEmail; ?>"><?php echo $agentEmail; ?></a></p><?php endif; ?>
									<?php if($agentPhoneOffice): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span><?php echo $agentPhoneOffice; ?></p><?php endif; ?>
									<?php if($agentPhoneFax): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span><?php echo $agentPhoneFax; ?></p><?php endif; ?>
									<?php if($agentPhoneMobile): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span><?php echo $agentPhoneMobile; ?></p><?php endif; ?>
									<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
									<div class="clearfix"></div>
								</div>
							</li>							
							<?php break; ?>
							
							<?php default: ?>
							<li>CoListing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
								<div class="clearfix"></div>
							</li>
							<?php break; ?>
							
						<?php endswitch; ?>
						<?php /* elseif( isset($single_property->coListAgent) ):
						$agentFullName = isset( $single_property->coListAgent->fullName ) ? $single_property->coListAgent->fullName : '';
						$agentFullNameArr = explode( ' ',  $agentFullName );
						$agentFirstName =  $agentFullNameArr ? $agentFullNameArr[0] : '';
						$agentImage = isset( $single_property->coListAgent->imageURL )? $single_property->coListAgent->imageURL : $user_default;
						$agentPhone = isset( $single_property->coListOffice->officePhone )? $single_property->coListOffice->officePhone : '';
						$agentEmail = isset( $single_property->coListAgent->preferredMail )? $single_property->coListAgent->preferredMail : '';
						?>
							<li>CoListing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
								<div class="clearfix"></div>
							</li>
						<?php */ endif; ?>
						
						<?php if( isset($single_property->salesAgent) ):
						$agentFullName = isset( $single_property->salesAgent->userName ) ? $single_property->salesAgent->userName : '';
						$agentFullNameArr = explode( ' ',  $agentFullName );
						$agentFirstName =  $agentFullNameArr ? $agentFullNameArr[0] : '';
						$agentImage = isset( $single_property->salesAgent->imageURL )? $single_property->salesAgent->imageURL : $user_default;
						$agentPhone = isset( $single_property->salesAgent->phoneMobile )? $single_property->salesAgent->phoneMobile : ( isset($single_property->salesAgent->phoneOffice) ? $single_property->salesAgent->phoneOffice : '');
						$agentPhoneMobile = isset( $single_property->salesAgent->phoneMobile )? $single_property->salesAgent->phoneMobile : '';
						$agentPhoneOffice = isset($single_property->salesAgent->phoneOffice) ? $single_property->salesAgent->phoneOffice : '';
						$agentPhoneFax = isset( $single_property->salesAgent->phoneFax )? $single_property->salesAgent->phoneFax : '';
						$agentEmail = isset( $single_property->salesAgent->email )? $single_property->salesAgent->email : '';
						
						switch($groupname):
						
							case "sibor":
							?>
							<li>
								<div class="zy_single-agent">
									<span class="zy_agent-title">Sales Agent</span>
									<?php if($agentImage): ?><div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
									<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
									<?php if($agentEmail): ?><p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:<?php echo $agentEmail; ?>"><?php echo $agentEmail; ?></a></p><?php endif; ?>
									<?php if($agentPhoneOffice): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span><?php echo $agentPhoneOffice; ?></p><?php endif; ?>
									<?php if($agentPhoneFax): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span><?php echo $agentPhoneFax; ?></p><?php endif; ?>
									<?php if($agentPhoneMobile): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span><?php echo $agentPhoneMobile; ?></p><?php endif; ?>
									<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
									<div class="clearfix"></div>
								</div>
							</li>							
							<?php break; ?>
							
							<?php default: ?>
							<li>Sales Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
								<div class="clearfix"></div>
							</li>
							<?php break; ?>
							
						<?php endswitch; ?>
						<?php endif; ?>
						
						<?php if( isset($single_property->coSalesAgent) ):
						$agentFullName = isset( $single_property->coSalesAgent->userName ) ? $single_property->coSalesAgent->userName : '';
						$agentFullNameArr = explode( ' ',  $agentFullName );
						$agentFirstName =  $agentFullNameArr ? $agentFullNameArr[0] : '';
						$agentImage = isset( $single_property->coSalesAgent->imageURL )? $single_property->coSalesAgent->imageURL : $user_default;
						$agentPhone = isset( $single_property->coSalesAgent->phoneMobile )? $single_property->coSalesAgent->phoneMobile : ( isset($single_property->coSalesAgent->phoneOffice) ? $single_property->coSalesAgent->phoneOffice : '');
						$agentPhoneMobile = isset( $single_property->coSalesAgent->phoneMobile )? $single_property->coSalesAgent->phoneMobile : '';
						$agentPhoneOffice = isset($single_property->coSalesAgent->phoneOffice) ? $single_property->coSalesAgent->phoneOffice : '';
						$agentPhoneFax = isset( $single_property->coSalesAgent->phoneFax )? $single_property->coSalesAgent->phoneFax : '';
						$agentEmail = isset( $single_property->coSalesAgent->email )? $single_property->coSalesAgent->email : '';
						
						switch($groupname):
						
							case "sibor":
							?>
							<li>
								<div class="zy_single-agent">
									<span class="zy_agent-title">CoSales Agent</span>
									<?php if($agentImage): ?><div class="col-lg-4 col-sm-4 col-md-4 col-xl-4 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
									<span class="col-lg-8 col-sm-8 col-md-8 col-xl-8 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
									<?php if($agentEmail): ?><p class="zy_agent-email"><span class="zy_agent-prop-title">Email: </span><a href="mailto:<?php echo $agentEmail; ?>"><?php echo $agentEmail; ?></a></p><?php endif; ?>
									<?php if($agentPhoneOffice): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Phone: </span><?php echo $agentPhoneOffice; ?></p><?php endif; ?>
									<?php if($agentPhoneFax): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Office Fax: </span><?php echo $agentPhoneFax; ?></p><?php endif; ?>
									<?php if($agentPhoneMobile): ?><p class="zy_agent-phone"><span class="zy_agent-prop-title">Cell Phone: </span><?php echo $agentPhoneMobile; ?></p><?php endif; ?>
									<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
									<div class="clearfix"></div>
								</div>
							</li>							
							<?php break; ?>
							
							<?php default: ?>						
							<li>CoSales Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
								<div class="clearfix"></div>
							</li>
							<?php break; ?>
							
						<?php endswitch; ?>
						<?php endif; ?>
						
					</ul>
					
					<?php echo strpos($asrc, 'NERENMLS') !== false ?$property_detail:''; ?>
					
					<?php if(isset($is_doing_ajax) && $is_doing_ajax) $sidebar_section = ob_get_clean(); //end save sidebar section ?>
					
				</div>
				
			</div>
			
			<div id="zy_bottom-section">
				
				<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save bottom section ?>
				
				<div class="row">
					
					<div class="col-xs-12">
						
						<h2>Property Details</h2>
						<?php
						/* incldue content template */
						if(file_exists($template_features_path) && $template_features){
							include $template_features_path;
						}else{
							include $template_features_path_default;
						}
						?>
					</div>
				</div>
				
				<?php if(isset($single_property->direction)): ?>	
				<div class="row">
					
					<div class="col-xs-12">						
						
						<h2>Directions</h2>
						<p>[direction]</p>
					</div>
				</div>
				<?php endif; ?>
				
				<div class="row">
					
					<div class="col-xs-12">

						<div class="full-details-disclaimer">
							<br> 
							<?php
							$excludes=array('gsmls');
							if(!in_array($groupname,$excludes) && strpos($asrc, 'NERENMLS') === false ){
								if( $source_details ){
									echo $source_details;
									
									if($groupname == 'nwmls'){
										$defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{$single_property->listOfficeName}</strong> and should be verified by the buyer.";
										echo '<br /><br />'. $defaultDisc;
									}
								}else{
									echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
								}
							}
							?>								
						</div>
					</div>
				</div>
				
				<?php if( isset($single_luxury) && isset($single_luxury->id) ): ?>
				<div class="row">
					<div class="col-xs-12">
						<h2 class="zy-listing__headline">Properties</h2>
						<?php zipperagent_luxury_table($single_luxury); ?>
					</div>
				</div>			
				<?php endif; ?>
				
				<?php if( isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
				<div class="row zy-widget map-widget">
					<div class="col-xs-12">
						<div class="zy-map-container">
							<div id="map" style="height:300px"></div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if( is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
				<div class="row zy-widget greatschool-widget">
					<div class="col-xs-12 col-md-12 col-lg-6">
						<h3 class="">Great Schools</h3>
						<div id="greatschools"></div>
						<script>
							jQuery(document).ready(function(){
								var curr_width = jQuery('.greatschool-widget #greatschools').width();
								var gs_iframe = '<iframe className="greatschools" src="//www.greatschools.org/widget/map?searchQuery=&textColor=0066B8&borderColor=DDDDDD&lat=<?php echo $single_property->lat; ?>&lon=<?php echo $single_property->lng; ?>&cityName=<?php echo isset($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION:'' ?>&state=<?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?>&normalizedAddress=<?php echo urlencode( zipperagent_get_address($single_property) ); ?>&width='+curr_width+'&height=368&zoom=1" width="'+curr_width+'" height="368" marginHeight="0" marginWidth="0" frameBorder="0" scrolling="no"></iframe>'
								jQuery('#greatschools').html(gs_iframe);
							});
						</script>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if( is_walkscore_enabled() ): ?>
				<div class="row zy-widget walkscore-widget">
					<div class="col-xs-12 col-md-12 col-lg-6">
						<h3 class="">Walk Score</h3>
						<div id="ws"></div>
						<script type='text/javascript'>
						var ws_wsid = 'ws';
						var ws_address = '<?php echo zipperagent_get_address($single_property); ?>';
						var ws_format = 'tall';
						var ws_width = '100%';
						var ws_height = '300';
						</script><style type='text/css'>#ws-walkscore-tile{position:relative;text-align:left}#ws-walkscore-tile *{float:none;}</style><div id='ws-walkscore-tile'></div><script type='text/javascript' src='https://www.walkscore.com/tile/show-walkscore-tile.php'></script>
					</div>
				</div>
				<?php endif; ?>
				
				<div class="row zy-widget">
					<div id="zy_mortgage-calculator" class="col-xs-12 col-md-12 col-lg-8 hideonprint">
						<?php include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-mortgage-calculator.php'; ?>
					</div>
				</div>
				
				<?php if( $agent ): ?>
				<div class="row zy-widget">
					<div id="ask-a-question-form" class="col-xs-12 col-md-12 col-lg-8">
						<h3 class="zy-listing-contact-title">Ask Agent a Question</h3>
						
						<form id="zpa-modal-contact-agent-form" method="post">
							
							<?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ): //only for non logged in user ?>
							<div class="row">
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-fname">First Name</label>
										<input type="text" id="listing-contact-fname" name="firstName" required="">
									</div><span></span>
								</div>
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-lname">Last Name</label>
										<input type="text" id="listing-contact-lname" name="lastName" required="">
									</div><span></span>
								</div>
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-email">Email</label>
										<input type="email" id="listing-contact-email" name="email" required="">
									</div><span></span>
								</div>
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-phone">Mobile</label>
										<input type="text" id="listing-contact-phone" name="phone" required="">
									</div><span></span>
								</div>
								<?php /*
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-city">City</label>
										<input type="text" id="listing-contact-city" name="city" required="">
									</div><span></span>
								</div>
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-state">State</label>
										<input type="text" id="listing-contact-state" name="state" required="">
									</div><span></span>
								</div>
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-zipcode">Zip Code</label>
										<input type="text" id="listing-contact-zipcode" name="zipCode" required="">
									</div><span></span>
								</div>
								<div class="col-md-6 hidden-on-login">
									<div>
										<label for="listing-contact-lookfor">Looking For</label><br />
										<input type="radio" id="listing-contact-lookfor" name="lookfor" value="buyer" required="">&nbsp; Buy
										<input type="radio" id="listing-contact-lookfor" name="lookfor" value="seller" required="">&nbsp; Sell
									</div><span></span>
								</div> */ ?>
							</div>
							<?php endif; ?>
							<div class="row">							
								<div class="col-md-12">
									<div>
										<label for="listing-contact-comment">
											What would you like to know?										
										</label>
										<textarea id="listing-contact-comment" class="at-comment-txt" name="note" cols="30" rows="5" required="required"></textarea>
									</div>
								</div>
								<?php if(is_register_form_chaptcha_enabled()): 
								$site_key = isset($rb['google']['site_key'])?$rb['google']['site_key']:'';
								?>
								<div class="col-md-12 mt-10">
									<div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
									<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
								</div>
								<?php endif; ?>						
								<div class="col-md-12">
									<input type="submit" class="listing-contact-submit" value="Submit">
								</div>
							</div>
							<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds) ?>" />
							<input type="hidden" name="agent" value="<?php echo $agent->login ?>" />
							<input type="hidden" name="actual_link" value="<?php echo $actual_link; ?>" />
							<input type="hidden" name="ref_page_url" value="<?php echo isset($rb['web']['ref_page_url']) ? $rb['web']['ref_page_url'] : 0; ?>" />
							<input type="hidden" name="leadSource" value="<?php echo ZipperagentGlobalFunction()->get_lead_source(); ?>" />
							<?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() ): //only for non logged in user ?>
							<input type="hidden" name="action" value="regist_user" >
							<?php else: ?>
							<input type="hidden" name="action" value="contact_agent" >
							<?php endif; ?>
						</form>
					</div>
				</div>
				<?php endif; ?>	
				
				<div class="row zy-widget">
					<div id="zy_related-properties" class="col-xs-12 col-md-12 col-lg-12 hideonprint" style="display:none">
						
					</div>
				</div>
				
				<div class="row">
					
					<div class="col-xs-12">

						<div class="full-details-disclaimer">
							<br> 
							<?php
							
							if($source_disclaimer){
								echo $source_disclaimer;
							}
							
							// if($groupname == 'nwmls'){
									// $defaultDisc="Disclaimer: The information contained in this listing has not been verified by <strong>{$single_property->listOfficeName}</strong> and should be verified by the buyer.";
									// echo $defaultDisc;
							// }
							?>								
						</div>
					</div>
				</div>
				
					
				<?php if(!isset($is_doing_ajax) && $property_cache): //only show on ajax mode, hide after ajax finished ?>
				<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" />
				<?php endif; ?>
				
				<?php if(isset($is_doing_ajax) && $is_doing_ajax) $bottom_section = ob_get_clean(); //end save bottom section ?>
				
			</div>
			
		</article>
		
	</section>
	<!-- print views -->
	<?php
	
		$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
		$print_logo = isset($rb['web']['print_logo'])?$rb['web']['print_logo']:'';
		$print_color = isset($rb['web']['print_color'])?$rb['web']['print_color']:'';
	?>	
	<div id="print-view-column" class="zy-print-view js-print-view top-brdr no-border" style="border-color: <?php echo $print_color; ?>">
	<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save print section ?>
	<?php
		/* incldue print template */
		/* old version
		if(file_exists($template_print_path) && $template_print){
			include $template_print_path;
		}else{
			include $template_print_path_default;
		} */
		include ZIPPERAGENTPATH . '/custom/templates/detail-new/template-defaultPrint.php';
	?>	
	<?php 
	if(isset($is_doing_ajax) && $is_doing_ajax) $print_section = ob_get_clean(); //end save print section
	?>
	</div>
</div>

<?php

// if(isset($_GET['debug'])){
	// session_start();
	// echo '<pre>'; print_r($_SESSION); echo '</pre>';
// }