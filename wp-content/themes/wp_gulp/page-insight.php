<?php
/**
 *
 * Template Name: Insights
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

	<?php 
		$query = new WP_Query(array(
		    'post_type' => 'insight',
		    'post_status' => 'publish'
		));

		$counter = 0;

		while ($query->have_posts()) {
		    $query->the_post();
		    $post_id = get_the_ID();
		    $title = get_the_title();
		    $link = get_the_permalink();
		    $date = get_the_date("d.m.Y");
		    $content = get_the_content();
		    $cat = "MARKET DEVELOPMENT";

		    if (!$counter) {
				echo '<div class="ins">';
		    } else {
				echo '<div class="ins" data-height="1000px" style="height:300px">';
		    }


			echo "<div class=\"date\">
				<div class=\"dateInner\">$date</div><div class=\"cat\"><span class=\"green\">HYDROGRID / </span>$cat</div>
			</div>";

		    echo "<h1><a href=\"$link\">$title</a></h1>";
		    echo wpautop($content);
		    echo "</div>";

		    if (!$counter) {
		    	echo "<div class=\"openClose rotate\"></div>";
		    } else {
		    	echo "<div class=\"openClose\"></div>";
		    }
		   	$counter++;
		    
		}

		wp_reset_query();

	?>


		</div>

	</div>



<?php get_footer(); ?>