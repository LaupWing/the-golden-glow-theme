<?php

/**
 * Template Name: Filler Behandeling Page
 * Template for displaying the Filler Behandeling page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Filler Behandeling'
]);
?>

<?php
get_template_part('templates/category-intro', null, [
    'title' => 'Mijn benadering van een hyaluronzuurfillerbehandeling',
    'content' => '
        <p>Als ik werk met fillers, focus ik me altijd op hoe we het vandaag de dag anders doen. Mijn doel is om te zorgen dat we pillowfaces voorkomen en over-fillingen vermijden. Vaak gebruik ik echografie om te zien waar ik de fillers precies moet plaatsen, om ze op hun juiste plek te injecteren en te voorkomen dat ze migreren. Kwaliteit is voor mij essentieel, dus ik kies altijd voor de beste merken hyaluronzuur. En het type hyaluronzuur? Dat hangt af van wat we willen bereiken. Elk soort heeft zijn eigen fysische en chemische eigenschappen, en ik kies wat het beste past voor het doel en de plek van de injectie in het gezicht bij waar we de filler willen aanbrengen.</p>
        <p>Wist je dat 1 op de 35 vrouwen een fillerbehandeling heeft ondergaan? De populariteit van fillers is goed te verklaren: ze maken het mogelijk om subtiel te creëren en te verfraaien, met vrijwel direct zichtbaar resultaat. Toch gaat het bij mij verder dan enkel het behandelen van een specifiek gebied. Mijn benadering is altijd holistisch. Ik kijk naar het gehele gezicht en de natuurlijke balans daarin. Vaak ligt de meest elegante oplossing niet in het gebied waar iemand een probleem ervaart, maar juist in een naastgelegen regio. Op die manier ontstaat een harmonieus en natuurlijk resultaat.</p>
        <p>Wat ik altijd voorop stel, is dat elke behandeling afgestemd is op jou. Iedereen is anders, of je nu zelfverzekerder of vriendelijker wilt overkomen. Ik let op hoe je gezichtsuitdrukkingen zijn, wat jouw persoonlijkheid is, en zelfs hoe jouw dagelijkse leven eruitziet. Zo zorg ik ervoor dat de behandeling perfect bij jou past.</p>
        <p>Het gaat erom dat jij je goed voelt in je eigen huid, en ik ben hier om je te helpen dat te bereiken.</p>
    ',
    'image_filename' => 'arwind5.jpg'
]);
?>

<?php
get_template_part('sections/category-links-grid', null, [
    'categories' => [
        ['title' => 'Lippen', 'url' => '/lip-filler-behandeling/'],
        ['title' => 'Jukbeenderen', 'url' => '/juk-beenderen/'],
        ['title' => 'Traangootjes', 'url' => '/traan-gootjes/'],
        ['title' => 'Neus Lippen Plooi', 'url' => '/neus-lippen-plooi/'],
        ['title' => 'Marionet Lijnen', 'url' => '/marionet-lijnen/'],
        ['title' => 'Wangen', 'url' => '/wangen-filler/'],
        ['title' => 'Kin', 'url' => '/kin/'],
        ['title' => 'Kaaklijn', 'url' => '/kaaklijn-filler/'],
        ['title' => 'Slapen', 'url' => '/slapen/'],
        ['title' => 'Neus', 'url' => '/neus/'],
        ['title' => 'Full Face', 'url' => '/full-face/'],
    ]
]);
?>

<!-- Werkwijze Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-6 text-center">
                Onze werkwijze is persoonlijk en medisch onderbouwd
            </h2>
            <div class="prose prose-lg max-w-none text-gray-700 space-y-4">
                <p>
                    Tijdens een consult bespreken we uw wensen, analyseren we zorgvuldig de gezichtsstructuur en stellen we een behandelplan op dat past bij uw gezicht en mimiek. Met onze holistische aanpak combineren we vaak meerdere technieken om het beste resultaat te bereiken. Indien nodig maken we gebruik van echogeleide plaatsing van hyaluronzuurfillers voor extra precisie en veiligheid.
                </p>
                <p>
                    Bij The Golden Glow staan veiligheid, deskundigheid en verfijning centraal. We streven altijd naar een mooi harmonieus resultaat – subtiel, soms nét een tikje gedurfd, maar nooit overdreven.
                </p>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('sections/clinic-section'); ?>

<?php
// FAQ Section for Filler Behandeling
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over fillerbehandelingen',
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