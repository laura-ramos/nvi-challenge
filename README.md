NVI CHALLENGE
==================

## Start Here

### Install Docksal

[Install docksal](https://docksal.io/installation)

[Read more about Docksal](https://docs.docksal.io/)

### Leanr Sass
[Sass guide](https://sass-lang.com/guide)

### Git Guide
https://rogerdudler.github.io/git-guide/

### Instrucciones


1. Clone the repo to `~/nvi-challenge`.
1. cd `~`
1. `git clone git@github.com:jmsv23/nvi-challenge.git`
1. Once the clone is finished cd to the new directory
1. cd `~/nvi-challenge`
1. Run `fin init` to build the codebase.
1. `fin bash`
1. `cd blog`
1. `composer install`
1. `cp .env.example .env`
1. Load http://challenge.docksal/ in a browser to view the homepage.
1. Leer la seccion de frontend.

### Basic commands
1. `fin init` - Initialize all the environment removing all the containers and folders.
1. `fin start` or `fin up` - Start the environment.
1. `fin restart` - Restart containers without remove the containers.
1. `fin bash` - Get into the container to execute `php artisan` command

**Note:** https://docs.docksal.io/fin/fin/

### Using Laravel Artisan

To use laravel artisan cli:

1. Get into the container cli with `fin bash`
1. inside the container navigate to the store folder `cd blog`
1. run `php artisan list`

### Install composer packages

1. `fin bash`
1. `cd blog`
1. `composer install`

### Fronted

Usando la configuracion que laravel provee como parte de su [Compiling Assets](https://laravel.com/docs/5.8/mix) seguiremos los siguientes pasos para compilar los assets para nuestro frontend.

1. `fin bash`
1. `cd blog`
1. `npm install`
1. `npm run dev`

Esto compilara `app.css` archivos el la carpeta `public/css` 

Estos archivos son resultante de la compilacion de los respectivos source files dentro de la carpeta `resources`.
