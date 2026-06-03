#!/bin/sh
set -e

# Recréer les sous-dossiers de storage (vidés par le montage du volume au 1er démarrage)
mkdir -p \
    /var/www/html/storage/logs \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/storage/framework/cache \
    /var/www/html/storage/app/public

# Corriger les permissions sur les volumes montés
chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache \
    /var/www/html/database
chmod -R 775 \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Met à jour ou ajoute une variable dans .env
set_env() {
    local key="$1" val="$2"
    if grep -q "^${key}=" /var/www/html/.env 2>/dev/null; then
        sed -i "s#^${key}=.*#${key}=${val}#" /var/www/html/.env
    else
        printf '\n%s=%s' "$key" "$val" >> /var/www/html/.env
    fi
}

# Synchroniser les variables docker dans .env
[ -n "$APP_NAME" ]      && set_env APP_NAME      "\"${APP_NAME}\""
[ -n "$APP_ENV" ]       && set_env APP_ENV        "${APP_ENV}"
[ -n "$APP_DEBUG" ]     && set_env APP_DEBUG      "${APP_DEBUG}"
[ -n "$APP_URL" ]       && set_env APP_URL        "${APP_URL}"
[ -n "$LOG_CHANNEL" ]   && set_env LOG_CHANNEL    "${LOG_CHANNEL}"
[ -n "$DB_CONNECTION" ] && set_env DB_CONNECTION  "${DB_CONNECTION}"
[ -n "$SESSION_DRIVER" ] && set_env SESSION_DRIVER "${SESSION_DRIVER}"
[ -n "$CACHE_STORE" ]   && set_env CACHE_STORE    "${CACHE_STORE}"
[ -n "$QUEUE_CONNECTION" ] && set_env QUEUE_CONNECTION "${QUEUE_CONNECTION}"

# Gestion de APP_KEY : persistée dans le volume storage pour survivre aux redémarrages
APP_KEY_FILE=/var/www/html/storage/.app_key

if [ -n "$APP_KEY" ]; then
    # Clé fournie explicitement
    set_env APP_KEY "${APP_KEY}"
    echo "${APP_KEY}" > "$APP_KEY_FILE"
elif [ -f "$APP_KEY_FILE" ]; then
    # Réutiliser la clé générée précédemment
    SAVED_KEY=$(cat "$APP_KEY_FILE")
    set_env APP_KEY "${SAVED_KEY}"
else
    # Première fois : générer et sauvegarder
    php artisan key:generate --force
    grep '^APP_KEY=' /var/www/html/.env | cut -d'=' -f2- > "$APP_KEY_FILE"
fi

# Créer le fichier SQLite si le volume est vide
if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    touch /var/www/html/database/database.sqlite
    chown www-data:www-data /var/www/html/database/database.sqlite
fi

# Migrations
php artisan migrate --force

# Mise en cache en production
if [ "$APP_ENV" = "production" ]; then
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

exec /usr/bin/supervisord -c /etc/supervisord.conf
