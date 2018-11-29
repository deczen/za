function($){
	
	var $ = jQuery.noConflict();
	
	$.application = {
		init: function() {
			$.application.views.init()
		}
	}, $.application.views = {
		init: function() {
			$.application.views.init_headroom(), $.application.views.init_carousel(), $.application.views.init_royalslider()
		},
		init_headroom: function() {
			var myElement = document.querySelector(".headroom"),
				scroller = document.querySelector(".wrapper");
			if (!document.getElementById("header-injectable-place")) {
				var headroom = new Headroom(myElement, {
					tolerance: 0,
					offset: 0,
					scroller: scroller,
					classes: {
						initial: "headroom",
						pinned: "headroom--pinned",
						unpinned: "headroom--unpinned"
					}
				});
				headroom.init()
			}
		},
		init_carousel: function() {
			$(".carousel").owlCarousel({
				items: 6,
				margin: 30,
				responsiveClass: !0,
				responsive: {
					0: {
						items: 2
					},
					768: {
						items: 4
					},
					979: {
						items: 5
					},
					1199: {
						items: 6
					}
				}
			})
		},
		init_royalslider: function() {
			$(".slider").royalSlider({
				autoScaleSlider: !1,
				autoHeight: !1,
				loop: !0,
				arrowsNav: !0,
				arrowsNavAutoHide: !0,
				navigateByClick: !0,
				keyboardNavEnabled: !0,
				controlsInside: !0,
				controlNavigation: "none",
				imageScaleMode: "fill",
				thumbsFitInViewport: !1,
				startSlideId: 0,
				slidesSpacing: 0,
				usePreloader: !0,
				numImagesToPreload: 1,
				transitionType: "fade",
				transitionSpeed: 1e3,
				loopRewind: !1,
				easeInOut: "easeInOutSine",
				globalCaption: !1,
				addActiveClass: !0,
				sliderDrag: !0,
				block: {
					delay: 400
				},
				autoPlay: {
					enabled: !1,
					stopAtAction: !0,
					pauseOnHover: !0,
					delay: 5e3
				},
				deeplinking: {
					enabled: !0,
					change: !1
				},
				imgWidth: 2e3,
				imgHeight: 1500
			}), $(window).load(function() {
				$(".slider").royalSlider("updateSliderSize", !0)
			})
		}
	}, $(document).ready(function() {
		$.application.init()
	});
}(jQuery)