# Newspaper test application
Following instruction is valid only for Linux. In case you are using Windows, please install WSL.

## Installation and launch
* Be sure you have installed Docker v. 19+, Docker-compose v. 1.24+ and have `make` util.
* Run `make after-clone` to get Laradock repository into project and `.docker.env` file.
* Run `make build app` to build containers.
* Run `make up app` for containers to up.

After this step application is running, but Laravel is not actually working, so:

* Run `make in` to get into workspace container.
* Run `cp .env.example .env` to prepare environment file (encryption key included).
* Run `composer install` to get packages which are needed for app to exist.
* Run `artisan make:localdb` to create a local database.
* Run `artisan migrate && artisan db:seed` to fill the database with needed data.

In case you did everything correctly the application should be working!