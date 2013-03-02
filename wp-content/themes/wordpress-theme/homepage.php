<?php

// Template Name: Homepage

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="home-text">
		<?php the_content(); ?>
	</div>

<?php endwhile; // end of the loop. ?>





<?php get_footer(); ?>