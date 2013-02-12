<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  
	<?php $myCustomFile = get_post_meta($post->ID, 'custom-file', true); ?>
	
	<?php include (TEMPLATEPATH . '/custom-posts/' . $myCustomFile); ?>	


<?php endwhile; endif; ?>


	<?php get_template_part( 'consistent-stuff' ); ?>


<?php get_footer(); ?>