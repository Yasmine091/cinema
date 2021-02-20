## Guide d'installation
* Pour installer et configurer le site, fais ceci dans le terminal :
```
    git clone git@gitlab.com:Yasmine091/cinema.git
    cd cinema/
    composer install
    cp .env.example .env
```
* Configure le fichier .env
* Fais l'installation des frameworks
* Puis reviens au terminal et fais ceci :
```
    composer require laravel/ui
    php artisan ui vue --auth
    composer require encore/laravel-admin
    php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider
    php artisan admin:install
    npx mix
    php artisan migrate
    php artisan serve
```

## Frameworks
* Laravel
* BootStrap 
* FontAwesome Icons

## Version en ligne
* http://cinema-tchitcha.herokuapp.com/

## Ressources du projet
* Trello : https://trello.com/b/owDJxa4g
* Maquettes: https://gitlab.com/Yasmine091/cinema/-/tree/master/maquettes
* Use Case: https://lucid.app/lucidchart/67f94bdc-a320-4d12-8667-2f6fbe623e3c/view?page=FqmdDlvRQNwj#
* MPD: https://lucid.app/lucidchart/67f94bdc-a320-4d12-8667-2f6fbe623e3c/view?page=0_0#