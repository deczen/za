<?php
/**
 * GLOBAL VARIABLES
 * @ declare global variables
 */	   
global $requests, $is_ajax, $is_view_save_search, $actual_link;
global $o, $location, $address, $advStNo, $advStName, $advTownNm, $advStates, $advCounties, $advStZip, $boundaryWKT, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet,
	   $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $startTime, $endTime, $daysfromnow, $openHomesMode, $openHomesOnlyYn, $maxDaysListed, $featuredOnlyYn, $hasVirtualTour, $withImage, $dateRange, $year, $alagt, $aloff, $showPagination, $showResults, $crit;

$query_args=array();
$excludes = get_long_excludes();
$requests=key_to_lowercase($requests); //convert all key to lowercase

$rb = ZipperagentGlobalFunction()->zipperagent_rb();
	   
/**
 * VARIABLES
 * @ set values for each variables
 */	 

$is_shortcode 		= (isset($requests['is_shortcode'])?$requests['is_shortcode']:'');
 
$o 					= ( isset($requests['o'])?$requests['o']:'' );
$location 			= ( isset($requests['location'])?$requests['location']:'' );
$address 			= ( isset($requests['address'])?$requests['address']:'' );
$advStNo 			= ( isset($requests['advstno'])?$requests['advstno']:'' );
$advStName 			= ( isset($requests['advstname'])?$requests['advstname']:'' );
$advTownNm 			= ( isset($requests['advtownnm'])?$requests['advtownnm']:'' );
$advStates 			= ( isset($requests['advstates'])?$requests['advstates']:'' );
$advCounties 		= ( isset($requests['advcounties'])?$requests['advcounties']:'' );
$advStZip 			= str_replace( ' ', '', ( isset($requests['advstzip'])?$requests['advstzip']:'' ) );
$boundaryWKT 		= ( isset($requests['boundarywkt'])?$requests['boundarywkt']:'' );
$propertyType 		= ( isset($requests['propertytype'])?(!is_array($requests['propertytype'])?array($requests['propertytype']):$requests['propertytype']):array() );
$propSubType 		= ( isset($requests['propsubtype'])?(!is_array($requests['propsubtype'])?array($requests['propsubtype']):$requests['propsubtype']):array() );
$status 			= ( isset($requests['status'])?$requests['status']:'' );
$minListPrice 		= ( isset($requests['minlistprice'])?$requests['minlistprice']:'' );
$maxListPrice		= ( isset($requests['maxlistprice'])?$requests['maxlistprice']:'' );
$squareFeet			= ( isset($requests['squarefeet'])?$requests['squarefeet']:'' );
$bedrooms 			= ( isset($requests['bedrooms'])?$requests['bedrooms']:'' );
$bathCount 			= ( isset($requests['bathcount'])?$requests['bathcount']:'' );
$lotAcres 			= ( isset($requests['lotacres'])?$requests['lotacres']:'' );
$minDate 			= ( isset($requests['mindate'])?$requests['mindate']:'' );
$maxDate 			= ( isset($requests['maxdate'])?$requests['maxdate']:'' );
$startTime 			= ( isset($requests['starttime'])?$requests['starttime']:'' );
$endTime 			= ( isset($requests['endtime'])?$requests['endtime']:'' );
$openHomesMode 		= ( isset($requests['openhomesmode'])?$requests['openhomesmode']:'' );
$openHomesOnlyYn 	= ( isset($requests['openhomesonlyyn'])?$requests['openhomesonlyyn']:'' );
$maxDaysListed 		= ( isset($requests['maxdayslisted'])?$requests['maxdayslisted']:'' );
$featuredOnlyYn 	= ( isset($requests['featuredonlyyn'])?$requests['featuredonlyyn']:'' );
$hasVirtualTour 	= ( isset($requests['hasvirtualtour'])?$requests['hasvirtualtour']:'' );
$withImage 			= ( isset($requests['withimage'])?$requests['withimage']:'' );
$dateRange 			= ( isset($requests['daterange'])?$requests['daterange']:'' );
$year 				= ( isset($requests['yearbuilt'])?$requests['yearbuilt']:'' );
$alagt 				= ( isset($requests['alagt'])?$requests['alagt']:'' );
$aloff 				= ( isset($requests['aloff'])?$requests['aloff']:'' );
$showPagination 	= ( isset($requests['pagination'])?$requests['pagination']:1 );
$showResults	 	= ( isset($requests['result'])?$requests['result']:1 );
$crit	 			= ( isset($requests['crit'])?$requests['crit']:'' );
$searchId			= ( isset($requests['searchid'])?$requests['searchid']:'' );
$alstid 			= ( isset($requests['alstid'])?$requests['alstid']:'' );
$column 			= ( isset($requests['column'])?$requests['column']:'' );
$school 			= ( isset($requests['school'])?$requests['school']:'' );

