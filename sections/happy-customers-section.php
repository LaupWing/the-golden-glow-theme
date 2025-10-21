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
$columns = $args['columns'] ?? 4;
?>

<!-- Happy Customers Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold text-primary text-center mb-12">
            <?php echo esc_html($title); ?>
        </h2>

        <?php
        $images = $args['images'] ?? [];

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
