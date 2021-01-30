<?php $extraClass = get_sub_field("extra_class");?>
<section class="faq faq1 <?php echo $extraClass?>">
<div class="container">
<div class="row">
	
	<div class="col-sm-12 ">
	<ul class="accordion" data-aos="fade-up">
	<?php if( have_rows('faqs') ):
    while ( have_rows('faqs') ) : the_row(); ?>
		<li >
		<a class="toggle" href="javascript:void(0);"><?php echo get_sub_field("title");?></a>
		<ul class="inner col-sm-12 col-lg-10 col-md-10"><?php echo get_sub_field("content");?></ul>
		</li>
	<?php endwhile;  else : endif; ?>
	</ul>
	</div>
</div>
</div>
</section>