#!/bin/sh
set -e

# Recrée les sous-dossiers storage (vidés par le volume au 1er démarrage)
mkdir -p \
    /var/www/html/storage/logs \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/storage/framework/cache \
    /var/www/html/storage/app/public

# Permissions
chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache
chmod -R 775 \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Crée .env depuis l'exemple s'il n'existe pas encore
if [ ! -f /var/www/html/.env ]; then
    cp /var/www/html/.env.example /var/www/html/.env
fi

# Génère APP_KEY si absent
if ! grep -q '^APP_KEY=base64:' /var/www/html/.env; then
    php artisan key:generate --force
fi

# Crée la base SQLite si nécessaire
touch /var/www/html/database/database.sqlite
chown www-data:www-data /var/www/html/database/database.sqlite

# Installe les dépendances PHP (avec --dev pour les outils de dev)
composer install --no-interaction --prefer-dist

# Migrations
php artisan migrate --force

# Pas de cache en dev — s'assure que les caches prod ne traînent pas
php artisan config:clear 2>/dev/null || true
php artisan route:clear  2>/dev/null || true
php artisan view:clear   2>/dev/null || true

exec /usr/bin/supervisord -c /etc/supervisord.conf
