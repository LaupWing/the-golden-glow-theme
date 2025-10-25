<?php

/**
 * After Treatment Section
 * Displays important details after treatment with icons
 */

$custom_class = $args['custom_class'] ?? '';
?>

<section id="nazorg" class="section-padding bg-white <?php echo esc_attr($custom_class); ?>">
    <div class="container mx-auto px-[5%]">

        <!-- Section Title -->
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading text-primary text-center mb-12">
            BELANGRIJKE DETAILS NA DE BEHANDELING
        </h2>

        <!-- Grid of After-care Instructions -->
        <div class="grid grid-cols-2 mx-auto max-w-xl md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-10 lg:gap-12">

            <!-- 1. Use SPF-50 -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-1.png"
                        alt="Gebruik SPF-50"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    Gebruik <br> SPF-50
                </p>
            </div>

            <!-- 2. No makeup for 24 hours -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-2.png"
                        alt="24 uur geen make-up"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    24 uur <br> geen make-up
                </p>
            </div>

            <!-- 3. No smoking for 48 hours -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-3.png"
                        alt="48 uur niet roken"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    48 uur <br> niet roken
                </p>
            </div>

            <!-- 4. No sauna/sunbed for 1 week -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-4.png"
                        alt="Geen sauna en zonnebank"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    1 week geen sauna en zonnebank
                </p>
            </div>

            <!-- 5. No alcohol for 48 hours -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-5.png"
                        alt="48 uur geen alcohol"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    48 uur <br> geen alcohol
                </p>
            </div>

            <!-- 6. Use coldpack -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-6.png"
                        alt="Gebruik coldpack"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    Gebruik coldpack om goed te koelen
                </p>
            </div>

            <!-- 7. No sports for 24 hours -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-7.png"
                        alt="24 uur niet sporten"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    24 uur <br> niet sporten
                </p>
            </div>

            <!-- 8. No massage for 2 weeks -->
            <div class="flex flex-col items-center text-center">
                <div class="mb-4 flex-shrink-0">
                    <img src="<?php echo esc_url(wp_upload_dir()['baseurl']); ?>/important-8.png"
                        alt="2 weken niet masseren"
                        class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 object-contain min-w-[128px] min-h-[128px] md:min-w-[160px] md:min-h-[160px]"
                        loading="lazy">
                </div>
                <p class="text-sm md:text-base text-text font-medium">
                    2 weken <br> niet masseren
                </p>
            </div>

        </div>
    </div>
</section>