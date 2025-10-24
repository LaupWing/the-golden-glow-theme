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
$full_height_image = $args['full_height_image'] ?? true; // Toggle for full-height image
$button_below_text = $args['button_below_text'] ?? false; // Toggle to place button below text instead of centered at bottom

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
        <!-- Two Column Layout: Text + Image -->
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-stretch mb-8">

            <!-- Text Content Column -->
            <div class="space-y-6 flex flex-col">
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

                <?php if ($button_below_text): ?>
                    <!-- CTA Button - Below Text -->
                    <div class="pt-4 mt-auto">
                        <a
                            href="<?php echo esc_url($button_url); ?>"
                            class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                            rel="noopener">
                            <?php echo esc_html($button_text); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Image Column -->
            <div class="flex items-start justify-end <?php echo $full_height_image ? 'h-full' : ''; ?>">
                <?php if ($use_grid): ?>
                    <!-- Image Grid: 2 columns on mobile, 4 columns on desktop -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full max-w-full h-full content-between">
                        <?php foreach ($images as $image): ?>
                            <div class="aspect-square overflow-hidden">
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
                        class="max-w-full max-h-full <?php echo $full_height_image ? 'w-auto h-full object-cover' : 'h-auto w-auto'; ?> rounded-xl">
                <?php endif; ?>
            </div>

        </div>

        <?php if (!$button_below_text): ?>
            <!-- CTA Button - Centered Below Columns -->
            <div class="text-center">
                <a
                    href="<?php echo esc_url($button_url); ?>"
                    class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                    rel="noopener">
                    <?php echo esc_html($button_text); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>