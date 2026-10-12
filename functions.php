<?php
/**
 * Career Connect functions and definitions
 *
 * @package CareerConnect
 */

if (!defined('ABSPATH')) {
    exit;
}

define('CAREER_CONNECT_VERSION', '1.0.0');
define('CAREER_CONNECT_DIR', get_template_directory());
define('CAREER_CONNECT_URI', get_template_directory_uri());

// Include Course Data and Theme Setup Helpers
require_once CAREER_CONNECT_DIR . '/inc/course-data.php';
require_once CAREER_CONNECT_DIR . '/inc/theme-setup.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function career_connect_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'career-connect'),
        'footer'  => esc_html__('Footer Menu', 'career-connect'),
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Add support for editor styles.
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'career_connect_setup');

/**
 * Enqueue scripts and styles.
 */
function career_connect_scripts() {
    // Google Fonts (Inter)
    wp_enqueue_style(
        'career-connect-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet (for metadata)
    wp_enqueue_style(
        'career-connect-root',
        get_stylesheet_uri(),
        array(),
        CAREER_CONNECT_VERSION
    );

    // Main Design System Stylesheet
    wp_enqueue_style(
        'career-connect-main',
        CAREER_CONNECT_URI . '/assets/css/main.css',
        array('career-connect-fonts'),
        CAREER_CONNECT_VERSION
    );

    // Responsive Stylesheet
    wp_enqueue_style(
        'career-connect-responsive',
        CAREER_CONNECT_URI . '/assets/css/responsive.css',
        array('career-connect-main'),
        CAREER_CONNECT_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'career-connect-js',
        CAREER_CONNECT_URI . '/assets/js/main.js',
        array(),
        CAREER_CONNECT_VERSION,
        true
    );

    // Localize Script for Frontend Actions
    wp_localize_script('career-connect-js', 'careerConnectData', array(
        'homeUrl'     => esc_url(home_url('/')),
        'coursesUrl'  => esc_url(career_connect_get_page_url('courses')),
        'guidanceUrl' => esc_url(career_connect_get_page_url('career-guidance')),
        'enrollUrl'   => esc_url(career_connect_get_page_url('enroll')),
        'ajaxUrl'     => esc_url(admin_url('admin-ajax.php')),
    ));
}
add_action('wp_enqueue_scripts', 'career_connect_scripts');

/**
 * Render Logo with Graduation Cap Icon
 */
function career_connect_render_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
        return;
    }
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" rel="home">
        <span class="logo-icon" aria-hidden="true">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                <path d="M6 12v5c3 3 9 3 12 0v-5"/>
            </svg>
        </span>
        <span class="logo-text">
            <span class="logo-title">CAREER</span>
            <span class="logo-subtitle">CONNECT</span>
        </span>
    </a>
    <?php
}

/**
 * Breadcrumbs navigation helper.
 */
function career_connect_breadcrumbs() {
    if (is_front_page()) {
        return;
    }

    echo '<nav class="breadcrumbs-nav" aria-label="Breadcrumbs">';
    echo '<div class="container">';
    echo '<ol class="breadcrumb-list">';
    echo '<li class="breadcrumb-item"><a href="' . esc_url(home_url('/')) . '">Home</a></li>';

    if (is_page()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_single()) {
        $category = get_the_category();
        if (!empty($category)) {
            echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a></li>';
        }
        echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_category() || is_tag() || is_tax()) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . esc_html(single_term_title('', false)) . '</li>';
    } elseif (is_search()) {
        echo '<li class="breadcrumb-item active" aria-current="page">Search: ' . esc_html(get_search_query()) . '</li>';
    } elseif (is_404()) {
        echo '<li class="breadcrumb-item active" aria-current="page">Page Not Found</li>';
    } elseif (is_home()) {
        echo '<li class="breadcrumb-item active" aria-current="page">Blog & Articles</li>';
    }

    echo '</ol>';
    echo '</div>';
    echo '</nav>';
}

/**
 * Custom excerpt length.
 */
function career_connect_excerpt_length($length) {
    return 24;
}
add_filter('excerpt_length', 'career_connect_excerpt_length', 999);

/**
 * Custom excerpt more string.
 */
function career_connect_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'career_connect_excerpt_more');

/**
 * Add body classes for custom styling hooks.
 */
function career_connect_body_classes($classes) {
    $classes[] = 'career-connect-theme';
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }
    return $classes;
}
add_filter('body_class', 'career_connect_body_classes');
