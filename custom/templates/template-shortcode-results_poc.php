<?php
global $zpa_show_login_popup;

$contactIds=get_contact_id();
$detect = new Mobile_Detect;
$is_desktop = !$detect->isMobile() && !$detect->isTablet();
$zpa_show_login_popup=1;
$count=0;
$column = isset( $requests['column'] ) ? $requests['column'] : 3;
$maxlist=isset($requests['maxlist']) ? $requests['maxlist'] : $count;
$count=$count>=$maxlist?$maxlist:$count;
$query_args=array();
?>
<link rel="stylesheet" href="<?php echo ZIPPERAGENTURL . "css/wp-list-property.css" ?>">
<script type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutil.min.js"></script>
<script type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js" ?>"></script>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	
	<div class="zpa-listing-search-results">
		<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->		
		
		<div class="row mb-10 mt-25">
			<?php if( $showResults ): ?>
				<div class="col-xs-4 prop-total"></div>
			<?php endif; ?>
			
			<div class="col-xs-8">
				<?php if( $enable_filter && isset($requests['save_search']) && $requests['save_search']==1 ): ?>
					<div class="pull-right">
						<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star"></i> Saved </button>
					</div>
					<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="<?php echo implode(',',$contactIds) ?>"> <i class="glyphicon glyphicon-star"></i> Save This Search </button>
				<?php endif; ?>
			</div>
		</div>		
		
		<div class="row props">
			<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" />
		</div>
		
		<?php if( $showPagination ): ?>
			<?php if( ! $is_ajax_count ): ?>
			<div class="row prop-pagination">
				<div class="col-xs-6">				
					<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
				</div>
				<!--col-->
			</div>
			<!--row-->
			<?php else: ?>
			<div class="row prop-pagination"></div> <!-- show on ajax -->
			<?php endif; ?>
		<?php endif; ?>
		
		<?php
		$listing_disclaimer = zipperagent_get_listing_disclaimer();
		?>
		<?php if( $listing_disclaimer ): ?>
		<div class="row">
			<div class="col-xs-12">
				<span class="listing-disclaimer"><?php echo $listing_disclaimer ?></span>
			</div>
			<!--col-->
		</div>
		<?php endif; ?>
		
	</div>
		
	<script>

		jQuery( 'body' ).on( 'click', '.zpa-grid-result-photocount > a', function(){
			
			var listingId=jQuery(this).attr('listingId');
			
			if( ! jQuery('#modal-'+listingId+' .modal-body').is(':empty') )
				return;
			
			var data = {
				action: 'get_property_slides',
				'listingId': listingId,                      
				'contactId': '<?php echo implode(',',$contactIds) ?>',                      
			};
			
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
	
	<?php // include ZIPPERAGENTPATH . '/custom/templates/template-needLogin.php'; ?>
</div>