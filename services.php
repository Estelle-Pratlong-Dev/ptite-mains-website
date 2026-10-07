<?php
require __DIR__ . '/includes/bootstrap.php';
$services = require __DIR__ . '/data/services.php';
$active = 'services';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Services — Les Petites Mains d’Estelle</title>
        <meta name="description" content="Neuf services de proximité : web, informatique, petits travaux, jardinage, débarras, animaux, courses, revente en ligne et soutien scolaire.">
        <?php if (!$site['indexable']): ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?= canonical('services.php', $site['base_url']) ?>
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/services.css">
    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ============================ HERO ============================ -->

            <section class="page-hero container services-hero">

                <div>

                    <p class="eyebrow">Neuf façons de vous simplifier la vie</p>

                    <h1>Les petites choses.<br>Les vrais coups de main.</h1>

                    <p>Un ordinateur à remettre d’aplomb, un jardin à entretenir, un meuble à monter… Trouvez l’aide qui correspond à votre besoin.</p>

                    <nav class="category-links" aria-label="Familles de services">
                        <a href="#informatique">Le numérique</a>
                        <a href="#maison">La maison & le jardin</a>
                        <a href="#quotidien">Le quotidien</a>
                    </nav>
                </div>

                <aside class="service-note"><span class="eyebrow">Une seule interlocutrice</span>
                    <p>Du clavier<br>au tournevis.</p>
                    <span>À Gagnières et aux alentours.<br>À distance pour le numérique.</span></aside>
            </section>
            <!-- ======================== NUMÉRIQUE =========================== -->

            <section id="informatique" class="service-family container section">

                <div class="family-heading"><span class="family-number" aria-hidden="true">01</span>
                    <div>
                        <p class="eyebrow">Le numérique</p>
                        <h2>Un peu de technique.<br>Beaucoup de simplicité.</h2>
                    </div>
                </div>

                <div class="digital-feature">
                    <img src="<?= e(
                        $site['photos']['informatique'],
                    ) ?>" alt="Ordinateur dans un espace de travail lumineux" width="627" height="836" loading="lazy">

                    <article id="web" class="service-card-detail featured-card">

                        <h3><?= e($services['web']['title']) ?></h3>

                        <p><?= e($services['web']['description']) ?></p>

                        <ul>
                            <?php foreach ($services['web']['items'] as $item): ?>

                            <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                </div>

                <div class="service-grid digital-grid">

                    <article id="aide-informatique" class="service-card-detail ">

                        <h3><?= e($services['aide-informatique']['title']) ?></h3>

                        <p><?= e($services['aide-informatique']['description']) ?></p>

                        <ul>
                            <?php foreach ($services['aide-informatique']['items'] as $item): ?>

                            <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>

                </div>
                    <article id="soutien" class="secondary-service">
                        <h3><?= e($services['soutien']['title']) ?></h3>
                        <div class="secondary-content">

                        <p><?= e($services['soutien']['description']) ?></p>

                        <ul>
                            <?php foreach ($services['soutien']['items'] as $item): ?>

                            <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        </div>
                    </article>
                <div class="family-contact"><a class="text-link" href="contact.php">Parler de mon besoin numérique</a></div>
            </section>
            <!-- ======================== MAISON JARDIN ======================= -->

            <section class="family-surface">

                <div id="maison" class="service-family container section">

                    <div class="family-heading"><span class="family-number" aria-hidden="true">02</span>
                        <div>
                            <p class="eyebrow">La maison & le jardin</p>
                            <h2>Faire de la place.<br>Remettre en état. Avancer.</h2>
                        </div>
                    </div>

                    <div class="home-feature"><img src="<?= e(
                        $site['photos']['maison'],
                    ) ?>" alt="Assemblage d’un meuble en bois" width="627" height="836" loading="lazy">
                        <p>Ces petits chantiers qui attendent<br>« quand on aura le temps ».</p>
                    </div>

                    <div class="service-grid home-grid">

                        <article id="petits-travaux" class="service-card-detail ">

                            <h3><?= e($services['petits-travaux']['title']) ?></h3>

                            <p><?= e($services['petits-travaux']['description']) ?></p>

                            <ul>
                                <?php foreach ($services['petits-travaux']['items'] as $item): ?>

                                <li><?= e($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>

                        <article id="jardinage" class="service-card-detail ">

                            <h3><?= e($services['jardinage']['title']) ?></h3>

                            <p><?= e($services['jardinage']['description']) ?></p>

                            <ul>
                                <?php foreach ($services['jardinage']['items'] as $item): ?>

                                <li><?= e($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>

                        <article id="debarras" class="service-card-detail wide-card">

                            <h3><?= e($services['debarras']['title']) ?></h3>

                            <p><?= e($services['debarras']['description']) ?></p>

                            <ul>
                                <?php foreach ($services['debarras']['items'] as $item): ?>

                                <li><?= e($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    </div>
                    <div class="family-contact"><a class="text-link" href="contact.php">Parler de mon besoin maison ou jardin</a></div>
                </div>
            </section>
            <!-- ======================== AU QUOTIDIEN ======================== -->

            <section id="quotidien" class="service-family container section">

                <div class="family-heading"><span class="family-number" aria-hidden="true">03</span>
                    <div>
                        <p class="eyebrow">Le quotidien</p>
                        <h2>Quand une présence<br>fait la différence.</h2>
                    </div>
                </div>

                <div class="animal-feature">

                    <article id="animaux" class="service-card-detail blush-card">

                        <h3><?= e($services['animaux']['title']) ?></h3>

                        <p><?= e($services['animaux']['description']) ?></p>

                        <ul>
                            <?php foreach ($services['animaux']['items'] as $item): ?>

                            <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <p class="note">Les visites et la garde ne sont pas proposées pour les chats, pour cause d’allergie.</p>
                    </article>
                    <img src="<?= e(
                        $site['photos']['animaux'],
                    ) ?>" alt="Border Collie dans un jardin ensoleillé" width="627" height="836" loading="lazy">
                </div>

                <div class="service-grid">

                    <article id="courses" class="service-card-detail ">

                        <h3><?= e($services['courses']['title']) ?></h3>

                        <p><?= e($services['courses']['description']) ?></p>

                        <ul>
                            <?php foreach ($services['courses']['items'] as $item): ?>

                            <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>

                </div>
                    <article id="revente" class="secondary-service">
                        <h3><?= e($services['revente']['title']) ?></h3>
                        <div class="secondary-content">

                        <p><?= e($services['revente']['description']) ?></p>

                        <ul>
                            <?php foreach ($services['revente']['items'] as $item): ?>

                            <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        </div>
                    </article>
                <div class="family-contact"><a class="text-link" href="contact.php">Parler de mon besoin du quotidien</a></div>
            </section>
            <!-- ======================= DEMANDE PERSONNALISÉE ================ -->

            <section class="small-request container section">
                <h2>Votre besoin ne rentre pas dans une <span class="keep-together">case&nbsp;?</span></h2>
                <p>Décrivez-le avec vos mots. Je vous dirai simplement si je peux vous aider, et ce que l’on peut prévoir ensemble.</p>
                <a class="button" href="contact.php">Expliquer mon besoin</a></section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
