<?php
/**
 * espresso functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_gulp
 */

if ( ! function_exists( 'espresso_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function espresso_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on espresso, use a find and replace
		 * to change 'espresso' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'espresso', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'excerpt' );

		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus( array(
		// 	'primary' => esc_html__( 'Primary', 'espresso' ),
		// ) );





		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'espresso_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
endif;
add_action( 'after_setup_theme', 'espresso_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function espresso_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'espresso_content_width', 800 );
}

add_action( 'after_setup_theme', 'espresso_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function espresso_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'espresso' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'espresso_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function espresso_scripts() {
	wp_enqueue_style( 'espresso-style', get_stylesheet_uri() );

	wp_enqueue_script( 'espresso-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'espresso-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/* Disable WordPress Admin Bar for all users */
//show_admin_bar( false );

/*

add_action( 'init', 'customPostTypeTeaser' );
function customPostTypeTeaser() {
	$labels = array(
		"name"               => __( 'Teaser' ),
		"singular_name"      => __( 'Teaser' ),
		"menu_name"          => __( 'Teaser' ),
		"all_items"          => __( 'Alle Teaser' ),
		"add_new"            => __( 'Teaser hinzufügen' ),
		"add_new_item"       => __( 'Neuen Teaser hinzufügen' ),
		"edit_item"          => __( 'Teaser bearbeiten' ),
		"new_item"           => __( 'Neuen Teaser' ),
		"view_item"          => __( 'Zeige Teaser' ),
		"search_items"       => __( 'Durchsuche Teaser' ),
		"not_found"          => __( 'Kein Teaser gefunden' ),
		"not_found_in_trash" => __( 'Kein Teaser im Müll gefunden' ),
		"parent_item_colon"  => __( 'Eltern Teaser' ),
	);

	$args = array(
		"label"               => __( 'Teaser' ),
		"labels"              => $labels,
		"description"         => "",
		"public"              => true,
		// "publicly_queryable" => false,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => true,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => false,
		"rewrite"             => array( "slug" => "Teaser", "with_front" => true ),
		"query_var"           => true,
		// "menu_icon" => "//lorempixel.com/13/13",
		"menu_icon"           => 'dashicons-megaphone',
		"supports"            => array( "title", "editor", "thumbnail", "excerpt" ),
	);
	register_post_type( "Teaser", $args );

// End of customPostTypeTeaser()
}*/


// function wporg_register_taxonomy_course() {
// 	$labels = [
// 		'name'              => _x( 'Courses', 'taxonomy general name' ),
// 		'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
// 		'search_items'      => __( 'Search Courses' ),
// 		'all_items'         => __( 'All Courses' ),
// 		'parent_item'       => __( 'Parent Course' ),
// 		'parent_item_colon' => __( 'Parent Course:' ),
// 		'edit_item'         => __( 'Edit Course' ),
// 		'update_item'       => __( 'Update Course' ),
// 		'add_new_item'      => __( 'Add New Course' ),
// 		'new_item_name'     => __( 'New Course Name' ),
// 		'menu_name'         => __( 'Course' ),
// 	];
// 	$args   = [
// 		'hierarchical'      => true, // make it hierarchical (like categories)
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'rewrite'           => [ 'slug' => 'course' ],
// 	];
// 	register_taxonomy( 'course', [ 'post' ], $args );
// }

// add_action( 'init', 'wporg_register_taxonomy_course' );


add_action( 'init', 'addCustomPostTypes' );
function addCustomPostTypes() {
	register_post_type( "consulting-case", array(
		"label"               => __( 'Consulting Cases' ),
		"labels"              => array(
			"name"               => __( 'Consulting Cases' ),
			"singular_name"      => __( 'Consulting Case' )
		),
		"description"         => "",
		"public"              => true,
		// "publicly_queryable" => false,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => true,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => true,
		"rewrite"             => array( "slug" => "consulting-case", "with_front" => true ),
		"query_var"           => true,
		"hierarchical"        => true,
		"supports"            => array( "title", "editor", "thumbnail", "excerpt" ),
	));

	register_post_type( "consulting-journal", array(
		"label"               => __( 'Consulting Journals' ),
		"labels"              => array(
			"name"               => __( 'Consulting Journals' ),
			"singular_name"      => __( 'Consulting Journal' )
		),
		"description"         => "",
		"public"              => true,
		// "publicly_queryable" => false,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => true,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => true,
		"rewrite"             => array( "slug" => "consulting-journal", "with_front" => true ),
		"query_var"           => true,
		"hierarchical"        => true,
		"supports"            => array( "title", "editor", "thumbnail", "excerpt" ),
	));

	register_post_type( "design-case", array(
		"label"               => __( 'Design Cases' ),
		"labels"              => array(
			"name"               => __( 'Design Cases' ),
			"singular_name"      => __( 'Design Case' )
		),
		"description"         => "",
		"public"              => true,
		// "publicly_queryable" => false,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => true,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => true,
		"rewrite"             => array( "slug" => "design-case", "with_front" => true ),
		"query_var"           => true,
		"hierarchical"        => true,
		"supports"            => array( "title", "editor", "thumbnail", "excerpt" ),
	));

	register_post_type( "design-journal", array(
		"label"               => __( 'Design Journals' ),
		"labels"              => array(
			"name"               => __( 'Design Journals' ),
			"singular_name"      => __( 'Design Journal' )
		),
		"description"         => "",
		"public"              => true,
		// "publicly_queryable" => false,
		"show_ui"             => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"has_archive"         => true,
		"show_in_menu"        => true,
		"exclude_from_search" => false,
		"capability_type"     => "post",
		"map_meta_cap"        => true,
		"hierarchical"        => true,
		"rewrite"             => array( "slug" => "design-journal", "with_front" => true ),
		"query_var"           => true,
		"hierarchical"        => true,
		"supports"            => array( "title", "editor", "thumbnail", "excerpt" ),
	));


	flush_rewrite_rules();
// End of customPostTypeFAQ()
}



//ACF Options Pane

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Brainds Options');
}




// Custom Column @ Wohnungen
// add_filter( 'manage_wohnung_posts_columns', 'set_custom_edit_wohnung_columns' );
// add_action( 'manage_wohnung_posts_custom_column' , 'custom_wohnung_column', 10, 2 );

// function set_custom_edit_wohnung_columns($columns) {
// 	$columns['wohnung_cat'] = __( 'Kategorie' );
// 	return $columns;
// }

// function custom_wohnung_column( $column, $post_id ) {
// 	switch ( $column ) {
// 		case 'wohnung_cat' :

// 			switch ( get_field('cat', $post_id) ) {
// 				case 'ap': 
// 					echo "Apartment";
// 					break;
// 				case 'loft': 
// 					echo "Loft";
// 					break;
// 				case 'pent': 
// 					echo "Penthouse";
// 					break;
// 				case 'loftC': 
// 					echo "Loft Collection";
// 					break;
// 				case 'pentC': 
// 					echo "Penthouse Colletion";
// 					break;
// 				case 'appC': 
// 					echo "Appartment Colletion";
// 					break;
// 			}


// 			break;
// 	}
// }

//---


add_action( 'init', 'addExtraImageFormats' );

function addExtraImageFormats() {

	add_image_size( 'small', 640 );
	add_image_size( 'medium', 1040 );
	add_image_size( 'large', 1400 );

}


function findParent($item) {
	if (!$item->post_parent) {
		return 0;
	} else {
	}
}



// add_action( 'init', 'customPostTypeFilm' );
// function customPostTypeFilm() {
// 	$labels = array(
// 		"name" => __( 'Filme'),
// 		"singular_name" => __( 'Film'),
// 		"menu_name" => __( 'Filme'),
// 		"all_items" => __( 'Alle Filme'),
// 		"add_new" => __( 'Filme hinzufügen'),
// 		"add_new_item" => __( 'Neuen Film hinzufügen'),
// 		"edit_item" => __( 'Filme bearbeiten'),
// 		"new_item" => __( 'Neuen Film'),
// 		"view_item" => __( 'Zeige Filme'),
// 		"search_items" => __( 'Durchsuche Filme'),
// 		"not_found" => __( 'Kein Film gefunden'),
// 		"not_found_in_trash" => __( 'Kein Film im Müll gefunden'),
// 		"parent_item_colon" => __( 'Eltern Film'),
// 		);

// 	$args = array(
// 		"label" => __( 'Filme'),
// 		"labels" => $labels,
// 		"description" => "",
// 		"public" => true,
// 		// "publicly_queryable" => false,
// 		"show_ui" => true,
// 		"show_in_rest" => false,
// 		"rest_base" => "",
// 		"has_archive" => true,
// 		"show_in_menu" => true,
// 		"exclude_from_search" => false,
// 		"capability_type" => "post",
// 		"map_meta_cap" => true,
// 		"hierarchical" => true,
// 		"rewrite" => array( "slug" => "film", "with_front" => true ),
// 		"query_var" => true,
// 		// "menu_icon" => "//lorempixel.com/13/13",
// 		"menu_icon" => 'dashicons-format-video',
// 		"supports" => array( "title", "editor", "thumbnail" ),					);
// 	register_post_type( "film", $args );

// // End of customPostTypeFilm()
// }


add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib( $array ) {
	return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}


function fontawesomeicons() {
	// echo '<link href="/link/to/admin-styles.css"  rel="stylesheet">';
}

add_action( 'admin_head', 'fontawesomeicons' );


function remove_menus() {

	// remove_menu_page( 'index.php' );                  //Dashboard
	remove_menu_page( 'edit.php' );                   //Posts

	//remove_menu_page( 'upload.php' );                 //Media
	// remove_menu_page( 'edit.php?post_type=page' );    //Pages

	remove_menu_page( 'edit-comments.php' );          //Comments
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings

}

add_action( 'admin_menu', 'remove_menus' );


//Nav Menus:

// register_nav_menus(array(
// 		'primary' => __('Hauptmenu'),
// 		'footer' => __('Anderes Menu')
// ));

//Remove Wordpress Logo in BE:

// function annointed_admin_bar_remove() {
//         global $wp_admin_bar;

//         /* Remove their stuff */
//         $wp_admin_bar->remove_menu('wp-logo');
// }

// add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);


//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_name;
	}

	return $classes;
}


add_action( 'after_setup_theme', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
	register_nav_menu( 'secondary', __( 'Secondary Menu', 'theme-slug' ) );
	// register_nav_menu( 'tertiary', __( 'Tertiary Menu', 'theme-slug' ) );
}


add_filter( 'body_class', 'add_slug_body_class' );


function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );


function register_my_session() {
	if ( ! session_id() ) {
		session_start();
	}
}

add_action( 'init', 'register_my_session' );


//remove_filter( 'the_content', 'wpautop' );

// apply_filters('the_content',get_the_content())

// add_filter('the_content', 'wpautop');

// function childtheme_add_filters(){
	// add_filter ('the_content', 'wpautop');
	// add_filter ('comment_text', 'wpautop');
// }
// add_action( 'after_setup_theme', 'childtheme_add_filters' );




// remove_filter('the_content', 'wptexturize');


// require_once('wp_bootstrap_navwalker.php');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		if ( ! $depth ) {
			$output .= "\n$indent<ul class='sub-menu sub-menu-" . $depth . " hiddenOnMobile' data-equalizer-watch=\"subs\">\n";
		} else {
			$output .= "\n$indent<ul class='sub-menu sub-menu-" . $depth . "'>\n";
		}
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;



		$active = in_array("current_page_item",$item->classes) ? ' active' : '';
		$classes[] = $active;



		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );


		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        



		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value      = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );


		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		//$item_output .= '<a'. $attributes .'>';
		if ( ! $depth ) { // Top Menu of Submenu
			$item_output .= '<a data-equalizer-watch="hl"' . $attributes . '>';
		} else {
			$item_output .= '<a' . $attributes . '>';
		}

		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;


		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}

}

