<?php

/**
 * Template part for displaying a category introduction section
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$image_filename = $args['image_filename'] ?? 'arwind4.png';
$images = $args['images'] ?? []; // Multiple images for grid

// Static button settings
$button_text = 'MAAK EEN AFSPRAAK';
$button_url = 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';

// Determine if using single image or grid
$use_grid = !empty($images);

// Get image URL for single image
$image_url = esc_url(wp_get_upload_dir()['baseurl'] . '/' . $image_filename);
$upload_url = wp_get_upload_dir()['baseurl'];
?>

<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">

            <!-- Text Content Column -->
            <div class="space-y-6">
                <?php if ($title): ?>
                    <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary break-words overflow-wrap-anywhere">
                        <?php echo esc_html($title); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($content): ?>
                    <div class="prose prose-lg max-w-none text-body-text space-y-4">
                        <?php echo wp_kses_post($content); ?>
                    </div>
                <?php endif; ?>

                <!-- CTA Button -->
                <div class="text-center pt-4">
                    <a
                        href="<?php echo esc_url($button_url); ?>"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                        rel="noopener">
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>

            <!-- Image Column -->
            <div class="flex items-center justify-center">
                <?php if ($use_grid): ?>
                    <!-- Image Grid: 2 columns on mobile, 4 columns on desktop -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full">
                        <?php foreach ($images as $image): ?>
                            <div class="aspect-square">
                                <img
                                    src="<?php echo esc_url($upload_url . '/' . $image['filename']); ?>"
                                    alt="<?php echo esc_attr($image['alt'] ?? ''); ?>"
                                    width="800"
                                    height="800"
                                    loading="lazy"
                                    decoding="async"
                                    class="w-full h-full object-cover rounded-lg">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <!-- Single Image -->
                    <img
                        src="<?php echo $image_url; ?>"
                        alt=""
                        loading="lazy"
                        decoding="async"
                        class="w-full h-auto max-w-md mx-auto rounded-xl">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>