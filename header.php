<?php
/**
 * Header template for Career Connect Theme
 *
 * @package CareerConnect
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'career-connect'); ?></a>

<header id="masthead" class="site-header">
    <div class="header-inner container">
        <div class="site-branding">
            <?php career_connect_render_logo(); ?>
        </div>

        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'career-connect'); ?>">
            <button class="menu-toggle" id="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'career-connect'); ?>">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                <span class="menu-toggle-label screen-reader-text"><?php esc_html_e('Menu', 'career-connect'); ?></span>
            </button>

            <div class="nav-menu-wrapper" id="nav-menu-wrapper">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                        'fallback_cb'    => 'career_connect_fallback_menu',
                    ));
                } else {
                    career_connect_fallback_menu();
                }
                ?>
            </div>
        </nav>
    </div>
</header>

<main id="primary" class="site-main">
