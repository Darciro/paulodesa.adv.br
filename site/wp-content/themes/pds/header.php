<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package paulodesa
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
<!--<a class="skip-link screen-reader-text" href="#content"><?php /*esc_html_e( 'Skip to content', 'pds' ); */?></a>-->

<header id="masthead" class="site-header">
    <div class="site-branding">
        <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>
        </h1>
	    <?php
        $_s_description = get_bloginfo( 'description', 'display' );
        if ( $_s_description || is_customize_preview() ) : ?>
        <p class="site-description"><?php echo $_s_description; /* WPCS: xss ok. */ ?></p>
        <?php endif; ?>
    </div>

    <!--<nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'pds' ); */?></button>
        <?php
/*        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        ) );
        */?>
    </nav>-->

    <nav role="navigation">
        <div id="menu-toggle">
            <!--
			A fake / hidden checkbox is used as click reciever,
			so you can use the :checked selector on it.
			-->
            <input type="checkbox" />

            <!--
			Some spans to act as a hamburger.

			They are acting like a real hamburger,
			not that McDonalds stuff.
			-->
            <span></span>
            <span></span>
            <span></span>

            <!--
			Too bad the menu has to be inside of the button
			but hey, it's pure CSS magic.
			-->
            <ul id="menu">
                <a href="#"><li>Home</li></a>
                <a href="#"><li>About</li></a>
                <a href="#"><li>Info</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
            </ul>
        </div>
    </nav>

    <!--<div id="menu">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="menu-inner">

            <ul>
                <li>Menu Item</li>
                <li>Menu Item</li>
                <li>Menu Item</li>
                <li>Menu Item</li>
                <li>Menu Item</li>
                <li>Menu Item</li>
            </ul>
        </div>
    </div>-->
</header>
