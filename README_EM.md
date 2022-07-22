### Eloquent Models

#### Setup

### Eloquent Models

Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database

#### Generating Model Class

-   Make sure you add some dummy records in your Table - `clients` (For Demo)

```
INSERT INTO apps.clients (name,code,active,`desc`,created_at,updated_at,country) VALUES
	 ('Client 1','AA','Y','First Client',NULL,NULL,'IN'),
	 ('Client 2','BB','Second Client','Second Client',NULL,NULL,'CA');
```

-   Create a Model called `Client`
    `php artisan make:model Client`

    This should create a Model named `Client` in `app/Models` directory

#### Mapping the Model to Database Table

-   Once the model is created, we need to connect that model with the TABLE

        `protected $table = 'clients';`

#### Routing

-   Add Routing in `routes/web.php`
-   Retrieve all - `/clients` mapped to ClientController's `index` method
-   Retrieve By Id - `/client/{id}` mapped to ClientController's `show` method

#### Controller

-   Create a Controller
    `php artisan make:controller ClientController`
    It will create a Controller in `Http/Controllers/`

-   Create Two methods (`index` and `show`)
    `public function index(){...}`
    `public function show(){...}`

-   Import Model (`Client`)
    `use App\Client;`
