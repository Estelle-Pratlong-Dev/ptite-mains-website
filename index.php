<?php
require __DIR__ . '/includes/bootstrap.php';
$active = 'index';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les Petites Mains d’Estelle — Services de proximité</title>
        <meta name="description" content="Informatique, petits travaux, maison, jardin et animaux : découvrez les services de proximité d’Estelle dans le Gard et en Ardèche.">
        <?php if (!$site['indexable']): ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?= canonical('index.php', $site['base_url']) ?>
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ============================ HERO ============================ -->
            <section class="hero container">
                <div class="hero-copy">
                    <p class="eyebrow">Services de proximité · Gard & Ardèche</p>
                    <h1>Un coup de main,<br>tout simplement.</h1>
                    <span class="accent-line" aria-hidden="true">
                    </span>
                    <p class="hero-description">Informatique, maison, jardin, quotidien…<br>Une personne de confiance pour vous simplifier le quotidien.</p>
                    <div class="actions">
                        <a class="button" href="services.php">Découvrir les services</a>
                        <a class="text-link" href="contact.php">Me contacter</a>
                    </div>
                </div>
                <div class="hero-photos">
                    <img class="photo-main" fetchpriority="high" src="<?= e(
                        $site['photos']['maison'],
                    ) ?>" alt="Montage d’un meuble en bois" width="627" height="836">
                    <img src="<?= e(
                        $site['photos']['informatique'],
                    ) ?>" alt="Ordinateur sur une table de travail" width="627" height="836">
                    <div class="dog-photo">
                        <img src="<?= e(
                            $site['photos']['animaux'],
                        ) ?>" alt="Border Collie dans un jardin" width="627" height="836">
                        <span>À Gagnières et aux alentours</span>
                    </div>
                </div>
            </section>
            <!-- ========================== SERVICES ========================== -->
            <section class="container section services-preview">
                <span class="accent-line centered" aria-hidden="true">
                </span>
                <h2>De quoi avez-vous besoin ?</h2>
                <div class="service-cards">
                    <article class="service-card">
                        <img src="<?= e(
                            $site['photos']['installation'],
                        ) ?>" alt="" width="768" height="512" loading="lazy">
                        <div>
                            <span class="card-icon" aria-hidden="true">⌘</span>
                            <h3>Informatique & web</h3>
                            <p>Sites web, aide informatique et accompagnement dans vos outils numériques.</p>
                            <a class="text-link" href="services.php#informatique">Voir les services informatiques</a>
                        </div>
                    </article>
                    <article class="service-card">
                        <img src="<?= e($site['photos']['jardin']) ?>" alt="" width="768" height="512" loading="lazy">
                        <div>
                            <span class="card-icon" aria-hidden="true">⌂</span>
                            <h3>Maison & jardin</h3>
                            <p>Petits travaux, jardinage et débarras pour avancer dans vos projets.</p>
                            <a class="text-link" href="services.php#maison">Voir les services maison</a>
                        </div>
                    </article>
                    <article class="service-card">
                        <img src="<?= e(
                            $site['photos']['promenade'],
                        ) ?>" alt="" width="768" height="512" loading="lazy">
                        <div>
                            <span class="card-icon" aria-hidden="true">♡</span>
                            <h3>Au quotidien</h3>
                            <p>Visites pour vos animaux, promenades et courses : une présence quand vous en avez besoin.</p>
                            <a class="text-link" href="services.php#quotidien">Voir les aides du quotidien</a>
                        </div>
                    </article>
                </div>
            </section>
            <!-- ======================== PRÉSENTATION ======================== -->
            <section class="about-teaser container section">
                <img src="<?= e(
                    $site['photos']['creation-bois'],
                ) ?>" alt="Petite étagère en bois en cours de fabrication" width="768" height="512" loading="lazy">
                <div>
                    <span class="accent-line" aria-hidden="true">
                    </span>
                    <h2>Derrière les petites mains,<br>il y a Estelle.</h2>
                    <p>J’aime comprendre, réparer, créer et rendre service. Je vous accompagne avec simplicité, écoute et soin, pour les petits besoins comme les projets qui vous tiennent à cœur.</p>
                    <a class="text-link" href="a-propos.php">Faire connaissance</a>
                </div>
            </section>
            <!-- =========================== VALEURS ========================== -->
            <section class="values">
                <div class="container values-grid">
                    <div>
                        <h3>Un seul contact</h3>
                        <p>Une interlocutrice pour plusieurs besoins du quotidien.</p>
                    </div>
                    <div>
                        <h3>Des solutions adaptées</h3>
                        <p>Un accompagnement selon votre situation et vos envies.</p>
                    </div>
                    <div>
                        <h3>Le goût du travail bien fait</h3>
                        <p>Du soin, de l’attention et du bon sens.</p>
                    </div>
                </div>
            </section>
            <?php require __DIR__ . '/includes/prefooter.php'; ?>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
