<?php
/**
 * @package _artifakt
 */
	global $post;
	
	$postmeta = get_post_meta( $post->ID );
	// echo "<pre>"; print_r($postmeta); echo "</pre>";
	$af_options = get_option('af_listings_options'); //not adjusted
	$share = 1;
	$price =  get_post_meta( $post->ID, '_lp_listing_price', true );
	$sold = get_post_meta($post->ID, 'af_sold', true); //not adjusted
	$address = get_post_meta($post->ID, '_lp_Address', true);
	$tour = get_post_meta($post->ID, '_lp_video', true);
	$floorplan = wp_get_attachment_url( get_post_meta($post->ID, '_lp_floorplan_pdf', true) );
	$featuresheet = wp_get_attachment_url( get_post_meta($post->ID, '_lp_feature_sheet_pdf', true) );
	$download = get_post_meta( $post->ID, '_lp_additional_files_pdf', true );
	$agent_id = get_post_meta($post->ID, '_lp_agent', true);
	// $himages = $postmeta['_lp_header_images'];
	$himages = get_post_meta($post->ID, '_lp_header_images', true);
	
	$form_shortcode = get_post_meta($post->ID, '_lp_form_shortcode', true);
	
	$gallery = isset($postmeta['_lp_gallery'])?$postmeta['_lp_gallery']:array();
	
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

	
	$topmeta[] = array( 'title' => 'Property Type', 'icon' => 'home', 'content' => get_post_meta( $post->ID, '_lp_proptype', true ) );
	$topmeta[] = array( 'title' => 'Property Status', 'icon' => 'flag', 'content' => $sold );
	$topmeta[] = array( 'title' => 'List Price', 'icon' => 'usd', 'content' => $price );
	$topmeta[] = array( 'title' => '# of Bedrooms', 'icon' => 'bed', 'content' => get_post_meta( $post->ID, '_lp_bedrooms', true ) );
	$topmeta[] = array( 'title' => '# of Bathrooms', 'icon' => 'tint', 'content' => get_post_meta( $post->ID, '_lp_bathrooms', true ) );
	
	
	$meta[] = array( 'title' => 'County', 'content' => get_post_meta( $post->ID, '_lp_county', true) );
	$meta[] = array( 'title' => 'Zip', 'content' => get_post_meta( $post->ID, '_lp_zipcode', true) );
	$meta[] = array( 'title' => 'Assessed Value', 'content' => get_post_meta( $post->ID, '_lp_assessed_value', true) );
	$meta[] = array( 'title' => 'Taxes', 'content' => get_post_meta( $post->ID, '_lp_taxes', true) );
	$meta[] = array( 'title' => 'Tax Year', 'content' => get_post_meta( $post->ID, '_lp_tax_year', true) );
	$meta[] = array( 'title' => 'Condo Fees', 'content' => get_post_meta( $post->ID, '_lp_condo_fees', true) );
	$meta[] = array( 'title' => 'Style', 'content' => get_post_meta( $post->ID, '_lp_styles', true) );
	$meta[] = array( 'title' => 'Living Levels', 'content' => get_post_meta( $post->ID, '_lp_living_levels', true) );
	$meta[] = array( 'title' => 'Units', 'content' => get_post_meta( $post->ID, '_lp_units', true) );
	$meta[] = array( 'title' => 'Lot Size', 'content' => get_post_meta( $post->ID, '_lp_lot_size', true) );
	$meta[] = array( 'title' => 'Living Area', 'content' => get_post_meta( $post->ID, '_lp_living_area', true) );
	$meta[] = array( 'title' => 'Basement', 'content' => get_post_meta( $post->ID, '_lp_basement', true) );
	$meta[] = array( 'title' => 'Number of Rooms', 'content' => get_post_meta( $post->ID, '_lp_rooms', true) );
	$meta[] = array( 'title' => 'Number of Full Bathrooms', 'content' => get_post_meta( $post->ID, '_lp_full_bathrooms', true) );
	$meta[] = array( 'title' => 'Master Bath', 'content' => get_post_meta( $post->ID, '_lp_master_bathrooms', true) );
	$meta[] = array( 'title' => 'Parking Spaces', 'content' => get_post_meta( $post->ID, '_lp_parking_space', true) );
	$meta[] = array( 'title' => 'Parking', 'content' => get_post_meta( $post->ID, '_lp_parking', true) );
	$meta[] = array( 'title' => 'Year Built', 'content' => get_post_meta( $post->ID, '_lp_year_built', true) );
	
	$is_listing =isset($postmeta['_lp_listid'])?1:0;

	$listid = isset($postmeta['_lp_listid'][0])?$postmeta['_lp_listid'][0]:false;
	$single_property= $is_listing ? ZipperagentGlobalFunction()->get_single_property($listid) : false;
	// echo "<pre>"; print_r($single_property); echo "</pre>";
	if(!$single_property){
		$is_listing=0;
	}
