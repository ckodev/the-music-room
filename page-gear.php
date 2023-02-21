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

		
            ?><section class="gear-container">
                <article>
                <?php the_title('<h1 class="page-title">', '</h1>'); ?>
                <p class="gear-link"><a href="<?php echo home_url() . '/#contact' ?>">BACK</a></p>
                <?php
                if (function_exists('get_fields')) {
				    if (get_field('gear')) {
                        ?><div class="gear"><?php the_field('gear') ?></div><?php
                    }
                }
                ?>
                </article>
        </section>
         <?php
		
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
