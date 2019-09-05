<?php
/**
 * GLOBAL VARIABLES
 * @ declare global variables
 */	   
global $requests, $is_ajax, $actual_link, $type, $list, $maplist, $enable_filter, $search, $markers, $infoWindows;
global $searchId;
global $o, $location, $address, $advStNo, $advStName, $advTownNm, $advStates, $advCounties, $advStZip, $boundaryWKT, $propertyType, $status, $minListPrice, $maxListPrice, $squareFeet,
	   $bedrooms, $bathCount, $lotAcres, $minDate, $maxDate, $openHomesMode, $openHomesOnlyYn, $maxDaysListed, $featuredOnlyYn, $hasVirtualTour, $withImage, $dateRange, $year, $alagt, $aloff, $showPagination, $showResults, $crit;
global $html, $sidebar;

$search = array();
$excludes = get_long_excludes();
$requests=key_to_lowercase($requests); //convert all key to lowercase
	   
/**
 * VARIABLES
 * @ set values for each variables
 */	   
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

if( $type=="photo" || $type=="map" ){
	$num=10;
}else{
	$num=24;
}

$num=isset($requests['listinapage']) ? $requests['listinapage'] : $num;
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
	// echo $current_date;
	if( $minDate )
	$startDate = date( 'm/d/Y', strtotime ( $minDate ) ); 
	else
	$startDate = date( 'm/d/Y', strtotime( $current_date ) ); 	
	
	if( $maxDate )
	$endDate = date( 'm/d/Y', strtotime ( $maxDate ) );
	else
	$endDate = date( 'm/d/Y', strtotime ( $current_date . ' + 14 days' ) );
	
	$vars=array(
		'startDate'=>$startDate,
		'endDate'=>$endDate,
		'sidx'=>$index,
		'ps'=>$num,
		'o'=>$o,
	);
	
	if( $crit )
		$vars['crit'] = $crit;
	
	if($type=='map' || $type='marker'){
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
	
	$vars=array(
		'coords'=>$coords,
		'crit'=>proces_crit($search),
		'sidx'=>$index,
		'ps'=>$num,
		'o'=>$o,
	);
	
	if( $crit )
		$vars['crit'] = $crit;
	
	if($type=='map' || $type='marker'){
		$maplimit=100;
		$mapvars=$vars;
		$mapindex=floor($index / $maplimit);
		$mapindex=$mapindex<0?0:$mapindex;
		$mapvars['sidx']=$mapindex;
		$mapvars['ps']=$maplimit;
		
		if($type=='map')
			$mapresult = zipperagent_run_curl( "/api/mls/withinWoCnt", $mapvars );
		else if($type='marker')
			$mapresult = zipperagent_run_curl( "/api/mls/withinBoxWoCnt", $mapvars );
	
		$maplist=isset($mapresult['filteredList'])?$mapresult['filteredList']:$mapresult;
				
		//get properties from maplist
		$mappedIndex=$index % $maplimit;
		$mappedLimit=$mappedIndex + $num > $maplimit ? $maplimit : $mappedIndex + $num;
		$list=array();
		for($i=$mappedIndex; $i<$mappedLimit; $i++){
			
			if(isset($maplist[$i]))
				$list[]=$maplist[$i];
		}
		
		if(!$is_ajax && $type=='map'){
			$resultCount = zipperagent_run_curl( "/api/mls/withinOnlyCnt", $mapvars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
		}else if(!$is_ajax && $type=='marker'){
			$resultCount = zipperagent_run_curl( "/api/mls/withinBoxOnlyCnt", $mapvars, 0, '', true );
			$count=isset($resultCount['status']) && $resultCount['status']==='SUCCESS'?(isset($resultCount['result']->dataCount)?$resultCount['result']->dataCount:0):0;
		}else{		
			$count=isset($mapresult['dataCount'])?$mapresult['dataCount']:sizeof($mapresult); //unused, always show 0
		}
		
	}else{
		$result = zipperagent_run_curl( "/api/mls/within", $vars );
		$count=isset($result['dataCount'])?$result['dataCount']:sizeof($result);
		$list=isset($result['filteredList'])?$result['filteredList']:$result;
	}
	
	$is_ajax_count=1;
	
}else{ //if( $featuredOnlyYn=="true" || $status=='SLD' ){ //featured mode
	
	$rb = zipperagent_rb();
	
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
	
	if( $crit )
		$vars['crit'] = $crit;
	
	$contactIds=get_contact_id();
	if( $contactIds )
		$vars['contactId'] = implode(',',$contactIds);
	
	if($type=='map' || $type='marker'){
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

$searchId=isset($result['id'])?$result['id']:'';
$enable_filter= false;


/**
 * TEMPLATE PROCESS
 * @ populate properties and build the template
 */

switch( $type ){
	case "map":
			ob_start();
			include ZIPPERAGENTPATH . "/custom/templates/template-searchMapView.php";
			$html = ob_get_clean();
		break;
	case "photo":
			ob_start();
			include ZIPPERAGENTPATH . "/custom/templates/template-searchPhotoView.php";
			$html = ob_get_clean();
			ob_start();
			include ZIPPERAGENTPATH . "/custom/templates/template-searchPhotoViewSidebar.php";
			$sidebar = ob_get_clean();
		break;
	case "marker":
			$i=0;
			$markers=array();
			foreach($maplist as $property){
				
				$fulladdress = zipperagent_get_address($property);
				$lat = $property->lat;
				$lng = $property->lng;
				$listingId = $property->id;
				$beds = isset($property->nobedrooms)?$property->nobedrooms:'-';
				$bath = isset($property->nobaths)?$property->nobaths:'-';
				$sqft = isset($property->squarefeet)?$property->squarefeet:'-';
				$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
				$longprice = zipperagent_currency() . number_format_i18n( $price, 0 );
				$shortprice = zipperagent_currency() . number_format_short( $price, 0 );
				$proptype = $property->proptype;
				if( strpos($property->photoList[0]->imgurl, 'mlspin.com') !== false )
					$src = "//media.mlspin.com/photo.aspx?mls={$property->listno}&w=100&h=100&n=0";
				else
					$src = str_replace('http://','//',$property->photoList[0]->imgurl);
				
				$saved_crit=$search;
				$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
				if(!empty($searchId)){
					$query_args['searchId']= $searchId;
				}
				if(zp_using_criteria() && !empty($critBase64)){
					$query_args['criteria']= $critBase64;
				}
				if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
					$query_args['newsearchbar']= 1;
				}
				$single_url = str_replace( '/wp-admin/admin-ajax.php?=', '', add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) ) );
				$is_login=getCurrentUserContactLogin() ? 1:0;
				$is_active=zipperagent_is_favorite($property->id)?"active":"";
				$searchId='';
				$str_contactIds=implode(',',$contactIds);
				
				$markers[$i][] = str_replace( "'", "\'", $fulladdress );
				$markers[$i][] = $lat;
				$markers[$i][] = $lng;
				$markers[$i][] = $listingId;
				$markers[$i][] = $longprice;
				$markers[$i][] = $shortprice;
				$markers[$i][] = $beds;
				$markers[$i][] = $bath;
				$markers[$i][] = $i;
				$markers[$i][] = $proptype;
				
				$infoWindows[$i][]="<div class=\"info_content\">
										<div class=\"pic\"><img style=\"display: block; margin: 0 auto;\" src=\"{$src}\" /></div>
										<div class=\"content\">		
											<a href=\"{$single_url}\"><strong>". str_replace( "'", "\'", $fulladdress )  ."</strong></a>
											<p class=\"price\">{$price}</p>
											<p class=\"favorite\"><a class=\"listing-{$property->id} save-favorite-btn {$is_active}\" isLogin=\"{$is_login}\" listingId=\"{$property->id}\" searchId=\"{$searchId}\" contactId=\"{$str_contactIds}\" href=\"#\" afteraction=\"save_favorite_listing\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> Favorite</a></p>
											<p class=\"info\">{$beds} BEDS | {$bath} BATH | {$sqft} SQFT</p>
										</div>
									</div>";
				
				$i++;
			}
		break;
	case "gallery":
	default:
			ob_start();
			include ZIPPERAGENTPATH . "/custom/templates/template-searchGalleryView.php";
			$html = ob_get_clean();
		break;
}