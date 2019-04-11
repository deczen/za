<?php
global $post;

$postmeta = get_post_meta( $post->ID );
$galleries = isset($postmeta['_lp_gallery'])?$postmeta['_lp_gallery']:array();

$is_listing =isset($postmeta['_lp_listid'])?1:0;

$listid = isset($postmeta['_lp_listid'][0])?$postmeta['_lp_listid'][0]:false;
$single_property= $is_listing ? get_single_property($listid) : false;

if(!$single_property){
	$is_listing=0;
}
// print_r($postmeta);
// echo "test gallery";

?>

<div id="zpa-main-container">					
	<?php if( isset( $galleries ) && sizeof( $galleries ) ): ?>
						
	<link rel="stylesheet" href="<?php echo zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">						
	<div class="row">
		<div class="col-xs-12 zpa-property-photo">
			<div class="owl-carousel-container">
				<div class="top-head-carousel-wrapper">
					<div class="owl-carousel top-head-carousel">
						<?php if( !$is_listing): ?>
						<?php
						$i=0;
						foreach ($galleries as $attachment_id ){ 
							$imgurl = wp_get_attachment_image_src($attachment_id, 'large');
							$imgurl = isset($imgurl[0])?$imgurl[0]:'';
							?>							
							<div style="background-image: url('<?php echo $imgurl; ?>')" class="owl-slide"></div>
							<?php 
							$i++;
						}
						?>
						<?php else: ?>
						<?php
						if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
							$i=0;
							foreach ($single_property->photoList as $pic ){ ?>
								<?php if( strpos($pic->imgurl, 'mlspin.com') !== false ): ?>
									<div style="background-image: url('<?php echo "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}" ?>')" class="owl-slide"></div>
								<?php else: ?>
									<div style="background-image: url('<?php echo $pic->imgurl; ?>')" class="owl-slide"></div>
								<?php endif; ?>
							<?php 
							$i++;
							}
						} ?>
						<?php endif; ?>
					</div>
					<div class="left-nav"><i class="icon-left-arrow"></i>
					</div>
					<div class="right-nav"><i class="icon-right-arrow"></i>
					</div>
				</div>
				<div class="carousel-controller-wrapper">
					<div class="owl-carousel carousel-controller carousel-autoplay">
						<?php if( !$is_listing): ?>
						<?php
						$i=0;
						foreach ($galleries as $attachment_id ){ 
							$imgurl = wp_get_attachment_image_src($attachment_id, 'thumbnail');
							$imgurl = isset($imgurl[0])?$imgurl[0]:'';
							?>		
							<div style="background-image: url('<?php echo $imgurl; ?>')" class="item"></div>
							<?php 
							$i++;
						}
						?>
						<?php else: ?>
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
						<?php endif; ?>
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