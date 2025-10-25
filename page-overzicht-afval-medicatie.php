<?php

/**
 * Template Name: Overzicht Afval Medicatie
 * Template for displaying the medication overview page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Overzicht Afvalmedicatie'
]);
?>

<!-- Page Introduction -->
<section class="py-12 md:py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto">
            <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary text-center mb-6">
                Afvalmedicatie
            </h2>
            <p class="text-body-text text-center leading-relaxed mb-8">
                De onderstaande medicijnen maken deel uit van de behandeling "Medisch afvallen" en worden uitsluitend
                als onderdeel van deze behandeling aangeboden. Alle medicatie is receptplichtig. Als u in aanmerking
                komt voor deze behandeling, zal de medicatie worden voorgeschreven door onze arts en verstrekt door
                een apotheker die bij ons is aangesloten.
            </p>
        </div>
    </div>
</section>

<!-- Wegovy Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-5xl mx-auto">
            <!-- Medication Image -->
            <div class="text-center mb-8">
                <img
                    src="<?php echo esc_url(wp_get_upload_dir()['baseurl']); ?>/wegovy.jpeg"
                    alt="Wegovy medisch afvallen the golden glow"
                    class="inline-block max-w-full h-auto rounded-lg shadow-md"
                    style="max-width: 438px;"
                    loading="lazy" />
            </div>

            <!-- Medication Content -->
            <div class="bg-white rounded-lg p-6 md:p-8 lg:p-10 shadow-sm">
                <h3 class="font-heading text-2xl md:text-3xl text-primary mb-6">Wegovy</h3>

                <p class="text-body-text leading-relaxed mb-6">
                    Wegovy is een medicijn dat de werkzame stof Semaglutide bevat, een GLP-1-receptoragonist die helpt
                    bij het reguleren van de voedselinname en het energieverbruik om gewichtsverlies te bevorderen. Het
                    wordt voorgeschreven als aanvullende therapie voor volwassenen met obesitas of overgewicht, die
                    daarnaast ten minste één aan overgewicht gerelateerde aandoening hebben, zoals diabetes type 2, hoge
                    bloeddruk of dyslipidemie (verhoogd cholesterol).
                </p>

                <ul class="space-y-3 text-body-text mb-8">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Toediening:</strong> Wekelijkse injectie met een prikpen</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werkzame stof:</strong> Semaglutide</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Doelgroep:</strong> Volwassenen met obesitas (BMI≥30) of overgewicht (BMI≥27) in combinatie met een gewichtsgerelateerde aandoening</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werking:</strong> Wegovy werkt op een vergelijkbare manier als het natuurlijke GLP-1-hormoon, door de eetlust te reguleren en het verzadigingsgevoel te versterken</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Bijwerkingen:</strong> Veelvoorkomende bijwerkingen zijn hoofdpijn, misselijkheid, diarree, obstipatie, braken en vermoeidheid</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Prijs:</strong> Wegovy is alleen verkrijgbaar als onderdeel van een medisch begeleid programma voor gewichtsverlies</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Start: €500 per maand</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Balance: €550 per maand</span>
                    </li>
                </ul>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a
                        href="/medisch-afvallen/"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200">
                        Meer informatie over de behandeling
                    </a>
                    <a
                        href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Saxenda Section -->
<section class="py-12 md:py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-5xl mx-auto">
            <!-- Medication Image -->
            <div class="text-center mb-8">
                <img
                    src="<?php echo esc_url(wp_get_upload_dir()['baseurl']); ?>/saxenda.jpg"
                    alt="Saxenda medisch afvallen"
                    class="inline-block max-w-full h-auto rounded-lg shadow-md"
                    style="max-width: 645px;"
                    loading="lazy" />
            </div>

            <!-- Medication Content -->
            <div class="bg-background rounded-lg p-6 md:p-8 lg:p-10 shadow-sm">
                <h3 class="font-heading text-2xl md:text-3xl text-primary mb-6" id="Saxenda">Saxenda</h3>

                <p class="text-body-text leading-relaxed mb-6">
                    Saxenda, met de werkzame stof Liraglutide, is een injecteerbaar medicijn dat speciaal is ontworpen om
                    volwassenen met obesitas te ondersteunen bij gewichtsverlies en het behouden van een gezond gewicht.
                    Dit receptplichtige geneesmiddel, ontwikkeld door Novo Nordisk, werkt door de eetlust te reguleren
                    en het gevoel van verzadiging te verhogen, wat vergelijkbaar is met het natuurlijke GLP-1-hormoon.
                </p>

                <ul class="space-y-3 text-body-text mb-8">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Toediening:</strong> Dagelijkse injectie met een prikpen</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werkzame stof:</strong> Liraglutide</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Doelgroep:</strong> Volwassenen met obesitas (BMI≥30) of met overgewicht (BMI≥27) in combinatie met een gewichtsgerelateerde aandoening</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werking:</strong> Saxenda bevordert gewichtsverlies door de eetlust te onderdrukken en de verzadiging te verhogen, wat helpt bij het verminderen van de calorie-inname</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Bijwerkingen:</strong> Veelvoorkomende bijwerkingen zijn misselijkheid, braken, diarree, obstipatie, hoofdpijn en vermoeidheid</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Prijs:</strong> Saxenda is alleen verkrijgbaar als onderdeel van een medisch programma voor gewichtsverlies en niet los te koop</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Start: €400 per maand</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Balance: €450 per maand</span>
                    </li>
                </ul>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a
                        href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                    <a
                        href="/medisch-afvallen/"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200">
                        Meer informatie over de behandeling
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rybelsus Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-5xl mx-auto">
            <!-- Medication Image -->
            <div class="text-center mb-8">
                <img
                    src="<?php echo esc_url(wp_get_upload_dir()['baseurl']); ?>/rybelsus.png"
                    alt="Rybelsus medisch afvallen"
                    class="inline-block max-w-full h-auto rounded-lg shadow-md"
                    style="max-width: 225px;"
                    loading="lazy" />
            </div>

            <!-- Medication Content -->
            <div class="bg-white rounded-lg p-6 md:p-8 lg:p-10 shadow-sm">
                <h3 class="font-heading text-2xl md:text-3xl text-primary mb-6">Rybelsus</h3>

                <p class="text-body-text leading-relaxed mb-6">
                    Rybelsus is een oraal medicijn dat wordt voorgeschreven voor de behandeling van diabetes type 2. Het
                    medicijn helpt bij het reguleren van de bloedsuikerspiegel door de insulineproductie te stimuleren
                    en de hoeveelheid glucose die door de lever wordt aangemaakt te verminderen. Hierdoor helpt Rybelsus
                    om de bloedsuikerwaarden binnen een gezond bereik te houden en kan het risico op complicaties zoals
                    hartaandoeningen, beroertes en nierschade verlagen.
                </p>

                <ul class="space-y-3 text-body-text mb-8">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Toediening:</strong> Eén keer per dag in pilvorm</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werkzame stof:</strong> Semaglutide</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Doelgroep:</strong> Personen met diabetes mellitus type 2</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werking:</strong> Rybelsus werkt op een manier die vergelijkbaar is met het natuurlijke GLP-1-hormoon, door de eetlust te reguleren en het verzadigingsgevoel te vergroten</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Bijwerkingen:</strong> Vaak voorkomende bijwerkingen zijn hypoglykemie, hoofdpijn, misselijkheid, diarree, obstipatie, braken en vermoeidheid</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Prijs:</strong> Rybelsus is alleen beschikbaar als onderdeel van een medisch behandelplan en niet los te koop</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Start: €350 per maand</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Balance: €400 per maand</span>
                    </li>
                </ul>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a
                        href="/medisch-afvallen/"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200">
                        Meer informatie over de behandeling
                    </a>
                    <a
                        href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Semaglutide Section -->
<section class="py-12 md:py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-5xl mx-auto">
            <!-- Medication Image -->
            <div class="text-center mb-8">
                <img
                    src="<?php echo esc_url(wp_get_upload_dir()['baseurl']); ?>/ozempic.jpg"
                    alt="Afvallen met ozempic"
                    class="inline-block max-w-full h-auto rounded-lg shadow-md"
                    style="max-width: 762px;"
                    loading="lazy" />
            </div>

            <!-- Medication Content -->
            <div class="bg-background rounded-lg p-6 md:p-8 lg:p-10 shadow-sm">
                <h3 class="font-heading text-2xl md:text-3xl text-primary mb-6">Semaglutide</h3>

                <p class="text-body-text leading-relaxed mb-6">
                    Semaglutide is een injecteerbaar medicijn dat oorspronkelijk is ontwikkeld voor de behandeling van
                    diabetes type 2. Het valt onder de klasse van glucagonachtige peptide-1 (GLP-1)-receptoragonisten.
                    Deze medicijnen bootsen het natuurlijke GLP-1-hormoon na, wat helpt bij het reguleren van de
                    bloedsuikerspiegel door de insulineproductie te stimuleren, de afgifte van glucagon te remmen en de
                    maaglediging te vertragen.
                </p>

                <ul class="space-y-3 text-body-text mb-8">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Toediening:</strong> Wekelijkse injectie</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werkzame stof:</strong> Semaglutide</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Doelgroep:</strong> Personen met diabetes mellitus type 2</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Werking:</strong> Semaglutide werkt op een manier die vergelijkbaar is met het natuurlijke GLP-1-hormoon, door de eetlust te reguleren en het verzadigingsgevoel te vergroten</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Bijwerkingen:</strong> Vaak voorkomende bijwerkingen zijn hypoglykemie, hoofdpijn, misselijkheid, diarree, obstipatie, braken en vermoeidheid</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span><strong>Prijs:</strong> Semaglutide is alleen beschikbaar als onderdeel van een medisch behandelplan en niet los te koop</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Start: €350 per maand</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Golden Balance: €400 per maand</span>
                    </li>
                </ul>

                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-4 justify-center">
                    <a
                        href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                    <a
                        href="/medisch-afvallen/"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-full font-body font-medium text-sm uppercase hover:opacity-90 transition-all duration-200">
                        Meer informatie over de behandeling
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>