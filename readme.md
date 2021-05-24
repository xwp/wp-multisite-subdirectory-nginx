# Subdirectory Multisite in a Subdirectory

A proof-of-concept for WordPress subdirectory multisite in a subdirectory of the web root:

- Web server root at `./web`.
- WordPress added as a Composer dependency at `./web/wp`.
- WordPress multisite configured as subdirectory install.

See [`nginx.conf`](nginx.conf) for the relevant Nginx configuration and specifically the rewrite rules.


## Requirements

- Docker
- PHP and Composer


## Setup

1. Install Composer dependencies:

        composer install

2. Start the server environment:

        composer start

3. Setup the WP sub-directory network:

        composer setup

Visit the environment at [subdir.wpenv.net](http://subdir.wpenv.net) or [subdir.wpenv.net:8033](http://subdir.wpenv.net:8033) to view PHPMyAdmin.

Login at [subdir.wpenv.net/wp-login.php](http://subdir.wpenv.net/wp-login.php) using `admin` as username and `password` as password.

Create a new site on the network such as `subdir.wpenv.net/example`:

    composer cli -- wp site create --slug=example

and visit its admin area at [subdir.wpenv.net/example/wp-admin/](http://subdir.wpenv.net/example/wp-admin/) while the site is available at [subdir.wpenv.net/example/](http://subdir.wpenv.net/example/).

