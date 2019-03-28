<?php

global $list, $crit, $search, $searchId, $requests;

$query_args=array();
$rb = zipperagent_rb();

if( $list ): ?>

<div id="gallery-view" class="zpa-container " style="display: inline;">
			
	<?php include ZIPPERAGENTPATH . '/custom/templates/listing/template-defaultListing.php'; ?>
	
	<?php // include ZIPPERAGENTPATH . '/custom/templates/template-needLogin.php'; ?>
</div>

<?php else: ?>

	<div id="zpa-main-container" class="zpa-container " style="display: inline;"">
		
		<div class="zpa-listing-search-results">
			<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->
			
			<div class="row mb-10 mt-25">
				<div class="col-xs-4"> No Properties Found </div>
			</div>
			<div class="row "> </div>
			<div class="row">
				<div class="col-xs-6">
					<ul class="pagination">
						<li class="disabled"><a href="#">&laquo;</a>
						</li>
						<li class="disabled"><a href="#">1 of 0</a>
						</li>
						<li class="disabled"><a href="#">&raquo;</a>
						</li>
					</ul>
				</div>
				<!--col-->
			</div>
			<!--row-->
		</div>
		
		<?php // include "template-registerUser.php"; ?>
	</div>
<?php endif;

/**
 * SCRIPTS HANDLER
 * @ javascript
 */
?>

<script>
	jQuery('.zpa-listing-search-results').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
		
		var element = jQuery(this);
		
		if( element.hasClass('active') )
			return false;		
		
		var searchId = element.attr('searchId');
		var contactId = element.attr('contactId');
		var listingId = element.attr('listingId');
		var isLogin = element.attr('isLogin');
		
		save_favorite_listing(element, listingId, contactId, searchId, isLogin );		
		return false;
	});
	
	function save_favorite_listing(element, listingId, contactId, searchId, isLogin){
		
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
			'isLogin': isLogin,
		};
		
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
			}
		});
	}
</script>
<?php if($is_ajax_count): ?>
<script>
	jQuery(document).ready(function(){
		var vars={
			<?php 
			foreach($vars as $key=>$val){
				echo "$key: '$val',"."\r\n";
			}			
			?>
		};
		
		var data = {
			action: 'prop_result_and_pagination',
			'vars': vars,
			'page': '<?php echo $page; ?>',
			'num': '<?php echo $num; ?>',
			'actual_link': '<?php echo $actual_link; ?>',
		};
		
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
			
				if( response['result'] ){
					jQuery('.zpa-listing-search-results .prop-total').html(response['html_count']);
					jQuery('.zpa-listing-search-results .prop-pagination').html('<div class="col-xs-6">' + response['html_pagination'] + '</div>');
				}
			}
		});
	});
</script>
<?php endif; ?>
<?php auto_trigger_button_script(); ?>