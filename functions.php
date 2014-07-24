<?php

// Import CSS files =====================
function theme_styles() 
{
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

// Import JS files =====================
function theme_js()
{
  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
  wp_register_script( 'html5_repond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

  $wp_scripts -> add_data( 'html5_shiv', 'conditional', 'lt IE 9');
  $wp_scripts -> add_data( 'html5_respond', 'conditional', 'lt IE 9');

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'theme_js' ); 

// Turn on/off Admin Bar =====================
// add_filter( 'show_admin_bar', '__return_false' );

//  Add Menus =====================
add_theme_support( 'menus' );

function register_theme_menus()
{
  register_nav_menus( 
    array(
      'header-menu' => __('Header Menu')
    )
  );
}
add_action('init', 'register_theme_menus' );



// Add widgets =====================
function create_widget($name, $id, $description)
{
  register_sidebar( array(
      //double underscore is used for translation/localization
        'name'          => __( $name ),
        'id'            => $id,
        'description'   => __( $description ),
        'class'         => '',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
      ));
}

//  add Front Page Widget
create_widget('Front Page Left', 'front-left', 'Displays on the left of the homepage.');
create_widget('Front Page Center', 'front-center', 'Displays in the center of the homepage.');
create_widget('Front Page Right', 'front-right', 'Displays on the right of the homepage.');

// Add sidebar widgets
create_widget('Page Sidebar', 'page', 'Displays on the side of pages with a sidebar.');
create_widget('Blog Sidebar', 'blog', 'Displays on the side of blog pages.');


// Add Theme Supports =====================
add_theme_support( 'post-thumbnails' );








?>

















