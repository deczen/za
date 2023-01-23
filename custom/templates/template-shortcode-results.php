<?php
global $zpa_show_login_popup;

$contactIds=get_contact_id();
$detect = new Mobile_Detect;
$is_desktop = !$detect->isMobile() && !$detect->isTablet();
$zpa_show_login_popup=1;

$column = isset( $requests['column'] ) ? $requests['column'] : 3;
$maxlist=isset($requests['maxlist']) ? $requests['maxlist'] : $count;
$count=$count>=$maxlist?$maxlist:$count;
$query_args=array();

switch( $column ){
	case 4:
			$columns_code = 'col-lg-3 col-sm-6 col-md-6 col-xs-12';
		break;
	case 1:
			$columns_code = 'col-lg-12 col-sm-12 col-md-12 col-xs-12';
		break;
	case 2:
			$columns_code = 'col-lg-6 col-sm-6 col-md-6 col-xs-12';
		break;
	case 3:
	default:
			$columns_code = 'col-lg-4 col-sm-6 col-md-6 col-xs-12';			
		break;
}
?>
<link rel="stylesheet" href="<?php echo ZIPPERAGENTURL . "css/wp-list-property.css" ?>">
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	
	<div class="zpa-listing-search-results">
		<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->		
		
		<div class="row mt-25 mb-25">
			<?php if( $showResults ): ?>
				<?php if( ! $is_ajax_count ): ?>
				<div class="col-xs-12 prop-total"><?php echo zipperagent_list_total($count, (sizeof($propertyType)==1?$propertyType[0]:'') ); ?></div>
				<?php else: ?>
				<div class="col-xs-12 prop-total">&nbsp;</div>
				<? endif; ?>
			<?php endif; ?>
			
			<div class="col-xs-8">
				<?php if( $enable_filter && isset($requests['save_search']) && $requests['save_search']==1 ): ?>
					<div class="pull-right">
						<button id="savedSearchButton" class="btn btn-sm btn-primary disabled pull-right" style="display: none"> <i class="glyphicon glyphicon-star" role="none"></i> Saved </button>
					</div>
					<button id="saveSearchButton" class="saveSearchButton btn btn-sm btn-primary pull-right" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" data-toggle="modal" data-target="#zpaSaveSearch" afterAction="save_search" contactId="<?php echo implode(',',$contactIds) ?>"> <i class="glyphicon glyphicon-star"></i> Save This Search </button>
				<?php endif; ?>
			</div>
		</div>		
		
		<div class="row ">
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