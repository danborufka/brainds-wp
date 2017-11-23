<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */


?>

<div class="explain_slider">


	<?php

	echo "<div class='slides' data-slick='{\"dots\": true}'>";
	$c = 1;
	while ( have_rows( 'slides' ) ) :
		the_row();

		echo "<div class='slide'>";

		$attachment_id = get_sub_field( 'image' );
		$image_small   = wp_get_attachment_image_src( $attachment_id, 'small' );
		$image_medium  = wp_get_attachment_image_src( $attachment_id, 'medium' );
		$image_large   = wp_get_attachment_image_src( $attachment_id, 'large' );

		$hori = (get_sub_field( 'hori' )) ?: "50%" ;
		$verti = get_sub_field( 'verti' ) ?: "50%";

		echo '<div class="column medium-12 noPadding">';

		// echo '<div style="width: 100%; height: 400px; background-position: ' . $hori . ' ' . $verti . '" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], "></div>';
		echo '<img style="width: 100%;" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], ">';
		

		echo '</div>';

		echo '</div>';


	endwhile;
	echo '</div>';

	?>


</div>

