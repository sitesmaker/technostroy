<?php
/**
 * Technostroy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Technostroy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'technostroy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function technostroy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Technostroy, use a find and replace
		 * to change 'technostroy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'technostroy', get_template_directory() . '/languages' );

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

		# main menu

		register_nav_menu('main-menu','Главное меню');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'technostroy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'technostroy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function technostroy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'technostroy_content_width', 640 );
}
add_action( 'after_setup_theme', 'technostroy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function technostroy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'technostroy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'technostroy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'technostroy_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function technostroy_scripts() {
	wp_style_add_data( 'technostroy-style', 'rtl', 'replace' );

	wp_enqueue_script( 'technostroy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'technostroy_scripts' );

function add_styles()  
{
	// wp_enqueue_style( 'technostroy-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css'); 
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css'); 
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');  
    wp_enqueue_style( 'slick_theme', get_template_directory_uri() . '/css/slick-theme.css');  
    wp_enqueue_style( 'fotorama', get_template_directory_uri() . '/css/fotorama.css'); 
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');     
}  
add_action( 'wp_enqueue_scripts', 'add_styles' );

function add_scripts()  
{
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/Jquery.min.js', array(), false, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _false, true );   
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), _false, true );   
	wp_enqueue_script( 'anime', get_template_directory_uri() . '/js/anime.min.js', array(), _false, true );   
	wp_enqueue_script( 'animation', get_template_directory_uri() . '/js/animation.js', array(), _false, true );  
	wp_enqueue_script( 'spincrement', get_template_directory_uri() . '/js/jquery.spincrement.min.js', array(), _false, true );   
	wp_enqueue_script( 'inputmask.binding', get_template_directory_uri() . '/js/inputmask.binding.js', array(), _false, true );    
	wp_enqueue_script( 'inputmask', get_template_directory_uri() . '/js/jquery.inputmask.min.js', array(), _false, true );  
	wp_enqueue_script( 'fotorama', get_template_directory_uri() . '/js/fotorama.js', array(), _false, true );  
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _false, true ); 
}  


add_action( 'wp_enqueue_scripts', 'add_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
