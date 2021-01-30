<?php
/**
 * Pictura Creative functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pictura_Creative
 */

if (!function_exists('pictura_creative_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function pictura_creative_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Pictura Creative, use a find and replace
         * to change 'pictura-creative' to the name of your theme in all the template files.
         */
        load_theme_textdomain('pictura-creative', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'pictura-creative'),
        ));

        /*
         * Switch default core markup for search form, comment for++++m, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('pictura_creative_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'pictura_creative_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pictura_creative_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('pictura_creative_content_width', 640);
}
add_action('after_setup_theme', 'pictura_creative_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pictura_creative_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'pictura-creative'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'pictura-creative'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'pictura_creative_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function pictura_creative_scripts()
{

/** SKROLR **/
    //wp_enqueue_style( 'skrolr-css', get_template_directory_uri() . '/css/skrolr.css' );

    wp_enqueue_script('pictura-creative-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('pictura-common', get_template_directory_uri() . '/css/common.css');

    wp_enqueue_style('flexslider-css', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css');

    /******* ANIMATE ON SCROL ***/

    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);

    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

    /** FLEXSLIDER */
    wp_enqueue_script('flexslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js', array(), null, true);

    /*** THEME JS ***/
    wp_enqueue_script('pictura-app', get_template_directory_uri() . '/js/app.js', array(), null, true);

    wp_enqueue_style('pictura-creative-style', get_stylesheet_uri());

    /****** RESPONSIVE CSS ***/

    wp_enqueue_style('pictura-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('lantern-css', get_template_directory_uri() . '/css/lantern.css');
    wp_enqueue_style('lantern-mobile-css', get_template_directory_uri() . '/css/lantern-mobile.css');

}
add_action('wp_enqueue_scripts', 'pictura_creative_scripts');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*** LOAD SHORTCODE **/
require get_template_directory() . '/inc/shortcode.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**  THEME ACF SETTIGNS **/
require get_template_directory() . '/inc/acf-functions.php';

/**** HIDE ADMIN BAR **/
function hide_admin_bar_from_front_end()
{
    if (is_blog_admin()) {
        return true;
    }
    return false;
}
add_filter('show_admin_bar', 'hide_admin_bar_from_front_end');
/*** ASK FOR ACF PRO PLUGIN ON THEME ACTIVATION ***/
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function obfuscate($email){
$encoded_email = '';
for ($a = 0,$b = strlen($email);$a < $b;$a++)
{
    $encoded_email .= '&#'.(mt_rand(0,1) == 0  ? 'x'.dechex(ord($email[$a])) : ord($email[$a])) . ';';
}
return $encoded_email;}

add_action('tgmpa_register', 'pictura_creative_register_required_plugins');

function pictura_creative_register_required_plugins()
{

    $plugins = array(

        array(
            'name' => 'Advanced Custom Fields Pro',
            'slug' => 'advanced-custom-fields-pro',
            'source' => get_template_directory() . '/plugins/advanced-custom-fields-pro.zip',
            'required' => true,
            'version' => '',
            'force_activation' => false,
            'force_deactivation' => false,
            'external_url' => '',
            'is_callable' => '',
        ),

        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required' => true,
        ),

        array(
            'name' => 'WordPress SEO by Yoast',
            'slug' => 'wordpress-seo',
            'is_callable' => 'wpseo_init',
            'required' => true,
        ),

        array(
            'name' => 'Safe SVG',
            'slug' => 'safe-svg',
            'is_callable' => '',
            'required' => true,
        ),

        array(
            'name' => 'WP Fastest Cache',
            'slug' => 'fastet-cache',
            'is_callable' => '',
            'required' => true,
        ),

        array(
            'name' => 'Contact Form 7 Captcha',
            'slug' => 'cf7-captcha',
            'is_callable' => '',
            'required' => true,
        ),

    );

    $config = array(
        'id' => 'pictura-creative',
        'default_path' => '',
        'menu' => 'pictura-install-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => false,
        'message' => '',

    );

    tgmpa($plugins, $config);
}
