<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */


?>

<div class="explain_slider">


	<?php

	echo "<div class='slides'>";
	$c = 1;
	while ( have_rows( 'slides' ) ) :
		the_row();

		echo "<div class='slide' data-equalizer data-equalize-on=\"medium\">";

		$attachment_id = get_sub_field( 'image' );
		$image_small   = wp_get_attachment_image_src( $attachment_id, 'small' );
		$image_medium  = wp_get_attachment_image_src( $attachment_id, 'medium' );
		$image_large   = wp_get_attachment_image_src( $attachment_id, 'large' );

		$headline    = get_sub_field( 'headline' );
		$description = get_sub_field( 'description' );

		$hori = (get_sub_field( 'hori' )) ?: "50%" ;
		$verti = get_sub_field( 'verti' ) ?: "50%";



/*		var_dump ($hori);
		var_dump ($verti);*/
        //
		echo '<div class="column medium-6 noPadding" data-equalizer-watch style="display: flex;">';

		    // echo '<div style="background-position: ' . $hori . ' ' . $verti . '" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], "></div>';
		    
		    //width="' . $image_small[1] .'" height="' . $image_small[2] .'
		    echo '<img style="align-self: center;" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], ">';

		echo '</div>';

		echo '<div class="column medium-6 noPadding" data-equalizer-watch>';
            echo '<div class="innerbox">';
                echo '<h3 class="white">' . $c++ . '. </h3><h3>' . $headline . '</h3>';
                echo "<p>$description</p>";
            echo '</div>';
		echo '</div>';

		echo '</div>';


	endwhile;
	echo '</div>';

	?>


</div>

