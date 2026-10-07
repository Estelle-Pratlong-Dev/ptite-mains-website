<?php
require __DIR__ . '/includes/bootstrap.php';
$active = 'confidentialite';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confidentialité — Les Petites Mains d’Estelle</title>
        <meta name="description" content="Informations sur les données et les fonctionnalités de contact du site Les Petites Mains d’Estelle.">
        <?php if (!$site['indexable']): ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?= canonical('confidentialite.php', $site['base_url']) ?>
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ======================= CONFIDENTIALITÉ ====================== -->
            <section class="container legal page-hero">
                <h1>Confidentialité</h1>
                <h2>Fonctionnement du site</h2>
                <p>Le site n’intègre ni outil de statistiques publicitaires, ni formulaire d’envoi côté serveur, ni contenu embarqué provenant de réseaux sociaux. Les images sont servies avec le site.</p>
                <h2>Contact par e-mail</h2>
                <p>Le formulaire utilise votre nom, votre e-mail, votre demande et, si vous les renseignez, votre téléphone et votre commune pour préparer un e-mail dans votre messagerie. Ces champs ne sont ni transmis à un serveur par le formulaire, ni conservés dans le navigateur par le site. Vous décidez ensuite d’envoyer le message à Estelle.</p>
                <p>Les modalités de traitement des échanges, le responsable, la durée de conservation restent à définir avant l’ouverture publique.</p>
                <p>Pour une question concernant vos données, écrivez à <a href="mailto:<?= e($site['email']) ?>"><?= e(
    $site['email'],
) ?></a>.</p>
                <h2>Hébergement de la version de travail</h2>
                <p>Les traitements techniques et éventuels mécanismes d’authentification de la plateforme de consultation relèvent de cette plateforme. Les informations de l’hébergeur définitif seront précisées avant publication publique.</p>
            </section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
