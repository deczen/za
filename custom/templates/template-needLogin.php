<?php
$contactIds = get_contact_id();
$rb = ZipperagentGlobalFunction()->zipperagent_rb();	
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="za-container">
  <?php /* <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#regusterUserModal">Open Modal</button> */ ?>

	<!-- Modal -->
	<div id="needLoginModal" class="modal in hideonprint" <?php if(!zipperagent_is_close_popup_enabled()): ?>data-backdrop="static" data-keyboard="false"<?php endif; ?> aria-hidden="false" style="display:none">
		<div class="modal-dialog social-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">User Registration</div>
					<button type="button" <?php if(zipperagent_signup_optional_exception()): ?>onClick="set_popup_is_closed();"<?php endif; ?> class="close" <?php if(!zipperagent_is_close_popup_enabled()): ?>style="display:none"<?php endif; ?> data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div id="content" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">						
						<div class="zpa-social-signup">
							<div class="row mt-10">
								<div class="col-xs-12">
									<div class="panel panel-default">
										<div class="panel-heading"> <strong> Registered Users (please sign in) </strong> </div>
										<div class="panel-body">
											<form id="zpa-save-listing-form" class="form-inline" action="" method="GET">
												<div class="row">
													<div class="col-xs-12 col-sm-12">
														<h3 class="signup-title">Want to Compare Homes?</h3>
														<div class="login-caption">
															<p>Search Smarter</p>
															<p>Get Property Alerts for new listings</p>
															<p>Register for FREE</p>
														</div>
													</div>									
												</div>
												<?php if(isset($rb['facebook']['appid'])): ?>
												<div class="row">
													<div class="col-xs-12 col-sm-12">
														<!-- Facebook login or logout button -->
														<a href="javascript:void(0);" onclick="fbLogin()" id="fbLink"><img src="<?php echo ZIPPERAGENTURL ?>images/fb-login-btn.png" alt="facebook login" /></a>
														<span class="privacy-message"><i class="fa fa-lock" aria-hidden="true" role="none"></i> This does not let the app post to Facebook.</span>
													</div>									
												</div>
												<div class="row mt-15">
													<div class="col-xs-12 col-sm-12 text-center">
														<label class="or-text">or</label>
														<hr class="or-line" />
													</div>
												</div>
												<?php endif; ?>
												<div class="row mt-15">
													<div class="col-xs-12 col-sm-12">
														<div class="form-group">
															<input id="zpa-login-user-email" name="username" class="form-control" type="email" placeholder="Email" value="" required="required"> </div>
													</div>
												</div>
												<div class="row mt-10">
													<div class="col-xs-12 col-sm-12">
														<div class="form-group">
															<!-- <label for="zpa-save-favorites-submit"> &nbsp; </label> -->
															<input type="hidden" name="action" value="login_user" >
															<input type="hidden" name="afterAction" value="" >
															<input type="hidden" name="listingId" value="" >	
															<input type="hidden" name="searchId" value="" >	
															<button type="submit" class="btn btn-primary zpa-save-favorites-submit"> Continue with Email </button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="zpa-normal-signup" style="display:none;">		
							<div class="row mt-10">
								<div class="col-xs-12">
									<div class="panel panel-default">
										<div class="panel-heading"> <strong> Not Registered Users (please sign up) </strong> </div>
										<div class="panel-body">
											<form id="zpa-modal-register-user-form" class="form-inline" data-zpa-event="save-search-form-submit" action="" method="GET" data-zpa-event-bound="true">
												<div class="row mt-10">
													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="form-group">
															<label for="zpa_inforeq_firstname"> First Name<span class="required-mark">*</span> </label>
															<input id="zpa_inforeq_firstname" name="firstName" class="form-control" required="required" type="text" value=""> </div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="form-group">
															<label for="zpa_inforeq_lastName"> Last Name<span class="required-mark">*</span> </label>
															<input id="zpa_inforeq_lastName" name="lastName" class="form-control" required="required" type="text" value=""> </div>
													</div>
												</div>
												<div class="row mt-10">
													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="form-group">
															<label for="zpa_inforeq_email"> Email<span class="required-mark">*</span> </label>
															<input id="zpa_inforeq_email" name="email" type="email" class="form-control" required="required" value=""> </div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="form-group">
															<label for="zpa_inforeq_phone"> Phone<span class="required-mark">*</span> </label>
															<input id="zpa_inforeq_phone" name="phone" type="tel" class="form-control" required="required" value="" autocomplete="off"> </div>
													</div>
												</div>
												<?php 
												if(is_show_agent_list()): ?>
												<div class="row mt-10">
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">											
														<div class="form-group">
															<label for="selectAgent"> Agent </label>
															<select name="agent" class="form-control">
																<option value="">Select</option>
																<?php
																$agents = ZipperagentGlobalFunction()->getAgentList();
																foreach( $agents as $agent ){
																	echo "<option value='{$agent->login}'>{$agent->userName}</option>"."/r/n";
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
													</div>
												</div>
												<?php else: 
						
													if( $assignedto = ZipperagentGlobalFunction()->get_assignedto() ){
														
														echo '<input type="hidden" name="assignedTo" value="'. $assignedto .'" />';
													}
												
												endif;
												?>
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
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">											
														<div class="form-group">
															<label for="alertType"> Frequency </label>
															<select name="alertType" class="form-control">
																<!-- <option value="NONE">Select frequency</option> -->
																<?php
																$alertTypes=za_get_alert_type();
																if(isset($alertTypes->result[0]->possibleValues)){
																	$frequencies=$alertTypes->result[0]->possibleValues;
																	foreach($frequencies as $frequency){
																		echo '<option value="'. $frequency->code .'">'. $frequency->value .'</option>'."\r\n";
																	}
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
													</div>
												</div>
												<?php if(is_register_form_chaptcha_enabled()): 
													$site_key = isset($rb['google']['site_key'])?$rb['google']['site_key']:'';
													?>
													<div class="row mt-10">
														<div class="col-xs-12">
															<div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
															<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
														</div>
													</div>
												<?php endif; ?>												
												<div class="row mt-10">
													<div class="col-xs-12 zpa-modal-form-disclaimer"> *Required fields.</div>
												</div>
												<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds) ?>" />
												<input type="hidden" name="action" value="regist_user" >
												<input type="hidden" name="actual_link" value="<?php echo $actual_link; ?>" />
												<input type="hidden" name="afterAction" value="" >										
												<input type="hidden" name="listingId" value="" >										
												<input type="hidden" name="searchId" value="" >										
												<button type="submit" class="btn btn-primary mt-10 zpa-save-listing-create-submit">Sign up</button>
												<div class="clearfix"></div>
												<div class="row mt-10">
													<div class="col-xs-12">
														<a class="signup-toggle" href="#">Have account?</a>
													</div>
												</div>
											</form>
										</div>
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
		
	<script>
		jQuery('body').on('click', 'button.needLogin, input.n, a.needLogin', function(e){
			var after_action = jQuery(this).attr('afterAction');
			var listingId = jQuery(this).attr('listingId');
			var searchId = jQuery(this).attr('searchId');
			jQuery('#needLoginModal:not(.loggedIn)').modal('show');
			jQuery('#needLoginModal #zpa-save-listing-form').find('input[name=afterAction]').val(after_action);		
			jQuery('#needLoginModal #zpa-save-listing-form').find('input[name=listingId]').val(listingId);		
			jQuery('#needLoginModal #zpa-save-listing-form').find('input[name=searchId]').val(searchId);		
			jQuery('#needLoginModal #zpa-modal-register-user-form').find('input[name=afterAction]').val(after_action);		
			jQuery('#needLoginModal #zpa-modal-register-user-form').find('input[name=listingId]').val(listingId);		
			jQuery('#needLoginModal #zpa-modal-register-user-form').find('input[name=searchId]').val(searchId);		
			// jQuery('#needLoginModal #zpa-more-info-request-form').find('input[name=afterAction]').val(after_action);		
			
			return false;
		});
		
		jQuery( '#needLoginModal #zpa-save-listing-form' ).on( 'submit', function(){
			
			jQuery('#needLoginModal #zpa-save-listing-form').css('opacity', 0.5);
			jQuery('#needLoginModal #zpa-save-listing-form').css('pointer-events', 'none');
			
			var data = jQuery(this).serializeArray();
			var afterAction = jQuery(this).find('input[name=afterAction]').val();
			
			console.time('check login');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					// console.log(response);
					if( response['result'] ){
						var contactId=response['result'];
						
						// alert(afterAction + contactId);
						switch(afterAction){
							case "save_favorite_listing":
									var listingId =  jQuery('#zpa-save-listing-form').find('input[name=listingId]').val();
									var searchId =  jQuery('#zpa-save-listing-form').find('input[name=searchId]').val();
									var element = jQuery('.listing-'+listingId);
									// jQuery('.save-favorite-btn').attr('contactId', contactId);
									// jQuery('#saveSearchButton').attr('contactId', contactId);
									save_favorite_listing( element, listingId, contactId, searchId, 1);
								break;
							case "save_favorite":
									save_favorite( contactId, '', 1); 
								break;
							case "save_property":
									save_property( contactId, '');
								break;
							case "save_search":
									save_search( contactId ); 
								break;
							case "schedule_show":
									jQuery('#zpa-schedule-showing-request-form input[name=contactId]').val(contactId);
									jQuery('#zpaScheduleShowing').modal('show');
								break;
							case "request_info":
									jQuery('#zpa-more-info-request-form input[name=contactId]').val(contactId);
									jQuery('#zpaMoreInfo').modal('show');
								break;
							case "share_email":
									jQuery('#zpa-modal-share-email-form input[name=contactId]').val(contactId);
									jQuery('#zpaShareEmail').modal('show');
								break;
							case "myaccount_favorite":
									var url = response['favorites_url'];
									window.location.replace(url);
								break;
							case "myaccount_saved_search":
									var url = response['saved_search_url'];
									window.location.replace(url);
								break;
						}
						
						//process message
						jQuery('#needLoginModal .modal-header .close').click();
						jQuery('#needLoginModal .modal-body #content').html('<p>Login success</p>');
						
						//set contactId to input field
						jQuery('input[name=contactId]').val(contactId);
						
						//update button status
						jQuery('input[name=contactId],input[name=contactid]').val(contactId);
						jQuery('.needLogin').attr('contactId', contactId);
						jQuery('.needLogin').attr('contactid', contactId);
						jQuery('.needLogin').attr('isLogin', 1);
						jQuery('.needLogin').removeClass('needLogin');
						jQuery('a').attr('contactid', contactId);
						jQuery('a').attr('isLogin', 1);
						jQuery('button').attr('contactid', contactId);
						jQuery('button').attr('isLogin', 1);
						
						//modify contact form
						jQuery('.hidden-on-login').remove();
						jQuery('#zpa-modal-register-user-form input[name=action]').val('contact_agent');
						
						//enable my-account button
						jQuery('.login-url .link-text').html(response['myaccountname']);
						jQuery('.login-url').attr('href', response['myaccounturl']);
						jQuery('.login-url').addClass('myaccount-url').removeClass('login-url');
						
						//show close button
						jQuery('#needLoginModal .close').show();
						
						//add class to loginModal
						jQuery('#needLoginModal').addClass('loggedIn');
						
						//update zppr data
						if (typeof zppr != "undefined"){
							zppr.data.is_login=1;
							zppr.data.contactIds=[contactId];
						}
					}else{						
						var email = jQuery('#zpa-login-user-email').val();
						jQuery( '.zpa-social-signup' ).hide();
						jQuery( '.zpa-normal-signup' ).show();
						jQuery('#zpa_inforeq_email').val(email);
					}
					
					jQuery('#needLoginModal #zpa-save-listing-form').css('opacity', 1);
					jQuery('#needLoginModal #zpa-save-listing-form').css('pointer-events', 'initial');
					
					console.timeEnd('check login');
				},
				error: function(){
					console.timeEnd('check login');
				}
			});
			
			return false;
		});
		
		jQuery( '#needLoginModal #zpa-modal-register-user-form' ).on( 'submit', function(){
			
			jQuery('#needLoginModal #zpa-modal-register-user-form').css('opacity', 0.5);
			jQuery('#needLoginModal #zpa-modal-register-user-form').css('pointer-events', 'none');
			
			var data = jQuery(this).serializeArray();
			var afterAction = jQuery(this).find('input[name=afterAction]').val();			
			
			console.time('sign up');
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {
					// console.log(response);
					if( response['result'] ){
						var contactId=response['result']['id'];
						var action_params='';
						// alert(afterAction + contactId);
						switch(afterAction){
							case "save_favorite_listing":
									var listingId =  jQuery('#zpa-save-listing-form').find('input[name=listingId]').val();
									var searchId =  jQuery('#zpa-save-listing-form').find('input[name=searchId]').val();
									var element = jQuery('.listing-'+listingId);
									// jQuery('.save-favorite-btn').attr('contactId', contactId);
									// jQuery('#saveSearchButton').attr('contactId', contactId);
									// save_favorite( element, listingId, contactId, searchId); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction + '&listingparams=' + listingId + ';' + searchId );
								break;
							case "save_favorite":
									// save_favorite( contactId, ''); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction );
								break;
							case "save_property":
									// save_property( contactId, ''); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction );
								break;
							case "save_search":
									// save_search( contactId ); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction );
								break;
							case "schedule_show":
									jQuery('#zpa-schedule-showing-request-form input[name=contactId]').val(contactId);
									// jQuery('#zpaScheduleShowing').modal('show'); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction );
								break;
							case "request_info":
									jQuery('#zpa-more-info-request-form input[name=contactId]').val(contactId);
									// jQuery('#zpaMoreInfo').modal('show'); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction );
								break;
							case "share_email":
									jQuery('#zpa-modal-share-email-form input[name=contactId]').val(contactId);
									// jQuery('#zpaShareEmail').modal('show'); //disable couse redirect
									
									action_params=encodeURIComponent( 'afteraction=' + afterAction );
								break;
							case "myaccount_favorite":
									var url = response['favorites_url'];
									window.location.replace(url);
								break;
							case "myaccount_saved_search":
									var url = response['saved_search_url'];
									window.location.replace(url);
								break;
						}
						
						<?php /*
						//process message
						var message="<div class='thankyou-box'>"+
									"<img src='<?php echo ZIPPERAGENTURL . "images/thankyou-envelope.png"; ?>' alt='envelope' />"+
									"<h3 class='user-verification verification-success'>Sign Up Success</h3>"+
									"</div>";							
						jQuery('#needLoginModal .modal-body #zpa-modal-register-user-form').addClass('signup-conf-box');
						jQuery('#needLoginModal .modal-body #zpa-modal-register-user-form').html(message); */ ?>
						
						//set contactId to input field
						jQuery('input[name=contactId]').val(contactId);
						
						//update button status
						jQuery('input[name=contactId],input[name=contactid]').val(contactId);
						jQuery('.needLogin').attr('contactId', contactId);
						jQuery('.needLogin').attr('contactid', contactId);
						jQuery('.needLogin').attr('isLogin', 1);
						jQuery('.needLogin').removeClass('needLogin');
						jQuery('a').attr('contactid', contactId);
						jQuery('a').attr('isLogin', 1);
						jQuery('button').attr('contactid', contactId);
						jQuery('button').attr('isLogin', 1);
						
						//modify contact form
						jQuery('.hidden-on-login').remove();
						jQuery('#zpa-modal-register-user-form input[name=action]').val('contact_agent');
						
						//enable my-account button
						jQuery('.login-url .link-text').html(response['myaccountname']);
						jQuery('.login-url').attr('href', response['myaccounturl']);
						jQuery('.login-url').addClass('myaccount-url').removeClass('login-url');
						<?php
						$adwords_code = isset($rb['google']['adwords']['code'])?$rb['google']['adwords']['code']:'';	
						if($adwords_code)
							echo 'gtag_report_conversion();'."\r\n";
						?>
						//track analytic
						if (typeof ga !== 'undefined' && jQuery.isFunction(ga)) {
							ga('send', 'event', 'User Login', 'Sign Up');
						}
						
						//show close button
						jQuery('#needLoginModal .close').show();
						
						//update zppr data
						if (typeof zppr != "undefined"){
							zppr.data.is_login=1;
							zppr.data.contactIds=[contactId];
						}
						
						//redirect
						var current_url=window.location.href;
						if(current_url.indexOf("?") != -1 && action_params) {							
							var previous_url = encodeURIComponent( current_url + '&' + action_params );
						}else if(action_params){
							var previous_url = encodeURIComponent( current_url + '?' + action_params );
						}else{
							var previous_url = encodeURIComponent( current_url );
						}
						setTimeout(function() {					  
							window.location.replace(response['thankyouurl'] + '&previous_url=' + previous_url);
						}, 1000);
					}else{
						alert( response['message'] );					
						jQuery('#needLoginModal #zpa-modal-register-user-form').css('opacity', 1);
						jQuery('#needLoginModal #zpa-modal-register-user-form').css('pointer-events', 'initial');
					}
					
					console.timeEnd('sign up');
				},
				error: function(){
					console.timeEnd('sign up');
				}
			});
			
			return false;
		});
	</script>

	<?php if(isset($rb['facebook']['appid'])): ?>
	<script>
		<?php
		$fb_appid = $rb['facebook']['appid'];
		// $fb_appid = '216628155543912';
		$fb_appsecret = $rb['facebook']['appsecret'];
		?>
		window.fbAsyncInit = function() {
			// FB JavaScript SDK configuration and setup
			FB.init({
			  appId      : '<?php echo $fb_appid ?>', // FB App ID
			  cookie     : true,  // enable cookies to allow the server to access the session
			  xfbml      : true,  // parse social plugins on this page
			  version    : 'v2.8' // use graph api version 2.8
			});
		};

		// Load the JavaScript SDK asynchronously
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		// Facebook login with JavaScript SDK
		function fbLogin() {
			FB.login(function (response) {
				if (response.authResponse) {
					// Get and display the user profile data
					zpa_login();
				} else {
					// alert( 'User cancelled login or did not fully authorize.' );
				}
			}, {scope: 'email'});
		}
		
		function zpa_login(){
			
			var afterAction = jQuery( '#needLoginModal #zpa-save-listing-form input[name=afterAction]').val();
			
			FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
			function (facebook) {
				var data = {
					action: 'login_user',
					'username': facebook.email,                   
					'rememberMe': 0,                    
				};
			
				jQuery('.zpa-social-signup').css('opacity', 0.5);
				jQuery('.zpa-social-signup').css('pointer-events', 'none');
				
				console.time('check login');
				jQuery.ajax({
					type: 'POST',
					dataType : 'json',
					url: zipperagent.ajaxurl,
					data: data,
					success: function( response ) {
						if( response['result'] ){
							var contactId=response['result'];
							
							// alert(afterAction + contactId);
							switch(afterAction){
								case "save_favorite_listing":
										var listingId =  jQuery('#zpa-save-listing-form').find('input[name=listingId]').val();
										var searchId =  jQuery('#zpa-save-listing-form').find('input[name=searchId]').val();
										var element = jQuery('.listing-'+listingId);
										// jQuery('.save-favorite-btn').attr('contactId', contactId);
										// jQuery('#saveSearchButton').attr('contactId', contactId);
										save_favorite_listing( element, listingId, contactId, searchId, 1);
									break;
								case "save_favorite":
										save_favorite( contactId, '', 1);
									break;
								case "save_property":
										save_property( contactId, '');
									break;
								case "save_search":
										save_search( contactId );
									break;
								case "schedule_show":
										jQuery('#zpa-schedule-showing-request-form input[name=contactId]').val(contactId);
										jQuery('#zpaScheduleShowing').modal('show');
									break;
								case "request_info":
										jQuery('#zpa-more-info-request-form input[name=contactId]').val(contactId);
										jQuery('#zpaMoreInfo').modal('show');
									break;
								case "share_email":
										jQuery('#zpa-modal-share-email-form input[name=contactId]').val(contactId);
										jQuery('#zpaShareEmail').modal('show');
									break;
								case "myaccount_favorite":
										var url = response['favorites_url'];
										window.location.replace(url);
									break;
								case "myaccount_saved_search":
										var url = response['saved_search_url'];
										window.location.replace(url);
									break;
							}
							
							jQuery('#needLoginModal .modal-header .close').click();
							jQuery('#needLoginModal .modal-body #content').html('<p>Login success</p>');
							
							//update button status
							jQuery('input[name=contactId],input[name=contactid]').val(contactId);
							jQuery('.needLogin').attr('contactId', contactId);
							jQuery('.needLogin').attr('contactid', contactId);
							jQuery('.needLogin').attr('isLogin', 1);
							jQuery('.needLogin').removeClass('needLogin');
							jQuery('a').attr('contactid', contactId);
							jQuery('a').attr('isLogin', 1);
							jQuery('button').attr('contactid', contactId);
							jQuery('button').attr('isLogin', 1);
							
							//modify contact form
							jQuery('.hidden-on-login').remove();
							jQuery('#zpa-modal-register-user-form input[name=action]').val('contact_agent');
							
							//enable my-account button
							jQuery('.login-url .link-text').html(response['myaccountname']);
							jQuery('.login-url').attr('href', response['myaccounturl']);
							jQuery('.login-url').addClass('myaccount-url').removeClass('login-url');
							
							//show close button
							jQuery('#needLoginModal .close').show();
							
							//update zppr data
							if (typeof zppr != "undefined"){
								zppr.data.is_login=1;
								zppr.data.contactIds=[contactId];
							}
							
						}else{
							jQuery('#zpa-modal-register-user-form input[name=firstName]').val(facebook.first_name);
							jQuery('#zpa-modal-register-user-form input[name=lastName]').val(facebook.last_name);
							jQuery('#zpa-modal-register-user-form input[name=email]').val(facebook.email);					
							signup_toggle();
						}
						
						jQuery('.zpa-social-signup').css('opacity', 1);
						jQuery('.zpa-social-signup').css('pointer-events', 'initial');
						
						console.timeEnd('check login');
					},
					error: function(){
						console.timeEnd('check login');
					}
				});
			});		
		}
		
		function signup_toggle(){
			jQuery( '.zpa-social-signup' ).toggle();
			jQuery( '.zpa-normal-signup' ).toggle();
		}
		
		jQuery('.signup-toggle').on( 'click', function(){
			signup_toggle();		
			return false;
		});
	</script>
	<?php endif; ?>
	<?php if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin() && showSignUpPopup() ): //only for non logged in user ?>
	<script>
		jQuery(document).ready(function(){			
			var show = function(){
				jQuery('#needLoginModal:not(.loggedIn)').modal('show');				
				
				<?php if(!zipperagent_signup_optional()): ?>
				set_popup_is_triggered();
				<?php endif; ?>
			};
			
			<?php if(za_is_show_popup()): ?>
			var seconds='<?php echo SignUpPopupTime(); ?>';
			setTimeout(function(){
				show();
			}, 1000*parseInt(seconds));
			<?php endif; ?>
		});		
	</script>
	<script>
		function set_popup_is_triggered(){
			var data = {
				action: 'trigger_popup',               
			};
			
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {    
					if( response['result'] ){
						
					}
				}
			});
		}
	</script>
	<script>
		function set_popup_is_closed(){
			var data = {
				action: 'close_popup',               
			};
			
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {    
					if( response['result'] ){
						<?php
						$signup_optional_exception = zipperagent_signup_optional_exception();
						
						if($signup_optional_exception):
						?>
						var limit = parseInt('<?php echo $signup_optional_exception; ?>');
						var popup_close_count = response['result'];
						
						if(popup_close_count>= limit){
							jQuery('#needLoginModal button.close').hide();
							jQuery('#needLoginModal').attr( 'data-backdrop', 'static' );
							jQuery('#needLoginModal').attr( 'data-keyboard', 'false' );
							jQuery('#needLoginModal').data('bs.modal').options.backdrop = 'static';
							jQuery('#needLoginModal').data('bs.modal').options.keyboard = 'false';
						}
						<?php endif; ?>
					}
				}
			});
		}
	</script>
	<?php endif; ?> 
</div>