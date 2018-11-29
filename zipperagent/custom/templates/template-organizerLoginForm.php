<?php
global $zpa_show_login_popup;
$zpa_show_login_popup=0;

$loginfail=0;
if( !empty( $_POST ) && $_POST['actionType']=='login' ){
	$email = $_POST['username'];
	$rememberMe = isset($_POST['rememberMe'])?$_POST['rememberMe']:0;
	$result = userContactLogin( $email, $rememberMe );
	
	if( $result ){
		// $current_url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		wp_safe_redirect( zipperagent_page_url('property-organizer-edit-subscriber') );
		die();
	}else{
		$loginfail=1;
	}
}

if( getCurrentUserContactLogin() ){
	$edit_profile=zipperagent_page_url('property-organizer-edit-subscriber');
	wp_safe_redirect($edit_profile);
	die();
}

$contactIds=get_contact_id();
$rb = zipperagent_rb();	
?>
<div id="zpa-main-container" class="zpa-container zpa-color-scheme-gray zpa-account-login" style="display: inline;" data-zpa-client-id="">
	<div class="zpa-social-signup">
		<!-- <div class="row mt-25"> -->
		<div class="row">
			<div class="col-xs-12">
				<!-- <div class="well well-sm"> -->
				<div>
					<form id="zpa-login-form" class="form-inline" method="POST">
						<?php /* <div class="JKGH00920" style="position: absolute; top: -2000px; left: -2000px;">
							<label> Message
								<input name="JKGH00920" placeholder="Enter your message" autocomplete="off"> </label>
						</div> */ ?>
						<?php if($loginfail): ?><span id="loginForm.errors" class="text-danger">Unable to login. No records found. Please try again.</span><?php endif; ?>
						<input name="actionType" value="login" type="hidden">
						<div class="row">
							<div class="col-xs-12 col-sm-12"><!-- Registered Users --></div>
							<div class="col-xs-12 col-sm-12">
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
										<!-- Display login status -->
										<div id="status"></div>

										<!-- Facebook login or logout button -->
										<a href="javascript:void(0);" onclick="fbLogin()" id="fbLink"><img src="<?php echo ZIPPERAGENTURL ?>images/fb-login-btn.png"/></a>

										<!-- Display user profile data -->
										<div id="userdata"></div>
										
										<span class="privacy-message"><i class="fa fa-lock" aria-hidden="true"></i> This does not let the app post to Facebook.</span>
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
											<input id="exampleInputEmail2" name="username" type="email" placeholder="Email" class="form-control" required="required" value="<?php echo isset($_POST['username'])?$_POST['username']:''; ?>">
										</div>
										<?php /* <div class="checkbox fs-12  mt-10">
											<label> <input type="checkbox" name="rememberMe" value="1" <?php checked(isset($_POST['rememberMe'])?$_POST['rememberMe']:0,'1') ?>> Remember me </label>
										</div> */ ?>
									</div>									
								</div>
								
								<div class="row mt-10">
									<div class="col-xs-12 col-sm-12">
										<input type="hidden" name="action" value="login_user" >
										<button type="submit" class="btn btn-default full-width"> Continue with Email </button>
									</div>
								</div>
							</div>
						</div>						
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="zpa-normal-signup" style="display:none;">		
		<div class="row mt-25">
			<div class="col-xs-12 col-sm-4"> <strong>New Users</strong>
				<br> Create and manage saved searches and properties with the Property Organizer. </div>
			<div class="col-xs-12 col-sm-8">
				<form id="zpa-create-organizer-form" method="POST">				
				   
					<input name="actionType" value="create" type="hidden">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="inputEmail4" class="sr-only"> First Name </label>
								<input id="inputEmail4" name="firstName" placeholder="First Name (required)" type="text" class="form-control" required="required" value=""> </div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="inputEmail4" class="sr-only"> Last Name </label>
								<input id="inputEmail4" name="lastName" placeholder="Last Name (required)" type="text" class="form-control" required="required" value=""> </div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="inputEmail3" class="sr-only"> Email </label>
								<input id="inputEmail3" name="email" placeholder="Email (required)" type="email" class="form-control" required="required" value=""> </div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="inputEmail5" class="sr-only"> Phone </label>
								<input id="inputEmail5" name="phone" placeholder="Phone (required)" type="tel" class="form-control" required="required" value=""> </div>
						</div>
					</div>				
					<div class="row">
						<div class="col-xs-12 col-sm-12">
							<div class="form-group">
								<label for="note" class="sr-only"> Message </label>
									<textarea name="note" placeholder="Enter your message" class="form-control" ></textarea>
							</div>
						</div>
					</div>
					<?php
					if(is_show_agent_list()): ?>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="selectAgent" class="sr-only"> Agent </label>
								<select name="agent" class="form-control">
									<option value="">Select Agent</option>
									<?php
									$agents = getAgentList();
									foreach( $agents as $agent ){
										echo "<option value='{$agent->login}'>{$agent->userName}</option>"."/r/n";
									}
									?>
								</select>
							</div>
						</div>
					</div>  <?php
					endif; ?>				
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="form-group">
								<div class="checkbox">
									<label class="field-label">
										<input id="zpaOrgProfile_DailyDigest" name="propertyAlerts" type="checkbox" class="form-control" value="1"> &nbsp; Send me property alerts matching my search preferences.</label>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="row">
								<div class="col-md-3" >
									<label style="padding-top:9px" for="alertType">Frequency</label>
								</div>
								<div class="col-md-9">
									<div class="form-group">
										<!-- <label for="alertType" class="sr-only"> Frequency </label> -->
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
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
							<div class="form-group">
								<span class="help-block"> Your personal information is strictly confidential and will not be shared with any outside organizations. </span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds); ?>" />
								<input type="hidden" name="action" value="regist_user" >
								<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<a class="signup-toggle" href="#">Have account?</a>
						</div>
					</div>
					<div> </div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>	
	jQuery( '#zpa-login-form' ).on( 'submit', function(){
		
		jQuery('#zpa-login-form').css('opacity', 0.5);
		
		var rememberMe;		
		var email = jQuery('#exampleInputEmail2').val();
			
		if(jQuery('#zpa-login-form input[name=rememberMe]').is(':checked'))
			rememberMe = 1;
		else
			rememberMe = 0;
		
		var data = {
			action: 'login_user',
			'username': email,                  
			'rememberMe': rememberMe,                    
		};
		
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['result'] ){
					window.location.replace(response['myaccounturl']);
				}else{						
					jQuery( '.zpa-social-signup' ).hide();
					jQuery( '.zpa-normal-signup' ).show();
					jQuery('#inputEmail3').val(email);				
					jQuery('#zpa-login-form').css('opacity', 1);
				}
			}
		});
		
		return false;
	});
	jQuery( '#zpa-create-organizer-form' ).on( 'submit', function(){
		
		jQuery('#zpa-create-organizer-form').css('opacity', 0.5);
		
		var data = jQuery(this).serialize();
	 
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['result'] ){
					<?php
					/* //disabled success message
					var message="<div class='thankyou-box'>"+
								"<img src='<?php echo ZIPPERAGENTURL . "images/thankyou-envelope.png"; ?>' alt='envelope' />"+
								"<h3 class='user-verification verification-success'>Sign Up Success</h3>"+
								"</div>";
					
					jQuery('.zpa-normal-signup').addClass('signup-conf-box');
					jQuery('.zpa-normal-signup').html(message);
					
					//enable my-account button
					jQuery('.login-url .link-text').html(response['myaccountname']);
					jQuery('.login-url').attr('href', response['myaccounturl']);
					jQuery('.login-url').addClass('myaccount-url').removeClass('login-url'); */ ?>
					
					<?php
					$adwords_code = $rb['google']['adwords']['code'];	
					if($adwords_code)
						echo 'gtag_report_conversion();'."\r\n";
					?>
					
					//track analytic
					if (typeof ga !== 'undefined' && $.isFunction(ga)) {
						ga('send', 'event', 'User Login', 'Sign Up');
					}
					
					setTimeout(function() {					  
						window.location.replace(response['myaccounturl']);
					}, 1000);
				}else{
					alert( 'Submit failed!' );
					jQuery('#zpa-create-organizer-form').css('opacity', 1);
				}
				
				// jQuery('#zpa-create-organizer-form').css('opacity', 1);
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
		
		// Check whether the user already logged in
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				//display user data
				// getFbUserData();
			}
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
				// getFbUserData();
				zpa_login();
			} else {
				// alert( 'User cancelled login or did not fully authorize.' );
			}
		}, {scope: 'email'});
	}

	// Fetch the user profile data from facebook
	function getFbUserData(){
		FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
		function (response) {
			document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
			document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
			document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
			document.getElementById('userdata').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
		});
	}
	
	// Logout from facebook
	function fbLogout() {
		FB.logout(function() {
			document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
			document.getElementById('fbLink').innerHTML = '<img src="fblogin.png"/>';
			document.getElementById('userdata').innerHTML = '';
			document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
		});
	}
	
	function zpa_login(){
		
		FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
		function (facebook) {
			
			var rememberMe;
			
			if(jQuery('#zpa-login-form input[name=rememberMe]').is(':checked'))
				rememberMe = 1;
			else
				rememberMe = 0;
			
			var data = {
				action: 'login_user',
				'username': facebook.email,                  
				'rememberMe': rememberMe,                    
			};
			
			jQuery('.zpa-social-signup').css('opacity', 0.5);
			
			jQuery.ajax({
				type: 'POST',
				dataType : 'json',
				url: zipperagent.ajaxurl,
				data: data,
				success: function( response ) {    
					if( response['result'] ){
						window.location.replace(response['myaccounturl']);
					}else{
						jQuery('#zpa-create-organizer-form input[name=firstName]').val(facebook.first_name);
						jQuery('#zpa-create-organizer-form input[name=lastName]').val(facebook.last_name);
						jQuery('#zpa-create-organizer-form input[name=email]').val(facebook.email);					
						signup_toggle();
					}
					
					jQuery('.zpa-social-signup').css('opacity', 1);
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