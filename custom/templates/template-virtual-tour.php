<div class="za-container">
	<div id="zpaVirtualShowing" class="modal in" aria-hidden="false" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">Virtual Tour</div>
					<button type="button" class="close" data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div class="zpa-virtual-tour" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery('body').on('click', '.virtual-tour-open', function(e){
		
		var zpiframe = jQuery(this).attr('content-iframe');
		
		jQuery('#zpaVirtualShowing .zpa-virtual-tour').html(decodeURIComponent(zpiframe));
		jQuery('#zpaVirtualShowing').modal('show');
		
		// console.log(zpiframe);
		
	});
</script>