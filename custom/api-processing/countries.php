<?php
	if( ! defined('ABSPATH') )
		include "../../../../../wp-load.php";
	
	// define the path and name of cached file
	$dir = ZIPPERAGENTPATH . '/custom/caches/';
	$filename = 'countries-' . date('M-d-Y').'.php';
	$cachefile = $dir.$filename;
	$filename_bak = 'countries-' . date('M-d-Y', strtotime('-1 day', strtotime(date('M-d-Y')))).'.php';
	$cachefile_bak = $dir.$filename_bak;
	
	$files = scandir($dir);
	foreach($files as $file) {
		if( is_file( $dir . $file ) && $file!=$filename && $file!=$filename_bak && strpos($file, 'countries-') !== false )
			@unlink( $dir . $file );
	}
	
	// define how long we want to keep the file in seconds. I set mine to 24 hours.
	$cachetime = 86400;
	// Check if the cached file is still fresh. If it is, serve it up and exit.
	if (file_exists($cachefile) && filesize($cachefile) > 2 && time() - $cachetime < filemtime($cachefile)) {
		include($cachefile);
    	return;
	}else if (file_exists($cachefile_bak) && time() - $cachetime < filemtime($cachefile_bak)){
		include($cachefile_bak);
		return;
	}
	// if there is either no file OR the file to too old, render the page and capture the HTML.
	ob_start();
	
	/** CONTENT HERE **/
	$meta = zipperagent_area_town();
	$data = populate_countries($meta);
		
	echo json_encode( $data );
	/** CONTENT END **/
	
	// We're done! Save the cached content to a file
	$fp = fopen($cachefile, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// finally send browser output
	ob_end_flush();
?>