<?php

/**
 * Template Name: Contact Page
 *
 * The template for displaying the contact page
 *
 * @package The_Golden_Glow
 */

get_header();
?>

<div class="contact-page-wrapper bg-gradient-to-br from-background via-white to-background py-16 md:py-20 lg:py-24">
    <div class="container mx-auto px-[5%]">

        <!-- Page Title Section -->
        <div class="text-center mb-12 md:mb-16">
            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-semibold text-secondary mb-4">
                Neem Contact Op
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Heeft u vragen of wilt u een afspraak maken? Wij staan klaar om u te helpen!
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 mb-16">

            <!-- Left Column: Contact Form -->
            <div class="order-2 lg:order-1">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10">
                    <h2 class="font-heading text-2xl md:text-3xl font-semibold text-secondary mb-6">
                        Stuur ons een bericht
                    </h2>

                    <!-- Success Message -->
                    <?php if (isset($_GET['contact_success'])): ?>
                        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">
                                        Bedankt! Uw bericht is succesvol verzonden. We nemen zo snel mogelijk contact met u op.
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Error Messages -->
                    <?php if (isset($_GET['contact_error'])): ?>
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-red-800">
                                        <?php
                                        $error = $_GET['contact_error'];
                                        if ($error === 'missing_fields') {
                                            echo 'Vul alstublieft alle verplichte velden in.';
                                        } elseif ($error === 'invalid_email') {
                                            echo 'Voer een geldig e-mailadres in.';
                                        } else {
                                            echo 'Er is een fout opgetreden. Probeer het later opnieuw.';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- WordPress Form Shortcode Area -->
                    <?php
                    // You can use WPForms shortcode here instead of the manual form
                    // Example: echo do_shortcode('[wpforms id="4736"]');
                    // Or use Contact Form 7, Gravity Forms, etc.
                    ?>

                    <!-- Manual Form (if not using a plugin) -->
                    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="space-y-6">
                        <input type="hidden" name="action" value="contact_form_submission">
                        <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                        <!-- Name Fields -->
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-sm font-semibold text-body-text mb-2">
                                    Voornaam <span class="text-primary">*</span>
                                </label>
                                <input type="text"
                                    id="first_name"
                                    name="first_name"
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition-colors duration-300">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-semibold text-body-text mb-2">
                                    Achternaam <span class="text-primary">*</span>
                                </label>
                                <input type="text"
                                    id="last_name"
                                    name="last_name"
                                    required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition-colors duration-300">
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-body-text mb-2">
                                Email <span class="text-primary">*</span>
                            </label>
                            <input type="email"
                                id="email"
                                name="email"
                                required
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition-colors duration-300">
                        </div>

                        <!-- Phone Field (optional) -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-body-text mb-2">
                                Telefoon
                            </label>
                            <input type="tel"
                                id="phone"
                                name="phone"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition-colors duration-300">
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-body-text mb-2">
                                Bericht
                            </label>
                            <textarea id="message"
                                name="message"
                                rows="5"
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary focus:outline-none transition-colors duration-300 resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-primary text-white font-heading text-sm uppercase tracking-wider px-8 py-4 rounded-full hover:bg-primary-hover hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            Verstuur Bericht
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Column: Contact Information -->
            <div class="order-1 lg:order-2 space-y-8">

                <!-- Contact Details Card -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="font-heading text-xl font-semibold text-secondary mb-6">Contactgegevens</h3>

                    <!-- Phone -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Telefoon</h4>
                            <a href="tel:+310681390127" class="text-gray-600 hover:text-primary transition-colors">
                                +31 (0)68 139 0127
                            </a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                            <a href="mailto:info@thegoldenglow.nl" class="text-gray-600 hover:text-primary transition-colors">
                                info@thegoldenglow.nl
                            </a>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 384 512">
                                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Adres</h4>
                            <p class="text-gray-600">
                                Kerkstraat 147<br>
                                1017 GG Amsterdam Centrum<br>
                                Nederland
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Opening Hours Card -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="font-heading text-xl font-semibold text-secondary mb-6">Openingstijden</h3>

                    <div class="space-y-3">
                        <div class="flex justify-between items-center pb-3 border-b border-gray-100">
                            <span class="font-medium text-body-text">Maandag - Vrijdag</span>
                            <span class="text-gray-600">10:00 - 19:00</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-body-text">Zaterdag - Zondag</span>
                            <span class="text-gray-600">10:00 - 16:00</span>
                        </div>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="font-heading text-xl font-semibold text-secondary mb-6">Volg Ons</h3>

                    <div class="flex gap-4">
                        <a href="#" target="_blank"
                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center text-primary hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                        <a href="#" target="_blank"
                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center text-primary hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 320 512">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>
                        <a href="#" target="_blank"
                            class="w-12 h-12 bg-primary/10 hover:bg-primary rounded-full flex items-center justify-center text-primary hover:text-white transition-all duration-300 group">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 496 512">
                                <path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Google Maps Section -->
        <div class="rounded-2xl overflow-hidden shadow-2xl h-96 md:h-[500px]">
            <iframe
                src="https://maps.google.com/maps?q=Kerkstraat%20147%201017%20GG%20Amsterdam%20Centrum%20Nederland&t=m&z=16&output=embed&iwloc=near"
                title="The Golden Glow - Kerkstraat 147, Amsterdam"
                aria-label="The Golden Glow location"
                class="w-full h-full border-0"
                loading="lazy">
            </iframe>
        </div>

    </div>
</div>

<?php
get_footer();
