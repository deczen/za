<?php
$code=isset($_GET['action'])&&isset($_GET['code'])&&$_GET['action']=='verify'?$_GET['code']:'';
$email=isset($_GET['email'])?$_GET['email']:'';
$previous_url=isset($_GET['previous_url'])?$_GET['previous_url']:'';

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
		
$signup_success_text = isset( $rb['text']['signup_success'] ) && $rb['text']['signup_success'] ? $rb['text']['signup_success'] : '<strong>THANK YOU!</strong> for signing up.';
$thankyou_previous_text = isset( $rb['text']['thankyou_to_previous'] ) && $rb['text']['thankyou_to_previous'] ? $rb['text']['thankyou_to_previous'] : 'You are being redirected to the previous page...';
$thankyou_profile_text = isset( $rb['text']['thankyou_to_profile'] ) && $rb['text']['thankyou_to_profile'] ? $rb['text']['thankyou_to_profile'] : 'You are being redirected to your profile page...';

if(!$code && !$email){
	echo "<span class='user-verification failed'>No action</span>";
	return;
}

if(!$email){
	$result=zipperagent_user_confirmation($code);
	// echo "<pre>"; print_r( $result); echo "</pre>";
}

if( isset($result->status) && $result->status==='SUCCESS' && !isset($result->cause)){
	$loginurl=ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-login');
	// echo "<span class='user-verification verification-success'>Your verification is success. Please login <a href='{$loginurl}'>here</a>!</span>";
	echo "<div class='thankyou-box'>";
	echo "<img src='". ZIPPERAGENTURL . "images/thankyou-padlock.png' alt='padlock' />";
	// echo "<h2 class='user-verification verification-success'><strong>THANK YOU!</strong> for verfying you account.</h2>";
	// echo "<h3 class='user-verification verification-success'>Please click <a href='". $loginurl ."'>here</a> to manage your account.</h3>";
	echo "<h2 class='user-verification verification-success'>". $signup_success_text ."</h2>";
	echo "<h3 class='user-verification verification-success'>". $thankyou_profile_text ."</h3>";
	echo "</div>";
	
	// if(isset($result->result->email)){
		// $email=$result->result->email;
		// $is_login=userContactLogin($email, 1);
		// if($is_login){
			// wp_safe_redirect(get_site_url());			
		// }
	// }
	$email = isset($result->result->emailWork1)?$result->result->emailWork1:'';
	if($email){
		$isLogin = userContactLogin($email);
		$redirect_url = ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber');
	}else{
		$redirect_url = get_site_url();		
	}
	?>
	<script>
		jQuery(document).ready(function () {
		// Handler for .ready() called.
		window.setTimeout(function () {
			location.href = "<?php echo $redirect_url; ?>";
		}, 5000);
	});
	</script>
	<?php
	
	
}else if(isset($result->status) && $result->status==='SUCCESS' && isset($result->cause)){
	$loginurl=ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-login');
	echo "<div class='thankyou-box'>";
	echo "<h3 class='user-verification verification-success'>The confirmation link is not longer valid. Your email might have been confirmed already</h3>";
	echo "</div>";
}else if( $email ){
	echo "<div class='thankyou-box'>";
	echo "<img src='". ZIPPERAGENTURL . "images/thankyou-padlock.png' alt='padlock' />";
	echo "<h2 class='user-verification verification-success'><strong>THANK YOU!</strong> for signing up.</h2>";
	if($previous_url)
		echo "<h3 class='user-verification verification-success'>". $thankyou_previous_text ."</h3>";
	else
		echo "<h3 class='user-verification verification-success'>". $thankyou_profile_text ."</h3>";		
	echo "</div>";
	
	$isLogin = userContactLogin($email);
	if($previous_url)
		$redirect_url = urldecode($previous_url);
	else
		$redirect_url = ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber');
	?>
	<script>
		jQuery(document).ready(function () {
		// Handler for .ready() called.
		window.setTimeout(function () {
			location.href = "<?php echo $redirect_url; ?>";
		}, 3000);
	});
	</script>
	<?php
	
	
}else{
	echo "<div class='thankyou-box'>";
	echo "<h3 class='user-verification failed'>verification failed!</h3>";
	echo "</div>";
}
?>