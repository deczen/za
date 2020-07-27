<?php
/**
 * @package _artifakt
 */
	global $post;
 
	$af_options = get_option('af_listings_options');
	$share = get_post_meta( $post->ID, 'af_share', true );
	$price = get_post_meta( $post->ID, 'af_price', true );
	$sold = get_post_meta($post->ID, 'af_sold', true);
	$address = get_post_meta($post->ID, 'af_address', true);
	$tour = get_post_meta($post->ID, 'af_tour', true);
	$floorplan = get_post_meta($post->ID, 'af_floorplan', true);
	$featuresheet = get_post_meta($post->ID, 'af_featuresheet', true);
	$download = get_post_meta( $post->ID, 'af_downloads' );
	$agent = get_post_meta($post->ID, 'af_agent', true);
	$agent_id = get_post_meta($post->ID, 'af_agent_id', true);
	$himages = get_post_meta( $post->ID, 'af_header_img' );
	
	$gallery = get_post_meta( $post->ID, 'af_gallery', true );
	
	if ( has_post_thumbnail() ) {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$bg = $image[0];
		$stylestr = 'background-image: url( '.$bg.' )';
	}
	
	if ( $sold == 'sold' ) {
			$sold = $af_options['af_sold_label'];
	} elseif ( $sold == 'leased' ) {
			$sold = $af_options['af_leased_label'];
	} elseif ( $sold == 'for-sale' ) {
			$sold = $af_options['af_sale_label'];
	} elseif ( $sold == 'for-lease' ) {
			$sold = $af_options['af_lease_label'];
	} elseif ( $sold == 'exclusive' ) {
			$sold = $af_options['af_exclusive_label'];
	} elseif ( $sold == 'coming-soon' ) {
			$sold = $af_options['af_coming_label'];
	}

	if ( is_numeric( $price ) ) {
		$price = '$'.number_format( $price );
	} else {
		$price = '$'.str_replace('$','',$price);
	}
	
	if ( is_numeric( $taxes ) ) {
		$taxes = '$'.number_format( $taxes );
	} else {
		$taxes = '$'.str_replace('$','',$taxes);
	} 

	
	$topmeta[] = array( 'title' => 'Property Type', 'icon' => 'home', 'content' => get_post_meta( $post->ID, 'af_type', true ) );
	$topmeta[] = array( 'title' => 'Property Status', 'icon' => 'flag', 'content' => $sold );
	$topmeta[] = array( 'title' => 'List Price', 'icon' => 'usd', 'content' => $price );
	$topmeta[] = array( 'title' => '# of Bedrooms', 'icon' => 'bed', 'content' => get_post_meta( $post->ID, 'af_bedrooms', true ) );
	$topmeta[] = array( 'title' => '# of Bathrooms', 'icon' => 'tint', 'content' => get_post_meta( $post->ID, 'af_bathrooms', true ) );
	
	
	$meta[] = array( 'title' => 'County', 'content' => get_post_meta( $post->ID, 'af_county', true) );
	$meta[] = array( 'title' => 'Zip', 'content' => get_post_meta( $post->ID, 'af_zip', true) );
	$meta[] = array( 'title' => 'Assessed Value', 'content' => get_post_meta( $post->ID, 'af_assessed_value', true) );
	$meta[] = array( 'title' => 'Taxes', 'content' => get_post_meta( $post->ID, 'af_taxes', true) );
	$meta[] = array( 'title' => 'Tax Year', 'content' => get_post_meta( $post->ID, 'af_tax_year', true) );
	$meta[] = array( 'title' => 'Condo Fees', 'content' => get_post_meta( $post->ID, 'af_condo_fees', true) );
	$meta[] = array( 'title' => 'Style', 'content' => get_post_meta( $post->ID, 'af_style', true) );
	$meta[] = array( 'title' => 'Living Levels', 'content' => get_post_meta( $post->ID, 'af_living_levels', true) );
	$meta[] = array( 'title' => 'Units', 'content' => get_post_meta( $post->ID, 'af_units', true) );
	$meta[] = array( 'title' => 'Lot Size', 'content' => get_post_meta( $post->ID, 'af_lot_size', true) );
	$meta[] = array( 'title' => 'Living Area', 'content' => get_post_meta( $post->ID, 'af_living_area', true) );
	$meta[] = array( 'title' => 'Basement', 'content' => get_post_meta( $post->ID, 'af_basement', true) );
	$meta[] = array( 'title' => 'Number of Rooms', 'content' => get_post_meta( $post->ID, 'af_num_rooms', true) );
	$meta[] = array( 'title' => 'Number of Full Bathrooms', 'content' => get_post_meta( $post->ID, 'af_num_baths', true) );
	$meta[] = array( 'title' => 'Master Bath', 'content' => get_post_meta( $post->ID, 'af_master_bath', true) );
	$meta[] = array( 'title' => 'Parking Spaces', 'content' => get_post_meta( $post->ID, 'af_parking_spaces', true) );
	$meta[] = array( 'title' => 'Parking', 'content' => get_post_meta( $post->ID, 'af_parking', true) );
	$meta[] = array( 'title' => 'Year Built', 'content' => get_post_meta( $post->ID, 'af_year', true) );

