<?php

/**
 * Template part for displaying FAQ section
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? 'Veelgestelde vragen';
$faqs = $args['faqs'] ?? [];
?>

<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8 md:p-12">

            <!-- Section Title -->
            <h2 class="font-heading text-2xl md:text-3xl font-semibold text-primary mb-8 text-left md:text-center">
                <?php echo esc_html($title); ?>
            </h2>

            <!-- FAQ Accordion -->
            <div class="space-y-4">
                <?php foreach ($faqs as $index => $faq): ?>
                    <!-- FAQ Item -->
                    <details class="group border border-gray-200 rounded-lg overflow-hidden" <?php echo $index === 0 ? 'open' : ''; ?>>
                        <summary class="flex items-center justify-between cursor-pointer p-6 hover:bg-gray-50 transition-colors duration-200">
                            <span class="font-body font-medium text-gray-800 pr-4">
                                <?php echo esc_html($faq['question']); ?>
                            </span>
                            <span class="flex-shrink-0 w-5 h-5 text-primary">
                                <svg class="w-5 h-5 group-open:hidden" fill="currentColor" viewBox="0 0 448 512" aria-hidden="true">
                                    <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                </svg>
                                <svg class="w-5 h-5 hidden group-open:block" fill="currentColor" viewBox="0 0 448 512" aria-hidden="true">
                                    <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                </svg>
                            </span>
                        </summary>
                        <div class="px-6 pb-6 text-gray-700 leading-relaxed">
                            <?php echo wp_kses_post($faq['answer']); ?>
                        </div>
                    </details>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>