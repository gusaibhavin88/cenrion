#!/bin/sh
set -eu

cd /var/www/html

mkdir -p \
    storage/app/public \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache

if [ -z "${APP_KEY:-}" ]; then
    APP_KEY="$(php -r 'echo "base64:".base64_encode(random_bytes(32));')"
    export APP_KEY
elif ! printf '%s' "$APP_KEY" | grep -q '^base64:'; then
    # Render's generated values are raw base64. Laravel expects a base64: prefix.
    export APP_KEY="base64:${APP_KEY}"
fi

if [ -z "${APP_URL:-}" ] && [ -n "${RENDER_EXTERNAL_URL:-}" ]; then
    export APP_URL="$RENDER_EXTERNAL_URL"
fi

PORT="${PORT:-10000}"

if [ -d /etc/nginx/http.d ]; then
    NGINX_CONF=/etc/nginx/http.d/default.conf
else
    NGINX_CONF=/etc/nginx/conf.d/default.conf
    mkdir -p /etc/nginx/conf.d
fi

cat > "$NGINX_CONF" <<EOF
server {
    listen ${PORT} default_server;
    listen [::]:${PORT} default_server;
    server_name _;
    root /var/www/html/public;
    index index.php;
    charset utf-8;
    client_max_body_size 20M;

    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-Content-Type-Options "nosniff" always;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    location ~ \\.php\$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
        fastcgi_hide_header X-Powered-By;
        fastcgi_read_timeout 60;
    }

    location ~ /\\.(?!well-known).* {
        deny all;
    }
}
EOF

php-fpm -D
exec nginx -g 'daemon off;'