?>

<header class="slider-header span-page">
	
	<div id="list-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
		<?php 
		if ( !empty($himages) ) {
		$i = 0;
		foreach( $himages as $img ) : 
			if( $i == 0 ) $class = 'active'; ?>
			
			<div class="item <?php echo $class; ?>" style="background-image: url( '<?php echo $img; ?>' );"></div>
			<?php $i++; $class = ''; ?>
			
		<?php 
		endforeach; 
		} else {
		?>
			<div class="item active" style="background-image: url( '<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>' );"></div>
		<?php } ?>
		</div>
		
		<?php if ( !empty($himages) ) : ?>
		<ol class="carousel-indicators">
			<?php $i = 0;
			foreach( $himages as $img ) : 
				if ( $i == 0 ) {
					$class = 'active';
				} else {
					$class = '';
				}
			?>
			<li data-target="#list-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $class; ?>"></li>
			<?php $i++; endforeach; ?>
		</ol>
		<?php endif; ?>
		
	</div>
	
	<div class="slider-title centertext">
		<div class="za-container">
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php // if ( $share !== 'no' ) echo artifakt_share( $post->ID ); ?>
			<?php echo do_shortcode('[za_social_share]'); ?>
		</div>
	</div>
	
	<?php if ( !empty($himages) ) : ?>
	<div class="carousel-nextprev carousel-nav-box">
		<a class="left carousel-control" href="#list-carousel" role="button" data-slide="prev"><img src="<?php echo ZIPPERAGENTPATH; ?>/images/arrow-left.svg" alt="left arrow" /></a>
		<a class="right carousel-control" href="#list-carousel" role="button" data-slide="next"><img src="<?php echo ZIPPERAGENTPATH; ?>/images/arrow-right.svg" alt="right arrow" /></a>
	</div>
	<?php endif; ?>
</header>

