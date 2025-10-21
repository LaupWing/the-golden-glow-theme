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

<?php
get_template_part('sections/text-content-section', null, [
    'title' => 'Waarom biostimulatie?',
    'content' => '<p>Biostimulatie is dé keuze als je je huid op een natuurlijke manier wilt verjongen en versterken. Door biostimulatie stimuleer je het lichaam om zelf weer essentiële bouwstenen als collageen, elastine en hyaluronzuur aan te maken. Dit zorgt voor een stevigere, gladdere en veerkrachtigere huid met een frisse uitstraling. Je profiteert van langdurige verbetering zonder ingrijpende behandelingen. Biostimulatie pakt zo huidveroudering en volumeverlies bij de bron aan en biedt een zichtbaar, natuurlijk resultaat.</p>'
]);
?>

<?php get_template_part('sections/clinic-section'); ?>

<?php
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over Sculptra',
    'faqs' => [
        [
            'question' => 'Is biostimulatie geschikt voor iedereen?',
            'answer' => '<p>De meeste mensen kunnen veilig gebruikmaken van biostimulatie. Er zijn echter enkele uitzonderingen, zoals zwangerschap. Tijdens een consult wordt altijd gekeken of de behandeling geschikt is.</p>'
        ],
        [
            'question' => 'Waar wordt biostimulatie voor gebruikt?',
            'answer' => '<p>Biostimulatie wordt toegepast bij:</p><p>1) Huidverjonging<br>2) Littekenbehandeling<br>3) Acné en rosacea<br>4) Spier- en gewrichtspijn<br>5) Wondgenezing</p>'
        ],
        [
            'question' => 'Is biostimulatie pijnlijk?',
            'answer' => '<p>biostimulatie is over het algemeen volledig pijnloos. Veel mensen ervaren de behandeling als aangenaam en ontspannend. Soms voel je lichte warmte of tinteling, afhankelijk van de gebruikte methode.</p>'
        ],
        [
            'question' => 'Hoeveel behandelingen heb ik nodig?',
            'answer' => '<p>Dat hangt af van het behandeldoel en je individuele reactie. Voor huidverbetering zijn vaak 4 tot 6 sessies nodig, terwijl bij spierherstel soms al na 1 tot 2 behandelingen verbetering merkbaar is. Tijdens het consult wordt een persoonlijk behandelplan opgesteld.</p>'
        ],
        [
            'question' => 'Wat is het verschil tussen biostimulatie en lasertherapie?',
            'answer' => '<p>Lasertherapie is een specifieke vorm van biostimulatie. Het verschil zit vooral in de gebruikte technologie en het doel van de behandeling. Biostimulatie omvat meerdere technieken (zoals LED-licht, elektrische stimulatie en laser), terwijl lasertherapie zich specifiek richt op geconcentreerde lichtstralen voor bijvoorbeeld huidverjonging of wondgenezing.</p>'
        ]
    ]
]);
?>

<?php
// Reviews Section
get_template_part('sections/reviews-section');
?>

<?php get_footer(); ?>