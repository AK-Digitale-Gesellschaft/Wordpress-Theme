<?php

function SPD2015_theme_setup()
{
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(323, 200, true);
  add_image_size('homepage-thumb', 230, 142, true); //(cropped)
  add_image_size('square', 150, 150, true); //(cropped)
  add_image_size('article', 518, 323, true); //(cropped)
  // Add support for custom headers.
  $defaults = array(
    'default-image' => get_template_directory_uri() . '/img/default.jpg',
    'width' => 564,
    'height' => 315
  );
  add_theme_support('custom-header', $defaults);
  add_action('init', 'SPD2015_register_my_menus');
}

function SPD2015_register_sidebars()
{
  register_sidebar(array(
    'name' => 'Rechte Spalte',
    'id' => 'right',
    'description' => '',
    'class' => '',
    'before_widget' => '',
    'after_widget' => ''
  ));
  register_sidebar(array(
    'name' => __('Kontaktdaten'),
    'id' => 'footer-sidebar',
    'description' => __('Widgets werden rechts im Seitenfuß angezeigt'),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
    register_sidebar(array(
    'name' => 'Störer',
    'id' => 'banner',
    'description' => 'Störer im Kopfbild',
    'class' => '',
    'before_widget' => '',
    'after_widget' => ''
  ));
  register_sidebar(array(
    'name' => 'Willkommen',
    'id' => 'welcome',
    'description' => 'Großer Block mit Begrüßung',
    'class' => '',
    'before_widget' => '',
    'after_widget' => ''
  ));
}
add_action('widgets_init', 'SPD2015_register_sidebars');

function SPD2015_register_my_menus()
{
  
  register_nav_menus(array(
    'primary-menu' => __('Hauptmenü'),
    'secondary-menu' => __('Seitenfuß Links'),
    'tertiary-menu' => __('Seitenfuß Mitte')
  ));
  
}
function SPD2015_get_menu_name($location)
{
  if (!has_nav_menu($location))
    return false;
  $menus      = get_nav_menu_locations();
  $menu_title = wp_get_nav_menu_object($menus[$location])->name;
  return $menu_title;
}

function SPD2015_thumbnail_caption()
{
  global $post;
  
  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array(
    'p' => $thumbnail_id,
    'post_type' => 'attachment'
  ));
  
  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span>' . $thumbnail_image[0]->post_excerpt . '</span>';
  }
}

function remove_more_jump_link($link)
{
  
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"', $offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end - $offset);
  }
  return $link;
  
}

function add_home_to_nav( $items, $args )
{
		$home = '<li><a id="homelink" href="'.home_url().'"><img src="'.get_template_directory_uri().'/img/home.png" alt="Logo der SPD" /></a></li>';
		$home .= $items;
    return $home;
}

add_filter( 'wp_nav_menu_items', 'add_home_to_nav', 10, 2 );

add_filter('the_content_more_link', 'remove_more_jump_link');
add_action('after_setup_theme', 'SPD2015_theme_setup');

// Automatically move JavaScript code to page footer, speeding up page loading time.
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);
