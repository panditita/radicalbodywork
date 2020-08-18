<?php
add_action( 'wp_enqueue_scripts', 'radicalbodywork_enqueue_styles' );
function radicalbodywork_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentytwenty-style' for the Twenty Twenty theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/**
 * Adds the Customize page to the WordPress admin area
 */

require get_template_directory() . '/inc/customizer.php';


/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function menu_customizer( $wp_customize ) {
    $wp_customize->add_section(
        'menus_color',
        array(
            'title' => 'Menus Color',
            'description' => 'This is a settings section.',
            'priority' => 35,
        )
    );
}
add_action( 'customize_register', 'menu' );