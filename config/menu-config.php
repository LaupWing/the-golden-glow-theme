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
            'title' => 'Homepage',
            'url' => '/',
        ],
        [
            'title' => 'Arts',
            'url' => '/arts/',
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
                ['title' => 'Kin', 'url' => '/kin'],
                ['title' => 'Hyperhidrose', 'url' => '/hyperhidrose/'],
            ]
        ],
        [
            'title' => 'Filler Behandeling',
            'url' => '/filler-behandeling/',
            'submenu' => [
                ['title' => 'Lipfiller', 'url' => '/lipfiller'],
                ['title' => 'Jukbeenderen', 'url' => '/jukbeenderen/'],
                ['title' => 'Traangootjes', 'url' => '/traangootjes/'],
                ['title' => 'Neuslippenplooi', 'url' => '/neuslippenplooi'],
                ['title' => 'Marionetlijnen', 'url' => '/marionet-lijnen/'],
                ['title' => 'Wangen', 'url' => '/wangen/'],
                ['title' => 'Kinfiller', 'url' => '/kinfiller/'],
                ['title' => 'Kaaklijn', 'url' => '/kaaklijn-filler/'],
                ['title' => 'Fullface', 'url' => '/full-face/'],
                ['title' => 'Neus', 'url' => '/neus/'],
                ['title' => 'Slapen', 'url' => '/slapen/'],
            ]
        ],
        [
            'title' => 'Body fillers',
            'url' => '/bodyfillers/',
            'submenu' => [
                ['title' => 'Bilfillers', 'url' => '/bilfillers/'],
                ['title' => 'Hip dips', 'url' => '/hip-dips/'],
                ['title' => 'Penisvergroting', 'url' => '/penisvergroting/'],
                ['title' => 'Vagina Verjonging', 'url' => '/vagina-verjonging/'],
            ]
        ],
        [
            'title' => 'Medisch afvallen',
            'url' => '/medisch-afvallen/',
            'submenu' => [
                ['title' => 'Overzicht Afvalmedicatie', 'url' => '/overzicht-afval-medicatie/'],
            ]
        ],
        [
            'title' => 'Lasers',
            'url' => '/lasers/',
            'submenu' => [
                ['title' => 'Tixel', 'url' => '/tixel/'],
                ['title' => 'Endolift', 'url' => '/endolift/'],
            ]
        ],
        [
            'title' => 'Biostimulatie',
            'url' => '/biostimulatie/',
            'submenu' => [
                ['title' => 'Lanluma', 'url' => '/lanluma/'],
                ['title' => 'Sculptra', 'url' => '/sculptra/'],
                ['title' => 'PDO', 'url' => '/pdo/'],
                ['title' => 'Profhilo', 'url' => '/profhilo/'],
                ['title' => 'Skinboosters', 'url' => '/skinboosters/'],
            ]
        ],
        [
            'title' => 'Prijzen',
            'url' => '/prijzen/',
        ],
        [
            'title' => 'Blog',
            'url' => '/blog-posts/',
        ],
        [
            'title' => 'Contact',
            'url' => '/contact/',
        ],
    ],
];
