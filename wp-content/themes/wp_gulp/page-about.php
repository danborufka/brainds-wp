<?php
/**
 *
 * Template Name: About Us
 * @package WordPress
 * @package wp_gulp
 */

get_header();

global $post;
$title = $post->post_title;
$postID = $post->ID;

?>


<?php include('template-parts/bar_part.php'); ?>

	<div class="titleBar">
		<div class="titles">
			<h1><?php echo $title ?></h1>	
			<h2><?php echo $subheadline ?></h2>
		</div>
	</div>
	
	<div class="content">

	<div class="dyn">


		<img class="float01" src="<?php echo get_template_directory_uri(); ?>/img/float01@2x.png" alt="">
		<img class="float02" src="<?php echo get_template_directory_uri(); ?>/img/float02@2x.png" alt="">
		<div class="float03 hover" data-show="narrow3">
			<img class="big" src="<?php echo get_template_directory_uri(); ?>/img/float03.svg" alt="">
			<h5><?= get_field( 'section2' )["hoverbox"] ?></h5>
			<div class="plus"></div>
		</div>
		<div class="float04 hover" data-show="narrow4">
			<img class="big" src="<?php echo get_template_directory_uri(); ?>/img/float04.svg" alt="">
			<h5><?= get_field( 'section3' )["hoverbox"] ?></h5>
			<div class="plus"></div>
		</div>
		<img class="float05" src="<?php echo get_template_directory_uri(); ?>/img/float05@2x.png" alt="">
		<img class="float06" src="<?php echo get_template_directory_uri(); ?>/img/float06.png" alt="">
		<div class="float07 hover" data-show="narrow7">
			<img class="big" src="<?php echo get_template_directory_uri(); ?>/img/float07.svg" alt="">
			<h5><?= get_field( 'section4' )["hoverbox"] ?></h5>
			<div class="plus"></div>
		</div>
		<img class="float08" src="<?php echo get_template_directory_uri(); ?>/img/float08.png" alt="">
		
		<img class="float09" src="<?php echo get_template_directory_uri(); ?>/img/float09.png" alt="">
		<img class="float10" src="<?php echo get_template_directory_uri(); ?>/img/float10.png" alt="">


		<div class="grid-container">
			<div class="narrow narrow1 show">
				<h1><?= get_field( 'section1' )["headline1"] ?></h1>
				<p><?= get_field( 'section1' )["copytext1"] ?></p>
			
				<h1><?= get_field( 'section1' )["headline2"] ?></h1>
				<p><?= get_field( 'section1' )["copytext2"] ?></p>
			</div>
			<div class="narrow narrow3">
				<h1><?= get_field( 'section2' )["headline1"] ?></h1>
				<p><?= get_field( 'section2' )["copytext1"] ?></p>

				<h1><?= get_field( 'section2' )["headline2"] ?></h1>
				<p><?= get_field( 'section2' )["copytext2"] ?></p>
			</div>

			<div class="narrow narrow4">
				<h1><?= get_field( 'section3' )["headline1"] ?></h1>
				<p><?= get_field( 'section3' )["copytext1"] ?></p>

				<h1><?= get_field( 'section3' )["headline2"] ?></h1>
				<p><?= get_field( 'section3' )["copytext2"] ?></p>
			</div>

			<div class="narrow narrow7">
				<h1><?= get_field( 'section4' )["headline1"] ?></h1>
				<p><?= get_field( 'section4' )["copytext1"] ?></p>

				<h1><?= get_field( 'section4' )["headline2"] ?></h1>
				<p><?= get_field( 'section4' )["copytext2"] ?></p>
			</div>

		</div>
	</div>

	<div class="titleBar">
		<div class="titles">
			<h1>Who we are</h1>	
			<h2>Management Team</h2>
		</div>
	</div>
	<div class="team">

		<div class="grid-container">
		  <div class="grid-x grid-margin-x">
			<?php foreach (get_field('staff') as $key => $value): 


				$image_url = $value["image"];
				$name = $value["name"];
				$position = $value["position"];
				$description = $value["description"];
				$email_adress = $value["email_adress"];
				$linked_in_link = $value["linked_in_link"];
				$download = $value["download"];
				$phone_number = $value["phone_number"];
			?>

		    <div class="cell medium-1"></div>
		    <div class="cell medium-4">
		    	<img class="port" src="<?= $image_url ?>" alt="">
		    	<h2><?= $name ?></h2>
		    	<h3><?= $position ?></h3>
		    	<p><?= $description ?></p>
		    	<div class="icons">
		    		<?php if ($email_adress): ?>
		    			<div class="icon"><a href="mailto:<?=$email_adress ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt=""></a></div>
		    		<?php endif; ?>
					<?php if ($linked_in_link): ?>
						<div class="icon"><a href="<?=$linked_in_link?>"><img src="<?php echo get_template_directory_uri(); ?>/img/in.svg" alt=""></a></div>
		    		<?php endif; ?>
					<?php if ($download): ?>
		    			<div class="icon"><a href="<?$download?>"><img src="<?php echo get_template_directory_uri(); ?>/img/download.svg" alt=""></a></div>
		    		<?php endif; ?>


		    	</div>	
		    <div class="cont">
		    	<div class="tel"><span class="green">T/ </span><a href="tel:<?= str_replace(" ", "", $phone_number); ?>"><?=$phone_number ?></a></div>
		    	<div class="email"><span class="green">E/ </span><a href="mailto:janice.goodenough@hydrogrid.eu">janice.goodenough@hydrogrid.eu</a></div>
		    </div>
		    </div>
		    <div class="cell medium-1"></div>


			<?php endforeach; ?>

		  </div>
		</div>
		
	</div>

</div>


<?php get_footer(); ?>