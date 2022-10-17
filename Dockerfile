# base php image
FROM php:8.1-cli-alpine3.16 as php

# with composer
FROM php as composer
RUN apk add --no-cache git curl
ENV COMPOSER_MEMORY_LIMIT -1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
COPY --from=composer:2.4.1 /usr/bin/composer /usr/bin/composer
