<?php

/**
 * Template Part: Blog Card
 *
 * Displays a single blog post card
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$post_id = $args['post_id'] ?? get_the_ID();
$post = get_post($post_id);

if (!$post) {
    return;
}

// Get post data
$title = get_the_title($post_id);
$permalink = get_permalink($post_id);
$author = get_the_author_meta('display_name', $post->post_author);
$date = get_the_date('d/m/Y', $post_id);
$excerpt = get_the_excerpt($post_id);

// Ensure excerpt ends properly if it's cut off
if (!empty($excerpt) && strlen($excerpt) > 150) {
    $excerpt = substr($excerpt, 0, 150);
    // Find last space to avoid cutting words
    $last_space = strrpos($excerpt, ' ');
    if ($last_space !== false) {
        $excerpt = substr($excerpt, 0, $last_space);
    }
}
?>

<article class="relative flex flex-col bg-background border border-background rounded-[10px] p-2.5 transition-all duration-250 hover:shadow-lg cursor-pointer group">
    <!-- Clickable overlay -->
    <a href="<?php echo esc_url($permalink); ?>"
       class="absolute inset-0 z-10"
       aria-label="<?php echo esc_attr(sprintf(__('Lees meer over %s', 'the_golden_glow'), $title)); ?>">
        <span class="sr-only"><?php echo esc_html($title); ?></span>
    </a>

    <div class="flex flex-col flex-grow relative z-0">
        <h3 class="font-heading text-lg font-normal text-secondary m-0 mb-3 group-hover:text-gray-500 transition-colors">
            <?php echo esc_html($title); ?>
        </h3>

        <div class="flex gap-2 text-xs leading-tight text-gray-400 mb-3">
            <span class="elementor-post-author">
                <?php echo esc_html($author); ?>
            </span>
            <span class="before:content-['-'] before:mr-2">
                <?php echo esc_html($date); ?>
            </span>
        </div>

        <div class="flex-grow mb-2.5">
            <p class="font-body text-sm leading-relaxed text-gray-500 m-0">
                <?php echo esc_html($excerpt); ?>
            </p>
        </div>

        <span class="self-start text-xs font-bold text-primary group-hover:text-accent transition-colors">
            Leer meer »
        </span>
    </div>
</article>
