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
 * ACF Field Groups for Treatment Pages
 * This creates all the custom fields you need in WordPress admin
 */
if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group(array(
    'key' => 'group_treatment_fields',
    'title' => 'Treatment Page Fields',
    'fields' => array(
      // Page Banner Title
      array(
        'key' => 'field_page_banner_title',
        'label' => 'Page Banner Title',
        'name' => 'page_banner_title',
        'type' => 'text',
        'instructions' => 'The title shown in the page banner (leave empty to use page title)',
        'required' => 0,
      ),

      // Intro Section
      array(
        'key' => 'field_intro_section',
        'label' => 'Intro Section',
        'name' => 'intro_section',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'field_intro_title',
            'label' => 'Title',
            'name' => 'intro_title',
            'type' => 'text',
          ),
          array(
            'key' => 'field_intro_content',
            'label' => 'Content',
            'name' => 'intro_content',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
          ),
          array(
            'key' => 'field_intro_image',
            'label' => 'Image Filename',
            'name' => 'intro_image',
            'type' => 'text',
            'instructions' => 'Enter image filename (e.g., frons-sanjay.jpg)',
          ),
        ),
      ),

      // Text Content Sections (REPEATER - can add multiple!)
      array(
        'key' => 'field_text_sections',
        'label' => 'Text Content Sections',
        'name' => 'text_sections',
        'type' => 'repeater',
        'instructions' => 'Add one or more text sections. You can add multiple!',
        'button_label' => 'Add Text Section',
        'sub_fields' => array(
          array(
            'key' => 'field_text_section_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
          ),
          array(
            'key' => 'field_text_section_content',
            'label' => 'Content',
            'name' => 'content',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
          ),
          array(
            'key' => 'field_text_section_background',
            'label' => 'Show Background',
            'name' => 'show_background',
            'type' => 'true_false',
            'default_value' => 1,
            'ui' => 1,
          ),
        ),
      ),

      // Price Data
      array(
        'key' => 'field_price_data',
        'label' => 'Price Information',
        'name' => 'price_data',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'field_price_title',
            'label' => 'Price Section Title',
            'name' => 'title',
            'type' => 'text',
          ),
          array(
            'key' => 'field_price',
            'label' => 'Price (number only)',
            'name' => 'price',
            'type' => 'text',
            'placeholder' => '125',
          ),
          array(
            'key' => 'field_anesthesia',
            'label' => 'Anesthesia',
            'name' => 'anesthesia',
            'type' => 'text',
            'placeholder' => 'met crème',
          ),
          array(
            'key' => 'field_checkup',
            'label' => 'Checkup',
            'name' => 'checkup',
            'type' => 'text',
            'placeholder' => 'na 2 weken',
          ),
          array(
            'key' => 'field_effect_duration',
            'label' => 'Effect Duration',
            'name' => 'effect_duration',
            'type' => 'text',
            'placeholder' => '3 - 4 maanden',
          ),
          array(
            'key' => 'field_treatment_duration',
            'label' => 'Treatment Duration',
            'name' => 'treatment_duration',
            'type' => 'text',
            'placeholder' => '15 minuten',
          ),
        ),
      ),

      // Why Section
      array(
        'key' => 'field_why_section',
        'label' => 'Why Section (Waarom)',
        'name' => 'why_section',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'field_why_title',
            'label' => 'Title',
            'name' => 'why_title',
            'type' => 'text',
          ),
          array(
            'key' => 'field_why_content',
            'label' => 'Content',
            'name' => 'why_content',
            'type' => 'wysiwyg',
            'toolbar' => 'basic',
            'media_upload' => 0,
          ),
        ),
      ),

      // FAQs
      array(
        'key' => 'field_faqs',
        'label' => 'FAQs Section',
        'name' => 'faqs',
        'type' => 'group',
        'sub_fields' => array(
          array(
            'key' => 'field_faq_title',
            'label' => 'FAQ Section Title',
            'name' => 'faq_title',
            'type' => 'text',
            'default_value' => 'Veelgestelde vragen',
          ),
          array(
            'key' => 'field_faq_items',
            'label' => 'FAQ Items',
            'name' => 'faq_items',
            'type' => 'repeater',
            'button_label' => 'Add FAQ',
            'sub_fields' => array(
              array(
                'key' => 'field_faq_question',
                'label' => 'Question',
                'name' => 'question',
                'type' => 'text',
              ),
              array(
                'key' => 'field_faq_answer',
                'label' => 'Answer',
                'name' => 'answer',
                'type' => 'wysiwyg',
                'toolbar' => 'basic',
                'media_upload' => 0,
              ),
            ),
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-treatment.php',
        ),
      ),
    ),
  ));
}
