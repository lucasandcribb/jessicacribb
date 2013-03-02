<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="format-detection" content="telephone=no">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/mytheme.css" />
<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mytheme.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?> id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>">
		<div id="header">
			<a id="hair" href="/"></a>
			<a id="logo-text" class="apple" href="/">Jessica Cribb<br/><span>Stylist and Makeup Artist</span></a>
			<a id="salon-logo" href="#" target="_blank"></a>
			<div id="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
		</div>
		<?php if (!is_home()) : ?>
		<div id="tip-cont">
			<div class="title apple">Tip of the Day</div>
			<?php query_posts(array('post_type' => 'tips', 'order' => 'ASC', 'posts_per_page' => 2, 'cat' => 4 )); ?>
				<?php if ( have_posts() ) : ?>
					<div class="tip-title">Skin Care</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="tip-text"><?php the_content(); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
				
			<?php query_posts(array('post_type' => 'tips', 'order' => 'ASC', 'posts_per_page' => 2, 'cat' => 5 )); ?>
				<?php if ( have_posts() ) : ?>
					<div class="tip-title">Hair Care</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="tip-text"><?php the_content(); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
					
			<?php query_posts(array('post_type' => 'tips', 'order' => 'ASC', 'posts_per_page' => 2, 'cat' => 6 )); ?>
				<?php if ( have_posts() ) : ?>
					<div class="tip-title">Styling</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="tip-text"><?php the_content(); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
			
			<?php query_posts(array('post_type' => 'tips', 'order' => 'ASC', 'posts_per_page' => 2, 'cat' => 7 )); ?>
				<?php if ( have_posts() ) : ?>
					<div class="tip-title">Coloring</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="tip-text"><?php the_content(); ?></div>
				<?php endwhile; ?>
				<?php endif; ?>
					
			<?php query_posts(array('post_type' => 'tips', 'order' => 'ASC', 'posts_per_page' => 2, 'cat' => 8 )); ?>
				<?php if ( have_posts() ) : ?>
					<div class="tip-title">Makeup</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="tip-text"><?php the_content(); ?></div>
				<?php endwhile; wp_reset_query(); ?>
				<?php endif;  ?>
			
		</div>
		<?php endif; ?>
		<div id="main-wrap">

