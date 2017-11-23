<?php
/**
 *
 * @package WordPress
 * @package wp_gulp
 */

$mp4 = $_GET["mp4"];


?>
 
<!doctype html>
<html class="no-js" lang="">

<link rel="stylesheet" type="text/css" href="<?php echo get_home_url(); ?>/bower_components/video.js/dist/video-js.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">

</head>

<body>

  <!-- poster="http://video-js.zencoder.com/oceans-clip.png" -->

<div class="wrapper">
 <div class="videocontent">

	<video id="example_video_1" class="video-js vjs-default-skin vjs-16-9 vjs-big-play-centered"
  controls autoplay preload="auto" width="1280" height="720"
  data-setup='{"preload": "auto", "fluid": true}}'>
<source src="<?=$mp4?>" type="video/mp4" />
				 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>

 </div>
</div>


<script src="<?php echo get_home_url(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_home_url(); ?>/bower_components/video.js/dist/video.min.js"></script>

</body>
</html>
