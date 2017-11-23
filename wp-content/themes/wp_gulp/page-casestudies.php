<?php
/**
 *
 * Template Name: Case Studies
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

			<h1><?php $title ?></h1>


		</div>

	</div>



<?php get_footer(); ?>