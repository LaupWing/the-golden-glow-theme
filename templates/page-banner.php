<?php

/**
 * Template part for displaying a page banner
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? get_the_title();
$bg_image_url = esc_url(get_template_directory_uri() . '/assets/images/banner-bg.jpg');
?>

<section
    class="relative w-full flex items-center justify-center bg-primary overflow-hidden"
    role="banner"
    aria-labelledby="banner-title">

    <!-- Background Image - decorative, optimized for SEO -->
    <div class="absolute inset-0 opacity-30 pointer-events-none" aria-hidden="true">
        <img
            src="<?php echo $bg_image_url; ?>"
            alt=""
            loading="eager"
            decoding="async"
            fetchpriority="high"
            class="w-full h-full object-cover">
    </div>

    <!-- Banner Content -->
    <div class="relative z-10 container mx-auto px-4 py-8 md:py-12 text-center">
        <h1 id="banner-title" class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold text-white">
            <?php echo esc_html($title); ?>
        </h1>
    </div>
</section>