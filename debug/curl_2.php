<?php
if(! isset($_GET['debug']))
	return;

if( ! defined('ABSPATH') )
	include "../../../../wp-load.php";

$post=0;
$vars=array();

$rb = ZipperagentGlobalFunction()->zipperagent_rb();

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
$url = $protocol  . '://'  . $subdomain . '/api/mls/getAreaTowns/';

// $url = '/api/mls/advSearchOnlyCnt?crit=asrc:FMLS_N,GAMLS;asts:$ACT$1$,$PND$3$;&sidx=0&ps=24&o&contactId=59034302-ceed-4572-900c-f604d89aa7aa';
// $url = $protocol .'://'. $subdomain . $url;
echo $url;

$headers = array(
	'Content-type: application/json',
	'Authorization: consumer_key="'. $consumer_key .'",access_token="'. $access_token .'"',
);

$method="GET";

$response = wp_remote_post( $url, array(
	'method'	=> $method,
	'headers'	=> $headers,
	// 'body'    	=> $params ? json_encode($params) : '',
	'timeout'   => 120,
) );

echo "<pre>"; print_r( $response  ); echo "</pre>";

$res_body = wp_remote_retrieve_body( $response );

$server_output = json_decode($res_body);

echo "<pre>"; print_r( $server_output  ); echo "</pre>";