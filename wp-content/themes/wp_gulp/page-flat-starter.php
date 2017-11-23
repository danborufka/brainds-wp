<?php
/**
 *
 * Template Name: Flat Starter
 * @package WordPress
 * @package wp_gulp
 */

get_header();
global $post;


?>

<div class="slides">

<?php
	$query = new WP_Query(array(
	    'post_type' => 'wohnung',
	    'post_status' => 'publish',
	    'orderby' => 'menu_order',
	    'order' => "asc"
	));

	$slidePerma = get_the_permalink();

	while ($query->have_posts()) :
	    $query->the_post();
	    $post_id = get_the_ID();
	    $title = get_the_title();
	    $perma = get_post_permalink();
	    $cat = get_field('cat', $post_id );
	    $description = get_field('description');
	    $slider_img = get_field('slider_img');
	    $grGross = get_field('grGross');
	    $grKlein = get_field('grKlein');
	    $next_post = get_next_post();
	    // echo "<pre>";
	    // var_dump($next_post);
	    // echo "</pre>";

	    if (strpos($slidePerma, 'loft') && $cat == "loft" ||
	    	strpos($slidePerma, 'apartment') && $cat == "ap" ||
	    	strpos($slidePerma, 'pent') && $cat == "pent")
	    {
			require('slide-template.php');
	    }

		if (strpos($slidePerma, 'loft') && $cat == "loftC" ||
	    	strpos($slidePerma, 'apartment') && $cat == "apC" ||
	    	strpos($slidePerma, 'pent') && $cat == "pentC")
	    {
			require('slide-template.php');
	    }




	endwhile;

wp_reset_query();

?>


</div>


<?php get_footer(); ?>