<?php
global $requests;

$login_url=isset($requests['login_url'])&&!empty($requests['login_url'])?$requests['login_url']:ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-login');
$myaccount_url=isset($requests['myaccount_url'])&&!empty($requests['myaccount_url'])?$requests['myaccount_url']:ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-edit-subscriber');
if( ! ZipperagentGlobalFunction()->getCurrentUserContactLogin()){
	// echo '<a class="login-url" href="'.$login_url.'"><i class="fa fa-user fa-fw"></i> <span class="link-text">LOGIN</span></a>';
	echo '<nav class="nav nav-myaccount"><ul>';
	echo "<li class='hide-mobile'><a class='favorites-count needLogin' href='".$myaccount_url."?menu=my-favorite' afterAction='myaccount_favorite'>My Favorites <span class='za-count-wrap'>(<span class='za-count-num'>".ZipperagentGlobalFunction()->zipperagent_get_favorites_count()."</span>)</span></a></li>";
	echo "<li class='hide-mobile'><a class='save-search-count needLogin' href='".$myaccount_url."?menu=my-search' afterAction='myaccount_saved_search'>My Saved Searches <span class='za-count-wrap'>(<span class='za-count-num'>".ZipperagentGlobalFunction()->zipperagent_get_saved_search_count()."</span>)</span></a></li>";
	echo '<li><a class="login-url" href="'.$login_url.'"><i class="fa fa-user fa-fw"></i> <span class="link-text">LOGIN</span></a></li>';
	echo '</ul></nav>';

}else{
	$myaccountname=zipperagent_user_name();
	echo '<nav class="nav nav-myaccount"><ul>';
	echo "<li class='hide-mobile'><a class='favorites-count' href='".$myaccount_url."?menu=my-favorite'>My Favorites <span class='za-count-wrap'>(<span class='za-count-num'>".ZipperagentGlobalFunction()->zipperagent_get_favorites_count()."</span>)</span></a></li>";
	echo "<li class='hide-mobile'><a class='save-search-count' href='".$myaccount_url."?menu=my-search'>My Saved Searches <span class='za-count-wrap'>(<span class='za-count-num'>".ZipperagentGlobalFunction()->zipperagent_get_saved_search_count()."</span>)</span></a></li>";
	echo '<li><a class="myaccount-url" href="'.$myaccount_url.'"><i class="fa fa-user fa-fw"></i> <span class="link-text">'.$myaccountname.'</span></a>';
	echo "<nav class='sub-menu'>";
	echo "<li><a href='".$myaccount_url."'>Profile</a></li>";
	// echo "<li><a href='".$myaccount_url."?menu=my-favorite'>My Favorites</a></li>";
	// echo "<li><a href='".$myaccount_url."?menu=my-search'>My Saved Searches</a></li>";
	echo "<li><a href='".ZipperagentGlobalFunction()->zipperagent_page_url('property-organizer-logout')."'>Logout</a></li>";
	
	echo "</nav></li></ul></nav>";
}
?>
<?php if(!ZipperagentGlobalFunction()->is_facebook_bot()): ?>
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
					$('.login-url .link-text, .myaccount-url .link-text').html(response['myaccount_name']);
					$('.login-url').attr('href', '<?php echo $myaccount_url; ?>');
					$('.login-url').addClass('myaccount-url').removeClass('login-url');
					$('.save-search-count .za-count-num').html(response['saved_search_count']);
					$('.favorites-count .za-count-num').html(response['favorites_count']);
				}else{
					$('.myaccount-url .link-text').html('LOGIN');
					$('.myaccount-url').attr('href', '<?php echo $login_url; ?>');
					$('.myaccount-url').addClass('login-url').removeClass('myaccount-url');
					$('.save-search-count .za-count-num').html(response['saved_search_count']);
					$('.favorites-count .za-count-num').html(response['favorites_count']);
				}
			}
		});
	});
</script>
<?php endif; ?>
<style>
.nav-myaccount{float: right;}
.nav-myaccount .myaccount-url{padding-bottom: 10px;}
.nav-myaccount li{list-style: none;display: inline-block;padding: 0 5px;}
.nav-myaccount li a{padding-bottom: 0;}
.nav-myaccount li nav{
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
.nav-myaccount .sub-menu li{padding: 0 20px; display: block;}
.nav li.et-touch-hover>nav, .nav li:hover>nav {
    visibility: visible;
    opacity: 1;
}
</style>