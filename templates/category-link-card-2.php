<?php
/**
 * Template part for displaying a category link card with description
 *
 * @package The_Golden_Glow
 */

// Extract args passed from get_template_part()
$title = $args['title'] ?? '';
$url = $args['url'] ?? '#';
$description = $args['description'] ?? '';
$has_background = $args['has_background'] ?? false;

// Static button settings
$button_text = 'Maak een afspraak';
$button_url = 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';

// Background color class
$bg_class = $has_background ? 'bg-background' : 'bg-white';
$text_color = $has_background ? 'text-primary' : 'text-primary';
?>

<article class="flex flex-col p-6 md:p-8 min-h-[400px] <?php echo esc_attr($bg_class); ?> rounded-lg">

    <!-- Category Title Link -->
    <h2 class="font-heading text-2xl md:text-3xl <?php echo esc_attr($text_color); ?> mb-4">
        <a href="<?php echo esc_url($url); ?>" class="hover:opacity-80 transition-opacity">
            <?php echo esc_html($title); ?>
        </a>
    </h2>

    <!-- Description -->
    <?php if ($description): ?>
        <div class="text-gray-700 leading-relaxed mb-6 flex-grow">
            <p><?php echo esc_html($description); ?></p>
        </div>
    <?php endif; ?>

    <!-- CTA Button -->
    <div class="text-center mt-auto">
        <a
            href="<?php echo esc_url($button_url); ?>"
            class="inline-block bg-primary text-white px-8 py-3 rounded-full font-heading font-semibold text-sm uppercase hover:opacity-90 transition-opacity duration-200"
            rel="noopener">
            <?php echo esc_html($button_text); ?>
        </a>
    </div>

</article>
