<?php
require __DIR__ . '/includes/bootstrap.php';
$services = require __DIR__ . '/data/services.php';
$active = 'contact';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact — Les Petites Mains d’Estelle</title>
        <meta name="description" content="Parlez de votre besoin à Estelle : services de proximité à Gagnières, dans le Gard et en Ardèche, ou accompagnement informatique à distance.">
        <?php if (!$site['indexable']): ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?= canonical('contact.php', $site['base_url']) ?>
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/contact.css">
        <script src="js/contact.js" defer></script>
    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ============================ HERO ============================ -->

            <section class="page-hero container">
                <p class="eyebrow">On commence par quelques mots</p>
                <h1>Parlez-moi de<br>votre coup de main.</h1>
                <p>Pas besoin d’avoir tout défini. Racontez-moi ce qui vous aiderait.</p>
            </section>
            <!-- =========================== FORMULAIRE ======================= -->

            <section class="contact-layout container section">

                <form id="contact-form" class="contact-form" action="mailto:<?= e(
                    $site['email'],
                ) ?>" method="post" enctype="text/plain" data-recipient="<?= e($site['email']) ?>">

                    <fieldset>
                        <legend>De quoi avez-vous besoin ? <span>(plusieurs choix possibles)</span></legend>

                        <details class="service-choices" open>

                            <summary>Numérique <span class="selected-count" aria-live="polite"></span></summary>

                            <div class="choice-list">

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="web" data-label="<?= e(
                                    $services['web']['title'],
                                ) ?>"><span><?= e($services['web']['title']) ?></span></label>

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="aide-informatique" data-label="<?= e(
                                    $services['aide-informatique']['title'],
                                ) ?>"><span><?= e($services['aide-informatique']['title']) ?></span></label>

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="soutien" data-label="<?= e(
                                    $services['soutien']['title'],
                                ) ?>"><span><?= e($services['soutien']['title']) ?></span></label>
                            </div>
                        </details>

                        <details class="service-choices" >

                            <summary>Maison &amp; jardin <span class="selected-count" aria-live="polite"></span></summary>

                            <div class="choice-list">

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="petits-travaux" data-label="<?= e(
                                    $services['petits-travaux']['title'],
                                ) ?>"><span><?= e($services['petits-travaux']['title']) ?></span></label>

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="jardinage" data-label="<?= e(
                                    $services['jardinage']['title'],
                                ) ?>"><span><?= e($services['jardinage']['title']) ?></span></label>

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="debarras" data-label="<?= e(
                                    $services['debarras']['title'],
                                ) ?>"><span><?= e($services['debarras']['title']) ?></span></label>
                            </div>
                        </details>

                        <details class="service-choices" >

                            <summary>Au quotidien <span class="selected-count" aria-live="polite"></span></summary>

                            <div class="choice-list">

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="animaux" data-label="<?= e(
                                    $services['animaux']['title'],
                                ) ?>"><span><?= e($services['animaux']['title']) ?></span></label>

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="courses" data-label="<?= e(
                                    $services['courses']['title'],
                                ) ?>"><span><?= e($services['courses']['title']) ?></span></label>

                                <label class="checkbox-label"><input type="checkbox" name="services[]" value="revente" data-label="<?= e(
                                    $services['revente']['title'],
                                ) ?>"><span><?= e($services['revente']['title']) ?></span></label>
                            </div>
                        </details>


                        <label class="checkbox-label other-choice"><input type="checkbox" name="services[]" value="autre" data-label="Autre besoin"><span>Autre besoin / je ne sais pas encore</span></label>
                    </fieldset>

                    <div class="form-grid">

                        <div>
                            <label for="name">Votre nom <span>(obligatoire)</span></label>
                            <input id="name" name="name" autocomplete="name" required maxlength="100"></div>

                        <div>
                            <label for="email">Votre e-mail <span>(obligatoire)</span></label>
                            <input id="email" name="email" type="email" autocomplete="email" required maxlength="180"></div>

                        <div>
                            <label for="phone">Téléphone <span>(facultatif)</span></label>
                            <input id="phone" name="phone" type="tel" autocomplete="tel" maxlength="35"></div>

                        <div>
                            <label for="town">Votre commune <span>(facultatif)</span></label>
                            <input id="town" name="town" autocomplete="address-level2" maxlength="100"></div>
                    </div>

                    <label for="message">Votre demande <span>(obligatoire)</span></label>

                    <textarea id="message" name="message" rows="6" required maxlength="2500" placeholder="Votre besoin, vos disponibilités, le délai souhaité…"></textarea>

                    <p class="form-explanation">Ce formulaire prépare un e-mail dans votre messagerie. Vous pourrez le relire, ajouter des photos et l’envoyer vous-même. Aucun message n’est envoyé directement par le site.</p>

                    <button class="button" type="submit">Préparer mon e-mail</button>

                    <p id="form-status" class="note" role="status"></p>
                    <noscript>
                        <p>Sans JavaScript, votre messagerie peut préparer les champs au format texte. Vous pouvez aussi écrire directement à l’adresse ci-contre.</p>
                    </noscript>
                </form>

                <aside class="contact-aside">
                    <div class="contact-card">
                        <p class="eyebrow">En direct</p>
                        <h2>Vous préférez<br>un simple e-mail ?</h2>
                        <a class="email-link" href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
                        <p>Si votre messagerie ne s’ouvre pas, copiez cette adresse dans votre application ou votre webmail.</p>
                    </div>
                    <div class="contact-local">
                        <h3>Sur place ou à distance</h3>
                        <p>À Gagnières et aux alentours, dans le Gard et en Sud Ardèche, selon le besoin. Pour le numérique, certaines interventions peuvent se faire à distance.</p>
                        <p>Précisez votre commune et vos disponibilités : cela m’aidera à vous répondre.</p>
                    </div>
                </aside>
            </section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
