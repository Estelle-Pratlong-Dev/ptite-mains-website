<?php
// Charge la configuration et prépare uniquement les fonctions communes.
$site = require __DIR__ . '/../config/site.php';
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
// Construit une URL canonique depuis le domaine configuré, sans utiliser le Host reçu.
function canonical(string $path, string $baseUrl): string
{
    if (!$baseUrl) {
        return '';
    }

    $canonicalPath = $path === 'index.php' ? '' : $path;
    return '<link rel="canonical" href="' . e(rtrim($baseUrl, '/') . '/' . $canonicalPath) . '">';
}
