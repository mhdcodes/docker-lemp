FROM php:8.3-fpm-alpine

# Optional, force UTC as server time
RUN echo "UTC" > /etc/timezone

# Install system dependencies
RUN apk add --no-cache \
  zip \
  unzip \
  git \
  curl

# Install PHP extensions
RUN docker-php-ext-install -j$(nproc) \
  pdo \
  pdo_mysql

# Set working directory
WORKDIR /var/www

# Expose ports if needed
EXPOSE 9000

# Start PHP-FPM service
CMD ["php-fpm"]
