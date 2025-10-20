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

<!-- Category Links Grid -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid md:grid-cols-2 gap-6">
            <?php
            $categories = [
                ['title' => 'Fronsrimpel', 'url' => '/frons-rimpels/'],
                ['title' => 'Voorhoofdsrimpels', 'url' => '/voor-hoofd-rimpels/'],
                ['title' => 'Kraaienpootjes', 'url' => '/kraaien-pootjes/'],
                ['title' => 'Wenkbrauwlift', 'url' => '/wenkbrauwlift/'],
                ['title' => 'Bunny lines', 'url' => '/bunny-lines/'],
                ['title' => 'Gummy smile', 'url' => '/gummy-smile/'],
                ['title' => 'Marionetlijnen', 'url' => '/marionet-lijnen/'],
                ['title' => 'Lip flip', 'url' => '/lip-flip/'],
                ['title' => 'Migraine', 'url' => '/migraine/'],
                ['title' => 'Platysma', 'url' => '/platysma/'],
                ['title' => 'Traptox', 'url' => '/trap-tox/'],
                ['title' => 'Liquid Facelift', 'url' => '/liquid-facelift/'],
                ['title' => 'Kaaklijn', 'url' => '/kaak-lijn/'],
                ['title' => 'Kin', 'url' => '/kin-boto/'],
            ];

            foreach ($categories as $index => $category) {
                // Calculate row and column position
                $row = floor($index / 2);
                $col = $index % 2;

                // Alternate pattern: if even row, left has bg; if odd row, right has bg
                if ($row % 2 === 0) {
                    $category['has_background'] = ($col === 0);
                } else {
                    $category['has_background'] = ($col === 1);
                }

                get_template_part('templates/category-link-card', null, $category);
            }
            ?>
        </div>
    </div>
</section>

<?php get_template_part('sections/clinic-section'); ?>

<?php get_footer(); ?>
