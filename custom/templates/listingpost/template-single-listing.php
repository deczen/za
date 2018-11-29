<?php get_header(); ?>
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
<?php get_footer(); ?>