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
$button_text = $args['button_text'] ?? 'Maak een afspraak'; // Editable button text
$button_url = $args['button_url'] ?? 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'; // Editable button URL

// Background image
$bg_image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/banner-pauw.jpg');
?>

<article class="relative flex flex-col p-6 md:p-8 min-h-[400px] bg-background rounded-lg overflow-hidden">

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
        <!-- Dark Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-black/35 pointer-events-none" aria-hidden="true"></div>
    <?php endif; ?>

    <!-- Category Title Link -->
    <h2 class="relative z-10 font-heading text-2xl md:text-3xl <?php echo $has_background ? 'text-white' : 'text-primary'; ?> mb-4 text-center">
        <a href="<?php echo esc_url($url); ?>" class="hover:opacity-80 transition-opacity">
            <?php echo esc_html($title); ?>
        </a>
    </h2>

    <!-- Description -->
    <?php if ($description): ?>
        <div class="relative z-10 <?php echo $has_background ? 'text-white' : 'text-gray-700'; ?> leading-relaxed mb-6 flex-grow text-center">
            <p><?php echo esc_html($description); ?></p>
        </div>
    <?php endif; ?>

    <!-- CTA Button -->
    <div class="relative z-10 text-center mt-auto">
        <a
            href="<?php echo esc_url($button_url); ?>"
            class="inline-block bg-primary text-white px-8 py-3 rounded-full font-heading font-semibold text-sm uppercase hover:opacity-90 transition-opacity duration-200"
            rel="noopener">
            <?php echo esc_html($button_text); ?>
        </a>
    </div>

</article>