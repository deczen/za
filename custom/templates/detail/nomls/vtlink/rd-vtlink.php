<?php if( (isset($single_property->unmapped->VirtualTourURLBranded)) && (isset($single_property->listingAgent) || isset($single_property->coListingAgent)) && (is_branded_virtualtour() == 1)): ?>

	<div class="bt-listing__virtual-tour">
		
		<?php if(is_array($single_property->unmapped->VirtualTourURLBranded)): ?>
		<?php foreach( $single_property->unmapped->VirtualTourURLBranded as $virtual_index => $virtual_tour_url ): ?>
		<?php
		
		if (stripos($virtual_tour_url, "iframe") !== false){ //iframe
			$embed = $virtual_tour_url;
		
		}else if(stripos($virtual_tour_url, "youtube.com") !== false || stripos($virtual_tour_url, "youtu.be") !== false){ //youtube url
			$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
				
		}else if(stripos($virtual_tour_url, "vimeo.com") !== false){ //vimeo url
			
			$vimeos = explode('vimeo.com/', $virtual_tour_url);
			$vimeo_id = $vimeos[1];
			
			$embed = "<iframe src=\"https://player.vimeo.com/video/{$vimeo_id}?color=ffffff\" width=\"853\" height=\"480\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>";
				
		}else{ //normal url
			$embed= "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"{$virtual_tour_url}\" frameborder=\"0\" allowfullscreen></iframe>";
		}
		?>
		
		<a href="#" content-iframe='<?php echo $embed ?>' class="virtual-tour-open bt-listing__virtual-tour__link js-vtour">
		  <div class="uk-float-left">
			<i class="fa fa-camera"></i>
		  </div>
		  <div class="uk-float-right bt-listing__virtual-tour__text">
			Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
		  </div>
		</a>
		
		<?php endforeach; ?>
		<?php endif; ?>
		
	</div>

<?php elseif( (isset($single_property->unmapped->VirtualTourURLUnbranded)) && (is_branded_virtualtour() == 1) ): ?>

	<div class="bt-listing__virtual-tour">

		<?php if(is_array($single_property->unmapped->VirtualTourURLUnbranded)): ?>
		<?php foreach( $single_property->unmapped->VirtualTourURLUnbranded as $virtual_index => $virtual_tour_url ): ?>
		<?php
		if (stripos($virtual_tour_url, "iframe") !== false){ //iframe
			$embed = $virtual_tour_url;
		
		}else if(stripos($virtual_tour_url, "youtube.com") !== false || stripos($virtual_tour_url, "youtu.be") !== false){ //youtube url
			$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
				
		}else if(stripos($virtual_tour_url, "vimeo.com") !== false){ //vimeo url
			
			$vimeos = explode('vimeo.com/', $virtual_tour_url);
			$vimeo_id = $vimeos[1];
			
			$embed = "<iframe src=\"https://player.vimeo.com/video/{$vimeo_id}?color=ffffff\" width=\"853\" height=\"480\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>";
				
		}else{ //normal url
			$embed= "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"{$virtual_tour_url}\" frameborder=\"0\" allowfullscreen></iframe>";
		}
		?>
		
		<a href="#" content-iframe='<?php echo $embed ?>' class="virtual-tour-open bt-listing__virtual-tour__link js-vtour">
		  <div class="uk-float-left">
			<i class="fa fa-camera"></i>
		  </div>
		  <div class="uk-float-right bt-listing__virtual-tour__text">
			Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
		  </div>
		</a>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<?php //endif; ?>
	
<?php elseif(isset($single_property->vtlink)): ?>
	
	<div class="bt-listing__virtual-tour">
		
		<?php if(is_array($single_property->vtlink)): ?>
		<?php foreach( $single_property->vtlink as $virtual_index => $virtual_tour_url ): ?>
		<?php
		if (stripos($virtual_tour_url, "iframe") !== false){ //iframe
			$embed = $virtual_tour_url;
		
		}else if(stripos($virtual_tour_url, "youtube.com") !== false || stripos($virtual_tour_url, "youtu.be") !== false){ //youtube url
			$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
				
		}else if(stripos($virtual_tour_url, "vimeo.com") !== false){ //vimeo url
			
			$vimeos = explode('vimeo.com/', $virtual_tour_url);
			$vimeo_id = $vimeos[1];
			
			$embed = "<iframe src=\"https://player.vimeo.com/video/{$vimeo_id}?color=ffffff\" width=\"853\" height=\"480\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>";
				
		}else{ //normal url
			$embed= "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"{$virtual_tour_url}\" frameborder=\"0\" allowfullscreen></iframe>";
		}
		?>
		
		<a href="#" content-iframe='<?php echo $embed; ?>' class="virtual-tour-open bt-listing__virtual-tour__link js-vtour">
		  <div class="uk-float-left">
			<i class="fa fa-camera"></i>
		  </div>
		  <div class="uk-float-right bt-listing__virtual-tour__text">
			Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
		  </div>
		</a>
		
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	
<?php endif; ?>