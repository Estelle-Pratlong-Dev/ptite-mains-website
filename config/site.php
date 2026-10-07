<?php
// Configuration unique : compléter base_url et les informations légales avant publication.
return [
    'name' => 'Les Petites Mains d’Estelle',
    'email' => 'contact@estelle-pratlong.fr',
    'location' => 'Gagnières · Gard & Sud Ardèche',
    'creator' => 'Estelle Pratlong',
    'creator_label' => 'Réalisation',
    'creator_url' => 'https://dev.estelle-pratlong.fr/',
    'base_url' => getenv('SITE_BASE_URL') ?: '',
    'indexable' => false,
    // Informations légales à compléter ; aucune valeur d’entreprise n’est inventée.
    'legal' => [
        'project_owner' => 'Estelle Pratlong',
        'publisher' => '',
        'publication_manager' => '',
        'legal_form' => '',
        'registration' => '',
        'legal_address' => '',
        'capital' => '',
        'vat' => '',
        'representative' => '',
        'host_name' => '',
        'host_address' => '',
        'host_phone' => '',
        'mediator' => '',
    ],
    'photos' => [
        'maison' => 'img/ambiance/maison.webp',
        'informatique' => 'img/ambiance/informatique.webp',
        'animaux' => 'img/ambiance/animaux.webp',
        'installation' => 'img/ambiance/installation.webp',
        'jardin' => 'img/ambiance/jardin.webp',
        'promenade' => 'img/ambiance/promenade.webp',
        'creation-bois' => 'img/ambiance/creation-bois.webp',
    ],
];
