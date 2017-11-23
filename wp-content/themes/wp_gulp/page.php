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


	// +++++++++++++++++++++++++++++++++++++++++++++++++
	// Get ACF
	// +++++++++++++++++++++++++++++++++++++++++++++++++


// $field = get_field('fieldname');

// if (has_post_thumbnail( $fieldname->ID ) ) {
// 	$teaserimage1 = wp_get_attachment_image_src( get_post_thumbnail_id( $fieldname->ID ), 'single-post-thumbnail' );
// 	$teaserimage1 = $teaserimage1[0];
// 	$linkto1 = get_field ('linkto', $fieldname->ID );
// }



<!--
		// 	$hintergrundbild = get_field ('hintergrundbild', $value->ID );
		// 	$title = get_field ('the_title', $value->ID );
		// 	$jahr = get_field ('veroffentlicht_im_jahr', $value->ID );
		// 	$art = get_field ('art_des_filmes', $value->ID );
		// 	$abdunklung = get_field ('abdunklung', $value->ID );
		// 	$regisseur = get_field ('regisseur', $value->ID )[0]->post_title;
		// 	$kunde = get_field ('kunde', $value->ID );

		// 	if (get_field ('upload_oder_link', $value->ID ) == "Upload") {
		// 		$film_oder_trailer = get_field ('movie_file', $value->ID );
		// 	} else {
		// 		$film_oder_trailer = get_field ('filmurl', $value->ID );
		// 	} -->
*/

?>


<div class="mainFrame">

	<?php

	if ( have_rows( 'dyn' ) ):

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

<!-- 
<div class="bigslider">
<div class="indicator hide-for-large">

			<?php

			global $post;

			if (count(get_post_ancestors($post->ID)) > 2):

			$args = array(
				'child_of' => $post->post_parent,
			    // 'exclude' => $post->ID,
			    'depth' => 1
			); 
			$siblings = get_pages($args); 

			foreach ( $siblings as $key => $value ) :

				$cat_name = $value->post_title;
				$active    = ( $value->ID == $post->ID ) ? "active" : "";
				$separator = ( $key == count( $siblings ) - 1 ) ? "" : '<div class="sepa"></div>';
				$link = get_permalink($value->ID);
				?>
                <style>
                    .bigslider .indicator .item-<?=$key?>:before {
                        content: "<?=html_entity_decode($cat_name)?>";
                    }
                </style>

                <a href="<?=$link?>" class="item item-<?= $key . " " . $active ?> noclick" data-element="big-container-<?= $key ?>"></a>
				<?= $separator ?>

				<?php
			endforeach;

			endif;

			?>

        </div>
</div>

-->

<?php 


	global $post;

	if (count(get_post_ancestors($post->ID)) > 1):

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
			
			</div><!-- mainFrame -->
			';

	else :

		?>



<!-- <div class="mainFrame"> -->
	<div class="subcontent">
		<div class="row">

		<div class="medium-12 columns">

			<?php echo "<h1>". $post->post_title . "</h1>"; ?>

			<div class="content-box border">
				
			<?php 

			if ( have_posts() ) : while ( have_posts() ) :
			the_post();
			the_content();
			endwhile; endif;

			?>

			</div>
			</div>

		</div>
	</div>
<!-- </div> -->


<?php 
		// no layouts found
		echo "<!-- <h2>No Layouts selected!!</h2> -->";

	

		endif;
	?>


	<?php get_footer(); ?>



