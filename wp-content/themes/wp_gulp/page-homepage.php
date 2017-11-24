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
    			Brainds Consulting zählt zu den führenden Markenberatungen im deutschsprachigen Raum. Das Unternehmen mit Sitz in Wien wurde 1995 gegründet und hat als spezialisierte Markenberatung weit über 100 Unternehmen und Organisationen betreut – aus allen Bereichen und in allen Unternehmensgrößen.
    			<br>
				<a class="hide-for-medium" href="<?= get_home_url(); ?>/consulting">zu Consulting</a>
    		</span>
		</div>
	    <div class="cell small-12 large-6 section design">
	    	<h3>brainds</h3>
	    	<div class="vspacer"></div>
	    	<a href="<?= get_home_url(); ?>/design">
	    		Design
	    	</a>
    		<span class="hoverText">
    			Brainds Design ist eine der erfahrensten Designagenturen des Landes mit über 150 erfolgreichen CD- und Branding-Projekten seit 1997. Ausgezeichnet mit mehr als 40 internationalen Designpreisen. Die Designagentur Österreichs mit der größten Strategiekompetenz.
    			<br>
				<a class="hide-for-medium" href="<?= get_home_url(); ?>/design">zu Design</a>
    		</span>
		</div>
  	</div>
</div>

<?php get_footer(); ?>