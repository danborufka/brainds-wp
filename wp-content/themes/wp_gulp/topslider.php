
<div class="row white noextraP">

	<?php 


		if (get_field("top_slider_images") ) {

			echo '<div class="top-slider">';

				foreach (get_field("top_slider_images") as $key => $value) {
					
					echo "<div><img title='" . $value["images"]["title"] . "'  src='" . $value["images"]["url"] . "'></div>";

				}

			echo "</div>";

			?>

				<script>
					jQuery(document).ready(function($) {
						$('.top-slider').slick({
							autoplay: true,
  							autoplaySpeed: 5000,
  							speed: 1000,
  							dots: true
						});
					});
					// $('.top-slider ul').show();


				</script>


			<?php



		} else {

			if (isset($teaserimage)) {
				echo '<img src="'  . $teaserimage . '" alt="">';
			} else {
				echo '<img src="http://www.placehold.it/1200x440" alt="">';
			}
		}
 ?>

</div>

