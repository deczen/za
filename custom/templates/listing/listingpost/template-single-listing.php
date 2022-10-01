<?php 
$hide_header_footer = get_post_meta(get_the_ID(), '_lp_hide_header_footer', true);

if($hide_header_footer){
	get_header('landing-page');
	?>	
	 <style>
		#page-container{
			padding-top:0 !important;
		}
	 </style>
	<?php
}else{
	get_header();
}
 ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php // conall_edge_get_title(); ?>
<?php // get_template_part('slider'); ?>
	<div class="edgtf-container">
		<div id="zpa-main-container" class="edgtf-container-inner">
			<?php include "template-listing-content.php"; ?>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<?php 

if($hide_header_footer){
	get_footer('landing-page');
}else{
	get_footer();
} ?>