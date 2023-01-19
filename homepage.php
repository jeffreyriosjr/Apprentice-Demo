<?php
/**
 * Template Name: homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package apprentices-demo
 */

get_header();
?>

	<main id="primary" class="site-main">
        Hello Jeff
       <img src="images/sample.png" alt="">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'apprentices-demo' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'apprentices-demo' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
