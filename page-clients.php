<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tmr
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/page-hero' );
			
			if (function_exists('get_fields')) {
				if (get_field('soundcloud_embed')) {
					the_field('soundcloud_embed');
				}
			}


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
