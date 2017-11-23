<?php
/**
 *
 * Template Name: Imperial History
 * @package WordPress
 * @package wp_gulp
 */

get_header();
global $post;


$headline1 = get_field('headeline1');
$headline2 = get_field('headeline2');
$subheadline = get_field('subheadline');
$textblocks= get_field('text_blocks');
$textblocks2= get_field('text_blocks2');
$bigimgID = get_field('big_img');

$bigimg_small   = wp_get_attachment_image_src( $bigimgID, 'small' );
$bigimg_medium  = wp_get_attachment_image_src( $bigimgID, 'medium' );
$bigimg_large   = wp_get_attachment_image_src( $bigimgID, 'large' );


$bigimgsmallID = get_field('small_img');

$smallimg_small   = wp_get_attachment_image_src( $bigimgsmallID, 'small' );
$smallimg_medium  = wp_get_attachment_image_src( $bigimgsmallID, 'medium' );
$smallimg_large   = wp_get_attachment_image_src( $bigimgsmallID, 'large' );



// $extraStyle = "";


foreach ($textblocks as $key => $value) {
  $textblocks[$key]['text'] = preg_replace_callback("/#(.{1,2})#([^\s*]*)/", 'callback', $value['text']);
}

// foreach ($textblocks2 as $key => $value) {
// 	$textblocks2[$key]['text'] = preg_replace_callback("/#(.{1,2})#([^\s*]*)/", 'callback', $value['text']);
// }



function callback($matches) {

  $num = $matches[1];
  $text = $matches[2];

  return "<span id=\"link$num\" class=\"strong scrollToMap\"> $text</span>";
  // <style>#link$num:before { content: '$num';}</style>
}

// var_dump($textblocks);

?>


<div class="imperial-history">


<div class="frame">

	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="medium-6 cell">
				<h1><?=$headline1?></h1>
				<h1><?=$headline2?></h1>
			</div>



		</div>
		<div class="grid-x grid-margin-x">
			<div class="medium-6 cell medium-order-1">
				<!-- <h3><?=$subheadline?></h3> -->
			</div>
			
			<div class="medium-6 cell medium-order-3">
				<p><?php if (isset($textblocks[0]['text'])) echo $textblocks[0]['text'] ?></p>
			</div>

			<div class="medium-6 cell medium-order-1">
				<p><?php if (isset($textblocks[1]['text'])) echo $textblocks[1]['text']  ?></p>
			</div>

			<div class="medium-6 cell medium-order-4" style="order: 4;">
				<p><?php if (isset($textblocks[2]['text'])) echo $textblocks[2]['text']  ?></p>
				<div class="space-h"></div>
			</div>
			
			<div class="medium-6 cell medium-order-2">
				<p><?php if (isset($textblocks[3]['text'])) echo $textblocks[3]['text']  ?></p>
			</div>
		
		</div>
	</div><!-- grid-container -->

		<div class="bigimg">
			<?php echo '<img  data-interchange="[' . $bigimg_small[0] . ', small], [' . $bigimg_medium[0] . ', medium], [' . $bigimg_large[0] . ', large],  [' . $bigimg_large[0] . ', retina], ">'; ?>
		</div>

	<div class="grid-container">
		<div class="grid-x grid-margin-x"> <!-- data-equalizer data-equalize-by-row -->

			
			<div class="medium-6 cell">
				<p><?php if (isset($textblocks2[0]['text'])) echo $textblocks2[0]['text'] ?></p>
			</div>

			<div class="medium-6 cell">

			</div>

			<div class="medium-6 cell">
				<p><?php if (isset($textblocks2[1]['text'])) echo $textblocks2[1]['text']  ?></p>
			</div>

			<div class="medium-6 cell">
				<p><?php if (isset($textblocks2[2]['text'])) echo $textblocks2[2]['text']  ?></p>
      </div>

</div>
</div>

<div class="grid-x grid-margin-x">

			<div class="medium-6 cell">
				<div class="smallimgleft"> 
        <?php echo '<img  data-interchange="[' . $smallimg_small[0] . ', small], [' . $smallimg_medium[0] . ', medium], [' . $smallimg_large[0] . ', large],  [' . $smallimg_large[0] . ', retina], ">'; ?>    
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/kleinlinks.png" alt=""> -->
				</div>
			</div>


      <div class="medium-6 cell">
       <p><?php if (isset($textblocks2[3]['text'])) echo $textblocks2[3]['text']  ?></p>
      </div>
</div>
<div class="grid-container">
<div class="grid-x grid-margin-x">
      
      <div class="medium-6 cell">
        <div class="spacer"></div>
      </div>

			<div class="medium-6 cell">
	       <p><?php if (isset($textblocks2[4] ['text'])) echo $textblocks2[4]['text']  ?></p>
			</div>


		</div>
	</div>


	</div>
		
</div>

</div>



<?php get_footer(); ?>