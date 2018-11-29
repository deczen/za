<?php
global $requests;

$login_url=isset($requests['login_url'])&&!empty($requests['login_url'])?$requests['login_url']:zipperagent_page_url('property-organizer-login');
$myaccount_url=isset($requests['myaccount_url'])&&!empty($requests['myaccount_url'])?$requests['myaccount_url']:zipperagent_page_url('property-organizer-edit-subscriber');
if( ! getCurrentUserContactLogin()){
	echo '<a class="login-url" href="'.$login_url.'"><i class="fa fa-user fa-fw"></i> <span class="link-text">LOGIN</span></a>';

}else{
	$myaccountname=zipperagent_user_name();
	echo '<ul class="nav nav-myaccount"><li><a class="myaccount-url" href="'.$myaccount_url.'"><i class="fa fa-user fa-fw"></i> <span class="link-text">'.$myaccountname.'</span></a>';
	echo "<ul class='sub-menu'>";
	echo "<li><a href='".$myaccount_url."'>Profile</a></li>";
	echo "<li><a href='".$myaccount_url."?menu=my-favorite'>My Favorites</a></li>";
	echo "<li><a href='".$myaccount_url."?menu=my-search'>My Saved Searches</a></li>";
	echo "<li><a href='".zipperagent_page_url('property-organizer-logout')."'>Logout</a></li>";
	
	echo "</ul></li></ul>";
}
?>
<script>
	jQuery(document).ready(function($){
		
		$.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: {
					action: 'check_user_logged_in'
				},
			success: function( response ) { 
				// console.log(response);
				if( response['is_login'] ){
					$('.login-url .link-text').html('MY ACCOUNT');
					$('.login-url').attr('href', '<?php echo $myaccount_url; ?>');
					$('.login-url').addClass('myaccount-url').removeClass('login-url');
				}else{
					$('.myaccount-url .link-text').html('LOGIN');
					$('.myaccount-url').attr('href', '<?php echo $login_url; ?>');
					$('.myaccount-url').addClass('login-url').removeClass('myaccount-url');
				}
			}
		});
	});
</script>
<style>
.nav-myaccount{float: right;}
.nav-myaccount .myaccount-url{padding-bottom: 10px;}
.nav-myaccount li{list-style: none;}
.nav-myaccount li ul{
	max-width: 175px;
	margin-top: 10px;
	visibility: hidden;
    z-index: 9999;
    width: 240px;
    border-top: 3px solid #2ea3f2;
    opacity: 0;
    background: #fff;
    -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -moz-box-shadow: 0 2px 5px rgba(0,0,0,.1);
    box-shadow: 0 2px 5px rgba(0,0,0,.1);
	position: absolute;
    padding: 20px 0;
}
.nav-myaccount .sub-menu a{color: #666 !important;padding: 5px 0 !important;}
.nav-myaccount .sub-menu li{padding: 0 20px;}
.nav li.et-touch-hover>ul, .nav li:hover>ul {
    visibility: visible;
    opacity: 1;
}
</style>