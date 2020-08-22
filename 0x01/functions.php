<?php
// Combining Enqueue Functions
function ownTheme_add_styles_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'own-css', get_template_directory_uri() . '/styles/style.css');
  wp_enqueue_script( 'fontawesome-js', 'https://kit.fontawesome.com/0f14489e55.js');
  wp_enqueue_script( 'own-js', get_template_directory_uri() . '/scripts/script.js',
    array('fontawesome-js'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'ownTheme_add_styles_scripts' );
// Register Menus
if (function_exists('register_nav_menus')){
  array(
    'primary-menu' => 'Primary Menu',
    'secondary-menu' => 'Secondary Menu'
  );
}
// Adding a CSS class to menu items
function ownTheme_add_classes_on_li($classes, $item, $args)
{
  if ($args->theme_location == 'primary-menu') {
    $classes[] = 'nav-link';
  }
  if ($args->theme_location == 'secondary-menu') {
    $classes[] = 'foot-link';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'ownTheme_add_classes_on_li', 1, 3);
function ownTheme_setup(){
  // Enabling Support for Featured Image
  if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    // default Featured Image dimensions (cropped)
    set_post_thumbnail_size( 720, 300, true );
  }
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'ownTheme_setup');
// Register sidebar
add_action( 'widgets_init', 'ownTheme_register_sidebars' );
function ownTheme_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'Main sidebar for worpress widget.' ),
            'before_widget' => '<aside id="%1$s" class="widgets %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4><hr />',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
/*
// // Adding a CSS class an anchor
function add_classes_on_a ($atts, $item, $args) {
  $class = 'class-name';
  $atts['class'] = $class;
}
add_filter('nav_menu_link_attributes', 'add_calsses_on_a', 10, 3);
*/