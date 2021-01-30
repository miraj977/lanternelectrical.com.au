<section class="cta cta_style3" style="background: <?php echo get_sub_field('section_background_color'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9 col-sm-12">
                <div class="enquiry-modal__content">
                    <h1 class="text-white enq_desc">
                        <?php echo get_sub_field("left_content_title"); ?></h1>
                    <p class="text-white" style="margin-bottom:50px;">
                        <?php echo get_sub_field("left_content_description"); ?>
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
