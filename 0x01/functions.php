<?php
// Add support for Thumbnails
add_theme_support('post-thumbnails');
// Set image size and allow cut image if necessary
add_image_size('homepage-thumb', 800, 400, true);
// Add menus
register_nav_menus(array(
  'primary-menu' => 'Primary Menu',
  'secondary-menu' => 'Secondary Menu'
));
// Adding a CSS class to menu items
function add_classes_on_li($classes, $item, $args) {
  if($args->theme_location == 'primary-menu') {
    $classes[] = 'nav-link';
  }
  if($args->theme_location == 'secondary-menu') {
    $classes[] = 'foot-link';
  }
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
?>