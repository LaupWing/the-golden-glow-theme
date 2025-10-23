<?php

/**
 * Template Name: Medisch Afvallen Page
 * Template for displaying the Medisch Afvallen page
 */

get_header();
?>

<?php
get_template_part('templates/page-banner', null, [
    'title' => 'Medisch Afvallen'
]);
?>

<?php
get_template_part('sections/content-info-section', null, [
    'content' => '
        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4">Effectief en medisch begeleid afvallen met injecties</h2>
        <p>Overgewicht en obesitas vormen een groeiend probleem in onze moderne samenleving. Bijna de helft van alle Nederlanders worstelt hiermee. Afvallen is vaak een uitdaging, en een gezond gewicht behouden kan nog moeilijker zijn. Daarom bieden wij afvalprogramma\'s die volledig worden ondersteund door medische begeleiding. Indien nodig maken we gebruik van medicatie om uw hongergevoel te verminderen en een langdurig verzadigd gevoel te bevorderen. Bovendien krijgt u persoonlijke begeleiding van een ervaren arts en voedingscoach om uw doelen te bereiken en te behouden.</p>

        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4 mt-6">Hoe werken injecties voor gewichtsverlies?</h2>
        <p>De medicatie werkt op basis van een mechanisme dat lijkt op het natuurlijke GLP-1 hormoon. Dit hormoon speelt een belangrijke rol in het reguleren van de eetlust door het hongergevoel te verminderen en het gevoel van verzadiging te versterken. Het resultaat is een verminderde eetlust, wat vaak leidt tot gewichtsverlies.</p>
        <p>De injecties zijn eenvoudig zelf toe te dienen en uitsluitend op recept verkrijgbaar. Let op: deze medicatie is niet voor iedereen geschikt en kan bijwerkingen hebben. Het is essentieel om eerst een arts te raadplegen en de bijsluiter zorgvuldig door te nemen.</p>
    ',
    'image_filename' => 'measuring.jpg'
]);
?>

<!-- Medication Information Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-6">
                Informatie over de medicatie
            </h2>

            <p class="text-body-text leading-relaxed mb-8">
                Voor deze behandeling kunnen verschillende typen medicatie worden ingezet, afhankelijk van uw situatie. Alle medicatie is uitsluitend op recept verkrijgbaar. Als u in aanmerking komt, zal onze arts de medicatie voorschrijven. De medicatie wordt vervolgens verstrekt door de apotheker waarmee wij samenwerken, zodat u verzekerd bent van een veilige en gecontroleerde levering.
            </p>

            <a
                href="/overzicht-afval-medicatie/"
                class="inline-block bg-primary text-white px-8 py-3 rounded-full font-heading font-semibold text-sm uppercase hover:opacity-90 transition-opacity duration-200">
                Meer informatie
            </a>
        </div>
    </div>
</section>

<?php
get_template_part('sections/content-info-section', null, [
    'content' => '
        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4">Consult in de kliniek</h2>
        <p>Uw traject begint altijd met een persoonlijk consult bij een arts, dat uitsluitend plaatsvindt in onze kliniek. Tijdens dit consult bespreekt de arts samen met u welk programma het beste aansluit bij uw situatie en doelen. U krijgt de gelegenheid om al uw vragen te stellen, en de arts zal u uitgebreid informeren over het traject, de medicatie en het ontwikkelen van gezonde gewoontes. Wij raden aan om u goed voor te bereiden en in te lezen voordat u naar het consult komt, zodat u gericht vragen kunt stellen en optimaal gebruik kunt maken van het gesprek.</p>

        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4 mt-6">Een zorgvuldige afweging door de arts</h2>
        <p>Behandelingen met geavanceerde ondersteuning bij gewichtsverlies kunnen een effectieve hulp zijn bij het bereiken van een gezonder gewicht en het verbeteren van uw gezondheid, maar het is belangrijk dat deze alleen worden ingezet wanneer er duidelijke indicaties zijn. Als arts vind ik het essentieel om eerst een goed beeld te krijgen van uw persoonlijke gezondheidssituatie voordat we besluiten een behandeltraject te starten.</p>
        <p>Tijdens het eerste gesprek bespreek ik uw medische geschiedenis, leefstijl en eventuele problemen. Hierbij kunnen onderliggende aandoeningen, andere medicatie en uw algemene gezondheid een rol spelen. Vervolgens verricht ik een lichamelijk onderzoek om uw huidige fysieke toestand in kaart te brengen. Dit helpt om mogelijke contra-indicaties situaties waarin deze behandeling minder geschikt of zelfs schadelijk kan zijn uit te sluiten.</p>
        <p>Pas wanneer ik voldoende inzicht heb, kan ik zorgvuldig bepalen of deze ondersteuning passend én veilig voor u is. Indien nodig zal ik u ook alternatieven voorstellen. Mijn doel is om samen met u te werken aan een behandeltraject dat uw gezondheid optimaal ondersteunt.</p>
    ',
    'image_filename' => 'food.jpg',
    'content_position' => 'right'
]);
?>

