<?php

/**
 * Template Name: Bodyfillers Page
 * Template for displaying the Bodyfillers page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Bodyfillers'
]);
?>

<?php
get_template_part('templates/category-intro', null, [
    'title' => 'Body injectables',
    'content' => '
        <p>Elk lichaam heeft unieke behoeften, en daarom wordt er tijdens het consult met de arts een persoonlijk behandelplan opgesteld. Samen wordt gekeken welke behandeling het beste bij jou past om de gewenste resultaten te bereiken.</p>
        <p>Het is mogelijk om de bodyfiller behandeling in vier termijnen te betalen via Alma. Als u hiervan gebruik wilt maken, kunt u dit aangeven tijdens het consult bij de arts.</p>
    ',
    'images' => [
        ['filename' => 'ass-1.png', 'alt' => 'bodyfillers'],
        ['filename' => 'ass-2.png', 'alt' => 'bodyfillers'],
        ['filename' => 'ass-v2-1.png', 'alt' => 'bodyfillers'],
        ['filename' => 'ass-v2-2.png', 'alt' => 'bodyfillers'],
        ['filename' => 'penis-1.png', 'alt' => 'bodyfillers'],
        ['filename' => 'penis-2.png', 'alt' => 'bodyfillers'],
        ['filename' => 'vag-1.png', 'alt' => 'bodyfillers'],
        ['filename' => 'vag-2.png', 'alt' => 'bodyfillers'],
    ]
]);
?>

<?php
get_template_part('sections/category-links-grid', null, [
    'card_type' => 'card-2',
    'categories' => [
        [
            'title' => 'Hip dips',
            'url' => '/hip-dips/',
            'description' => 'Ontdek de betovering van fillers voor hip dips in onze cosmetische kliniek in Amsterdam! Onze ervaren arts gebruikt strategisch geplaatste hyaluronzuurfillers om hip dips effectief weg te werken. Vergroot het volume, verzacht de overgangen en creëer prachtige lichaamscontouren, waardoor je zelfvertrouwen een boost krijgt. Plan vandaag nog een consult in onze cosmetische kliniek voor schitterende resultaten. Vertrouw op onze expertise en passie voor esthetiek. Ontdek de mogelijkheden voor een vloeiendere heuplijn bij ons in hartje Amsterdam, op de Kerkstraat!'
        ],
        [
            'title' => 'Bil fillers',
            'url' => '/bilfillers/',
            'description' => 'Tegenwoordig is het een trend om te streven naar de ideale lichaamscontouren, zoals de billen van Kim Kardashian. Een populaire procedure in dit kader is de Brazilian Butt Lift, ook wel bekend als BBL. Bij onze cosmetische kliniek in Amsterdam is het nu mogelijk om dit resultaat te bereiken zonder een operatie te ondergaan. Met lokale verdoving en injecties voeren onze ervaren cosmetisch artsen deze behandeling uit. Boost je lichaam met bilfillers in Amsterdam!'
        ],
        [
            'title' => 'Vagina Verjonging',
            'url' => '/vagina-verjonging/',
            'description' => 'Ontdek een jeugdige uitstraling met schaamlipverjonging in Amsterdam! Niet alleen in het gezicht is veroudering en volumeverlies merkbaar, maar ook in andere delen van het lichaam. In onze kliniek in Amsterdam maken we gebruik van fillers om veilig de schaamlippen op te vullen. Deze cosmetische procedure verstrakt de huid rond de schaamlippen en zorgt voor een verjongde uitstraling. Overweeg een consult met onze ervaren specialist voor nauwkeurige informatie en om te bepalen of deze procedure geschikt is voor jou.'
        ],
        [
            'title' => 'Penisvergroting',
            'url' => '/bodyfillers/penisvergroting/',
            'description' => 'Penisvergroting met fillers is een niet-chirurgische procedure die beschikbaar is in onze cosmetische kliniek in Amsterdam. Onze kliniek is gespecialiseerd in het gebruik van hyaluronzuurfillers om tijdelijk de omvang en lengte van de penis te vergroten. Onze gekwalificeerde arts voert de behandeling uit door de filler op een strategische plek met professionaliteit te injecteren, waardoor het volume toeneemt. Onze ervaren arts helpt je realistische verwachtingen te stellen. Raadpleeg onze specialist voor gedetailleerde informatie en om te bepalen of deze procedure geschikt is voor jou.'
        ],
        [
            'title' => 'EikelVergroting',
            'url' => '/eikelvergroting/',
            'description' => 'Ontdek een jeugdige uitstraling met schaamlipverjonging in Amsterdam! Niet alleen in het gezicht is veroudering en volumeverlies merkbaar, maar ook in andere delen van het lichaam. In onze kliniek in Amsterdam maken we gebruik van fillers om veilig de schaamlippen op te vullen. Deze cosmetische procedure verstrakt de huid rond de schaamlippen en zorgt voor een verjongde uitstraling. Overweeg een consult met onze ervaren specialist voor nauwkeurige informatie en om te bepalen of deze procedure geschikt is voor jou.'
        ],
        [
            'title' => 'Heeft u nog vragen ?',
            'url' => '/contact/',
            'description' => 'Bij Kliniek The Golden Glow begrijpen we dat een behandeling met bodyfillers maatwerk is en dat u wellicht veel vragen heeft. Ons team staat klaar om u persoonlijk te informeren en te begeleiden. De snelste manier om uw vragen te stellen, is via ons contactformulier. Vul het formulier in en laat ons weten wat u wilt weten of bespreken. Wij zorgen ervoor dat u binnen 24 uur een persoonlijk en deskundig antwoord ontvangt.',
            'button_text' => 'Neem contact op',
            'button_url' => 'https://thegoldenglow.nl/contact'
        ]
    ]
]);
?>

<?php
// Happy Customers Section
get_template_part('sections/happy-customers-section', null, [
    'images' => [
        ['filename' => 'body-filler-happy-customer-1.png', 'alt' => 'Happy customer result'],
        ['filename' => 'body-filler-happy-customer-2.png', 'alt' => 'Happy customer result'],
        ['filename' => 'body-filler-happy-customer-3.png', 'alt' => 'Happy customer result'],
        ['filename' => 'body-filler-happy-customer-4.jpg', 'alt' => 'Happy customer result'],
    ]
]);
?>

<?php get_footer(); ?>
