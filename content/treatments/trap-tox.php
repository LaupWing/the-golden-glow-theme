<?php

/**
 * Content for: Traptox
 * To edit this page, just change the values in the content_blocks array below!
 * Each block has a 'type' that determines which template to use.
 */

return [
    'page_title' => 'Traptox',

    // Content blocks array - add, remove, or reorder as needed
    'content_blocks' => [
        [
            'type' => 'category-intro',
            'data' => [
                'title' => 'Spanningspijn van Nik',
                'content' => '
                    <p>Nik kampte al jaren met pijnklachten in zijn nek en schouders, veroorzaakt door chronische spanning in de trapeziusspier. Door deze klachten trok zijn rug steeds krommer en merkte hij dat zijn houding en uitstraling eronder leden. De pijn beïnvloedde niet alleen zijn dagelijks functioneren, maar ook zijn zelfvertrouwen.</p>
                    <p>In eerste instantie probeerde Nik met oefeningen de klachten te verlichten, maar dit gaf onvoldoende resultaat. Sterker nog: de frustratie en spanning namen toe. Uiteindelijk besloten we in onze kliniek om de trapeziusspier met spierontspanners te behandelen. Sindsdien ervaart Nik geen pijn meer en staat hij weer rechtop – vrijer en zelfverzekerder.</p>
                ',
                'image_filename' => 'nik.jpg',
                'button_below_text' => true
            ]
        ],
        [
            'type' => 'text-content',
            'data' => [
                'title' => 'Behandeling van Traptox met spierontspanners',
                'content' => '
                    <p>Traptox is een behandeling waarbij spierontspanners worden geïnjecteerd in de trapeziusspier – ook wel monnikskapspier genoemd. Deze grote spier loopt van de achterkant van de nek tot aan de schouders en het midden van de rug. Het doel van de Traptox is tweeledig: het verminderen van spierspanning en pijnklachten, én het verfijnen van de contouren van de nek en schouders.</p>
                    <p>Tijdens de behandeling tekent de arts eerst het behandelgebied af, zodat de injecties nauwkeurig geplaatst kunnen worden. Vervolgens wordt met een fijne naald kleine hoeveelheden spierontspanner in verschillende delen van de trapezius geïnjecteerd. Hierdoor ontspant de spier zich en neemt de spanning geleidelijk af. Dit kan niet alleen nek- en schouderpijn verminderen, maar ook stijfheid en spanningshoofdpijn. Bovendien zorgt de ontspanning van de spiermassa ervoor dat de schouders subtiel zakken, waardoor de nek langer en eleganter oogt.De behandeling duurt ongeveer 15 tot 30 minuten en wordt doorgaans als vrijwel pijnloos ervaren.</p>
                ',
                'show_background' => true
            ]
        ],
        [
            'type' => 'navigation',
            'data' => [
                'links' => [
                    ['href' => '#behandeling', 'label' => 'Behandeling'],
                    ['href' => '#prijzen', 'label' => 'Prijzen'],
                    ['href' => '#resultaat', 'label' => 'Resultaat'],
                    ['href' => '#nazorg', 'label' => 'Nazorg']
                ]
            ]
        ],
        [
            'type' => 'text-content',
            'data' => [
                'title' => 'Wat kun je verwachten na de behandeling?',
                'content' => '
                    <p>Na de behandeling kunnen er lichte roodheid, zwelling of kleine blauwe plekjes ontstaan, die meestal binnen enkele dagen verdwijnen. Voor een optimaal resultaat is het verstandig om de eerste 24 tot 48 uur zware inspanning en massages van het behandelgebied te vermijden.</p>
                    <p>De werking van Traptox wordt vaak binnen enkele dagen merkbaar en bereikt het optimale effect na 2 tot 4 weken. Het resultaat houdt gemiddeld 3 tot 4 maanden aan. Door de behandeling regelmatig te herhalen, kan zowel de verlichting van klachten als het esthetische effect langdurig behouden blijven.</p>
                    <p>Traptox is daarmee een veilige en effectieve oplossing voor mensen die last hebben van chronische nek- en schouderklachten door spierspanning, en tegelijkertijd een slankere, meer verfijnde nek- en schouderlijn wensen.</p>
                ',
                'show_background' => false,
                'custom_class' => '!py-0'
            ]
        ],
        [
            'type' => 'price',
            'data' => [
                'title' => 'Traptox',
                'price' => '295',
                'anesthesia' => 'met crème',
                'checkup' => 'na 2 weken',
                'effect_duration' => '3 - 4 maanden',
                'treatment_duration' => '15 minuten'
            ]
        ],
        [
            'type' => 'after-treatment',
            'data' => [
                'custom_class' => '!py-0',
            ]
        ],
        [
            'type' => 'treatment-summary',
            'data' => [
                'price' => '295',
                'duration' => '15 minuten',
                'checkup' => 'na 2 weken',
                'effect' => '3 - 4 maanden'
            ]
        ],
        [
            'type' => 'appointment-button',
            'data' => [
                'url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL',
                'label' => 'Maak een afspraak'
            ]
        ],
        [
            'type' => 'reviews',
            'data' => [
                'show_background' => true
            ]
        ],
        [
            'type' => 'clinic',
            'data' => []
        ],
        [
            'type' => 'faq',
            'data' => [
                'title' => 'Veelgestelde vragen over traptox behandeling',
                'items' => [
                    [
                        'question' => 'Wat is TrapTox?',
                        'answer' => '<p>TrapTox is een behandeling waarbij Botox wordt geïnjecteerd in de trapeziusspieren (de grote spieren in de nek en schouders). Het ontspant de spieren en zorgt voor verlichting van spanning, maar ook voor een slanker en eleganter silhouet van de nek en schouders.</p>'
                    ],
                    [
                        'question' => 'Hoe werkt TrapTox met Botox?',
                        'answer' => '<p>Botox blokkeert tijdelijk de zenuwsignalen naar de spier, waardoor deze ontspant en minder krachtig samentrekt. Dit kan pijn en spanning verminderen en op de lange termijn een verfijnde contour creëren doordat de spier iets slanker wordt.</p>'
                    ],
                    [
                        'question' => 'Voor wie is TrapTox geschikt?',
                        'answer' => '<p>TrapTox is ideaal voor mensen die:</p><ul><li><p>last hebben van gespannen nek- en schouderspieren</p></li><li><p>regelmatig hoofdpijn of migraine ervaren door spierspanning</p></li><li><p>een elegantere, meer vrouwelijke schouder- en neklijn wensen</p></li></ul>'
                    ],
                    [
                        'question' => 'Is mijn leeftijd niet een belemmering voor deze behandeling?',
                        'answer' => '<p>Opkomende lijntjes kunnen uitstekend aangepakt worden met spierontspanners. Wat aantrekkelijk is bij beginnende lijntjes, is dat deze vaak volledig verdwijnen na een behandeling. Als de rimpel echter meer doorleefd is en dieper, dan kan een combinatie van spierontspanners en een filler soms meer effectief zijn.</p><p>Een significant pluspunt van spierontspanners. is dat de behandeling tevens een preventieve werking heeft. Indien je op vroege termijn ingrijpt, zullen rimpels niet verder verdiepen, en is de kans groot dat je nooit nood hebt aan vulstoffen of andere procedures voor deze gebieden. Hoewel we idealiter wachten tot een persoon minstens 21 jaar is voor eender welke behandeling, is het toegestaan om vanaf 18 jaar behandelingen te ondergaan. Indien onze medisch specialist twijfels heeft over de realistischheid van je verwachtingen, zullen we hier openlijk met je over converseren.</p>'
                    ],
                    [
                        'question' => 'Hoelang duurt het voordat ik weer kan werken?',
                        'answer' => '<p>U kunt onmiddellijk na de sessie weer uw normale bezigheden oppakken. Daarom wordt een behandeling met spierontspanners vaak aangeduid als een \'lunchpauze-behandeling\'. Afgezien van een tijdelijke milde roodheid die binnen een half uur vervaagt, en zelden een kleine, goed te verhullen blauwe plek, is er vrijwel geen zichtbare indicatie van de behandeling.</p>'
                    ],
                    [
                        'question' => 'Hoelang werkt het middel?',
                        'answer' => '<p>Hoewel het middel zelf na 3-6 maanden is uitgewerkt, heeft het wel een permanent verbeterend effect op de behandelde regio. Dit is vooral van toepassing wanneer spierontspanners gedurende langere tijd (enkele jaren) is toegepast.</p><p>Dit komt doordat het gebied gedurende enkele jaren beperkt is in beweging. Hierdoor blijven oppervlakkige lijntjes in de huid en herstellen ze vaak volledig. Het is alsof de tijd feitelijk stil is gezet. Bovendien raakt u gewend om de relevante spier niet meer te gebruiken. Als gevolg hiervan zal bijvoorbeeld uw neiging tot fronsen verminderd zijn in vergelijking met vroeger. Dit draagt bij aan een langdurige verbetering van dit specifieke gebied. Er zijn zelfs enkele studies die suggereren dat u, om de hierboven beschreven redenen, na enkele jaren gebruik van spierontspanners gerust een jaar kunt pauzeren om het effect te behouden.</p>'
                    ]
                ]
            ]
        ]
    ]
];
