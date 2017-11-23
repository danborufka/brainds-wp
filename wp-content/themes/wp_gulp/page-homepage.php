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

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">
      	brainds
      	<span class="current-menu">Design</span>
      </li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><a class="menu-icon"><span></span></a></li>
      <li><a href="#"><i class="fi-magnifying-glass"></i></a></li>
    </ul>
  </div>
</div>
<div class="grid-container fluid">
	<div class="grid-x grid-padding-x">
	    <div class="cell small-12 medium-6 section consulting">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="#/consulting">
	    		Consulting
	    	</a>
    		<span class="hoverText">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat.
    		</span>
		</div>
	    <div class="cell small-12 medium-6 section design">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="#/design">
	    		Design
	    	</a>
    		<span class="hoverText">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat.
    		</span>
		</div>
  	</div>
</div>

<?php get_footer(); ?>