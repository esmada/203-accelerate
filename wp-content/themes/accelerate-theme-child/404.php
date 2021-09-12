<?php
/**
 * The template for displaying the 404
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="hero-content error-page">
		<div id="error-page-text" class="main-content" role="main">
			<h2>Oops!</h2>
			<p>Not the page you expected? <br>Sorry about that.</p>
			<a class="button" href="<?php echo home_url() ?>">Home</a>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
