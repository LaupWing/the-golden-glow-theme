<?php

/**
 * Template Name: Arts Page
 * Template for displaying the Arts page
 */

get_header(); ?>

<!-- Arts Hero Banner Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Image -->
            <div class="order-1 lg:order-1">
                <div class="relative w-full">
                    <img
                        src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/arts_intro_image-1.png'); ?>"
                        alt="Arwind Chigharoe, MD, Cosmetisch Arts KNMG"
                        width="1400"
                        height="800"
                        class="w-full h-auto object-cover rounded-lg shadow-lg">
                </div>
            </div>

            <!-- Content -->
            <div class="order-2 lg:order-2">
                <div class="space-y-6">
                    <!-- Doctor Name -->
                    <header>
                        <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl text-text mb-4">
                            Arwind Chigharoe M.D.
                        </h1>
                    </header>

                    <!-- Description -->
                    <div class="text-gray-700 text-base md:text-lg leading-relaxed">
                        <p>
                            Met meer dan 14 jaar ervaring werk ik met veel plezier als cosmetisch arts in
                            Amsterdam. Daarnaast heb ik de specialisatietitel KNMG en heb ik The Golden Glow
                            opgericht.
                        </p>
                    </div>

                    <!-- Statistics -->
                    <div class="grid grid-cols-2 gap-6 pt-6">
                        <!-- Stat 1 -->
                        <div class="text-center lg:text-left">
                            <div class="font-heading text-5xl md:text-6xl font-bold text-primary mb-2">
                                14<span class="text-4xl md:text-5xl">+</span>
                            </div>
                            <p class="text-gray-700 text-sm md:text-base">
                                Jaar Ervaring
                            </p>
                        </div>

                        <!-- Stat 2 -->
                        <div class="text-center lg:text-left">
                            <div class="font-heading text-5xl md:text-6xl font-bold text-primary mb-2">
                                15<span class="text-4xl md:text-5xl">K</span>
                            </div>
                            <p class="text-gray-700 text-sm md:text-base">
                                Gelukkige Klanten
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-heading text-3xl md:text-4xl text-center text-text mb-12">
                Expertise & Specialisaties
            </h2>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Expertise Item -->
                <article class="bg-background p-6 rounded-lg">
                    <h3 class="font-heading text-xl text-primary mb-3">
                        Fillerbehandelingen
                    </h3>
                    <p class="text-gray-700">
                        Specialist in gezichts- en lipfillers voor natuurlijke resultaten en
                        gezichtscontouren die bij u passen.
                    </p>
                </article>

                <!-- Expertise Item -->
                <article class="bg-background p-6 rounded-lg">
                    <h3 class="font-heading text-xl text-primary mb-3">
                        Spierontspanners
                    </h3>
                    <p class="text-gray-700">
                        Ervaring met spierontspanners voor het verminderen van rimpels en
                        het creëren van een fris en jong uiterlijk.
                    </p>
                </article>

                <!-- Expertise Item -->
                <article class="bg-background p-6 rounded-lg">
                    <h3 class="font-heading text-xl text-primary mb-3">
                        Biostimulatie
                    </h3>
                    <p class="text-gray-700">
                        Geavanceerde technieken zoals Profhilo, Sculptra en skinboosters voor
                        huidverbetering en natuurlijke verjonging.
                    </p>
                </article>

                <!-- Expertise Item -->
                <article class="bg-background p-6 rounded-lg">
                    <h3 class="font-heading text-xl text-primary mb-3">
                        Medisch Afvallen
                    </h3>
                    <p class="text-gray-700">
                        Begeleiding bij medisch afvallen met de nieuwste medicatie en
                        persoonlijk behandelplan.
                    </p>
                </article>

                <!-- Expertise Item -->
                <article class="bg-background p-6 rounded-lg">
                    <h3 class="font-heading text-xl text-primary mb-3">
                        Lasertherapie
                    </h3>
                    <p class="text-gray-700">
                        Expertise in moderne lasertechnieken zoals Tixel en Endolift voor
                        huidverbetering en versteviging.
                    </p>
                </article>

                <!-- Expertise Item -->
                <article class="bg-background p-6 rounded-lg">
                    <h3 class="font-heading text-xl text-primary mb-3">
                        Body Fillers
                    </h3>
                    <p class="text-gray-700">
                        Gespecialiseerd in body contouring en volumebehandelingen zoals
                        bilfillers en hip dips.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Credentials Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-heading text-3xl md:text-4xl text-center text-text mb-12">
                Kwalificaties & Registraties
            </h2>

            <div class="space-y-6">
                <article class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center" aria-hidden="true">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-xl text-text mb-2">BIG-geregistreerd Arts</h3>
                        <p class="text-gray-700">
                            Geregistreerd in het BIG-register, het officiële register van erkende
                            zorgverleners in Nederland.
                        </p>
                    </div>
                </article>

                <article class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center" aria-hidden="true">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-xl text-text mb-2">Specialisatietitel KNMG</h3>
                        <p class="text-gray-700">
                            Erkend specialist in de cosmetische geneeskunde met officiële
                            specialisatietitel van de KNMG.
                        </p>
                    </div>
                </article>

                <article class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center" aria-hidden="true">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-xl text-text mb-2">14+ Jaar Ervaring</h3>
                        <p class="text-gray-700">
                            Meer dan 14 jaar ervaring in esthetische geneeskunde met duizenden
                            tevreden patiënten.
                        </p>
                    </div>
                </article>

                <article class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center" aria-hidden="true">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-xl text-text mb-2">Continue Scholing</h3>
                        <p class="text-gray-700">
                            Regelmatige bijscholing en trainingen in de nieuwste technieken en
                            ontwikkelingen in de esthetische geneeskunde.
                        </p>
                    </div>
                </article>

                <article class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center" aria-hidden="true">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-heading text-xl text-text mb-2">Gecertificeerde Producten</h3>
                        <p class="text-gray-700">
                            Werkt uitsluitend met hoogwaardige, CE-gecertificeerde producten van
                            gerenommeerde merken.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy Section -->
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-heading text-3xl md:text-4xl text-text mb-8">
                Mijn Werkwijze
            </h2>

            <div class="space-y-6 text-gray-700 text-left md:text-center leading-relaxed">
                <p class="text-lg">
                    Bij The Golden Glow geloof ik in een persoonlijke aanpak waarbij uw wensen en verwachtingen
                    centraal staan. Tijdens een uitgebreide consultatie neem ik de tijd om uw wensen te bespreken
                    en een behandelplan op maat te maken.
                </p>

                <p class="text-lg">
                    Ik streef naar natuurlijke resultaten die uw natuurlijke schoonheid versterken.
                    Veiligheid en kwaliteit staan altijd voorop, en ik werk alleen met de beste
                    producten en technieken die wetenschappelijk bewezen effectief en veilig zijn.
                </p>

                <p class="text-lg">
                    Na uw behandeling blijf ik beschikbaar voor nazorg en begeleiding om te zorgen
                    dat u tevreden bent met het resultaat.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-12 md:py-16 lg:py-20 bg-primary text-white">
    <div class="container mx-auto px-[5%] text-center">
        <h2 class="font-heading text-3xl md:text-4xl mb-6">
            Plan een Persoonlijke Consultatie
        </h2>
        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto text-white/90">
            Wilt u kennismaken en uw mogelijkheden bespreken?
            Maak een afspraak voor een persoonlijk en vrijblijvend consult.
        </p>
        <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
            class="inline-block bg-white text-primary font-heading text-sm uppercase tracking-widest px-8 py-4 rounded-full hover:bg-background hover:text-text transition-all duration-300">
            Maak een afspraak
        </a>
    </div>
</section>

<?php get_footer(); ?>
