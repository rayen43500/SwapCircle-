# SwapCircle

SwapCircle est une application web de gestion et d'échange d'objets entre utilisateurs. Elle propose un back-office pour l'administration et un front-office pour les utilisateurs permettant de créer, modifier, rechercher et échanger des objets.

## Prérequis

- **PHP** >= 8.1
- **Composer** (gestionnaire de dépendances PHP)
- **MySQL** 8.0+ ou **PostgreSQL** 16+ (selon votre configuration)
- **Docker** et **Docker Compose** (optionnel, pour la base de données)

## Installation

### 1. Cloner le projet (si nécessaire)

```bash
cd SwapCircle
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Configuration de l'environnement

Le fichier `.env` contient déjà une configuration par défaut. Vérifiez ou modifiez les variables suivantes selon vos besoins :

- `DATABASE_URL` : URL de connexion à la base de données
- `APP_SECRET` : Clé secrète de l'application (générée automatiquement)

**Configuration actuelle :**
- Base de données : MySQL sur `127.0.0.1:3306`
- Nom de la base : `swapcircle`
- Utilisateur : `root` (sans mot de passe)

### 4. Configuration de la base de données

#### Option A : Utiliser Docker Compose (PostgreSQL)

Si vous préférez utiliser PostgreSQL via Docker :

```bash
# Démarrer les services (base de données + mailer)
docker compose up -d

# Mettre à jour le .env pour utiliser PostgreSQL
# DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=16&charset=utf8"
```

#### Option B : Utiliser MySQL localement

1. Créez la base de données MySQL :
```sql
CREATE DATABASE swapcircle CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Vérifiez que le `.env` contient :
```
DATABASE_URL="mysql://root:@127.0.0.1:3306/swapcircle?serverVersion=8.0.32&charset=utf8mb4"
```

### 5. Exécuter les migrations de base de données

```bash
php bin/console doctrine:migrations:migrate
```

Si c'est la première fois, vous devrez confirmer avec `yes`.

### 6. (Optionnel) Charger les données de test

Si vous avez des fixtures :

```bash
php bin/console doctrine:fixtures:load
```

## Lancer l'application

### Méthode 1 : Utiliser le serveur Symfony (recommandé pour le développement)

```bash
symfony server:start
```

Ou si vous n'avez pas Symfony CLI installé :

```bash
php -S localhost:8000 -t public
```

L'application sera accessible à l'adresse : **http://localhost:8000**

### Méthode 2 : Utiliser un serveur web (Apache/Nginx)

Configurez votre serveur web pour pointer vers le dossier `public/` comme racine du document.

## Commandes utiles

### Vider le cache

```bash
php bin/console cache:clear
```

### Créer une nouvelle migration

```bash
php bin/console make:migration
```

### Appliquer les migrations

```bash
php bin/console doctrine:migrations:migrate
```

### Voir les routes disponibles

```bash
php bin/console debug:router
```

### Lancer les tests

```bash
php bin/phpunit
```

## Structure du projet

```
SwapCircle/
├── assets/              # Assets front-end (JS, CSS)
├── bin/                 # Scripts exécutables (console, phpunit)
├── config/              # Configuration Symfony
├── migrations/          # Migrations Doctrine
├── public/              # Point d'entrée public (index.php)
│   ├── backOffice/      # Assets du back-office
│   └── frontOffice/     # Assets du front-office
├── src/                 # Code source de l'application
│   ├── Controller/      # Contrôleurs
│   ├── Entity/          # Entités Doctrine
│   ├── Form/            # Formulaires Symfony
│   └── Repository/      # Repositories Doctrine
├── templates/           # Templates Twig
└── tests/               # Tests PHPUnit
```

## Technologies utilisées

- **Framework** : Symfony 6.4
- **ORM** : Doctrine ORM
- **Templates** : Twig
- **Base de données** : MySQL / PostgreSQL
- **Front-end** : JavaScript, Bootstrap, FontAwesome, Chart.js
- **Tests** : PHPUnit

## Dépannage

### Erreur de connexion à la base de données

- Vérifiez que MySQL/PostgreSQL est démarré
- Vérifiez les identifiants dans `.env`
- Assurez-vous que la base de données existe

### Erreur de permissions

Sur Linux/Mac, vous pourriez avoir besoin de :
```bash
chmod +x bin/console
```

### Problèmes avec les assets

```bash
php bin/console assets:install public
php bin/console importmap:install
```

## Support

Pour plus d'informations, consultez la [documentation Symfony](https://symfony.com/doc/6.4/index.html).

