<section class="form">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12" data-aos="fade-up">
                <h4><?php //echo get_field("contact_column_title"); ?></h4>
                <ul class="contact_info">
                    <?php if (get_field("phone", "option")) {?>
                    <li class="phoneIcon-y"><span class="contact-span">Call Us</span><br><a
                            href="tel:<?php echo get_field("phone", "option"); ?>"><?php echo "<p>" . get_field("phone", "option") . "</p>"; ?></a>
                    </li>
                    <?php }?>

                    <?php if (get_field("address_2", "option")) {?>
                    <li class="locationIcon-y"><span class="locationIcon-y"></span><span
                            class="contact-span">Location</span><?php echo "<p style='padding-bottom:0px;margin-bottom:0px;'>113 Fairford Road, Padstow 2211</p>
                            <a href='https://goo.gl/maps/PYbh7YDCnAtctHCZA
' class='get-directions'>Get Directions</a>"; ?>
                    </li>
                    <?php }?>
                    <?php if (get_sub_field("operating_hours")) {?>
                    <li class="HistoryIcon-y"><span class="contact-span">Operating Hours</span>
                        <?php echo "<p>" . get_sub_field("operating_hours") . "</p>"; ?>
                    </li>
                    <?php }?>

                </ul>
                <!-- <div class="menu-social">
				                    <ul class="footer_social black_social">
				                        <?php //if (get_field("facebook", "option")) {?>
				                        <li><a href="<?php //echo get_field("facebook", "option"); ?>" target="_blank"
				                                class="facebook">Facebook</a></li>
				                        <?php //}?>
				                        <?php //if (get_field("instagram", "option")) {?>
				                        <li><a href="<?php //echo get_field("instagram", "option"); ?>" target="_blank"
				                                class="instagram">Instagram</a></li>
				                        <?php //}?>
				                        <?php //if (get_field("facebook", "option")) {?>
				                        <li><a href="<?php //echo get_field("facebook", "option"); ?>" target="_blank"
				                                class="twitter">Twitter</a></li>
				                        <?php //}?>
				                        <?php //if (get_field("facebook", "option")) {?>
				                        <li><a href="<?php //echo get_field("facebook", "option"); ?>" target="_blank"
				                                class="youtube">Youtube</a></li>
				                        <?php //}?>
				                        <?php //if (get_field("facebook", "option")) {?>
				                        <li><a href="<?php //echo get_field("facebook", "option"); ?>" target="_blank"
				                                class="google">Google+</a></li>
				                        <?php //}?>
				                        <?php //if (get_field("linkedin", "option")) {?>
				                        <li><a href="<?php //echo get_field("linkedin", "option"); ?>" target="_blank"
				                                class="linkedin">linkedin</a></li>
				                        <?php //}?>
				                    </ul>
				                </div> -->
                <?php ?>
            </div>
            <div class="col-md-6 col-sm-12 m-auto text-center" data-aos="fade-up">
                <?php echo get_field("google_map"); ?>
            </div>

        </div>
    </div>
</section>
