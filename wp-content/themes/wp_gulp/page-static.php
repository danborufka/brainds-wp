<?php
/**
 *
 * Template Name: Static
 * @package WordPress
 * @package wp_gulp
 */

get_header();
global $post;


if ( have_posts() ) {
  while ( have_posts() ) : the_post();

    $title   = get_the_title();
    $content = get_the_content();

  endwhile;
}



?>

<div class="static">
  <div class="frame">

    <div class="container">
      
      <h1><?= $title ?></h1>
      <p><?= $content ?></p>

  </div>
  </div>
</div>









<?php get_footer(); ?>