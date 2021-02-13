<?php
/*
 * Use a child theme for customization (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes).
 * @package WordPress - n/a
 * @subpackage tswwide
 * @since tswwide 1.0
 * © 2014-2019 Larry Judd, Tradesouthwest.com
 */

if ( ! isset( $content_width ) )
	$content_width = 800;

// run setup functions 'after_setup_theme' hook is run.
function tswwide_setup() { 
    /**
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // language support - add your translation to this page /languages/tswwide.pot
        load_theme_textdomain( 'tswwide', get_template_directory_uri() . '/languages' );

    /**
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
        add_theme_support( 'title-tag' );
        add_theme_support( 'automatic-feed-links' ); // rss feederz
	
        // This theme uses wp_nav_menu() in Header only.
        register_nav_menu('header-menu', __( 'Header Menu', 'tswwide' ));
        
        // This theme uses Featured Images (also known as post thumbnails)
        add_theme_support( 'post-thumbnails' );

        // add tag support to pages
        // maybe removed @since 1.0.3
	    register_taxonomy_for_object_type('post_tag', 'page');
        
        // custom editor style support
        add_editor_style( 'custom-editor-style.css' );
            //custom header support
        
        $args = array(
            'default-image'       => get_template_directory_uri() . '/images/header2.png',
            'default-text-color' => '0000a0',
            'flex-width'        => true,
            'width'            => 1000,
            'flex-height'     => true,
            'height'         => 250,
        );     
        add_theme_support( 'custom-header', $args );
        $header_images = array(
            'mogollon' => array(
                    'url'           => get_template_directory_uri() . '/images/header2.png',
                    'thumbnail_url' => get_template_directory_uri() . '/images/header2.png',
                    'description'   => 'Mogollon2',
            ),
            'mogollonb' => array(
                'url'           => get_template_directory_uri() . '/images/header3.png',
                'thumbnail_url' => get_template_directory_uri() . '/images/header3.png',
                'description'   => 'Mogollon3',
        ),
        'mogollonc' => array(
            'url'           => get_template_directory_uri() . '/images/header4.png',
            'thumbnail_url' => get_template_directory_uri() . '/images/header4.png',
            'description'   => 'Mogollon4',
    ),
    'mogollond' => array(
        'url'           => get_template_directory_uri() . '/images/header5.png',
        'thumbnail_url' => get_template_directory_uri() . '/images/header5.png',
        'description'   => 'Mogollon5',
),
'mogollone' => array(
    'url'           => get_template_directory_uri() . '/images/header1.png',
    'thumbnail_url' => get_template_directory_uri() . '/images/header1.png',
    'description'   => 'Mogollon1',
) );
        register_default_headers( $header_images );
        //background
        $defaults = array(
            'default-color'      => 'FAFAFB',
            'default-image'       => get_template_directory_uri() . '/images/default-background-6.png',	
            'wp-head-callback'     => '_custom_background_cb',
            'admin-head-callback'   => '',
            'admin-preview-callback' => ''
         );
         add_theme_support( 'custom-background', $defaults );
}
add_action( 'after_setup_theme', 'tswwide_setup' );
/*
    * Enqueue scripts and styles for front-end.
    * @since tswwide 1.0
    */
function tswwide_scripts_styles() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );

    // Loads default main stylesheet.
    wp_enqueue_style( 'tswwide-style', get_stylesheet_uri() );
}
    add_action( 'wp_enqueue_scripts', 'tswwide_scripts_styles' );

        // add ie conditional html5 shim to header
function tswwide_add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>';
    echo '<![endif]-->';
}
    add_action('wp_head', 'tswwide_add_ie_html5_shim');

    //Registers our main widget area and the footer widget areas.     
function tswwide_widgets_init() {

register_sidebar( array(
    'name' =>  __('Right Side Widget', 'tswwide'),
    'id' => 'sidebar-1',
    'description' => __('Appears on posts and pages in Footer Area Left', 'tswwide'),
    'before_widget' => '<aside class="widget-area-primary">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
	 ) );

register_sidebar( array(
    'name' => __('Footer Widget 1', 'tswwide'),
    'id' => 'sidebar-2',
    'description' => __('Appears Left Side on Footer', 'tswwide'), 
    'before_widget' => '<aside class="widget-area-secondary">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
    'name' => __('Footer Widget 2', 'tswwide'),
    'id' => 'sidebar-3',
    'description' => __('Appears on Footer Middle', 'tswwide'),
    'before_widget' => '<aside class="widget-area-secondary">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => __('Footer Widget 3', 'tswwide'),
    'id' => 'sidebar-4',
    'description' => __('Appears on Footer Right', 'tswwide'),
    'before_widget' => '<aside class="widget-area-secondary">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

}

add_action( 'widgets_init', 'tswwide_widgets_init' );

/*
 * WordPress body class Extender :
 * 1. Using a full-width layout without widgets.
 *
 * @since tswwide 1.0
 */

    function tswwide_content_width() {
	if ( is_page_template( 'full-width.php' ) || is_attachment() || ! is_active_sidebar( 'tswwide-sidebar' ) ) {
		global $content_width;
		$content_width = 1040;
	}
    }
add_action( 'template_redirect', 'tswwide_content_width' ); 
?>