<?php $extraClass = get_sub_field("extra_class");?>
<section class="testimonial testimonial_slider <?php echo $extraClass?>" style="background-color:<?php echo get_sub_field("testimonial_background_color")?> " data-aos="fade-up">
<div class="container">
	<div class="row" >
	<div class="col-lg-12 ">
		<?php if(get_sub_field("title")){ 
	echo get_template_part( 'template-parts/title/title', 'style' );
		
		 } ?>
		<?php echo do_shortcode("[testimonial-slider]");?>
	</div>
	</div>
	</div>
</section>
