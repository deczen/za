<?php
$contactIds=get_contact_id();

/* Process the template */	
$template_name='';
$template_features='';
$template_print='';
$template_sidebar='';
$template_vtlink='';
$is_custom_template=0;
$property_type = isset($single_property->proptype)?strtoupper($single_property->proptype):'';
$property_subtype = isset($single_property->propsubtype)?strtoupper($single_property->propsubtype):'';
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:$actual_link; // fix on ajax request

//special case
switch($property_type){
	case "A":
			switch($property_subtype){
				case "CONDOMINIUM":
						$property_type=$property_subtype;
					break;
			}
		break;
}

//Template selection
switch($property_type){
	case "SF": //Single Family		
	case "SFR": //Single Family		
	case "RES": //Single Family			
	case "DETSF": //Detached Single Family		
	case "FARM": //Farm and Ranch
	case "CS": //CommonInterest CS
	case "CL": //CommonInterest CL
	case "BF": //ResidentialProperty BF
	case "COF": //OFFICE
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
		$template_name=get_detail_template_filename('mf')?get_detail_template_filename('mf'):'';
		$template_features='mf-features.php';
		$template_print='mf-print.php';
		$template_sidebar='mf-sidebar.php';
		$template_vtlink='mf-vtlink.php';
		break;
	case "MH": //Mobile Home	
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
	case "RESIDENTIAL": //Residential
		$template_name=get_detail_template_filename('rd')?get_detail_template_filename('rd'):'';
		$template_features='rd-features.php';
		$template_print='rd-print.php';
		$template_sidebar='rd-sidebar.php';
		$template_vtlink='rd-vtlink.php';
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
$groupname = zipperagent_detailpage_group();

$group_dir_default='/default';
$template_features_default = 'default-features.php';
$template_print_default	   = 'default-print.php';
$template_sidebar_default  = 'default-sidebar.php';
$template_vtlink_default   = 'default-vtlink.php';

if($groupname == 'old_mlspin'){
	$group_dir = $group_dir_default;
	$template_features = $template_features_default;
	$template_print	   = $template_print_default;
	$template_sidebar  = $template_sidebar_default;
	$template_vtlink   = $template_vtlink_default;
}else{
	$group_dir = $groupname ? '/' . $groupname : '';
}

$template_path = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir .'/'. $template_name;
$template_features_path = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir .'/features/'. $template_features;
$template_print_path = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir .'/print/'. $template_print;
$template_sidebar_path = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir .'/sidebar/'. $template_sidebar;
$template_vtlink_path = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir .'/vtlink/'. $template_vtlink;

//default template
$template_features_path_default = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir_default .'/features/'. $template_features_default;
$template_print_path_default = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir_default .'/print/'. $template_print_default;
$template_sidebar_path_default = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir_default .'/sidebar/'. $template_sidebar_default;
$template_vtlink_path_default = ZIPPERAGENTPATH . '/custom/templates/detail'. $group_dir_default .'/vtlink/'. $template_vtlink_default;

/* if custom template exists, show the template */
if(file_exists($template_path) && $template_name ){
	include $template_path;
	return;
}	

/* if there is no template, run default template */
?>
<div id="zipperagent-content">
	<article class="listing-detail listing-wrapper js-listing-detail " <?php /* data-listingid="76820032" data-lat="42.2829" data-lng="-71.11872" data-postalcode="02131" data-officename="Century 21 North Shore" data-agentphone="" itemscope="" data-url="https://www.goodrichresidential.com/homes/512-Hyde-Park-Ave/Boston/MA/02131/76820032/" */ ?> itemtype="http://schema.org/Residence">
		<div class="uk-sticky-placeholder" style="margin: 0px;">
			<header class="zy-listing__header js-listing__header uk-active" data-uk-sticky="{media: 768}">
				<div class="grid--wrapper uk-position-relative">
					<?php /* 
					<a href="<?php echo $back_url; ?>" class="zy-back-to-search js-back-to-search" data-uk-tooltip="" title="Return to Previous Page">
						<i class="zy-icon fa fa-chevron-left" aria-hidden="true"></i>
					</a> */ ?>
					<a class="zy-back-to-search js-back-to-search" href="javascript:history.back()"><i class="zy-icon fa fa-chevron-left" aria-hidden="true"></i></a>
					<div class="grid grid--noWrap zy-header__inner">
						<div class="cell">
							<div class="grid grid--gutters">
								<div class="cell cell-md-7 cell-lg-8 cell-xs-12">
									<div id="header-column" class="zy-listing__header-grid">
										
										<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save header section ?>
										
										<?php echo property_source_info($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'' )); ?>
										<div class="mb-0" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
											<h1 class="uk-h2 mt-5 mb-0 listing-address at-prop-addr-txt">
												<span itemprop="streetAddress"> [streetno] <?php echo isset($single_property->streetname)?zipperagent_fix_comma($single_property->streetname):'' ?> </span></h1>
											<div class="zy-listing__locations-list uk-text-muted my-0 at-city-state-zip-txt">
												<span itemprop="addressLocality"> <?php echo isset($single_property->lngTOWNSDESCRIPTION) && !empty($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION. ',':'' ?> </span>
												<span itemprop="addressRegion"> <?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?> </span>
												<span itemprop="postalCode"> <?php echo isset($single_property->zipcode)?$single_property->zipcode:'' ?> </span>
											</div>
										</div>
										<ul class="aux-info uk-text-small uk-text-uppercase mt-5">

											<li class="zy-price__base uk-text-bold green">
												<span>$[realprice]</span>
											</li>
											<?php /* <li>
												STATUS: <span class="uk-text-bold"> [status] </span>
											</li> */ ?>
											<?php if( isset($single_property->dayssincelisting) && !empty($single_property->dayssincelisting) ): ?>
											<li>
												ON SITE: <span class="uk-text-bold"> [dayssincelisting] DAYS </span>
											</li>
											<?php endif; ?>
											<li>[displaySource] #:
												<span class="uk-text-bold">[listno]</span>
											</li>
											<?php if(isset($single_property->dateavailableformatted)): ?>
											<li>Available On:
												<span class="uk-text-bold">[dateavailableformatted]</span>
											</li>
											<?php endif; ?>


										</ul>

										<div class="grid grid-xs--full grid-md--halves grid-xl--thirds my-5">
											<div class="cell">
												<i class="zy-sash py-5 px-10 zpa-status <?php echo is_numeric($single_property->status)? 'status_'.$single_property->status : $single_property->status; ?> zy-listing-single__sash undercontract">[status]</i>
											</div>
											<?php if( isset($single_property->syncTime) ){ ?>
											<div class="update-info">
												Last Checked for Updates on [syncTime]
											</div>
											<?php }else if( isset($single_property->syncAge) ){ ?>
											<div class="update-info">
												Last Checked for Updates: [syncAge] minutes ago
											</div>
											<?php } ?>
										</div>
										
										<?php /* 
										<span class="zy-listing-single__info-updated text-small" data-uk-tooltip="{pos:'bottom'}" title="Our MLS data is the freshest around which ensures the most accurate property information is available to you">
											UPDATED: <span class="uk-text-bold">198 min ago</span>
										</span> */ ?>
										
										<?php if(isset($is_doing_ajax) && $is_doing_ajax) $header_section = ob_get_clean(); //end save header section ?>
										
									</div>
								</div>
								<div class="zy-listing__header-cta cell cell-md-4 cell-lg-3 cell-xs-12 hideonprint">
									<div class="grid grid-xs--full py-15">
										<div class="cell">
											<button style="width:100%" class="<?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?> schedule-showing-btn | at-request-show-btn zy-listing__header-cta__btn width-1-1 btn-primary js-listing-request-showing" afterAction="schedule_show"> <span class="hidden-xs"> <i class="glyphicon glyphicon-time fs-12"></i> Request Showing </span> <span class="visible-xs fs-12"> Request Showing </span> </button>	
										</div>
										<div class="cell top-action-buttons btn-group mt-10 " role="group" aria-label="Share options and option to view property on a map">
											<?php /*
											<div class="zy-ccomp zy-ccomp__dropdown width-1-2" data-zy-ccomp="dropdown">
												<button type="button" class="at-share-btn js-listing-share width-1-1 height-1-1 btn-small" data-zy-ccomp-trigger="">
													<span class="zy-icon--stack">
														<i class="zy-icon zy-icon--larger fa fa-share-square-o" aria-hidden="true"></i>
													</span> Share
												</button>
												<div class="zy-ccomp__content zy-dropdown--center zy-dropdown--small--mobile">
													<ul class="zy-ccomp__menu-list">
														<li>
															<a href="#" class="js-email-listing" title="Email this listing">
																<svg class="zy-icon zy-icon--larger">
																	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-email"></use>
																</svg> Email this listing
															</a>
														</li>

														<li>
															<a rel="nofollow" target="_blank" href="http://pinterest.com/pin/create/button/?url=https://www.google.com&amp;media=https://bt-photos.global.ssl.fastly.net/mlspin/orig_boomver_1_72229835_0.jpg&amp;description=512 Hyde Park Ave" count-layout="none" title="Share on Pinterest">
																<svg class="zy-icon zy-icon--larger">
																	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-pinterest"></use>
																</svg> Share on Pinterest
															</a>
														</li>
														<li>
															<a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=https://www.google.com" title="Share on Google+">
																<svg class="zy-icon zy-icon--larger">
																	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-google"></use>
																</svg> Share on Google+
															</a>
														</li>
														<li>
															<a rel="nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.google.com" title="Share on Facebook">
																<svg class="zy-icon zy-icon--larger">
																	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-facebook"></use>
																</svg> Share on Facebook
															</a>
														</li>
														<li>
															<a rel="nofollow" target="_blank" href="http://twitter.com/home?status=Check out this property! https://www.google.com&amp;media=https://bt-photos.global.ssl.fastly.net/mlspin/orig_boomver_1_72229835_0.jpg" title="Share on Twitter">
																<svg class="zy-icon zy-icon--larger">
																	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-twitter"></use>
																</svg> Share on Twitter
															</a>
														</li>

														<li>
															<a class="js-listing-print" href="javascript:window.print()">
																<svg class="zy-icon zy-icon--larger">
																	<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-print"></use>
																</svg>
																Print this listing
															</a>
														</li>
													</ul>
													<!-- end .zy-ccomp__menu-list -->
												</div>
											</div>
											<!-- end .zy-ccomp -->
											<button type="button" class="btn-small js-listing-map width-1-2" style="width:100%">
												<span class="zy-icon--stack">
													<i class="zy-icon zy-icon--larger fa fa-map-marker" aria-hidden="true"></i>
												</span> Map
											</button>
											 */
											 
											// $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
											// $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
											// $current_url = esc_url_raw($current_url); //encode it
											// $urll = url_encode( $current_url );
											
											$fulladdress = zipperagent_get_address($single_property);
											$current_url = zipperagent_property_url( $single_property->id, $fulladdress );

											 ?>
											 
											 <button type="button" class="btn-small request-info-btn width-1-2 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="request_info">
												<span class="zy-icon--stack">
													<i class="zy-icon zy-icon--larger fa fa-info" aria-hidden="true"></i>
												</span> <span class="hidden-md text">Request Info</span><span class="visible-md text"> Info </span>
											</button>
											
											<div class="info-share">
												<button type="button" class="btn-small share-btn width-1-2 dropdown-toggle" id="dropdownShare" data-toggle="dropdown">
													<span class="zy-icon--stack">
														<i class="zy-icon zy-icon--larger fa fa-share-square-o" aria-hidden="true"></i>
													</span> <span class="hidden-md text">Share</span><span class="visible-md text"> Share </span>
												</button>
												<?php //0url_encode( $url ) ?>
												<div class="dropdown-menu" aria-labelledby="dropdownShare">
													<ul class="menu-list">
														<li>
															<a class="share-item share-email <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="share_email" contactid="<?php echo implode(',',$contactIds) ?>" href="#">
																<i class="zy-icon zy-icon--larger fa fa-at" aria-hidden="true"></i>
																<span>Email this listing</span>
															</a>
															
														</li>
														<?php /*
														<li>
															<a class="share-item" href="https://pinterest.com/pin/create/button/?url=<?php echo $current_url; ?>" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																<i class="zy-icon zy-icon--larger fa fa-pinterest" aria-hidden="true"></i>
																<span>Share on Pinterest</span>
															</a>
														</li>
														<li>
															<a class="share-item" href="https://plus.google.com/share?url=<?php echo $current_url; ?>" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
																<i class="zy-icon zy-icon--larger fa fa-google-plus" aria-hidden="true"></i>
																<span>Share on Google+</span>
															</a>
														</li> */ ?>
														<li>
															<a class="share-item" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank" onclick="window.open(this.href, 'facebook-share-dialog', 'width=626,height=436'); return false;">
																<i class="zy-icon zy-icon--larger fa fa-facebook" aria-hidden="true"></i>
																<span>Share on Facebook</span>
															</a>
														</li>
														<?php /*
														<li>
															<a class="share-item" href="https://twitter.com/share?url=<?php echo $current_url; ?>" target="_blank" onclick="window.open(this.href, 'twitter-share', 'width=626,height=436'); return false;">
																<i class="zy-icon zy-icon--larger fa fa-twitter" aria-hidden="true"></i>
																<span>Share on Twitter</span>
															</a>
														</li>
														<li>
															<a class="share-item" href="#" onClick="window.print()" target="_blank">
																<i class="zy-icon zy-icon--larger fa fa-print" aria-hidden="true"></i>
																<span>Print this listing</span>
															</a>
														</li> */ ?>
													</ul>
												</div>
											</div>
											
											<?php /*<button type="button" class="btn-small save-property-btn width-1-2 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="save_property" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>">
												<span class="zy-icon--stack">
													<i class="zy-icon zy-icon--larger fa fa-floppy-o" aria-hidden="true"></i>
												</span> <span class="hidden-md text">Save Property</span><span class="visible-md text"> Save </span>
											</button> */ ?>
											
										</div>
										<!-- end .top-action-buttons -->
									</div>
								</div>
								<!-- end .zy-listing__header-cta -->
							</div>
							<!-- end .grid -->
						</div>
					</div>
					<div class="js-details-fav__container zy-listing__favorite-container hideonprint <?php echo zipperagent_is_favorite($single_property->id)?"favorited":""; ?>">
						<button class="zy-listing__favorite-button at-fav-btn js-details-fav" isLogin="<?php echo getCurrentUserContactLogin() ? 1:0; ?>" afterAction="save_favorite" value="Add this property to your favorites" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>">
							<i class="zy-icon fa fa-heart" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<!-- end grid wrapper -->
			</header>
		</div>
		<?php /*
		<div class="uk-sticky-placeholder" style="height: 0px; margin: 0px;">
			<div class="zy-listing__header-cta--mobile container uk-visible-small" data-uk-sticky="" style="margin: 0px;">

				<div class="grid grid--gutters grid-xs--halves">
					<div class="cell zy-listing__header-cta__container">
						<button type="button" class="at-request-show-btn zy-listing__header-cta__btn width-1-1 btn-primary js-listing-request-showing">
							Go See It
						</button>
					</div>
					<div class="cell zy-listing__header-cta__container">
						<button type="button" class="at-contact-btn zy-listing__header-cta__btn width-1-1 btn-primary js-listing-contact-agent">
							Contact Agent
						</button>
					</div>
				</div>

				<div class="btn-group top-action-buttons width-1-1 mt-10 " role="group" aria-label="Share options and option to view property on a map">
					<div class="width-1-2 zy-ccomp zy-ccomp__dropdown" data-zy-ccomp="dropdown">
						<button type="button" class="btn-small js-listing-share at-share-btn width-1-1 height-1-1" data-zy-ccomp-trigger="">
							<span class="zy-icon--stack">
								<i class="zy-icon zy-icon--larger fa fa-share-square-o" aria-hidden="true"></i>
							</span> Share
						</button>
						<div class="zy-ccomp__content zy-dropdown--center zy-dropdown--small--mobile">
							<ul class="zy-ccomp__menu-list">
								<li>
									<a href="#" class="js-email-listing" title="Email this listing">
										<svg class="zy-icon zy-icon--larger">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-email"></use>
										</svg> Email this listing
									</a>
								</li>

								<li>
									<a class="at-share-pinterest" rel="nofollow" target="_blank" href="https://pinterest.com/pin/create/button/?url=https://www.google.com&amp;media=https://bt-photos.global.ssl.fastly.net/mlspin/orig_boomver_1_72229835_0.jpg&amp;description=512 Hyde Park Ave" count-layout="none" title="Share on Pinterest">
										<svg class="zy-icon zy-icon--larger">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-pinterest"></use>
										</svg> Share on Pinterest
									</a>
								</li>
								<li>
									<a class="at-share-google" rel="nofollow" target="_blank" href="https://plus.google.com/share?url=https://www.google.com" title="Share on Google+">
										<svg class="zy-icon zy-icon--larger">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-google"></use>
										</svg> Share on Google+
									</a>
								</li>
								<li>
									<a class="at-share-facebook" rel="nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.google.com" title="Share on Facebook">
										<svg class="zy-icon zy-icon--larger">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-facebook"></use>
										</svg> Share on Facebook
									</a>
								</li>
								<li>
									<a class="at-share-twitter" rel="nofollow" target="_blank" href="https://twitter.com/home?status=Check out this property! https://www.google.com&amp;media=https://bt-photos.global.ssl.fastly.net/mlspin/orig_boomver_1_72229835_0.jpg" title="Share on Twitter">
										<svg class="zy-icon zy-icon--larger">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-twitter"></use>
										</svg> Share on Twitter
									</a>
								</li>

								<li>
									<a class="js-listing-print at-print-btn" href="javascript:window.print()">
										<svg class="zy-icon zy-icon--larger">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-print"></use>
										</svg>
										Print this listing
									</a>
								</li>
							</ul>
							<!-- end .zy-ccomp__menu-list -->
						</div>
					</div>
					<!-- end .zy-ccomp -->
					<button type="button" class="width-1-2 btn-small js-listing-map">
						<span class="zy-icon--stack">
							<i class="zy-icon zy-icon--larger fa fa-map-marker" aria-hidden="true"></i>
						</span> Map
					</button>
				</div>
				<!-- end .top-action-buttons -->
			</div>
		</div> */ ?>
		<!-- end .zy-listing__header-cta -->
		<div class="">
			<section class="mt-15 listing-content">
				<div id="listing-top-wrapper" class="grid grid--gutters">				
										
					<div id="gallery-column" class="cell cell-xs-12 cell-lg-8 mb-15">						
											
						<link rel="stylesheet" href="<?php echo zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">	
						
						<?php if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ): ?>					
						
						<div class="row">
							<div class="col-xs-12 zpa-property-photo">
								<div class="owl-carousel-container">
									<div class="top-head-carousel-wrapper">
										<div class="owl-carousel top-head-carousel <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>">
											<?php
											if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
												$i=0;
												foreach ($single_property->photoList as $pic ){ ?>
													<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
														<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}" ?>')" class="owl-slide"><img class="" src="<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}" ?>" /></div>
													<?php else: ?>
														<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="owl-slide"><img class="" src="<?php echo $pic->imgurl; ?>" /></div>
													<?php endif; ?>
												<?php 
												$i++;
												}
											} ?>
										</div>
										<div class="left-nav"><i class="icon-left-arrow"></i>
										</div>
										<div class="right-nav"><i class="icon-right-arrow"></i>
										</div>
									</div>
									<div class="carousel-controller-wrapper">
										<div class="owl-carousel carousel-controller">
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
						<script src="<?php echo zipperagent_url(false) . 'js/rs-slider/plugins.js'; ?>"></script>
						<script>
							(function($){
								function setThumbnailAsASelected(number) {
									$carouselController.find(".owl-item.selected").removeClass("selected"), $carouselController.find(".owl-item:nth-of-type(" + (number + 1) + ")").addClass("selected")
								}

								function changeSlide(isLeftDirection) {
									var pickedItemNumber = void 0,
										oldItemIndex = $topHeadCarousel.find(".owl-item.active").index(),
										itemCount = $topHeadCarousel.find(".owl-stage .owl-item").length;
									oldItemIndex >= itemCount - 1 && !isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", 0) : 0 == oldItemIndex && isLeftDirection ? $topHeadCarousel.trigger("to.owl.carousel", itemCount - 1) : $topHeadCarousel.trigger(isLeftDirection ? "prev.owl.carousel" : "next.owl.carousel"), pickedItemNumber = $topHeadCarousel.find(".owl-item.active").index(), setThumbnailAsASelected(pickedItemNumber), center(pickedItemNumber, visibleItemCount)
								}

								function center(number, itemInPage) {
									$carouselController.trigger("to.owl.carousel", number - parseInt(itemInPage / 2))
								}
								var $topHeadCarousel = $(".top-head-carousel"),
									$carouselController = $(".carousel-controller"),
									visibleItemCount = 0,
									itemTotalCount = 0;
								$topHeadCarousel.owlCarousel({
									singleItem: !0,
									slideSpeed: 1e3,
									pagination: !1,
									responsiveRefreshRate: 200,
									paginationSpeed: 400,
									rewindSpeed: 500,
									items: 1,
									dots: !1,
									autoplay: $topHeadCarousel.hasClass("carousel-autoplay"),
									autoplayTimeout: 3500,
									animateOut: "fadeOut",
									animateIn: "fadeIn",
									onDragged: function(el) {
										console.log(el), $carouselController.find(".owl-item.selected").removeClass("selected"), center(el.item.index, visibleItemCount), $carouselController.find(".owl-item:nth-child(" + (el.item.index + 1) + ")").addClass("selected")
									}
								}), $(".left-nav").click(function() {
									return changeSlide(!0)
								}), $(".right-nav").click(function() {
									return changeSlide(!1)
								}), $carouselController.owlCarousel({
									items: 11,
									responsiveClass: !0,
									responsive: {
										0: {
											items: 5
										},
										600: {
											items: 7
										},
										1e3: {
											items: 11
										}
									},
									pagination: !1,
									dots: !1,
									nav: false,
									autoplay: $carouselController.hasClass("carousel-autoplay"),
									autoplayTimeout: 3500,
									responsiveRefreshRate: 100,
									onInitialized: function(el) {
										visibleItemCount = el.page.size, itemTotalCount = el.item.count, $(el.target).find(".owl-item").eq(0).addClass("selected")
									},
									onResize: function(el) {
										visibleItemCount = el.page.size
									}
								}), $carouselController.on("click", ".owl-item", function(e) {
									var clickedItemNumber = $(this).index();
									setThumbnailAsASelected(clickedItemNumber), $topHeadCarousel.trigger("to.owl.carousel", clickedItemNumber), center(clickedItemNumber, visibleItemCount)
								})
								
								<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
								var count=<?php echo isset($_SESSION['za_image_clicked']) ? (int) $_SESSION['za_image_clicked'] : 0; ?>;
								var limit='<?php echo zipperagent_slider_limit_popup(); ?>';
								$topHeadCarousel.on('changed.owl.carousel', function(event) {
									
									count++;								
									ajax_image_count(count);		
									if(count>=limit && limit != 0 && $topHeadCarousel.hasClass('needLogin')){
										jQuery('#needLoginModal').modal('show');
										<?php if(!zipperagent_signup_optional()): ?>
										set_popup_is_triggered();
										<?php endif; ?>
										count=0;
									}
									
									function ajax_image_count(count){
										var data = {
											action: 'image_click_count',			
											count: count,			
										};
										
										jQuery.ajax({
											type: 'POST',
											dataType : 'json',
											url: zipperagent.ajaxurl,
											data: data,
											success: function( response ) {    
												if( response['result'] ){
												}
											}
										});
									}
								});
								<?php endif; ?>
							})(jQuery)
						</script>
						<?php endif; ?>
						
						<div id="description-column">
						
						<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save description section ?>
						
						<?php if(isset($single_property->openHouses) && sizeof($single_property->openHouses)): ?>						
						<aside class="my-15">
							<div class="uk-hidden-small uk-hidden-medium">
							<h3 class="zy-listing__headline mt-15 at-desc-header">Open House</h3>
							<?php
							foreach($single_property->openHouses as $openHouse){
												
								$mlstz = zipperagent_mls_timezone();
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
								<p class="at-desc-body"><span class="openHomeText"><?php echo $startDate ?> <?php echo $printEndTime; ?></p>							
							<?php
							}
							?>
							</div>
						</aside>
							
						<?php endif; ?>
						
						<?php
						/* incldue vtlink template */
						if(file_exists($template_vtlink_path) && $template_vtlink){
							include $template_vtlink_path;
						}else{
							include $template_vtlink_path_default;
						}
						?>						
						
						<aside class="my-15">
							<div class="uk-hidden-small uk-hidden-medium">


								<h3 class="zy-listing__headline mt-15 at-desc-header">Description</h3>
								<p class="at-desc-body">[remarks]</p>
								<?php if(isset($single_property->landdesc)): ?>
								<p class="at-desc-body">[landdesc]</p>
								<?php endif; ?>


							</div>
						</aside>
						
						<?php if(!$property_cache): //hide on ajax mode, show after ajax finished ?>
						<aside class="my-15">
							<div class="uk-hidden-small uk-hidden-medium">


								<h3 class="zy-listing__headline mt-15 at-desc-header">Direction</h3>
								<p class="at-desc-body">[direction]</p>


							</div>
						</aside>
						<?php endif; ?>
						
						<?php if(!isset($is_doing_ajax) && $property_cache): //only show on ajax mode, hide after ajax finished ?>
						<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />
						<?php endif; ?>
					
						<?php if(isset($is_doing_ajax) && $is_doing_ajax) $description_section = ob_get_clean(); //end save description section ?>
						
						</div>
					
					</div>
					
					<div id="props-column" class="cell">
					
						<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save sidebar section ?>
						
						<?php
						/* incldue sidebar template */
						if(file_exists($template_sidebar_path) && $template_sidebar){
							include $template_sidebar_path;
						}else{
							include $template_sidebar_path_default;
						}
						?>			
						
						<?php /*
						<div class="mb-15 p-0 zy-panel school-rating" <?php if(is_great_school_enabled() || (is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng))): ?>style="display:none;"<?php endif; ?>>
							<div class="zy-panel--small">
								<h3 class="zy-listing__headline uk-text-center m-0">School Ratings &amp; Info</h3>
							</div>
							<div class="zy-panel--small">
								<a role="button" href="//www.greatschools.org/search/nearbySearch.page?gradeLevels=&amp;distance=15&amp;zipCode=[zipcode]&amp;redirectUrl=%2F" class="js-listing-schoolsBtn btn-primary width-1-1" target="_blank" rel="nofollow">Visit GreatSchools.org</a>
							</div>
						</div> */ ?>
						
						<?php /*
						<div class="at-top-full-details-disclaimer"><font size="2">Listing courtesy of Felicia Pagan Soto of Century 21 North Shore.</font>
						</div> */ ?>

						<div class="grid">
							<?php if(isset($single_property->openHouses) && sizeof($single_property->openHouses)): ?>						
							<div class="uk-hidden-large uk-hidden-xlarge" style="width:100%;">

								<h3 class="zy-listing__headline mt-15">Open House</h3>									
								<?php
								foreach($single_property->openHouses as $openHouse){
													
									$mlstz = zipperagent_mls_timezone();
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
									
									<p class="at-description"><span class="openHomeText"><?php echo $startDate ?> <?php echo $printEndTime; ?></p>							
								<?php
								}
								?>
							</div>										
							<?php endif; ?>
							<div class="uk-hidden-large uk-hidden-xlarge">

								<h3 class="zy-listing__headline mt-15">Description</h3>
								<p class="at-description">[remarks]</p>

							</div>
							
						</div>
						
						<?php /*
						<div class="grid">
							<?php
							// echo "<pre>"; print_r( $agent ); echo "</pre>";
							if( $agent ): ?>
							<div class="cell zy-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="zy-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="zy-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $agent->userName )?$agent->userName:''; ?>" src="<?php echo isset( $agent->imageURL )?$agent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $agent->userName )?$agent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell zy-listing__agent__info__category zy-listing__agent__info__category--agent">Sales &amp; Leasing Agent </div>
																<div class="zy-listing__agent__info">
																	<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $agent->userName )?$agent->userName:''; ?></span></div>
																	<?php if(isset( $agent->phoneMobile )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $agent->phoneMobile )?$agent->phoneMobile:''; ?>"><?php /* <span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span> * ?><span itemprop="telephone"><?php echo isset( $agent->phoneMobile )?$agent->phoneMobile:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><?php /* <span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span> * ?><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<a href="#ask-a-question-form">
																<button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $agent->userName )?$agent->userName:''; ?></span>
																</button></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
						</div> */ ?>
						
						<?php if( isset($single_property->listingAgent) ): 
						$agentFullName = isset( $single_property->listingAgent->userName ) ? explode( ' ',  $single_property->listingAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentPhone = isset( $single_property->listingAgent->phoneMobile )? $single_property->listingAgent->phoneMobile : ( isset($single_property->listingAgent->phoneOffice) ? $single_property->listingAgent->phoneOffice : '');
						?>
						<div class="grid mb-15">
							<div class="cell zy-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="zy-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="zy-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?>" src="<?php echo isset( $single_property->listingAgent->imageURL )?$single_property->listingAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell zy-listing__agent__info__category zy-listing__agent__info__category--agent">Listing Agent </div>
																<div class="zy-listing__agent__info">
																	<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?></span></div>
																	<?php if( $agentPhone ): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo $agentPhone; ?>"><?php /* <span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span> */ ?><span itemprop="telephone"><?php echo $agentPhone; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->listingAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->listingAgent->email )?$single_property->listingAgent->email:''; ?>"><?php /* <span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span> */ ?><span itemprop="email"><?php echo isset( $single_property->listingAgent->email )?$single_property->listingAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<?php /* <a href="#ask-a-question-form"><button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?></span></button></a> */ ?>
																<button class="js-listing-contact-agent request-info-btn at-contact-agent-btn btn-primary width-1-1 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afteraction="request_info" type="button"><span><!-- react-text: 26 -->Ask <!-- react-text: 27 --><?php echo $agentFirstName; ?> a question.</span></button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if( isset($single_property->coListingAgent) ):
						$agentFullName = isset( $single_property->coListingAgent->userName ) ? explode( ' ',  $single_property->coListingAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentPhone = isset( $single_property->coListingAgent->phoneMobile )? $single_property->coListingAgent->phoneMobile : ( isset($single_property->coListingAgent->phoneOffice) ? $single_property->coListingAgent->phoneOffice : '');
						?>
						<div class="grid mb-15">
							<div class="cell zy-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="zy-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="zy-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?>" src="<?php echo isset( $single_property->coListingAgent->imageURL )?$single_property->coListingAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell zy-listing__agent__info__category zy-listing__agent__info__category--agent">Co-Listing Agent </div>
																<div class="zy-listing__agent__info">
																	<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?></span></div>
																	<?php if( $agentPhone ): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo $agentPhone; ?>"><?php /* <span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span> */ ?><span itemprop="telephone"><?php echo $agentPhone; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->coListingAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->coListingAgent->email )?$single_property->coListingAgent->email:''; ?>"><?php /* <span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span> */ ?><span itemprop="email"><?php echo isset( $single_property->coListingAgent->email )?$single_property->coListingAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<?php /* <a href="#ask-a-question-form"><button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?></span></button></a> */ ?>
																<button class="js-listing-contact-agent request-info-btn at-contact-agent-btn btn-primary width-1-1 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afteraction="request_info" type="button"><span><!-- react-text: 26 -->Ask <!-- react-text: 27 --><?php echo $agentFirstName; ?> a question.</span></button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if( isset($single_property->salesAgent) ):
						$agentFullName = isset( $single_property->salesAgent->userName ) ? explode( ' ',  $single_property->salesAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentPhone = isset( $single_property->salesAgent->phoneMobile )? $single_property->salesAgent->phoneMobile : ( isset($single_property->salesAgent->phoneOffice) ? $single_property->salesAgent->phoneOffice : '');
						?>
						<div class="grid mb-15">
							<div class="cell zy-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="zy-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="zy-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?>" src="<?php echo isset( $single_property->salesAgent->imageURL )?$single_property->salesAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell zy-listing__agent__info__category zy-listing__agent__info__category--agent">Sales Agent </div>
																<div class="zy-listing__agent__info">
																	<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?></span></div>
																	<?php if( $agentPhone ): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo $agentPhone; ?>"><?php /* <span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span> */ ?><span itemprop="telephone"><?php echo $agentPhone; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->salesAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->salesAgent->email )?$single_property->salesAgent->email:''; ?>"><?php /* <span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span> */ ?><span itemprop="email"><?php echo isset( $single_property->salesAgent->email )?$single_property->salesAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<?php /* <a href="#ask-a-question-form"><button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?></span></button></a> */ ?>
																<button class="js-listing-contact-agent request-info-btn at-contact-agent-btn btn-primary width-1-1 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afteraction="request_info" type="button"><span><!-- react-text: 26 -->Ask <!-- react-text: 27 --><?php echo $agentFirstName; ?> a question.</span></button>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if( isset($single_property->coSalesAgent) ):
						$agentFullName = isset( $single_property->coSalesAgent->userName ) ? explode( ' ',  $single_property->coSalesAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentPhone = isset( $single_property->coSalesAgent->phoneMobile )? $single_property->coSalesAgent->phoneMobile : ( isset($single_property->coSalesAgent->phoneOffice) ? $single_property->coSalesAgent->phoneOffice : '');
						?>
						<div class="grid">
							<div class="cell zy-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="zy-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="zy-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?>" src="<?php echo isset( $single_property->coSalesAgent->imageURL )?$single_property->coSalesAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell zy-listing__agent__info__category zy-listing__agent__info__category--agent">Co-Sales Agent </div>
																<div class="zy-listing__agent__info">
																	<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?></span></div>
																	<?php if( $agentPhone ): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo $agentPhone; ?>"><?php /* <span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span> */ ?><span itemprop="telephone"><?php echo $agentPhone; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->coSalesAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->coSalesAgent->email )?$single_property->coSalesAgent->email:''; ?>"><?php /* <span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span> */ ?><span itemprop="email"><?php echo isset( $single_property->coSalesAgent->email )?$single_property->coSalesAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<?php /* <a href="#ask-a-question-form"><button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?></span></button></a> */ ?>
																<button class="js-listing-contact-agent request-info-btn at-contact-agent-btn btn-primary width-1-1 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afteraction="request_info" type="button"><span><!-- react-text: 26 -->Ask <!-- react-text: 27 --><?php echo $agentFirstName; ?> a question.</span></button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if(isset($is_doing_ajax) && $is_doing_ajax) $sidebar_section = ob_get_clean(); //end save sidebar section ?>
						
					</div>
				</div>
				
				<div id="detail-column">
				
				<?php if(! $property_cache): ?>
				
				<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save bottom section ?>
				
					<aside class="my-15">

						<?php
						/* incldue content template */
						if(file_exists($template_features_path) && $template_features){
							include $template_features_path;
						}else{
							include $template_features_path_default;
						}
						?>

						<div class="at-full-details-disclaimer">
							<br> 
							<?php
							if( $source_details ){
								echo $source_details;
							}else{
								echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
							}
							?>								
						</div>
					</aside>
					
					<?php if( isset($single_luxury) && isset($single_luxury->id) ): ?>
					<aside class="my-15">
						<h3 class="zy-listing__headline">Properties</h3>
						<?php zipperagent_luxury_table($single_luxury); ?>
					</aside>			
					<?php endif; ?>
					
					<?php if( is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
					<aside class="zy-widget greatschool-widget">
						<div class="zy-listing__map-container">
							<iframe className="greatschools" src="//www.greatschools.org/widget/map?searchQuery=&textColor=0066B8&borderColor=DDDDDD&lat=<?php echo $single_property->lat; ?>&lon=<?php echo $single_property->lng; ?>&cityName=<?php echo isset($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION:'' ?>&state=<?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?>&normalizedAddress=<?php echo urlencode( zipperagent_get_address($single_property) ); ?>&width=auto&height=368&zoom=13" width="1180" height="368" marginHeight="0" marginWidth="0" frameBorder="0" scrolling="no"></iframe>
						</div>
					</aside>
					<?php endif; ?>
					
					<?php if( isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
					<aside class="zy-widget js-map-column">
						<div class="zy-listing__map-container">
							<?php /*
							<div class="zy-listing__map-switcher btn-group" role="group" aria-label="Map View Options" data-uk-switcher="{connect:'#map-sections'}">
								<button type="button" class="js-listing-mapview uk-active" aria-expanded="true">Map
								</button>
								<button type="button" class="js-streetview js-toggle-streetview" aria-expanded="false">Street
								</button>
								<button type="button" class="js-birdview" aria-expanded="false">Satellite
								</button>
							</div> */ ?>
							<ul id="map-sections" class="uk-switcher">
								<li class="uk-active" aria-hidden="false">
									<div id="map" style="height:300px"></div>
									<?php /*
									<div class="zy-listing__directions-panel">
										<div class="zy-panel px-15 py-5">
											<form class="js-directions-form" data-parsley-validate="">
												<div class="grid grid--gutters grid-xs--full grid--bottom">
													<div class="cell cell-md-fit">
														<label for="directionsFrom">Starting Address</label>
														<input type="text" id="directionsFrom" name="from" class="js-listing__directions-from" required="">
													</div>
													<div class="cell cell-md-fit">
														<label for="directionsTo">Listing Address</label>
														<input type="text" id="directionsTo" name="to" disabled="" class="js-listing__directions-to" value="512 Hyde Park Ave, Boston, MA, 02131" required="">
													</div>
													<div class="cell cell-md-3">
														<button type="button" class="at-getdirections-btn js-btnGetDirections btn-primary width-1-1">Get Directions</button>
													</div>
												</div>
											</form>
										</div>
									</div> */ ?>
									<!-- Direction Results -->
									<div class="zy-listing__directions-results uk-clearfix uk-hidden js-listing__directions-results"></div>
								</li>
								<?php /*
								<li aria-hidden="true">
									<div class="zy-border-pad">
										<div class="zy-listing__map-object">
											<div class="gmap js-listing__streetview-map" data-address="512 Hyde Park Ave  02131" data-lat="42.2829" data-lng="-71.11872">
												<img src="https://bt-wpstatic.freetls.fastly.net/wp-content/themes/wp-base-theme/assets/media/build/street_view_na.png" alt="Street View Not Available" class="uk-hidden js-streetview-na">
											</div>
										</div>
									</div>
								</li>
								<li aria-hidden="true">
									<div class="zy-border-pad">
										<div class="zy-listing__map-object">
											<div class="gmap js-listing__birdview-map"></div>
										</div>
									</div>
								</li> */ ?>
							</ul>
						</div>
					</aside>
					<?php endif; ?>
					
					<?php if( $agent ): ?>
					<aside class="zy-widget jsx-listing-details-contact-form">
						<div data-reactroot="" class="js-listing-contact-agent-widget">
							<div class="grid grid--gutters grid--justifyCenter grid-xs--full">
								<div class="cell cell-lg-8">
									<div class="zy-panel uk-panel uk-panel-box overflow-show">
										<div class="zy-listing__agent__contact-widget__form">
											<h3 class="zy-listing__headline">Ask Agent a Question</h3>
											<div id="ask-a-question-form" class="jsx-listing-details-contact-form">
												<div>
													<form id="zpa-modal-contact-agent-form">
														<div class="grid grid--gutters grid-xs--full">
															<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
															<div class="cell cell-md-6 hidden-on-login">
																<div>
																	<label for="ListingDetailsContactForm__firstName">
																		<!-- react-text: 14 -->First Name
																		
																		<!-- react-text: 15 -->&nbsp;
																		
																	</label>
																	<input type="text" id="ListingDetailsContactForm__firstName" class="at-firstName-txt" name="firstName" autocomplete="given-name" required="">
																</div><span></span>
															</div>
															<div class="cell cell-md-6 hidden-on-login">
																<div>
																	<label for="ListingDetailsContactForm__lastName">
																		<!-- react-text: 21 -->Last Name
																		
																		<!-- react-text: 22 -->&nbsp;
																		
																	</label>
																	<input type="text" id="ListingDetailsContactForm__lastName" class="at-lastName-txt" name="lastName" autocomplete="family-name" required="">
																</div><span></span>
															</div>
															<div class="cell cell-md-6 hidden-on-login">
																<div>
																	<label for="ListingDetailsContactForm__email">
																		<!-- react-text: 28 -->Email
																		
																		<!-- react-text: 29 -->&nbsp;
																		
																	</label>
																	<input type="email" id="ListingDetailsContactForm__email" class="at-email-txt" name="email" autocomplete="email" required="">
																</div><span></span>
															</div>
															<div class="cell cell-md-6 hidden-on-login">
																<div>
																	<label for="ListingDetailsContactForm__phone">
																		<!-- react-text: 35 -->phoneMobile
																		
																		<!-- react-text: 36 -->&nbsp;
																		
																	</label>
																	<input type="text" id="ListingDetailsContactForm__phone" class="at-phone-txt" data-parsley-phone="true" autocomplete="tel" name="phone" required="">
																</div><span></span>
															</div>
															<?php endif; ?>
															<div class="cell">
																<div>
																	<label for="ListingDetailsContactForm__comments">
																		<!-- react-text: 42 -->What would you like to know?
																		
																		<!-- react-text: 43 -->&nbsp;
																		
																	</label>
																	<textarea id="ListingDetailsContactForm__comments" class="at-comment-txt" name="note" cols="30" rows="5" required="required"></textarea>
																</div>
															</div>
															<?php /*
															<div class="cell">
																<div class="text-md--right">
																	<label class="form__check form__check--inline" for="listing-details__request-showing">
																		<input type="checkbox" name="requestShowing" value="requestShowing" id="listing-details__request-showing"><span><!-- react-text: 50 --> <!-- react-text: 51 -->I'm interested in seeing this property</span>
																	</label>
																</div>
															</div> */ ?>
															<div class="cell text-xs--right">
																<div class="grid grid--gutters grid-xs--full">
																	<div class="cell cell-md-4">
																		<input type="submit" class="at-contact-form-submit at-submit-btn btn-primary width-1-1" value="Submit">
																	</div>
																</div>
															</div>
														</div>
														<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds) ?>" />
														<input type="hidden" name="agent" value="<?php echo $agent->login ?>" />
														<input type="hidden" name="actual_link" value="<?php echo $actual_link; ?>" />
														<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
														<input type="hidden" name="action" value="regist_user" >
														<?php else: ?>
														<input type="hidden" name="action" value="contact_agent" >
														<?php endif; ?>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="cell cell-lg-4 cell-md-6">
									<div class="zy-listing__agent__contact-widget__card zy-panel uk-panel uk-panel-box">
										<div class="grid grid--gutters grid-xs--full ">
											<div class="bt__agent-lender__card cell">
												<div itemtype="http://schema.org/Person" itemscope="">
													<div class="grid grid--gutters grid--flexCells">
														<div class="zy-listing__agent_image cell cell-xs-4">
															<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $agent->userName )?$agent->userName:''; ?>" src="<?php echo isset( $agent->imageURL )?$agent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $agent->userName )?$agent->userName:''; ?>">
															
														</div>
														<div class="cell cell-xs-8">
															<div class="grid grid-xs--full width-1-1">
																<div class="cell">
																	<div class="font-12 cell zy-listing__agent__info__category zy-listing__agent__info__category--agent">Sales &amp; Leasing Agent </div>
																	<div class="zy-listing__agent__info">
																		<?php
																		$agentPhone = isset( $agent->phoneMobile )? $agent->phoneMobile : ( isset($agent->phoneOffice) ? $agent->phoneOffice : '');
																		
																		?>
																		<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $agent->userName )?$agent->userName:''; ?></span></div>
																		<?php if( $agentPhone ): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $agentPhone )?$agentPhone:''; ?>"><?php /* <span class="zy-listing__agent__info_phone__type"><!-- react-text: 79 -->Office<!-- react-text: 80 -->: </span> */ ?><span itemprop="telephone"><?php echo isset( $agentPhone )?$agentPhone:''; ?></span></a></div><?php endif; ?>
																		<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><?php /* <span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span> */ ?><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
													<?php /*
													<div class="grid grid--gutters grid--justifyBetween grid--center mt-5" itemtype="http://schema.org/Organization" itemscope="" itemprop="worksFor">
														<div class="cell cell-xs-5 cell-lg-4 cell-xl-6"><img class="zy-listing__agent__brandid__logo" alt="Goodrich Residential" src="https://bt-wpstatic.freetls.fastly.net/wp-content/blogs.dir/2078/files/2015/10/innerpage.png" title="Goodrich Residential" itemprop="logo">
														</div>
														<div class="cell m-0"><address><div class="zy-listing__agent__brandid__legal-name" itemprop="brand">Goodrich Residential</div><div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address"><div><div class="zy-listing__agent__brandid__address at-agent-brandid-address" itemprop="streetAddress">55 Causeway St.</div><div class="zy-listing__agent__brandid__address"><span itemprop="addressLocality"><!-- react-text: 93 -->Boston<!-- react-text: 94 -->,</span><span itemprop="addressRegion"><!-- react-text: 96 --> <!-- react-text: 97 -->MA</span><span itemprop="postalCode"><!-- react-text: 99 --> </span></div></div></div></address>
														</div>
													</div> */ ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</aside>
					<?php endif; ?>
					
					<div class="mortgage-calculator grid grid--gutters">
					   <div class="cell cell-xs-12 cell-lg-8">
						  <div class="zy-widget zy-panel uk-panel uk-panel-box overflow-show">
							 <h3 class="zy-listing__headline">Monthly Payment Calculator</h3>
							 <div class="zy-widget jsx-mortgage-calc-form">
								<form data-reactroot="">
								   <div class="grid grid--gutters grid-xs--full grid-md--halves">
									  <div class="cell">
										 <div class="grid grid--gutters grid-xs--full">
											<div class="cell">
											   <div>
												  <label for="MobileMortgageCalcForm-listPrice">
													 <!-- react-text: 8 -->Home Price<!-- /react-text --><!-- react-text: 9 -->&nbsp;<!-- /react-text -->
												  </label>
												  <div class="form__icon">
													 <svg viewBox="0 0 24 24" class="sc-bZQynM fLbDvk" width="20">
														<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path>
													 </svg>
													 <input type="text" id="MobileMortgageCalcForm-listPrice" class="at-price-txt fieldchange" value="[realprice]" name="price">
												  </div>
											   </div>
											</div>
											<div class="cell cell-xs-8">
											   <div>
												  <label for="MobileMortgageCalcForm-downPayment">
													 <!-- react-text: 17 -->Down Payment<!-- /react-text --><!-- react-text: 18 -->&nbsp;<!-- /react-text -->
												  </label>
												  <div class="form__icon">
													 <svg viewBox="0 0 24 24" class="sc-bZQynM fLbDvk" width="20">
														<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path>
													 </svg>
													 <input type="text" id="MobileMortgageCalcForm-downPayment" class="at-downPayment-txt fieldchange" value="" name="downPayment">
												  </div>
											   </div>
											</div>
											<div class="cell cell-xs-4">
											   <div>
												  <label for="MobileMortgageCalcForm-percentDown">
													 <!-- react-text: 26 -->%<!-- /react-text --><!-- react-text: 27 -->&nbsp;<!-- /react-text -->
												  </label>
												  <div class="form__icon form__icon--flip">
													 <svg viewBox="0 0 24 24" class="sc-bZQynM FEJtT" width="15">
														<path d="M7.17,10.5a4.12,4.12,0,0,0,3.94-4.28A4.14,4.14,0,0,0,7.17,1.94,4.12,4.12,0,0,0,3.23,6.22,4.11,4.11,0,0,0,7.17,10.5Zm0-6.92A2.54,2.54,0,0,1,9.52,6.24,2.52,2.52,0,0,1,7.17,8.91,2.52,2.52,0,0,1,4.82,6.24,2.52,2.52,0,0,1,7.17,3.57Zm9.66,9.93a4.12,4.12,0,0,0-3.94,4.28,4.12,4.12,0,0,0,3.94,4.28,4.12,4.12,0,0,0,3.94-4.28A4.11,4.11,0,0,0,16.83,13.5Zm0,6.92a2.54,2.54,0,0,1-2.35-2.67,2.51,2.51,0,0,1,2.35-2.67,2.52,2.52,0,0,1,2.35,2.67A2.51,2.51,0,0,1,16.83,20.43ZM17.82,2,3.21,22h3L20.79,2Z"></path>
													 </svg>
													 <input type="text" id="MobileMortgageCalcForm-percentDown" class="at-percentDown-txt fieldchange" value="20" aria-label="Down Payment Percentage" name="percentDown" maxlength="5">
												  </div>
											   </div>
											</div>
											<div class="cell">
											   <div>
												  <label for="MobileMortgageCalcForm-loanType">
													 <!-- react-text: 35 -->Loan Type<!-- /react-text --><!-- react-text: 36 -->&nbsp;<!-- /react-text -->
												  </label>
												  <select id="MobileMortgageCalcForm-loanType" class="at-loanType-sel loantype" name="loanType">
													 <option value="30">30 Year Fixed</option>
													 <option value="15">15 Year Fixed</option>
													 <option value="5">5/1 ARM</option>
												  </select>
											   </div>
											</div>
											<div class="cell">
											   <div>
												  <label for="MobileMortgageCalcForm-interestRate">
													 <!-- react-text: 44 -->Interest Rate - %<!-- /react-text --><!-- react-text: 45 -->&nbsp;<!-- /react-text -->
												  </label>
												  <div class="form__icon form__icon--flip">
													 <svg viewBox="0 0 24 24" class="sc-bZQynM FEJtT" width="15">
														<path d="M7.17,10.5a4.12,4.12,0,0,0,3.94-4.28A4.14,4.14,0,0,0,7.17,1.94,4.12,4.12,0,0,0,3.23,6.22,4.11,4.11,0,0,0,7.17,10.5Zm0-6.92A2.54,2.54,0,0,1,9.52,6.24,2.52,2.52,0,0,1,7.17,8.91,2.52,2.52,0,0,1,4.82,6.24,2.52,2.52,0,0,1,7.17,3.57Zm9.66,9.93a4.12,4.12,0,0,0-3.94,4.28,4.12,4.12,0,0,0,3.94,4.28,4.12,4.12,0,0,0,3.94-4.28A4.11,4.11,0,0,0,16.83,13.5Zm0,6.92a2.54,2.54,0,0,1-2.35-2.67,2.51,2.51,0,0,1,2.35-2.67,2.52,2.52,0,0,1,2.35,2.67A2.51,2.51,0,0,1,16.83,20.43ZM17.82,2,3.21,22h3L20.79,2Z"></path>
													 </svg>
													 <input type="text" id="MobileMortgageCalcForm-interestRate" class="at-interest-txt fieldchange" value="4.5" name="interestRate" maxlength="5">
												  </div>
											   </div>
											   <?php /* <a class="uk-text-small">Contact our Lending Specialist</a> */ ?>
											</div>
											<div class="cell">
											   <div class="grid grid--gutters">
												  <div class="cell cell-xs-8">
													 <div>
														<label for="MobileMortgageCalcForm-taxAndInsAmount">
														   <!-- react-text: 56 -->Est. Tax &amp; Insurance/mo.<!-- /react-text --><!-- react-text: 57 -->&nbsp;<!-- /react-text -->
														</label>
														<div class="form__icon">
														   <svg viewBox="0 0 24 24" class="sc-bZQynM fLbDvk" width="20">
															  <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path>
														   </svg>
														   <input type="text" id="MobileMortgageCalcForm-taxAndInsAmount" class="at-tax-txt" value="" name="taxAndInsAmount">
														</div>
													 </div>
												  </div>
												  <div class="cell cell-xs-4">
													 <div>
														<label for="MobileMortgageCalcForm-taxAndInsPercent">
														   <!-- react-text: 65 -->%<!-- /react-text --><!-- react-text: 66 -->&nbsp;<!-- /react-text -->
														</label>
														<div class="form__icon form__icon--flip">
														   <svg viewBox="0 0 24 24" class="sc-bZQynM FEJtT" width="15">
															  <path d="M7.17,10.5a4.12,4.12,0,0,0,3.94-4.28A4.14,4.14,0,0,0,7.17,1.94,4.12,4.12,0,0,0,3.23,6.22,4.11,4.11,0,0,0,7.17,10.5Zm0-6.92A2.54,2.54,0,0,1,9.52,6.24,2.52,2.52,0,0,1,7.17,8.91,2.52,2.52,0,0,1,4.82,6.24,2.52,2.52,0,0,1,7.17,3.57Zm9.66,9.93a4.12,4.12,0,0,0-3.94,4.28,4.12,4.12,0,0,0,3.94,4.28,4.12,4.12,0,0,0,3.94-4.28A4.11,4.11,0,0,0,16.83,13.5Zm0,6.92a2.54,2.54,0,0,1-2.35-2.67,2.51,2.51,0,0,1,2.35-2.67,2.52,2.52,0,0,1,2.35,2.67A2.51,2.51,0,0,1,16.83,20.43ZM17.82,2,3.21,22h3L20.79,2Z"></path>
														   </svg>
														   <input type="text" id="MobileMortgageCalcForm-taxAndInsPercent" class="at-tax-percent fieldchange" value="1.3" name="taxAndInsPercent" maxlength="5">
														</div>
													 </div>
												  </div>
											   </div>
											</div>
										 </div>
									  </div>
									  <div class="cell">
										 <div class="uk-panel uk-panel-box height-1-1">
											<h4>Estimated Monthly Payment</h4>
											<div>
											   <div class="grid mt-15 grid--gutters grid-xs--halves">
												  <div class="cell">Principal &amp; Interest:</div>
												  <div class="cell text-xs--right"><span class="at-interest-val sc-kAzzGY uk-text-semibold iBTdgX">...</span></div>
												  <div class="cell">Taxes &amp; Insurance:</div>
												  <div class="cell text-xs--right"><span class="at-tax-val sc-kAzzGY uk-text-semibold iBTdgX">...</span></div>
											   </div>
											   <hr>
											   <div class="grid grid--center grid-xs--halves">
												  <div class="cell cell-xs-8"><span class="h4 sc-kAzzGY iBTdgX">Est. Monthly Payment</span></div>
												  <div class="cell text-xs--right cell-xs-4"><span class="h2 green at-payment-val sc-kAzzGY iBTdgX">...</span></div>
												  <div class="cell"><span class="sc-kAzzGY uk-text-muted iBTdgX">Loan Amount:</span></div>
												  <div class="cell text-xs--right"><span class="sc-kAzzGY uk-text-muted iBTdgX loan-ammount">...</span></div>
											   </div>
											   <?php /*
											   <div class="mt-15 text-xs--center">
												  <a href="/finance" class="js-pre-approval">
													 <!-- react-text: 94 -->Wondering what the real terms of your loan could be? Click here for a <!-- /react-text --><span class="sc-kAzzGY uk-text-bold iBTdgX">FREE</span><!-- react-text: 96 --> no-obligation rate quote.<!-- /react-text -->
												  </a>
											   </div> */ ?>
											</div>
										 </div>
									  </div>
								   </div>
								</form>
							 </div>
						  </div>
					   </div>
					</div>
					
			<?php if(isset($is_doing_ajax) && $is_doing_ajax) $bottom_section = ob_get_clean(); //end save bottom section ?>
			
			<?php endif; ?>
			
			</div>
			
			</section>
			
			<?php /*
			<aside class="zy-widget zy-related-properties mt-15 js-related-properties__wrapper">
				<h3 class="zy-listing__headline uk-text-center">Related Properties</h3>
				<ul class="zy-card-slider zy-card-slider__prev-next--below zy-listing-teaser--vertical-wrapper js-card-slider js-related-properties flickity-enabled is-draggable zy-card-slider__prev-next--hide" tabindex="0">
					<div class="flickity-viewport" style="height: 344.25px; touch-action: pan-y;">
						<div class="flickity-slider" style="left: 0px; transform: translateX(0px);">
							<div class="zy-card-wrapper is-selected" style="position: absolute; left: 0px;">
								<article class="zy-listing-teaser zy-listing-wrapper js-card
	" id="listings-card-71695608" data-listingid="71695608" data-lat="42.27879" data-lng="-71.117607" data-address="951 Canterbury Street Boston, MA 02131" data-postalcode="02131" data-index="2" data-url="https://www.google.com" data-statuscode="A" data-officename="Pena Realty Corporation" data-agentphone="" itemscope="" itemtype="http://schema.org/Residence">
									<div class="zy-listing__favorite-container">
										<button class="zy-listing-teaser__favorite-button js-card-fav" value="Add this property to your favorites">
											<svg class="zy-icon">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-favorite"></use>
											</svg>
										</button>
									</div>

									<div class="zy-listing-teaser__media-wrapper">
										<div class="zy-listing-teaser__image-wrapper">
											<a href="https://www.google.com" class="zy-listing-teaser__link js-full-deets at-related-props-card">
												<img src="https://bt-photos.global.ssl.fastly.net/mlspin/orig_boomver_2_72146500_0.jpg" class="zy-listing-teaser__image" alt="951 Canterbury Street, Boston, MA 02131 (MLS #72146500) :: Goodrich Residential">
												<button type="button" class="zy-listing-teaser__view-details btn-primary">View Details</button>
											</a>
										</div>
									</div>
									<div class="zy-listing-teaser__info">
										<div class="zy-listing-teaser__top">
											<div class="zy-listing-teaser__locations-list m-0 cell-xs-10 cell-sm-12">
												<a href="https://www.google.com" class="zy-listing-teaser__address js-full-deets" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
													<span itemprop="streetAddress">
								951
								
								Canterbury Street
							</span>
												</a>
											</div>
											<div class="zy-nearby-distance uk-text-success">
											</div>
										</div>
										<div class="zy-listing-teaser__top-wrap">
											<div itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address" class="zy-listing-teaser__locations-list width-1-1 m-0 cell-xs-10 cell-sm-12" title="Roslindale | Boston">
												<div class="zy-listing-teaser__neighborhood-name" itemprop="addressLocality">Roslindale</div>
												<span class="uk-hidden-small"> | </span>
												<div class="zy-listing-teaser__city-name" itemprop="addressLocality">Boston</div>
											</div>


											<div class="full-bleed-hide text-bold h2 green">
												$589,000
											</div>

											<div class="grid grid--justifyBetween grid--center full-bleed-show" style="margin: 5px 0; display: none;">
												<div class="cell">
													<div class="text-bold h2 green" style="font-size: 25px">
														$589,000
													</div>
												</div>
												<div class="cell">
													<div class="grid grid-xs--full">
													</div>
												</div>
											</div>

										</div>
										<div class="grid mb-5 full-bleed-hide zy-listing-teaser__card-meta">
											<div class="cell cell-xs-fit cell-xl-2">
												<span class="zy-listing-teaser__val">2</span>
												<span class="zy-listing-teaser__label uk-text-muted">un</span>
											</div>
											<div class="cell cell-xs-fit cell-xl-2">
												<span class="zy-listing-teaser__val">4</span>
												<span class="zy-listing-teaser__label uk-text-muted">bd</span>
											</div>
											<div class="cell cell-xs-fit cell-xl-2">
												<span class="zy-listing-teaser__val">3</span>
												<span class="zy-listing-teaser__label uk-text-muted">ba</span>
											</div>
											<div class="cell cell-xs-double">
												<span class="zy-listing-teaser__val">
									1,863
								</span>
												<span class="zy-listing-teaser__label uk-text-muted">sqft</span>
											</div>

										</div>

										<div class="grid mb-10 full-bleed-show zy-listing-teaser__card-meta" style="display:none">
											<div style="padding-right:15px">
												<span class="zy-listing-teaser__val">2</span>
												<span class="zy-listing-teaser__label uk-text-muted">un</span>
											</div>
											<div style="padding-right:15px">
												<span class="zy-listing-teaser__val">
									1,863
								</span>
												<span class="zy-listing-teaser__label uk-text-muted">sqft</span>
											</div>

										</div>

										<div class="grid grid-xs--full full-bleed-hide">
										</div>
									</div>
									<div class="zy-listing-teaser__disclaimer  uk-clearfix">
										<div class="at-HomePageAndMapDisclaimer-card uk-clearfix">Listing by Tirso Pena of Pena Realty Corporation.</div>
									</div>
								</article>
							</div>
						</div>
					</div>
					<button class="flickity-prev-next-button previous" type="button" disabled="" aria-label="previous">
						<svg viewBox="0 0 100 100">
							<path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
						</svg>
					</button>
					<button class="flickity-prev-next-button next" type="button" disabled="" aria-label="next">
						<svg viewBox="0 0 100 100">
							<path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
						</svg>
					</button>
				</ul>
			</aside> */ ?>
		</div>
		<?php /*
		<!-- CNS-759 -->
		<div class="za-container">
			<div class="at-all-data-pages-disclaimer">
				<br>
				<br>The property listing data and information set forth herein were provided to MLS Property Information Network, Inc. from third party sources, including sellers, lessors and public records, and were compiled by MLS Property Information Network, Inc. The property listing data and information are for the personal, non commercial use of consumers having a good faith interest in purchasing or leasing listed properties of the type displayed to them and may not be used for any purpose other than to identify prospective properties which such consumers may have a good faith interest in purchasing or leasing. MLS Property Information Network, Inc. and its subscribers disclaim any and all representations and warranties as to the accuracy of the property listing data and information set forth herein. Data last updated 2017-09-16T23:48:50.75.</div>
		</div> */ ?>
	</article>
	<!-- print view -->
	<?php
		$rb = zipperagent_rb();
		
		$print_logo = isset($rb['web']['print_logo'])?$rb['web']['print_logo']:'';
		$print_color = isset($rb['web']['print_color'])?$rb['web']['print_color']:'';
	?>	
	<div id="print-view-column top-brdr" class="zy-print-view js-print-view" style="border-color: <?php echo $print_color; ?>">
	<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save print section ?>
	<?php
		// $rb = zipperagent_rb();
		
		// $print_logo = $rb['web']['print_logo'];
		// $print_color = $rb['web']['print_color'];
		
		// echo "<pre>"; print_r( $rb ); echo "</pre>";
	
		/* incldue print template */
		if(file_exists($template_print_path) && $template_print){
			include $template_print_path;
		}else{
			include $template_print_path_default;
		}
	?>
	<?php 
	if(isset($is_doing_ajax) && $is_doing_ajax) $print_section = ob_get_clean(); //end save print section
	?>
	</div>
</div>