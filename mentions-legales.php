<?php
require __DIR__ . '/includes/bootstrap.php';
$active = 'mentions-legales';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mentions légales — Les Petites Mains d’Estelle</title>
        <meta name="description" content="Informations sur l’édition et la réalisation du site Les Petites Mains d’Estelle.">
        <?php if (!$site['indexable']): ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?= canonical('mentions-legales.php', $site['base_url']) ?>
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ======================= MENTIONS LÉGALES ===================== -->
            <section class="container legal page-hero">
                <h1>Mentions légales</h1>
                <p class="draft-notice">Version de travail : les informations ci-dessous doivent être complétées avant la mise en ligne publique.</p>
                <h2>Édition du site</h2>
                <p>Projet porté par <?= e($site['legal']['project_owner']) ?>. Le nom commercial est provisoire.</p>
                <p>Statut juridique, identité légale de l’entreprise, immatriculation, adresse légale, informations fiscales applicables et responsable de publication : à confirmer.</p>
                <p>Contact : <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>.</p>
                <?php foreach (
                    [
                        'publisher' => 'Éditeur',
                        'publication_manager' => 'Responsable de publication',
                        'legal_form' => 'Forme juridique',
                        'registration' => 'Immatriculation',
                        'legal_address' => 'Adresse légale',
                        'capital' => 'Capital (si applicable)',
                        'vat' => 'TVA (si applicable)',
                        'representative' => 'Représentant légal',
                    ]
                    as $key => $label
                ): ?>
                    <?php if ($site['legal'][$key]): ?>
                        <p><strong><?= e($label) ?> :</strong> <?= e($site['legal'][$key]) ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
                <h2>Hébergement</h2>
                <p>Les coordonnées légales de l’hébergeur définitif seront renseignées lors du choix de l’hébergement public.</p>
                <?php foreach (['host_name', 'host_address', 'host_phone'] as $key): ?>
                    <?php if ($site['legal'][$key]): ?>
                        <p><?= e($site['legal'][$key]) ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
                <h2>Réalisation et droits</h2>
                <p>Site réalisé par <a href="<?= e($site['creator_url']) ?>"><?= e($site['creator']) ?>
                    </a>
                    . Aucune licence de réutilisation du code ou des visuels n’est accordée dans cette version de travail.</p>
                <p>Les images sont des illustrations d’ambiance générées ; elles ne représentent pas des interventions réalisées.</p>
                <h2>Médiation</h2>
                <p>Le dispositif applicable et les coordonnées du médiateur restent à préciser avant la commercialisation des services.</p>
            <?php if ($site['legal']['mediator']): ?>
                    <p><?= e($site['legal']['mediator']) ?></p>
                <?php endif; ?>
            </section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
