<?php
/**
 *
 * @package WordPress
 * @package wp_gulp
 *
 */
get_header();
?>

	<?php if(has_post_thumbnail()): ?>
		<img src="<?= get_the_post_thumbnail_url(); ?>" class="featured-image" <?php if($featuredImageColor = get_field('background-color')): ?>style="background-color:<?= $featuredImageColor; ?>;"<?php endif; ?>>
	<?php endif; ?>

	<div class="grid-container main-container">
<?php
		if(have_rows('sections')) {
			while( have_rows('sections')):
				the_row();

				$filename = dirname( __FILE__ ) . "/template-parts/" . get_row_layout() . "-part.php";

				if(file_exists( $filename )) {
					include($filename);
				} else {
					echo "<h2>Template <i>\"" . get_row_layout() . "\"</i> not found!</h2>";
				}

			endwhile; 
		} else {
			?>
			<h2>Kein Layout definiert!</h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<?php
		}
?>
	</div>
	
<?php get_footer(); ?>