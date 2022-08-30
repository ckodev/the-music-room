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
	
		$args = array(  
				'post_type' 	 => 'tmr-client',
				'post_status'    => 'publish',
				'posts_per_page' => -1, 
				'orderby'        => 'title', 
				'order' 		 => 'ASC', 
				'tax_query' => array(
					array(
						'taxonomy' => 'tmr-client-type',
						'field' => 'slug',
						'terms' => array('artist', 'adr', 'engineer', 'podcast'),
					)
				)
			);

			$loop = new WP_Query( $args ); 
			$terms = get_terms( 
				array(
					'taxonomy' => 'tmr-client-type',
				) 
			);

			while ( $loop->have_posts() ) : $loop->the_post();
				?>
					<article>
					<h2><?php the_title(); ?></h2>
					<?php 
						$terms = get_the_terms( get_the_ID(), 'tmr-client-type' );
							if ( $terms && ! is_wp_error( $terms ) ) : 
								foreach ( $terms as $term ) {
									?>
									<p><?php echo $term->name; ?></p>
									<?php
								}
							endif;
					?>		 
					</article> 
				<?php	
			endwhile;
			wp_reset_postdata(); 

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
