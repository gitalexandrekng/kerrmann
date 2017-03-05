<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Lato" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">
			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

	<header class="header_top">
        <div class="view_point">Garage Kerrmann, geispolsheim 67</div>
	    <div class="container_nav">
            <nav class="top_navigation">
                <div class="logo">
                    <a href="<?php bloginfo('home') ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_kerrmann.png" alt=""></a>
                </div>
    	        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    	    </nav>
	    </div>
        <div class="content_header">
            <div class="txt">
                <ul>
                    <li><i class="fa fa-angle-double-right"></i>Plus de 100 véhicules d'occasion toutes catégories</li>
                    <li><i class="fa fa-angle-double-right"></i>Concessionnaire Citroën de longue date</li>
                    <li><i class="fa fa-angle-double-right"></i>Toute la gamme Citroën en neuf aux meilleurs prix du marché</li>
                    <li><i class="fa fa-angle-double-right"></i>Prise en charge immédiatement et sans rendez-vous</li>
                    <li><i class="fa fa-angle-double-right"></i>Mise à disposition de véhicules de courtoisie</li>
                </ul>
                <div class="buttonz">
                    <a href="#" class="custombutton">En savoir plus</a>
                    <a href="#" class="custombutton_tel"><i class="fa fa-phone"></i>03 88 66 34 84</a>
                    <a href="#" class="custombutton_tel"><i class="fa fa-fax"></i>03 88 66 98 66</a>
                </div>
            </div>
        </div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
