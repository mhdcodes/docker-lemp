FROM php:8.3-fpm

# Optional, force UTC as server time
RUN echo "UTC" > /etc/timezone

# Install system dependencies
RUN apt-get update && apt-get install -y \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  libsqlite3-dev \
  libssl-dev \
  libzip-dev \
  git \
  curl \
  zip \
  unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions via docker
RUN docker-php-ext-install -j$(nproc) \
  mysqli \
  pdo_mysql \
  pdo_sqlite \
  bcmath \
  mbstring \
  xml \
  exif \
  intl \
  pcntl

# Install extensions via PECL
# RUN pecl install \
#   igbinary \
#   imagick \
#   imap \
#   memcached \
#   msgpack \
#   pcov \
#   redis \
#   sqlite3 \
#   swoole \
#   xdebug \
#   zip

# Set working directory
WORKDIR /var/www

# Expose ports if needed
EXPOSE 9000

# Start PHP-FPM service
CMD ["php-fpm"]
