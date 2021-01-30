<footer>
    <?php

if (get_field('show_bottom_banner')) {?>
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
    <?php }?>
    
    <?php //dynamic_sidebar("footer-1");
echo do_shortcode('[instagram-feed]'); ?>
    

    <div class="footer-top" style="background-color: <?php echo get_field("footer_top_background_color", "option"); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 align-self-center footer_logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_field('footer_logo', 'option'); ?>" />
                    </a>
                    <br><br>
                    <?php if (get_field("address_1", "option")) {?>
                    <div class="f_address">
                        <?php echo get_field("address_1", "option") ?>
                    </div>
                    <?php }?>



                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer_address">
                    <?php if (get_field("address_2", "option")) {?>
                    <div class="f_address f_address2">
                        <b>Head Office</b><br>
                        <?php echo get_field("address_2", "option") ?>
                    </div>
                    <?php }?>

                </div>


                <div class="col-md-4 col-sm-12 col-xs-12  social_div">
                    <ul class="footer_social white_social">
                        <?php if (get_field("facebook", "option")) {?>
                        <li><a href="<?php echo get_field("facebook", "option"); ?>" target="_blank"
                                class="facebook">Facebook</a></li>
                        <?php }?>

                        <?php if (get_field("instagram", "option")) {?>
                        <li><a href="<?php echo get_field("instagram", "option"); ?>" target="_blank"
                                class="instagram">Instagram</a></li>
                        <?php }?>

                        <?php if (get_field("youtube", "option")) {?>
                        <li><a href="<?php echo get_field("youtube", "option"); ?>" target="_blank"
                                class="youtube">Youtube</a></li>
                        <?php }?>
                        <?php if (get_field("twitter", "option")) {?>
                        <li><a href="<?php echo get_field("twitter", "option"); ?>" target="_blank"
                                class="twitter">Twitter</a></li>
                        <?php }?>

                        <?php if (get_field("google", "option")) {?>
                        <li><a href="<?php echo get_field("google", "option"); ?>" target="_blank"
                                class="google">Google+</a></li>
                        <?php }?>

                        <?php if (get_field("linkedin", "option")) {?>
                        <li><a href="<?php echo get_field("linkedin", "option"); ?>" target="_blank"
                                class="linkedin">linkedin</a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <?php if (get_field('copyright', 'option') == 1) {?>
    <div class="copyright" style="background-color: <?php echo get_field("footer_background_color", "option"); ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 copyright-1">
                    <p><?php echo get_field("copy_right_text", "option") ?></p>
                </div>
                <div class="col-sm-6">
                    <div class="policy_thanks"><?php echo get_field("copy_right_links", "option"); ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</footer>
