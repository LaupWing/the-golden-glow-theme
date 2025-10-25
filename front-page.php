<?php

/**
 * Template Name: Front Page
 * The template for displaying the front page
 */

get_header(); ?>

<!-- Hero Section -->
<section class="relative w-full h-[50vh] md:h-[60vh] lg:h-[65vh] overflow-hidden">
    <!-- Hero Image -->
    <img
        src="<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/clinic-photo.jpg'); ?>"
        alt="The Golden Glow Clinic"
        width="1920"
        height="700"
        fetchpriority="high"
        class="absolute inset-0 w-full h-full object-cover object-center">

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

<!-- Banner Section -->
<section class="bg-background section-padding-sm">
    <div class="container mx-auto px-[5%] text-center">
        <h2 class="font-heading text-3xl md:text-5xl lg:text-6xl xl:text-[65px] font-semibold uppercase text-black mb-2 md:mb-4">
            The golden glow
        </h2>
        <h2 class="font-body text-sm md:text-base lg:text-lg font-medium uppercase text-black">
            DE beste kliniek in Amsterdam
        </h2>
    </div>
</section>

<!-- Treatment Categories Navigation -->
<section class="bg-background pb-6 md:pb-8">
    <div class="container mx-auto px-[5%]">
        <div class="flex flex-col items-center lg:flex-row flex-wrap justify-center gap-3 lg:gap-4">
            <a href="<?php echo esc_url(home_url('/spierontspanners/')); ?>"
                class="font-body font-medium text-sm uppercase px-8 py-3 rounded-full bg-primary text-white hover:bg-secondary hover:text-white transition-all duration-300">
                spierontspanners
            </a>
            <a href="<?php echo esc_url(home_url('/filler-behandeling/')); ?>"
                class="font-body font-medium text-sm uppercase px-8 py-3 rounded-full bg-primary text-white hover:bg-secondary hover:text-white transition-all duration-300">
                Gezichtsfillers
            </a>
            <a href="<?php echo esc_url(home_url('/biostimulatie/')); ?>"
                class="font-body font-medium text-sm uppercase px-8 py-3 rounded-full bg-primary text-white hover:bg-secondary hover:text-white transition-all duration-300">
                Biostimulatie
            </a>
            <a href="<?php echo esc_url(home_url('/medisch-afvallen/')); ?>"
                class="font-body font-medium text-sm uppercase px-8 py-3 rounded-full bg-primary text-white hover:bg-secondary hover:text-white transition-all duration-300">
                Medisch afvallen
            </a>
            <a href="<?php echo esc_url(home_url('/lasers/')); ?>"
                class="font-body font-medium text-sm uppercase px-8 py-3 rounded-full bg-primary text-white hover:bg-secondary hover:text-white transition-all duration-300">
                Lasers
            </a>
            <a href="<?php echo esc_url(home_url('/bodyfillers/')); ?>"
                class="font-body font-medium text-sm uppercase px-8 py-3 rounded-full bg-primary text-white hover:bg-secondary hover:text-white transition-all duration-300">
                Bodyfillers
            </a>
        </div>
    </div>
</section>

