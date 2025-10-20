<?php

/**
 * Template part for displaying a certification card
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
if (!isset($args['cert'])) {
    return;
}

$cert = $args['cert'];
$bg_image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/vogels.png');
?>

<article class="relative bg-primary text-white p-8 rounded-lg overflow-hidden min-h-[160px] flex flex-col justify-center">
    <!-- Background Image - decorative only, hidden from screen readers -->
    <div class="absolute inset-0 opacity-80 pointer-events-none" aria-hidden="true">
        <img
            src="<?php echo $bg_image_url; ?>"
            alt=""
            loading="lazy"
            decoding="async"
            class="w-full h-full object-cover">
    </div>

    <!-- Content - positioned above background -->
    <div class="relative z-10 flex items-center flex-col justify-center">
        <h3 class="font-heading text-2xl md:text-3xl mb-3">
            <?php echo esc_html($cert['title']); ?>
        </h3>
        <a href="<?php echo esc_url($cert['url']); ?>"
            class="text-white underline hover:no-underline"
            target="_blank"
            rel="noopener"
            aria-label="<?php echo esc_attr('Bezoek ' . $cert['title'] . ' - ' . $cert['description']); ?>">
            <?php echo esc_html($cert['description']); ?>
        </a>
    </div>
</article>