<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pictura_Creative
 */

get_header();
while (have_posts()): the_post();
    if (get_field("enquiry_popup", "option") == 1) {
        echo get_template_part('template-parts/modal/modal', 'enquiry');
    }

    if (get_field("show_page_info") == 1) {
        echo get_template_part("template-parts/page", "heading");
    }
    echo get_template_part("template-parts/page", "fullWidth");
    ?>
<!-- <section class="form">
		    <div class="container">
		        <div class="row">

		            <div class="col-md-6 col-sm-12" data-aos="fade-up">
		                <h4><?php //echo get_field("contact_column_title"); ?></h4>
		                <ul class="contact_info">
		                    <?php //if (get_field("phone", "option")) {?>
		                    <li class="phoneIcon"><a
		                            href="tel:<?php //echo get_field("phone", "option"); ?>"><?php //echo get_field("phone", "option"); ?></a>
		                    </li>
		                    <?php //}?>

		                    <?php //if (get_field("address_2", "option")) {?>
		                    <li class="addressIcon"><?php //echo get_field("address_2", "option"); ?></li>
		                    <?php //}?>
		                    <?php //if (get_field("address_1", "option")) {
    //$email = get_field("email", "option");?>
		                    <li class="addressIcon"><a href="<?php //echo get_field("address_1", "option");
    ?>"><?php //echo $email; ?></a></li>
		                    <?php //}?>

		                </ul>
		                <div class="menu-social">
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
<!-- </div>
	<div class="col-md-6 col-sm-12 m-auto text-center" data-aos="fade-up">
	    <?php //echo get_field("google_map"); ?>
	</div>

	</div>
	</div>
	</section> -->

<?php
endwhile;
get_footer();
