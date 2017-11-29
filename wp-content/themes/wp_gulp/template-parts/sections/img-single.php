<?php
/**
 * Template part for displaying images that take up the entire column width
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell">
	<div class="img-single">
		<img src="<?php the_sub_field('image')['url']; ?>" width="100%">
	</div>
</div>