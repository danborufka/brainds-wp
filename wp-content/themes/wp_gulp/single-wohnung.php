<?php
get_header();
global $post;

$currentCat = get_field('cat', $post->ID);

echo '<div class="invis hide">';

$query = new WP_Query(array(
  'post_type' => 'wohnung',
  'post_status' => 'publish',
  'orderby' => 'menu_order',
  'order' => "asc"
));

while ($query->have_posts()) :
  $query->the_post();
  $post_id = get_the_ID();
  $title = get_the_title();
  $perma = get_post_permalink();
  $cat = get_field('cat', $post_id );
  $description = get_field('description');
  $next_post = get_next_post();
  $slider_img = get_field('slider_img');

  $grGross = get_field('grGross');
  $grKlein = get_field('grKlein');


if ($cat == $currentCat ||
    substr($cat, 0, strlen($cat)) == substr($currentCat, 0, strlen($currentCat) - 1) ||
    substr($cat, 0, strlen($cat) - 1) == substr($currentCat, 0, strlen($currentCat))  ) { //currentCat ???

  // ob_start();
  include('slide-template.php');
  // $temp = ob_get_clean();
  // $body = preg_replace("/data-equalizer=\".*\"/", "", $temp);
  // echo $body;

}

endwhile;

echo "</div>
<script>
window.cat = \"$currentCat\";
</script>";




if ( have_posts() ) {
  while ( have_posts() ) : the_post();


    
    $post_id = get_the_ID();
    $title   = get_the_title();
    $perma = get_post_permalink();
    $cat = get_field('cat', $post_id );
    $description = get_field('description');
    $next_post = get_next_post();
    $slider_img = get_field('slider_img');


  endwhile;
}




echo "<div class=\"slides expanded\">";

include('slide-template.php');

echo "</div>";


get_footer();
