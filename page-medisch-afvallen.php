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

            <p class="text-gray-700 leading-relaxed mb-8">
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

<?php get_footer(); ?>