<?php
/**
 *
 * Template Name: Übersichtsseite
 * @package WordPress
 * @package wp_gulp
 */

	$post_type 	= get_field('posttype');
	$query 		= new WP_Query("post_type=page&post_parent=$post->ID&orderby=menu_order&order=ASC&posts_per_page=-1");

	get_header();
?>
	<div class="mainContainer">
		<div class="sections">
			<div class="grid-x grid-padding-x section">
				<?php 
					global $query;
					while( $query->have_posts() ) {
						$query->the_post(); 

						$link = get_permalink();

						if(has_post_thumbnail()) {
							$image = get_the_post_thumbnail_url(get_the_ID(), 'teaser');
						} else {
							$image = get_bloginfo('wpurl') . '/wp-content/uploads/2017/11/brainds_illu_' . strtolower(get_section_name()) . '.svg';
						}

						?>
							<div class="small-12 medium-6 cell">
								<a class="post" href="<?php echo $link; ?>">
									<div class="post-thumbnail-container">
										<div class="post-thumbnail" style="background-image:url(<?php echo $image; ?>);">
										</div>
									</div>
									<h3><?php the_title(); ?></h3>
									<?php 
										if(has_excerpt()) {
									?>
									<p>
										<?php 
											the_excerpt();
											echo "<a class='more-link' href='$link'>mehr lesen</a>";
										?>
									</p>
									<?php 
										} 
									?>
								</a>
							</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>