<?php

/**
 * Template Name: Fronsrimpels Page
 * The template for displaying the fronsrimpels page
 */

get_header();
?>

<?php
// Use the category-intro template part for the top section
get_template_part('templates/category-intro', null, [
    'title' => 'Wat is een fronsrimpels behandeling',
    'content' => '
        <h3 class="text-xl md:text-2xl font-heading text-primary mb-4">De frons van Sanjay</h3>
        <p>De botox fronsrimpels behandeling gaf Sanjay zijn ontspannen uitstraling weer terug. Sanjay is een vertrouwd gezicht in Haarlem. In zijn kapsalon Addict ontvangt hij dagelijks klanten die komen voor zijn vakmanschap en warme persoonlijkheid. Toch stoorde hij zich al langere tijd aan zijn frons. Zijn blik leek vaak strenger en serieuzer dan hij zich voelde, terwijl hij juist bekendstaat om zijn opgewekte karakter. Voor Sanjay voelde dat contrast oneerlijk: van binnen vrolijk, maar naar buiten toe te streng. Met een subtiele behandeling met een spierontspanner liet hij die spanning los. Nu straalt zijn gezicht dezelfde vriendelijkheid uit die hij zijn klanten elke dag meegeeft  en voelt zijn voorhoofd ook daadwerkelijk ontspannen.</p>
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

<?php get_footer(); ?>