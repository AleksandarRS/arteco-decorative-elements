<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ade
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php echo wp_kses( get_theme_mod( 'google_analytics_code' ), [ 'script' => [] ] ); ?>
	<meta name="theme-color" content="#010101">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ade' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="logo-menu-social-search-wrapper">
			<div class="container">
				<div class="justify-content-between row">
					<div class="logo-menu-wrapper">
						<div class="site-branding-main-logo site-branding">
							<div class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php echo( esc_url( get_header_image() ) ); ?>" alt="<?php echo( esc_attr( get_bloginfo( 'title' ) ) ); ?>"/>
								</a>
							</div>
							<?php if ( bloginfo( 'description' ) != '' ) : ?>
								<p class="site-description"><?php bloginfo( 'description' ); ?></p>
							<?php endif; ?>
						</div><!-- .site-branding -->
					
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php

								wp_nav_menu(
									array(
										'theme_location' 		=> 	'primary',
										'menu_id' 				=> 	'primary-menu',
										'menu_class' 			=> 	'main-header-menu',
										'container_class'		=>	'main-menu-container'
									)
								);

							?>
						</nav><!-- #site-navigation -->

						<div class="menu-toggle-wrapper">
							<a href='#' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div> <!-- /.logo-menu-wrapper -->
					<div class="header-social-search-menu-item">
						<div class="header-social-search-wrap">
							<div class="social-icons-wrapper">
								<?php the_social_links( true ); ?>
							</div><!-- /.social-icons-wrapper -->
							<div class="header-search">
								<i class="toggle-icon icon-search"></i>
								<i class="toggle-icon icon-times"></i>
								<div class="header-search-position">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div>
						<div class="header-cta-menu-wrap">
							<?php
								wp_nav_menu(
									array(
										'theme_location' 		=> 	'secondary',
										'menu_id' 				=> 	'secondary-menu',
										'menu_class' 			=> 	'cta-header-menu',
										'container_class'		=>	'cta-menu-container'
									)
								);
							?>
						</div>
					</div> <!-- /.header-social-search-menu-item -->
				</div> <!-- /.justify-content-between row -->
			</div> <!-- /.container -->
		</div> <!-- /.container logo-menu-wrapper -->
	</header><!-- #masthead /.site-header -->

	<div id="content" class="site-content">