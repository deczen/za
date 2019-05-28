<?php if( (isset($single_property->unmapped->VirtualTourURLBranded)) && (isset($single_property->listingAgent) || isset($single_property->coListingAgent)) && (is_branded_virtualtour() == 1)): ?>

	<div class="bt-listing__virtual-tour">
		
		<?php if(is_array($single_property->unmapped->VirtualTourURLBranded)): ?>
		<?php foreach( $single_property->unmapped->VirtualTourURLBranded as $virtual_index => $virtual_tour_url ): ?>
		<?php
		$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
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
		$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
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
	
<?php elseif(isset($single_property->tourUrls)): ?>
	
	<div class="bt-listing__virtual-tour">
		
		<?php if(is_array($single_property->tourUrls)): ?>
		<?php foreach( $single_property->tourUrls as $virtual_index => $virtual_tour_url ): ?>
		<?php
		
		if (stripos($virtual_tour_url, "iframe") !== false) { ?>
			
			<a href="#" content-iframe='<?php echo $virtual_tour_url; ?>' class="virtual-tour-open bt-listing__virtual-tour__link js-vtour">
			  <div class="uk-float-left">
				<i class="fa fa-camera"></i>
			  </div>
			  <div class="uk-float-right bt-listing__virtual-tour__text">
				Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
			  </div>
			</a>
			
		<?php }else{ 
			
		$embed = preg_replace( "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "<iframe id=\"matterportFrame\" width=\"853\" height=\"480\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>", $virtual_tour_url);
			
		?>
			<a href="#" content-iframe='<?php echo $embed; ?>' class="virtual-tour-open bt-listing__virtual-tour__link js-vtour">
			  <div class="uk-float-left">
				<i class="fa fa-camera"></i>
			  </div>
			  <div class="uk-float-right bt-listing__virtual-tour__text">
				Virtual Tour&nbsp;#<?php echo $virtual_index + 1 ?>
			  </div>
			</a>
		<?php } ?>
		
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	
<?php endif; ?>