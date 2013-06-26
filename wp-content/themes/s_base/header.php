<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package s_base
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<?php do_action( 'before' ); ?>
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/clear_pixel.gif" width="124" height="22" alt="logo"/>
						</a>
					</h1>
				</div>

				<nav id="site-navigation" class="navigation-main" role="navigation">
					<h1 class="menu-toggle"><?php _e( 'Menu', 's_base' ); ?></h1>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 's_base' ); ?>"><?php _e( 'Skip to content', 's_base' ); ?></a></div>

					<?php
					if ( is_page( 'en' ) or is_child_page_of( 'en' ) ) {
						$pte_menu_locale = 'primary_menu_en';
					} else {
						$pte_menu_locale = 'primary';
					}
					wp_nav_menu( array( 'theme_location' => $pte_menu_locale ) );
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="main" class="site-main">
