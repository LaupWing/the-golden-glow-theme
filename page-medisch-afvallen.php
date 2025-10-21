<?php

/**
 * Template Name: Medisch Afvallen Page
 * Template for displaying the Medisch Afvallen page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Medisch Afvallen'
]);
?>

<?php
get_template_part('sections/content-info-section', null, [
    'content' => '
        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4">Effectief en medisch begeleid afvallen met injecties</h2>
        <p>Overgewicht en obesitas vormen een groeiend probleem in onze moderne samenleving. Bijna de helft van alle Nederlanders worstelt hiermee. Afvallen is vaak een uitdaging, en een gezond gewicht behouden kan nog moeilijker zijn. Daarom bieden wij afvalprogramma\'s die volledig worden ondersteund door medische begeleiding. Indien nodig maken we gebruik van medicatie om uw hongergevoel te verminderen en een langdurig verzadigd gevoel te bevorderen. Bovendien krijgt u persoonlijke begeleiding van een ervaren arts en voedingscoach om uw doelen te bereiken en te behouden.</p>

        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4 mt-6">Hoe werken injecties voor gewichtsverlies?</h2>
        <p>De medicatie werkt op basis van een mechanisme dat lijkt op het natuurlijke GLP-1 hormoon. Dit hormoon speelt een belangrijke rol in het reguleren van de eetlust door het hongergevoel te verminderen en het gevoel van verzadiging te versterken. Het resultaat is een verminderde eetlust, wat vaak leidt tot gewichtsverlies.</p>
        <p>De injecties zijn eenvoudig zelf toe te dienen en uitsluitend op recept verkrijgbaar. Let op: deze medicatie is niet voor iedereen geschikt en kan bijwerkingen hebben. Het is essentieel om eerst een arts te raadplegen en de bijsluiter zorgvuldig door te nemen.</p>
    ',
    'image_filename' => 'measuring.jpg'
]);
?>

<?php get_footer(); ?>