?>
<!-- <link type="text/css" rel="stylesheet" href="<?php echo ZIPPERAGENTURL . "css/bootstrap.css"; ?>" /> -->
<!-- <link type="text/css" rel="stylesheet" href="<?php echo ZIPPERAGENTURL . "css/listing.css"; ?>" /> -->
<!-- <script type="text/javascript" src="<?php echo ZIPPERAGENTURL . "js/bootstrap.js"; ?>"></script> -->
<header class="slider-header span-page">
	
	<div id="list-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
		<?php 
		if ( !empty($himages) ) {
			$i = 0;
			// echo "<pre>"; print_r(unserialize($himages[0]));echo "</pre>"; 
			// echo "<pre>"; print_r($himages);echo "</pre>"; 
			foreach( $himages as $arr ) : 
				if( $i == 0 ) $class = 'active'; 
				$attachment_id = $arr[0];
				$attachment = wp_get_attachment_image_src($attachment_id, 'full');
				$img = isset($attachment[0])?$attachment[0]:'';
				// echo 'url: '.$img;
				?>
				
				<div class="item <?php echo $class; ?>" style="background-image: url( '<?php echo $img; ?>' );"></div>
				<?php $i++; $class = ''; ?>
				
			<?php 
			endforeach; 
		} else if($is_listing){
			
			if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ){
				$i=0;
				foreach ($single_property->photoList as $pic ){
					
					if($i==1) //only get one picture
						break;
					
					if( strpos($pic->imgurl, 'mlspin.com') !== false ){
						$listing_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1440&h=768&n={$i}";
					}else{
						$listing_img =  $pic->imgurl;
					}
					$i++;
				}
			} ?>
			<div class="item active" style="background-image: url( '<?php echo $listing_img; ?>' );"></div>
		<?php
		} else {
		?>
			<div class="item active" style="background-image: url( '<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>' );"></div>
		<?php } ?>
		</div>
		
		<?php if ( !empty($himages) ) : ?>
		<ol class="carousel-indicators">
			<?php $i = 0;
			foreach( $himages as $attachment_id) : 
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
			<?php if ( $share !== 'no' ) echo do_shortcode('[za_social_share]'); ?>
		</div>
	</div>
	
	<?php if ( !empty($himages) ) : ?>
	<div class="carousel-nextprev carousel-nav-box">
		<a class="left carousel-control" href="#list-carousel" role="button" data-slide="prev"><img src="<?php echo ZIPPERAGENTURL; ?>images/arrow-left.svg" /></a>
		<a class="right carousel-control" href="#list-carousel" role="button" data-slide="next"><img src="<?php echo ZIPPERAGENTURL; ?>images/arrow-right.svg" /></a>
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
				<?php foreach ( $download as $arr ) : 
					$attachment_id = $arr[0];
					$file  = wp_get_attachment_url($attachment_id);					
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
			<?php echo do_shortcode('[landingpage_agent]'); ?>
			<?php if($form_shortcode): ?>			
			<h4>WANT MORE INFORMATION OR TO BOOK A SHOWING?</h4>
			<p>Complete the form below and we'll get right back to you.</p>
			<?php  echo do_shortcode($form_shortcode); ?>
			<?php endif; ?>
		</div>
		
	</div>
	<div class="clear"></div>
	
	<?php 

	if ( $gallery  ) { 
		$gallery = '[gallery ids="'.implode(',', $gallery).'" columns=4 size="medium" link="file"]';
		?>
		<div class="list-gallery span-page">
			<div class="za-container">
				<?php echo do_shortcode( '[fancytitle title="Property Gallery"]' ); ?>
			</div>
			<?php echo do_shortcode( $gallery ); ?>
		</div>
	<?php } else if($is_listing){ ?>
		<div class="list-gallery span-page">
			<style type="text/css">
				#gallery-1 {
					margin: auto;
				}
				#gallery-1 .gallery-item {
					float: left;
					margin-top: 10px;
					text-align: center;
					width: 25%;
				}
				#gallery-1 img {
					border: 2px solid #cfcfcf;
				}
				#gallery-1 .gallery-caption {
					margin-left: 0;
				}
				/* see gallery_shortcode() in wp-includes/media.php */
			</style>
			<div class="za-container">
				<?php echo do_shortcode( '[fancytitle title="Property Gallery"]' ); ?>
			</div>
			<div id="gallery-1" class="gallery galleryid-328 gallery-columns-4 gallery-size-medium">
			<?php
				if( isset( $single_property->photoList ) && sizeof( $single_property->photoList ) ):
					$i=0;
					foreach ($single_property->photoList as $pic ){
						
						if( strpos($pic->imgurl, 'mlspin.com') !== false ){
							$big_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1440&h=768&n={$i}&ext=.jpg";
							$small_img = "//media.mlspin.com/photo.aspx?mls={$single_property->listno}&w=1024&h=768&n={$i}&ext=.jpg";
						}else{
							$big_img =  $pic->imgurl;
							$small_img =  $pic->imgurl;
						}
						$i++;
					
						?>
					   <dl class="gallery-item">
						  <dt class="gallery-icon landscape">
							 <a href="<?php echo $big_img; ?>"><div class="image" style='background-image:url("<?php echo str_replace(array('http://','https://'),array('//','//'),$small_img); ?>")'></div></a>
						  </dt>
					   </dl>
					<?php } 
				endif; ?>
			   <br style="clear: both">
			</div>
		</div>
	<?php } ?>
	
	
	<div class="list-location span-page">
		<div class="za-container">
			<?php echo do_shortcode( '[fancytitle title="Property Location"]' ); ?>
		</div>
		<?php //echo do_shortcode('[za_map sat="-50" center="'.$address.'" image="'.get_stylesheet_directory_uri().'/imgs/map-marker.png" zoom="14" height="300px"]'); ?>
		<?php echo do_shortcode('[landingpage_map]'); ?>
	</div>	

</div>
</div></div></div>