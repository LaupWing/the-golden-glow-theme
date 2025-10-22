<?php

/**
 * Template Name: Spierontspanners Page
 * Template for displaying the Spierontspanners page
 */

get_header(); ?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Spierontspanners'
]);
?>

<?php
get_template_part('templates/category-intro', null, [
    'title' => 'Spierontspanners: mijn visie',
    'content' => '
        <p>Spierontspanners zijn een veilig en veelgebruikt middel in de cosmetische geneeskunde. Al meer dan dertig jaar worden ze wereldwijd toegepast en er zijn verschillende betrouwbare merken op de markt. Met de juiste keuze en dosering kan ik prachtige, natuurlijke resultaten bereiken die passen bij de persoon tegenover me.</p>
        <p>Het succes van een behandeling hangt sterk af van precisie: de exacte injectieplek in de spier, de juiste dosering en de unieke anatomie van iedere cliënt. Of iemand nu man of vrouw is, sterke of juist minder sterke spieren heeft: ik stem de behandeling altijd zorgvuldig af. Soms geeft een lagere dosering juist een mooier en frisser resultaat dan een hogere concentratie. Denk bijvoorbeeld aan het voorhoofd: te veel Botox kan de wenkbrauwen laten zakken, terwijl een subtiele aanpak juist zorgt voor een lichte lift en een uitgeruste uitstraling.</p>
        <p>Naast de bekende zones in het bovenste deel van het gezicht – zoals fronsrimpels, voorhoofd en kraaienpootjes – gebruik ik spierontspanners ook met succes in het onderste deel van het gelaat. Denk aan de mondhoeken, kaaklijn en hals. Daarmee kan ik een subtiele lift creëren, hamsterwangen voorkomen en de kaaklijn mooi strak houden.</p>
    '
]);
?>

<?php
get_template_part('sections/category-links-grid', null, [
    'categories' => [
        ['title' => 'Fronsrimpel', 'url' => '/frons-rimpels/'],
        ['title' => 'Voorhoofdsrimpels', 'url' => '/voor-hoofd-rimpels/'],
        ['title' => 'Kraaienpootjes', 'url' => '/kraaien-pootjes/'],
        ['title' => 'Wenkbrauwlift', 'url' => '/wenkbrauwlift/'],
        ['title' => 'Bunny lines', 'url' => '/bunny-lines/'],
        ['title' => 'Gummy smile', 'url' => '/gummy-smile/'],
        ['title' => 'Marionetlijnen', 'url' => '/marionet-lijnen/'],
        ['title' => 'Lip flip', 'url' => '/lip-flip/'],
        ['title' => 'Rokerslijntjes', 'url' => '/rokers-lijntjes/'],
        ['title' => 'Neuspunt lift', 'url' => '/neuspunt-lift/'],
        ['title' => 'Migraine', 'url' => '/migraine/'],
        ['title' => 'Platysma', 'url' => '/platysma/'],
        ['title' => 'Traptox', 'url' => '/trap-tox/'],
        ['title' => 'Liquid Facelift', 'url' => '/liquid-facelift/'],
        ['title' => 'Kaaklijn', 'url' => '/kaak-lijn/'],
        ['title' => 'Kin', 'url' => '/kin-boto/'],
    ]
]);
?>

<!-- Philosophy Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto">
            <div class="text-center">
                <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                    Als cosmetisch arts kies ik er bewust voor om in eerste instantie zoveel mogelijk met spierontspanners te werken, in plaats van direct met fillers. Het is een subtiele manier om een frisse, natuurlijke uitstraling te geven. Pas wanneer spierontspanners niet voldoende effect hebben, zet ik fillers in als aanvulling. Mijn doel is niet alleen het behandelen van rimpels, maar vooral het veranderen van de uitstraling: van boos of vermoeid naar blij, zelfverzekerd en stralend. Spierontspanners zijn een prachtig middel om dat te bereiken.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('sections/clinic-section'); ?>

<?php
// FAQ Section for Spierontspanners
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over Spierontspannings behandeling',
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
            'question' => 'Hoelang werkt het middel?',
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
