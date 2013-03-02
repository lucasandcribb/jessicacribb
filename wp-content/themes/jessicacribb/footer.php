<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	
		</div>
		<div id="footer">
			<div id="newsletter" onclick="showNewsletter();">Newsletter</div>
			<div id="signup-cont">
				<?php if ( dynamic_sidebar('sidebar-3') ) : ?><?php endif; ?>
			</div>
			<div id="social-cont">
				<a id="facebook" class="social-link" href="#" target="_blank"></a>
				<a id="twitter" class="social-link" href="#" target="_blank"></a>
			</div>
			<a id="site-credit" href="http://lucasandcribb.com" target="_blank">Site Credit: Lucas &amp; Cribb Digital Developers</a>
		</div>
<?php wp_footer(); ?>

</body>
</html>