<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Pictura_Creative
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function pictura_creative_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'pictura_creative_pingback_header');

/** ADD PAGE ON THEME ACTIVATION */
add_action('after_setup_theme', 'add_common_page');
function add_common_page()
{
    $pages = array(
        array("page_name" => "Homepage", 'page_template' => 'page.php'),
        array("page_name" => "About us", 'page_template' => 'page.php'),
        array("page_name" => "Careers", 'page_template' => 'career.php'),
        array("page_name" => "Contact Us", 'page_template' => 'contact.php'),
        array("page_name" => "FAQ", 'page_template' => 'page.php'),
        array("page_name" => "Projects", 'page_template' => 'page.php'),
        array("page_name" => "Services", 'page_template' => 'service.php'),
        array("page_name" => "Privacy Policy", 'page_template' => 'page.php'),
        array("page_name" => "Terms of use", 'page_template' => 'page.php'),
    );

    foreach ($pages as $page) {

        $page_check = get_page_by_title($page['page_name']);
        $new_page = array(
            'post_type' => 'page',
            'post_title' => $page['page_name'],
            'post_content' => '',
            'post_status' => 'publish',
            'post_author' => 1,
            // Assign page template
            'page_template' => $page['page_template'],
        );
        if (!isset($page_check->ID)) {
            $new_page_id = wp_insert_post($new_page);
        }
    }
}
/*** REGISTER POST TYPES **/

