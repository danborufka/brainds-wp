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
	    <div class="cell small-12 medium-6 section consulting">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="/consulting">
	    		Consulting
	    	</a>
    		<span class="hoverText">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat.<br>
				<a href="/consulting">Zu Consulting</a>
    		</span>
		</div>
	    <div class="cell small-12 medium-6 section design">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="/design">
	    		Design
	    	</a>
    		<span class="hoverText">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat.<br>
				<a href="/design">Zu Design</a>
    		</span>
		</div>
  	</div>
</div>

<?php get_footer(); ?>