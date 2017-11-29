<?php
/**
 * Template part for displaying extra-wide text.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell text-wide wide<?php if(get_sub_field('journal')): ?> journal<?php endif; ?>">
	<?php if(get_sub_field('title')): ?>
		<a name="<?php echo sanitize_title(get_sub_field('title')); ?>"></a>
		<h2><?php the_sub_field('title'); ?></h2>
	<?php elseif($is_first_row): ?>
		<a name="<?php echo sanitize_title(get_the_title()); ?>"></a>
		<h2><?php the_title(); ?></h2>
	<?php endif; ?>
	<p><?php the_sub_field('content'); ?></p>
</div>