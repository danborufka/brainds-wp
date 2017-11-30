<?php
/**
 * Template part for displaying images that take up the entire column width
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell img-block img-single">
	<div class="grid-container grid-x">
		<div class="image cell small-12" style="background-image:url('<?php echo get_sub_field('image')['url']; ?>');"></div>
	</div>
</div>