<!-- Programs and Pricing Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-heading text-2xl md:text-3xl lg:text-4xl text-primary mb-8">
                Programma's en prijzen
            </h2>

            <p class="text-body-text leading-relaxed">
                Bij The Golden Glow bieden wij vier afvalprogramma's aan, waarvan drie met medicatie. Medicatie wordt alleen voorgeschreven als u voldoet aan de medische indicaties. Na een grondige beoordeling door onze arts kan, indien passend, een recept worden uitgeschreven. Elk programma is ontworpen om u op een veilige en effectieve manier te begeleiden naar een gezonder gewicht.
            </p>
        </div>
    </div>
</section>

<!-- Program Options Section -->
<section class="py-12 md:py-16 lg:py-20 bg-background">
    <div class="container mx-auto px-[5%]">
        <div class="grid md:grid-cols-2 gap-8">

            <!-- Golden Start Program -->
            <div class="bg-white p-6 md:p-8 rounded-lg">
                <h3 class="font-heading text-2xl md:text-3xl text-primary mb-6">Golden Start</h3>

                <ul class="space-y-3 text-body-text mb-6">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Start met een artsenconsult waarin medische aspecten en oorzaken van uw overgewicht worden geëvalueerd.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Onder supervisie van een arts volgt u het programma met begeleiding op maat.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Coach momenten voor het medisch afvallen, die uw voortgang monitort en waar nodig bijstuurt.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Elke drie weken heeft u een evaluatieconsult voor voortgang, medicatie en coaching.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Na elke maandelijkse meting en het voortgangsgesprek krijgt u de medicatie mee.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>U ontvangt handige tools om calorieën te tracken. Er wordt op maat gekeken welke voeding bij u past.</span>
                    </li>
                </ul>

                <div class="text-center">
                    <a
                        href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                </div>
            </div>

            <!-- Golden Balance Program -->
            <div class="bg-white p-6 md:p-8 rounded-lg">
                <h3 class="font-heading text-2xl md:text-3xl text-primary mb-6">Golden Balance</h3>

                <ul class="space-y-3 text-body-text mb-6">
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Start met een artsenconsult waarin medische aspecten en oorzaken van uw overgewicht worden geëvalueerd.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Onder supervisie van een arts volgt u het programma met begeleiding op maat.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Coach momenten voor het medisch afvallen, die uw voortgang monitort en waar nodig bijstuurt.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Elke drie weken heeft u een evaluatieconsult voor voortgang, medicatie en coaching.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Na elke maandelijkse meting en het voortgangsgesprek krijgt u de medicatie mee.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>U ontvangt handige tools om calorieën te tracken. Er wordt op maat gekeken welke voeding bij u past.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Begeleiding door een psycholoog om de mentale aspecten van gewichtsverlies aan te pakken en blijvende gedragsveranderingen te ondersteunen.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="inline-block w-2 h-2 bg-primary rounded-full mt-2 mr-3 flex-shrink-0"></span>
                        <span>Extra persoonlijke sessies om u te helpen omgaan met emotioneel eten en andere onderliggende oorzaken van overgewicht.</span>
                    </li>
                </ul>

                <div class="text-center">
                    <a
                        href="https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL"
                        class="inline-block bg-primary text-white px-8 py-3 rounded-md font-heading font-semibold hover:opacity-90 transition-opacity duration-200"
                        rel="noopener">
                        Maak een afspraak
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_template_part('sections/content-info-section', null, [
    'content' => '
        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4">Veiligheid van gewichtsverliesinjecties</h2>
        <p>De door ons voorgeschreven medicijnen zijn goedgekeurd door de FDA, wat betekent dat ze hun veiligheid en effectiviteit hebben bewezen door intensieve en gereguleerde testen. In Nederland heeft het Zorginstituut medicatie voor gewichtsverlies, onder strikte voorwaarden, opgenomen in het Geneesmiddelenvergoedingssysteem voor patiënten met ernstig overgewicht.</p>
        <p>Net als bij andere medicijnen kunnen er bijwerkingen optreden, zoals misselijkheid of diarree. Daarom is het belangrijk om de medicatie uitsluitend onder medische begeleiding te gebruiken. De medicijnen zijn in Nederland alleen op recept verkrijgbaar.</p>

        <h2 class="font-heading text-2xl md:text-3xl text-primary mb-4 mt-6">Duur van de behandeling</h2>
        <p>De behandelingsduur wordt afgestemd op uw persoonlijke situatie, waarbij uw streefgewicht en wensen centraal staan. In overleg met de arts worden realistische doelen gesteld. Om het proces zorgvuldig te begeleiden, worden er regelmatig monitoringconsulten ingepland. Onze cosmetische kliniek in Amsterdam behoort tot de koplopers in Nederland op het gebied van medische begeleiding bij gewichtsverlies met injecties.</p>
    ',
    'image_filename' => 'food2.jpg'
]);
?>

