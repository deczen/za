<?php if(isset($single_property->vtlink)): ?>
<div class="bt-listing__virtual-tour">

	<?php if(is_array($single_property->vtlink)): ?>
	<?php foreach( $single_property->vtlink as $virtual_index => $virtual_tour_url ): ?>

	<a target="_blank" href="<?php echo $virtual_tour_url ?>" class="bt-listing__virtual-tour__link js-vtour">
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