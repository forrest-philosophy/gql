FROM php:8.3-fpm-bullseye

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libfreetype-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && rm -rf /var/lib/apt/lists/*

# Download PHP source files
RUN docker-php-source extract \
    # Install PHP extensions
    && docker-php-ext-install pdo_mysql opcache iconv pcntl gd \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd \
    # Clean up source files
    && docker-php-source delete

# Set working directory
WORKDIR /var/www

# Set permissions
RUN chown -R www-data:www-data /var/www

EXPOSE 9000
CMD ["php-fpm"] 