//distance search variables
$searchDistance 	= ( isset($requests['searchdistance'])?$requests['searchdistance']:'' );
$distance 			= ( isset($requests['distance'])?$requests['distance']:zipperagent_distance() );
$lat 				= ( isset($requests['lat'])?$requests['lat']:'' );
$lng 				= ( isset($requests['lng'])?$requests['lng']:'' );

//list view type
$view 				= ( isset($requests['view'])?$requests['view']:'' );

/**
 * PREPARATION
 * @ prepare the arguments before API process
 */

if( $is_ajax )
	$actual_link = $requests['actual_link'];
else
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

/* set count variable */
$is_ajax_count=0;

/* default status */
$status = empty($status)?zipperagent_active_status():$status;

/* set column number */
$default_column=3;
$column = empty($column)?$default_column:$column;
$column = $column > 4 || $column < 1 ? $default_column : $column;
switch( $column ){
	case 4:
			$columns_code = 'col-lg-3 col-sm-6 col-md-6 col-xs-12';
		break;
	case 1:
			$columns_code = 'col-lg-12 col-sm-12 col-md-12 col-xs-12';
		break;
	case 2:
			$columns_code = 'col-lg-6 col-sm-6 col-md-6 col-xs-12';
		break;
	case 3:
	default:
			$columns_code = 'col-lg-4 col-sm-6 col-md-6 col-xs-12';			
		break;
}

/* get town list */
$locqry=array();
$coords=null;
if( $location ){
	
	$location=!is_array($location)?array($location):$location;
	$loc_country=array();
	$loc_town=array();
	$loc_area=array();
	$loc_zipcode=array();
	
	// $towns = get_town_list();
	foreach( $location as $var ){
		$temp = urldecode($var);
		
		if( substr($temp, 0, 6) == 'acnty_' ){
			$loc_country[]=substr($temp, 6);
		}else if( substr($temp, 0, 6) == 'atwns_' ){
			$loc_town[]=substr($temp, 6);
		}else if( substr($temp, 0, 5) == 'aars_' ){
			$loc_area[]=substr($temp, 5);
		}else if( substr($temp, 0, 5) == 'azip_' ){
			$loc_zipcode[]=substr($temp, 5);
		}else{
			$loc_zipcode[]=$temp;
		}
	}
	
	/* convert array to string */
	if(sizeof($loc_country)) $locqry['acnty']=implode(',',$loc_country);
	if(sizeof($loc_town)) $locqry['atwns']=implode(',',$loc_town);
	if(sizeof($loc_area)) $locqry['aars']=implode(',',$loc_area);
	if(sizeof($loc_zipcode)) $locqry['azip']=implode(',',$loc_zipcode);
	
	// die( $locqry );
}else if( $advStNo || $advStName || $advStZip || $advStates || $advTownNm || $advCounties ){
	
	$loc_advStNo=array();
	$loc_advStName=array();
	$loc_advStZip=array();
	$loc_advStates=array();
	$loc_advTownNm=array();
	$loc_advAreas=array();
		
	if(sizeof($advStNo)) $locqry['astno']=($advStNo);
	if(sizeof($advStName)) $locqry['astnmf']=($advStName);
	if(sizeof($advStZip)) $locqry['azip']=($advStZip);
	if(sizeof($advStates)) $locqry['astt']=($advStates);
	if(sizeof($advTownNm)) $locqry['atwnnm']=($advTownNm);
	// if(sizeof($advCounties)) $locqry['acnty']=($advCounties);
	
}else if($boundaryWKT){
	// preg_match( '/POLYGON \(\((.*?)\)\)/', $boundaryWKT, $match );
	preg_match( '/POLYGON \(\((.*?)\)\)/', urldecode($boundaryWKT), $match );
	$coor_string = isset($match[1])?'('.$match[1].')':'';
	preg_match_all( "/\(([^)]+)\)/", $coor_string, $match );
	// $polygons = array_map('trim', explode( ',', $match[1] ));
	$polygons = $match[1];
	$added_polygons=array();
	foreach( $polygons as $index=>&$polygon ){
		$polygon= str_replace(' ','',$polygon);
		$temp = explode(',',$polygon);
		
		// $polygon= str_replace(', ',':',$polygon); 
		$polygon = $temp[1].':'.$temp[0];
		$added_polygons[]=$polygon;
	}
	$added_polygons[]=$added_polygons[0];
	$coords=implode(',',$added_polygons );
	// $coords="-71.057083:42.361145,-71.057083:41,-70:41,-70:42,-71.057083:42.361145";
}

