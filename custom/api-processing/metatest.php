<?php
	if( ! defined('ABSPATH') )
		include "../../../../../wp-load.php";
	
	$data = get_meta_fields();
	echo "<pre>"; print_r($data); echo "</pre>";