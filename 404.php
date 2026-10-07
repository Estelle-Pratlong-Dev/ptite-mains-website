<?php
http_response_code(404);
require __DIR__ . '/includes/bootstrap.php';
$active = '404';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Page introuvable — Les Petites Mains d’Estelle</title>
        <meta name="description" content="Cette page est introuvable. Retrouvez l’accueil et les services des Petites Mains d’Estelle.">
        <meta name="robots" content="noindex, follow">
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ============================ ERREUR ========================== -->
            <section class="page-hero container">
                <p class="eyebrow">Erreur 404</p>
                <h1>Cette page nous<br>file entre les doigts.</h1>
                <p>Le lien est peut-être ancien ou l’adresse incorrecte.</p>
                <div class="actions">
                    <a class="button" href="index.php">Retour à l’accueil</a>
                    <a class="text-link" href="services.php">Voir les services</a>
                </div>
            </section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
