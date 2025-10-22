<?php

/**
 * Centralized Menu Configuration
 *
 * This file contains all menu links and navigation items used throughout the site.
 * Update links here once and they'll be reflected everywhere.
 */

return [
    'main_navigation' => [
        [
            'title' => 'Home',
            'url' => '/',
        ],
        [
            'title' => 'Over ons',
            'url' => '/over-ons/',
        ],
        [
            'title' => 'Spierontspanners',
            'url' => '/spierontspanners/',
            'submenu' => [
                ['title' => 'Fronsrimpel', 'url' => '/frons-rimpels/'],
                ['title' => 'Voorhoofdsrimpels', 'url' => '/voor-hoofd-rimpels/'],
                ['title' => 'Kraaienpootjes', 'url' => '/kraaien-pootjes/'],
                ['title' => 'Wenkbrauwlift', 'url' => '/wenkbrauwlift/'],
                ['title' => 'Bunny lines', 'url' => '/bunny-lines/'],
                ['title' => 'Gummy smile', 'url' => '/gummy-smile/'],
                ['title' => 'Marionetlijnen', 'url' => '/marionet-lijnen/'],
                ['title' => 'Lip flip', 'url' => '/lip-flip/'],
                ['title' => 'Rokerslijntjes', 'url' => '/rokers-lijntjes/'],
                ['title' => 'Neuspunt lift', 'url' => '/neuspunt-lift/'],
                ['title' => 'Tandenknarsen', 'url' => '/tanden-knarsen/'],
                ['title' => 'Migraine', 'url' => '/migraine/'],
                ['title' => 'Platysma', 'url' => '/platysma/'],
                ['title' => 'Nefertiti lift', 'url' => '/nefertiti-lift/'],
                ['title' => 'Traptox', 'url' => '/trap-tox/'],
                ['title' => 'Liquid Facelift', 'url' => '/liquid-facelift/'],
                ['title' => 'Kaaklijn', 'url' => '/kaaklijn/'],
                ['title' => 'Kin', 'url' => '/kin-boto/'],
            ]
        ],
        [
            'title' => 'Fillers',
            'url' => '/fillers/',
            'submenu' => [
                // Add filler treatments here when needed
            ]
        ],
        [
            'title' => 'Contact',
            'url' => '/contact/',
        ],
    ],
];
