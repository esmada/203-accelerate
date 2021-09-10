<?php
/**
 *The template for displaying a single case study.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post();
				$service = get_field('service');
				$description = get_field('description');
				$image = get_field('image');
				$size = "full";
				?>

		<article class="service">
			<h2><?php echo $service; ?></h2>
			<p><?php echo $description; ?></p>
			<div class= "service-image">
				<?php if($image) {
					echo wp_get_attachment_image( $image, $size );
				} ?>
			</div>

		</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->


<?php get_footer(); ?>
