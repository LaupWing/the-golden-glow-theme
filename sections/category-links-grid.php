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
        <!-- Mobile Version: Simple alternating -->
        <div class="grid grid-cols-1 md:hidden gap-6">
            <?php
            foreach ($categories as $index => $category) {
                // Mobile: Simple alternating (0, 2, 4... get background)
                $category['has_background'] = ($index % 2 === 0);

                // Determine which card template to use
                $template_name = $card_type === 'card-2' ? 'templates/category-link-card-2' : 'templates/category-link-card';

                get_template_part($template_name, null, $category);
            }
            ?>
        </div>

        <!-- Desktop Version: Checkerboard pattern -->
        <div class="hidden md:grid grid-cols-2 gap-6">
            <?php
            foreach ($categories as $index => $category) {
                // Desktop: Checkerboard pattern for 2-column grid
                // Calculate row and column position
                $row = floor($index / 2);
                $col = $index % 2;
                // Checkerboard: background when row + col is even
                $category['has_background'] = (($row + $col) % 2 === 0);

                // Determine which card template to use
                $template_name = $card_type === 'card-2' ? 'templates/category-link-card-2' : 'templates/category-link-card';

                get_template_part($template_name, null, $category);
            }
            ?>
        </div>
    </div>
</section>