function acf_load_color_field_choices( $field ) {

	// reset choices
	$field['choices'] = array();


	// get the textarea value from options page without any formatting
	$choices = get_field( 'faq_kategorien_auswahl', 953, true );

	// explode the value so that each line is a new array piece
	$choices = explode( PHP_EOL, $choices );

	// remove any unwanted white space
	$choices = array_map( 'trim', $choices );


	// loop through array and add to field 'choices'
	if ( is_array( $choices ) ) {

		foreach ( $choices as $choice ) {

			$field['choices'][ $choice ] = $choice;

		}

	}

	/*	echo "<pre>";
		var_dump($field);
		echo "</pre>";*/


	// return the fieldß
	return $field;

}

add_filter( 'acf/load_field/name=faq_kategorie', 'acf_load_color_field_choices' );




//Remove WYSIWYG

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    remove_post_type_support('page', 'editor');
    // remove_post_type_support('wohnung', 'editor');
}




//AFC Send Email


function my_project_updated_send_email( $post_id, $post, $update  ) {

	// $meta_key = "email";
	// $meta_value = "ffdfsdfs@ƒsdf.net";

	// update_post_meta( $post_id, $meta_key, $meta_value); 
	// update_post_meta( $post_id, $meta_key, get_field('demo', $post_id)); 

	// $value = get_field('demo', $post_id);
	// echo "<pre>";
	// var_dump(get_post_meta($post_id));
	// echo "</pre>";
	// die();

	// $msg = 'Is this un update? ';
	// $msg .= $update ? 'Yes.' : 'No.';
	// wp_die( $value );

	// If this is just a revision, don't send the email.
	// if ( wp_is_post_revision( $post_id ) )
	// 	return;

	// $post_title = get_the_title( $post_id );
	// $post_url = get_permalink( $post_id );
	// $subject = 'A post has been updated';

	// $message = "A post has been updated on your website:\n\n";
	// $message .= $post_title . ": " . $post_url;

	// // Send email to admin.
	// wp_mail( 'fabian.wolf@gmx.net', $subject, $message );
}
add_action( 'save_post', 'my_project_updated_send_email', 10, 3  );






