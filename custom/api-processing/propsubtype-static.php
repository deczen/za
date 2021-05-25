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
	$filename = 'proptypesub-static-' . date('M-d-Y').'.php';
	$cachefile = $dir.$filename;
	
	$files = scandir($dir);
	foreach($files as $file) {
		if( is_file( $dir . $file ) && $file!=$filename && strpos($file, 'proptypesub-static-') !== false )
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
	$data = get_static_references('PROPSUBTYPE');
	/* if(!sizeof($data)){
		$data=array(
			0 => array(
				'shortDescription'=>'SF',
				'longDescription'=>'Single Family',
			),
			1 => array(
				'shortDescription'=>'MF',
				'longDescription'=>'Multifamily',
			),
			2 => array(
				'shortDescription'=>'MH',
				'longDescription'=>'Mobile Home',
			),
			3 => array(
				'shortDescription'=>'LD',
				'longDescription'=>'Land',
			),
			4 => array(
				'shortDescription'=>'RN',
				'longDescription'=>'Rental',
			),
			5 => array(
				'shortDescription'=>'CC',
				'longDescription'=>'Condo',
			),
			6 => array(
				'shortDescription'=>'CI',
				'longDescription'=>'Commercial',
			),
			7 => array(
				'shortDescription'=>'BU',
				'longDescription'=>'Business',
			),			
		); 
	} */
		
	echo json_encode( $data );
	/** CONTENT END **/
	
	// We're done! Save the cached content to a file
	$fp = fopen($cachefile, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	// finally send browser output
	ob_end_flush();
?>