<?php

function boilerplate_load_assets()
{
  // Only load JS if you actually need it (remove if not using)
  // wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);

  // Enqueue main CSS (critical)
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// Add preconnect for Google Fonts to improve performance
function boilerplate_add_resource_hints($urls, $relation_type)
{
  if ($relation_type === 'preconnect') {
    $urls[] = array(
      'href' => 'https://fonts.googleapis.com',
      'crossorigin'
    );
    $urls[] = array(
      'href' => 'https://fonts.gstatic.com',
      'crossorigin'
    );
  }
  return $urls;
}
add_filter('wp_resource_hints', 'boilerplate_add_resource_hints', 10, 2);

// Defer non-critical scripts
function boilerplate_defer_scripts($tag, $handle, $src)
{
  // Don't defer if it's part of the excluded handles
  $excluded_handles = array('wp-element', 'react-jsx-runtime');

  if (in_array($handle, $excluded_handles)) {
    return $tag;
  }

  // Defer the script
  return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'boilerplate_defer_scripts', 10, 3);

// Disable WordPress admin toolbar on frontend
add_filter('show_admin_bar', '__return_false');

// Remove WordPress block library CSS (saves 15 KiB)
function remove_block_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style');
}
add_action('wp_enqueue_scripts', 'remove_block_css', 100);

// Remove emoji scripts (saves 13 KiB)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
