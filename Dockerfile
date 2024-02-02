# Use the official PHP image with Apache as the base image
FROM php:8.3-apache

# Set the working directory
WORKDIR /var/www/html/inspire

# Install system dependencies
RUN apt-get update && \
    apt-get install -y git zip libsqlite3-dev libpq-dev

ENV COMPOSER_ALLOW_SUPERUSER=1

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.json to the current working directory
COPY composer*.json ./

# Run composer install
RUN composer install

ENV COMPOSER_ALLOW_SUPERUSER=0

# Install and enable PDO MySQL PDO SQLite and PDO PostgreSQL extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite pdo_pgsql && \
    a2enmod rewrite

# Set the DocumentRoot to the 'public' directory
RUN sed -i -e 's!/var/www/html!/var/www/html/inspire/public!g' /etc/apache2/sites-available/000-default.conf

# Enable the rewrite module for Apache
RUN a2enmod rewrite

# Expose port 80 for Apache
EXPOSE 80

# Start Apache server in the foreground
CMD ["apache2-foreground"]
