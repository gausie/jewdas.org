<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

function add_search_to_wp_menu($items, $args) {
  if($args->theme_location === 'footer_navigation') {
    $items .= '<li class="menu-search">';
    $items .= load_template_part('templates/searchform');
    $items .= '</li>';
  }

  return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);

function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}
