**How to test**

* First download this php project doing just: `git clone git@github.com:Alexandre46/php-test.git`
* Enter that project folder: `cd php-test`
* copy current env file (due to gitignore .env wasn't on repo): `cp .env.example .env`
* Created laravel with Sail (Docker container already) to run just run: `./vendor/bin/sail up -d` (Running containers dettached in background) Check those containers running `docker ps | grep php-test` *
* Open your browser to see this data: http://localhost:3010 (docker-compose port mapping 3010 to http service 80 - can change that port if you need another)
* Check about those goals, feedback is appreciated

 
 *Will see something similar to

![Screenshot 2021-09-12 at 22.32.31.png](:/73b3d48f5868481c95b9407839f0f440)


How to check PHPUnit tests ?
* inside project container just run: `php artisan test` or can be as `vendor/bin/phpunit`


### Info about Stack used ###

* Docker / docker-compose
* Laravel 8.6
* PHP 8
* MySQL 8
* git

**Possible Errors**

Composer memory limit (If you reach composer memory limit) just run inside project folder where composer is located: **COMPOSER_MEMORY_LIMIT=-1 php -d memory_limt=-1 $(which composer) install**
