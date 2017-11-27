<?php
/**
 * Template part for displaying text.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_gulp
 */

?>

<div class="section cell">
	<div class="grid-container grid-x">
		<?php if(get_sub_field('people-title')): ?>
			<h2 class="cell"><?php the_sub_field('people-title'); ?></h2>
		<?php endif; ?>

		<div class="people cell">
			<div class="grid-x">
			<?php if(have_rows('people')) {
					while( have_rows('people')) {
						the_row();
			?>
			  	<div class="person small-4 large-4 columns">
					<?php if(get_sub_field('person-portrait')): ?>
						<img class="portrait" src="<?= get_sub_field('person-portrait')['url']; ?>" width="100%">
					<?php endif; ?>
			  		<strong><?php the_sub_field('name'); ?></strong>
			  		<br>
			  		<?php the_sub_field('role'); ?>
			  		<br>
					<?php the_sub_field('department'); ?>
			  		<br>
			  		<a class="link" href="mailto:<?php the_sub_field('contact'); ?>">Kontakt</a>
			  	</div>
			<?php
					}
				} else {
					?>
					<h2>Keine Personen angegeben!</h2>
			<?php
				}
			?>
			</div>
		</div>
	</div>
</div>