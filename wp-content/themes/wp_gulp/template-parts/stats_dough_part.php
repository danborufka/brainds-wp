<?php

//$attachment_id = get_field( 'cover_img_small' );
//$size          = "small"; // (thumbnail, medium, large, full or custom size)
//$image         = wp_get_attachment_image_src( $attachment_id, $size );

// url = $image[0];
// width = $image[1];
// height = $image[2];

?>
<!--<img class="" alt="" src="<?php /*echo $image[0]; */ ?>" />-->

<div class="stats_dough cont">

	<h3>Statistiken</h3>
	<div class="row" data-equalizer>

		<?php
        $counter = 0;
		// check if the nested repeater field has rows of data
		if ( have_rows( 'fact' ) ):

			// loop through the rows of data
			while ( have_rows( 'fact' ) ) : the_row();

				$desc  = get_sub_field( 'desc' );
				$value = get_sub_field( 'value' );

				echo '<div class="small-6 medium-3 large3 columns" data-equalizer-watch>';
				echo '<div class="face">';
				echo '<canvas data-value="'. $value . '"  class="dowchart dowchart-' .  $counter++ .'" width="400" height="400"></canvas>';
				echo "<p>$desc</p>";
				echo '</div>';
				echo '</div>';

			endwhile;

		endif;

		/*if( have_rows('angebot') ):
			echo '<ul>';

			while ( have_rows('images') ) : the_row();

				$image = get_sub_field('image');

				echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

			endwhile;

			echo '</ul>';

		endif;*/

		?>
	</div>

</div>