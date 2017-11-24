<?php
/**
 *
 * @package WordPress
 * @package wp_gulp
 *
 */
get_header();


// +++++++++++++++++++++++++++++++++++++++++++++++++
// Helpers
// +++++++++++++++++++++++++++++++++++++++++++++++++


// +++++++++++++++++++++++++++++++++++++++++++++++++
// Get Page Title & content
// +++++++++++++++++++++++++++++++++++++++++++++++++

/*

if ( have_posts() ) {
	while ( have_posts() ) : the_post();

		echo get_the_title();	// Page Title

		echo nl2br(get_the_content());	//content

	endwhile;

}

	// +++++++++++++++++++++++++++++++++++++++++++++++++
	// Get Child Elements:
	// +++++++++++++++++++++++++++++++++++++++++++++++++

$args = array(
	'child_of' => 21,
	'parent' => 21,
	'sort_column'=> 'menu_order'
);

$pages = get_pages($args) ;

foreach ($pages as $key => $value) {
	$post_id = $value->ID;
	$headeline_back = get_field('headeline_back', $post_id);
	$farbe = get_field('farbe', $post_id);
	$subline = get_field('subline', $post_id);
	$logo_small = get_field('logo_small', $post_id);
	$teaser_desc = get_field('teaser_desc', $post_id);
	$link = get_page_link($post_id);
?>
*/

?>

	<?php if(has_post_thumbnail()): ?>
		<img src="<?= get_the_post_thumbnail_url(); ?>" class="featured-image" <?php if($featuredImageColor = get_field('background-color')): ?>style="background-color:<?= $featuredImageColor; ?>;"<?php endif; ?>>
	<?php endif; ?>

	<div class="grid-container main-container">

		<?php

		if(have_rows( 'dyn' )):
		endif;

		?>
	</div>
	
	<?php exit;

			echo '
	            <div class="nonsubcontent">
	            	<div class="scrollTop show-for-small-only"></div>

	            	';

			// loop through the rows of data
			while ( have_rows( 'dyn' ) ) : the_row();
				$filename = dirname( __FILE__ ) . "/template-parts/" . get_row_layout() . "_part.php";

				if ( file_exists( $filename ) ) {
					include( $filename );
				} else {
					echo "<!-- Sorry, Template '" . get_row_layout() . "' not found! -->";
				}

			endwhile;


			echo '
				</div>
				</div>
			';



	    elseif ( have_rows( 'dyn_sub' ) ):
			$sub_headline = get_field( "sub_headline" );

			echo '
	            <div class="subcontent">


					<div class="row expanded hide-for-large">
					<div class="medium-12 column">
	            ';




			require ("dimox-breadcrumbs.php");
			dimox_breadcrumbs();


	            echo '
					</div>
	            </div>';

	?>

	<?php 
		global $post;

		if (count(get_post_ancestors($post->ID)) > 1):

			var_dump('childreeeen!');

			$args = array(
				'child_of' => $post->post_parent,
			    // 'exclude' => $post->ID,
			    'depth' => 1
			); 
			$siblings = get_pages($args); 

			if ($siblings):

				echo '<a class="extraMobileMenuOpener hide-for-large"></button></a>
					<div class="extraMobileMenu hide-for-large">';

				echo "<a href=\"#\" class=\"close\"></a>";
				global $post;
				echo '<div class="header">' . get_the_title( $post->post_parent ) .   '</div>';

				echo "<ul>";

				foreach ( $siblings as $key => $value ) :

					$cat_name = $value->post_title;
					$active    = ( $value->ID == $post->ID ) ? "active" : "";
					$link = get_permalink($value->ID);
					$nested = ($post->post_parent != $value->post_parent) ? "nested" : "";
					
					?>

					<li><a href="<?=$link?>" class="item item-<?= $key . " " . $active . " " . $nested ?>"><?=html_entity_decode($cat_name)?></a></li>

						<?php
				endforeach;

					echo "</ul>
							</div>";


			endif;

		else:
		?>
		
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		<?php
		endif;
	?>





	<?php 

			echo '<div class="scrollTop show-for-small-only"></div>
	                <div class="row expanded">
	                    <div class="column small-12 medium-12 large-offset-3 large-6 xlarge-offset-3 xlarge-6">
	                        <h1>' . $sub_headline . '</h1>
	                    </div>
	                </div>
	                <div class="row expanded">
	                    <div class="column show-for-large large-4 xlarge-3" data-sticky-container>
	                         <div class="sticky-menu" data-sticky data-options="marginTop:1;" data-top-anchor="content-box:top" data-btm-anchor="content-box:bottom">';

			global $post;
			$direct_parent = $post->post_parent;

			$currentTitle = get_the_title( $direct_parent );
			$subtitle     = get_the_title();

			$menu_items = wp_get_nav_menu_items( "Sekondär Menu" );

			/*echo findParent();*/
			$on = null;

			echo "<ul>";
			foreach ( $menu_items as $index => $item ) {
				if ( get_the_ID() == $item->object_id ) {     //Current item
								
					if ( count(get_post_ancestors( $item->post_parent ) ) > 2) {		//if Menu is deep child, use parent of partent, as the start-ground of the menu
						$on = ( get_post (  $item->post_parent )->post_parent );
						echo "<li class='underline thin uppercase bold'>" . get_the_title(  get_post (  $item->post_parent )->post_parent ) . "</li><li><ul>";

					} else {
						$on = $item->post_parent;
						echo "<li class='underline thin uppercase bold'>" . get_the_title( $item->post_parent ) . "</li><li><ul>";
					}

				}
			}
			foreach ( $menu_items as $index => $item ) {



				if ( in_array( $on, get_post_ancestors( $item->object_id ) ) && count(get_post_ancestors($on)) <= 3 ) {   // Child elemente
	                $submenu =  (count(get_post_ancestors( $item->object_id )) > count(get_post_ancestors($on))+1) ? "submenu" : "";




	                if (count(get_post_ancestors( $item->object_id )) > count(get_post_ancestors($on))+2) {
	                    continue;   //Don't snow sub-sub-Categories
	                }

					if ( get_the_ID() == $item->object_id ) {
						echo '<li class="active '. $submenu . '">' . $item->title . '</li>';
					} else {
						echo '<li class="'. $submenu . '"><a href="' . $item->url . '">' . $item->title . '</a></li>';
					}
				}
				//echo $item->title . ": " . $item->menu_item_parent . " - " . $item->post_parent . " - " . $item->object_id . "<br>\n"; //
			}


			echo "</ul></li></ul>";


			echo '</div>
	                                    </div>
	                    
	                    <div class="column medium-12 large-8 xlarge-6 end"> <!-- style="border: 1px red solid;" -->
	                    
	                    <div class="content-box border" id="content-box">
	                    
	        ';


			while ( have_rows( 'dyn_sub' ) ) : the_row();
				$filename = dirname( __FILE__ ) . "/template-parts/" . get_row_layout() . "_part.php";

				if ( file_exists( $filename ) ) {
					include( $filename );
				} else {
					echo "<!-- Sorry, Template '" . get_row_layout() . "' not found! -->";
				}


			endwhile;
			echo '
	                            </div><!-- content-box -->
	                        </div><!-- column -->
				        </div><!-- row -->
	                </div> <!-- subcontent -->
				';

		endif;
	?>
</div>
<?php get_footer(); ?>
