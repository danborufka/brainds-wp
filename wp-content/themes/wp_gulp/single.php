<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_gulp
 */

get_header(); 
global $post;

?>
<div class="content">
    <div class="grid-container">

<?php  
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <div class="entry">
           <?php the_content(); ?>
        </div>

<?php endwhile; endif; 


?>

</div> 
</div> 

<?php 


get_footer();
