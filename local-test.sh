#!/bin/bash
set -e

echo "=== WordPress Multisite Local Test Setup ==="
echo ""

# Step 1: Add hosts entries
echo "Step 1: Adding domain entries to /etc/hosts (requires sudo)..."
if ! grep -q "mithusen.in" /etc/hosts 2>/dev/null; then
    echo "127.0.0.1  mithusen.in" | sudo tee -a /etc/hosts > /dev/null
    echo "127.0.0.1  freemithu.mithusen.in" | sudo tee -a /etc/hosts > /dev/null
    echo "  Added: mithusen.in → 127.0.0.1"
    echo "  Added: freemithu.mithusen.in → 127.0.0.1"
else
    echo "  Already configured."
fi

# Step 2: Stop any existing containers
echo ""
echo "Step 2: Starting Docker containers..."
docker compose down 2>/dev/null || true
docker compose up -d

# Step 3: Wait for WordPress to initialize
echo ""
echo "Step 3: Waiting for WordPress to initialize..."
sleep 5

# Step 4: Copy .htaccess into the container
echo ""
echo "Step 4: Configuring WordPress multisite .htaccess..."
docker compose exec -T wordpress bash -c 'cat > /var/www/html/.htaccess << "HTEOF"
# BEGIN WordPress Multisite
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]

# uploaded files for subsites
RewriteRule ^([_0-9a-zA-Z-]+/)?files/(.+) wp-includes/ms-files.php?file=$2 [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
# END WordPress Multisite
HTEOF'

# Enable mod_rewrite
docker compose exec -T wordpress bash -c 'a2enmod rewrite && apache2ctl graceful' 2>/dev/null

echo ""
echo "=== Setup Complete ==="
echo ""
echo "  Main site:   http://mithusen.in"
echo "  Subdomain:   http://freemithu.mithusen.in"
echo "  phpMyAdmin:  http://localhost:8081"
echo "  WP Admin:    http://mithusen.in/wp-admin"
echo ""
echo "  Admin user:  admin"
echo "  Admin pass:  (use the password from your original site,"
echo "                or reset via phpMyAdmin)"
echo ""
echo "  To stop:     docker compose down"
echo "  To clean up: docker compose down -v  (removes database)"
echo "  To remove hosts entries:"
echo "    sudo sed -i '' '/mithusen.in/d' /etc/hosts"
