Lumen micro-framework lessons
=============================

This is test project for learning of Lumen micro-framework.

Create lumen project
--------------------
#### Create project via lumen installer:

install lumen installer
```
composer global require "laravel/lumen-installer"
```

create project
```
~/.composer/vendor/bin lumen new project-name
```

#### Or create project via composer:
```
composer create-project --prefer-dist laravel/lumen project-name
```

#### Next step you should to install composer packages
```
cd project-name && composer install
```

Migrations
----------
#### Create migration
```
./artisan make:migration create_table_name
```

#### Apply migrations
```
./artisan migrate
```

#### Re-apply migrations
```
./artisan migrate:refresh
```