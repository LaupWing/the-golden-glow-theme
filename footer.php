<!-- Footer -->
<footer class="relative bg-background pt-12 pb-6 overflow-hidden">
    <!-- Background Image -->
    <img src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/footer.png'); ?>"
         alt="The Golden Glow footer background"
         class="absolute inset-0 w-full h-full object-cover z-0"
         loading="lazy">

    <div class="container mx-auto px-[5%] relative z-10">

        <!-- Footer Main Content -->
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-8">

            <!-- Left Column: Contact -->
            <div>
                <p class="font-body text-base font-semibold text-gray-800 mb-4">
                    CONTACT
                </p>
                <ul class="space-y-3">
                    <li>
                        <a href="tel:+310681390127"
                            class="flex items-center gap-3 text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                            <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" />
                            </svg>
                            <span>(+31) 06 81390127</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@thegoldenglow.nl"
                            class="flex items-center gap-3 text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                            <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                            </svg>
                            <span>info@thegoldenglow.nl</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/dir//Kerkstraat+147,+1017+GG+Amsterdam/@52.3636599,4.806017,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47c6095ec8461b3f:0xf16509b967cc7cf4!2m2!1d4.8884172!2d52.3636886?entry=ttu&g_ep=EgoyMDI1MDMyNS4xIKXMDSoASAFQAw%3D%3D"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-start gap-3 text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 384 512">
                                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" />
                            </svg>
                            <span>Kerkstraat 147 - 1017GG Amsterdam</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Right Column: Treatments & Certifications -->
            <div class="space-y-8 text-right">

                <!-- Veelvoorkomende behandelingen -->
                <div>
                    <p class="font-body text-base font-semibold text-gray-800 mb-4">
                        Veelvoorkomende behandelingen
                    </p>
                    <ul class="space-y-2">
                        <li>
                            <a href="<?php echo esc_url(home_url('/botox-behandelingen/')); ?>"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                Spierontspanners
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/fillerbehandelingen/')); ?>"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                Fillers in het gezicht
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/bodyfillers/')); ?>"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                Body fillers
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/medisch-afvallen/')); ?>"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                Medisch afvallen
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Certificaties -->
                <div>
                    <p class="font-body text-base font-semibold text-gray-800 mb-4">
                        Certificaties
                    </p>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://nvcg.nl/cosmetisch-arts-knmg/?cn-zipcode=1017GG&cn-radius=5.1&cn-latitude=&cn-longitude=&cn-near-coord=&cn-unit=km&cn-s=chigharoe"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                NVCG
                            </a>
                        </li>
                        <li>
                            <a href="https://www.bigregister.nl/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                BIG
                            </a>
                        </li>
                        <li>
                            <a href="https://www.knmg.nl/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">
                                KNMG
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</footer>

<!-- Footer Bottom - Copyright -->
<div class="bg-primary py-6">
    <div class="container mx-auto px-[5%]">
        <div class="text-center">
            <p class="text-sm text-white">
                Copyright © <?php echo date('Y'); ?> TheGoldenGlow
            </p>
        </div>
    </div>
</div>

<style>
/* Smooth scrolling */
html {
    scroll-behavior: smooth;
    scroll-padding-top: 100px; /* Header height (80px) + extra offset (20px) */
}
</style>

<?php wp_footer(); ?>
</body>

</html>