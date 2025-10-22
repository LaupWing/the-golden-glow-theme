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

// Defer non-critical scripts (frontend only)
function boilerplate_defer_scripts($tag, $handle, $src)
{
  // Don't apply to admin area
  if (is_admin()) {
    return $tag;
  }

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

// Remove WordPress block library CSS (saves 15 KiB) - Frontend only
function remove_block_css()
{
  if (!is_admin()) {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
  }
}
add_action('wp_enqueue_scripts', 'remove_block_css', 100);

// Remove emoji scripts (saves 13 KiB) - Frontend only
function remove_emoji_scripts()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'remove_emoji_scripts');

/**
 * Handle Contact Form Submission
 */
function handle_contact_form_submission()
{
  // Verify nonce for security
  if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
    wp_die('Security check failed');
  }

  // Sanitize and validate form data
  $first_name = sanitize_text_field($_POST['first_name']);
  $last_name = sanitize_text_field($_POST['last_name']);
  $email = sanitize_email($_POST['email']);
  $phone = sanitize_text_field($_POST['phone']);
  $message = sanitize_textarea_field($_POST['message']);

  // Validate required fields
  if (empty($first_name) || empty($last_name) || empty($email)) {
    wp_redirect(add_query_arg('contact_error', 'missing_fields', wp_get_referer()));
    exit;
  }

  // Validate email
  if (!is_email($email)) {
    wp_redirect(add_query_arg('contact_error', 'invalid_email', wp_get_referer()));
    exit;
  }

  // Prepare email
  $to = get_contact_email(); // Send to configured contact email
  $subject = 'New Contact Form Submission - ' . get_site_config('company.name', 'The Golden Glow');
  $body = "New contact form submission:\n\n";
  $body .= "Name: {$first_name} {$last_name}\n";
  $body .= "Email: {$email}\n";
  $body .= "Phone: {$phone}\n\n";
  $body .= "Message:\n{$message}\n";

  $headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
    'Reply-To: ' . $email
  );

  // Send email
  $mail_sent = wp_mail($to, $subject, $body, $headers);

  // Redirect with success or error message
  if ($mail_sent) {
    wp_redirect(add_query_arg('contact_success', '1', wp_get_referer()));
  } else {
    wp_redirect(add_query_arg('contact_error', 'mail_failed', wp_get_referer()));
  }
  exit;
}
add_action('admin_post_nopriv_contact_form_submission', 'handle_contact_form_submission');
add_action('admin_post_contact_form_submission', 'handle_contact_form_submission');

/**
 * Helper Functions for Centralized Configuration
 */

/**
 * Get site configuration value
 *
 * @param string $key Dot notation path (e.g., 'contact.email' or 'social.instagram')
 * @param mixed $default Default value if key not found
 * @return mixed
 */
function get_site_config($key = null, $default = null)
{
  static $config = null;

  // Load config once
  if ($config === null) {
    $config = require get_template_directory() . '/config/site-config.php';
  }

  // Return full config if no key specified
  if ($key === null) {
    return $config;
  }

  // Support dot notation (e.g., 'contact.email')
  $keys = explode('.', $key);
  $value = $config;

  foreach ($keys as $k) {
    if (!isset($value[$k])) {
      return $default;
    }
    $value = $value[$k];
  }

  return $value;
}

/**
 * Get contact email for forms
 *
 * @return string
 */
function get_contact_email()
{
  return get_site_config('emails.contact_form', get_option('admin_email'));
}
