<?php
$contactIds=get_contact_id();

?>
<div class="za-container">
  <?php /* <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#regusterUserModal">Open Modal</button> */ ?>

  <!-- Modal -->
 <div id="regusterUserModal" class="modal in" <?php if(!zipperagent_signup_optional()): ?>data-backdrop="static" data-keyboard="false"<?php endif; ?> aria-hidden="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">User Registration</div>
					<button type="button" class="close" <?php if(!zipperagent_signup_optional()): ?>style="display:none"<?php endif; ?> data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div id="content" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">						
						
						<div class="row mt-10">
							<div class="col-xs-12">
								<form id="zpa-modal-register-user-form" class="form-inline" data-zpa-event="save-search-form-submit" action="" method="GET" data-zpa-event-bound="true">
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="za_inforeq_firstname"> First Name<span class="required-mark">*</span> </label>
												<input id="za_inforeq_firstname" name="firstName" class="form-control" required="required" type="text" value=""> </div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="za_inforeq_lastName"> Last Name<span class="required-mark">*</span> </label>
												<input id="za_inforeq_lastName" name="lastName" class="form-control" required="required" type="text" value=""> </div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="za_inforeq_email"> Email<span class="required-mark">*</span> </label>
												<input id="za_inforeq_email" name="email" type="email" class="form-control" required="required" value=""> </div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="za_inforeq_phone"> Phone </label>
												<input id="za_inforeq_phone" name="phone" type="tel" class="form-control" value="" autocomplete="off"> </div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<label for="note"> Message </label>
													<textarea name="note" placeholder="Enter your message" class="form-control" ></textarea>
											</div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">											
											<div class="form-group">
												<label for="selectAgent"> Agent </label>
												<select name="agent" class="form-control">
													<option value="">Select</option>
													<?php
													$agents = getAgentList();
													foreach( $agents as $agent ){
														echo "<option value='{$agent->login}'>{$agent->userName}</option>"."/r/n";
													}
													?>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<div class="checkbox">
													<label class="field-label">
														<input id="zpaOrgProfile_DailyDigest" name="propertyAlerts" type="checkbox" class="form-control" value="1"> &nbsp; Subscribe for property updates and daily digest</label>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row mt-10">
										<div class="col-xs-12 zpa-modal-form-disclaimer"> *Required fields. A confirmation email will be sent to you with instructions for activating your account, so please be sure your email address is entered accurately. </div>
									</div>
									<input type="hidden" name="contactId" value="<?php echo implode(',',$contactId); ?>" />
									<input type="hidden" name="action" value="regist_user" >
									<button type="submit" class="btn btn-primary mt-10 zpa-save-listing-create-submit">Sign up</button>
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
 

<script>

	jQuery( '#zpa-modal-register-user-form' ).on( 'submit', function(){
		
		jQuery('#zpa-modal-register-user-form').css('opacity', 0.5);
		
		var data = jQuery(this).serialize();
	 
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['result'] ){
					// var contactId=response['result'];
					
					var message="<div class='thankyou-box'>"+
								"<img src='<?php echo ZIPPERAGENTURL . "images/thankyou-envelope.png"; ?>' alt='envelope' />"+
								"<h3 class='user-verification verification-success'>A link to verify your account has been sent to the email address you provided</h3>"+
								"<h3 class='user-verification verification-success'>Click on the link to get started</h3>"+
								"</div>";
					
					jQuery('#regusterUserModal .modal-body #content').addClass('signup-conf-box');					
					jQuery('#regusterUserModal .modal-body #content').html(message);
					
					jQuery('#regusterUserModal .close').show();
					<?php /*
					jQuery('input[name=contactId]').val(contactId);
					jQuery('.needLogin').attr('contactId', contactId);
					jQuery('.needLogin').removeClass('needLogin');
					
					//modify contact form
					jQuery('.hidden-on-login').remove();
					jQuery('#zpa-modal-register-user-form input[name=action]').val('contact_agent'); */ ?>
				}else{
					alert( 'Submit failed!' );
				}
				
				jQuery('#zpa-modal-register-user-form').css('opacity', 1);
			}
		});
		
		return false;
	});
	
</script>
<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
<script>
	jQuery(document).ready(function(){
		var show = function(){
			jQuery('#regusterUserModal').modal('show');
		};
		
		setTimeout(function(){
			show();
		}, 10000);
	});
	
</script>
<?php endif; ?> 
</div>