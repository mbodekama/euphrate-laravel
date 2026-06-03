# Collège Privé Euphrate — Site Web Laravel

Site officiel du **Collège Privé Euphrate** de Grand-Lahou, Côte d'Ivoire.  
Migré depuis PHP natif vers **Laravel 11** avec architecture MVC complète.

---

## Stack technique

- **Framework** : Laravel 11
- **PHP** : 8.2+
- **Frontend** : Bootstrap 5, Owl Carousel, Swiper, jQuery
- **Sessions / Cache** : File driver
- **Base de données** : MySQL (optionnel — authentification)

---

## Pages

| URL | Description |
|---|---|
| `/` | Accueil avec slider et sections |
| `/about` | Présentation de l'établissement |
| `/vie-scolaire` | Vie scolaire et règlement intérieur |
| `/enseignements` | Vitrine des enseignants |
| `/cours` | Cours en ligne (filtres par classe/matière) |
| `/actualite` | Événements et actualités |
| `/contact` | Formulaire de contact |
| `/login` | Connexion |

---

## Installation

```bash
git clone https://github.com/mbodekama/euphrate-laravel.git
cd euphrate-laravel

composer install

cp .env.example .env
php artisan key:generate
```

Éditer `.env` selon votre environnement :

```env
SESSION_DRIVER=file
CACHE_STORE=file

# Optionnel — pour l'authentification
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=euphrate_db
DB_USERNAME=root
DB_PASSWORD=
```

Lancer le serveur :

```bash
php artisan serve
```

Le site est accessible sur **http://localhost:8000**

---

## Structure

```
app/
├── Http/Controllers/
│   ├── PageController.php   — Pages publiques
│   └── AuthController.php   — Connexion / Déconnexion
resources/views/
├── layouts/
│   └── app.blade.php        — Layout principal (header + footer)
└── pages/
    ├── home.blade.php
    ├── about.blade.php
    ├── contact.blade.php
    ├── cours.blade.php
    ├── vie-scolaire.blade.php
    ├── enseignements.blade.php
    ├── actualite.blade.php
    └── login.blade.php
public/
└── assets/                  — CSS, JS, images, fonts
routes/
└── web.php                  — Toutes les routes nommées
```

---

## Contacts

- **Établissement** : Collège Privé Euphrate, Grand-Lahou, Côte d'Ivoire
- **Téléphone** : +225 07 07 79 11 74
- **Email** : cpeuphrate@gmail.com
- **Devise** : *Discipline – Excellence – Réussite*
