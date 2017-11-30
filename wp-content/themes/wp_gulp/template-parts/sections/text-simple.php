<?php
/**
 * Template part for displaying text.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>
<div class="section cell text-simple<?php if(get_sub_field('darken')): ?> darken<?php endif; ?><?php if(get_sub_field('journal')): ?> journal<?php endif; ?>">
	<div class="grid-container grid-x">
		<?php if(get_sub_field('title')): ?>
			<a name="<?php echo sanitize_title(get_sub_field('title')); ?>"></a>
			<h2 <?php if(get_sub_field('title_for_section')): ?>class="section-title"<?php endif; ?>><span><?php the_sub_field('title'); ?></span></h2>
		<?php elseif($is_first_row): ?>
			<a name="<?php echo sanitize_title(get_the_title()); ?>"></a>
			<h2><?php the_title(); ?></h2>
		<?php endif; ?>

		<?php if(get_sub_field('img_left')): ?>
			<div class="image-container cell small-12 medium-3">
				<img src="<?= get_sub_field('img_left')['url']; ?>" width=150>
			</div>
		<?php endif; ?>

		<div class="<?php if(get_sub_field('img_left')): ?>cell small-12 medium-9<?php endif; ?>">
			<p>
				<?php echo make_more_tags_expandable( p2br( get_sub_field('content')), 'mehr lesen', 'weniger'); ?>
			</p>
		</div>
	</div>
</div>