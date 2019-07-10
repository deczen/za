<?php
if(! isset($_GET['debug']))
	return;

if( ! defined('ABSPATH') )
	include "../../../../wp-load.php";

$debug=isset($_GET['debug'])?$_GET['debug']:0;

$config = zipperagent_config($debug);
echo "<pre>"; print_r( $config ); echo "</pre>";

$rb = zipperagent_rb($debug);
echo "<pre>"; print_r( $rb ); echo "</pre>";

if($debug)
	zipperagent_clear_caches();
?>