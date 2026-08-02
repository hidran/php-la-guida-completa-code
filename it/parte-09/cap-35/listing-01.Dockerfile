FROM php:8.5-fpm-alpine AS runtime

RUN set -eux; \
    apk add --no-cache icu-libs; \
    apk add --no-cache --virtual .build icu-dev linux-headers $PHPIZE_DEPS; \
    docker-php-ext-install -j"$(nproc)" pdo_mysql intl; \
    pecl install redis; \
    docker-php-ext-enable redis; \
    apk del .build
