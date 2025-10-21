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

<?php get_footer(); ?>