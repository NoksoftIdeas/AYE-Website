# Deployment Guide - Aye Sickle Cell Foundation Website

## Pre-Deployment Checklist

### 1. Environment Configuration

- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Configure production database credentials
- [ ] Set up SMTP mail settings
- [ ] Generate new `APP_KEY` if needed
- [ ] Update `APP_URL` to production domain

### 2. Security

- [ ] Review all `.env` variables
- [ ] Ensure sensitive data is not in version control
- [ ] Configure HTTPS/SSL certificates
- [ ] Set up firewall rules
- [ ] Configure CORS if needed

### 3. Performance

- [ ] Run `composer install --optimize-autoloader --no-dev`
- [ ] Run `npm run build` for optimized assets
- [ ] Enable OPcache in PHP
- [ ] Configure Redis/Memcached for caching (optional)

## Deployment Steps

### Step 1: Server Requirements

Ensure your server meets these requirements:
- PHP 8.1 or higher
- MySQL 5.7+ or MariaDB 10.3+
- Composer
- Node.js & NPM
- Apache or Nginx
- SSL Certificate

### Step 2: Upload Files

```bash
# Upload all files except:
- /node_modules
- /vendor
- .env
- /storage (upload structure only, not files)
```

### Step 3: Install Dependencies

```bash
composer install --optimize-autoloader --no-dev
```

### Step 4: Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Edit .env with production values
nano .env

# Generate application key
php artisan key:generate
```

### Step 5: Database Setup

```bash
# Run migrations
php artisan migrate --force

# Seed database with initial data
php artisan db:seed --force
```

### Step 6: Storage Configuration

```bash
# Create symbolic link
php artisan storage:link

# Set correct permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Step 7: Optimize Application

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Cache events (if applicable)
php artisan event:cache
```

### Step 8: Web Server Configuration

#### Apache (.htaccess in public folder)

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

#### Nginx Configuration

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name ayesicklecell.org www.ayesicklecell.org;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name ayesicklecell.org www.ayesicklecell.org;
    root /var/www/ayesicklecell/public;

    ssl_certificate /path/to/certificate.crt;
    ssl_certificate_key /path/to/private.key;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Step 9: SSL Certificate

```bash
# Using Let's Encrypt (Certbot)
sudo certbot --nginx -d ayesicklecell.org -d www.ayesicklecell.org
```

### Step 10: Set Up Cron Jobs

Add to crontab (`crontab -e`):

```bash
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

### Step 11: Queue Worker (Optional)

If using queues:

```bash
# Create supervisor configuration
sudo nano /etc/supervisor/conf.d/ayesicklecell-worker.conf
```

```ini
[program:ayesicklecell-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/ayesicklecell/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=1
redirect_stderr=true
stdout_logfile=/var/www/ayesicklecell/storage/logs/worker.log
stopwaitsecs=3600
```

```bash
# Start supervisor
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start ayesicklecell-worker:*
```

## Post-Deployment

### 1. Testing

- [ ] Visit all pages and test functionality
- [ ] Test contact form submission
- [ ] Test volunteer form submission
- [ ] Verify email notifications work
- [ ] Test resource downloads
- [ ] Check mobile responsiveness
- [ ] Test on different browsers

### 2. Monitoring

- [ ] Set up error monitoring (e.g., Sentry)
- [ ] Configure uptime monitoring
- [ ] Set up analytics (Google Analytics, etc.)
- [ ] Monitor server resources

### 3. Backups

```bash
# Database backup script
#!/bin/bash
DATE=$(date +%Y%m%d_%H%M%S)
BACKUP_DIR="/backups/database"
DB_NAME="aye_sickle_cell"
DB_USER="your_db_user"
DB_PASS="your_db_password"

mkdir -p $BACKUP_DIR
mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > $BACKUP_DIR/backup_$DATE.sql
gzip $BACKUP_DIR/backup_$DATE.sql

# Keep only last 30 days of backups
find $BACKUP_DIR -type f -mtime +30 -delete
```

Schedule in cron:
```bash
0 2 * * * /path/to/backup-script.sh
```

### 4. Maintenance Mode

To enable maintenance mode:
```bash
php artisan down --secret="maintenance-bypass-token"
```

Access site during maintenance:
```
https://ayesicklecell.org/maintenance-bypass-token
```

To disable maintenance mode:
```bash
php artisan up
```

## Updating the Application

```bash
# Enable maintenance mode
php artisan down

# Pull latest changes
git pull origin main

# Update dependencies
composer install --optimize-autoloader --no-dev
npm install
npm run build

# Run migrations
php artisan migrate --force

# Clear and recache
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Disable maintenance mode
php artisan up
```

## Troubleshooting

### Permission Issues

```bash
sudo chown -R www-data:www-data /var/www/ayesicklecell
sudo chmod -R 755 /var/www/ayesicklecell
sudo chmod -R 775 /var/www/ayesicklecell/storage
sudo chmod -R 775 /var/www/ayesicklecell/bootstrap/cache
```

### Clear All Caches

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Check Logs

```bash
tail -f storage/logs/laravel.log
```

## Security Best Practices

1. **Keep Software Updated**
   - Regular PHP updates
   - Composer package updates
   - NPM package updates

2. **Secure File Permissions**
   - Never set 777 permissions
   - Keep storage writable only by web server

3. **Environment Variables**
   - Never commit `.env` to version control
   - Use strong, unique passwords

4. **SSL/HTTPS**
   - Always use HTTPS in production
   - Enable HSTS headers

5. **Database Security**
   - Use strong database passwords
   - Restrict database access by IP
   - Regular backups

## Support

For deployment issues:
- Technical Lead: [technical-contact]
- Documentation: README.md
- Laravel Docs: https://laravel.com/docs

---

**Last Updated**: January 2026
