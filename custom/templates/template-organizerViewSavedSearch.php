<?php
global $requests;

if( ! getCurrentUserContactLogin() ){
	$login_form=zipperagent_page_url('property-organizer-login');
	wp_safe_redirect($login_form);
	die();
}

$requests = $_REQUEST;

$searchId = zipperAgentUtility::getInstance()->getQueryVar("searchProfileId");

$result = zipperagent_run_curl( "/api/mls/search/{$searchId}" );

// echo "<pre>"; print_r( $result ); echo "</pre>";
$criteria = isset($result['criteria'])?$result['criteria']:'';
$temp=explode(';',$criteria);
$arr=array();
$location=array();
$location_array=array('acnty', 'atwns', 'azip');

foreach( $temp as $val ){
	if( !$val )
		continue;
		
	$temp2=explode(':',$val);
	$key=$temp2[0];
	$value=isset($temp2[1])?$temp2[1]:'';
	$arr[$key]=$value;
	
	//set location
	if(in_array($key, $location_array)){
		$loc_arr=explode(',',$value);
		foreach($loc_arr as &$loc){
			$location[]= $key.'_'.$loc;
		}
	}
	
	//set default status
	if($key=='asts' ){
		$activeTest=explode(',',$value);
		$defaultActiveTest=explode(',',zipperagent_active_status());
		$check=true;
		foreach($activeTest as $stat){
			
			if(!in_array($stat,$defaultActiveTest)){
				$check=false;
			}
		}
		
		if($check && !isset($requests[convert_key_name($key)])){
			$requests[convert_key_name($key)]='';
		}
	}
	
	if(!in_array($key, $location_array) && $key!='asrc'){
		if(!isset($requests[convert_key_name($key)])){
			$requests[convert_key_name($key)]=$value;
		}
	}
}

//put locations in one element
if(sizeof($location) && !isset($requests['location'])){
	$requests['location'] = $location;
}

//set is_view_save_search
if( isset($result['id']) ){
	$requests['searchid']=$result['id'];
	$requests['is_view_save_search']=1;
}

// echo "<pre>"; print_r( $requests ); echo "</pre>";

if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1 || zipperagent_detailpage_group()=='mlspin'){
	include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage_new.php";
}else{
	include ZIPPERAGENTPATH . "/custom/templates/template-searchResultsVirtualPage.php";
}