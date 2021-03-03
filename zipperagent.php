<?php
/*
Plugin Name: Zipperagent
Description: Adds MLS / IDX property search and listings to your site. Includes search and listing pages, widgets and shortcodes.
Version: 2.0.2.04
Author: Decz
License: GPL
*/

/* Added by Decz */
$GLOBALS['WORK_ENV'] = 'PROD';
// $GLOBALS['WORK_ENV'] = 'DEV';

$GLOBALS['ZaRemoteResponse'] = array();

define( 'ZIPPERAGENT_VERSION', '20210303.1' ); //first part is date in yyyymmdd format and number after . is the number of version on that day
define( 'ZIPPERAGENTPATH', dirname( __FILE__ ) );
define( 'ZIPPERAGENTURL', plugins_url( '/', __FILE__ ) );

include "zipperAgentAutoloader.php";
/* Added by Decz */
require "custom/custom.php";

function zipperagent_clear_caches() {
	$domainName = str_replace( 'https://', '', get_site_url() );
	$domainName = str_replace( 'http://', '', $domainName );
	$dir = ZIPPERAGENTPATH . '/custom/caches/' . $domainName . '/';
	if(file_exists($dir)){
		$files = scandir($dir);
		if($files){
			foreach($files as $file) {
				if( is_file( $dir . $file ) )
					@unlink( $dir . $file );
			}
		}
	}
	
	session_destroy();
}
register_activation_hook( __FILE__, 'zipperagent_clear_caches' );

/* end custom codes */
$autoloader = zipperAgentAutoloader::getInstance();

$shortcodes = Zipperagent_Shortcodes::getInstance();
$installer = zipperAgentInstaller::getInstance();
$rewriteRules = zipperAgentRewriteRules::getInstance();
$admin = zipperAgentAdmin::getInstance();
// $shortcodeSelector = zipperAgentShortcodeSelector::getInstance();
// $shortcodeDispatcher = zipperAgentShortcodeDispatcher::getInstance();
// $stateManager = zipperAgentStateManager::getInstance();
$enqueueResource = zipperAgentEnqueueResource::getInstance();
$virtualPageDispatcher = zipperAgentVirtualPageDispatcher::getInstance();
$displayRules = zipperAgentDisplayRules::getInstance();
// $ajaxHandler = zipperAgentAjaxHandler::getInstance();

//Runs when plugin is activated
register_activation_hook(__FILE__, array($installer, "install"));
//Runs on plugin deactivation
register_deactivation_hook(__FILE__, array($installer, "remove"));

//Runs just before the auto upgrader installs the plugin
add_filter("upgrader_post_install", array($installer, "upgrade"), 10, 2);

//uncomment during development, so rule changes can be viewed.
//in production this should not run, because it is a slow operation.
//add_action("init", array($rewriteRules, "flushRules"));

//Rewrite Rules
add_action("init", array($rewriteRules, "initialize"), 1);

if(is_admin()) {
	add_action("admin_enqueue_scripts", array($admin, "addScripts"));
	add_action("admin_menu", array($admin, "createAdminMenu"));
	add_action("admin_init", array($installer, "upgrade"));
	add_action("admin_init", array($admin, "registerSettings"));
	//Adds functionality to the text editor for pages and posts
	//Add buttons to text editor and initialize short codes
	// add_action("admin_init", array($shortcodeSelector, "addButtons"));
	//add error check
	add_action("admin_notices", array($admin, "checkError"));
} else {
	/*
	Call upgrade method on every non-admin page load. This is for the case that the plugin is updated through
	multisite network admin	or if the plugin files were manually copied into wordpress.
	*/
	// echo "<pre>"; print_r( $enqueueResource ); echo "</pre>";
	add_action("setup_theme", array($installer, "upgrade"));
	add_action("wp_enqueue_scripts", array($enqueueResource, "enqueue"));
	add_action("wp_head", array($enqueueResource, "inline_style"));
	add_action("wp_head", array($enqueueResource, "getMetaTags"), -100); //not working in barbara site
	add_action("wp_head", array($enqueueResource, "getHeader"));
	add_action("wp_footer", array($enqueueResource, "getFooter"));
	// add_filter("page_template", array($virtualPageDispatcher, "getPageTemplate"));
	// add_filter("the_content", array($virtualPageDispatcher, "getContent"), 20);
	add_filter("the_content", 'zipperagent_template', 20);
	add_filter("the_excerpt", array($virtualPageDispatcher, "getExcerpt"), 20);
	add_filter("the_posts", array($virtualPageDispatcher, "postCleanUp"), 20000);
	add_filter("comments_array", array($virtualPageDispatcher, "clearComments"));
	if($displayRules->isSitemapEnabled()) {
		add_action("sm_buildmap", array($admin, "addSitemapForGoogleXmlSitemaps"));
		add_filter("wpseo_sitemap_page_content", array($admin, "addSitemapForYoastWordPressSeo"));
	}
}

//shortcode
// add_action("init", array($shortcodeDispatcher, "initialize"));

//widgets
/*
if($displayRules->isPropertiesGalleryEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentPropertiesGallery');"));
}
if($displayRules->isQuickSearchEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentQuickSearchWidget');"));
}
if($displayRules->isSeoCityLinksEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentLinkWidget');"));
}
if($displayRules->isSearchByAddressEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentSearchByAddressWidget');"));
}
if($displayRules->isSearchByListingIdEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentSearchByListingIdWidget');"));
}
if($displayRules->isContactFormWidgetEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentContactFormWidget');"));
}
if($displayRules->isLoginWidgetSmallEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentLoginWidget');"));
}
if($displayRules->isMoreInfoEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentMoreInfoWidget');"));
}
if($displayRules->isMoreInfoEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentValuationWidget');"));
}
if($displayRules->isAgentBioWidgetEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentAgentBioWidget');"));
}
if($displayRules->isSocialEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentSocialWidget');"));
}
if($displayRules->isHotsheetListWidgetEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentHotsheetListWidget');"));
}
if($displayRules->isEmailSignupWidgetEnabled()) {
	add_action("widgets_init", create_function("", "return register_widget('zipperAgentEmailSignupFormWidget');"));
} */

