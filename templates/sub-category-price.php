<?php

/**
 * Template Part: Sub-Category Price Card
 *
 * Displays a pricing card with treatment details
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$price = $args['price'] ?? '';
$anesthesia = $args['anesthesia'] ?? '';
$checkup = $args['checkup'] ?? '';
$effect_duration = $args['effect_duration'] ?? '';
$treatment_duration = $args['treatment_duration'] ?? '';
$button_text = $args['button_text'] ?? 'MAAK EEN AFSPRAAK';
$button_url = $args['button_url'] ?? 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';
$custom_class = $args['custom_class'] ?? '';
?>

<!-- Price Card Section -->
<section class="section-padding <?php echo esc_attr($custom_class); ?>" id="prijzen">
    <div class="container mx-auto px-[5%]">
        <article class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">

            <!-- Header -->
            <?php if ($title): ?>
                <header class="bg-primary text-white text-center py-6 px-6">
                    <h3 class="font-heading text-xl md:text-2xl font-semibold">
                        <?php echo esc_html($title); ?>
                    </h3>
                </header>
            <?php endif; ?>

            <!-- Price -->
            <?php if ($price): ?>
                <div class="text-center py-8 px-6 border-b border-gray-200">
                    <p class="text-5xl md:text-6xl font-heading font-bold text-primary">
                        <span class="text-3xl md:text-4xl align-top">€</span><?php echo esc_html($price); ?>
                    </p>
                </div>
            <?php endif; ?>

            <!-- Features List -->
            <ul class="py-6 px-6 space-y-4">
                <?php if ($anesthesia): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" aria-hidden="true" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M507.31 185.71l-181-181a16 16 0 0 0-22.62 0L281 27.31a16 16 0 0 0 0 22.63l181 181a16 16 0 0 0 22.63 0l22.62-22.63a16 16 0 0 0 .06-22.6zm-179.54 66.41l-67.89-67.89 55.1-55.1-45.25-45.25-109.67 109.67a96.08 96.08 0 0 0-25.67 46.29L106.65 360.1l-102 102a16 16 0 0 0 0 22.63l22.62 22.62a16 16 0 0 0 22.63 0l102-102 120.25-27.75a95.88 95.88 0 0 0 46.29-25.65l109.68-109.68L382.87 197zm-54.57 54.57a32 32 0 0 1-15.45 8.54l-79.3 18.32 18.3-79.3a32.22 32.22 0 0 1 8.56-15.45l9.31-9.31 67.89 67.89z"></path>
                        </svg>
                        <span class="text-body-text">
                            <strong>Verdoving:</strong> <?php echo esc_html($anesthesia); ?>
                        </span>
                    </li>
                <?php endif; ?>

                <?php if ($checkup): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" aria-hidden="true" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"></path>
                        </svg>
                        <span class="text-body-text">
                            <strong>Controle:</strong> <?php echo esc_html($checkup); ?>
                        </span>
                    </li>
                <?php endif; ?>

                <?php if ($effect_duration): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" aria-hidden="true" fill="currentColor" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path>
                        </svg>
                        <span class="text-body-text">
                            <strong>Duur van het effect:</strong> <?php echo esc_html($effect_duration); ?>
                        </span>
                    </li>
                <?php endif; ?>

                <?php if ($treatment_duration): ?>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" aria-hidden="true" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                        </svg>
                        <span class="text-body-text">
                            <strong>Behandelingsduur:</strong> <?php echo esc_html($treatment_duration); ?>
                        </span>
                    </li>
                <?php endif; ?>
            </ul>

            <!-- Footer CTA -->
            <footer class="px-6 pb-6 pt-2">
                <a
                    href="<?php echo esc_url($button_url); ?>"
                    class="block w-full text-center bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                    rel="noopener">
                    <?php echo esc_html($button_text); ?>
                </a>
            </footer>

        </article>
    </div>
</section>