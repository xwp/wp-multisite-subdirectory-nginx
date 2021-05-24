FROM wordpress:php7.4-fpm

# Include our Composer vendor binary path into global path.
ENV PATH "/var/www/site/vendor/bin:${PATH}"

RUN apt-get update; \
	apt-get install -y --no-install-recommends \
	# Deploy dependencies.
	curl git bash less rsync \
	# WP-CLI dependencies.
	default-mysql-client git \
	# MailHog dependencies.
	msmtp

# Install Composer.
RUN curl -s https://getcomposer.org/installer | php \
	-- --install-dir=/usr/local/bin --filename=composer --1

# Setup xdebug and redis.
RUN	pecl install xdebug-2.9.8 redis-5.3.4; \
	docker-php-ext-enable xdebug redis
