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
    `php artisan migrate:reset` Rollback all database migrations
    `php artisan migrate:rollback` Rollback the last database migration
    `php artisan migrate:status` Show the status of each migration

#### Add Custom Table in Migration

-   Create New Table in migration (`clients` table)
    `php artisan make:migration create_clients_table`

-   Modify the genrated migrations (database/migration/...)

    ```
    Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('code');
        $table->string('active');
        $table->string('desc');
        $table->timestamps();
    });
    ```

-   To add more columns to the table
    `php artisan make:migration add_country_to_clients_table`
    And then go the generated migration file and add this
    `$table->string('country');`

-   Once you are done adding custom migration
    `php artisan migration:status` - Retruns the current status of the migration
    `php artisan migrate` - Migrate everything to the DB

#### Delete migration

`php artisan migrate:reset` - Reset ALL
`php artisan migrate:rollback` - Rollback the last one

Reference:

-   For more commands type `php artisan`
-   https://laravel.com/docs/9.x/database (Docs)
