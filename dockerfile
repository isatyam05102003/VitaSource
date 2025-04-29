# Use official PHP image with extensions
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing app
COPY . .

# Install PHP dependencies
RUN composer install

# Permissions
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www/storage

# Expose port 9000
EXPOSE 9000

CMD ["php-fpm"]


