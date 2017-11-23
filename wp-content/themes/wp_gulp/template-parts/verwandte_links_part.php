<?php
/**
 * User: fabianwolf
 * Date: 03/05/17
 * Time: 09:17
 */

// $attachment_id = get_sub_field( 'pic' );
// $image_small   = wp_get_attachment_image_src( $attachment_id, 'small' );
// $image_medium  = wp_get_attachment_image_src( $attachment_id, 'medium' );
// $image_large   = wp_get_attachment_image_src( $attachment_id, 'large' );

// $headline    = get_sub_field( 'headline' );
// $description = get_sub_field( 'description' );

?>

<div class="relatedlinks">



	<div class="row">

	<div class="medium-12 columns">
		<h3>Verwandte Links</h3>		
	</div>


	<?php

	$links    = get_sub_field( 'links' );

	foreach ($links as $key => $value) {		

		$end =($key+1 == count($links)) ? " end" : "";

		$attachment_id = $value['teaser'];
		$teaserimg   = wp_get_attachment_image_src( $attachment_id, 'small' );
		$headline = $value['headline'];
		$description = $value['description'];
		$link = $value['link'];

		// echo "$teaserimg[0] $headline $description $link";

		echo '
			<div class="medium-6 xxlarge-3 columns' . $end . '">
				<a href="' . $link .'" class="teaserbox">
					<div class="overlay"></div>
					<div class="teaserimg" style="background-image: url(' . $teaserimg[0] . ')" alt=""></div>
					<div class="textbox">
						<h5>' . $headline .'</h5>
						<p>' . $description .'</p>
					</div>
					<div class="arrow"></div>
				</a>

			</div>

		';


	}

	?>


	</div>

</div>