<!-- Behandelingen Section -->
<section class="section-padding">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Text Content -->
            <div class="lg:order-1">
                <div class="mb-8">
                    <h2 class="font-body text-base md:text-lg uppercase text-primary mb-6">
                        Behandelingen
                    </h2>

                    <div class="space-y-4 text-body-text leading-relaxed">
                        <p>
                            Bij The Golden Glow draait alles om maatwerk. Wij bieden hoogwaardige, verjongende en medisch
                            onderbouwde behandelingen, waaronder hyaluronzuur-fillers, biostimulatie en – als één van de
                            weinige klinieken in Amsterdam – de exclusieve Endolift-laserbehandeling.
                        </p>
                        <p>
                            Onze fillerbehandelingen doen meer dan fijne lijntjes verzachten: ze herstellen volume,
                            verfijnen contouren en geven de huid een frisse, jeugdige uitstraling. Wij werken uitsluitend
                            met kwalitatieve, natuurlijke fillers met een langdurig effect, waaronder hyaluronzuur en
                            poly-L-melkzuur. Deze laatste zetten wij ook succesvol in als body filler.
                        </p>
                        <p>
                            Ook voor medisch verantwoord afvallen bent u bij ons aan het juiste adres. Met een persoonlijk
                            behandelplan en professionele begeleiding helpen wij u gezond gewicht te verliezen en meer
                            energie te krijgen.
                        </p>
                        <p>
                            Kies voor een tijdloze uitstraling en voel u op uw best – met The Golden Glow. Plan vandaag
                            nog een vrijblijvend consult.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="lg:order-2">
                <?php $upload_url = wp_get_upload_dir()['baseurl']; ?>
                <img
                    src="<?php echo esc_url($upload_url . '/lady-shot.jpg'); ?>"
                    alt="The Golden Glow Behandelingen"
                    width="887"
                    height="1080"
                    class="w-full h-auto rounded-lg shadow-lg"
                    loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding bg-background from-white to-gray-50">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Image -->
            <div class="order-1">
                <?php $upload_url = wp_get_upload_dir()['baseurl']; ?>
                <img
                    src="<?php echo esc_url($upload_url . '/waiting-room.jpg'); ?>"
                    alt="The Golden Glow Kliniek"
                    width="1200"
                    height="800"
                    class="w-full h-auto rounded-lg shadow-lg"
                    loading="lazy">
            </div>

            <!-- Text Content -->
            <div class="order-2">
                <div class="mb-8">
                    <h2 class="font-body text-base md:text-lg uppercase text-primary mb-4">
                        The Golden Glow
                    </h2>
                    <h3 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-6">
                        Dé cosmetische kliniek in Amsterdam
                    </h3>

                    <div class="space-y-4 text-body-text leading-relaxed mb-8">
                        <p>
                            Bij The Golden Glow benaderen we esthetiek met een brede, holistische blik. Uiterlijke
                            verjonging beschouwen wij niet als het reduceren van losse rimpels of het streven naar
                            oppervlakkige perfectie, maar als het subtiel herstellen van evenwicht en expressie. Onze
                            analyse strekt zich uit over huidkwaliteit, gezichtsverhoudingen, mimiek én de individuele
                            uitstraling die ieder mens uniek maakt. Onze expertise omvat spierontspanners, fijne en
                            diepere fillers, bodycontouring, specialistische & geavanceerde biostimulatie alsook
                            begeleiding bij afvallen. Daarbij vertrouwen we uitsluitend op bewezen technieken en
                            hoogwaardige producten en merken die bekendstaan om hun veiligheid en effectiviteit.
                        </p>
                        <p>
                            Dokter Arwind Chigharoe blijft zich jaarlijks verdiepen in de nieuwste internationale
                            inzichten- via gerenommeerde congressen als IMCAS en AMWC – zodat behandelingen niet alleen
                            voldoen aan de hoogste veiligheidsnormen, maar tevens wetenschappelijk onderbouwd en
                            innovatief zijn. Zijn registratie bij het BIG-register en zijn certificering via de KNMG en
                            NVCG getuigen van onze toewijding aan zorgvuldigheid en kwaliteit.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="text-left md:text-center lg:text-left">
                        <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                            class="inline-block bg-primary text-white font-body font-medium text-sm uppercase px-8 py-3 rounded-full hover:bg-secondary hover:text-white transition-all duration-300">
                            Maak een afspraak
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Doctor Section -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Text Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-8">
                    <h2 class="font-body text-base md:text-lg uppercase text-primary mb-4">
                        Arwind Chigharoe
                    </h2>
                    <h3 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-6">
                        Cosmetische Arts, KNMG
                    </h3>

                    <div class="text-body-text leading-relaxed mb-8">
                        <p>
                            Afgestudeerd aan de Universiteit van Maastricht. Als BIG-geregistreerde arts heb ik gewerkt in
                            het Maastricht UMC+ en het VieCuri Medisch Centrum binnen de discipline chirurgie. De
                            cosmetische wereld heeft mij altijd geïnteresseerd en de keuze voor cosmetisch arts was een
                            logische stap. Gaandeweg werd zelfs duidelijk dat dit mijn roeping was. Inmiddels werk ik al
                            meer dan 14 jaar met veel plezier als cosmetisch arts in Amsterdam en ben ik gespecialiseerd
                            cosmetisch arts KNMG. Door het jaarlijks bijwonen van cosmetische congressen en trainingen zorg
                            ik ervoor dat ik deze accreditatie behoud, zodat ik mijn cliënten de beste zorg en kwaliteit kan
                            bieden in mijn cosmetische kliniek in Amsterdam.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="text-left md:text-center lg:text-center">
                        <a href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                            class="inline-block bg-primary text-white font-body font-medium text-sm uppercase px-8 py-3 rounded-full hover:bg-secondary hover:text-white transition-all duration-300">
                            Maak een afspraak
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="order-1 lg:order-2">
                <?php $upload_url = wp_get_upload_dir()['baseurl']; ?>
                <img
                    src="<?php echo esc_url($upload_url . '/arwind.jpg'); ?>"
                    alt="Arwind Chigharoe - Cosmetische Arts"
                    width="800"
                    height="1000"
                    class="w-full h-auto rounded-lg shadow-lg"
                    loading="lazy">
            </div>

        </div>
    </div>
