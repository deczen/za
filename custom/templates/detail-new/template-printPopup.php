<?php
$contactIds = get_contact_id();
$rb = ZipperagentGlobalFunction()->zipperagent_rb();	
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="za-container">
  <?php /* <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#regusterUserModal">Open Modal</button> */ ?>

	<!-- Modal -->
	<div id="zy_print-popup" class="modal in hideonprint" aria-hidden="false" style="display:none">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">Print Review</div>
					<button type="button" class="close" data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div id="content" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">						
						<div class="zy_print-option">
							<ul>
								<li><input class="zy_print-option" attribute-target="zy-mls-toggle" type="checkbox" checked /> Additional MLS Info</li>
								<?php /* <li><input class="zy_print-option" attribute-target="zy-photos-toggle" type="checkbox" /> Additional Photos</li> */ ?>
								<li><button class="zy_print-now" onclick="print()">Print</button></li>
							</ul>
						</div>
						<div class="zy_print-review">
							<div class="zy_print-view-wrap">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
		jQuery('body').on('click', 'a#zy_open-print-popup', function(e){
			var review = jQuery('.zy_print-view-wrap').html();
			jQuery('#zy_print-popup .zy_print-view-wrap').html(review);
			jQuery('#zy_print-popup').modal('show');
			return false;
			console.log('triggered');
		});	

		jQuery('.zy_print-option').on('change', function(){
			
			var target = jQuery(this).attr('attribute-target');
			var is_checked = jQuery(this).is(":checked");
			console.log('target: '+target);
			if(is_checked){
				jQuery('.'+target).show();
			}else{
				jQuery('.'+target).hide();
			}
		});
	</script>
</div>