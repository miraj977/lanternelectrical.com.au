<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pictura_Creative
 */

get_header();

$blogPageId = get_option('page_for_posts');
if (get_field('banner', $blogPageId)) {?>
<div class="banner-page"
    style="background-position:top;background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <?php if (get_field("banner_text")) {?>
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center">
                    <h5 class="text-white"><?php echo get_field("banner_subtitle", $blogPageId) ?></h5>
                    <p class="text-white banner_text"><?php the_field("banner_text", $blogPageId);?></p>
                    <?php

    if (get_field('button_size')) {
        $btnSize = 'btn-' . get_field('button_size');
    } else {
        $btnSize = 'btn-small';
    }
    $link = get_field('banner_button');
    if ($link) {
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
                    <div class="content-link"><a
                            class="btn btn-<?php echo get_field('choose_banner_button_style') . ' ' . $btnSize; ?>"
                            href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                            <?php echo $link_title; ?> </a></div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<?php }

if (get_field("show_page_info", $blogPageId) == 1) {
    ?>
<div class="col-sm-12 container" style="background-color:#f8f8f8; padding:70px 0 0 10px;">
    <a href="<?php echo site_url(); ?>/news" class="back-btn" target="_self">← Back</a>
</div>
<section class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class=" blog-heading text-<?php echo get_field("alignment", $blogPageId) ?>">
                    <?php if (get_field("subtitle", $blogPageId)) {?>
                    <h4><?php echo get_field("subtitle", $blogPageId); ?></h4>
                    <?php }?>
                    <h1 class="blog-heading"><?php echo get_the_title($blogPageId); ?></h1>
                    <h5 class="text-right"><?php echo do_shortcode('[wpcd_child_categories_dropdown] '); ?></h5>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
}
?>
<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <?php
if (have_posts()):
    while (have_posts()):
        the_post();

        get_template_part('template-parts/blog/blog', 'grid');

    endwhile;
endif;
?>



            </div>
            <!-- <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="sidebar blogSidebar">
                    <?php //dynamic_sidebar("blog-sidebar");?>
                </div>
            </div> -->
            <div class="col-sm-12">
                <nav class="pagination">
                    <?php pagination_bar();?>
                </nav>
                <?php ?>
                <span class="older">
                    <?php next_posts_link('<img src="' . get_template_directory_uri() . '/images/boldleft.svg" > Previous')?>
                </span>
                <div class="pageOf">
                    <?php $paged = get_query_var('paged', 1);?>
                    Page <?php if ($paged) {echo $paged;} else {echo "1";}?> of
                    <?php global $wp_query;
echo $wp_query->max_num_pages;?>
                </div>
                <span class="newer">
                    <?php previous_posts_link('Next <img src="' . get_template_directory_uri() . '/images/boldright.svg" > ')?>
                </span><?php ?>

                <!-- .pagination  -->
            </div>

        </div>
    </div>
</section>
<section class="bgImage bottom-bg-img"
    style="background-image:url('<?php echo get_field("bottom_banner_image", "option") ?>') ">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-md-12 col-lg-12 textCenter">
                <?php if (get_field("bottom_banner_text", "option")) {
    echo "<img src='" . site_url() . "/wp-content/uploads/2020/09/bear-n-ears-3.png' class='bearnear'>";
}

?>
                <h2 class="bgText mb-0 text-center">
                    <?php
echo get_field("bottom_banner_text", "option"); ?>
                </h2>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
