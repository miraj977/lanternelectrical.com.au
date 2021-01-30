<?php

if (is_front_page()) {
    echo do_shortcode("[hero-slider-fullScreen]");}?>
<?php
if (is_single() && 'service' != get_post_type()) {
    $blogPageId = get_option('page_for_posts');

    if (get_field('banner', $blogPageId)) {
        ?>
<div class="banner-page" style="background-image: url('<?php echo get_the_post_thumbnail_url($blogPageId); ?>')">
    <?php if (get_field("banner_text", $blogPageId)) {?>
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
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
<?php
}

} else if (is_home()) {
    $blogPageId = "get_option('page_for_posts')";

    if (get_field('banner', $blogPageId)) {
        ?>
<div class="banner-page" style="background-image: url('<?php echo get_the_post_thumbnail_url($blogPageId); ?>')">
    <?php if (get_field("banner_text", $blogPageId)) {?>
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
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
<?php
}
} else if (is_page(array('what-we-do', 'about-us')) || ($post->post_parent == "992")) {
    $class = " ";//flexslider heroFullScreen
    $blogPageId = get_the_ID();
    //echo $blogPageId;exit;
    if (get_field('banner', $blogPageId)) {
        ?>
<!-- <div class="banner-page" style="background-image: url('<?php //echo get_the_post_thumbnail_url($blogPageId); ?>')"> -->
<div class="banner-about">
	<img src="<?php echo get_the_post_thumbnail_url($blogPageId); ?>" class="img-fluid">
	<!--  height:100vh -->
    <?php if (get_field("banner_text", $blogPageId)) {?>
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
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
<!--     <div id="scrollBottom">
        <a href="#content">scroll down</a>
    </div> -->
</div>
<?php
}

} else {
    global $post;
    $blogPageId = "522";

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
<?php }}
