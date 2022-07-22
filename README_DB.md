### Database

#### Setup

-   Update the `.env` file with DataBase Connection details
-   Example
    -   DB_CONNECTION=mysql
    -   DB_HOST=<host>
    -   DB_PORT=3306
    -   DB_DATABASE=<db-name>
    -   DB_USERNAME=<user-name>
    -   DB_PASSWORD=<password>

#### Migration

-   Create new Table using Migration
    `php artisan make:migration create_<table-name>_table`
    Example: table name `apps`
    `php artisan make:migration create_apps_table`

-   Run the Migration
    `php artisan migrate`

-   Reset the Migration
    `php artisan migrate:fresh`

-   More Migration Commands
    `php artisan make:migration` Create a new migration file
    `php artisan migrate:fresh` Drop all tables and re-run all migrations
    `php artisan migrate:install` Create the migration repository
    `php artisan migrate:refresh` Reset and re-run all migrations
    `php artisan migrate:reset ` Rollback all database migrations
    `php artisan migrate:rollback` Rollback the last database migration
    `php artisan migrate:status` Show the status of each migration

Reference:

-   For more commands type `php artisan`
-   https://laravel.com/docs/9.x/database (Docs)
-   https://www.youtube.com/watch?v=1Zyr-xi4bPk (DB Migration)
