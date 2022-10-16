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

	<main  class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/page-hero' );

			if (function_exists('get_fields')) :

				// Bio Section ****************************************//
				// ****************************************************//
				?>
				<section id="bio" class="bio-section scroll-section">
					<article id="primary" class="bio-container" >
						<?php
						if (get_field('bio_heading')) {
							?>
							<h1 class="screen-reader-text"><?php the_field('bio_heading') ?></h1>
							<?php
						}
						?>
						
						<div class="bio-text-container" data-aos="fade-right" data-aos-duration="800" data-aos-anchor="#bio"
     												data-aos-anchor-placement="top-bottom" >

							<div class="grid-container">
								<div class="name-titles-container grid">
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
									if (get_field('bio')) {
										?>
										<p class="bio-text">
										<?php
										if (get_field('bio_image')) {
												$image = get_field('bio_image');
												if( !empty($image) ): ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
												<?php endif; ?>
											<?php
										}
										?>
										<?php the_field('bio'); ?>
										
										
										</p>
										<?php
									}
									?>
										
								</div>
								
							</div>
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
									<div class="featured-image-parralax" style="background-image: url('<?php echo $image['url']; ?>');">
										
									</div>
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
				<section id="clients" class="clients-section scroll-section">
				<article>
					<?php
							
							?>
					
						<div class="clients-container" data-aos="fade-right" data-aos-duration="800">
							<div class="clients-text-container client-grid">
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
								if (get_field('client_text')) {
									?>
									<p><?php the_field('client_text'); ?></p>
									<?php
								}
								?>
							</div>
							<div class="clients-examples-container client-grid">
								<?php
								$posts = get_field('clients');
								if( $posts ): ?>
										<ul id="client-list">
											<?php foreach( $posts as $post): ?>
												<li>
													<a class="uk-button uk-button-default" href="#modal-center<?php echo $post->ID ?>" uk-toggle>
														<div class="client-container">
															
															<?php 
															if (get_field('client_name')) {
																?>
																<div><p class="artist-name"><?php the_field('client_name') ?></p></div>
																<p class="name-one"></p>
																<?php
															}
															if (get_field('song_title')) {
																?>
																<div class="play-button-container">
																	<p class="artist-name"><?php the_field('song_title') ?></p>
																	<button class="play-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 22v-20l18 10-18 10z"/></svg>
																	</button>
																</div>
																
																<?php
															}
															?>
															
														</div>
													</a>
													<?php
													if (get_field('mp3')) {
														$audio = get_field('mp3');
													?>
														<div id="modal-center<?php echo $post->ID ?>" class="uk-flex-top" uk-modal>
															<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
																<button class="uk-modal-close-default" type="button" uk-close></button>

																<figure>
																<figcaption><?php 
																	if (get_field('client_name')) {
																		the_field('client_name');
																	}
																	?> - <?php
																	if (get_field('song_title')) {
																		the_field('song_title');
																	}
																?></figcaption>
																	<audio playsInline id="modal-center<?php echo $post->ID ?>" class="player"
																		controls
																		src="<?php echo $audio['url']; ?>">
																			<a href="<?php echo $audio['url']; ?>">
																				Download audio
																			</a>
																	</audio>
																</figure>
																	
																
															</div>
														</div>
													<?php
													}
													?>
												</li>
							
											<?php endforeach; ?>
										</ul>
									<?php
								endif;
								wp_reset_postdata();
								?>
							</div>
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
					if (get_field('featured_image_three')) {
						$image = get_field('featured_image_three');
						if( !empty($image) ): ?>
							
							<div class="featured-image-parralax img-right-center" style="background-image: url('<?php echo $image['url']; ?>');">
								
							</div>
						<?php endif; ?>
					<?php
					?>
					</article>
				</section>
				<?php

				// Contact Form Section *******************************//
				// ****************************************************//
				?>
				<section id="contact" class="contact-form-section scroll-section">
					<article>
						<div class="contact-container" data-aos="fade-right" data-aos-duration="800">
							<div class="contact-text-container grid">
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
							<div class="form-container grid">
								<?php
								echo do_shortcode('[wpforms id="90"]');
								?>
							</div>
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
					if (get_field('featured_image_two')) {
						$image = get_field('featured_image_two');
						if( !empty($image) ): ?>
							
							<div class="featured-image-parralax" style="background-image: url('<?php echo $image['url']; ?>');">
								
							</div>
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
