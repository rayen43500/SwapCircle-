
Résumé du projet
-----------------

SwapCircle est une application web de gestion et d'échange d'objets entre utilisateurs. Elle propose un office pour l'administration et pour les utilisateurs permettant de créer, modifier, rechercher et échanger des objets. Le projet inclut la gestion des utilisateurs, des échanges, des commentaires, et des notifications basiques, ainsi que des pages frontales et des vues d'administration.

Technologies et outils
----------------------

- **Langage principal :** PHP (Symfony Framework)
- **Framework back-end :** Symfony (structure MVC, contrôleurs dans `src/Controller`, templates Twig dans `templates/`)
- **ORM & Migrations :** Doctrine ORM avec migrations (dossier `migrations/`)
- **Gestion des dépendances :** Composer (`composer.json`)
- **Templates :** Twig
- **Front-end :** JavaScript (fichiers dans `assets/` et `public/`), utilisation possible de Stimulus (contrôleurs présents dans `assets/controllers/`), CSS/SCSS, Bootstrap et FontAwesome (présents dans `public/backOffice/plugins/`)
- **Graphiques / visualisation :** Chart.js (présent dans `public/backOffice/plugins/chart.js/`)
- **Tests :** PHPUnit (fichiers `phpunit`, `phpunit.xml.dist`)

Base de données
----------------

Le projet utilise Doctrine DBAL/ORM et est configuré pour se connecter à une base MySQL. La connexion est gérée via la variable d'environnement `DATABASE_URL` (voir `.env`). Dans la configuration actuelle (fichier `.env`), la chaîne de connexion par défaut est :

```
DATABASE_URL="mysql://root:@127.0.0.1:3306/swapcircle?serverVersion=8.0.32&charset=utf8mb4"
```

Remarques
--------

- Les entités principales se trouvent dans `src/Entity/` (par ex. `Objet`, `Echange`, `Utilisateur`).
- Les migrations Doctrine sont dans `migrations/` et permettent d'appliquer l'historique de schéma.
- Pour la mise en production, veillez à définir des variables d'environnement sécurisées (mot de passe DB, `APP_SECRET`) et à compiler/optimiser les assets selon la méthode choisie (Webpack Encore, importmap, ou autre).

Si vous voulez, je peux :
- ajouter une section « Installation rapide » avec commandes d'environnement et de migration ;
- générer un fichier `README.md` plus complet ou préparer des instructions de déploiement.

