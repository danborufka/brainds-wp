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
	    <div class="cell small-12 large-6 section consulting">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="<?= get_home_url(); ?>/consulting">
	    		Consulting
	    	</a>
    		<span class="hoverText">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat.<br>
				<a class="hide-for-medium" href="<?= get_home_url(); ?>/consulting">Zu Consulting</a>
    		</span>
		</div>
	    <div class="cell small-12 large-6 section design">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="<?= get_home_url(); ?>/design">
	    		Design
	    	</a>
    		<span class="hoverText">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat.<br>
				<a class="hide-for-medium" href="<?= get_home_url(); ?>/design">Zu Design</a>
    		</span>
		</div>
  	</div>
</div>

<?php get_footer(); ?>