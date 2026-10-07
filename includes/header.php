<?php
// Variables attendues : $site (bootstrap), $active (page courante).
?>
<!-- ========================== EN-TÊTE ========================== -->
<a class="skip-link" href="#contenu">Aller au contenu</a>
<header class="site-header container">
    <a class="brand" href="index.php">
        <span class="brand-mark" aria-hidden="true">✳</span>
        <span><?= e($site['name']) ?>
            <small>Services de proximité</small>
        </span>
    </a>
    <nav aria-label="Navigation principale">
        <?php foreach (
            ['index' => 'Accueil', 'services' => 'Services', 'a-propos' => 'À propos']
            as $file => $label
        ): ?>
        <a href="<?= e($file) ?>.php" <?= $active === $file ? 'aria-current="page"' : '' ?>><?= e($label) ?>
        </a>
        <?php endforeach; ?>
    </nav>
    <a class="button header-contact" href="contact.php" <?= $active === 'contact'
        ? 'aria-current="page"'
        : '' ?>>Parlons de votre besoin</a>
</header>
