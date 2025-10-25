<?php

/**
 * Template Part: Treatment Summary
 *
 * Displays a summary grid with treatment information
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$price = $args['price'] ?? '';
$duration = $args['duration'] ?? '';
$checkup = $args['checkup'] ?? '';
$effect = $args['effect'] ?? '';
$show_background = $args['show_background'] ?? true;
$custom_class = $args['custom_class'] ?? '';

// Determine background class
$bg_class = $show_background ? 'bg-white' : '';
?>

<!-- Treatment Summary Section -->
<section class="section-padding <?php echo esc_attr($bg_class); ?> <?php echo esc_attr($custom_class); ?>">
    <div class="container mx-auto px-[5%]">

        <?php if ($title): ?>
            <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold text-primary text-center mb-8">
                <?php echo esc_html($title); ?>
            </h2>
        <?php endif; ?>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-5xl mx-auto">

            <!-- Price Column -->
            <?php if ($price): ?>
                <div class="text-center space-y-3">
                    <h3 class="font-heading text-2xl md:text-[25px] text-secondary font-semibold">
                        Prijs
                    </h3>
                    <div class="border-l-2 border-r-2 md:border-l-0 border-primary">
                        <p class="font-accent text-lg md:text-[23px] font-semibold leading-[26px] text-primary">
                            <?php echo esc_html($price); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Duration Column -->
            <?php if ($duration): ?>
                <div class="text-center space-y-3">
                    <h3 class="font-heading text-2xl md:text-[25px] text-secondary font-semibold">
                        Duur
                    </h3>
                    <div class="border-r-2 border-primary">
                        <p class="font-accent text-lg md:text-[23px] font-semibold leading-[26px] text-primary">
                            <?php echo esc_html($duration); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Checkup Column -->
            <?php if ($checkup): ?>
                <div class="text-center space-y-3">
                    <h3 class="font-heading text-2xl md:text-[25px] text-secondary font-semibold">
                        Controle
                    </h3>
                    <div class="border-l-2 border-r-2 md:border-l-0 border-primary">
                        <p class="font-accent text-lg md:text-[23px] font-semibold leading-[26px] text-primary">
                            <?php echo esc_html($checkup); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Effect Column -->
            <?php if ($effect): ?>
                <div class="text-center space-y-3">
                    <h3 class="font-heading text-2xl md:text-[25px] text-secondary font-semibold">
                        Effect
                    </h3>
                    <div class="border-r-2 md:border-r-0 border-primary">
                        <p class="font-accent text-lg md:text-[23px] font-semibold leading-[26px] text-[#CB6843]">
                            <?php echo esc_html($effect); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>