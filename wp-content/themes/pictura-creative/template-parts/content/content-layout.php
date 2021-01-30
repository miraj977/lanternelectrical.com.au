<?php $content_bg = get_sub_field("content_background_color");
$extraClass = get_sub_field("extra_class");?>
<section class="content <?php echo $extraClass ?> text-<?php echo get_sub_field('align_content'); ?>"
    style="<?php if ($content_bg) {echo 'background-color:' . $content_bg;}?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12" data-aos="fade-up">
                <?php
if (get_sub_field("content_title")) {

    if (get_sub_field("title_style")) {
        $titleStyle = get_sub_field("title_style");
    } else {
        $titleStyle = 'bold';
    }

    if (get_sub_field("italic")) {
        $italic = "italic";
    } else {
        $italic = '';
    }

    if (get_sub_field("title_tag")) {
        $title_tag = get_sub_field("title_tag");
    } else {
        $title_tag = 'h3';
    }

    if (get_sub_field("title_align")) {
        $title_align = get_sub_field("title_align");
    } else {
        $title_align = 'left';
    }

    $color = get_sub_field("title_color");

    $title = get_sub_field("content_title");
    ?>
                <<?php echo $title_tag; ?> class="<?php echo $italic . ' ' . $titleStyle . ' text-' . $title_align ?>"
                    style="color:<?php echo $color; ?>"> <?php echo $title; ?> </<?php echo $title_tag; ?>>
                <?php }?>

                <div class="content-text" style="color:<?php echo get_sub_field('font_color') ?>">
                    <?php echo get_sub_field("content_text"); ?> </div>
                <?php

if (get_sub_field('button_size')) {
    $btnSize = 'btn-' . get_sub_field('button_size');
} else {
    $btnSize = 'btn-small';
}
$link = get_sub_field('content_button_link');
if ($link) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                <div class="content-link"><a
                        class="btn btn-<?php echo get_sub_field('content_button_style') . ' ' . $btnSize; ?>"
                        style="color:#f18700;" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                        <?php echo $link_title; ?> </a></div>
                <?php }?>
            </div>
        </div>
    </div>
</section>
