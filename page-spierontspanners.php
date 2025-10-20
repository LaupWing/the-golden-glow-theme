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

<?php get_footer(); ?>
