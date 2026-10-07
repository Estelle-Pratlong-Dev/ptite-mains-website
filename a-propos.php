<?php
require __DIR__ . '/includes/bootstrap.php';
$active = 'a-propos';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>À propos d’Estelle — Les Petites Mains</title>
        <meta name="description" content="Découvrez Estelle, développeuse et passionnée de bricolage, de nature et de services de proximité dans le Gard et en Ardèche.">
        <?php if (!$site['indexable']): ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>
        <?= canonical('a-propos.php', $site['base_url']) ?>
        <link rel="icon" href="img/identite/favicon.svg" type="image/svg+xml">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/about.css">
    </head>
    <body>
        <?php require __DIR__ . '/includes/header.php'; ?>
        <main id="contenu">
            <!-- ============================ HERO ============================ -->

            <section class="about-hero container section">

                <div>
                    <p class="eyebrow">Moi, c’est Estelle.</p>
                    <h1>J’aime quand<br>ça sert à quelque chose.</h1>
                    <p>Un site qui aide un artisan à se faire connaître. Un meuble enfin monté. Un ordinateur qui redevient simple à utiliser. C’est ce côté concret qui me plaît.</p>
                </div>

                <aside class="about-note">
                    <p>Comprendre.<br>Bidouiller.<br>Faire avancer.</p>
                    <span>Avec la tête, les mains,<br>et un peu de patience.</span></aside>
            </section>
            <!-- ======================== UNE MÊME ENVIE ====================== -->

            <section class="story container section">
                <img src="<?= e(
                    $site['photos']['creation-bois'],
                ) ?>" alt="Une étagère en bois en cours de fabrication dans un atelier" width="768" height="512" loading="lazy">

                <div>
                    <p class="eyebrow">Le fil conducteur</p>
                    <h2>Le web et le bricolage ?<br>Pour moi, ça se rejoint.</h2>
                    <p>Je suis développeuse web. J’aime comprendre comment les choses fonctionnent, chercher une solution et construire quelque chose d’utile. Et ce réflexe ne s’arrête pas quand je ferme l’ordinateur.</p>
                    <p>Je bricole, je travaille le bois, je m’occupe de mon jardin. J’aime aussi les animaux et les moments dehors avec ma chienne Naya. Passer du numérique au concret fait partie de ma façon de vivre.</p>
                    <p>Les Petites Mains d’Estelle est né de cette envie : mettre ces savoir-faire au service des personnes autour de moi, sans devoir choisir entre un clavier et une boîte à outils.</p>
                </div>
            </section>
            <!-- ======================== RELATION HUMAINE ==================== -->

            <section class="personal-letter container section"><span class="eyebrow">Ce qui compte pour moi</span>
                <h2>Pouvoir demander de l’aide,<br>tout simplement.</h2>
                <div class="letter-columns">
                    <p>On n’a pas toujours le temps, l’envie ou les connaissances pour tout faire soi-même. Et on n’a pas besoin de connaître les bons termes pour expliquer qu’un ordinateur rame ou qu’un meuble nous donne du fil à retordre.</p>
                    <p>Je préfère qu’on parle simplement : ce dont vous avez besoin, ce que je peux faire et les limites de l’intervention. Avec de l’écoute, de la discrétion et le soin que j’aime apporter aux choses.</p>
                </div>
                <p class="signature">Estelle</p>
            </section>
            <!-- ======================== ANCRAGE LOCAL ======================= -->

            <section class="local-about container section">
                <h2>Installée à Gagnières.<br>Et proche de votre quotidien.</h2>
                <p>J’interviens dans le Gard et en Sud Ardèche, selon votre localisation et le besoin. Pour le web et certaines demandes informatiques, on peut aussi travailler à distance.</p>
                <a class="text-link" href="contact.php">Me parler de votre projet</a></section>
        </main>
        <?php require __DIR__ . '/includes/footer.php'; ?>
