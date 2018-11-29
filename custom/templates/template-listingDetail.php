<?php 
$listingNumber = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
echo do_shortcode('[single_property id='. $listingNumber .']');
?>