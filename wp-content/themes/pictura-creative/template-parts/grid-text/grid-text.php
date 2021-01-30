<?php $extraClass = get_sub_field("extra_class");?>
<section class="grid-text <?php echo $extraClass?>"  style="background-color:<?php echo get_sub_field("grid_background_color");?>;text-align:<?php echo get_sub_field('align_content');?>">
	<?php $grid_link_style  =  get_sub_field('grid_link_style')?>
<div class="container">
<div class="row">
	<?php
    if(get_sub_field( 'button_size' ))
    {
      $btnSize = 'btn-'.get_sub_field( 'button_size' );
    }
    else
    {
      $btnSize ='btn-small';
    }
    if(get_sub_field("title")){ ?>
		<div class="col-sm-12">
					<?php	echo get_template_part( 'template-parts/title/title', 'style' );?>
					</div><?php	
		 } ?>
	<?php   $col = get_sub_field('number_of_columns');
	   $col =  12 / $col; 
	if ( have_rows( 'grid_content' ) ):
    while ( have_rows( 'grid_content' ) ): the_row();?>
		<div data-aos="fade-up" class="col-sm-12 mb-40 col-md-<?php echo $col;?>">
		<!-- title -->
			<div class="grid-content pb-0">
			<?php if(get_sub_field('grid_title')) { ?>
			<h4 class="grid-title"><?php echo get_sub_Field('grid_title');?></h4>
			<?php }?>
			
			<?php if(get_sub_field('grid_content')) { ?>
			<div class="gridText mb-0"><?php echo get_sub_Field('grid_content');?></div>
			<?php }?>
			
			<?php $link = get_sub_field('grid_link');
				
		
			if($link) {	 $link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';		?>
			<div class="content-link"><a class="btn btn-<?php echo $grid_link_style;?>" href="<?php echo $link_url .' '. $btnSize; ?>" target="<?php echo $link_target; ?>">
			<?php echo $link_title; ?>
			</a></div>
			<?php  }?>
			</div>
	</div>
<?php endwhile; else :   endif; ?> 
</div>
</div>
</section>