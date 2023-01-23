<?php
$contactIds=get_contact_id();
$detect = new Mobile_Detect;
$is_desktop = !$detect->isMobile() && !$detect->isTablet();
?>
<?php if( !isset($infiniteajax) || ! $infiniteajax ): // start not infinite ajax ?>
<div class="zpa-listing-search-results hideonprint">
	<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->			
	<div class="row mb-10">
	</div>
	
	<div class="row mt-25 mb-25">
		<?php
		if(isset($list['totalCount']) && $list['totalCount']==0){
		?>
			<div class="col-xs-4"> No Properties Found </div>
		<?php
		}else if( $showResults ){ ?>
			<?php if( ! $is_ajax_count ): ?>
			<div class="col-xs-12 prop-total"><?php echo zipperagent_list_total($count, (sizeof($propertyType)==1?$propertyType[0]:'') ); ?></div>
			<?php else: ?>
			<div class="col-xs-12 prop-total">&nbsp;</div>
			<? endif; ?>
		<?php } ?>
		<?php /*
		<div class="col-xs-8">			
			
			<?php if( $enable_filter ): ?>
			<div class="pull-right">
				<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star" role="none"></i> <?php if($is_view_save_search) echo "Updated"; else echo "Saved"; ?> </button>
			</div>
			<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="<?php echo implode(',',$contactIds) ?>"> <i class="glyphicon glyphicon-star" role="none"></i> <?php if($is_view_save_search) echo "Update This Search"; else echo "Save This Search"; ?>  </button>
			<?php endif; ?>
		</div> */ ?>
	</div>
	
<?php endif; // end not infinite ajax ?>

	<?php if( !isset($infiniteajax) || ! $infiniteajax ): ?>
	<div id="first-section" class="row list-section">
	<?php endif; ?>
		<?php
		if(isset($list['totalCount']) && $list['totalCount']==0){
			?>
			<div class="mb-10 mt-25">
				<div class="col-xs-4"> No Properties Found </div>
			</div>
			<?php
		}
		?>
		<?php 
		$i=0;
		$wrapOpen=false;
	   
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
					'column' => $column,
					'wrapOpen' => $wrapOpen,
					'total_props' => sizeof($list),
					'is_desktop' => $is_desktop,
					'columns_code' => $columns_code,
				),
				$requests, 
				$searchId,
				$contactIds,
				$search
			);
			
			extract( $params );
			
			$i++;
		endforeach; ?>
		
	<?php if( !isset($infiniteajax) || ! $infiniteajax ): ?>   
	</div>
	<?php endif; ?>
	
<?php if( !isset($infiniteajax) || ! $infiniteajax ): // start not infinite ajax ?>	
	
	<div id="loadmore" pagenumber="<?php echo $page ?>"><img style="display:none; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" /></div>
	
	<?php
	$listing_disclaimer = zipperagent_get_listing_disclaimer();
	?>
	<?php if( $listing_disclaimer ): ?>
	<div class="row">
		<div class="col-xs-12">
			<span class="listing-disclaimer" role="none"><?php echo $listing_disclaimer ?></span>
		</div>
		<!--col-->
	</div>
	<?php endif; ?>
	
</div>

<script>

	jQuery( '.zpa-grid-result-photocount > a' ).on( 'click', function(){
		
		var listingId=jQuery(this).attr('listingId');
		
		if( ! jQuery('#modal-'+listingId+' .modal-body').is(':empty') )
			return;
		
		var data = {
			action: 'get_property_slides',
			'listingId': listingId,                      
			'contactId': '<?php echo implode(',',$contactIds) ?>',                      
		};
		
		jQuery('#modal-'+listingId+' .modal-body').html('<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/tenor.gif"; ?>" alt="tenor" />');
		
		console.time('generate slides');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['html'] ){
					jQuery('#modal-'+listingId+' .modal-body').html(response['html']);
				}
				console.timeEnd('generate slides');
			},
			error: function(){
				console.timeEnd('generate slides');
			}
		});
	});
	
