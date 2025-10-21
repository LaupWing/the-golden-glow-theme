<?php

/**
 * Template Name: Lasers Page
 * Template for displaying the Lasers page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Lasers'
]);
?>

<?php
get_template_part('templates/category-intro', null, [
    'title' => 'LASERBEHANDELINGEN AMSTERDAM',
    'content' => '<p>Bij The Golden Glow werken we met geavanceerde technologieën om de huid op een effectieve en niet-invasieve manier te verbeteren en te verstrakken. Wij bieden twee innovatieve behandelingen aan: de Endolift-laser en de Tixel. Endolift werkt van binnenuit met een ultrafijne laservezel die onder de huid wordt ingebracht. Deze stimuleert de collageenaanmaak, zorgt voor huidverstrakking en breekt plaatselijk vet af – met zowel direct zichtbaar als langdurig resultaat. De Tixel daarentegen werkt van buitenaf en gebruikt gecontroleerde warmte om zonder naalden of laserlicht de huidstructuur te verbeteren, poriën te verfijnen en celvernieuwing te stimuleren. Deze behandeling is bijzonder geschikt voor fijne lijntjes, pigmentvlekken en een doffe huid. Beide methoden dragen bij aan een blijvend steviger en stralender huidbeeld.</p>',
    'image_filename' => 'lasers-intro.png'
]);
?>

<?php
get_template_part('sections/happy-customers-section', null, [
    'title' => 'Onze tevreden klanten',
    'columns' => 2,
    'images' => [
        [
            'filename' => 'lasers-happy-customer-2.jpg',
            'alt' => 'lasers_endolift_voor_en_na'
        ],
        [
            'filename' => 'lasers-happy-customer-1.png',
            'alt' => 'Endolift behandeling before and after'
        ]
    ]
]);
?>

<?php get_footer(); ?>
