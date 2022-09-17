<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tmr
 */

?>

	<footer id="colophon trigger-bottom" class="site-footer">
		<div  class="site-info grid">
				<div class="footer-nav-container" data-aos="fade-up" data-aos-duration="800" data-aos-anchor="#trigger-bottom"
     				data-aos-anchor-placement="top-down" data-aos-offset="-75">
					<div class="footer-logo-container" >
						<?php
						// the_custom_logo();
						echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'thumbnail' )
						?>
					</div>
					<div class="footer-text-container" >
						<div class="footer-nav">
							<h2>Info</h2>
							<nav class="footer-menu">
								<?php wp_nav_menu(array('theme_location' => 'footer')) ; ?>
							</nav>
						</div>
						<div class="footer-nav">
							<h2>Contact</h2>
							<nav class="footer-menu">
								<ul>
									<?php
									if (function_exists('get_fields')) {
										$page_id = 31;
										if (get_field('email', $page_id)) {
											?>
											<li><a href="mailto:<?php the_field('email', $page_id) ?>"><?php the_field('email', $page_id) ?></a></li>
											<?php
										}
										if (get_field('phone_number', $page_id)) {
											?>
											<li class="on-desktop"><?php the_field('phone_number', $page_id) ?></li>
											<li class="on-mobile"><a href="tel:+<?php the_field('phone_number', $page_id) ?>"><?php the_field('phone_number', $page_id) ?></a></li>
											<?php
										}
									}
									?>
								</ul>
							</nav>
						</div>
					</div>
				</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
