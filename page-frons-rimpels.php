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

<?php get_footer(); ?>
