# SwapCircle 🌍

**Rejoignez la révolution de l'échange durable !**

SwapCircle est bien plus qu'une plateforme d'échange d'objets : c'est un mouvement vers une économie circulaire où chaque objet trouve une nouvelle vie. En facilitant l'échange entre utilisateurs, nous contribuons à réduire les déchets, à promouvoir la durabilité et à créer un impact positif sur notre planète.

Notre application web moderne offre une interface intuitive pour créer, rechercher et échanger des objets, tout en intégrant des fonctionnalités avancées comme la gestion des réclamations, des blogs communautaires et des tutoriels éducatifs.

## 🚀 Démarrage rapide

Prêt à faire partie du changement ? Suivez ces étapes simples pour lancer SwapCircle sur votre machine.

### Prérequis

- **PHP** >= 8.1
- **Composer** (gestionnaire de dépendances PHP)
- **MySQL** 8.0+ ou **PostgreSQL** 16+ (selon votre préférence)
- **Docker** et **Docker Compose** (optionnel, pour une configuration simplifiée)

### Installation

1. **Clonez le projet** (si nécessaire)
   ```bash
   cd SwapCircle
   ```

2. **Installez les dépendances PHP**
   ```bash
   composer install
   ```

3. **Configurez l'environnement**
   
   Le fichier `.env` est préconfiguré. Vérifiez ces variables clés :
   - `DATABASE_URL` : Connexion à votre base de données
   - `APP_SECRET` : Clé secrète générée automatiquement

   **Configuration par défaut :**
   - Base : MySQL sur `127.0.0.1:3306`
   - Nom : `swapcircle`
   - Utilisateur : `root` (mot de passe vide)

4. **Configurez la base de données**

   **Option A : Avec Docker Compose (PostgreSQL recommandé)**
   ```bash
   # Lancez les services base de données et mailer
   docker compose up -d

   # Mettez à jour le .env pour PostgreSQL
   # DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"
   ```

   **Option B : MySQL local**
   ```sql
   CREATE DATABASE swapcircle CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```
   
   Assurez-vous que votre `.env` contient :
   ```
   DATABASE_URL="mysql://root:@127.0.0.1:3306/swapcircle?serverVersion=8.0.32&charset=utf8mb4"
   ```

5. **Appliquez les migrations**
   ```bash
   php bin/console doctrine:migrations:migrate
   ```
   Confirmez avec `yes` si demandé.

6. **(Optionnel) Chargez les données de test**
   ```bash
   php bin/console doctrine:fixtures:load
   ```

### Lancement de l'application

**Méthode recommandée : Serveur Symfony**
```bash
symfony server:start
```

**Alternative : Serveur PHP intégré**
```bash
php -S localhost:8000 -t public
```

Votre application sera accessible sur **http://localhost:8000** – commencez à échanger dès maintenant !

## 🛠️ Commandes utiles

- **Vider le cache** : `php bin/console cache:clear`
- **Créer une migration** : `php bin/console make:migration`
- **Appliquer les migrations** : `php bin/console doctrine:migrations:migrate`
- **Voir les routes** : `php bin/console debug:router`
- **Lancer les tests** : `php bin/phpunit`

## 📁 Structure du projet

Une architecture claire et modulaire pour une maintenance facile :

```
SwapCircle/
├── assets/              # Ressources front-end (JS, CSS)
├── bin/                 # Scripts exécutables
├── config/              # Configuration Symfony
├── migrations/          # Migrations Doctrine
├── public/              # Point d'entrée web
│   ├── backOffice/      # Interface administration
│   └── frontOffice/     # Interface utilisateur
├── src/                 # Code source
│   ├── Controller/      # Logique de contrôle
│   ├── Entity/          # Modèles de données
│   ├── Form/            # Formulaires Symfony
│   └── Repository/      # Accès aux données
├── templates/           # Templates Twig
└── tests/               # Tests automatisés
```

## 🛡️ Technologies et sécurité

SwapCircle repose sur des technologies robustes et modernes :

- **Framework** : Symfony 6.4 – Puissant et sécurisé
- **ORM** : Doctrine – Gestion efficace des données
- **Templates** : Twig – Sécurisé et flexible
- **Base de données** : MySQL / PostgreSQL
- **Front-end** : JavaScript, Bootstrap, FontAwesome, Chart.js
- **Sécurité** : Authentification avancée avec rôles (ex. : ROLE_ADMIN)
- **Temps réel** : Mercure pour les notifications, Messenger pour les files
- **Tests** : PHPUnit pour une qualité garantie

## 🌱 Impact environnemental

Chez SwapCircle, nous croyons au pouvoir de l'action collective :

- **Économie circulaire** : Donnez une seconde vie aux objets au lieu de les jeter
- **Réduction des déchets** : Moins de production, plus de partage
- **Communauté engagée** : Rejoignez des milliers d'utilisateurs motivés par la durabilité
- **Impact positif** : Ensemble, créons un avenir plus vert et responsable

## 🔧 Dépannage

Rencontrez un problème ? Voici les solutions courantes :

### Connexion base de données
- Vérifiez que MySQL/PostgreSQL fonctionne
- Contrôlez les identifiants dans `.env`
- Assurez-vous que la base existe

### Permissions
Sur Linux/Mac :
```bash
chmod +x bin/console
```

### Assets
```bash
php bin/console assets:install public
php bin/console importmap:install
```

## 📞 Support et contribution

Pour en savoir plus, consultez la [documentation Symfony](https://symfony.com/doc/6.4/index.html).

**Comptes de test :**
- **Admin** : admin@swapcircle.com / admin123
- **Utilisateur** : user@swapcircle.com / user123

Prêt à contribuer ? Ouvrez une issue ou une pull request. Ensemble, rendons SwapCircle encore meilleur pour la planète ! 🌍✨