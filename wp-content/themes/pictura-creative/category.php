<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pictura_Creative
 */

get_header();
?>

<div class="col-sm-12" style="background-color:#f8f8f8; padding:70px 0 0 100px;">
    <a href="<?php echo site_url(); ?>/news" class="back-btn" target="_self">← Back</a>
</div>

<section class="page-heading" style="padding: 100px 0 0px 0;">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-left blog-heading">
                    <h1 class="mb-0 category-title"><?php the_archive_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

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
            <!-- <div class="col-md-4 col-lg-3 col-sm-12">
                <div class="sidebar blogSidebar">
                    <?php dynamic_sidebar("blog-sidebar");?>
                </div>
            </div> -->
            <div class="col-sm-12">
                <nav class="pagination">
                    <?php pagination_bar();?>
                </nav>
            </div>

        </div>
    </div>
</section>
<?php
get_footer();
