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

<!-- ALMA Payment Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-6">
                Betalen in termijnen met ALMA
            </h2>

            <div class="space-y-4 text-gray-700 mb-8">
                <p class="font-semibold">Flexibel betalen voor uw bodyfillerbehandeling</p>

                <p>Bij Kliniek The Golden Glow begrijpen we dat een bodyfillerbehandeling een waardevolle investering is. Daarom bieden wij u de mogelijkheid om het bedrag eenvoudig in vier gelijke termijnen te betalen met Alma. Zo spreidt u de kosten, terwijl u direct van uw behandeling kunt genieten.</p>

                <p>Wilt u gebruikmaken van deze betaaloptie? Geef het gerust aan tijdens uw consult met de arts – wij regelen de rest.</p>
            </div>

            <a
                href="https://help.almapay.com/hc/nl"
                target="_blank"
                rel="noopener"
                class="inline-block bg-primary text-white px-8 py-3 rounded-full font-heading font-semibold text-sm uppercase hover:opacity-90 transition-opacity duration-200">
                MEER INFORMATIE OVER ALMA
            </a>
        </div>
    </div>
</section>

<?php get_template_part('sections/clinic-section'); ?>

<?php
// FAQ Section for Bodyfillers
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over bodyfillers',
    'faqs' => [
        [
            'question' => 'Is mijn leeftijd niet een belemmering voor deze behandeling?',
            'answer' => '
                <p>Opkomende lijntjes kunnen uitstekend aangepakt worden met spierontspanners. Wat aantrekkelijk is bij beginnende lijntjes, is dat deze vaak volledig verdwijnen na een behandeling. Als de rimpel echter meer doorleefd is en dieper, dan kan een combinatie van spierontspanners en een filler soms meer effectief zijn.</p>
                <p>Een significant pluspunt van spierontspanners is dat de behandeling tevens een preventieve werking heeft. Indien je op vroege termijn ingrijpt, zullen rimpels niet verder verdiepen, en is de kans groot dat je nooit nood hebt aan vulstoffen of andere procedures voor deze gebieden. Hoewel we idealiter wachten tot een persoon minstens 21 jaar is voor eender welke behandeling, is het toegestaan om vanaf 18 jaar behandelingen te ondergaan. Indien onze medisch specialist twijfels heeft over de realistischheid van je verwachtingen, zullen we hier openlijk met je over converseren.</p>
            '
        ],
        [
            'question' => 'Hoelang duurt het voordat ik weer kan werken?',
            'answer' => '
                <p>Je kunt onmiddellijk na de sessie weer uw normale bezigheden oppakken. Daarom wordt een behandeling met spierontspanners vaak aangeduid als een \'lunchpauze-behandeling\'. Afgezien van een tijdelijke milde roodheid die binnen een half uur vervaagt, en zelden een kleine, goed te verhullen blauwe plek, is er vrijwel geen zichtbare indicatie van de behandeling.</p>
            '
        ],
        [
            'question' => 'Hoelang werkt de behandeling?',
            'answer' => '
                <p>Hoewel het middel zelf na 3-6 maanden is uitgewerkt, heeft het wel een permanent verbeterend effect op de behandelde regio. Dit is vooral van toepassing wanneer het middel gedurende langere tijd (enkele jaren) is toegepast.</p>
                <p>Dit komt doordat het gebied gedurende enkele jaren beperkt is in beweging. Hierdoor blijven oppervlakkige lijntjes in de huid en herstellen ze vaak volledig. Het is alsof de tijd feitelijk stil is gezet. Bovendien raakt u gewend om de relevante spier niet meer te gebruiken. Als gevolg hiervan zal bijvoorbeeld uw neiging tot fronsen verminderd zijn in vergelijking met vroeger. Dit draagt bij aan een langdurige verbetering van dit specifieke gebied. Er zijn zelfs enkele studies die suggereren dat u, om de hierboven beschreven redenen, na enkele jaren gebruik van spierontspanners gerust een jaar kunt pauzeren om het effect te behouden.</p>
            '
        ]
    ]
]);
?>

<?php
// Reviews Section
get_template_part('sections/reviews-section');
?>
<?php get_footer(); ?>