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
			<!-- create all of the variables -->
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$clients = get_field('clients');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = "full"; //used for images
			?>
				<!-- use template tags and custom tags to create structure -->
                <article class="case-study">
					<aside class = "case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h6><?php echo $services; ?></h6>
						<h5>Client: <?php echo $clients; ?></h5>

	                    <?php the_content(); ?>

						<p><a href="<?php echo $link; ?>">Site Link</a></p>
					</aside>

					<div class = "case-study-images">
					<!-- wrap images in if/else statements so it is ok to leave one out -->
						<?php if($image_1) { ?>
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
						<?php } ?>
						<?php if($image_2) { ?>
							<?php echo wp_get_attachment_image( $image_2, $size ); ?>
						<?php  } ?>
						<?php if($image_1) { ?>
							<?php echo wp_get_attachment_image( $image_3, $size ); ?>
						<?php  } ?>
					</div>
                </article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
