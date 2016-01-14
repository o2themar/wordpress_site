<?php

$themename = "colorsnap";
$themefolder = "colorsnap";

define ('theme_name', $themename );
define ('theme_ver' , 1.0 );

// Constants for the theme name, folder and remote XML url
define( 'MTHEME_NOTIFIER_THEME_NAME', $themename );
define( 'MTHEME_NOTIFIER_THEME_FOLDER_NAME', $themefolder );

if ( ! function_exists( 'colorsnap_setup' ) ) :

/** Sets up theme defaults and registers support for various WordPress features. */
function colorsnap_setup() {
	/* Make theme available for translation
	  Translations can be filed in the /languages/ directory	 */
	load_theme_textdomain( 'colorsnap', get_template_directory() . '/languages' );
	/* Add default posts and comments RSS feed links to head */
	add_theme_support( 'automatic-feed-links' );
	/* Add callback for custom TinyMCE editor stylesheets. (editor-style.css) */
     add_editor_style(get_template_directory_uri() . '/css/editor-style.css');
	/* Enable support for Post Thumbnails on posts and pages */
	add_theme_support( 'post-thumbnails' );
	/* This theme uses wp_nav_menu() in one location. */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'colorsnap' ),
		'social' => __( 'Social Menu', 'colorsnap' ),
		'footer-menu' => __( 'Footer Menu', 'colorsnap' ),
	) );
	
	global $content_width;
 if ( ! isset( $content_width ) ) { $content_width = 800; /* pixels */ }
}
endif; // colorsnap_setup
add_action( 'after_setup_theme', 'colorsnap_setup' );

// Theme Functions 
include (get_template_directory() . '/functions/theme-functions.php');
include (get_template_directory() . '/functions/widgetize-theme.php');

/* Custom template tags for this theme. */
include (get_template_directory() . '/inc/paginatelinks.php'); 
include (get_template_directory() . '/inc/widgets.php'); 

/* Theme customizer */
include (get_template_directory() . '/admin/settings.php');
include (get_template_directory() . '/theme-options.php');
?>