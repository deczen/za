<?php
$contactIds=get_contact_id();

// if(isset($_GET['test'])){
	
	// echo '<pre>'; print_r($single_property); echo '</pre>';
	
// }
?>
<div id="zipperagent-content">
	<article class="listing-detail listing-wrapper js-listing-detail " itemtype="http://schema.org/Residence">
		<div class="uk-sticky-placeholder" style="margin: 0px;">
			<header class="bt-listing__header js-listing__header uk-active" data-uk-sticky="{media: 768}">
				<div class="grid--wrapper uk-position-relative">
					<a class="bt-back-to-search js-back-to-search" href="javascript:history.back()"><i class="bt-icon fa fa-chevron-left" aria-hidden="true"></i></a>
					<div class="grid grid--noWrap bt-header__inner">
						<div class="cell">
							<div class="grid grid--gutters">
								<div class="cell cell-md-7 cell-lg-8 cell-xs-12">
									<div class="bt-listing__header-grid">

										<div class="mb-0" itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
											<h1 class="uk-h2 mt-5 mb-0 listing-address at-prop-addr-txt">
												<span itemprop="streetAddress"> [streetno] <?php echo isset($single_property->streetname)?$single_property->streetname:'' ?> </span></h1>
											<div class="bt-listing__locations-list uk-text-muted my-0 at-city-state-zip-txt">
												<span itemprop="addressLocality"> <?php echo isset($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION. ',':'' ?> </span>
												<span itemprop="addressRegion"> <?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?> </span>
												<span itemprop="postalCode"> <?php echo isset($single_property->zipcode)?$single_property->zipcode:'' ?> </span>
											</div>
										</div>
										<ul class="aux-info uk-text-small uk-text-uppercase mt-5">

											<li class="bt-price__base uk-text-bold green">
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
											<li>MLS #:
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
												<i class="bt-sash py-5 px-10 zpa-status <?php echo is_numeric($single_property->status)? 'status_'.$single_property->status : $single_property->status; ?> bt-listing-single__sash undercontract">[status]</i>
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
										<span class="bt-listing-single__info-updated text-small" data-uk-tooltip="{pos:'bottom'}" title="Our MLS data is the freshest around which ensures the most accurate property information is available to you">
											UPDATED: <span class="uk-text-bold">198 min ago</span>
										</span> */ ?>

									</div>
								</div>
								<div class="bt-listing__header-cta cell cell-md-4 cell-lg-3 cell-xs-12 hideonprint">
									<div class="grid grid-xs--full py-15">
										<div class="cell">
											<button style="width:100%" class="<?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?> schedule-showing-btn | at-request-show-btn bt-listing__header-cta__btn width-1-1 btn-primary js-listing-request-showing" afterAction="schedule_show"> <span class="hidden-xs"> <i class="glyphicon glyphicon-time fs-12"></i> Request Showing </span> <span class="visible-xs fs-12"> Request Showing </span> </button>	
										</div>
										<div class="cell top-action-buttons btn-group mt-10 " role="group" aria-label="Share options and option to view property on a map">
											<button type="button" class="btn-small request-info-btn width-1-2 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="request_info">
												<span class="bt-icon--stack">
													<i class="bt-icon bt-icon--larger fa fa-info" aria-hidden="true"></i>
												</span> <span class="hidden-md text">Request Info</span><span class="visible-md text"> Info </span>
											</button>
											<button type="button" class="btn-small save-property-btn width-1-2 <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="save_property" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>">
												<span class="bt-icon--stack">
													<i class="bt-icon bt-icon--larger fa fa-floppy-o" aria-hidden="true"></i>
												</span> <span class="hidden-md text">Save Property</span><span class="visible-md text"> Save </span>
											</button>
										</div>
										<!-- end .top-action-buttons -->
									</div>
								</div>
								<!-- end .bt-listing__header-cta -->
							</div>
							<!-- end .grid -->
						</div>
					</div>
					<div class="js-details-fav__container bt-listing__favorite-container hideonprint">
						<button class="bt-listing__favorite-button at-fav-btn js-details-fav <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>" afterAction="save_favorite" value="Add this property to your favorites" contactid="<?php echo implode(',',$contactIds) ?>" searchid="<?php echo $searchId ?>">
							<i class="bt-icon fa fa-heart" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<!-- end grid wrapper -->
			</header>
		</div>
		
		<!-- end .bt-listing__header-cta -->
		<div class="">
			<section class="mt-15 listing-content">
				<div id="listing-top-wrapper" class="grid grid--gutters">
					<div id="gallery-column" class="cell cell-xs-12 cell-lg-8 mb-15">
					
						<?php if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ): ?>
											
						<link rel="stylesheet" href="<?php echo zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">						
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
								var count=0;
								var limit='<?php echo zipperagent_slider_limit_popup(); ?>';
								$topHeadCarousel.on('changed.owl.carousel', function(event) {
									count++;
									if(count>=limit && limit != 0 && $topHeadCarousel.hasClass('needLogin')){
										jQuery('#needLoginModal').modal('show');
										count=0;
									}
								});
								<?php endif; ?>
							})(jQuery)
						</script>
						<?php endif; ?>

						<?php if(isset($single_property->openHouses) && sizeof($single_property->openHouses)): ?>						
						<aside class="my-15">
							<div class="uk-hidden-small uk-hidden-medium">
							<h3 class="bt-listing__headline mt-15 at-desc-header">Open House</h3>
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
						
						<?php if( (isset($single_property->unmapped->VirtualTourURLBranded)) && (isset($single_property->listingAgent) || isset($single_property->coListingAgent)) && (is_branded_virtualtour() == 1)): ?>
						<div class="bt-listing__virtual-tour">
							
							<?php if(is_array($single_property->unmapped->VirtualTourURLBranded)): ?>
							<?php foreach( $single_property->unmapped->VirtualTourURLBranded as $virtual_index => $virtual_tour_url ): ?>
							
							<a target="_blank" href="<?php echo $virtual_tour_url ?>" class="bt-listing__virtual-tour__link js-vtour">
							  <div class="uk-float-left">
								<i class="fa fa-camera"></i>
							  </div>
							  <div class="uk-float-right bt-listing__virtual-tour__text">
								Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
							  </div>
							</a>
							
							<?php endforeach; ?>
							<?php endif; ?>
							
						</div>
						
						<?php elseif( (isset($single_property->unmapped->VirtualTourURLUnbranded)) && (is_branded_virtualtour() == 1) ): ?> 
						<div class="bt-listing__virtual-tour">
						
							<?php if(is_array($single_property->unmapped->VirtualTourURLUnbranded)): ?>
							<?php foreach( $single_property->unmapped->VirtualTourURLUnbranded as $virtual_index => $virtual_tour_url ): ?>
						
							<a target="_blank" href="<?php echo $virtual_tour_url ?>" class="bt-listing__virtual-tour__link js-vtour">
							  <div class="uk-float-left">
								<i class="fa fa-camera"></i>
							  </div>
							  <div class="uk-float-right bt-listing__virtual-tour__text">
								Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
							  </div>
							</a>
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<?php //endif; ?>
						<?php elseif(isset($single_property->vtlink)): ?> 
						<div class="bt-listing__virtual-tour">
						
							<?php if(is_array($single_property->vtlink)): ?>
							<?php foreach( $single_property->vtlink as $virtual_index => $virtual_tour_url ): ?>
						
							<a target="_blank" href="<?php echo $virtual_tour_url ?>" class="bt-listing__virtual-tour__link js-vtour">
							  <div class="uk-float-left">
								<i class="fa fa-camera"></i>
							  </div>
							  <div class="uk-float-right bt-listing__virtual-tour__text">
								Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
							  </div>
							</a>
							<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						
						<aside class="my-15">
							<div class="uk-hidden-small uk-hidden-medium">


								<h3 class="bt-listing__headline mt-15 at-desc-header">Description</h3>
								<p class="at-desc-body">[remarks]</p>


							</div>
							
							<?php if(isset($single_property->direction)): ?>
								<div class="uk-hidden-small uk-hidden-medium">
								   <h3 class="bt-listing__headline mt-15 at-desc-header">Directions</h3>
								   <p class="at-desc-body">[direction]</p>
								</div>
							<?php endif; ?>
							
						</aside>
					</div>
					<div id="props-column" class="cell">
						<div class="mb-15 p-0 bt-panel uk-panel uk-panel-box">
							<div class="bt-panel__stack__sub bt-panel--small uk-text-center">
								<div class="">

									<strong>$[realprice]</strong>

								</div>
							</div>
							<div class="bt-panel__stack__sub">
								<ul class="bt-listing__feature-grid" style="margin-bottom:0">
									<li class="acres">
										<div class="attr-num bt-listing__acreage-text">[acre]</div>
										<div class="uk-text-small uk-text-truncate">ACRES</div>
									</li>
									<li class="sqft ">
										<div class="attr-num"> [nolots] </div>
										<div class="uk-text-small uk-text-truncate">APPROVED LOTS</div>
									</li>
								</ul>
							</div>
							<div class="bt-panel__stack__sub">
								<div class="m-0 bt-listing-table bt-listing__table-break">



									<div class="grid">
										<div class="cell uk-text-bold">Neighborhood:</div>
										<div class="cell uk-text-right"> [neighborhood] </div>
									</div>


									<div class="grid">
										<div class="cell cell-xs-3 uk-text-bold">Type:</div>
										<div class="cell uk-text-right">[proptype]</div>
									</div>


									<div class="grid">
										<div class="cell cell-xs-4 uk-text-bold">County:</div>
										<div class="cell uk-text-right">
											[lngCOUNTYDESCRIPTION]
										</div>
									</div>




									<div class="grid">
										<div class="cell cell-xs-3 uk-text-bold">Area:</div>
										<div class="cell uk-text-right">
											[lngAREADESCRIPTION]
										</div>
									</div>



								</div>
							</div>
						</div>							
						
						<div class="mb-15 p-0 bt-panel school-rating" <?php if(is_great_school_enabled() || (is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng))): ?>style="display:none;"<?php endif; ?>>
							<div class="bt-panel--small">
								<h3 class="bt-listing__headline uk-text-center m-0">School Ratings &amp; Info</h3>
							</div>
							<div class="bt-panel--small">
								<a role="button" href="//www.greatschools.org/search/nearbySearch.page?gradeLevels=&amp;distance=15&amp;zipCode=[zipcode]&amp;redirectUrl=%2F" class="js-listing-schoolsBtn btn-primary width-1-1" target="_blank" rel="nofollow">Visit GreatSchools.org</a>
							</div>
						</div> 
						
						<?php /*
						<div class="at-top-full-details-disclaimer"><font size="2">Listing courtesy of Felicia Pagan Soto of Century 21 North Shore.</font>
						</div> */ ?>

						<div class="grid">
							<?php if(isset($single_property->openHouses) && sizeof($single_property->openHouses)): ?>						
							<div class="uk-hidden-large uk-hidden-xlarge" style="width:100%;">

								<h3 class="bt-listing__headline mt-15">Open House</h3>									
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

								<h3 class="bt-listing__headline mt-15">Description</h3>
								<p class="at-description">[remarks]</p>

							</div>
							
							<?php if(isset($single_property->direction)): ?>
								<div class="uk-hidden-large uk-hidden-xlarge">
								   <h3 class="bt-listing__headline mt-15">Directions</h3>
								   <p class="at-description">[direction]</p>
								</div>
							<?php endif; ?>
							
						</div>
						
						<?php /*
						<div class="grid">
							<?php
							// echo "<pre>"; print_r( $agent ); echo "</pre>";
							if( $agent ): ?>
							<div class="cell bt-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="bt-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="bt-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $agent->userName )?$agent->userName:''; ?>" src="<?php echo isset( $agent->imageURL )?$agent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $agent->userName )?$agent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Sales &amp; Leasing Agent </div>
																<div class="bt-listing__agent__info">
																	<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $agent->userName )?$agent->userName:''; ?></span></div>
																	<?php if(isset( $agent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $agent->phone )?$agent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $agent->phone )?$agent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
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
							<div class="cell bt-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="bt-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="bt-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?>" src="<?php echo isset( $single_property->listingAgent->imageURL )?$single_property->listingAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Listing Agent </div>
																<div class="bt-listing__agent__info">
																	<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->listingAgent->userName )?$single_property->listingAgent->userName:''; ?></span></div>
																	<?php if(isset( $single_property->listingAgent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->listingAgent->phone )?$single_property->listingAgent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->listingAgent->phone )?$single_property->listingAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->listingAgent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->listingAgent->email )?$single_property->listingAgent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->listingAgent->email )?$single_property->listingAgent->email:''; ?></span></a></div><?php endif; ?>
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
							<div class="cell bt-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="bt-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="bt-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?>" src="<?php echo isset( $single_property->coListingAgent->imageURL )?$single_property->coListingAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Co-Listing Agent </div>
																<div class="bt-listing__agent__info">
																	<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->coListingAgent->userName )?$single_property->coListingAgent->userName:''; ?></span></div>
																	<?php if(isset( $single_property->coListingAgent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->coListingAgent->phone )?$single_property->coListingAgent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->coListingAgent->phone )?$single_property->coListingAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->coListingAgent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->coListingAgent->email )?$single_property->coListingAgent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->coListingAgent->email )?$single_property->coListingAgent->email:''; ?></span></a></div><?php endif; ?>
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
							<div class="cell bt-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="bt-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="bt-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?>" src="<?php echo isset( $single_property->salesAgent->imageURL )?$single_property->salesAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Sales Agent </div>
																<div class="bt-listing__agent__info">
																	<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->salesAgent->userName )?$single_property->salesAgent->userName:''; ?></span></div>
																	<?php if(isset( $single_property->salesAgent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->salesAgent->phone )?$single_property->salesAgent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->salesAgent->phone )?$single_property->salesAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->salesAgent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->salesAgent->email )?$single_property->salesAgent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->salesAgent->email )?$single_property->salesAgent->email:''; ?></span></a></div><?php endif; ?>
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
							<div class="cell bt-listing__agent--card jsx-listing-details-rep-tags">
								<div data-reactroot="" class="">
									<div class="">
										<div class="bt-panel uk-panel uk-panel-box">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="bt-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?>" src="<?php echo isset( $single_property->coSalesAgent->imageURL )?$single_property->coSalesAgent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Co-Sales Agent </div>
																<div class="bt-listing__agent__info">
																	<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $single_property->coSalesAgent->userName )?$single_property->coSalesAgent->userName:''; ?></span></div>
																	<?php if(isset( $single_property->coSalesAgent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $single_property->coSalesAgent->phone )?$single_property->coSalesAgent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 20 -->Office<!-- react-text: 21 -->: </span><span itemprop="telephone"><?php echo isset( $single_property->coSalesAgent->phone )?$single_property->coSalesAgent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $single_property->coSalesAgent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $single_property->coSalesAgent->email )?$single_property->coSalesAgent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $single_property->coSalesAgent->email )?$single_property->coSalesAgent->email:''; ?></span></a></div><?php endif; ?>
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
						<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
						<li class="cell">
							<h3 class="bt-listing__headline">Land Details</h3>
							<table class="bt-listing__table">

								<tbody>
									<?php if( isset($single_property->cultivationacres)): ?>
									<tr>
										<td class="bt-listing__table__label">Cultivation Acres</td>
										<td class="bt-listing__table__items"><span>[cultivationacres]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->pastureacres)): ?>
									<tr>
										<td class="bt-listing__table__label">Pasture Acres</td>
										<td class="bt-listing__table__items"><span>[pastureacres]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->timberacres)): ?>
									<tr>
										<td class="bt-listing__table__label">Timber Acres</td>
										<td class="bt-listing__table__items"><span>[timberacres]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->ldtype)): ?>
									<tr>
										<td class="bt-listing__table__label">Land Style</td>
										<td class="bt-listing__table__items"><span>[ldtype]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->frontage)): ?>
									<tr>
										<td class="bt-listing__table__label">Street Frontage</td>
										<td class="bt-listing__table__items"><span>[frontage]</span></td>
									</tr>
									<?php endif; ?>
									
									<!-- ADD FIELDS -->
									<?php if( isset($single_property->DwellingType)): ?>
									<tr>
										<td class="bt-listing__table__label">Dwelling Type</td>
										<td class="bt-listing__table__items"><span>[DwellingType]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->foundation)): ?>
									<tr>
										<td class="bt-listing__table__label">Foundation</td>
										<td class="bt-listing__table__items"><span>[foundation]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->style)): ?>
									<tr>
										<td class="bt-listing__table__label">Style</td>
										<td class="bt-listing__table__items"><span>[style]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->roofmaterial)): ?>
									<tr>
										<td class="bt-listing__table__label">Roof Material</td>
										<td class="bt-listing__table__items"><span>[roofmaterial]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->unmapped->Fireplace)): ?>
									<tr>
										<td class="bt-listing__table__label">Fire place</td>
										<td class="bt-listing__table__items"><span>[unmapped_Fireplace]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->unmapped->CarStorage)): ?>
									<tr>
										<td class="bt-listing__table__label">Car Storage</td>
										<td class="bt-listing__table__items"><span>[unmapped_CarStorage]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->unmapped->LotSize)): ?>
									<tr>
										<td class="bt-listing__table__label">Lot Size</td>
										<td class="bt-listing__table__items"><span>[unmapped_LotSize]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->lotdescription)): ?>
									<tr>
										<td class="bt-listing__table__label">Lot Desc</td>
										<td class="bt-listing__table__items"><span>[lotdescription]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->greencertified)): ?>
									<tr>
										<td class="bt-listing__table__label">Green Certified</td>
										<td class="bt-listing__table__items"><span>[greencertified]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->handicapaccess)): ?>
									<tr>
										<td class="bt-listing__table__label">Handicap Access</td>
										<td class="bt-listing__table__items"><span>[handicapaccess]</span></td>
									</tr>
									<?php endif; ?>
									<?php /*if( isset($single_property->electricfeature)): ?>
									<tr>
										<td class="bt-listing__table__label">Electric Feature</td>
										<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
									</tr>
									<?php endif;*/ ?>
								</tbody>
							</table>
						</li>						
						<?php endif; ?>
						
						<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
						<li class="cell">
							<h3 class="bt-listing__headline">Utilities</h3>
							<table class="bt-listing__table">

								<tbody>
									<?php if( isset($single_property->gas)): ?>
									<tr>
										<td class="bt-listing__table__label">Gas</td>
										<td class="bt-listing__table__items"><span>[gas]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->electricfeature)): ?>
									<tr>
										<td class="bt-listing__table__label">Electric</td>
										<td class="bt-listing__table__items"><span>[electricfeature]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->sewer)): ?>
									<tr>
										<td class="bt-listing__table__label">Sewer Utilities</td>
										<td class="bt-listing__table__items"><span>[sewer]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->water)): ?>
									<tr>
										<td class="bt-listing__table__label">Water Utilities</td>
										<td class="bt-listing__table__items"><span>[water]</span></td>
									</tr>
									<?php endif; ?>		

									<!-- ADD FIELD -->
									<?php if( isset($single_property->aircondition)): ?>
									<tr>
										<td class="bt-listing__table__label">Air Condition</td>
										<td class="bt-listing__table__items"><span>[aircondition]</span></td>
									</tr>
									<?php endif; ?>	
								</tbody>
							</table>
						</li>
						<?php endif; ?>
						
						<li class="cell">
							<?php
								$roomLevels = $single_property->roomLevels;
								if (isset($roomLevels)): ?>
									<h3 class="bt-listing__headline">Room Information</h3>
									<?php foreach($roomLevels as $rkey => $roomLevel): ?>
											
										<table class="bt-listing__table">
											<tbody>
												<tr>
													<td class="bt-listing__table__label">Room Type</td>
													<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomType]</span></td>
												</tr>
												<tr>
													<td class="bt-listing__table__label">Room Level</td>
													<td class="bt-listing__table__items"><span>[roomLevels_<?php echo $rkey; ?>_roomLevel]</span></td>
												</tr>
												<tr>
													<td class="bt-listing__table__label">Room Size</td>
													<td class="bt-listing__table__items"><span><?php //echo $roomLevel->dim1; ?>[roomLevels_<?php echo $rkey; ?>_dim1] x [roomLevels_<?php echo $rkey; ?>_dim2]<?php// echo $roomLevel->dim2; ?></span></td>
												</tr>
											</tbody>
										</table>
									<?php endforeach; ?>
										
								<?php
								endif;
							?>
							
							<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
							<h3 class="bt-listing__headline">Taxes</h3>
							<table class="bt-listing__table">
								<tbody>
									<?php if( isset($single_property->taxes)): ?>
									<tr>
										<td class="bt-listing__table__label">Tax Amount ($)</td>
										<td class="bt-listing__table__items"><span>[taxes]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->taxyear)): ?>
									<tr>
										<td class="bt-listing__table__label">Tax Year</td>
										<td class="bt-listing__table__items"><span>[taxyear]</span></td>
									</tr>
									<?php endif; ?>
									<?php if( isset($single_property->zoning)): ?>
									<tr>
										<td class="bt-listing__table__label">Zoning Code</td>
										<td class="bt-listing__table__items"><span>[zoning]</span></td> <!-- not done -->
									</tr>
									<?php endif; ?>
								</tbody>
							</table>
							<?php endif; ?>
						</li>					

					</ul>

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
					<h3 class="bt-listing__headline">Properties</h3>
					<?php zipperagent_luxury_table($single_luxury); ?>
				</aside>			
				<?php endif; ?>
				
				<?php if( is_great_school_enabled() && isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
				<aside class="bt-widget greatschool-widget">
					<div class="bt-listing__map-container">
						<iframe className="greatschools" src="//www.greatschools.org/widget/map?searchQuery=&textColor=0066B8&borderColor=DDDDDD&lat=<?php echo $single_property->lat; ?>&lon=<?php echo $single_property->lng; ?>&cityName=<?php echo isset($single_property->lngTOWNSDESCRIPTION)?$single_property->lngTOWNSDESCRIPTION:'' ?>&state=<?php echo isset($single_property->provinceState)?$single_property->provinceState:'' ?>&normalizedAddress=<?php echo urlencode( zipperagent_get_address($single_property) ); ?>&width=auto&height=368&zoom=13" width="1180" height="368" marginHeight="0" marginWidth="0" frameBorder="0" scrolling="no"></iframe>
					</div>
				</aside>
				<?php endif; ?>
				
				<?php if( isset($single_property->lat) && isset($single_property->lng) && !empty($single_property->lat) && !empty($single_property->lng) ): ?>
				<aside class="bt-widget js-map-column">
					<div class="bt-listing__map-container">
						<ul id="map-sections" class="uk-switcher">
							<li class="uk-active" aria-hidden="false">
								<div id="map" style="height:300px"></div>
								<!-- Direction Results -->
								<div class="bt-listing__directions-results uk-clearfix uk-hidden js-listing__directions-results"></div>
							</li>
							<li aria-hidden="true">
								<div class="bt-border-pad">
									<div class="bt-listing__map-object">
										<div class="gmap js-listing__streetview-map" data-address="512 Hyde Park Ave  02131" data-lat="42.2829" data-lng="-71.11872">
											<img src="https://bt-wpstatic.freetls.fastly.net/wp-content/themes/wp-base-theme/assets/media/build/street_view_na.png" alt="Street View Not Available" class="uk-hidden js-streetview-na">
										</div>
									</div>
								</div>
							</li>
							<li aria-hidden="true">
								<div class="bt-border-pad">
									<div class="bt-listing__map-object">
										<div class="gmap js-listing__birdview-map"></div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</aside>
				<?php endif; ?>
				
				<?php if( $agent ): ?>
				<aside class="bt-widget jsx-listing-details-contact-form">
					<div data-reactroot="" class="js-listing-contact-agent-widget">
						<div class="grid grid--gutters grid--justifyCenter grid-xs--full">
							<div class="cell cell-lg-8">
								<div class="bt-panel uk-panel uk-panel-box overflow-show">
									<div class="bt-listing__agent__contact-widget__form">
										<h3 class="bt-listing__headline">Ask Agent a Question</h3>
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
								<div class="bt-listing__agent__contact-widget__card bt-panel uk-panel uk-panel-box">
									<div class="grid grid--gutters grid-xs--full ">
										<div class="bt__agent-lender__card cell">
											<div itemtype="http://schema.org/Person" itemscope="">
												<div class="grid grid--gutters grid--flexCells">
													<div class="bt-listing__agent_image cell cell-xs-4">
														<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $agent->userName )?$agent->userName:''; ?>" src="<?php echo isset( $agent->imageURL )?$agent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $agent->userName )?$agent->userName:''; ?>">
														
													</div>
													<div class="cell cell-xs-8">
														<div class="grid grid-xs--full width-1-1">
															<div class="cell">
																<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Sales &amp; Leasing Agent </div>
																<div class="bt-listing__agent__info">
																	<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $agent->userName )?$agent->userName:''; ?></span></div>
																	<?php if(isset( $agent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $agent->phone )?$agent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 79 -->Office<!-- react-text: 80 -->: </span><span itemprop="telephone"><?php echo isset( $agent->phone )?$agent->phone:''; ?></span></a></div><?php endif; ?>
																	<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
																	
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
				
				<div class="mortgage-calculator grid grid--gutters">
				   <div class="cell cell-xs-12 cell-lg-8">
					  <div class="bt-widget bt-panel uk-panel uk-panel-box overflow-show">
						 <h3 class="bt-listing__headline">Monthly Payment Calculator</h3>
						 <div class="bt-widget jsx-mortgage-calc-form">
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
										</div>
									 </div>
								  </div>
							   </div>
							</form>
						 </div>
					  </div>
				   </div>
				</div>
				
			</section>
		</div>
	</article>
	<!-- print view -->
	<div class="bt-print-view js-print-view">
	  <div class="bt-print__wrap">
		 <div class="bt-print__left">
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
			<ul class="bt-print__meta">
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
			   <li>MLS #: [id]</li>
				<?php endif; ?>
			</ul>
			<table class="bt-print__meta-blocks">
			   <tr>
				<?php if(isset($single_property->acre)): ?>
				  <td>
					 <div class="bt-print__meta-val">[acre]</div>
					 <div class="bt-print__meta-label">Acres</div>
				  </td>
				<?php endif; ?>
				<?php if(isset($single_property->nolots)): ?>
				  <td>
					 <div class="bt-print__meta-val">[nolots]</div>
					 <div class="bt-print__meta-label">APPROVED LOTS</div>
				  </td>
				<?php endif; ?>
			   </tr>
			</table>
			<div class="bt-print__area__wrap">
			   <div class="bt-print__area">
				<?php if(isset($single_property->neighborhood)): ?>
				  <div class="uk-clearfix">
					 <div class="bt-print__area-label">Neighborhood:</div>
					 <div class="bt-print__area-val">[neighborhood]</div>
				  </div>
				<?php endif; ?>
				<?php if(isset($single_property->proptype)): ?>
				  <div class="uk-clearfix">
					 <div class="bt-print__area-label">Type:</div>
					 <div class="bt-print__area-val">[proptype]</div>
				  </div>
				<?php endif; ?>
				<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?>
				  <div class="uk-clearfix">
					 <div class="bt-print__area-label">County:</div>
					 <div class="bt-print__area-val">[lngCOUNTYDESCRIPTION]</div>
				  </div>
				<?php endif; ?>
				<?php if(isset($single_property->lngAREADESCRIPTION)): ?>
				  <div class="uk-clearfix">
					 <div class="bt-print__area-label">Area:</div>
					 <div class="bt-print__area-val">[lngAREADESCRIPTION]</div>
				  </div>
				<?php endif; ?>
			   </div>
			   <div class="bt-print__area">
			   </div>
			</div>
			<?php if(isset($single_property->remarks)): ?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header">Description</h6>
			   <div class="bt-print__description">[remarks]</div>
			</div>
			<?php endif; ?>
			
			<?php if(isset($single_property->direction)): ?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header">Directions</h6>
			   <div class="bt-print__description">[direction]</div>
			</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->cultivationacres) || isset($single_property->pastureacres) || isset($single_property->timberacres) || isset($single_property->ldtype) || isset($single_property->frontage) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header">Land Details</h6>
			   <p>
				  <?php if(isset($single_property->cultivationacres)): ?>
				  <strong>Cultivation Acres</strong>
				  [cultivationacres]
				  <?php endif; ?>
				  <?php if(isset($single_property->pastureacres)): ?>
				  <strong>Pasture Acres</strong>
				  [pastureacres]
				  <?php endif; ?>
				  <?php if(isset($single_property->timberacres)): ?>
				  <strong>Timber Acres</strong>
				  [timberacres]
				  <?php endif; ?>
				  <?php if(isset($single_property->ldtype)): ?>
				  <strong>Land Style</strong>
				  [ldtype]
				  <?php endif; ?>
				  <?php if(isset($single_property->frontage)): ?>
				  <strong>Street Frontage</strong>
				  [frontage]
				  <?php endif; ?>
				  <?php if(isset($single_property->DwellingType)): ?>
				  <strong>Dwelling Type</strong>
				  [DwellingType]
				  <?php endif; ?>
				  <?php if(isset($single_property->foundation)): ?>
				  <strong>Foundation</strong>
				  [foundation]
				  <?php endif; ?>
				  <?php if(isset($single_property->style)): ?>
				  <strong>Style</strong>
				  [style]
				  <?php endif; ?>
				  <?php if(isset($single_property->roofmaterial)): ?>
				  <strong>Roof Material</strong>
				  [roofmaterial]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->Fireplace)): ?>
				  <strong>Fire place</strong>
				  [unmapped_Fireplace]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->CarStorage)): ?>
				  <strong>Car Storage</strong>
				  [unmapped_CarStorage]
				  <?php endif; ?>
				  <?php if(isset($single_property->unmapped->LotSize)): ?>
				  <strong>Lot Size</strong>
				  [unmapped_LotSize]
				  <?php endif; ?>
				  <?php if(isset($single_property->lotdescription)): ?>
				  <strong>Lot Desc</strong>
				  [lotdescription]
				  <?php endif; ?>
				  <?php if(isset($single_property->greencertified)): ?>
				  <strong>Green Certified</strong>
				  [greencertified]
				  <?php endif; ?>
				  <?php if(isset($single_property->handicapaccess)): ?>
				  <strong>Handicap Access</strong>
				  [handicapaccess]
				  <?php endif; ?>
				  <?php if(isset($single_property->electricfeature)): ?>
				  <strong>Electric Feature</strong>
				  [electricfeature]
				  <?php endif; ?>
			   </p>
			</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->gas) || isset($single_property->electricfeature) || isset($single_property->sewer) || isset($single_property->water) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header">Utilities</h6>
			   <p>
				  <?php if(isset($single_property->gas)): ?>
				  <strong>Gas</strong>
				  [gas]
				  <?php endif; ?>
				  <?php if(isset($single_property->electricfeature)): ?>
				  <strong>Electric</strong>
				  [electricfeature]
				  <?php endif; ?>
				  <?php if(isset($single_property->sewer)): ?>
				  <strong>Sewer Utilities</strong>
				  [sewer]
				  <?php endif; ?>
				  <?php if(isset($single_property->water)): ?>
				  <strong>Water Utilities</strong>
				  [water]
				  <?php endif; ?>
			   </p>
			</div>
			<?php endif; ?>
			
			<?php if( isset($single_property->taxes) || isset($single_property->taxyear) || isset($single_property->zoning) ):?>
			<div class="bt-print__block">
			   <h6 class="bt-print__header">Taxes</h6>
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
			   </p>
			</div>
			<?php endif; ?>
			
			<div class="bt-print__block">
			<?php if( $source_details ){
				echo $source_details;
			}else{
				echo 'The data relating to real estate for sale on this web site comes in part from the Broker Reciprocity Program of MLS Property Information Network. All information is deemed reliable but should be independently verified.';
			} ?>
			</div>
		 </div>
		 <div class="bt-print__right">
			<div class="uk-text-small mb-5">&nbsp;</div>
			<div class="bt-print__media-list">
				<?php if ( isset($img[1]) ) echo "<img src='$img[1]' />";?>
				<?php if ( isset($img[2]) ) echo "<img src='$img[2]' />";?>
				<?php if ( isset($img[3]) ) echo "<img src='$img[3]' />";?>
				<?php if ( isset($single_property->lat) && isset($single_property->lng) ): ?><img class="bt-print__google-map" src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=300x200&maptype=roadmap&markers=color:red%7C%7C<?php echo $single_property->lat; ?>,<?php echo $single_property->lng; ?>&style=feature:water|saturation:43|lightness:-11|hue:0x0088ff&style=feature:road|element:geometry.fill|hue:0xff0000|saturation:-100|lightness:99&style=feature:road|element:geometry.stroke|color:0x808080|lightness:54&style=feature:landscape.man_made|element:geometry.fill|color:0xece2d9&style=feature:poi.park|element:geometry.fill|color:0xccdca1&style=feature:road|element:labels.text.fill|color:0x767676&style=feature:road|element:labels.text.stroke|color:0xffffff&style=feature:poi|visibility:off&style=feature:landscape.natural|element:geometry.fill|visibility:on|color:0xb8cb93&style=feature:poi.park|visibility:on&style=feature:poi.sports_complex|visibility:on&style=feature:poi.medical|visibility:on&style=feature:poi.business|visibility:simplified&key=<?php echo za_google_api_key(); ?>"><?php endif; ?>
			</div>
			<?php if( $agent ): ?>
			<div class="bt-print__agent">
			   <div class="bt-cell-align bt-cell-align--small">
				  <?php  if( isset( $agent->imageURL ) ): ?>
				  <div>
					 <img class="bt-image__no-mw bt-print__agent-img" src="<?php echo $agent->imageURL; ?>" />
				  </div>
				  <?php endif; ?>
				  <div class="pl-10">
					 <h6 class="mt-5 mb-0"><?php echo isset( $agent->userName )?$agent->userName:'-'; ?></h6>
					 <?php /* <div class="uk-text-muted">The King Team</div> */ ?>
					 <ul class="uk-list mt-5">
						<li>
						   <strong>Phone:</strong> <?php echo isset( $agent->phone )?$agent->phone:'-'; ?>
						</li>
						<li>
						   <strong>Email:</strong> <?php echo isset( $agent->email )?$agent->email:''; ?>
						</li>
					 </ul>
				  </div>
			   </div>
			</div>
			<?php endif; ?>
		 </div>
	  </div>
   </div>
</div>