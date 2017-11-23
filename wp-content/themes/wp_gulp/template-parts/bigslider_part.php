<?php

//$attachment_id = get_field( 'cover_img_small' );
//$size          = "small"; // (thumbnail, medium, large, full or custom size)
//$image         = wp_get_attachment_image_src( $attachment_id, $size );

// url = $image[0];
// width = $image[1];
// height = $image[2];

?>
<!--<img class="" alt="" src="<?php /*echo $image[0]; */ ?>" />-->

<div class="bigslider">

    <!--<h3><? /*= get_sub_field( 'headline' ); */ ?></h3>-->
    <!--<div class="row">-->

	<?php
	$counter = 0;
	// check if the nested repeater field has rows of data
	$num_of_bigslides = count( get_sub_field( 'bigslider_categorie' ) );

	if ( have_rows( 'bigslider_categorie' ) ):
		echo '<div class="indicator">';
		$counter = 0;


		while ( have_rows( 'bigslider_categorie' ) ) : the_row();

			$cat_name  = get_sub_field( 'categorie_name' );
			$active    = ( $counter == 0 ) ? "active" : "";
			$separator = ( $counter == $num_of_bigslides-1 ) ? "" : '<div class="sepa"></div>';

			echo '            
            <style>
                .bigslider .indicator .item-' . $counter . ':before {content: "' . $cat_name . '";}
            </style>
            <a href="#" class="item item-' . $counter . ' ' . $active . '" data-element="big-container-' . $counter . '"></a>
            ' . $separator;
			$counter ++;

		endwhile;

		echo '</div>';

		// loop through the rows of data

		$contcount = 0;
		while ( have_rows( 'bigslider_categorie' ) ) : the_row();
			/*$hidden    = ( $contcount != 0 ) ? ' hidden' : "";*/

			echo '<div class="big-container big-container-' . $contcount++ . '">';


			$attachment_id = get_sub_field( 'cover_pic' );
			$image_small   = wp_get_attachment_image_src( $attachment_id, 'small' );
			$image_medium  = wp_get_attachment_image_src( $attachment_id, 'medium' );
			$image_large   = wp_get_attachment_image_src( $attachment_id, 'large' );

			$position = get_sub_field( 'position' );


			echo '<div class="pic_container" style="background-position: ' . $position . ';" data-interchange="[' . $image_small[0] . ', small], [' . $image_medium[0] . ', medium], [' . $image_large[0] . ', large],  [' . $image_large[0] . ', retina], "></div>';

			echo '<div class="slides">';
			while ( have_rows( 'slide' ) ) : the_row();

				$headline    = get_sub_field( 'headline' );
				$button_text = get_sub_field( 'button_text' );
				$link        = get_sub_field( 'link' );
				$description = get_sub_field( 'description' );

				/*echo '<div data-equalizer data-equalizer-by-row>*/
				echo '
			    	<div class="info_container clearfix">
                        <div class="row">
                            <div class="columns medium-6 large-6 xlarge-4">
                                <div class="left">
                                    <h3 class="text-center">' . $headline . '</h3>
                                    <div class="buttonbox">
                                        <button class="button rounded gotourl" data-url="' . $link . '">' . $button_text . '</button>
                                    </div>
                                </div>
                            </div>
                            <div class="columns medium-6 large-6 xlarge-8">
                                <div class="right">
                                    <p class="desc">' . $description . '</p>
                                </div>
                            </div>
                        </div>
                    </div>';

			endwhile;
			echo '</div>'; //slides!
			echo '</div>'; //big-container
		endwhile;


	else:
		echo "nope?";

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