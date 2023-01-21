<?php
global $requests, $crit;

$query_args=array();
$rb = ZipperagentGlobalFunction()->zipperagent_rb();

$contactIds=get_contact_id();
?>
<div class="row ">
<?php 
	$i=0;
	foreach( $list as $option ): ?>
		<?php 				
		
		if( $open )
			$property=isset($option->mergedProperty)?$option->mergedProperty:null;
		else
			$property=$option;
		
		if( !isset($property->id) )
			continue;
		
		$params = zipperagent_property_grid( 
			$property, 
			array( 
				'i' => $i,
				'column' => 1,
				'wrapOpen' => false,
				'total_props' => sizeof($list),
				'is_desktop' => 0,
				'columns_code' => 'col-lg-12 col-sm-12 col-md-12 col-xs-12',
			),
			$requests, 
			$searchId, 
			$search
		);
		
		extract( $params );		

		$i++;
	endforeach; ?>
</div>
<script>		
	jQuery(document).ready(function(){
		
		jQuery(window).bind( 'scroll', function() {
			var $sticky = jQuery('#small-property');
			var $mapWrapper = $sticky;
			var $top = 0;
			var $stickyH;
			if(jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').length){
				var $headerHeight = jQuery('.edgtf-fixed-wrapper .edgtf-vertical-align-containers').outerHeight();
					$top = $top + $headerHeight;
					$stickyH = jQuery(window).outerHeight() - $headerHeight;
			}else if(jQuery('#main-header.et-fixed-header').length){ //Divi
				var $topheaderHeight = jQuery('#top-header.et-fixed-header').outerHeight();
				var $headerHeight = jQuery('#main-header.et-fixed-header').outerHeight();
					$top = $top + $topheaderHeight + $headerHeight;
					$stickyH = jQuery(window).outerHeight() - $topheaderHeight - $headerHeight;
			}else if(jQuery('body.et_fixed_nav #main-header').length){ //Divi new
				var $topheaderHeight = jQuery('body.et_fixed_nav #top-header').outerHeight();
				var $headerHeight = jQuery('body.et_fixed_nav #main-header').outerHeight();
					$top = $top + $topheaderHeight + $headerHeight;
					$stickyH = jQuery(window).outerHeight() - $topheaderHeight - $headerHeight;
			}else{
				$stickyH = jQuery(window).outerHeight();		
			}
			if(jQuery('#wpadminbar').length){
				var $wpadminbarHeight = jQuery('#wpadminbar').outerHeight();
					$top = $top + $wpadminbarHeight;
			}
			
			var $searchBarHeight = jQuery('#omnibar-tools.fixedheader').length ? jQuery('#omnibar-tools').outerHeight() : 0;
		
			$top = $top + $searchBarHeight;
			
			$mapWrapper.css('height', jQuery(window).outerHeight() - $top);	
			
			var $stickyContainer = jQuery('.sticky-container');
			var $stickyContainerOffset = $stickyContainer.offset();
			var $start = $stickyContainer.length?$stickyContainerOffset.top:0;
			var $limit = $start + $stickyContainer.outerHeight();
			var $padding = 0; // padding size;
			var $maxWidth = $sticky.outerWidth() + $padding;	
			
			if(jQuery(window).width() > 768){
			   if (jQuery(window).scrollTop() > $start - $top && jQuery(window).scrollTop() <= $limit - $stickyH - $top) {
				   $sticky.css({
				   'position':'fixed', 
				   'top': $top,
				   'max-width' : $maxWidth
				   });
			   }
			   else if (jQuery(window).scrollTop() > $limit - $stickyH - $top) {
				   $sticky.css({
						   'position': 'absolute',
						   'top'     : 'auto',
						   'bottom'  : 0
					   });
			   }
			   else {
				   $sticky.css({
					'position' : 'static',
					'max-width' : '100%'});
				   $maxWidth = $sticky.outerWidth() + $padding;
				   $mapWrapper.css('height', jQuery(window).outerHeight() - $top);
			   }
			}
		});
	});
</script>
<script>
jQuery(document).ready(function ($) {
	// reference for main items
	var mainSlider=new Array();
	//transition time in ms
	var duration = 500;
	var index=0;
	
	index=0;
	$('.photo-carousel').each(function(){
		var slider = $(this);
		mainSlider.push(slider);
	});
	index=0;
	
	// carousel function for main slider
	index=0;
	$('.photo-carousel').each(function(){
		
		var tempMainSlider = mainSlider[index];
		
		// console.log('current index: '+index);
		tempMainSlider.owlCarousel({
			loop:false,
			nav:true,
			navText: ['<a class="slider-left"><span class="carousel-control"><i class="fa fa-2x fa-angle-left" role="none"></i></span></a>','<a class="slider-right"><span class="carousel-control"><i class="fa fa-2x fa-angle-right" role="none"></i></span></a>'],
			lazyLoad:true,
			items:1,
			dots: false,
			slideBy: 1,
		}).on('changed.owl.carousel', function (e) {
			//On change of main item to trigger thumbnail item
			
			//These two are navigation for main items
		})
		
		index++;
	});
});
</script>