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
<div id="page" class="site">

    <!--<a class="skip-link screen-reader-text" href="#content"><?php /*esc_html_e( 'Skip to content', 'pds' ); */ ?></a>-->

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

        <nav role="navigation">
            <div id="main-nav-toggle">
                <input type="checkbox"/>

                <span></span>
                <span></span>
                <span></span>

	            <?php
	            wp_nav_menu( array(
		            'theme_location' => 'main-nav',
		            'menu_id'        => 'main-nav',
		            'container'      => 'ul',
	            ) );
	            ?>

                <!--<ul id="menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Info</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>-->
            </div>
        </nav>
    </header>
