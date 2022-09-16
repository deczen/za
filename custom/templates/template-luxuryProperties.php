<?php
/**
 * GLOBAL VARIABLES
 * @ declare global variables
 */	   
global $requests;
global $showPagination, $showResults;

$excludes = array('sidx','ps');
$requests=key_to_lowercase($requests); //convert all key to lowercase

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
	   
/**
 * VARIABLES
 * @ set values for each variables
 */	 
 
$showPagination 	= ( isset($requests['pagination'])?$requests['pagination']:1 );
$showResults	 	= ( isset($requests['result'])?$requests['result']:1 );
 
/**
 * PREPARATION
 * @ prepare the arguments before API process
 */

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

/* get order */
// $o='ud:DESC;'.$o;
// $order='&o='.$o;

/* get page number */
$page = (get_query_var('pagenum')) ? get_query_var('pagenum') : 1;
$page = isset($requests['pagenum']) ? $requests['pagenum'] : $page;

$num=isset($requests['listinapage']) ? $requests['listinapage'] : 24;
$maxtotal=isset($requests['maxlist']) ? $requests['maxlist'] : 0;

/* page correction */
if( $maxtotal > 0 ){
	$maxpage=ceil($maxtotal/$num);
	if( $page > $maxpage )
		$page = $maxpage;
}

$index=$page*$num-$num;

/**
 * API CALL
 * @ call method and get properties
 */

$vars=array(
	'sidx'=>$index,
	'ps'=>$num,
);

foreach($requests as $variable=>$value){
	if(!in_array($variable,$excludes))
		$vars[$variable]=$value;
}

$result = zipperagent_run_curl( "/api/mls/buildings", $vars );
$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
$list=isset($result['filteredList'])?$result['filteredList']:$result;
	
// echo "<pre>"; print_r( $list ); echo "</pre>";

/**
 * TEMPLATE PROCESS
 * @ populate properties and build the template
 */
?>

<?php if( $list ): ?>
		
	<?php include ZIPPERAGENTPATH . '/custom/templates/luxury/template-defaultLuxuryListing.php'; ?>

<?php else: ?>
	
<div class="zpa-listing-search-results">
	<!-- Display hotsheet display text for saved search pages but not for listing or open home report pages -->
	<div class="row mb-10">			
	</div>
	<div class="row mb-10 mt-25">
		<div class="col-xs-4"> No Properties Found </div>
	</div>
	<div class="row "> </div>
	<div class="row">
		<div class="col-xs-6">
			<ul class="pagination">
				<li class="disabled"><a href="#">&laquo;</a>
				</li>
				<li class="disabled"><a href="#">1 of 0</a>
				</li>
				<li class="disabled"><a href="#">&raquo;</a>
				</li>
			</ul>
		</div>
		<!--col-->
	</div>
	<!--row-->
</div>

<?php endif; ?>