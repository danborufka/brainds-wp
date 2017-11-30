<?php
/**
 *
 * Template Name: Homepage
 * @package WordPress
 * @package wp_gulp
 */

get_header();

global $post;
$title = $post->post_title;
$postID = $post->ID;

?>
	<div class="mainContainer grid-x">
	    <div class="cell small-12 large-6 area consulting">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a class="hoverLink" href="<?= get_home_url(); ?>/consulting">
	    		<span>Consulting</span>
	    	</a>
    		<span class="hoverText">
    			<?php the_field('consulting'); ?>
    			<br>
				<a class="hide-for-medium" href="<?= get_home_url(); ?>/consulting">zu Consulting</a>
    		</span>
		</div>
	    <div class="cell small-12 large-6 area design">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a class="hoverLink" href="<?= get_home_url(); ?>/design">
	    		<span>Design</span>
	    	</a>
    		<span class="hoverText">
    			<?php the_field('design'); ?>
    			<br>
				<a class="hide-for-medium" href="<?= get_home_url(); ?>/design">zu Design</a>
    		</span>
		</div>
  	</div>

<?php get_footer(); ?>