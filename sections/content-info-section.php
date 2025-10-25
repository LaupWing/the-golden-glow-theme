<?php

/**
 * Template part for displaying a content info section
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$content = $args['content'] ?? '';
$image_filename = $args['image_filename'] ?? 'arwind4.png';
$content_position = $args['content_position'] ?? 'left'; // 'left' or 'right'
$custom_class = $args['custom_class'] ?? '';

// Static button settings
$button_text = 'MAAK EEN AFSPRAAK';
$button_url = 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';

// Get image URL
$image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/' . $image_filename);

// Determine order class based on content position
$content_order_class = $content_position === 'right' ? 'lg:order-2' : '';
$image_order_class = $content_position === 'right' ? 'lg:order-1' : '';
?>

<section class="section-padding <?php echo esc_attr($custom_class); ?>">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <!-- Text Content Column -->
            <div class="space-y-6 <?php echo esc_attr($content_order_class); ?>">
                <?php if ($content): ?>
                    <div class="prose prose-lg max-w-none text-body-text space-y-4">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Image Column -->
            <div class="flex items-center justify-center <?php echo esc_attr($image_order_class); ?>">
                <img
                    src="<?php echo $image_url; ?>"
                    alt=""
                    loading="lazy"
                    decoding="async"
                    class="w-full h-auto mx-auto rounded-xl">
            </div>

        </div>

        <!-- CTA Button (centered below content and image) -->
        <div class="text-center pt-8">
            <a
                href="<?php echo esc_url($button_url); ?>"
                class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                rel="noopener">
                <?php echo esc_html($button_text); ?>
            </a>
        </div>
    </div>
</section>