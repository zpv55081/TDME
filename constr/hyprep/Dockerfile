FROM phpdockerio/php:8.2-fpm

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php8.2-ctype \
    php8.2-curl \
    php8.2-dom \
    php8.2-fileinfo \
    ### https://php.ru/manual/filter.installation.html
    ### https://www.php.net/manual/ru/hash.installation.php
    php8.2-mbstring \
    ### https://www.php.net/manual/ru/openssl.installation.php
    ### https://www.php.net/manual/ru/pcre.installation.php
    php8.2-pdo \
    php8.2-pgsql \
    php8.2-redis \
    php8.2-tokenizer \
    php8.2-xml \
	php8.2-xdebug\
    php-pear \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

COPY 20-xdebug.ini /etc/php/8.2/fpm/conf.d/20-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data

WORKDIR /var/www

EXPOSE 9000
