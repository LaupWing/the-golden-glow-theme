<?php

/**
 * Template Name: Fronsrimpels Page
 * The template for displaying the fronsrimpels page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Voorhoofdrimpels'
]);
?>

<?php
// Use the category-intro template part for the top section
get_template_part('templates/category-intro', null, [
    'title' => 'Charlotte en haar hangende oogleden',
    'content' => '
        <p>Dat een voorhoofdbehandeling met een spierontspanner totaal verkeerd kan uitpakken laat het verhaal van Charlotte Houboer zien. Charlotte kwam in mijn kliniek met een grote complicatie: ze kon haar ogen niet meer openhouden. Charlotte had letterlijk pleisters boven haar oogleden geplakt om deze open te houden en had een must op om dit te verbergen. Hoe kon het zo erg mis gaan? Ik kom in mijn kliniek vaker overbehandeling tegen van collega artsen. Eerlijkheidshalve zijn dit nooit cosmetisch artsen, maar meestal huisartsen die ook een behandeling met spierontspanners aanbieden, maar omdat zij de routine en ervaring missen, zie ik juist bij deze groep artsen vaak complicaties door te veel of te zwaar gebruik van de spierontspanners.  Er bestaat helaas niet een middel om spierontspanner op te lossen. Bij Charlotte heb ik in eerste instantie middels fillers haar blik kunnen openen. Verder moesten we afwachten tot de spierontspanners zouden uitwerken. Inmiddels is Charlotte een van mijn blije cliënten en zorgen we middels een mooie wenkbrauwlift voor een prachtige open blik.
        </p>
    ',
    'image_filename' => 'frons-sanjay.jpg'
]);
?>


<?php
// Text content section - How we treat the frons
get_template_part('sections/text-content-section', null, [
    'title' => 'Hoe behandelen we de frons',
    'content' => '
        <p>Fronsrimpels ontstaan doordat de spieren tussen de wenkbrauwen (m. corrugator en m. procerus) zich herhaaldelijk aanspannen, bijvoorbeeld bij boos kijken, turen of fel licht. Op jonge leeftijd verdwijnen deze lijnen weer zodra de spier ontspant, maar naarmate de huid en het onderliggende bindweefsel elasticiteit verliezen, kunnen de rimpels blijvend zichtbaar worden. Door de fronsspieren met een spierontspanner te behandelen, ontspannen de spieren tijdelijk, waardoor fronsen vermindert of zelfs onmogelijk wordt. Het effect is een gladdere huid en een zachtere, meer toegankelijke gezichtsuitdrukking. De behandeling duurt slechts enkele minuten, is doorgaans goed te verdragen en vereist geen verdoving. Het mooie van deze methode is dat de mimiek behouden blijft, zolang de dosering zorgvuldig is afgestemd op de spieractiviteit en de anatomie van de cliënt.</p>
    '
]);
?>



<!-- Navigation Buttons Section -->
<section class="py-8 md:py-12 bg-white">
    <div class="container mx-auto px-[5%]">
        <nav class="flex flex-wrap justify-center gap-4" aria-label="Page navigation">
            <a href="#behandeling" class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200">
                Behandeling
            </a>
            <a href="#prijzen" class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200">
                Prijzen
            </a>
            <a href="#resultaat" class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200">
                Resultaat
            </a>
            <a href="#nazorg" class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200">
                Nazorg
            </a>
        </nav>
    </div>
</section>

<?php
// Price section
get_template_part('templates/sub-category-price', null, [
    'title' => 'Wat is de prijs van een fronsrimpels behandeling',
    'price' => '125',
    'anesthesia' => 'met crème',
    'checkup' => 'na 2 weken',
    'effect_duration' => '3 - 4 maanden',
    'treatment_duration' => '15 minuten'
]);
?>

<?php
// Treatment summary section
get_template_part('templates/treatment-summary', null, [
    'price' => '€125',
    'duration' => '15 minuten',
    'checkup' => 'na 2 weken',
    'effect' => '3 - 4 maanden'
]);
?>

<!-- Maak een afspraak Button -->
<section class="py-8 md:py-12 bg-white">
    <div class="container mx-auto px-[5%] text-center">
        <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
            class="inline-block bg-primary text-white font-heading text-sm md:text-base uppercase tracking-widest px-8 py-4 rounded-full border border-primary hover:bg-primary-hover hover:text-text-muted transition-all duration-300">
            Maak een afspraak
        </a>
    </div>
</section>

<?php
// Text content section - Why fronsrimpels treatment
get_template_part('sections/text-content-section', null, [
    'title' => 'Waarom een fronsrimpels behandeling met botox',
    'content' => '
        <p>Een fronsrimpels behandeling met botox verzacht de rimpels tussen de wenkbrauwen en geeft uw gezicht een vriendelijkere, ontspannen uitstraling. Door de fronsspieren tijdelijk te ontspannen, wordt de huid gladder terwijl uw natuurlijke mimiek behouden blijft. De behandeling is snel, veilig en vrijwel pijnloos, met zichtbaar resultaat binnen enkele dagen dat gemiddeld 3 tot 6 maanden aanhoudt. Regelmatig herhalen voorkomt dat de rimpels dieper worden, waardoor u langdurig een frisse en toegankelijke gezichtsuitdrukking behoudt.</p>
    ',
    'show_background' => false
]);
?>

<?php
// Reviews Section
get_template_part('sections/reviews-section');
?>

<?php get_template_part('sections/clinic-section'); ?>

<?php
// FAQ Section
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over fronsrimpel behandeling',
    'faqs' => [
        [
            'question' => 'Wat is een fronsrimpel en hoe ontstaat deze',
            'answer' => '<p>Een fronsrimpel is een verticale lijn tussen de wenkbrauwen die ontstaat door herhaald fronsen van de gezichtsspieren en door huidveroudering.</p>'
        ],
        [
            'question' => 'Hoe werkt Botox tegen fronsrimpels?',
            'answer' => '<p>Botox ontspant de spieren die de frons veroorzaken. Hierdoor verzacht of verdwijnt de rimpel en krijgt het gezicht een meer ontspannen en frisse uitstraling.</p>'
        ],
        [
            'question' => 'Hoelang blijft Botox tegen fronsrimpels zichtbaar?',
            'answer' => '<p>Het resultaat is gemiddeld 3 tot 4 maanden zichtbaar. Daarna kan de behandeling eenvoudig herhaald worden.</p>'
        ],
        [
            'question' => 'Wanneer zie ik resultaat van Botox bij fronsrimpels?',
            'answer' => '<p>Na 3 tot 5 dagen is het eerste effect zichtbaar, met een optimaal resultaat na ongeveer 2 weken.</p>'
        ]
    ]
]);
?>

<?php get_footer(); ?>