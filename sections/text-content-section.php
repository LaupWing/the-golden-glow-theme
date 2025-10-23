<?php

/**
 * Template Part: Text Content Section
 *
 * Displays a centered text content section with title and content
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$show_background = $args['show_background'] ?? true;

// Determine background class
$bg_class = $show_background ? 'bg-background' : '';
?>

<!-- Text Content Section -->
<section class="py-12 md:py-16 lg:py-20 <?php echo esc_attr($bg_class); ?>">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto">
            <?php if ($title): ?>
                <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-6 text-center">
                    <?php echo esc_html($title); ?>
                </h2>
            <?php endif; ?>
            <?php if ($content): ?>
                <div class="prose prose-lg max-w-none text-body-text space-y-4">
                    <?php echo wp_kses_post($content); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>