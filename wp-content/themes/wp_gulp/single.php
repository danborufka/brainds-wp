<?php
/**
 *
 * Template Name: Detailseite
 * @package WordPress
 * @package wp_gulp
 */
	get_header();
	the_post();
?>
	<div class="mainContainer">
		<div class="sections">
			<div class="grid-x grid-padding-x section">
				All the single pages, all the single pages.
				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>