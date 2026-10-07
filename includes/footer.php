<?php
// Variables attendues : $site, chargé par bootstrap.php.
?>
<!-- ========================== FOOTER =========================== -->
<footer class="site-footer">
    <div class="container footer-content">
        <div class="footer-identity">
            <a class="footer-brand" href="index.php"><?= e($site['name']) ?></a>
            <p>Des coups de main pour les vrais besoins du quotidien.</p>
        </div>
        <nav class="footer-navigation" aria-label="Navigation de pied de page">
            <a href="services.php">Les services</a>
            <a href="a-propos.php">Faire connaissance</a>
            <a href="contact.php">Me contacter</a>
        </nav>
        <div class="footer-contact">
            <p><?= e($site['location']) ?></p>
            <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
        </div>
        <div class="footer-bottom">
            <p class="credits">
                © <?= date('Y') ?> <?= e($site['name']) ?>
                · <?= e($site['creator_label']) ?> :
                <a href="<?= e($site['creator_url']) ?>"><?= e($site['creator']) ?></a>
            </p>
            <div class="footer-links">
                <a href="mentions-legales.php">Mentions légales</a>
                <a href="confidentialite.php">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