/**
 * Customize Adjacent Post Link Order
 * Get Next Post, Based on Simple Page Ordering
 */
function wpse73190_gist_adjacent_post_where($sql) {
  if ( !is_main_query() || !is_singular() )
    return $sql;

  $the_post = get_post( get_the_ID() );
  $patterns = array();
  $patterns[] = '/post_date/';
  $patterns[] = '/\'[0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}\'/';
  $replacements = array();
  $replacements[] = 'menu_order';
  $replacements[] = $the_post->menu_order;
  return preg_replace( $patterns, $replacements, $sql );
}
add_filter( 'get_next_post_where', 'wpse73190_gist_adjacent_post_where' );
add_filter( 'get_previous_post_where', 'wpse73190_gist_adjacent_post_where' );

function wpse73190_gist_adjacent_post_sort($sql) {
  if ( !is_main_query() || !is_singular() )
    return $sql;

  $pattern = '/post_date/';
  $replacement = 'menu_order';
  return preg_replace( $pattern, $replacement, $sql );
}
add_filter( 'get_next_post_sort', 'wpse73190_gist_adjacent_post_sort' );
add_filter( 'get_previous_post_sort', 'wpse73190_gist_adjacent_post_sort' );


function getSSLPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSLVERSION,3); 
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}



add_filter('acf/settings/default_language', 'my_acf_settings_default_language');
 
