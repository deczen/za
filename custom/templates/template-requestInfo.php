<?php
global $single_property;

$contactIds=get_contact_id();
$searchId = isset($_GET['searchId'])?$_GET['searchId']:'';
$login='';

$assignedTo = get_current_user_assigned_agent();
if($assignedTo){
	$login = $assignedTo;
}
else if( isset( $single_property->listagent ) || isset( $single_property->saleagent ) ){
	$mlsid = isset($single_property->saleagent) ? $single_property->saleagent : '';
	
	$agent = $mlsid?zipperagent_get_agent($mlsid):false;
	
	if(!$agent){
		$mlsid = isset($single_property->listagent) ? $single_property->listagent : '';
		if($mlsid)
			$agent = zipperagent_get_agent($mlsid);
	}
	// $agent = zipperagent_get_agent("G0003031");
	// $agent = zipperagent_get_agent("BB981188");
	if( $agent )
		$login = $agent->login;
}

if(zp_using_criteria()){	
	$criteriaBase64 = isset($_GET['criteria'])?$_GET['criteria']:'';
}else{
	$criteriaBase64 = isset($_SESSION['criteriaBase64'])?$_SESSION['criteriaBase64']:'';		
}
$saved_crit = !empty($criteriaBase64)?unserialize(base64_decode($criteriaBase64)):array();
?>
<div class="za-container">
	<div id="zpaMoreInfo" class="modal in" aria-hidden="false" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">Request More Information&nbsp;</div>
					<button type="button" class="close" data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div class="zpa-modal-more-info-replace" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">
						<div class="row mt-10 hidden-xs">
							<div class="col-xs-12"> <strong> </strong> </div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<form id="zpa-more-info-request-form" class="form-inline" data-zpa-event="more-info-request-form-submit" data-zpa-event-bound="true">
									<input id="listingNumber" name="listno" type="hidden" value="<?php echo $single_property->id; ?>">
									<input id="searchId" name="searchId" type="hidden" value="<?php echo $searchId; ?>">
									<input id="contactId" name="contactId" type="hidden" value="<?php echo implode(',',$contactIds); ?>">
									<input type="hidden" name="contactType" value="moreInfo">
									<input name="login" value="<?php echo $login ?>" type="hidden">
									<?php /* <input name="crit[asrc]" value="<?php echo $rb['web']['asrc'] ?>" type="hidden"> */ ?>
									<input name="action" value="request_info" type="hidden">
									<?php /*
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_firstname"> First Name* </label>
												<input id="zpa_inforeq_firstname" name="firstName" class="form-control" required="required" type="text" value="Decz"> </div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_lastName"> Last Name* </label>
												<input id="zpa_inforeq_lastName" name="lastName" class="form-control" required="required" type="text" value="DK"> </div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_email"> Email* </label>
												<input id="zpa_inforeq_email" name="newEmail" type="email" class="form-control" required="required" value="deczen@gmail.com"> </div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_phone"> Phone * </label>
												<input id="zpa_inforeq_phone" name="phone" type="tel" class="form-control" value="852481999001" autocomplete="off"> </div>
										</div>
									</div> */ ?>
									<div class="row mt-10">
										<div class="col-xs-12">
											<!--<label for="zpa_schedshow_comments"> Type your question here </label>-->
											<textarea id="zpa_schedshow_comments" placeholder="Add your message." name="question" style="height:100px; width:100%;" class="form-control" rows="5" required="required"></textarea>
										</div>
									</div>
									<?php /*
									<div class="row mt-10">
										<div class="col-xs-12 zpa-modal-form-disclaimer"> *Required fields. Your personal information is strictly confidential and will not be shared with any outside organizations.
											<br>
											<br>By submitting this form with your telephone number you are consenting for Keller William Realty Chestnut Hill and authorized representatives to contact you even if your name is on the Federal "Do-not-call List." </div>
									</div> */ ?>
									<button type="submit" class="btn btn-primary mt-10 zpa-more-info-submit">Send Request</button>
									<div> </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-link" data-dismiss="modal"> Close </button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	
	jQuery('body').on('click', '.request-info-btn:not(.needLogin), .zy_request-showing:not(.needLogin)', function(e){
		jQuery('#zpaMoreInfo').modal('show');
	});
	
	jQuery( '#zpa-more-info-request-form' ).on( 'submit', function(){
		
		if( jQuery('#zpa_schedshow_comments').val()=="" )
			return false;
		
		var data = jQuery(this).serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
		// var data = objectifyForm( formArray );
		
		jQuery('#zpaMoreInfo #zpa-more-info-request-form').css('opacity', 0.5);
		jQuery('#zpaMoreInfo #zpa-more-info-request-form').css('pointer-events', 'none');
		
		var crit={
			<?php				
			foreach( $saved_crit as $key=>$val ){
				echo "'{$key}': '{$val}',"."\r\n";
			}
			?>
		};
		data['crit']=crit;
		
		console.time('request info');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {
				// console.log(response);
				if( response['result'] ){
					jQuery('#zpaMoreInfo .modal-header .modal-title').html('Thank You');
					jQuery('#zpaMoreInfo .modal-body .zpa-modal-more-info-replace').html('<p>Your message has been submitted. Someone will follow-up with you as soon as possible.</p>');
				}else{
					alert( 'Submit failed!' );
				}
				
				jQuery('#zpaMoreInfo #zpa-more-info-request-form').css('opacity', 1);
				jQuery('#zpaMoreInfo #zpa-more-info-request-form').css('pointer-events', 'initial');
				
				console.timeEnd('request info');
			},
			error: function(){
				console.timeEnd('request info');
			}
		});
		
		return false;
	});
</script>
<script>
	jQuery(document).ready(function () {
		jQuery('#zpa-more-info-request-form').validate();
	});
</script>