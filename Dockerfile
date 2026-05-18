FROM php:8.4-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html/web \
    COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y --no-install-recommends \
    default-mysql-client \
    git \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    unzip \
  && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
  && docker-php-ext-install -j"$(nproc)" gd intl opcache pdo_mysql zip \
  && a2enmod rewrite headers expires \
  && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
COPY assets ./assets
RUN composer install --no-interaction --prefer-dist --no-progress --optimize-autoloader

COPY . .
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf
COPY docker/entrypoint.sh /usr/local/bin/fairview-entrypoint

RUN composer install --no-interaction --prefer-dist --no-progress --optimize-autoloader \
  && mkdir -p web/sites/default/files \
  && find web vendor -type d -exec chmod 755 {} \; \
  && find web vendor -type f -exec chmod 644 {} \; \
  && chown -R www-data:www-data web/sites/default vendor web/modules web/themes \
  && chmod +x /usr/local/bin/fairview-entrypoint

ENTRYPOINT ["fairview-entrypoint"]
CMD ["apache2-foreground"]
