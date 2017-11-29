<?php
/**
 * Template part for displaying quotes.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell quote">
	<div class="grid-container grid-x">
		<?php if(get_sub_field('title')): ?>
			<h2 <?php if(get_sub_field('title_for_section')): ?>class="section-title"<?php endif; ?>><span><?php the_sub_field('title'); ?></span></h2>
		<?php elseif($is_first_row): ?>
			<h2><?php the_title(); ?></h2>
		<?php endif; ?>

		<quote>
			<?php the_sub_field('content'); ?>
		</quote>

		<p>
			<strong><?php the_sub_field('name'); ?></strong>
			<?php if(get_sub_field('role')): ?>
			<br>
			<?php the_sub_field('role'); ?>
			<?php endif; ?>
		</p>
	</div>
</div>