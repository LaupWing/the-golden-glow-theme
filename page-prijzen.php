<?php

/**
 * Template Name: Prijzen Page
 * Template for displaying the Prijzen (Pricing) page
 */

get_header();
?>

<!-- Page Banner -->
<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Prijzen'
]);
?>

<!-- Pricing Tabs Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-[1000px] mx-auto border border-gray-200 rounded-[20px] overflow-hidden shadow-lg">

            <!-- Tabs Container -->
            <div class="flex flex-col md:flex-row">

                <!-- Tabs Navigation -->
                <nav class="flex md:flex-col flex-row overflow-x-auto md:overflow-visible md:flex-shrink-0 md:w-52 bg-primary border-b md:border-b-0 md:border-r border-gray-200" role="tablist" aria-label="Prijzen categorieën">
                    <button
                        class="tab-link active px-4 py-4 md:py-4 text-left text-white hover:text-white transition-colors duration-200 whitespace-nowrap md:whitespace-normal flex-1 md:flex-none text-sm md:text-base border-none bg-transparent cursor-pointer"
                        data-tab="tab-botox"
                        role="tab"
                        aria-selected="true"
                        aria-controls="tab-botox">
                        Botox
                    </button>
                    <button
                        class="tab-link px-4 py-4 md:py-4 text-left text-white/60 hover:text-white transition-colors duration-200 whitespace-nowrap md:whitespace-normal flex-1 md:flex-none text-sm md:text-base border-none bg-transparent cursor-pointer"
                        data-tab="tab-fillers"
                        role="tab"
                        aria-selected="false"
                        aria-controls="tab-fillers">
                        Fillers
                    </button>
                    <button
                        class="tab-link px-4 py-4 md:py-4 text-left text-white/60 hover:text-white transition-colors duration-200 whitespace-nowrap md:whitespace-normal flex-1 md:flex-none text-sm md:text-base border-none bg-transparent cursor-pointer"
                        data-tab="tab-pdo"
                        role="tab"
                        aria-selected="false"
                        aria-controls="tab-pdo">
                        PDO
                    </button>
                    <button
                        class="tab-link px-4 py-4 md:py-4 text-left text-white/60 hover:text-white transition-colors duration-200 whitespace-nowrap md:whitespace-normal flex-1 md:flex-none text-sm md:text-base border-none bg-transparent cursor-pointer"
                        data-tab="tab-tixel"
                        role="tab"
                        aria-selected="false"
                        aria-controls="tab-tixel">
                        Tixel
                    </button>
                    <button
                        class="tab-link px-4 py-4 md:py-4 text-left text-white/60 hover:text-white transition-colors duration-200 whitespace-nowrap md:whitespace-normal flex-1 md:flex-none text-sm md:text-base border-none bg-transparent cursor-pointer"
                        data-tab="tab-skinboosters"
                        role="tab"
                        aria-selected="false"
                        aria-controls="tab-skinboosters">
                        Skinboosters
                    </button>
                </nav>

                <!-- Tabs Content -->
                <div class="flex-1 p-6 md:p-8">

                    <!-- Botox Tab -->
                    <div id="tab-botox" class="tab-content" role="tabpanel" aria-labelledby="tab-botox">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Behandeling</th>
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Prijs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">1 zone botox</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">2 zones botox</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 225</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">3 zones botox</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 295</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Botox tegen overmatig zweten</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 400</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Botox migraine</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 225</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Tandenknarsen</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 300</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Gummy smile</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 99</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Mond hoeken</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Bunny lines</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Neustip lift</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Neus versmalling</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Lipflip</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Frons</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Voorhoofd</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Kraaienpootjes</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Face slimming vanaf</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Fillers Tab -->
                    <div id="tab-fillers" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-fillers">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Behandeling</th>
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Prijs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Hyaluronzuur 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Radiesse 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 300</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Skinboosters 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Lipfiller 0,5 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 175</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Lipfillers 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Kin</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Filler onder het oog</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 299</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Jukbeen 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Jukbeen 2 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 500</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Kaaklijn 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Kaaklijn 2 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 500</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Marionettelijn</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Neus correctie</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Hip dips 60 ml vanaf</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 2100</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Bilfillers 100 ml vanaf</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 2950</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Neuslippenplooi 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 275</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Sculptra</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 600</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Ellanse 1 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 400</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Ellanse 2 ml</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 750</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Lanluma face</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 750</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- PDO Tab -->
                    <div id="tab-pdo" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-pdo">
                        <div class="prose max-w-none">
                            <p class="text-text text-sm md:text-base leading-relaxed">
                                Afhankelijk van de verzakking, diepte van de rimpel en het beoogde effect zal de arts samen met u in een consult bespreken voor welke PDO-draden u in aanmerking komt. Er zijn verschillende diktes en soorten PDO-draden. Het consult is vrijblijvend.
                            </p>
                        </div>
                    </div>

                    <!-- Tixel Tab -->
                    <div id="tab-tixel" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-tixel">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Behandeling</th>
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Prijs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Tixel per zone in het gelaat</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 125</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Hele gezicht</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 295</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Hals</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 150</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Decolleté</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 150</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Skinboosters Tab -->
                    <div id="tab-skinboosters" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-skinboosters">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Behandeling</th>
                                        <th class="px-4 py-3 text-left text-sm md:text-base font-semibold text-text border-b border-gray-200">Prijs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Belotero revive</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 249</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">Profhilo</td>
                                        <td class="px-4 py-3 text-sm md:text-base text-text border-b border-gray-100">€ 300</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Tab Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(button => {
        button.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');

            // Remove active states from all tabs and contents
            tabLinks.forEach(btn => {
                btn.classList.remove('active', 'text-white');
                btn.classList.add('text-white/60');
                btn.setAttribute('aria-selected', 'false');
            });

            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Add active state to clicked tab and show its content
            this.classList.remove('text-white/60');
            this.classList.add('active', 'text-white');
            this.setAttribute('aria-selected', 'true');

            const targetContent = document.getElementById(tabId);
            if (targetContent) {
                targetContent.classList.remove('hidden');
            }
        });
    });
});
</script>

<?php
// Reviews Section
get_template_part('sections/reviews-section');
?>

<?php get_footer(); ?>
