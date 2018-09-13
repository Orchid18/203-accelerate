<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<figure class = "fouro-map">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.png" height="250" width = "250"/>
			</figure>
			<aside class = "fouro-text">
				<h1>Whoops, took a wrong turn...</h1>
				<h3>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.<br><br>Feel free to take a look around our <a href = "<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href = "<?php echo site_url('/case-studies/') ?>">work</a>.</h3>
			</aside>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
