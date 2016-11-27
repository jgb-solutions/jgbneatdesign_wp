<?php

function csspath($path) {
	return get_stylesheet_directory_uri() . '/assets/css/' . $path;
}

function jspath($path) {
	return get_stylesheet_directory_uri() . '/assets/js/' . $path;
}

function imgpath($path) {
	return get_stylesheet_directory_uri() . '/assets/images/' . $path;
}

// add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
// add_filter('previous_posts_link_attributes', 'previous_posts_link_attributes');
// add_filter('next_post_link', 'next_post_link_attributes');
// add_filter('previous_post_link', 'previous_post_link_attributes');

// function next_post_link_attributes($output) {
//     $code = 'class="uk-button uk-button-primary uk-button-large"';
//     return str_replace('<a href=', '<a '.$code.' href=', $output);
// }

// function previous_post_link_attributes($output) {
//     $code = 'class="uk-button uk-button-primary uk-button-large"';
//     return str_replace('<a href=', '<a '.$code.' href=', $output);
// }

// function next_posts_link_attributes() {
//     // return 'class="uk-button uk-button-primary uk-button-large"';
//     return 'class="uk-text-large uk-text-primary"';
// }
// function previous_posts_link_attributes() {
//     return 'class="uk-button uk-button-primary uk-button-large"';
// }

if ( ! function_exists( 'jgbnd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jgbnd_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on JGB! Neat Design, use a find and replace
	 * to change 'jgbnd' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jgbnd', get_template_directory() . '/languages' );

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
	add_theme_support('post-thumbnails');

	add_image_size('jgbnd-thumb', 343, 212, false);
	add_image_size('jgbnd-large', 839, 518,565597668, false);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'jgbnd' ),
	) );

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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jgbnd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'jgbnd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jgbnd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jgbnd_content_width', 640 );
}
add_action( 'after_setup_theme', 'jgbnd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jgbnd_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jgbnd' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jgbnd' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'jgbnd_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jgbnd_scripts() {
	wp_enqueue_style( 'jgbnd-style', csspath('app.css'));

	wp_enqueue_script( 'jgbnd-script', jspath('app.js'), null, '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'jgbnd_scripts' );

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
