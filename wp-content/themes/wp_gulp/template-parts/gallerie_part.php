<?php 

$attachment_id = get_field('cover_img_small');
$size = "small"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );

// url = $image[0];
// width = $image[1];
// height = $image[2];
?>
<img class="" alt="" src="<?php echo $image[0]; ?>" />
<?php 


			if( have_rows('images') ):

			 	echo '<ul>';

			 	// loop through the rows of data
			    while ( have_rows('images') ) : the_row();

					$image = get_sub_field('image');

					echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

				endwhile;

				echo '</ul>';

			endif;



 ?>



<div class="row">
	<div class="columns medium-6">GALLERY</div>
	<div class="columns medium-6">GALLERY</div>
</div>