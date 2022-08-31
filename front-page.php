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

			if (function_exists('get_fields')) :

				// Bio Section ****************************************//
				// ****************************************************//
				?>
				<section class="bio-section">
					<article class="bio-container">
					<?php


						if (get_field('bio_heading')) {
							?>
							<h1 class="screen-reader-text"><?php the_field('bio_heading'); ?></h1>
							<?php
						}
						?>
						<div class="bio-image-container">
							<?php
							if (get_field('bio_image')) {
									$image = get_field('bio_image');
									if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									<?php endif; ?>
								<?php
							}
							if (get_field('name')) {
								?>
								<h2><?php the_field('name'); ?></h2>
								<?php
							}
							?>
						</div>
						<div class="name-and-bio-container">
							<?php
							if (get_field('bio')) {
								?>
								<p><?php the_field('bio'); ?></p>
								<?php
							}
							?>
						</div>
					
						<div class="bio-image-container">
						
						</div>
					</article>
				</section>
				<?php

				// Featured Image One *********************************//
				// ****************************************************//
				?>
				<section class="featured-image-section">
					<article class="featured-image">
						<?php
						if (get_field('featured_image_one')) {
								$image = get_field('featured_image_one');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								<?php endif; ?>
							<?php
						}
						?>
					</article>
				</section>
				<?php
				// Clients Section ************************************//
				// ****************************************************//
				?>
				<section class="clients-section">
					<article class="clients-text-container">
						<?php
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
						?>
					</article>

					<article class="clients-examples-container">
						<?php
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
						?>
					</article>
				</section>
				<?php

				// Featured Image Two *********************************//
				// ****************************************************//
				?>
				<section class="featured-image-section">
					<article class="featured-image">
					<?php
					if (get_field('featured_image_two')) {
						$image = get_field('featured_image_two');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						<?php endif; ?>
					<?php
					?>
					</article>
				</section>
				<?php
				// Contact Form Section *******************************//
				// ****************************************************//
				?>
				<section class="contact-form-section">
					<article class="contact-text-container">
					<?php
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
					?>
					</article>

					<article class="form-container">
					<?php
					echo do_shortcode('[wpforms id="90"]'); 
					?>
					</article>
				</section>
				<?php

				// Featured Image Three *******************************//
				// ****************************************************//
				?>
				<section class="featured-image-section">
					<article class="featured-image">
					<?php
					if (get_field('featured_image_three')) {
						$image = get_field('featured_image_three');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						<?php endif; ?>
					<?php
					}
					?>
					</article>
				</section>
				<?php
			}
	
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
