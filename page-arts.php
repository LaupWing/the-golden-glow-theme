<?php

/**
 * Template Name: Arts Page
 * Template for displaying the Arts page
 */

get_header(); ?>

<!-- Arts Hero Banner Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Doctor Image -->
            <div class="order-1 lg:order-1">
                <img
                    src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/arwind2.png'); ?>"
                    alt="Arwind Chigharoe, MD, Cosmetisch Arts KNMG"
                    width="1020"
                    height="583"
                    class="w-full h-auto"
                    loading="eager">
            </div>

            <!-- Doctor Information -->
            <div class="order-2 lg:order-2 space-y-6">

                <!-- Doctor Name -->
                <h1 class="font-heading text-3xl md:text-4xl lg:text-5xl text-text">
                    Arwind Chigharoe M.D.
                </h1>

                <!-- Description -->
                <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                    Met meer dan 14 jaar ervaring werk ik met veel plezier als cosmetisch arts in Amsterdam. Daarnaast heb ik de specialisatietitel KNMG en heb ik The Golden Glow opgericht.
                </p>

                <!-- Statistics -->
                <div class="hidden md:grid grid-cols-2 gap-8 pt-4">

                    <!-- Years Experience -->
                    <div class="text-center lg:text-left">
                        <div class="text-5xl lg:text-6xl font-bold text-primary font-heading leading-none mb-2">
                            14<span class="text-4xl lg:text-5xl">+</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            Jaar Ervaring
                        </p>
                    </div>

                    <!-- Happy Clients -->
                    <div class="text-center lg:text-left">
                        <div class="text-5xl lg:text-6xl font-bold text-primary font-heading leading-none mb-2">
                            15<span class="text-4xl lg:text-5xl">K</span>
                        </div>
                        <p class="text-sm text-gray-700">
                            Gelukkige Klanten
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Loopbaan & Certificaties Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">

        <!-- Section Title -->
        <h2 class="font-heading text-3xl md:text-4xl text-center text-text mb-12">
            Loopbaan & Certificaties
        </h2>

        <!-- Certifications Grid -->
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">

            <?php
            $certifications = array(
                array(
                    'title' => 'MUMC+',
                    'description' => 'Maastricht University Medical Centre',
                    'url' => 'https://www.maastrichtuniversity.nl/nl'
                ),
                array(
                    'title' => 'NVCG+',
                    'description' => 'Nederlandse Vereniging Cosmetische Geneeskunde',
                    'url' => 'https://nvcg.nl/cosmetisch-arts-knmg/?cn-zipcode=1017GG&cn-radius=5.1&cn-latitude=&cn-longitude=&cn-near-coord=&cn-unit=km&cn-s=chigharoe'
                ),
                array(
                    'title' => 'KNMG',
                    'description' => 'Koninklijke Nederlandsche Maatschappij tot bevordering der Geneeskunst',
                    'url' => 'https://www.knmg.nl/'
                ),
                array(
                    'title' => 'BIG',
                    'description' => 'Beroepen in de Individuele Gezondheidszorg',
                    'url' => 'https://www.bigregister.nl/'
                ),
                array(
                    'title' => 'VvAA',
                    'description' => 'Uw partner in zorg en professionaliteit',
                    'url' => 'https://www.vvaa.nl/'
                ),
                array(
                    'title' => 'Geschillencommissie',
                    'description' => 'Geschillencommissie',
                    'url' => '#'
                )
            );

            foreach ($certifications as $cert) :
                get_template_part('template-parts/certification-card', null, array('cert' => $cert));
            endforeach;
            ?>

        </div>

    </div>
</section>

<!-- Arts Introduction Text Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                Als cosmetisch arts vind ik het belangrijk dat je weet wie je behandelt. Hieronder vind je een aantal kernpunten die mijn werkwijze, expertise en professionele standaarden weerspiegelen. Zo weet je zeker dat je in goede, bekwame handen bent.
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>