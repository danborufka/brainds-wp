<?php
/**
 * Template part for displaying two images side to side
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell img-block img-double">
	<div class="grid-x grid-padding-x wide">
		<img class="cell small-6" src="<?php echo get_sub_field('image-left')['url']; ?>">
		<img class="cell small-6" src="<?php echo get_sub_field('image-right')['url']; ?>">
	</div>
</div>