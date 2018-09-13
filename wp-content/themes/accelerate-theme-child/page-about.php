<?php
/**
 * The template for displaying the About page.
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
		<?php while ( have_posts() ) : the_post();
			$hero_text = get_field("hero_text"); ?>
			<h2><?php echo $hero_text; ?></h2>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field("image_1");
				$image_2 = get_field("image_2");
				$image_3 = get_field("image_3");
				$image_4 = get_field("image_4");
				$size = "full";
				$service_1 = get_field('service_1');
				$service_2 = get_field('service_2');
				$service_3 = get_field('service_3');
				$service_4 = get_field('service_4');
				$description_1 = get_field('description_1');
				$description_2 = get_field('description_2');
				$description_3 = get_field('description_3');
				$description_4 = get_field('description_4');
				?>
				<div class = "services-intro">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>

				<div class="our-services-container clearfix">
					<aside class = "our-services-sidebar">
	          <h2><?php echo $service_1; ?></h2>
	          <p><?php echo $description_1; ?></p>
	        </aside>

	        <div class = "our-services-image-r">
	          <?php echo wp_get_attachment_image( $image_1, $size ); ?>
	        </div>
				</div>

				<div class="our-services-container clearfix">
					<div class = "our-services-image-l">
	          <?php echo wp_get_attachment_image( $image_2, $size ); ?>
	        </div>

					<aside class = "our-services-sidebar">
	          <h2><?php echo $service_2; ?></h2>
	          <p><?php echo $description_2; ?></p>
	        </aside>
				</div>

				<div class="our-services-container clearfix">
					<aside class = "our-services-sidebar">
	          <h2><?php echo $service_3; ?></h2>
	          <p><?php echo $description_3; ?></p>
	        </aside>

	        <div class = "our-services-image-r">
	          <?php echo wp_get_attachment_image( $image_3, $size ); ?>
	        </div>
				</div>

				<div class="our-services-container clearfix">
					<div class = "our-services-image-l">
						<?php echo wp_get_attachment_image( $image_4, $size ); ?>
					</div>

					<aside class = "our-services-sidebar">
	          <h2><?php echo $service_4; ?></h2>
	          <p><?php echo $description_4; ?></p>
	        </aside>
				</div>


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
