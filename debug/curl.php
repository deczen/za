<?php
if(! isset($_GET['debug']))
	return;

if( ! defined('ABSPATH') )
	include "../../../../wp-load.php";

$post=0;
$vars=array();

$rb = zipperagent_rb();

$subdomain = $rb['web']['subdomain'];
$protocol = $rb['web']['protocol'];
$consumer_key = $rb['web']['authorization']['consumer_key'];
$access_token = $rb['web']['authorization']['access_token'];


// $consumer_key = 'ca82f6b5-0007-11e8-b325-22000a0b997c';
//$consumer_key = 'eff07701-0007-11e8-b325-22000a0b997c';
// $url = add_query_arg( $args, $protocol .'://'. $subdomain . $url );
// $url = 'https://ssingh.zipperagent.com/api/mls/advSearchWoCnt?crit=asrc:0;abeds:0;abths:0;apt:SF,CC;asts:ACT,NEW,PCG,BOM,EXT,RAC;&sidx=0&ps=24&o';
// $url = 'https://adam.zipperagent.com/api/mls/advSearchWoCnt?crit=asrc:0;abeds:0;abths:0;apt:SF,CC;asts:ACT,NEW,PCG,BOM,EXT,RAC;&sidx=0&ps=24&o';
// $url = 'https://terry.zipperagent.com/api/mls/advSearchWoCnt?crit=asrc:0;abeds:0;abths:0;asts:ACT,NEW,PCG,BOM,EXT,RAC;&sidx=0&ps=24&o';
// $url = $protocol  . '://'  . $subdomain . '/api/mls/getAreaTowns/';

$url = '/api/mls/advSearchOnlyCnt?crit=asrc:FMLS_N,GAMLS;asts:$ACT$1$,$PND$3$;&sidx=0&ps=24&o&contactId=59034302-ceed-4572-900c-f604d89aa7aa';
$url = $protocol .'://'. $subdomain . $url;
echo $url;

$headers = array(
	'Content-type: application/json',
	'Authorization: consumer_key="'. $consumer_key .'",access_token="'. $access_token .'"',
);

if($vars){
	$headers[]='Content-length: '. strlen(json_encode($vars));
}

try{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, $post);
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	// curl_setopt($ch, CURLOPT_HTTPGET, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	
	//curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
	//curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 2 );
	// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
	if($vars)
	curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($vars));  //Post Fields
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$json = curl_exec ($ch);
	if ($json  === false){
		$response = curl_error($ch);
		echo "<br>"; echo stripslashes($response);
	}
	curl_close ($ch);
}catch( Exception $e ){
	print_r( $e );
}
echo "<hr>";
echo( $ch );
echo "<hr>";
echo( $json );
echo "<hr>";
$server_output = json_decode($json);

echo "<pre>"; print_r( $server_output  ); echo "</pre>";