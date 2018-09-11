<?php
/**
 * The template for displaying a single service.
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
			<?php while ( have_posts() ) : the_post();
        $description = get_field('service_description');
        $image = get_field('service_image');
        $size = "full";?>

        <aside class = "our-services-sidebar">
          <h2><?php the_title(); ?></h2>
          <p><?php echo $description; ?></p>
        </aside>

        <div class = "our-services-image">
          <?php echo wp_get_attachment_image( $image, $size ); ?>
        </div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>