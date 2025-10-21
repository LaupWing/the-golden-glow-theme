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

<?php get_footer(); ?>
