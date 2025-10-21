<?php
/**
 * Template Name: Treatment Subpage
 * Universal template for ALL treatment subpages
 * Content is loaded from /content/treatments/{page-slug}.php
 */

get_header();

// Get the page slug to load the right content
$page_slug = get_post_field('post_name', get_post());

// Load content data based on slug
$content_file = get_template_directory() . '/content/treatments/' . $page_slug . '.php';

if (file_exists($content_file)) {
    $data = include($content_file);
} else {
    // Fallback: show error message
    echo '<div class="container mx-auto px-[5%] py-20 text-center">';
    echo '<p class="text-lg text-red-600">Content file not found: content/treatments/' . esc_html($page_slug) . '.php</p>';
    echo '</div>';
    get_footer();
    return;
}

// Extract data
$page_banner_title = $data['page_title'] ?? get_the_title();
$intro_section = $data['intro'] ?? null;
$text_sections = $data['text_sections'] ?? [];
$price_data = $data['price'] ?? null;
$why_section = $data['why_section'] ?? null;
$faqs = $data['faqs'] ?? null;
?>

<!-- Page Banner -->
<?php
get_template_part('templates/page-banner', null, [
    'title' => $page_banner_title
]);
?>

<!-- Category Intro -->
<?php if ($intro_section): ?>
    <?php
    get_template_part('templates/category-intro', null, [
        'title' => $intro_section['title'] ?? '',
        'content' => $intro_section['content'] ?? '',
        'image_filename' => $intro_section['image_filename'] ?? ''
    ]);
    ?>
<?php endif; ?>

<!-- Multiple Text Content Sections (can be 1, 2, 3, or more!) -->
<?php if (!empty($text_sections) && is_array($text_sections)): ?>
    <?php foreach ($text_sections as $section): ?>
        <?php
        get_template_part('sections/text-content-section', null, [
            'title' => $section['title'] ?? '',
            'content' => $section['content'] ?? '',
            'show_background' => $section['show_background'] ?? true
        ]);
        ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- Navigation Buttons (if needed) -->
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

<!-- Price Section -->
<?php if ($price_data): ?>
    <?php
    get_template_part('templates/sub-category-price', null, [
        'title' => $price_data['title'] ?? '',
        'price' => $price_data['price'] ?? '',
        'anesthesia' => $price_data['anesthesia'] ?? '',
        'checkup' => $price_data['checkup'] ?? '',
        'effect_duration' => $price_data['effect_duration'] ?? '',
        'treatment_duration' => $price_data['treatment_duration'] ?? ''
    ]);
    ?>
<?php endif; ?>

<!-- Treatment Summary -->
<?php if ($price_data): ?>
    <?php
    get_template_part('templates/treatment-summary', null, [
        'price' => '€' . ($price_data['price'] ?? ''),
        'duration' => $price_data['treatment_duration'] ?? '',
        'checkup' => $price_data['checkup'] ?? '',
        'effect' => $price_data['effect_duration'] ?? ''
    ]);
    ?>
<?php endif; ?>

<!-- Maak een afspraak Button -->
<section class="py-8 md:py-12 bg-white">
    <div class="container mx-auto px-[5%] text-center">
        <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
           class="inline-block bg-primary text-white font-heading text-sm md:text-base uppercase tracking-widest px-8 py-4 rounded-full border border-primary hover:bg-primary-hover hover:text-text-muted transition-all duration-300">
            Maak een afspraak
        </a>
    </div>
</section>

<!-- Why Section -->
<?php if ($why_section): ?>
    <?php
    get_template_part('sections/text-content-section', null, [
        'title' => $why_section['title'] ?? '',
        'content' => $why_section['content'] ?? '',
        'show_background' => $why_section['show_background'] ?? false
    ]);
    ?>
<?php endif; ?>

<!-- After Treatment Section -->
<?php get_template_part('sections/after-treatment'); ?>

<!-- Reviews Section -->
<?php get_template_part('sections/reviews-section'); ?>

<!-- Clinic Section -->
<?php get_template_part('sections/clinic-section'); ?>

<!-- FAQ Section -->
<?php if ($faqs && !empty($faqs['items'])): ?>
    <?php
    get_template_part('templates/faq-section', null, [
        'title' => $faqs['title'] ?? 'Veelgestelde vragen',
        'faqs' => $faqs['items']
    ]);
    ?>
<?php endif; ?>

<?php get_footer(); ?>
