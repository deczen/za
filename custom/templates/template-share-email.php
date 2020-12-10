<?php
global $single_property;

$contactIds=get_contact_id();
$company_name = zipperagent_company_name();
$listing_address=zipperagent_get_address($single_property);
if($company_name)
$default_subject = $company_name. ', ' .$listing_address;
else
$default_subject = $listing_address;
$price=is_object($single_property)?(in_array($single_property->status, explode(',',zipperagent_sold_status()))?(isset($single_property->saleprice)?$single_property->saleprice:$single_property->listprice):$single_property->listprice):0;
$listing_price = zipperagent_currency() . number_format_i18n( $price, 0 );
$site_domain = $_SERVER['HTTP_HOST'];
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $default_body = "Take a look at this property I found on {$site_domain}: {$actual_link}";
$default_body = "Take a look at this property I found on: {$actual_link}";
$listingId = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
?>
<div class="za-container">
	<div id="zpaShareEmail" class="modal in" aria-hidden="false" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">&nbsp;</div>
					<button type="button" class="close" data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div id="content" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">						
						<div class="row mt-10">
							<div class="col-xs-12">
								<div class="panel panel-default">
									<div class="panel-heading"> <strong> Email this Listing </strong> </div>
									<div class="panel-body">
										<form id="zpa-modal-share-email-form" class="form-inline" action="" method="GET">
											<div class="row">
												<div class="col-xs-12 col-sm-12">
													<h3 class="share-email-title">Email This Listing</h3>
													<div class="share-email-caption">
														<span><?php echo $listing_address; ?></span>
													</div>
													<div class="listing-price">
														<span><?php echo $listing_price; ?></span>
													</div>
												</div>
											</div>
											<div class="row mt-25">
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
													<div class="form-group">
														<label for="share-recepient-name"> Recipient Name<span class="required-mark">*</span> </label>
														<input id="share-recepient-name" name="recepient_name" class="form-control" required="required" type="text" placeholder="recipient name" value=""> </div>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
													<div class="form-group">
														<label for="share-recepient-email"> Recipient Email(s)<span class="required-mark">*</span> </label>
														<input id="share-recepient-email" name="recepient_emails" type="text" class="form-control" required="required" placeholder="Separated by comma" value=""> </div>
												</div>
											</div>
											
											<div class="row mt-10">
												<div class="col-xs-12">
													<div class="form-group">
														<label for="share-subject"> Email Subject<span class="required-mark">*</span> </label>
														<input id="share-subject" name="email_subject" type="text" class="form-control" required="required" value="<?php echo $default_subject; ?>"> </div>
												</div>
											</div>
											
											<div class="row mt-10">
												<div class="col-xs-12">
													<div class="form-group">
														<label for="share-body"> Email Body </label>
														<span class="default-body"><?php echo $default_body; ?></span>
														<textarea id="share-body" name="email_body" class="form-control" maxlength="200"></textarea>
														<span class="add-comment-text">Additional Comments (200 character max)</span>
													</div>
												</div>
											</div>
											
											<div class="row mt-10">
												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<div class="checkbox">
															<label class="field-label">
																<input name="send_copy" type="checkbox" class="form-control" value="1"> send copy of this email to me</label>
														</div>
													</div>
												</div>
											</div>
											
											<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds) ?>" />
											<input type="hidden" name="action" value="share_email" >									
											<input type="hidden" name="listingId" value="<?php echo $listingId; ?>" >									
											<input type="hidden" name="default_body" value="<?php echo $default_body; ?>" >									
											<button type="submit" class="btn btn-primary mt-10">Send Email</button>
											<div class="clearfix"></div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php /* <div class="modal-footer">
				<button class="btn btn-link" data-dismiss="modal"> Close </button>
			</div> */ ?>
		</div>
	</div>
</div>
<script>
	
	jQuery('body').on('click', '.share-email:not(.needLogin)', function(e){
		jQuery('#zpaShareEmail').modal('show');
	});
	
	jQuery( '#zpa-modal-share-email-form' ).on( 'submit', function(){
		
		var data = jQuery(this).serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
		// var data = objectifyForm( formArray );
		
		jQuery('#zpaShareEmail #zpa-modal-share-email-form').css('opacity', 0.5);
		jQuery('#zpaShareEmail #zpa-modal-share-email-form').css('pointer-events', 'none');
		
		console.time('share email');
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {
				// console.log(response);
				if( response['result'] ){
					jQuery('#zpaShareEmail .modal-header .modal-title').html('Thank You');
					jQuery('#zpaShareEmail .modal-body #content').html('<p>Your Email was sent.</p>');
				}else{
					alert( 'Submit failed!' );
				}
				
				jQuery('#zpaShareEmail #zpa-modal-share-email-form').css('opacity', 1);
				jQuery('#zpaShareEmail #zpa-modal-share-email-form').css('pointer-events', 'initial');
				
				console.timeEnd('share email');
			},
			error: function(){
				console.timeEnd('share email');
			}
		});
		
		return false;
	});
</script>
<script>
	jQuery(document).ready(function () {
		// jQuery('#zpa-modal-share-email-form').validate();
	});
</script>