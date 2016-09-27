<?php
/**
 * The template for displaying case-studies
 *
 * This is the template that displays all case-studies by default.
 * Please note that this is the WordPress construct of case-studies
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
                <article class="case-study">
                    <?php the_content(); ?>
                </article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
