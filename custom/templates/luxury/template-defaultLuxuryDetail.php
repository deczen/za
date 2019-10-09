<?php
global $single_luxury;

// echo "<pre>"; print_r($single_luxury); echo "</pre>";
$properties = $single_luxury->properties;
?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	<div id="zpa-main-container">
		<article class="listing-detail listing-wrapper js-listing-detail">
			<div class="uk-sticky-placeholder" style="margin: 0px;">
				<header class="zy-listing__header js-listing__header uk-active" data-uk-sticky="{media: 768}">
					<div class="grid--wrapper uk-position-relative">
						<a class="zy-back-to-search js-back-to-search" href="javascript:history.back()"><i class="zy-icon fa fa-chevron-left" aria-hidden="true"></i></a>
						<div class="grid grid--noWrap zy-header__inner">
							<div class="cell">
								<div class="grid grid--gutters">
									<div class="cell cell-md-12 cell-lg-12 cell-xs-12">
										<div class="zy-listing__header-grid">

											<div class="mb-0">
												<h1 class="uk-h2 mt-5 mb-0 listing-address at-prop-addr-txt">
													<span> <?php echo $single_luxury->name; ?> </span></h1>
												<div class="zy-listing__locations-list uk-text-muted my-0 at-city-state-zip-txt">
													<span><?php echo zipperagent_luxury_address($single_luxury); ?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end .grid -->
							</div>
						</div>
					</div>
					<!-- end grid wrapper -->
				</header>
			</div>
			<div class="">
				<section class="mt-15 listing-content">
					<div id="listing-top-wrapper">
						<div id="gallery-column" class="cell cell-xs-12 cell-lg-12 mb-15">
						
							<?php
							$images=array();
							foreach($properties as $single_property){
								if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) )
									$images[]=(object)array('imgurl'=>$single_property->photoList[0]->imgurl);
							}
							
							if( sizeof( $images ) ): ?>
												
							<link rel="stylesheet" href="<?php echo zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">						
							<div class="row">
								<div class="col-xs-12 zpa-property-photo" style="margin-top:0">
									<div class="owl-carousel-container">
										<div class="top-head-carousel-wrapper">
											<div class="owl-carousel top-head-carousel <?php if( ! getCurrentUserContactLogin() ) echo "needLogin"; ?>">
												<?php
												$i=0;
												foreach ($images as $pic ){ ?>
													<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
														<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}" ?>')" class="owl-slide"><img class="printonly" src="<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}" ?>" /></div>
													<?php else: ?>
														<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="owl-slide"><img class="printonly" src="<?php echo $pic->imgurl; ?>" /></div>
													<?php endif; ?>
													<?php 
													$i++;
												}
												?>
											</div>
											<div class="left-nav"><i class="icon-left-arrow"></i>
											</div>
											<div class="right-nav"><i class="icon-right-arrow"></i>
											</div>
										</div>
										<div class="carousel-controller-wrapper" style="padding:0">
											<div class="owl-carousel carousel-controller carousel-autoplay" style="padding:1em">
												<?php
												$i=0;
												foreach ($images as $pic ){ ?>
													<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
														<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=150&h=150&n={$i}" ?>')" class="item"></div>
													<?php else: ?>
														<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="item"><img class="printonly" src="<?php echo $pic->imgurl; ?>" /></div>
													<?php endif; ?>
													<?php 
													$i++;
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
										dots: true,
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
									var count=<?php echo $_SESSION['za_image_clicked'] ? (int) $_SESSION['za_image_clicked'] : 0; ?>;
									var limit='<?php echo zipperagent_slider_limit_popup(); ?>';
									var preventDouble=0;
									$topHeadCarousel.on('changed.owl.carousel', function(event) {
										
										if(preventDouble){
											preventDouble=0;
											return;
										}
										
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
										
										preventDouble=1;
									});
									<?php endif; ?>
								})(jQuery)
							</script>
							<?php endif; ?>

							
						</div>
					</div>

					<aside class="my-15">
						<div class="description">


							<h3 class="zy-listing__headline mt-15 at-desc-header">Description</h3>
							<p class="at-desc-body"><?php echo isset($single_luxury->description) ? $single_luxury->description : 'no description.'; ?></p>


						</div>
					</aside>
					
					<aside class="my-15">
						<h3 class="zy-listing__headline">Properties</h3>
						<?php zipperagent_luxury_table($single_luxury); ?>
					</aside>			
				</section>
			</div>
		</article>
	</div>
</div>