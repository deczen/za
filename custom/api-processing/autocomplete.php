<?php
	if( ! defined('ABSPATH') )
		include "../../../../../wp-load.php";
	
	$domainName = str_replace( 'https://', '', get_site_url() );
	$domainName = str_replace( 'http://', '', $domainName );
	
	// define the path and name of cached file
	$dir = ZIPPERAGENTPATH . '/custom/caches/' . $domainName . '/';
	if (!file_exists($dir)) {
		mkdir($dir, 0777, true);
	}
	$filename = 'autocomplete-' . date('M-d-Y').'.php';
	$cachefile = $dir.$filename;
	
	$files = scandir($dir);
	foreach($files as $file) {
		if( is_file( $dir . $file ) && $file!=$filename && strpos($file, 'autocomplete-') !== false )
			@unlink( $dir . $file );
	}
	
	// define how long we want to keep the file in seconds. I set mine to 24 hours.
	$cachetime = 86400;
	// Check if the cached file is still fresh. If it is, serve it up and exit.
	if (file_exists($cachefile) /* && filesize($cachefile) > 10 */ && time() - $cachetime < filemtime($cachefile)) {
		include($cachefile);
    	return;
	}
	// if there is either no file OR the file to too old, render the page and capture the HTML.
	ob_start();
	
	/** CONTENT HERE **/
	$data=zipperagent_populate_autocomplete_data();
		
	echo json_encode( $data );
	/** CONTENT END **/
	
	// We're done! Save the cached content to a file
	$fp = fopen($cachefile, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// finally send browser output
	ob_end_flush();
?>