<?php

//$attachment_id = get_field( 'cover_img_small' );
//$size          = "small"; // (thumbnail, medium, large, full or custom size)
//$image         = wp_get_attachment_image_src( $attachment_id, $size );

// url = $image[0];
// width = $image[1];
// height = $image[2];

?>
<!--<img class="" alt="" src="<?php /*echo $image[0]; */ ?>" />-->

<div class="behandlungsspektrum">

    <h1 class="goldheadline">
		<?= get_sub_field( 'headline' ) ?>
    </h1>
    <div class="row" data-equalizer="box">



		<?php

		// check if the nested repeater field has rows of data
		if ( have_rows( 'angebot' ) ):

			// loop through the rows of data
			while ( have_rows( 'angebot' ) ) : the_row();

				$icon        = get_sub_field( 'icon' );
				$headline    = get_sub_field( 'headline' );
				$description = get_sub_field( 'description' );
				$button_text = get_sub_field( 'button_text' );
				$link        = get_sub_field( 'link' );

				echo '<div class="medium-6 columns" data-equalizer="head">';
				echo '<div class="angebot" data-equalizer-watch="box">';
				echo '<div class="iconbox">';
				echo '<img class="icon" src="' . $icon . '" alt="" />';
				echo '</div>';
				echo '<h4 data-equalizer-watch="head">' . $headline .  '</h4>';
                echo '<p>' . $description .  '</p>';
                echo '<button class="button rounded gotourl" data-url="' . $link . '">' . $button_text .  '</button>';
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