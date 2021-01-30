<section class="clientLogos clientLogos_grid alignCenter"
    style="background-color:<?php echo get_field("client_logos_background_color", "option") ?> " data-aos="fade-up">
    <div class="container">
        <div class="row client-flex">
            <?php if (get_field("title", "option")) {?>
            <div class="col-sm-12">
                <?php

    if (get_field("client_logos_title_style", "option")) {
        $titleStyle = get_field("client_logos_title_style", "option");
    } else {
        $titleStyle = 'bold';
    }

    if (get_field("italic", "option")) {
        $italic = "italic";
    } else {
        $italic = '';
    }

    if (get_field("title_tag", "option")) {
        $title_tag = get_field("title_tag", "option");
    } else {
        $title_tag = 'h4';
    }

    if (get_field("client_logos_title_align", "option")) {
        $title_align = get_field("client_logos_title_align", "option");
    } else {
        $title_align = 'left';
    }

    $color = get_field("client_title_color", "option");

    $title = get_field("title", "option");
    ?>
                <<?php echo $title_tag; ?>
                    class="sectionTitle <?php echo $italic . ' ' . $titleStyle . ' text-' . $title_align ?>"
                    style="color:<?php echo $color; ?>;text-align:center !important;"> <?php echo $title; ?>
                </<?php echo $title_tag; ?>>

            </div><?php
}?>
            <div class="col-sm-12 text-center">
                <?php	echo get_field('client_logo_text', 'option'); ?>
            </div>
            <?php
$images = get_field('client_logos', "option");
if ($images): ?>
            <?php foreach ($images as $image): ?>
            <div data-aos="fade-up" class="col-sm-4 col-xs-12 col-md-4 col-lg-5th client_logo_img">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endforeach;endif;?>
        </div>
    </div>
</section>