<section class="cta cta_style3" style="background: <?php echo get_field('cta_background_color', "option"); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9 col-sm-12">
                <div class="enquiry-modal__content">
                    <h1 class="text-white enq_desc">
                        <?php echo get_field("enquiry_popup_title", "option") . "Get in touch"; ?></h1>
                    <p class="text-white">
                        <?php echo get_field("enquiry_popup_description", "option") . "If you’d like to find out more about our capabilities or would like an obligation free appraisal, get in touch with us today."; ?>
                    </p>
                </div>
            </div>
            <?php $e_formId = get_field("enquiry_form", "option");?>
            <div class="col-lg-7 col-sm-12">
                <div class="form-wrap"> <?php echo do_shortcode('[contact-form-7 id="934"]'); ?>
                </div>
            </div>
        </div>
    </div>

</section>
