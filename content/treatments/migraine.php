<?php

/**
 * Content for: Migraine
 * To edit this page, just change the values in the content_blocks array below!
 * Each block has a 'type' that determines which template to use.
 */

return [
    'page_title' => 'Migraine',

    // Content blocks array - add, remove, or reorder as needed
    'content_blocks' => [
        [
            'type' => 'category-intro',
            'data' => [
                'title' => 'Spierontspanners bij migraine',
                'content' => '
                    <p>Naast alle bekende esthetische behandelingen met spierontspanners worden deze al sinds jaar en dag ingezet bij medische problemen. Sterker nog het gebruik van spierontspanners komt voort uit de medische wereld. Als arts weet ik dat migraine je levenskwaliteit sterkt kan afnemen. Al jong werd ikzelf met migraine aanvallen geconfronteerd. Migraine is een neurologische aandoening die word gekenmerkt door terugkerende, vaak hevige hoofdpijn aanvallen, gepaard gaande met misselijkheid, overgevoeligheid voor licht en geluid, en soms visuele verstoringen. Chronische migraine wordt gedefinieerd als minimaal 15 hoofdpijndagen per maand, waarvan ten minste acht migraineaanvallen zijn. Door met regelmaat spierontspanners te gebruiken zijn mijn migraine aanvallen tot bijna nihil teruggebracht.</p>
                ',
                'image_filename' => 'arwind6.png',
                'button_below_text' => true
            ]
        ],
        [
            'type' => 'text-content',
            'data' => [
                'title' => 'Hoe werkt een behandeling met spierontspanners bij migraine',
                'content' => '
                    <p>Het inspuiten van spierontspanners zijn een erkende en wetenschappelijk onderbouwde behandeling tegen chronische migraine. De spierontspanners ontspannen specifieke spieren en blokkeren pijnsignalen tussen zenuwen en spieren. Hierdoor kan het aantal migraineaanvallen verminderen, evenals de intensiteit van de pijn. De behandeling richt zich op meerdere spiergroepen in het hoofd, zoals de fronsspieren, slapen, nek en schouders, die betrokken zijn bij de migrainepijn.</p>
                    <p>Tijdens de behandeling worden met fijne naalden kleine hoeveelheden spierontspanners geïnjecteerd op vooraf bepaalde plekken in het gezicht en de nek. Dit proces duurt ongeveer 15 tot 30 minuten en is vrijwel pijnloos. Na de behandeling kunnen lichte roodheid, zwelling of blauwe plekjes ontstaan, die meestal binnen enkele dagen verdwijnen.</p>
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
                'title' => 'Wat kunt u verwachten na een behandeling tegen migraine',
                'content' => '
                    <p>De eerste effecten zijn voelbaar na 2 tot 6 dagen, met een optimaal resultaat na ongeveer 2 weken. De werking houdt gemiddeld 3 tot 6 maanden aan, waarna de behandeling kan worden herhaald. Spierontspanners bieden geen onmiddellijke verlichting tijdens een migraineaanval, maar zijn bedoeld om toekomstige aanvallen te verminderen en de kwaliteit van leven te verbeteren.</p>
                ',
                'show_background' => false,
                'custom_class' => '!py-0'
            ]
        ],
        [
            'type' => 'price',
            'data' => [
                'title' => 'Migraine',
                'price' => '125',
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
                'title' => 'Veelgestelde vragen over migraine behandeling',
                'items' => [
                    [
                        'question' => 'Wanneer merk ik het effect van de behandeling?',
                        'answer' => '<p>Na ongeveer 48 uur beginnen de spierontspanners hun werk te doen. De spieren ontspannen en tijdens een mogelijke migraineaanval kunnen de pijnklachten aanzienlijk verminderen. Veel patiënten melden dat ze minder frequent last hebben van aanvallen en dat de intensiteit van de migraine afneemt dankzij de spierontspanners. In sommige gevallen ervaren patiënten zelfs helemaal geen klachten meer. Het is echter belangrijk op te merken dat ongeveer 30% van de patiënten geen effect van de behandeling opmerkt.</p>'
                    ],
                    [
                        'question' => 'Hoe lang blijft de behandeling werken?',
                        'answer' => '<p>Spierontspanners voorkomen migraine en verlichten de gevolgen van een aanval doordat de injecties de spieren ontspannen, waardoor een mogelijke trigger (te sterk aangespannen spieren) wordt weggenomen. Bovendien ervaart u na een aanval minder last van spanningshoofdpijn, aangezien uw spieren zich tijdens de migraineaanval minder samentrekken.</p>'
                    ],
                    [
                        'question' => 'Hoe helpen spierontspanners bij het behandelen van migraine?',
                        'answer' => '<p>Spierontspanners voorkomen migraine en verlichten de gevolgen van een aanval doordat de injecties de spieren ontspannen, waardoor een mogelijke trigger (te sterk aangespannen spieren) wordt weggenomen. Bovendien ervaart u na een aanval minder last van spanningshoofdpijn, aangezien uw spieren zich tijdens de migraineaanval minder samentrekken.</p>'
                    ]
                ]
            ]
        ]
    ]
];