</script>
<?php if(zipperagent_infinite_loop()): ?>
<script>
	(function($){

	  $.fn.endlessScroll = function(options) {

		var defaults = {
		  bottomPixels: 50,
		  fireOnce: true,
		  fireDelay: 150,
		  loader: "<br />Loading...<br />",
		  data: "",
		  insertAfter: "div:last",
		  resetCounter: function() { return false; },
		  callback: function() { return true; },
		  ceaseFire: function() { return false; }
		};

		var options = $.extend({}, defaults, options);

		var firing       = true;
		var fired        = false;
		var fireSequence = 0;

		if (options.ceaseFire.apply(this) === true) {
		  firing = false;
		}

		if (firing === true) {
		  $(this).scroll(function() {
			if (options.ceaseFire.apply(this) === true) {
			  firing = false;
			  return; // Scroll will still get called, but nothing will happen
			}

			if (this == document || this == window) {
			  var is_scrollable = $(document).height() - $(window).height() <= $(window).scrollTop() + options.bottomPixels;
			} else {
			  // calculates the actual height of the scrolling container
			  var inner_wrap = $(".endless_scroll_inner_wrap", this);
			  if (inner_wrap.length == 0) {
				inner_wrap = $(this).wrapInner("<div class=\"endless_scroll_inner_wrap\" />").find(".endless_scroll_inner_wrap");
			  }
			  var is_scrollable = inner_wrap.length > 0 &&
				(inner_wrap.height() - $(this).height() <= $(this).scrollTop() + options.bottomPixels);
			}

			if (is_scrollable && (options.fireOnce == false || (options.fireOnce == true && fired != true))) {
			  if (options.resetCounter.apply(this) === true) fireSequence = 0;

			  fired = true;
			  fireSequence++;

			  $(options.insertAfter).after("<div id=\"endless_scroll_loader\">" + options.loader + "</div>");

			  data = typeof options.data == 'function' ? options.data.apply(this, [fireSequence]) : options.data;

			  if (data !== false) {
				$(options.insertAfter).after("<div id=\"endless_scroll_data\">" + data + "</div>");
				$("div#endless_scroll_data").hide().fadeIn();
				$("div#endless_scroll_data").removeAttr("id");

				options.callback.apply(this, [fireSequence]);

				if (options.fireDelay !== false || options.fireDelay !== 0) {
				  $("body").after("<div id=\"endless_scroll_marker\"></div>");
				  // slight delay for preventing event firing twice
				  $("div#endless_scroll_marker").fadeTo(options.fireDelay, 1, function() {
					$(this).remove();
					fired = false;
				  });
				}
				else {
				  fired = false;
				}
			  }

			  $("div#endless_scroll_loader").remove();
			}
		  });
		}
	  };

	})(jQuery);


	// Script
	jQuery(document).ready(function($) {
		
		$(document).endlessScroll({
			// fireOnce: false,
			// fireDelay: false,
			// insertAfter: '#loadmore',
			inflowPixels: 300,
			// data: function(i) {			
			callback: function() {
				var listing;
				<?php /* var pagenumber=<?php echo $page ?> + $('.list-section').length; */ ?>
				var pagenumber=parseInt($('#loadmore').attr('pagenumber')) + 1;
				
				if(pagenumber && ! $('#loadmore').hasClass('loading')){
					
				
					var data = {
						action: 'load_more_properties',
						'pagenum': pagenumber,
						<?php
						$excludes = array('pagenum','action', 'actual_link');
						if( isset($requests) && sizeof($requests) ){
							foreach( $requests as $var=>$val ){
								
								if( in_array($var, $excludes ))
									continue;
								
								if( is_array( $val ) ){
									echo "'". strtolower($var) ."': ['". implode( "', '", $val ) ."'],"."\r\n";
								}else{					
									echo "'". strtolower($var) ."': '{$val}',"."\r\n";
								}
							}
						}
						?>
					};
					
					listing = '';
					$('#loadmore img').show();
					$('#loadmore').addClass('loading');
					
					console.time('generate list');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
							// console.log(response);
							if( response['html'] ){
								listing=response['html'];
								pagenumber = response['pagenum'];
								
								// $(listing).insertAfter('#first-section');
								$("#first-section").append(listing);
								$('#loadmore img').hide();
								$('#loadmore').removeClass('loading');
								$('#loadmore').attr('pagenumber', pagenumber);
							}else{
								$('#loadmore img').hide();
								$('#loadmore').removeClass('loading');
								$('#loadmore').attr('pagenumber', pagenumber);
							}
							
							console.timeEnd('generate list');
						},
						error: function(){
							console.timeEnd('generate list');
						}
					});
				}
			}
		});
	});
</script>
<?php endif; ?>

<?php endif; // end is not infinite ajax ?> 
<?php
include ZIPPERAGENTPATH . "/custom/templates/listing/template-list-print.php";