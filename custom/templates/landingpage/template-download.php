<?php
global $post;

$postmeta = get_post_meta( $post->ID );

$floorplan = isset($postmeta['_lp_floorplan_pdf'][0])?$postmeta['_lp_floorplan_pdf'][0]:'';
$featuresheet = isset($postmeta['_lp_feature_sheet_pdf'][0])?$postmeta['_lp_feature_sheet_pdf'][0]:'';
$additionals = isset($postmeta['_lp_additional_files_pdf'][0])?unserialize($postmeta['_lp_additional_files_pdf'][0]):array();

echo "<ul>";
if($floorplan){
	$url = wp_get_attachment_url($floorplan);
	echo "<li><a href='$url'>Download the Floorplan</a></li>";
}

if($featuresheet){
	$url = wp_get_attachment_url($featuresheet);
	echo "<li><a href='$url'>Download the Feature Sheet</a></li>";
}

if($additionals){
	foreach($additionals as $additional){
		$attachid=$additional[0];
		$title = str_replace('-',' ', get_the_title($attachid));
		$url = wp_get_attachment_url($attachid);
		echo "<li><a href='$url'>$title</a></li>";
	}
}
echo "</ul>";
?>

