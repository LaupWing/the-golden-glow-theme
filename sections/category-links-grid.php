<?php
/**
 * Template Part: Category Links Grid
 *
 * Displays a grid of category link cards with alternating backgrounds
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$categories = $args['categories'] ?? [];
$card_type = $args['card_type'] ?? 'default'; // 'default' or 'card-2'
?>

<!-- Category Links Grid -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid md:grid-cols-2 gap-6">
            <?php
            foreach ($categories as $index => $category) {
                // Simple alternating pattern that works on both mobile and desktop
                // Even indices (0, 2, 4...) get background
                // Odd indices (1, 3, 5...) don't get background
                $category['has_background'] = ($index % 2 === 0);

                // Determine which card template to use
                $template_name = $card_type === 'card-2' ? 'templates/category-link-card-2' : 'templates/category-link-card';

                get_template_part($template_name, null, $category);
            }
            ?>
        </div>
    </div>
</section>
