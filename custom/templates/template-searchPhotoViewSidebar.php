<?php
global $list, $crit, $search, $searchId;

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
	jQuery('.zpa-listing-search-results').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
		
		var element = jQuery(this);
		
		if( element.hasClass('active') )
			return false;		
		
		var searchId = element.attr('searchId');
		var contactId = element.attr('contactId');
		var listingId = element.attr('listingId');
		save_favorite_listing(element, listingId, contactId, searchId );		
		return false;
	});
	
	function save_favorite_listing(element, listingId, contactId, searchId){
		var crit={
			<?php
			$saved_crit=array();
			if(!$crit){
				$saved_crit=$search;
			}else{
				$temp = explode(';', $crit);
				foreach( $temp as $val ){
					if( empty($val) )
						continue;
					
					$temp2 = explode(':', $val);
					$saved_crit[$temp2[0]]=$temp2[1];
				}
			}
			
			foreach( $saved_crit as $key=>$val ){
				echo "'{$key}': '{$val}',"."\r\n";
			}
			?>
		};
		var data = {
			action: 'save_as_favorite',
			'listingId': listingId,                  
			'contactId': contactId,                    
			'crit': crit,                    
			'searchId': searchId,                    
		};
		
		console.time('save favorite');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['result'] ){
					// alert('success');
					element.addClass('active');
					
					//set topbar count
					jQuery('.favorites-count .za-count-num').html(response['favorites_count']);
				}else{
					// alert( 'Submit failed!' );
				}
				
				console.timeEnd('save favorite');
			},
			error: function(){
				console.timeEnd('save favorite');
			}
		});
	}
</script>

<script>	
	// jQuery('#small-property').stickySidebar({
		// topSpacing: 60,
		// bottomSpacing: 60
	  // });
	 // jQuery(document).ready(function($){		 
		// jQuery("#small-property").stick_in_parent().on("sticky_kit:stick", function(e) {
			// console.log("has stuck!", e.target);
		// })
		// .on("sticky_kit:unstick", function(e) {
			// console.log("has unstuck!", e.target);
		// });
	 // });
	
	
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
					$mapWrapper.css('height', $stickyH);
			}else{
				$stickyH = jQuery(window).outerHeight();
				$mapWrapper.css('height', $stickyH);			
			}
			var $stickyContainer = jQuery('.sticky-container');
			var $stickyContainerOffset = $stickyContainer.offset();
			var $start = $stickyContainerOffset.top;
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
				   $mapWrapper.css('height', $stickyH);
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
			navText: ['<a class="slider-left"><span class="carousel-control"><i class="fa fa-2x fa-chevron-left" role="none"></i></span></a>','<a class="slider-right"><span class="carousel-control"><i class="fa fa-2x fa-chevron-right" role="none"></i></span></a>'],
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