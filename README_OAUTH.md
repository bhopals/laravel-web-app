### Authentication OAUTH setup

##### Add Passport

-   Install Passport via Composer Package Manager

    -   `composer require laravel/passport`

-   Run DB Migration
    `php artisan migrate`

-   Install passport to get the scaffolding setup for passport
    `php artisan passport:install`

    Encryption keys generated successfully.
    Personal access client created successfully.
    Client ID: 1
    Client secret: v4acE4MO2zHe6y95KmE3N7MYG5TGCsWrPQ67MGTL
    Password grant client created successfully.
    Client ID: 2
    Client secret: O9p3OyrbQnLDHTgop6Wljm5k9NusQwfAWRbzADTg

REFERENCE - https://laravel.com/docs/9.x/passport#installation

#### Add Client

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
    -   Use Token Retrieved from the Last Call and Send the Request.
    -   You should be able to retrieve CLIENT Records
