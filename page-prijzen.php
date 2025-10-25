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
                <nav class="flex md:flex-col md:flex-shrink-0 md:w-52 bg-primary border-b md:border-b-0 md:border-r border-gray-200 relative md:overflow-y-auto min-h-0" role="tablist" aria-label="Prijzen categorieën">
                    <!-- Mobile: Wrapping categories with expandable overflow -->
                    <div class="flex flex-wrap md:flex-col md:flex-nowrap overflow-hidden md:overflow-visible w-full transition-all duration-300" id="category-container">
                        <button
                            class="tab-link active px-4 py-4 whitespace-nowrap text-white hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-botox"
                            data-label="Botox"
                            role="tab"
                            aria-selected="true"
                            aria-controls="tab-botox">
                            Botox
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-fillers"
                            data-label="Fillers"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-fillers">
                            Fillers
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-pdo"
                            data-label="PDO"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-pdo">
                            PDO
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-tixel"
                            data-label="Tixel"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-tixel">
                            Tixel
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-skinboosters"
                            data-label="Skinboosters"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-skinboosters">
                            Skinboosters
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-lasers"
                            data-label="Lasers"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-lasers">
                            Lasers
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-biostimulators"
                            data-label="Biostimulators"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-biostimulators">
                            Biostimulators
                        </button>
                        <button
                            class="tab-link px-4 py-4 whitespace-nowrap text-white/60 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer md:w-full md:text-left text-center flex-shrink-0"
                            data-tab="tab-other"
                            data-label="Overige"
                            role="tab"
                            aria-selected="false"
                            aria-controls="tab-other">
                            Overige
                        </button>
                    </div>
                    <button
                        id="expand-button"
                        class="md:hidden px-2 py-4 whitespace-nowrap text-white/80 hover:text-white transition-colors duration-200 border-none bg-transparent cursor-pointer flex items-center gap-2 flex-shrink-0 absolute bottom-0 right-0"
                        aria-label="Toon meer categorieën">
                        <!-- <span>Meer</span> -->
                        <svg class="w-6 h-6 transition-transform duration-300" id="expand-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </nav>

                <!-- Tabs Content -->
                <div class="flex-1 p-6 md:p-8 md:min-h-[600px]">

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

                    <!-- Lasers Tab (Placeholder) -->
                    <div id="tab-lasers" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-lasers">
                        <div class="prose max-w-none">
                            <p class="text-text text-sm md:text-base leading-relaxed">
                                Prijzen voor laserbehandelingen volgen binnenkort. Neem contact op voor meer informatie.
                            </p>
                        </div>
                    </div>

                    <!-- Biostimulators Tab (Placeholder) -->
                    <div id="tab-biostimulators" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-biostimulators">
                        <div class="prose max-w-none">
                            <p class="text-text text-sm md:text-base leading-relaxed">
                                Prijzen voor biostimulators volgen binnenkort. Neem contact op voor meer informatie.
                            </p>
                        </div>
                    </div>

                    <!-- Other Tab (Placeholder) -->
                    <div id="tab-other" class="tab-content hidden" role="tabpanel" aria-labelledby="tab-other">
                        <div class="prose max-w-none">
                            <p class="text-text text-sm md:text-base leading-relaxed">
                                Prijzen voor overige behandelingen volgen binnenkort. Neem contact op voor meer informatie.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Tab Functionality -->
<style>
    @media (max-width: 767px) {
        .hidden-mobile {
            display: none !important;
        }

        .hidden-mobile.expanded {
            display: block !important;
        }

        /* Hide scrollbar but keep functionality */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');
        const expandButton = document.getElementById('expand-button');
        const expandIcon = document.getElementById('expand-icon');
        const hiddenCategories = document.querySelectorAll('.hidden-mobile');
        let isExpanded = false;

        // Expand button functionality (mobile only)
        const categoryContainer = document.getElementById('category-container');
        if (expandButton && categoryContainer) {
            expandButton.addEventListener('click', function() {
                isExpanded = !isExpanded;

                // Toggle container height
                if (isExpanded) {
                    categoryContainer.style.maxHeight = 'none';
                } else {
                    categoryContainer.style.maxHeight = '56px';
                }

                // Rotate icon
                if (expandIcon) {
                    expandIcon.style.transform = isExpanded ? 'rotate(180deg)' : 'rotate(0deg)';
                }

                // Update button text
                const buttonText = expandButton.querySelector('span');
                if (buttonText) {
                    buttonText.textContent = isExpanded ? 'Minder' : 'Meer';
                }
            });
        }

        // Tab switching functionality
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