</section>

<?php
// Include reusable reviews section
get_template_part('sections/reviews-section', null, [
    'custom_class' => '!py-0'
]);
?>

<!-- Blog Section -->
<section class="section-padding">
    <div class="container mx-auto px-[5%]">

        <!-- Blog Section Title -->
        <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center text-[#CB6843] mb-12">
            The golden glow blog
        </h2>

        <!-- Blog Posts Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <?php
            // Query the latest 4 blog posts
            $blog_args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $blog_query = new WP_Query($blog_args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    get_template_part('templates/blog-card-1', null, ['post_id' => get_the_ID()]);
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p class="col-span-full text-center text-gray-500">Geen blogposts gevonden.</p>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen',
    'faqs' => [
        [
            'question' => 'Is mijn leeftijd niet een belemmering voor deze behandeling?',
            'answer' => '
                <p>Opkomende lijntjes kunnen uitstekend aangepakt worden met spierontspanners. Wat aantrekkelijk is bij beginnende lijntjes, is dat deze vaak volledig verdwijnen na een behandeling. Als de rimpel echter meer doorleefd is en dieper, dan kan een combinatie van spierontspanners en een filler soms meer effectief zijn.</p>
                <p>Een significant pluspunt van spierontspanners is dat de behandeling tevens een preventieve werking heeft. Indien je op vroege termijn ingrijpt, zullen rimpels niet verder verdiepen, en is de kans groot dat je nooit nood hebt aan vulstoffen of andere procedures voor deze gebieden. Hoewel we idealiter wachten tot een persoon minstens 21 jaar is voor eender welke behandeling, is het toegestaan om vanaf 18 jaar behandelingen te ondergaan. Indien onze medisch specialist twijfels heeft over de realistischheid van je verwachtingen, zullen we hier openlijk met je over converseren.</p>
            '
        ],
        [
            'question' => 'Hoelang duurt het voordat ik weer kan werken?',
            'answer' => '
                <p>Je kunt onmiddellijk na de sessie weer uw normale bezigheden oppakken. Daarom wordt een behandeling met spierontspanners vaak aangeduid als een \'lunchpauze-behandeling\'. Afgezien van een tijdelijke milde roodheid die binnen een half uur vervaagt, en zelden een kleine, goed te verhullen blauwe plek, is er vrijwel geen zichtbare indicatie van de behandeling.</p>
            '
        ],
        [
            'question' => 'Hoelang werkt de behandeling?',
            'answer' => '
                <p>Hoewel het middel zelf na 3-6 maanden is uitgewerkt, heeft het wel een permanent verbeterend effect op de behandelde regio. Dit is vooral van toepassing wanneer het middel gedurende langere tijd (enkele jaren) is toegepast.</p>
                <p>Dit komt doordat het gebied gedurende enkele jaren beperkt is in beweging. Hierdoor blijven oppervlakkige lijntjes in de huid en herstellen ze vaak volledig. Het is alsof de tijd feitelijk stil is gezet. Bovendien raakt u gewend om de relevante spier niet meer te gebruiken. Als gevolg hiervan zal bijvoorbeeld uw neiging tot fronsen verminderd zijn in vergelijking met vroeger. Dit draagt bij aan een langdurige verbetering van dit specifieke gebied. Er zijn zelfs enkele studies die suggereren dat u, om de hierboven beschreven redenen, na enkele jaren gebruik van spierontspanners gerust een jaar kunt pauzeren om het effect te behouden.</p>
            '
        ]
    ]
]);
?>

<?php get_footer(); ?>