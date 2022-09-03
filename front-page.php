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
							<h1 class="screen-reader-text"><?php the_field('bio_heading') ?></h1>
							<?php
						}
						?>
						
						<div class="bio-text-container">

							<div class="name-titles-container">
								<?php
								if (get_field('name')) {
								
									?>
									<h2 class="bio-name"><?php the_field('name'); ?></h2>
									<?php
								}
								if (get_field('titles')) {
									?>
									<h3 class="bio-titles"><?php the_field('titles'); ?></h3>
									<?php
								}
								?>
							</div>

							<div class="bio-image-container">
								<?php
								if (get_field('bio_image')) {
										$image = get_field('bio_image');
										if( !empty($image) ): ?>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
										<?php endif; ?>
									<?php
								}
								?>
							</div>

							<?php
							if (get_field('bio')) {
								?>
								<p class="bio-text"><?php the_field('bio'); ?></p>
								<?php
							}
							?>
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
				<article>
					<?php
					if (get_field('client_text')) {
								?>
								<p><?php the_field('client_text'); ?></p>
								<?php
							}
							?>
					
						<div class="clients-text-container">
							<?php
							if (get_field('clients-heading')) {
								?>
								<h1 id="hello" class="screen-reader-text"><?php the_field('clients-heading') ?></h1>
								<?php
							}
							if (get_field('clients_heading')) {
								?>
								<h2><?php the_field('clients_heading'); ?></h2>
								<?php
							}
							if (get_field('client_types')) {
								?>
								<h3 class="client-types"><?php the_field('client_types'); ?></h3>
								<?php
							}
							
							?>
						</div>
						<div class="clients-examples-container">
							<?php
							$posts = get_field('clients');
							if( $posts ): ?>
									<ul id="client-list">
										<?php foreach( $posts as $post ): ?>
											<li>
												
												<div id="play-example-container" class="play-example-container">
													<div class="youtube">Listen</div>
													<h2><?php the_title(); ?></h2>
													<div id="iframe-container" class="iframe-container"><?php the_field('youtube_embed'); ?></div>
													
												</div>

												<?php echo get_the_post_thumbnail( $post->ID, 'medium_large' ); ?>
												
											</li>
										<?php endforeach; ?>
									</ul>
								<?php
							endif;
							wp_reset_postdata();
							?>
						</div>
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
					<article>
						<div class="contact-text-container">
						<?php
						if (get_field('contact_heading')) {
							?>
							<h2><?php the_field('contact_heading'); ?></h2>
							<?php
						}
						if (get_field('contact_sub_heading')) {
							?>
							<h3><?php the_field('contact_sub_heading'); ?></h3>
							<?php
						}
						if (get_field('contact_text')) {
							?>
							<p><?php the_field('contact_text'); ?></p>
							<?php
						}
						?>
						</div>
						<div class="form-container">
						<?php
						echo do_shortcode('[wpforms id="90"]');
						?>
						</div>
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
