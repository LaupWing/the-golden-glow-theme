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

<?php
get_template_part('sections/text-content-section', null, [
    'title' => 'Waarom kiezen voor een laserbehandeling?',
    'content' => '<p>Een laserbehandeling, zoals Tixel of Endolift, is een uitstekende keuze voor wie de huid zichtbaar wil verjongen en verstevigen zonder ingrijpende ingrepen of lange hersteltijd. Beide behandelingen stimuleren de natuurlijke processen van de huid – zoals collageenaanmaak en celvernieuwing – en zorgen voor een frissere, strakkere huid met langdurig resultaat. Of je nu last hebt van huidverslapping, fijne lijntjes, pigmentvlekken of dofheid: met een laserbehandeling pak je deze effectief en veilig aan.</p>'
]);
?>

<?php
get_template_part('sections/category-links-grid', null, [
    'card_type' => 'card-2',
    'categories' => [
        [
            'title' => 'TIXEL',
            'url' => '/tixel/',
            'description' => 'Tixel is een innovatieve huidverjongingsbehandeling die met gecontroleerde warmte fijne lijntjes, rimpels en huidstructuur aanpakt. Deze methode stimuleert de natuurlijke collageenaanmaak',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ],
        [
            'title' => 'ENDOLIFT',
            'url' => '/endolift/',
            'description' => 'Bij Endolift Amsterdam zorgen voor een blijvend resultaat. Zie de voor en na resultaten van de Endolaser en laat je overtuigen door de prachtige contouren. De Endolift is het alternatief voor een facelift.',
            'button_text' => 'Maak een afspraak',
            'button_url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL'
        ]
    ]
]);
?>

<?php get_template_part('sections/clinic-section'); ?>

<?php
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over Laserbehandeling',
    'faqs' => [
        [
            'question' => 'Is het geschikt voor iedereen?',
            'answer' => '<p>De behandeling is geschikt voor mannen en vrouwen ouder dan 18 jaar met als voorwaarde een goede basisgezondheid.</p>'
        ],
        [
            'question' => 'Hoe werkt de endolift?',
            'answer' => '<p>Endolift gebruikt een dunne optische vezel (dunner dan een haar) die onder de huid wordt ingebracht. De laser verwarmt het weefsel selectief, smelt vetcellen en stimuleert collageenproductie. Dit resulteert in verstrakking van de huid en verbetering van de gezichtscontouren – zonder snijden of littekens.</p>'
        ],
        [
            'question' => 'Wat is Tixel?',
            'answer' => '<p>Tixel is een vernieuwende behandeling voor het verbeteren van sterk zonbeschadigde huid, diepe rimpels en verouderde huid. De behandeling is ook zeer geschikt voor acnelittekens, striemen of striae en hyperpigmentatie.</p>'
        ],
        [
            'question' => 'Wat is het verschil tussen endolift en tixel?',
            'answer' => '<p>Zowel Endolift als Tixel zijn innovatieve behandelingen die gericht zijn op huidverbetering, en hoewel ze op een andere manier werken, hebben ze uiteindelijk een vergelijkbaar doel: het stimuleren van collageenaanmaak. Endolift doet dit van binnenuit, door middel van een fijne laservezel die onder de huid wordt ingebracht. Deze laser geeft gecontroleerd warmte af aan de diepere huidlagen, wat zorgt voor het samentrekken van bestaande collageenvezels én het stimuleren van nieuwe collageen- en elastineproductie. Dit leidt tot een gladdere, stevigere huidstructuur. Tixel werkt daarentegen van buitenaf, via kleine titanium pinnen die de huid heel kort aanraken en daarbij oppervlakkige warmte overbrengen. Ook deze thermische prikkel activeert het natuurlijke herstelproces van de huid en stimuleert de aanmaak van collageen, vooral in de bovenste huidlagen. Ondanks het verschil in techniek en diepte van de werking, zorgen beide behandelingen dus voor huidversteviging en verjonging door gebruik te maken van gecontroleerde warmte.</p>'
        ]
    ]
]);
?>

<?php get_footer(); ?>
