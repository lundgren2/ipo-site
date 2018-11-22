# IPO.se

[![Build Status](https://travis-ci.org/lundgren2/ipo-site.svg?branch=master)](https://travis-ci.org/lundgren2/ipo-site)

## Stack

- [Bedrock](https://roots.io/bedrock/)
- [Bedrock](https://roots.io/sage/)
- MySQL
- [Travis CI](https://travis-ci.org/)

## Requirements

- [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`]
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Clone the repo and cd into the folder and run:

`composer install`

2. Update environment variables in `.env` file:

   [Roots WordPress Salt Generator](https://roots.io/salts.html).

3. Set your site vhost document root to `/path/to/site/web/`

4. Access WP admin at `http://example.com/wp/wp-admin`
