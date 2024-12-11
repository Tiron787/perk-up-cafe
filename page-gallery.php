<?php
 /* Template Name: About Gallery */
 get_header();
?>

<?php get_template_part('parts/breadcrumbs'); ?>

      

<?php
if ( function_exists( 'do_shortcode' ) ) {
    echo do_shortcode( '[envira-gallery id="58"]' );
   }
?>

<?php get_footer();?>



