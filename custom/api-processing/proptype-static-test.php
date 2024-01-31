<?php
	if( ! defined('ABSPATH') )
		include "../../../../../wp-load.php";
	
	
	// if there is either no file OR the file to too old, render the page and capture the HTML.
	ob_start();
	
	/** CONTENT HERE **/
	$data = get_static_references('PROPTYPE');
    echo "<pre>"; print_r( $data ); echo "</pre>";
	if(!sizeof($data)){
		$data=array(
			0 => array(
				'shortDescription'=>'SF',
				'longDescription'=>'Single Family',
				'type'=>'NA',
			),
			1 => array(
				'shortDescription'=>'MF',
				'longDescription'=>'Multifamily',
				'type'=>'NA',
			),
			2 => array(
				'shortDescription'=>'MH',
				'longDescription'=>'Mobile Home',
				'type'=>'NA',
			),
			3 => array(
				'shortDescription'=>'LD',
				'longDescription'=>'Land',
				'type'=>'NA',
			),
			4 => array(
				'shortDescription'=>'RN',
				'longDescription'=>'Rental',
				'type'=>'NA',
			),
			5 => array(
				'shortDescription'=>'CC',
				'longDescription'=>'Condo',
				'type'=>'NA',
			),
			6 => array(
				'shortDescription'=>'CI',
				'longDescription'=>'Commercial',
				'type'=>'NA',
			),
			7 => array(
				'shortDescription'=>'BU',
				'longDescription'=>'Business',
				'type'=>'NA',
			),			
		); 
	}
		
	echo json_encode( $data );
?>