/* get advanced search */
$advSearch=array();	
if( $openHomesOnlyYn || $maxDaysListed ){
	$days = 14;
	$advSearch['hasoh']=!empty($maxDaysListed)?$maxDaysListed:$days;
}
if( $withImage )
	$advSearch['hasp']="true";

if( $hasVirtualTour )
	$advSearch['hasvt']="true";

if( $year )
	$advSearch['ayblt']=$year;

if( $squareFeet )
	$advSearch['acarea']=$squareFeet;

if( $alagt )
	$advSearch['alagt']=$alagt;

if( $aloff )
	$advSearch['aloff']=$aloff;

//generate school variables
if( $school  ){
	foreach($school as $scl){
		$school_tmp = explode('_', $scl);
		$school_code=isset($school_tmp[0])?$school_tmp[0]:$scl;
		$school_name=isset($school_tmp[1])?$school_tmp[1]:'';
		
		if($school_code && $school_name)
			$requests['aschlnm'][]=$school_code.'$'.$school_name;
		else
			$requests['aschlnm'][]=$school_code;
	}
}

//remove space from alstid (listing id search)
if( isset($requests['alstid']) )
	$requests['alstid']=str_replace(' ','', $requests['alstid']);

foreach( $requests as $key=>$val ){
	if( ! in_array( strtolower($key), $excludes ) ){
		if(is_array($val)){
			$advSearch[$key]=implode(',',$val);
		}else{			
			$advSearch[$key]=($val);
		}
	}
}


/* get order */
// $o='ud:DESC;'.$o;
// $order='&o='.$o;

/* get page number */
$page = (get_query_var('page')) ? get_query_var('page') : 1;
$page = isset($requests['page']) ? $requests['page'] : $page;

$num=isset($requests['listinapage']) ? $requests['listinapage'] : ($view=='map'?10:24);
$maxtotal=isset($requests['maxlist']) ? $requests['maxlist'] : 0;

/* page correction */
if( $maxtotal > 0 ){
	$maxpage=ceil($maxtotal/$num);
	if( $page > $maxpage )
		$page = $maxpage;
}

$index=$page*$num-$num;

$open=0;

/**
 * API CALL
 * @ call method and get properties
 */

