<?php 
/**
 *
 * Template Name: Impressum
 *
 * @package WordPress
 * @package wp_gulp
 */
get_header();
global $post;

if ( have_posts() ) {
	while ( have_posts() ) : the_post();

		$title   = get_the_title();
		$content = get_the_content();

	endwhile;
}

?>


<?= "<p>" . wpautop( $content) . "</p>"; ?>


<?php get_footer(); ?>



