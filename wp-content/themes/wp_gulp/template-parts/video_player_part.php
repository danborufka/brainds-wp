<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */



$hl = get_sub_field('video-headline');
$video_file = get_sub_field('video_file');
$poster = (get_sub_field('poster_frame')) ?: false;
?>

<div class="video_player">
<?php
    echo "<h4>$hl</h4>";
    echo "<div class=\"special-spacer\"></div>";
?>

    <video class="video-js vjs-default-skin" vjs-big-play-centered controls vjs-4-3 data-setup='{"fluid": true}' preload="auto"
           poster="<?=$poster?>">
        <source src="<?=$video_file?>" type='video/mp4'>
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>

	<?php


/*
	$attachment_id = get_sub_field( 'image' );
	$image_small   = wp_get_attachment_image_src( $attachment_id, 'small' );
	$image_medium  = wp_get_attachment_image_src( $attachment_id, 'medium' );
	$image_large   = wp_get_attachment_image_src( $attachment_id, 'large' );

	$hori = (get_sub_field( 'hori' )) ?: "50%" ;
	$verti = get_sub_field( 'verti' ) ?: "50%";

	echo '<div class="column medium-12 noPadding">';
	echo '<div style="width: 100%; height: 400px; background-position: ' . $hori . ' ' . $verti . '" class="pic" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], "></div>';
	echo '</div>';*/


	?>


</div>

