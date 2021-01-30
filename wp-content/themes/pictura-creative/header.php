<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pictura_Creative
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head();?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171567511-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-171567511-1');
        </script>
    </head>

    <body <?php body_class();?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e('Skip to content', 'pictura-creative');?>
            </a>
            <?php
global $pageId;

$pageId = get_the_ID();

echo get_template_part('template-parts/search/search', 'bar');

$burgerMenu = get_field("burger_menu_style", "option");

echo get_template_part('template-parts/modal/modal', 'menu-' . $burgerMenu);

$pre_header = get_field("pre_header", "option");
if ($pre_header == 1) {
    //echo get_template_part( 'template-parts/header/pre-header', 'style1' );
}
$header = get_field("header_style", "option");
echo get_template_part('template-parts/header/header', $header);

if (get_field("enquiry_popup", "option") == 1) {
    echo get_template_part('template-parts/modal/modal', 'enquiry');
}
?>
            <?php

if (is_front_page() || is_page(array('what-we-do', 'about-us')) || ($post->post_parent == "992")) {
    $content = "content";
} else {
    $content = "pagecontent";
}?>
            <div id="<?php echo $content; ?>" class="site-content">
                <?php
if ((get_field("breadcrumb", $pageId) == 1) || is_single() || is_page(array('news'))) {
    echo "<div class='breadcrumb' data-aos='fade-up'><div class='container'><div class='row'><div class='col-sm-12'>";
    echo do_shortcode('[wpseo_breadcrumb]');
    echo "</div></div></div></div>";
}
?>
