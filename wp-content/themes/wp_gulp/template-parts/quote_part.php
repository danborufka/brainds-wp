<?php

//$attachment_id = get_field( 'cover_img_small' );
//$size          = "small"; // (thumbnail, medium, large, full or custom size)
//$image         = wp_get_attachment_image_src( $attachment_id, $size );

// url = $image[0];
// width = $image[1];
// height = $image[2];

?>
<!--<img class="" alt="" src="<?php /*echo $image[0]; */ ?>" />-->

<div class="quote cont">

	<h3><?=  get_sub_field( 'headline' ); ?></h3>
	<!--<div class="row">-->

		<?php
		$counter = 0;
		// check if the nested repeater field has rows of data
		if ( have_rows( 'slide' ) ):

			echo '<div class="slides">';
			// loop through the rows of data
			while ( have_rows( 'slide' ) ) : the_row();

				$author = get_sub_field( 'author' );
				$position = get_sub_field( 'position' );
				$quote  = get_sub_field( 'quote' );

				echo '<div class="quotebox clearfix" data-equalizer>';
					echo '<div class="quotebox-left" data-equalizer-watch>';
						echo '<p class="author uppercase">' . $author . '</p>';
						echo '<p class="position">' . $position .'</p>';
						echo '</div>';
					echo '<div class="quotebox-right" data-equalizer-watch>';
						echo "<p>$quote</p>";
					echo '</div>';
				echo '</div>';

			endwhile;
			echo '</div>';
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
	<!--</div>-->

</div>