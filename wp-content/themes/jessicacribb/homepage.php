<?php

// Template Name: Homepage

get_header(); ?>

<div id="home-slider" class="frame"><?php echo do_shortcode('[cycloneslider id="home-slider"]'); ?></div>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="salon-address"><?php the_content(); ?></div>
<?php endwhile; // end of the loop. ?>





<?php get_footer(); ?>