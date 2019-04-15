<?php
	if( ! defined('ABSPATH') )
		include "../../../../../wp-load.php";
	
	// define the path and name of cached file
	$dir = ZIPPERAGENTPATH . '/custom/caches/';
	if (!file_exists($dir)) {
		mkdir($dir, 0777, true);
	}
	$filename = 'towns-' . date('M-d-Y').'.php';
	$cachefile = $dir.$filename;
	
	$files = scandir($dir);
	foreach($files as $file) {
		if( is_file( $dir . $file ) && $file!=$filename && strpos($file, 'towns-') !== false )
			@unlink( $dir . $file );
	}
	
	// define how long we want to keep the file in seconds. I set mine to 24 hours.
	$cachetime = 86400;
	// Check if the cached file is still fresh. If it is, serve it up and exit.
	if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
   	include($cachefile);
    	return;
	}
	// if there is either no file OR the file to too old, render the page and capture the HTML.
	ob_start();
	
	/** CONTENT HERE **/
	$data = populate_towns();
		
	echo json_encode( $data );
	/** CONTENT END **/
	
	// We're done! Save the cached content to a file
	$fp = fopen($cachefile, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// finally send browser output
	ob_end_flush();
?>