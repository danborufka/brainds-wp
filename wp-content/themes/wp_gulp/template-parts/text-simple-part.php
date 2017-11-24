<?php
/**
 * Template part for displaying simple text.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>

<div class="row">
<?php if(get_sub_field('title')): ?>
	<h2><?php the_sub_field('title'); ?></h2>
<?php endif; ?>
	<p>
		<?php the_sub_field('content'); ?>
	</p>
</div>