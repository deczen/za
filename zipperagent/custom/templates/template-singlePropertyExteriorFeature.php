<?php
global $single_property;

// force array to object
$single_property = is_array( $single_property ) ? (object) $single_property : $single_property;

?>

<div id="zpa-main-container" class="zpa-container " style="display: inline;">

	<div class="zpa-listing-detail">
		<?php if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ): ?>
		<div class="row">
			<div class="col-xs-12 zpa-property-photo">
				<div id="property-carousel" class="zpa-main-image zpa-image-carousel carousel slide zpa-center" data-interval="false">
					<div class="carousel-inner">
						<?php
						if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
							$i=0;
							foreach ($single_property->photoList as $pic ){ ?>
								<div class="item <?php if($i==0) echo "active"; ?>"> <span class="zpa-center"> <img class="media-object zpa-center" alt="" src="<?php echo $pic->imgurl ?>"> </span> </div>
							<?php 
							$i++;
							}
						}
						?>
				   </div> <span href="#property-carousel" data-slide="prev" class="carousel-control left" style="cursor: pointer;"> <span class="glyphicon glyphicon-chevron-left"></span> </span> <span href="#property-carousel" data-slide="next" class="carousel-control right" style="cursor: pointer;"> <span class="glyphicon glyphicon-chevron-right"></span> </span>
					<div class="carousel-caption"> <span class="badge">1 of <?php echo isset( $single_property->photoList ) && sizeof( $single_property->photoList )? sizeof($single_property->photoList) : 0 ?></span> </div>
					<script>
						var totalItems = jQuery('#property-carousel .item').length;
						var currentIndex = jQuery('#property-carousel div.active').index() + 1;
						
						jQuery('#property-carousel').on('slid.bs.carousel', function() {
							currentIndex = jQuery('div.active').index() + 1;
						   jQuery('.badge').html(''+currentIndex+' of '+totalItems+'');
						});
					</script>
				</div>
			</div>
		</div>
		<?php endif; ?>
			
	</div>
</div>