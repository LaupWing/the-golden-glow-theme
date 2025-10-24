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
$content_blocks = $data['content_blocks'] ?? [];
?>

<!-- Page Banner -->
<?php
get_template_part('templates/page-banner', null, [
    'title' => $page_banner_title
]);
?>

<!-- Loop through content blocks -->
<?php if (!empty($content_blocks) && is_array($content_blocks)): ?>
    <?php foreach ($content_blocks as $block): ?>
        <?php
        $type = $block['type'] ?? '';
        $block_data = $block['data'] ?? [];

        switch ($type) {
            case 'category-intro':
                get_template_part('templates/category-intro', null, [
                    'title' => $block_data['title'] ?? '',
                    'content' => $block_data['content'] ?? '',
                    'image_filename' => $block_data['image_filename'] ?? '',
                    'images' => $block_data['images'] ?? [],
                    'full_height_image' => $block_data['full_height_image'] ?? true,
                    'button_below_text' => $block_data['button_below_text'] ?? false
                ]);
                break;

            case 'text-content':
                get_template_part('sections/text-content-section', null, [
                    'title' => $block_data['title'] ?? '',
                    'content' => $block_data['content'] ?? '',
                    'show_background' => $block_data['show_background'] ?? true
                ]);
                break;

            case 'navigation':
                $links = $block_data['links'] ?? [];
                ?>
                <section class="py-8 md:py-12 bg-white">
                    <div class="container mx-auto px-[5%]">
                        <nav class="flex flex-wrap justify-center gap-4" aria-label="Page navigation">
                            <?php foreach ($links as $link): ?>
                                <a href="<?php echo esc_attr($link['href'] ?? '#'); ?>"
                                   class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200">
                                    <?php echo esc_html($link['label'] ?? ''); ?>
                                </a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </section>
                <?php
                break;

            case 'price':
                get_template_part('templates/sub-category-price', null, [
                    'title' => $block_data['title'] ?? '',
                    'price' => $block_data['price'] ?? '',
                    'anesthesia' => $block_data['anesthesia'] ?? '',
                    'checkup' => $block_data['checkup'] ?? '',
                    'effect_duration' => $block_data['effect_duration'] ?? '',
                    'treatment_duration' => $block_data['treatment_duration'] ?? ''
                ]);
                break;

            case 'treatment-summary':
                get_template_part('templates/treatment-summary', null, [
                    'title' => $block_data['title'] ?? '',
                    'price' => $block_data['price'] ?? '',
                    'duration' => $block_data['duration'] ?? '',
                    'checkup' => $block_data['checkup'] ?? '',
                    'effect' => $block_data['effect'] ?? ''
                ]);
                break;

            case 'appointment-button':
                $url = $block_data['url'] ?? 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';
                $label = $block_data['label'] ?? 'Maak een afspraak';
                ?>
                <section class="py-8 md:py-12 bg-white">
                    <div class="container mx-auto px-[5%] text-center">
                        <a href="<?php echo esc_url($url); ?>"
                           class="inline-block bg-primary text-white font-heading text-sm md:text-base uppercase tracking-widest px-8 py-4 rounded-full border border-primary hover:bg-primary-hover hover:text-text-muted transition-all duration-300">
                            <?php echo esc_html($label); ?>
                        </a>
                    </div>
                </section>
                <?php
                break;

            case 'after-treatment':
                get_template_part('sections/after-treatment');
                break;

            case 'reviews':
                get_template_part('sections/reviews-section', null, [
                    'title' => $block_data['title'] ?? 'Wat onze klanten zeggen',
                    'reviews' => $block_data['reviews'] ?? null,
                    'show_background' => $block_data['show_background'] ?? false
                ]);
                break;

            case 'clinic':
                get_template_part('sections/clinic-section');
                break;

            case 'faq':
                if (!empty($block_data['items'])) {
                    get_template_part('templates/faq-section', null, [
                        'title' => $block_data['title'] ?? 'Veelgestelde vragen',
                        'faqs' => $block_data['items']
                    ]);
                }
                break;

            case 'happy-customers':
                get_template_part('sections/happy-customers-section', null, [
                    'title' => $block_data['title'] ?? 'Onze tevreden klanten',
                    'content' => $block_data['content'] ?? '',
                    'images' => $block_data['images'] ?? []
                ]);
                break;

            default:
                // Unknown block type - skip or show error in development
                break;
        }
        ?>
    <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>
