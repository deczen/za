<?php

// function zipperagent_user_slug(){ return ''; } function get_single_property(){ return ''; } function zipperagent_url(){ return ''; } function zipperagent_detailpage_group(){ return ''; } function is_zipperagent_new_detail_page(){ return ''; } function zipperagent_get_cookie(){ return ''; } function zipperagent_set_cookie(){ return ''; }function getAgentList(){ return ''; } function zipperagent_rb(){ return ''; } function zipperagent_page_url(){ return ''; } function getCurrentUserContactLogin(){ return ''; } function zipperagent_get_favorites_count(){ return ''; }function zipperagent_get_saved_search_count(){ return ''; }function is_facebook_bot(){ return ''; }
// function xglobal_magicsuggest_script(){ return ''; }function xzipperagent_currency(){ return ''; } function xget_short_excludes(){ return ''; }  function xkey_to_lowercase(){ return ''; } function xis_open_house_search_enabled(){ return ''; }function xis_popup_detail_page_only(){ return ''; } function xget_contact_id(){ return ''; }  function xzipperagent_is_close_popup_enabled(){ return ''; } 
// return;

include "lib/Mobile_Detect/Mobile_Detect.php";
include "functions.php";
include "hooks.php";
include "hooks-admin.php";
include "ajax.php";
// include "shortcode.php";
include "widget.php";
include "contactform7.php";
include "post-type-listing.php";
include "post-type-landingpage.php";
include "Divi.php";
include "roles.php";
include "remove-cache.php";

//admin part
if(is_admin()){	
include "metabox.php";
include "updater/Plugin-Update.php";
}
/*disabled*/
// include "listing-post-type.php";
// include "thankyou.php";