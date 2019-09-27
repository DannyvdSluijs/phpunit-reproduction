FROM php:5.6-fpm
MAINTAINER Danny van der Sluijs <dvandersluijs@monitorlinq.com>
# Install modules
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        libpq-dev \
        libgearman-dev \
        libicu-dev \
        libxml2-dev \
        libxslt-dev \
        zip \
        git \
    && docker-php-ext-install iconv mcrypt pdo pdo_pgsql intl soap bcmath xsl gd\
    && pecl install gearman xdebug\
    && docker-php-ext-enable gearman xdebug \
    && echo "memory_limit = 512M" > /usr/local/etc/php/conf.d/php.ini
COPY xdebug.ini /usr/local/etc/php/conf.d/
CMD ["/usr/local/sbin/php-fpm"]