<?php

/**
 * Template Name: Biostimulatie Page
 * Template for displaying the Biostimulatie page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Biostimulatie'
]);
?>

<?php
get_template_part('templates/category-intro', null, [
    'title' => 'Wat is biostimulatie?',
    'content' => '<p>Ontdek biostimulatie – de kunst van natuurlijke huidverjonging op topniveau. Je huid is opgebouwd uit drie essentiële elementen: hyaluronzuur, elastine en collageen. De hoeveelheid hiervan bepaalt hoe stevig, veerkrachtig en gehydrateerd je huid oogt. Ons lichaam kan van nature zelf hyaluronzuur, collageen en elastine aanmaken: dé bouwstenen voor een jeugdige, frisse huid. Met biostimulatie stimuleren wij dit natuurlijke herstelvermogen van binnenuit. Door gericht biostimulatoren te injecteren, activeren we de productie van deze stoffen voor een langdurige en natuurlijke huidverbetering van gezicht en lichaam. Iedere huid is uniek, daarom werken wij in onze kliniek in Amsterdam met verschillende biostimulatoren en skinboosters die aansluiten op jouw huidbehoefte. Zo gebruiken we PNR voor de aanmaak van hyaluronzuur en hydratatie, Prophilo en PNR voor elastine, en PNR, Sculptra, Lanluma, Radiesse, Prophilo en PDO (polydioxanone) om de collageenproductie te stimuleren. Na een uitgebreide huidanalyse waarbij wordt gekeken naar leeftijd, huidconditie, elasticiteit en leefstijl stellen we een persoonlijk biostimulatieplan op voor het mooiste, meest natuurlijke resultaat.</p>',
    'image_filename' => 'biostimulatie-intro.jpg'
]);
?>

<!-- Full Width Image Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <img
            src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/skinboosters_vergelijkingstabel.png'); ?>"
            alt="Skinboosters vergelijkingstabel"
            loading="lazy"
            decoding="async"
            class="w-full h-auto">
    </div>
</section>

<?php
get_template_part('sections/happy-customers-section', null, [
    'title' => 'Onze tevreden klanten',
    'images' => [
        [
            'filename' => 'biostimulatie-happy-customer-1.png',
            'alt' => 'Biostimulatie behandeling resultaat'
        ],
        [
            'filename' => 'biostimulatie-happy-customer-2.png',
            'alt' => 'Biostimulatie behandeling resultaat'
        ],
        [
            'filename' => 'biostimulatie-happy-customer-3.png',
            'alt' => 'Biostimulatie behandeling resultaat'
        ]
    ]
]);
?>

<?php
get_template_part('sections/category-links-grid', null, [
    'categories' => [
        [
            'title' => 'SCULPTRA',
            'url' => '/sculptra/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'LANLUMA',
            'url' => '/lanluma/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'PDO',
            'url' => '/pdo/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'PNR',
            'url' => '/pdrn/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'PROFHILO',
            'url' => '/profhilo/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'RADIESSE',
            'url' => '/radiesse/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'PRP/PRF',
            'url' => '/prp-prf/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'SKINBOOSTER',
            'url' => '/skinbooster/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'Ellansé',
            'url' => '/ellanse/',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ]
    ]
]);
?>

<?php get_footer(); ?>