if( $openHomesMode ){ // open houses mode
	
	$current_date = current_time( 'Y-m-d' );
	$daytoadd = isset($daysfromnow)?$daysfromnow:"14";
	// echo $current_date;
	if( $minDate )
	$startDate = date( 'm/d/Y', strtotime ( $minDate ) ); 
	else
	$startDate = date( 'm/d/Y', strtotime( $current_date ) ); 	
	
	if( $maxDate )
	$endDate = date( 'm/d/Y', strtotime ( $maxDate ) );
	else
	$endDate = date( 'm/d/Y', strtotime ( $current_date . ' + '. $daytoadd .' days' ) );
	
	$search=array(
		'asrc'=>$rb['web']['asrc'],
		// 'aloff'=>$rb['web']['aloff'],
		'abeds'=>$bedrooms,
		'abths'=>$bathCount,
		'apt'=>implode( ',', array_map("trim",$propertyType) ),
		'apts'=>implode( ',', array_map("trim",$propSubType) ),
		'asts'=>$status,
		'apmin'=>za_correct_money_format($minListPrice),
		'apmax'=>za_correct_money_format($maxListPrice),
		'aacr'=>$lotAcres,
	);
	
	$search= array_merge($search, $locqry, $advSearch);
	
	$vars=array(
		'crit'=>proces_crit($search),
		'startDate'=>$startDate,
		'endDate'=>$endDate,
		'sidx'=>$index,
		'ps'=>$num,
		'o'=>$o,
	);
	
	
	if($startTime){
		$vars['startTime']=$startTime;
	}
	if($endTime){
		$vars['endTime']=$endTime;
	}	
	if( $crit )
		$vars['crit'] = $crit;
	
	if($view=='map' || $view=='marker'){
		
		$maplimit=100;
		$mapvars=$vars;
		$mapindex=floor($index / $maplimit);
		$mapindex=$mapindex<0?0:$mapindex;
		$mapvars['sidx']=$mapindex;
		$mapvars['ps']=$maplimit;
		$mapresult = zipperagent_run_curl( "/api/mls/getopenhouses", $mapvars);
		$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
		
		//get properties from maplist
		$mappedIndex=$index % $maplimit;
		$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
		$list=array();
		for($i=$mappedIndex; $i<$mappedLimit; $i++){
			
			if(isset($maplist[$i]))
				$list[]=$maplist[$i];
		}
			
		$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult);
	}else{
		$result = zipperagent_run_curl( "/api/mls/getopenhouses", $vars);
		
		$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
		$list=isset($result['filteredList'])?$result['filteredList']:$result;
	}
	
	$open=1;
}else if( isset($coords) ){ // map mode
	
	$search=array(
		'asrc'=>$rb['web']['asrc'],
		// 'aloff'=>$rb['web']['aloff'],
		'abeds'=>$bedrooms,
		'abths'=>$bathCount,
		'apt'=>implode( ',', array_map("trim",$propertyType) ),
		'apts'=>implode( ',', array_map("trim",$propSubType) ),
		'asts'=>$status,
		'apmin'=>za_correct_money_format($minListPrice),
		'apmax'=>za_correct_money_format($maxListPrice),
		'aacr'=>$lotAcres,
	);
	
	$search= array_merge($search, $locqry, $advSearch);
	
	// $search=array(
		// 'asrc'=>$rb['web']['asrc'],
		// 'asts'=>$status,
	// );
	
	$vars=array(
		'coords'=>$coords,
		'crit'=>proces_crit($search),
		'sidx'=>$index,
		'ps'=>$num,
		'o'=>$o,
	);
	
	if( $crit )
		$vars['crit'] = $crit;
	
	if($view=='map'){
		$maplimit=100;
		$mapvars=$vars;
		$mapindex=floor($index / $maplimit);
		$mapindex=$mapindex<0?0:$mapindex;
		$mapvars['sidx']=$mapindex;
		$mapvars['ps']=$maplimit;
		
		$mapresult = zipperagent_run_curl( "/api/mls/withinWoCnt", $mapvars );
	
		$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
				
		//get properties from maplist
		$mappedIndex=$index % $maplimit;
		$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
		$list=array();
		for($i=$mappedIndex; $i<$mappedLimit; $i++){
			
			if(isset($maplist[$i]))
				$list[]=$maplist[$i];
		}
		
		if(!$is_ajax){
			$resultCount = zipperagent_run_curl( "/api/mls/withinOnlyCnt", $mapvars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
		}else{		
			$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
		}
		
	}else if($view=='marker'){
		
		$loop=1;
		$maplist=array();
		$mapindex=$index;
		$maplimit=5000;
		$mapvars=$vars;
		unset($mapvars['coords']); //remove coords from variables, search all locations
		// $mapvars['coords']='';
		$mapvars['micro']=true;
		// $mapvars['o']='ud:DESC';
		$maplisttemp=array();
		for($i=0; $i<$loop; $i++){
			if($i>0 && empty($maplisttemp))
				break;
			
			$mapvars['sidx']=$mapindex;
			$mapvars['ps']=$maplimit;
			
			$mapresult = zipperagent_run_curl( "/api/mls/withinWoCnt", $mapvars );
			// $mapresult = zipperagent_run_curl( "/api/mls/withinBoxWoCnt", $mapvars );
			
			// print_r($mapvars);
			
			$maplisttemp=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
			$maplist=array_merge($maplist, $maplisttemp);
			
			$mapindex+=($maplimit-1);
		}
		
		if(!$is_ajax){			
			$resultCount = zipperagent_run_curl( "/api/mls/withinOnlyCnt", $mapvars, 0, '', true );
			// $resultCount = zipperagent_run_curl( "/api/mls/withinBoxOnlyCnt", $mapvars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
		}else{		
			$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
		}
		
	}else{
		$result = zipperagent_run_curl( "/api/mls/within", $vars );
		$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
		$list=isset($result['filteredList'])?$result['filteredList']:$result;
	}
	
}else if( $searchDistance=="true" || $searchDistance=="1" || ($lat && $lng) ){ // map mode
	
	$search=array(
		'asrc'=>$rb['web']['asrc'],
		// 'aloff'=>$rb['web']['aloff'],
		'abeds'=>$bedrooms,
		'abths'=>$bathCount,
		'apt'=>implode( ',', array_map("trim",$propertyType) ),
		'apts'=>implode( ',', array_map("trim",$propSubType) ),
		'asts'=>$status,
		'apmin'=>za_correct_money_format($minListPrice),
		'apmax'=>za_correct_money_format($maxListPrice),
		'aacr'=>$lotAcres,
	);
	
	$search= array_merge($search, $locqry, $advSearch);
	
	// $search=array(
		// 'asrc'=>$rb['web']['asrc'],
		// 'asts'=>$status,
	// );
	
	$vars=array(
		'crit'=>proces_crit($search),
		'distance'=>$distance,
		'lat'=>$lat,
		'lng'=>$lng,
		'sidx'=>$index,
		'ps'=>$num,
	);
	
	if( $crit )
		$vars['crit'] = $crit;
	
	// $crit="crit=acnty:LINC,CATA,GASTON;asts:ACT,UCS,CS;apt:SFR,CND;alotd:WTRVIEW,WTRFRNT;awbn:Lake Norman";
	// $xxx="?o=alstp:ASC&distance=402.336&lat=0.00000&lng=0.00000&sidx=0&ps=20";
	
	$result = zipperagent_run_curl( "/api/mls/distanceWoCnt", $vars );	
	$list=isset($result['filteredList'])?$result['filteredList']:$result;
	
	if(!$is_ajax){
		$resultCount = zipperagent_run_curl( "/api/mls/distanceOnlyCnt", $vars, 0, '', true );
		$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
	}else{		
		$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
	}
	
}else{
	
	$search=array(
		'asrc'=>$rb['web']['asrc'],
		// 'aloff'=>$rb['web']['aloff'],
		'abeds'=>$bedrooms,
		'abths'=>$bathCount,
		'apt'=>implode( ',', array_map("trim",$propertyType) ),
		'apts'=>implode( ',', array_map("trim",$propSubType) ),
		'asts'=>$status,
		'apmin'=>za_correct_money_format($minListPrice),
		'apmax'=>za_correct_money_format($maxListPrice),
		'aacr'=>$lotAcres,
	);
	
	if($alstid){
		unset($search['asts']);
	}
	
	$search= array_merge($search, $locqry, $advSearch);
	
	$vars=array(
		'crit'=>proces_crit($search),
		'sidx'=>$index,
		'ps'=>$num,
		'o'=>$o,
	);
	// echo "<pre>"; print_r( $vars ); echo "</pre>";
	if( $crit )
		$vars['crit'] = $crit;
	
	$contactIds=get_contact_id();
	if( $contactIds )
		$vars['contactId'] = implode(',',$contactIds);
	
	if($view=='map'){
		$maplimit=100;
		$mapvars=$vars;
		$mapindex=floor($index / $maplimit);
		$mapindex=$mapindex<0?0:$mapindex;
		$mapvars['sidx']=$mapindex;
		$mapvars['ps']=$maplimit;
		$mapresult = zipperagent_run_curl( "/api/mls/advSearchWoCnt", $mapvars );
		$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
		
		//get properties from maplist
		$mappedIndex=$index % $maplimit;
		$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
		$list=array();
		for($i=$mappedIndex; $i<$mappedLimit; $i++){
			
			if(isset($maplist[$i]))
				$list[]=$maplist[$i];
		}
		
		if(!$is_ajax){
			$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
		}else{		
			$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
		}
	}else{
		$result = zipperagent_run_curl( "/api/mls/advSearchWoCnt", $vars );	
		if(!$is_ajax){
			$resultCount = zipperagent_run_curl( "/api/mls/advSearchOnlyCnt", $vars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?$resultCount['result']:0;
		}else{		
			$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result); //unused, always show 0
		}
		
		$list=isset($result['filteredList'])?$result['filteredList']:$result;
	}
	
	$is_ajax_count=1;
}

$enable_filter= $coords || $openHomesMode == "true" ? false : true;
$top_search_enabled = ! $boundaryWKT && ! $openHomesMode;

/**
 * SAVE CRIT SESSION
 * @ save search criteria session for detail page
 */
if(!zp_using_criteria()){
	$saved_crit=$search;
	$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
	$_SESSION['criteriaBase64'] = $critBase64;	
	unset($saved_crit);
} 
/**
 * TEMPLATE PROCESS
 * @ populate properties and build the template
 */

if(!isset($list['dataCount']) && $list){ //property exists
	switch( $view ){
		case "map":
				ob_start();
				include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-map-index.php";
				$html = ob_get_clean();
			break;
		case "photo":
				ob_start();
				include ZIPPERAGENTPATH . "/custom/templates/listing/template-view-photo-index.php";
				$html = ob_get_clean();
			break;
		case "gallery":
		default:
				ob_start();
				if( $is_shortcode ){
					include "template-shortcode-results.php";
				}else{
					
					include ZIPPERAGENTPATH . '/custom/templates/listing/template-defaultListing.php';
				}
				$html = ob_get_clean();
			break;
	}
}else{
	ob_start();
	include ZIPPERAGENTPATH . "/custom/templates/listing/template-no-property.php";
	$html = ob_get_clean();
}
/**
 * SCRIPTS HANDLER
 * @ javascript
 */

switch( $view ){
	case "map":
	case "photo":
	case "gallery":
	default:
			ob_start();
			
			if( $enable_filter ):
			?>
			<script>
				<?php /*
				// jQuery(document).on('click', '#saveSearchButton:not(.needLogin)', function(){
				// jQuery('.zpa-listing-search-results').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
				// jQuery('#zipperagent-content').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){ */ ?>
				jQuery('.zy_filter-wrap').unbind().on('click', '#saveSearchButton:not(.needLogin)', function(){
					var contactId=jQuery(this).attr('contactId');
					var isLogin=jQuery(this).attr('isLogin');
					<?php if($is_view_save_search): ?>
					update_search();
					<?php else: ?>
					save_search(contactId,isLogin);
					<?php endif; ?>
					return false;
				});	
				
				<?php if($is_view_save_search){ ?>
				function update_search(){
					var search = jQuery.parseJSON('<?php echo json_encode( $search ); ?>');
					var data = {
						action: 'update_search_result',
						'criteria': search,			
						'id': '<?php echo $searchId ?>',
					};
					
					console.time('update search');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
							// console.log(response);
							if( response['result'] ){
								var searchId = response['result'];
								jQuery('#saveSearchButton').hide();
								jQuery('#savedSearchButton').show();
								jQuery('.save-favorite-btn').attr( 'searchId', searchId );
								jQuery('.save-favorite-btn').attr( 'contactId', contactId );
								jQuery('.property_url').each(function(){
									var url = jQuery(this).attr( 'href' );
									
									if(searchId && searchId!==1)
										jQuery(this).attr( 'href', url + '?searchId=' + searchId );
									
									// jQuery(this).attr( 'href', url + '&searchId=' + searchId );
								});
							}else{
								alert( 'save failed!' );
							}
							
							console.timeEnd('update search');
						},
						error: function(){
							console.timeEnd('update search');
						}
					});
				}
				<?php }else{ ?>
				function save_search(contactId,isLogin){
					var vars = jQuery.parseJSON('<?php echo json_encode( $vars ); ?>');
					vars['contactId']=contactId;
					var data = {
						action: 'save_search_result',
						'vars': vars,  
						'isLogin': isLogin,  
					};
					
					console.time('save search');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {
							// console.log(response);
							if( response['result'] ){
								var searchId = response['result'];
								jQuery('#saveSearchButton').hide();
								jQuery('#savedSearchButton').show();
								jQuery('.save-favorite-btn').attr( 'searchId', searchId );
								jQuery('.save-favorite-btn').attr( 'contactId', contactId );
								jQuery('.property_url').each(function(){
									var url = jQuery(this).attr( 'href' );
									
									if(searchId && searchId!==1)
										jQuery(this).attr( 'href', url + '?searchId=' + searchId );
									
									// jQuery(this).attr( 'href', url + '&searchId=' + searchId );
								});
								
								//set topbar count
								jQuery('.save-search-count .za-count-num').html(response['saved_search_count']);
							}else{
								alert( 'save failed!' );
							}
							
							console.timeEnd('save search');
						},
						error: function(){
							console.timeEnd('save search');
						}
					});
				}
				<?php } ?>
			</script>
			<?php endif; ?>
			<script>
				jQuery('.zpa-listing-search-results').unbind().on('click', '.save-favorite-btn:not(.needLogin)', function(){
					
					var element = jQuery(this);
					
					if( element.hasClass('active') )
						return false;		
					
					var searchId = element.attr('searchId');
					var contactId = element.attr('contactId');
					var listingId = element.attr('listingId');
					var isLogin = element.attr('isLogin');
					
					save_favorite_listing(element, listingId, contactId, searchId, isLogin );
					
					return false;
				});
				
				function save_favorite_listing(element, listingId, contactId, searchId, isLogin){
					var crit={
						<?php
						$saved_crit=array();
						if(!$crit){
							$search=array(
								'asrc'=>$rb['web']['asrc'],
								'aloff'=>$rb['web']['aloff'],
								'abeds'=>$bedrooms,
								'abths'=>$bathCount,
								'apt'=>implode( ',', array_map("trim",$propertyType) ),
								'apts'=>implode( ',', array_map("trim",$propSubType) ),
								'asts'=>$status,
								'apmin'=>za_correct_money_format($minListPrice),
								'apmax'=>za_correct_money_format($maxListPrice),
								'aacr'=>$lotAcres,
							);	
							
							$saved_crit= array_merge($search, $locqry, $advSearch);
						}else{
							$temp = explode(';', $crit);
							foreach( $temp as $val ){
								if( empty($val) )
									continue;
								
								$temp2 = explode(':', $val);
								$saved_crit[$temp2[0]]=$temp2[1];
							}
						}
						
						foreach( $saved_crit as $key=>$val ){
							echo "'{$key}': '{$val}',"."\r\n";
						}
						?>
					};
					var data = {
						action: 'save_as_favorite',
						'listingId': listingId,
						'contactId': contactId,
						'crit': crit,
						'searchId': searchId,
						'isLogin': isLogin,
					};
					
					console.time('save favorite');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
							// console.log(response);
							if( response['result'] ){
								// alert('success');
								element.addClass('active');
								
								//set topbar count
								jQuery('.favorites-count .za-count-num').html(response['favorites_count']);
							}else{
								// alert( 'Submit failed!' );
							}
							
							console.timeEnd('save favorite');
						},
						error: function(){
							console.timeEnd('save favorite');
						}
					});
				}
			</script>
			<script>
				jQuery(document).on('click', '#zpa-main-container .dropdown-menu', function (e) {
				  e.stopPropagation();
				});
			</script>
			<?php if($is_ajax_count): ?>
			<script>
				jQuery(document).ready(function(){
					var vars={
						<?php 
						foreach($vars as $key=>$val){
							echo "$key: '$val',"."\r\n";
						}			
						?>
					};
					
					var data = {
						action: 'prop_result_and_pagination',
						'vars': vars,
						'page': '<?php echo $page; ?>',
						'num': '<?php echo $num; ?>',
						'maxlist': '<?php echo $maxtotal; ?>',
						'actual_link': '<?php echo $actual_link; ?>',
					};
					
					console.time('generate list count/pagination');
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
						
							if( response['result'] ){
								jQuery('.zpa-listing-search-results .prop-total').html(response['html_count']);
								jQuery('.zpa-listing-search-results .prop-pagination').html('<div class="col-xs-12">' + response['html_pagination'] + '</div>');
							}
							
							console.timeEnd('generate list count/pagination');
						},
						error: function(){
							console.timeEnd('generate list count/pagination');
						}
					});
				});
			</script>
			<?php endif; ?>
			<?php auto_trigger_button_script(); ?>
			<?php
			$scripts = ob_get_clean();
		break;
}

echo $html;
echo $scripts;