<div class="list-top-meta span-page">
	<div class="za-container">
		<div class="top-meta-wrap">
			<?php foreach( $topmeta as $m ) : ?>
				<?php if ( $m[ 'content' ] && $m[ 'content' ] != '$' ) : ?>
					<div class="topmeta centertext">
						<h3><i class="fa fa-<?php echo $m[ 'icon' ]; ?>"></i></h3>
						<h3 class="caps redtext"><strong><?php echo $m[ 'content' ]; ?></strong></h3>
						<hr />
						<h4 class="caps"><?php echo $m[ 'title' ]; ?></h4>
					</div>							
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="list-wrap">
	<div id="content-with-sidebar" class="content-with-sidebar main-content-inner col-md-8">			
		<?php if ( $tour ) : ?>
		<div class="list-tour">
			<?php echo do_shortcode( '[artifakt-video url="'.$tour.'"]' ); ?>
		</div>
		<?php endif; ?>
		
		<div class="entry-content list-desc">
			<?php echo do_shortcode( '[fancytitle title="Property Description"]' ); ?>
			<?php //the_content(); 
				echo $post->post_content;
			?>
		</div><!-- .entry-content -->	

		<?php echo do_shortcode( '[fancytitle title="Property Details"]' ); ?>
		<div class="list-details">
			<div class="row">
				<?php $i = 0;
				foreach( $meta as $m ) : ?>
					<?php if ( $m[ 'content' ] && $m[ 'content' ] != '$' ) : 
						$i++; ?>
						<div class="list-detail col-sm-6">
							<div class="col-xs-6"><p><em><?php echo $m[ 'title' ]; ?></em></p></div>
							<div class="col-xs-6"><p class="redtext"><?php echo $m[ 'content' ]; ?></p></div>
						</div>							
					<?php endif; ?>
					<?php if ( $i % 2 == 0 ) echo '</div><div class="row">'; ?>
				<?php endforeach; ?>
			</div>
		</div>
		
		<div class="list-downloads">
			<?php if ( $floorplan ) : ?>
				<a href="<?php echo $floorplan; ?>" download="<?php echo $floorplan; ?>" class="btn">Download The Floor Plan</a>
			<?php endif; ?>
			<?php if ( $featuresheet ) : ?>
				<a href="<?php echo $featuresheet; ?>" download="<?php echo $featuresheet; ?>" class="btn">Download The Feature Sheet</a>
			<?php endif; ?>
			<?php if ( $download ) : ?>			
				<?php foreach ( $download as $file ) : 
					$info = pathinfo($file);
					$name =  basename($file,'.'.$info['extension']);
					$name = rtrim($name, '0123456789 '); ?>
					<a href="<?php echo $file; ?>" class="btn" target="_blank"><?php echo str_replace( '-', ' ', $name ); ?></a>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
			
	</div>

	<div class="side col-md-4 col-sm-12">

		<?php if ( $agent_id != 0 ) : ?>
	
			<?php $args = array( 'post_type' => 'team_member' , 'p' => $agent_id, 'posts_per_page' => 1 );
			$agentQ = new WP_Query( $args );
				
			while( $agentQ->have_posts() ) : $agentQ->the_post(); 
				global $post; 
				
				$jobtitle = get_post_meta( $post->ID, 'af_jobtitle', true );
				$email = get_post_meta( $post->ID, 'af_email', true );
				$office = get_post_meta( $post->ID, 'af_office_num', true );
				$ext = get_post_meta( $post->ID, 'af_office_num_ext', true );
				$cell = get_post_meta( $post->ID, 'af_cell_num', true ); 
				
				if ( $ext ) {
					$officenum = $office.' ext. '.$ext;
				} else {
					$officenum = $office;
				} ?>
				
				<div class="agent-box">
					<div class="agent-img"><?php the_post_thumbnail( 'large' ); ?></div>
					<div class="agent-info centertext">
						<p class="caps"><?php the_title(); ?><?php if ( $jobtitle ) echo ', '.$jobtitle; ?></p>
						<?php if ( $email ) echo '<p><em>E: <a href="mailto:'.$email.'" target="_blank">'.$email.'</a></em></p>'; ?>
						<?php if ( $office ) echo '<p><em>O: <a href="tel:'.$office.'" target="_blank">'.$officenum.'</a></em></p>'; ?>
						<?php if ( $cell ) echo '<p><em>C: <a href="tel:'.$cell.'" target="_blank">'.$cell.'</a></em></p>'; ?>
					</div>
				</div>
			<?php wp_reset_postdata(); ?>
			
			<?php endwhile; ?>
				
		<?php endif; ?>
	
		<div class="page-sidebar list-sidebar centertext">
			<h4>WANT MORE INFORMATION OR TO BOOK A SHOWING?</h4>
			<p>Complete the form below and we'll get right back to you. Don't want to fill out a form? You can <a href="mailto:<?php echo do_shortcode( '[client-email]' ); ?>">click here</a> to send us an email instead.</p>
			<?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="false" tabindex="333"]'); ?>
		</div>
		
	</div>
	<div class="clear"></div>
	
	<?php 
	if ( $gallery !== '' ) {	
		$g = str_replace( '[', '', $gallery );
		$g = str_replace( ']', '', $g );
		$g = str_replace( '"', '', $g );
		$atts = shortcode_parse_atts( $g );
		//print_r( $atts );
		$gallery = '[gallery ids="'.$atts['ids'].'" columns=4]';
	} else {
	foreach ( $himages as $h ) {
		$excludeIDs[] = artifakt_imgID_by_url( $h );
	}
	
	$thumb = get_post_thumbnail_id($post->ID);
	$excludeIDs[] = $thumb;
	$excludeString = implode( ',', $excludeIDs );
	$gallery = do_shortcode('[gallery columns=4 exclude="'.$excludeString.'"]'); 
	
	}

	if ( $gallery != '' ) : ?>
		<div class="list-gallery span-page">
			<div class="za-container">
				<?php echo do_shortcode( '[fancytitle title="Property Gallery"]' ); ?>
			</div>
			<?php echo do_shortcode( $gallery ); ?>
		</div>
	<?php endif; ?>
	
	
	<div class="list-location span-page">
		<div class="za-container">
			<?php echo do_shortcode( '[fancytitle title="Property Location"]' ); ?>
		</div>
		<?php echo do_shortcode('[artifakt_map sat="-50" center="'.$address.'" image="'.get_stylesheet_directory_uri().'/imgs/map-marker.png" zoom="14" height="300px"]'); ?>
	</div>	

</div>
</div></div></div>
<?php echo do_shortcode( '[panel slug="buying-panel"]' ); ?>