<?php 

$virtual_tours= array();

if( (isset($single_property->unmapped->VirtualTourURLBranded)) && (isset($single_property->listingAgent) || isset($single_property->coListingAgent)) && (is_branded_virtualtour() == 1)){
		
	if(is_array($single_property->unmapped->VirtualTourURLBranded)){		
		$virtual_tours = $single_property->unmapped->VirtualTourURLBranded;
	}
	
}elseif( (isset($single_property->unmapped->VirtualTourURLUnbranded)) && (is_branded_virtualtour() == 1) ){

	if(is_array($single_property->unmapped->VirtualTourURLUnbranded)){
		$virtual_tours = $single_property->unmapped->VirtualTourURLUnbranded;
	}
	
}elseif(isset($single_property->tourUrls)){
	
	if(is_array($single_property->tourUrls)){
		$virtual_tours = $single_property->tourUrls;
	}
	
}

foreach( $virtual_tours as $virtual_index => $virtual_tour_url ):
	
	/* $is_possible_popup = 1; */ 
	$is_possible_popup = 0;
	
	$original_virtual_tour_url = $virtual_tour_url;
	if (filter_var($virtual_tour_url, FILTER_VALIDATE_URL) === FALSE && substr($virtual_tour_url,0,2)!=='//') {
		$virtual_tour_url = '//' . $virtual_tour_url;
	}
	
	$virtual_tour_url=str_replace('http://','//',$virtual_tour_url);
	$virtual_tour_url=str_replace('https://','//',$virtual_tour_url);
	
	if (stripos($virtual_tour_url, "iframe") !== false){ //iframe
		$embed = $virtual_tour_url;
		$is_possible_popup = 1;
	}else if(stripos($virtual_tour_url, "youtube.com") !== false || stripos($virtual_tour_url, "youtu.be") !== false){ //youtube url
		$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
		$is_possible_popup = 1;
	}else if(stripos($virtual_tour_url, "vimeo.com") !== false){ //vimeo url
		
		$vimeos = explode('vimeo.com/', $virtual_tour_url);
		$vimeo_id = $vimeos[1];
		
		$embed = "<iframe src=\"https://player.vimeo.com/video/{$vimeo_id}?color=ffffff\" width=\"853\" height=\"480\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>";
		$is_possible_popup = 1;	
	} /* else{ //normal url
		$embed= "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"{$virtual_tour_url}\" frameborder=\"0\" allowfullscreen></iframe>";
	} */
	
	if($is_possible_popup):
	?>
	<a href="#" content-iframe='<?php echo $embed; ?>' class="virtual-tour-open">
	  <i class="fa fa-camera" role="none"></i>
	  <span> Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?></span>
	</a>
	<?php
	else: ?>
	<a href="<?php echo $original_virtual_tour_url; ?>" class="virtual-tour-open-direct" target="_blank">
	  <i class="fa fa-camera" role="none"></i>
	  <span> Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?></span>
	</a>
	<?php endif; ?>

<?php endforeach; ?>