<?php get_template_part('sections/clinic-section'); ?>

<?php
get_template_part('templates/faq-section', null, [
    'title' => 'Veelgestelde vragen over medisch afvallen',
    'faqs' => [
        [
            'question' => 'Welke medicatie wordt er gebruikt?',
            'answer' => 'Voor meer informatie over de medicatie die wordt gebruikt bij onze programma\'s voor medisch afvallen met injecties kunt u terecht bij de medicatiepagina of door contact op te nemen met ons team. U kunt ook een consult boeken voor een uitgebreide uitleg.'
        ],
        [
            'question' => 'Kan ik de injecties zelf toedienen?',
            'answer' => 'Ja, u kunt de injecties zelf toedienen. Tijdens het consult in de kliniek leert de arts hoe u dit op een veilige manier kunt doen. De injecties zijn ontworpen om eenvoudig en praktisch in gebruik te zijn.'
        ],
        [
            'question' => 'Welk resultaat mag ik verwachten?',
            'answer' => 'De meeste mensen ervaren na 12 weken een significant gewichtsverlies. Dit kan variëren tussen de 5% en 10% van het startgewicht, afhankelijk van uw inzet en het gekozen programma. Wij begeleiden u om uw resultaten te optimaliseren en geven advies over het behouden van een gezond gewicht.'
        ],
        [
            'question' => 'Wanneer kan ik stoppen met de medicatie?',
            'answer' => 'Het stoppen met medicatie gebeurt altijd in overleg met de arts. Een geleidelijke afbouw verkleint de kans op terugval in oude gewoontes. Studies tonen aan dat minimaal 1 jaar gebruik vaak het beste resultaat oplevert. Afhankelijk van uw voortgang en doelen kan de arts een onderhoudsdosering aanbevelen.'
        ],
        [
            'question' => 'Wat zijn de bijwerkingen?',
            'answer' => 'Zoals bij elk medicijn kunnen er bijwerkingen optreden. De meest voorkomende zijn milde klachten zoals misselijkheid of diarree. Bekijk onze medicatiepagina voor meer details en raadpleeg bij twijfel altijd de arts.'
        ],
        [
            'question' => 'Wat is het verschil tussen Ozempic en Saxenda?',
            'answer' => 'Beide medicamenten behoren tot de groep GLP-1 agonisten echter zijn het 2 verschillende stoffen. Saxenda ookwel liraglutide genoemd. De werkende stof bij Ozempic is semaglutide. Ondanks dat liraglutide en semaglutide verschillende molecuul formules hebben, oefen ze dezelfde werking uit. Het belangrijkste verschil is dat Saxenda een kortere werkingsduur heeft van een dag in tegendeel tot Ozempic die een werkingsduur heeft van een week.'
        ]
    ]
]);
?>

<?php
// Reviews Section
get_template_part('sections/reviews-section');
?>

<?php get_footer(); ?>