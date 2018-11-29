<?php

if( !empty($_POST) && isset($_POST['searchProfileId']) ){
	$searchId = $_POST['searchProfileId'];
	zipperagent_run_curl( "/api/mls/deleteSearch/{$searchId}", array(), 1 );
}

// include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedSearchList.php";

$myaccount_url=zipperagent_page_url('property-organizer-edit-subscriber');
wp_redirect($myaccount_url . '?menu=my-search');
die();