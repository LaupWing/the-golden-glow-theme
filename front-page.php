<?php

/**
 * Template Name: Front Page
 * The template for displaying the front page
 */

get_header(); ?>

<!-- Hero Section -->
<section class="relative w-full h-[600px] md:h-[700px] lg:h-[800px] bg-cover bg-center bg-no-repeat"
    style="background-image: url('<?php echo esc_url(wp_get_upload_dir()['baseurl'] . '/kliniek-foto.jpg'); ?>'); background-position: center -65px;">

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
<section class="hidden lg:block bg-[#FAF7F2] py-12">
    <div class="container mx-auto px-[5%] text-center">
        <h2 class="font-heading text-5xl lg:text-6xl xl:text-[65px] font-semibold uppercase text-black mb-4">
            The golden glow
        </h2>
        <h2 class="font-body text-base md:text-lg font-medium uppercase text-black">
            DE beste kliniek in Amsterdam
        </h2>
    </div>
</section>

<!-- Treatment Categories Navigation -->
<section class="hidden lg:block bg-[#FAF7F2] pb-8">
    <div class="container mx-auto px-[5%]">
        <div class="flex flex-wrap justify-center gap-4">
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
<section class="py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Text Content -->
            <div class="order-2 lg:order-1">
                <div class="mb-8">
                    <h2 class="font-body text-base md:text-lg uppercase text-primary mb-6">
                        Behandelingen
                    </h2>

                    <div class="space-y-4 text-gray-700 leading-relaxed">
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
            <div class="order-1 lg:order-2">
                <?php $upload_url = wp_get_upload_dir()['baseurl']; ?>
                <img src="<?php echo esc_url($upload_url . '/Shot-Lady-left-banner1-e1750504577494.jpg'); ?>"
                     alt="The Golden Glow Behandelingen"
                     class="w-full h-auto rounded-lg shadow-lg"
                     srcset="<?php echo esc_url($upload_url . '/Shot-Lady-left-banner1-e1750504577494.jpg'); ?> 887w,
                             <?php echo esc_url($upload_url . '/Shot-Lady-left-banner1-e1750504577494-329x400.jpg'); ?> 329w,
                             <?php echo esc_url($upload_url . '/Shot-Lady-left-banner1-e1750504577494-657x800.jpg'); ?> 657w,
                             <?php echo esc_url($upload_url . '/Shot-Lady-left-banner1-e1750504577494-768x935.jpg'); ?> 768w"
                     sizes="(max-width: 887px) 100vw, 887px"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-12 md:py-16 lg:py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Image -->
            <div class="order-1">
                <img src="https://thegoldenglow.nl/wp-content/uploads/wachtkamer-vogels-745x800.png"
                     alt="The Golden Glow Kliniek"
                     class="w-full h-auto rounded-lg shadow-lg"
                     srcset="https://thegoldenglow.nl/wp-content/uploads/wachtkamer-vogels-745x800.png 745w,
                             https://thegoldenglow.nl/wp-content/uploads/wachtkamer-vogels-373x400.png 373w,
                             https://thegoldenglow.nl/wp-content/uploads/wachtkamer-vogels-768x824.png 768w,
                             https://thegoldenglow.nl/wp-content/uploads/wachtkamer-vogels.png 1431w"
                     sizes="(max-width: 745px) 100vw, 745px"
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

                    <div class="space-y-4 text-gray-700 leading-relaxed mb-8">
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
<section class="py-12 md:py-16 lg:py-20 bg-white">
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

                    <div class="text-gray-700 leading-relaxed mb-8">
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
                <img src="https://thegoldenglow.nl/wp-content/uploads/IMG_20250620_161545-2-scaled-e1753473185632-768x472.jpg"
                     alt="Arwind Chigharoe - Cosmetische Arts"
                     class="w-full h-auto rounded-lg shadow-lg"
                     srcset="https://thegoldenglow.nl/wp-content/uploads/IMG_20250620_161545-2-scaled-e1753473185632-768x472.jpg 768w,
                             https://thegoldenglow.nl/wp-content/uploads/IMG_20250620_161545-2-scaled-e1753473185632-652x400.jpg 652w,
                             https://thegoldenglow.nl/wp-content/uploads/IMG_20250620_161545-2-scaled-e1753473185632.jpg 1246w"
                     sizes="(max-width: 768px) 100vw, 768px"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="py-12 md:py-16 lg:py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-[5%]">

        <!-- Section Title -->
        <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center text-[#CB6843] mb-12">
            Wat onze klanten zeggen
        </h2>

        <!-- Reviews Grid -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">

            <!-- Review 1 -->
            <div class="flex items-start gap-4 bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex-shrink-0 w-16 h-16">
                    <img src="https://thegoldenglow.nl/wp-content/uploads/kleur2-280x280.png"
                         alt="Review"
                         class="w-full h-full rounded-full object-cover"
                         loading="lazy">
                </div>
                <div class="flex-1">
                    <h6 class="text-primary text-lg mb-2">★★★★★</h6>
                    <p class="text-gray-700 italic leading-relaxed">
                        "Ik ben al meer dan 10 jaar een cliënt en ik wil nooit meer anders. Prachtig gestylde kliniek waarbij hygiëne voorop staat! Arwind is persoonlijk, stelt je gerust, neemt de tijd, zet je in je kracht en zal altijd eerlijk advies geven. Als je in de stoel ligt ervaar je Professionaliteit in combinatie met een vleugje humor. Daarbij zijn de eindresultaten keer op keer uitmuntend." - Lotta
                    </p>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="flex items-start gap-4 bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 md:flex-row-reverse md:text-right">
                <div class="flex-shrink-0 w-16 h-16">
                    <img src="https://thegoldenglow.nl/wp-content/uploads/kleur1-kopie-280x280.png"
                         alt="Review"
                         class="w-full h-full rounded-full object-cover"
                         loading="lazy">
                </div>
                <div class="flex-1">
                    <h6 class="text-primary text-lg mb-2">★★★★★</h6>
                    <p class="text-gray-700 italic leading-relaxed">
                        "Ik ben fan!! Dr.Arwind is heel erg professioneel, vriendelijk en neemt vooral zijn tijd voor zijn cliënten. Ik ben heel goed geholpen door hem en ben heel erg blij met de resultaat voor mijn behandeling. Zijn praktijk is heel goed bereikbaar. Personeel is ook heel vriendelijk. Ik raad het iedereen aan, ik ben in fan.. en niet te vergeten de tarieven zijn ook heel goed.. kortom, GEWELDIG!" – Banafshe .V
                    </p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="flex items-start gap-4 bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex-shrink-0 w-16 h-16">
                    <img src="https://thegoldenglow.nl/wp-content/uploads/kleur2-280x280.png"
                         alt="Review"
                         class="w-full h-full rounded-full object-cover"
                         loading="lazy">
                </div>
                <div class="flex-1">
                    <h6 class="text-primary text-lg mb-2">★★★★★</h6>
                    <p class="text-gray-700 italic leading-relaxed">
                        "Heel vriendelijk ontvangen, professioneel advies en duidelijke uitleg. Zeer tevreden met het resultaat, boven verwachting!" - Rene
                    </p>
                </div>
            </div>

            <!-- Review 4 -->
            <div class="flex items-start gap-4 bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 md:flex-row-reverse md:text-right">
                <div class="flex-shrink-0 w-16 h-16">
                    <img src="https://thegoldenglow.nl/wp-content/uploads/kleur1-kopie-280x280.png"
                         alt="Review"
                         class="w-full h-full rounded-full object-cover"
                         loading="lazy">
                </div>
                <div class="flex-1">
                    <h6 class="text-primary text-lg mb-2">★★★★★</h6>
                    <p class="text-gray-700 italic leading-relaxed">
                        "Eerste keer een spierontspannende behandeling en filler gedaan. Dit is erg deskundig gedaan met goede uitleg. (mijn dochter heeft wel 100 vragen gesteld haha)" – Maaike
                    </p>
                </div>
            </div>

        </div>

        <!-- Blog Section Title -->
        <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl font-semibold uppercase text-center text-[#CB6843] mt-16 mb-12">
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
            ?>

                <!-- Blog Post Card -->
                <article class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <!-- Post Title -->
                        <h3 class="text-lg font-heading text-secondary mb-3 leading-tight">
                            <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors duration-300">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <!-- Post Meta -->
                        <div class="flex items-center gap-2 text-xs text-gray-400 mb-4">
                            <span><?php echo get_the_author(); ?></span>
                            <span>-</span>
                            <span><?php echo get_the_date('d/m/Y'); ?></span>
                        </div>

                        <!-- Post Excerpt -->
                        <?php if (has_excerpt()) : ?>
                            <div class="text-sm text-gray-600 leading-relaxed mb-4">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Read More Link -->
                        <a href="<?php the_permalink(); ?>"
                           class="inline-block text-xs font-bold text-primary hover:text-secondary transition-colors duration-300">
                            Leer meer »
                        </a>
                    </div>
                </article>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p class="col-span-full text-center text-gray-500">Geen blogposts gevonden.</p>
            <?php endif; ?>

        </div>

    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-16 lg:py-20 bg-[#FAF7F2]">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8 md:p-12">

            <!-- Section Title -->
            <h2 class="font-heading text-2xl md:text-3xl font-semibold text-primary mb-8 text-left md:text-center">
                Veelgestelde vragen
            </h2>

            <!-- FAQ Accordion -->
            <div class="space-y-4">

                <!-- FAQ Item 1 -->
                <details class="group border border-gray-200 rounded-lg overflow-hidden" open>
                    <summary class="flex items-center justify-between cursor-pointer p-6 hover:bg-gray-50 transition-colors duration-200">
                        <span class="font-body font-medium text-gray-800 pr-4">
                            Is mijn leeftijd niet een belemmering voor deze behandeling?
                        </span>
                        <span class="flex-shrink-0 w-5 h-5 text-primary">
                            <svg class="w-5 h-5 group-open:hidden" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                            </svg>
                            <svg class="w-5 h-5 hidden group-open:block" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Opkomende lijntjes kunnen uitstekend aangepakt worden met spierontspanners. Wat aantrekkelijk is bij beginnende lijntjes, is dat deze vaak volledig verdwijnen na een behandeling. Als de rimpel echter meer doorleefd is en dieper, dan kan een combinatie van spierontspanners en een filler soms meer effectief zijn.
                        </p>
                        <p>
                            Een significant pluspunt van spierontspanners is dat de behandeling tevens een preventieve werking heeft. Indien je op vroege termijn ingrijpt, zullen rimpels niet verder verdiepen, en is de kans groot dat je nooit nood hebt aan vulstoffen of andere procedures voor deze gebieden. Hoewel we idealiter wachten tot een persoon minstens 21 jaar is voor eender welke behandeling, is het toegestaan om vanaf 18 jaar behandelingen te ondergaan. Indien onze medisch specialist twijfels heeft over de realistischheid van je verwachtingen, zullen we hier openlijk met je over converseren.
                        </p>
                    </div>
                </details>

                <!-- FAQ Item 2 -->
                <details class="group border border-gray-200 rounded-lg overflow-hidden">
                    <summary class="flex items-center justify-between cursor-pointer p-6 hover:bg-gray-50 transition-colors duration-200">
                        <span class="font-body font-medium text-gray-800 pr-4">
                            Hoelang duurt het voordat ik weer kan werken?
                        </span>
                        <span class="flex-shrink-0 w-5 h-5 text-primary">
                            <svg class="w-5 h-5 group-open:hidden" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                            </svg>
                            <svg class="w-5 h-5 hidden group-open:block" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-700 leading-relaxed">
                        <p>
                            Je kunt onmiddellijk na de sessie weer uw normale bezigheden oppakken. Daarom wordt een behandeling met spierontspanners vaak aangeduid als een 'lunchpauze-behandeling'. Afgezien van een tijdelijke milde roodheid die binnen een half uur vervaagt, en zelden een kleine, goed te verhullen blauwe plek, is er vrijwel geen zichtbare indicatie van de behandeling.
                        </p>
                    </div>
                </details>

                <!-- FAQ Item 3 -->
                <details class="group border border-gray-200 rounded-lg overflow-hidden">
                    <summary class="flex items-center justify-between cursor-pointer p-6 hover:bg-gray-50 transition-colors duration-200">
                        <span class="font-body font-medium text-gray-800 pr-4">
                            Hoelang werkt de behandeling?
                        </span>
                        <span class="flex-shrink-0 w-5 h-5 text-primary">
                            <svg class="w-5 h-5 group-open:hidden" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                            </svg>
                            <svg class="w-5 h-5 hidden group-open:block" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="px-6 pb-6 text-gray-700 leading-relaxed space-y-4">
                        <p>
                            Hoewel het middel zelf na 3-6 maanden is uitgewerkt, heeft het wel een permanent verbeterend effect op de behandelde regio. Dit is vooral van toepassing wanneer het middel gedurende langere tijd (enkele jaren) is toegepast.
                        </p>
                        <p>
                            Dit komt doordat het gebied gedurende enkele jaren beperkt is in beweging. Hierdoor blijven oppervlakkige lijntjes in de huid en herstellen ze vaak volledig. Het is alsof de tijd feitelijk stil is gezet. Bovendien raakt u gewend om de relevante spier niet meer te gebruiken. Als gevolg hiervan zal bijvoorbeeld uw neiging tot fronsen verminderd zijn in vergelijking met vroeger. Dit draagt bij aan een langdurige verbetering van dit specifieke gebied. Er zijn zelfs enkele studies die suggereren dat u, om de hierboven beschreven redenen, na enkele jaren gebruik van spierontspanners gerust een jaar kunt pauzeren om het effect te behouden.
                        </p>
                    </div>
                </details>

            </div>

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