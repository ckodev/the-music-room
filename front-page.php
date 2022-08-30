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
			?>
				<div class="hero-container">
					<?php 
					$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
					$image_id = get_post_thumbnail_id();
					$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
					?> 
					<img src="<?php echo $feat_image_url; ?>" alt="<?php echo $image_alt; ?>">
					
				</div>
				
			<?php

			if (function_exists('get_fields')) :

				if (get_field('hero_text')) {
					?>
					<h2><?php the_field('hero_text'); ?></h2>
					<?php
				}

				// Bio Section ****************************************//
				// ****************************************************//
				if (get_field('bio_heading')) {
					?>
					<h3><?php the_field('bio_heading'); ?></h3>
					<?php
				}
				if (get_field('bio')) {
					?>
					<p><?php the_field('bio'); ?></p>
					<?php
				}
				if (get_field('bio_image')) {
						$image = get_field('bio_image');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						<?php endif; ?>
					<?php
				}
				// Featured Image One *********************************//
				// ****************************************************//
				if (get_field('featured_image_one')) {
						$image = get_field('featured_image_one');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						<?php endif; ?>
					<?php
				}
				// Clients Section ************************************//
				// ****************************************************//
				if (get_field('clients_heading')) {
					?>
					<h3><?php the_field('clients_heading'); ?></h3>
					<?php
				}
				if (get_field('client_text')) {
					?>
					<p><?php the_field('client_text'); ?></p>
					<?php
				}
				$posts = get_field('clients');
				if( $posts ): ?>
						<ul>
							<?php foreach( $posts as $post ): ?>
								<li>
									<a href="#">
										<h3><?php the_title(); ?></h3>
										<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php 
				endif; 
				wp_reset_postdata();

				// Featured Image Two *********************************//
				// ****************************************************//
				if (get_field('featured_image_two')) {
					$image = get_field('featured_image_two');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					<?php endif; ?>
				<?php

				// Contact Form Section *******************************//
				// ****************************************************//
				if (get_field('contact_heading')) {
					?>
					<h3><?php the_field('contact_heading'); ?></h3>
					<?php
				}
				if (get_field('contact_text')) {
					?>
					<p><?php the_field('contact_text'); ?></p>
					<?php
				}
				echo do_shortcode('[wpforms id="90"]'); 

				// Featured Image Three *******************************//
				// ****************************************************//
				if (get_field('featured_image_three')) {
					$image = get_field('featured_image_three');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					<?php endif; ?>
				<?php
				}
			}
	
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
