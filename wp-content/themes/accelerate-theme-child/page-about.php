
<?php
/**
 * Template Name: About
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


		<div class="about about-hero-content">
			<div class="about-header-content">
				<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
			</div>
		</div>

		<div id="about"class="main-content clearfix" role="main">
				<?php while ( have_posts() ) : the_post();
				?>
				<section class="about-main">
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</section>

				<section class="about-service">
					<ul class="individual-about-service">
					<?php query_posts('post_type=services'); ?>
						<?php while (have_posts()) : the_post();
							$image = get_field('image');
							$size = "medium";
							$service = get_field('service');
							$description = get_field('description');
						?>
							<li class= "service-listing">
								<figure class="services-icon">
									<?php echo wp_get_attachment_image($image, $size); ?>
								</figure>
								<div id="about-service-text">
									<h4><?php echo $service; ?></h4>
									<p><?php echo $description; ?></p>
							</div>
							</li>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
					</ul>
				</section>

				<section class= "about-contact-us">
						<h3>Interested in working with us?</h3>
						<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
				</section>



				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div><!-- .main-content -->

<?php get_footer(); ?>
