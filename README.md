**How to test**

* First download this php project doing just: `git clone git@github.com:Alexandre46/php-test.git`
* Enter that project folder: `cd php-test`
* copy current env file (due to gitignore .env wasn't on repo): `cp .env.example .env`
* Install PHP dependencies with: `composer install`
* Created laravel with Sail (Docker container already) to run just run: `./vendor/bin/sail up -d` (Running containers dettached in background) Check those containers running `docker ps | grep php-test` *
* Open your browser to see this data: http://localhost:3010 (docker-compose port mapping 3010 to http service 80 - can change that port if you need another)
* Click on center on link to see some info about shapes objects i've created to test.
<img width="1437" alt="Screenshot 2021-09-13 at 00 34 42" src="https://user-images.githubusercontent.com/13085956/133006256-cfbda684-09a7-4196-90c9-8dc575f14b64.png">

* Check about those goals, feedback is appreciated

 
 *Will see something similar to

<img width="1437" alt="Screenshot 2021-09-13 at 00 33 18" src="https://user-images.githubusercontent.com/13085956/133006204-87a55e3b-1a3d-44c1-887d-8f0814d308a4.png">



### How to check PHPUnit tests ###
* inside project container just run: `php artisan test` or can be as `vendor/bin/phpunit`

<img width="698" alt="Screenshot 2021-09-13 at 00 32 48" src="https://user-images.githubusercontent.com/13085956/133006191-cdeb0cfb-6168-41dd-9cf0-480033c60a6c.png">

### Info about Stack used ###

* Docker / docker-compose
* Laravel 8.6
* PHP 8
* MySQL 8
* git

**Possible Errors**

Composer memory limit (If you reach composer memory limit) just run inside project folder where composer is located: **COMPOSER_MEMORY_LIMIT=-1 php -d memory_limt=-1 $(which composer) install**