function my_acf_settings_default_language( $language ) {
 
    return 'de';
    
}



// add_action( 'wp_ajax_add_foobar', 'prefix_ajax_add_foobar' );

// function prefix_ajax_add_foobar() {
//     // Handle request then generate response using WP_Ajax_Response

//     // Don't forget to stop execution afterward.
//     wp_die();
// }

function finish($success, $error = '')
{
	die( json_encode(
		[
			'success' => $success,
			'error' => $error
		]
	) );
}


function contactForm() {

	// die( get_field('main_email', 'option') );

	if ( isset ( $_REQUEST) ) {

		foreach ($_REQUEST['data'] as $key => $value) {
			$k = $value["name"];
			$v = $value["value"];
			${$k} = $v;
		}

		if ( 	!isset($name) ||
				!isset($email) ||
				!isset($telefon) ||
				!isset($frage)
		   ) {
			finish(false, "missingfield");
		}



		// if ( $_SESSION["code"] == $_POST['captcha']) {

		$message = "Name: $name" . PHP_EOL . "<br>" .
					"Email: $email" . PHP_EOL .  "<br>" .
					"Telefon: $telefon" . PHP_EOL .  "<br>" .
					"Frage: $frage" . PHP_EOL;

		$betreff = "Kontaktanfrage von $name";

		$header = "MIME-Version: 1.0" . "\r\n";
		$header .= "Content-type:text/html; charset=utf-8" . PHP_EOL;
		$header .= "From: Brainds Server <noreply@brainds.at>" . PHP_EOL;
		$header .= "Reply-To: $name <$email>" . PHP_EOL;
		$header .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;

		mail(get_field('main_email', 'option'), $betreff, $message, $header);
		// mail(get_field('main_email', 'option') , $betreff, $message, $header);

		finish (true);

	}

}



// If you wanted to also use the function for non-logged in users (in a theme for example)
 // add_action( 'wp_ajax_nopriv_contactForm', 'contactForm' );

	add_action('wp_ajax_contactForm', 'contactForm');
	add_action('wp_ajax_nopriv_contactForm', 'contactForm');


// add_filter('acf/settings/current_language', 'my_acf_settings_current_language');
 
// function my_acf_settings_current_language( $language ) {
 
//     return 'fr';
    
// }

function get_section() {
	global $pagename;
	return ucfirst($pagename);
}

function on_post_updated($post_ID, $post_after, $post_before) {
	$templatePath = get_template_directory();
	
	$post_version = floatval(@file_get_contents("$templatePath/post.version"));
	$post_version += .1;
	@file_put_contents("$templatePath/post.version", $post_version);
}
add_action('post_updated', 'on_post_updated', 10, 3);


/* Color bar indicator for posts with background colors */
function admin_colorbar() {
    echo '<div style="display:block; height: 3px; width: 100%; background:'.get_field('background-color').'; margin-top: -75px; margin-bottom: 75px;"></div>';
}
add_action( 'edit_form_after_title', 'admin_colorbar' );


function limit_text($text, $limit=55, $more='') {
  if (str_word_count($text, 0) > $limit) {
      $words = str_word_count($text, 2);
      $pos = array_keys($words);
      $text = substr($text, 0, $pos[$limit]) . $more;
  }
  return $text;
}