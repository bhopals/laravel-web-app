### AUTH

### Prerequisite

-   Install UI package

    -   `composer require laravel/ui`

-   Use the ui package to generate boilerplate ui elements

    -   `php artisan ui vue --auth`
    -   `npm install && npm run dev`

-   You should be able to see Login / Register Link on the top of the webpage

#### AUTHORIZATION

-   To protect routes, there are two ways

-   1. Restrict specefic ROUTES

    -   Append `-> middleware('auth')` at the end of Routes
    -   Example:
        `Route::get('/clients', 'App\Http\Controllers\ClientController@index')->name('clients.index')->middleware('auth');`

-   2. Restrict and Protect all the Methods in Controller
    -   Add \_\_construct method in Controller
    -   Example:
        `public function __construct(){ $this->middleware('auth'); }`

#### AUTHENTICATION

-   Login
-   Register

-   To Disable Registeration
    -   Deregister `register` route
        `Auth::routes(['register' => false]);`
