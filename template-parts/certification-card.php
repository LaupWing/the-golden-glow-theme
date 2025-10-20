<?php
/**
 * Template part for displaying a certification card
 *
 * @package The_Golden_Glow
 */

// Expecting $cert array with 'title', 'description', 'url'
if (!isset($cert)) {
    return;
}
?>

<article class="bg-primary text-white p-8 rounded-lg">
    <h3 class="font-heading text-2xl md:text-3xl mb-3">
        <?php echo esc_html($cert['title']); ?>
    </h3>
    <a href="<?php echo esc_url($cert['url']); ?>" class="text-white underline hover:no-underline" target="_blank" rel="noopener">
        <?php echo esc_html($cert['description']); ?>
    </a>
</article>
