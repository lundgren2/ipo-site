# IPO.se

[![Build Status](https://travis-ci.org/lundgren2/ipo-site.svg?branch=master)](https://travis-ci.org/lundgren2/ipo-site)

## Stack

- [Bedrock](https://roots.io/bedrock/)
- [Bedrock](https://roots.io/sage/)
- MySQL
- [Travis CI](https://travis-ci.org/)

## Requirements

- PHP >= 5.6
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## Installation

1. Clone the repo and cd into the folder and run:

`composer install`

2. Update environment variables in `.env` file:

- `DB_NAME` - Database name
- `DB_USER` - Database user
- `DB_PASSWORD` - Database password
- `DB_HOST` - Database host
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (http://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`

If you want to automatically generate the security keys (assuming you have wp-cli installed locally) you can use the very handy [wp-cli-dotenv-command][wp-cli-dotenv]:

      wp package install aaemnnosttv/wp-cli-dotenv-command

      wp dotenv salts regenerate

Or, you can cut and paste from the [Roots WordPress Salt Generator][roots-wp-salt].

4. Set your site vhost document root to `/path/to/site/web/` (`/path/to/site/current/web/` if using deploys)

5. Access WP admin at `http://example.com/wp/wp-admin`
