<?php

// Template Name: Bio

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id="photo"><?php the_post_thumbnail('full')?></div>
	<div id="bio-text"><?php the_content(); ?></div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>