<?php
// Les URL du sitemap utilisent le même domaine et la même racine que les canoniques.
require __DIR__ . '/includes/bootstrap.php';
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php if ($site['base_url']): ?>
        <?php foreach (['', 'services.php', 'a-propos.php', 'contact.php'] as $path): ?>
            <url><loc><?= e(rtrim($site['base_url'], '/') . '/' . $path) ?></loc></url>
        <?php endforeach; ?>
    <?php endif; ?>
</urlset>