//AJAX request handling
/*
add_action("wp_ajax_nopriv_za_more_info_request", array($ajaxHandler, "requestMoreInfo"));
add_action("wp_ajax_nopriv_za_schedule_showing", array($ajaxHandler, "scheduleShowing"));
add_action("wp_ajax_nopriv_za_save_property", array($ajaxHandler, "saveProperty"));
add_action("wp_ajax_nopriv_za_photo_tour", array($ajaxHandler, "photoTour"));
add_action("wp_ajax_nopriv_za_save_search", array($ajaxHandler, "saveSearch"));
add_action("wp_ajax_nopriv_za_lead_capture_login", array($ajaxHandler, "leadCaptureLogin"));
add_action("wp_ajax_nopriv_za_saved_listing_comments", array($ajaxHandler, "addSavedListingComments"));
add_action("wp_ajax_nopriv_za_saved_listing_rating", array($ajaxHandler, "addSavedListingRating"));
add_action("wp_ajax_nopriv_za_save_listing_subscriber_session", array($ajaxHandler, "saveListingForSubscriberInSession"));
add_action("wp_ajax_nopriv_za_save_search_subscriber_session", array($ajaxHandler, "saveSearchForSubscriberInSession"));
add_action("wp_ajax_nopriv_za_contact_form_request", array($ajaxHandler, "contactFormRequest"));
add_action("wp_ajax_nopriv_za_send_password", array($ajaxHandler, "sendPassword"));
add_action("wp_ajax_nopriv_za_email_alert_popup", array($ajaxHandler, "emailAlertPopup"));
add_action("wp_ajax_nopriv_za_email_listing", array($ajaxHandler, "emailListing"));
add_action("wp_ajax_nopriv_za_email_signup", array($ajaxHandler, "emailSignup"));
add_action("wp_ajax_nopriv_za_clear_cache", array($ajaxHandler, "clearCache"));
add_action("wp_ajax_nopriv_za_advanced_search_multi_selects", array($ajaxHandler, "advancedSearchMultiSelects")); //@deprecated
add_action("wp_ajax_nopriv_za_advanced_search_fields", array($ajaxHandler, "getAdvancedSearchFormFields")); //@deprecated
add_action("wp_ajax_nopriv_za_area_autocomplete", array($ajaxHandler, "getAutocompleteMatches")); //@deprecated

add_action("wp_ajax_za_more_info_request", array($ajaxHandler, "requestMoreInfo"));
add_action("wp_ajax_za_schedule_showing", array($ajaxHandler, "scheduleShowing"));
add_action("wp_ajax_za_save_property", array($ajaxHandler, "saveProperty"));
add_action("wp_ajax_za_photo_tour", array($ajaxHandler, "photoTour"));
add_action("wp_ajax_za_save_search", array($ajaxHandler, "saveSearch"));
add_action("wp_ajax_za_lead_capture_login", array($ajaxHandler, "leadCaptureLogin"));
add_action("wp_ajax_za_saved_listing_comments", array($ajaxHandler, "addSavedListingComments"));
add_action("wp_ajax_za_saved_listing_rating", array($ajaxHandler, "addSavedListingRating"));
add_action("wp_ajax_za_save_listing_subscriber_session", array($ajaxHandler, "saveListingForSubscriberInSession"));
add_action("wp_ajax_za_save_search_subscriber_session", array($ajaxHandler, "saveSearchForSubscriberInSession"));
add_action("wp_ajax_za_contact_form_request", array($ajaxHandler, "contactFormRequest"));
add_action("wp_ajax_za_send_password", array($ajaxHandler, "sendPassword"));
add_action("wp_ajax_za_email_alert_popup", array($ajaxHandler, "emailAlertPopup"));
add_action("wp_ajax_za_email_listing", array($ajaxHandler, "emailListing"));
add_action("wp_ajax_za_email_signup", array($ajaxHandler, "emailSignup"));
add_action("wp_ajax_za_clear_cache", array($ajaxHandler, "clearCache"));
add_action("wp_ajax_za_tiny_mce_shortcode_dialog", array($shortcodeSelector, "getShortcodeSelectorContent"));
add_action("wp_ajax_za_advanced_search_multi_selects", array($ajaxHandler, "advancedSearchMultiSelects")); //@deprecated
add_action("wp_ajax_za_advanced_search_fields", array($ajaxHandler, "getAdvancedSearchFormFields")); //@deprecated
add_action("wp_ajax_za_area_autocomplete", array($ajaxHandler, "getAutocompleteMatches")); //@deprecated
*/

//Disable canonical urls, because we use a single page to display all results and WordPress creates a single canonical url for all of the virtual urls like the detail page and featured results.
remove_action("wp_head", "rel_canonical");

add_action( 'wp_footer', 'zipperagent_disable_input_autocomplete' );

function zipperagent_disable_input_autocomplete(){
?>
<script>
	jQuery(document).ready(function($){
		setTimeout(function () { 
			$('#zpa-main-container input[type=text]').attr('autocomplete','none');
		}, 8000)
	});
</script>
<?php
}
