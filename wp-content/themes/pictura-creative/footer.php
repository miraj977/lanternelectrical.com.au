<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pictura_Creative
 */


if(get_field('show_client_logo_section') == 1 )
{
	 $clientLogos = get_field( 'choose_style_client_logo_style' ,"option" );
  echo get_template_part( 'template-parts/clientLogos/clientLogos', $clientLogos );
}
if ( get_field('show_call_to_action') == 1 ) {
  $cta_layout = get_field( 'call_to_action',"option" );
  echo get_template_part( 'template-parts/call-to-action/cta', $cta_layout );
} 
?>

	</div><!-- #content -->

	<?php  $footer = get_field("footer_style","option"); ?>
	<?php echo  get_template_part( 'template-parts/footer/footer', $footer); ?>
<div class="goTop" id="goTop"></div>
</div><!-- #page -->
<script>
// 		mybutton = document.getElementById("goTop");

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0; // For Safari
//   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// }

	
	
var themeUrl = '<?php echo get_template_directory_uri()?>';
	</script>
<?php wp_footer(); ?>

</body>
</html>
