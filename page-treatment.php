<?php
/**
 * Template Name: Treatment Page
 * Generic template for all treatment pages (bunny-lines, frons-rimpels, etc.)
 * Use this template for all 50+ subpages
 */

get_header();

// Get ACF fields
$page_banner_title = get_field('page_banner_title');
$intro_section = get_field('intro_section');
$text_sections = get_field('text_sections'); // This will be an array
$price_data = get_field('price_data');
$why_section = get_field('why_section');
$faqs = get_field('faqs');
?>

<!-- Page Banner -->
<?php
get_template_part('templates/page-banner', null, [
    'title' => $page_banner_title ?: get_the_title()
]);
?>

<!-- Category Intro -->
<?php if ($intro_section): ?>
    <?php
    get_template_part('templates/category-intro', null, [
        'title' => $intro_section['intro_title'] ?? '',
        'content' => $intro_section['intro_content'] ?? '',
        'image_filename' => $intro_section['intro_image'] ?? ''
    ]);
    ?>
<?php endif; ?>

<!-- Text Content Sections (can be multiple!) -->
<?php if ($text_sections && is_array($text_sections)): ?>
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
        'title' => $why_section['why_title'] ?? '',
        'content' => $why_section['why_content'] ?? '',
        'show_background' => false
    ]);
    ?>
<?php endif; ?>

<!-- Reviews Section -->
<?php get_template_part('sections/reviews-section'); ?>

<!-- Clinic Section -->
<?php get_template_part('sections/clinic-section'); ?>

<!-- FAQ Section -->
<?php if ($faqs && isset($faqs['faq_items']) && is_array($faqs['faq_items'])): ?>
    <?php
    get_template_part('templates/faq-section', null, [
        'title' => $faqs['faq_title'] ?? 'Veelgestelde vragen',
        'faqs' => $faqs['faq_items']
    ]);
    ?>
<?php endif; ?>

<?php get_footer(); ?>
