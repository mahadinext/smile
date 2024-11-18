#!/bin/bash

# Navigate to the Laravel application directory
cd ~/home/smileaca/evaluation.smileacad.com

# Run database migrations
php artisan migrate --force

# Clear caches
php artisan cache:clear

# Clear and cache routes
php artisan route:cache

# Clear and cache config
php artisan config:cache

# Clear and cache views
php artisan view:cache
