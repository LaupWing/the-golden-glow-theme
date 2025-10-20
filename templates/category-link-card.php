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

// Static button settings
$button_text = 'Maak een afspraak';
$button_url = 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';

// Background image
$bg_image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/Banner-768x1052-1.jpg');
?>

<article class="relative flex flex-col items-center justify-center p-8 md:p-12 min-h-[250px] overflow-hidden bg-primary">

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
    <?php endif; ?>

    <!-- Category Title Link -->
    <h2 class="relative z-10 font-heading text-xl md:text-2xl text-white text-center mb-6">
        <a href="<?php echo esc_url($url); ?>" class="hover:opacity-80 transition-opacity">
            <?php echo esc_html($title); ?>
        </a>
    </h2>

    <!-- CTA Button -->
    <a
        href="<?php echo esc_url($button_url); ?>"
        class="relative z-10 inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
        rel="noopener">
        <?php echo esc_html($button_text); ?>
    </a>

</article>