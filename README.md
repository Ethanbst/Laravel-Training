# 📚 Laravel Training - Blog avec Authentification

Un projet d'apprentissage Laravel qui implémente un système de blog complet avec authentification utilisateur.

## 🎯 Fonctionnalités

### 📝 Gestion des Articles
- ✅ Création, modification et suppression d'articles
- ✅ Attribution automatique de l'auteur (utilisateur connecté)
- ✅ Affichage de la liste des articles (public)
- ✅ Messages de confirmation pour les actions

### 🔐 Authentification
- ✅ Inscription et connexion des utilisateurs
- ✅ Protection des routes sensibles
- ✅ Interface utilisateur selon l'état de connexion
- ✅ Tableau de bord utilisateur

### 🎨 Interface Utilisateur
- ✅ Design responsive avec CSS personnalisé
- ✅ Navigation dynamique (Flexbox)
- ✅ Messages flash pour les retours utilisateur
- ✅ Pages : Accueil, À propos, Contact, Articles

## 🛠️ Technologies Utilisées

- **Laravel 11** - Framework PHP
- **Laravel Breeze** - Authentification
- **SQLite** - Base de données
- **Blade** - Moteur de templates
- **CSS** - Styles personnalisés

## 📋 Prérequis

Avant d'installer le projet, assurez-vous d'avoir :

- **PHP 8.2 ou supérieur**
- **Composer** (gestionnaire de dépendances PHP)
- **Node.js 18 ou supérieur**
- **NPM** (inclus avec Node.js)
- **Git**

### Vérification des prérequis

```bash
php --version
composer --version
node --version
npm --version
git --version
```

## 🚀 Installation

### 1. Cloner le repository

```bash
git clone https://github.com/Ethanbst/Laravel-Training.git
cd Laravel-Training/example-app
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Installer les dépendances Node.js

```bash
npm install
```

### 4. Configuration de l'environnement

```bash
# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé de l'application
php artisan key:generate
```

### 5. Configuration de la base de données

Le projet utilise SQLite par défaut. Créez le fichier de base de données :

```bash
# Sur Windows (PowerShell)
New-Item -Path database/database.sqlite -ItemType File

# Sur macOS/Linux
touch database/database.sqlite
```

### 6. Exécuter les migrations

```bash
php artisan migrate
```

### 7. Compiler les assets frontend

```bash
npm run dev
```

### 8. Lancer le serveur de développement

```bash
php artisan serve
```

Le projet sera accessible à l'adresse : **http://localhost:8000**

## 🎮 Utilisation

### 1. Créer un compte utilisateur
- Rendez-vous sur `/register`
- Créez un compte avec votre nom, email et mot de passe

### 2. Explorer les fonctionnalités
- **Page publique** : Consultez la liste des articles sans être connecté
- **Connexion** : Connectez-vous pour accéder aux fonctionnalités d'écriture
- **Création d'articles** : Rédigez vos propres articles
- **Gestion** : Modifiez ou supprimez vos articles

### 3. Pages disponibles
- `/` - Page d'accueil Laravel
- `/articles` - Liste des articles (public)
- `/a-propos` - Page à propos
- `/contact` - Page de contact
- `/login` - Connexion
- `/register` - Inscription
- `/dashboard` - Tableau de bord (connecté)

## 🏗️ Structure du Projet

```
example-app/
├── app/
│   ├── Http/Controllers/
│   │   └── ArticleController.php    # Contrôleur des articles
│   └── Models/
│       └── Article.php              # Modèle Article
├── database/
│   ├── migrations/                  # Migrations de base de données
│   └── database.sqlite             # Base de données SQLite
├── resources/
│   └── views/                      # Templates Blade
│       ├── layout.blade.php        # Layout principal
│       ├── articles.blade.php      # Liste des articles
│       ├── add-article.blade.php   # Formulaire d'ajout
│       └── ...
└── routes/
    └── web.php                     # Routes de l'application
```

## 🔧 Commandes Utiles

```bash
# Démarrer le serveur
php artisan serve

# Compiler les assets en mode développement
npm run dev

# Compiler les assets en mode production
npm run build

# Voir les routes disponibles
php artisan route:list

# Effacer le cache de l'application
php artisan cache:clear

# Créer un nouveau contrôleur
php artisan make:controller NomController

# Créer une nouvelle migration
php artisan make:migration create_nom_table
```

## 🐛 Résolution de Problèmes

### Erreur de permissions (macOS/Linux)
```bash
sudo chmod -R 775 storage bootstrap/cache
```

### Erreur "Class not found"
```bash
composer dump-autoload
```

### Problème avec les assets
```bash
npm run dev
# ou
npm run build
```

### Base de données verrouillée
```bash
php artisan migrate:fresh
```

## 📖 Apprentissages Réalisés

### Laravel Core
- ✅ Installation et configuration de Laravel
- ✅ Système de routing et middlewares
- ✅ Contrôleurs et organisation MVC
- ✅ Modèles Eloquent et relations
- ✅ Migrations et schémas de base de données

### Frontend
- ✅ Moteur de templates Blade
- ✅ Layouts et héritage de vues
- ✅ Formulaires et validation
- ✅ CSS responsive et Flexbox

### Authentification
- ✅ Laravel Breeze
- ✅ Protection de routes
- ✅ Gestion des sessions
- ✅ Interface utilisateur conditionnelle

### Bonnes Pratiques
- ✅ Sécurité (Mass Assignment Protection)
- ✅ Messages flash utilisateur
- ✅ Structure MVC
- ✅ Code propre et organisé

## 👨‍💻 Auteur

**Ethan** - Projet d'apprentissage Laravel

## 📝 Licence

Ce projet est à des fins éducatives.

---

⭐ **N'hésitez pas à explorer le code et à tester toutes les fonctionnalités !**