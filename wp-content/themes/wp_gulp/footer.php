<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_gulp
 */

$menuitems = wp_get_nav_menu_items( "hauptmenu", array( 'order' => 'DESC' ) );


function getUrl() {
	$url = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
	$url .= '://' . $_SERVER['SERVER_NAME'];
	$url .= in_array( $_SERVER['SERVER_PORT'], array( '80', '443' ) ) ? '' : ':' . $_SERVER['SERVER_PORT'];
	$url .= $_SERVER['REQUEST_URI'];

	return urlencode( $url );
}

?>



</div> <!-- mainContainer -->

<!-- Global site tag (gtag.js) - Google Analytics -->



<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor<?php echo (WP_DEBUG) ? "" : ".min" ?>.js?<?php echo wp_get_theme()->get( 'Version' ) ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main<?php echo (WP_DEBUG) ? "" : ".min" ?>.js?<?php echo wp_get_theme()->get( 'Version' ) ?>"></script>

<?php wp_footer(); ?>

</body>
</html>