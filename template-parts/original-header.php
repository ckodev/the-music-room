<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tmr
 */

?>

<nav id="site-navigation" class="main-navigation">
			<div class="site-branding">
				<?php
				// the_custom_logo();
				// echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' )
				?>
				<a href="<?php echo esc_url( get_page_link( 31 ) ); ?>"><h1 class="page-title screen-reader-text"><?php the_title(); ?></h1></a>
			</div><!-- .site-branding -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( '', 'tmr' ); ?>
				  <span class="hamburger-icon" id="hamburger-icon">
                      <span class="line"></span>
                      <span class="line"></span>
                      <span class="line"></span>
                  </span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>

			
		</nav><!-- #site-navigation -->


