<?php

// Template Name: Loyalty

get_header(); ?>

<div id="lr-left">
	<div class="lr-title">Loyalty Program</div>
	<div class="lr-cont">
		<div class="lr-content">
			Take this card with you to your next appointment and get it stamped. Once you get 5 stamps you will then get 25% off your next service.
		</div>
		<div class="lr-links">
			<a href="/wp-content/documents/Loyalty_Card.pdf" target="_blank"><div class="print-card card">Print Loyalty Card</div></a>
			<div id="share-loyalty" class="share-card card">Share Loyalty Card</div>
		</div>
	</div>
</div>
<div id="lr-right">
	<div class="lr-title">Refer a Friend</div>
	<div class="lr-cont">
		<div class="lr-content">
			Print the Refer a Friend card and put your name on the back. Then give the card to a friend. If your friend comes in, they will get $5 off their 
			first service and you will get $5 off your next service. The more you give out, the more money you can save
		</div>
		<div class="lr-links">
			<a href="/wp-content/documents/Referral_Card.pdf" target="_blank"><div class="print-card card">Print Referral Card</div></a>
			<div id="share-referral" class="share-card card">Share Referral Card</div>
		</div>
	</div>
</div>

<div id="share-loyalty-overly" class="share-overlay">
	<div class="overlay-title">Share Loyalty Card</div>
	<img class="close" src="/wp-content/themes/jessicacribb/images/x.jpg" />
	<?php echo do_shortcode('[contact-form-7 id="91" title="Share Loyalty Card"]');?>
	<?php echo $cf7->id; ?>
</div>

<div id="share-referral-overly" class="share-overlay">
	<div class="overlay-title">Share Referral Card</div>
	<img class="close" src="/wp-content/themes/jessicacribb/images/x.jpg" />
	<?php echo do_shortcode('[contact-form-7 id="92" title="Share Referral Card"]'); ?>
</div>

<?php get_footer(); ?>

