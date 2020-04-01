ARG PHP_VERSION=7.3
FROM php:${PHP_VERSION}-cli

ENV LC_ALL=C.UTF-8

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
RUN install-php-extensions bcmath  \
    intl msgpack odbc pcntl pdo_odbc  shmop soap \
    sockets  sysvmsg sysvsem sysvshm xdebug xmlrpc xsl zip

RUN curl --silent --show-error https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

WORKDIR "/var/www/app"