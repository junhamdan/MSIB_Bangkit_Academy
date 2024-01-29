# Use the official PHP image for Laravel
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip

# Enable Apache modules and restart Apache
RUN a2enmod rewrite && service apache2 restart

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy only the necessary files for composer install to cache dependencies
COPY composer.json composer.lock ./

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Copy the Laravel application files to the container
COPY . /var/www/html

# Set up Laravel
RUN cp .env.example .env
RUN php artisan key:generate

# Build assets
RUN npm install && npm run production

# Set directory permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 8080
EXPOSE 8080

# Start Apache
CMD ["apache2-foreground"]