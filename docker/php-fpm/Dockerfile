FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    curl \
    libzip-dev \
    libpng-dev \
    jpeg-dev \
    freetype-dev \
    git \
    supervisor \
    nginx

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip exif pcntl gd opcache

# For Redis (if you use it)
# RUN pecl install redis \
#     && docker-php-ext-enable redis

# For Xdebug (Optional - useful for debugging)
# RUN pecl install xdebug \
#     && docker-php-ext-enable xdebug

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy php.ini for custom configurations
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Expose port for PHP-FPM
EXPOSE 9000

# Default command to run PHP-FPM
CMD ["php-fpm"]