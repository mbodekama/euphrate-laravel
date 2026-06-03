# Collège Privé Euphrate — Site Web Laravel

Site officiel du **Collège Privé Euphrate** de Grand-Lahou, Côte d'Ivoire.  
Migré depuis PHP natif vers **Laravel 11** avec architecture MVC complète.

---

## Stack technique

| Couche | Technologie |
|---|---|
| Framework | Laravel 11 |
| PHP | 8.4 (Alpine) |
| Frontend | Bootstrap 5, Owl Carousel, Swiper, jQuery |
| Base de données | SQLite (défaut) · MySQL (optionnel) |
| Sessions / Cache | File driver |
| Serveur web | Nginx + PHP-FPM (via Supervisord) |
| Conteneurisation | Docker multi-stage |
| CI/CD | GitLab CI — 4 stages |

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

## Installation locale (sans Docker)

```bash
git clone https://github.com/mbodekama/euphrate-laravel.git
cd euphrate-laravel

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run build
php artisan serve
```

Le site est accessible sur **http://localhost:8000**

---

## Docker

### Prérequis

- [Docker Engine](https://docs.docker.com/engine/install/) ≥ 24
- [Docker Compose](https://docs.docker.com/compose/install/) v2

### Démarrage rapide

```bash
# 1. Cloner le dépôt
git clone https://github.com/mbodekama/euphrate-laravel.git
cd euphrate-laravel

# 2. Construire et démarrer
docker compose up -d --build

# 3. Ouvrir le navigateur
open http://localhost:8000
```

Le premier démarrage prend ~2 min (build de l'image, compilation des assets, migrations).  
Les suivants démarrent en quelques secondes grâce au cache Docker.

### Ce que fait le conteneur au démarrage

L'`entrypoint.sh` exécute automatiquement :

1. Crée les dossiers `storage/` requis par Laravel (vidés par le volume au 1er lancement)
2. Synchronise les variables d'environnement dans `.env`
3. Génère `APP_KEY` si absent et la **persiste** dans le volume `storage` pour les redémarrages
4. Crée le fichier `database/database.sqlite` si le volume est vide
5. Lance `php artisan migrate --force`
6. Met en cache la config, les routes et les vues (`config:cache`, `route:cache`, `view:cache`)
7. Démarre **Nginx** + **PHP-FPM** via Supervisord

### Variables d'environnement

Toutes les variables sont configurables dans `docker-compose.yml` :

| Variable | Valeur par défaut | Description |
|---|---|---|
| `APP_NAME` | `Collège Privé Euphrate` | Nom de l'application |
| `APP_ENV` | `production` | Environnement (`production` / `local`) |
| `APP_DEBUG` | `false` | Activer le mode debug |
| `APP_URL` | `http://localhost:8000` | URL publique |
| `APP_KEY` | *(auto-généré)* | Clé de chiffrement — laisser vide pour auto-génération |
| `DB_CONNECTION` | `sqlite` | Driver base de données |
| `SESSION_DRIVER` | `file` | Driver sessions |
| `CACHE_STORE` | `file` | Driver cache |

Pour fournir une `APP_KEY` stable (recommandé en production) :

```bash
# Générer une clé
php artisan key:generate --show
# → base64:XXXXX...

# Décommenter et renseigner dans docker-compose.yml :
# APP_KEY: "base64:XXXXX..."
```

### Volumes persistants

| Volume Docker | Chemin dans le conteneur | Contenu |
|---|---|---|
| `storage_data` | `/var/www/html/storage` | Logs, sessions, cache, uploads, `APP_KEY` |
| `sqlite_data` | `/var/www/html/database` | Fichier `database.sqlite` |

> Les données survivent aux redémarrages et aux mises à jour de l'image.

### Commandes utiles

```bash
# Voir les logs en temps réel
docker compose logs -f

# Lancer une commande artisan
docker compose exec app php artisan migrate:status
docker compose exec app php artisan tinker

# Ouvrir un shell dans le conteneur
docker compose exec app sh

# Arrêter
docker compose down

# Arrêter et supprimer les volumes (réinitialisation complète)
docker compose down -v
```

### Structure de l'image Docker

L'image est construite en **deux stages** pour minimiser la taille finale :

```
Stage 1 — assets (node:22-alpine)
  └── npm install + npm run build → /app/public/build

Stage 2 — app (php:8.4-fpm-alpine)
  ├── Extensions PHP : pdo_sqlite, pdo_mysql, gd, mbstring, zip, bcmath, opcache
  ├── Composer (dépendances sans --dev)
  ├── Code source Laravel
  ├── Assets compilés copiés depuis Stage 1
  ├── Nginx (serveur HTTP sur le port 80)
  └── Supervisord (orchestre Nginx + PHP-FPM)
```

---

## Pipeline CI/CD (GitLab)

Le fichier `.gitlab-ci.yml` définit un pipeline automatisé en **4 stages** :

```
commit → [build] → [test] → [release] → [deploy ▶]
```

### Vue d'ensemble

| Stage | Job | Déclencheur | Rôle |
|---|---|---|---|
| **build** | `build:image` | Tout commit | Compile l'image Docker et la pousse dans le registry GitLab |
| **test** | `test:unit` | Tout commit | PHPUnit — tests unitaires et fonctionnels (SQLite in-memory) |
| **test** | `test:lint` | Tout commit | Laravel Pint — vérification du style de code (non bloquant) |
| **release** | `release:image` | Branche `main` ou tag git | Confirme l'image comme `:latest`; tague aussi `v1.x.x` si tag git |
| **deploy** | `deploy:production` | `main` — **manuel** ▶ | SSH vers le serveur, `docker pull` + redémarrage du conteneur |

### Prérequis GitLab

#### 1. Activer le Container Registry

Dans le projet GitLab → **Settings → General → Visibility** → activer *Container Registry*.

#### 2. Créer les variables CI/CD

Dans **Settings → CI/CD → Variables**, ajouter :

| Variable | Type | Description |
|---|---|---|
| `SSH_PRIVATE_KEY` | File / Masked | Clé SSH privée pour accéder au serveur de prod |
| `DEPLOY_HOST` | Variable | IP ou domaine du serveur (ex. `192.168.1.10`) |
| `DEPLOY_USER` | Variable | Utilisateur SSH sur le serveur (ex. `ubuntu`) |

> `CI_REGISTRY`, `CI_REGISTRY_USER` et `CI_REGISTRY_PASSWORD` sont fournis automatiquement par GitLab.

#### 3. Autoriser la clé SSH sur le serveur

```bash
# Générer une paire de clés dédiée au déploiement
ssh-keygen -t ed25519 -C "gitlab-deploy" -f ~/.ssh/gitlab_deploy

# Copier la clé publique sur le serveur
ssh-copy-id -i ~/.ssh/gitlab_deploy.pub DEPLOY_USER@DEPLOY_HOST

# Coller le contenu de la clé PRIVÉE dans la variable GitLab SSH_PRIVATE_KEY
cat ~/.ssh/gitlab_deploy
```

### Déroulement du pipeline

#### Stage 1 — build

```
docker build (multi-stage) → push :SHA + :latest → registry GitLab
```

Utilise `--cache-from :latest` pour accélérer les rebuilds : seules les layers modifiées sont reconstruites.

#### Stage 2 — test

Les deux jobs `test:unit` et `test:lint` s'exécutent **en parallèle** dans un conteneur PHP Alpine léger (sans Docker).

- `test:unit` : `php artisan test` avec SQLite in-memory — les logs sont archivés en cas d'échec
- `test:lint` : `./vendor/bin/pint --test` — marked `allow_failure: true` (ne bloque pas le pipeline)

#### Stage 3 — release

Ne s'exécute que sur `main` (ou sur un tag git) **et** uniquement si `build:image` + `test:unit` sont verts.

- Tague l'image SHA comme `:latest`
- Si un tag git `v1.2.3` est posé → tague aussi `:v1.2.3` pour garder un historique des versions

#### Stage 4 — deploy

Déclenchement **manuel** depuis l'interface GitLab (bouton ▶).

1. Se connecte au serveur via SSH
2. `docker pull registry.../euphrate-laravel:latest`
3. Arrête et supprime l'ancien conteneur
4. Lance le nouveau conteneur avec les volumes existants (données préservées)
5. `docker image prune -f` — supprime les anciennes images inutilisées

### Déclencher un déploiement

```
GitLab → CI/CD → Pipelines → dernier pipeline sur main
  → Stage "deploy" → cliquer ▶ sur "deploy:production"
```

### Publier une version taguée

```bash
git tag v1.0.0
git push origin v1.0.0
```

Le pipeline crée automatiquement l'image `:v1.0.0` dans le registry.

---

## Structure du projet

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
docker/
├── entrypoint.sh            — Script de démarrage du conteneur
├── nginx/default.conf       — Config Nginx
└── supervisord.conf         — Config Supervisord (Nginx + PHP-FPM)
```

---

## Contacts

- **Établissement** : Collège Privé Euphrate, Grand-Lahou, Côte d'Ivoire
- **Téléphone** : +225 07 07 79 11 74
- **Email** : cpeuphrate@gmail.com
- **Devise** : *Discipline – Excellence – Réussite*
