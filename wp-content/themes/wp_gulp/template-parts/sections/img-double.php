<?php
/**
 * Template part for displaying two images side to side
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell">
	<div class="img-double grid-container grid-x">
		<img class="small-6" src="<?php the_sub_field('image-left')['url']; ?>">
		<img class="small-6" src="<?php the_sub_field('image-right')['url']; ?>">
	</div>
</div>