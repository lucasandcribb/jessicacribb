<?php

// Template Name: Gallery

get_header(); ?>

	<div id="gallery-titles">
		<div class="gallery-title-left gallery-nav">
			<img class="left-arrow" src="/wp-content/themes/jessicacribb/images/gallery/left-arrow.png" />
			<div id="before-after-title" class="left-content gallery-content">Before &amp After</div>
		</div>
		<div class="gallery-title-center gallery-nav">
			<div id="hair-title" class="center-content gallery-content">Hair</div>
		</div>
		<div class="gallery-title-right gallery-nav">
			<img class="right-arrow" src="/wp-content/themes/jessicacribb/images/gallery/right-arrow.png" />
			<div id="makeup-title" class="right-content gallery-content">Makeup</div>
		</div>
	</div>

	<div id="banda-gallery" class="gallery-frame">
		<?php echo do_shortcode('[cycloneslider id="before-after"]'); ?>
	</div>
	<div id="hair-gallery" class="gallery-frame">
		<?php echo do_shortcode('[cycloneslider id="hair"]'); ?>
	</div>
	<div id="makeup-gallery" class="gallery-frame">
		<?php echo do_shortcode('[cycloneslider id="makeup"]'); ?>
	</div>


<?php get_footer(); ?>