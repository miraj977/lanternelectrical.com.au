<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Pictura_Creative
 */

get_header();
?>

<section class="blog-list">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-9 col-sm-12">
        <?php
        if ( have_posts() ):
		   echo '<h3>Showing results for: '.$_GET["s"].'</h3>';
          while ( have_posts() ):
            the_post();
?>
        <div class="blog-row">	
		<div class="blog-list-content">			
		<h3><?php the_title();?></h3>
			
		<?php 
	  $content = get_the_content();
	  $content = strip_tags($content);
	  echo substr($content, 0, 120);
		 $read_link_style = get_sub_field("read_more_style"); ?>  
		 
			<div class="content-link"><a class="btn-style1" href="<?php echo get_permalink(); ?>" >Read more			</a></div>
		</div>
	</div>

     <?php   endwhile;?>
		  <div class="navigation"> 
			<span class="older">
          <?php next_posts_link('<img src="'.get_template_directory_uri().'/images/boldleft.svg" > Previous') ?>
          </span> 
			<div class="pageOf">
				<?php $paged = get_query_var( 'paged', 1 );?>
				Page  <?php if($paged ){ echo $paged; } else { echo "1" ;}?> of
			<?php global $wp_query;
					echo $wp_query->max_num_pages; ?>
			</div>
			<span class="newer">
          <?php previous_posts_link('Next <img src="'.get_template_directory_uri().'/images/boldright.svg" > ') ?>
          </span> </div>
		  <?php 
       else: 
		  echo '<h3>Sorry! '.$_GET["s"].' can not be found</h3>';
		  endif;
        ?>
        
        <!-- .navigation --> 
        
      </div>
      <div class="col-md-4 col-lg-3 col-sm-12">
        <div class="sidebar blogSidebar">
          <?php dynamic_sidebar("blog-sidebar"); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
