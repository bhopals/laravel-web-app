### Passport Authentication

#### Install Passport packages and dependencies

-   Install Passport via Composer Package Manager

    -   `composer require laravel/passport`

-   Run DB Migration
    `php artisan migrate`

-   Install passport to get the scaffolding setup for passport
    `php artisan passport:install`

REFERENCE - https://laravel.com/docs/9.x/passport#installation

#### Configuration

-   User.php

    -   Add Passport dependency on the top `use Laravel\Passport\HasApiTokens;` (Line 10)
    -   Refer `HasApiTokens` in the code - `use HasApiTokens` (Line 15)

-   AuthServiceProvider.php

    -   Add Passport Dependency `use Laravel\Passport\Passport;` (Line 7)
    -   Update the `boot` method to have `Passport::routes();` (Line 28)

-   auth.php

    -   Update API Driver in `config/auth.php`

    ```
    'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ]
    ```

-   UserController
    -   Add UserController to `register`, `login` User (Refer `UserController`)
    -   Add Routes for API (Refer `routes/api.php`)

REFERENCE - https://laravel.com/docs/9.x/passport#configuration

#### Test API Endpoints

-   You can use POSTMAN (https://www.postman.com/) for API Requests.
-   Once Deployed, the URL `127.0.0.1:8000` will be replaved with the Deployed URL

-   Testing STEPS

    -   Register Client
        POST http://127.0.0.1:8000/api/register

        ```
        {
            "name": "postman",
            "email": "postman@test.com",
            "password": "postman123456",
            "c_password": "postman123456"
        }
        ```

    -   Login Client

        POST http://127.0.0.1:8000/api/login

        ```
        {
            "name": "postman",
            "email": "postman@test.com",
        }
        ```

    -   Call API (Retrieve Records)
        -   GET http://127.0.0.1:8000/api/clients
        -   Select Authorization BEARER TOKEN TYPE
        -   Use Token Retrieved from the Calls above (Register or Login) and Send the Request.
        -   You should be able to retrieve CLIENT Records
