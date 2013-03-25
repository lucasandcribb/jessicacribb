<?php

// Template Name: Reservations

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id="form-cont">
		<div class="form-title">Make a Reservation with Jessica</div>
		<?php echo do_shortcode('[contact-form-7 id="74" title="Reservations Form"]'); ?>
	</div>


<?php endwhile; // end of the loop. ?>





<?php get_footer(); ?>