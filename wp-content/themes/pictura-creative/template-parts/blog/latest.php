<?php if (is_page('latest-news')) {?>
<!-- <style>
.page-heading {
    display: none;
}

</style> -->
<?php }?>

<div class="col-sm-12 container" style="background-color:#f8f8f8; padding:70px 0 0 0px;">
    <a href="<?php echo site_url(); ?>/news" class="back-btn" target="_self">← Back</a>
</div>
<section class="page-heading" style="padding-top:100px;">
    <div class="container">
        <div class="" style="display:flex;">
            <h1 class="project-heading text-left">Latest News</h1>
            <h5 class="text-right flex-category categories">
				<div class="spancat">Categories ↓
				<ul>
					<li><a href="<?php echo site_url();?>/latest-news">Latest News</a></li>
					<li><a href="<?php echo site_url();?>/projects">Projects</a></li>
					<li><a href="<?php echo site_url();?>/tips-tricks">Tips & Tricks</a></li>
				</ul>
				</div> 
			</h5>
        </div>
    </div>
</section>

<?php $extraClass = get_sub_field("extra_class");?>
<section class=" project_grid <?php echo $extraClass ?>"
    style="background-color:<?php echo get_sub_field("project_background_color") ?> ">
    <div class="container">
        <div class="row">
            <?php if (get_sub_field("title")) {?>
            <div class="col-sm-12">
                <?php	//echo get_template_part('template-parts/title/title', 'style'); ?>
            </div><?php
}?>
            <?php $query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
));
if ($query->have_posts()) {
    while ($query->have_posts()): $query->the_post();?>
            <div class="col-sm-12 mb-40 col-md-4">
                <div class="">
                    <div class="blog-img">
                        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
        } else {?>
                        <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>"
                            alt="placeholder" title="placeholder" />
                        <?php }?>
                    </div>


                    <div class="blog-content">
                        <p><?php the_category();?></p>
                        <a href="<?php echo get_permalink(); ?>">
                            <h4 class="post-title"><?php the_title();?></h4>
                        </a>
                        <p class="post-date"><?php echo get_the_date();
        ?></p>
                        <?php
    $content = get_the_content();
        $content = strip_tags($content);
        echo substr($content, 0, 120);
        $read_link_style = get_sub_field("read_more_style");
        if (get_sub_field('button_size')) {
            $btnSize = 'btn-' . get_sub_field('button_size');
        } else {
            $btnSize = 'btn-small';
        }
        ?>

                        <!-- <div class="content-link"><a class="btn btn-<?php //echo $read_link_style . ' ' . $btnSize; ?>"
																																																											                            href="<?php //echo get_permalink(); ?>">Read more </a></div> -->
                    </div>
                </div>
            </div>
            <?php
endwhile;}
			else{?>
				<div class="col-md-12 no-result">
					<h3>"New blogs coming soon."</h3>
					</div>
			<?php }
wp_reset_postdata();
wp_reset_query();
?>
        </div>
    </div>
</section>
