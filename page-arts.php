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
                    class="w-auto h-auto overflow-hidden rounded-lg"
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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 pt-6">

                    <!-- Years Experience -->
                    <div class="text-center">
                        <div class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary font-heading leading-none mb-3">
                            14<span class="text-4xl lg:text-5xl xl:text-6xl">+</span>
                        </div>
                        <p class="text-sm lg:text-base text-gray-700 font-medium">
                            Jaar Ervaring
                        </p>
                    </div>

                    <!-- Happy Clients -->
                    <div class="text-center">
                        <div class="text-5xl lg:text-6xl xl:text-7xl font-bold text-primary font-heading leading-none mb-3">
                            15<span class="text-4xl lg:text-5xl xl:text-6xl">K</span>
                        </div>
                        <p class="text-sm lg:text-base text-gray-700 font-medium">
                            Gelukkige Klanten
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Loopbaan & Certificaties Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">

        <!-- Section Title -->
        <h2 class="font-heading text-2xl md:text-3xl text-center font-bold text-primary mb-12">
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
                get_template_part('templates/certification-card', null, array('cert' => $cert));
            endforeach;
            ?>

        </div>

    </div>
</section>

<!-- Arts Introduction Text Section -->
<section class="py-6 md:py-8 lg:py-12">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                Als cosmetisch arts vind ik het belangrijk dat je weet wie je behandelt. Hieronder vind je een aantal kernpunten die mijn werkwijze, expertise en professionele standaarden weerspiegelen. Zo weet je zeker dat je in goede, bekwame handen bent.
            </p>
        </div>
    </div>
</section>

<!-- Mission and Vision Section -->
<section class="py-12 md:py-16 lg:py-20 ">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 max-w-6xl mx-auto">

            <!-- Mission -->
            <article class="space-y-6 text-center lg:text-left">
                <h2 class="font-heading text-3xl md:text-4xl text-primary">
                    Missie
                </h2>
                <img
                    src="<?php echo get_image_url('mission.jpg'); ?>"
                    alt="Missie decorative pattern"
                    width="1000"
                    height="400"
                    class="w-full h-auto rounded-lg">
                <div class="bg-white p-6 ">
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        Mijn missie is om jouw natuurlijke schoonheid op een veilige, deskundige en persoonlijke manier te versterken. Samen streven we naar subtiele, verfijnde resultaten die perfect bij jou passen. Ik luister naar jouw wensen en zorg dat je je niet alleen mooier, maar ook zelfverzekerder voelt. Jouw veiligheid en comfort staan centraal, zodat jouw unieke uitstraling jouw zelfvertrouwen vergroot.
                    </p>
                </div>
            </article>

            <!-- Vision -->
            <article class="flex flex-col space-y-6 text-center lg:text-left">
                <div class="order-3 lg:order-1 p-6 ">
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">
                        In mijn behandelingen staat veiligheid altijd voorop. Ik neem de tijd om te luisteren naar jouw wensen, geef eerlijk en realistisch advies en werk uitsluitend met hoogwaardige producten en bewezen technieken. Mijn doel is dat jij na iedere behandeling vol vertrouwen en met een glimlach naar buiten stapt op een manier die nog steeds helemaal 'jij' voelt, maar dan net een beetje frisser, zachter of stralender.
                    </p>
                </div>
                <h2 class="order-1 lg:order-2 font-heading text-3xl md:text-4xl text-primary">
                    Visie
                </h2>
                <img
                    src="<?php echo get_image_url('vision.png'); ?>"
                    alt="Visie decorative pattern"
                    width="834"
                    height="333"
                    class="order-2 lg:order-3 w-full h-auto rounded-lg">
            </article>

        </div>
    </div>
</section>

<!-- Professional Qualities Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center max-w-6xl mx-auto">

            <!-- Doctor Image -->
            <div class="order-2 lg:order-1">
                <img
                    src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/arwind3.jpg'); ?>"
                    alt="Arwind Chigharoe, MD, Cosmetisch Arts"
                    width="1920"
                    height="2560"
                    class="w-full h-auto rounded-lg"
                    loading="lazy">
            </div>

            <!-- Checklist -->
            <div class="order-1 lg:order-2">
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <svg class="w-8 h-8 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base md:text-lg text-gray-700">
                            Medische deskundigheid
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-8 h-8 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base md:text-lg text-gray-700">
                            KNMG-erkend cosmetisch arts
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-8 h-8 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base md:text-lg text-gray-700">
                            Natuurlijke en verfijnde resultaten
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-8 h-8 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base md:text-lg text-gray-700">
                            Persoonlijke en eerlijke benadering
                        </span>
                    </li>
                    <li class="flex items-start gap-4">
                        <svg class="w-8 h-8 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base md:text-lg text-gray-700">
                            Continue ontwikkeling en innovatie
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>