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
?>

<!-- Category Links Grid -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid md:grid-cols-2 gap-6">
            <?php
            foreach ($categories as $index => $category) {
                // Calculate row and column position
                $row = floor($index / 2);
                $col = $index % 2;

                // Alternate pattern: if even row, left has bg; if odd row, right has bg
                if ($row % 2 === 0) {
                    $category['has_background'] = ($col === 0);
                } else {
                    $category['has_background'] = ($col === 1);
                }

                get_template_part('templates/category-link-card', null, $category);
            }
            ?>
        </div>
    </div>
</section>
