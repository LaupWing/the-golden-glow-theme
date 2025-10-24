<?php

/**
 * Template part for displaying a category link card
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$url = $args['url'] ?? '#';
$has_background = $args['has_background'] ?? true;

// Background image
$bg_image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/link-card-background.jpg');
?>

<a href="<?php echo esc_url($url); ?>" class="block group">
    <article class="relative flex flex-col items-center justify-center p-8 md:p-12 min-h-[200px] overflow-hidden bg-background rounded-3xl transition-all duration-300 outline-2 outline-transparent outline-offset-2 hover:outline-primary">

        <?php if ($has_background): ?>
            <!-- Background Image -->
            <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
                <img
                    src="<?php echo $bg_image_url; ?>"
                    alt=""
                    loading="lazy"
                    decoding="async"
                    class="w-full h-full object-cover object-bottom">
            </div>

            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-transparent opacity-60 pointer-events-none" aria-hidden="true"></div>
        <?php endif; ?>

        <!-- Category Title -->
        <h2 class="relative z-10 font-heading text-2xl md:text-3xl lg:text-4xl <?php echo $has_background ? 'text-white' : 'text-primary'; ?> text-center transition-all group-hover:scale-105">
            <?php echo esc_html($title); ?>
        </h2>

    </article>
</a>