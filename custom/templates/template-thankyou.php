<?php
$code=isset($_GET['action'])&&isset($_GET['code'])&&$_GET['action']=='verify'?$_GET['code']:'';

if(!$code){
	echo "<span class='user-verification failed'>No action</span>";
	return;
}

$result=zipperagent_user_confirmation($code);
// echo "<pre>"; print_r( $result); echo "</pre>";


if( isset($result->status) && $result->status==='SUCCESS' && !isset($result->cause)){
	$loginurl=zipperagent_page_url('property-organizer-login');
	// echo "<span class='user-verification verification-success'>Your verification is success. Please login <a href='{$loginurl}'>here</a>!</span>";
	echo "<div class='thankyou-box'>";
	echo "<img src='". ZIPPERAGENTURL . "images/thankyou-padlock.png' alt='padlock' />";
	echo "<h2 class='user-verification verification-success'><strong>THANK YOU!</strong> for verfying you account.</h2>";
	echo "<h3 class='user-verification verification-success'>Please click <a href='". $loginurl ."'>here</a> to manage your account.</h3>";
	echo "</div>";
	
	if(isset($result->result->email)){
		$email=$result->result->email;
		$is_login=userContactLogin($email, 1);
		if($is_login){
			// wp_safe_redirect(get_site_url());			
		}
	}
	
	?>
	<script>
		jQuery(document).ready(function () {
		// Handler for .ready() called.
		window.setTimeout(function () {
			location.href = "<?php echo get_site_url() ?>";
		}, 5000);
	});
	</script>
	<?php
	
	
}else if(isset($result->status) && $result->status==='SUCCESS' && isset($result->cause)){
	$loginurl=zipperagent_page_url('property-organizer-login');
	echo "<div class='thankyou-box'>";
	echo "<h3 class='user-verification verification-success'>The confirmation link is not longer valid. Your email might have been confirmed already</h3>";
	echo "</div>";
}else{
	echo "<div class='thankyou-box'>";
	echo "<h3 class='user-verification failed'>verification failed!</h3>";
	echo "</div>";
}
?>