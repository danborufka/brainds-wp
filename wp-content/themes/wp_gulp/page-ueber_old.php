<?php 
/**
 *
 * Template Name: Über
 *
 * @package WordPress
 * @package wp_gulp
 */
get_header();

	// if ( have_posts() ) {
	// 	while ( have_posts() ) : the_post();

	// 		echo "<h1>" . get_the_title() . "</h1>";	// Page Title

	// 		echo "<p>" . nl2br(get_the_content())  . "</p>";;	//content
	// 	endwhile;
	// }

?>

<?php include("headerimg.php"); ?>
<?php include("tabsection.php"); ?>

<div class="goldbox">
	<div class="row" data-equalizer data-equalize-on="medium">



		<h2><?= get_field('team_headeline'); ?></h2>
		<p><?= get_field('team_description'); ?></p>



		<!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/seperator-wide-white.png" class="sepa" alt="">-->

		<?php foreach (get_field('team_portraits') as $key => $value): ?>

		<div class="medium-6 large-3 columns noPadding  data-equalizer-watch" data-equalizer-watch>
			<img src="<?= $value['portrait']['url']; ?>" alt="">
		</div>
		<?php endforeach; ?>


	</div>
</div>


<div class="blackbox">
	<div class="row arrowDown black">
		<div class="ablaufSection geschichte">	



			<h2><?= get_field('geschichte_headeline') ?></h2>
			<p><?= get_field('geschichte_description') ?></p>
			<div class="auflaufNumbers" data-equalizer data-equalize-on="medium" >

				<?php foreach (get_field('event') as $key => $value): ?>

					<div class="auflaufNumber">
						<div class="number"><span><?= $value['year'] ?></span></div>
						<hr>
						<h4 data-equalizer-watch><?= $value['headline'] ?></h4>
						<p><?= $value['description'] ?></p>
						<hr>
						<br>
					</div>	


			<?php endforeach; ?>

			</div>
		</div>	
	</div>
</div>


<div class="greybox">
	<div class="row" data-equalizer data-equalize-on="medium">
		<h2><?= get_field('news_headeline') ?></h2>
		<p><?= get_field('news_description') ?></p>

		<div class="newsContainer" >
				
			<?php
			$end = "";
			foreach (get_field('news') as $key => $value):
			if ($key+1 == count(get_field('news'))) $end = "end";

			?>
				
			<div class="medium-6 large-4 column <?= $end ?>" >
				<hr>
				<div class="news">
					<div class="logo">
						<div class="img"><img src="<?= $value['logo']['url'] ?>" alt=""></div>
					</div>
					<h4><?= $value['headline'] ?></h4>
					<div data-equalizer-watch><p><?= $value['description'] ?></p></div>
					<a target="_blank" href="<?= $value['link'] ?>">Mehr lesen</a>

				</div>
				<hr class="hide-for-small-only">
			</div>

			<?php endforeach; ?>
		</div>

	</div>
</div>

<!-- <div class="darkgreybox">
	<div class="row" >
		<div class="sliderSection slides"  >
			<div class="slide">
				<div class="medium-6 large-4 columns noPadding">
					<div class="arrowRight" style="background-url: <?php echo get_stylesheet_directory_uri(); ?>/img/demo-large.jpg">
					</div>
				</div>
				<div class="medium-6 large-8 columns noPadding">
					<h4>Home Story Title</h4>
					<h5>Subtitle</h5>
					<p>Debis pratis ma voluptio od que pro quis solum dis doloriae. Ro quid eium quae cor mi, odipsam ea uiscil essinctium voloriatur. Ut labore que cus consequodit labo. aqui dolore nam inum et quae nemque ni reiciis que pliqui niendel igentur assus di sequat explitas ut offici aut am, sequi totatintotam.</p>
					<br>
					<a class="mehrErfahren" href="#">Mehr erfahren</a>
					<br>&nbsp;
				</div>
			</div>
			<div class="slide" >
				<div class="medium-6 large-4 columns noPadding">
					<div class="arrowRight" style="background-url: <?php echo get_stylesheet_directory_uri(); ?>/img/demo-large.jpg">
					</div>
				</div>
				<div class="medium-6 large-8 columns noPadding">
					<h4>Home Story Title</h4>
					<h5>Subtitle</h5>
					<p>Debis pratis ma voluptio od que pro quis solum dis doloriae. Ro quid eium quae cor mi, odipsam ea quiscil essinctium voloriatur. Ut labore que cus consequodit labo. aqui dolore nam inum et quae nemque ni reiciis que pliqui niendel igentur assus di sequat explitas ut offici aut am, sequi totatintotam.</p>
					<br>
					<a class="mehrErfahren" href="#">Mehr erfahren</a>
					<br>&nbsp;
				</div>
			</div>

		</div>
	</div>
</div>

 -->



<?php get_footer(); ?>



