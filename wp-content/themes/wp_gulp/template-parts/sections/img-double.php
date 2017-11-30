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
		<div class="cell medium-6 small-12">
			<div class="image" style="background-image:url('<?php echo get_sub_field('image-left')['url']; ?>');"></div>
		</div>
		<div class="cell medium-6 small-12">
			<div class="image" style="background-image:url('<?php echo get_sub_field('image-right')['url']; ?>');"></div>
		</div>
	</div>
</div>