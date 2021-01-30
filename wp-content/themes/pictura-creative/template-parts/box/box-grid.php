<?php $extraClass = get_sub_field("extra_class");?>
<section class="box-section box-normal <?php echo $extraClass ?>" style="background-image:url(<?php echo get_sub_field('background_image'); ?>); background-color:<?php echo get_sub_field('box_background_color'); ?>;
">
    <?php
	if(is_front_page){
		$boxclass = "two-box";
	}
$box_color = get_sub_field('box_background_color');

$box_link_style = get_sub_field('box_link_style');
$box_align = get_sub_field('align_content');
?>
    <div class="container">
        <div class="row box-flex">
            <?php if (get_sub_field("title")) {?>
            <div class="col-sm-12">
                <?php	echo get_template_part('template-parts/title/title', 'style'); ?>
            </div><?php
}?>

            <?php if (get_sub_field("content")) {?>
            <div class="box-title-content">
                <?php echo get_sub_field("content"); ?>
            </div>
            <?php }?>

            <?php $col = get_sub_field('number_of_columns');
$col = 12 / $col;

// Box Content Start
if (have_rows('box_content')):
    while (have_rows('box_content')): the_row();?>
            <div data-aos="fade-up"
                class="col-sm-6 col-md-6 col-lg-<?php echo $col; ?> text-<?php echo $box_align; ?> <?php echo $boxclass;?>">
                <div class="box" style="background-color:<?php echo $box_color; ?>">
                    <!-- IMAGE -->
                    <div class="box-img <?php echo $extraClass; ?>">
                        <?php $image = get_sub_field('icon');
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        if ($image) {?>
                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
                        <?php } else {?>
                        <img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>"
                            alt="placeholder" title="placeholder" />
                        <?php }?>
                    </div>

                    <!-- title -->
                    <div class="box-content ">
                        <?php if (get_sub_field('box_title')) {?>
                        <h4 class="box-title"><?php echo get_sub_Field('box_title'); ?></h4>
                        <?php }?>

                        <?php if (get_sub_field('box_content')) {?>
                        <div class="box-text "><?php echo get_sub_Field('box_content'); ?></div>
                        <?php }?>

                        <!-- Social Media -->
                        <?php if (have_rows('social_media')):
            echo '<div class="social-box">';
            while (have_rows('social_media')): the_row();?>

                        <a href="<?php echo get_sub_Field('social_link'); ?>" traget="_blank"><img
                                src="<?php echo get_sub_Field('social_icon'); ?>" style="max-width:80px;"></a>
                        <?php endwhile;
            echo "</div>";
        endif;?>
                        <!-- Social Media Ends -->

                        <?php
        if (get_sub_field('button_size')) {
            $btnSize = 'btn-' . get_sub_field('button_size');
        } else {
            $btnSize = 'btn-small';
        }
        $link = get_sub_field('box_link');
        if ($link) {$link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <div class="content-link"><a
                                class="btn box-readmore btn-<?php echo $box_link_style . ' ' . $btnSize; ?>"
                                href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
                                <?php echo $link_title; ?>
                            </a></div>
                        <?php }?>
                    </div>
                </div>

            </div>
            <?php endwhile;
else:endif;?>
            <!-- Box Content End -->
            <?php if (get_sub_field('bottom_box_text')) {

    echo '<div class="box-bottom-content">' . get_sub_field('bottom_box_text') . '</div>';
}
?>
        </div>
    </div>
</section>
