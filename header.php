<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tmr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tmr' ); ?></a>

	<header id="masthead" class="site-header">
		
		<nav id="site-navigation" class="main-navigation grid">
			<div class="site-branding">
				<?php
				// the_custom_logo();
				echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' )
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


	</header><!-- #masthead -->
