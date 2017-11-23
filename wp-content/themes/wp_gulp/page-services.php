<?php
/**
 *
 * Template Name: Services
 * @package WordPress
 * @package wp_gulp
 */

get_header();

global $post;
$title = $post->post_title;
$postID = $post->ID;

?>


<?php include('template-parts/bar_part.php'); ?>
<?php include('template-parts/title-bar_part.php'); ?>

	<div class="content">
		<div class="grid-container">
			<div class="services">
				<div class="service" data-show="package1"><img src="<?php echo get_template_directory_uri(); ?>/img/service1.svg" alt=""></div>
				<div class="service" data-show="package2"><img src="<?php echo get_template_directory_uri(); ?>/img/service2.svg" alt=""></div>
				<div class="service active" data-show="package3"><img src="<?php echo get_template_directory_uri(); ?>/img/service3active.svg" alt=""></div>
				<div class="service" data-show="package4"><img src="<?php echo get_template_directory_uri(); ?>/img/service4.svg" alt=""></div>
			</div>
			

			<?php 

				$packages = [];
				$packages[] = get_field("pp", $postID);
				$packages[] = get_field("pd", $postID);
				$packages[] = get_field("fso", $postID);
				$packages[] = get_field("ids", $postID);

			?>

			<?php foreach ($packages as $key => $service):

					$name = "x" . $key . "x";

					if ($key == 2) {
                       $show = "show";
                   } else  {
                       $show = "";
                   }

                   if ($service["image"]) {
                   		$img =  "style=\"background-image: url(" .  $service["image"] . ")\"";
                   } else {
                   		$img = "";
                   }

			?>


				<div class="package package<?= $key+1 ?> <?=$show?>" data-equalizer="<?= $name ?>" data-equalizer-by-row>
					<div class="grid-x">
						
						<div class="cell large-4 img">	
							<h4>Package Description/</h4>
							<div class="box" data-equalizer-watch="<?= $name ?>">
								<div class="img" <?= $img ?> ></div>
							</div>
						</div>

						<div class="cell large-4 desc">	

							<h4>&nbsp;</h4>
							<div class="box" data-equalizer-watch="<?= $name ?>">
								<?php 
									echo $service["package_description"];
								 ?>
							</div>

						</div>

						<div class="cell large-4 include">
							<h4>This package Includes/</h4>
							<div class="box" data-equalizer-watch="<?= $name ?>">
								<ul>

								<?php foreach ($service["bullet_points"] as $key => $bp) : ?>
									<li><?php echo $bp["bullet_point"] ?></li>
								<?php endforeach; ?>

								</ul>
								<a class="button" href="<?php echo $service["button_link"];?>"><?php echo $service["button_text"];?></a>
							</div>
						</div>
					</div>
				</div>	<!-- package -->
			

			<?php endforeach; ?>

			<div class="spacer100"></div>

		</div>

	</div>



<?php get_footer(); ?>