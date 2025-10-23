<?php

/**
 * Template Part: Reviews Section
 *
 * Displays customer reviews with star ratings and avatars
 *
 * @package The_Golden_Glow
 */

$upload_url = wp_get_upload_dir()['baseurl'];

// Default reviews if not passed via args
$default_reviews = [
    [
        'avatar' => 'color-2.png',
        'rating' => 5,
        'text' => 'Ik ben al meer dan 10 jaar een cliënt en ik wil nooit meer anders. Prachtig gestylede kliniek waarbij hygiëne voorop staat! Arwind is persoonlijk, stelt je gerust, neemt de tijd, zet je in je kracht en zal altijd eerlijk advies geven. Als je in de stoel ligt ervaar je Professionaliteit in combinatie met een vleugje humor. Daarbij zijn de eindresultaten keer op keer uitmuntend.',
        'author' => 'Lotta',
        'align' => 'left'
    ],
    [
        'avatar' => 'color-1.png',
        'rating' => 5,
        'text' => 'Ik ben fan!! Dr.Arwind is heel erg professioneel, vriendelijk en neemt vooral zijn tijd voor zijn cliënten. Ik ben heel goed geholpen door hem en ben heel erg blij met de resultaat voor mijn behandeling. Zijn praktijk is heel goed bereikbaar. Personeel is ook heel vriendelijk. Ik raad het iedereen aan, ik ben in fan.. en niet te vergeten de tarieven zijn ook heel goed.. kortom, GEWELDIG!',
        'author' => 'Banafshe .V',
        'align' => 'right'
    ],
    [
        'avatar' => 'color-2.png',
        'rating' => 5,
        'text' => 'Heel vriendelijk ontvangen, professioneel advies en duidelijke uitleg. Zeer tevreden met het resultaat, boven verwachting!',
        'author' => 'Rene',
        'align' => 'left'
    ],
    [
        'avatar' => 'color-1.png',
        'rating' => 5,
        'text' => 'Eerste keer een spierontspannende behandeling en filler gedaan. Dit is erg deskundig gedaan met goede uitleg. (mijn dochter heeft wel 100 vragen gesteld haha)',
        'author' => 'Maaike',
        'align' => 'right'
    ]
];

// Get reviews from args or use defaults
$reviews = $args['reviews'] ?? $default_reviews;
$section_title = $args['title'] ?? 'Wat onze klanten zeggen';
$show_background = $args['show_background'] ?? false;
$bg_class = $show_background ? 'bg-background' : 'bg-white';
?>

<!-- Reviews Section -->
<section class="py-12 md:py-16 lg:py-20 <?php echo esc_attr($bg_class); ?>">
    <div class="container mx-auto px-[5%]">

        <!-- Section Title -->
        <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center text-[#CB6843] mb-12">
            <?php echo esc_html($section_title); ?>
        </h2>

        <!-- Reviews Grid -->
        <div class="grid md:grid-cols-2 gap-8">

            <?php foreach ($reviews as $index => $review) :
                $align = $review['align'] ?? ($index % 2 === 0 ? 'left' : 'right');
                $flex_class = $align === 'right' ? 'md:flex-row-reverse md:text-right' : '';
                $stars = str_repeat('★', $review['rating'] ?? 5);
            ?>

                <!-- Review <?php echo $index + 1; ?> -->
                <div class="flex items-start gap-4 bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 <?php echo esc_attr($flex_class); ?>">
                    <div class="flex-shrink-0 w-16 h-16">
                        <img src="<?php echo esc_url($upload_url . '/' . $review['avatar']); ?>"
                            alt="Review"
                            width="64"
                            height="64"
                            class="w-full h-full rounded-full object-cover"
                            loading="lazy">
                    </div>
                    <div class="flex-1">
                        <div class="text-primary text-lg mb-2" role="img" aria-label="<?php echo esc_attr($review['rating']); ?> sterren">
                            <?php echo esc_html($stars); ?>
                        </div>
                        <p class="text-body-text italic leading-relaxed">
                            "<?php echo esc_html($review['text']); ?>"
                            <?php if (!empty($review['author'])) : ?>
                                - <?php echo esc_html($review['author']); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>