<?php $extraClass = get_sub_field("extra_class");?>
<section class="grid equal-section <?php echo $extraClass?>"  >
<div class="container">
	<div class="row row-equal-height" data-aos="fade-up">
		
		<?php
      if(get_sub_field( 'button_size' ))
      {
        $btnSize = 'btn-'.get_sub_field( 'button_size' );
      }
      else
      {
        $btnSize ='btn-small';
      }
      if(get_sub_field("title")){
	echo get_template_part( 'template-parts/title/title', 'style' );
		
		 } ?>
	<?php $grid_link_style  =  get_sub_field('grid_link_style')?>
		<?php $col = get_sub_field('number_of_columns');
	$col =  12 / $col; 
	if ( have_rows( 'grid_content' ) ):
    while ( have_rows( 'grid_content' ) ): the_row();?>
		<div class="col-sm-12 mb-40 col-md-<?php echo $col;?>" >
			<div class="euqal-column">
			<!-- IMAGE -->
		<div class="grid-img animate visible-animation">
		<?php $image = get_sub_field('image'); 
			 $url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];
			if($image){?>
		
			<img src="<?php echo $url;?>" alt="<?php echo $alt;?>" title="<?php echo $title;?>" />
	<?php } else {?>
			<img src="<?php echo get_template_directory_uri().'/images/placeholder.jpg';?>" alt="placeholder" title="placeholder" />
			<?php } ?>	</div>
			
			<!-- title -->
			<div class="grid-content ">
			<?php if(get_sub_field('grid_title')) { ?>
			<h4 class="grid-title"><?php echo get_sub_Field('grid_title');?></h4>
			<?php }?>
			
			<?php if(get_sub_field('grid_content')) { ?>
			<div class="gridText "><?php echo get_sub_Field('grid_content');?></div>
			<?php }?>
			
			<?php $link = get_sub_field('grid_link');
				
		
			if($link) {	 $link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';		?>
			<div class="content-link"><a class="btn btn-<?php echo $grid_link_style .' '. $btnSize;?>" href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
			<?php echo $link_title; ?>
			</a></div>
			<?php  }?>
			</div>
			</div>
		</div>
<?php endwhile; else :   endif; ?> 		
		</div>		
		</div>
</section>