add_action('after_setup_theme', 'add_post_types');{
    // TEAM //
    add_action('init', 'wpdocs_codex_Team_init');

    function wpdocs_codex_Team_init()
    {
        $labels = array(
            'name' => _x('Team', 'Post type general name', 'pictura-creative'),
            'singular_name' => _x('Team', 'Post type singular name', 'pictura-creative'),
            'menu_name' => _x('Team', 'Admin Menu text', 'pictura-creative'),
            'name_admin_bar' => _x('Team', 'Add New on Toolbar', 'pictura-creative'),
            'add_new' => __('Add New', 'pictura-creative'),
            'add_new_item' => __('Add New Team', 'pictura-creative'),
            'new_item' => __('New Team', 'pictura-creative'),
            'edit_item' => __('Edit Team', 'pictura-creative'),
            'view_item' => __('View Team', 'pictura-creative'),
            'all_items' => __('All Team', 'pictura-creative'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'team'),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
        );
        register_post_type('team', $args);
    }
    unset($args);
    unset($labels);

    // SERVICE //
    add_action('init', 'wpdocs_codex_Service_init');

    function wpdocs_codex_Service_init()
    {
        $labels = array(
            'name' => _x('Service', 'Post type general name', 'pictura-creative'),
            'singular_name' => _x('Service', 'Post type singular name', 'pictura-creative'),
            'menu_name' => _x('Service', 'Admin Menu text', 'pictura-creative'),
            'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'pictura-creative'),
            'add_new' => __('Add New', 'pictura-creative'),
            'add_new_item' => __('Add New Service', 'pictura-creative'),
            'new_item' => __('New Service', 'pictura-creative'),
            'edit_item' => __('Edit Service', 'pictura-creative'),
            'view_item' => __('View Service', 'pictura-creative'),
            'all_items' => __('All Service', 'pictura-creative'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'service'),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
        );
        register_post_type('Service', $args);
    }
    unset($args);
    unset($labels);

    // Testimonial //
    add_action('init', 'wpdocs_codex_Testimonial_init');

    function wpdocs_codex_Testimonial_init()
    {
        $labels = array(
            'name' => _x('Testimonial', 'Post type general name', 'pictura-creative'),
            'singular_name' => _x('Testimonial', 'Post type singular name', 'pictura-creative'),
            'menu_name' => _x('Testimonial', 'Admin Menu text', 'pictura-creative'),
            'name_admin_bar' => _x('Testimonial', 'Add New on Toolbar', 'pictura-creative'),
            'add_new' => __('Add New', 'pictura-creative'),
            'add_new_item' => __('Add New Testimonial', 'pictura-creative'),
            'new_item' => __('New Testimonial', 'pictura-creative'),
            'edit_item' => __('Edit Testimonial', 'pictura-creative'),
            'view_item' => __('View Testimonial', 'pictura-creative'),
            'all_items' => __('All Testimonial', 'pictura-creative'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'testimonial'),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
        );
        register_post_type('testimonial', $args);

    }
    unset($args);
    unset($labels);

// Hero //
    add_action('init', 'wpdocs_codex_Hero_init');

    function wpdocs_codex_Hero_init()
    {
        $labels = array(
            'name' => _x('Hero', 'Post type general name', 'pictura-creative'),
            'singular_name' => _x('Hero', 'Post type singular name', 'pictura-creative'),
            'menu_name' => _x('Hero', 'Admin Menu text', 'pictura-creative'),
            'name_admin_bar' => _x('Hero', 'Add New on Toolbar', 'pictura-creative'),
            'add_new' => __('Add New', 'pictura-creative'),
            'add_new_item' => __('Add New Hero', 'pictura-creative'),
            'new_item' => __('New Hero', 'pictura-creative'),
            'edit_item' => __('Edit Hero', 'pictura-creative'),
            'view_item' => __('View Hero', 'pictura-creative'),
            'all_items' => __('All Hero', 'pictura-creative'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'hero'),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
        );
        register_post_type('hero', $args);
    }
    unset($args);
    unset($labels);

    // Tips //
    add_action('init', 'wpdocs_codex_Tips_init');

    function wpdocs_codex_Tips_init()
    {
        $labels = array(
            'name' => _x('Tips', 'Post type general name', 'pictura-creative'),
            'singular_name' => _x('Tip', 'Post type singular name', 'pictura-creative'),
            'menu_name' => _x('Tips', 'Admin Menu text', 'pictura-creative'),
            'name_admin_bar' => _x('Tips', 'Add New on Toolbar', 'pictura-creative'),
            'add_new' => __('Add New', 'pictura-creative'),
            'add_new_item' => __('Add New Tips', 'pictura-creative'),
            'new_item' => __('New Tips', 'pictura-creative'),
            'edit_item' => __('Edit Tips', 'pictura-creative'),
            'view_item' => __('View Tips', 'pictura-creative'),
            'all_items' => __('All Tips', 'pictura-creative'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'tips'),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
        );
        register_post_type('tips', $args);
    }
    unset($args);
    unset($labels);

    // REGISTER Tips CATEGORY //
    $labels = array(
        'name' => _x('Tips Category', 'taxonomy general name', 'pictura-creative'),
        'singular_name' => _x('Tip Category', 'taxonomy singular name', 'pictura-creative'),
        'search_items' => __('Search Tips Category', 'pictura-creative'),
        'popular_items' => __('Popular Tips Category', 'pictura-creative'),
        'all_items' => __('All Tips Category', 'pictura-creative'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Tips Category', 'pictura-creative'),
        'update_item' => __('Update Tips Category', 'pictura-creative'),
        'add_new_item' => __('Add New Tips Category', 'pictura-creative'),
        'new_item_name' => __('New Tips Category Name', 'pictura-creative'),
        'separate_items_with_commas' => __('Separate Tips Category with commas', 'pictura-creative'),
        'add_or_remove_items' => __('Add or remove Tips Category', 'pictura-creative'),
        'choose_from_most_used' => __('Choose from the most used Tips Category', 'pictura-creative'),
        'not_found' => __('No Tips Category found.', 'pictura-creative'),
        'menu_name' => __('Tips Category', 'pictura-creative'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'tips_category'),
    );
    register_taxonomy('tips_category', 'portfolio', $args);

    // Portfolio //
    add_action('init', 'wpdocs_codex_Project_init');

    function wpdocs_codex_Project_init()
    {
        $labels = array(
            'name' => _x('Project', 'Post type general name', 'pictura-creative'),
            'singular_name' => _x('Project', 'Post type singular name', 'pictura-creative'),
            'menu_name' => _x('Project', 'Admin Menu text', 'pictura-creative'),
            'name_admin_bar' => _x('Project', 'Add New on Toolbar', 'pictura-creative'),
            'add_new' => __('Add New', 'pictura-creative'),
            'add_new_item' => __('Add New Project', 'pictura-creative'),
            'new_item' => __('New Project', 'pictura-creative'),
            'edit_item' => __('Edit Project', 'pictura-creative'),
            'view_item' => __('View Project', 'pictura-creative'),
            'all_items' => __('All Project', 'pictura-creative'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'project'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'author', 'thumbnail'),
        );
        register_post_type('project', $args);
    }
    unset($args);
    unset($labels);

    // REGISTER PORTFOLIO CATEGORY //
    $labels = array(
        'name' => _x('Project Category', 'taxonomy general name', 'pictura-creative'),
        'singular_name' => _x('Project Category', 'taxonomy singular name', 'pictura-creative'),
        'search_items' => __('Search Project Category', 'pictura-creative'),
        'popular_items' => __('Popular Project Category', 'pictura-creative'),
        'all_items' => __('All Project Category', 'pictura-creative'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Project Category', 'pictura-creative'),
        'update_item' => __('Update Project Category', 'pictura-creative'),
        'add_new_item' => __('Add New Project Category', 'pictura-creative'),
        'new_item_name' => __('New Project Category Name', 'pictura-creative'),
        'separate_items_with_commas' => __('Separate Project Category with commas', 'pictura-creative'),
        'add_or_remove_items' => __('Add or remove Project Category', 'pictura-creative'),
        'choose_from_most_used' => __('Choose from the most used Project Category', 'pictura-creative'),
        'not_found' => __('No Project Category found.', 'pictura-creative'),
        'menu_name' => __('Project Category', 'pictura-creative'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'project_category'),
    );
    register_taxonomy('project_category', 'porject', $args);
}
/* Add Footer sidebar
 */
if (function_exists('register_sidebar')) {
    $sidebar2 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget1', 'pictura-creative'),
        'id' => 'footer-1',
    );
    $sidebar3 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget2', 'pictura-creative'),
        'id' => 'footer-2',
    );

    $sidebar4 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget3', 'pictura-creative'),
        'id' => 'footer-3',
    );
    $sidebar5 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Footer Widget4', 'pictura-creative'),
        'id' => 'footer-4',
    );

    $sidebar6 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Left sidebar', 'pictura-creative'),
        'id' => 'left-sidebar',
    );

    $sidebar7 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Right sidebar', 'pictura-creative'),
        'id' => 'right-sidebar',
    );

    $sidebar8 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
        'name' => __('Blog sidebar', 'pictura-creative'),
        'id' => 'blog-sidebar',
    );

    register_sidebar($sidebar2);
    register_sidebar($sidebar3);
    register_sidebar($sidebar4);
    register_sidebar($sidebar5);
    register_sidebar($sidebar6);
    register_sidebar($sidebar7);
    register_sidebar($sidebar8);

}
// disable guternburg for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable guternburg for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

