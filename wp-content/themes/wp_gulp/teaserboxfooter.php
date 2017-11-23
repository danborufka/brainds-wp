

<div class="blackbox">
	<div class="row">
		<div class="overview" data-equalizer data-equalize-on="medium">
			
			<!-- <h2>Alles Im Überblick</h2> -->

<?php 
$teasers = get_field("teaser");

if (count($teasers) && $teasers != "" ):

foreach ($teasers as $key => $value):
	$title = get_the_title($value->ID );
	$content = get_post_field('post_content', $value->ID);

	$icon = get_field ('icon', $value->ID )["url"];
	$icon_hover = get_field ('icon_hover', $value->ID )["url"];
	
	$link = get_field ('link', $value->ID );

	$beitragsbild_url = get_the_post_thumbnail_url($value->ID, 'full', true);

?>
			<div class="medium-4 columns noPadding" >
				<section data-url="<?= $link ?>">
					<div data-equalizer-watch>
						<div class="icon"><img data-hover="<?php echo $icon_hover; ?>" data-icon="<?php echo $icon; ?>" src="<?php echo $icon; ?>" alt=""></a></div>
						<hr>
						<h4><?= $title ?></h4>
						<p><?= $content ?></p>
						<!-- <div class="break"></div> -->
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/seperator-small-white.png" alt="" class="sepa">

					<?php if ( has_post_thumbnail($value->ID) ) : ?>				

						<img src="<?= $beitragsbild_url ?>" alt=""> 

					<?php else: ?>
					
					
					<?php endif; ?>

				</section>
			</div>
		
<?php 
endforeach;
endif;
?>



		</div>
	</div>
</div>
