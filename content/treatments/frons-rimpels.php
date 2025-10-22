<?php
/**
 * Content for: Frons Rimpels
 * To edit this page, just change the values in the content_blocks array below!
 * Each block has a 'type' that determines which template to use.
 */

return [
    'page_title' => 'Frons Rimpels Behandeling',

    // Content blocks array - add, remove, or reorder as needed
    'content_blocks' => [
        [
            'type' => 'category-intro',
            'data' => [
                'title' => 'Wat is een fronsrimpels behandeling',
                'content' => '
                    <h3 class="text-xl md:text-2xl font-heading text-primary mb-4">De frons van Sanjay</h3>
                    <p>De botox fronsrimpels behandeling gaf Sanjay zijn ontspannen uitstraling weer terug. Sanjay is een vertrouwd gezicht in Haarlem. In zijn kapsalon Addict ontvangt hij dagelijks klanten die komen voor zijn vakmanschap en warme persoonlijkheid. Toch stoorde hij zich al langere tijd aan zijn frons. Zijn blik leek vaak strenger en serieuzer dan hij zich voelde, terwijl hij juist bekendstaat om zijn opgewekte karakter. Voor Sanjay voelde dat contrast oneerlijk: van binnen vrolijk, maar naar buiten toe te streng. Met een subtiele behandeling met een spierontspanner liet hij die spanning los. Nu straalt zijn gezicht dezelfde vriendelijkheid uit die hij zijn klanten elke dag meegeeft  en voelt zijn voorhoofd ook daadwerkelijk ontspannen.</p>
                ',
                'image_filename' => 'frons-sanjay.jpg'
            ]
        ],
        [
            'type' => 'text-content',
            'data' => [
                'title' => 'Hoe behandelen we de frons',
                'content' => '
                    <p>Fronsrimpels ontstaan doordat de spieren tussen de wenkbrauwen (m. corrugator en m. procerus) zich herhaaldelijk aanspannen, bijvoorbeeld bij boos kijken, turen of fel licht. Op jonge leeftijd verdwijnen deze lijnen weer zodra de spier ontspant, maar naarmate de huid en het onderliggende bindweefsel elasticiteit verliezen, kunnen de rimpels blijvend zichtbaar worden. Door de fronsspieren met een spierontspanner te behandelen, ontspannen de spieren tijdelijk, waardoor fronsen vermindert of zelfs onmogelijk wordt. Het effect is een gladdere huid en een zachtere, meer toegankelijke gezichtsuitdrukking. De behandeling duurt slechts enkele minuten, is doorgaans goed te verdragen en vereist geen verdoving. Het mooie van deze methode is dat de mimiek behouden blijft, zolang de dosering zorgvuldig is afgestemd op de spieractiviteit en de anatomie van de cliënt.</p>
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
            'type' => 'price',
            'data' => [
                'title' => 'Wat is de prijs van een fronsrimpels behandeling',
                'price' => '125',
                'anesthesia' => 'met crème',
                'checkup' => 'na 2 weken',
                'effect_duration' => '3 - 4 maanden',
                'treatment_duration' => '15 minuten'
            ]
        ],
        [
            'type' => 'treatment-summary',
            'data' => [
                'price' => '125',
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
            'type' => 'text-content',
            'data' => [
                'title' => 'Waarom een fronsrimpels behandeling met botox',
                'content' => '
                    <p>Een fronsrimpels behandeling met botox verzacht de rimpels tussen de wenkbrauwen en geeft uw gezicht een vriendelijkere, ontspannen uitstraling. Door de fronsspieren tijdelijk te ontspannen, wordt de huid gladder terwijl uw natuurlijke mimiek behouden blijft. De behandeling is snel, veilig en vrijwel pijnloos, met zichtbaar resultaat binnen enkele dagen dat gemiddeld 3 tot 6 maanden aanhoudt. Regelmatig herhalen voorkomt dat de rimpels dieper worden, waardoor u langdurig een frisse en toegankelijke gezichtsuitdrukking behoudt.</p>
                ',
                'show_background' => false
            ]
        ],
        [
            'type' => 'after-treatment',
            'data' => []
        ],
        [
            'type' => 'reviews',
            'data' => []
        ],
        [
            'type' => 'clinic',
            'data' => []
        ],
        [
            'type' => 'faq',
            'data' => [
                'title' => 'Veelgestelde vragen over fronsrimpel behandeling',
                'items' => [
                    [
                        'question' => 'Wat is een fronsrimpel en hoe ontstaat deze',
                        'answer' => '<p>Een fronsrimpel is een verticale lijn tussen de wenkbrauwen die ontstaat door herhaald fronsen van de gezichtsspieren en door huidveroudering.</p>'
                    ],
                    [
                        'question' => 'Hoe werkt Botox tegen fronsrimpels?',
                        'answer' => '<p>Botox ontspant de spieren die de frons veroorzaken. Hierdoor verzacht of verdwijnt de rimpel en krijgt het gezicht een meer ontspannen en frisse uitstraling.</p>'
                    ],
                    [
                        'question' => 'Hoelang blijft Botox tegen fronsrimpels zichtbaar?',
                        'answer' => '<p>Het resultaat is gemiddeld 3 tot 4 maanden zichtbaar. Daarna kan de behandeling eenvoudig herhaald worden.</p>'
                    ],
                    [
                        'question' => 'Wanneer zie ik resultaat van Botox bij fronsrimpels?',
                        'answer' => '<p>Na 3 tot 5 dagen is het eerste effect zichtbaar, met een optimaal resultaat na ongeveer 2 weken.</p>'
                    ]
                ]
            ]
        ]
    ]
];
