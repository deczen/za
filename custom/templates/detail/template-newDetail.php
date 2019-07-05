<?php
$contactIds=get_contact_id();
?>
<div id="zipperagent-content">
	<article class="listing-detail listing-wrapper js-listing-detail " itemtype="http://schema.org/Residence">
		<div class="uk-sticky-placeholder" style="margin: 0px;">
			<header class="zy-listing__header js-listing__header uk-active" data-uk-sticky="{media: 768}">
				<div class="grid--wrapper uk-position-relative">
					<a class="zy-back-to-search js-back-to-search" href="javascript:history.back()"><i class="zy-icon fa fa-chevron-left" aria-hidden="true"></i></a>
					<div class="grid grid--noWrap zy-header__inner">
						<div class="cell">
							<div class="grid grid--gutters">
								<div class="cell cell-md-7 cell-lg-8 cell-xs-12">									
									<div class="zy-listing__header-grid">
										<?php echo property_source_info($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'' )); ?>
<div class="mb-0" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
											<!-- <div class="grid grid--gutters"> -->
												<!-- <div class="cell-xs-8"> -->
													<?php
													$imgsrc=zipperagent_get_idx_logo($single_property->sourceid);
													?>													
													<h1 class="uk-h2 mt-5 mb-0 listing-address at-prop-addr-txt">
														<span itemprop="streetAddress"> [streetno] <?php echo isset($single_property->streetname)?zipperagent_fix_comma($single_property->streetname):'' ?> </span> <?php if($imgsrc): ?><img src="<?php echo $imgsrc; ?>" alt="[listOfficeName]" /><?php endif; ?></h1>
													<div class="zy-listing__locations-list uk-text-muted my-0 at-city-state-zip-txt">
														<span itemprop="addressLocality"> <?php echo isset($single_property->lngTOWNSDESCRIPTION) && !empty($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION. ',':'' ?> </span>
														<span itemprop="addressRegion"> <?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?> </span>
														<span itemprop="postalCode"> <?php echo isset($single_property->zipcode)?$single_property->zipcode:'' ?> </span>
													</div>
												<!-- </div> -->
												
												<?php /* <div class="cell-xs-4">
													<div class="idx-logo">
														<?php
														$imgsrc=zipperagent_get_idx_logo($single_property->sourceid);
														?>
														<img src="<?php echo $imgsrc; ?>" alt="[listOfficeName]" />
													</div>
												</div> */ ?>
											<!-- </div> -->
										</div>
										<ul class="aux-info uk-text-small uk-text-uppercase mt-5">

											<li class="zy-price__base uk-text-bold green">
												<span>$[realprice]</span>
											</li>
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

									</div>
								</div>
								<div class="zy-listing__header-cta cell cell-md-4 cell-lg-3 cell-xs-12 hideonprint">
									<div class="grid grid-xs--full py-15">
										<div class="cell">
											<button style="width:100%" class="<?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?> schedule-showing-btn | at-request-show-btn zy-listing__header-cta__btn width-1-1 btn-primary js-listing-request-showing" afterAction="schedule_show"> <span class="hidden-xs"> <i class="glyphicon glyphicon-time fs-12"></i> Request Showing </span> <span class="visible-xs fs-12"> Request Showing </span> </button> 	
										</div>
										<div class="cell top-action-buttons btn-group mt-10 " role="group" aria-label="Share options and option to view property on a map">
											
											 <button type="button" class="btn-small request-info-btn width-1-2 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="request_info">
												<span class="zy-icon--stack">
													<i class="zy-icon zy-icon--larger fa fa-info" aria-hidden="true"></i>
												</span> <span class="hidden-md text">Request Info</span><span class="visible-md text"> Info </span>
											</button>
											<button type="button" class="btn-small save-property-btn width-1-2 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="save_property" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>">
												<span class="zy-icon--stack">
													<i class="zy-icon zy-icon--larger fa fa-floppy-o" aria-hidden="true"></i>
												</span> <span class="hidden-md text">Save Property</span><span class="visible-md text"> Save </span>
											</button>
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
									nav: !1,
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
								var count=<?php echo $_SESSION['za_image_clicked'] ? (int) $_SESSION['za_image_clicked'] : 0; ?>;
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
						
						<?php if(isset($single_property->vtlink)): ?>
						<div class="zy-listing__virtual-tour">
						
							<?php if(is_array($single_property->vtlink)): ?>
							<?php foreach( $single_property->vtlink as $virtual_index => $virtual_tour_url ): ?>
						
							<a target="_blank" href="<?php echo $virtual_tour_url ?>" class="zy-listing__virtual-tour__link js-vtour">
							  <div class="uk-float-left">
								<i class="fa fa-camera"></i>
							  </div>
							  <div class="uk-float-right zy-listing__virtual-tour__text">
								Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
							  </div>
							</a>
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						
						<aside class="my-15">
							<div class="uk-hidden-small uk-hidden-medium">


								<h3 class="zy-listing__headline mt-15 at-desc-header">Description</h3>
								<p class="at-desc-body">[remarks]</p>


							</div>
						</aside>
					</div>
					<div id="props-column" class="cell">
						<div class="mb-15 p-0 zy-panel uk-panel uk-panel-box">
							<div class="zy-panel__stack__sub zy-panel--small uk-text-center">
								<div class="">

									<strong>$[realprice]</strong>

								</div>

							</div>
							<div class="zy-panel__stack__sub">
								<ul class="zy-listing__feature-grid" style="margin-bottom:0">
									<li class="beds">
										<div class="attr-num">[nobedrooms]</div>
										<div class="uk-text-small uk-text-truncate">BEDS</div>
									</li>
									<li class="acres">

										<div class="attr-num zy-listing__acreage-text">[acre]</div>

										<div class="uk-text-small uk-text-truncate">ACRES</div>
									</li>
									<li class="baths">
										<div class="attr-num">[nobaths]</div>
										<div class="uk-text-small uk-text-truncate">BATHS</div>
									</li>										
									<li class="half-baths">
										<div class="attr-num">[nohalfbaths]</div>
										<div class="uk-text-small uk-text-truncate">1/2 BATHS</div>
									</li>
									<li class="sqft ">
										<div class="attr-num">
											[squarefeet]
										</div>
										<div class="uk-text-small uk-text-truncate">SQFT</div>
									</li>										
									
									<li class="price-sqft">
										<div class="attr-num">&nbsp;</div>
										<div class="uk-text-small uk-text-truncate">&nbsp;</div>
									</li>

								</ul>
							</div>
							<div class="zy-panel__stack__sub">
								<div class="m-0 zy-listing-table zy-listing__table-break">



									<div class="grid">
										<div class="cell uk-text-bold">Neighborhood:</div>
										<div class="cell uk-text-right"> [neighborhood] </div>
									</div>


									<div class="grid">
										<div class="cell cell-xs-3 uk-text-bold">Type:</div>
										<div class="cell uk-text-right">[proptype]</div>
									</div>

									<div class="grid">
										<div class="cell cell-xs-3 uk-text-bold">Built:</div>
										<div class="cell uk-text-right">[yearbuilt]</div>
									</div>



									<div class="grid">
										<div class="cell cell-xs-4 uk-text-bold">County:</div>
										<div class="cell uk-text-right">
											[lngCOUNTYDESCRIPTION]
										</div>
									</div>

									<?php /*
									<div class="grid">
										<div class="cell cell-xs-3 uk-text-bold">Area:</div>
										<div class="cell uk-text-right">
											[lngAREADESCRIPTION]
										</div>
									</div> */ ?>
									
								</div>
							</div>
						</div>							
						
						<div class="mb-15 p-0 zy-panel school-rating" <?php if(is_great_school_enabled() || (is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng))): ?>style="display:none;"<?php endif; ?>>
							<div class="zy-panel--small">
								<h3 class="zy-listing__headline uk-text-center m-0">School Ratings &amp; Info</h3>
							</div>
							<div class="zy-panel--small">
								<a role="button" href="//www.greatschools.org/search/nearbySearch.page?gradeLevels=&amp;distance=15&amp;zipCode=[zipcode]&amp;redirectUrl=%2F" class="js-listing-schoolsBtn btn-primary width-1-1" target="_blank" rel="nofollow">Visit GreatSchools.org</a>
							</div>
						</div> 

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
																	<?php if(isset( $agent->phone )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $agent->phone )?$agent->phone:''; ?>"><span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $agent->phone )?$agent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
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
						
						<?php if( isset($single_property->listingAgent) ): ?>
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
																	<?php if(isset( $single_property->listingAgent->phone )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->listingAgent->phone )?$single_property->listingAgent->phone:''; ?>"><span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->listingAgent->phone )?$single_property->listingAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->listingAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->listingAgent->email )?$single_property->listingAgent->email:''; ?>"><span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->listingAgent->email )?$single_property->listingAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<a href="#ask-a-question-form">
																<button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?></span>
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
						</div>
						<?php endif; ?>
						
						<?php if( isset($single_property->coListingAgent) ): ?>
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
																	<?php if(isset( $single_property->coListingAgent->phone )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->coListingAgent->phone )?$single_property->coListingAgent->phone:''; ?>"><span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->coListingAgent->phone )?$single_property->coListingAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->coListingAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->coListingAgent->email )?$single_property->coListingAgent->email:''; ?>"><span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->coListingAgent->email )?$single_property->coListingAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<a href="#ask-a-question-form">
																<button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?></span>
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
						</div>
						<?php endif; ?>
						
						<?php if( isset($single_property->salesAgent) ): ?>
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
																	<?php if(isset( $single_property->salesAgent->phone )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->salesAgent->phone )?$single_property->salesAgent->phone:''; ?>"><span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->salesAgent->phone )?$single_property->salesAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->salesAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->salesAgent->email )?$single_property->salesAgent->email:''; ?>"><span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->salesAgent->email )?$single_property->salesAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<a href="#ask-a-question-form">
																<button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?></span>
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
						</div>
						<?php endif; ?>
						
						<?php if( isset($single_property->coSalesAgent) ): ?>
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
																	<?php if(isset( $single_property->coSalesAgent->phone )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->coSalesAgent->phone )?$single_property->coSalesAgent->phone:''; ?>"><span class="zy-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->coSalesAgent->phone )?$single_property->coSalesAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->coSalesAgent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->coSalesAgent->email )?$single_property->coSalesAgent->email:''; ?>"><span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->coSalesAgent->email )?$single_property->coSalesAgent->email:''; ?></span></a></div><?php endif; ?>
																</div>
															</div>
															<div class="cell cell--bottom mt-auto">
																<a href="#ask-a-question-form">
																<button class="js-listing-contact-agent at-contact-agent-btn btn-primary width-1-1" type="button"><span><!-- react-text: 26 -->Contact <!-- react-text: 27 --><?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?></span>
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
						</div>
						<?php endif; ?>
					</div>
				</div>
				
				<aside class="my-15">

					<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">

						<li class="cell">
							<h3 class="zy-listing__headline">Exterior Features</h3>
							<table class="zy-listing__table">

								<tbody>
									<tr>
										<td class="zy-listing__table__label">Beachfront</td>
										<td class="zy-listing__table__items">
											<span>[beachfrontflag]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Construction</td>
										<td class="zy-listing__table__items">
											<span>[construction]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Exterior</td>
										<td class="zy-listing__table__items">
											<span>[exterior]</span>
										</td>
									</tr>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Foundation</td>
										<td class="zy-listing__table__items">
											<span>[foundation]</span>
										</td>
									</tr> */ ?>

									<tr>
										<td class="zy-listing__table__label">Garage Spaces</td>
										<td class="zy-listing__table__items">
											<span>[garagespaces]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Lot Description</td>
										<td class="zy-listing__table__items">
											<span>[roadtype]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Parking Features</td>
										<td class="zy-listing__table__items">
											<span>[parkingfeature]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Parking Spaces</td>
										<td class="zy-listing__table__items">
											<span>[parkingspaces]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Roof Material</td>
										<td class="zy-listing__table__items">
											<span>[roofmaterial]</span>
										</td>
									</tr>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Waterfront Flag</td>
										<td class="zy-listing__table__items">
											<span>[waterfrontflag]</span>
										</td>
									</tr> */ ?>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Waterview Flag</td>
										<td class="zy-listing__table__items">
											<span>[waterviewflag]</span>
										</td>
									</tr> */ ?>

								</tbody>
							</table>
						</li>


						<li class="cell">
							<h3 class="zy-listing__headline">Interior Features</h3>
							<table class="zy-listing__table">

								<tbody>
									<tr>
										<td class="zy-listing__table__label">Basement</td>
										<td class="zy-listing__table__items">
											<span>[basement]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Basement Features</td>
										<td class="zy-listing__table__items">
											<span>[basementfeature]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Bedrooms Unit1</td>
										<td class="zy-listing__table__items">
											<span>[bed1LEVEL]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Bedrooms Unit2</td>
										<td class="zy-listing__table__items">
											<span>[bed2LEVEL]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Energy Features</td>
										<td class="zy-listing__table__items">
											<span>[energyfeatures]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Fireplaces</td>
										<td class="zy-listing__table__items">
											<span>[fireplaces]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Fireplaces Unit1</td>
										<td class="zy-listing__table__items">
											<span>[frplcs1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Fireplaces Unit2</td>
										<td class="zy-listing__table__items">
											<span>[frplcs2]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Flooring</td>
										<td class="zy-listing__table__items">
											<span>[flooring]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Floors Unit1</td>
										<td class="zy-listing__table__items">
											<span>[flrs1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Floors Unit2</td>
										<td class="zy-listing__table__items">
											<span>[flrs2]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Full Baths Unit1</td>
										<td class="zy-listing__table__items">
											<span>[fbths1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Full Baths Unit2</td>
										<td class="zy-listing__table__items">
											<span>[fbths2]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Half Baths Unit1</td>
										<td class="zy-listing__table__items">
											<span>[hbths1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Half Baths Unit2</td>
										<td class="zy-listing__table__items">
											<span>[hbths2]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Hot Water</td>
										<td class="zy-listing__table__items">
											<span>[hotwater]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Levels</td>
										<td class="zy-listing__table__items">
											<span>[levels]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Levels Unit1</td>
										<td class="zy-listing__table__items">
											<span>[levels1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Levels Unit2</td>
										<td class="zy-listing__table__items">
											<span>[levels2]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Rooms</td>
										<td class="zy-listing__table__items">
											<span>[norooms]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Rooms Unit1</td>
										<td class="zy-listing__table__items">
											<span>[rms1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Rooms Unit2</td>
										<td class="zy-listing__table__items">
											<span>[rms2]</span>
										</td>
									</tr>

								</tbody>
							</table>
						</li>


						<li class="cell">
							<h3 class="zy-listing__headline">Property Features</h3>
							<table class="zy-listing__table">

								<tbody>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Adult Community</td>
										<td class="zy-listing__table__items">
											<span>[adultcommunity]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Apod Available</td>
										<td class="zy-listing__table__items">
											<span>[apodavailable]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Assessments</td>
										<td class="zy-listing__table__items">
											<span>[assessments]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Disclosure</td>
										<td class="zy-listing__table__items">
											<span>[disclosure]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Electric Features</td>
										<td class="zy-listing__table__items">
											<span>[electricfeature]</span>
										</td>
									</tr> */ ?>

									<tr>
										<td class="zy-listing__table__label">Exclusions</td>
										<td class="zy-listing__table__items">
											<span>[exclusions]</span>
										</td>
									</tr>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Gross Operating Income</td>
										<td class="zy-listing__table__items">
											<span>[netoperatinginc]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Lead Paint</td>
										<td class="zy-listing__table__items">
											<span>[leadpaint]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Lease Unit1</td>
										<td class="zy-listing__table__items">
											<span>[lease1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Lease Unit2</td>
										<td class="zy-listing__table__items">
											<span>[lease2]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Lender Owned</td>
										<td class="zy-listing__table__items">
											<span>[lenderowned]</span>
										</td>
									</tr> */ ?>

									<tr>
										<td class="zy-listing__table__label">Multifamily Type</td>
										<td class="zy-listing__table__items">
											<span>[famlevel]</span>
										</td>
									</tr>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Net Operating Income</td>
										<td class="zy-listing__table__items">
											<span>[netoperatinginc]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Rent Description Unit1</td>
										<td class="zy-listing__table__items">
											<span>[rntdscrp1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Rent Unit1</td>
										<td class="zy-listing__table__items">
											<span>[rent1]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Rent Unit2</td>
										<td class="zy-listing__table__items">
											<span>[rent2]</span>
										</td>
									</tr> */ ?>

									<tr>
										<td class="zy-listing__table__label">Sewer</td>
										<td class="zy-listing__table__items">
											<span>[sewer]</span>
										</td>
									</tr>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Short Sale Lender App Required</td>
										<td class="zy-listing__table__items">
											<span>[shortsalelenderappreqd]</span>
										</td>
									</tr> */ ?>

									<tr>
										<td class="zy-listing__table__label">Sq Ft Source</td>
										<td class="zy-listing__table__items">
											<span>[squarefeetsource]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Tax Year</td>
										<td class="zy-listing__table__items">
											<span>[taxyear]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Taxes</td>
										<td class="zy-listing__table__items">
											<span>[taxes]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Water</td>
										<td class="zy-listing__table__items">
											<span>[water]</span>
										</td>
									</tr>
									
									<?php /*
									<tr>
										<td class="zy-listing__table__label">Year Built Description</td>
										<td class="zy-listing__table__items">
											<span>[yearbuiltdescrp]</span>
										</td>
									</tr>

									<tr>
										<td class="zy-listing__table__label">Year Built Source</td>
										<td class="zy-listing__table__items">
											<span>[yearbuiltsource]</span>
										</td>
									</tr> */ ?>

									<tr>
										<td class="zy-listing__table__label">Zoning</td>
										<td class="zy-listing__table__items">
											<span>[zoning]</span>
										</td>
									</tr>

								</tbody>
							</table>
						</li>

					</ul>


					<div class="at-full-details-disclaimer">
						<br> 
						<?php
						$source_details = isset($single_property->sourceid) ? zipperagent_get_source_text($single_property->sourceid, array( 'listOfficeName'=>isset($single_property->listOfficeName)?$single_property->listOfficeName:'', 'listAgentName'=>isset($single_property->listAgentName)?$single_property->listAgentName:'' ), 'newdetail') : false;
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
						<ul id="map-sections" class="uk-switcher">
							<li class="uk-active" aria-hidden="false">
								<div id="map" style="height:300px"></div>
								<!-- Direction Results -->
								<div class="zy-listing__directions-results uk-clearfix uk-hidden js-listing__directions-results"></div>
							</li>
							<li aria-hidden="true">
								<div class="zy-border-pad">
									<div class="zy-listing__map-object">
										<div class="gmap js-listing__streetview-map" data-address="512 Hyde Park Ave  02131" data-lat="42.2829" data-lng="-71.11872">
											<img src="<?php echo ZIPPERAGENTURL . "images/no-street-view.png"; ?>" alt="Street View Not Available" class="uk-hidden js-streetview-na">
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
							</li>
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
																	<!-- react-text: 35 -->Phone
																	
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
																	<div class="zy-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $agent->userName )?$agent->userName:''; ?></span></div>
																	<?php if(isset( $agent->phone )): ?><div class="uk-text-truncate-child zy-listing__agent__info__phone"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="tel:<?php echo isset( $agent->phone )?$agent->phone:''; ?>"><span class="zy-listing__agent__info_phone__type"><!-- react-text: 79 -->Office<!-- react-text: 80 -->: </span><span itemprop="telephone"><?php echo isset( $agent->phone )?$agent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child zy-listing__agent__info__email"><a class="width-1-1 js-call-agent zy-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><span class="zy-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
																	
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
						</div>
					</div>
				</aside>
				<?php endif; ?>
				
				<?php /*
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
										   <?php // <a class="uk-text-small">Contact our Lending Specialist</a>  ?>
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
										</div>
									 </div>
								  </div>
							   </div>
							</form>
						 </div>
					  </div>
				   </div>
				</div> */ ?>
				
			</section>
		</div>
	</article>
	
	<!-- print view -->
	<div class="zy-print-view js-print-view">
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
				  </td> */ ?>
				  <td>
					 <div class="zy-print__meta-val">[yearbuilt]</div>
					 <div class="zy-print__meta-label">Built</div>
				  </td>
			   </tr>
			</table>
			<div class="zy-print__area__wrap">
			   <div class="zy-print__area">
				  <div class="uk-clearfix">
					 <div class="zy-print__area-label">Neighborhood:</div>
					 <div class="zy-print__area-val">[neighborhood]</div>
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
   </div>
</div>