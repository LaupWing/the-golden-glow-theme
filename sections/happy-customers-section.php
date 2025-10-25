<?php

/**
 * Template Part: Happy Customers Section
 *
 * Displays a section header for happy customers/testimonials
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? 'Onze tevreden klanten';
$content = $args['content'] ?? '';
$images = $args['images'] ?? [];
$custom_class = $args['custom_class'] ?? '';

// Calculate columns dynamically based on image count, max out at 4
$image_count = count($images);
$columns = min($image_count, 4);
?>

<!-- Happy Customers Section -->
<section class="section-padding <?php echo esc_attr($custom_class); ?>">
    <div class="container mx-auto px-[5%]">
        <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold text-primary text-center mb-6">
            <?php echo esc_html($title); ?>
        </h2>

        <?php if (!empty($content)): ?>
            <p class="text-center text-body-text max-w-3xl mx-auto mb-6">
                <?php echo esc_html($content); ?>
            </p>
        <?php endif; ?>

        <?php
        // Only display image grid if images are provided
        if (!empty($images)) {
            get_template_part('templates/image-grid', null, [
                'images' => $images,
                'columns' => $columns,
                'gap' => 'gap-4'
            ]);
        }
        ?>
    </div>
</section>