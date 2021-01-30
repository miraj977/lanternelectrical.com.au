<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pictura_Creative
 */

$blogPageId = get_option('page_for_posts');
if (get_field('banner', "522")) {?>
<div class="banner-page"
    style="background-position:top;background: url('<?php echo site_url(); ?>/wp-content/uploads/2020/09/0N1A48ff73@2x-scaled.jpg')">

    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center">
                    <p class="text-white banner_text">We are a solutions focused electrical company, dedicated
                        to
                        helping take your business into the 21st century and beyond.</p>
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

</div>
<?php }
get_header();

?>

<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
                <div class="blog-header">
                    <div class="blog-cat bold" data-aos="fade-up">
                        <?php $category = get_the_category();
        echo $firstCategory = $category[0]->cat_name;?>
                    </div>
                    <!-- <div class="social-share" data-aos="fade-up">
																																												                        <ul class="footer_social black_social">
																																												                            <li><a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"
																																												                                    target="_blank" class="facebook">Facebook</a></li>
																																												                            <li><a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
																																												                                    target="_blank" class="twitter">Twitter</a></li>
																																												                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>"
																																												                                    target="_blank" class="linkedin">linkedin</a></li>
																																												                        </ul>
																																												                    </div> -->
                    <h1 class="heading" data-aos="fade-up">
                        <?php the_title();?>
                    </h1>
                    <div class="blogDetail-date" data-aos="fade-up"><?php echo get_the_date(); ?></div>
                </div>
                <div class="blogDEtail-img" data-aos="fade-up" style="text-align:center;">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="blogDetail-content" data-aos="fade-up">
                    <?php the_content();?>
                </div>
                <?php
    endwhile;
endif;
?>
            </div>

        </div>
    </div>
</section>
<section>
    <div style="background-color:#FFFFFF
; padding:50px 0;">
        <div class="container">
            <h5 class="related-title">Related Posts</h5>
        </div>
        <?php
get_template_part("template-parts/blog/blog", "grid");
?>
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
