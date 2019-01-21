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
		save_favorite(element, listingId, contactId, searchId );		
		return false;
	});
	
	function save_favorite(element, listingId, contactId, searchId){
		
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
				}else{
					// alert( 'Submit failed!' );
				}
			}
		});
	}
</script>