<?php

/**
 * Centralized Site Configuration
 *
 * This file contains all site-wide settings like contact information,
 * social media links, business hours, and email addresses.
 * Update values here once and they'll be reflected everywhere.
 */

return [
    // Contact Information
    'contact' => [
        'email' => 'info@thegoldenglow.nl',
        'phone' => '+31 (0)68 139 0127',
        'phone_raw' => '+310681390127', // For tel: links
        'address' => [
            'street' => 'Kerkstraat 147',
            'postal' => '1017 GG',
            'city' => 'Amsterdam Centrum',
            'country' => 'Nederland',
            'full' => 'Kerkstraat 147, 1017 GG Amsterdam Centrum, Nederland',
        ],
        'maps_embed_url' => 'https://maps.google.com/maps?q=Kerkstraat%20147%201017%20GG%20Amsterdam%20Centrum%20Nederland&t=m&z=16&output=embed&iwloc=near',
    ],

    // Business Hours
    'hours' => [
        'weekdays' => 'Maandag - Vrijdag: 10:00 - 19:00',
        'weekend' => 'Zaterdag - Zondag: 10:00 - 16:00',
        'weekdays_times' => '10:00 - 19:00',
        'weekend_times' => '10:00 - 16:00',
    ],

    // Form Emails
    'emails' => [
        'contact_form' => 'info@thegoldenglow.nl', // Where contact form submissions go
        'admin' => 'admin@thegoldenglow.nl', // Admin notifications
        'no_reply' => 'noreply@thegoldenglow.nl', // From address for automated emails
    ],

    // Social Media Links
    'social' => [
        'instagram' => 'https://instagram.com/thegoldenglow',
        'facebook' => 'https://facebook.com/thegoldenglow',
        'pinterest' => 'https://pinterest.com/thegoldenglow',
    ],

    // Appointment Booking
    'booking' => [
        'url' => 'https://schedule.clinicminds.com/services?clinic=a797764d-6a99-11ed-9e8e-0a42d89bf169&l=nl-NL',
        'button_text' => 'Maak een afspraak',
    ],

    // Company Information
    'company' => [
        'name' => 'The Golden Glow',
        'tagline' => 'Dé cosmetische kliniek in Amsterdam',
        'description' => 'Specialist in fillerbehandelingen, spierontspanners, biostimulatie, medisch afvallen en lasertherapie. BIG-geregistreerde arts met 14+ jaar ervaring.',
        'founded_year' => '2010',
    ],

    // SEO Defaults
    'seo' => [
        'default_title' => 'The Golden Glow - Cosmetische Kliniek Amsterdam',
        'default_description' => 'Dé cosmetische kliniek in Amsterdam. Specialist in fillerbehandelingen, spierontspanners, biostimulatie, medisch afvallen en lasertherapie.',
        'keywords' => 'filler, botox, lipfiller, cosmetische kliniek, amsterdam, biostimulatie',
    ],
];
