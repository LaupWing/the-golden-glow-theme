<?php

/**
 * Template part for displaying a category link card with description
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$url = $args['url'] ?? '#';
$description = $args['description'] ?? '';
$has_background = $args['has_background'] ?? false;

// Background image
$bg_image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/banner-pauw.jpg');
?>

<a href="<?php echo esc_url($url); ?>" class="block group">
    <article class="relative flex flex-col p-6 md:p-8 min-h-[400px] bg-background rounded-2xl overflow-hidden transition-all duration-300 outline-2 outline-transparent outline-offset-2 hover:outline-primary">

        <?php if ($has_background): ?>
            <!-- Background Image -->
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
                <img
                    src="<?php echo $bg_image_url; ?>"
                    alt=""
                    loading="lazy"
                    decoding="async"
                    class="w-full h-full object-cover">
            </div>
            <!-- Black Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent pointer-events-none" aria-hidden="true"></div>
        <?php endif; ?>

        <!-- Category Title -->
        <h2 class="relative z-10 font-heading text-2xl md:text-3xl lg:text-4xl <?php echo $has_background ? 'text-white' : 'text-primary'; ?> mb-4 text-center transition-all group-hover:scale-105">
            <?php echo esc_html($title); ?>
        </h2>

        <!-- Description -->
        <?php if ($description): ?>
            <div class="relative z-10 <?php echo $has_background ? 'text-white' : 'text-body-text'; ?> leading-relaxed flex-grow text-center">
                <p><?php echo esc_html($description); ?></p>
            </div>
        <?php endif; ?>

    </article>
</a>
