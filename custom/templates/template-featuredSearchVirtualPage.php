<?php
global $zpa_show_login_popup, $requests;

$zpa_show_login_popup=1;

$currdate = current_time('timestamp');
$startDate = date( 'm/d/Y', $currdate ) ; 
// $startDate = date( 'd/m/Y', strtotime ( '-6 month' , $currdate ) ) ; 
$endDate = date( 'm/d/Y', strtotime ( '+1 month' , $currdate ) ) ; 

// $result = zipperagent_run_curl( "/mls/featuredListingDefs?login=Guddu&sidx=0&ps=10" );
$result = zipperagent_run_curl( "/api/mls/featuredListingDefs?sidx=0&ps=10" );
// echo "/api/mls/getopenhouses?startDate={$startDate}&endDate={$endDate}";
// echo "<pre>"; print_r( $result ); echo "</pre>"; die();

$query_args=array();
$list=$result;

?>
<?php if( $list ): ?>

<div id="zpa-main-container" class="zpa-container " style="display: inline;">
			
	<?php include ZIPPERAGENTPATH . '/custom/templates/listing/template-defaultListing.php'; ?>
	
	<?php // include ZIPPERAGENTPATH . '/custom/templates/template-needLogin.php'; ?>
</div>