<section class="news-section" style="background-color:<?php echo get_field("section_background_color") ?> ">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-md-12 textCenter news-container">
                <?php
// Check rows exists.
if (have_rows('boxes')):

    // Loop through rows.
    while (have_rows('boxes')): the_row();?>

                <a href="<?php echo get_sub_field('read_more_link'); ?>"><div class="news-box" style="background-color:<?php echo get_sub_field('box_background_color'); ?>">
                    <p class="news-box-title" style="color:<?php echo get_sub_field('title_color'); ?>">
                        <?php echo get_sub_field('box_title'); ?></p>
                    <p><a class="news-box-link" style="color:<?php echo get_sub_field('link_color'); ?>" href="<?php echo get_sub_field('read_more_link'); ?>
																								">Read More</a></p>
                </div></a>
                <?php endwhile;endif;?>
            </div>
        </div>
    </div>
</section>
