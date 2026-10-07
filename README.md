# Les Petites Mains d'Estelle — Site vitrine

Site vitrine pour une activité de **services de proximité** (informatique, petits travaux, jardinage,
animaux, courses…) à Gagnières, dans le Gard et le Sud Ardèche : un site clair et rapide qui permet à un
particulier de décrire son besoin en quelques clics.

🌐 **[Voir le site en ligne](https://ptites-mains.estelle-pratlong.fr/)**

---

## Le projet en bref

Les clients sont surtout des particuliers, souvent peu à l'aise avec le numérique. Le site devait donc
présenter simplement les services, rassurer, et rendre la prise de contact évidente, sans compte à créer ni
formulaire interminable.

Le parti pris technique : **du PHP natif sans framework ni compilation**, pour un hébergement mutualisé
classique et une maintenance minimale.

## Fonctionnalités

- **Pages** : accueil, services, à propos, contact, mentions légales, politique de confidentialité et page 404
  personnalisée.
- **Formulaire de contact guidé** : les services sont regroupés en accordéons (un seul ouvert à la fois), les
  choix cochés sont conservés, et un service peut être présélectionné depuis sa carte (`contact.php?service=…`).
- **Aucun traitement serveur des données** : le formulaire prépare un brouillon d'e-mail dans la messagerie du
  visiteur, qui relit et envoie lui-même. Aucune donnée personnelle n'est stockée sur le site.
- **Catalogue de services** centralisé dans `data/services.php`, réutilisé par plusieurs pages.

## Choix techniques notables

- **Configuration unique** (`config/site.php`) : nom, contact, mentions légales et URL du site. L'URL de
  référence (`base_url`) peut être fournie par variable d'environnement ; tant qu'elle est vide, le site reste
  **non indexable** (`noindex`) et n'émet ni canonique ni sitemap, ce qui évite d'indexer une version de travail.
- **URL canoniques construites depuis le domaine configuré**, jamais depuis l'en-tête `Host` reçu (qui peut être
  falsifié).
- **Sitemap généré dynamiquement** (`sitemap.php`) à partir de la même configuration.
- **Échappement systématique** des sorties HTML (`htmlspecialchars` via une fonction commune).
- **`.htaccess`** : listing des dossiers désactivé, page 404 du site pour toute adresse inexistante (y compris
  les `.php`), accès direct interdit à `config/`, `includes/` et `data/`, en-têtes de sécurité de base.
- **JavaScript sans dépendance**, limité au formulaire de contact.
- **Accessibilité** : structure sémantique (`main`, hiérarchie des titres), champs avec `label`, aide à la
  saisie (`autocomplete`), retour d'état du formulaire.

## Stack

PHP « vanilla » (includes) · HTML5 · CSS3 · JavaScript sans dépendance · Apache · Git

## À propos

Ce projet fait partie de mon portfolio. Il remplace une première version statique (HTML/CSS/JS) par une
architecture PHP configurable, plus simple à faire évoluer et à mettre en ligne.

## Licence

© 2026 Estelle Pratlong — **Tous droits réservés**.

Ce dépôt est publié uniquement à titre de démonstration (portfolio). Le code, la structure et le design
**ne sont pas libres de droits** : toute reproduction, distribution, modification ou réutilisation, totale ou
partielle, sans autorisation écrite préalable est **strictement interdite**. Voir le fichier
[LICENSE](LICENSE) pour les détails.
