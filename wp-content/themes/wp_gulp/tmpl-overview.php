<?php
/**
 *
 * Template Name: Übersichtsseite
 * @package WordPress
 * @package wp_gulp
 */

	$post_type 	= get_field('posttype');
	$query 		= new WP_Query("post_type=$post_type");

	get_header();
?>
	<div class="mainContainer">
		<div class="sections">
			<div class="grid-x grid-padding-x section">
				<?php 
					global $query;
					while( $query->have_posts() ) {
						$query->the_post(); 

						if(has_post_thumbnail()) {
							$image = get_the_post_thumbnail_url();
						} else {
							$image = 'http://placehold.it/600x300';
						}

						?>
							<div class="small-12 medium-6 cell">
								<div class="post-thumbnail-container" style="background-image:url(<?php echo $image; ?>);">
								</div>
								<h3><?php the_title(); ?></h3>
								<p>
									<?php 
										$link = get_permalink();
										$moreLink = "<a class='more-link' href='$link'>mehr lesen</a>";

										if(has_excerpt()) {
											the_excerpt();
											echo $moreLink;
										} else {
											echo limit_text(get_the_content('mehr lesen'), 55, "… $moreLink");
										} 
									?>
								</p>
							</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>