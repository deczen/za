<?php

$listingId = zipperAgentUtility::getInstance()->getQueryVar("listingNumber");
$contactIds=get_contact_id();
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = isset($_REQUEST['actual_link'])?$_REQUEST['actual_link']:$actual_link; // fix on ajax request

/* Generate custom template */
$groupname = ZipperagentGlobalFunction()->zipperagent_detailpage_group();
$group_dir = $groupname ? $groupname : 'mlspin';

$files = getDirContents(ZIPPERAGENTPATH . '/custom/templates/detail-new/'. $group_dir);

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
$asrc=$rb['web']['asrc'];
if($groupname=='mlspin' && $asrc=='0,NERENMLS'){
	$files = getDirContents(ZIPPERAGENTPATH . '/custom/templates/detail-new/'. $group_dir . '/nerenmls/');
}

echo "<templates id=\"za_property-templates\">";
foreach($files as $file){
	$ext = substr($file,-3);
	if(strpos($file, '/direct/') !==false && file_exists($file) && is_file($file) && $ext=='php'){ ?>
	<template data-sourceid="" data-filename="<?php echo basename($file); ?>">
		<?php include $file; ?>
	</template>
	<?php
	}
}
echo "</templates>";
function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}
?>
<script defer type="text/javascript" src="https://app.zipperagent.com/za-jslib/za-jsutilnew.min.js"></script>
<script defer type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/zipperagent.js" ?>"></script>
<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/rs-slider/detail.css'; ?>">
<!-- walkscore variables -->
<script>
var ws_wsid = 'ws';
var ws_address = '';
var ws_format = 'tall';
var ws_width = '100%';
var ws_height = '300';
</script>

<div id="zipperagent-content">
	
	<img style="display:block; margin:0 auto;" src="<?php echo ZIPPERAGENTURL . "images/loading.gif"; ?>" title="properties loading" alt="loading" />
	
</div>
<script>
	jQuery(document).ready(function(){
		var response = zppr.anonget('#zipperagent-content','<?php echo $listingId; ?>','<?php echo $actual_link ; ?>');
	});
</script>