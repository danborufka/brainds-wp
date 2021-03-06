<?php
/**
 *
 * @package WordPress
 * @package wp_gulp
 *
 */
get_header();
?>
<div class="mainContainer">
	<?php if(has_post_thumbnail()): ?>
		<div class="image featured-image <?php if (get_field("coverage") == "center" ) echo "contain" ?>" style="background-image:url('<?= get_the_post_thumbnail_url(null, 'header'); ?>');<?php if($featuredImageColor = get_field('background-color')): ?>background-color:<?= $featuredImageColor; ?>;<?php endif; ?>"></div>
	<?php elseif(get_field('embed')): ?>
		<iframe class="embed" src="<?php the_field('embed'); ?>" frameborder="0" allowfullscreen></iframe>
	<?php endif; ?>

	<?php
		if(have_rows('sections')) {
			?><div class="sections grid-x full"><?php

			$is_first_row = true;

			while( have_rows('sections')) {
				the_row();
				include(dirname( __FILE__ ) . '/template-parts/sections/' . get_row_layout() . '.php');
				$is_first_row = false;
			}
			?>
				<div class="cell text-center footer">
					<?php if(!has_ancestors() || get_the_ID() == "155" || get_the_ID() == "157")  : ?>
						<a href="#top" class="arrow scrollTop"></a>
					<?php else: ?>
						<a href="<?php echo get_parent_url(); ?>" class="arrow back"></a>
					<?php endif; ?>
				</div>
			</div><?php
		} else {
			?><h2>(Noch kein Layout definiert)</h2><?php
		}
	?>
</div>
<?php get_footer(); ?>