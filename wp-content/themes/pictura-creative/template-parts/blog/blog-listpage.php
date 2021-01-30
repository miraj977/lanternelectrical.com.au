<div class="blog-row">
    <div class="col-sm-12 col-md-4 align-self-center">
        <div class="blog-list-img">
            <?php the_post_thumbnail();?>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 align-self-center">
        <div class="blog-list-content">
            <div class="blog-cat small bold"><?php
foreach ((get_the_category()) as $category) {
    echo $category->name;
}?>
            </div>
            <h4 class="demiBold"><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h4>
            <div class="blog-date"><?php echo get_the_date(); ?></div>
            <?php
$content = get_the_content();
$content = strip_tags($content);
echo substr($content, 0, 120);
?>
        </div>
    </div>
    <div class="col-sm-12 col-md-2 align-self-center">

        <div class="content-link"><a class="btn-style1" href="<?php echo get_permalink(); ?>">Read more →</a></div>
    </div>
</div>
