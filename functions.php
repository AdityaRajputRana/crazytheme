<?php

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );


function crazy_theme_setup(){
    add_theme_support('custom-logo', array(
        'width' => 180,
        'height' => 180,
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680, 400, array('center','center'));
    add_image_size( 'single-img', 600, 550, array('center','center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'crazy')
    ) );

};

add_action('after_setup_theme', 'crazy_theme_setup' );



function crazy(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','crazy');

function crazy_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'crazy' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Copyright section', 'crazy' ),
        'id'            => 'copy',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'crazy' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Socials', 'crazy' ),
        'id'            => 'social',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
        'before_widget' => '<li id="%1$s">',
        'after_widget'  => '</li>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Contact Section', 'crazy' ),
        'id'            => 'contact',
        'description'   => __( 'This is the contact form', 'theme_name' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init','crazy_widgets_init' );
?>