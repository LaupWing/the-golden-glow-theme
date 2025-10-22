<?php

/**
 * Template Part: Blog Card 2
 *
 * Displays a blog post card with card-style layout
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
$date = get_the_date('d/m/Y', $post_id);
?>

<article class="relative flex flex-col cursor-pointer group">
    <!-- Clickable overlay -->
    <a href="<?php echo esc_url($permalink); ?>"
       class="absolute inset-0 z-10"
       aria-label="<?php echo esc_attr(sprintf(__('Lees meer over %s', 'the_golden_glow'), $title)); ?>">
        <span class="sr-only"><?php echo esc_html($title); ?></span>
    </a>

    <!-- Card Container -->
    <div class="elementor-post__card bg-white border-0 rounded-[3px] flex flex-col min-h-full overflow-hidden relative transition-all duration-250 shadow-[0_0_10px_0_rgba(0,0,0,0.15)] group-hover:shadow-[0_0_30px_0_rgba(0,0,0,0.15)]">

        <!-- Text Content -->
        <div class="elementor-post__text flex flex-col flex-grow mt-5 px-7.5 relative z-0">

            <!-- Title -->
            <h1 class="elementor-post__title font-heading text-[21px] font-semibold text-secondary m-0 mb-6 leading-snug group-hover:text-gray-500 transition-colors">
                <?php echo esc_html($title); ?>
            </h1>

            <!-- Read More Link -->
            <span class="elementor-post__read-more inline-block self-start text-xs font-bold uppercase text-primary mb-5 group-hover:text-accent transition-colors">
                Lees verder »
            </span>

        </div>

        <!-- Meta Data -->
        <div class="elementor-post__meta-data border-t border-gray-200 mt-auto mb-0 py-4 px-7.5 text-xs text-gray-400 leading-tight relative z-0">
            <span class="elementor-post-date">
                <?php echo esc_html($date); ?>
            </span>
        </div>

    </div>
</article>
