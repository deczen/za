<?php
global $args;

$posts_array = get_posts( $args );

// echo "<pre>"; print_r($posts_array); echo "</pre>";
?>
<div class="related-listing-wrap row">
<?php foreach($posts_array as $property):
$postmeta = get_post_meta( $property->ID );
$address = get_post_meta( $property->ID, '_lp_Address', true );
$listprice = get_post_meta( $property->ID, '_lp_listing_price', true );
$status = get_post_meta( $property->ID, '_lp_status', true );
$proptype = get_post_meta( $property->ID, '_lp_proptype', true );
$beds = get_post_meta( $property->ID, '_lp_bedrooms', true );
$bath = get_post_meta( $property->ID, '_lp_bathrooms', true );

$img = wp_get_attachment_image_src(get_post_thumbnail_id($property->ID) , 'large' );
?>	
	<div class="listing-box col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-image:url(<?php echo isset($img[0])?$img[0]: ZIPPERAGENTURL . "images/no-photo.jpg"; ?>)">
		<a href="<?php echo get_permalink($property->ID); ?>">
		<div class="info-wrap">
			<span class="listing-address"><?php echo $address; ?></span>
			<span class="listing-status"><?php echo $status ?></span>
			<div class="hide">
			<p><span class="listing-beds"><?php echo $beds; ?></span>
			<span class="listing-bath"><?php echo $bath; ?></span>
			<span class="listing-price"><?php echo zipperagent_currency() . number_format_i18n( $listprice, 0 ); ?></span></p>
			<a class="view-detail" href="<?php echo get_permalink($property->ID); ?>">View details</a>
			</div>
		</div>
		</a>
	</div>
<?php endforeach; ?>
<div class="clear"></div>
</div>