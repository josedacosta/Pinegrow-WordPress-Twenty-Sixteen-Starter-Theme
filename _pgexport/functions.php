<?php
if ( ! function_exists( 'twentysixteen_setup' ) ) :

function twentysixteen_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'twentysixteen' ),
        'social'  => __( 'Social Links Menu', 'twentysixteen' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // twentysixteen_setup

add_action( 'after_setup_theme', 'twentysixteen_setup' );


if ( ! function_exists( 'twentysixteen_init' ) ) :

function twentysixteen_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // twentysixteen_setup

add_action( 'init', 'twentysixteen_init' );


if ( ! function_exists( 'twentysixteen_widgets_init' ) ) :

function twentysixteen_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Sidebar', 'twentysixteen' ),
        'id' => 'sidebar-1',
        'description' => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );
endif;// twentysixteen_widgets_init



if ( ! function_exists( 'twentysixteen_customize_register' ) ) :

function twentysixteen_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'twentysixteen_customize_register' );
endif;// twentysixteen_customize_register


if ( ! function_exists( 'twentysixteen_enqueue_scripts' ) ) :
    function twentysixteen_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'skiplinkfocusfix' );
    wp_enqueue_script( 'skiplinkfocusfix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', false, null, true);

    wp_deregister_script( 'functions' );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'dashicons' );
    wp_enqueue_style( 'dashicons', get_template_directory_uri() . '/css/dashicons.min.css', false, null, 'all');

    wp_deregister_style( 'adminbar' );
    wp_enqueue_style( 'adminbar', get_template_directory_uri() . '/css/admin-bar.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Merriweather%3A400%2C700%2C900%2C400italic%2C700italic%2C900italic%7CMontserrat%3A400%2C700%7CInconsolata%3A400&#038;subset=latin%2Clatin-ext', false, null, 'all');

    wp_deregister_style( 'genericons' );
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'twentysixteen_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>