<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */


$image_small   = get_sub_field( 'pic_small' );
$image_medium  = get_sub_field( 'pic_medium' );
$image_large   = get_sub_field( 'pic_large' );

$headline    = get_sub_field( 'headline' );
$description = get_sub_field( 'description' );

?>

<div class="piccontainer">


	<?php

	// echo '<div style="background-size: cover" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], "></div>';

	echo '<img class="pic" data-interchange="[' . $image_small . ', small], [' . $image_medium . ', medium], [' . $image_large . ', large],  [' . $image_large . ', retina], ">';


	echo '<div class="info">';
        echo '<h5>– ' . $headline . ' –</h5>';
        echo '<div class="desc">' . $description . '</div>';
	echo '</div>';

	?>


</div>

