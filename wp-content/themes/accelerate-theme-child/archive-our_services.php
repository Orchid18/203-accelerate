<?php
/**
 * The template for displaying the archive of services available.
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

<div id="primary" class="our-services hero-content">
	<div class="main-content" role="main">
		<h2>Accelerate is a marketing and strategy agency located in the heart of NYC.  Our goal is to build businesses by making our clients visible and making their customers smile.</h2>

	</div><!-- .main-content -->
</div><!-- #primary -->

	<div class= "services-intro">
		<h3>our services</h3>
		<p>We take pride in our clients and the services we create for them.<br>Here is a brief overview of our offered services.</p>
	</div>

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
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

			<div class= "about-contact clearfix">
				<ul class="about-contact-blurb">
					<li><h2>Interested in working with us?</h2></li>
					<li><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></li>
				</ul>
			</div>


		</div><!-- .main-content -->




	</div><!-- #primary -->

<?php get_footer(); ?>
