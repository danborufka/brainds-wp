<div class="tinyslider">


	<?php

	$tinysliderheadline = get_sub_field( 'tinyslider-headline' );

	echo "<h4>$tinysliderheadline</h4>";
	echo "<div class=\"special-spacer\"></div>";


	$counter = 0;
	// check if the nested repeater field has rows of data
	$num_of_bigslides = count( get_sub_field( 'bigslider_categorie' ) );

	// loop through the rows of data
	$contcount = 0;
	echo '<div class="slides" data-slick=\'{"dots": true, "arrows": false}\'>';
	while ( have_rows( 'slider' ) ) : the_row();
		echo '<div class="slide">';
		$text_left  = get_sub_field( 'text_left' );
		$text_right = get_sub_field( 'text_right' );

		/*
				echo $text_left;
				echo $text_right;*/

		echo '<div data-equalizer data-equalizer-by-row>
						<div class="row">
							<div class="columns medium-6 left" data-equalizer-watch>
									<h5 class="text-center">' . $text_left . '</h5>
							</div>
							<div class="columns medium-6 right " data-equalizer-watch>
									<h2 class="text-center bold">' . $text_right . '</h2>
							</div>
						</div>
					  </div>';

		echo '</div>'; //slides!
	endwhile;

	?>


</div>