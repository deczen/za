<?php
global $requests;

$contactIds=get_contact_id();
$savedListingId = zipperAgentUtility::getInstance()->getQueryVar("savedListingId");

// $result = zipperagent_run_curl( "/api/mls/deleteListing/{$contactId}/{$savedListingId}", array(), 1 );
$result = zipperagent_run_curl( "/api/mls/multi/deleteListing?listingId={$savedListingId}&contactId=". implode(',',$contactIds), array(), 1 );
// echo "<pre>"; print_r( $result ); echo "</pre>";
// echo 'ID: '. $savedListingId;
// include ZIPPERAGENTPATH . "/custom/templates/template-organizerViewSavedListingList.php";

$myaccount_url=zipperagent_page_url('property-organizer-edit-subscriber');
wp_redirect($myaccount_url . '?menu=my-favorite');
die();