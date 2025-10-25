<?php

/**
 * Template part for clinic information section
 *
 * @package The_Golden_Glow
 */

$clinic_image = esc_url(wp_get_upload_dir()['baseurl'] . '/waiting-room.png');
$button_url = 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL';
$custom_class = $args['custom_class'] ?? '';
?>

<section class="section-padding <?php echo esc_attr($custom_class); ?>">
    <div class="container mx-auto px-[5%]">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <!-- Clinic Information -->
            <article class="space-y-6">
                <h2 class="font-heading text-3xl md:text-4xl text-primary">
                    THE GOLDEN GLOW
                </h2>

                <h3 class="font-heading text-2xl md:text-3xl text-text">
                    Dé cosmetische kliniek in Amsterdam
                </h3>

                <div class="space-y-4 text-base md:text-lg text-body-text leading-relaxed">
                    <p>
                        Bij The Golden Glow benaderen we esthetiek met een brede, holistische blik. Uiterlijke verjonging beschouwen wij niet als het reduceren van losse rimpels of het streven naar oppervlakkige perfectie, maar als het subtiel herstellen van evenwicht en expressie. Onze analyse strekt zich uit over huidkwaliteit, gezichtsverhoudingen, mimiek én de individuele uitstraling die ieder mens uniek maakt.
                    </p>
                    <p>
                        Onze expertise omvat spierontspanners, fijne en diepere fillers, bodycontouring, specialistische & geavanceerde biostimulatie alsook begeleiding bij afvallen. Daarbij vertrouwen we uitsluitend op bewezen technieken en hoogwaardige producten en merken die bekendstaan om hun veiligheid en effectiviteit.
                    </p>
                    <p>
                        Dokter Arwind Chigharoe blijft zich jaarlijks verdiepen in de nieuwste internationale inzichten- via gerenommeerde congressen als IMCAS en AMWC – zodat behandelingen niet alleen voldoen aan de hoogste veiligheidsnormen, maar tevens wetenschappelijk onderbouwd en innovatief zijn. Zijn registratie bij het BIG-register en zijn certificering via de KNMG en NVCG getuigen van onze toewijding aan zorgvuldigheid en kwaliteit.
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="text-center lg:text-left pt-4">
                    <a
                        href="<?php echo esc_url($button_url); ?>"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                </div>
            </article>

            <!-- Clinic Image -->
            <div class="order-first lg:order-last">
                <img
                    src="<?php echo $clinic_image; ?>"
                    alt="The Golden Glow wachtkamer"
                    width="1431"
                    height="1536"
                    loading="lazy"
                    decoding="async"
                    class="w-full h-auto rounded-lg">
            </div>

        </div>
    </div>
</section>