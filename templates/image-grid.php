<?php

/**
 * Template Part: Image Grid
 *
 * Displays a responsive grid of images
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$images = $args['images'] ?? [];
$columns = $args['columns'] ?? 2; // Default to 2 columns
$gap = $args['gap'] ?? 'gap-4'; // Default gap

// Set grid columns class based on columns parameter
$grid_cols_class = match ($columns) {
    1 => 'grid-cols-1',
    2 => 'grid-cols-2',
    3 => 'grid-cols-3',
    4 => 'grid-cols-2 md:grid-cols-4',
    default => 'grid-cols-2',
};

$upload_url = wp_get_upload_dir()['baseurl'];
?>

<div class="grid <?php echo esc_attr($grid_cols_class); ?> <?php echo esc_attr($gap); ?>">
    <?php foreach ($images as $image): ?>
        <div>
            <img
                src="<?php echo esc_url($upload_url . '/' . $image['filename']); ?>"
                alt="<?php echo esc_attr($image['alt'] ?? 'bodyfillers'); ?>"
                loading="lazy"
                decoding="async"
                class="w-full h-auto">
        </div>
    <?php endforeach; ?>
</div>