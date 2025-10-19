<?php

/**
 * Template Name: Front Page
 * The template for displaying the front page
 */

get_header(); ?>

<!-- Hero Section -->
<section class="relative w-full h-[600px] md:h-[700px] lg:h-[800px] bg-cover bg-center bg-no-repeat"
    style="background-image: url('https://thegoldenglow.nl/wp-content/uploads/kliniek-foto.jpg'); background-position: center -65px;">

    <!-- Overlay (optional - uncomment if needed) -->
    <!-- <div class="absolute inset-0 bg-black/20"></div> -->

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-[5%] h-full flex items-center">
        <div class="max-w-2xl">
            <!-- Add your hero content here if needed -->
            <!-- Example:
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading text-white mb-6">
                Welcome to The Golden Glow
            </h1>
            <p class="text-lg md:text-xl text-white/90 mb-8">
                Your trusted partner in aesthetic treatments
            </p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>"
               class="inline-block bg-primary text-white font-heading text-sm uppercase tracking-widest px-8 py-4 rounded-full border border-primary hover:bg-primary-hover hover:text-text-muted transition-all duration-300">
                Get Started
            </a>
            -->
        </div>
    </div>
</section>

<!-- Additional Front Page Content -->
<main class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">

        <?php
        // If you have page content to display
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>

        <!-- Add more sections here as needed -->

    </div>
</main>

<?php get_footer(); ?>