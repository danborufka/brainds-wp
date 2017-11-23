<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */

$attachment_id = get_sub_field( 'pic' );
$image_small   = wp_get_attachment_image_src( $attachment_id, 'small' );
$image_medium  = wp_get_attachment_image_src( $attachment_id, 'medium' );
$image_large   = wp_get_attachment_image_src( $attachment_id, 'large' );

$headline    = get_sub_field( 'headline' );
$description = get_sub_field( 'description' );

?>

<div class="piccontainer">


	<?php

	// echo '<div style="background-size: cover" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], "></div>';

	echo '<img class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], ">';


	echo '<div class="info">';
        echo '<h5>– ' . $headline . ' –</h5>';
        echo '<div class="desc">' . $description . '</div>';
	echo '</div>';

	?>


</div>

