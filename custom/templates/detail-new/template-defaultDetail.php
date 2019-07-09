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

$template_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/'. $template_name;
$template_features_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/features/'. $template_features;
$template_print_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/print/'. $template_print;
$template_sidebar_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/sidebar/'. $template_sidebar;
$template_vtlink_path = ZIPPERAGENTPATH . '/custom/templates/detail-new'. $group_dir .'/vtlink/'. $template_vtlink;

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
<?php /* <link rel="stylesheet" href="<?php echo zipperagent_url(false) . 'css/bootstrap.min.css'; ?>">	*/ ?>

<div id="zipperagent-content">
	<section class="col-lg-12 col-sm-12 col-md-12 col-xl-12 zy_main hideonprint" itemtype="http://schema.org/Residence">
		<article class="container-fluid">
			<div class="row zyapp_main-style">
				<div class="zy_header-style col-lg-4 col-sm-12 col-md-12 col-xl-4 zy_nopadding">
					<div class="zy_address-style" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
						<h1>
							<p class="zy_address-style"><span itemprop="streetAddress"><?php echo isset($single_property->streetname)?zipperagent_fix_comma($single_property->streetname):'' ?> <?php if(isset($single_property->streetno)): ?>#<?php endif; ?>[streetno]</span></p>
							<p class="zy_subaddress-style">
								<span itemprop="addressLocality"> <?php echo isset($single_property->lngTOWNSDESCRIPTION) && !empty($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION. ',':'' ?> </span>
								<span itemprop="addressRegion"> <?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?> </span>
								<span itemprop="postalCode"> <?php echo isset($single_property->zipcode)?$single_property->zipcode:'' ?> </span>
							</p>
						</h1>
					</div>
				</div>
				
				<div class="zy_price-mls col-lg-4 col-sm-12 col-md-12 col-xl-4 zy_nopadding">
					<div class="row">
						<div class="col-lg-6 col-sm-12 col-md-12 col zy_nopadding">
							<h2>
								<p class="zy_price-style"><?php echo zipperagent_currency(); ?>[realprice]</p>
								<p class="zy_label-style">Price</p>
							</h2>
						</div>
						<div class="col-lg-6 col-sm-12 col-md-12 col zy_nopadding">
							<h2>
								<p class="zy_price-style">[listno]</p>
								<p class="zy_label-style">[displaySource]#</p>
							</h2>
						</div>
					</div>
				</div>
				
				<div class="zy_price-mls col-lg-4 col-sm-12 col-md-12 col-xl-4 zy_nopadding">
					<div class="row">
						<div class="col-lg-3 col-sm-12 col-md-12 zy_nopadding <?php echo is_numeric($single_property->status)? 'status_'.$single_property->status : $single_property->status; ?>">
							<h2>
								<p class="zy_price-style">[status]</p>
								<p class="zy_label-style">Status</p>
							</h2>
						</div>
						<div class="col-lg-8 col-sm-12 col-md-12 zy_nopadding zy-detail-tool">
							<div class="row">
								<div class="btn_wrap zy_save-property-wrap col-xs-3 zy_nopadding">
									<button class="zy_save-property <?php echo zipperagent_is_favorite($single_property->id)?"favorited":""; ?>" isLogin="<?php echo getCurrentUserContactLogin() ? 1:0; ?>" afterAction="save_favorite" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>"><i class="fa fa-heart fa-fw"></i></button>
									<span>Save</span>
								</div>
								
								<div class="btn_wrap zy_schedule-showing-wrap col-xs-3 zy_nopadding">
									<button class="zy_schedule-showing <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="schedule_show"><i class="fa fa-clock-o fa-fw"></i></button>
									<span>Request Showing</span>
								</div>
								
								<div class="btn_wrap zy_request-showing-wrap col-xs-3 zy_nopadding">
									<button class="zy_request-showing <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="request_info"><i class="fa fa-info fa-fw"></i></button>
									<span>Request info</span>
								</div>
								
								<div class="btn_wrap zy_share-property-wrap col-xs-3 zy_nopadding">
									<button class="zy_share-property dropdown-toggle" id="dropdownShare" data-toggle="dropdown"><i class="fa fa-share fa-fw"></i></button>
									<span>Share</span>
									
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
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row zy_highlight-section">
				<div class="col-lg-8 col-sm-12 col-md-12 col-xl-8"> 
					<div id="gallery-column">
						
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
					</div>
					
					<div class="zy_description-section">
					
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
							
							<p class="open-house-info"><span class="openHomeText"><?php echo $startDate ?> <?php echo $printEndTime; ?></p>							
						<?php
						}
						?>
						<?php endif; ?>
						
						<h2>Description</h2>
						<p>[remarks]</p>
						
						<?php if(isset($single_property->direction)): ?>	
						<h2>Direction</h2>
						<p>[direction]</p>
						<?php endif; ?>
						
					</div>
					
				</div>
				
				<div class="col-lg-4 col-sm-12 col-md-12 col-xl-4">
				
					<ul class="zy_prop-details">
						<?php // if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save sidebar section ?>
						
						<li>
							<?php if( isset($single_property->syncTime) ){ ?>
							<label class="update-info col-xs-12 zy_nopadding">
								Last Checked for Updates on [syncTime]
							</label>
							<?php }else if( isset($single_property->syncAge) ){ ?>
							<label class="update-info col-xs-12 zy_nopadding">
								Last Checked for Updates: [syncAge] minutes ago
							</label>
							<?php } ?>
						</li>
						<?php
						/* incldue sidebar template */
						if(file_exists($template_sidebar_path) && $template_sidebar){
							include $template_sidebar_path;
						}else{
							include $template_sidebar_path_default;
						}
						?>					
					</ul>
					
					<ul class="zy_agent-info">
						<?php if( isset($single_property->listingAgent) ): 
						$agentFullName = isset( $single_property->listingAgent->userName ) ? explode( ' ',  $single_property->listingAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentImage = isset( $single_property->listingAgent->imageURL )? $single_property->listingAgent->imageURL : '';
						$agentPhone = isset( $single_property->listingAgent->phoneMobile )? $single_property->listingAgent->phoneMobile : ( isset($single_property->listingAgent->phoneOffice) ? $single_property->listingAgent->phoneOffice : '');
						$agentEmail = isset( $single_property->listingAgent->email )? $single_property->listingAgent->email : '';
						?>
							<li>Listing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFirstName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
							</li>
						<?php endif; ?>
						
						<?php if( isset($single_property->coListingAgent) ):
						$agentFullName = isset( $single_property->coListingAgent->userName ) ? explode( ' ',  $single_property->coListingAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentPhone = isset( $single_property->coListingAgent->phoneMobile )? $single_property->coListingAgent->phoneMobile : ( isset($single_property->coListingAgent->phoneOffice) ? $single_property->coListingAgent->phoneOffice : '');
						?>
							<li>Listing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
							</li>
						<?php endif; ?>
						
						<?php if( isset($single_property->salesAgent) ):
						$agentFullName = isset( $single_property->salesAgent->userName ) ? explode( ' ',  $single_property->salesAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentImage = isset( $single_property->salesAgent->phoneMobile )? $single_property->salesAgent->phoneMobile : ( isset($single_property->salesAgent->phoneOffice) ? $single_property->salesAgent->phoneOffice : '');
						$agentPhone = isset( $single_property->salesAgent->phoneMobile )? $single_property->salesAgent->phoneMobile : ( isset($single_property->salesAgent->phoneOffice) ? $single_property->salesAgent->phoneOffice : '');
						$agentPhone = isset( $single_property->salesAgent->phoneMobile )? $single_property->salesAgent->phoneMobile : ( isset($single_property->salesAgent->phoneOffice) ? $single_property->salesAgent->phoneOffice : '');
						?>
							<li>Listing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
							</li>
						<?php endif; ?>
						
						<?php if( isset($single_property->coSalesAgent) ):
						$agentFullName = isset( $single_property->coSalesAgent->userName ) ? explode( ' ',  $single_property->coSalesAgent->userName ) : '';
						$agentFirstName =  $agentFullName ? $agentFullName[0] : '';
						$agentPhone = isset( $single_property->coSalesAgent->phoneMobile )? $single_property->coSalesAgent->phoneMobile : ( isset($single_property->coSalesAgent->phoneOffice) ? $single_property->coSalesAgent->phoneOffice : '');
						?>
							<li>Listing Agent</li>
							<li>
								<?php if($agentImage): ?><div class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col"><img src="<?php echo $agentImage; ?>" alt="<?php echo $agentFullName; ?>" class="zy_agent-pic"/></div><?php endif; ?>
								<span class="col-lg-6 col-sm-6 col-md-6 col-xl-6 col zy_nopadding"><h3><?php echo $agentFullName; ?></h3>
								<p class="zy_agent-phone"><?php echo $agentPhone; ?></p>
								<a href="mailto:<?php echo $agentEmail; ?>" class="zy_agent-email"><?php echo $agentEmail; ?></a>
								<?php if( $agent ) echo '<a href="#zpa-modal-contact-agent-form"><button>Ask Question</button></a>'; ?></span>
							</li>
						<?php endif; ?>	
						
					</ul>
					
				</div>
			</div>
				
			<!--
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xl-12 zy_prop-fetaures">
					<ul class="zy_prop-highlight">
						<h2 class="row">Property Features</h1>
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">Sub Type</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">Single Family</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Lot Size Source</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">Assessor's Data</span>
						</li>
						
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">Baths Total</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">3</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Kitchen Features</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">Island, Pantry</span>
						</li>
						
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">Assessments</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">-</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Distressed Property</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">None</span>
						</li>
						
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">Levels</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">2 Story</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Construction</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">Brick</span>
						</li>
						
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">School District</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">CENT</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Exterior Unit Features</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">Cable TV, Fence, Patio, Porch</span>
						</li>
						
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">Appliance</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">Cooktop, Dishwasher, Dryer, Garbage Disposal, Microwave, Wall Oven, Washer</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Transaction Type</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">Sale</span>
						</li>
						
						<li class="row">
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_nopadding zy_mob">Zoning</label> 
							<span class="col-lg-3 col-sm-6 col-md-3 col-xl-3 col zy_nopadding zy_mob">Residential</span>
							<label class="col-lg-2 col-sm-6 col-md-2 col-xl-2 col zy_right-padding zy_mob">Utilities</label> 
							<span class="col-lg-3 col-sm-6 col-md-4 col-xl-4 col zy_nopadding zy_mob">220 Volt Outlet, City Water, Natural Gas, Sanitary Sewer</span>
						</li>
						
					</ul>
				</div>
			</div> -->
			
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
			
			<div class="row">
				
				<div class="col-xs-12">

					<div class="full-details-disclaimer">
						<br> 
						<?php
						if( $source_details ){
							echo $source_details;
						}else{
							echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
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
			
			<?php if( is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
			<div class="row zy-widget greatschool-widget">
				<div class="col-xs-12">
					<div class="zy-map-container">
						<iframe className="greatschools" src="//www.greatschools.org/widget/map?searchQuery=&textColor=0066B8&borderColor=DDDDDD&lat=<?php echo $single_property->lat; ?>&lon=<?php echo $single_property->lng; ?>&cityName=<?php echo isset($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION:'' ?>&state=<?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?>&normalizedAddress=<?php echo urlencode( zipperagent_get_address($single_property) ); ?>&width=auto&height=368&zoom=13" width="1180" height="368" marginHeight="0" marginWidth="0" frameBorder="0" scrolling="no"></iframe>
					</div>
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
			
			<?php if( $agent ): ?>
			<div class="row zy-widget">
				<div id="ask-a-question-form" class="col-xs-12 col-md-12 col-lg-8">
					<h3 class="zy-listing-contact-title">Ask Agent a Question</h3>
					
					<form id="zpa-modal-contact-agent-form">
						
						<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
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
									<label for="listing-contact-phone">phoneMobile</label>
									<input type="text" id="listing-contact-phone" name="phone" required="">
								</div><span></span>
							</div>
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
							<div class="col-md-12">
								<input type="submit" class="listing-contact-submit" value="Submit">
							</div>
						</div>
						<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds) ?>" />
						<input type="hidden" name="agent" value="<?php echo $agent->login ?>" />
						<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
						<input type="hidden" name="action" value="regist_user" >
						<?php else: ?>
						<input type="hidden" name="action" value="contact_agent" >
						<?php endif; ?>
					</form>
				</div>
			</div>
			<?php endif; ?>
				
			</div>
			
		</article>
	</section>
	<!-- print views -->
	<?php
	
		$rb = zipperagent_rb();
		
		$print_logo = isset($rb['web']['print_logo'])?$rb['web']['print_logo']:'';
		$print_color = isset($rb['web']['print_color'])?$rb['web']['print_color']:'';
	?>
	
	<?php if(isset($is_doing_ajax) && $is_doing_ajax) ob_start(); //start save print section ?>
	<div id="print-view-column top-brdr" class="zy-print-view js-print-view" style="border-color: <?php echo $print_color; ?>">
	<?php
		/* incldue print template */
		if(file_exists($template_print_path) && $template_print){
			include $template_print_path;
		}else{
			include $template_print_path_default;
		}
	?>
	</div>
	<?php 
	if(isset($is_doing_ajax) && $is_doing_ajax) $print_section = ob_get_clean(); //end save print section
	?>
</div>