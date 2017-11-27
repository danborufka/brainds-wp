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
					if( $query->have_posts() )
						while( $query->have_posts() ) {
							$query->the_post(); 
							?>
								<div class="small-6 cell">
									<img class="post-thumbnail" src="http://placehold.it/600x300" width="100%">
									<h3><?php the_title(); ?></h3>
									<p>
										<?php 
											$content = get_field('teaser');
											if(strlen($content)) {
												echo $content;
											} else {
											 	the_content('mehr lesen'); 
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