function remove_query_strings()
{
    if (!is_admin()) {
        add_filter('script_loader_src', 'remove_query_strings_split', 15);
        add_filter('style_loader_src', 'remove_query_strings_split', 15);
    }
}

// REMOVE QUERY STRING FROM STATIC RESOURCES
function remove_query_strings_split($src)
{
    $output = preg_split("/(&ver|\?ver)/", $src);
    return $output[0];
}
add_action('init', 'remove_query_strings');

/*** SET THUMBNAIL PLACEHOLDER **/
//add_action( 'after_theme_setup', 'set_global_variable' );
function set_global_variable()
{
    global $placeholder_thumb;
    $placeholder_thumb = get_template_directory_uri() . '/images/placeholder.jpg';
}

/*ADD CLASS TO BODY IF PREHEADER ENABLED **/
function my_plugin_body_class($classes)
{
    global $post;
    if (get_field("pre_header", "options") == 1) {
        $classes[] = 'preHeaderTrue';
    }
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    if ((!is_front_page())) {
        if (!is_home()) {
            if (is_search() || (is_single() && "service" != get_post_type()) || (!get_field('banner'))) {
                $classes[] = 'noBanner';
            }
        }
    }

    if ("page" == get_post_type()) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }

    return $classes;
}
add_filter('body_class', 'my_plugin_body_class');

/*** EMAIL obfuscate **/
function obfuscate_email($email)
{
    $emailNew = 'mailto:' . $email;
    $output = "";

    for ($i = 0; $i < (strlen($emailNew)); $i++) {
        $output .= '&#' . ord($emailNew[$i]) . ';';
    }
    return $output;
}

/** PAGINATION **/
function pagination_bar()
{
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;
    $prev_arrow = '←';
    $next_arrow = '→';
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => $prev_arrow,
            'next_text' => $next_arrow,
        ));
    }
}
/******* ADD PARENT PAGE IN single SERVICE BREADCRUM ***/
add_filter('wpseo_breadcrumb_links', 'unbox_yoast_seo_breadcrumb_append_link');
function unbox_yoast_seo_breadcrumb_append_link($links)
{
    global $post;
    if (is_singular('service')) {
        $breadcrumb = array(array(
            'url' => site_url('/services/'),
            'text' => 'Services',
        ));
        array_splice($links, 1, 0, $breadcrumb);
    }
    return $links;
}
/******* REMOVE CATEGORY LABEL FROM CATEGORY TITLE ON CATEGORY PAGE*****/
function prefix_category_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'prefix_category_title');
add_filter('pre_get_posts', 'custom_post_type_search');
function custom_post_type_search($query)
{
    if ($query->is_search) {
        $query->set('post_type', array('post', 'service', 'portfolio'));
    }
    return $query;
}
